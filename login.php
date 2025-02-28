<?php
include "includes/header.php";

$u_name = "metuge";
$p_word = "password";


if (isset($_POST["submit"])) {
  $name = htmlspecialchars($_POST["name"]);
  // $email = htmlspecialchars($_POST["email"]);
  $password = htmlspecialchars($_POST["password"]);

  if ($name && $password) {
    if ($name == $u_name && $password == $p_word) {
      loginUser();
    } elseif ($name == $u_name) {
      echo '<spam style="color:red">Wrong Password. Try Again!</spam>';
    } else {
      echo '<spam style="color:red">Either Username or Password is wrong. Try again!</spam>';
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <form action="login.php" method="POST">
      <label>
        Name:
        <input type="text" name="name" id="name" placeholder="Name" required>
      </label>

      <!-- <label>
        Email:
        <input type="email" name="email" id="email" placeholder="Email" required>
      </label> -->

      <label>
        Password:
        <input type="password" name="password" id="password" placeholder="Password" required>
      </label>
      <br />
      <button type="submit" name="submit">Submit</button>
    </form>
  </div>
</body>

</html>