      <?php
session_start();
if (!isset($_SESSION['admin_id'])) {
  header("Location: index.php");
  exit();
}
?>
      <?php

include "includes/db.php";

$toast = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $action = $_POST['action'];

  if ($action === 'add_video') {
    $title = $_POST['title'];
    $video_type = $_POST['video_type'];
    $video_path = '';

    if ($video_type === 'upload' && !empty($_FILES['video']['name'])) {
      $video_path = time() . '_' . basename($_FILES['video']['name']);
      move_uploaded_file($_FILES['video']['tmp_name'], 'uploads/' . $video_path);
    } elseif ($video_type === 'youtube') {
      $video_path = $_POST['youtube_url'];
    }

    if ($video_path) {
      $stmt = $conn->prepare("INSERT INTO videos (title, video_type, video_path) VALUES (?, ?, ?)");
      $stmt->bind_param("sss", $title, $video_type, $video_path);
      $toast = $stmt->execute() ? "✅ Video added!" : "❌ Video upload failed!";
    }
  }

  if ($action === 'delete_video') {
    $id = $_POST['id'];
    $stmt = $conn->prepare("DELETE FROM videos WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $toast = "✅ Video deleted!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Video Gallery</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
</head>
<body class="bg-gray-100">
<div class="flex min-h-screen">
  <?php include "includes/aside.php"; ?>

 <!-- Main content -->
    <main class="flex-1 flex flex-col">

      <?php
include "includes/navbar.php"
?>

    

    <?php if (!empty($toast)): ?>
      <div id="toast" class="m-6 p-3 bg-green-100 text-green-800 rounded shadow"> <?= $toast ?> </div>
      <script>setTimeout(() => document.getElementById("toast").remove(), 3000);</script>
    <?php endif; ?>

    <div class="p-6">
      <div class="bg-white p-6 rounded-lg shadow overflow-x-auto">
        <div class="flex justify-between items-center mb-4">
          <h2 class="text-lg font-semibold text-gray-700">Video List</h2>
          <button onclick="document.getElementById('addVideoModal').classList.remove('hidden')" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">+ Add Video</button>
        </div>

        <table id="videoTable" class="min-w-full text-sm text-left">
          <thead class="bg-gray-100 text-gray-700">
            <tr>
              <th class="px-3 py-2">#</th>
              <th class="px-3 py-2">Title</th>
              <th class="px-3 py-2">Type</th>
              <th class="px-3 py-2">Preview</th>
              <th class="px-3 py-2">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $res = $conn->query("SELECT * FROM videos ORDER BY id DESC"); $i = 1;
            while ($row = $res->fetch_assoc()): ?>
            <tr class="border-t hover:bg-gray-50">
              <td class="px-3 py-2"><?= $i++ ?></td>
              <td class="px-3 py-2"><?= htmlspecialchars($row['title']) ?></td>
              <td class="px-3 py-2"><?= htmlspecialchars($row['video_type']) ?></td>
              <td class="px-3 py-2">
                <?php if ($row['video_type'] === 'upload'): ?>
                  <video src="uploads/<?= htmlspecialchars($row['video_path']) ?>" controls class="w-48 h-auto rounded shadow"></video>
                <?php else: ?>
                  <iframe width="200" height="100" src="https://www.youtube.com/embed/<?= explode('v=', $row['video_path'])[1] ?>" class="rounded shadow" allowfullscreen></iframe>
                <?php endif; ?>
              </td>
              <td class="px-3 py-2">
                <form method="POST" onsubmit="return confirm('Are you sure you want to delete this video?');">
                  <input type="hidden" name="action" value="delete_video">
                  <input type="hidden" name="id" value="<?= $row['id'] ?>">
                  <button class="text-red-600 hover:underline">Delete</button>
                </form>
              </td>
            </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Modal -->
    <div id="addVideoModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden overflow-y-auto">
      <div class="bg-white p-6 rounded-lg shadow-xl w-full max-w-md">
        <h2 class="text-xl font-bold mb-4">Add Video</h2>
        <form method="POST" enctype="multipart/form-data">
          <input type="hidden" name="action" value="add_video">
          <div class="mb-4">
            <label class="block text-sm mb-1">Title</label>
            <input name="title" required class="w-full border px-3 py-2 rounded">
          </div>
          <div class="mb-4">
            <label class="block text-sm mb-1">Video Type</label>
            <select name="video_type" onchange="toggleVideoInput(this.value)" class="w-full border px-3 py-2 rounded">
              <option value="upload">Upload</option>
              <option value="youtube">YouTube</option>
            </select>
          </div>
          <div class="mb-4" id="uploadInput">
            <label class="block text-sm mb-1">Upload Video</label>
            <input type="file" name="video" class="w-full border px-3 py-2 rounded">
          </div>
          <div class="mb-4 hidden" id="youtubeInput">
            <label class="block text-sm mb-1">YouTube URL</label>
            <input type="text" name="youtube_url" class="w-full border px-3 py-2 rounded" placeholder="e.g., https://www.youtube.com/watch?v=abc123">
          </div>
          <div class="flex justify-end">
            <button type="button" onclick="document.getElementById('addVideoModal').classList.add('hidden')" class="mr-2 px-4 py-2 rounded border">Cancel</button>
            <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded">Add</button>
          </div>
        </form>
      </div>
    </div>

    <footer class="bg-white text-sm text-gray-500 px-6 py-4 border-t text-center">
      2025 &copy; GURD
    </footer>
  </main>
</div>

<script>
  $(document).ready(function () {
    $('#videoTable').DataTable();
  });
  function toggleVideoInput(val) {
    document.getElementById('uploadInput').classList.toggle('hidden', val === 'youtube');
    document.getElementById('youtubeInput').classList.toggle('hidden', val === 'upload');
  }
</script>
</body>
</html>
