<?php
include "./functions.php";
$blog_name = "Tharty";
$id = null;
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
        <spam id="logo"><a href="/index.php"><?php echo $blog_name ?></a></spam>
        <div id="line-seperator"></div>
        <spam>Innovative Ideas</spam>
      </div>
      <div class="right">
        <spam>
          <a <?php
              if ($_SESSION['status'] === "logged in") echo 'href="/dashboard.php"';
              else echo 'href="/login.php"';
              ?>>
            <button>

              <?php echo $_SESSION['status'] === "logged in" ? "Home" : "Log in";  ?>
            </button>
          </a>
        </spam>

        <spam>
          <a <?php
              if ($_SESSION['status'] === "logged in") echo 'href="/logout.php"';
              else echo 'href="/login.php"';
              ?>>
            <button>
              <?php echo $_SESSION['status'] === "logged in" ? "Log out" : "Sign up";  ?>
            </button>
          </a>
        </spam>

      </div>
    </div>
  </div>