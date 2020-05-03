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

  </head>
  <body>
    <div class="hero-wrap hero-wrap-2" style="background-image: url('images/log-in.gif');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
            <h1 class="mb-3 bread">Forget Password</h1>
          </div>
        </div>
      </div>
    </div>

    <?php
    include('inputdata/connect.php');
    $error = "";
    $enter = "";
    if (isset($_GET["key"]) && isset($_GET["email"])
    && isset($_GET["action"]) && ($_GET["action"]=="reset")
    && !isset($_POST["action"]))
    {
          $key = $_GET["key"];
          $email = $_GET["email"];
          $curDate = date("Y-m-d H:i:s");
          $query = mysqli_query($con,"
          SELECT * FROM `password_reset_temp` WHERE `key`='".$key."' and `email`='".$email."';");
          $row = mysqli_num_rows($query);
          if ($row=="")
          {
              $error .= '<strong>Invalid Link : </strong>The link is invalid/expired. Either you did not copy the correct link from the email,
              or you have already used the key in which case it is deactivated.';
          }
          else
          {
            	$row = mysqli_fetch_assoc($query);
            	$expDate = $row['expDate'];
            	if ($expDate >= $curDate)
              {
                  ?>
                  <div class="ftco-section bg-light">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-lg-12 mb-5">
                          <form method="post" action="" name="update" class="p-5 bg-white">
                            <div class="row form-group">
                              <div class="col-md-12 mb-3 mb-md-0">
                                <input type="hidden" name="action" value="update" />
                                <label class="font-weight-bold">Enter New Password:</label>
                                <input type="password" name="pass1" id="pass1" maxlength="15" class="form-control" onkeyup='check();'  required />
                              </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12 mb-3 mb-md-0">
                                  <label class="font-weight-bold">Re-Enter New Password:</label>

                                  <input type="password" name="pass2" id="pass2" maxlength="15" class="form-control" onkeyup='check();'required/>
                                    <br><span id="message"></span>
                                  <input type="hidden" name="email" value="<?php echo $email;?>"/>
                                </div>
                            </div>
                            <div class="row form-group">
                              <div class="col-md-12">
                                <input type="submit" id="reset" value="Reset Password" onclick="return Validate()" class="btn btn-primary  py-2 px-5"/>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
        <script type="text/javascript">
                    function Validate() {
                    var password = document.getElementById("pass1").value;
                    var confirmPassword = document.getElementById("pass2").value;
                    if (password != confirmPassword) {
                    alert("Passwords do not match.");
                    return false;
                    }
                    return true;
                    }
        </script>
        <script>
                         var check = function() {
                     if (document.getElementById('pass1').value ==
                     document.getElementById('pass2').value) {
                     document.getElementById('message').style.color = 'green';
                     document.getElementById('message').innerHTML = 'Passwords Match';
                     } else {
                     document.getElementById('message').style.color = 'red';
                     document.getElementById('message').innerHTML = 'Passwords Don’t Match';
                     }
                     }
        </script>
                  <?php
              }
              else
              {
                  $error .= "<strong>Link Expired : </strong>The link is expired. You are trying to use the expired link which as valid only 24 hours (1 days after request).";
              }
          }
      } // isset email key validate end


      if(isset($_POST["email"]) && isset($_POST["action"]) && ($_POST["action"]=="update"))
      {
            $enter = "1";
            $error="";
            $pass1 = mysqli_real_escape_string($con,$_POST["pass1"]);
            $pass2 = mysqli_real_escape_string($con,$_POST["pass2"]);
            $email = $_POST["email"];
            $curDate = date("Y-m-d H:i:s");
            if ($pass1!=$pass2)
            {
                $error .= "Password do not match, both password should be same.";
            }
            else
            {
                    //$pass1 = md5($pass1);
                    if(mysqli_query($con,"UPDATE `logindetails` SET `password`='".$pass1."' WHERE `mail`='".$email."';"))
                    {
                        mysqli_query($con,"DELETE FROM `password_reset_temp` WHERE `email`='".$email."';");
                        $enter == 1;
                    }
                    else
                    {
                        $error = "Your Password is failed to changed please retry again.";
                    }
            }
      }
    	?>


      <?php if($enter == 1 && $error == "") {?>
        <div class="ftco-section bg-light">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-lg-12 mb-5">
                <div class="p-5 bg-white">
                  <div class="alert alert-success" role="alert">
                    Your Password is Successfully Changed
                  </div>
                    <a href="login.php">Click Here</a><span>  </span><label class="font-weight-bold">to Login</label>
                </div>
              </div>
            </div>
          </div>
        </div>>
<?php } else if($enter != 1 && $error != ""){ echo ('<div class="ftco-section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12 mb-5">
        <div class="p-5 bg-white">
          <div class="alert alert-danger" role="alert">
            '.$error.'
          </div>
            <a href="login.php">Click Here</a><span>  </span><label class="font-weight-bold">go to login page</label>
        </div>
      </div>
    </div>
  </div>
</div>>');} else{}?>


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
