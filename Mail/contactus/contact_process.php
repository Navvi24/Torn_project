<?php
$value = 0;
if (isset($_POST['sendMail']))
{

          require 'PHPMailerAutoload.php';
          require 'secure.php';

          $mail = new PHPMailer;

          $mail->SMTPDebug = 0;                               // Enable verbose debug output

          $mail->isSMTP();                                      // Set mailer to use SMTP
          $mail->Host = 'smtp.yandex.com';  // Specify main and backup SMTP servers
          $mail->SMTPAuth = true;                               // Enable SMTP authentication
          $mail->Username = EMAIL;                 // SMTP username
          $mail->Password = PASS;                           // SMTP password
          $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
          $mail->Port = '465';                                    // TCP port to connect to

          $mail->setFrom(EMAIL, $_POST['Name']);
          $mail->addAddress('admin@internstorm.com');     // Add a recipient
       //   $mail->addAddress('admin@internstorm.com');               // Name is optional
          $mail->addReplyTo($_POST['from']);

          $mail->isHTML(true);                                  // Set email format to HTML

          $mail->Subject = $_POST['sub'];
          $mail->Body    = '<div><p></p>'.$_POST['content'].'</div>';
          $mail->AltBody = $_POST['content'];

          if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
          }
          else {
            $value=1;
          }
}
 ?>
 <?php
 if($value == 1)
 {
   header("Location: ../../contact-us.php?ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po=1010");
 }
 else
 {
    header("Location: ../../contact-us.php?ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po=10100");
 }
 ?>
