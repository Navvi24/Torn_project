<?php
     include("connect.php");
     ob_start();
    include 'post_email_layout.php';
    $mailbody = ob_get_clean();
 include("./master/PHPMailerAutoload.php");
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
      $state ="";
      $duration_no = "";
      $total_opening = "";
      $internship_start_date="";
      $duration_type ="";
      $about_internship ="";
      $stipend_amount ="";
      $stipend_method ="";
      $perks="";
      $perks_value="";
      $perks_tmp_value="";
///print_r($_POST);
//mysqli_real_escape_string($con, $_POST['inputDescription']);
    if(isset($_POST['post_sub']))
    {
      $fname = mysqli_real_escape_string($con, $_POST['fname']);
      $lname = mysqli_real_escape_string($con, $_POST['lname']);
      $phn = mysqli_real_escape_string($con, $_POST['phn']);
      $email = mysqli_real_escape_string($con, $_POST['email']);
      $comp_name = mysqli_real_escape_string($con, $_POST['comp_name']);
      $comp_about = mysqli_real_escape_string($con, $_POST['comp_about']);
      $comp_web = mysqli_real_escape_string($con, $_POST['comp_web']);
      $internship_pos = mysqli_real_escape_string($con, $_POST['internship_pos']);
      $internship_detail = mysqli_real_escape_string($con, $_POST['internship_detail']);
      $state = mysqli_real_escape_string($con, $_POST['state']);
      $internship_city = mysqli_real_escape_string($con, $_POST['internship_city']);
      $total_opening  = mysqli_real_escape_string($con, $_POST['total_opening']);
      $internship_start_date = mysqli_real_escape_string($con, $_POST['internship_start_date']);
      $duration_no = mysqli_real_escape_string($con, $_POST['duration_no']);
      $duration_type = mysqli_real_escape_string($con, $_POST['duration_type']);
      $about_internship = mysqli_real_escape_string($con, $_POST['about_internship']);
      $stipend_amount = mysqli_real_escape_string($con, $_POST['stipend_amount']);
      $stipend_method = mysqli_real_escape_string($con, $_POST['stipend_method']);
      $perks = $_POST['perks'];
      foreach ($perks as $key => $perks_tmp_value)
      {
        $perks_value .= $perks_tmp_value.",";
      }
   //   print_r($_POST);


      $sql="INSERT INTO posted_internship (fname, lname, phn,  email, comp_name, comp_about, comp_web, internship_pos, internship_detail, state, internship_city, total_opening, internship_start_date, duration_no, duration_type, about_internship, stipend_amount, stipend_method,perks)
        VALUES('$fname','$lname','$phn','$email', '$comp_name', '$comp_about', '$comp_web', '$internship_pos', '$internship_detail', '$state', '$internship_city', '$total_opening', '$internship_start_date', '$duration_no', '$duration_type', '$about_internship', '$stipend_amount', '$stipend_method','$perks_value')";

         if (!mysqli_query($con,$sql))
         {
            $error = "Error: ".mysqli_error($con);
            echo $error;
           header("Location: addintern.php?ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po=10100");
          }
        else
        {
                echo "sucess:";
               header("Location: addintern.php?ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po=1010");
        }
}
?>
