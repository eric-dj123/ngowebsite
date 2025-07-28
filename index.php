<!DOCTYPE html>
<html lang="en">

<?php
include 'includes/title.php'
?>

<body>


<?php
include 'includes/head.php'
?>
<?php
include 'includes/header.php'
?>

<section id="center" class="center_home">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    
    <!-- Indicators -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <!-- Slides -->
    <div class="carousel-inner">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <img src="img/1.jpg" class="d-block w-100 carousel-image" alt="Slide 1">
        <div class="carousel-caption d-md-block">
          <h1 class="typing heading-1">Plans For a New Donation</h1>
          <p class="mt-3 text-light fs-5">There are many variations of passages available but the majority have suffered alteration in some form by injected humour or randomised words.</p>
          <h6 class="mt-4">
            <a class="btn btn-danger px-4 py-2 rounded-pill fw-bold shadow-sm" href="#">Donate Now</a>
          </h6>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <img src="img/2.jpg" class="d-block w-100 carousel-image" alt="Slide 2">
        <div class="carousel-caption d-md-block">
          <h1 class="typing heading-2">The Prosperity Begins Today</h1>
          <p class="mt-3 text-light fs-5">There are many variations of passages available but the majority have suffered alteration in some form by injected humour or randomised words.</p>
          <h6 class="mt-4">
            <a class="btn btn-primary px-4 py-2 rounded-pill fw-bold shadow-sm" href="#">See The Plan</a>
          </h6>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <img src="img/3.jpeg" class="d-block w-100 carousel-image" alt="Slide 3">
        <div class="carousel-caption d-md-block">
          <h1 class="typing heading-3">Now, Today Everything Changes</h1>
          <p class="mt-3 text-light fs-5">There are many variations of passages available but the majority have suffered alteration in some form by injected humour or randomised words.</p>
          <h6 class="mt-4">
            <a class="btn btn-warning text-dark px-4 py-2 rounded-pill fw-bold shadow-sm" href="#">Upcoming Events</a>
          </h6>
        </div>
      </div>

    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>

  </div>
</section>


<!-- 🔠 Typing Animation Styles -->
<style>
/* 🔽 Reduced height for carousel images */
.carousel-image {
  height: 350px; /* You can change this to 300px or 280px if needed */
  object-fit: cover;
}

/* ✨ Typing animation */
.typing {
  font-family: 'Segoe UI', sans-serif;
  font-weight: 700;
  font-size: 2.2rem;
  color: #fff;
  overflow: hidden;
  white-space: nowrap;
  border-right: 3px solid #fff;
  display: inline-block;
}

.heading-1 { animation: typing1 2.5s steps(30, end), blink 0.8s step-end infinite; }
.heading-2 { animation: typing2 2.5s steps(30, end), blink 0.8s step-end infinite; }
.heading-3 { animation: typing3 2.5s steps(30, end), blink 0.8s step-end infinite; }

@keyframes typing1 { from { width: 0 } to { width: 23ch } }
@keyframes typing2 { from { width: 0 } to { width: 28ch } }
@keyframes typing3 { from { width: 0 } to { width: 30ch } }

@keyframes blink {
  0%, 100% { border-color: transparent }
  50% { border-color: white }
}

/* 📱 Responsive adjustments */
@media (max-width: 768px) {
  .typing {
    font-size: 1.5rem;
  }
  .carousel-caption {
    bottom: 10%;
  }
}
</style>


