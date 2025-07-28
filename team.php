<!DOCTYPE html>
<html lang="en">

<?php include 'includes/title.php'; ?>
<?php include 'includes/head.php'; ?>

<body>
<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section id="center" class="center_about">
  <div class="center_om" style="background-color: #0c2340; padding: 100px 0;">
    <div class="container-xl text-center text-white">
      <h1 class="fw-bold text-uppercase">Team</h1>
      <h6 class="fw-bold">
        <a href="index.php" class="text-white">Home</a> <span class="mx-2">/</span> Our Team
      </h6>
    </div>
  </div>
</section>

<!-- Team Section -->
<section class="py-5 bg-light">
  <div class="container">

    <!-- Main Heading -->
    <div class="text-center mb-5">
      <h2 class="fw-bold text-uppercase" style="color: #0c2340;">Meet Our Team</h2>
      <div class="mx-auto" style="width: 60px; height: 4px; background-color: #0c2340;"></div>
      <p class="text-muted mt-3">Dedicated leaders and professionals powering our mission at GURD.</p>
    </div>
      <?php include "db.php"; ?>
<!-- Board Members -->
<div class="mb-5">
  <h3 class="fw-bold mb-4" style="color: #0c2340;">Board Members</h3>
  <div class="row justify-content-center g-4">
    <?php
      $result = $conn->query("SELECT * FROM teams ORDER BY created_at DESC");
      while ($row = $result->fetch_assoc()):
        $name = $row['name'];
        $image = $row['image'];
        $post = $row['post'];
    ?>
    <div class="col-md-4 col-sm-6">
      <div class="card border-primary shadow-sm h-100 text-center team-card p-3">
        <img src="admin/uploads/<?php echo htmlspecialchars($image); ?>" 
             alt="<?php echo htmlspecialchars($name); ?>" 
             class="w-100 mb-3" 
             style="border-radius: 8px; object-fit: cover; height: 270px;">
        <h5 class="mb-1"><?php echo htmlspecialchars($name); ?></h5>
        <p style="color: gray; font-size: 14px;"><?php echo htmlspecialchars($post); ?></p>
      </div>
    </div>
    <?php endwhile; ?>
  </div>
</div>


    <!-- Staff Members -->
   <div class="mb-4">
  <h3 class="fw-bold mb-4" style="color: #0c2340;">Staff Members</h3>
  <div class="row justify-content-center g-4">

    <!-- Staff Member 1 -->
    <div class="col-md-3 col-sm-6">
      <div class="card border-primary shadow-sm h-100 text-center team-card">
        <img src="img/ceo2.jpg" class="card-img-top border-bottom" alt="Tuyishime Fidele.">
        <div class="card-body">
          <h5 class="fw-bold text-primary">Tuyishime Fidele.</h5>
          <p class="text-muted mb-1">Founder, Executive Director</p>
          <p class="mb-1"><i class="fa fa-envelope text-primary me-1"></i> tuyishimefidele1986@gmail.com</p>
          <p class="mb-0"><i class="fa fa-phone text-primary me-1"></i> (+250) 788 782 246</p>
        </div>
      </div>
    </div>

    <!-- Staff Member 2 -->
    <div class="col-md-3 col-sm-6">
      <div class="card border-primary shadow-sm h-100 text-center team-card">
        <img src="img/op.PNG" class="card-img-top border-bottom" alt="Gloriose DUSHIME">
        <div class="card-body">
          <h5 class="fw-bold text-primary">Gloriose DUSHIME</h5>
          <p class="text-muted mb-1">Chief Operations Officer</p>
          <p class="mb-1"><i class="fa fa-envelope text-primary me-1"></i> gloriosedushime9@gmail.com</p>
          <p class="mb-0"><i class="fa fa-phone text-primary me-1"></i>(+250) 783 468 611</p>
        </div>
      </div>
    </div>

  </div>
</div>

  </div>
</section>

<?php include 'includes/footer.php'; ?>
</body>
</html>
