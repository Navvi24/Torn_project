<?php
/*
$username="root"; //DB User Name
$password=""; //DB User password
$database="adhoc_management"; //Enter database name here
$servername="localhost"; //Server address
*/

$username="internst_root"; //DB User Name
$password="de4$#sdf0JU"; //DB User password
$database="internst_new_web_data"; //Enter database name here
$servername="localhost"; //Server address

// Create connection
$con = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (mysqli_connect_errno()) {
   die("Connection failed: " . mysqli_connect_error());
}

?>