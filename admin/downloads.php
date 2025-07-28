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

// Handle CREATE or UPDATE
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $action = $_POST['action'] ?? '';
  $title = trim($_POST['title']);
  $file_type = '';
  $filename = '';

  if (!empty($_FILES['document']['name'])) {
    $file_type = pathinfo($_FILES['document']['name'], PATHINFO_EXTENSION);
    $allowed = ['pdf', 'doc', 'docx', 'ppt', 'pptx'];
    if (!in_array(strtolower($file_type), $allowed)) {
      $toast = "❌ Only PDF, DOC, DOCX, PPT allowed!";
    } else {
      $filename = time() . '_' . basename($_FILES['document']['name']);
      $uploadPath = 'uploads/' . $filename;
      move_uploaded_file($_FILES['document']['tmp_name'], $uploadPath);
    }
  }

  if ($action === 'add') {
    if ($filename) {
      $stmt = $conn->prepare("INSERT INTO downloads (title, file_path, file_type) VALUES (?, ?, ?)");
      $stmt->bind_param("sss", $title, $filename, $file_type);
      $toast = $stmt->execute() ? "✅ Document uploaded!" : "❌ Upload failed!";
    }
  } elseif ($action === 'edit') {
    $id = $_POST['id'];
    if ($filename) {
      $stmt = $conn->prepare("UPDATE downloads SET title=?, file_path=?, file_type=? WHERE id=?");
      $stmt->bind_param("sssi", $title, $filename, $file_type, $id);
    } else {
      $stmt = $conn->prepare("UPDATE downloads SET title=? WHERE id=?");
      $stmt->bind_param("si", $title, $id);
    }
    $toast = $stmt->execute() ? "✅ Document updated!" : "❌ Update failed!";
  }
}

// Handle DELETE
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $stmt = $conn->prepare("DELETE FROM downloads WHERE id=?");
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $toast = "✅ Document deleted!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document Downloads</title>
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

  <main class="flex-1">
    <header class="flex justify-between items-center px-6 py-4 bg-white shadow">
      <h1 class="text-2xl font-bold text-gray-800">Manage Documents</h1>
      <button onclick="openAddModal()" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">+ Add Document</button>
    </header>

    <?php if (!empty($toast)): ?>
      <div class="m-6 p-3 bg-green-100 text-green-800 rounded shadow"> <?= $toast ?> </div>
      <script>setTimeout(() => document.getElementById("toast")?.remove(), 3000);</script>
    <?php endif; ?>

    <div class="p-6">
      <div class="bg-white p-6 rounded shadow overflow-x-auto">
        <table id="docTable" class="min-w-full text-sm text-left">
          <thead class="bg-gray-100 text-gray-700">
            <tr>
              <th class="px-3 py-2">#</th>
              <th class="px-3 py-2">Title</th>
              <th class="px-3 py-2">Type</th>
              <th class="px-3 py-2">Uploaded</th>
              <th class="px-3 py-2">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $res = $conn->query("SELECT * FROM downloads ORDER BY id DESC"); $i = 1;
            while ($row = $res->fetch_assoc()):
            ?>
            <tr class="border-t hover:bg-gray-50">
              <td class="px-3 py-2"><?= $i++ ?></td>
              <td class="px-3 py-2"><?= htmlspecialchars($row['title']) ?></td>
              <td class="px-3 py-2 uppercase"><?= $row['file_type'] ?></td>
              <td class="px-3 py-2"><?= $row['uploaded_at'] ?></td>
              <td class="px-3 py-2 space-x-3">
                <a href="uploads/<?= $row['file_path'] ?>" download class="text-blue-600 hover:underline">Download</a>
                <button onclick='openEditModal(<?= json_encode($row) ?>)' class="text-yellow-600 hover:underline">Edit</button>
                <a href="?delete=<?= $row['id'] ?>" onclick="return confirm('Delete this document?')" class="text-red-600 hover:underline">Delete</a>
              </td>
            </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Modal -->
    <div id="modal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
      <div class="bg-white p-6 rounded shadow-lg w-full max-w-md">
        <h2 class="text-xl font-bold mb-4" id="modalTitle">Add Document</h2>
        <form method="POST" enctype="multipart/form-data">
          <input type="hidden" name="action" value="add" id="formAction">
          <input type="hidden" name="id" id="docId">

          <div class="mb-4">
            <label class="block text-sm">Title</label>
            <input type="text" name="title" id="docTitle" required class="w-full border px-3 py-2 rounded">
          </div>

          <div class="mb-4">
            <label class="block text-sm">Select Document</label>
            <input type="file" name="document" class="w-full border px-3 py-2 rounded">
          </div>

          <div class="flex justify-end">
            <button type="button" onclick="closeModal()" class="px-4 py-2 rounded border mr-2">Cancel</button>
            <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded">Save</button>
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
  $(document).ready(() => $('#docTable').DataTable());

  function openAddModal() {
    document.getElementById('modalTitle').innerText = "Add Document";
    document.getElementById('formAction').value = "add";
    document.getElementById('docId').value = "";
    document.getElementById('docTitle').value = "";
    document.getElementById('modal').classList.remove('hidden');
  }

  function openEditModal(data) {
    document.getElementById('modalTitle').innerText = "Edit Document";
    document.getElementById('formAction').value = "edit";
    document.getElementById('docId').value = data.id;
    document.getElementById('docTitle').value = data.title;
    document.getElementById('modal').classList.remove('hidden');
  }

  function closeModal() {
    document.getElementById('modal').classList.add('hidden');
  }
</script>
</body>
</html>