<!-- Impact Section -->
<section id="spec" class="py-5" style="background-color: #2a3756;">
  <div class="container-xl">

    <!-- Section Title -->
    <div class="text-center mb-5">
      <h2 class="fw-bold" style="font-size: 34px; color: #ffffff;">Our Impact in Numbers</h2>
      <p style="color: #d0d6e2;">Measuring the real difference we make in communities across Rwanda</p>
    </div>

    <!-- Counters -->
    <div class="row g-4 text-center">

      <!-- Girls Benefited -->
      <div class="col-6 col-md-4 col-lg-2 offset-lg-1">
        <div class="bg-white rounded p-4 h-100 shadow-sm">
          <div class="text-danger fs-2"><i class="fa-solid fa-children"></i></div>
          <h1 class="text-dark fw-bold mt-2 counter" data-count="4560">0</h1>
          <p class="small mt-1 text-muted">Girls Benefited</p>
        </div>
      </div>

      <!-- School Fees Paid -->
      <div class="col-6 col-md-4 col-lg-2">
        <div class="bg-white rounded p-4 h-100 shadow-sm">
          <div class="text-danger fs-2"><i class="fa-solid fa-graduation-cap"></i></div>
          <h1 class="text-dark fw-bold mt-2 counter" data-count="25">0</h1>
          <p class="small mt-1 text-muted">Secondary School Fees Paid</p>
        </div>
      </div>

      <!-- SRHR Clubs -->
      <div class="col-6 col-md-4 col-lg-2">
        <div class="bg-white rounded p-4 h-100 shadow-sm">
          <div class="text-danger fs-2"><i class="fa-solid fa-people-group"></i></div>
          <h1 class="text-dark fw-bold mt-2 counter" data-count="11">0</h1>
          <p class="small mt-1 text-muted">SRHR Clubs in Schools</p>
        </div>
      </div>

      <!-- Hygienic Pads -->
      <div class="col-6 col-md-4 col-lg-2">
        <div class="bg-white rounded p-4 h-100 shadow-sm">
          <div class="text-danger fs-2"><i class="fa-solid fa-kit-medical"></i></div>
          <h1 class="text-dark fw-bold mt-2 counter" data-count="5500">0</h1>
          <p class="small mt-1 text-muted">Hygienic Pads Provided</p>
        </div>
      </div>

      <!-- Women Empowered -->
      <div class="col-6 col-md-4 col-lg-2">
        <div class="bg-white rounded p-4 h-100 shadow-sm">
          <div class="text-danger fs-2"><i class="fa-solid fa-person-dress"></i></div>
          <h1 class="text-dark fw-bold mt-2 counter" data-count="38">0</h1>
          <p class="small mt-1 text-muted">Women Empowered</p>
        </div>
      </div>

    </div>
  </div>
</section>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".counter");
    let hasRun = false;

    function animateCount(counter) {
      const target = +counter.getAttribute("data-count");
      let count = 0;
      const speed = 700;
      const increment = Math.ceil(target / speed);

      const update = () => {
        if (count < target) {
          count += increment;
          counter.innerText = count.toLocaleString();
          requestAnimationFrame(update);
        } else {
          counter.innerText = target.toLocaleString();
        }
      };
      update();
    }

    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting && !hasRun) {
          counters.forEach(counter => animateCount(counter));
          hasRun = true;
        }
      });
    }, {
      threshold: 0.3
    });

    if (counters.length) {
      observer.observe(document.querySelector("#spec"));
    }
  });
</script>


