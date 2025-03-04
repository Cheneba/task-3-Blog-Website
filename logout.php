<?php
if (session_status() === PHP_SESSION_ACTIVE) {
  session_start();
}
foreach ($_SESSION as $key => $param) {
  unset($_SESSION["$key"]);
}
session_destroy();
header("Location: index.php");
