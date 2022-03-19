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
<form action="religionRegisterationAction.php" method="post" enctype="multipart/form-data" style=" padding-top: 8%;">
<div class="container" style="margin: left 18px;3px; margin-bottom:10%;padding-left:130px; box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px; padding-top: 3%;">
        <h2 style="text-align: center;margin-top: 6%;font-family: fantasy;">Religion Registeration</h2>

    <br>    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>Religion Name:</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_religionname" style="width:500px;" placeholder="Enter the Religion name">
      </div>
    </div>
    <br>
    <div style="margin-left:42%;margin-top:10px;" >
    <input type="submit" name="btnSubmit" value="submit" class="btn btn-primary" onclick="religionRegisterationAction.php" >
    
    <input type="submit" name="btnEdit" value="Edit" class="btn btn-primary" onclick="" >
</div>
      
     </div>
    