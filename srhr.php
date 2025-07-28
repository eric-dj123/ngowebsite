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
      <h2>SRHR – Sexual and Reproductive Health & Rights Program</h2>
      <p>Promoting the health, dignity, and rights of girls and young women.</p>
    </div>
  </section>

  <!-- Main Content Section -->
  <section class="program-section">
    <div class="container">

      <!-- Image Row -->
      <div class="row mb-5">
        <div class="col-md-6 mb-4">
          <img src="img/19.jpg" alt="SRHR Session 1" class="program-image shadow-sm">
        </div>
        <div class="col-md-6 mb-4">
          <img src="img/1.jpg" alt="SRHR Activity" class="program-image shadow-sm">
        </div>
      </div>

      <!-- Program Content -->
      <div class="program-content">
        <h3 class="program-title">Sexual and Reproductive Health & Rights (SRHR) Program</h3>

        <p class="program-description">
          GURD-Rwanda’s SRHR Program is a comprehensive effort to raise awareness and promote the sexual and reproductive health and rights of girls and young women. The program focuses on community education, youth mobilization, and rights advocacy.
        </p>

        <p class="program-description">
          It conducts regular workshops and school-based sensitization sessions that address puberty, consent, contraception, STIs, and gender-based violence. GURD collaborates with health centers to connect young people with youth-friendly health services.
        </p>

        <p class="program-description">
          The program trains peer educators and community influencers to promote accurate SRHR information and reduce stigma. Events such as reproductive health days, dialogues with parents, and public forums create open conversations around once-taboo topics.
        </p>

        <p class="program-description">
          GURD also facilitates community campaigns, theater performances, and radio talk shows to broaden reach and impact. Through partnerships, the program advocates for policy change and improved service delivery for adolescents.
        </p>

        <p class="program-description">
          SRHR awareness is integrated into other GURD programs to ensure continuity from early education to adulthood. Ultimately, the SRHR program seeks to uphold the rights of girls to make informed, healthy decisions about their bodies and lives.
        </p>
      </div>
    </div>
  </section>

  <?php include 'includes/footer.php'; ?>
</body>
</html>
