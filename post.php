<?php
require "includes/posts.php";
include "includes/header.php";
$id = base64_decode($_GET["id"]) ?: 4;
$post = null;
foreach ($posts_arr as $p) {
  if ($p["id"] == $id) {
    $post = $p;
    break;
  }
}
?>


<section class="post-section-1">
  <div class="blog-post-title">
    <spam>Blog</spam>
    <div class="line-seperator"></div>
    <spam><?php echo $post['title'] ?: "Innovative Ideas"; ?></spam>
  </div>
</section>


<section class="post-section-2">
  <div class="description">

    <?php echo $post["content"] ?>


  </div>
  <br>
  <br>
  <br>
  <div class="end-post">
    <?php echo "Post made on " . $post["date"] . ", by " . $post["author"] ?>
  </div>
</section>

<?php include "includes/footer.php"; ?>