<section class="py-5 bg-white">
  <div class="container">
    <h1 class="fw-bold text-center mb-5" style="color:#0c2340;">GURD-Rwanda: Extended Program Descriptions</h1>

    <div class="row g-4">

      <!-- Program Card -->
      <div class="col-md-4">
        <div class="program-box border rounded shadow-sm p-3 h-100 bg-light">
          <div class="image-wrapper mb-3">
            <img src="img/201.jpg" alt="LIFE Clubs" class="img-fluid rounded">
          </div>
          <h5 class="text-primary fw-bold">1. LIFE (Leadership, Integrity, Focus, Empowerment) Clubs – Life Skills for Girls</h5>
          <p class="text-muted">Empowers adolescent girls through life skills training, mentorship, and leadership development. Aims to scale across the Western Province.</p>
          <a href="lifeclubs.php" class="btn btn-sm btn-outline-primary">Read More</a>
        </div>
      </div>

      <!-- Program Card -->
      <div class="col-md-4">
        <div class="program-box border rounded shadow-sm p-3 h-100 bg-light">
          <div class="image-wrapper mb-3">
            <img src="img/303.jpeg" alt="ICYIZERE Program" class="img-fluid rounded">
          </div>
          <h5 class="text-primary fw-bold">2. ICYIZERE Program – Vocational Education for Teen Mothers</h5>
          <p class="text-muted">Offers certified training, mentorship, and job connections to teen mothers, helping them rebuild their lives and become self-sufficient.</p>
          <a href="icyizere.php" class="btn btn-sm btn-outline-primary">Read More</a>
        </div>
      </div>

      <!-- Program Card -->
      <div class="col-md-4">
        <div class="program-box border rounded shadow-sm p-3 h-100 bg-light">
          <div class="image-wrapper mb-3">
            <img src="img/100.jpeg" alt="WEEP Program" class="img-fluid rounded">
          </div>
          <h5 class="text-primary fw-bold">3. WEEP – Women Economic Empowerment Program</h5>
          <p class="text-muted">Supports teen mothers through business training, VSLA savings, and access to microloans for sustainable income and independence.</p>
          <a href="weep.php" class="btn btn-sm btn-outline-primary">Read More</a>
        </div>
      </div>

      <!-- Program Card -->
      <div class="col-md-4">
        <div class="program-box border rounded shadow-sm p-3 h-100 bg-light">
          <div class="image-wrapper mb-3">
            <img src="img/109.jpg" alt="SRHR Program" class="img-fluid rounded">
          </div>
          <h5 class="text-primary fw-bold">4. SRHR – Sexual and Reproductive Health & Rights</h5>
          <p class="text-muted">Promotes youth access to reproductive health services through education, campaigns, and peer-led sessions on consent and STIs.</p>
          <a href="srhr" class="btn btn-sm btn-outline-primary">Read More</a>
        </div>
      </div>

      <!-- Program Card -->
      <div class="col-md-4">
        <div class="program-box border rounded shadow-sm p-3 h-100 bg-light">
          <div class="image-wrapper mb-3">
            <img src="img/18.jpg" alt="Educational Support" class="img-fluid rounded">
          </div>
          <h5 class="text-primary fw-bold">5. Educational & Scholarship Support for Teen Mothers</h5>
          <p class="text-muted">Helps teen mothers return to school by covering tuition, supplies, baby care, and offering flexible learning options and counseling.</p>
          <a href="scholarships.php" class="btn btn-sm btn-outline-primary">Read More</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Custom Style for Image Height -->
<style>
  .image-wrapper {
    height: 200px;
    overflow: hidden;
  }
  .image-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
  }
  .image-wrapper img:hover {
    transform: scale(1.05);
  }
</style>



