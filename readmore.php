<?php
include 'db.php';
include 'includes/title.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php
include 'includes/head.php';
?>
<?php
include 'includes/header.php';
?>

<!-- Single Post Section -->
<section id="single_post" class="py-5">
  <div class="container-xl">
    <?php
    // Get the post id from the URL parameter
    $post_id = $_GET['id'];
    $result = $conn->query("SELECT * FROM posts WHERE id = $post_id");
    $post = $result->fetch_assoc();

    // If the post does not exist, redirect to the all-news page
    if (!$post) {
      header("Location: all-news.php");
      exit();
    }
    ?>

    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card shadow-sm">
          <div class="position-relative overflow-hidden">
            <img src="admin/uploads/<?php echo $post['image']; ?>" class="card-img-top" alt="Blog post image"
                 style="height: 400px; object-fit: cover;">
          </div>
          <div class="card-body">
            <h2 class="fw-bold text-dark"><?php echo $post['title']; ?></h2>
            <ul class="list-inline small text-muted mb-2">
              <li class="list-inline-item"><i class="fa fa-user me-1"></i><a href="#" class="text-decoration-none">Admin</a></li>
              <li class="list-inline-item"><i class="fa fa-clock me-1"></i><?php echo date("F j, Y", strtotime($post['created_at'])); ?></li>
            </ul>
            <p class="text-secondary"><?php echo nl2br($post['description']); ?></p>
          </div>
        </div>
      </div>
    </div>

    <!-- Back Button -->
    <div class="text-center mt-4">
      <a href="all-news.php" class="btn btn-secondary px-4 py-2 fw-bold shadow-sm">
        <i class="fa fa-arrow-left ms-2"></i> Back to All News
      </a>
    </div>

  </div>
</section>

<?php
include 'includes/footer.php';
?>

</body>
</html>
