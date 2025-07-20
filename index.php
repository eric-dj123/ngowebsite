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
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <img src="img/1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-md-block">
          <h1 class="typing heading-1">Plans For a New Donation</h1>
          <p class="mt-3 w-50 text-light fs-5 animate__animated animate__fadeInUp animate__delay-2s">
            There are many variations of passages available but the majority have suffered alteration in some form by injected humour or randomised words.
          </p>
          <h6 class="mb-0 mt-4 animate__animated animate__fadeInUp animate__delay-3s">
            <a class="button" href="#">Donate Now</a>
          </h6>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <img src="img/2.JPG" class="d-block w-100" alt="...">
        <div class="carousel-caption d-md-block">
          <h1 class="typing heading-2">The Prosperity Begins Today</h1>
          <p class="mt-3 w-50 text-light fs-5 animate__animated animate__fadeInUp animate__delay-2s">
            There are many variations of passages available but the majority have suffered alteration in some form by injected humour or randomised words.
          </p>
          <h6 class="mb-0 mt-4 animate__animated animate__fadeInUp animate__delay-3s">
            <a class="button" href="#">See The Plan</a>
          </h6>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <img src="img/3.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-md-block">
          <h1 class="typing heading-3">Now, Today Everything Changes</h1>
          <p class="mt-3 w-50 text-light fs-5 animate__animated animate__fadeInUp animate__delay-2s">
            There are many variations of passages available but the majority have suffered alteration in some form by injected humour or randomised words.
          </p>
          <h6 class="mb-0 mt-4 animate__animated animate__fadeInUp animate__delay-3s">
            <a class="button" href="#">Upcoming Events</a>
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
.typing {
  font-family: 'Segoe UI', sans-serif;
  font-weight: 700;
  font-size: 3rem;
  color: #fff;
  overflow: hidden;
  white-space: nowrap;
  border-right: 3px solid #fff;
  display: inline-block;
}

.heading-1 {
  animation: typing1 3s steps(30, end), blink 0.8s step-end infinite;
}

.heading-2 {
  animation: typing2 3s steps(35, end), blink 0.8s step-end infinite;
}

.heading-3 {
  animation: typing3 3s steps(35, end), blink 0.8s step-end infinite;
}

@keyframes typing1 {
  from { width: 0 }
  to { width: 23ch } /* Adjust to match character count */
}

@keyframes typing2 {
  from { width: 0 }
  to { width: 30ch }
}

@keyframes typing3 {
  from { width: 0 }
  to { width: 32ch }
}

@keyframes blink {
  0%, 100% { border-color: transparent }
  50% { border-color: white }
}
</style>

<section id="serv_pg" class="p_3">
  <div class="container-xl">
    <!-- Service Icons Section -->
    <div class="row serv_pg1">
      <div class="col-md-3 col-sm-6">
        <div class="serv_pg1l">
          <div class="serv_pg1li row">
            <div class="col-md-3">
              <div class="serv_pg1lil">
                <span class="font_50 col_red lh-1"><i class="fa fa-hand-holding-heart"></i></span>
              </div>
            </div>
            <div class="col-md-9">
              <div class="serv_pg1lir">
                <h5>Humanitarian Aid</h5>
                <h6 class="mb-0">Providing emergency support in crises</h6>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="serv_pg1l">
          <div class="serv_pg1li row">
            <div class="col-md-3">
              <div class="serv_pg1lil">
                <span class="font_50 text-warning lh-1"><i class="fa fa-graduation-cap"></i></span>
              </div>
            </div>
            <div class="col-md-9">
              <div class="serv_pg1lir">
                <h5>Education Support</h5>
                <h6 class="mb-0">Scholarships & school infrastructure</h6>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="serv_pg1l">
          <div class="serv_pg1li row">
            <div class="col-md-3">
              <div class="serv_pg1lil">
                <span class="font_50 text-info lh-1"><i class="fa fa-water"></i></span>
              </div>
            </div>
            <div class="col-md-9">
              <div class="serv_pg1lir">
                <h5>Clean Water Projects</h5>
                <h6 class="mb-0">Drilling boreholes in rural areas</h6>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="serv_pg1l">
          <div class="serv_pg1li row">
            <div class="col-md-3">
              <div class="serv_pg1lil">
                <span class="font_50 col_blue lh-1"><i class="fa fa-users"></i></span>
              </div>
            </div>
            <div class="col-md-9">
              <div class="serv_pg1lir">
                <h5>Empowerment</h5>
                <h6 class="mb-0">Training youth & women in entrepreneurship</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Section Title -->
 


