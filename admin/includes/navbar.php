<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Navbar Example</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body class="bg-gray-100">

  <!-- Topbar -->
  <header class="flex justify-between items-center px-6 py-4 bg-white shadow-sm border-b relative z-50">
    <div class="text-xl font-semibold text-gray-700">Dashboard</div>

    <div class="flex items-center gap-4">
      <!-- Notification Bell -->
      <div class="relative">
        <button id="notifBtn" class="relative text-gray-600 hover:text-indigo-600 focus:outline-none">
          <i class="fas fa-bell text-lg"></i>
          <span class="absolute top-0 right-0 inline-block w-2.5 h-2.5 bg-red-500 rounded-full"></span>
        </button>

        <!-- Notification Dropdown -->
        <div id="notifDropdown" class="hidden absolute right-0 mt-2 w-64 bg-white rounded-lg shadow-lg border z-50">
          <div class="p-4 text-sm text-gray-700 font-semibold border-b">Notifications</div>
          <ul class="max-h-60 overflow-y-auto text-sm text-gray-600">
            <li class="px-4 py-2 hover:bg-gray-100">✅ New user registered</li>
            <li class="px-4 py-2 hover:bg-gray-100">📦 Backup completed</li>
            <li class="px-4 py-2 hover:bg-gray-100">⚠️ Server usage is high</li>
          </ul>
        </div>
      </div>

      <!-- Profile -->
      <div class="relative">
        <button id="profileBtn" class="flex items-center gap-3 focus:outline-none">
          <div class="text-right">
            <div class="text-sm font-bold text-gray-800">Tuyishime Fidele</div>
            <div class="text-xs text-gray-500">Administrator</div>
          </div>
          <img src="img/gurd.jpg" alt="User" class="w-10 h-10 rounded-full border-2 border-gray-300 object-cover" />
        </button>

        <!-- Profile Dropdown -->
        <div id="profileDropdown" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border z-50">
          <a href="profile.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">👤 View Profile</a>
          <a href="change-password.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">🔒 Change Password</a>
          <form method="POST" action="logout.php">
            <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">🚪 Logout</button>
          </form>
        </div>
      </div>
    </div>
  </header>

  <!-- JavaScript -->
  <script>
    const profileBtn = document.getElementById('profileBtn');
    const profileDropdown = document.getElementById('profileDropdown');
    const notifBtn = document.getElementById('notifBtn');
    const notifDropdown = document.getElementById('notifDropdown');

    profileBtn.addEventListener('click', () => {
      profileDropdown.classList.toggle('hidden');
      notifDropdown.classList.add('hidden');
    });

    notifBtn.addEventListener('click', () => {
      notifDropdown.classList.toggle('hidden');
      profileDropdown.classList.add('hidden');
    });

    document.addEventListener('click', function (e) {
      if (!profileBtn.contains(e.target) && !profileDropdown.contains(e.target)) {
        profileDropdown.classList.add('hidden');
      }
      if (!notifBtn.contains(e.target) && !notifDropdown.contains(e.target)) {
        notifDropdown.classList.add('hidden');
      }
    });
  </script>
</body>
</html>
