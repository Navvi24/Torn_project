<?php
$value = 0;
if(isset($_POST['send']))
{
$msg = "";
require 'master/PHPMailerAutoload.php';

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
  //  $mail->AddAttachment($_FILES['file']['tmp_name'],$_FILES['file']['name']);

    $mail->setFrom('support@internstorm.com', 'Internstorm');
    $mail->addAddress($_POST['to']);     // Add a recipient
 //   $mail->addAddress('admin@internstorm.com');               // Name is optional
    $mail->addReplyTo('support@internstorm.com');

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = "Reply : ".$_POST['subject'];
    $mail->Body    = '<div><p></p>'.$_POST['message'].'</div>';
    $mail->AltBody = $_POST['message'];

    if(!$mail->send()) {
      $value = 2;
      echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
    else
    {
      $value = 1;
      $msg = "Mail Send Successfully.";
    }
}
 ?>
<?php
   include('sidebar.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Send Mail</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Send Mail</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <?php if ($value == 1) {?>
            <div class="alert alert-primary" role="alert">
              <?php echo "Mail Sent Successfully"; ?>
            </div>
          <?php } else if($value == 2){?>
            <div class="alert alert-danger" role="alert">
              <?php echo "Mail cannot send please try again"; ?>
            </div>
          <?php } else{}?>
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Email Form</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputfirst">To.</label>
                <input type="email" id="to" class="form-control" placeholder="Recipients" name="to" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputlast">Subject</label>
                  <input type="text" id="subject" class="form-control" placeholder="Subject" name="subject" required>
                  <div class="invalid-feedback">Please Enter Lastname.</div>
                </div>
                <div class="form-group">
                  <label for="exampleInputemail">Message</label>
                    <textarea name="message" class="form-control" id="message" cols="30" rows="6"  required></textarea>
                  <div class="invalid-feedback">Please Enter Email.</div>
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-success swalDefaultSuccess" name="send"><i class="far fa-envelope"></i>  Send</button>
                </div>
                </div>
              </div>

            </form>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
  <?php
  include('footer.php');
   ?>
   <script>
     var maxAmount = 10;
     function textCounter(textField, showCountField) {
       if (textField.value.length > maxAmount) {
         textField.value = textField.value.substring(0, maxAmount);
       } else {
         showCountField.value = maxAmount - textField.value.length;
       }
    }
    </script>
