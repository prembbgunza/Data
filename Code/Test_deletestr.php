<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript">
    function autoTab(obj){
        /* กำหนดรูปแบบข้อความโดยให้ _ แทนค่าอะไรก็ได้ แล้วตามด้วยเครื่องหมาย
        หรือสัญลักษณ์ที่ใช้แบ่ง เช่นกำหนดเป็น  รูปแบบเลขที่บัตรประชาชน
        4-2215-54125-6-12 ก็สามารถกำหนดเป็น  _-____-_____-_-__
        รูปแบบเบอร์โทรศัพท์ 08-4521-6521 กำหนดเป็น __-____-____
        หรือกำหนดเวลาเช่น 12:45:30 กำหนดเป็น __:__:__
        ตัวอย่างข้างล่างเป็นการกำหนดรูปแบบเลขบัตรประชาชน
        */
            var pattern=new String("_-____-_____-_-__"); // กำหนดรูปแบบในนี้
            var pattern_ex=new String("-"); // กำหนดสัญลักษณ์หรือเครื่องหมายที่ใช้แบ่งในนี้
            var returnText=new String("");
            var obj_l=obj.value.length;
            var obj_l2=obj_l-1;
            for(i=0;i<pattern.length;i++){           
                if(obj_l2==i && pattern.charAt(i+1)==pattern_ex){
                    returnText+=obj.value+pattern_ex;
                    obj.value=returnText;
                }
            }
            if(obj_l>=pattern.length){
                obj.value=obj.value.substr(0,pattern.length);           
            }
    }
</script>
</head>
<body>
    <form id="form1" name="form1" method="post" action="">
        <input name="data" type="text" id="data" onkeyup="autoTab(this)"  />
        <button>11</button>
    </form>
</body>
</html>
<?php
    $a = $_POST["data"];
    $money = str_replace('-','', $a);
    print_r($money);
?>