<?php

include("config.php");
if (isset($_POST["submit"]))
{
	$Englishprofeicency=$_POST["txt_language"];
	$applicationnumber = $_POST["txtappno"];
	$Enterattitude=$_POST["txt_attitude"];
	$Enterskills=$_POST["txt_skills"];
	$Enterinterviewed=$_POST["txt_interviewed"];
	$Entercomment=$_POST["txt_comment"];
	$EnterinterviewedDate=$_POST["txt_interviewedDate"];
	$interviewed="interviewed";
	
	
	$save=mysqli_query($con,"insert into tbl_interview(applicationnumber,language,attitude,subjectknowledge,interviewername,comments,
	interviewdate)
	values('$applicationnumber','$Englishprofeicency','$Enterattitude','$Enterskills','$Enterinterviewed','$Entercomment',
	'$EnterinterviewedDate')");


	


	$sql=mysqli_query($con,"update tbl_candidatebasicdetails set admission_status='Interviewed' where applicationnumber='$applicationnumber' ");



		if($save){
		echo "<script>alert('Interview Details Updated!!!'); window.location='viewDetails.php'</script>";
		
	}
	else{
		echo "<script>alert('Update failed !!!'); window.location='viewDetails.php'</script>";
	}
	
	
}
?>