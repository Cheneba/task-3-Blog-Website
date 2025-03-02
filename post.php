<?php
require "includes/posts.php";
include "includes/header.php";
?>


<section class="post-section-1">
  <div class="blog-post-title">
    <spam>Blog Post</spam>
    <div class="line-seperator"></div>
    <spam><?php echo $posts->$name ?: "Innovative Ideas"; ?></spam>
  </div>
</section>


<section class="post-section-2">
  <div class="description">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus quod sed dolore, harum nostrum possimus illo
      corrupti ratione ipsa doloribus mollitia aspernatur dicta sequi cupiditate eius vel maxime, aperiam adipisci!</p>
    <div class="img"></div>
  </div>
  <div class="end-post">
    <?php echo "Post made on $date, by $author" ?>
  </div>
</section>

<?php include "includes/footer.php"; ?>