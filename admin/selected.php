<?php
include("connect.php");
$selected = "selected";
$sr = $_GET['asr'];
$comp_sr = $_GET['csr'];

$sql = "UPDATE applied SET status= '$selected' where sr='$sr' AND csr = '$comp_sr'";
if (mysqli_query($con, $sql)) {
  header("Location: viewdetails_comp.php?id=$comp_sr");
} else {
  echo "Error updating record: " . mysqli_error($con);
}
mysqli_close($con);
 ?>
