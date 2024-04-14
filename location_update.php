<!DOCTYPE html>
<html>
<body>

<h2>Click the button to get your coordinates.</h2>

<button onclick="getLocation()">Try It</button>

<p id="demo"></p>

<script>
function getLocation() {
 if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(sendPosition);
 } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
 }
}

function sendPosition(position) {
 var xhr = new XMLHttpRequest();
 var url = "your_php_script.php";
 var lat = position.coords.latitude;
 var lon = position.coords.longitude;
  
 xhr.open("POST", url, true);
 xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  
 xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var response = xhr.responseText;
      document.getElementById("demo").innerHTML = response;
    }
 }
  
 xhr.send("lat=" + lat + "&lon=" + lon);
}
</script>

</body>
</html>