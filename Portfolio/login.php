<?php include('include/login_candidate.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="form.css">
    
</head>
<body>

    <div>
        <div>
            <nav>
                <img src="images/logo.png" class="logo">
                <ul>
                    <li><a class="btn" href="signup.php">Sign Up</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="signupFrm">
        <form class="form" action="include/login_candidate.php" method="post">
            <h1>LogIn</h1>
            <div class="inputContainer">
                <input class="input" type="text" placeholder="" name="candidate_username">
                <label class="label">Username</label>
            </div>

            <div class="inputContainer">
                <input class="input" type="password" placeholder="" name="candidate_password">
                <label class="label">Password</label>
            </div>
            <?php if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') {
echo "Wrong Username / Password";
} ?>
            <input type="submit" class="submitBtn" value="Submit" name="candidate_login">
            <p>Don't have an account? <a href="signup.php">Sign-Up Here</a></p>
        </form>    
    </div>
</body>
</html>