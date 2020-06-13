<?php
$url="";
  ob_start();
    include 'applied_email_layout.php';
    $mailbody = ob_get_clean();
   include("master/PHPMailerAutoload.php");
if(isset($_GET['ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po']))
{
        if($_GET['ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po'] == 1010)
        {

        $mail = new PHPMailer();

                    //$mail->SMTPDebug = 3;                               // Enable verbose debug output
                    //$mailcontent = '';

                    $mail->isSMTP();                                      // Set mailer to use SMTP
                    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;                               // Enable SMTP authentication
                    $mail->Username = 'internstormed@gmail.com';                 // SMTP username
                    $mail->Password = '12chastity@cl';                           // SMTP password
                    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = 587;                                    // TCP port to connect to

                    $mail->setFrom('internstormed@gmail.com', 'Internstorm');
                    $mail->addAddress($login_session);     // Add a recipient
                    //   $mail->addAddress('admin@internstorm.com');               // Name is optional
                    $mail->addReplyTo('admin@internstorm.com');
                    //$mail->addCC('cc@example.com');
                    //$mail->addBCC('bcc@example.com');

                    $mail->AddEmbeddedImage('Logo_white.png','logo');
                    //$mail->AddEmbeddedImage('Logo_white.png','logo');

                    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                    $mail->isHTML(true);                                  // Set email format to HTML

                    $mail->Subject = 'Internship Applied Successfully';
                    $mail->Body    = $mailbody;

            //        $mail->AltBody = file_get_contents('post_email_layout.php');

                    if(!$mail->send()) {
                        echo 'Message could not be sent.';
                        echo 'Mailer Error: ' . $mail->ErrorInfo;
                    } else {
                      $url = 1000;
                    }
        }
        else{}

}
else{}
?>
