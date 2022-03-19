<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
include("config.php");
//$con=mysqli_connect("localhost","root","","dbadmission");
if(isset($_POST['id']))
{
	$id=$_POST['id'];
	
?>
	

<div class="col-md-6" >
<select  name="txt_courseid"  class="form-control" >
<option value=0>------Select----</option>
<?php
   $result=mysqli_query($con, "SELECT * from tbl_course where coursetype='$id'");
   while($row=mysqli_fetch_array($result)) 
         { 
 ?>
 <option value="<?php echo $row['courseid'] ?>"  > <?php echo $row['courseshortname'];?> </option>
  <?php 
  }
    ?>
</div>

        <?php
        }
        ?>

    </br>
<br>
</body>
</html>

