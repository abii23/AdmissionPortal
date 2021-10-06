<?php
include("config.php");
$Enterstudentfirstname=$_POST["txt_studentfirstname"];
$Enterstudentlastname=$_POST["txt_studentlastname"];
$Enterstudentdob=$_POST["txt_studentdob"];
$Enterstudentemail=$_POST["txt_email"];
$Enterstudentconatct=$_POST["txt_contact"];
$Enterstudentusername=$_POST["txt_username"];
$Enterstudentpassword=$_POST["txt_password"];
$save=mysqli_query($con,"insert into tbl_candidatebasicdetails(first_name,last_name,contact_number,email,dob,username,password)values('$Enterstudentfirstname','$Enterstudentlastname','$Enterstudentconatct','$Enterstudentemail','$Enterstudentdob','$Enterstudentusername','$Enterstudentpassword')");
echo "<script>alert('Student Registration Successfull!!!'); window.location='viewcourse.php'</script>";
echo $save;
?>