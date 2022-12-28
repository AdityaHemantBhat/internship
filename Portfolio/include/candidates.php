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
                        echo($data['candidate_email'])

                         } } else{

                         }

                ?>