<?php
include("config.php");
if(isset($_GET["course_id"]))
{
 $cou_id=$_GET["course_id"];
// echo "delete from tbl_course where courseid=$cou_id";
mysqli_query($con,"delete from tbl_course where courseid=$cou_id");
echo "<script> alert('couese Deleted !!');window.location='viewcourse.php'</script>";
}
?>