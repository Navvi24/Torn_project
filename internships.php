<?php
include('inputdata/session.php');
include('inputdata/appliedmail.php');
 ?>
 <?php
 include("inputdata/connect.php");
 $error = "";
   $msg = "";
   $sql="";
   $arg="";
   $app="";
   $intern_status = "";
   $check_mail = "";
   $check_csr = "";
   $temp ="0";
   $resume ="";
   $num = 0;
   $default_web = "#";
   $allapp                   =array();
   $serial                   =array();
   $post_time                =array();
   $fname                    =array();
   $lname                    =array();
   $email                    =array();
   $phone                    =array();
   $comp_name                =array();
   $about_comp               =array();
   $comp_web                 =array();
   $i_pos1                   =array();
   $i_details                =array();
   $city                     =array();
   $state                    =array();
   $total_opening            =array();
   $start_date               =array();
   $i_duration_type          =array();
   $i_duration               =array();
   $i_description            =array();
   $stipend_amt              =array();
   $stipend_method           =array();
   $perks                    =array();


if(isset($_GET['query']) && !empty($_GET['query']) ){

    $arg = mysqli_real_escape_string($con,$_GET["query"]);

    switch ($_GET['filter']) {
      case "Position":
          $sql = "SELECT * FROM active_internship WHERE internship_pos LIKE '%$arg%'";
          break;
        case "City":
          $sql = "SELECT * FROM active_internship WHERE internship_city LIKE '%$arg%'";
          break;
      case "State":
          $sql = "SELECT * FROM active_internship WHERE state LIKE '%$arg%'";
          break;
      case "Company Name":
          $sql = "SELECT * FROM active_internship WHERE comp_name LIKE '%$arg%'";
          break;
      default:
          $sql = "SELECT * FROM active_internship";
    }

    // $msg = $sql;
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {

      while ($row = mysqli_fetch_assoc($result)){

        $serial[$num]        = $row["SR"];
           $post_time[$num]     = $row["internship_post_time"];
           $fname[$num]         = $row["fname"];
           $lname[$num]         = $row["lname"];
           $email[$num]         = $row["email"];
           $phone[$num]         = $row["phn"];
           $comp_name[$num]     = $row["comp_name"];
           $about_comp[$num]    = $row["comp_about"];
           $comp_web[$num]      = $row["comp_web"];
           $i_pos1[$num]         = $row["internship_pos"];
           $i_details[$num]     = $row["internship_detail"];
           $city[$num]          = $row["internship_city"];
           $state[$num]          = $row["state"];
           $total_opening[$num] = $row["total_opening"];
           $start_date[$num]    = $row["internship_start_date"];
           $i_duration[$num]   = $row["duration_no"];
           $i_duration_type[$num] = $row["duration_type"];
           $i_description[$num] = $row["about_internship"];
           $stipend_amt[$num]   = $row["stipend_amount"];
           $stipend_method[$num] = $row["stipend_method"];
           $perks[$num]         = $row["perks"];
           $num = $num + 1;

      }
    }
  }

else{
     $sql = "SELECT SR, internship_post_time, fname, lname, email, phn, comp_name, comp_about, comp_web, internship_pos, internship_detail, internship_city, state, total_opening, internship_start_date, duration_no, duration_type, about_internship, stipend_amount, stipend_method, perks FROM active_internship";
     $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {

      while ($row = mysqli_fetch_assoc($result)){
           $serial[$num]        = $row["SR"];
           $post_time[$num]     = $row["internship_post_time"];
           $fname[$num]         = $row["fname"];
           $lname[$num]         = $row["lname"];
           $email[$num]         = $row["email"];
           $phone[$num]         = $row["phn"];
           $comp_name[$num]     = $row["comp_name"];
           $about_comp[$num]    = $row["comp_about"];
           $comp_web[$num]      = $row["comp_web"];
           $i_pos1[$num]         = $row["internship_pos"];
           $i_details[$num]     = $row["internship_detail"];
           $city[$num]          = $row["internship_city"];
           $state[$num]          = $row["state"];
           $total_opening[$num] = $row["total_opening"];
           $start_date[$num]    = $row["internship_start_date"];
           $i_duration[$num]   = $row["duration_no"];
           $i_duration_type[$num] = $row["duration_type"];
           $i_description[$num] = $row["about_internship"];
           $stipend_amt[$num]   = $row["stipend_amount"];
           $stipend_method[$num] = $row["stipend_method"];
           $perks[$num]         = $row["perks"];
           $num = $num + 1;
         }
     }


}
$sql2 = "SELECT applied,resume_url FROM logindetails WHERE mail='$login_session'";
$result = $con->query($sql2);

