<?php
include 'db.php';
include 'includes/title.php';

// Define how many posts to show per page
$posts_per_page = 6;

// Get the current page number, defaulting to 1 if not set
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// Calculate the offset for the query (based on current page)
$offset = ($page - 1) * $posts_per_page;

// Get the total number of posts for pagination calculation
$total_result = $conn->query("SELECT COUNT(*) AS total FROM posts");
$total_row = $total_result->fetch_assoc();
$total_posts = $total_row['total'];

// Calculate total pages
$total_pages = ceil($total_posts / $posts_per_page);

// Fetch posts for the current page
$result = $conn->query("SELECT * FROM posts ORDER BY created_at DESC LIMIT $offset, $posts_per_page");
?>

<!DOCTYPE html>
<html lang="en">
  <?php include 'includes/title.php'; ?>

<?php
include 'includes/head.php';
?>
<?php
include 'includes/header.php';
?>



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
<body>


  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <h2>Our News/Blog</h2>
 
    </div>
  </section>

<!-- All News Section -->
	<section id="blog_h" class="py-5 bg-light">
  <div class="container-xl">
    <!-- Section Header -->
    <div class="text-center mb-5">
      <h2 class="fw-bold text-primary" style="font-size: 32px;">Our Latest News</h2>
      <p class="text-muted mx-auto" style="max-width: 700px; font-size: 16px;">
        Stay updated with GURD Rwanda’s latest stories, community impact, and insights. Learn about our projects and real-world change.
      </p>
    </div>

    <!-- News Cards: 2 Per Line -->
    <?php include "db.php"; ?>
    <div class="row g-4">
      <?php
        $result = $conn->query("SELECT * FROM posts ORDER BY created_at DESC LIMIT 6");
        while ($row = $result->fetch_assoc()):
      ?>
      <div class="col-md-6">
        <div class="card border border-primary shadow-sm h-100">
          <div class="position-relative overflow-hidden rounded-top">
            <!-- Fixed image size + crop -->
            <img src="admin/uploads/<?php echo $row['image']; ?>" class="card-img-top" alt="Blog post image"
                 style="height: 250px; object-fit: cover; width: 100%;">
            <a href="#" class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 text-white opacity-0 hover-opacity-100 transition">
              <i class="fa fa-link fa-2x"></i>
            </a>
          </div>
          <div class="card-body text-center">
            <ul class="list-inline small text-muted mb-2">
              <li class="list-inline-item"><i class="fa fa-user me-1"></i><a href="#" class="text-decoration-none">Admin</a></li>
              <li class="list-inline-item"><i class="fa fa-clock me-1"></i><?php echo date("F j, Y", strtotime($row['created_at'])); ?></li>
            </ul>
            <h5 class="card-title">
              <a href="#" class="text-dark text-decoration-none"><?php echo $row['title']; ?></a>
            </h5>
            <p class="card-text"><?php echo $row['short_description']; ?></p>
            <a href="readmore.php?id=<?php echo $row['id']; ?>" class="text-primary fw-bold">Learn More <i class="fa fa-chevron-right ms-1"></i></a>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>


  </div>
</section>

<?php
include 'includes/footer.php';
?>

</body>
</html>
