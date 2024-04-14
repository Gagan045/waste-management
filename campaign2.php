<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campaigning Events</title>
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
    <style>
        body {
         background-color:#5cb874;
         color: #333;
         font-family: Arial, sans-serif;
         }
        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #333;
            color: #fff;
            padding: 1rem;
        }
        .ecovision {
            font-size: 24px;
        }
        .points {
            font-size: 18px;
        }
        .logout-button {
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 0.5rem 1rem;
            cursor: pointer;
        }
        .event-title {
            text-align: center;
            padding: 1rem;
            font-size: 24px;
        }
        .event-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            padding: 2px;
            text-align: center;
        }
        .event {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 1rem;
            margin: 1rem;
            flex: 1;
            max-width: 300px;
            transition: transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
        }
        .event:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .event img {
            max-width: 100%;
            height: auto;
            transition: transform 0.2s;
        }
        .event:hover img {
            transform: scale(1.05);
        }
        .register-button {
            display: block;
            width: 100%;
            padding: 0.5rem;
            text-align: center;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
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
    <div class="event-title">
        <h2>Campaigning Events</h2>
    </div>
    <div class="event-container">
        <div class="event">
            <img src="campaign.1jpg.png" alt="Campaign Event 1">
            <h2>Zero-Waste Challenge Week</h2>
            <p>This week-long campaign focuses on raising awareness about waste reduction and encouraging participants to minimize their waste generation.</p>
            <p>Date:27/08/2023<br>Place:Miyapur,hyderabad</p>
            <a href="register1.php" class="register-button">Register</a>
        </div>
        <div class="event">
            <img src="campaign2.png" alt="Campaign Event 2">
            <h2>Plastic-Free Pledge Month</h2>
            <p> Throughout this month-long campaign, individuals and communities commit to reducing their plastic usage.</p>
            <p>Date:3/09/2023<br>Place:LB nagar,hyderabad</p>
            <a href="register2.php" class="register-button">Register</a>
        </div>
        <div class="event">
            <img src="campaign3.png" alt="Campaign Event 3">
            <h2>E-Waste Recycling Drive and Tech Swap</h2>
            <p>This event focuses on electronic waste (e-waste) reduction. It involves setting up collection points for old and unused electronic devices, such as phones, laptops, and tablets.</p>
            <p>Date:10/09/2023<br>Place:Manikonda,hyderabad</p>
            <a href="register3.php" class="register-button">Register</a>
        </div>
    </div>
    <script>
        function logout() {
            // Add your logout logic here
        }
    </script>
</body>
</html>