<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<title>เทส Bootstrap Modal</title>
<style>
</style>
</head>
<body>
    <form
    name=""
    method="POST"
	action="">
    <input type="text" name="input1" class="form-control" placeholder="กรุณากรอกข้อมูล">
	<input type="text" name="input2" class="form-control" placeholder="กรุณากรอกข้อมูล">
	<input type="text" name="input3" class="form-control" placeholder="กรุณากรอกข้อมูล">
	<input type="text" name="input4" class="form-control" placeholder="กรุณากรอกข้อมูล">
	<input type="text" name="input5" class="form-control" placeholder="กรุณากรอกข้อมูล">

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        บันทึกข้อมูล
    </button>

    <!-- Modal1 -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">การแจ้งเตือน</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    กรุณาตรวจสอบข้อมูลก่อนยืนยันบันทึกข้อมูล
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                    <button name="btnsave" type="btnsave" class="btn btn-primary aa" data-toggle="modal" data-target="#myModal">ยืนยันการบันทึกข้อมูล</button>
                </div>
            </div>
        </div>
    </div>
    </form>

<?php
    if(isset($_POST["btnsave"]))
    {
		/*$("#myModal").show();*/
		echo '<script type="text/javascript">
		$(document).ready(function()
		{
        	$(".aa").click(function()
			{
          $("#myModal").show();
				  $("#exampleModal").hide();
      });
    });
		</script>';
	}
?>
	<!-- Modal2 -->
    <div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Modal Title</h5>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<p>This is a simple Bootstrap modal. Click the "Cancel button", "cross icon" or "dark gray area" to close or hide the modal.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						<button type="button" class="btn btn-primary">Save</button>
					</div>
        	</div>
    	</div>
	</div>
</body>
</html>
