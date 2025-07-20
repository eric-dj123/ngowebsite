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
      <h1 class="fw-bold text-uppercase">Downloads</h1>
      <h6 class="fw-bold">
        <a href="index.php" class="text-white">Home</a> <span class="mx-2">/</span> Downloads
      </h6>
    </div>
  </div>
</section>

<!-- Download Section -->
<section class="py-5 bg-white">
  <div class="container">
    <h3 class="fw-bold text-primary mb-4">📂 Reports, Brochures, and Resources</h3>
    <div class="row g-4">
      
      <!-- File 1 -->
      <div class="col-md-6">
        <div class="card border-primary shadow-sm h-100">
          <div class="card-body">
            <h5 class="card-title text-dark"><i class="bi bi-file-earmark-pdf-fill text-danger"></i> 2024 Annual Report</h5>
            <p class="card-text text-muted">An in-depth look at our impact, projects, and financials for the year 2024.</p>
            <a href="docs/2024_annual_report.pdf" class="btn btn-outline-primary" download>
              <i class="bi bi-download"></i> Download PDF
            </a>
          </div>
        </div>
      </div>

      <!-- File 2 -->
      <div class="col-md-6">
        <div class="card border-primary shadow-sm h-100">
          <div class="card-body">
            <h5 class="card-title text-dark"><i class="bi bi-file-earmark-pdf-fill text-danger"></i> GURD Project Brochure</h5>
            <p class="card-text text-muted">A summary of our core programs, mission, and community approach.</p>
            <a href="docs/gurd_brochure.pdf" class="btn btn-outline-primary" download>
              <i class="bi bi-download"></i> Download Brochure
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
</body>
</html>