<section id="mission_vision_values" class="py-5 bg-light">
  <div class="container-xl">
    <div class="text-center mb-5">
      <h1 class="fw-bold text-primary" style="font-size: 32px;">Our Mission, Vision, and Values</h1>
      <p class="text-muted mx-auto" style="max-width: 700px;">
        At GURD Rwanda, our foundation is built on purpose, ambition, and unwavering principles. Learn what drives us.
      </p>
    </div>

    <div class="row gy-4">
      <!-- Mission -->
      <div class="col-md-4">
        <div class="p-4 text-center shadow-sm bg-white rounded border-start border-5 border-primary h-100">
          <div class="mb-3">
            <i class="fas fa-bullseye fa-2x text-primary"></i>
          </div>
          <h5 class="fw-bold">Our Mission</h5>
          <p class="text-muted">
            To empower Rwandan communities through inclusive development programs, innovative education, and sustainable livelihood initiatives.
          </p>
        </div>
      </div>

      <!-- Vision -->
      <div class="col-md-4">
        <div class="p-4 text-center shadow-sm bg-white rounded border-start border-5 border-success h-100">
          <div class="mb-3">
            <i class="fas fa-eye fa-2x text-success"></i>
          </div>
          <h5 class="fw-bold">Our Vision</h5>
          <p class="text-muted">
            A resilient, self-reliant society where every individual has equal opportunities to thrive and lead change.
          </p>
        </div>
      </div>

      <!-- Values -->
      <div class="col-md-4">
        <div class="p-4 text-center shadow-sm bg-white rounded border-start border-5 border-warning h-100">
          <div class="mb-3">
            <i class="fas fa-heart fa-2x text-warning"></i>
          </div>
          <h5 class="fw-bold">Our Values</h5>
          <ul class="text-muted list-unstyled mb-0">
            <li>✔ Integrity</li>
            <li>✔ Accountability</li>
            <li>✔ Inclusiveness</li>
            <li>✔ Innovation</li>
            <li>✔ Community-Driven Action</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>



	<section id="blog_h" class="py-5 bg-light">
  <div class="container-xl">
    <!-- Section Header -->
    <div class="text-center mb-5">
      <h2 class="fw-bold text-primary" style="font-size: 32px;">Our News</h2>
      <p class="text-muted mx-auto" style="max-width: 700px; font-size: 16px;">
        Stay updated with GURD Rwanda’s latest stories, community impact, and insights. Learn about our projects and real-world change.
      </p>
    </div>

    <!-- News Cards: 2 Per Line -->
    <?php include "db.php"; ?>
    <div class="row g-4">
      <?php
        $result = $conn->query("SELECT * FROM posts ORDER BY created_at DESC LIMIT 6");
        while ($row = $result->fetch_assoc()):
      ?>
      <div class="col-md-6">
        <div class="card border border-primary shadow-sm h-100">
          <div class="position-relative overflow-hidden rounded-top">
            <!-- Fixed image size + crop -->
            <img src="admin/uploads/<?php echo $row['image']; ?>" class="card-img-top" alt="Blog post image"
                 style="height: 250px; object-fit: cover; width: 100%;">
            <a href="#" class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 text-white opacity-0 hover-opacity-100 transition">
              <i class="fa fa-link fa-2x"></i>
            </a>
          </div>
          <div class="card-body text-center">
            <ul class="list-inline small text-muted mb-2">
              <li class="list-inline-item"><i class="fa fa-user me-1"></i><a href="#" class="text-decoration-none">Admin</a></li>
              <li class="list-inline-item"><i class="fa fa-clock me-1"></i><?php echo date("F j, Y", strtotime($row['created_at'])); ?></li>
            </ul>
            <h5 class="card-title">
              <a href="#" class="text-dark text-decoration-none"><?php echo $row['title']; ?></a>
            </h5>
            <p class="card-text"><?php echo $row['short_description']; ?></p>
            <a href="readmore.php?id=<?php echo $row['id']; ?>" class="text-primary fw-bold">Learn More <i class="fa fa-chevron-right ms-1"></i></a>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>

    <!-- View More Button -->
    <div class="text-center mt-5">
      <a href="all-news.php" class="btn btn-primary px-4 py-2 fw-bold shadow-sm">
        View More News <i class="fa fa-arrow-right ms-2"></i>
      </a>
    </div>

  </div>
</section>


<section id="resources" class="py-5 bg-white">
  <div class="container-xl">
    <!-- Section Header -->
    <div class="text-center mb-5">
      <h2 class="fw-bold text-primary" style="font-size: 32px;">Annual Reports & Resources</h2>
      <p class="text-muted mx-auto" style="max-width: 700px; font-size: 16px;">
        Explore GURD Rwanda’s annual reports and resource materials. Transparent, accessible, and downloadable in PDF format.
      </p>
    </div>

    <!-- Report Cards -->
    <?php include "db.php"; ?>
    <div class="row g-4 justify-content-center">
      <?php
        $result = $conn->query("SELECT * FROM downloads ORDER BY uploaded_at DESC");
        while ($row = $result->fetch_assoc()):
          $title = $row['title'];
       
          $file = $row['file_path'];
          $type = $row['file_type'] ?? 'PDF';
      ?>
      <div class="col-sm-6 col-md-4">
        <div class="p-4 text-center border border-primary rounded shadow-sm h-100">
          <h5 class="text-primary"><?php echo htmlspecialchars($title); ?></h5>
        
          <a href="admin/uploads/<?php echo htmlspecialchars($file); ?>" class="btn btn-outline-primary" download>
            Download <?php echo strtoupper($type); ?>
          </a>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>

