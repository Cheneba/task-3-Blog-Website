<?php
include "./functions.php";
$blog_name = "Tharty";
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tharty</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="header">
    <div class="nav-header">
      <div class="left">
        <spam id="logo"><a href="/blog-website/index.php"><?php echo $blog_name ?></a></spam>
        <div id="line-seperator"></div>
        <spam>Innovative Ideas</spam>
      </div>
      <div class="right">
        <spam><a href="/blog-website/login.php"><button>Log In</button></a></spam>
        <spam><a href="/blog-website/logout.php"><button>Log Out</button></a></spam>
        <spam><a href="/blog-website/login.php"><button>Sign up</button></a></spam>
      </div>
    </div>
  </div>