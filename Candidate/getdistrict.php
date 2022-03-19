<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php

$con=mysqli_connect("127.0.0.1","root","","dbadmission");
if(isset($_POST['id']))
{
	$id=$_POST['id'];
	
?>
	<div class="col-md-6" >
       <select  name="drpdistrict" id="drpdistrict"  class="form-control" >
         <option value=0>------Select----</option>
         <?php
         include ("config.php"); 
         $result=mysqli_query($con, "SELECT * from tbl_district where stateid='$id' ");
        // echo "SELECT * from tbl_candidatebasicdetails WHERE username='$username' AND password='$password'";
         //$row=mysqli_fetch_array($result);
         while($row=mysqli_fetch_array($result)) 
         { 

        ?>
          <option value="<?php echo $row['distid'] ?>"  > <?php echo $row['distname'];?> </option>
        <?php }
    
    ?> 
    </select>
     </div>
        <?php
}?>



</body>
</html>

