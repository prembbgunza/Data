<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<body>
<?php
include 'connect.php';

	for($i=0;$i<count($_POST["chkDel"]);$i++)
	{
        $a = $_POST["chkDel"][$i];
		if($a != "")
		{
			$strSQL = "DELETE FROM tb_c ";
			$strSQL .="WHERE id = '$a' ";
			$objQuery = mysqli_query($conn,$strSQL);
		}
	}
	echo "Record Deleted.";

mysqli_close($conn);
?>
</body>
</html>