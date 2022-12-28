<?php
session_start();
include('dbconnect.php'); 

// initializing variables
$candidate_username = $_SESSION["candidate_username"];

if (isset($_POST['registration_info'])) {
  // receive all input values from the form
  $candidate_username = mysqli_real_escape_string($con, $_POST['candidate_username']);
  $candidate_email = mysqli_real_escape_string($con, $_POST['candidate_email']);
  $candidate_password = mysqli_real_escape_string($con, $_POST['candidate_password']);

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  // $user_check_query = "SELECT * FROM candidates WHERE candidate_username='$candidate_username' OR candidate_email='$candidate_email' LIMIT 1";
  // $result = mysqli_query($con, $user_check_query);
  // $user = mysqli_fetch_assoc($result);
  
  // if ($user) { // if user exists
  //   if ($user['candidate_username'] === $candidate_username) {
  //     $candidate_username = "Sorry... username already taken"; 
  //   }

  //   if ($user['candidate_email'] === $candidate_email) {
  //     $candidate_username = "Sorry... email already taken"; 
  //   }
  // }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    // $candidate_password = md5($candidate_password);//encrypt the password before saving in the database

    $query = "INSERT INTO candidates (candidate_email, candidate_username, candidate_password) 
          VALUES('$candidate_email', '$candidate_username', '$candidate_password')";
    mysqli_query($con, $query);
    $_SESSION['candidate_username'] = $candidate_username;

    header('location:../CreateProfile.php');
  }
}

?>