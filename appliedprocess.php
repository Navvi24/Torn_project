<?php
include ("inputdata/connect.php");
$app = "";
$log1 = "";
$userapp = "";
$allapp = "";


$userapp = $_GET['applied'];
$log1 = $_GET['login'];
echo $userapp;
echo $log1;

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
echo $app;
print_r($allapp);
$sql2 = "UPDATE logindetails SET applied='$app' WHERE mail='$log1'";
if(mysqli_query($con, $sql2)){
header("location: internship_test.php" );
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

$con->close();    
?>