<?php
$name = $_POST["name"];
$contact = $_POST["contact_number"];
$bin_type = $_POST["iot_bin_type"];
$collection_date = $_POST["collection_date"];
$location = $_POST["location"];
$pin=$_POST['pincode'];
$trash_level = $_POST["trash_level"];

$servername = "localhost";
$username = "newuser";
$password = "gagan45";
$db = "ecovision";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO eme(cont,location,username,trash_level,cdate,bin_type,pincode)
VALUES ('$contact','$location','$name','$trash_level','$collection_date','$bin_type','$pin')";

  
if ($conn->query($sql) === TRUE) {
  echo '<script type="text/javascript">alert("form submitted suceesfull");</script>';
   include("page1.php");
} else {
  echo '<script type="text/javascript">alert("form error please try again");</script>';
   include("eme_was_coll.php");
}
$conn->close();
?>
