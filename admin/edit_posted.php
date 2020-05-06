<?php
 include('sidebar.php');
 include('connect.php');
 if(isset($_GET['serial']))
 {
 $serial= $_GET['serial'];
$msg="";
$err="";
$id="";
$fname                    = "";
$lname                    = "";
$email                    = "";
$phone                    = "";
$comp_name                ="";
$about_comp               ="";
$comp_web                 ="";
$i_pos                    ="";
$i_details                ="";
$city                     ="";
$state                    ="";
$total_opening            ="";
$start_date               ="";
$i_duration_type         ="";
$i_duration               = "";
$i_description            ="";
$stipend_amt              ="";
$stipend_method           = "";
$perks                    ="";
    $sql = "SELECT * from posted_internship where SR = $serial";
    $result = mysqli_query($con, $sql);
    if ($result->num_rows > 0)
    {
        // output data of each row
        while($row = $result->fetch_assoc())
        {
          $fname         = $row["fname"];
          $lname         = $row["lname"];
          $email         = $row["email"];
          $phone         = $row["phn"];
          $comp_name     = $row["comp_name"];
          $about_comp    = $row["comp_about"];
          $comp_web      = $row["comp_web"];
          $i_pos         = $row["internship_pos"];
          $i_details     = $row["internship_detail"];
          $city          = $row["internship_city"];
          $state          = $row["state"];
          $total_opening = $row["total_opening"];
          $start_date    = $row["internship_start_date"];
          $i_duration_type = $row["duration_type"];
          $i_duration     =$row["duration_no"];
          $i_description = $row["about_internship"];
          $stipend_amt   = $row["stipend_amount"];
          $stipend_method = $row["stipend_method"];
          $perks         = explode(",",$row["perks"]);
        }
    }
    else
    {
        echo "0 results";
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
          <h1>Edited Internship Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="mainpage.php">Home</a></li>
            <li class="breadcrumb-item active">Edit Internship</li>
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
          <div class="card card-dark">
            <div class="card-header">
              <h3 class="card-title">Edit Internship Form</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action="edit_process.php">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputfirst">Serial no.</label>
                  <input type="number" id="fullname" class="form-control" value="<?php echo $serial; ?>" name="sno"  readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputfirst">First Name</label>
                  <input type="text" id="fullname" class="form-control" placeholder="Enter your First Name" value="<?php echo $fname; ?>" name="fname">
                  <div class="invalid-feedback">Please Enter firstname.</div>
                </div>
                <div class="form-group">
                  <label for="exampleInputlast">Last Name</label>
                  <input type="text" id="fullname" class="form-control" placeholder="Enter your Last Name" value="<?php echo $lname; ?>" name="lname">
                  <div class="invalid-feedback">Please Enter Lastname.</div>
                </div>
                <div class="form-group">
                  <label for="exampleInputemail">Email</label>
                  <input type="email" id="fullname" class="form-control" placeholder="Enter your email" value="<?php echo $email; ?>" name="email">
                  <div class="invalid-feedback">Please Enter Email.</div>
                </div>
                <div class="form-group">
                  <label for="exampleInputphone">Phone</label>
                  <input type="number" id="nmsg" class="form-control" maxlength="10" placeholder="Enter your Phone number" value="<?php echo $phone; ?>" name="phn" onKeyDown="textCounter(this.form.nmsg,this.form.countDisplay);" onKeyUp="textCounter(this.form.nmsg,this.form.countDisplay);">
                  <div class="invalid-feedback">Please Enter Phone no.</div>
                </div>
                <div class="form-group">
                  <label for="exampleInputcompname">Company Name</label>
                  <input type="text" id="company_name" class="form-control" placeholder="Enter your Company Name" value="<?php echo $comp_name; ?>" name="comp_name">
                  <div class="invalid-feedback">Please Enter Company Name.</div>
                </div>
                <div class="form-group">
                  <label for="exampleInputaboutcomp">About Company</label>
                  <textarea name="comp_about" class="form-control" id="about_company" cols="30" rows="6"><?php echo $about_comp; ?></textarea>
                  <div class="invalid-feedback">Please Enter Company details.</div>
                </div>
                <div class="form-group">
                  <label for="exampleInputcompweb">Company Website</label><span> (Optional)</span>
                  <input type="url" id="company_website" class="form-control" placeholder="Example : https://www.internstorm.com" value="<?php echo $comp_web; ?>" name="comp_web">
                </div>
                <div class="form-group">
                  <label for="exampleInput">Internship Type</label>
                  <input type="text" id="internship_detail" class="form-control" placeholder="Example : Campus Ambassador, Content Writing, Web Development, Digital Marketing etc." value="<?php echo $i_pos; ?>" name="internship_pos">
                  <div class="invalid-feedback">Please enter internship type.</div>
                </div>
                <div class="form-group">
                  <label for="exampleInput">Internship Details</label>
                  <div class="form-check">
                        <input class="form-check-input" type="radio" name="internship_detail" value="Regular" <?php echo ($i_details == 'Regular') ? "checked" : "";?>>
                        <label class="form-check-label">Regular (In-office/On-field)</label>
                  </div>
                  <div class="form-check">
                        <input class="form-check-input" type="radio" name="internship_detail" value="Work from home" <?php echo ($i_details == 'Work from home') ? "checked" : "";?>>
                        <label class="form-check-label">Work from home</label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="internship_city">City</label>
                  <input type="text" id="internship_city" class="form-control" placeholder="Example : Mumbai, Pune, Delhi etc." name="internship_city" value="<?php echo $city; ?>">
                  <div class="invalid-feedback">Please enter internship city.</div>
                </div>
                <div class="form-group">
                  <label for="internship_state">State</label>
                  <select name="state" id="state" class="form-control">
                  <option label="Choose State">Choose State</option>
                  <option value="Andhra Pradesh" <?php echo ($state == 'Andhra Pradesh') ? "selected" : "";?>>Andhra Pradesh</option>
                  <option value="Andaman and Nicobar Islands" <?php echo ($state == 'Andaman and Nicobar Islands') ? "selected" : "";?>>Andaman and Nicobar Islands</option>
                  <option value="Arunachal Pradesh" <?php echo ($state == 'Arunachal Pradesh') ? "selected" : "";?>>Arunachal Pradesh</option>
                  <option value="Assam" <?php echo ($state == 'Assam') ? "selected" : "";?>>Assam</option>
                  <option value="Bihar" <?php echo ($state == 'Bihar') ? "selected" : "";?>>Bihar</option>
                  <option value="Chandigarh" <?php echo ($state == 'Chandigarh') ? "selected" : "";?>>Chandigarh</option>
                  <option value="Chhattisgarh" <?php echo ($state == 'Chhattisgarh') ? "selected" : "";?>>Chhattisgarh</option>
                  <option value="Dadar and Nagar Haveli" <?php echo ($state == 'Dadar and Nagar Haveli') ? "selected" : "";?>>Dadar and Nagar Haveli</option>
                  <option value="Daman and Diu" <?php echo ($state == 'Daman and Diu') ? "selected" : "";?>>Daman and Diu</option>
                  <option value="Delhi" <?php echo ($state == 'Delhi') ? "selected" : "";?>>Delhi</option>
                  <option value="Lakshadweep" <?php echo ($state == 'Lakshadweep') ? "selected" : "";?>>Lakshadweep</option>
                  <option value="Puducherry" <?php echo ($state == 'Puducherry') ? "selected" : "";?>>Puducherry</option>
                  <option value="Goa" <?php echo ($state == 'Goa') ? "selected" : "";?>>Goa</option>
                  <option value="Gujarat" <?php echo ($state == 'Gujarat') ? "selected" : "";?>>Gujarat</option>
                  <option value="Haryana" <?php echo ($state == 'Haryana') ? "selected" : "";?>>Haryana</option>
                  <option value="Himachal Pradesh" <?php echo ($state == 'Himachal Pradesh') ? "selected" : "";?>>Himachal Pradesh</option>
                  <option value="Jammu and Kashmir" <?php echo ($state == 'Jammu and Kashmir') ? "selected" : "";?>>Jammu and Kashmir</option>
                  <option value="Jharkhand" <?php echo ($state == 'Jharkhand') ? "selected" : "";?>>Jharkhand</option>
                  <option value="Karnataka" <?php echo ($state == 'Karnataka') ? "selected" : "";?>>Karnataka</option>
                  <option value="Kerala" <?php echo ($state == 'Kerala') ? "selected" : "";?>>Kerala</option>
                  <option value="Madhya Pradesh" <?php echo ($state == 'Madhya Pradesh') ? "selected" : "";?>>Madhya Pradesh</option>
                  <option value="Maharashtra" <?php echo ($state == 'Maharashtra') ? "selected" : "";?>>Maharashtra</option>
                  <option value="Manipur" <?php echo ($state == 'Manipur') ? "selected" : "";?>>Manipur</option>
                  <option value="Meghalaya" <?php echo ($state == 'Meghalaya') ? "selected" : "";?>>Meghalaya</option>
                  <option value="Mizoram" <?php echo ($state == 'Andhra Pradesh') ? "selected" : "";?>>Mizoram</option>
                  <option value="Nagaland" <?php echo ($state == 'Nagaland') ? "selected" : "";?>>Nagaland</option>
                  <option value="Odisha" <?php echo ($state == 'Odisha') ? "selected" : "";?>>Odisha</option>
                  <option value="Punjab" <?php echo ($state == 'Punjab') ? "selected" : "";?>>Punjab</option>
                  <option value="Rajasthan" <?php echo ($state == 'Rajasthan') ? "selected" : "";?>>Rajasthan</option>
                  <option value="Sikkim" <?php echo ($state == 'Sikkim') ? "selected" : "";?>>Sikkim</option>
                  <option value="Tamil Nadu" <?php echo ($state == 'Tamil Nadu') ? "selected" : "";?>>Tamil Nadu</option>
                  <option value="Telangana" <?php echo ($state == 'Telangana') ? "selected" : "";?>>Telangana</option>
                  <option value="Tripura" <?php echo ($state == 'Tripura') ? "selected" : "";?>>Tripura</option>
                  <option value="Uttar Pradesh" <?php echo ($state == 'Uttar Pradesh') ? "selected" : "";?>>Uttar Pradesh</option>
                  <option value="Uttarakhand" <?php echo ($state == 'Uttarakhand') ? "selected" : "";?>>Uttarakhand</option>
                  <option value="West Bengal" <?php echo ($state == 'West Bengal') ? "selected" : "";?>>West Bengal</option>
                  </select>
                  <div class="invalid-feedback">Please enter internship state.</div>
                </div>
                <div class="form-group">
                  <label for="total_opening">Number of openings</label>
                  <input type="number" id="total_opening" class="form-control" placeholder="Example : 10 " name="total_opening" value="<?php echo $total_opening; ?>">
                  <div class="invalid-feedback">Please enter no. of openings.</div>
                </div>
                <div class="form-group">
                  <label for="internship_start_date">Internship Start Date</label>
                    <input class="form-control" id="date" name="internship_start_date" placeholder="MM/DD/YYYY" type="date"/ value="<?php echo $start_date; ?>">
                </div>
                <div class="form-group">
                  <label for="internship_duration">Internship Duration</label>
                  <div class="col-sm-12 row">
                    <div class="col-sm-6">
                      <select name="duration_number" class="form-control">
                        <option label="Choose Duration" selected>Choose Duration</option>
                        <option value="1" <?php echo ($i_duration == '1') ? "selected" : "";?>>1</option>
                        <option value="2" <?php echo ($i_duration == '2') ? "selected" : "";?>>2</option>
                        <option value="3" <?php echo ($i_duration == '3') ? "selected" : "";?>>3</option>
                        <option value="4" <?php echo ($i_duration == '4') ? "selected" : "";?>>4</option>
                        <option value="5" <?php echo ($i_duration == '5') ? "selected" : "";?>>5</option>
                        <option value="6" <?php echo ($i_duration == '6') ? "selected" : "";?>>6</option>
                      </select>
                    </div>
                    <div class="col-sm-6">
                      <select id="durations" name="duration_type" class="form-control">
                        <option value="months" <?php echo ($i_duration_type == 'months') ? "selected" : "";?>>Months</option>
                        <option value="weeks" <?php echo ($i_duration_type == 'weeks') ? "selected" : "";?>>Weeks</option>
                     </select>
                     <div class="invalid-feedback">Please choose duration.</div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="about_internship">Internship Description</label>
                  <textarea name="about_internship" class="form-control" id="about_internship" cols="30" rows="6"><?php echo $i_description; ?></textarea>
                  <div class="invalid-feedback">
                    Please enter internship details.
                  </div>
                </div>
                <br>
                <h3 class="font-weight-bold">Stipend And Perks</h3>
                <br>
                <div class="form-group">
                  <label for="stipend_amount">Stipend(₹)</label> <span>(if internship is unpaid or performance based so do not input any data in field)</span>
                  <div class="col-sm-12 row">
                    <div class="col-sm-6">
                      <input type="number" id="total_opening" class="form-control" placeholder="Example : ₹5000 " name="stipend_amount" value="<?php echo $stipend_amt; ?>">
                      <div class="invalid-feedback">
                        Please enter stipend amount.
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <select id="durations" name="stipend_method" class="form-control">
                        <option value="/Month" <?php echo ($stipend_method == '/Month') ? "selected" : "";?>>Month</option>
                        <option value="/week" <?php echo ($stipend_method == '/week') ? "selected" : "";?>>week</option>
                        <option value="lump-sum" <?php echo ($stipend_method == 'lump-sum') ? "selected" : "";?>>lump-sum</option>
                        <option value="No-Stipend" <?php echo ($stipend_method == 'No-Stipend') ? "selected" : "";?>>No-Stipend</option>
                        <option value="Performance Based" <?php echo ($stipend_method == 'Performance Based') ? "selected" : "";?>>Performance Based</option>
                     </select>
                     <div class="invalid-feedback">Please choose duration.</div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <label for="perks">Perks</label>
                    <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="Certificate" name="perks[]" <?php if(in_array('Certificate', $perks)){ echo 'checked'; } else { echo ""; } ?>>
                          <label class="form-check-label">Certificate</label>
                    </div>
                    <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="Letter of recommendation" name="perks[]" <?php if(in_array('Letter of recommendation', $perks)){ echo 'checked'; } else { echo ""; } ?>>
                          <label class="form-check-label">Letter of recommendation</label>
                    </div>
                    <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="Flexible Work hours" name="perks[]" <?php if(in_array('Flexible Work hours', $perks)){ echo 'checked'; } else { echo ""; } ?>>
                          <label class="form-check-label">Flexible Work hours</label>
                    </div>
                    <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="5 days a week" name="perks[]" <?php if(in_array('5 days a week', $perks)){ echo 'checked'; } else { echo ""; } ?>>
                          <label class="form-check-label">5 days a week</label>
                    </div>
                    <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="Informal dress code" name="perks[]" <?php if(in_array('Informal dress code', $perks)){ echo 'checked'; } else { echo ""; } ?>>
                          <label class="form-check-label">Informal dress code</label>
                    </div>
                    <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="Free Snacks and beverages" name="perks[]" <?php if(in_array('Free Snacks and beverages', $perks)){ echo 'checked'; } else { echo ""; } ?>>
                          <label class="form-check-label">Free Snacks and beverages</label>
                    </div>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary" name="edit_sub">Edit</button>
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
