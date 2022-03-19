
 <?php
include("config.php");
//include_once("../libs/bindClass.php");

if(isset($_POST["submit"]))
{
	$course=$_POST['drpcoursename'];
	$batch=$_POST['drpbatchname'];
	//$student_regno=$_POST['txt_studentregno'];
	$student_name=$_POST["txt_studentname"];
	$student_gender=$_POST['rbgender'];
	$email=$_POST["txt_email"];
    $contact_no=$_POST['contact'];
	$studentregdate=date("y-m-d");
	$password=password_generate(7);
	$username=$_POST["txt_username"];
	//$sql=mysqli_query($con,"SELECT * FROM tblstudent WHERE email='$email'");
	//$display=mysqli_fetch_array($sql);
  	//	if($display>0)
	//	{
	//	echo "<script>alert('Already exist with email address');window.location='studentreg.php'</script>";	
	//	}

}
$save=mysqli_query($con,"insert into tblstudent(coursename,batchname,studentname,studentgender,email,contactno,registrationdate,password,username)
values('$course','$batch','$student_name','$student_gender','$email','$contact_no','$studentregdate','$password','$username')");
if($save)
{
$mailcontent=" Your Registration has been completed successfully.Please use the following credentials for your first login.username='$username' and password='$password'";
	$objmail->sendMail($email,"Confirmation",$mailcontent);
echo "<script> alert ('Thank you for registration !!! '); window.location='index.php'</script>";

}

function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
 ?>