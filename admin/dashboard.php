<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
  header("Location: index.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GURD Admin Dashboard</title>

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome (for icons) -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <!-- Chart.js CDN -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-100 font-sans">

  <div class="flex min-h-screen">

    <!-- Sidebar -->
<?php
include "includes/aside.php"
?>

    <!-- Main content -->
    <main class="flex-1 flex flex-col">

      <?php
include "includes/navbar.php"
?>


      <!-- Dashboard Widgets -->
      <section class="p-6 bg-gray-100 flex-1">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          <!-- Card 1 -->
          <div class="bg-white p-5 rounded-xl shadow-sm border-l-4 border-indigo-500">
            <h3 class="text-sm text-gray-500 font-medium">Total Employees</h3>
            <p class="text-2xl font-bold text-indigo-700 mt-2">42</p>
          </div>

          <!-- Card 2 -->
          <div class="bg-white p-5 rounded-xl shadow-sm border-l-4 border-green-500">
            <h3 class="text-sm text-gray-500 font-medium">Active Posts</h3>
            <p class="text-2xl font-bold text-green-700 mt-2">16</p>
          </div>

          <!-- Card 3 -->
          <div class="bg-white p-5 rounded-xl shadow-sm border-l-4 border-yellow-500">
            <h3 class="text-sm text-gray-500 font-medium">Teams</h3>
            <p class="text-2xl font-bold text-yellow-700 mt-2">6</p>
          </div>

          <!-- Card 4 -->
          <div class="bg-white p-5 rounded-xl shadow-sm border-l-4 border-red-500">
            <h3 class="text-sm text-gray-500 font-medium">Sponsors</h3>
            <p class="text-2xl font-bold text-red-700 mt-2">12</p>
          </div>
        </div>

        <!-- Charts Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-10">
          <!-- Bar Chart -->
          <div class="bg-white p-6 rounded-xl shadow-sm">
            <h3 class="text-lg font-semibold text-gray-700 mb-4">Employees by Department</h3>
            <canvas id="barChart" height="180"></canvas>
          </div>

          <!-- Doughnut Chart -->
          <div class="bg-white p-6 rounded-xl shadow-sm">
            <h3 class="text-lg font-semibold text-gray-700 mb-4">Post Status Distribution</h3>
            <canvas id="doughnutChart" height="180"></canvas>
          </div>
        </div>

        <!-- Welcome -->
        <div class="mt-10 bg-white p-6 rounded-xl shadow-sm text-center">
          <h2 class="text-xl font-semibold text-gray-700 mb-2">Welcome to the GURD Admin Panel</h2>
          <p class="text-sm text-gray-500">Manage users, track activities, and customize everything with ease.</p>
        </div>
      </section>

      <!-- Footer -->
      <footer class="bg-white text-sm text-gray-400 px-6 py-4 flex justify-between items-center border-t">
        <span>2025 &copy; GURD.</span>
        <span>Design & Develop by <span class="text-indigo-600 font-semibold">Eric</span></span>
      </footer>

    </main>
  </div>

  <!-- Chart.js Config -->
  <script>
    // Bar Chart
    const barCtx = document.getElementById('barChart').getContext('2d');
    new Chart(barCtx, {
      type: 'bar',
      data: {
        labels: ['HR', 'Programs', 'Finance', 'IT', 'Operations'],
        datasets: [{
          label: 'No. of Employees',
          data: [6, 14, 5, 8, 9],
          backgroundColor: '#4f46e5'
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true,
            ticks: { stepSize: 2 }
          }
        }
      }
    });

    // Doughnut Chart
    const doughnutCtx = document.getElementById('doughnutChart').getContext('2d');
    new Chart(doughnutCtx, {
      type: 'doughnut',
      data: {
        labels: ['Published', 'Draft', 'Archived'],
        datasets: [{
          label: 'Post Status',
          data: [45, 15, 10],
          backgroundColor: ['#10b981', '#f59e0b', '#ef4444']
        }]
      },
      options: {
        responsive: true,
        cutout: '70%',
        plugins: {
          legend: {
            position: 'bottom'
          }
        }
      }
    });
  </script>

</body>
</html>
