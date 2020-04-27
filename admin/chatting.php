<?php

//include("sidebar.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.container {
  position: relative;
  width: 100%;
  overflow: hidden;
  padding-top: 56.25%; /* 16:9 Aspect Ratio */
}

.responsive-iframe {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 20;
  width: 100%;
  height: 100%;
  border: none;
}
</style>
</head>
<body>

<h2>Responsive Iframe</h2>
<h3>Maintain Aspect Ratio 16:9</h3>
<p>Resize the window to see the effect.</p>

<div class="container"> 
  <iframe class="responsive-iframe" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
</div>

</body>
</html>
