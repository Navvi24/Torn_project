<?php


$username="root"; //DB User Name
$password=""; //DB User password
$database="internstorm"; //Enter database name here
$servername="localhost"; //Server address


$con = mysqli_connect($servername, $username, $password, $database);

if (mysqli_connect_errno()) {
   die("Connection failed: " . mysqli_connect_error());
}



date_default_timezone_set('Asia/Karachi');	
$error="";	
?>