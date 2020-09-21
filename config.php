<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "faculty";

// Create connection
$link = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}else{
    // echo "Connected";
}

?>