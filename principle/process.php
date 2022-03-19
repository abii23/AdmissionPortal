
<?php
include("header.php");
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
	<form action="" method="post" enctype="multipart/form-data" style=" padding-top: 8%;">
<div class="container" style="margin-left:113px; margin-bottom:10%;padding-left:130px; box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px; padding-top: 3%; margin-top: 49px;">
        <h2 style="text-align: center;margin-top: -1%;font-family: fantasy;">Principle Verification</h2>

    <br>



    <div class="row" style="margin-left: 130px">

<div class="col-md-2">

    <label > Status:</label>
    </div>
    <div class="col-md-6">
            <select style="width:500px;" name="Principle_status" class="form-control" style="margin-left: 15px; width: 186px;">
                <option>Choose..</option>
                <option>Waiting</option>
                <option>Rejected</option>
                <option>Selected</option>
            </select>
</div>
</div>
            <br>
            <br>
            <br>



            <div class="row" style="margin-left: 130px">
            <div class="col-md-2">
            <label > Enter remarks:</label></div>
            <div class="col-md-6">
              <textarea rows="10" cols="60" class="form-control" name="txtremarks" style="width:500px;" ></textarea> 
            
</div>
            </div>
            <br>
    <div  class="row">
      <input type="submit" name="submit" value="Submit" class="btn btn-primary" style="margin-left:43%; margin-bottom: 16px;"/>
    </div>
     </div>
</form>
</body>
</html>
<?php
include("config.php");

if (isset($_POST["submit"]))
{
  echo "Hello";
$applicationnumber = $_GET["applicationnumber"];
$PrincipleAction=$_POST["txtremarks"];
$Status=$_POST['Principle_status'];
$currentdate=date("y-m-d");
echo $currentdate;
$save=mysqli_query($con,"update tbl_candidatebasicdetails set admission_status='$Status' where applicationnumber='$applicationnumber'");
//echo "update tbl_candidatebasicdetails set admission_status='$Status' where applicationnumber='$applicationnumber'";
$save2=mysqli_query($con,"insert into tbl_principalverify (principalstatus,remarks,verificationdate, applicationnumber )
              values('$Status','$applicationnumber','$PrincipleAction','$currentdate')");



if($save2){
  echo "<script>alert('Updated Successfull!!!'); window.location='viewDetails.php'</script>";
  
}
else{
  echo "<script>alert('Updated Successfull!!!'); window.location='viewDetails.php'</script>";
}
  
}


?>
