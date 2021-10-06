<?php
include("config.php");
$Enterstudentfirstname=$_POST["txt_studentfirstname"];
$Enterstudentlastname=$_POST["txt_studentlastname"];
$Enterstudentdob=$_POST["txt_studentdob"];
$Enterstudentemail=$_POST["txt_email"];
$Enterstudentconatct=$_POST["txt_contact"];
$Enterstudentusername=$_POST["txt_username"];
$Enterstudentpassword=$_POST["txt_password"];

$sql=mysqli_query($con,"select ifnull(count(basicid),0)+1 AS 'COUNT' from tbl_candidatebasicdetails");
$row=mysqli_fetch_array($sql);
$appno=$row["COUNT"];
$currentyear=date("Y");
$applicationnumber=$appno+$currentyear;;
$admissionstatus="";
$courseid="";

$save=mysqli_query($con,"insert into tbl_candidatebasicdetails(first_name,last_name,contact_number,email,dob,username,password,applicationnumber)values('$Enterstudentfirstname','$Enterstudentlastname','$Enterstudentconatct','$Enterstudentemail','$Enterstudentdob','$Enterstudentusername','$Enterstudentpassword','$applicationnumber')");
echo "<script>alert('Student Registration Successfull!!!'); window.location='login.php'</script>";
echo $save;
?>