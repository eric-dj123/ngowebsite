<!DOCTYPE html>
<html lang="en">
<?php include 'includes/title.php'; ?>
<?php include 'includes/head.php'; ?>
<body>
<?php include 'includes/header.php'; ?>

<!-- Hero Banner -->
<section id="center" class="center_about">
  <div class="center_om" style="background-color: #0c2340; padding: 100px 0;">
    <div class="container-xl text-center text-white">
      <h1 class="fw-bold text-uppercase">Media Gallery</h1>
      <h6 class="fw-bold">
        <a href="index.php" class="text-white">Home</a> <span class="mx-2">/</span> Media Gallery
      </h6>
    </div>
  </div>
</section>

<!-- Photo Gallery Section -->
<section class="py-5 bg-white">
  <div class="container">
    <h3 class="fw-bold text-primary mb-4">📸 Photo Gallery</h3>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="p-2 border border-primary rounded" style="border-color: #0c2340 !important;">
          <img src="img/1.jpg" alt="Event 1" class="img-fluid rounded">
          <p class="mt-2 text-muted text-center">Community Engagement 2023</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-2 border border-primary rounded" style="border-color: #0c2340 !important;">
          <img src="img/2.jpg" alt="Event 2" class="img-fluid rounded">
          <p class="mt-2 text-muted text-center">Youth Workshop</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-2 border border-primary rounded" style="border-color: #0c2340 !important;">
          <img src="img/7.jpg" alt="Event 3" class="img-fluid rounded">
          <p class="mt-2 text-muted text-center">Field Visit – Empowerment Program</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Video Gallery Section -->
<section class="py-5 bg-light">
  <div class="container">
    <h3 class="fw-bold text-primary mb-4">🎥 Video Highlights</h3>
    <div class="row g-4">
      <div class="col-md-6">
        <div class="border rounded shadow-sm" style="border-color: #0c2340 !important;">
          <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/ScMzIvxBSi4" title="Youth Forum Highlights" allowfullscreen></iframe>
          </div>
        </div>
        <p class="mt-2 text-muted text-center">Youth Forum Highlights 2024</p>
      </div>

      <div class="col-md-6">
        <div class="border rounded shadow-sm" style="border-color: #0c2340 !important;">
          <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" title="Innovation Bootcamp" allowfullscreen></iframe>
          </div>
        </div>
        <p class="mt-2 text-muted text-center">Rural Innovation Bootcamp Recap</p>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
</body>
</html>
