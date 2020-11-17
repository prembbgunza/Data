<?php
    //include 'connect.php';

    $number1 = count($_POST["name1"]);
    $number2 = count($_POST["name2"]);

    $a = $_POST["name1"];
    $b = $_POST["name2"];
    print_r($a);
    print_r($b);
    
    /*
    if($number1 > 0 && $number2 > 0)  
    {  
        for($i=0; $i<$number1 && $i<$number2; $i++)  
        {  
            if(trim($_POST["name1"][$i] != '' && trim($_POST["name2"][$i] != ''))  
            {  
                    $a = $_POST["name1"][$i]);
                    $b = $_POST["name2"][$i]);
                    
                    $sql = "INSERT INTO tbl_name(name) VALUES('".mysqli_real_escape_string($connect, $_POST["name"][$i])."')";  
                    mysqli_query($connect, $sql);  
            
            }  
        }  
        echo "Data Inserted";  
    }  
    else  
    {  
        echo "Please Enter Name";  
    }
    
    /*
    $a = $_POST["IDbank"];
    print_r($a);
    */
    /*
    $username = $_REQUEST['textloginusername'];
    $password = md5($_REQUEST['textloginpassword']);

    //sql
    $checklogin = "SELECT * FROM tb_b WHERE username = '".$username."' and password = '".$password."'";

    //query
    $querycheck = mysqli_query($conn,$checklogin);
    if(mysqli_num_rows($querycheck))
    {
        $row = mysqli_fetch_array($querycheck);
        $_SESSION["id"] = $row["id"];
        $usertb = $row["username"];
        $userpass = $row["password"];

        if ($usertb = "$username" & $userpass = "$password")
        {
            echo "a";
        }
    }
    */
?>