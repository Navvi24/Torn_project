<?php
   include('sidebar.php');
   include("connect.php");

$error = "";
  $msg = "";
  $sql="";
  $arg="";

  $sr       =array();
  $mail     =array();
  $num = 0;

  if(isset($_GET['query']) && !empty($_GET['query']) ){

  $arg = mysqli_real_escape_string($con,$_GET["query"]);

  switch ($_GET['filter']) {
    case "First Name":
        $sql = "SELECT * FROM logindetails WHERE fname LIKE '%$arg%'";
        break;
    case "Last Name":
        $sql = "SELECT * FROM logindetails WHERE lname LIKE '%$arg%'";
        break;
    case "Phone":
        $sql = "SELECT * FROM logindetails WHERE phn LIKE '%$arg%'";
        break;
    case "Email":
        $sql = "SELECT * FROM logindetails WHERE mail LIKE '%$arg%'";
        break;
    case "Institution":
        $sql = "SELECT * FROM logindetails WHERE college LIKE '%$arg%'";
        break;
    default:
        $sql = "SELECT * FROM logindetails";
  }

  $result = mysqli_query($con, $sql);
  if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)){

      $sr[$num]     = $row["sr"];
      $fname[$num]     = $row["fname"];
      $lname[$num]     = $row["lname"];
      $phn[$num]     = $row["phn"];
      $mail[$num]     = $row["mail"];
      $resume_url[$num]     = $row["resume_url"];
      $regdate[$num]     = $row["regdate"];
      $clg[$num]       =$row["college"];
      $num = $num + 1;

    }
  }
}
else {


    $sql = "SELECT sr, fname, lname, phn, mail, college, resume_url, regdate FROM logindetails ORDER BY sr DESC";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0) {

      while ($row = mysqli_fetch_assoc($result)){

        $sr[$num]     = $row["sr"];
        $fname[$num]     = $row["fname"];
        $lname[$num]     = $row["lname"];
        $phn[$num]     = $row["phn"];
        $mail[$num]     = $row["mail"];
        $resume_url[$num]     = $row["resume_url"];
        $regdate[$num]     = $row["regdate"];
        $clg[$num]       =$row["college"];
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
            <h1>Registered Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="mainpage.php">Home</a></li>
              <li class="breadcrumb-item active">Registered Users</li>
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
              placeholder="Search Users" >
          </div>
          <div class="form-group col-md-2">
            <select name="filter" id="inputState" class="form-control">
              <option>First Name</option>
              <option>Last Name</option>
              <option>Phone</option>
              <option>Email</option>
              <option>Institution</option>
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
              <h3 class="card-title">Registered Users</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SR</th>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Institution</th>
                  <th>resume_url</th>
                   <th>Reg. Time</th>
                </tr>
                </thead>
                <tbody>
                <?php
				for($x = 0; $x < $num; $x++) {
                  echo ('

                  <tr>

                    <td>'.$sr[$x].'</td>
                    <td>'.$fname[$x].' '.$lname[$x].'</td>

                    <td>'.$phn[$x].'</td>
                    <td>'.$mail[$x].'</td>
                    <td>'.$clg[$x].'</td>
                    <td><a href="http://www.internstorm.com/resume_files/'.$resume_url[$x].'" target="_blank">'.$resume_url[$x].'</a></td>
                    <td>'.$regdate[$x].'</td>

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
