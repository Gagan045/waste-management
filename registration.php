<?php
$name = $_POST['full-name'];
$contact=$_POST['phone-number'];
$email = $_POST['user'];
$pass= $_POST['password'];

// Connect to the database
$servername = "localhost";
$username = "newuser";
$password = "gagan45";
$db = "ecovision";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check if the user already exists
$sql = "SELECT * FROM details WHERE email='$email'";
$result = $conn->query($sql);
$a=10;
if ($result->num_rows > 0) {
   echo '<script type="text/javascript">alert("user already exists");</script>';
   include("login1.php");
} else {
  // Insert the new user into the database
  $sql = "INSERT INTO details (name,cont, email, password,points) VALUES ('$name','$contact', '$email', '$pass','$a')";
  $conn->query($sql);

  echo '<script type="text/javascript">alert("Registration Sucessfull");</script>';
   include("login1.php");
}

// Close the database connection
$conn->close();
?>