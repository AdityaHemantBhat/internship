<?php 
include('include/dbconnect.php');
include('include/candidate_profile_reg.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link rel="stylesheet" href="form.css">
    
</head>
<body>

    <div>
        <div>
            <nav>
                <img src="images/logo.png" class="logo">
                <ul>
                    <li><a href="candidate_homepage.php">HOME</a></li>
                    <li><a href="settings.php">SETTINGS</a></li>
                    <li><a class="btn" href="include/logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="signupFrm">
        <form class="form" action="include/update_profile.php" method="post" enctype="multipart/form-data">
            <h1>Update Profile</h1>
            <p>Welcome "<?php echo $_SESSION['candidate_username']; ?>"</p>

            <?php

          $candidate_username = $_SESSION["candidate_username"];
          $cand_id = "SELECT candidate_id FROM candidates WHERE candidate_username = '$candidate_username'";

        $results = $con->query($cand_id);
        $row = $results->fetch_assoc();
        $id = $row['candidate_id'];

          $query1 = "SELECT * FROM candidate_profile where candidate_id=$id";
          $result = mysqli_query($con,$query1);
          $number =  mysqli_num_rows($result);

          if($number > 0){
            foreach($result as $key => $data){
                ?>

            <div class="inputContainer">
                <input class="input" type="text" placeholder="" name="candidate_firstname" value="<?php echo($data['candidate_firstname']);?>" required>
                <label class="label">First Name</label>
            </div>

            <div class="inputContainer">
                <input class="input" type="text" placeholder="" name="candidate_lastname" value="<?php echo($data['candidate_lastname']);?>" required>
                <label class="label">Last Name</label>
            </div>

            <div class="inputContainer">
                <input class="input" type="date" placeholder="" name="candidate_birthdate" value="<?php echo($data['candidate_birthdate']);?>">
                <label class="label">Birthdate</label>
            </div>

            <div class="inputContainer">
                <div class="radio">
                <label>Gender:</label>&nbsp;&nbsp;&nbsp;
                <input class="" id="male" type="radio" placeholder="" name="candidate_gender" value="<?php echo($data['candidate_gender']);?>">
                <label class="" for="male">Male</label>&nbsp;&nbsp;&nbsp;
                <input class="" id="female" type="radio" placeholder="" name="candidate_gender" value="<?php echo($data['candidate_gender']);?>">
                <label class="" for="female">Female</label>&nbsp;&nbsp;&nbsp;
                <input class="" id="others" type="radio" placeholder="" name="candidate_gender" value="<?php echo($data['candidate_gender']);?>">
                <label class="" for="others">Others</label>
            </div>
            </div>
            <p>Degree</p>
            <div class="inputContainer">
                <input class="input" type="text" placeholder="" name="candidate_graduation" value="<?php echo($data['candidate_graduation']);?>">
                <label class="label">Graduation</label>
            </div>

            <div class="inputContainer">
                <input class="input" type="text" placeholder="" name="candidate_postgraduation" value="<?php echo($data['candidate_postgraduation']);?>">
                <label class="label">Post Graduation</label>
            </div>

            <div class="inputContainers">
                <textarea class="input" style="resize: none !important; padding-top:10px;" name="candidate_experience" ><?php echo($data['candidate_experience']);?></textarea>
                <label class="label">Experience</label>
            </div>

            <div class="inputContainer">
                <input class="input" type="file" placeholder="" name="candidate_resume">
                <label class="label">Portfolio / Resume / CV</label>

            </div>
            <?php } } else{ ?>
                  <p>No Data Found</p>
                <?php }
                ?>
            <input type="submit" class="submitBtn" value="Update Profile" name="update_profile">
        </form>    
    </div>
</body>
</html>