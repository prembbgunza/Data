<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
    $dbhost ="localhost"; //เรียกหลัก
    $dbuser ="root"; // ID Admin เริ่มแรกจะใช้ว่า Root
    $dbpass =""; // รหัสผ่าน ว่างเพราะเราไม่ได้ตั้งไว้
    $dbname ="test3"; // เลือกฐานข้อมูลใน Mysql ขิงเราชื่อ test 1

    // Create connection
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    // Check connection
    if (!$conn)
    {
    die ("Connection failed: ". mysqli_connect_error());
    }
    echo "";
?>
</body>
</html>