<?php
session_start();
include('dbconnect.php'); 

// initializing variables
    $candidate_username = "";
    $candidate_id = "";
    $errors = array(); 

// LOGIN USER
if (isset($_POST['candidate_login'])) {
  $candidate_username = mysqli_real_escape_string($con, $_POST['candidate_username']);
  $candidate_password = mysqli_real_escape_string($con, $_POST['candidate_password']);

    $query = "SELECT * FROM candidates WHERE candidate_username='$candidate_username' AND candidate_password='$candidate_password'";
    $results = mysqli_query($con, $query);
    $row = mysqli_fetch_array($results,MYSQLI_ASSOC);
    $count = mysqli_num_rows($results);

    if ($count == 1) {
      $_SESSION['candidate_username'] = $candidate_username;
      $_SESSION['success'] = "You are now logged in";
      header('Location:../candidate_homepage.php');
    }else{
      header("location:../login.php?msg=failed");
      // echo "Error: " . $query . "<br>" . mysqli_error($con);
      // echo "Wrong username/password combination";

      // array_push($errors, "Wrong username/password combination");
    }


}
