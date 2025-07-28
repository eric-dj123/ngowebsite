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

  if (!empty($_FILES['image']['name'])) {
    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);
    $image = time() . '_' . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $uploadDir . $image);
  }

  if ($action === 'edit' && $id) {
    if ($image) {
      $stmt = $conn->prepare("UPDATE sponsors SET image=?, updated_at=NOW() WHERE id=?");
      $stmt->bind_param("si", $image, $id);
    } else {
      $toast = "❌ No image selected for update!";
    }
    if (isset($stmt)) $toast = $stmt->execute() ? "✅ Sponsor updated!" : "❌ Update failed!";
  } elseif ($action === 'delete' && $id) {
    $stmt = $conn->prepare("DELETE FROM sponsors WHERE id=?");
    $stmt->bind_param("i", $id);
    $toast = $stmt->execute() ? "✅ Sponsor deleted!" : "❌ Deletion failed!";
  } elseif ($action === 'add' && $image) {
    $stmt = $conn->prepare("INSERT INTO sponsors (image, created_at, updated_at) VALUES (?, NOW(), NOW())");
    $stmt->bind_param("s", $image);
    $toast = $stmt->execute() ? "✅ Sponsor added!" : "❌ Addition failed!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Manage Sponsors - GURD</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
</head>
<body class="bg-gray-100">
<div class="flex min-h-screen">
  <?php include 'includes/aside.php'; ?>
 <!-- Main content -->
    <main class="flex-1 flex flex-col">

      <?php
include "includes/navbar.php"
?>


    <?php if (!empty($toast)) : ?>
      <div class="m-4 p-3 bg-green-100 text-green-800 rounded shadow"><?= $toast ?></div>
    <?php endif; ?>

    <section class="p-6">
      <div class="bg-white p-6 rounded-lg shadow">
        <table id="sponsorTable" class="w-full">
          <thead>
          <tr class="bg-gray-100">
            <th class="px-4 py-2">#</th>
            <th class="px-4 py-2">Logo</th>
            <th class="px-4 py-2">Created</th>
            <th class="px-4 py-2">Action</th>
          </tr>
          </thead>
          <tbody>
          <?php
          $res = $conn->query("SELECT * FROM sponsors ORDER BY id DESC");
          $i = 1;
          while ($row = $res->fetch_assoc()) : ?>
            <tr class="border-t">
              <td class="px-4 py-2"><?= $i++ ?></td>
              <td class="px-4 py-2">
                <?php if ($row['image']) : ?>
                  <img src="uploads/<?= htmlspecialchars($row['image']) ?>" class="h-12 w-auto">
                <?php else : ?> N/A <?php endif; ?>
              </td>
              <td class="px-4 py-2 text-sm text-gray-500"><?= $row['created_at'] ?></td>
              <td class="px-4 py-2">
                <button class="text-blue-600 hover:underline" onclick='editSponsor(<?= json_encode($row) ?>)'>Edit</button>
                <form method="POST" class="inline" onsubmit="return confirm('Are you sure to delete this sponsor?')">
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

    <!-- Sponsor Modal -->
    <div id="sponsorModal" class="fixed inset-0 hidden bg-black bg-opacity-50 z-50 flex items-center justify-center">
      <form method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-xl font-bold mb-4">Upload Sponsor Logo</h2>
        <input type="hidden" name="action" id="form-action" value="add">
        <input type="hidden" name="id" id="sponsor-id">
        <div class="mb-4">
          <label class="block text-sm">Sponsor Image</label>
          <input type="file" name="image" class="w-full" required>
        </div>
        <div class="flex justify-end">
          <button type="button" onclick="closeSponsorModal()" class="px-4 py-2 rounded border mr-2">Cancel</button>
          <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Save</button>
        </div>
      </form>
    </div>

    <footer class="bg-white text-sm text-gray-500 px-6 py-4 border-t">
      <span>&copy; 2025 GURD.</span>
    </footer>
  </main>
</div>

<script>
  $(document).ready(function () {
    $('#sponsorTable').DataTable({ pageLength: 25 });
  });

  function openSponsorModal() {
    document.getElementById('sponsorModal').classList.remove('hidden');
    document.getElementById('form-action').value = 'add';
    document.getElementById('sponsor-id').value = '';
  }

  function editSponsor(data) {
    openSponsorModal();
    document.getElementById('form-action').value = 'edit';
    document.getElementById('sponsor-id').value = data.id;
  }

  function closeSponsorModal() {
    document.getElementById('sponsorModal').classList.add('hidden');
  }
</script>
</body>
</html>
