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
      $total_opening = "";
      $internship_start_date="";
      $duration_type ="";
      $about_internship ="";
      $stipend_amount ="";
      $stipend_method ="";
      $perks="";
      $perks_value="";
      $perks_tmp_value="";

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
     // foreach ($perks as $key => $perks_tmp_value)
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
