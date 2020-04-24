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
$perks="";
$perks_value="";
$perks_tmp_value="";
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
     $perks = $_POST['perks'];
     foreach ($perks as $key => $perks_tmp_value)
     {
       $perks_value .= $perks_tmp_value.",";
     }
  //}



 $sql="INSERT INTO posted_internship (fname, lname, phn,  email, comp_name, comp_about, comp_web, internship_pos, internship_detail, internship_city, total_opening, internship_start_date, duration_type, about_internship, stipend_amount, stipend_method,perks )
       VALUES('$fname','$lname','$phn','$email', '$comp_name', '$comp_about', '$comp_web', '$internship_pos', '$internship_detail', '$internship_city', '$total_opening', '$internship_start_date', '$duration_type', '$about_internship', '$stipend_amount', '$stipend_method','$perks_value')";

	if (!mysqli_query($con,$sql))
  {
      $error = "Error: ".mysqli_error($con);
        echo $error;
        header("Location: ../new-post.php?ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po=10100");
   }
      else{
        echo "posted successfully";
           $description = "";
           $value = 0;
                     require 'PHPMailerAutoload.php';
                     require 'secure.php';

                     $mail = new PHPMailer;

                     $mail->SMTPDebug = 0;                               // Enable verbose debug output

                     $mail->isSMTP();                                      // Set mailer to use SMTP
                     $mail->Host = 'smtp.yandex.com';  // Specify main and backup SMTP servers
                     $mail->SMTPAuth = true;                               // Enable SMTP authentication
                     $mail->Username = EMAIL;                 // SMTP username
                     $mail->Password = PASS;                           // SMTP password
                     $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                     $mail->Port = 587;                                    // TCP port to connect to

                     $mail->setFrom(EMAIL, 'Internstorm');
                     $mail->addAddress($email);     // Add a recipient
                  //   $mail->addAddress('admin@internstorm.com');               // Name is optional
                     $mail->addReplyTo(EMAIL);

                     $mail->isHTML(true);                                  // Set email format to HTML

                     $mail->Subject = 'Internship Posted Successfully';
                     $mail->Body    = file_get_contents('post_email_layout.php');
                     $mail->AltBody = file_get_contents('post_email_layout.php');

                     if(!$mail->send()) {
                       echo 'Message could not be sent.';
                       echo 'Mailer Error: ' . $mail->ErrorInfo;
                     }
                     else {
                       echo "Message Sent";
                     }
           header("Location: ../new-post.php?ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po=1010");
     }
}
?>
