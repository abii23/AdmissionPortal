<?php
include("config.php");
//session_start();
$Enterfathername=$_POST["txt_fathername"];
$Entermothername=$_POST["txt_mothername"];
$Entercontact=$_POST["contact"];
$Enterfatherocccupation=$_POST["txt_fatheroccupation"];
$Entermotheroccupation=$_POST["txt_motheroccupation"];
$Enterannualincome=$_POST["txt_annualincome"];
$applicationnumber=$_SESSION["appno"];
$save=mysqli_query($con,"UPDATE `tbl_candidateparentdetails` SET `nameoffather`='$Enterfathername',`fathercontact`='$Entercontact',`nameofmother`='$Entermothername',`fatheroccupation`='$Enterfatherocccupation',`motheroccupation`='$Entermotheroccupation',`annualincome`='$Enterannualincome' WHERE applicationnumber='$applicationnumber'");



if($save)
{

    echo "<script>alert('Parent Details Updation Successfull!!!'); window.location='studentEducation.php'</script>";
}
else
{
    echo "<script>alert('Parent Details Updation Failed!!!'); window.location='studentEducation.php'</script>";


}
echo $save;
?>