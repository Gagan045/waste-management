<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="assets\waste (1).png" rel="icon">
  <style>
    .dashboard-content{
      background-color: #5cb874;
      height:100%;
      text-align: center;
    }
    .event{
      height:450px;
      text-align: center;
    }
    .getstarted,srcollto{
      text-align: center;
      margin: 5px;
    }
    .btn-group-vertical{
      text-align: center;
    }
    </style>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="page1-styles.css">
  <title>Page 1</title>
</head>
<body>
  <div class="dashboard-background">
    <div class="header">
    <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">Ecovision</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="getstarted scrollto" href="index.php">Log Out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
  </div>
  </header>
  </div>
    <div class="dashboard-content">
      <div class="greeting" id="usernameGreeting"><?php
      session_start();
      $receivedVariable="";
    if (isset($_SESSION['variableToSend'])) {
       $receivedVariable=$_SESSION['variableToSend'];
   
    }
    else if(isset($_SESSION['variableName'])){
      $receivedVariable = $_SESSION['variableName'];
    }
// Now you can use $receivedVariable in your PHP code
    $servername = "localhost";
$username = "newuser";
$password = "gagan45";
$db = "ecovision";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name,points FROM details where email = '$receivedVariable' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Hi, ".$row['name']."<br>points:" . $row['points'];
  }
}
?>
</div>
<div class="event-container">
      <div class="event"><a href="IoT1.php">IOT bin Setup
      <div>
        <img src="smart_bin.webp" alt="iot bin">
</div>
</a>
    </div>
      <div class="event"><a href="eme_was_coll1.php">Emergency waste Collection
        <div>
          <img src="emeg.jpg" alt="Emergency Waste Collection">
        </div>
      </a></div>
      <div class="event"><a href="complaints1.php">Complaints
        <div>
          <img src="comp.jpeg" alt="complaints">
        </div>
      </a></div>
    </div>
  </div>
  <script src="dashboard.js"></script>
</body>
</html>
