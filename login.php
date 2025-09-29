<?php
include "includes/header.php";

$u_name = "user";
$p_word = "password";
$err = '';

if (isset($_POST["submit"])) {
  $name = htmlspecialchars($_POST["name"]);
  // $email = htmlspecialchars($_POST["email"]);
  $password = htmlspecialchars($_POST["password"]);
  if ($name && $password) {
    if ($name == $u_name && $password == $p_word) {
      if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
      }
      $_SESSION['username'] = $name;
      $_SESSION['status'] = "logged in";
      $_SESSION['message'] = "Login Successful";
      header("Location: /dashboard.php");
    } elseif ($name == $u_name) {
      $err = '<spam style="color:red">Wrong Password. Try Again!</spam>';
    } else {
      $err = '<spam style="color:red">Either Username or Password is wrong. Try again!</spam>';
    }
  }
}

?>

<style>
  /* LOGIN PAGE */
  .login-holder>.container {
    margin: 0 auto;
    margin-top: 50px;
    margin-bottom: 220px;
    width: 500px;
    padding: 70px 50px 110px 50px;
    border: 1px solid black;
    border-radius: 10px;
    box-shadow: -1px -1px 10px black;
  }

  .login-holder>.container>form {
    width: 100%;
    height: fit-content;
  }

  .login-holder>.container>form>label {
    height: 40px;
    width: 100%;
    display: flex;
    /* flex-direction: column; */
    align-items: center;
    margin-bottom: 20px;
  }

  .login-holder>.container>form>label>input {
    width: 80%;
    height: 50px;
    margin-left: auto;
    padding-left: 15px;
    font-size: 1.2rem;
  }

  .login-holder>.container>form>label>#checkbox {
    width: 20px;
    height: 20px;
    margin-left: 10px;
    padding-left: 0;
    font-size: 1rem;
    background-color: black;
  }

  .login-holder>.container>form>button {
    border: none;
    background: none;
    width: fit-content;
    padding: 0 10px;
    height: 50px;
    border: 1px solid black;
    border-radius: 5px;
    font-size: 1.2rem;
    margin-left: 150px;
    margin-top: 30px;
    transition: all 0.1s ease-in;
  }

  .login-holder>.container>form>button:hover {
    background-color: black;
    color: white;
    cursor: pointer;
  }

  .login-holder>.container>form>button:active {
    border-color: white;
    border-width: 1px;
    background-color: white;
    color: black;
  }
</style>

<div class="login-holder">
  <div class="container">

    <form action="login.php" method="POST">
      <label>
        Name:
        <input type="text" name="name" id="name" placeholder="Name" required>
      </label>
      <br>
      <!-- <label>
          Email:
          <input type="email" name="email" id="email" placeholder="Email" required>
        </label> -->

      <label>
        Password:
        <input type="password" name="password" id="password" placeholder="Password" required>
      </label>
      <?php if ($err): ?>
        <?php echo $err; ?>
      <?php endif; ?>
      <span>Hint, Username: user <br> Password: password</span>
      <br />
      <label>
        Remember me
        <input type="checkbox" id="checkbox">
      </label>
      <button type="submit" name="submit">Submit</button>
    </form>
  </div>

</div>
<?php include "includes/footer.php"; ?>