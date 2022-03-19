<?php
include("config.php");

if (isset($_POST["submit"]))
{
  echo "Hello";
$applicationnumber = $_GET["applicationnumber"];
$PrincipleAction=$_POST["txtremarks"];
$Status=$_POST['Principle_status'];
$save=mysqli_query($con,"update tbl_candidatebasicdetails set admission_status='$Status' where applicationnumber='$applicationnumber'");
echo "update tbl_candidatebasicdetails set admission_status='$Status' where applicationnumber='$applicationnumber'";
$save=mysqli_query($con,"update tbl_candidatebasicdetails set admission_status='$PrincipleAction' where applicationnumber='$applicationnumber'");
echo "update tbl_candidatebasicdetails set admission_status='$PrincipleAction' where applicationnumber='$applicationnumber'";
/*if($save){
  echo "<script>alert('Updated Successfull!!!'); window.location='viewDetails.php'</script>";
  
}
else{
  echo "<script>alert('Update failed !!!'); window.location='editlocation.php'</script>";
}
*/
}


?>