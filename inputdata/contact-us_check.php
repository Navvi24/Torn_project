<?php
if(isset($_GET['ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po']))
{
if($_GET['ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po'] == 1010)
{
?>
<script type="text/javascript">
function JSalert(){
  swal({
  title: "Successfully Sent",
  text: "We've received your message. Thank you for braving that text out of the many you haven't been able to hit send on! (Pssst, we relate!)",
  icon: "success",
  button: "CLOSE",
});
}JSalert();
</script>
<?php
}
else if($_GET['ghEd8YGAEGWiaDMAMjOHeLfwSsoQypnvn5voowo7Po'] == 101000)
{
?>
<script type="text/javascript">
function JSalert(){
  swal({
  title: "Uh-oh!",
  text: "File must be PDF or Word Document.",
  icon: "error",
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
  title: "Uh-oh!",
  text: "We somehow managed to not receive your message! What are the chances huh? Why don't you try again? We're right here.",
  icon: "error",
  button: "CLOSE",
});
}JSalert();
</script>
<?php
}
}
?>
