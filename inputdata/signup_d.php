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

if(isset($_POST['signup']))
{
$files = $_FILES['cv'];
if(!empty($_POST['signup']))
{
    print_r($_POST);
    $fname = $_POST['fname'];
       // echo $fname;
    $lname = $_POST['lname'];
      //  echo $lname;
    $phn = $_POST['phn'];
       // echo $phn;
    $email = $_POST['email'];
       // echo $email;
    $password = $_POST['password'];
       // echo $password;
    $pass_retype = $_POST['pass_retype'];
       // echo $pass_retype;
    $filename = $_FILES['cv']['name'];
  //  $tmp_name = $_FILES['cv']['tmp_name'];
  //  $ext = pathinfo($filename, PATHINFO_EXTENSION);
    print_r($filename);
    //print_r($ext);
    //if (in_array($ext, array("pdf", "docx", "doc")))
    //{
      //$filename = rand().'.'.$ext;
      //move_uploaded_file($tmp_name, "../resume_files/$filename");
    //}
    //else
    //{
    //header("Location: ../login.php?ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po=101000");
    //}
  }
}


 $sql="INSERT INTO logindetails (fname, lname, phn,  mail, password)
        VALUES('$fname','$lname','$phn','$email','$password')";

		if (!mysqli_query($con,$sql)) {
			$error = "Error: ".mysqli_error($con);
      //header("Location: ../login.php?ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po=10100");
        }else{
            $msg = "signup successfully";
            $description = "";
          //  header("Location: ../login.php?ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po=1010");
        }
?>
