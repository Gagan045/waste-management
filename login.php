<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="styles.css"/>
  </head>
<body>

<?php
$c=0;
$a = $_POST['user'];
$b = $_POST['pw'];
if($a=="admin" && $b=="ecovision"){
  include("admin_dashboard.php");
}
else{
$servername = "localhost";
$username = "newuser";
$password = "gagan45";
$db = "ecovision";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql= "SELECT * FROM details";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if($row['password']==$b && $row['email']=$a){
      $c=1;
      session_start();
$_SESSION['variableToSend'] = $a;
      header('Location: http://localhost:3000/dashboard1.php');
      break;
    }
  }
  if ($c==0){
  echo '<script type="text/javascript">alert("Password Incorrect Try again");</script>';
   include("login1.php");
}
  
}
$conn->close();
}
?>
</body>
</html>