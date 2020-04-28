<?php
   include('sidebar.php');
   include("connect.php");
   $id = $_GET['id']; 
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
  //$i_duration               = "";
  $i_description            ="";
  $stipend_amt              ="";
  $stipend_method           = "";
  $perks                    ="";

    $sql = "SELECT * FROM active_internship where sr=$id";
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
          $i_description = $row["about_internship"];
          $stipend_amt   = $row["stipend_amount"];
          $stipend_method = $row["stipend_method"];
          $perks         = $row["perks"];
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
          <h1>View Active Internships Details</h1>
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
            <h3 class="card-title">VIEW ACTIVE INTERNSHIP DETAILS</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th style="width:30%">Sr No.</th>
                <td style="width:50%"><?php echo "$serial"; ?></td>
              </tr>
              <tr>
                <th style="width:30%">Post Time</th>
                <td style="width:50%"><?php echo "$post_time"; ?></td>
              </tr>
              <tr>
                <th style="width:30%">Name</th>
                <td style="width:50%"><?php echo "$fname"." "."$lname"; ?></td>
              </tr>
              <tr>
                <th style="width:30%">Email</th>
                <td style="width:50%"><?php echo "$email"; ?></td>
              </tr>
              <tr>
                <th style="width:30%">Phone</th>
                <td style="width:50%"><?php echo "$phone"; ?></td>
              </tr>
              <tr>
                <th style="width:30%">Company Name</th>
                <td style="width:50%"><?php echo "$comp_name"; ?></td>
              </tr>
              <tr>
                <th style="width:30%">About Company</th>
                <td style="width:50%"><?php echo "$about_comp"; ?></td>
              </tr>
              <tr>
                <th style="width:30%">Company Website</th>
                <td style="width:50%"><?php echo "$comp_web"; ?></td>
              </tr>
              <tr>
                <th style="width:30%">Internship Position</th>
                <td style="width:50%"><?php echo "$i_pos"; ?></td>
              </tr>
              <tr>
                <th style="width:30%">Internship Details</th>
                <td style="width:50%"><?php echo "$i_details"; ?></td>
              </tr>
              <tr>
                <th style="width:30%">Location</th>
                <td style="width:50%"><?php echo "$city".", "."$state"; ?></td>
              </tr>
              <tr>
                <th style="width:30%">No. of Openings</th>
                <td style="width:50%"><?php echo "$total_opening"; ?></td>
              </tr>
              <tr>
                <th style="width:30%">Start Date</th>
                <td style="width:50%"><?php echo "$start_date"; ?></td>
              </tr>
              <tr>
                <th style="width:30%">Internship Duration</th>
                <td style="width:50%"><?php echo " "." $i_duration_type"; ?></td>
              </tr>
              <tr>
                <th style="width:30%">About Internship</th>
                <td style="width:50%"><?php echo "$i_description"; ?></td>
              </tr>
              <tr>
                <th style="width:30%">Stipend(₹)</th>
                <td style="width:50%"><?php echo "$stipend_amt"." "."$stipend_method"; ?></td>
              </tr>
              <tr>
                <th style="width:30%">Perks</th>
                <td style="width:50%"><?php echo "$perks"; ?></td>
              </tr>

            </thead>
            </table>
            <br>
            <a href="recommends.php?id=<?php echo "$serial"; ?>" class="btn btn-primary btn-block btn-flat">Click here to mark as Recommend</a>
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
