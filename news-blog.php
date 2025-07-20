<!DOCTYPE html>
<html lang="en">
<?php include 'includes/title.php'; ?>
<?php include 'includes/head.php'; ?>
<body>
<?php include 'includes/header.php'; ?>

<section id="center" class="center_about">
  <div class="center_om" style="background-color: #0c2340; padding: 100px 0;">
    <div class="container-xl text-center text-white">
      <h1 class="fw-bold text-uppercase">News & Blog</h1>
      <h6 class="fw-bold"><a href="index.php" class="text-white">Home</a> <span class="mx-2">/</span> News & Blog</h6>
    </div>
  </div>
</section>

<section id="blog_h" class="py-5 bg-light">
  <div class="container-xl">
    <div class="text-center mb-5">
      <h2 class="fw-bold text-primary" style="font-size: 32px;">Our News</h2>
      <p class="text-muted mx-auto" style="max-width: 700px; font-size: 16px;">
        Stay updated with GURD Rwanda’s latest stories, community impact, and insights. Learn about our projects and real-world change.
      </p>
    </div>

    <div class="row g-4">
      <!-- Blog Post Card -->
      <div class="col-md-4">
        <div class="card border border-primary shadow-sm h-100">
          <div class="position-relative overflow-hidden rounded-top">
            <img src="img/7.jpg" class="card-img-top" alt="Blog post image">
            <a href="#" class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 text-white opacity-0 hover-opacity-100 transition">
              <i class="fa fa-link fa-2x"></i>
            </a>
          </div>
          <div class="card-body text-center">
            <ul class="list-inline small text-muted mb-2">
              <li class="list-inline-item"><i class="fa fa-user me-1"></i><a href="#" class="text-decoration-none">Jane Doe</a></li>
              <li class="list-inline-item"><i class="fa fa-clock me-1"></i>July 28, 2023</li>
            </ul>
            <h5 class="card-title"><a href="#" class="text-dark text-decoration-none">Empowering Girls Through Education</a></h5>
            <p class="card-text">We launched a new mentorship initiative supporting 200 girls in STEM across rural communities.</p>
            <a href="#" class="text-primary fw-bold">Learn More <i class="fa fa-chevron-right ms-1"></i></a>
          </div>
        </div>
      </div>

      <!-- Blog Post Card -->
      <div class="col-md-4">
        <div class="card border border-primary shadow-sm h-100">
          <div class="position-relative overflow-hidden rounded-top">
            <img src="img/1.jpg" class="card-img-top" alt="Blog post image">
            <a href="#" class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 text-white opacity-0 hover-opacity-100 transition">
              <i class="fa fa-link fa-2x"></i>
            </a>
          </div>
          <div class="card-body text-center">
            <ul class="list-inline small text-muted mb-2">
              <li class="list-inline-item"><i class="fa fa-user me-1"></i><a href="#" class="text-decoration-none">John Smith</a></li>
              <li class="list-inline-item"><i class="fa fa-clock me-1"></i>August 10, 2023</li>
            </ul>
            <h5 class="card-title"><a href="#" class="text-dark text-decoration-none">Clean Water Initiative Update</a></h5>
            <p class="card-text">Our borehole projects have reached 500 families in need, improving health and sanitation standards.</p>
            <a href="#" class="text-primary fw-bold">Learn More <i class="fa fa-chevron-right ms-1"></i></a>
          </div>
        </div>
      </div>

      <!-- Blog Post Card -->
      <div class="col-md-4">
        <div class="card border border-primary shadow-sm h-100">
          <div class="position-relative overflow-hidden rounded-top">
            <img src="img/1.jpg" class="card-img-top" alt="Blog post image">
            <a href="#" class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 text-white opacity-0 hover-opacity-100 transition">
              <i class="fa fa-link fa-2x"></i>
            </a>
          </div>
          <div class="card-body text-center">
            <ul class="list-inline small text-muted mb-2">
              <li class="list-inline-item"><i class="fa fa-user me-1"></i><a href="#" class="text-decoration-none">Mary Akimana</a></li>
              <li class="list-inline-item"><i class="fa fa-clock me-1"></i>September 5, 2023</li>
            </ul>
            <h5 class="card-title"><a href="#" class="text-dark text-decoration-none">Youth Empowerment Workshops</a></h5>
            <p class="card-text">We hosted career mentorship workshops engaging 300 young people in leadership discussions.</p>
            <a href="#" class="text-primary fw-bold">Learn More <i class="fa fa-chevron-right ms-1"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
</body>
</html>
