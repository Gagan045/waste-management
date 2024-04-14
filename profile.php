<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="assets\waste (1).png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="dashboard-styles.css">
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
  <title>Profile</title>
  <style>
        body{
            background-color: #5cb874;
        }
        table{
            width: 70%;
            margin: auto;
            font-family: Arial, Helvetica, sans-serif;
        }
        table, tr, th, td{
            border: 1px solid #d4d4d4;
            border-collapse: collapse;
            padding: 12px;
        }
        th, td{
            text-align: left;
            vertical-align: top;
        }
        tr:nth-child(even){
            background-color: #e7e9eb;
        }
    </style>
</head>
<body>
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
<div class="dashboard-content">
<?php
    //storing database details in variables.
    $hostname = "localhost";
    $username = "newuser";
    $password = "gagan45";
    $db = "ecovision";

    //creating connection to database
    $con = mysqli_connect($hostname, $username, $password, $db);
    //checking if connection is working or not
    if(!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }
    //Output Form Entries from the Database
    echo '<h1>Your iot Connections</h1>';
    $sql = "SELECT * FROM iot_bin";
    //fire query
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0)
    {
       echo '<table> <tr> <th> UserName </th> <th> Bin Type </th> <th> Location </th> <th> Pincode </th> <th> Contact </th></tr>';
       while($row = mysqli_fetch_assoc($result)){
         // to output mysql data in HTML table format
         if($row["confor"]==1){
           echo '<tr > <td>' . $row["username"] . '</td>
           <td>' . $row["bin_type"] . '</td>
           <td> ' . $row["location"] . '</td>
           <td>' . $row["pincode"] . '</td>
           <td>' . $row["con"] . '</td></tr>';
         }
       }
       echo '</table>';
    }
    else
    {
        echo "0 results";
    }
    echo '<br>';
    echo '<br>';
echo '<h1>Your food donation requests</h1>';
    $sql = "SELECT * FROM food_donations";
    //fire query
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0)
    {
       echo '<table> <tr> <th> UserName </th>  <th> Location </th> <th> Pincode </th> <th> Contact </th><th> Quantity </th></tr>';
       while($row = mysqli_fetch_assoc($result)){
         // to output mysql data in HTML table format
         if($row["confor"]==1){
           echo '<tr > <td>' . $row["name"] . '</td>
           <td> ' . $row["location"] . '</td>
           <td>' . $row["pincode"] . '</td>
           <td>' . $row["contact_number"] . '</td>
           <td>' . $row["num"] . '</td></tr>';
         }
       }
       echo '</table>';
    }
    else
    {
        echo "0 results";
    }
    echo '<br>';
    echo '<br>';
echo '<h1>complaints raised</h1>';
    $sql = "SELECT * FROM complaints";
    //fire query
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0)
    {
       echo '<table> <tr> <th> UserName </th>  <th> Location </th> <th> Pincode </th> <th> Contact </th><th> Complaint </th><th> Status </th></tr>';
       while($row = mysqli_fetch_assoc($result)){
         // to output mysql data in HTML table format
         if($row["confor"]==1){
           echo '<tr > <td>' . $row["username"] . '</td>
           <td> ' . $row["location"] . '</td>
           <td>' . $row["pincode"] . '</td>
           <td>' . $row["cont"] . '</td>
           <td>' . $row["complaint"] . '</td><td>Retified</td></tr>';
         }
         else{
            echo '<tr > <td>' . $row["username"] . '</td>
           <td> ' . $row["location"] . '</td>
           <td>' . $row["pincode"] . '</td>
           <td>' . $row["cont"] . '</td>
           <td>' . $row["complaint"] . '</td><td>Pending</td></tr>';
         }
       }
       echo '</table>';
    }
    else
    {
        echo "0 results";
    }
    // closing connection
    mysqli_close($con);

?>
</div>
</body>
</hmtl>