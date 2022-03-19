<?php
include("config.php");

if(isset($_GET["applicationnumber"]))
{

    $applicationnumber=$_GET["applicationnumber"];


    $sql=mysqli_query($con,"update tbl_candidatebasicdetails set isedit='0' where applicationnumber='$applicationnumber'");
    if($sql){
        echo "<script>alert('Updated Successfull!!!'); window.location='isedit.php'</script>";
        
      }
      else{
        echo "<script>alert('Update failed !!!'); window.location='isedit.php'</script>";
      }
}


?>