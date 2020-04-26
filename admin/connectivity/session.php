<?php
   include('dbconnect.php');
   session_start();

   $user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($con,"select username from admin where username = '$user_check' ");


   if (mysqli_num_rows($ses_sql) > 0) {
    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

    $login_session = $row['username'];
   }else{
    if(session_destroy()) {
        header("Location: index.php");
     }
   }
   if(!isset($_SESSION['login_user'])){
      header("location: index.php");
      die();
   }
?>