<section id="spec" class="bg_blue pt-5 pb-5">
  <div class="container-xl">
    <div class="row spec_1">
      <!-- Girls benefited -->
      <div class="col-md-3 col-sm-6">
        <div class="spec_1i">
          <h1 class="text-white font_60">3,500</h1>
          <h6 class="mb-0 text-white-50 mt-3">
            <i class="fa-solid fa-children fs-3 align-middle col_red me-2"></i>
            Girls benefited from our programs
          </h6>
        </div>
      </div>

      <!-- School fees paid -->
      <div class="col-md-3 col-sm-6">
        <div class="spec_1i">
          <h1 class="text-white font_60">15</h1>
          <h6 class="mb-0 text-white-50 mt-3">
            <i class="fa-solid fa-graduation-cap fs-3 align-middle col_red me-2"></i>
            Schools fees paid for students in secondary schools
          </h6>
        </div>
      </div>

      <!-- SRHR clubs -->
      <div class="col-md-3 col-sm-6">
        <div class="spec_1i">
          <h1 class="text-white font_60">10</h1>
          <h6 class="mb-0 text-white-50 mt-3">
            <i class="fa-solid fa-people-group fs-3 align-middle col_red me-2"></i>
            SRHR Clubs established in schools
          </h6>
        </div>
      </div>

      <!-- Hygienic pads -->
      <div class="col-md-3 col-sm-6">
        <div class="spec_1i">
          <h1 class="text-white font_60">600</h1>
          <h6 class="mb-0 text-white-50 mt-3">
            <i class="fa-solid fa-kit-medical fs-3 align-middle col_red me-2"></i>
            Provision of Hygienic pads
          </h6>
        </div>
      </div>
    </div>
  </div>
</section>



	<section id="goal" class="p_3">
		<div class="container-xl">
			<div class="goal_1 row mb-4 text-center">
				<div class="col-md-12">
  <h1 class="col_blue">Goals & Achievements</h1>
  <p class="mb-0">
    At GURD Rwanda, we are committed to creating lasting impact in communities through our programs in education, health, and youth empowerment.
    <br>
    With every project, we strive to reach more lives, strengthen resilience, and promote equality—one goal at a time.
  </p>
</div>

			</div>
			<div class="goal_2 row">
				<div class="col-md-6">
					<div class="goal_2l position-relative">
						<div class="goal_2l1">
							<div class="grid clearfix">
								<figure class="effect-jazz mb-0">
									<a href="#"><img src="img/4.JPG" class="w-100" alt="abc"></a>
								</figure>
							</div>
						</div>
						<div class="goal_2l2 position-absolute w-100 h-100 top-0 bg_backo text-center">
							<span><a class="font_70 col_red" href="#"><i class="fa fa-youtube-play"></i></a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="goal_2r">
						<h3 class="mb-3">120 Goals Accomplished so far</h3>
						<p>Glorious United for Rural Development (GURD) is a non-profit organization that was founded in 2020 by Fidele, with the mission to improve the lives of vulnerable youth and teenagers in rural areas. In addition to Fidele , 13 other individuals joined him to establish GURD, all of whom were passionate about improving the lives of young people in rural areas..</p>
						<p>Through its education, health, and community development initiatives, GURD aims to address issues like unplanned pregnancy among young people, poverty-related school dropout, and lack of life skills among young people/ teenagers.</p>
                        <p>The organization is committed to transforming the lives of young people and empowering them to reach their full potential.</p>
					
					</div>
				</div>
			</div>
		</div>
	</section>

