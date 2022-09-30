<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotelproject";

try {
  $con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch(PDOException $e) {
  echo "not connecte <br>" . $e->getMessage();
}
