<?php 
session_start();
include ("config.php"); 
$username=$_POST["txt_username"];
$password=$_POST["txt_password"];
$result=mysqli_query($con, "SELECT * from tbl_candidatebasicdetails WHERE Username='$username' AND Password='$password'");
$row=mysqli_fetch_array($result);
if($row>0) 
{ 
    $_SESSION["appno"]=$row["applicationnumber"];
    header("location:../candidate/index.php");
}
else
{
     echo '<script>alert("Invalid Username or Password")</script>';
}
?>