<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
  header("Location: index.php");
  exit();
}
?>
<?php
// DB connection
include "includes/db.php";

// Handle insert, update, delete
$toast = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $action = $_POST['action'];
  $id = $_POST['id'] ?? null;
  $name  = trim($_POST['name']);
  $email = trim($_POST['email']);
  $phone = trim($_POST['phone']);

  if ($action === 'add') {
    $status = 'ACTIVE';
    $date = date('F d, Y');
    $stmt = $conn->prepare("INSERT INTO employees (name, email, phone, status, joining_date) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $phone, $status, $date);
    $toast = $stmt->execute() ? "✅ Employee added successfully!" : "❌ Failed to add employee!";
  } elseif ($action === 'edit' && $id) {
    $stmt = $conn->prepare("UPDATE employees SET name=?, email=?, phone=? WHERE id=?");
    $stmt->bind_param("sssi", $name, $email, $phone, $id);
    $toast = $stmt->execute() ? "✅ Employee updated successfully!" : "❌ Update failed!";
  }
}

if (isset($_GET['delete'])) {
  $id = intval($_GET['delete']);
  $stmt = $conn->prepare("DELETE FROM employees WHERE id=?");
  $stmt->bind_param("i", $id);
  if ($stmt->execute()) {
    header("Location: employee.php?toast=deleted");
    exit;
  }
}

if (isset($_GET['toast']) && $_GET['toast'] == 'deleted') {
  $toast = "✅ Employee deleted!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Employees - GURD Admin</title>
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

  <main class="flex-1">
   

    <?php if (!empty($toast)) : ?>
      <div id="toast" class="m-6 p-3 bg-green-100 text-green-800 rounded shadow"><?= $toast ?></div>
      <script>setTimeout(() => document.getElementById("toast").remove(), 3000);</script>
    <?php endif; ?>

    <div class="p-6">
      <div class="bg-white p-6 rounded-lg shadow">
        <div class="flex justify-between mb-4">
          <h2 class="text-lg font-semibold text-gray-700">Employee List</h2>
          <button onclick="document.getElementById('addModal').classList.remove('hidden')" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            + Add Employee
          </button>
        </div>

        <table id="employeeTable" class="w-full text-sm text-left">
          <thead class="bg-gray-50 text-gray-600">
            <tr>
              <th class="px-3 py-2">#</th>
              <th class="px-3 py-2">Name</th>
              <th class="px-3 py-2">Email</th>
              <th class="px-3 py-2">Phone</th>
              <th class="px-3 py-2">Status</th>
              <th class="px-3 py-2">Date</th>
              <th class="px-3 py-2">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $res = $conn->query("SELECT * FROM employees ORDER BY id ASC"); $i = 1;
            while ($row = $res->fetch_assoc()): ?>
              <tr class="border-t">
                <td class="px-3 py-2"><?= $i++ ?></td>
                <td class="px-3 py-2"><?= $row['name'] ?></td>
                <td class="px-3 py-2"><?= $row['email'] ?></td>
                <td class="px-3 py-2"><?= $row['phone'] ?></td>
                <td class="px-3 py-2">
                  <span class="px-2 py-1 rounded-full text-xs <?= $row['status'] == 'ACTIVE' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' ?>">
                    <?= $row['status'] ?>
                  </span>
                </td>
                <td class="px-3 py-2"><?= $row['joining_date'] ?></td>
                <td class="px-3 py-2">
                  <button onclick="openEditModal('<?= $row['id'] ?>', '<?= $row['name'] ?>', '<?= $row['email'] ?>', '<?= $row['phone'] ?>')" class="text-indigo-600 hover:underline">Edit</button>
                  <a href="employee.php?delete=<?= $row['id'] ?>" class="text-red-600 hover:underline ml-2" onclick="return confirm('Delete this employee?')">Delete</a>
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
        <h2 class="text-xl font-bold mb-4">Add Employee</h2>
        <form method="POST">
          <input type="hidden" name="action" value="add">
          <div class="mb-4">
            <label class="block text-sm mb-1">Name</label>
            <input name="name" required class="w-full border px-3 py-2 rounded">
          </div>
          <div class="mb-4">
            <label class="block text-sm mb-1">Email</label>
            <input type="email" name="email" required class="w-full border px-3 py-2 rounded">
          </div>
          <div class="mb-4">
            <label class="block text-sm mb-1">Phone</label>
            <input name="phone" required class="w-full border px-3 py-2 rounded">
          </div>
          <div class="flex justify-end">
            <button type="button" onclick="document.getElementById('addModal').classList.add('hidden')" class="mr-2 px-4 py-2 rounded border">Cancel</button>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Add</button>
          </div>
        </form>
      </div>
    </div>

    <!-- Edit Modal -->
    <div id="editModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
      <div class="bg-white p-6 rounded-lg shadow-xl w-full max-w-md">
        <h2 class="text-xl font-bold mb-4">Edit Employee</h2>
        <form method="POST">
          <input type="hidden" name="action" value="edit">
          <input type="hidden" id="edit_id" name="id">
          <div class="mb-4">
            <label class="block text-sm mb-1">Name</label>
            <input id="edit_name" name="name" required class="w-full border px-3 py-2 rounded">
          </div>
          <div class="mb-4">
            <label class="block text-sm mb-1">Email</label>
            <input id="edit_email" type="email" name="email" required class="w-full border px-3 py-2 rounded">
          </div>
          <div class="mb-4">
            <label class="block text-sm mb-1">Phone</label>
            <input id="edit_phone" name="phone" required class="w-full border px-3 py-2 rounded">
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
    $('#employeeTable').DataTable();
  });

  function openEditModal(id, name, email, phone) {
    document.getElementById('edit_id').value = id;
    document.getElementById('edit_name').value = name;
    document.getElementById('edit_email').value = email;
    document.getElementById('edit_phone').value = phone;
    document.getElementById('editModal').classList.remove('hidden');
  }
</script>
</body>
</html>