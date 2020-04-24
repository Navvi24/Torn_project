<?php
if(isset($_GET['ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po']))
{
if($_GET['ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po'] == 1010)
{
?>
<script type="text/javascript">
function JSalert(){
  swal({
  title: "Thank you!",
  text: "Your internship has now been posted successfully. Team Internstorm will get in touch with you shortly. We look forward to providing you with the best interns and great reviews.",
  icon: "success",
  button: "CLOSE",
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
  title: "Oh dang!",
  text: "It looks like due to some glitch your internship couldn't be posted! Please try again and we'll make sure this doesn't happen again.",
  icon: "error",
  button: "CLOSE",
});
}JSalert();
</script>
<?php
}
}
?>
