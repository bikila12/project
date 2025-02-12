<?php
$logoutGoTo = "bayisa.php";
  session_start();
  unset($_SESSION['username']);
unset($_SESSION[$header]);
header("Location: $logoutGoTo");
session_destroy();
?>
