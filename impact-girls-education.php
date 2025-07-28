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

  .container {
    max-width: 1140px;
    margin: auto;
    padding: 50px 20px;
  }

  h2 {
    color: #2a3756;
    font-weight: bold;
    margin-bottom: 1rem;
  }

  p {
    font-size: 1.05rem;
    line-height: 1.8;
    color: #333;
  }

  .text-bold {
    font-weight: bold;
  }

  .highlight-box {
    background-color: #eef2fa;
    border-left: 6px solid #6f42c1;
    padding: 1rem;
    margin: 2rem 0;
  }

  .highlight-box ul {
    margin-top: 0.5rem;
    padding-left: 1.5rem;
  }

  .two-column {
    display: flex;
    flex-wrap: wrap;
    gap: 40px;
    align-items: flex-start;
  }

  .left-col, .right-col {
    flex: 1;
    min-width: 300px;
  }

  .img-full {
    width: 100%;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
  }

  @media (max-width: 768px) {
    .two-column {
      flex-direction: column;
    }
  }
</style>

<body>
<?php include 'includes/header.php'; ?>

<div class="container">
  <h2>Why Supporting Girls’ Education with Scholarships in Rural Nyamasheke is Essential: Insights from GURD-Rwanda’s Work</h2>
  <p>In the remote communities of <strong>Nyamasheke District</strong>, Western Rwanda, girls’ education remains one of the most fragile pathways toward equity and opportunity. Through 4 years of direct engagement with rural families, schools, and local leaders, GURD-Rwanda has witnessed the life challenges that drive many girls became teen mothers leading to drop out of school.</p>

  <div class="two-column">
    <div class="left-col">
      <img src="img/g1.jpg" alt="Scholarship Awareness Poster" class="img-full">
    </div>
    <div class="right-col highlight-box">
      <h4>Why This Support Matters</h4>
      <p>Many of the girls supported by GURD had once been at risk of dropping out, often due to a combination of poverty, early pregnancy, family responsibilities, and gender-based violence. Without intervention, these girls were headed for a future marked by exclusion, dependency, and vulnerability.</p>
      <ul>
        <li>Poverty as a Primary Barrier</li>
        <li>Pregnancy as a Life Interruption</li>
        <li>Gender Norms and Hidden Costs</li>
      </ul>
    </div>
  </div>

  <h3>How GURD-Rwanda Implements Education and Scholarship Support</h3>
  <ol>
    <li><strong>Community-Based Identification:</strong><br>
    GURD works with local leaders, schools, and grassroots networks to identify the most vulnerable girls and teen mothers, ensuring that support reaches those who need it most. This community-based approach builds trust and ensures that scholarships are rooted in local realities.</li>

    <li><strong>Holistic Support Beyond School Fees:</strong><br>
    Recognizing that school fees alone are not enough, GURD provides comprehensive packages including scholastic materials, school meals, and psychosocial support. For teen mothers, support health services like family planning methods etc.</li>

    <li><strong>Life Skills and SRHR Integration:</strong><br>
    Academic support is combined with life skills and sexual and reproductive health education (SRHR) to ensure that girls are not only staying in school but also developing the agency to make informed life decisions. This dual-track model is essential for preventing repeat cycles of dropout and early pregnancy.</li>

    <li><strong>Mentorship and Peer Support Networks:</strong><br>
    GURD-Rwanda recognizes that girls thrive not only through academic and material support, but also through meaningful human connections. That’s why mentorship and peer support are integral to its education and scholarship programs. To nurture confidence, belonging, and leadership among vulnerable girls and teen mothers, GURD has developed structured networks that foster mutual growth.</li>
  </ol>

  <p>One of the key approaches is the organization of mentorship boot camps: interactive gatherings where scholarship beneficiaries and teen mothers come together to learn, share, and connect. These boot camps serve as safe spaces where girls can build relationships with mentors, learn from inspirational role models, and engage in dialogue on issues affecting their lives such as education, sexual and reproductive health, mental well-being, and future planning.</p>

  <img src="img/g2.jpg" alt="Boot Camp Mentorship Group" class="img-full"><br><br>
       <a href="ourimpact.php" class="btn btn-outline-primary btn-back">← Back to Impact Stories</a>
</div>

<?php include 'includes/footer.php'; ?>
</body>
</html>
