<!-- <?php
include('include/control.inc'); 
include('include/dbconnect.php'); 
?> -->
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
                    <li><a href="#header">HOME</a></li>
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="#services">SERVICES</a></li>
                    <li><a href="#candidate">CANDIDATES</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                    <li><a class="btn" href="signup.php">Sign Up</a></li>
                    <li><a class="btn" href="login.php">Login</a></li>
                </ul>
            </nav>
            <div class="header-text">
                <P>
                <H1>WELCOME TO THE PORTFOLIO SITE</H1>
                </P>
                <h2><span>Where talent meets your qualificational needs.</span></h2>
            </div>
            <div>
            </div>
            <div>
            </div>
        </div>
    </div>
    <!----------about------------>
    <div id="about">
        <div class="container">
            <div class="row1">
                <div class="about-col-1">
                    <h1 class="sub-title">About</h1>
                    <p>
                    <h3>Welcome to the portfolio site,
                        <br> where we help you find a suitable candidate to match your qualificational needs.
                        <br>The site helps candidates display their porfolios and come in contact with new employers.
                    </h3>
                    </p>
                </div>
            </div>
        </div>
    </div>
       <!------------services---------->
       <div id="services">
        <div class="container">
            <h1 class="sub-title">Our Services</h1>
            <div class="services-list">
                <div>
                    <i class="fa-solid fa-users"></i>
                    <h2>UI/UX </h2>
                    <p>User interface (UI) and user experience (UX) are two words that you might hear mentioned
                        frequently in tech circles (and sometimes interchangeably).</p>
                </div>
                <div>
                    <i class="fa-solid fa-code"></i>
                    <h2>Web Development</h2>
                    <p>the work involved in developing a website for the Internet (World Wide Web) or an intranet (a
                        private network).</p>
                </div>
                <div>
                    <i class="fa-brands fa-slack"></i>
                    <h2>Digital Illustrations</h2>
                    <p>Digital illustration involves the use of digital tools to generate art directly from the artist's
                        hand, through an interface that translates that movement into a digital display. </p>
                </div>
                <div>
                    <i class="fa-solid fa-feather"></i>
                    <h2>Creative Writing </h2>
                    <p>Creative writing is a form of writing where creativity is at the forefront of its purpose through
                        using imagination, creativity, and innovation in order to tell a story through strong written
                        visuals with an emotional impact, like in poetry writing, short story writing, novel writing,
                        and more.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--candidate-->
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
    </div>
    <!-- contact-->
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="sub-title">CONTACT ME</h1>
                    <p> <i class="fa-solid fa-paper-plane"></i><a style="text-decoration: none; color:white;" href="mailto:">contact@example.com</a></p>
                    <p> <i class="fa-sharp fa-solid fa-square-phone"></i><a style="text-decoration: none; color:white;" href="tel:">0123456789</a></p>
                    <div class="social-icons">
                        <a href="https://www.facebook.com"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.linkedin.com"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                    <a href="images/Ishanee_Kossambe_Resume_31-07-2022-22-06-27.pdf" download class="btn btn2">Download
                        ISHANEE'S CV</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>