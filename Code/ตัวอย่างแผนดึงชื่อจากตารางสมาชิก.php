โดยอ้าง ID จากตาราง ความคิดเห็นในกระทู้
<td>
<?php
	 //ค่าดึงจากตาราง tb_question
	 $iduser = '';
	 $idadmin = '';
	 $idschool = '';
	 if($iduser == '' && $idadmin == '' && $idschool == '')
	 {
		 echo 'ไม่มีสมาชิกคนนี้';
	 }
	 else
	 {
		 echo 'ชื่อคนนี้นะ';
		/*
		$select = "SELECT * FROM .. WHERE ... = '$iduser'";
		$query = mysqli_query($..,$select);
		$result = mysqli_fetch_array($query);

		$select2 = "SELECT * FROM .. WHERE ... = '$idadmin'";
		$query2 = mysqli_query($..,$select2);
		$result2 = mysqli_fetch_array($query2);

		$select3 = "SELECT * FROM .. WHERE ... = '$idschool'";
		$query3 = mysqli_query($..,$select3);
		$result3 = mysqli_fetch_array($query3);
		
		echo $result[''];
		echo $result2[''];
		echo $result3[''];
		*/
	 }
?>
</td>
