<?php
include("config.php");
$Entercoursename=$_POST["txt_coursename"];
$Entershortname=$_POST["txt_shortname"];
$Entercourstype=$_POST["txtcourse"];
$EntercourseCriteria=$_POST['txtcriteria'];
$Entercapacity=$_POST['txtcapacity'];
$sql=mysqli_query($con,"SELECT  count(*) as count FROM tbl_course WHERE coursename='$Entercoursename'");
$rowset=mysqli_fetch_array($sql);

//echo "insert into tbl_course(coursename,courseshortname,coursetype,course_criteria,seat_cappacity)values('$Entercoursename','$Entershortname','$Entercourstype','$EntercourseCriteria','$Entercapacity')";

//echo "insert into tbl_course(coursename,courseshortname,coursetype,seat_cappacity,course_criteria)values('$Entercoursename','$Entershortname','$Entercourstype','$Entercapacity','$EntercourseCriteria')";

if($rowset['count']>0)
{

	echo"<script>alert('Course Details alraedy exist');window.location='viewcourse.php'</script>";
}
else
{	
$save=mysqli_query($con,"insert into tbl_course(coursename,courseshortname,coursetype,seat_cappacity,course_criteria)values('$Entercoursename','$Entershortname','$Entercourstype','$Entercapacity','$EntercourseCriteria')");
echo "<script>alert('Course Registration Successfull!!!'); window.location='viewcourse.php'</script>";
}

?>