
<?php
include('dbconnect.php'); 
include('candidate_auth.php'); 

$candidate_username = $_SESSION["candidate_username"];


if (isset($_POST['update_profile'])) {
  // receive all input values from the form

$candidate_username = $_SESSION["candidate_username"];
  $cand_id = "SELECT candidate_id FROM candidates WHERE candidate_username = '$candidate_username'";

$result = $con->query($cand_id);
$row = $result->fetch_assoc();
$id = $row['candidate_id'];

    $fileinfo=PATHINFO($_FILES["candidate_resume"]["name"]);
    $newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
    move_uploaded_file($_FILES["candidate_resume"]["tmp_name"],"../resume/" . $newFilename);
    $location="../resume/" . $newFilename;

  $candidate_firstname = mysqli_real_escape_string($con, $_POST['candidate_firstname']);
  $candidate_lastname = mysqli_real_escape_string($con, $_POST['candidate_lastname']);
  $candidate_birthdate = mysqli_real_escape_string($con, $_POST['candidate_birthdate']);
  $candidate_gender = mysqli_real_escape_string($con, $_POST['candidate_gender']);
  $candidate_graduation = mysqli_real_escape_string($con, $_POST['candidate_graduation']);
  $candidate_postgraduation = mysqli_real_escape_string($con, $_POST['candidate_postgraduation']);
  $candidate_experience = mysqli_real_escape_string($con, $_POST['candidate_experience']);



 // $query = "UPDATE candidate_profile (candidate_firstname,candidate_lastname,candidate_birthdate,candidate_gender,candidate_graduation,candidate_postgraduation,candidate_experience) 
 //       SET ('$candidate_firstname','$candidate_lastname','$candidate_birthdate','$candidate_gender','$candidate_graduation','$candidate_postgraduation','$candidate_experience') WHERE candidate_id='$id'";
  
  $query = "UPDATE `candidate_profile` SET `candidate_firstname`='$candidate_firstname',`candidate_lastname`='$candidate_lastname',`candidate_birthdate`='$candidate_birthdate',`candidate_gender`='$candidate_gender',`candidate_graduation`='$candidate_graduation',`candidate_postgraduation`='$candidate_postgraduation',`candidate_experience`='$candidate_experience',`candidate_resume`='$location' WHERE candidate_id='$id'";


  if (mysqli_query($con, $query)) {

     $_SESSION['candidate_username'] = $candidate_username;

    header('location:../candidate_homepage.php');

} else {
  echo "Error: " . $query . "<br>" . mysqli_error($con);
}


  }




?>

