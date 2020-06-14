<?php
   include('sidebar.php');
   include("connect.php");
   $id = $_GET['id'];
$error = "";
  $msg = "";
  $sql="";
  $arg="";

  $email                    = "";
  $phone                    = "";
  $comp_name                ="";
  $i_pos                    ="";
  $start_date               ="";
  $i_details                ="";
  $total_opening            ="";
  $city                     ="";
  $state                    ="";
  $i_duration_type         ="";
  $i_duration               = "";
  $stipend_amt              ="";
  $stipend_method           = "";

  $status = array();
  $intern_sr = array();
  $asr = array();
  $csr = array();
  $intern_fname = array();
  $intern_lname = array();
  $intern_institute = array();
  $intern_resume = array();
  $intern_mail = array();
  $intern_status = array();
  $num = 0;
  $val = 0;
    $sql = "SELECT * FROM active_internship where sr=$id";
    $result = mysqli_query($con, $sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $email         = $row["email"];
          $phone         = $row["phn"];
          $comp_name     = $row["comp_name"];
          $i_pos         = $row["internship_pos"];
          $start_date    = $row["internship_start_date"];
          $i_details     = $row["internship_detail"];
          $total_opening = $row["total_opening"];
          $city          = $row["internship_city"];
          $state          = $row["state"];
          $i_duration    = $row["duration_no"];
          $i_duration_type = $row["duration_type"];
          $stipend_amt   = $row["stipend_amount"];
          $stipend_method = $row["stipend_method"];
        }
    } else {
        echo "0 results";
    }

$sql2 = "SELECT * from applied where csr = $id";
$result2 = mysqli_query($con, $sql2);
if (mysqli_num_rows($result2) > 0)
{
  while ($row = mysqli_fetch_assoc($result2))
  {
    $asr[$num]  =  $row["sr"];
    $csr[$num]  = $row["csr"];
    $intern_sr[$num]     = $row["internsr"];
    $intern_fname[$num] = $row["internfname"];
    $intern_lname[$num] = $row["internlname"];
    $intern_institute[$num] = $row["internclg"];
    $intern_resume[$num] = $row["internres"];
    $intern_mail[$num] = $row["internmail"];
    $intern_status[$num] = $row["status"];
    $num = $num + 1;
  }
}
else {
  echo "0";
}

