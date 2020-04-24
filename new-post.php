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
    <script src="dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="alert/dist/sweetalert.css">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bs-stepper.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="fonts/FontAwesome/css/all.css">

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
  .dropbtn
  {
    background-color: #6c63ff;
    color: white;
    padding: 10px;
    font-size: 14px;
    border: none;
  }

  .dropdown
  {
    position: relative;
    display: inline-block;
  }

  .dropdown-content
  {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }

  .dropdown-content a
  {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .dropdown-content a:hover
  {
    background-color: #ddd;
  }

  .dropdown:hover .dropdown-content {display: block;}

  .dropdown:hover .dropbtn {background-color: #3e8e41;}
  .active .bs-stepper-circle{background-color:#6c63ff;}
  .step-trigger:focus{color:#6c63ff;outline:0;}
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
    <?php include "mobile_detact.php";

    $detect = new Mobile_Detect();
    if ($detect->isMobile()){?>
    <div class="alert alert-warning alert-dismissible fade show">
    <center><h2 class="alert-heading"><i class="fa fa-warning"></i> Warning!</h2></center>
    <p>Please Open In Desktop Mode Only </p>
    <hr>
    <p class="mb-0">Once you have filled all the details, click on the 'Submit' button to continue.</p>
    <br><center><p class="mb-0">OR</p></center><br>
    <p class="mb-0">Contact support@internstorm.com</p>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
    <?php }
    else {
    ?>
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

    <div class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
          	<p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>New Job Post</span></p>
            <h1 class="mb-3 bread">Post Internship</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="ftco-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12 mb-5 mt-5">
            <div id="stepper1" class="bs-stepper">
              <div class="bs-stepper-header">
                <div class="step" data-target="#test-l-1">
                  <button type="button" class="btn step-trigger">
                    <span class="bs-stepper-circle"><div class="icon"><i class="fas fa-user-tie"></i></div></span>
                    <span class="bs-stepper-label">Personal Details</span>
                  </button>
                </div>
                <div class="bs-stepper-line"></div>
                <div class="step" data-target="#test-l-2">
                  <button type="button" class="btn step-trigger">
                    <span class="bs-stepper-circle"><div class="icon"><i class="fas fa-hotel"></i></div></span>
                    <span class="bs-stepper-label">Company Details</span>
                  </button>
                </div>
                <div class="bs-stepper-line"></div>
                <div class="step" data-target="#test-l-3">
                  <button type="button" class="btn step-trigger">
                    <span class="bs-stepper-circle"><div class="icon"><i class="far fa-file-alt"></i></div></span>
                    <span class="bs-stepper-label">Post Internship</span>
                  </button>
                </div>
              </div>
              <div class="bs-stepper-content">
                <form class="needs-validation p-5 bg-white" action="Inputdata/post_d.php" method="post" novalidate>
                  <div id="test-l-1" class="content">
                    <div class="row form-group">
                      <div class="col-md-6 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="firstname">First Name</label>
                        <input type="text" id="fullname" class="form-control" placeholder="Enter your First Name" name="fname" required>
                        <div class="invalid-feedback">Please Enter firstname.</div>
                      </div>
                      <div class="col-md-6 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="lastname">Last Name</label>
                        <input type="text" id="fullname" class="form-control" placeholder="Enter your Last Name" name="lname" required>
                        <div class="invalid-feedback">Please Enter Lastname.</div>
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="username">Enter Your Email</label>
                        <input type="email" id="fullname" class="form-control" placeholder="Enter your email" name="email" required>
                        <div class="invalid-feedback">Please Enter Email.</div>
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="phone">Phone</label>
                        <input type="number" id="nmsg" class="form-control" maxlength="10" placeholder="Enter your Phone number" name="phn" onKeyDown="textCounter(this.form.nmsg,this.form.countDisplay);" onKeyUp="textCounter(this.form.nmsg,this.form.countDisplay);" required>
                        <div class="invalid-feedback">Please Enter Phone no.</div>
                      </div>
                    </div>
                    <input type="button" value="Next" class="btn btn-primary btn-next-form py-2 px-10" onclick="stepper1.next()"/>
                  </div>
                  <div id="test-l-2" class="content">
                    <div class="row form-group">
                      <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="company_name">Company Name</label>
                        <input type="text" id="company_name" class="form-control" placeholder="Enter your Company Name" name="comp_name" required>
                        <div class="invalid-feedback">Please Enter Company Name.</div>
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="about_company">About Company</label>
                        <textarea name="comp_about" class="form-control" id="about_company" cols="30" rows="6" required></textarea>
                        <div class="invalid-feedback">Please Enter Company details.</div>
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="company_website">Company Website</label><span>(Optional)</span>
                        <input type="url" id="company_website" class="form-control" placeholder="Example : https://www.internstorm.com" name="comp_web">
                      </div>
                    </div>
                    <input type="button" value="Previous" class="btn btn-primary btn-next-form py-2 px-10" onclick="stepper1.previous()"/>
                    <input type="button" value="Next" class="btn btn-primary btn-next-form py-2 px-10" onclick="stepper1.next()"/>
                  </div>
                  <div id="test-l-3" class="content">
                    <div class="row form-group">
                      <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="internship_type">Internship Type</label>
                        <input type="text" id="internship_detail" class="form-control" placeholder="Example : Campus Ambassador, Content Writing, Web Development, Digital Marketing etc." name="internship_pos" required>
                        <div class="invalid-feedback">Please enter internship type.</div>
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="internship_detail">Internship Details</label>
                        <div class="col-md-12 mb-3 mb-md-0">
                          <input type="radio" name="internship_detail" value="Regular" required checked>
                          <label for=internship_detail>Regular (In-office/On-field)</label>
                        </div>
                        <div class="col-md-12 mb-3 mb-md-0">
                          <input type="radio"  name="internship_detail" value="Work from home">
                          <label for="internship_detail"> Work from home</label>
                      </div>
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="internship_city">City</label>
                        <input type="text" id="internship_city" class="form-control" placeholder="Example : Mumbai, Pune, Delhi etc." name="internship_city" required>
                        <div class="invalid-feedback">Please enter internship city.</div>
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="total_opening">Number of openings</label>
                        <input type="number" id="total_opening" class="form-control" placeholder="Example : 10 " name="total_opening" required>
                        <div class="invalid-feedback">Please enter no. of openings.</div>
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="internship_start_date">Internship Start Date</label>
                        <div class="col-md-12 mb-3 mb-md-0">
                          <input type="radio" name="internship_start_date" value="Immediately" required checked>
                          <label for=internship_start_date>Immediately (within next 30 days)</label>
                        </div>
                        <div class="col-md-12 mb-3 mb-md-0">
                          <input type="radio"  name="internship_start_date" value="Later">
                          <label for="internship_start_date">Later</label>
                      </div>
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-12 mb-3 mb-md-0">
                          <label class="font-weight-bold" for="internship_duration">Internship Duration</label>
                          <div class="form-group row">
                            <div class="col-md-8 mb-3 mb-md-0">
                              <select name="duration_number" class="form-control" required>
                                <option label="Choose Duration" selected>Choose Duration</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                             </select>
                             <div class="invalid-feedback">Please choose duration.</div>
                            </div>
                            <div class="col-md-4 mb-3 mb-md-0">
                              <select id="durations" name="duration_type" class="form-control" required>
                                <option value="months">Months</option>
                                <option value="weeks">Weeks</option>
                             </select>
                             <div class="invalid-feedback">Please choose duration.</div>
                            </div>
                          </div>
                      </div>

                    </div>
                    <div class="row form-group">
                      <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="about_internship">Internship Description</label>
                        <textarea name="about_internship" class="form-control" id="about_internship" cols="30" rows="6" required></textarea>
                        <div class="invalid-feedback">
                          Please enter internship details.
                        </div>
                      </div>
                    </div>
                    <br>
                    <h3 class="font-weight-bold">Stipend And Perks</h3>
                    <br>
                    <div class="row form-group">
                      <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="stipend_amount">Stipend(₹)</label><span>(if internship is unpaid mention 0 in stipend)</span>
                        <div id="Fixed" class="form-group row">
                          <div class="col-md-8 mb-3 mb-md-0">
                              <input type="number" id="total_opening" class="form-control" placeholder="Example : ₹5000 " name="stipend_amount" required>
                              <div class="invalid-feedback">
                                Please enter stipend amount.
                              </div>
                          </div>
                          <div class="col-md-4 mb-3 mb-md-0">
                            <select id="durations" name="stipend_method" class="form-control">
                              <option value="/Month">Month</option>
                              <option value="/week">week</option>
                              <option value="lump-sum">lump-sum</option>
                           </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="total_opening">Perks</label>
                        <div class="checkbox">
                          <label><input type="checkbox" value="Certificate" name="perks[]"> Certificate</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" value="Letter of recommendation" name="perks[]"> Letter of recommendation</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" value="Flexible Work hours" name="perks[]"> Flexible Work hours</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" value="5 days a week" name="perks[]"> 5 days a week</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" value="Informal dress code" name="perks[]"> Informal dress code</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" value="Free Snacks and beverages" name="perks[]"> Free Snacks and beverages</label>
                        </div>
                      </div>
                    </div>
                      <input type="button" value="Previous" class="btn btn-primary btn-next-form py-2 px-10" onclick="stepper1.previous()"/>
                      <button type="submit" class="btn btn-primary py-2 px-10" name="post_sub">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subscribe to Internships Alerts!</h2>
              <p>We knew you just couldn't get enough of us! Don't worry, we love the attention and appreciate your effort to stay connected. Subscribe to alerts to be on the top of your game and never miss an opportunity. You know what they say,<br>“You snooze, you lose!”</p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-12">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Our Motto</h2>
              <p>STOP RUNNING, WE'VE GOT YOU</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
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
                <li><a href="#" class="py-2 d-block">FAQ</a></li>

              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    <?php include('Inputdata/post_check.php'); ?>
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

 <script>
 // Example starter JavaScript for disabling form submissions if there are invalid fields
 (function() {
   'use strict';
   window.addEventListener('load', function() {
     // Fetch all the forms we want to apply custom Bootstrap validation styles to
     var forms = document.getElementsByClassName('needs-validation');
     // Loop over them and prevent submission
     var validation = Array.prototype.filter.call(forms, function(form) {
       form.addEventListener('submit', function(event) {
         if (form.checkValidity() === false) {
           event.preventDefault();
           event.stopPropagation();
         }
         form.classList.add('was-validated');
       }, false);
     });
   }, false);
 })();
 </script>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="js/bs-stepper.min.js"></script>
  <script>
    var stepper1Node = document.querySelector('#stepper1')
    var stepper1 = new Stepper(document.querySelector('#stepper1'))

    stepper1Node.addEventListener('show.bs-stepper', function (event) {
      console.warn('show.bs-stepper', event)
    })
    stepper1Node.addEventListener('shown.bs-stepper', function (event) {
      console.warn('shown.bs-stepper', event)
    })

    var stepper2 = new Stepper(document.querySelector('#stepper2'), {
      linear: false,
      animation: true
    })
    var stepper3 = new Stepper(document.querySelector('#stepper3'), {
      animation: true
    })
    var stepper4 = new Stepper(document.querySelector('#stepper4'))
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
  <?php                   }?>
