<!DOCTYPE html>
<?php
    include 'connect.php';
    $a = 1;
    $b = "SELECT * FROM tb_bankschool WHERE newid = '$a'";
    $c = mysqli_query($conn,$b);
?>
<html lang="en" lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    while($d = mysqli_fetch_assoc($c))
    {
?>
    <form
    name="f"
    method="POST"
    action="checklogin.php">
    <input type="radio" name="IDbank" value="<?php echo $d["ID"]; ?>">
    <?php echo $d["numberbank"]; ?>
    <?php echo $d["namebank"]; ?>
    <br>
<?php
    }
?>
    <button type="btn">ส่งข้อมูล</button>
    </form>
</body>
</html>