if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
            
    {   $resume = $row["resume_url"];
        $app = $row["applied"];
        $allapp = explode(";", $app);
    }
  
}
else
{
    echo "0 results";
}



?>



<?php
if(empty($resume)){?>
   <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
	$(document).ready(function(){
		
        $('#myModal').modal({
    backdrop: 'static',
    keyboard: false
})  
	});
</script>
<style>
    .bs-example{
    	margin: 15px;
    }
</style>
</head>
<body>
<div class="bs-example">
    <div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Please Fill These Details  First</h5>
                </div>
                <form action="./inputdata/res.php"; class="p-5 bg-white"; method="post"; enctype="multipart/form-data">
                <div class="modal-body">
                    
               
                  <label class="font-weight-bold" for="firstname">College/Institution</label>
                  <input type="text" id="college" class="form-control" placeholder="Enter your College/Institution" name="college" required>
             
              
                     
                
                  <label class="font-weight-bold" for="firstname">Select Your Resume</label>
                      
                  <input type="file" id="fullname" class="form-control"  name="file" required>
           <label class="font-weight-bold" for="firstname">Upload file must be in .pdf and .docx format</label>
              
                </div>
                <div class="modal-footer">
                  
                    <button type="submit" class="btn btn-primary" name="signup">Submit</button>
                    
                </div></form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php  }
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
        .job-post-item .one-forth {width: 222px;}
        .i_head{color: #17a2b8;}
        .i_data{color: black;}
        .disable-links { pointer-events: none;}
        #namelink
        {
          color: black;
        }
        @media(max-width: 500px)
        {
            #namelink{
              color:white;
            }
        }
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
            <div class="row">
              <li><div class="col-sm"><button class="btn btn-outline-*"><a href="#" id="namelink">Welcome, <?php echo $login_session; ?></a></button></div></li>
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
                <center><h2 class="mb-4">Opportunities</h2></center>
              </div>
            </div>

        <form class="pt-3 pb-2 mb-3" method="get">
          <div class="form-row">
            <div class="form-group col-md-9">
              <input value="<?php echo($arg);?>" name="query" type="text" class="form-control" id="inputAddress"
                placeholder="Search Internships" >
            </div>
            <div class="form-group col-md-2">
              <select name="filter" id="inputState" class="form-control">
                <option>Position</option>
                <option>City</option>
                <option>State</option>
                <option>Company Name</option>

              </select>
            </div>
            <div class="form-group col-md-1">
              <button type="submit" class="btn btn-primary btn-lg py-2">Search</button>
            </div>
          </div>
        </form>
            <div class="row">
              <?php

                for($x = 0; $x < $num; $x++){

              echo ('<div class="col-md-12 ftco-animate">
                  <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                    <div class="one-third mb-4 mb-md-0">
                      <div class="job-post-item-header d-flex align-items-center">
                        <h2 class="mr-3 text-black"><a href="#">'.$i_pos1[$x].'</a></h2>
                        <div class="badge-wrap">
                         <span class="bg-primary text-white badge py-2 px-3">'.$i_details[$x].'</span>
                        </div>');
                        $sql3= "SELECT status,internmail,csr from applied where csr = '$serial[$x]' AND internmail = '$login_session'";
                        $result = $con->query($sql3);
                        if ($result->num_rows > 0)
                        {
                          while($row = $result->fetch_assoc())
                          {
                              $intern_status = $row['status'];
                              $check_mail = $row['internmail'];
                              $check_csr = $row['csr'];
                          }
                        }
                        if($login_session == $check_mail AND $check_csr == $serial[$x])
                        {
                          if($intern_status == "shortlisted")
                          {
                            echo('
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div class=" badge-wrap">
                                 <span class="bg-info text-white badge py-2 px-3"><b>Internship Status :</b> '.$intern_status.'</span>
                                </div>
                              ');
                          }
                        else if($intern_status == "selected")
                          {
                            echo('
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div class=" badge-wrap">
                                 <span class="bg-success text-white badge py-2 px-3"><b>Internship Status :</b> '.$intern_status.'</span>
                                </div>
                              ');
                          }
                          else if($intern_status == "rejected")
                            {
                              echo('
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  <div class=" badge-wrap">
                                   <span class="bg-danger text-white badge py-2 px-3"><b>Internship Status :</b> '.$intern_status.'</span>
                                  </div>
                                ');
                            }
                          else
                          {
                            echo('
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div class=" badge-wrap">
                                 <span class="bg-warning text-white badge py-2 px-3"><b>Internship Status :</b> '.$intern_status.'</span>
                                </div>
                              ');
                          }
                        }
                      else {

                      }
                  echo('    </div>
                      <div class="job-post-item-body d-block d-md-flex">
                        <div class="mr-3"><span class="icon-layers"></span> <a href="'.$comp_web[$x].'" target="_blank">'.$comp_name[$x].'</a></div>
                        <div class="mr-3"><span class="icon-my_location"></span> <span>'.$city[$x].', '.$state[$x].'</span></div>
                        <div><span class="icon-inr"></span> <span>'.$stipend_amt[$x].' '.$stipend_method[$x].'</span></div>
                      </div>
                    </div>

                    <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                      <div class="row" style="width:325px;">');

                    for ($y = 0; $y < sizeof($allapp); $y++) {
                     if($allapp[$y] == $serial[$x]){
                            echo('<a href="appliedprocess.php?applied='.$serial[$x].'&login='.$login_session.'" class="btn disable-links btn-success py-2" style="margin-right: 8px; color:white;">Scheduled</a>');
                         $temp="1";
                      break;

                     }
                        else {
                            $temp = "2";
                        }
                    }
                            if($temp == 0 || $temp == 2){
                            echo('<a href="appliedprocess.php?applied='.$serial[$x].'&login='.$login_session.'" class="btn btn-primary py-2" style="margin-right: 8px; margin-left: -35px; color:white;">Schedule Interview</a>');
                            }



                       echo('<a class="btn btn-info py-2" style="margin-right: 8px; color:white;" data-toggle="collapse" href="#collapse'.$serial[$x].'" role="button" aria-expanded="false" aria-controls="collapseExample">Read More</a>
                      </div>
                    </div>
                  </div>
                  <div class="collapse" id="collapse'.$serial[$x].'">
                    <div class="card card-body">
                      <label class="font-weight-bold i_head">About Company</label>
                      <p class="i_data">'.$about_comp[$x].'</p>
                      <br>
                      <label class="font-weight-bold i_head">About Internship</label>
                      <p class="i_data">'.$i_description[$x].'</p>
                      <br>
                      <label class="font-weight-bold i_head">No. of openings : </label>
                      <p class="i_data">'.$total_opening[$x].'</p>
                      <br>
                      <label class="font-weight-bold i_head">Start Date : </label>
                      <p class="i_data">'.$start_date[$x].'</p>
                      <br>
                      <label class="font-weight-bold i_head">Duration : </label>
                      <p class="i_data">'.$i_duration[$x].' '.$i_duration_type[$x].'</p>
                      <br>
                      <label class="font-weight-bold i_head">Posted on : </label>
                      <p class="i_data">'.$post_time[$x].'</p>
                      <br>
                      <label class="font-weight-bold i_head">Perks : </label>
                      <p class="i_data">'.$perks[$x].' </p>
                      </div>
                  </div>
              </div><!-- end -->');
              }
                ?>

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
