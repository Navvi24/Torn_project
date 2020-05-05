<?php
   include('sidebar.php');
   include('connect.php');
   $id = "";
   $pass1 ="";
   $pass2 = "";
   if(isset($_POST['reset']))
   {
     $pass1 =mysqli_real_escape_string($con, $_POST['pass1']);
     //$pass2 = mysqli_real_escape_string($con,$_POST['pass2']);
        

        $sql="UPDATE admin SET password = '$pass1' where username ='$user_check'";
        if(mysqli_query($con,$sql))
        {
          $id = 1010;
        }
        else
        {
          $id = 10100;
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
          <h1>Reset Admin Password</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="mainpage.php">Home</a></li>
            <li class="breadcrumb-item active">Reset Password</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements and condition include below-->
          <?php if ($id == 1010) {?>
            <div class="alert alert-success" role="alert">
              <?php echo "Password sucessfully reset for admin."; ?>
            </div>
          <?php } else if($id == 10100){?>
            <div class="alert alert-danger" role="alert">
              <?php echo "Password is failed to reset"; ?>
            </div>
          <?php } else{}?>
          <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Admin Password Reset Form</h3>
              </div>
              <form class="form-horizontal" method="post" action="">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="pass1" name="pass1" placeholder="Enter password" onkeyup='check();' required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="pass2" name="pass2" onclick="return Validate()" placeholder="Re-type password" onkeyup='check();' required>
                        <br><span id="message" class="invaild-feedback"></span>
                    </div>
                  </div>
                </div>            
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info" onclick="return Validate()" name="reset">Reset</button>
                </div>
                <!-- /.card-footer -->
              </form>
              
                              
 <script type="text/javascript">
                    function Validate() {
                    var password = document.getElementById("pass1").value;
                    var confirmPassword = document.getElementById("pass2").value;
                    if (password != confirmPassword) {
                    alert("Passwords do not match.");
                    return false;
                    }
                    return true;
                    }
        </script>
        <script>
                         var check = function() {
                     if (document.getElementById('pass1').value ==
                     document.getElementById('pass2').value) {
                     document.getElementById('message').style.color = 'green';
                     document.getElementById('message').innerHTML = 'Passwords Match';
                     } else {
                     document.getElementById('message').style.color = 'red';
                     document.getElementById('message').innerHTML = 'Passwords Don’t Match';
                     }
                     }
        </script>    
              
            </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
  <?php
  include('footer.php');
   ?>
