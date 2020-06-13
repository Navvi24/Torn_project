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

    $sql = "SELECT sr, name, email, sub, msg, attach_url, query_date FROM c_query ORDER BY sr DESC";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0) {

      while ($row = mysqli_fetch_assoc($result)){

        $sr[$num]     = $row["sr"];
        $name[$num]     = $row["name"];
        $email[$num]     = $row["email"];
        $attach_url[$num]     = $row["attach_url"];

        $sub[$num]     = $row["sub"];
        $msg1[$num]     = $row["msg"];

        $query_date[$num]     = $row["query_date"];
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
            <h1>Contact-us Queries</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contact-us Queries</li>
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
              <h3 class="card-title">Contact-us Queries</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>SR</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Sub</th>
                    <th>msg</th>
                    <th>Attachment_url</th>
                    <th>Reg. Time</th>
                    <th>Options</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
  				for($x = 0; $x < $num; $x++) {
                    echo ('

                    <tr>

                      <td>'.$sr[$x].'</td>
                      <td>'.$name[$x].'</td>

                      <td>'.$email[$x].'</td>
                      <td>'.$sub[$x].'</td>
                      <td>'.wordwrap($msg1[$x],50,"<br />\n").'</td>
                      <td>'.$attach_url[$x].'</td>
                      <td>'.$query_date[$x].'</td>
                      <td><a href="emailform.php?mail='.$email[$x].'" class="btn btn-primary"><i class="far fa-envelope"></i></a></td>
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
