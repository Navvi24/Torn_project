<?php
//print_r($_POST);
include("connect.php");
include("session.php");
$clg = "";
$files = "";
$tmp_name = "";
$ext = "";
$filename = $_FILES["pdf"]["name"];
$tmp_name = $_FILES["pdf"]["tmp_name"];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
//print_r($_POST);
if(isset($_POST['send']))
 {
 if(!empty($_POST['send']))
 {
    $clg =  mysqli_real_escape_string($con, $_POST['college']);

    if (in_array($ext, array("pdf", "docx", "doc")))
    {
     $filename = rand().' '.$login_session.'.'.$ext;
     move_uploaded_file($tmp_name, "../resume_files/$filename");
     $sql="UPDATE logindetails set college='$clg' , resume_url='$filename' WHERE mail='$login_session'";

        if (!mysqli_query($con,$sql)) {
          $error = "Error: ".mysqli_error($con);
         //echo "$error";
         header("Location: ../internships.php");
            }else{
               $msg = "signup successfully";
               //echo "$msg";
               // $description = "";
               header("Location: ../internships.php");
            }
    }
    else
    {
       header("Location: ../internships.php");
    }


  }
}
?>
