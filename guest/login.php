
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
	<form action="loginaction.php" method="post" enctype="multipart/form-data" style=" padding-top: 8%;">
<div class="container" style="margin-left:93px; margin-bottom:10%;padding-left:130px; box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px; padding-top: 3%;">
        <h2 style="text-align: center;margin-top: 6%;font-family: fantasy;">LOGIN</h2>

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
      <input type="submit" name="submit" value="Login" class="btn btn-primary" style="margin-left:63%"/>
    </div>
     </div>
</form>
</body>
</html>
<?php
include("footer.php");
?>