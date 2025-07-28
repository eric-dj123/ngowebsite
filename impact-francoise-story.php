<!DOCTYPE html>
<html lang="en">
<?php include 'includes/title.php'; ?>
<?php include 'includes/head.php'; ?>
<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f8f9fa;
  }

  .hero-section {
      background-color: #b338acff;
    padding: 60px 0;
    text-align: center;
    color: #fff;
  }

  .story-wrapper {
    padding: 60px 0;
  }

  .story-columns {
    column-count: 2;
    column-gap: 60px;
  }

  .story-columns p, .story-columns h3 {
    font-size: 1.05rem;
    line-height: 1.9;
    margin-bottom: 1.5rem;
    break-inside: avoid;
  }

  .story-columns h3 {
    font-size: 1.25rem;
    font-weight: 700;
    color: #333;
  }

  .story-columns img {
    max-width: 100%;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    margin: 1.5rem auto;
    display: block;
    break-inside: avoid;
  }

  @media (max-width: 768px) {
    .story-columns {
      column-count: 1;
    }
  }

  .btn-back {
    font-weight: 600;
    margin-top: 2rem;
  }
</style>

<body>
<?php include 'includes/header.php'; ?>

<!-- Hero -->
<section class="hero-section">
  <div class="container">
    <h1 class="fw-bold">Journey to Empowerment through GURD-Rwanda’s Icyizere Program</h1>
  </div>
</section>

<!-- Story -->
<section class="story-wrapper">
  <div class="container">
    <div class="story-columns">

      <h3>Journey to Empowerment through GURD-Rwanda’s Icyizere Program</h3>

      <img src="img/c1.jpg" alt="Francoise working in salon">

      <p><strong>Francoise NIYOBUHUNGIRO</strong>, a 30-year-old woman from the rural areas of Nyamasheke District, grew up under the extreme poverty. Her childhood was marked by hardship, where access to quality education was a distant dream. As a result, her aspirations to build a successful future gradually faded, and eventually, she dropped out of school like many girls facing similar conditions in rural Rwanda many years ago.</p>

      <p>Life became increasingly challenging, with limited opportunities and no clear path forward. But everything began to change the day she encountered staff members from GURD-Rwanda. They introduced her to the Icyizere Program, an initiative designed to empower young women through vocational education and life skills training.</p>

      <p>Francoise was enroll in GURD’s vocational training center, choosing the Hairdressing program. During her time there, she not only gained technical skills in her trade but also benefited from soft skills training that helped her rebuild her confidence, self-esteem, and future vision.</p>

      <img src="img/c2.jpg" alt="Francoise doing hairdressing">

      <p>After successfully completing the training, Francoise relocated to Kigali, where she secured an internship at a local salon. This hands-on experience allowed her to sharpen her professional skills and adapt to the demands of the beauty industry in a competitive urban market.</p>

      <p>Her dedication and resilience soon paid off. When GURD-Rwanda launched a Community Empowerment Salon with full equipped with tools as part of its support for graduates, Francoise emerged as the most qualified and promising candidate. She was selected to run the salon and now earns an average daily income of 6,000 to 8,000 RWF, which translates to a monthly income of approximately 200,000 RWF — a significant transformation from her previous reality.</p>

      <p>Beyond her personal success, Francoise has become an inspiration of hope for other young women in her community. She now mentors and trains fellow graduates, offering internship opportunities and helping them enter the workforce with dignity and confidence.</p>

      <img src="img/c3.jpg" alt="Francoise training another girl">

      <p>Francoise’s story is one of many that highlight how GURD-Rwanda is restoring hope and building resilience among young women and teen mothers in Nyamasheke District. Through programs like Icyizere, GURD is not only equipping them with skills but also igniting a new generation of empowered women capable of transforming their communities.</p>

    </div>

    <div class="text-center">
      <a href="ourimpact.php" class="btn btn-outline-primary btn-back">← Back to Impact Stories</a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
</body>
</html>
