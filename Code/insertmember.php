<?php
    include 'connect.php';
    
    // POST
    $username = $_POST["textusername"];
    $password = md5($_POST["textpassword"]);
    $number = $_POST["textnumber"];
    print_r($username);
    print_r($password);
    print_r($number);
    
    // INSERT
    $insert = "INSERT INTO tb_b (username,password,number) VALUE ('$username','$password','$number')";
    $query = mysqli_query($conn,$insert);
    if ($query = TRUE)
    {
        echo "a";
    }
    else if ($query = FALSE)
    {
        echo "b";
    }
    
    $insert2 = "INSERT INTO tb_a (number) VALUE ('$number')";
    $query2 = mysqli_query($conn,$insert2);

    $select = "SELECT id FROM tb_a WHERE number = '$number'";
    $query3 = mysqli_query($conn,$select);
    $result = mysqli_fetch_assoc($query3);
    $show = $result["id"];
    
    $update = "UPDATE tb_b SET idtb_a = '$show' WHERE number = '$number'";
    $query4 = mysqli_query($conn,$update);
?>