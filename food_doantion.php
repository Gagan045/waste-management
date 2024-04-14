<?php
$name = $_POST['name'];
$contact=$_POST['contact_number'];
$pin=$_POST['pincode'];
$location = $_POST['location'];
$num = $_POST['satisfies_hunger'];

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
$sql = "INSERT INTO food_donations(contact_number,location,name,num,pincode)
VALUES ('$contact','$location','$name','$num','$pin')";

  
if ($conn->query($sql) === TRUE) {
  echo '<script type="text/javascript">alert("form submitted suceesfull");</script>';
   include("dashboard1.php");
} else {
  echo '<script type="text/javascript">alert("form error please try again");</script>';
   include("fooddonation1.php");
}
$conn->close();

// Close the database connection
$conn->close();
?>