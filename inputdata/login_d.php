 <?php
 session_start();
 include("connect.php");

 if(isset($_SESSION['login_user'])){
   header("location: internship_test.php");
   die();
 }

 if($_SERVER["REQUEST_METHOD"] == "POST") {

   $myusername = mysqli_real_escape_string($con,$_POST['email']);
   $mypassword = mysqli_real_escape_string($con,$_POST['password']);

   $sql = "SELECT mail FROM logindetails WHERE mail = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($con,$sql);

   // If result matched $myusername and $mypassword, table row must be 1 row
   if(mysqli_num_rows($result) > 0) {
     $_SESSION['login_user'] = $myusername;
     header("location: ../internship_test.php");
   }else {
    header("location: ../login.php?kLCT2Pln5zXEO4leV2QnwcANywVInFPFWMfH3ohT2CQ=10100");
   }



 }

 ?>
