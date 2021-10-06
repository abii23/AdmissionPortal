<?php
session_start();
include("config.php");
$Enterhousename=$_POST["txt_housename"];
$Entergender=$_POST["rbgender"];
$Enterreligion=$_POST["txt_religion"];
$Entercaste=$_POST["txt_caste"];
$Entercity=$_POST["txt_city"];
$Enterpincode=$_POST["txt_pincode"];
$applicationnumber=$_SESSION["appno"];

$save=mysqli_query($con,"insert into tbl_candidatepersonaldetails(housename,gender,religion,caste,city,pincode,applicationnumber)values('$Enterhousename','$Entergender','$Enterreligion','$Entercaste','$Entercity','$Enterpincode','$applicationnumber')");
echo "<script>alert('Personal Registration Successfull!!!'); window.location='parent.php'</script>";
echo $save;
?>