<?php
include('connection.php');
error_reporting(0);

$id = $_REQUEST['u'];

$query="select image from users where id =$id";
$res = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($res)){
    $ar[]= $row;
}
 
foreach($ar as $data){
    $image = $data['image'];
}

$sql="select * from users where id='$id'";
  
$result = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($result)) {

    $arr[] = $row;
} 

foreach($arr as $data){
    $fname = $data['firstname'];
    $lname = $data['lastname'];
    $bdate=$data['birthdate'];
    $email= $data['email'];
    $gender = $data['gender'];
    $education = $data['education'];
    $experience=$data['experience'];
    $image= $data['image'];
}

if(isset($_POST['Delete']))
{    
  
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $bdate=$_POST['birthdate'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $education = $_POST['education'];
    $experience=$_POST['experience'];
    $image= $_POST['image'];

    $sql="Delete from users where id=$id";
    $result= mysqli_query($conn,$sql);
    if($result){
        header('location:index.php');
    }else {
        header("location:profile.php?u=$id");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="bootstrap@5.2.3-dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a5b6877a9b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="profile.css">
</head>

<body>
    <div class="container">
        <div class="main">
            <nav>
                <img src="images/logo.png" class="logo">
                <ul>
                    <li><a href="index.php?u=<?php echo $id ?>">HOME</a></li>
                    <li><a href="#about?u=<?php echo $id ?>">ABOUT</a></li>
                    <li><a href="#services">SERVICES</a></li>
                    <li><a href="#candidate">CANDIDATE</a></li>
                    <li><a href="#contact">CONTACT</a></li>   
                    <li><a class="btn" href="logout.php">LOG OUT</a></li>
                </ul>
            </nav>
            <div class="row">
                <div class="col-md-4 mt-1">
                    <div class="card text-center sidebar">
                        <div class="card-body">
                            <!-- <img src="image.jpg" class="rounded-circle" width="150"> -->
                            <div class="social-icons">
                               <form action="" method=post>
                                   <input type="submit" name="Delete" value="Delete Account">
                               </form>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-md8 mt-1">
                    <div class="card mb-3 content">
                        <h1 class="m-3 pt-3">About</h1>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Full Name : <?php echo $fname." ".$lname?></h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                </div>
                            </div>    
                            <div class="row"></div>
                                <div class="col-md-3">
                                    <h5>Birthdate : <?php echo $bdate?></h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                </div>
                            </div>    
                            <div class="row"></div>
                                <div class="col-md-3">
                                    <h5>Gender: <?php echo $gender?></h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                </div>
                            </div>
                            <div class="row"></div>
                                <div class="col-md-3">
                                    <h5>Email : <?php echo $email?></h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                </div>
                            </div>    
                            <div class="row"></div>
                                <div class="col-md-3">
                                    <h5>Education : <?php echo $education?></h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                </div>
                            </div>    
                            <div class="row"></div>
                                <div class="col-md-3">
                                    <h5>Experiences :  <?php echo $experience?></h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                </div>
                            </div>    
                            <div class="row"></div>
                                <div class="col-md-3">    
                                    <h5>Portfolio & Resume :</h5><br><img style="width:400px; height:400px;" src = "profileimg/<?php echo $image; ?>">
                                </div>
                            </div> 
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="submit" onclick="myFunction()" value="Update Your profile">
                                    <script>
                                        function myFunction() {
                                        window.location.href="profile_update_form.php?u=<?php echo $id ?>";
                                        }                                         
                                    </script>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>