<?php
    include 'connect.php';
    $a = "SELECT * FROM tb_a";
    $q_a = mysqli_query($conn,$a);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>แก้ไขรูปภาพ</title>
</head>
<body>
    <?php
        while ($r_a = mysqli_fetch_assoc($q_a))
        {
    ?>
    <a href="form_updatepic.php?a=<?php echo $r_a["a"] ;?>">
        <img src="Image/<?php echo $r_a["b"] ;?>">
        </a>
    <?php
        }
    ?>
</body>
</html>