<section id="team_h" class="pt-5 pb-5 bg-light">
  <div class="container-xl">
    <!-- Main Heading -->
    <div class="text-center mb-5">
      <h1 style="color: #0056b3; font-weight: bold;">Our Team</h1>
      <p style="color: #666;">Meet the visionary leaders and dedicated staff powering GURD Rwanda’s mission.</p>
    </div>

    <!-- Board Members -->
<?php include "db.php"; ?>
<div class="mb-4">
  <h2 class="text-center mb-4" style="color: #333;">Board Members</h2>
  <div class="row text-center justify-content-center">
    <?php
      $result = $conn->query("SELECT * FROM teams ORDER BY created_at ASC");
      while ($row = $result->fetch_assoc()):
        $name = $row['name'];
        $image = $row['image'];
        $post = $row['post'];
    ?>
    <div class="col-md-3 col-sm-6 mb-4">
      <div style="border: 3px solid #007bff; border-radius: 10px; padding: 15px; background: #fff;">
        <img src="admin/uploads/<?php echo htmlspecialchars($image); ?>" class="w-100 mb-3" alt="<?php echo htmlspecialchars($name); ?>" style="border-radius: 8px; object-fit: cover; height: 270px;">
        <h5 class="mb-1"><?php echo htmlspecialchars($name); ?></h5>
        <p style="color: gray; font-size: 14px;"><?php echo htmlspecialchars($post); ?></p>
      </div>
    </div>
    <?php endwhile; ?>
  </div>
</div>

  <!-- Staff Members -->
<div>
  <h2 class="text-center mb-4" style="color: #333;">Staff Members</h2>
  <div class="row text-center justify-content-center">

    <!-- Staff Member 1 -->
    <div class="col-md-3 col-sm-6 mb-4">
      <div style="border: 3px solid #28a745; border-radius: 10px; padding: 15px; background: #fff;">
        <img src="img/ceo2.jpg" class="w-100 mb-3" alt="Tuyishime Fidele" style="border-radius: 8px;">
        <h5 class="mb-1">Tuyishime Fidele</h5>
        <p style="color: gray; font-size: 14px;">Founder, Executive Director</p>
        <p style="font-size: 14px; margin-bottom: 4px;"><i class="fas fa-phone text-success me-1"></i> (+250) 788 782 246</p>
        <p style="font-size: 14px;"><i class="fas fa-envelope text-success me-1"></i>tuyishimefidele1986@gmail.com</p>
      </div>
    </div>

    <!-- Staff Member 2 -->
    <div class="col-md-3 col-sm-6 mb-4">
      <div style="border: 3px solid #28a745; border-radius: 10px; padding: 15px; background: #fff;">
        <img src="img/op.PNG" class="w-100 mb-3" alt="Gloriose DUSHIME" style="border-radius: 8px;">
        <h5 class="mb-1">Gloriose DUSHIME</h5>
        <p style="color: gray; font-size: 14px;">Chief Operations Officer</p>
        <p style="font-size: 14px; margin-bottom: 4px;"><i class="fas fa-phone text-success me-1"></i> (+250) 783 468 611</p>
        <p style="font-size: 14px;"><i class="fas fa-envelope text-success me-1"></i>gloriosedushime9@gmail.com</p>
      </div>
    </div>

  </div>
</div>

    </div>
  </div>
</section>
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





	<section id="footer" class="bg-light text-dark py-5">
  <div class="container-xl">
    <div class="row">
      <!-- Tabs Section -->
      <div class="col-md-7 mb-4 mb-md-0">
      <ul class="nav nav-tabs border-0 mb-4" id="footerTabs">
  <li class="nav-item">
    <a class="nav-link active fw-bold text-primary" data-bs-toggle="tab" href="#join">
      JOIN US
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link fw-bold" style="color: #27ae60;" data-bs-toggle="tab" href="#shop">
      SHOP GOODIES
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link fw-bold" style="color: #e74c3c;" data-bs-toggle="tab" href="#donate">
      DONATIONS
    </a>
  </li>
