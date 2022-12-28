<?php 
include('include/candidate_reg_profile_log.php');  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Projects</title>
    <link rel="stylesheet" href="form.css">
    
</head>
<body>

    <div>
        <div>
            <nav>
                <img src="images/logo.png" class="logo">
                <ul>
                    <li><a href="candidate_homepage.php">HOME</a></li>
                    <li><a href="settings.php">SETTINGS</a></li>
                    <li><a class="btn" href="include/logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="signupFrm">
        <form class="form" action="include/candidate_project_form.php" method="post">

            <h1>Your Project</h1>

            <div class="inputContainer">
                <input class="input" type="text" placeholder="" name="candidate_project_name">
                <label class="label">Project Name</label>
            </div>

            <div class="inputContainers">
                <textarea class="input" style="resize: none !important; padding-top:10px;" name="candidate_project_description"></textarea>
                <label class="label">Project Description</label>
            </div>

            <input type="submit" class="submitBtn" value="Submit" name="project_form">
        </form>    
    </div>
</body>
</html>