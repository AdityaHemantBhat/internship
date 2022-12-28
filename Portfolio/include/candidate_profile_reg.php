
<?php
include('dbconnect.php'); 
include('candidate_auth.php'); 

$candidate_username = $_SESSION["candidate_username"];


if (isset($_POST['profile_reg'])) {
  // receive all input values from the form

$candidate_username = $_SESSION["candidate_username"];
  $cand_id = "SELECT candidate_id FROM candidates WHERE candidate_username = '$candidate_username'";

$result = $con->query($cand_id);
$row = $result->fetch_assoc();
$id = $row['candidate_id'];


  $candidate_firstname = mysqli_real_escape_string($con, $_POST['candidate_firstname']);
  $candidate_lastname = mysqli_real_escape_string($con, $_POST['candidate_lastname']);
  $candidate_birthdate = mysqli_real_escape_string($con, $_POST['candidate_birthdate']);
  $candidate_gender = mysqli_real_escape_string($con, $_POST['candidate_gender']);
  $candidate_graduation = mysqli_real_escape_string($con, $_POST['candidate_graduation']);
  $candidate_postgraduation = mysqli_real_escape_string($con, $_POST['candidate_postgraduation']);
  $candidate_experience = mysqli_real_escape_string($con, $_POST['candidate_experience']);


    $fileinfo=PATHINFO($_FILES["candidate_resume"]["name"]);
    $newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
    move_uploaded_file($_FILES["candidate_resume"]["tmp_name"],"../resume/" . $newFilename);
    $location="../resume/" . $newFilename;



 $query = "INSERT INTO candidate_profile (candidate_id,candidate_firstname,candidate_lastname,candidate_birthdate,candidate_gender,candidate_graduation,candidate_postgraduation,candidate_experience,candidate_resume) 
       VALUES('$id','$candidate_firstname','$candidate_lastname','$candidate_birthdate','$candidate_gender','$candidate_graduation','$candidate_postgraduation','$candidate_experience','$location')";


  if (mysqli_query($con, $query)) {

     $_SESSION['candidate_username'] = $candidate_username;

    header('location:../ProjectForm.php');

} else {
  // echo "Error: " . $query . "<br>" . mysqli_error($con);
}


  }



?>

