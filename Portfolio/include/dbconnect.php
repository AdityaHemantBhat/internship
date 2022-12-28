<?php

	
// initializing variables
    $candidate_username = "";
    $candidate_id = "";
    $errors = array(); 


    

    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    $con = mysqli_connect("localhost","root","","portfolio");
    // Check connection
    if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
    // if (mysqli_connect_errno()){
    //     echo "Failed to connect to MySQL: " . mysqli_connect_error();
    // }


?>