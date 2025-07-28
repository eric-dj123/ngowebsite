<!DOCTYPE html>
<html lang="en">
<?php include 'includes/title.php'; ?>
<body>

<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<!-- Banner Section -->
<section id="center" class="center_about">
  <div class="center_om" style="background-color: #0c2340; padding: 100px 0;">
    <div class="container-xl text-center text-white">
      <h1 class="fw-bold text-uppercase">Meet the Founder</h1>
      <h6 class="fw-bold">
        <a href="index.php" class="text-white">Home</a> <span class="mx-2">/</span> Meet the Founder
      </h6>
    </div>
  </div>
</section>

<!-- Founder Bio Section -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="row align-items-start mb-4">
          <div class="col-md-3 mb-3">
            <!-- Replace with actual image of Fidèle -->
            <img src="img/ceo2.jpg" alt="TUYISHIME Fidèle" class="img-fluid rounded shadow">
          </div>
          <div class="col-md-9">
            <h3 class="fw-bold text-uppercase">TUYISHIME Fidèle</h3>
            <p>Fidèle, the founder of GURD-Rwanda, is a passionate advocate for education and empowerment of rural youth and teenagers. The idea behind GURD-Rwanda began in 2014, when Fidèle, the organization's founder, was working as a teacher and saw first-hand the devastating effects of unplanned pregnancies, child marriage, and poverty on young people's education. Drawing from his 8 years of experience working in education at the grassroots level, Fidèle was motivated to launch GURD to promote health education and combat sexual and gender-based violence (SGBV).</p>
            <p>Over the years, Fidèle saw the problem of teen pregnancy and dropout rates in rural communities become more and more severe. He was moved to action and developed a plan to support young girls to empower themselves and overcome the challenges they faced. He recognized that a lack of accurate information about reproductive health and life skills was a major contributing factor to the problem. He realized that it was useless for students to excel in academics but end up dropping out of school due to unintended pregnancies, so he started a health education program.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="p-4 bg-light border rounded h-100">
              <p>In 2019, Fidèle met with one of his former students who had dropped out of school in 2013 after an unplanned pregnancy and subsequent marriage. When they reconnected, the student told Fidèle that she had since separated from her husband and was struggling to support herself and her child. This encounter left a profound impression on Fidèle, who realized that child marriage, unplanned pregnancies, and poverty are among the biggest obstacles to gender equality and girls' access to education and opportunities to live a life of dignity.</p>
            </div>
          </div>

          <div class="col-md-6 mt-4 mt-md-0">
            <div class="p-4 bg-light border rounded h-100">
              <p>After his life-changing encounter with his former student, Fidèle was inspired to create a more comprehensive solution to the problems facing young people in his community. He established a program that combined life skills, scholarship opportunities, and education on sexual reproductive and reproductive health and sexual gender-based violence prevention and response. This program aimed to empower young people with the knowledge, skills, and resources they need to build successful lives and break the cycle of poverty.</p>
            </div>
          </div>
        </div>

        <div class="mt-4">
          <p>To complement his extensive experience in the field, Fidèle holds a bachelor's degree in international politics from the National University of Rwanda. He attended several national and international conferences, trainings and meetings that have increased his sector knowledge, shaped his leadership skill and expanded his network.</p>
        </div>
          <div class="mt-4">
          <p>His background in education and his commitment to youth empowerment led him to become Rwanda country coordinator of One Africa Forum since August 2016.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include "includes/footer.php"; ?>

<script>
  window.onscroll = function() {myFunction()};
  var navbar_sticky = document.getElementById("navbar_sticky");
  var sticky = navbar_sticky.offsetTop;
  var navbar_height = document.querySelector('.navbar').offsetHeight;
  function myFunction() {
    if (window.pageYOffset >= sticky + navbar_height) {
      navbar_sticky.classList.add("sticky");
      document.body.style.paddingTop = navbar_height + 'px';
    } else {
      navbar_sticky.classList.remove("sticky");
      document.body.style.paddingTop = '0';
    }
  }
</script>

</body>
</html>
