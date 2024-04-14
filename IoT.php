<?php
$name = $_POST['name'];
$location = $_POST['location'];
$pin=$_POST['pincode'];
$num = $_POST['bin_type'];
$cont = $_POST['contact'];

// Connect to the database
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
$sql = "INSERT INTO iot_bin(location,username,bin_type,pincode,con,confor)
VALUES ('$location','$name','$num','$pin','$cont','0')";

  
if ($conn->query($sql) === TRUE) {
  $sql1 = "UPDATE details SET points=points+10 where email='$name'";

if ($conn->query($sql1) === TRUE) {
  echo '<script type="text/javascript">alert("form submitted suceesfull");</script>';
  session_start();
$_SESSION['variableName'] = $name;
  header('Location: http://localhost:3000/page1.php');
} 
}
else {
  echo '<script type="text/javascript">alert("form error please try again");</script>';
   include("IoT1.php");
}
$conn->close();

// Close the database connection
?>