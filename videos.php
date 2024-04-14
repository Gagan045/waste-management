<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campaigning Events</title>
     <link href="assets\waste (1).png" rel="icon">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #5cb874;
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
            padding: 2rem;
        }
        .event {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 1rem;
            margin: 1rem;
            flex: 1;
            max-width: 400px; /* Adjust the maximum width to fit the video */
            overflow: hidden;
            transition: transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .event:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .event iframe {
            width: 100%;
            height: 225px; /* Adjust the height as needed */
            transition: transform 0.2s;
        }
        .event:hover iframe {
            transform: scale(1.05);
        }
        .play-button {
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
        <h2>Waste Management Practices</h2>
    </div>
    <div class="event-container">
        <div class="event">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/4JDGFNoY-rQ" frameborder="0" allowfullscreen></iframe>
       
        </div>
        <div class="event">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/HgEo7YnvJs0" frameborder="0" allowfullscreen></iframe>
            
        </div>
        <div class="event">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Xs2hAWuPmSg" frameborder="0" allowfullscreen></iframe>
            
        </div>
    </div>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
</body>
</html>