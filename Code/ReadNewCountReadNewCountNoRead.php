<?php
    //ดึงไฟล์เชื่อมฐานข้อมูล Mysql
    include '';

    //ประกาศรับค่า SESSION ดึง ID User
    $s1 = $_SESSION[''];

    //รับ ID New กับ ID User
    /*ถ้าเป็น Get ต้องเรียกผ่านตัวแปรจาก Form action .php?..=<?php ?>*/
    $a1 = $_POST['']; //ID New

    //คำสั่งตรวจสอบ Fill เก็บ ID New กับ ID User
    $sql = "SELECT * FROM . WHERE . = '$a1' AND . = '$s1'";
    $q = mysqli_query($conn,$sql);
    $row = mysqli_fetch_row($q);

    $row1 = $row['']; //ID New
    $row11 = $row['']; //ID User
    
    //ตรวจสอบมีข้อมูลตรงกันไหม ถ้าตรงกัน
    if($a1 == $row1 && $s1 == $row11)
    {
        echo '<script>
        window.location = "aa.php";
        </script>'
    }

    //ถ้าไม่ตรงกัน
    else
    {
        //คำสั่งบันทึกลงฐานข้อมูล Mysql
        $sql2 = "INSERT INTO .
        (
            .,
            .
        )
        VALUES
        (
            '$s',
            '$a'
        )";
        //ดึงตัวแปรเชื่อมฐานข้อมูลกับเก็บคำสั่ง Mysql
        $q2 = mysqli_query($conn,$sql2);
        //ถ้าลงฐานข้อมูลสำเร็จ
        if($q2 = TRUE)
        {
            echo 'a';
        }
        //ถ้าไม่สำเร็จ
        else
        {
            echo 'b';
        }
    }
    
    //นับจำนวน Newid จากตาราง . โดยอ้างอิง IDUser
    $sql3 = "SELECT COUNT() AS AA FROM . WHERE . = '$s1'";
    $q3 = mysqli_query($conn,$sql3);
    $r3 = mysqli_fetch_array($q3);
    $re3 = $r3['AA'];

    //นับจำนวน ID ทั้งหมดจากตาราง New
    $sql4 = "SELECT COUNT() AS AC FROM ..";
    $q4 = mysqli_query($conn,$sql4);
    $r4 = mysqli_fetch_array($q4);
    $re4 = $r4['AC'];

    //ทำการลบ
    $full = $re4 - $re3;
    $echo $full;
?>