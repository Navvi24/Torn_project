<?php
   require("../connect/connect.php");


$fname    = "";
$lname    = "";
$mailerr  ="";
$phn      = "";
$email    = "";
$password = "";


if(isset($_POST['signup']))
{

if(!empty($_POST['signup']))
{
    $fname = $_POST['fname'];
        echo $fname;
    $lname = $_POST['lname'];
        echo $lname;
    $phn = $_POST['phn'];
        echo $phn;
    $email = $_POST['email'];
        echo $email;
    $password = $_POST['password'];
        echo $password;
    $pass_retype = $_POST['pass_retype'];
        echo $pass_retype;

  }
}


 $sql="INSERT INTO logindetails (fname, lname, phn,  mail, password)
        VALUES('$fname','$lname','$phn','$email','$password')";

		if (!mysqli_query($con,$sql)) {
			$error = "Error: ".mysqli_error($con);
      header("Location: ../login.php?ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po=10100");
        }else{
            $msg = "signup successfully";
            $description = "";
            header("Location: ../login.php?ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po=1010");
        }

?>
