<?php
include('connection.php');
error_reporting(0);

$id = $_REQUEST['u'];
//To fetch the data from signup page and reflect the data after update query
$sql="select * from users where id='$id'";
  
$result = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($result)) {

    $arr[] = $row;
    } 

foreach($arr as $data){
    $fname = $data['firstname'];
    $lname = $data['lastname'];
    $bdate=$data['bitrhdate'];
    $email= $data['email'];
    $gender = $data['gender'];
    $education = $data['education'];
    $experience=$data['experience'];
    $image= $data['image'];
}

//To update the candidates data
if(isset($_POST['submit']))
{  
  //To upload the image to database with unique id!
  $filename = $_FILES["image"]["name"];
  $tmpname = $_FILES["image"]["tmp_name"];
  $folder='profileimg/';
  if(move_uploaded_file($tmpname,$folder.$filename)>0)
  {
    $sql="UPDATE users SET image = '$filename' where id = $id";
    $result=mysqli_query($conn,$sql);
   
  }
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $bdate=$_POST['birthdate'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $education = $_POST['education'];
    $experience=$_POST['experience'];
    $image= $_POST['image'];

    $sql = " UPDATE users SET firstname='$fname',lastname='$lname', birthdate='$bdate',email='$email', gender='$gender',education='$education',experience='$experience' WHERE id = $id ";
  
    $result = mysqli_query($conn,$sql);
     
    if(mysqli_affected_rows($conn) > 0)
    {
      header("location:profile.php?u=$id");
    }
    else
    {
      header("location:profile_update_form.php?u=$id");
    }
  
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update form</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>
<div class="profile-box">
    <h1>Update Your Profile</h1>
    <form action="profile_update_form.php?u=<?php echo $id ?>" method="post" enctype="multipart/form-data">
     <div class="row">
        <div class="col">
            <label>First Name</label>
          <input type="text" class="form-control" name="firstname" placeholder="First name" aria-label="First name" value="<?php if($result){
            echo $fname;
          }?>">
        </div>
        <div class="col">
            <label>Last Name</label>
          <input type="text" class="form-control" name="lastname" placeholder="Last name" aria-label="Last name"  value="<?php if($result){
            echo $lname;
          }?>">
        </div>
      </div>
        <div class="col-md-6">
          <label>Birthdate</label>
          <input type="date" class="form-control" name="birthdate" id=" birthdate" value="<?php if($result){
            echo $bdate;
          }?>">
        </div>
        <div class="col">
          <label>Email</label>
          <input type="email" class="form-control" name="email" id="email" value="<?php if($result){
            echo $email;
          }?>">
        </div>
        <div class="gender">
          <label for="email">Gender</label>
          <div>
            <label for="male" class="form-check-input"><input type="radio" name="gender" id="Male" value="Male">Male</label>
            <label for="female" class="form-check-input" ><input type="radio" name="gender" id="Female" value="Female">Female</label>
            <label for="others" class="form-check-input"><input type="radio" name="gender" id="Others" value="Others">Others</label>
          </div>
        </div>

        <div class="Education">
            <label>Education</label>
            <textarea class="form-control" name="education" id="Education"></textarea value="<?php if($result){
            echo $education;
          }?>">
          </div>
          <div class="Experience">
              <label>Experience</label>
              <textarea class="form-control" name="experience" id="Experience"></textarea value="<?php if($result){
            echo $experience;
          }?>">
            </div>
        <div class="Upload">
        <input type="file" name="image" id="img" accept="image/png, image/jpg, image/jpeg">
        <!-- <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Upload</button> -->
        </div>
        <input type="submit" value="Upload" name="submit">
    </form>
</div>    
</body>
</html>