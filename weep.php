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
      <h2>WEEP – Women Economic Empowerment Program</h2>
      <p>Helping young women achieve financial independence and dignity.</p>
    </div>
  </section>

  <!-- Main Content Section -->
  <section class="program-section">
    <div class="container">

      <!-- Image Row -->
      <div class="row mb-5">
        <div class="col-md-6 mb-4">
          <img src="img/17.jpg" alt="WEEP Activity 1" class="program-image shadow-sm">
        </div>
        <div class="col-md-6 mb-4">
          <img src="img/18.jpg" alt="WEEP Activity 2" class="program-image shadow-sm">
        </div>
      </div>

      <!-- Program Content -->
      <div class="program-content">
        <h3 class="program-title">Women Economic Empowerment Program (WEEP)</h3>

        <p class="program-description">
          The Women Economic Empowerment Program (WEEP) is designed to improve the livelihoods of young women, especially teen mothers who have graduated from vocational training. The program’s aim is to help them achieve financial independence through job access, entrepreneurship, and financial inclusion.
        </p>

        <p class="program-description">
          WEEP creates employment hubs and job centers that match young women with local work opportunities and internship placements. Graduates are encouraged to join Village Savings and Loan Associations (VSLAs) to begin saving and accessing small loans. GURD facilitates access to microfinance institutions with youth-friendly lending products to support business startups.
        </p>

        <p class="program-description">
          The program offers coaching on market analysis, business planning, and product branding, enabling women to build viable small businesses in local markets. Participants also receive group training on income diversification and economic goal-setting. WEEP incorporates modules on marriage preparation and long-term family planning to support holistic future planning.
        </p>

        <p class="program-description">
          GURD continues to mentor and monitor each woman’s journey post-training to ensure long-term sustainability. Through WEEP, GURD helps break the cycle of poverty and dependency for hundreds of young women each year.
        </p>
      </div>
    </div>
  </section>

  <?php include 'includes/footer.php'; ?>
</body>
</html>
