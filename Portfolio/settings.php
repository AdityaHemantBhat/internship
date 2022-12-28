          <?php
        include('include/dbconnect.php'); 
include('include/candidate_auth.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Site</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a5b6877a9b.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="header">
        <div class="container">
            <nav>
                <img src="images/logo.png" class="logo">
                <ul>
                    <li><a href="candidate_homepage.php">HOME</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                    <li><a href="settings.php">SETTINGS</a></li>
                    <li><a class="btn" href="include/logout.php">Logout</a></li>
                </ul>
            </nav>
            <div class="header-text">
                <P>
                <H1>Welcome "<?php echo $_SESSION['candidate_username'];?>" to Portfolio!</H1>
                </P>
                <h2><span>Where talent meets your qualificational needs.</span></h2>
            </div>
        </div>
    </div>
    <!----------about------------>
    <div id="candidate">
        <div class="container">
            <h1 class="sub-title"> Settings</h1>
            <div class="services-list">
                    <a style="text-decoration: none; color:white;" href="update_profile.php"><div class="">
                        <h3>Update Profile</h3>
                    </div></a>
                    <a style="text-decoration: none; color:white;" href="ProjectForm.php"><div class="">
                        <h3>Add Project</h3>
                    </div></a>
                    <a style="text-decoration: none; color:white;" href="include/delete.php"><div class="">
                        <h3>Delete Account</h3>
                    </div></a>

            </div>
        </div>
    </div><br><br>


    
       
    <!-- contact-->
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="sub-title">CONTACT ME</h1>
                    <?php

          $candidate_username = $_SESSION["candidate_username"];
  $cand_id = "SELECT candidate_id FROM candidates WHERE candidate_username = '$candidate_username'";

$results = $con->query($cand_id);
$row = $results->fetch_assoc();
$id = $row['candidate_id'];

          $query1 = "SELECT * FROM candidates where candidate_id=$id";
          $result = mysqli_query($con,$query1);
          $number =  mysqli_num_rows($result);

          if($number > 0){
            foreach($result as $key => $data){
                ?>
                    <p> <i class="fa-solid fa-paper-plane"></i><a style="text-decoration: none; color:white;" href="mailto:<?php echo($data['candidate_email']) ?>">
                <?php echo($data['candidate_email']) ?>
                </div>
            <?php } } else{ ?>
                  <p>No Data Found</p>
                <?php }
                ?></a></p>
                    <!-- <p> <i class="fa-sharp fa-solid fa-square-phone"></i><a style="text-decoration: none; color:white;" href="tel:">0123456789</a></p> -->
                    <div class="social-icons">
                        <a href="https://www.facebook.com"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.linkedin.com"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>
</body>
</html>