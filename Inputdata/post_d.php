<?php
   include("connect.php");


$fname    = "";
$lname    = "";
$phn      = "";
$email    = "";
$comp_name= "";
$comp_about="";
$comp_web  ="";
$internship_pos ="";
$internship_detail ="";
$internship_city = "";
$total_opening = "";
$internship_start_date="";
$duration_type ="";
$about_internship ="";
$stipend_amount ="";
$stipend_method ="";
//print_r($_POST);

if(isset($_POST['post_sub']))
{
//if(!empty($_POST['post_sub']))
//{
    //print_r($_POST);
    $fname = $_POST['fname'];
        //echo $fname;
    $lname = $_POST['lname'];
      //  echo $lname;
    $phn = $_POST['phn'];
       // echo $phn;
    $email = $_POST['email'];
       // echo $email;
    $comp_name = $_POST['comp_name'];
       // echo $comp_name;
    $comp_about = $_POST['comp_about'];
       // echo $comp_about;
    $comp_web = $_POST['comp_web'];
       // echo $comp_web;
    $internship_pos = $_POST['internship_pos'];
       // echo $comp_name;
    $internship_detail = $_POST['internship_detail'];
       // echo $internship_detail;
    $internship_city = $_POST['internship_city'];
      //  echo $internship_city;
    $total_opening  = $_POST['total_opening'];
      //  echo $total_opening ;
    $internship_start_date = $_POST['internship_start_date'];
       // echo $internship_start_date;
    $duration_type = $_POST['duration_type'];
      //  echo $duration_type;
    $about_internship = $_POST['about_internship'];
       // echo $about_internship;
    $stipend_amount = $_POST['stipend_amount'];
      //  echo $stipend_amount;
    $stipend_method = $_POST['stipend_method'];
     //   echo $stipend_method;

  //}



 $sql="INSERT INTO posted_internship (fname, lname, phn,  email, comp_name, comp_about, comp_web, internship_pos, internship_detail, internship_city, total_opening, internship_start_date, duration_type, about_internship, stipend_amount, stipend_method )
       VALUES('$fname','$lname','$phn','$email', '$comp_name', '$comp_about', '$comp_web', '$internship_pos', '$internship_detail', '$internship_city', '$total_opening', '$internship_start_date', '$duration_type', '$about_internship', '$stipend_amount', '$stipend_method')";

	if (!mysqli_query($conn,$sql)) {
   $error = "Error: ".mysqli_error($con);
        echo $error;
   header("Location: ../new-post.php?ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po=10100");
      }else{
        echo "posted successfully";
           $description = "";
           header("Location: ../new-post.php?ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po=1010");
     }
}
