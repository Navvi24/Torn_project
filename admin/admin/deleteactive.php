<?php
include('connect.php');
$id = $_GET['id'];
$sql = "DELETE FROM active_internship WHERE SR=$id";
  if (mysqli_query($con, $sql))
  {
    header("location: activeintern.php?kLCT2Pln5zXEO4leV2QnwcANywVInFPFWMfH3ohT2CQ=0100");
  }
  else
  {
  header("location: activeintern.php?kLCT2Pln5zXEO4leV2QnwcANywVInFPFWMfH3ohT2CQ=01000");
  }
 ?>
