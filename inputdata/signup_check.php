<!-- START CHECKING FOR SIGNUP -->
<?php
if(isset($_GET['ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po']))
{
if($_GET['ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po'] == 1010)
{
?>
  <div class="alert alert-success" role="alert">
    <?php echo "Signup Successful. "; ?>
  </div>
<?php
}
else if($_GET['ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po'] == 101000)
{
?>
  <div class="alert alert-danger" role="alert">
    <?php echo "Please Attached only PDF or Word Document. for resume."; ?>
  </div>
<?php
}
else
{
?>
  <div class="alert alert-danger" role="alert">
      <?php echo "Mail already registered Signup Failed."; ?>
  </div>
<?php
}
}
?>
<!-- END CHECKING FOR SIGNUP -->
