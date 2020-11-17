<?php
    include 'connect.php';
    // GET id comment
    $a = "2";

    // input result select tb_d where id = $a
    $b = "2";

    // session admin
    $c = "1";
    
    if($b = $c)
    {
        $sql = "DELETE FROM tb_d WHERE id = $a";
        $qu = mysqli_query($conn,$sql);
        if($qu = TRUE) 
        {
            echo "ลบเรียบร้อย";
        }
        else if($qu = FALSE)
        {
            echo "ลบไม่ได้";
        }
    }
    else
    {   
        echo "คุณไม่มีสิทธิลบ";
    }
?>