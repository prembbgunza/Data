<!DOCTYPE html>
<html>
<head>
<script>
    //ต้องใส่ข้อมูล
    function check()
    {
        if(document.b.a.value == "")
        {
        alert('กรุณากรอก อีเมลล์');
        document.b.a.focus();
        return false;
        }
    }
    //ใส่เฉพาะตัวเลข กับ จุด
    function chkNumber(ele)
	{
	var vchar = String.fromCharCode(event.keyCode);
	if ((vchar<'0' || vchar>'9') && (vchar != '.')) return false;
	ele.onKeyPress=vchar;
    }
    function chkNumber2(ele)
	{
	var vchar = String.fromCharCode(event.keyCode);
	if ((vchar<'a' || vchar>'z') && (vchar<'A' || vchar>'Z') && (vchar<'0' || vchar>'9')) return false;
	ele.onKeyPress=vchar;
    }

</script>
    <meta charset="UTF-8">
    </head>
<body>
    hash password_get_info
    https://www.wdb24.com/how-to-use-php-password_hash-registration-login-form/
    <form
    name="b"
    onSubmit="JavaScript:return check();"
    action="1.php">
    <input name="a" OnKeyPress="return chkNumber(this)">
    <input name="cc" OnKeyPress="return chkNumber2(this)">
    <button>dsds</button>
    </form>
    <?php
    /**
     * In this case, we want to increase the default cost for BCRYPT to 12.
     * Note that we also switched to BCRYPT, which will always be 60 characters.
     */
    $options = array("cost"=>10);
    echo password_hash("12", PASSWORD_BCRYPT, $options);
    echo hash('tiger192,3', 'a-string'), PHP_EOL;
    ?>
</body>
</html>