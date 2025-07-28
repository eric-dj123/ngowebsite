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
  $id = $_POST['id'] ?? null;
  $title = trim($_POST['title']);

  $imagePath = '';
  if (!empty($_FILES['image']['name'])) {
    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);
    $imagePath = time() . '_' . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $uploadDir . $imagePath);
  }

  if ($action === 'add') {
    if ($imagePath) {
      $stmt = $conn->prepare("INSERT INTO images (image, title) VALUES (?, ?)");
      $stmt->bind_param("ss", $imagePath, $title);
      $toast = $stmt->execute() ? "✅ Image uploaded!" : "❌ Upload failed!";
    }
  } elseif ($action === 'edit' && $id) {
    if ($imagePath) {
      $stmt = $conn->prepare("UPDATE images SET image=?, title=? WHERE id=?");
      $stmt->bind_param("ssi", $imagePath, $title, $id);
    } else {
      $stmt = $conn->prepare("UPDATE images SET title=? WHERE id=?");
      $stmt->bind_param("si", $title, $id);
    }
    $toast = $stmt->execute() ? "✅ Image updated!" : "❌ Update failed!";
  }
}

if (isset($_GET['delete'])) {
  $id = intval($_GET['delete']);
  $stmt = $conn->prepare("DELETE FROM images WHERE id=?");
  $stmt->bind_param("i", $id);
  if ($stmt->execute()) {
    header("Location: images.php?toast=deleted");
    exit;
  }
}

if (isset($_GET['toast']) && $_GET['toast'] === 'deleted') {
  $toast = "✅ Image deleted!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Image Gallery - GURD</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
</head>
<body class="bg-gray-100 font-sans">
<div class="flex min-h-screen">
  <?php include "includes/aside.php"; ?>
 <!-- Main content -->
    <main class="flex-1 flex flex-col">

      <?php
include "includes/navbar.php"
?>



    <?php if (!empty($toast)) : ?>
      <div id="toast" class="m-6 p-3 bg-green-100 text-green-800 rounded shadow"><?= $toast ?></div>
      <script>setTimeout(() => document.getElementById("toast").remove(), 3000);</script>
    <?php endif; ?>

    <div class="p-6">
      <div class="bg-white p-6 rounded-lg shadow">
        <div class="flex justify-between mb-4">
          <h2 class="text-lg font-semibold text-gray-700">Image List</h2>
          <button onclick="document.getElementById('addModal').classList.remove('hidden')" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ Upload Image</button>
        </div>

        <table id="imageTable" class="w-full text-sm text-left">
          <thead class="bg-gray-50 text-gray-600">
            <tr>
              <th class="px-3 py-2">#</th>
              <th class="px-3 py-2">Image</th>
              <th class="px-3 py-2">Title</th>
              <th class="px-3 py-2">Created At</th>
              <th class="px-3 py-2">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $res = $conn->query("SELECT * FROM images ORDER BY id DESC");
          $i = 1;
          while ($row = $res->fetch_assoc()):
          ?>
            <tr class="border-t">
              <td class="px-3 py-2"><?= $i++ ?></td>
              <td class="px-3 py-2"><img src="uploads/<?= $row['image'] ?>" alt="Image" class="h-16 rounded"></td>
              <td class="px-3 py-2"><?= $row['title'] ?></td>
              <td class="px-3 py-2"><?= $row['created_at'] ?></td>
              <td class="px-3 py-2">
                <button onclick="openEditModal('<?= $row['id'] ?>', '<?= $row['title'] ?>')" class="text-indigo-600 hover:underline">Edit</button>
                <a href="?delete=<?= $row['id'] ?>" onclick="return confirm('Delete this image?')" class="text-red-600 hover:underline ml-2">Delete</a>
              </td>
            </tr>
          <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Add Modal -->
    <div id="addModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
      <div class="bg-white p-6 rounded-lg shadow-xl w-full max-w-md">
        <h2 class="text-xl font-bold mb-4">Upload New Image</h2>
        <form method="POST" enctype="multipart/form-data">
          <input type="hidden" name="action" value="add">
          <div class="mb-4">
            <label class="block text-sm mb-1">Image</label>
            <input type="file" name="image" required class="w-full border px-3 py-2 rounded">
          </div>
          <div class="mb-4">
            <label class="block text-sm mb-1">Title</label>
            <input name="title" class="w-full border px-3 py-2 rounded">
          </div>
          <div class="flex justify-end">
            <button type="button" onclick="document.getElementById('addModal').classList.add('hidden')" class="mr-2 px-4 py-2 rounded border">Cancel</button>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Upload</button>
          </div>
        </form>
      </div>
    </div>

    <!-- Edit Modal -->
    <div id="editModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
      <div class="bg-white p-6 rounded-lg shadow-xl w-full max-w-md">
        <h2 class="text-xl font-bold mb-4">Edit Image Title</h2>
        <form method="POST" enctype="multipart/form-data">
          <input type="hidden" name="action" value="edit">
          <input type="hidden" name="id" id="edit_id">
          <div class="mb-4">
            <label class="block text-sm mb-1">Title</label>
            <input name="title" id="edit_title" class="w-full border px-3 py-2 rounded">
          </div>
          <div class="mb-4">
            <label class="block text-sm mb-1">Change Image (optional)</label>
            <input type="file" name="image" class="w-full border px-3 py-2 rounded">
          </div>
          <div class="flex justify-end">
            <button type="button" onclick="document.getElementById('editModal').classList.add('hidden')" class="mr-2 px-4 py-2 rounded border">Cancel</button>
            <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded">Update</button>
          </div>
        </form>
      </div>
    </div>

    <footer class="bg-white text-sm text-gray-500 px-6 py-4 border-t">
      <span>2025 &copy; GURD.</span>
    </footer>
  </main>
</div>

<script>
  $(document).ready(function () {
    $('#imageTable').DataTable();
  });

  function openEditModal(id, title) {
    document.getElementById('edit_id').value = id;
    document.getElementById('edit_title').value = title;
    document.getElementById('editModal').classList.remove('hidden');
  }
</script>
</body>
</html>
