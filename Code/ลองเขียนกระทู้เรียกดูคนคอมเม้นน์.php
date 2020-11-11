<?php
?>
<table border="1">
    <tr>
        <th>ลำดับ</th>
        <th>ความคิดเห็น</th>
        <th>ชื่อ</th>
    </tr>
    <?php
    $i=1;
    while($.. = mysqli_fetch_array($..))
    {
    $i++;
    ?>
    <tr>
        <td><?php echo $i ;?></td>
        <td><?php echo ... ;?></td>
        <td>
        <?php
            $.. = mysqli_num_rows($...);
            $.. = $..['Admin'];
            $.. = $..['User'];
            $.. = $..['School'];

            //Admin
            $.. = "SELECT .. FROM .. WHERE .. = '$..'";
            $.. = mysqli_query($..,$..);
            $.. = mysqli_num_rows($..)
            $.. = $..[''];

            //User
            $.. = "SELECT .. FROM .. WHERE .. = '$..'";
            $.. = mysqli_query($..,$..);
            $.. = mysqli_num_rows($..)
            $.. = $..[''];

            //School
            $.. = "SELECT .. FROM .. WHERE .. = '$..'";
            $.. = mysqli_query($..,$..);
            $.. = mysqli_num_rows($..)
            $.. = $..[''];

            if($.. == $... && $.. == '' && $.. == '')
            {
                $.. = mysqli_fetch_array($..);
                $.. = $..[''];
                echo $.. ;
            }
            elseif($.. == $... && $.. == '' && $.. == '')
            {
                $.. = mysqli_fetch_array($..);
                $.. = $..[''];
                echo $.. ;
            }
            elseif($.. == $... && $.. == '' && $.. == '')
            {
                $.. = mysqli_fetch_array($..);
                $.. = $..[''];
                echo $.. ;
            }
            else
            {
                echo 'บัญชีนี้ถูกลบออกจากระบบแล้ว';
            }
        ?>
        </td>
    </tr>
    <?php
    }
    ?>
</table>