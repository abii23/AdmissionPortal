<?php
//session_start();
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

$row=mysqli_query($con,"select * from tbl_candidatebasicdetails cb inner join tbl_class10details c1 on cb.applicationnumber=c1.applicationnumber inner join tbl_class12details c2 on cb.applicationnumber=c2.applicationnumber where cb.applicationnumber='$appno'");

echo "select * from tbl_candidatebasicdetails cb inner join tbl_class10details c1 on cb.applicationnumber=c1.applicationnumber inner join tbl_class12details c2 on cb.applicationnumber=c2.applicationnumber where cb.applicationnumber='$appno'";

$result=mysqli_fetch_array($row);
$edit=$result["isedit"];
?>
	<form action="studentEducationAction.php" method="post" enctype="multipart/form-data" style=" padding-top: 8%;">
<div class="container" style="margin-left:93px; margin-bottom:10%;padding-left:130px; box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px; padding-top: 3%;">
        <h2 style="text-align: center;margin-top: 6%;font-family: fantasy;">Student Registration</h2>
        <h2 style="margin-top: 6%;font-family: fantasy; margin-left: 15%;">10th </h2>

    
   

    <div class="row" style="margin-top: 5%;">
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
        <input type="text" class="form-control" name="txt_place" style="width:500px;" placeholder="Enter place of institution" value="<?php echo $result["placeofinstitution"]; ?>">
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>STATE OF INSTITUTION</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_state" style="width:500px;" placeholder="Enter state of institution" required value="<?php echo $result["stateofinstitution"]; ?>">
      </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-3" style="text-align:right">
            <label>YEAR OF PASSOUT</label>
      </div>
      <div class="col-md-6">
        <input type="number" name="txt_year" class="form-control" required " value="<?php echo $result["yearofpassout"]; ?>">
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>MARK IN PERCENTAGE</label>
      </div>
      <div class="col-md-6">
       <input type="number" class="form-control" name="txt_mark" style="width:500px;" placeholder="enter mark in percentage" required value="<?php echo $result["class10ofmark"]; ?>">
      </div>
    </div>
    <br>
</br>
<br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>Board of Examination</label>
      </div>
      <div class="col-md-6">
       <input type="text" class="form-control" name="txt_10Board" style="width:500px;" placeholder="enter Board of Examination" required value="<?php echo $result["boardname"]; ?>">
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>NO. OF ATTEMPTS</label>
      </div>
      <div class="col-md-6">
       <input type="number" class="form-control" name="txt_attempt" style="width:500px;" placeholder=" number no. of attempts" required value="<?php echo $result["noofattempts"]; ?>">
      </div>
    </div>
    <br>
    <h2 style="margin-top: 6%;font-family: fantasy; margin-left: 15%;">12th </h2>

    <div class="row" style="margin-top: 5%;">
     <div class="col-md-3" style="text-align:right">
        <label>INSTITUTION NAME:</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_institutionplustwoname" style="width:500px;" placeholder="Enter institution name" value="<?php echo $result["institution_name"]; ?>">
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
     <label>PLACE OF INSTITUTION:</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_institutionplace" style="width:500px;" placeholder="Enter place of institution" value="<?php echo $result["place_of_institution"]; ?>">
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>STATE OF INSTITUTION</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_institutionstate" style="width:500px;" placeholder="Enter state of institution" required value="<?php echo $result["state_of_institution"]; ?>">
      </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-3" style="text-align:right">
            <label>YEAR OF PASSOUT</label>
      </div>
      <div class="col-md-6">
        <input type="number" name="txt_plustwoyear" class="form-control" required " value="<?php echo $result["year_of_passout"]; ?>">
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>MARK OF 11 IN PERCENTAGE</label>
      </div>
      <div class="col-md-6">
       <input type="text" class="form-control" name="txt_11mark" style="width:500px;" placeholder="enter mark in percentage" required value="<?php echo $result["class11ofmark"]; ?>">
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right;padding: 2%;">
        <label>MARK OF 12 IN PERCENTAGE</label>
      </div>
      <div class="col-md-6">
       <input type="text" class="form-control" name="txt_12mark" style="width:500px;" placeholder="enter mark in percentage" required value="<?php echo $result["class12ofmark"]; ?>">
      </div>
    </div>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>Board of Examination</label>
      </div>
      <div class="col-md-6">
       <input type="text" class="form-control" name="txt_12Board" style="width:500px;" placeholder="enter Board of Examination" required value="<?php echo $result["board_name"]; ?>">
      </div>
    </div>

<?php
    include("config.php");
    $result = mysqli_query($con, "select * from tbl_candidatebasicdetails");
    $row = mysqli_fetch_array($result)  ;
    //$coursetype=[''];


    
    ?>

    
    <div class="row">
      <input type="submit" name="submit" value="Next" class="btn btn-primary" style="margin-left:63%;margin-top: 5%;" <?php if($edit=="0") echo "disabled" ?> />
    </div>
     </div>
</form>
</body>
</html>
<?php
include("footer.php");
?>