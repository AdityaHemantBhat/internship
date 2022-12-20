<?php
//php connection to database
session_start();
$servername ='localhost';
$username ='root';
$pass ='';
$database ='port';
$conn = mysqli_connect($servername,$username, $pass, $database) or die ("Error". mysqli_connect_error());
?>