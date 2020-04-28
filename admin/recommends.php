<?php
include('sidebar.php');
include("connect.php");
//$id = $_GET['id'];

$value = 0;
$error = "";
$msg = "";
$sql="";
$arg="";

$sr                       =array();
$post_time                =array();
$comp_name                =array();
$comp_name                =array();
$comp_web                 =array();
$i_pos                    =array();
$total_opening            =array();
$start_date               =array();
$stipend_amt              =array();
$perks                    =array();
$num = 0;


if(isset($_GET['id']) && !empty($_GET['id']) ){
    $arg = mysqli_real_escape_string($con,$_GET["id"]);
$sql = "INSERT INTO rec_internship SELECT * FROM active_internship WHERE SR=$arg";

    if (mysqli_query($con,$sql)) {
      $value = 1;
        $msg= " Recommended successfully";
    } else {
        $value = 2;
        $error =  "Error " . mysqli_error($con)." "."Already Recommmended";
    }
}



 $sql = "SELECT sr, internship_post_time, comp_name, comp_web, internship_pos, total_opening, internship_start_date, stipend_amount, perks FROM rec_internship ORDER BY sr DESC";
 $result = mysqli_query($con, $sql);
 if (mysqli_num_rows($result) > 0) {

   while ($row = mysqli_fetch_assoc($result)){

     $sr[$num]            = $row["sr"];
     $post_time[$num]     = $row["internship_post_time"];
     $comp_name[$num]     = $row["comp_name"];
     $comp_web[$num]      = $row["comp_web"];
     $i_pos[$num]         = $row["internship_pos"];
     $total_opening[$num] = $row["total_opening"];
     $start_date[$num]    = $row["internship_start_date"];
     $stipend_amt[$num]   = $row["stipend_amount"];
     $perks[$num]         = $row["perks"];

     $num = $num + 1;

   }
 }
$con->close();
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Active Internships Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Active Internships</li>
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
            <?php if ($value == 1) {?>
              <div class="alert alert-success" role="alert">
                <?php echo "$msg"; ?>
              </div>
            <?php } else if($value == 2){?>
              <div class="alert alert-danger" role="alert">
                <?php echo "$error"; ?>
              </div>
            <?php } else{}?>
            <div class="card-header">
              <h3 class="card-title">ACTIVE DETAILS</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SR</th>
                  <th>Post Time</th>
                  <th>Company Name</th>
                  <th>Website</th>
                  <th>Internship Profile</th>
                  <th>Openings</th>
                  <th>Start Date</th>
                  <th>Stipend</th>
                  <th>Perks</th>
                  <th>Options</th>
                </tr>
                </thead>
                <tbody>

                    <?php
								for($x = 0; $x < $num; $x++) {
                  echo ('

                  <tr>

                    <td>'.$sr[$x].'</td>
                    <td>'.$post_time[$x].'</td>
                    <td>'.$comp_name[$x].'</td>
                    <td>'.$comp_web[$x].'</td>
                    <td>'.$i_pos[$x].'</td>
                    <td>'.$total_opening[$x].'</td>
                    <td>'.$start_date[$x].'</td>
                    <td>'.$stipend_amt[$x].'</td>
                    <td>'.$perks[$x].'</td>
                    <td><a href="viewintern_active.php?id='.$sr[$x].'" class="btn btn-primary btn-xs">View More</a></td>

                  </tr>

                ');
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
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
  include('footer.php');
   ?>
