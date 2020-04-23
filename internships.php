<?php
include('Inputdata/session.php');
 ?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <title>TORM</title><link rel="shortcut icon" href="images/Logo.png" type="image/x-icon">
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
s1.src='https://embed.tawk.to/5ea1438469e9320caac67cea/default';
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
            <div class="row">
              <li><div class="col-sm"><button class="btn btn-outline-*"><a href="#"  style="color:black;">Welcome, <?php echo $login_session; ?></a></button></div></li>
  	          <li><div class="col-sm"><button class="btn btn-danger"><a href="signout.php" style="color:white;">Sign out</a></button></div></li>&nbsp;&nbsp;
            </div>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->


    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 pr-lg-5">
            <div class="row justify-content-center pb-3">
              <div class="col-md-12 heading-section ftco-animate">
                <center><h2 class="mb-4">All Internships</h2></center>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 ftco-animate">
                <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                  <div class="one-third mb-4 mb-md-0">
                    <div class="job-post-item-header d-flex align-items-center">
                      <h2 class="mr-3 text-black"><a href="#">Frontend Development</a></h2>
                      <div class="badge-wrap">
                       <span class="bg-primary text-white badge py-2 px-3">Partime</span>
                      </div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                      <div class="mr-3"><span class="icon-layers"></span> <a href="#">Facebook, Inc.</a></div>
                      <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                    </div>
                  </div>

                  <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                    <div>
                      <a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                        <span class="icon-heart"></span>
                      </a>
                    </div>
                    <a href="job-single.php" class="btn btn-primary py-2">Apply Job</a>
                  </div>
                </div>
              </div><!-- end -->

              <div class="col-md-12 ftco-animate">
                <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                  <div class="one-third mb-4 mb-md-0">
                    <div class="job-post-item-header d-flex align-items-center">
                      <h2 class="mr-3 text-black"><a href="#">Full Stack Developer</a></h2>
                      <div class="badge-wrap">
                       <span class="bg-warning text-white badge py-2 px-3">Fulltime</span>
                      </div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                      <div class="mr-3"><span class="icon-layers"></span> <a href="#">Google, Inc.</a></div>
                      <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                    </div>
                  </div>

                  <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                    <div>
                      <a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                        <span class="icon-heart"></span>
                      </a>
                    </div>
                    <a href="job-single.php" class="btn btn-primary py-2">Apply Job</a>
                  </div>
                </div>
              </div><!-- end -->

              <div class="col-md-12 ftco-animate">
                <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                  <div class="one-third mb-4 mb-md-0">
                    <div class="job-post-item-header d-flex align-items-center">
                      <h2 class="mr-3 text-black"><a href="#">Open Source Interactive Developer</a></h2>
                      <div class="badge-wrap">
                       <span class="bg-info text-white badge py-2 px-3">Freelance</span>
                      </div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                      <div class="mr-3"><span class="icon-layers"></span> <a href="#">New York Times</a></div>
                      <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                    </div>
                  </div>

                  <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                    <div>
                      <a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                        <span class="icon-heart"></span>
                      </a>
                    </div>
                    <a href="job-single.php" class="btn btn-primary py-2">Apply Job</a>
                  </div>
                </div>
              </div><!-- end -->

              <div class="col-md-12 ftco-animate">
                <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                  <div class="one-third mb-4 mb-md-0">
                    <div class="job-post-item-header d-flex align-items-center">
                      <h2 class="mr-3 text-black"><a href="#">Frontend Development</a></h2>
                      <div class="badge-wrap">
                       <span class="bg-secondary text-white badge py-2 px-3">Internship</span>
                      </div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                      <div class="mr-3"><span class="icon-layers"></span> <a href="#">Facebook, Inc.</a></div>
                      <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                    </div>
                  </div>

                  <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                    <div>
                      <a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                        <span class="icon-heart"></span>
                      </a>
                    </div>
                    <a href="job-single.php" class="btn btn-primary py-2">Apply Job</a>
                  </div>
                </div>
              </div><!-- end -->

              <div class="col-md-12 ftco-animate">
                <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                  <div class="one-third mb-4 mb-md-0">
                    <div class="job-post-item-header d-flex align-items-center">
                      <h2 class="mr-3 text-black"><a href="#">Open Source Interactive Developer</a></h2>
                      <div class="badge-wrap">
                       <span class="bg-danger text-white badge py-2 px-3">Temporary</span>
                      </div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                      <div class="mr-3"><span class="icon-layers"></span> <a href="#">New York Times</a></div>
                      <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                    </div>
                  </div>

                  <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                    <div>
                      <a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                        <span class="icon-heart"></span>
                      </a>
                    </div>
                    <a href="job-single.php" class="btn btn-primary py-2">Apply Job</a>
                  </div>
                </div>
              </div><!-- end -->

              <div class="col-md-12 ftco-animate">
                <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                  <div class="one-third mb-4 mb-md-0">
                    <div class="job-post-item-header d-flex align-items-center">
                      <h2 class="mr-3 text-black"><a href="#">Full Stack Developer</a></h2>
                      <div class="badge-wrap">
                       <span class="bg-warning text-white badge py-2 px-3">Fulltime</span>
                      </div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                      <div class="mr-3"><span class="icon-layers"></span> <a href="#">Google, Inc.</a></div>
                      <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                    </div>
                  </div>

                  <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                    <div>
                      <a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                        <span class="icon-heart"></span>
                      </a>
                    </div>
                    <a href="job-single.php" class="btn btn-primary py-2">Apply Job</a>
                  </div>
                </div>
              </div><!-- end -->

              <div class="col-md-12 ftco-animate">
                <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                  <div class="one-third mb-4 mb-md-0">
                    <div class="job-post-item-header d-flex align-items-center">
                      <h2 class="mr-3 text-black"><a href="#">Open Source Interactive Developer</a></h2>
                      <div class="badge-wrap">
                       <span class="bg-info text-white badge py-2 px-3">Freelance</span>
                      </div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                      <div class="mr-3"><span class="icon-layers"></span> <a href="#">New York Times</a></div>
                      <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                    </div>
                  </div>

                  <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                    <div>
                      <a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                        <span class="icon-heart"></span>
                      </a>
                    </div>
                    <a href="job-single.php" class="btn btn-primary py-2">Apply Job</a>
                  </div>
                </div>
              </div><!-- end -->

              <div class="col-md-12 ftco-animate">
                <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                  <div class="one-third mb-4 mb-md-0">
                    <div class="job-post-item-header d-flex align-items-center">
                      <h2 class="mr-3 text-black"><a href="#">Frontend Development</a></h2>
                      <div class="badge-wrap">
                       <span class="bg-secondary text-white badge py-2 px-3">Internship</span>
                      </div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                      <div class="mr-3"><span class="icon-layers"></span> <a href="#">Facebook, Inc.</a></div>
                      <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                    </div>
                  </div>

                  <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                    <div>
                      <a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                        <span class="icon-heart"></span>
                      </a>
                    </div>
                    <a href="job-single.php" class="btn btn-primary py-2">Apply Job</a>
                  </div>
                </div>
              </div><!-- end -->

              <div class="col-md-12 ftco-animate">
                <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                  <div class="one-third mb-4 mb-md-0">
                    <div class="job-post-item-header d-flex align-items-center">
                      <h2 class="mr-3 text-black"><a href="#">Open Source Interactive Developer</a></h2>
                      <div class="badge-wrap">
                       <span class="bg-danger text-white badge py-2 px-3">Temporary</span>
                      </div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                      <div class="mr-3"><span class="icon-layers"></span> <a href="#">New York Times</a></div>
                      <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                    </div>
                  </div>

                  <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                    <div>
                      <a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                        <span class="icon-heart"></span>
                      </a>
                    </div>
                    <a href="job-single.php" class="btn btn-primary py-2">Apply Job</a>
                  </div>
                </div>
              </div><!-- end -->
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
