<?php
include('dbconnect.php'); 
session_start();


$candidate_username = $_SESSION["candidate_username"];
$sql = "DELETE FROM candidates WHERE candidate_username='$candidate_username'";

 if (mysqli_query($con, $sql)) {
 echo "Deleted";
 unset($_SESSION["candidate_username"]);
session_destroy();

    header('location:../index.php');

} else {
  // echo "Error: " . $query . "<br>" . mysqli_error($con);
}

?>