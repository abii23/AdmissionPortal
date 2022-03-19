<?php
include("config.php");
session_start();
$Enterfathername=$_POST["txt_fathername"];
$Entermothername=$_POST["txt_mothername"];
$Entercontact=$_POST["contact"];
$Enterfatherocccupation=$_POST["txt_fatheroccupation"];
$Entermotheroccupation=$_POST["txt_motheroccupation"];
$Enterannualincome=$_POST["txt_annualincome"];
$applicationnumber=$_SESSION["appno"];
$save=mysqli_query($con,"insert into  tbl_candidateparentdetails(nameoffather,nameofmother,fathercontact,fatheroccupation,motheroccupation,annualincome,applicationnumber)
values('$Enterfathername','$Entermothername','$Entercontact','$Enterfatherocccupation','$Entermotheroccupation','$Enterannualincome',$applicationnumber)");

//echo "insert into  tbl_candidateparentdetails(nameoffather,nameofmother,fathercontact,fatheroccupation,motheroccupation,annualincome,applicationnumber)
// values('$Enterfathername','$Entermothername','$Entercontact','$Enterfatherocccupation','$Entermotheroccupation','$Enterannualincome',$applicationnumber)";

if($save)
{

    echo "<script>alert('Personal Registration Successfull!!!'); window.location='studentEducation.php'</script>";
}
else
{
    echo "<script>alert('Personal Registration Failed!!!'); window.location='studentEducation.php'</script>";


}
echo $save;
?>