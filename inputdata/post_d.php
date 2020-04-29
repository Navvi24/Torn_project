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
      print_r($_POST);


      $sql="INSERT INTO posted_internship (fname, lname, phn,  email, comp_name, comp_about, comp_web, internship_pos, internship_detail, state, internship_city, total_opening, internship_start_date, duration_no, duration_type, about_internship, stipend_amount, stipend_method,perks)
        VALUES('$fname','$lname','$phn','$email', '$comp_name', '$comp_about', '$comp_web', '$internship_pos', '$internship_detail', '$state', '$internship_city', '$total_opening', '$internship_start_date', '$duration_no', '$duration_type', '$about_internship', '$stipend_amount', '$stipend_method','$perks_value')";

         if (!mysqli_query($con,$sql))
         {
            $error = "Error: ".mysqli_error($con);
            echo $error;
           header("Location: ../new-post.php?ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po=10100");
          }
        else
        {

                        $mail = new PHPMailer();

                        //$mail->SMTPDebug = 3;                               // Enable verbose debug output
                        //$mailcontent = '';

                        $mail->isSMTP();                                      // Set mailer to use SMTP
                        $mail->Host = 'smtp.yandex.com';  // Specify main and backup SMTP servers
                        $mail->SMTPAuth = true;                               // Enable SMTP authentication
                        $mail->Username = 'admin@internstorm.com';                 // SMTP username
                        $mail->Password = 'admininternstorm';                           // SMTP password
                        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                        $mail->Port = 587;                                    // TCP port to connect to
                        $mail->AddEmbeddedImage('logo_white.png', 'storm');
                        $mail->setFrom('admin@internstorm.com', 'Internstorm');
                        $mail->addAddress($email);     // Add a recipient
                        //   $mail->addAddress('admin@internstorm.com');               // Name is optional
                        $mail->addReplyTo('admin@internstorm.com');
                        //$mail->addCC('cc@example.com');
                        //$mail->addBCC('bcc@example.com');

                        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                        $mail->isHTML(true);                                  // Set email format to HTML

                        $mail->Subject = 'Internship Posted Successfully';
                        $mail->Body    = $mailbody;

                //        $mail->AltBody = file_get_contents('post_email_layout.php');

                        if(!$mail->send()) {
                            echo 'Message could not be sent.';
                            echo 'Mailer Error: ' . $mail->ErrorInfo;
                        } else {
                            echo 'Message has been sent';
                        }

               header("Location: ../new-post.php?ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po=1010");
     }
}
?>
