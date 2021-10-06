<?php
session_start();
include("config.php");
$Enterfathername=$_POST["txt_fathername"];
$Entermothername=$_POST["txt_mothername"];
$Entercontact=$_POST["contact"];
$Enterfatherocccupation=$_POST["txt_fatheroccupation"];
$Entermotheroccupation=$_POST["txt_motheroccupation"];
$Enterannualincome=$_POST["txt_annualincome"];
$applicationnumber=$_SESSION["appno"];
$save=mysqli_query($con,"insert into  tbl_candidateparentdetails(nameoffather,nameofmother,fathercontact,fatheroccupation,motheroccupation,annualincome,applicationnumber)values('$Enterfathername','$Entermothername','$Entercontact','$Enterfatherocccupation','$Entermotheroccupation','$Enterannualincome','$applicationnumber')");
echo "<script>alert('Personal Registration Successfull!!!'); window.location='studentEducation.php'</script>";
echo $save;
?>