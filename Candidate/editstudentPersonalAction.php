<?php
// echo "<script>alert('success')</script>";

if(isset($_POST["submit"]))
{

echo "hi";


include("config.php");
session_start();
$Enterhousename=$_POST["txt_housename"];
$Entergender=$_POST["txt_rbgender"];
$Enterreligion=$_POST["txt_Religion"];
$Entercaste=$_POST["txt_caste"];
$Entercity=$_POST["txt_city"];
$Enterpincode=$_POST["txt_pincode"];
$applicationnumber=$_SESSION["appno"];
$stateid=$_POST['stateid'];
$distid=$_POST['drpdistrict'];
// echo $distid;
// exit;

$sql=mysqli_query($con,"UPDATE `tbl_candidatepersonaldetails` SET `stateid`='$stateid',`distid`='$distid',`gender`='$Entergender',`housename`='$Enterhousename',`religion`='$Enterreligion',`caste`='$Entercaste',`city`='$Entercity',`pincode`='$Enterpincode' WHERE applicationnumber='$applicationnumber' ");






//echo "insert into tbl_candidatepersonaldetails(housename,gender,religion,caste,city,pincode,applicationnumber,distid,stateid)values('$Enterhousename','$Entergender','$Enterreligion','$Entercaste','$Entercity','$Enterpincode','$applicationnumber','$distid','$stateid')";
//echo "insert into tbl_candidatepersonaldetails(housename,gender,religion,caste,city,pincode,applicationnumber,distid,stateid)values('$Enterhousename','$Entergender','$Enterreligion','$Entercaste','$Entercity','$Enterpincode','$applicationnumber','$distid','$stateid')";

if($sql)
{
    echo "<script>alert('Personal Details Updated.'); window.location='viewMoreDetail.php'</script>";
}


//echo "insert into tbl_candidatepersonaldetails(housename,gender,religion,caste,city,pincode,applicationnumber,distid,stateid)values('$Enterhousename','$Entergender','$Enterreligion','$Entercaste','$Entercity','$Enterpincode','$applicationnumber','$distid','$stateid')";
}

?>