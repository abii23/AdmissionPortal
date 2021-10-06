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
	<form action="studentEducationaction.php" method="post" enctype="multipart/form-data" style=" padding-top: 8%;">
<div class="container" style="margin-left:93px; margin-bottom:10%;padding-left:130px; box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px; padding-top: 3%;">
        <h2 style="text-align: center;margin-top: 6%;font-family: fantasy;">Student Registration</h2>
        <h2 style="margin-top: 6%;font-family: fantasy; margin-left: 15%;">10th </h2>

    
   

    <div class="row" style="margin-top: 5%;">
     <div class="col-md-3" style="text-align:right">
        <label>INSTITUTION NAME:</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_institutiontenname" style="width:500px;" placeholder="Enter institution name">
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
     <label>PLACE OF INSTITUTION:</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_place" style="width:500px;" placeholder="Enter place of institution">
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>STATE OF INSTITUTION</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_state" style="width:500px;" placeholder="Enter state of institution" required>
      </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-3" style="text-align:right">
            <label>YEAR OF PASSOUT</label>
      </div>
      <div class="col-md-6">
        <input type="DATE" name="txt_year" title="ten digit cods" class="form-control" required ">
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>MARK IN PERCENTAGE</label>
      </div>
      <div class="col-md-6">
       <input type="number" class="form-control" name="txt_mark" style="width:500px;" placeholder="enter mark in percentage" required>
      </div>
    </div>
    <br>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>NO. OF ATTEMPTS</label>
      </div>
      <div class="col-md-6">
       <input type="number" class="form-control" name="txt_attempt" style="width:500px;" placeholder=" number no. of attempts" required>
      </div>
    </div>
    <br>
    <h2 style="margin-top: 6%;font-family: fantasy; margin-left: 15%;">12th </h2>

    <div class="row" style="margin-top: 5%;">
     <div class="col-md-3" style="text-align:right">
        <label>INSTITUTION NAME:</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_institutionplustwoname" style="width:500px;" placeholder="Enter institution name">
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
     <label>PLACE OF INSTITUTION:</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_institutionplace" style="width:500px;" placeholder="Enter place of institution">
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>STATE OF INSTITUTION</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_institutionstate" style="width:500px;" placeholder="Enter state of institution" required>
      </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-3" style="text-align:right">
            <label>YEAR OF PASSOUT</label>
      </div>
      <div class="col-md-6">
        <input type="DATE" name="txt_plustwoyear" title="ten digit cods" class="form-control" required ">
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>MARK OF 11 IN PERCENTAGE</label>
      </div>
      <div class="col-md-6">
       <input type="text" class="form-control" name="txt_11mark" style="width:500px;" placeholder="enter mark in percentage" required>
      </div>
    </div>
    <br>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>MARK OF 12 IN PERCENTAGE</label>
      </div>
      <div class="col-md-6">
       <input type="text" class="form-control" name="txt_12mark" style="width:500px;" placeholder="enter mark in percentage" required>
      </div>
    </div>
    
    <div class="row">
      <input type="submit" name="submit" value="Next" class="btn btn-primary" style="margin-left:63%;margin-top: 5%;" />
    </div>
     </div>
</form>
</body>
</html>
<?php
include("footer.php");
?>