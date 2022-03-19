<?php 
include ("config.php"); 
if (isset($_POST["btnLogin"]))
{
$username=$_POST["txt_username"];
$password=$_POST["txt_password"];
$result=mysqli_query($con, "SELECT * from tbl_userlogin WHERE Username='$username' AND Password='$password'");
$row=mysqli_fetch_array($result);
$status=$row["user_status"];
if($row>0) 
{ 
    if($status==1)
    {

        header("location:../interviewer/index.php");
    }
    elseif($status==2)
    {
        header("location:../principle/index.php");
    }
    elseif($status==3)
    {
        header("location:../office/index.php");
    }
    elseif($status==4)
    {
        header("location:../Admin/index.php");
    }
}
else
{
     echo '<script>alert("Invalid Username or Password")</script>';
}
}
?>