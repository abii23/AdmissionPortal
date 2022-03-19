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
$appno=$_SESSION["appno"];
echo $appno;

$row=mysqli_query($con,"select * from tbl_candidatebasicdetails cb inner join tbl_degree cp on cb.applicationnumber=cp.applicationnumber where cb.applicationnumber='$appno'");





$result=mysqli_fetch_array($row);
$edit=$result["isedit"];



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
        <input type="text" class="form-control" name="txt_universityname" style="width:500px;" placeholder="Enter university name" value="<?php echo $result["universityname"]; ?>">
      </div>
    </div>
    <br>
    <div class="row" style=" 5%;">
     <div class="col-md-3" style="text-align:right">
        <label>INSTITUTION NAME:</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_institutiontenname" style="width:500px;" placeholder="Enter institution name" value="<?php echo $result["institutionname"]; ?>">
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
     <label>PLACE OF INSTITUTION:</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_place" style="width:500px;" placeholder="Enter place of institution" value="<?php echo $result["institutionplace"]; ?>">
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>STATE OF INSTITUTION</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_state" style="width:500px;" placeholder="Enter state of institution" required value="<?php echo $result["institutionstate"]; ?>">
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>STREAM</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_stream" style="width:500px;" placeholder="Enter the stream" required value="<?php echo $result["stream"]; ?>">
      </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-3" style="text-align:right">
            <label>YEAR OF PASSOUT</label>
      </div>
      <div class="col-md-6">
        <input type="DATE" name="txt_year" title="ten digit cods" class="form-control" required value="<?php echo $result["passoutyear"]; ?>">
      </div>
    </div>
    <br>
    
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>AGGREGATE SCORE</label>
      </div>
      <div class="col-md-6">
       <input type="number" class="form-control" name="txt_mark" style="width:500px;" placeholder="enter mark in percentage" required value="<?php echo $result["aggregatescore"]; ?>">
      </div>
    </div>
    <br>
    <br>
    
    <div class="row">
      <input type="submit" name="submit" value="Next" class="btn btn-primary" style="63%; 5%;" <?php if($edit=="0") echo "disabled" ?> />
    </div>
     </div>
</form>
</body>
</html>
<?php
include("footer.php");
?>