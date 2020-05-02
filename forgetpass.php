<?php
error_reporting(E_ERROR | E_PARSE);
        include('inputdata/connect.php');
        $error ="";
        $success = "";
        $enter = "0";
if(isset($_POST['email']))
{
        if(isset($_POST["mail"]) && (!empty($_POST["mail"])))
        {
        $email = $_POST["mail"];
      //  print_r($email);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$email) {
          	$error .="<p>Invalid email address please type a valid email address!</p>";
        	}else{
        	$sel_query = "SELECT * FROM `logindetails` WHERE mail='".$email."'";
        	$results = mysqli_query($con,$sel_query);
        	$row = mysqli_num_rows($results);
        	if ($row==""){
        		$error .= "<p>No user is registered with this email address!</p>";
        		}
        	}
        	if($error!=""){
            //echo "<div class='error'>".$error."</div>
        	//<br /><a href='javascript:history.go(-1)'>Go Back</a>";
        		}else{
        	$expFormat = mktime(date("H"), date("i"), date("s"), date("m")  , date("d")+1, date("Y"));
        	$expDate = date("Y-m-d H:i:s",$expFormat);
        	$key = md5(2418*2+$email);
        	$addKey = substr(md5(uniqid(rand(),1)),3,10);
        	$key = $key . $addKey;
        // Insert Temp Table
        mysqli_query($con,
        "INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`)
        VALUES ('".$email."', '".$key."', '".$expDate."');");

        $output='<p>Dear user,</p>';
        $output.='<p>Please click on the following link to reset your password.</p>';
        $output.='<p>-------------------------------------------------------------</p>';
        $output.='<p><a href="http://localhost/Torn_project/reset_password.php?key='.$key.'&email='.$email.'&action=reset" target="_blank">http://localhost/Torn_project/reset_password.php?key='.$key.'&email='.$email.'&action=reset</a></p>';
        $output.='<p>-------------------------------------------------------------</p>';
        $output.='<p>Please be sure to copy the entire link into your browser.
        The link will expire after 1 day for security reason.</p>';
        $output.='<p>If you did not request this forgotten password email, no action
        is needed, your password will not be reset. However, you may want to log into
        your account and change your security password as someone may have guessed it.</p>';
        $output.='<p>Regards,</p>';
        $output.='<p>Team Internstorm.</p>';
        $body = $output;
        $subject = "Internstorm Password Recovery";

        $email_to = $email;
        //$fromserver = "smtp.gmail.com";
        include("inputdata/master/PHPMailerAutoload.php");
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
                    $mail->AddAddress($email_to);   // Add a recipient
                    //   $mail->addAddress('admin@internstorm.com');               // Name is optional
                    $mail->addReplyTo('admin@internstorm.com');
                    //$mail->addCC('cc@example.com');
                    //$mail->addBCC('bcc@example.com');
                    //$mail->AddEmbeddedImage('../images/Logo_white.png','logo');
                    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                    $mail->isHTML(true);                                  // Set email format to HTML
                    //$mail->Sender = $fromserver; // indicates ReturnPath header
                    $mail->Subject = $subject;
                    $mail->Body = $body;
                    if(!$mail->Send()){
                    echo "Mailer Error: " . $mail->ErrorInfo;
                    }else{
                        $enter = 1;
                        $success = "Verification mail is successfully send to registered mail id";
                    	}
        		}

        }
        else{ echo "ERROR";}
}
?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <title>STORM</title><link rel="shortcut icon" href="images/Logo.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

      <style>
.dropbtn {
  background-color: #6c63ff;
  color: white;
  padding: 10px;
  font-size: 14px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>


  </head>


     <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ea28b3e69e9320caac6d3c2/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
  <body>

	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">
          <picture>
            <source srcset="images/Logo_white.png" media="(max-width: 991.98px)">
            <img src="images/Logo.png" alt="" width="100px" height="72px">
          </picture>
        </a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="our-story.php" class="nav-link">Our Story</a></li>
	          <li class="nav-item"><a href="our-clients.php" class="nav-link">Our Clients</a></li>
	          <li class="nav-item"><a href="work-with-us.php" class="nav-link">Work with us</a></li>
	          <li class="nav-item"><a href="contact-us.php" class="nav-link">Contact Us</a></li><br><br>
	          <li><div><button class="dropbtn"><a href="new-post.php" style="color:white;">Post Internship</a></button></div></li>&nbsp;&nbsp;
            <li><div class="dropdown"><button class="dropbtn"  style="background-color: #09090A">Want Internship</button>
              <div class="dropdown-content">
                  <a href="login.php">Login</a>
                  <a href="signup.php">Signup</a>
              </div>
          </div>
          </li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-wrap-2" style="background-image: url('images/log-in.gif');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
          	<p class="breadcrumbs mb-0"><span class="mr-3"><a href="login.php">Login <i class="ion-ios-arrow-forward"></i></a></span> <span>Forget Password</span></p>
            <h1 class="mb-3 bread">Forget Password</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="ftco-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12 mb-5">
			     <form action="" method="post" class="p-5 bg-white">
             <?php
                  if($enter == 1)
                  {
                    echo('<div class="alert alert-success" role="alert">'.$success.'</div>');
                  }
                  if($error != "")
                  {
                  echo('<div class="alert alert-danger" role="alert">'.$error.'</div>');
                  }
              ?>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="username">Enter your Email</label>
                <input type="email" id="fullname" class="form-control" placeholder="Enter your email" name="mail" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary" name="email">Send Link</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  </body>
</html>
