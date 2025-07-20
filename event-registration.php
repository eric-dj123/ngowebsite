<!DOCTYPE html>
<html lang="en">
<?php include 'includes/title.php'; ?>
<?php include 'includes/head.php'; ?>
<body>
<?php include 'includes/header.php'; ?>

<section id="center" class="center_about">
  <div class="center_om" style="background-color: #0c2340; padding: 100px 0;">
    <div class="container-xl text-center text-white">
      <h1 class="fw-bold text-uppercase">Event Registration</h1>
      <h6 class="fw-bold"><a href="index.php" class="text-white">Home</a> <span class="mx-2">/</span> Register</h6>
    </div>
  </div>
</section>

<section class="py-5 bg-white">
  <div class="container">
    <h3 class="fw-bold text-primary">Register for Our Upcoming Events</h3>
    <p class="text-muted">Fill in the form below to confirm your participation.</p>

    <form action="register-event.php" method="POST" class="row g-3">
      <div class="col-md-6">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" name="name" class="form-control" required>
      </div>
      <div class="col-md-6">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" name="email" class="form-control" required>
      </div>
      <div class="col-md-6">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="text" name="phone" class="form-control" required>
      </div>
      <div class="col-md-6">
        <label for="event" class="form-label">Select Event</label>
        <select name="event" class="form-select" required>
          <option value="">-- Select Event --</option>
          <option value="Youth Forum">Youth Forum</option>
          <option value="Women in Leadership">Women in Leadership</option>
        </select>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit Registration</button>
      </div>
    </form>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
</body>
</html>
