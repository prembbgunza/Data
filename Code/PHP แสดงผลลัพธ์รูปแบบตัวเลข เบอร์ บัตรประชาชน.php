<?php
/*แบบที่ 1 รูแปบบเบอร์โทร*/
	//รับค่ามา
	$mobile = '0908028884';
	//กำหนด -
	$minus_sign = "-";
	//เอาตัวเลขที่ 1 ตัด 7 ตัวหลังออก
	$p11 = substr($mobile , 0 , -7);
	//เอาตัวเลขที่ 4 ตัด 3 ตัวหลังออก
	$p12 = substr($mobile , 3 , -4);
	//เอาตัวเลขที่ 8
	$p13 = substr($mobile , 6);
	//แสดงผลลัพธ์
	echo $tell = $p11.$minus_sign.$p12.$minus_sign.$p13;
		echo '<br>';
/*แบบที่ 2 รูปแบบเบอร์โทร*/
	//กำหนด -
	$minus_sign = "-";
	//เอาตัวเลขที่ 1 ตัด 7 ตัวหลังออก
	$p21 = substr($mobile , 0 , -7);
	//เอาตัวเลขที่ 3
	$p22 = substr($mobile , 3);
	//แสดงผลลัพธ์
	echo $tell = $p21.$minus_sign.$p22;
		echo '<br>';
/*รูปแบบเลขบัตรประชาชน*/
	//ตัวเลขบัตร..
	$number_id_people = '1111111111111';
	//เอาตัวเลขที่ 1 ไม่เอา 12 หลัง
	$a1 = substr($number_id_people, 0, -12);
	//เอาตัวเลขที่ 2 ไม่เอา 9 หลัง
	$a2 = substr($number_id_people, 1, -9);
	//เอาตัวเลขที่ 6 ไม่เอา 3 หลัง
	$a3 = substr($number_id_people, 5, -3);
	//เอาตัวเลขที่ 11 ไม่เอา 1 หลัง
	$a4 = substr($number_id_people, 10, -1);
	//เอาตัวเลขที่ 13
	$a5 = substr($number_id_people, 12);
	//แสดงผลลัพธ์
	echo $a1.$minus_sign.$a2.$minus_sign.$a3.$minus_sign.$a4.$minus_sign.$a5
?>
