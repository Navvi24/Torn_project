<?php
function countposted( $con )
{
  $sql = "SELECT * from posted_internship";
  $result = mysqli_query($con, $sql);
  $num = mysqli_num_rows($result);
  return $num;
}

function countactive( $con )
{
  $sql = "SELECT * from active_internship";
  $result = mysqli_query($con, $sql);
  $num = mysqli_num_rows($result);
  return $num;
}
function countrecom( $con )
{
  $sql = "SELECT * from rec_internship";
  $result = mysqli_query($con, $sql);
  $num = mysqli_num_rows($result);
  return $num;
}
function countusers( $con )
{
  $sql = "SELECT * from logindetails";
  $result = mysqli_query($con, $sql);
  $num = mysqli_num_rows($result);
  return $num;
}
function countsub( $con )
{
  $sql = "SELECT * from submail";
  $result = mysqli_query($con, $sql);
  $num = mysqli_num_rows($result);
  return $num;
}
function countquery( $con )
{
  $sql = "SELECT * from c_query";
  $result = mysqli_query($con, $sql);
  $num = mysqli_num_rows($result);
  return $num;
}
function countapplied( $con )
{
  $sql = "SELECT * from applied";
  $result = mysqli_query($con, $sql);
  $num = mysqli_num_rows($result);
  return $num;
}
 ?>
