<!DOCTYPE html>
<html lang="en">
<?php include 'includes/title.php'; ?>
<?php include 'includes/head.php'; ?>
<style>
  .story-card {
    min-height: 250px;
  }
  .story-img {
    flex: 0 0 250px;
    max-width: 250px;
    overflow: hidden;
  }
  .story-img img {
    height: 100%;
    width: 100%;
    object-fit: cover;
  }
  @media (max-width: 767px) {
    .story-img {
      max-width: 100%;
    }
  }
</style>
<body>
<?php include 'includes/header.php'; ?>

<!-- Impact Stories Horizontal Layout -->
<section class="impact-stories py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold text-center text-dark mb-5">Our Impact Stories</h2>

    <!-- Story 1 -->
    <div class="story-card d-md-flex bg-white shadow-sm rounded mb-4 overflow-hidden">
      <div class="story-img">
        <img src="img/f1.jpg" alt="AMPLIFY Girls" class="img-fluid">
      </div>
      <div class="p-4">
      <h3> How AMPLIFY Girls Strengthened GURD-Rwanda to Empower Girls build Agency in Nyamasheke district. </h4>
        <p class="text-muted mb-2">With support from AMPLIFY Girls, GURD developed life skills programs now helping girls lead their communities.</p>
        <a href="impact-amplify-story.php" class="btn btn-outline-primary btn-sm">Read Full Story</a>
      </div>
    </div>

    <!-- Story 2 -->
    <div class="story-card d-md-flex bg-white shadow-sm rounded mb-4 overflow-hidden">
      <div class="story-img">
        <img src="img/102.jpg" alt="Francoise" class="img-fluid">
      </div>
      <div class="p-4">
        <small class="text-muted">Icyizere Program / Kigali</small>
        <h5 class="fw-bold mt-2">Francoise’s Journey to Empowerment</h5>
        <p class="text-muted mb-2">Francoise became a salon owner after completing the Icyizere Program. She now mentors others too.</p>
        <a href="impact-francoise-story.php" class="btn btn-outline-primary btn-sm">Read Full Story</a>
      </div>
    </div>

    <!-- Story 3 -->
 

    <!-- Story 4 -->
    <div class="story-card d-md-flex bg-white shadow-sm rounded mb-4 overflow-hidden">
      <div class="story-img">
        <img src="img/131.jpg" alt="ICYIZERE Program Group" class="img-fluid">
      </div>
      <div class="p-4">
        <small class="text-muted">ICYIZERE Program / Nyamasheke</small>
        <h5 class="fw-bold mt-2">ICYIZERE: Restoring Hope and Skills</h5>
        <p class="text-muted mb-2">The program has trained 25 young women in tailoring and hairdressing, building confidence and economic power.</p>
        <a href="impact-icyizere-program.php" class="btn btn-outline-primary btn-sm">Read Full Story</a>
      </div>
    </div>

    <!-- Story 5 -->
    <div class="story-card d-md-flex bg-white shadow-sm rounded mb-4 overflow-hidden">
      <div class="story-img">
        <img src="img/109.jpg" alt="SRHR Programs in Community" class="img-fluid">
      </div>
      <div class="p-4">
        <small class="text-muted">SRHR Program / Nyamasheke</small>
        <h5 class="fw-bold mt-2">SRHR Programs in Community</h5>
        <p class="text-muted mb-2">
          At GURD-Rwanda, promoting Sexual and Reproductive Health and Rights (SRHR) is central to our mission of empowering girls and young women, especially from vulnerable communities. We create safe spaces where girls learn about their bodies, challenge harmful norms, and make informed health decisions.
        </p>
        <a href="impact-srhr-story.php" class="btn btn-outline-primary btn-sm">Read Full Story</a>
      </div>
    </div>

    <!-- Story 6 -->
    <div class="story-card d-md-flex bg-white shadow-sm rounded mb-4 overflow-hidden">
      <div class="story-img">
        <img src="img/132.jpg" alt="Girls Education" class="img-fluid">
      </div>
      <div class="p-4">
        <small class="text-muted">Scholarship & Education / Nyamasheke</small>
        <h5 class="fw-bold mt-2">Why Supporting Girls’ Education Matters</h5>
        <p class="text-muted mb-2">In rural Nyamasheke, scholarships are helping girls break free from poverty and early motherhood to stay in school and lead.</p>
        <a href="impact-girls-education.php" class="btn btn-outline-primary btn-sm">Read Full Story</a>
      </div>
    </div>

  </div>
</section>

<?php include 'includes/footer.php'; ?>
</body>
</html>
