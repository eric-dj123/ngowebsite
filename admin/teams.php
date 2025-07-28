<?php
$conn = new mysqli("localhost", "root", "", "gurd_db");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Team Members</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
</head>
<body class="bg-gray-100">
  <div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6 text-center">All Team Members</h1>
    
    <div class="bg-white shadow p-4 rounded-lg">
      <table id="teamsTable" class="display w-full text-sm">
        <thead class="bg-gray-100">
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Image</th>
            <th>Post</th>
            <th>Created</th>
            <th>Updated</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          $res = $conn->query("SELECT * FROM teams ORDER BY id DESC");
          while ($row = $res->fetch_assoc()) {
          ?>
            <tr>
              <td><?= $i++ ?></td>
              <td><?= htmlspecialchars($row['name']) ?></td>
              <td>
                <?php if (!empty($row['image'])) : ?>
                  <img src="uploads/<?= htmlspecialchars($row['image']) ?>" class="h-12 w-12 rounded-full object-cover">
                <?php else : ?>
                  N/A
                <?php endif; ?>
              </td>
              <td><?= nl2br(htmlspecialchars($row['post'])) ?></td>
              <td><?= $row['created_at'] ?></td>
              <td><?= $row['updated_at'] ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

  <script>
    $(document).ready(function () {
      $('#teamsTable').DataTable({
        pageLength: 50,
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
      });
    });
  </script>
</body>
</html>
