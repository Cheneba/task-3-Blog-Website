<?php

if (session_status() !== PHP_SESSION_ACTIVE) {
  session_start();
}
require "includes/posts.php";
include "includes/header.php";


// Gets the $id from the url
$id = base64_decode($_GET["id"]) ?: 4;

// Selects the specific post
$post = null;
foreach ($posts_arr as $p) {
  if ($p["id"] == $id) {
    $post = $p;
    break;
  }
}

// sets a cookie
setcookie("post-preference", $_GET["id"], time() + 86400);
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