<section id="contri" style="background: url('img/5.jpg') no-repeat center center / cover; padding: 80px 0; position: relative;">
  <div style="background-color: rgba(0, 64, 128, 0.75); position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;"></div>
  <div class="container-xl position-relative" style="z-index: 2;">
    <div class="row text-center">
      <div class="col-md-12">
        <h1 class="fw-bold text-white" style="font-size: 36px;">Get Involved</h1>
        <h6 class="text-white-50" style="font-size: 16px;">Contribute to Changing Lives Across Rwanda</h6>
        <p class="mt-4 mx-auto text-white-50" style="max-width: 750px; font-size: 15px; line-height: 1.8;">
          Join <strong>GURD Rwanda</strong> in empowering communities and building a brighter future.
          Your involvement — whether as a donor, volunteer, or partner — helps us deliver programs in
          girls’ education, health rights, clean water access, and youth empowerment.
          <br><br>
          Together, we can reach more vulnerable populations and achieve lasting, sustainable change.
        </p>
        <div class="mt-4">
          <a class="btn" href="donation.html" style="background-color: #ffffff; color: #004080; font-weight: 600; padding: 10px 28px; border-radius: 30px; font-size: 15px; text-transform: uppercase; transition: all 0.3s;">
            Donate Now
          </a>
        </div>
      </div>
    </div>
  </div>
</section>



<section id="about_h" class="p-5 bg-light">
  <div class="container-xl">
    <div class="row align-items-center">
      
      <!-- Left Features -->
      <div class="col-md-4 text-end pe-md-5">
        <h3 class="text-primary">Community Development</h3>
        <p>We work closely with rural communities to facilitate sustainable development through training, resources, and local leadership.</p>
        
        <h3 class="mt-4 text-primary">Education for All</h3>
        <p>From primary schools to vocational training, we ensure equal access to quality education for girls and youth.</p>
        
        <h3 class="mt-4 text-primary">Healthcare & Hygiene</h3>
        <p>We support mobile clinics and hygiene education—providing essential resources to vulnerable communities.</p>
      </div>

      <!-- Center Image -->
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="shadow rounded overflow-hidden">
          <img src="img/7.jpg" class="w-100" alt="GURD Rwanda Programs">
        </div>
      </div>

      <!-- Right Features -->
      <div class="col-md-4 ps-md-5">
        <h3 class="text-primary">Youth Empowerment</h3>
        <p>Our youth initiatives include leadership workshops, mentorship programs, and entrepreneurship challenges.</p>
        
        <h3 class="mt-4 text-primary">Water & Sanitation</h3>
        <p>We drill boreholes and conduct sanitation campaigns to ensure safe water access in remote areas.</p>
        
        <h3 class="mt-4 text-primary">Volunteer Engagement</h3>
        <p>GURD Rwanda thrives on the dedication of volunteers who help us deliver services, outreach, and events.</p>
      </div>

    </div>
  </div>
