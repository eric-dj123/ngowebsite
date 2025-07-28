<?php
include "includes/db.php";
$toast = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $action = $_POST['action'];
  $id = $_POST['id'] ?? null;
  $title = trim($_POST['title']);
  $excerpt = trim($_POST['excerpt']);
  $date = $_POST['date'];

  $image = '';
  if (!empty($_FILES['image']['name'])) {
    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) mkdir($uploadDir, 0755, true);
    $image = time() . '_' . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $uploadDir . $image);
  }

  if ($action === 'add') {
    $stmt = $conn->prepare("INSERT INTO impact_stories (title, excerpt, image, date, created_at) VALUES (?, ?, ?, ?, NOW())");
    $stmt->bind_param("ssss", $title, $excerpt, $image, $date);
    $toast = $stmt->execute() ? "✅ Story added successfully!" : "❌ Failed to add story!";
  }

  if ($action === 'edit' && $id) {
    if ($image) {
      $stmt = $conn->prepare("UPDATE impact_stories SET title=?, excerpt=?, image=?, date=?, created_at=NOW() WHERE id=?");
      $stmt->bind_param("ssssi", $title, $excerpt, $image, $date, $id);
    } else {
      $stmt = $conn->prepare("UPDATE impact_stories SET title=?, excerpt=?, date=?, created_at=NOW() WHERE id=?");
      $stmt->bind_param("sssi", $title, $excerpt, $date, $id);
    }
    $toast = $stmt->execute() ? "✅ Story updated successfully!" : "❌ Failed to update story!";
  }

  if ($action === 'delete' && $id) {
    $conn->query("DELETE FROM impact_stories WHERE id = $id");
    $toast = "🗑️ Story deleted!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Impact Stories Management</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</head>
<body class="bg-gray-100">
<div class="flex min-h-screen">
  <?php include 'includes/aside.php'; ?>
  <main class="flex-1">
    <header class="flex justify-between items-center p-6 bg-white shadow">
      <h1 class="text-2xl font-bold">Manage Impact Stories</h1>
      <button onclick="openAddModal()" class="bg-blue-600 text-white px-4 py-2 rounded">+ Add Story</button>
    </header>

    <?php if (!empty($toast)) : ?>
      <div class="m-4 p-3 bg-green-100 text-green-800 rounded shadow"><?= $toast ?></div>
    <?php endif; ?>

    <section class="p-6">
      <div class="bg-white p-6 rounded shadow overflow-x-auto">
        <table id="storiesTable" class="display w-full">
          <thead>
            <tr class="bg-gray-100">
              <th>#</th>
              <th>Title</th>
              <th>Excerpt</th>
              <th>Image</th>
              <th>Date</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $res = $conn->query("SELECT * FROM impact_stories ORDER BY id DESC");
            $i = 1;
            while ($row = $res->fetch_assoc()) :
              $safe_json = htmlspecialchars(json_encode($row), ENT_QUOTES, 'UTF-8');
            ?>
              <tr>
                <td><?= $i++ ?></td>
                <td><?= htmlspecialchars($row['title']) ?></td>
                <td><?= $row['excerpt'] ?></td>
                <td>
                  <?php if ($row['image']) : ?>
                    <img src="uploads/<?= htmlspecialchars($row['image']) ?>" class="h-12 rounded" alt="Story Image">
                  <?php else : ?> N/A <?php endif; ?>
                </td>
                <td><?= $row['date'] ?></td>
                <td class="space-x-2">
                  <button onclick='editStory(<?= json_encode($safe_json) ?>)' class="text-blue-600">✏️</button>
                  <form method="POST" style="display:inline" onsubmit="return confirm('Delete this story?')">
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
    <div id="storyModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 overflow-y-auto flex justify-center items-start pt-10 pb-10">
      <form method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-lg w-full max-w-6xl">
        <h2 id="modalTitle" class="text-xl font-bold mb-4">Add Story</h2>
        <input type="hidden" name="id" id="story_id">
        <input type="hidden" name="action" value="add" id="form_action">

        <div class="mb-4">
          <label class="block text-sm font-medium">Title</label>
          <input name="title" id="title" required class="w-full border px-3 py-2 rounded">
        </div>
        <div class="mb-4">
          <label class="block text-sm font-medium">Excerpt</label>
          <textarea name="excerpt" id="excerpt" class="summernote"></textarea>
        </div>
        <div class="mb-4">
          <label class="block text-sm font-medium">Date</label>
          <input type="date" name="date" id="date" required class="w-full border px-3 py-2 rounded">
        </div>
        <div class="mb-4">
          <label class="block text-sm font-medium">Image</label>
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
    $('#storiesTable').DataTable();

    $('.summernote').summernote({
      height: 600,
      placeholder: 'Write full story content here...',
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
      ]
    });
  });

  function openAddModal() {
    document.getElementById('story_id').value = '';
    document.getElementById('form_action').value = 'add';
    document.getElementById('modalTitle').textContent = 'Add Story';
    document.getElementById('title').value = '';
    $('.summernote').summernote('code', '');
    document.getElementById('date').value = '';
    document.body.style.overflow = 'hidden';
    document.getElementById('storyModal').classList.remove('hidden');
  }

  function closeModal() {
    document.getElementById('storyModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
  }

  function editStory(jsonEncodedString) {
    const data = JSON.parse(jsonEncodedString);
    document.getElementById('story_id').value = data.id;
    document.getElementById('form_action').value = 'edit';
    document.getElementById('modalTitle').textContent = 'Edit Story';
    document.getElementById('title').value = data.title;
    $('.summernote').summernote('code', data.excerpt);
    document.getElementById('date').value = data.date;
    document.body.style.overflow = 'hidden';
    document.getElementById('storyModal').classList.remove('hidden');
  }
</script>
</body>
</html>
