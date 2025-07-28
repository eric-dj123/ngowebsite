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

    .life-section {
      padding: 60px 0;
    }

    .life-image {
      width: 100%;
      height: 300px;
      object-fit: cover;
      border-radius: 12px;
      border: 3px solid #009688;
      transition: transform 0.3s;
    }

    .life-image:hover {
      transform: scale(1.03);
    }

    .life-content {
      background: #ffffff;
      padding: 40px;
      border-left: 6px solid #009688;
      border-radius: 8px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.07);
      margin-top: 30px;
    }

    .life-title {
      color: #0c2340;
      font-size: 30px;
      font-weight: 800;
      margin-bottom: 25px;
    }

    .life-description {
      font-size: 17px;
      line-height: 1.9;
      color: #333;
      margin-bottom: 20px;
    }

    @media (max-width: 768px) {
      .hero-section h2 {
        font-size: 2rem;
      }
      .life-content {
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
      <h2>LIFE Clubs – Life Skills for Girls</h2>
      <p>Empowering girls with character, leadership, and life skills.</p>
    </div>
  </section>

  <!-- Main Content Section -->
  <section class="life-section">
    <div class="container">

      <!-- Image Row -->
      <div class="row mb-5">
        <div class="col-md-6 mb-4">
          <img src="img/15.jpg" alt="LIFE Clubs Activity 1" class="life-image shadow-sm">
        </div>
        <div class="col-md-6 mb-4">
          <img src="img/20.jpg" alt="LIFE Clubs Activity 2" class="life-image shadow-sm">
        </div>
      </div>

      <!-- Content -->
      <div class="life-content">
        <h3 class="life-title">LIFE (Leadership, Integrity, Focus, Empowerment) Clubs – Life Skills for Girls</h3>

        <p class="life-description">
          The LIFE Clubs program is a soft-skills-focused initiative that empowers adolescent girls through practical life skills and personal development training. Operated in schools and youth spaces, the program emphasizes Leadership, Integrity, Focus, and Empowerment skills essential for navigating adolescence and shaping a successful future.
        </p>

        <p class="life-description">
          Girls participate in workshops and peer-led discussions covering self-esteem, effective communication, critical thinking, and goal setting. Through structured mentorship and role modeling, they learn how to manage peer pressure, make informed decisions, and build healthy relationships. The clubs foster accountability and self-reflection while promoting a safe, supportive environment for growth.
        </p>

        <p class="life-description">
          By participating, girls become more confident and develop resilience to overcome social and personal challenges. The program also builds their leadership capabilities, preparing them to become changemakers in their communities. LIFE Clubs intentionally shift away from academic tutoring to focus purely on character and leadership formation. GURD-Rwanda aims to scale LIFE Clubs across the Western Province to reach hundreds more girls annually.
        </p>
      </div>
    </div>
  </section>

  <?php include 'includes/footer.php'; ?>
</body>
</html>
