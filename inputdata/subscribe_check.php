<?php
//if(isset($_GET['ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po']))
//{
if($_GET['ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po'] == 1010)
{
?>
<script type="text/javascript">
function JSalert(){
  swal({
  title: "Thank you!",
  text: "Your Mail Have Subscribe Successfully",
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
  text: "Please Try Again",
  icon: "error",
  button: "CLOSE",
});
}JSalert();
</script>
<?php
}
//}
?>
