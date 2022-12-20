<?php
include('connection.php');
error_reporting(0);
//To signup in website 
if(isset($_POST['submit']))
{
	$firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user= mysqli_query($conn,"select * from users where email='$email'");

	if(mysqli_num_rows($user)>0){
		$err="email has already taken";
		header("refresh:5");
	}
	else{
	$result = mysqli_query($conn,"insert into users (firstname,lastname,email,password) values('$firstname','$lastname','$email','$password')");
	if($result)
	{
		header('location:login.php');
	}
	else{
		header('location:signup.php');
        echo"failed to signup";
	}

	}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="signup-box">
        <h1>Sign Up</h1>
        <h4>Join us and become a part of this family</h4>
        <form action="signup.php" method="post">
            <label>First Name</label>
            <input type="text" placeholder="Enter Your First Name" id="first_name" name="first_name" required>
            <label>Last Name</label>
            <input type="text" placeholder="Enter Your Last Name" id="last_name" name="last_name"  required>
            <label>Email</label>
            <input type="email" placeholder="Enter Your Email" id="email" name="email"  required>
			<div id="emailcheck"><?php echo $err;?></div>
            <label>Password</label>
            <input type="password" placeholder="Enter Your Password" id="password" name="password"  required>
            <!-- <input type="checkbox" onclick="myFunction()">Show Password -->
            <input type="submit" onclick="hide()" value="Sign Up" name="submit">
			<br>
			<div id="show" style="display:none">
			Thank you for Signing up
			</div>
            <p>By clicking the submit button, you agree to our <br>
                <a href="#">Terms and Conditions</a> and <a href="#">Policy and Privacy</a>
            </p>
        </form>
       
    </div>
    <p class="para2">Already have an account?<a href="login.php">Login here</a></p>
<script>
	function hide() {
  	var x = document.getElementById("show");
  	if (x.style.display === "none") {
    x.style.display = "block";
  	} else {
    x.style.display = "none";
  	}

}
</script>
<!-- <script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script> -->
	
</body>

</html>
