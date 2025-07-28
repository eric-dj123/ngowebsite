<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'includes/title.php'; ?>
  <?php include 'includes/head.php'; ?>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f6f9;
    }

    .hero-section {
      background-color: #2a3756;
      padding: 80px 0;
      text-align: center;
    }

    .hero-section h2 {
      font-size: 3rem;
      font-weight: 700;
      color: #fff;
    }

    .hero-section p {
      font-size: 1.3rem;
      color: #f5c518;
      font-weight: 500;
    }

    .program-section {
      padding: 60px 0;
    }

    .program-image {
      width: 100%;
      height: 300px;
      object-fit: cover;
      border-radius: 12px;
      border: 3px solid #009688;
      transition: transform 0.3s;
    }

    .program-image:hover {
      transform: scale(1.03);
    }

    .program-content {
      background: #ffffff;
      padding: 40px;
      border-left: 6px solid #009688;
      border-radius: 8px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.07);
      margin-top: 30px;
    }

    .program-title {
      color: #0c2340;
      font-size: 30px;
      font-weight: 800;
      margin-bottom: 25px;
    }

    .program-description {
      font-size: 17px;
      line-height: 1.9;
      color: #333;
      margin-bottom: 20px;
    }

    @media (max-width: 768px) {
      .hero-section h2 {
        font-size: 2rem;
      }
      .program-content {
        padding: 25px;
      }
    }
  </style>
</head>
<body>

  <?php include 'includes/header.php'; ?>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <h2>ICYIZERE Program – Vocational Education for Teen Mothers</h2>
      <p>Empowering teen mothers with hope, skills, and opportunity.</p>
    </div>
  </section>

  <!-- Main Content Section -->
  <section class="program-section">
    <div class="container">

      <!-- Image Row -->
      <div class="row mb-5">
        <div class="col-md-6 mb-4">
          <img src="img/16.jpg" alt="ICYIZERE Training 1" class="program-image shadow-sm">
        </div>
        <div class="col-md-6 mb-4">
          <img src="img/17.jpg" alt="ICYIZERE Training 2" class="program-image shadow-sm">
        </div>
      </div>

      <!-- Program Text -->
      <div class="program-content">
        <h3 class="program-title">ICYIZERE (meaning “Hope”)</h3>

        <p class="program-description">
          ICYIZERE (meaning “Hope”) is a transformative education and skills empowerment program targeting out-of-school teen mothers. It provides a safe space and structured pathway for young mothers to rebuild their lives through vocational short courses.
        </p>

        <p class="program-description">
          GURD-Rwanda trains beneficiaries in high-demand trades such as tailoring, culinary arts, hairdressing, and basic IT. The program supports their enrollment in certified TVET institutions and offers follow-up coaching to ensure long-term learning.
        </p>

        <p class="program-description">
          Beyond technical training, ICYIZERE includes counseling and mentorship to address trauma and boost self-confidence. The program also supplies learning materials, transportation support, childcare items, and basic nutrition where needed. These interventions ensure mothers can focus on learning without worrying about daily survival.
        </p>

        <p class="program-description">
          Each course culminates in a skills showcase or internship that connects participants with job or business opportunities. ICYIZERE helps participants become both earners and role models, inspiring other girls in similar situations.
        </p>
      </div>
    </div>
  </section>

  <?php include 'includes/footer.php'; ?>
</body>
</html>
