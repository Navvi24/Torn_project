        <?php
          include 'PHPMailerAutoload.php';
          include 'secure.php';

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
          $mail->addAddress("navdeepsharma8594@gmail.com");     // Add a recipient
       //   $mail->addAddress('admin@internstorm.com');               // Name is optional
          $mail->addReplyTo(EMAIL);

          $mail->isHTML(true);                                  // Set email format to HTML

          $mail->Subject = 'HELLO';
          $mail->Body    = file_get_contents('post_email_layout.html');
          $mail->AltBody =file_get_contents('post_email_layout.html');

          if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
          }
          else {
            echo "Message Sent";
          }
