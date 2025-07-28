<?php
session_start();
include "includes/db.php";

$error = '';
$success = '';

// Process login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
  $email = $_POST['email'] ?? '';
  $password = md5($_POST['password'] ?? '');

  $stmt = $conn->prepare("SELECT * FROM employees WHERE email = ? AND password = ?");
  if (!$stmt) {
    die("SQL error: " . $conn->error);
  }

  $stmt->bind_param("ss", $email, $password);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($user = $result->fetch_assoc()) {
    $_SESSION['admin_id'] = $user['id'];
    $_SESSION['admin_name'] = $user['name'];
    header("Location: dashboard.php");
    exit();
  } else {
    $error = "Invalid email or password.";
  }
}

// Forgot password (frontend only)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reset'])) {
  $reset_email = $_POST['reset_email'] ?? '';
  $success = "If this email exists, a reset link was sent (mock).";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    function toggleReset() {
      document.getElementById('login-form').classList.toggle('hidden');
      document.getElementById('reset-form').classList.toggle('hidden');
    }
  </script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="bg-white p-8 rounded-xl shadow-md w-full max-w-md">
    <div class="text-center mb-6">
      <img src="img/gurd.jpg" alt="Logo" class="h-16 mx-auto mb-2">
      <h2 class="text-xl font-bold text-gray-800">Admin Login</h2>
    </div>

    <!-- Login Form -->
    <form method="POST" id="login-form" class="space-y-4">
      <input type="hidden" name="login" value="1">
      <div>
        <label class="block text-sm font-medium text-gray-600">Email</label>
        <input type="email" name="email" required class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300">
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-600">Password</label>
        <input type="password" name="password" required class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300">
      </div>
      <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700">Login</button>
      <p class="text-sm text-center mt-2">
        <a href="#" onclick="toggleReset()" class="text-blue-600 hover:underline">Forgot password?</a>
      </p>
    </form>

    <!-- Reset Password Form -->
    <form method="POST" id="reset-form" class="space-y-4 hidden">
      <input type="hidden" name="reset" value="1">
      <div>
        <label class="block text-sm font-medium text-gray-600">Enter your email</label>
        <input type="email" name="reset_email" required class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-300">
      </div>
      <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-md hover:bg-indigo-700">Send Reset Link</button>
      <p class="text-sm text-center mt-2">
        <a href="#" onclick="toggleReset()" class="text-gray-600 hover:underline">Back to login</a>
      </p>
    </form>

    <!-- Error & Success Messages -->
    <?php if ($error): ?>
      <p class="mt-4 text-sm text-red-600 text-center"><?php echo $error; ?></p>
    <?php endif; ?>
    <?php if ($success): ?>
      <p class="mt-4 text-sm text-green-600 text-center"><?php echo $success; ?></p>
    <?php endif; ?>
  </div>
</body>
</html>
