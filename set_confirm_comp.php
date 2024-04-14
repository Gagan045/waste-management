<?php
$hostname = "localhost";
$username = "newuser";
$password = "gagan45";
$db = "ecovision";

$con = mysqli_connect($hostname, $username, $password, $db);

if(!$con) {
    die("Connection failed!" . mysqli_connect_error());
}

if (isset($_GET['username'])) {
    $username = mysqli_real_escape_string($con, $_GET['username']);

    // Set the 'confirm' flag to 1 in the database
    $updateQuery = "UPDATE complaints SET confor = 1 WHERE username = '$username'";
    mysqli_query($con, $updateQuery);

    // You can also fetch the updated data from the database and return it as a response if needed
}

mysqli_close($con);
?>