</section>
<section id="programs" class="py-5 bg-white">
  <div class="container-xl">
    <!-- Title -->
    <div class="row text-center mb-5">
      <div class="col-md-12">
        <h2 class="fw-bold text-primary" style="font-size: 32px;">Our Programs</h2>
        <p class="text-muted" style="max-width: 700px; margin: auto; font-size: 16px;">
          GURD Rwanda delivers targeted community programs across multiple sectors—from education and health to water access and economic opportunity.
          Explore our core initiatives and see how your support makes a tangible difference.
        </p>
      </div>
    </div>

    <!-- Program Cards with Bold Borders -->
    <div class="row g-4">
      <!-- Education -->
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 shadow-sm border-3 border-primary rounded-4">
          <img src="img/1.jpg" class="card-img-top rounded-top-4" alt="Education Program">
          <div class="card-body">
            <h5 class="card-title text-primary">Education Support</h5>
            <p class="card-text">Scholarships, school supplies & vocational training for girls and youth.</p>
          </div>
        </div>
      </div>

      <!-- Health -->
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 shadow-sm border-3 border-success rounded-4">
          <img src="img/5.jpg" class="card-img-top rounded-top-4" alt="Health Program">
          <div class="card-body">
            <h5 class="card-title text-success">Health & Hygiene</h5>
            <p class="card-text">Mobile clinics, hygiene awareness and distribution of sanitary pads.</p>
          </div>
        </div>
      </div>

      <!-- Water -->
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 shadow-sm border-3 border-info rounded-4">
          <img src="img/5.jpg" class="card-img-top rounded-top-4" alt="Water Program">
          <div class="card-body">
            <h5 class="card-title text-info">Clean Water Access</h5>
            <p class="card-text">Borehole drilling and community sanitation initiatives.</p>
          </div>
        </div>
      </div>

      <!-- Youth & Women Empowerment -->
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 shadow-sm border-3 border-warning rounded-4">
          <img src="img/7.jpg" class="card-img-top rounded-top-4" alt="Youth Empowerment Program">
          <div class="card-body">
            <h5 class="card-title text-warning">Youth & Women Empowerment</h5>
            <p class="card-text">Workshops, mentorship, and small‑business grants.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section id="work_home" class="py-5 bg-white">
  <div class="container-xl">
    <div class="text-center mb-5">
      <h1 class="fw-bold text-primary" style="font-size: 32px;">Our Work</h1>
      <p class="text-muted mx-auto" style="max-width: 700px;">
        At GURD Rwanda, our approach is transparent and results-driven. Discover the steps we take—from planning to impact—to serve communities across the nation.
      </p>
    </div>

    <div class="row gy-4">
      <!-- Step 1 -->
      <div class="col-sm-6 col-md-3">
        <div class="p-4 text-center border-start border-5 border-primary">
          <div class="bg-primary text-white rounded-circle mx-auto" style="width: 60px; height: 60px; line-height: 60px; font-size: 24px;">
            1
          </div>
          <h5 class="mt-3">Identify Needs</h5>
          <p class="text-muted">We connect with communities to assess their challenges and priorities.</p>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="col-sm-6 col-md-3">
        <div class="p-4 text-center border-start border-5 border-success">
          <div class="bg-success text-white rounded-circle mx-auto" style="width: 60px; height: 60px; line-height: 60px; font-size: 24px;">
            2
          </div>
          <h5 class="mt-3">Plan & Design</h5>
          <p class="text-muted">We collaborate with stakeholders to design impactful, sustainable projects.</p>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="col-sm-6 col-md-3">
        <div class="p-4 text-center border-start border-5 border-info">
          <div class="bg-info text-white rounded-circle mx-auto" style="width: 60px; height: 60px; line-height: 60px; font-size: 24px;">
            3
          </div>
          <h5 class="mt-3">Execute</h5>
          <p class="text-muted">Our team implements interventions—from borehole drilling to youth training.</p>
        </div>
      </div>

      <!-- Step 4 -->
      <div class="col-sm-6 col-md-3">
        <div class="p-4 text-center border-start border-5 border-warning">
          <div class="bg-warning text-white rounded-circle mx-auto" style="width: 60px; height: 60px; line-height: 60px; font-size: 24px;">
            4
          </div>
          <h5 class="mt-3">Evaluate & Scale</h5>
          <p class="text-muted">We measure outcomes and expand successful programs to other communities.</p>
        </div>
      </div>
    </div>

    <div class="text-center mt-4">
      <a href="work.html" class="btn btn-primary btn-lg">View More Work</a>
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
    <div class="row g-4 justify-content-center">
      <!-- Annual Report 2024 -->
      <div class="col-sm-6 col-md-4">
        <div class="p-4 text-center border border-primary rounded shadow-sm h-100">
          <h5 class="text-primary">Annual Report 2024</h5>
          <p class="text-muted mb-3">A summary of our impact, financials, and strategic progress for the 2023–2024 year.</p>
          <a href="docs/GURD_Annual_Report_2024.pdf" class="btn btn-outline-primary" download>
            Download PDF
          </a>
        </div>
      </div>

      <!-- Annual Report 2023 -->
      <div class="col-sm-6 col-md-4">
        <div class="p-4 text-center border border-primary rounded shadow-sm h-100">
          <h5 class="text-primary">Annual Report 2023</h5>
          <p class="text-muted mb-3">Highlights from last year: programs, achievements, and audited financials.</p>
          <a href="docs/GURD_Annual_Report_2023.pdf" class="btn btn-outline-primary" download>
            Download PDF
          </a>
        </div>
      </div>

      <!-- Brochure/Impact Overview -->
      <div class="col-sm-6 col-md-4">
        <div class="p-4 text-center border border-primary rounded shadow-sm h-100">
          <h5 class="text-primary">Impact Brochure</h5>
          <p class="text-muted mb-3">A snapshot of our community work, milestones, and partner information.</p>
          <a href="docs/GURD_Impact_Brochure.pdf" class="btn btn-outline-primary" download>
            Download PDF
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="events" class="py-5 bg-white">
  <div class="container-xl">
    <!-- Header -->
    <div class="text-center mb-5">
      <h2 class="fw-bold text-primary" style="font-size: 32px;">Our Events</h2>
      <p class="text-muted mx-auto" style="max-width: 700px; font-size: 16px;">
        Join us at our upcoming events or review past gatherings focusing on community development, water access, education, and more.
      </p>
    </div>

    <!-- Upcoming Events -->
    <h3 class="text-secondary mb-4">Upcoming Events</h3>
    <div class="row g-4 mb-5">
      <!-- Example Upcoming Event -->
      <div class="col-md-6">
        <div class="border border-primary rounded shadow-sm p-4 h-100 d-flex flex-column">
          <h5 class="text-primary">Clean Water Drill Day</h5>
          <p class="text-muted mb-1"><i class="fa fa-calendar me-2"></i>June 20, 2025 | 9:00 AM–1:00 PM</p>
          <p class="text-muted mb-auto"><i class="fa fa-map-marker-alt me-2"></i>Nyamasheke Village, Rwanda</p>
          <a href="register.html" class="btn btn-primary mt-3 align-self-start">Register Now</a>
        </div>
      </div>

      <!-- Second Upcoming Event -->
      <div class="col-md-6">
        <div class="border border-primary rounded shadow-sm p-4 h-100 d-flex flex-column">
          <h5 class="text-primary">Girls’ Leadership Workshop</h5>
          <p class="text-muted mb-1"><i class="fa fa-calendar me-2"></i>July 5, 2025 | 2:00 PM–5:00 PM</p>
          <p class="text-muted mb-auto"><i class="fa fa-map-marker-alt me-2"></i>Gisenyi Community Hall</p>
          <a href="register.html" class="btn btn-primary mt-3 align-self-start">Register Now</a>
        </div>
      </div>
    </div>

    <!-- Past Events -->
    <h3 class="text-secondary mb-4">Past Events</h3>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="border border-secondary rounded shadow-sm">
          <img src="img/1.jpg" class="w-100 rounded-top" alt="Past event photo">
          <div class="p-3">
            <h5 class="text-dark">Youth Vocational Fair 2024</h5>
            <p class="text-muted"><i class="fa fa-calendar me-2"></i>December 2024</p>
            <a href="past_event.html" class="text-primary fw-bold">View Recap <i class="fa fa-chevron-right ms-1"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="border border-secondary rounded shadow-sm">
          <img src="img/1.jpg" class="w-100 rounded-top" alt="Past event photo">
          <div class="p-3">
            <h5 class="text-dark">Clean Water Launch 2023</h5>
            <p class="text-muted"><i class="fa fa-calendar me-2"></i>May 2023</p>
            <a href="past_event.html" class="text-primary fw-bold">View Recap <i class="fa fa-chevron-right ms-1"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="border border-secondary rounded shadow-sm">
          <img src="img/1.jpg" class="w-100 rounded-top" alt="Past event photo">
          <div class="p-3">
            <h5 class="text-dark">Health & Hygiene Campaign 2022</h5>
            <p class="text-muted"><i class="fa fa-calendar me-2"></i>September 2022</p>
            <a href="past_event.html" class="text-primary fw-bold">View Recap <i class="fa fa-chevron-right ms-1"></i></a>
          </div>
        </div>
      </div>
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
    <div class="mb-4">
      <h2 class="text-center mb-4" style="color: #333;">Board Members</h2>
      <div class="row text-center">
        <div class="col-md-3 col-sm-6 mb-4">
          <div style="border: 3px solid #007bff; border-radius: 10px; padding: 15px; background: #fff;">
            <img src="img/p1.JPEG" class="w-100 mb-3" alt="Board Member" style="border-radius: 8px;">
            <h5 style="margin: 0;">Jean Pierre</h5>
            <p style="color: gray; font-size: 14px;">Chairperson</p>
          </div>
        </div>
        <!-- Add more Board Members here -->
      </div>
    </div>

    <!-- Staff Members -->
    <div>
      <h2 class="text-center mb-4" style="color: #333;">Staff Members</h2>
      <div class="row text-center">
        <div class="col-md-3 col-sm-6 mb-4">
          <div style="border: 3px solid #28a745; border-radius: 10px; padding: 15px; background: #fff;">
            <img src="img/p2.jpg" class="w-100 mb-3" alt="Staff Member" style="border-radius: 8px;">
            <h5 style="margin: 0;">Marie Claire</h5>
            <p style="color: gray; font-size: 14px;">Program Officer</p>
          </div>
        </div>
        <!-- Add more Staff Members here -->
      </div>
    </div>
  </div>
