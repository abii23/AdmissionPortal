<?php 
include ("config.php"); 
if (isset($_POST["btnLogin"]))
{
$username=$_POST["txt_username"];
$password=$_POST["txt_password"];
$result=mysqli_query($con, "SELECT * from tbl_principleLogin WHERE Username='$username' AND Password='$password'");
$row=mysqli_fetch_array($result);
if($row>0) 
{ 
    header("location:../Admin/index.php");
}
else
{
     echo '<script>alert("Invalid Username or Password")</script>';
}

}
?>