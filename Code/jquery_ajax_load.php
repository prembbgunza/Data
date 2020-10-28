<?php
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#1").click(function(){
    $("#div1").load("1.php");
  });
});
$(document).ready(function(){
  $("#2").click(function(){
    $("#div1").load("2.php");
  });
});
</script>
</head>
<body>

<div id="div1"><h2>Let jQuery AJAX Change This Text</h2></div>
<button id="1">1</button>
<button id="2">2</button>
</body>
</html>
