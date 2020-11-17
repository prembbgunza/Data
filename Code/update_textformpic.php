<?php
    include 'connect.php';
    $textformpic = $_POST["texta"];
    //
    $idformpic = $_POST["idpic"];
    //
    // Update
    $update_formpic = "UPDATE tb_a SET c = '$textformpic' WHERE a = '$idformpic'";
    $q_update_pic = mysqli_query($conn,$update_formpic);

    if($q_update_pic = TRUE)
    {
        echo "<script type='text/javascript'>";
        echo "alert('แก้ไขข้อมูลสำเร็จ');";
        echo "window.location = 'form_updatepic.php'; ";
        echo "</script>";
    }
    else
    {
        echo "<script type='text/javascript'>";
        echo "alert('ไม่สามารถแก้ไขข้อมูลได้');";
        echo "window.location = 'form_updatepic.php'; ";
        echo "</script>";
    }
?>