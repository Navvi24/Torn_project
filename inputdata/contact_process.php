<?php
$value = 0;
if (isset($_POST['sendMail']))
{
        require './master/PHPMailerAutoload.php';

          $mail = new PHPMailer;

          $mail->isSMTP();                                      // Set mailer to use SMTP
          $mail->Host = 'smtp.yandex.com';  // Specify main and backup SMTP servers
          $mail->SMTPAuth = true;                               // Enable SMTP authentication
          $mail->Username = 'admin@internstorm.com';                 // SMTP username
          $mail->Password = 'admininternstorm';                           // SMTP password
          $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
          $mail->Port = '587';    // TCP port to connect to

          //$file_name = $_FILES["file"]["name"];
          //move_uploaded_file($_FILES["file"]["tmp_name"], $file_name);
          $mail->AddAttachment($_FILES['file']['tmp_name'],$_FILES['file']['name']);

          $mail->setFrom('admin@internstorm.com', $_POST['Name']);
          $mail->addAddress('admin@internstorm.com');     // Add a recipient
       //   $mail->addAddress('admin@internstorm.com');               // Name is optional
          $mail->addReplyTo($_POST['from']);

          $mail->isHTML(true);                                  // Set email format to HTML

          $mail->Subject = "QUERY : ".$_POST['sub'];
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
   header("Location: ../contact-us.php?ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po=1010");
 }
 else
 {
    header("Location: ../contact-us.php?ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po=10100");
 }
 ?>
