<?php
if(isset($_GET['ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po']))
{
if($_GET['ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po'] == 1010)
{
?>
<script type="text/javascript">
function JSalert(){
  swal({
  title: "Your Internship Posted Successfully",
  text: "The Internstorm Team Contact You Shortly",
  icon: "success",
  button: "OK",
});
}JSalert();
</script>
<?php
}
else
{
?>
<script type="text/javascript">
function JSalert(){
  swal({
  title: "Your Internship Not Posted Successfully",
  text: "Please contact support@internstorm.com",
  icon: "error",
  button: "OK",
});
}JSalert();
</script>
<?php
}
}
?>
