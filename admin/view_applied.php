<?php
   include('sidebar.php');
   include("connect.php");
  $id = $_GET['id'];
$error = "";
  $msg = "";
  $sql="";
  $arg="";

  $serial                       ="";
  $intern_fname                    = "";
  $intern_lname                    = "";
  $intern_email                    = "";
  $intern_phone                    = "";
  $intern_resume                    = "";
  $comp_name                    = "";
  $comp_pos                    = "";
  $comp_web                    = "";
  $comp_city                    = "";
  $comp_state                    = "";
  $comp_open                    = "";
  $comp_start                    = "";
  $comp_dur                    = "";
  $comp_dur_type                    = "";
  $comp_stipend_amt                    = "";
  $comp_stipend_type                    = "";
  $comp_perks                    = "";
  $comp_about                    = "";

    $sql = "SELECT * FROM applied where sr=$id";
    $result = mysqli_query($con, $sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $serial        = $row["sr"];
          $intern_fname   = $row["internfname"];
          $intern_lname    = $row["internlname"];
          $intern_email     = $row["internmail"];
          $intern_phone     = $row["internphn"];
          $intern_resume   = $row["internres"];
          $comp_name      = $row["cname"];
          $comp_pos      = $row["cpos"];
          $comp_web   = $row["cweb"];
          $comp_city  = $row["ccity"];
          $comp_state  = $row["cstate"];
          $comp_open  = $row["copen"];
          $comp_start = $row["cstart"];
          $comp_dur  = $row["cdur"];
          $comp_dur_type   = $row["cdurtype"];
          $comp_stipend_amt  = $row["cstipendamt"];
          $comp_stipend_type  = $row["cstipendtype"];
          $comp_perks   = $row["cperks"];
          $comp_about  = $row["cabout"];
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
          <h1>View Applied Internships Details</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="mainpage.php">Home</a></li>
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
                <th style="width:30%">Serial No.</th>
                <td style="width:50%"><?php echo "$serial"; ?></td>
              </tr>
              <tr>
                <th style="width:30%">Intern Name</th>
                <td style="width:50%"><?php echo "$intern_fname"." "."$intern_lname"; ?></td>
              </tr>
              <tr>
                <th style="width:30%">Intern Phone</th>
                <td style="width:50%"><?php echo "$intern_phone"; ?></td>
              </tr>
              <tr>
                <th style="width:30%">Intern Email</th>
                <td style="width:50%"><?php echo "$intern_email"; ?></td>
              </tr>
              <tr>
                <th style="width:30%">Intern Resume</th>
                <td style="width:50%"><a href="https://www.internstorm.com/resume_files/<?php echo "$intern_resume"; ?>" target="_blank"><?php echo "$intern_resume"; ?></a></td>
              </tr>
              <tr>
                <th style="width:30%">Internship Position</th>
                <td style="width:50%"><?php echo "$comp_pos"; ?></td>
              </tr>
              <tr>
                <th style="width:30%">Company Name</th>
                <td style="width:50%"><?php echo "$comp_name"; ?></td>
              </tr>
              <tr>
                <th style="width:30%">Company Website</th>
                <td style="width:50%"><?php echo "$comp_web"; ?></td>
              </tr>
              <tr>
                <th style="width:30%">Internship City</th>
                <td style="width:50%"><?php echo "$comp_city".", "."$comp_state"; ?></td>
              </tr>
              <tr>
                <th style="width:30%">Total Openings</th>
                <td style="width:50%"><?php echo "$comp_open"; ?></td>
              </tr>
              <tr>
                <th style="width:30%">Internship Start Date</th>
                <td style="width:50%"><?php echo "$comp_start"; ?></td>
              </tr>
              <tr>
                <th style="width:30%">Internship Duration</th>
                <td style="width:50%"><?php echo "$comp_dur"." "."$comp_dur_type"; ?></td>
              </tr>
              <tr>
                <th style="width:30%">Stipend</th>
                <td style="width:50%"><?php echo "$comp_stipend_amt"." "."$comp_stipend_type"; ?></td>
              </tr>
              <tr>
                <th style="width:30%">Perks</th>
                <td style="width:50%"><?php echo "$comp_perks"; ?></td>
              </tr>
              <tr>
                <th style="width:30%">About Internship</th>
                <td style="width:50%"><?php echo "$comp_about"; ?></td>
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
