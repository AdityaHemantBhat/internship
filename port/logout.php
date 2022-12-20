<?php
//log out from the website but the data remains as it is!
session_start();
unset($_SESSION['email']);
unset($_SESSION['password']);
header('location:login.php');
die();
?>
