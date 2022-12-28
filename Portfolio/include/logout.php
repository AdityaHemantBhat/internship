<?php
session_start();
unset($_SESSION["candidate_username"]);
session_destroy();
header("Location:../index.php");
?>