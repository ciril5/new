<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name="finch_academy";


// Create connection
$conn = mysqli_connect($servername, $username, $password,$db_name);

// Check connection
if (mysqli_connect_errno()) {
  echo " Connection failed" ;
  exit();
}

echo "Connection successs";
?>
