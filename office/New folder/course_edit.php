<?php
include("header.php");
include("config.php");
$courseid=$_GET["courseid"];
$sql=mysqli_query($con,"select * from tbl_course where courseid='$courseid'");
$row=mysqli_fetch_array($sql);
$coursename=$row["coursename"];
$shortname=$row["courseshortname"];
$coursetype=$row["coursetype"];
$courseCriteria=$row["course_criteria"];
?>
<html>
<body>
<form method="POST" action="courseeditaction.php">
 <div class="container" style="margin-left:93px; margin-bottom:3%;padding-left:130px; box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px; margin-top: 0%;"><br>
    <h2 style="text-align: center;margin-top: 16%;">Edit Course</h2>
    <br>
      <input type="hidden" class="form-control" name="txt_courseid" style="width:500px;" placeholder="Enter coursename" value="<?php echo $courseid;?>">
    <div class="row">
    <div class="col-md-3" style="text-align:right">
        <label>Course Name</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_coursename" style="width:500px;" placeholder="Enter coursename" value="<?php echo $coursename;?>" required>
      </div>   
    </div>
    <br>
    <div class="row">
      <div class="col-md-3" style="text-align:right">
        <label >Short Name</label>
      </div>
      <div class="col-md-3">
        <input type="text" name="txt_shortname" class="form-control" style="width:500px;" placeholder="Enter shortname" value="<?php echo $shortname;?>" required>
      </div>
     </div>
     <div class="row" >
      <div class="col-md-3" style="text-align:right ;margin: top 23px;">
        <label style="margin-top: 23px;" >course Type</label>
      </div>
      <div class="col-md-3">
      <input type="radio" name="txt_coursetype" style="margin-top: 23px;" value="UG">UG
           <input type="radio" name="txt_coursetype" style="margin-top: 23px;" value="PG">PG
    </div>
     </div>
     <div class="row">
    <div class="col-md-3" style="text-align:right">
        <label>Course Criteria</label>
      </div>
      <div class="col-md-6">
      <textarea rows="10" cols="60" name="txtcriteria" size= "60" value="<?php echo $courseCriteria;?>" ><?php echo $courseCriteria;?> </textarea>
           
      </div>
    </div>
     <div class="row">
      <input type="submit" name="btnsubmit" value="Save" class="btn btn-primary" style="margin-left:53%">
    </div>
    
    </div>
    
</form>

</body>
</html>