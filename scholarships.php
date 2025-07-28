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
      <h2>Educational & Scholarship Support Program</h2>
      <p>Helping teen mothers return to school and reclaim their future.</p>
    </div>
  </section>

  <!-- Main Content Section -->
  <section class="program-section">
    <div class="container">

      <!-- Image Row -->
      <div class="row mb-5">
        <div class="col-md-6 mb-4">
          <img src="img/18.jpg" alt="Scholarship Support 1" class="program-image shadow-sm">
        </div>
        <div class="col-md-6 mb-4">
          <img src="img/2.jpg" alt="Scholarship Support 2" class="program-image shadow-sm">
        </div>
      </div>

      <!-- Program Text -->
      <div class="program-content">
        <h3 class="program-title">Educational & Scholarship Support for Teen Mothers</h3>

        <p class="program-description">
          This program ensures that teen mothers who dropped out of school due to early pregnancy or other challenges receive a second chance at formal education. GURD-Rwanda identifies and supports young mothers with school reintegration services, including payment of tuition fees, school materials, and psychosocial support.
        </p>

        <p class="program-description">
          The program works closely with schools, local government, and families to re-enroll learners and eliminate stigma and discrimination. Beneficiaries are paired with mentors and school counselors to monitor their academic and emotional well-being.
        </p>

        <p class="program-description">
          In addition to academic support, GURD provides baby care items, school uniforms, and food supplements where necessary. The organization also promotes inclusive education by advocating for school policies that accommodate parenting learners.
        </p>

        <p class="program-description">
          Through continuous follow-up and family mediation, the program ensures that girls not only return but complete their education. Some participants are transitioned into flexible learning or evening programs to balance motherhood and studies.
        </p>

        <p class="program-description">
          GURD’s ultimate goal is to help teen mothers reclaim their dreams and become empowered, educated citizens.
        </p>
      </div>
    </div>
  </section>

  <?php include 'includes/footer.php'; ?>
</body>
</html>
