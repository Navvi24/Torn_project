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
        $internsr = $row['sr'];
        $internfname = $row['fname'];
        $internlname = $row['lname'];
        $internphn = $row['phn'];
        $internmail = $row['mail'];
        $internres = $row['resume_url'];
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
        $csr = $row['SR'];
        $cname= $row['comp_name'];
        $cpos =$row['internship_pos'];
        $cweb=$row['comp_web'];
        $ccity =$row['internship_city'];
        $cstate=$row['state'];
        $copen=$row['total_opening'];
        $cstart=$row['internship_start_date'];
        $cdur =$row['duration_no'];
        $cdurtype= $row['duration_type'];
        $cstipendamt =$row['stipend_amount'];
        $cstipendtype = $row['stipend_method'];
        $cperks =$row['perks'];
        $cabout=$row['about_internship'];
        
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