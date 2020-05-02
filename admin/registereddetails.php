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

    $sql = "SELECT sr, fname, lname, phn, mail, resume_url, regdate FROM logindetails ORDER BY sr DESC";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0) {

      while ($row = mysqli_fetch_assoc($result)){

        $sr[$num]     = $row["sr"];
        $fname[$num]     = $row["fname"];
        $lanme[$num]     = $row["lname"];
        $phn[$num]     = $row["phn"];
        $mail[$num]     = $row["mail"];
        $resume_url[$num]     = $row["resume_url"];
        $regdate[$num]     = $row["regdate"];
        $num = $num + 1;

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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Registered Users</li>
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
                    <td>'.$fname[$x].'</td>

                    <td>'.$phn[$x].'</td>
                    <td>'.$mail[$x].'</td>
                    <td><a href="http://localhost/Torn_project/contactus_files/'.$resume_url[$x].'">'.$resume_url[$x].'</a></td>
                    <td>'.$regdate[$x].'</td>

                  </tr>

                ');
								}
							?>
              <a href="#"></a>
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
