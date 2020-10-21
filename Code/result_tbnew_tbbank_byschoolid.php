<?php
  include '..';
  session_start();
  $userid = $_SESSION[".."];

  //sql 2 สแดงในส่วนเมนู user
  $suserid = "SELECT * FROM tb.. WHERE ... = '$userid'";
  $quserid = mysqli_query($..,$suserid);
  $ruserid = mysqli_fetch_array($quserid);

  //sql 1 แสดงในส่วนตารางบริจาค
  $stbdonateuserid = "SELECT * FROM tb.. WHERE ... = '$userid'";
  $qtbuserid = mysqli_query($..,$stbdonateuserid);
  $rtbuserid = mysqli_fetch_array($qtbuserid);
  $bankidtbdonate = $rtbuserid["Bankid"];

  //sql 3 แสดงตารางบัญชีธนาคาร
  $stbbank = "SELECT * FROM tb... WHERE ... = '$bankidtbdonate'";
  $qtbbank = mysqli_query($..,$stbbank);
  $rtbbank = mysqli_fetch_array($qtbbank);
  $newidtbbank = $rtbbank["newid"];

  //sql 4 ตารางข่าวสารกิจกรรม
  $stbnew = "SELECT * FROM tb... WHERE ... = '$newidtbbank'";
  $qtbnew = mysqli_query($..,$stbnew);
  $rtbnew = mysqli_fetch_array($qtbnew);
  $schoolidtbnew = $rtbnew["schoolid"];
  
  //sql 5 ตารางชื่อโรงเรียน
  $stbschool = "SELECT * FROM tb... WHERE ... = '$schoolidtbnew'";
  $qtbschool = mysqli_query($..,$stbschool);
?>
<!DOCTYPE html>
<html lang="en" lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ข้อมูลข่าวสารกิจกรรมทางโรงเรียน</title>
</head>
<body>
<?php
    while
    (
      $tb_donate = mysqli_fetch_array($qtbuserid) &&
      $tb_bank = mysqli_fetch_array($qtbbank) &&
      $tb_new = mysqli_fetch_array($qtbnew) &&
      $tb_school = mysqli_fetch_array($qtbschool)
    )
    {
?>
    <?php echo $tb_donate["money"]; ?>
    <?php echo $tb_bank["namebank"]; ?>
    <?php echo $tb_bank["numberbank"]; ?>
    <?php echo $tb_new["topicnew"]; ?>
    <?php echo $tb_school["nameschool"]; ?>
<?php
    }
?>
</body>
</html>
