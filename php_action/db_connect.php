<?php 	

$localhost = "localhost";
$username = "anurag";
$password = "Access@123";
$dbname = "store";

// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

?>