<?php
    include 'connect.php';
    $a = $_GET["a"];

    $b = "SELECT * FROM tb_a WHERE a = '$a'";
    $q_b = mysqli_query($conn,$b);
    $r_b = mysqli_fetch_assoc($q_b);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2</title>
</head>
<body>
    <form
    name="formupdatepic"
    method="POST"
    action="updatepic.php"
    action="update_textformpic.php"
    enctype="multipart/form-data">
    <h>รูปภาพ</h><br>
    <img src="Image/<?php echo $r_b["b"] ;?>">
    <input type="file" name="picb" accept="Image/*" value="<?php echo $r_b["b"] ;?>">
    <input type="hidden" type="text" name="namepic" value="<?php echo $r_b["b"] ;?>">
    <input type="hidden" type="text" name="numberpic" value="<?php echo $a ;?>">
    <input type="text" name="texta">
    <input type="hidden" type="text" name="idpic" value="<?php echo $a ;?>">
    <button>แก้ไขข้อมูล</button>
    <form>
</body>
</html>