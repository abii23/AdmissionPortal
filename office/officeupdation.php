
<?php
session_start();
include("header.php");

$applicationnumber=$_SESSION['appno'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
include("config.php");
?>
	<form action="" method="POST"  style=" padding-top: 8%;">
<div class="container" style="margin-left:93px; margin-bottom:10%;padding-left:130px; box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px; padding-top: 3%;">
        <h2 style="text-align: center;margin-top: 6%;font-family: fantasy;">Office Updation</h2>

    <br>
   

    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>Verification Date:</label>
      </div>
      <div class="col-md-6">
        <input type="date" class="form-control" name="txt_verficationDate" style="width:500px;" placeholder="Enter verififcation date">
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-alig
     n:right">
        <label>STATUS</label>
      </div>
      <div class="col-md-6">
      <select name="txt_Action" style="margin-left: 15px; width: 186px;">
        <option >Choose..</option>
        <option value="Approved">Admitted</option>
                <option  value="Pending" >Pending</option>
                <option value="Failed">Failed</option>
               
      </select>
    </div>
    </div>
    <br>
    
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label> STAFF IN CHARGE:</label>
      </div>
      <div class="col-md-6">
        <input type="text"  name="txt_charge"  class="form-control" required placeholder="Enter Name Of Staff">
      </div> 
    </div>
    <br>
    <br>


    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label> Fees </label>
      </div>
      <div class="col-md-6">
        <input type="radio"  name="feespaid"   required value="Paid" >Paid
        <input type="radio"  name="feespaid"   required value="Not Paid">Not Paid
      </div> 
    </div>
    <br>
    <br>



    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label> Certificate verification </label>
      </div>
      <div class="col-md-6">
        <input type="radio"  name="certificate"   required value="Verified" >Verified
        <input type="radio"  name="certificate"   required value="Not Verified">Not Verified
      </div> 
    </div>
    <br>
    <br>



    
    <br>
    <div class="row" style="margin-left: 130px">

              Enter remarks:
              <textarea rows="10" cols="60" name="txtremarks" ></textarea> 
            </div>
    <div class="row">
      <input type="submit" name="submit" value="Next" class="btn btn-primary" style="margin-left:63%"/>




    </div>
     </div>
</form>
</body>
</html>

<?php
//include("footer.php");
?>

<?php
include("config.php");
if(isset($_POST["submit"]))
{
echo "hi";
  $applicationnumber=$_GET['applicationnumber'];
  $result=mysqli_query($con,"select * from tbl_candidatebasicdetails where applicationnumber='$applicationnumber'");
  $row=mysqli_fetch_array($result);
  $courseid=$row['courseid'];

  $Action=$_POST["txt_Action"];
  $Charge=$_POST["txt_charge"];
  $remarks=$_POST['txtremarks'];
  $fees=$_POST['feespaid'];
  $certificate=$_POST['certificate'];

    $result=mysqli_query($con,"select * from tbl_course  where courseid='$courseid'");
    $row=mysqli_fetch_array($result);
    $admittedcount=$row['admittedcount'];
    $admittedcount=  $admittedcount+1;
    $result=mysqli_query($con,"UPDATE tbl_course SET admittedcount='$admittedcount' where courseid='$courseid'");


  $VerificationDate=$_POST["txt_verficationDate"];
 
  $save=mysqli_query($con,"insert into tbl_officeupdation (applicationnumber,verificationdate,status,
  nameofincharge,remarks,isfeespaid,isverified)values('$applicationnumber','$VerificationDate','$Action','$Charge','$remarks','$fees','$certificate')");
  $result=mysqli_query($con,"UPDATE tbl_candidatebasicdetails SET 
  admission_status='$Action' where applicationnumber='$applicationnumber'");


echo "UPDATE tbl_candidatebasicdetails SET 
admission_status='$Action' where applicationnumber='$applicationnumber'";

  echo "insert into tbl_officeupdation (applicationnumber,verificationdate,status,
  nameofincharge,remarks,isfeespaid,isverified)values('$applicationnumber','$VerificationDate','$Action','$Charge','$remarks','$fees','$certificate')";
  if($save){
   echo "<script>alert('Updated Successfull!!!'); window.location='viewDetails.php'</script>";
    
  }
  else{
   //echo "<script>alert('Update failed !!!'); window.location='officeupdation.php'</script>";
  }

}
  

?>


