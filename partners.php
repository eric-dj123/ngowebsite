<!DOCTYPE html>
<html lang="en">
<?php include 'includes/title.php'; ?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>
<body>

<!-- Hero Section -->
<section id="center" class="center_about">
  <div class="center_om" style="background-color: #0c2340; padding: 100px 0;">
    <div class="container-xl text-center text-white">
      <h1 class="fw-bold text-uppercase">Partners</h1>
      <h6 class="fw-bold">
        <a href="index.php" class="text-white">Home</a> <span class="mx-2">/</span> Our Partners
      </h6>
    </div>
  </div>
</section>

<!-- Partners Section -->
<?php include "db.php"; ?>
<section class="py-5 bg-white">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold text-uppercase" style="color: #0c2340;">Our Partners & Collaborators</h2>
      <div class="mx-auto" style="width: 60px; height: 4px; background-color: #0c2340;"></div>
    </div>

    <div class="row g-4 justify-content-center">
      <?php
        $result = $conn->query("SELECT * FROM sponsors ORDER BY created_at DESC");
        while ($row = $result->fetch_assoc()):
          $image = $row['image'];
          $name  = isset($row['name']) ? $row['name'] : ''; // Optional
      ?>
      <div class="col-md-3 col-6">
        <div class="border border-primary rounded text-center p-3 shadow-sm" style="border-color: #0c2340 !important;">
          <img src="admin/uploads/<?php echo htmlspecialchars($image); ?>" 
               class="img-fluid mb-2" 
               alt="<?php echo htmlspecialchars($name); ?>" 
               style="max-height: 80px;">
          <?php if ($name): ?>
            <p class="text-muted small"><?php echo htmlspecialchars($name); ?></p>
          <?php endif; ?>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>


<?php include 'includes/footer.php'; ?>
</body>
</html>
