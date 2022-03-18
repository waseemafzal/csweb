<?php


$servername= 'localhost';
$username= 'root';
$password='';
$dbName='sbadmin';	

//error_reporting(0);
$conn = new mysqli($servername, $username, $password,$dbName);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
 
 
 
 
 
}


//define('SITE_URL','http://localhost/admin-template/');

//echo '<pre>';
//print_r($_SERVER);
//echo "Connected successfully";

?>

