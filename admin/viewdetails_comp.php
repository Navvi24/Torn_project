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
  $con->close();
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
                <th>Options</th>
              </tr>
              </thead>
              <tbody>

                  <?php /*
              for($x = 0; $x < $num; $x++) {
                echo ('

                <tr>

                  <td>'.$sr[$x].'</td>
                  <td>'.$comp_name[$x].'</td>
                  <td>'.$i_pos[$x].'</td>
                  <td>
                    <a href="viewdetails_comp.php?id='.$sr[$x].'" class="btn btn-primary btn-xs">Interns Details</a>
                  </td>

                </tr>

              ');
              }
          */  ?>
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
