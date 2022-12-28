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
                              <li><a href="#header">HOME</a></li>
                              <li><a href="#about">ABOUT</a></li>
                              <li><a href="#services">MY PROJECTS</a></li>
                              <li><a href="#candidate">CANDIDATE</a></li>
                              <li><a href="#contact">CONTACT</a></li>
                              <li><a href="settings.php">SETTINGS</a></li>
                              <li><a class="btn" href="include/logout.php">Logout</a></li>
                          </ul>
                      </nav>
                      <div class="header-text">
                          <P>
                          <H1>Welcome "<?php echo $_SESSION['candidate_username']; ?>" to Portfolio!</H1>
                          </P>
                          <h2><span>Where talent meets your qualificational needs.</span></h2>
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

                                $candidate_username = $_SESSION["candidate_username"];
                                $cand_id = "SELECT candidate_id FROM candidates WHERE candidate_username = '$candidate_username'";

                                $results = $con->query($cand_id);
                                $row = $results->fetch_assoc();
                                $id = $row['candidate_id'];

                                $query1 = "SELECT * FROM candidate_profile where candidate_id=$id";
                                $result = mysqli_query($con, $query1);
                                $number =  mysqli_num_rows($result);

                                if ($number > 0) {
                                    foreach ($result as $key => $data) {
                                ?>
                                      <p>Name: <?php echo ($data['candidate_firstname']) ?>&nbsp;<?php echo ($data['candidate_lastname']) ?></p>
                                      <p>Date of Birth: <?php echo ($data['candidate_birthdate']) ?>
                                      <p>
                                      <p>Gender: <?php echo ($data['candidate_gender']) ?>
                                      <p>
                                      <p>Graduation: <?php echo ($data['candidate_graduation']) ?></p>
                                      <p>Post Graduation: <?php echo ($data['candidate_postgraduation']) ?></p>
                                      <p>Experience: <?php echo ($data['candidate_experience']) ?></p>


                          </div>
                      <?php }
                                } else { ?>
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

                            $candidate_username = $_SESSION["candidate_username"];
                            $cand_id = "SELECT candidate_id FROM candidates WHERE candidate_username = '$candidate_username'";

                            $results = $con->query($cand_id);
                            $row = $results->fetch_assoc();
                            $id = $row['candidate_id'];

                            $query1 = "SELECT * FROM candidate_project where candidate_id=$id";
                            $result = mysqli_query($con, $query1);
                            $number =  mysqli_num_rows($result);

                            if ($number > 0) {
                                foreach ($result as $key => $data) {
                            ?>
                                  <div>
                                      <h2><?php echo ($data['candidate_project_name']) ?></h2>
                                      <p><?php echo ($data['candidate_project_description']) ?></p>
                                  </div>
                              <?php }
                            } else { ?>
                              <p>No Project Found</p>
                          <?php }
                            ?>

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

                            $candidate_username = $_SESSION["candidate_username"];


                            $query1 = "SELECT * FROM candidates";
                            $result = mysqli_query($con, $query1);
                            $number =  mysqli_num_rows($result);

                            if ($number > 0) {
                                foreach ($result as $key => $data) {
                            ?>
                                  <div class="">
                                      <i class="fa-solid fa-users"></i>
                                      <h2><?php echo ($data['candidate_username']) ?></h2>
                                      <p>Email: <a style="text-decoration: none; color:white;" href="mailto:<?php echo ($data['candidate_email']) ?>">
                                              <?php echo ($data['candidate_email']) ?></a></p>
                                      <?php $id = $data['candidate_id']; ?>

                                      <?php
                                        $cand_id = "SELECT * FROM candidate_profile WHERE candidate_id = '$id'";
                                        $result = mysqli_query($con, $cand_id);
                                        $number =  mysqli_num_rows($result);

                                        if ($number > 0) {
                                            foreach ($result as $key => $data) {
                                        ?>
                                              <p>Name: <?php echo ($data['candidate_firstname']) ?>&nbsp;<?php echo ($data['candidate_lastname']) ?></p>
                                              <p>Birthdate: <?php echo ($data['candidate_birthdate']) ?></p>
                                              <p>Gender: <?php echo ($data['candidate_gender']) ?></p>
                                              <p>Graduation: <?php echo ($data['candidate_graduation']) ?></p>
                                              <p>Post Graduation: <?php echo ($data['candidate_postgraduation']) ?></p>
                                              <p>Experience: <?php echo ($data['candidate_experience']) ?></p><br>
                                              <a style="text-decoration: none; color:white;" href="download.php?path=resume/<?php echo ($data['candidate_resume']) ?>" download>
                                                  <h3>Download My Resume</h3>
                                              </a><br>
                                              <?php $id = $data['candidate_id'];
                                                echo '<a style="text-decoration: none; color:white;" href="candidate_user_profile.php?id=' . $id . '">View Profile</a>'; ?>

                                          <?php }
                                        } else { ?>
                                          <p>No Data Found</p>
                                      <?php }
                                        ?>

                                      <!-- <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a> -->

                                  </div>
                              <?php }
                            } else { ?>
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

                                $candidate_username = $_SESSION["candidate_username"];
                                $cand_id = "SELECT candidate_id FROM candidates WHERE candidate_username = '$candidate_username'";

                                $results = $con->query($cand_id);
                                $row = $results->fetch_assoc();
                                $id = $row['candidate_id'];

                                $query1 = "SELECT * FROM candidates where candidate_id=$id";
                                $result = mysqli_query($con, $query1);
                                $number =  mysqli_num_rows($result);

                                if ($number > 0) {
                                    foreach ($result as $key => $data) {
                                ?>
                                      <p> <i class="fa-solid fa-paper-plane"></i><a style="text-decoration: none; color:white;" href="mailto:<?php echo ($data['candidate_email']) ?>">
                                              <?php echo ($data['candidate_email']) ?>
                          </div>
                      <?php }
                                } else { ?>
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
              </div><br><br><br>
          </body>

          </html>