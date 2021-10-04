<?php
include("config.php");
$courseid=$_POST["txt_courseid"];
$Entercoursename=$_POST["txt_coursename"];
$Entershortname=$_POST["txt_shortname"];
$Entercoursetype=$_POST["txt_coursetype"];
$save=mysqli_query($con,"update tbl_course set coursename='$Entercoursename',courseshortname='$Entershortname' where courseid='$courseid'");

if($save){
echo "<script>alert('Course Updated Successfull!!!'); window.location='viewcourse.php'</script>";

}
else{
	echo "<script>alert('Update failed !!!'); window.location='editlocation.php'</script>";
}


?>