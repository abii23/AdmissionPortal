
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

    <br>
   

    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>NAME OF FATHER:</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_studentname" style="width:500px;" placeholder="Enter Father Name">
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>NAME OF MOTHER:</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_studentname" style="width:500px;" placeholder="Enter Father Name">
      </div>
    </div>
    <br>
    
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label> FATHER CONTACT:</label>
      </div>
      <div class="col-md-6">
        <input type="tel"   pattern="[0-9]{10}" name="contact"  maxlength="12" title="ten digit cods" class="form-control" required placeholder="Enter the number">
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label> MOTHER CONTACT:</label>
      </div>
      <div class="col-md-6">
        <input type="tel"   pattern="[0-9]{10}" name="contact"  maxlength="12" title="ten digit cods" class="form-control" required placeholder="Enter the number">
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>FATHER OCCUPATON:</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_studentname" style="width:500px;" placeholder="Enter the father occupation">
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>MOTHER OCCUPATON:</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_studentname" style="width:500px;" placeholder="Enter the mother occupation">
      </div>
    </div>
    <br>
    
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>ANNUAL INCOME:</label>
      </div>
      <div class="col-md-6">
        <input type="number" class="form-control" name="txt_annualincome" style="width:500px;" placeholder="Enter annual income">
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