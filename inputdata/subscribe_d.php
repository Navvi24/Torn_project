<?php
   include("connect.php");



$email    = "";


if(isset($_POST['subscribe']))
{

if(!empty($_POST['subscribe']))
{
    
    $email = $_POST['email'];
      //echo $email;
    
  }



 $sql="INSERT INTO submail (mail)
        VALUES('$email')";

		if (!mysqli_query($con,$sql)) {
		$error = "Error: ".mysqli_error($con);
     header("Location: ../index.php?ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po=10100");
      }else{
           $msg = "Subscribe Sccuessfully";
           $description = "";
    header("Location: ../index.php?ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po=1010");
       }
}
?>
