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
  $action = $_POST['action'] ?? 'add';
  $id = $_POST['id'] ?? null;
  $image = '';

  if (in_array($action, ['add', 'edit'])) {
    $name = trim($_POST['name'] ?? '');
    $post = $_POST['post'] ?? '';

    if (!empty($_FILES['image']['name'])) {
      $uploadDir = 'uploads/';
      if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);
      $image = time() . '_' . basename($_FILES['image']['name']);
      move_uploaded_file($_FILES['image']['tmp_name'], $uploadDir . $image);
    }
  }

  if ($action === 'edit' && $id) {
    $query = $image ?
      "UPDATE teams SET name=?, post=?, image=?, updated_at=NOW() WHERE id=?" :
      "UPDATE teams SET name=?, post=?, updated_at=NOW() WHERE id=?";
    $stmt = $conn->prepare($query);
    if ($image) $stmt->bind_param("sssi", $name, $post, $image, $id);
    else $stmt->bind_param("ssi", $name, $post, $id);
    $toast = $stmt->execute() ? "✅ Team member updated!" : "❌ Update failed!";
  } elseif ($action === 'delete' && $id) {
    $stmt = $conn->prepare("DELETE FROM teams WHERE id=?");
    $stmt->bind_param("i", $id);
    $toast = $stmt->execute() ? "✅ Team member deleted!" : "❌ Deletion failed!";
  } elseif ($action === 'add') {
    $stmt = $conn->prepare("INSERT INTO teams (name, post, image, created_at, updated_at) VALUES (?, ?, ?, NOW(), NOW())");
    $stmt->bind_param("sss", $name, $post, $image);
    $toast = $stmt->execute() ? "✅ Team member added!" : "❌ Addition failed!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Team Management - GURD</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</head>
<body class="bg-gray-100">
<div class="flex min-h-screen">
  <?php include 'includes/aside.php'; ?>
   <!-- Main content -->
    <main class="flex-1 flex flex-col">

      <?php
include "includes/navbar.php"
?>

    <header class="flex justify-between items-center p-6 bg-white shadow">
      <h1 class="text-2xl font-bold text-gray-700">Team Members</h1>
      <button onclick="openTeamModal()" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ Add Member</button>
    </header>

    <?php if (!empty($toast)) : ?>
      <div class="m-4 p-3 bg-green-100 text-green-800 rounded shadow"><?= $toast ?></div>
    <?php endif; ?>

    <section class="p-6">
      <div class="bg-white p-6 rounded-lg shadow">
        <table id="teamTable" class="w-full">
          <thead>
            <tr class="bg-gray-100">
              <th class="px-4 py-2">#</th>
              <th class="px-4 py-2">Name</th>
              <th class="px-4 py-2">Post</th>
              <th class="px-4 py-2">Image</th>
              <th class="px-4 py-2">Created</th>
              <th class="px-4 py-2">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $res = $conn->query("SELECT * FROM teams ORDER BY id ASC");
          $i = 1;
          while ($row = $res->fetch_assoc()) : ?>
            <tr class="border-t">
              <td class="px-4 py-2"><?= $i++ ?></td>
              <td class="px-4 py-2"><?= htmlspecialchars($row['name']) ?></td>
              <td class="px-4 py-2"><?= htmlspecialchars($row['post']) ?></td>
              <td class="px-4 py-2">
                <?php if ($row['image']) : ?>
                  <img src="uploads/<?= htmlspecialchars($row['image']) ?>" class="h-12 w-12 rounded-full">
                <?php else : ?> N/A <?php endif; ?>
              </td>
              <td class="px-4 py-2 text-sm text-gray-500"><?= $row['created_at'] ?></td>
              <td class="px-4 py-2">
                <button class="text-blue-600 hover:underline" onclick='editTeam(<?= json_encode($row) ?>)'>Edit</button>
                <form method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this member?')">
                  <input type="hidden" name="id" value="<?= $row['id'] ?>">
                  <input type="hidden" name="action" value="delete">
                  <button class="text-red-600 hover:underline">Delete</button>
                </form>
              </td>
            </tr>
          <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </section>

    <!-- Team Modal -->
    <div id="teamModal" class="fixed inset-0 hidden bg-black bg-opacity-50 z-50 flex items-center justify-center">
      <form method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-lg w-full max-w-2xl">
        <h2 class="text-xl font-bold mb-4">Team Member Form</h2>
        <input type="hidden" name="action" id="form-action" value="add">
        <input type="hidden" name="id" id="team-id">
        <div class="mb-4">
          <label class="block text-sm">Name</label>
          <input name="name" id="team-name" required class="w-full border px-3 py-2 rounded">
        </div>
        <div class="mb-4">
          <label class="block text-sm">Image</label>
          <input type="file" name="image" class="w-full">
        </div>
        <div class="mb-4">
          <label class="block text-sm">Post</label>
          <textarea name="post" id="team-post" rows="6" class="w-full border px-3 py-2 rounded"></textarea>
        </div>
        <div class="flex justify-end">
          <button type="button" onclick="closeTeamModal()" class="px-4 py-2 rounded border mr-2">Cancel</button>
          <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Save</button>
        </div>
      </form>
    </div>

    <footer class="bg-white text-sm text-gray-500 px-6 py-4 border-t">
      <span>&copy; 2025 GURD.</span>
    </footer>
  </main>
</div>

<!-- Scripts -->
<script>
  $(document).ready(function () {
    $('#teamTable').DataTable({ pageLength: 25 });
    $('#team-post').summernote({ height: 200 });
  });

  function openTeamModal() {
    document.getElementById('teamModal').classList.remove('hidden');
    document.getElementById('form-action').value = 'add';
    document.getElementById('team-id').value = '';
    document.getElementById('team-name').value = '';
    $('#team-post').summernote('code', '');
  }

  function editTeam(data) {
    openTeamModal();
    document.getElementById('form-action').value = 'edit';
    document.getElementById('team-id').value = data.id;
    document.getElementById('team-name').value = data.name;
    $('#team-post').summernote('code', data.post);
  }

  function closeTeamModal() {
    document.getElementById('teamModal').classList.add('hidden');
  }
</script>
</body>
</html>
