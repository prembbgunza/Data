<?php
    include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <script language="JavaScript">
        function onDelete()
        {
            if(confirm('Do you want to delete ?')==true)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    </script>
<title>รายการ</title>
</head>
<body>
<form
name="frmMain"
method="post"
action="phpMySQLDeleteMultiRecord.php">
<?php
    //select
    $sql = "SELECT * FROM tb_c";
    $result = mysqli_query($conn,$sql) or die ("Error Query [".$sql."]");
?>
    <table border="1">
        <tr>
        <th>ลำดับ</th>
        <th>ความคิดเห็น</th>
        <th>เลือกรายการที่จะลบ</th>
        </tr>
<?php
    while ($listcomm = mysqli_fetch_array($result))
    {
?>
    <tr>
        <td>
            <?php echo $listcomm["id"] ;?>
        </td>
        <td>
            <?php echo $listcomm["comment"] ;?>
        </td>
        <td>
        <input type="checkbox" name="chkDel[]" value="<?php echo $listcomm["id"] ;?>">
        </td>
    </tr>
<?php
    }
?>
    </table>
    <?
mysql_close($conn);
?>
    <button onclick="return onDelete();">ลบข้อมูล</button>
</form>
</body>
</html>