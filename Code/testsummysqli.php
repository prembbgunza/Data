<?php
    include 'connect.php';
    /*
    $query = "SELECT New_id, SUM(Donate_money) FROM tb_donatemoney GROUP BY New_id"; 
	 
    $result = mysqli_query($conn,$query) or die(mysqli_error());
    
    // Print out result
    while($row = mysqli_fetch_array($result)){
        echo "Total ยอดบริจาคกิจกรรมที่ ". $row['New_id']. " = $".$row['SUM(Donate_money)']." บาท";
        echo "<br />";
    }
    

    $query2 = "SELECT New_id, Count(Donate_namebank), SUM(Donate_money) FROM tb_donatemoney GROUP BY New_id"; 
	 
    $result2 = mysqli_query($conn,$query2) or die(mysqli_error());
    
    // Print out result
    while($row2 = mysqli_fetch_array($result2)){
        echo "Total ยอดผู้บริจาคกิจกรรมที่ ". $row2['New_id']. " จำนวน = ". $row2['Count(Donate_namebank)']." คน";
        echo "<br />";
    }
    $query3 = "SELECT New_id, SUM(Donate_money) FROM tb_donatemoney GROUP BY New_id"; 
	 
    $result3 = mysqli_query($conn,$query3) or die(mysqli_error());
    
    // Print out result
    $row3 = mysqli_fetch_array($result3)
        echo "Total ยอดบริจาคกิจกรรมที่ ". $row3['New_id']. " = $".$row3['SUM(Donate_money)']." บาท";
        echo "<br />";
    
    $result4 = mysql_query("select sum(Donate_money) as total from tb_donatemoney;", $conn);
        if ($row4 = mysql_fetch_assoc($result4) {
            echo "The sum is: " . $row4["total"];
        })
    mysql_free_result($result4);
    mysql_close($conn);*/
    ?>
<html>
    <head>
        <title>Test Sum in mysqli xampp หาผลรวม</title>
    </head>
    <table border="1">
        <tr>
            <th>รวม</th>
        </tr>
        <tr>
        <td>
        <?php
        $query = "SELECT New_id, SUM(Donate_money) FROM tb_donatemoney WHERE New_id = 23"; 
	 
        $result = mysqli_query($conn,$query) or die(mysqli_error());
     
        // Print out result
        while($row = mysqli_fetch_array($result)){
         echo "Total ยอดบริจาคกิจกรรมที่ ". $row['New_id']. " = $".$row['SUM(Donate_money)']." บาท";
         echo "<br />";
        }
        $query1 = "SELECT New_id, AVG(Donate_money) FROM tb_donatemoney WHERE New_id = 23"; 
	 
        $result1 = mysqli_query($conn,$query1) or die(mysqli_error());
     
        // Print out result
        while($row1 = mysqli_fetch_array($result1)){
         echo "Total ยอดบริจาคกิจกรรมที่ ". $row1['New_id']. " = $".$row1['AVG(Donate_money)']." บาท";
         echo "<br />";
        }
        $query2 = "SELECT New_id, count(Donate_money) FROM tb_donatemoney WHERE New_id = 23"; 
	 
        $result2 = mysqli_query($conn,$query2) or die(mysqli_error());
     
        // Print out result
        while($row2 = mysqli_fetch_array($result2)){
         echo "Total ยอดบริจาคกิจกรรมที่ ". $row2['New_id']. " = $".$row2['count(Donate_money)']." บาท";
         echo "<br />";
        }
        ?>
        </td>
        </tr>
<body>
</body>
</html>