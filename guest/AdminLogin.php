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
<div class="container" style="margin: left 18px;3px; margin-bottom:10%;padding-left:130px; box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px; padding-top: 3%;">
        <h2 style="text-align: center;margin-top: 6%;font-family: fantasy;">Admin Login</h2>

    <br>    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>Username:</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_username" style="width:500px;" placeholder="Enter the user username">
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>Password:</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_password" style="width:500px;" placeholder="Enter the password">
      </div>
    </div>
    <br>
    <div style="margin-left:4%" class="row">
      <input type="submit" name="btnLogin" value="Login" class="btn btn-primary" style="margin-left:63%">
    </div>
     </div>