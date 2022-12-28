

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="form.css">
    
</head>
<body>

    <div>
        <div>
            <nav>
                <img src="images/logo.png" class="logo">
                <ul>
                    <li><a class="btn" href="login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="signupFrm">
        <form class="form" action="include/candidate_reg_profile_log.php" method="post">

            <h1>Sign Up</h1>
            <h4>Join us and become a part of this family</h4>

            <div class="inputContainer">
                <input class="input" type="text" placeholder="" name="candidate_username" required>
                <label class="label">Username</label>
            </div>

            <div class="inputContainer">
                <input class="input" type="email" placeholder="" name="candidate_email" required>
                <label class="label">Email</label>
            </div>

            <div class="inputContainer">
                <input class="input" type="password" placeholder="" name="candidate_password" required>
                <label class="label">Password</label>
            </div>
            <input type="submit" class="submitBtn" value="Next" name="registration_info">

            <p>By clicking the submit button, you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Policy and Privacy</a>
            </p>

            <p>Already have an account?<a href="login.php"> Login here</a></p>
        </form>    
    </div>
</body>
</html>