?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Interns/Company Details</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="mainpage.php">Home</a></li>
            <li class="breadcrumb-item active">Interns/Company Details</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header bg-info">
            <h3 class="card-title">INTERNS/COMPANY DETAILS</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th style="width:25%">Company Name</th>
                  <td style="width:25%"><?php echo "$comp_name"; ?></td>
                  <th style="width:25%">Email</th>
                  <td style="width:25%"><?php echo "$email"; ?></td>
                </tr>
                <tr>
                <th style="width:25%">Phone</th>
                <td style="width:25%"><?php echo "$phone"; ?></td>
                <th style="width:25%">Start Date</th>
                <td style="width:25%"><?php echo "$start_date"; ?></td>

              </tr>
              <tr>
                <th style="width:25%">Internship Position</th>
                <td style="width:25%"><?php echo "$i_pos"; ?></td>
                <th style="width:25%">Internship Details</th>
                <td style="width:25%"><?php echo "$i_details"; ?></td>
              </tr>
              <tr>
                <th style="width:25%">Openings</th>
                <td style="width:25%"><?php echo "$total_opening"; ?></td>
                <th style="width:25%">Location</th>
                <td style="width:25%"><?php echo "$city".", "."$state"; ?></td>
              </tr>
              <tr>
                <th style="width:25%">Internship Duration</th>
                <td style="width:25%"><?php echo "$i_duration "." $i_duration_type"; ?></td>
                <th style="width:25%">Stipend(₹)</th>
                <td style="width:25%"><?php echo "$stipend_amt"." "."$stipend_method"; ?></td>
              </tr>
            </thead>
            </table>
            <br>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header bg-success">
            <h3 class="card-title">APPLIED INTERNS IN &nbsp;:- &nbsp;<b><?php echo "$comp_name"; ?></b></h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>SR</th>
                <th>Name</th>
                <th>Institute</th>
                <th>Resume</th>
                <th>Email</th>
                <th>Status</th>
                <th>Options</th>
              </tr>
            </thead>
              <tbody>
                  <?php
              for($x = 0; $x < $num; $x++) {
                echo ('
                <tr>
                  <td>'.$intern_sr[$x].'</td>
                  <td>'.$intern_fname[$x].' '.$intern_lname[$x].'</td>
                  <td>'.$intern_institute[$x].'</td>
                  <td><a href="https://www.internstorm.com/resume_files/'.$intern_resume[$x].'" target="_blank">'.$intern_resume[$x].'</a></td>
                  <td>'.$intern_mail[$x].'</td>
                  <td>'.$intern_status[$x].'</td> ');

                  $sql3 = "SELECT status from applied where sr = '$asr[$x]' AND csr = '$csr[$x]'";
                  $result3 = mysqli_query($con, $sql3);
                  if (mysqli_num_rows($result3) > 0)
                  {
                    while ($row = mysqli_fetch_assoc($result3))
                    {
                      $status[$val] = $row["status"];
                      $val = $val + 1;
                    }
                  }
                  else {
                    echo "0";
                  }

                  if($status[$x] == "waiting")
                  {
                  echo('
                      <td>
                        <div class="btn-group" role="group" aria-label="...">
                          <a href="shortlist.php?asr='.$asr[$x].'&csr='.$id.'" class="btn btn-info" onclick="myFunction()">Shortlist</a>&nbsp;&nbsp;
                          <a href="selected.php?asr='.$asr[$x].'&csr='.$id.'" class="btn btn-success" onclick="myFunction()" >Selected</a>&nbsp;&nbsp;
                          <a href="rejected.php?asr='.$asr[$x].'&csr='.$id.'" class="btn btn-danger"onclick="myFunction()" >Rejected</a>&nbsp;&nbsp;
                          </div>
                      </td>
                    </tr>
                    ');
                  }
                  else if($status[$x] == "shortlisted")
                  {
                    echo('
                        <td>
                          <div class="btn-group" role="group" aria-label="...">
                            <a href="selected.php?asr='.$asr[$x].'&csr='.$id.'" class="btn btn-success" onclick="myFunction()" >Selected</a>&nbsp;&nbsp;
                            <a href="rejected.php?asr='.$asr[$x].'&csr='.$id.'" class="btn btn-danger" onclick="myFunction()" >Rejected</a>&nbsp;&nbsp;
                            </div>
                        </td>
                      </tr>
                      ');
                  }
                  else if($status[$x] == "selected")
                  {
                    echo('
                        <td>
                          <div class="btn-group" role="group" aria-label="...">
                            <a href="selected.php?asr='.$asr[$x].'&csr='.$id.'" class="btn btn-success" onclick="myFunction()">Selected</a>&nbsp;&nbsp;
                            </div>
                        </td>
                      </tr>
                      ');
                  }
                  else if($status[$x] == "rejected")
                  {
                    echo('
                        <td>
                          <div class="btn-group" role="group" aria-label="...">
                            <a href="rejected.php?asr='.$asr[$x].'&csr='.$id.'" class="btn btn-danger" onclick="myFunction()" >Rejected</a>&nbsp;&nbsp;
                            </div>
                        </td>
                      </tr>
                      ');
                  }
                  else
                  {
                    echo('
                        <td>
                          <div class="btn-group" role="group" aria-label="...">
                            <a href="shortlist.php?asr='.$asr[$x].'&csr='.$id.'" class="btn btn-info" onclick="myFunction()" >Shortlist</a>&nbsp;&nbsp;
                            <a href="selected.php?asr='.$asr[$x].'&csr='.$id.'" class="btn btn-success" onclick="myFunction()" >Selected</a>&nbsp;&nbsp;
                            <a href="rejected.php?asr='.$asr[$x].'&csr='.$id.'" class="btn btn-danger"onclick="myFunction()" >Rejected</a>&nbsp;&nbsp;
                            </div>
                        </td>
                      </tr>
                      ');
                  }
              }
           ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
  </section>
  <!-- /.content -->
</div>
  <?php
  include('footer.php');
   ?>
   <script>
     var maxAmount = 10;
     function textCounter(textField, showCountField) {
       if (textField.value.length > maxAmount) {
         textField.value = textField.value.substring(0, maxAmount);
       } else {
         showCountField.value = maxAmount - textField.value.length;
       }
    }
    </script>
<script>
function myFunction() {
  a = confirm("confirm to yes")
  if(a==false)
  {
    window.location.href='viewdetails_comp.php';
      };
}
</script>
