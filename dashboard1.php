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
  <title>Dashboard</title>
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
          <li><a class="getstarted scrollto" href="http://localhost:8501">Classification</a></li>
          <li><a class="getstarted scrollto" href="#about">About Us</a></li>
          <li><a class="getstarted scrollto" href="profile.php">History</a></li>
          <li><a class="getstarted scrollto" href="index.php">Log Out</a></li>          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
  </div>
  </header>
  <div class="dashboard-content">
    <div class="greeting">
      <?php
      session_start();
if(isset($_SESSION['variableToSend'])) {
    $receivedVariable = $_SESSION['variableToSend'];
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

$sql = "SELECT name,points FROM details where email='$receivedVariable'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Hi, " . $row['name']."<br> Points:" . $row['points'];
  }
} 
}
?>
</div>
    <div class="dashboard-links">
      <a href="page1.php">
        <img src="d2.jpg" alt="Image 1">
        <div class="link-overlay">IOT</div>
      </a>
      <a href="fooddonation1.php">
        <img src="food2.jpg" alt="Image 2">
        <div class="link-overlay">Food Donation</div>
      </a>
      <a href="campaign2.php">
        <img src="camp1.jpg" alt="Image 3">
        <div class="link-overlay">Campaign</div>
      </a>
      <a href="videos.php">
        <img src="vid.jpg" alt="Image 4">
        <div class="link-overlay">Videos</div>
      </a>
    </div>
    
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  </div>
  <!-- ... remaining HTML ... -->
  <!-- ... remaining HTML ... -->
  <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="about1.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>At Ecovision, we're leading a waste management revolution with a focus on sustainability. Here's what sets us apart:</h3>
            <ul>
              <li><i class="bi bi-check-circled"></i> Garbage Collection: We collect waste where it matters most, reducing trips and environmental impact. Contact us anytime, even during holidays.</li>
              <li><i class="bi bi-check-circled"></i> Waste Segregation: Our advanced tech sorts waste into dry and wet categories, further classifying dry waste into biodegradable, recyclable, and non-recyclable items.</li>
              <li><i class="bi bi-check-circled"></i> Waste Disposal: We convert biodegradable waste into Biogas and Digestate, recycle recyclables, and responsibly burn non-recyclables with emissions control.</li>
              <li><i class="bi bi-check-circled"></i> Environmental Initiatives: For every ton of waste collected, we donate 10 saplings to NGOs for reforestation.</li>
              <li><i class="bi bi-check-circled"></i> Website Features: Our website enables food donations, waste reduction campaigns, and provides educational content on waste management.</li>
            </ul>
            <p>
              Join us at Ecovision to redefine waste management for a cleaner, greener future. Together, we can make a difference.
            </p>
          </div>
        </div>

      </div>
    </section>
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Vasavi college of engineering,Hyderabad</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>ecovision@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+91 7842559116</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3807.6502829120864!2d78.38013327516477!3d17.38055318350545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb942a2497f349%3A0x5c30ca8d2ffb8734!2sVasavi%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1696656147707!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="mail1.php" method="POST">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <input type="submit" value="send message">
            </form>
          </div>

        </div>

      </div>
    </section>
</body>
</html>