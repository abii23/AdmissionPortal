<?php
include("config.php");
session_start();
// $applicationnumber=$_SESSION['appno'];
// $VerificationDate=$_POST["txt_verficationDate"];
// $Action=$_POST["txt_Action"];
// $Charge=$_POST["txt_charge"];
// $save=mysqli_query($con,"insert into tbl_officeupdation (applicationnumber,verificationdate,status,nameofincharge)values('$applicationnumber','$VerificationDate','$Action','$Charge')");
// //echo "insert into tbl_officeupdation (applicationnumber,verificationdate,status,nameofcharge,)values('$applicationnumber','$VerificationDate','$Action','$Charge')";
// if($save){
// echo "<script>alert('Updated Successfull!!!'); window.location='viewDetails.php'</script>";

// }
// else{
// 	echo "<script>alert('Update failed !!!'); window.location='officeupdation.php'</script>";
// }

// echo "<script>alert('Update failed !!!'); window.location='officeupdation.php'</script>";




if(isset($_POST['submit']))
{
echo "hi";
  $applicationnumber=$_GET['applicationnumber'];
  $result=mysqli_query($con,"select * from tbl_candidatebasicdetails where applicationnumber='$applicationnumber'");
  $row=mysqli_fetch_array($result);
  $courseid=$row['courseid'];

  $Action=$_POST["txt_Action"];
  $Charge=$_POST["txt_charge"];
  $remarks=$_POST['txtremarks'];

    $result=mysqli_query($con,"select * from tbl_course  where courseid='$courseid'");
    $row=mysqli_fetch_array($result);
    $admittedcount=$row['admittedcount'];
    $admittedcount=  $admittedcount+1;
    $result=mysqli_query($con,"UPDATE tbl_course SET admittedcount='$admittedcount' where courseid='$courseid'");


  $VerificationDate=$_POST["txt_verficationDate"];
 
  $save=mysqli_query($con,"insert into tbl_officeupdation (applicationnumber,verificationdate,status,
  nameofincharge,remarks)values('$applicationnumber','$VerificationDate','$Action','$Charge','$remarks')");
  $result=mysqli_query($con,"UPDATE tbl_candidatebasicdetails SET 
  admission_status='$Action' where applicationnumber='$applicationnumber'");


echo "UPDATE tbl_candidatebasicdetails SET 
admission_status='$Action' where applicationnumber='$applicationnumber'";

  echo "insert into tbl_officeupdation (applicationnumber,verificationdate,status,nameofincharge)values('$applicationnumber','$VerificationDate','$Action','$Charge')";
  if($save){
  // echo "<script>alert('Updated Successfull!!!'); window.location='viewDetails.php'</script>";
    
  }
  else{
  // echo "<script>alert('Update failed !!!'); window.location='officeupdation.php'</script>";
  }

}





?>