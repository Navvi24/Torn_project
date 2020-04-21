<!-- START CHECKING FOR SIGNUP -->
<?php
if(isset($_GET['ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po']))
{
if($_GET['ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po'] == 1010)
{
?>
  <div class="alert alert-success" role="alert">
    <?php echo "Signup successfully "; ?>
  </div>
<?php
}
else
{
?>
  <div class="alert alert-danger" role="alert">
      <?php echo "Mail already registered Signup Failed"; ?>
  </div>
<?php
}
}
?>
<!-- END CHECKING FOR SIGNUP -->
