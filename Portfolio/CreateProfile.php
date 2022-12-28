<?php 
include('include/dbconnect.php');
include('include/candidate_profile_reg.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Profile</title>
    <link rel="stylesheet" href="form.css">
    
</head>
<body>

    <div>
        <div>
            <nav>
                <img src="images/logo.png" class="logo">
                <ul>
                    <li><a style="pointer-events: none" class="btn" href="login.php">Log Out</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="signupFrm">
        <form class="form" method="post" action="include/candidate_profile_reg.php" enctype="multipart/form-data">
            <h1>Create Profile</h1>
            <p>Welcome "<?php echo $_SESSION['candidate_username']; ?>"</p>

            <div class="inputContainer">
                <input class="input" type="text" placeholder="" name="candidate_firstname" required>
                <label class="label">First Name</label>
            </div>

            <div class="inputContainer">
                <input class="input" type="text" placeholder="" name="candidate_lastname" required>
                <label class="label">Last Name</label>
            </div>

            <div class="inputContainer">
                <input class="input" type="date" placeholder="" name="candidate_birthdate">
                <label class="label">Birthdate</label>
            </div>

            <div class="inputContainer">
                <div class="radio">
                <label>Gender:</label>&nbsp;&nbsp;&nbsp;
                <input class="" id="male" type="radio" placeholder="" name="candidate_gender" value="Male">
                <label class="" for="male">Male</label>&nbsp;&nbsp;&nbsp;
                <input class="" id="female" type="radio" placeholder="" name="candidate_gender" value="Female">
                <label class="" for="female">Female</label>&nbsp;&nbsp;&nbsp;
                <input class="" id="others" type="radio" placeholder="" name="candidate_gender" value="Other">
                <label class="" for="others">Others</label>
            </div>
            </div>
            <p>Degree</p>
            <div class="inputContainer">
                <input class="input" type="text" placeholder="" name="candidate_graduation">
                <label class="label">Graduation</label>
            </div>

            <div class="inputContainer">
                <input class="input" type="text" placeholder="" name="candidate_postgraduation">
                <label class="label">Post Graduation</label>
            </div>

            <div class="inputContainers">
                <textarea class="input" style="resize: none !important; padding-top:10px;" name="candidate_experience"></textarea>
                <label class="label">Experience</label>
            </div>

            <div class="inputContainer">
                <input class="input" type="file"  name="candidate_resume">
                <label class="label">Portfolio / Resume / CV</label>

            </div>
            <input type="submit" class="submitBtn" value="Next" name="profile_reg">
        </form>    
    </div>
</body>
</html>