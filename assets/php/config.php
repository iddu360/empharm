<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "empharm_db";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  $errorMessage = "Failed to connect to server: " . $e->getMessage();
  file_put_contents("error.php", $errorMessage);
}


// $conn=mysqli_connect("localhost","root","lonewolffe","chat_db");
// if(!$conn){
  // echo "Database connected" . mysqli_connect_error();
// }

?>