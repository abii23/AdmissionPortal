
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
$applicationnumber = $_GET["applicationnumber"];

$sql=mysqli_query($con,"select * from tbl_interview where applicationnumber='$applicationnumber'");

$row=mysqli_fetch_array($sql);



$_SESSION["applicationnumber"]=$applicationnumber;
?>
	<form action="addMarkAction.php" method="post" enctype="multipart/form-data" style=" padding-top: 8%;">
<div class="container" style="margin-left:93px; margin-bottom:10%;padding-left:130px; box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px; padding-top: 3%;">
        <h2 style="text-align: center;margin-top: -1%;font-family: fantasy;">Add Marks</h2>
       

        <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>Application Number</label>
      </div>
      <div class="col-md-6">
        <input type="number" class="form-control" name="txtappno" value ="<?php echo  $applicationnumber;?>"  style="width:500px;" readonly>
      </div>
    </div>
    <br>

    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>ENGLISH PROFEICENCY:</label>
      </div>
      <div class="col-md-6">
        <input type="number" class="form-control" name="txt_language" style="width:500px;" placeholder="Enter the mark" <?php if($row>0){ echo "value=".$row['language'];   } ?>>
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>ATTITUDE:</label>
      </div>
      <div class="col-md-6">
        <input type="number" class="form-control" name="txt_attitude" style="width:500px;" placeholder="Enter the mark" <?php if($row>0){ echo "value=".$row['attitude'];   } ?>>
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>SUBJECT KNOWLEDGE:</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_skills" style="width:500px;" placeholder="Enter the skills" <?php if($row>0){ echo "value=".$row['subjectknowledge'];   } ?>>
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>INTERVIEWED BY:</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_interviewed" style="width:500px;" placeholder="Enter interviewer Name" <?php if($row>0){ echo "value=".$row['interviewername'];   } ?>>
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>INTERVIEWED DATE:</label>
      </div>
      <div class="col-md-6">
        <input type="date" class="form-control" name="txt_interviewedDate" style="width:500px;" <?php if($row>0){ echo "value=".$row['interviewdate'];   } ?>>
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>COMMENTS:</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_comment" style="width:500px;" placeholder="Enter the comments" <?php if($row>0){ echo "value=".$row['comments'];   } ?>>
      </div>
    </div>
    <br>
   
    <div class="row">
      <input type="submit" name="submit" value="Submit" class="btn btn-primary" style="margin-left:43%; margin-bottom: 16px" <?php if($row>0){ echo "disabled";   } ?> />
    </div>
    <p style="color: #ff3333;">NOTE : mark should be uploaded out of 100</p>
      </div>
</form>
</body>
</html>
<?php
include("footer.php");
?>
