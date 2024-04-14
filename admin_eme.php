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
        th{
            background-color: #5cb874;
        }
        tr:nth-child(even){
            background-color: #e7e9eb;
        }
        tr:nth-child(odd){
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
    $sql = "SELECT * FROM eme";
    //fire query
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0)
    {
       echo '<table> <tr> <th> UserName </th> <th> Bin Type </th> <th> Date</th><th> Contact Number </th><th> Location</th> <th> Pincode </th> <th> Trash Level </th></tr>';
       while($row = mysqli_fetch_assoc($result)){
        if($row["confor"]==0){
         // to output mysql data in HTML table format
           echo '<tr > <td>' . $row["username"] . '</td>
           <td>' . $row["bin_type"] . '</td>
           <td> ' . $row["cdate"] . '</td>
           <td>' . $row["cont"] . '</td> 
           <td>' . $row["location"] . '</td> 
           <td>' . $row["pincode"] . '</td>
           <td>' . $row["trash_level"] . '</td>
           <td><button type="button" class="btn btn-success" onclick="handleButtonClick(\'' . htmlspecialchars($row["username"]) . '\')">Conform</button></td>
           </tr>';
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
<script>
    function handleButtonClick(username) {
        // Example: Set the 'confirm' flag to 1 for the clicked row on the server
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Optionally, you can handle the response from the server
            }
        };
        xhr.open('GET', 'set_confirm_eme.php?username=' + username, true);
        xhr.send();
        setInterval('location.reload()', 3000);
    }
</script>
</div>
</body>
</html>