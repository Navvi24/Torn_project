<?php
   include('sidebar.php');
   include("connect.php");


$error = "";
  $msg = "";
  $sql="";
  $arg="";
$id = "";
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

    $sql = "SELECT sr, internship_post_time, comp_name, comp_web, internship_pos, total_opening, internship_start_date, stipend_amount, perks FROM posted_internship ORDER BY sr DESC";
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
  if(isset($_GET['ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po']))
  {
   $id = $_GET['ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po'];
   if($id == 1010)
   {
     $msg = "Internship updated sucessfully.";
   }
   else
   {
       $err = "Internship cannot updated sucessfully.";
   }
  }
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Posted Internships Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="mainpage.php">Home</a></li>
              <li class="breadcrumb-item active">Posted Internships</li>
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
                <?php if ($id == 1010) {?>
              <div class="alert alert-success" role="alert">
                <?php echo "Internship sucessfully updated."; ?>
              </div>
            <?php } else if($id == 10100){?>
              <div class="alert alert-danger" role="alert">
                <?php echo "Internship cannot updated"; ?>
              </div>
            <?php } else{}?>
            <?php
              if(isset($_GET['kLCT2Pln5zXEO4leV2QnwcANywVInFPFWMfH3ohT2CQ']))
              {
                  if ($_GET['kLCT2Pln5zXEO4leV2QnwcANywVInFPFWMfH3ohT2CQ'] != 01000) {?>
                    <div class="alert alert-success" role="alert">
                      <?php echo "Record deleted successfully"; ?>
                    </div>
                  <?php } else{?>
                    <div class="alert alert-danger" role="alert">
                      <?php echo "Record cannot deleted successfully"; ?>
                    </div>
                  <?php }
              }
                    ?>
            <div class="card-header">
              <h3 class="card-title">POSTED DETAILS</h3>
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
                     <td>
                    <a href="viewintern.php?id='.$sr[$x].'" class="btn btn-primary btn-xs">View More</a><br>
                    <div class="row"  style="margin-top:20px; width:100px;padding:5px;">
                    <a href="deleteposted.php?id='.$sr[$x].'" class="btn btn-danger" style="margin-right:5px;"><i class="fas fa-trash"></i></a>
                    <a href="edit_posted.php?serial='.$sr[$x].'" class="btn btn-success"><i class="fas fa-edit"></i></a>
                    </div>
                    </td>

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
