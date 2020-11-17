<?php
    /*include "connect.php";*/
    $a = $_POST["a"];
    print_r($a);
    /* 
    //รับค่า ไฟล์ รูปภาพ
    $pic = $_FILES["pica"]["name"];
    $pictmp = $_FILES["pica"]["tmp_name"];
    
    // ระบุตำแหน่ง folder file
    $copypath = "Image/".$pic;
    $copyfile = move_uploaded_file($pictmp,$copypath);

    //insert tb_pictest
    $strSQL = "INSERT INTO tb_a (b) 
    VALUE ('$pic')";
    $objQuery = mysqli_query($conn,$strSQL);

    //check insert 
    if($objQuery = TRUE)
    {
        echo "อัพรูปภาพสำเร็จ";
    }
    elseif($objQuery = FALSE)
    {
        echo "ไม่สามารถอัพรูปภาพได้";
    }
    */
?>