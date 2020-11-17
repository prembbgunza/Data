<?php
    include 'connect.php';
    $a_get = $_POST["numberpic"];
    $fileupload = $_REQUEST['picb']; //รับค่าไฟล์จากฟอร์ม

    //ฟังก์ชั่นวันที่
    date_default_timezone_set('Asia/Bangkok');
    $date = date("Ymd");
    	
    //ฟังก์ชั่นสุ่มตัวเลข
         $numrand = (mt_rand());

    //เพิ่มไฟล์
    $upload=$_FILES['picb'];
    
    if($upload <> '') {   //not select file
        //โฟลเดอร์ที่จะ upload file เข้าไป 
        $path="Image/";

    //เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
    $type = strrchr($_FILES['picb']['name'],".");

    //ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
    $newname = $date.$numrand.$type;
    print_r($newname);
    $path_copy=$path.$newname;
    $path_link="Image/".$newname;

    //คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
    move_uploaded_file($_FILES['picb']['tmp_name'],$path_copy);  	
    }

    // เพิ่มไฟล์เข้าไปในตาราง uploadfile
        $sql2 = "SELECT b FROM tb_a WHERE a = '$a_get'";
        $q_sql2 = mysqli_query($conn,$sql2);
        $d_sql2 = mysqli_fetch_array($q_sql2, MYSQLI_NUM);
        $filename = $d_sql2[0];

        @unlink('Image/'.$filename);
        
        $sql3 = "UPDATE tb_a SET b = '$newname' WHERE a = '$a_get'";

		$result = mysqli_query($conn, $sql3) or die ("Error in query: $sql3 " . mysqli_error());
    mysqli_close($conn);
    
    if($result){
        echo "<script type='text/javascript'>";
        echo "alert('Upload File Succesfuly');";
        echo "window.location = 'resultpic.php'; ";
        echo "</script>";
        }
        else{
        echo "<script type='text/javascript'>";
        echo "alert('Error back to upload again');";
        echo "</script>";
    }
    
    // ระบุตำแหน่ง folder file
    //$copypath = "Image/".$pic;
    //$copyfile = move_uploaded_file($pictmp,$copypath);
?>