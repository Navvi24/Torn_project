<?php
include('connect.php');
$serial                   ="";
$fname                    = "";
$lname                    = "";
$email                    = "";
$phone                    = "";
$comp_name                ="";
$about_comp               ="";
$comp_web                 ="";
$i_pos                    ="";
$i_details                ="";
$city                     ="";
$state                    ="";
$total_opening            ="";
$start_date               ="";
$i_duration_type         ="";
$i_duration               = "";
$i_description            ="";
$stipend_amt              ="";
$stipend_method           = "";
$perks                    ="";
$perks_value              ="";
$perks_tmp_value          ="";
if(isset($_POST['edit_sub']))
{
  $serial = mysqli_real_escape_string($con, $_POST['sno']);
  $fname = mysqli_real_escape_string($con, $_POST['fname']);
  $lname = mysqli_real_escape_string($con, $_POST['lname']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $phone = mysqli_real_escape_string($con, $_POST['phn']);
  $comp_name = mysqli_real_escape_string($con, $_POST['comp_name']);
  $about_comp = mysqli_real_escape_string($con, $_POST['comp_about']);
  $comp_web = mysqli_real_escape_string($con, $_POST['comp_web']);
  $i_pos = mysqli_real_escape_string($con, $_POST['internship_pos']);
  $i_details = mysqli_real_escape_string($con, $_POST['internship_detail']);
  $city = mysqli_real_escape_string($con, $_POST['internship_city']);
  $state = mysqli_real_escape_string($con, $_POST['state']);
  $total_opening = mysqli_real_escape_string($con, $_POST['total_opening']);
  $start_date = mysqli_real_escape_string($con, $_POST['internship_start_date']);
  $i_duration_type = mysqli_real_escape_string($con, $_POST['duration_type']);
  $i_duration = mysqli_real_escape_string($con, $_POST['duration_number']);
  $i_description  = mysqli_real_escape_string($con, $_POST['about_internship']);
  $stipend_amt = mysqli_real_escape_string($con, $_POST['stipend_amount']);
  $stipend_method = mysqli_real_escape_string($con, $_POST['stipend_method']);
  $perks = $_POST['perks'];
  foreach ($perks as $key => $perks_tmp_value)
  {
    $perks_value .= $perks_tmp_value.",";
  }

  $sql = "UPDATE posted_internship set fname = '$fname', lname = '$lname', phn = '$phone', email = '$email', comp_name = '$comp_name', comp_about = '$about_comp', comp_web = '$comp_web',
  internship_pos = '$i_pos', internship_detail = '$i_details', state = '$state', internship_city = '$city', total_opening = '$total_opening', internship_start_date = '$start_date',
  duration_no = '$i_duration', duration_type = '$i_duration_type', about_internship = '$i_description', stipend_amount = '$stipend_amt', stipend_method = '$stipend_method', perks = '$perks_value'
  WHERE SR = '$serial'";

  if(mysqli_query($con,$sql))
  {
   header("Location: postintern.php?ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po=1010");
  }
  else
  {
   //$error = "Error: ".mysqli_error($con);
    
    header("Location: postintern.php?ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po=10100");
  }
}
mysqli_close($con);
 ?>
