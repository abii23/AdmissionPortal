<?php
include("header.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
include("config.php");
?>
	<form action="action.php" method="post" enctype="multipart/form-data" style=" padding-top: 8%;">
<div class="container" style="margin-left:93px; margin-bottom:10%;padding-left:130px; box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px; padding-top: 3%;">
        <h2 style="text-align: center;margin-top: 6%;font-family: fantasy;">Student Registration</h2>

    
   

    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>HOUSE NAME:</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_studentname" style="width:500px;" placeholder="Enter Student Name">
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>GENDER:</label>
      </div>
      <div class="col-md-6">
      <input type="radio" name="rbgender" value="male" >Male
       <input type="radio" name="rbgender" value="female" >Female
         </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>Religion</label>
      </div>
      <div class="col-md-6">
        <input type="email" class="form-control" name="txt_email" style="width:500px;" placeholder="Enter Student Email" required>
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>Caste</label>
      </div>
      <div class="col-md-6">
        <input type="tel"   pattern="[0-9]{10}" name="contact"  maxlength="12" title="ten digit cods" class="form-control" required ">
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>City</label>
      </div>
      <div class="col-md-6">
       <input type="text" class="form-control" name="txt_username" style="width:500px;" placeholder="Username" required>
      </div>
    </div>
    <br>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>Pincode</label>
      </div>
      <div class="col-md-6">
       <input type="text" class="form-control" name="txt_username" style="width:500px;" placeholder="Username" required>
      </div>
    </div>
    <br>
    
    <div class="row">
      <input type="submit" name="submit" value="Next" class="btn btn-primary" style="margin-left:63%"/>
    </div>
     </div>
</form>
</body>
</html>
<?php
include("footer.php");
?>

<script>
	function populate()
	{
		var val=document.getElementById('drpdistrict').value;
		//alert(val);
		$.ajax({
			type: "POST",
			url: "getdistrict.php",
			data: "id="+val,
			
			success: function(data){
				$("#chkboxContainer").html(data);
			}
		})
	}
	</script>
