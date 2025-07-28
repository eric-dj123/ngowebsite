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

<section id="center" class="center_about">
  <div class="center_om" style="background-color: #0c2340; padding: 100px 0;">
    <div class="container-xl text-center text-white">
      <h1 class="fw-bold text-uppercase">Our About Us</h1>
      <h6 class="fw-bold">
        <a href="index.php" class="text-white">Home</a> <span class="mx-2">/</span> Our About Us
      </h6>
    </div>
  </div>
</section>


<!-- Mission, Vision, and Values Section -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mb-4">
        <img src="img/ab.jpg" alt="Mission of GURD" class="img-fluid rounded shadow">
      </div>
      <div class="col-md-6">
        <h3 class="fw-bold">Mission of GURD</h3>
        <p>We aim to support Girls and women by empowering them with knowledge and skills in sexual reproductive health, equipping them to navigate life's challenges, and providing counseling and socio-economic opportunities. We also focus on gender based violence prevention and response, (SGBV) as well as improving girls' educational outcomes.</p>
        <p>Through these initiatives, we hope to help young people achieve their full potential and create a brighter future for themselves and their communities.</p>

        <h4 class="fw-bold mt-4">GURD's Vision</h4>
        <p>“Attaining sustainable and transformative change for young people in rural communities”.</p>

        <h5 class="fw-bold mt-4">Our Values</h5>
        <ul style="list-style: disc; padding-left: 20px;">
          <li>Commitment</li>
          <li>Diversity and Inclusion</li>
          <li>Collaboration</li>
          <li>Collective Care</li>
          <li>Creativity and Innovation</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Our Story Section -->
<section class="py-5" style="background-color: #f8f9fa;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold text-uppercase" style="color: #0c2340;">Our Story</h2>
      <div class="mx-auto" style="width: 60px; height: 4px; background-color: #e83e8c;"></div>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-8">
        <div class="p-4 p-md-5 border border-3 rounded" style="border-color: #e83e8c; background-color: #ffffff;">
          <h4 class="fw-bold mb-3" style="color: #0c2340;">Glorious United for Rural Development (GURD)</h4>
          <p class="text-secondary">
            Glorious United for Rural Development (GURD) is a non-profit organization that was founded in 2020 by Fidele, with the mission to improve the lives of vulnerable youth and teenagers in rural areas. In addition to Fidele, 13 other individuals joined him to establish GURD, all of whom were passionate about improving the lives of young people in rural areas.
          </p>
          <p class="text-secondary">
            Through its education, health, and community development initiatives, GURD aims to address issues like unplanned pregnancy among young people, poverty-related school dropout, and lack of life skills among young people/teenagers.
          </p>
          <p class="text-secondary">
            The organization is committed to transforming the lives of young people and empowering them to reach their full potential.
          </p>
          <a href="meetfounder.php" class="btn btn-outline-danger mt-3 fw-bold">Meet The Founder</a>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
  include "includes/footer.php"
  ?>


<script>
window.onscroll = function() {myFunction()};
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