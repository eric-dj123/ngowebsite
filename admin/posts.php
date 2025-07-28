<?php
include "includes/db.php";
$toast = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $action = $_POST['action'];
  $id = $_POST['id'] ?? null;
  $title = trim($_POST['title']);
  $short_description = trim($_POST['short_description']);
  $description = $_POST['description'];

  $image = '';
  if (!empty($_FILES['image']['name'])) {
    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) mkdir($uploadDir, 0755, true);
    $image = time() . '_' . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $uploadDir . $image);
  }

  if ($action === 'add') {
    $stmt = $conn->prepare("INSERT INTO posts (title, short_description, description, image, created_at, updated_at) VALUES (?, ?, ?, ?, NOW(), NOW())");
    $stmt->bind_param("ssss", $title, $short_description, $description, $image);
    $toast = $stmt->execute() ? "✅ Post added successfully!" : "❌ Failed to add post!";
  }

  if ($action === 'edit' && $id) {
    if ($image) {
      $stmt = $conn->prepare("UPDATE posts SET title=?, short_description=?, description=?, image=?, updated_at=NOW() WHERE id=?");
      $stmt->bind_param("ssssi", $title, $short_description, $description, $image, $id);
    } else {
      $stmt = $conn->prepare("UPDATE posts SET title=?, short_description=?, description=?, updated_at=NOW() WHERE id=?");
      $stmt->bind_param("sssi", $title, $short_description, $description, $id);
    }
    $toast = $stmt->execute() ? "✅ Post updated successfully!" : "❌ Failed to update post!";
  }

  if ($action === 'delete' && $id) {
    $conn->query("DELETE FROM posts WHERE id = $id");
    $toast = "🗑️ Post deleted!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Posts Management</title>
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
  <main class="flex-1">
    <header class="flex justify-between items-center p-6 bg-white shadow">
      <h1 class="text-2xl font-bold">Posts Management</h1>
      <button onclick="openAddModal()" class="bg-blue-600 text-white px-4 py-2 rounded">+ Add Post</button>
    </header>

    <?php if (!empty($toast)) : ?>
      <div class="m-4 p-3 bg-green-100 text-green-800 rounded shadow"><?= $toast ?></div>
    <?php endif; ?>

    <section class="p-6">
      <div class="bg-white p-6 rounded shadow overflow-x-auto">
        <table id="postsTable" class="display w-full">
          <thead>
          <tr class="bg-gray-100">
            <th>#</th>
            <th>Title</th>
            <th>Short Description</th>
            <th>Image</th>
            <th>Created</th>
            <th>Actions</th>
          </tr>
          </thead>
          <tbody>
          <?php
          $res = $conn->query("SELECT * FROM posts ORDER BY id DESC");
          $i = 1;
          while ($row = $res->fetch_assoc()) :
            $safe_json = htmlspecialchars(json_encode($row), ENT_QUOTES, 'UTF-8');
          ?>
            <tr>
              <td><?= $i++ ?></td>
              <td><?= htmlspecialchars($row['title']) ?></td>
              <td><?= htmlspecialchars($row['short_description']) ?></td>
              <td>
                <?php if ($row['image']) : ?>
                  <img src="uploads/<?= htmlspecialchars($row['image']) ?>" class="h-12 rounded" alt="Post Image">
                <?php else : ?> N/A <?php endif; ?>
              </td>
              <td><?= $row['created_at'] ?></td>
              <td class="space-x-2">
                <button onclick='editPost("<?= $safe_json ?>")' class="text-blue-600">✏️</button>
                <form method="POST" style="display:inline" onsubmit="return confirm('Delete this post?')">
                  <input type="hidden" name="id" value="<?= $row['id'] ?>">
                  <input type="hidden" name="action" value="delete">
                  <button class="text-red-600">🗑️</button>
                </form>
              </td>
            </tr>
          <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </section>

    <!-- Modal -->
    <div id="postModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center overflow-auto">
      <form method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-lg w-full max-w-2xl mt-10 mb-10">
        <h2 id="modalTitle" class="text-xl font-bold mb-4">Add Post</h2>
        <input type="hidden" name="id" id="post_id">
        <input type="hidden" name="action" value="add" id="form_action">

        <div class="mb-4">
          <label class="block text-sm">Title</label>
          <input name="title" id="title" required class="w-full border px-3 py-2 rounded">
        </div>
        <div class="mb-4">
          <label class="block text-sm">Short Description</label>
          <input name="short_description" id="short_description" class="w-full border px-3 py-2 rounded">
        </div>
        <div class="mb-4">
          <label class="block text-sm">Description</label>
          <textarea name="description" id="description" class="summernote"></textarea>
        </div>
        <div class="mb-4">
          <label class="block text-sm">Image</label>
          <input type="file" name="image" class="w-full">
        </div>
        <div class="flex justify-end">
          <button type="button" onclick="closeModal()" class="px-4 py-2 border rounded mr-2">Cancel</button>
          <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Save</button>
        </div>
      </form>
    </div>

    <footer class="bg-white text-sm text-gray-500 px-6 py-4 border-t">
      &copy; 2025 GURD.
    </footer>
  </main>
</div>

<script>
  $(document).ready(function () {
    $('#postsTable').DataTable();
    $('.summernote').summernote({
      height: 200,
      placeholder: 'Write post content here...'
    });
  });

  function openAddModal() {
    document.getElementById('post_id').value = '';
    document.getElementById('form_action').value = 'add';
    document.getElementById('modalTitle').textContent = 'Add Post';
    document.getElementById('title').value = '';
    document.getElementById('short_description').value = '';
    $('.summernote').summernote('code', '');
    document.getElementById('postModal').classList.remove('hidden');
  }

  function closeModal() {
    document.getElementById('postModal').classList.add('hidden');
  }

  function editPost(jsonEncodedString) {
    const data = JSON.parse(jsonEncodedString);
    document.getElementById('post_id').value = data.id;
    document.getElementById('form_action').value = 'edit';
    document.getElementById('modalTitle').textContent = 'Edit Post';
    document.getElementById('title').value = data.title;
    document.getElementById('short_description').value = data.short_description;
    $('.summernote').summernote('code', data.description);
    document.getElementById('postModal').classList.remove('hidden');
  }
</script>
</body>
</html>
