<?php
    session_start();
    if(!isset($_SESSION["candidate_username"])) {
        header("Location: index.php");
        exit();
    }

    // $candidate_username = $_SESSION["candidate_username"];



    // $query = "SELECT candidate_id from candidates where candidate_username='.$candidate_username.'";


?>