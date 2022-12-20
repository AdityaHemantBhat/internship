<?php
include_once("connection.php");

$pass=$_POST["pass"];
$email=$_POST["email"];

echo $pass;
exit();

$query = "select * from users where email='$email' and password="$pass";
$result = mysqli_query($conn, $query);





// //////////////////////////////

$result = $conn->query($query);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {

    $id= $row["id"];
    $fname= $row["firstname"];
  }

// ///////////////////////////


if (!empty($_POST["id"])) {
    $id = $_POST['id'];
    $query = "select * from state where country_id=$id";
    $result = mysqli_query($con, $query);
    if ($result->num_rows > 0) {
        echo '<option value="">Select State</option>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<option value="' . $row['id'] . '">' . $row['state'] . '</option>';
        }
    }
}
?>