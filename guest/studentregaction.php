<?php
include("config.php");




$date1 = Date("Y-m-d");


$Enterdob=$_POST["txt_studentdob"];




$diff = abs(strtotime($date1) - strtotime($Enterdob));


$years = floor($diff / (365*60*60*24));


if($years<16)
{
    echo "<script>alert('Age doesnot match.');window.location='studentreg.php'</script>";

  }else{





 $Enterstudentfirstname=$_POST["txt_studentfirstname"];
 $Enterstudentlastname=$_POST["txt_studentlastname"];

 $Enteremail=$_POST["txt_email"];
 $Entercontact=$_POST["txt_contact"];
 $Enterusername=$_POST["txt_username"];

 $courseid=$_POST["txt_courseid"];









 $sql=mysqli_query($con,"SELECT ifnull(count(*),0)+11 as count FROM tbl_candidatebasicdetails");
 $display=mysqli_fetch_array($sql);
 $id=$display['count'];
 $pass="std$id#@0";
 $sql=mysqli_query($con,"SELECT count(*) as count FROM tbl_candidatebasicdetails WHERE email='$Enteremail'");
 	$display=mysqli_fetch_array($sql);

 	if($display['count']>0)
 	{			
		echo "<script>alert('Already exist');window.location='studentreg.php'</script>";	
 	}
 	else
 	{

 $sql=mysqli_query($con,"select ifnull(count(basicid),0)+1 AS 'COUNT' from tbl_candidatebasicdetails");
 $row=mysqli_fetch_array($sql);
 $appno=$row["COUNT"];
$currentyear=date("Y");
 $applicationnumber=$appno+$currentyear;;
 $admissionstatus="Application Received";
 $save="insert into tbl_candidatebasicdetails(first_name,last_name,dob,email,contact_number,
                 username,password,applicationnumber,admission_status,courseid,isedit)
                 values('$Enterstudentfirstname','$Enterstudentlastname','$Enterdob','$Enteremail','$Entercontact',
                 '$Enterusername','$pass','$applicationnumber','$admissionstatus','$courseid',0)";
                
        
                 $result = mysqli_query($con,$save);
                 $bodyContent="Dear $Enterstudentfirstname, Your account has been successfully created, Please login using the username $Enterusername and Password  $pass";
                 $mailtoaddress=$Enteremail;
               
                require('Mailtemplate.php');
                
                
                
                
 echo "<script>alert('Application Form Submitted Please Login for completing your application!!!'); window.location='login.php'</script>";

   }

   } 

?>