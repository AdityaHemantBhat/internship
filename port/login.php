<?php 
include('connection.php');
error_reporting(0);
//To login into website
if(isset($_POST['submit']))
{   

    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql="select * from users where email='$email' and password='$password'";
  
    $result = mysqli_query($conn,$sql);
    
    while ($row = mysqli_fetch_array($result)) {

        $arr[] = $row;
        } 
    
    foreach($arr as $data){
        $id = $data['id'];
        $name = $data['firstname'];
        $isadmin=$data['is_admin'];
    }

    if($isadmin == 1){
        header("location:dashboard.php?u=$id");
    }
    elseif(($id > 0) ){
        
        header("location:index.php?u=$id"); 
    }
    else{
        
        header('location:login.php'); 
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</head>

<body>
    <div class="login-box">
        <h1>Login</h1>
        <form action="login.php" method="post">
            <label>Email</label>
            <input id="email" name="email" type="email" placeholder="Enter Your Email" required>
            <label>Password</label>
            <input id="password" name="password" type="password" placeholder="Enter Your Password" required>
            <input type="submit" value="Login" name="submit" >
        </form>
        <p>Don't have an account? <a href="signup.php">Sign-Up Here</a> 
        </p>
    </div>
</body>

</html>

