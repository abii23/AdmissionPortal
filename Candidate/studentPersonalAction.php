<?php
// echo "<script>alert('success')</script>";

if(isset($_POST["submit"]))
{




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

$sql=mysqli_query($con,"INSERT INTO `tbl_candidatepersonaldetails`(`applicationnumber`, `stateid`, `distid`, `gender`, `housename`, `religion`, `caste`, `city`, `pincode`) VALUES('$applicationnumber','$stateid','$distid','$Entergender','$Enterhousename','$Enterreligion','$Entercaste','$Entercity','$Enterpincode')");
//echo "INSERT INTO `tbl_candidatepersonaldetails`(`applicationnumber`, `stateid`, `distid`, `gender`, `housename`, `religion`, `caste`, `city`, `pincode`) VALUES('$applicationnumber','$stateid','$distid','$Entergender','$Enterhousename','$Enterreligion','$Entercaste','$Entercity','$Enterpincode')";




//echo "insert into tbl_candidatepersonaldetails(housename,gender,religion,caste,city,pincode,applicationnumber,distid,stateid)values('$Enterhousename','$Entergender','$Enterreligion','$Entercaste','$Entercity','$Enterpincode','$applicationnumber','$distid','$stateid')";
//echo "insert into tbl_candidatepersonaldetails(housename,gender,religion,caste,city,pincode,applicationnumber,distid,stateid)values('$Enterhousename','$Entergender','$Enterreligion','$Entercaste','$Entercity','$Enterpincode','$applicationnumber','$distid','$stateid')";

if($sql)
{
    echo "<script>alert('Personal Details Added.'); window.location='parent.php'</script>";
}


//echo "insert into tbl_candidatepersonaldetails(housename,gender,religion,caste,city,pincode,applicationnumber,distid,stateid)values('$Enterhousename','$Entergender','$Enterreligion','$Entercaste','$Entercity','$Enterpincode','$applicationnumber','$distid','$stateid')";
}

?>