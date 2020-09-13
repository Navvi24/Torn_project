<?php
   include('sidebar.php');
$msg="";
$err="";
$id="";
if(isset($_GET['ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po']))
{
$id = $_GET['ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po'];
if($id == 1010)
{
  $msg = "Internship added sucessfully.";
}
else
{
    $err = "Internship cannot added sucessfully.";
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
          <h1>Add Internship Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="mainpage.php">Home</a></li>
            <li class="breadcrumb-item active">Add Internship</li>
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
          <?php if ($id == 1010) {?>
            <div class="alert alert-success" role="alert">
              <?php echo "Internship sucessfully added in posted internship."; ?>
            </div>
          <?php } else if($id == 10100){?>
            <div class="alert alert-danger" role="alert">
              <?php echo "Internship cannot added sucessfully"; ?>
            </div>
          <?php } else{}?>
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Active Internship Form</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action="post_d.php">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputfirst">First Name</label>
                  <input type="text" id="fullname" class="form-control" placeholder="Enter your First Name" name="fname" required>
                  <div class="invalid-feedback">Please Enter firstname.</div>
                </div>
                <div class="form-group">
                  <label for="exampleInputlast">Last Name</label>
                  <input type="text" id="fullname" class="form-control" placeholder="Enter your Last Name" name="lname" required>
                  <div class="invalid-feedback">Please Enter Lastname.</div>
                </div>
                <div class="form-group">
                  <label for="exampleInputemail">Email</label>
                  <input type="email" id="fullname" class="form-control" placeholder="Enter your email" name="email" required>
                  <div class="invalid-feedback">Please Enter Email.</div>
                </div>
                <div class="form-group">
                  <label for="exampleInputphone">Phone</label>
                  <input type="number" id="nmsg" class="form-control" maxlength="10" placeholder="Enter your Phone number" name="phn" onKeyDown="textCounter(this.form.nmsg,this.form.countDisplay);" onKeyUp="textCounter(this.form.nmsg,this.form.countDisplay);" required>
                  <div class="invalid-feedback">Please Enter Phone no.</div>
                </div>
                <div class="form-group">
                  <label for="exampleInputcompname">Company Name</label>
                  <input type="text" id="company_name" class="form-control" placeholder="Enter your Company Name" name="comp_name" required>
                  <div class="invalid-feedback">Please Enter Company Name.</div>
                </div>
                <div class="form-group">
                  <label for="exampleInputaboutcomp">About Company</label>
                  <textarea name="comp_about" class="form-control" id="about_company" cols="30" rows="6"  required></textarea>
                  <div class="invalid-feedback">Please Enter Company details.</div>
                </div>
                <div class="form-group">
                  <label for="exampleInputcompweb">Company Website</label><span> (Optional)</span>
                  <input type="url" id="company_website" class="form-control" placeholder="Example : https://www.internstorm.com" name="comp_web">
                </div>
                <div class="form-group">
                  <label for="exampleInput">Internship Type</label>
                  <input type="text" id="internship_detail" class="form-control" placeholder="Example : Campus Ambassador, Content Writing, Web Development, Digital Marketing etc." name="internship_pos" required>
                  <div class="invalid-feedback">Please enter internship type.</div>
                </div>
                <div class="form-group">
                  <label for="exampleInput">Internship Details</label>
                  <div class="form-check">
                        <input class="form-check-input" type="radio" name="internship_detail" value="Regular" required checked>
                        <label class="form-check-label">Regular (In-office/On-field)</label>
                  </div>
                  <div class="form-check">
                        <input class="form-check-input" type="radio" name="internship_detail" value="Work from home">
                        <label class="form-check-label">Work from home</label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="internship_city">City</label>
                  <input type="text" id="internship_city" class="form-control" placeholder="Example : Mumbai, Pune, Delhi etc." name="internship_city" required>
                  <div class="invalid-feedback">Please enter internship city.</div>
                </div>
                <div class="form-group">
                  <label for="internship_state">State</label>
                  <select name="state" id="state" class="form-control" required>
                  <option label="Choose State" selected>Choose State</option>
                  <option value="Andhra Pradesh">Andhra Pradesh</option>
                  <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                  <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                  <option value="Assam">Assam</option>
                  <option value="Bihar">Bihar</option>
                  <option value="Chandigarh">Chandigarh</option>
                  <option value="Chhattisgarh">Chhattisgarh</option>
                  <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                  <option value="Daman and Diu">Daman and Diu</option>
                  <option value="Delhi">Delhi</option>
                  <option value="Lakshadweep">Lakshadweep</option>
                  <option value="Puducherry">Puducherry</option>
                  <option value="Goa">Goa</option>
                  <option value="Gujarat">Gujarat</option>
                  <option value="Haryana">Haryana</option>
                  <option value="Himachal Pradesh">Himachal Pradesh</option>
                  <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                  <option value="Jharkhand">Jharkhand</option>
                  <option value="Karnataka">Karnataka</option>
                  <option value="Kerala">Kerala</option>
                  <option value="Madhya Pradesh">Madhya Pradesh</option>
                  <option value="Maharashtra">Maharashtra</option>
                  <option value="Manipur">Manipur</option>
                  <option value="Meghalaya">Meghalaya</option>
                  <option value="Mizoram">Mizoram</option>
                  <option value="Nagaland">Nagaland</option>
                  <option value="Odisha">Odisha</option>
                  <option value="Punjab">Punjab</option>
                  <option value="Rajasthan">Rajasthan</option>
                  <option value="Sikkim">Sikkim</option>
                  <option value="Tamil Nadu">Tamil Nadu</option>
                  <option value="Telangana">Telangana</option>
                  <option value="Tripura">Tripura</option>
                  <option value="Uttar Pradesh">Uttar Pradesh</option>
                  <option value="Uttarakhand">Uttarakhand</option>
                  <option value="West Bengal">West Bengal</option>
                  </select>
                  <div class="invalid-feedback">Please enter internship state.</div>
                </div>
                <div class="form-group">
                  <label for="total_opening">Number of openings</label>
                  <input type="number" id="total_opening" class="form-control" placeholder="Example : 10 " name="total_opening" required>
                  <div class="invalid-feedback">Please enter no. of openings.</div>
                </div>
                <div class="form-group">
                  <label for="internship_start_date">Internship Start Date</label>
                    <input class="form-control" id="date" name="internship_start_date" placeholder="MM/DD/YYYY" type="date"/>
                </div>
                <div class="form-group">
                  <label for="internship_duration">Internship Duration</label>
                  <div class="col-sm-12 row">
                    <div class="col-sm-6">
                      <select name="duration_number" class="form-control" required>
                        <option label="Choose Duration" selected>Choose Duration</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                      </select>
                    </div>
                    <div class="col-sm-6">
                      <select id="durations" name="duration_type" class="form-control" required>
                        <option value="months">Months</option>
                        <option value="weeks">Weeks</option>
                     </select>
                     <div class="invalid-feedback">Please choose duration.</div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="about_internship">Internship Description</label>
                  <textarea name="about_internship" class="form-control" id="about_internship" cols="30" rows="6" required></textarea>
                  <div class="invalid-feedback">
                    Please enter internship details.
                  </div>
                </div>
                <br>
                <h3 class="font-weight-bold">Stipend And Perks</h3>
                <br>
                <div class="form-group">
                  <label for="stipend_amount">Stipend(₹)</label><span>(if internship is unpaid or performance based so do not input any data in field)</span>
                  <div class="col-sm-12 row">
                    <div class="col-sm-6">
                      <input type="number" id="total_opening" class="form-control" placeholder="Example : ₹5000 " name="stipend_amount">
                      <div class="invalid-feedback">
                        Please enter stipend amount.
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <select id="durations" name="stipend_method" class="form-control">
                        <option value="/Month">Month</option>
                        <option value="/week">week</option>
                        <option value="lump-sum">lump-sum</option>
                        <option value="No-Stipend">No-Stipend</option>
                        <option value="Performance Based">Performance Based</option>
                     </select>
                     <div class="invalid-feedback">Please choose duration.</div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <label for="perks">Perks</label>
                    <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="Certificate" name="perks[]">
                          <label class="form-check-label">Certificate</label>
                    </div>
                    <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="Letter of recommendation" name="perks[]">
                          <label class="form-check-label">Letter of recommendation</label>
                    </div>
                    <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="Flexible Work hours" name="perks[]">
                          <label class="form-check-label">Flexible Work hours</label>
                    </div>
                    <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="5 days a week" name="perks[]">
                          <label class="form-check-label">5 days a week</label>
                    </div>
                    <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="Informal dress code" name="perks[]">
                          <label class="form-check-label">Informal dress code</label>
                    </div>
                    <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="Free Snacks and beverages" name="perks[]">
                          <label class="form-check-label">Free Snacks and beverages</label>
                    </div>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary" name="post_sub">Submit</button>
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
