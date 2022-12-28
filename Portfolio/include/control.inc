<?php
	session_start();
  if(isset($_SESSION["candidate_username"])) {
        header("Location:../index.php");
        exit();
    }
?>