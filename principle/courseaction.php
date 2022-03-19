<?php
include("config.php");
$Entercoursename=$_POST["txt_coursename"];
$Entershortname=$_POST["txt_shortname"];
$Entercourstype=$_POST["txtcourse"];
$EntercourseCriteria=$_POST["txtcriteria"];
$Enterseat=$_POST["txt_seat"];
$sql=mysqli_query($con,"SELECT  count(*) as count FROM tbl_course WHERE coursename='$Entercoursename'");
$rowset=mysqli_fetch_array($sql);
//echo "insert into tbl_course(coursename,courseshortname,coursetype,course_criteria,seat_cappacity)values('$Entercoursename','$Entershortname','$Entercourstype','$EntercourseCriteria','$Enterseat')"
if($rowset['count']>0)
{

	echo"<script>alert('Course Details alraedy exist');window.location='viewcourse.php'</script>";
}
else
{	
$save=mysqli_query($con,"insert into tbl_course(coursename,courseshortname,coursetype,course_criteria,seat_cappacity)values('$Entercoursename','$Entershortname','$Entercourstype','$EntercourseCriteria','$Enterseat')");
echo "<script>alert('Course Registration Successfull!!!'); window.location='viewcourse.php'</script>";
}

?>