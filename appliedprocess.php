<?php
include ("inputdata/connect.php");
$app = "";
$log1 = "";
$userapp = "";
$allapp = "";

$internsr="";
$internfname="";
$internlname="";
$internphn ="";
$internmail="";
$internres = "";
$csr = "";
$cname= "";
$cpos ="";
$cweb="";
$ccity ="";
$cstate="";
$copen="";
$cstart="";
$cdur ="";
$cdurtype= "";
$cstipendamt ="";
$cstipendtype = "";
$cperks =array();
$cabout="";


$userapp = $_GET['applied'];
$log1 = $_GET['login'];
//echo $userapp;
///echo $log1;

$sql = "SELECT applied,fname FROM logindetails WHERE mail='$log1'";
$result = $con->query($sql);

if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) 
    {
        $app = $row["applied"];
        $allapp = explode(";",$app);
    }
} 
else 
{
    echo "0 results";
}
$app=$app.";".$userapp;
$sql2 = "UPDATE logindetails SET applied='$app' WHERE mail='$log1'";
if(mysqli_query($con, $sql2)){
//header("location: internships.php" );
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


$sql3 = "SELECT sr, fname, lname, phn, mail, resume_url FROM logindetails WHERE mail='$log1'";
$result3 = $con->query($sql3);
if ($result3->num_rows > 0) 
{
    while($row = $result3->fetch_assoc()) 
    {
        $internsr = mysqli_real_escape_string($con,$row['sr']);
        $internfname = mysqli_real_escape_string($con,$row['fname']);
        $internlname = mysqli_real_escape_string($con,$row['lname']);
        $internphn = mysqli_real_escape_string($con,$row['phn']);
        $internmail = mysqli_real_escape_string($con,$row['mail']);
        $internres = mysqli_real_escape_string($con,$row['resume_url']);
    }
}
else{
    echo "login not fetch";
}


$sql4 = "SELECT * from active_internship WHERE SR='$userapp'";
$result4 = $con->query($sql4);
if ($result4->num_rows > 0) 
{
    while($row = $result4->fetch_assoc()) 
    {
        $csr = mysqli_real_escape_string($con,$row['SR']);
        $cname=mysqli_real_escape_string($con, $row['comp_name']);
        $cpos =mysqli_real_escape_string($con,$row['internship_pos']);
        $cweb=mysqli_real_escape_string($con,$row['comp_web']);
        $ccity =mysqli_real_escape_string($con,$row['internship_city']);
        $cstate=mysqli_real_escape_string($con,$row['state']);
        $copen=mysqli_real_escape_string($con,$row['total_opening']);
        $cstart=mysqli_real_escape_string($con,$row['internship_start_date']);
        $cdur =mysqli_real_escape_string($con,$row['duration_no']);
        $cdurtype= mysqli_real_escape_string($con,$row['duration_type']);
        $cstipendamt =mysqli_real_escape_string($con,$row['stipend_amount']);
        $cstipendtype = mysqli_real_escape_string($con,$row['stipend_method']);
        $cperks =mysqli_real_escape_string($con,$row['perks']);
        $cabout=mysqli_real_escape_string($con,$row['about_internship']);
        
   }
}
else{
    echo " compnay not fetch";
}


$sql5 = "INSERT INTO applied (internsr, internfname, internlname, internphn, internmail, internres, csr, cname, cpos, cweb, ccity, cstate, copen, cstart, cdur, cdurtype, cstipendamt, cstipendtype, cperks, cabout) VALUES ('$internsr','$internfname','$internlname','$internphn','$internmail','$internres','$csr','$cname','$cpos','$cweb','$ccity','$cstate','$copen','$cstart','$cdur','$cdurtype','$cstipendamt','$cstipendtype','$cperks','$cabout')";
if (!mysqli_query($con,$sql5))
         {
            $error = "Error: ".mysqli_error($con);
            echo $error;
          header("Location: internships.php?ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po=10100");
          }
        else
        {
                echo "sucess:";
             header("Location: internships.php?ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po=1010");
        }

$con->close();    
?>