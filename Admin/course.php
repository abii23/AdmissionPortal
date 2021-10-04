<?php
include("header.php");
?>
<html>
<body>
<form method="POST" action="courseaction.php">
 <div class="container" style="margin-left:93px; margin-bottom:3%;padding-left:130px; box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px; margin-top: 5%;"><br>
    <h2 style="text-align: center;margin-top: 6%;">Course Registration</h2>
    <br>
    <div class="row">
    <div class="col-md-3" style="text-align:right">
        <label>Course Name</label>
      </div>
      <div class="col-md-6">
        <input type="text"  pattern="^[A-Za_z][A-Za-z -]+$" class="form-control" name="txt_coursename" style="width:500px;" placeholder="Enter coursename" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3" style="text-align:right">
        <label >Short Name</label>
      </div>
      <div class="col-md-3">
        <input type="text"  pattern="^[A-Za_z][A-Za-z -]+$" name="txt_shortname" class="form-control" style="width:500px;" placeholder="Enter shortname" required/>
      </div>
    </div>
    <div class="row">
    <div class="col-md-3" style="text-align:right">
        <label>Course Type</label>
      </div>
      <div class="col-md-6">
      <input type="radio" name="txtcourse" value="male">UG
           <input type="radio" name="txtcourse" value="female">PG
 
      </div>
    </div>
    <br>
     <div class="row">
      <input type="submit" name="submit" value="Save" class="btn btn-primary" style="margin-left:63%">
    </div>
    </div>
</form>

</body>
</html>
<?php
include("footer.php");
?>
