<!DOCTYPE html>
<html lang="en">
<?php include 'includes/title.php'; ?>
<?php include 'includes/head.php'; ?>
<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
  }

  .hero-section {
    background-color: #6f42c1;
    padding: 50px 0;
    text-align: center;
    color: white;
  }

  .container {
    width: 90%;
    max-width: 1140px;
    margin: auto;
  }

  .story-flex {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    padding: 40px 0;
  }

  .story-image {
    flex: 1;
    min-width: 280px;
  }

  .story-image img {
    width: 100%;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  }

  .story-text {
    flex: 2;
    min-width: 300px;
  }

  .story-text p {
    font-size: 1.05rem;
    line-height: 1.8;
    color: #333;
    margin-bottom: 1.5rem;
  }

  .story-text strong {
    font-weight: 700;
  }

  .story-text em {
    font-style: italic;
  }

  .gallery {
    display: flex;
    gap: 20px;
    margin-bottom: 30px;
    flex-wrap: wrap;
  }

  .gallery img {
    flex: 1;
    max-width: 49%;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  }

  @media (max-width: 768px) {
    .story-flex {
      flex-direction: column;
    }

    .gallery {
      flex-direction: column;
    }

    .gallery img {
      max-width: 100%;
    }
  }
</style>

<body>
<?php include 'includes/header.php'; ?>

<!-- Hero -->
<section class="hero-section">
  <div class="container">
    <h1>The ICYIZERE Program – Meaning Hope</h1>
  </div>
</section>

<!-- Story Content -->
<section class="container">
  <div class="story-flex">
    <div class="story-image">
      <img src="img/e1.jpg" alt="Tailoring Training">
    </div>
    <div class="story-text">
      <p><strong>The ICYIZERE Program</strong> meaning <em>Hope</em> in Kinyarwanda is a flagship initiative by GURD-Rwanda designed to empower vulnerable teen mothers and young women who dropped out of school due to early motherhood and poverty. Through this transformative program, participants are equipped with practical skills, life skills, and the tools they need to become self-reliant and thrive.</p>

      <p>Focused on two trades Fashion Design (Tailoring) and Hairdressing (Beauty), the ICYIZERE Program has so far supported 25 young women and teen mothers, helping them gain both technical knowledge and social confidence. The training has not only equipped them with employable skills, but also installed a renewed sense of purpose, dignity, and hope for the future.</p>
    </div>
  </div>

  <div class="gallery">
    <img src="img/e2.jpg" alt="Hairdressing Session">
    <img src="img/e3.jpg" alt="Classroom Sewing">
  </div>

  <div class="story-text">
    <p>Participants proudly share how they can now design clothes and hair style with confidence and professionalism. But beyond the technical aspect, the program also delivers structured life skills sessions, where trainees develop competencies in decision-making, critical thinking, informed choices, and self-esteem skills that are just as vital as their trades.</p>

    <p>A key feature of the program is financial literacy, including saving and lending practices that have enabled participants to start building a culture of planning, budgeting, and economic independence.</p>
         <a href="ourimpact.php" class="btn btn-outline-primary btn-back">← Back to Impact Stories</a>
  </div>
</section>
 
<?php include 'includes/footer.php'; ?>
</body>
</html>
