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
	<form action="studentPersonalaction.php" method="post" enctype="multipart/form-data" style=" padding-top: 8%;">
<div class="container" style="margin-left:93px; margin-bottom:10%;padding-left:130px; box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px; padding-top: 3%;">
        <h2 style="text-align: center;margin-top: 6%;font-family: fantasy;">Student Registration</h2>

    
   

    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>HOUSE NAME:</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_housename" style="width:500px;" placeholder="Enter House Name">
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
      <input type="text" class="form-control" name="txt_religion" style="width:500px;" placeholder="Enter Religion">
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>Caste</label>
      </div>
      <div class="col-md-6">
      <input type="text" class="form-control" name="txt_caste" style="width:500px;" placeholder="Enter Caste">
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>City</label>
      </div>
      <div class="col-md-6">
       <input type="text" class="form-control" name="txt_city" style="width:500px;" placeholder="Enter the city" required>
      </div>
    </div>
    <br>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>Pincode</label>
      </div>
      <div class="col-md-6">
       <input type="number" class="form-control" name="txt_pincode" style="width:500px;" placeholder="Username" required>
      </div>
    </div>
    <br>
    
    <div class="row">
      <input type="submit" name="submit" value="Next"  class="btn btn-primary" style="margin-left:63%"/>
    </div>
     </div>
</form>
</body>
</html>
<?php
include("footer.php");
?>