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
  <form action="degreeaction.php" method="post" enctype="multipart/form-data" style=" padding-top: 8%;">
<div class="container" style="93px; padding-left:130px; box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px; padding-top: 10%;">
        <h2 style="text-align: center; 6%; fantasy;">Student Registration</h2>
        <h2 style=" 6%; fantasy:5%;"></h2>

    <div class="row" style=" 5%;">
     <div class="col-md-3" style="text-align:right">
        <label>UNIVERSITY NAME:</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_universityname" style="width:500px;" placeholder="Enter university name">
      </div>
    </div>
    <br>
    <div class="row" style=" 5%;">
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
        <label>STREAM</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_stream" style="width:500px;" placeholder="Enter the stream" required>
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
        <label>AGGREGATE SCORE</label>
      </div>
      <div class="col-md-6">
       <input type="number" class="form-control" name="txt_mark" style="width:500px;" placeholder="enter mark in percentage" required>
      </div>
    </div>
    <br>
    <br>
    
    <div class="row">
      <input type="submit" name="submit" value="Next" class="btn btn-primary" style="63%; 5%;" />
    </div>
     </div>
</form>
</body>
</html>
<?php
include("footer.php");
?>