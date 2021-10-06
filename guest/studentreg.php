
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
	<form action="studentregaction.php" method="post" enctype="multipart/form-data" style=" padding-top: 8%;">
<div class="container" style="margin-left:93px; margin-bottom:10%;padding-left:130px; box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px; padding-top: 3%;">
        <h2 style="text-align: center;margin-top: 6%;font-family: fantasy;">Student Registration</h2>

    
   

    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>STUDENT  FIRST NAME:</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_studentfirstname" style="width:500px;" placeholder="Enter first Name">
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>STUDENT  LAST NAME:</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_studentlastname" style="width:500px;" placeholder="Enter last Name">
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>DOB:</label>
      </div>
      <div class="col-md-6">
        <input type="date" class="form-control" name="txt_studentdob" style="width:500px;" placeholder="Enter Student Name">
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>EMAIL:</label>
      </div>
      <div class="col-md-6">
        <input type="email" class="form-control" name="txt_email" style="width:500px;" placeholder="Enter Student Email" required>
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>CONTACT:</label>
      </div>
      <div class="col-md-6">
        <input type="tel"   pattern="[0-9]{10}" name="txt_contact"  maxlength="12" title="ten digit cods" class="form-control" required ">
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>USER NAME:</label>
      </div>
      <div class="col-md-6">
       <input type="text" class="form-control" name="txt_username" style="width:500px;" placeholder="Username" required>
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>PASSWORD:</label>
      </div>
      <div class="col-md-6">
       <input type="password" class="form-control" name="txt_password" style="width:500px;" placeholder="Password" required>
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