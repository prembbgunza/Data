<?php
/*
    include '..';
    session_start();
    $.. $_SESSION[""];
    $. = "SELECT * FROM .";
    $. = mysqli_query($.,$.);
    $. = mysqli_fetch_array($.);
*/
    $a = '1';
    $b = '1';
    //
    $c = '1';
?>
<html>
<head>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
    crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous">
    </script>
    <style>
        .op {
            width:40px;
            hight:1px;
            border:2px solid green;
            border-radius:100%;
            background-color:greenyellow;
            opacity: 2.60;
        }
        .cl {
            width:40px;
            hight:1px;
            border:2px solid red;
            border-radius:100%;
            background-color:red;
            opacity: 2.60;
        }
        .row {
            margin:20px 30px;
        }
        .row p {
            margin:10px 10px;
        }
    </style>
</head>
<body>
<?php
    //while()
    //{
        if($a == $b)
        {
?>
        <table border="1" width="1200px">
            <tr>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
            </tr>
            <tr>
                <td>a</td>
                <td>b</td>
                <td>c</td>
<?php
            if($c == $b)
            {
?>
                <td>
                    <div class="row">
                        <a class="op"></a>
                        <p>เปิดรับบริจาค</p>
                    </div>
                </td>
<?php
            }
            else
            {
?>
                <td>
                    <div class="row">
                        <a class="cl"></a>
                        <p>ปิดรับบริจาค</p>
                    </div>
                </td>
<?php
            }
?>
            </tr>
        </table>
<?php
        }
    //}
    else
    {
?>
    ไม่มีข่าวสารกิจกรรม
<?php
    }
?>

</body>
</html>
