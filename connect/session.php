<?php
   include('connect.php');
   session_start();

   $user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($con,"select mail from logindetails where mail = '$user_check' ");


   if (mysqli_num_rows($ses_sql) > 0) {
    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

    $login_session = $row['mail'];
   }else{
    if(session_destroy()) {
        header("Location: ../login.php");
     }
   }
   if(!isset($_SESSION['login_user'])){
      header("location: ../login.php");
      die();
   }
?>
