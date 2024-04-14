<?php
$name = $_POST["name"];
$contact = $_POST["contact_number"];
$bin_type = $_POST["iot_bin_type"];
$location = $_POST["location"];
$pin=$_POST['pincode'];
$issue = $_POST["issue"];

$servername = "localhost";
$username = "newuser";
$password = "gagan45";
$db = "ecovision";
// Create connection
$conn = mysqli_connect($servername,$username,$password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO complaints(cont,location,username,type_of_bin,pincode,complaint)
VALUES ('$contact','$location','$name','$bin_type','$pin','$issue')";

  
if ($conn->query($sql) === TRUE) {
  echo '<script type="text/javascript">alert("form submitted suceesfull");</script>';
   include("page1.php");
} else {
  echo '<script type="text/javascript">alert("form error please try again");</script>';
   include("complaints1.php");
}
$conn->close();
?>
