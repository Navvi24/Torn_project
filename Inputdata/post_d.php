<?php
function callmail()
{

}
?>

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
      $send_mail="";
    if(isset($_POST['post_sub']))
    {
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $phn = $_POST['phn'];
      $email = $_POST['email'];
      $comp_name = $_POST['comp_name'];
      $comp_about = $_POST['comp_about'];
      $comp_web = $_POST['comp_web'];
      $internship_pos = $_POST['internship_pos'];
      $internship_detail = $_POST['internship_detail'];
      $internship_city = $_POST['internship_city'];
      $total_opening  = $_POST['total_opening'];
      $internship_start_date = $_POST['internship_start_date'];
      $duration_type = $_POST['duration_type'];
      $about_internship = $_POST['about_internship'];
      $stipend_amount = $_POST['stipend_amount'];
      $stipend_method = $_POST['stipend_method'];
      $perks = $_POST['perks'];
      foreach ($perks as $key => $perks_tmp_value)
      {
        $perks_value .= $perks_tmp_value.",";
      }
      $sql="INSERT INTO posted_internship (fname, lname, phn,  email, comp_name, comp_about, comp_web, internship_pos, internship_detail, internship_city, total_opening, internship_start_date, duration_type, about_internship, stipend_amount, stipend_method,perks)
        VALUES('$fname','$lname','$phn','$email', '$comp_name', '$comp_about', '$comp_web', '$internship_pos', '$internship_detail', '$internship_city', '$total_opening', '$internship_start_date', '$duration_type', '$about_internship', '$stipend_amount', '$stipend_method','$perks_value')";

         if (!mysqli_query($con,$sql))
         {
            $error = "Error: ".mysqli_error($con);
            echo $error;
            header("Location: ../new-post.php?ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po=10100");
          }
        else
          {
            require 'PHPMailerAutoload.php';
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->isSMTPDebug = 3;
            $mail->Host = 'smtp.yandex.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'admin@internstorm.com';
            $mail->Password = 'admininternstorm';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 587;
            $mail->setFrom('admin@internstorm.com', 'Internstorm');
            $mail->addAddress($_POST['email']);
            $mail->addReplyTo('admin@internstorm.com');
            $mail->isHTML(true);
            $mail->Subject = 'Internship Posted Successfully';
            $mail->Body    = file_get_contents('post_email_layout.php');
            $mail->AltBody = file_get_contents('post_email_layout.php');

            if(!$mail->send())
            {
              echo 'Message could not be sent.';
              echo 'Mailer Error: ' . $mail->ErrorInfo;
            }
            else
            {
              echo "Message Sent";
            }
                     header("Location: ../new-post.php?ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po=1010");
          }
}
?>
