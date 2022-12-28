<?php
include('include/dbconnect.php'); 

$id = $_GET['id'];?>
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
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="#services">PROJECT</a></li>
                    <li><a href="#candidate">CANDIDATE</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                    <li><a class="btn" href="signup.php">Sign Up</a></li>
                    <li><a class="btn" href="login.php">Login</a></li>
                    <!-- <li><a class="btn" href="include/logout.php">Logout</a></li> -->
                </ul>
            </nav>
            <div class="header-text">
                <P>
                <H1>Candidate Profile</H1>
                </P>
                <h2><span></span></h2>
            </div>
        </div>
    </div>
    <!----------about------------>
    <div id="about">  
        <div class="container">
            <div class="row1">
                <div class="about-col-1">
                    <h1 class="sub-title">About</h1>
                    <?php
  $cand_id = "SELECT * FROM candidates WHERE candidate_id = '$id'";

$results = $con->query($cand_id);
$row = $results->fetch_assoc();
$id1 = $row['candidate_id'];

          $query1 = "SELECT * FROM candidate_profile where candidate_id=$id1";
          $result = mysqli_query($con,$query1);
          $number =  mysqli_num_rows($result);

          if($number > 0){
            foreach($result as $key => $data){
                ?>
                <p>Name: <?php echo($data['candidate_firstname']) ?>&nbsp;<?php echo($data['candidate_lastname']) ?></p>
                <p>Date of Birth: <?php echo($data['candidate_birthdate']) ?></p>
                <p>Gender: <?php echo($data['candidate_gender']) ?></p>
                <p>Graduation: <?php echo($data['candidate_graduation']) ?></p>
                <p>Post Graduation: <?php echo($data['candidate_postgraduation']) ?></p>
                <p>Experience: <?php echo($data['candidate_experience']) ?></p>
                <a style="text-decoration: none; color:white;" href="download.php?path=resume/<?php echo($data['candidate_resume']) ?>" download><h2>Download My Resume</h2></a><br>

                </div>
            <?php } } else{ ?>
                  <p>No Data Found</p>
                <?php }
                ?>
            </div>
        </div>
    </div>
       <!------------services---------->
       <div id="services">
        <div class="container">
            <h1 class="sub-title">My Projects</h1>
            <div class="services-list">
   <?php

  $cand_id = "SELECT * FROM candidates WHERE candidate_id = '$id'";

$results = $con->query($cand_id);
$row = $results->fetch_assoc();
$id2 = $row['candidate_id'];

          $query1 = "SELECT * FROM candidate_project where candidate_id=$id2";
          $result = mysqli_query($con,$query1);
          $number =  mysqli_num_rows($result);

          if($number > 0){
            foreach($result as $key => $data){
                ?>
                                <div>
                    <i class="fa-solid fa-users"></i>
                    <h2><?php echo($data['candidate_project_name']) ?></h2>
                    <p><?php echo($data['candidate_project_description']) ?></p>
                </div>
                <?php } } else{ ?>
                  <p>No Project Found</p>
                <?php }
                ?>

            </div>
        </div>
    </div><br>



<div id="candidate">
        <div class="container">
            <h1 class="sub-title"> CANDIDATES</h1>
            <div class="services-list">
                    <?php


          $query1 = "SELECT * FROM candidates";
          $result = mysqli_query($con,$query1);
          $number =  mysqli_num_rows($result);

          if($number > 0){
            foreach($result as $key => $data){
                ?>
                    <div class="">
                        <i class="fa-solid fa-users"></i>
                        <h3><?php echo($data['candidate_username']) ?></h3>
                        <p>Email: <a style="text-decoration: none; color:white;" href="mailto:<?php echo($data['candidate_email']) ?>">
                <?php echo($data['candidate_email']) ?></a></p>
                        <?php $id=$data['candidate_id'];?>

                            <?php
                            $cand_id = "SELECT * FROM candidate_profile WHERE candidate_id = '$id'";
                            $result = mysqli_query($con,$cand_id);
                            $number =  mysqli_num_rows($result);

                              if($number > 0){
                                foreach($result as $key => $data){
                                    ?>
                                <p>Name: <?php echo($data['candidate_firstname']) ?>&nbsp;<?php echo($data['candidate_lastname']) ?></p>
                                <p>Birthdate: <?php echo($data['candidate_birthdate']) ?></p>
                                <p>Gender: <?php echo($data['candidate_gender']) ?></p>
                                <p>Graduation: <?php echo($data['candidate_graduation']) ?></p>
                                <p>Post Graduation: <?php echo($data['candidate_postgraduation']) ?></p>
                                <p>Experience: <?php echo($data['candidate_experience']) ?></p><br>
                                <a style="text-decoration: none; color:white;" href="download.php?path=resume/<?php echo($data['candidate_resume']) ?>" download><h3>Download My Resume</h3></a><br>
                                

                                <?php $id=$data['candidate_id'];
                              echo '<a style="text-decoration: none; color:white;" href="candidate_profile.php?id='.$id.'">View Profile</a>';?>



                                <?php } } else{ ?>
                                  <p>No Data Found</p>
                                <?php }
                                ?>

                        <!-- <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a> -->

                </div>
            <?php } } else{ ?>
                  <p>No Data Found</p>
                <?php }
                ?>
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

  $cand_id = "SELECT * FROM candidates WHERE candidate_id = '$id'";

$results = $con->query($cand_id);
$row = $results->fetch_assoc();
$id3 = $row['candidate_id'];

          $query1 = "SELECT * FROM candidates where candidate_id=$id3";
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