<?php
session_start();
include("config.php");
$Enter10institutionname=$_POST["txt_institutiontenname"];
$Enter10institutionplace=$_POST["txt_place"];
$Enter10institutionstate=$_POST["txt_state"];
$Enter10year=$_POST["txt_year"];
$Enter10mark=$_POST["txt_mark"];
$Enter10attempt=$_POST["txt_attempt"];
$Enter10Board=$_POST['txt_10Board'];
$applicationnumber=$_SESSION["appno"];

$Enter12institutionname=$_POST["txt_institutionplustwoname"];
$Enter12institutionplace=$_POST["txt_institutionplace"];
$Enter12institutionstate=$_POST["txt_institutionstate"];
$Enter12year=$_POST["txt_plustwoyear"];
$Enter11mark=$_POST["txt_11mark"];
$Enter12mark=$_POST["txt_12mark"];
$Enter12Board=$_POST['txt_12Board'];
//echo $con,"insert into  tbl_class12details(institution_name,place_of_institution,state_of_institution,year_of_passout,class11ofmark,class12ofmark,applicationnumber)values('$Enter12institutionname','$Enter12institutionplace','$Enter12institutionstate','$Enter12year','$Enter11mark','$Enter12mark','$applicationnumber','')";
//echo "insert into  tbl_class10details(institutionname,placeofinstitution,stateofinstitution,yearofpassout,class10ofmark,noofattempts,applicationnumber,boardname)values('$Enter10institutionname','$Enter10institutionplace','$Enter10institutionstate','$Enter10year','$Enter10mark','$Enter10attempt','$applicationnumber','')";
$save=mysqli_query($con,"insert into  tbl_class10details(institutionname,placeofinstitution,stateofinstitution,yearofpassout,class10ofmark,noofattempts,applicationnumber,boardname)values('$Enter10institutionname','$Enter10institutionplace','$Enter10institutionstate','$Enter10year','$Enter10mark','$Enter10attempt','$applicationnumber','$Enter10Board')");
$save=mysqli_query($con,"insert into  tbl_class12details(institution_name,place_of_institution,state_of_institution,year_of_passout,class11ofmark,class12ofmark,applicationnumber,board_name)values('$Enter12institutionname','$Enter12institutionplace','$Enter12institutionstate','$Enter12year','$Enter11mark','$Enter12mark','$applicationnumber','$Enter12Board')");
echo "<script>alert('PROFILE COMPLETED!!!'); window.location='index.php'</script>";
?>