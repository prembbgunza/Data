<?php
	$b = '1';
/*
	include '..';
	session_start();
	$a = $_SESSION[""];
	$.. = "SELECT .. FROM .. WHERE .. = '$a'";
	$.. = mysqli_query($..,$..);
	$.. = mysqli_fetch_array($..);
	$.. = $..[".."];
*/
	$c = '0';
?>
<html>
<head>
</head>
<body>
<?php
	if($c == $b)
	{
?>
	<h>ข้อมูลข่าวสารกิจกรรม</h>
<?php
	}
	else
	{
?>
	<h>ถ้าคุณต้องการรับทราบข่าวสารกิจกรรม กรุณาเปิดการแจ้งเตือน</h>
<?php
	}
?>
</body>
</html>
