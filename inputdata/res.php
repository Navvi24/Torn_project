<?php
   include("connect.php");
   include("session.php");
$clg = "";
$files = "";
$tmp_name = "";
$ext = "";
$filename = $_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

//print_r($_POST);
if(isset($_POST['signup']))
{
if(!empty($_POST['signup']))
{
    $clg =  mysqli_real_escape_string($con, $_POST['college']);
    
    if (in_array($ext, array("pdf", "docx", "doc")))
    {
     $filename = rand().' '.$email.'.'.$ext;
     move_uploaded_file($tmp_name, "../resume_files/$filename");
     $sql="update logindetails set collage='$clg' , resume_url='$filename' mail='$login_session'";

        if (!mysqli_query($con,$sql)) {
          $error = "Error: ".mysqli_error($con);
         echo "$error";
     // header("Location: ../internship.php");
            }else{
               $msg = "signup successfully";
               // $description = "";
               // header("Location: ../internship.php");
            }
    }
  
   
  }
}
?>
