<?php
include('dbconnect.php'); 
include('candidate_auth.php'); 

$candidate_username = $_SESSION["candidate_username"];

if (isset($_POST['project_form'])) {

  $candidate_username = $_SESSION["candidate_username"];
  $cand_id = "SELECT candidate_id FROM candidates WHERE candidate_username = '$candidate_username'";

$result = $con->query($cand_id);
$row = $result->fetch_assoc();
$id = $row['candidate_id'];

  // receive all input values from the form
  $candidate_firstname = mysqli_real_escape_string($con, $_POST['candidate_firstname']);
  $candidate_project_name = mysqli_real_escape_string($con, $_POST['candidate_project_name']);
  $candidate_project_description = mysqli_real_escape_string($con, $_POST['candidate_project_description']);


    $query = "INSERT INTO candidate_project (candidate_id,candidate_project_name,candidate_project_description) 
          VALUES('$id','$candidate_project_name','$candidate_project_description')";


  if (mysqli_query($con, $query)) {

     // $_SESSION['candidate_username'] = $candidate_username;
     header('location:../candidate_homepage.php');

} else {
  echo "Error: " . $query . "<br>" . mysqli_error($con);
}


  }




?>