</section>
<section id="partners" class="py-5 bg-light">
  <div class="container-xl">
    <!-- Header -->
    <div class="text-center mb-5">
      <h2 class="fw-bold text-primary" style="font-size: 32px;">Our Partners</h2>
      <p class="text-muted mx-auto" style="max-width: 700px; font-size: 16px;">
        We’re proud to collaborate with organizations who share our mission of community development and impact.
      </p>
    </div>

    <!-- Partner Logos with Green Borders -->
    <div class="row align-items-center justify-content-center g-4">
      <!-- Partner 1 -->
      <div class="col-6 col-sm-4 col-md-2 text-center">
        <a href="https://partner1.org" target="_blank">
          <img src="img/t1.JPG" alt="Partner 1" 
               style="max-width: 120px; 
                      border: 4px solid #28a745; 
                      padding: 6px; 
                      border-radius: 8px;
                      transition: transform .3s;">
        </a>
      </div>

      <!-- Partner 2 -->
      <div class="col-6 col-sm-4 col-md-2 text-center">
        <a href="https://partner2.org" target="_blank">
          <img src="img/t2.JPG" alt="Partner 2" 
               style="max-width: 120px; 
                      border: 4px solid #28a745; 
                      padding: 6px; 
                      border-radius: 8px;
                      transition: transform .3s;">
        </a>
      </div>

      <!-- Partner 3 -->
      <div class="col-6 col-sm-4 col-md-2 text-center">
        <a href="https://partner3.org" target="_blank">
          <img src="img/t3.JPG" alt="Partner 3" 
               style="max-width: 120px; 
                      border: 4px solid #28a745; 
                      padding: 6px; 
                      border-radius: 8px;
                      transition: transform .3s;">
        </a>
      </div>

      <!-- Partner 4 -->
      <div class="col-6 col-sm-4 col-md-2 text-center">
        <a href="https://partner4.org" target="_blank">
          <img src="img/t4.JPG" alt="Partner 4" 
               style="max-width: 120px; 
                      border: 4px solid #28a745; 
                      padding: 6px; 
                      border-radius: 8px;
                      transition: transform .3s;">
        </a>
      </div>

 
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