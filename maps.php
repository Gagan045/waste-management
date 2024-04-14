<html>

<head>
    <title>Optimized Route</title>
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
    <link rel="stylesheet" href="https://pyscript.net/releases/2023.11.1/core.css" />
    <script type="module" src="https://pyscript.net/releases/2023.11.1/core.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.css' />
    <style>
        html,
        body {
            height: 100%;
            background-color: #5cb874;
        }

        form {
            padding: 10px;
            height: auto;
            width: 750px;
            text-align: center;
            border: 3px solid black;
            margin-top: 10px;
            margin-left: 350px;
        }

        input {
            margin: auto;
            padding: auto;
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
    </div>

    <form>
        <div id="inputFields">
            <input type="text" name="array[]" placeholder="Latitude" />
            <input type="text" name="array[]" placeholder="Longitude" />
            <input type="text" name="array[]" placeholder="Trash Bin" /><br>
        </div>
        <div>
            <button type="button" onclick="addInputFields()">Add Input</button>
        </div>
        <div>
            <button type="button" onclick="Geeks()">Submit</button>
        </div>
    </form>
    <div id='map' style='width: 100%; height: 100%;'></div>
    <script src='https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.js'></script>
    <script>
        var k = "The respective values are :";

        function Geeks() {
            var inputs = document.getElementsByName('array[]');
            var valuesArray = [[17.3911174, 78.3204218]];

            for (var i = 0; i < inputs.length; i += 3) {
                var value1 = inputs[i].value;
                var value2 = inputs[i + 1].value;
                var value3 = inputs[i + 2].value;

                // Check if the third element is above 80 before adding to the array
                if (parseFloat(value3) > 80) {
                    valuesArray.push([parseFloat(value1), parseFloat(value2)]);
                }
            }

            // Display the array
            map(valuesArray);
        }

        function addInputFields() {
            var div = document.getElementById('inputFields');
            var input1 = document.createElement('input');
            var input2 = document.createElement('input');
            var input3 = document.createElement('input');

            input1.type = 'text';
            input1.name = 'array[]';
            input1.placeholder = 'Latitude';

            input2.type = 'text';
            input2.name = 'array[]';
            input2.placeholder = 'Longitude';

            input3.type = 'text';
            input3.name = 'array[]';
            input3.placeholder = 'Trash Bin';

            div.appendChild(input1);
            div.appendChild(input2);
            div.appendChild(input3);
            div.appendChild(document.createElement('br'));
        }
        function map(valuesArray) {
            var map = L.map('map').setView([51.5074, -0.1278], 10);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
            }).addTo(map);
            var coordinates = valuesArray;
            var polyline = L.polyline(coordinates, { color: 'red' }).addTo(map);
            map.fitBounds(polyline.getBounds());
            var lines = [
                [17.567, 78.433], [17.321, 77.432],
                [17.321, 77.432], [17.121, 76.987]
            ];
            for (var i = 0; i < lines.length; i++) {
                L.polyline([lines[i][0], lines[i][1]], { color: 'blue' }).addTo(map);
            }
        }
    </script>
</body>

</html>