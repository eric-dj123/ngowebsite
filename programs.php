<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'includes/title.php'; ?>
  <?php include 'includes/head.php'; ?>
  <style>
    .program-box {
      background: #f9f9f9;
      padding: 25px;
      border-left: 5px solid #009688;
      border-radius: 6px;
      margin-bottom: 30px;
      transition: transform 0.3s ease;
    }

    .program-box:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }

    .program-img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 6px;
      margin-bottom: 20px;
      border: 2px solid #009688;
    }

    .btn-readmore {
      display: inline-block;
      margin-top: 10px;
      padding: 10px 20px;
      background-color: #009688;
      color: #fff;
      font-weight: 500;
      border-radius: 4px;
      text-decoration: none;
      transition: background 0.3s;
    }

    .btn-readmore:hover {
      background-color: #00796b;
    }
  </style>
</head>
<body>
  <?php include 'includes/header.php'; ?>
<section class="py-5" style="background-color: #2a3756;">
  <div class="container">
    <h2 class="fw-bold text-white mb-3" style="font-size: 2.5rem;">Our Programs</h2>
    <p class="fw-bold mb-4" style="color: #f5c518; font-size: 1.2rem;">
      GURD-Rwanda has 5 programs
    </p>
    <ol class="text-white fw-bold fs-5 ps-3">
      <li>. LIFE (Leadership, Integrity, Focus, Empowerment) Clubs – Life Skills for Girls</li>
      <li>2. ICYIZERE Program – Vocational Education for Teen Mothers</li>
      <li>3. WEEP – Women Economic Empowerment Program</li>
      <li>4. SRHR – Sexual and Reproductive Health & Rights Program</li>
      <li>5. Educational & Scholarship Support for Teen Mothers</li>
    </ol>
  </div>
</section>

  <section class="py-5 bg-white">
    <div class="container">
      <h1 class="fw-bold text-center mb-5" style="color:#0c2340;">GURD-Rwanda: Extended Program Descriptions</h1>

      <div class="row">

        <!-- Program 1 -->
        <div class="col-md-6">
          <div class="program-box">
            <img src="img/15.jpg" alt="LIFE Clubs" class="program-img">
            <h3 class="text-primary fw-bold">1. LIFE (Leadership, Integrity, Focus, Empowerment) Clubs – Life Skills for Girls</h3>
            <p>The LIFE Clubs program empowers adolescent girls through life skills and personal development training. It emphasizes confidence, resilience, self-reflection, and leadership through workshops, peer-led discussions, and mentorship. GURD-Rwanda aims to scale this program across the Western Province.</p>
            <a href="#" class="btn-readmore">Read More</a>
          </div>
        </div>

        <!-- Program 2 -->
        <div class="col-md-6">
          <div class="program-box">
            <img src="img/16.jpg" alt="ICYIZERE Program" class="program-img">
            <h3 class="text-primary fw-bold">2. ICYIZERE Program – Vocational Education for Teen Mothers</h3>
            <p>ICYIZERE (“Hope”) helps out-of-school teen mothers rebuild their lives through certified vocational courses in trades like tailoring, culinary arts, and IT. The program includes mentorship, trauma counseling, transport support, and connects graduates to jobs and business opportunities.</p>
            <a href="#" class="btn-readmore">Read More</a>
          </div>
        </div>

        <!-- Program 3 -->
        <div class="col-md-6">
          <div class="program-box">
            <img src="img/17.jpg" alt="WEEP Program" class="program-img">
            <h3 class="text-primary fw-bold">3. WEEP – Women Economic Empowerment Program</h3>
            <p>WEEP supports young women, especially teen mothers, to become financially independent through job matching, VSLA savings, business training, and access to youth-friendly microloans. It promotes entrepreneurship, family planning, and long-term financial growth.</p>
            <a href="#" class="btn-readmore">Read More</a>
          </div>
        </div>

        <!-- Program 4 -->
        <div class="col-md-6">
          <div class="program-box">
            <img src="img/19.jpg" alt="SRHR Program" class="program-img">
            <h3 class="text-primary fw-bold">4. SRHR – Sexual and Reproductive Health & Rights Program</h3>
            <p>GURD-Rwanda’s SRHR initiative raises awareness and promotes youth access to reproductive health services. It involves peer educators, school sessions, radio programs, and public campaigns addressing puberty, consent, STIs, and gender-based violence.</p>
            <a href="#" class="btn-readmore">Read More</a>
          </div>
        </div>

        <!-- Program 5 -->
        <div class="col-md-6">
          <div class="program-box">
            <img src="img/18.jpg" alt="Educational Support" class="program-img">
            <h3 class="text-primary fw-bold">5. Educational & Scholarship Support for Teen Mothers</h3>
            <p>This program enables teen mothers to return to school by paying tuition, providing school supplies, childcare items, and ongoing counseling. It promotes inclusive education policies and flexible learning options so young mothers can complete their studies.</p>
            <a href="#" class="btn-readmore">Read More</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <?php include 'includes/footer.php'; ?>
</body>
</html>
