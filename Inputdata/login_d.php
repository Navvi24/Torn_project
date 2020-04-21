 <?php
 session_start();
 $error="";
 include("../connect/connect.php");

 if(isset($_SESSION['login_user'])){
   header("location: internships.php");
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
     header("location: internships.php");
   }else {
     $error = "Your Login Name or Password is invalid ";
   }

 }

 ?>
