<?php
include("./inputdata/connect.php");
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


input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
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

    <div class="hero-wrap hero-wrap-2" style="background-image: url('images/sign-up.gif');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
          	<p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Signup</span></p>
            <h1 class="mb-3 bread">Signup</h1>
            <p class="breadcrumbs mb-0"><span>Students/Intern Signup Only</span></p>
          </div>
        </div>
      </div>
    </div>

    <div class="ftco-section bg-light">
      <div class="container">
        <div class="row">

          <div class="col-md-12 col-lg-12 mb-5">

			     <form action="./inputdata/signup_d.php"; class="p-5 bg-white"; method="post"; enctype="multipart/form-data">
             <?php
             include("inputdata/signup_check.php");
             ?>
             <h1>Signup Here</h1>
             <div class="row form-group">
               <div class="col-md-12 mb-3 mb-md-0">
                 <label class="font-weight-bold" for="firstname">First Name</label>
                 <input type="text" id="fullname" class="form-control" placeholder="Enter your First Name" name="fname" required>
               </div>
             </div>
             <div class="row form-group">
               <div class="col-md-12 mb-3 mb-md-0">
                 <label class="font-weight-bold" for="lastname">Last Name</label>
                 <input type="text" id="fullname" class="form-control" placeholder="Enter your Last Name" name="lname" required>
               </div>
             </div>
             <div class="row form-group">
               <div class="col-md-12 mb-3 mb-md-0">
             <label class="font-weight-bold" for="phone">Phone</label>
                 <input type="number" id="nmsg" class="form-control" maxlength="10" placeholder="Enter your Phone number" name="phn" onKeyDown="textCounter(this.form.nmsg,this.form.countDisplay);" onKeyUp="textCounter(this.form.nmsg,this.form.countDisplay);" required>
               </div>
             </div>
             <div class="row form-group">
               <div class="col-md-12 mb-3 mb-md-0">
                 <label class="font-weight-bold" for="lastname">Have Referral Code?</label><small>&nbsp;(Optional)</small>
                 <input type="text" id="fullname" class="form-control" placeholder="Enter your referral code" name="refer">
               </div>
             </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="username">Enter Your Email</label>
                  <input type="email" id="fullname" class="form-control" placeholder="Enter your email" name="email" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="firstname">College/Institution</label>
                  <input type="text" id="college" class="form-control" placeholder="Enter your College/Institution" name="college" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="password">Enter Your Password</label>
                  <input type="password" id="password" class="form-control" onkeyup='check();' / placeholder="Enter your password" name="password" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="cnfpassword">Confirm Password</label>
                  <input type="password" id="confirm_password" class="form-control" onkeyup='check();' / placeholder="Re-type password" name="pass_retype" required><br><span id="message"></span>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="firstname">Select Your Resume</label>
                  <input type="file" id="fullname" class="form-control"  name="file">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit"  id="btnSubmit"  value="Signup" name="signup" class="btn btn-primary  py-2 px-5" onclick="return Validate()">
                  </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

		<section class="ftco-section-parallax">
            <form action="./inputdata/subscribe_d.php" method="post">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subscribe to Internship Alerts!</h2>
              <p>We knew you just couldn't get enough of us! Don't worry, we love the attention and appreciate your effort to stay connected. Subscribe to alerts to be on the top of your game and never miss an opportunity. You know what they say,<br>“You snooze, you lose!”</p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-12">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="email" class="form-control" name="email" placeholder="Enter email address">
                      <input type="submit" name="subscribe" value="Subscribe" class="btn btn-danger  py-2 px-5">

                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div></form>
    </section>


    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
        	<div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Our Motto</h2>
              <p>STOP RUNNING, WE'VE GOT YOU</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="https://twitter.com/internstorm" target="_blank"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/Internstorm-107473414180831" target="_blank"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/internstorm/" target="_blank"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Navigate</h2>
              <ul class="list-unstyled">
                <li><a href="index.php" class="py-2 d-block">Home</a></li>
               <li><a href="our-story.php" class="py-2 d-block">Our Story</a></li>
               <li><a href="our-clients.php" class="py-2 d-block">Our Clients</a></li>
               <li><a href="work-with-us.php" class="py-2 d-block">Work with us</a></li>
               <li><a href="contact-us.php" class="py-2 d-block">Contact Us</a></li>

              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>

	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+918078646927, +917972360161</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">support@internstorm.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <br><br><br>
            <p style="font-size:12px;"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved This template is made with by Colorlib | website is developed by Easy Resource
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>


  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  <script type="text/javascript">
function Validate() {
var password = document.getElementById("password").value;
var confirmPassword = document.getElementById("confirm_password").value;
if (password != confirmPassword) {
alert("Passwords do not match.");
return false;
}
return true;
}
</script>
  <script>
     var check = function() {
 if (document.getElementById('password').value ==
 document.getElementById('confirm_password').value) {
 document.getElementById('message').style.color = 'green';
 document.getElementById('message').innerHTML = 'Passwords Match';
 } else {
 document.getElementById('message').style.color = 'red';
 document.getElementById('message').innerHTML = 'Passwords Don’t Match';
 }
 }
 </script>
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
