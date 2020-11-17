<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2</title>
    <script type="text/javascript">
       function ismaxlength(obj){
 
 var mlength=obj.getAttribute? parseInt(obj.getAttribute("maxlength")) : "กกก"
  
 if (obj.getAttribute && obj.value.length>mlength){
  
 obj.value=obj.value.substring(0,mlength);
 }
       }
    </script>
    </head>
<body>

    <form
    name="formhashpassad"
    method="POST"
    action="insert.php"
    >
    <select name="a" id="cars">
        <option>Volvo</option>
        <option>Saab</option>
        <option>Opel</option>
        <option>Audi</option>
    </select>
    <button>เพิ่ม</button>
    </form>
<!--
    <form
    name="formhashpassad"
    method="POST"
    action=""
    >
    <input type="text" name="a" maxlength="10" onkeyup="return ismaxlength(this)">
    <button>เพิ่ม</button>
    </form>
-->
</body>
</html>