<?php 
include ("config.php"); 
if (isset($_POST["btnSubmit"]))
{
$religionname=$_POST["txt_religionname"];
$result=mysqli_query($con,"INSERT INTO `dbadmission`.`tbl_religion` (
    `religionname`
    )
    VALUES ( 'asd'
    ");
?>