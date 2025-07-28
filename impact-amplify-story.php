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
  padding: 80px 0;
  text-align: center;
  color: #ffffff; /* Ensure text appears white */
}



  .story-container {
    padding: 60px 0;
  }

  .impact-text p {
    font-size: 1.05rem;
    line-height: 1.9;
    margin-bottom: 1.5rem;
  }

  .impact-text strong {
    font-weight: 600;
  }

  .impact-text em {
    font-style: italic;
  }

  .impact-text ul {
    padding-left: 1.5rem;
  }

  .impact-text li {
    margin-bottom: 0.5rem;
    font-size: 1.05rem;
  }

  .impact-image {
    width: 100%;
    border-radius: 10px;
    margin-bottom: 1rem;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  }

  .side-by-side {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    margin: 30px 0;
  }

  .side-by-side img {
    flex: 1;
    max-width: 100%;
    height: auto;
  }

  .alert-highlight {
    background-color: #e7f9ed;
    border-left: 5px solid #28a745;
    padding: 1rem;
    font-weight: 500;
    color: #155724;
    border-radius: 6px;
    margin-top: 2rem;
  }

  .btn-back {
    font-weight: 600;
    margin-top: 2rem;
  }

  @media (max-width: 768px) {
    .side-by-side {
      flex-direction: column;
    }
  }
</style>

<body>
<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero-section text-white">
  <div class="container">
    <h1 class="fw-bold">How AMPLIFY Girls Strengthened GURD-Rwanda to Empower Girls Build Agency in Nyamasheke District</h1>
  </div>
</section>

<!-- Story Section -->
<section class="story-container">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10 impact-text">

        <div class="side-by-side">
          <div style="flex: 1;">
            <img src="img/f1.jpg" alt="Fidele quote" class="impact-image">
          </div>
          <div style="flex: 2;">
            <p>When <strong>Fidele Tuyishime</strong> founded <strong>GURD-Rwanda</strong>, his vision was clear: to create a safe and empowering space where girls could reclaim their right to <strong>education</strong>, <strong>health</strong>, and self-determination. Through grassroots engagement and community outreach, GURD sought to strengthen girls’ <strong>Agency</strong> — their ability to believe in themselves, make informed decisions, lead, and influence their environment.</p>
          </div>
        </div>

        <img src="img/f2.jpg" alt="Group Photo" class="impact-image">

        <p>However, the organization quickly faced obstacles that hindered its growth. Limited financial resources and organizational capacity made it difficult for GURD to design impactful programs, raise funds, and establish a strong strategic direction. The potential was there but the pathway was uncertain.</p>

        <p>That’s when <strong>AMPLIFY Girls</strong> stepped in. Through a combination of virtual coaching sessions, in-person capacity-building workshops, and peer support platforms, AMPLIFY Girls provided the much-needed mentorship and technical guidance that helped GURD redefine its approach. Together, they co-developed an integrated Life Skills and SRHR Curriculum, tailored specifically for rural adolescent girls.</p>

        <div class="side-by-side">
          <div style="flex: 2;">
            <p>This curriculum now reaches schools across <strong>Nyamasheke District</strong>, delivered by trained volunteers who create safe spaces for girls to grow in <strong>knowledge</strong>, <strong>confidence</strong>, and <strong>voice</strong>. The results are transformative and measurable through the lens of <strong>Girls’ Agency</strong>:</p>

            <ul>
              <li>Self-Beliefs</li>
              <li>Environmental Beliefs</li>
              <li>Self-Governance Skills</li>
              <li>Leadership Skills</li>
            </ul>

            <p>Girls trained under the program are now leading peer discussions, helping others navigate challenges, and voicing their opinions at school and community forums. GURD has helped nurture emerging girl leaders who act as change agents in their communities — challenging harmful norms and advocating for gender equality.</p>
          </div>

          <div style="flex: 1;">
            <img src="img/f3.jpg" alt="AMPLIFY Girls Banner" class="impact-image">
          </div>
        </div>

        <p><strong>AMPLIFY Girls</strong> didn’t just help girls — they empowered the organization itself. Founder <strong>Fidele Tuyishime</strong> gained critical skills in fundraising, strategic planning, and presentation, allowing him to more effectively tell GURD’s story and attract new partners. With ongoing support from network members like <strong>SACCA</strong>, <strong>Learn Work Develop</strong>, and <strong>IGI</strong>, GURD now implements stronger policies, mobilizes local resources, and connects with national youth and gender platforms.</p>

        <p>Through the guidance and generosity of AMPLIFY Girls and the collaborative spirit of its network, GURD-Rwanda has grown from a small community-based initiative to a catalyst for girl-led change. Today, girls across <strong>Nyamasheke</strong> are not just surviving — they are leading, choosing, influencing, and believing in brighter futures.</p>

        <div class="alert-highlight">
          This is Agency in action. And this is what happens when we invest in girls not just as beneficiaries, but as <strong>leaders of their own transformation</strong>.
        </div>

        <a href="ourimpact.php" class="btn btn-outline-primary btn-back">← Back to Impact Stories</a>

      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
</body>
</html>
