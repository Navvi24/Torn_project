<?php
   include("connect.php");
$fname    = "";
$lname    = "";
$mailerr  ="";
$phn      = "";
$email    = "";
$password = "";
$files = "";
$tmp_name = "";
$ext = "";
$filename = $_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);


if(isset($_POST['signup']))
{
if(!empty($_POST['signup']))
{
    //print_r($_POST);
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
       // echo $fname;
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
      //  echo $lname;
    $phn = mysqli_real_escape_string($con, $_POST['phn']);
       // echo $phn;
    $email = mysqli_real_escape_string($con, $_POST['email']);
       // echo $email;
    $password = mysqli_real_escape_string($con, $_POST['password']);
       // echo $password;
    $pass_retype = mysqli_real_escape_string($con, $_POST['pass_retype']);
       // echo $pass_retype;
    //$filename = $_FILES['cv']['name'];
  //  $tmp_name = $_FILES['cv']['tmp_name'];
  //  $ext = pathinfo($filename, PATHINFO_EXTENSION);
    //print_r($filename);
    //print_r($ext);
    if (in_array($ext, array("pdf", "docx", "doc")))
    {
     $filename = rand().'.'.$ext;
     move_uploaded_file($tmp_name, "../resume_files/$filename");
    }
    else
    {
    header("Location: ../signup.php?ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po=101000");
    exit;
    }
    $sql="INSERT INTO logindetails (fname, lname, phn,  mail, password,resume_url)
           VALUES('$fname','$lname','$phn','$email','$password','$filename')";

       if (!mysqli_query($con,$sql)) {
         $error = "Error: ".mysqli_error($con);
         header("Location: ../login.php?ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po=10100");
           }else{
               $msg = "signup successfully";
               $description = "";
               header("Location: ../login.php?ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po=1010");
           }
  }
}
?>
