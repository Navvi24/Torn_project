<?php
   include('sidebar.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Send Mail</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Send Mail</li>
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
          <!-- general form elements -->
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Email Form</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputfirst">To.</label>
                <input type="email" id="to" class="form-control" placeholder="Recipients" name="to" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputlast">Subject</label>
                  <input type="text" id="subject" class="form-control" placeholder="Subject" name="subject" required>
                  <div class="invalid-feedback">Please Enter Lastname.</div>
                </div>
                <div class="form-group">
                  <label for="exampleInputemail">Message</label>
                    <textarea name="message" class="form-control" id="message" cols="30" rows="6"  required></textarea>
                  <div class="invalid-feedback">Please Enter Email.</div>
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-success"><i class="far fa-envelope"></i>  Send</button>
                </div>
                </div>
              </div>

            </form>
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
