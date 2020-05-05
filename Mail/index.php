<?php
  if(isset($_POST['sendMail']))
  {
    require 'mailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.yandex.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'admin@internstorm.com';                 // SMTP username
$mail->Password = 'admininternstorm';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('admin@internstorm.com', 'Internstorm');
$mail->addAddress($_POST['to']);     // Add a recipient
//   $mail->addAddress('admin@internstorm.com');               // Name is optional
$mail->addReplyTo('admin@internstorm.com');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'From Submission :'.$_POST['sub'];
$mail->Body    = '<h2 align=center>Name :-'.$_POST['name'].'<br> Email :'.$_POST['to'].'<br>Message :- '.$_POST['content']."</h2>";
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
  }
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Mailer</title>
    <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=email],input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: black;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: gray;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
  </head>
  <body>
    <h1>Contact Form</h1>

    <div class="container">
  <form method="post">
    <label for="name">Name</label>
    <input type="text" name="name" placeholder="Name">
    <label for="to">To.</label>
    <input type="email" name="to" placeholder="Recipients">
    <label for="subject">Subject<label>
    <input type="text" name="sub" placeholder="Subject">
    <label for="subject">Content</label>
    <textarea name="content" placeholder="Write something.." style="height:200px"></textarea>
    <input type="submit" value="Send" name="sendMail">
  </form>

</div>
  </body>
</html>
