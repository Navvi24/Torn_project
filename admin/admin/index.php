<?php
session_start();
$error="";
require("./connectivity/dbconnect.php");
if(isset($_SESSION['login_user']))
{
  header("location: mainpage.php");
  die();
}
if($_SERVER["REQUEST_METHOD"] == "POST") {

  $myusername = mysqli_real_escape_string($con,$_POST['user']);
  $mypassword = mysqli_real_escape_string($con,$_POST['pass']);
  $sql = "SELECT username FROM admin WHERE username = '$myusername' and password = '$mypassword'";
  $result = mysqli_query($con,$sql);

  // If result matched $myusername and $mypassword, table row must be 1 row
  if(mysqli_num_rows($result) > 0) {
    $_SESSION['login_user'] = $myusername;
    header("location: mainpage.php");
  }else {
    $error = "Your Login Name or Password is invalid ";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Internstorm | Log in</title>
  <link rel="shortcut icon" href="images/Logo.png" type="image/x-icon">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="images/Logo.png" alt="TORM" width="118px" height="100px">
    <br>
    <small style="font-size:17px;"><b>(Internstorm Admin Panel)</b></small>
  </div>
  <?php
  if(strlen($error) > 1){
    echo('<div class="alert alert-danger" role="alert">
          '.$error.'
          </div>');
  }
?>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form method="POST">
        <div class="input-group mb-3">
          <input type="text" name="user" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="pass" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="social-auth-links text-center mb-3">
          <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

</body>
</html>
