<?php
   include('sidebar.php');
   include("connect.php");
$error = "";
  $msg = "";
  $sql="";
  $arg="";

  $sr  =array();
  $intern_fname  =array();
  $intern_lname  =array();
  $intern_clg                        = "";
  $intern_clg =array();
  $intern_phone =array();
  $internship_pos =array();
  $comp_name =array();
  $comp_open =array();
  $num = 0;

    if(isset($_GET['query']) && !empty($_GET['query']) ){

    $arg = mysqli_real_escape_string($con,$_GET["query"]);

    switch ($_GET['filter']) {
      case "First Name":
          $sql = "SELECT * FROM applied WHERE internfname LIKE '%$arg%'";
          break;
      case "Intern College":
          $sql = "SELECT * FROM applied WHERE internclg LIKE '%$arg%'";
          break;
      case "Intern Phone":
          $sql = "SELECT * FROM applied WHERE internphn LIKE '%$arg%'";
          break;
      case "InternShip Profile":
          $sql = "SELECT * FROM applied WHERE cpos LIKE '%$arg%'";
          break;
      case "Company Name":
          $sql = "SELECT * FROM applied WHERE cname LIKE '%$arg%'";
          break;
      default:
          $sql = "SELECT * FROM applied";
    }

    // $msg = $sql;
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {

      while ($row = mysqli_fetch_assoc($result)){

        $sr[$num]     = $row["sr"];
        $intern_fname[$num] = $row["internfname"];
        $intern_lname[$num] = $row["internlname"];
        $intern_clg[$num] = $row["internclg"];
        $intern_phone[$num] = $row["internphn"];
        $internship_pos[$num] = $row["cpos"];
        $comp_name[$num] = $row["cname"];
        $comp_open[$num] = $row["copen"];
        $num = $num + 1;

      }
    }
  }

else{
    $sql = "SELECT sr, internfname, internlname, internphn, internclg, cpos, cname, copen FROM applied ORDER BY sr DESC";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {

      while ($row = mysqli_fetch_assoc($result)){

        $sr[$num]     = $row["sr"];
        $intern_fname[$num] = $row["internfname"];
        $intern_lname[$num] = $row["internlname"];
        $intern_clg[$num] = $row["internclg"];
        $intern_phone[$num] = $row["internphn"];
        $internship_pos[$num] = $row["cpos"];
        $comp_name[$num] = $row["cname"];
        $comp_open[$num] = $row["copen"];
        $num = $num + 1;

      }
    }
}
  $con->close();
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Interns/Students Applied</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="mainpage.php">Home</a></li>
              <li class="breadcrumb-item active">Interns/Students</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form class="pt-3 pb-2 mb-3" method="get">
          <div class="form-row">
            <div class="form-group col-md-9">
              <input value="<?php echo($arg);?>" name="query" type="text" class="form-control" id="inputAddress"
                placeholder="Search Internships" >
            </div>
            <div class="form-group col-md-2">
              <select name="filter" id="inputState" class="form-control">
                <option>First Name</option>
                <option>Intern College</option>
                <option>Intern Phone</option>
                <option>InternShip Profile</option>
                <option>Company Name</option>
              </select>
            </div>
            <div class="form-group col-md-1">
              <button type="submit" class="btn btn-primary btn-lg py-2">Search</button>
            </div>
          </div>
        </form>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">INTERNS/STUDENTS DETAILS</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SR</th>
                  <th>Intern Name</th>
                  <th>Intern Institute</th>
                  <th>Intern Phone</th>
                  <th>Internship Profile</th>
                  <th>Company Name</th>
                  <th>No. of openings</th>
                  <th>Options</th>
                </tr>
                </thead>
                <tbody>

                    <?php
								for($x = 0; $x < $num; $x++) {
                  echo ('

                  <tr>
                    <td>'.$sr[$x].'</td>
                    <td>'.$intern_fname[$x].' '.$intern_lname[$x].'</td>
                    <td>'.$intern_clg[$x].'</td>
                    <td>'.$intern_phone[$x].'</td>
                    <td>'.$internship_pos[$x].'</td>
                    <td>'.$comp_name[$x].'</td>
                    <td>'.$comp_open[$x].'</td>
                    <td>
                    <a href="view_applied.php?id='.$sr[$x].'" class="btn btn-primary btn-xs">View More</a>
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
