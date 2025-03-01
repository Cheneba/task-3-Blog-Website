<?php

// header("Location: ./login.php");
include "includes/header.php";
?>

<section class="index-section-1">
  <div class="text-header-area">
    <spam>Blog Posts</spam>
    <div class="line-seperator"></div>
    <spam>Innovative Ideas</spam>
  </div>
</section>

<section class="index-section-2">
  <div class="block-register-area">
    <div class="text">
      <spam>Bring your Investive minds</spam>
    </div>
    <div class="btns">
      <button class="register-btn-1">Start Creating Posts</button>
      <button class="register-btn-2">Log In</button>
    </div>
  </div>
</section>

<section class="index-section-3">
  <div class="sample-posts">
    <div class="heading">
      <p>Sample Posts</p>
      <hr>
    </div>
    <div class="holder">
      <div class="sample-post">
        <p class="title">Title</p>
        <div class="line-hor"></div>
        <p class="brief">Briefing</p>
        <p class="auth-date">
          <spam>Author</spam>
          <spam>Date</spam>
        </p>
      </div>
      <div class="sample-post">
        <p class="title">Title</p>
        <div class="line-hor"></div>
        <p class="brief">Briefing</p>
        <p class="auth-date">
          <spam>Author</spam>
          <spam>Date</spam>
        </p>
      </div>
      <div class="sample-post">
        <p class="title">Title</p>
        <div class="line-hor"></div>
        <p class="brief">Briefing</p>
        <p class="auth-date">
          <spam>Author</spam>
          <spam>Date</spam>
        </p>
      </div>

    </div>
    <div class="index-view-posts">
      <a href="login.php"><button>View All Posts</button></a>
    </div>
  </div>
</section>
<?php include "includes/footer.php" ?>