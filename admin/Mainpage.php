<?php
   include('sidebar.php');
   include('connect.php');
   include('countdata.php');
   $totalposted = countposted( $con );
  $totalactive = countactive( $con );
  $totalrecom = countrecom( $con );
  $totalusers = countusers( $con );
  $totalsub = countsub( $con );
  $totalquery = countquery( $con );
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-6 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?php echo $totalposted; ?></h3>
              <p>Total Posted Internships</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-done"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-6 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?php echo $totalactive; ?></h3>

              <p>Total Active Internships</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-done-all"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?php echo $totalrecom; ?></h3>

              <p>Total Recommended Internships</p>
            </div>
            <div class="icon">
              <i class="ion ion-information-circled"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-6 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?php echo $totalusers; ?></h3>

              <p>Total Registered Users</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-people"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-6">
          <!-- small box -->
          <div class="small-box bg-secondary">
            <div class="inner">
              <h3><?php echo $totalsub; ?></h3>
              <p>Total Subscriptions</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-send"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-6 col-6">
          <!-- small box -->
          <div class="small-box bg-dark">
            <div class="inner">
              <h3><?php echo $totalquery; ?></h3>

              <p>Total Queries Received</p>
            </div>
            <div class="icon">
              <i class="ion ion-email-unread"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-6">
          <!-- small box -->
          <div class="small-box bg-light">
            <div class="inner">
              <h3>0</h3>
              <p>Total Interns Applied</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-bookmarks"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>




    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
  <?php
  include('footer.php');
   ?>
