<?php

if (session_status() !== PHP_SESSION_ACTIVE) {
  session_start();
}
if ($_SESSION['status'] !== "logged in") {
  unset($_SESSION);
  session_destroy();
  header("Location: index.php");
}

?>
<?php include "includes/header.php"; ?>
<?php include "includes/posts.php"; ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2><?php echo $_SESSION['username'] ?: "User" ?></h2>
  <br>
  <hr>
  <h3>Hello, <?php echo $_SESSION['message'] ?: "welcome" ?>
  </h3>


  <br>
  <hr>
  <?php foreach ($posts_arr as $post):

  ?>

    <div class="dashboard-post">
      <h2><?php echo $post['title'] ?></h2>
      <br>
      <p><?php echo $post['description'] ?></p>
      <br>
      <a href="post.php?id=<?php echo base64_encode($post["id"]); ?>">View more</a>
      <br>
      <br>
      <hr>
    </div>
  <?php endforeach; ?>
</body>

</html>

<?php include "includes/footer.php"; ?>