<?php
include('connect.php');
$id = $_GET['id'];
$sql = "DELETE FROM posted_internship WHERE SR=$id";
  if (mysqli_query($con, $sql))
  {
    header("location: postintern.php?kLCT2Pln5zXEO4leV2QnwcANywVInFPFWMfH3ohT2CQ=010");
  }
  else
  {
  header("location: postintern.php?kLCT2Pln5zXEO4leV2QnwcANywVInFPFWMfH3ohT2CQ=01000");
  }
 ?>
