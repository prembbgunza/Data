<?php
  include '..';
  session_start();
  $user = $_SESSION[".."];
  //สแดงในส่วนเมนู user

  //sql ตารางกระทู้
  $1 = "SELECT * FROM tb.. WHERE .. = '$user'";
  $q = mysqli_query($..,$);
  $ridquestion = mysqli_fetch_array($qcom);

  //sql ตารางความคิดเห็นในกระทู้
  $2 = "SELECT * FROM tb. WHERE .. = '$rqid'";
  $qcom = mysqli_query($..,$);
  $rucom = mysqli_fetch_array($qcom);
  $ruseridcom = $r["useridcom"];
  
  //sql ตาราง user
  $3 = "SELECT * FROM tb.. WHERE .. = '$ruseridcom'";
  $qiducom = mysqli_query($..,$);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ข้อมูลกระทู้</title>
</head>
<body>
  <?php echo $ridquestion[""]; ?>
  <?php echo $ridquestion[""]; ?>
  <?php echo $ridquestion[""]; ?>
<?php
  while
  (
    $r2useridtextcom = mysqli_fetch_array($qiducom) &&
    $r2useridname = mysqli_fetch_array($qiducom)
  )
  {
?>
  <?php echo $r2useridtextcom[""]; ?>
  <a href="#"><?php echo $r2useridname[""]; ?></a>
<?php
  }
?>
</body>
</html>
