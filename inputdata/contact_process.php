<?php
include("connect.php");
$name = "";
$email = "";
$subject = "";
$message = "";
$filename = "";
$tmp_name = "";
$ext = "";
$value = 0;
if (isset($_POST['sendMail']))
{
  if($_FILES['file']['name'] != "")
  {
        $filename = $_FILES['file']['name'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if (in_array($ext, array("pdf", "docx", "doc")))
        {
          require './master/PHPMailerAutoload.php';

              $mail = new PHPMailer;

              $mail->isSMTP();                                      // Set mailer to use SMTP
              $mail->Host = 'smtp.yandex.com';  // Specify main and backup SMTP servers
              $mail->SMTPAuth = true;                               // Enable SMTP authentication
              $mail->Username = 'support@internstorm.com';                 // SMTP username
              $mail->Password = 'internstormsupport';                           // SMTP password
              $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
              $mail->Port = '587';    // TCP port to connect to

              //$file_name = $_FILES["file"]["name"];
              //move_uploaded_file($_FILES["file"]["tmp_name"], $file_name);
              $mail->AddAttachment($_FILES['file']['tmp_name'],$_FILES['file']['name']);

              $mail->setFrom('support@internstorm.com', $_POST['Name']);
              $mail->addAddress('support@internstorm.com');     // Add a recipient
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
              else
              {
                $name = $_POST['Name'];
                $email = $_POST['from'];
                $subject = $_POST['sub'];
                $message = $_POST['content'];
                $filename = rand().'.'.$ext;
                      move_uploaded_file($tmp_name, "../contactus_files/$filename");
                      $sql = "INSERT into c_query(name,email,sub,msg,attach_url) VALUES ('$name','$email','$subject','$message','$filename')";

                          if (!mysqli_query($con,$sql))
                          {
                             $error = "Error: ".mysqli_error($con);
                             echo $error;
                             $value = 0;
                           }
                           else
                           {
                              $value = 1;
                           }

              }
        }
        else
        {
            $value=2;
        }
  }
  else
  {
          require './master/PHPMailerAutoload.php';

              $mail = new PHPMailer;

              $mail->isSMTP();                                      // Set mailer to use SMTP
              $mail->Host = 'smtp.yandex.com';  // Specify main and backup SMTP servers
              $mail->SMTPAuth = true;                               // Enable SMTP authentication
              $mail->Username = 'support@internstorm.com';                 // SMTP username
              $mail->Password = 'internstormsupport';                           // SMTP password
              $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
              $mail->Port = '587';    // TCP port to connect to

              //$file_name = $_FILES["file"]["name"];
              //move_uploaded_file($_FILES["file"]["tmp_name"], $file_name);
              //$mail->AddAttachment($_FILES['file']['tmp_name'],$_FILES['file']['name']);

              $mail->setFrom('support@internstorm.com', $_POST['Name']);
              $mail->addAddress('support@internstorm.com');     // Add a recipient
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
              else
              {
                $name = $_POST['Name'];
                $email = $_POST['from'];
                $subject = $_POST['sub'];
                $message = $_POST['content'];

                  //    move_uploaded_file($tmp_name, "../contactus_files/$filename");
                      $sql = "INSERT into c_query(name,email,sub,msg) VALUES ('$name','$email','$subject','$message')";

                          if (!mysqli_query($con,$sql))
                          {
                             $error = "Error: ".mysqli_error($con);
                             echo $error;
                             $value = 0;
                           }
                           else
                           {
                              $value = 1;
                           }

              }
  }
}
 ?>
 <?php
 if($value == 1)
 {
   header("Location: ../contact-us.php?ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po=1010");
 }
 else if($value == 2)
  {
   header("Location: ../contact-us.php?ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po=101000");
 }
 else
 {
    header("Location: ../contact-us.php?ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po=10100");
 }
 ?>
