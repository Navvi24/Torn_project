<?php
   include('sidebar.php');
   include("connect.php");
  /* $id = $_GET['id'];
$error = "";
  $msg = "";
  $sql="";
  $arg="";

  $serial                       ="";
  $post_time                ="";
  $fname                    = "";
  $lname                    = "";
  $email                    = "";
  $phone                    = "";
  $comp_name                ="";
  $about_comp               ="";
  $comp_web                 ="";
  $i_pos                    ="";
  $i_details                ="";
  $city                     ="";
  $state                    ="";
  $total_opening            ="";
  $start_date               ="";
  $i_duration_type         ="";
  $i_duration               = "";
  $i_description            ="";
  $stipend_amt              ="";
  $stipend_method           = "";
  $perks                    ="";

    $sql = "SELECT * FROM posted_internship where sr=$id";
    $result = mysqli_query($con, $sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $serial        = $row["SR"];
          $post_time     = $row["internship_post_time"];
          $fname         = $row["fname"];
          $lname         = $row["lname"];
          $email         = $row["email"];
          $phone         = $row["phn"];
          $comp_name     = $row["comp_name"];
          $about_comp    = $row["comp_about"];
          $comp_web      = $row["comp_web"];
          $i_pos         = $row["internship_pos"];
          $i_details     = $row["internship_detail"];
          $city          = $row["internship_city"];
          $state          = $row["state"];
          $total_opening = $row["total_opening"];
          $start_date    = $row["internship_start_date"];
          $i_duration_type = $row["duration_type"];
          $i_duration     =$row["duration_no"];
          $i_description = $row["about_internship"];
          $stipend_amt   = $row["stipend_amount"];
          $stipend_method = $row["stipend_method"];
          $perks         = $row["perks"];
        }
    } else {
        echo "0 results";
    }
  $con->close();*/
?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>View Applied Internships Details</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">View More</li>
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
          <div class="card-header">
            <h3 class="card-title">VIEW APPLIED INTERNSHIP DETAILS</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th style="width:30%">Intern sr no.</th>
                <td style="width:50%"></td>
              </tr>
              <tr>
                <th style="width:30%">Company sr no.</th>
                <td style="width:50%"></td>
              </tr>
              <tr>
                <th style="width:30%">Intern Name</th>
                <td style="width:50%"></td>
              </tr>
              <tr>
                <th style="width:30%">Intern Phone</th>
                <td style="width:50%"></td>
              </tr>
              <tr>
                <th style="width:30%">Intern Email</th>
                <td style="width:50%"></td>
              </tr>
              <tr>
                <th style="width:30%">Intern Resume</th>
                <td style="width:50%"></td>
              </tr>
              <tr>
                <th style="width:30%">Internship Position</th>
                <td style="width:50%"></td>
              </tr>
              <tr>
                <th style="width:30%">Company Name</th>
                <td style="width:50%"></td>
              </tr>
              <tr>
                <th style="width:30%">Company Website</th>
                <td style="width:50%"></td>
              </tr>
              <tr>
                <th style="width:30%">Internship City</th>
                <td style="width:50%"></td>
              </tr>
              <tr>
                <th style="width:30%">Total Openings</th>
                <td style="width:50%"></td>
              </tr>
              <tr>
                <th style="width:30%">Internship Start Date</th>
                <td style="width:50%"></td>
              </tr>
              <tr>
                <th style="width:30%">Internship Duration</th>
                <td style="width:50%"></td>
              </tr>
              <tr>
                <th style="width:30%">Stipend</th>
                <td style="width:50%"></td>
              </tr>
              <tr>
                <th style="width:30%">Perks</th>
                <td style="width:50%"></td>
              </tr>
              <tr>
                <th style="width:30%">About Internship</th>
                <td style="width:50%"></td>
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
