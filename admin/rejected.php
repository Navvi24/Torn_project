<?php 
include("connect.php");
ob_start();
include 'reject_mail.php';
$mailbody = ob_get_clean();
include("master/PHPMailerAutoload.php");
$rejected = "rejected";
$sr = $_GET['asr'];
$comp_sr = $_GET['csr'];
$mail_send = "";
$sql = "UPDATE applied SET status= '$rejected' where sr='$sr' AND csr = '$comp_sr'";
if (mysqli_query($con, $sql))
{
  $sql2 = "SELECT internmail from applied where sr='$sr' AND csr = '$comp_sr'";
  $result = $con->query($sql2);
  if($result->num_rows>0)
  {
    while($row = $result->fetch_assoc())
    {
    $mail_send = $row['internmail'];
    }
  }

    if($mail_send != "")
    {
        $mail = new PHPMailer();
      //  $mail->SMTPDebug = 3;                               // Enable verbose debug output
        //$mailcontent = '';
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'internstormed@gmail.com';                 // SMTP username
        $mail->Password = '12chastity@cl';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
        $mail->setFrom('internstormed@gmail.com', 'Internstorm');
        $mail->addAddress($mail_send);     // Add a recipient
        $mail->addReplyTo('admin@internstorm.com');
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Rejected Internship Mail';
        $mail->Body    = $mailbody;

        if(!$mail->send())
        {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
        else
        {
              $mail_check = 1;
            header("Location: viewdetails_comp.php?id=$comp_sr");

        }
    }
}
else
{
  echo "Error updating record: " . mysqli_error($con);
}
mysqli_close($con);
 ?>