</ul>


        <div class="tab-content bg-white shadow-sm rounded p-4">
          <!-- JOIN US TAB -->
          <div class="tab-pane fade show active" id="join">
            <h5 class="fw-bold text-dark mb-2">Join the Crowd. Be United!</h5>
            <p class="text-muted">Be part of a movement that brings real change. At Gurd Rwanda, we work together, grow together, and serve together for a brighter future.</p>
            <img src="img/1.jpg" class="img-fluid rounded shadow-sm" alt="Join Us">
          </div>

          <!-- SHOP GOODIES TAB -->
          <div class="tab-pane fade" id="shop">
            <h5 class="fw-bold text-dark mb-2">Shop Goodies from Our Boutique!</h5>
            <p class="text-muted">Support our mission while looking good. Our goodies support Gurd Rwanda’s community initiatives across the country.</p>
            <img src="img/2.jpg" class="img-fluid rounded shadow-sm" alt="Shop Goodies">
          </div>

          <!-- DONATIONS TAB -->
          <div class="tab-pane fade" id="donate">
            <h5 class="fw-bold text-dark mb-2">Donations Help the People</h5>
            <p class="text-muted">Your donation goes directly to projects that transform lives. Transparency, impact, and integrity – that’s the Gurd Rwanda promise.</p>
            <img src="img/1.jpg" class="img-fluid rounded shadow-sm" alt="Donations">
          </div>
        </div>
      </div>

      <!-- Accordion Section -->
      <div class="col-md-5">
        <div class="accordion" id="footerAccordion">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Why Gurd Rwanda?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#footerAccordion">
              <div class="accordion-body">
                We stand for unity, transparency, and community-driven solutions. We act with integrity and deliver results where they matter most.
              </div>
            </div>
          </div>

          <div class="accordion-item mt-3">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Future Social Goals
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#footerAccordion">
              <div class="accordion-body">
                From education to clean water access, our goals focus on creating sustainable change for generations to come.
              </div>
            </div>
          </div>

          <div class="accordion-item mt-3">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Past Achievements
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#footerAccordion">
              <div class="accordion-body">
                We’ve empowered over 10,000 youth, built 300+ clean water systems, and launched rural entrepreneurship projects across Rwanda.
              </div>
            </div>
          </div>

          <div class="accordion-item mt-3">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Approving Donations
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#footerAccordion">
              <div class="accordion-body">
                Every donation is verified and tracked through our transparent reporting systems. You see where your help goes.
              </div>
            </div>
          </div>

          <div class="accordion-item mt-3">
            <h2 class="accordion-header" id="headingFive">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                Shop Goodies
              </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#footerAccordion">
              <div class="accordion-body">
                Buy local. Wear impact. Our merchandise funds critical programs in healthcare and youth training.
              </div>
            </div>
          </div>

          <div class="accordion-item mt-3">
            <h2 class="accordion-header" id="headingSix">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                Be With Us
              </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#footerAccordion">
              <div class="accordion-body">
                Whether you volunteer, donate, or spread the word — you’re part of the Gurd Rwanda family. Let’s grow together.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

	<?php
  include "includes/footer.php"
  ?>


	<script>
		window.onscroll = function () { myFunction() };
		var navbar_sticky = document.getElementById("navbar_sticky");
		var sticky = navbar_sticky.offsetTop;
		var navbar_height = document.querySelector('.navbar').offsetHeight;
		function myFunction() {
			if (window.pageYOffset >= sticky + navbar_height) {
				navbar_sticky.classList.add("sticky")
				document.body.style.paddingTop = navbar_height + 'px';
			} else {
				navbar_sticky.classList.remove("sticky");
				document.body.style.paddingTop = '0'
			}
		}
	</script>

</body>


</html>