<?php
//session_start();
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
$appno=$_SESSION["appno"];
echo $appno;

$row=mysqli_query($con,"select * from tbl_candidatebasicdetails cb inner join tbl_candidatepersonaldetails cp on cb.applicationnumber=cp.applicationnumber where cb.applicationnumber='$appno'");





$result=mysqli_fetch_array($row);
$edit=$result["isedit"];



?>
	<form action="studentPersonalAction.php" method="post" enctype="multipart/form-data" style=" padding-top: 8%;">
  <script type="text/javascript" src="/jquery-2.1.4.min.js"></script>
<div class="container" style="margin-left:93px; margin-bottom:10%;padding-left:130px; box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px; padding-top: 3%;">
        <h2 style="text-align: center;margin-top: 6%;font-family: fantasy;">Student Registration</h2>

      
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>HOUSE NAME:</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_housename" style="width:500px;" placeholder="Enter house Name" value="<?php echo $result["housename"]; ?>">
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>GENDER:</label>
      </div>
      <div class="col-md-6">
      <input type="radio" name="txt_rbgender" value="male" <?php if($result["gender"]=="male") echo "checked="."checked"; ?> >Male
       <input type="radio" name="txt_rbgender" value="female" <?php if($result["gender"]=="female") echo "checked="."checked"; ?> >Female
         </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>Religion</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_Religion" value="<?php echo $result["religion"]; ?>" style="width:500px;" placeholder="Enter Religion" required>
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>Caste</label>
      </div>
      <div class="col-md-6">
        <input type="text" name="txt_caste" class="form-control" value="<?php echo $result["caste"]; ?>" required placeholder="Enter caste" >
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>City</label>
      </div>
      <div class="col-md-6">
       <input type="text" class="form-control" name="txt_city" style="width:500px;" value="<?php echo $result["city"]; ?>" placeholder="enter city" required>
      </div>
    </div>
    <br>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>Pincode</label>
      </div>
      <div class="col-md-6">
       <input type="text" class="form-control" name="txt_pincode" maxlength="12" pattern="[0-9]{6}" style="width:500px;" value="<?php echo $result["pincode"]; ?>" placeholder="Enter pincode" required>
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>state</label>
      </div>
      <div class="col-md-6">



      <?php
$sql1=mysqli_query($con,"select s.stateid,s.statename from tbl_candidatepersonaldetails cp inner join tbl_state s on cp.stateid=s.stateid where cp.applicationnumber='$appno'");
$result1=mysqli_fetch_array($sql1);

$statename=$result1["statename"];
$stateid=$result1["stateid"];

?>


       <select  name="stateid" id="stateid" onChange="populate()" class="form-control" style="width:500px; display:list-item;">

         <option value="<?php echo $stateid; ?>"><?php echo $statename; ?></option>
         <?php
         include ("config.php"); 
         $result=mysqli_query($con, "SELECT * from tbl_state where stateid!='$stateid' ");
       
         while($row=mysqli_fetch_array($result)) 
         { 
        ?>
          <option value="<?php echo $row['stateid'] ?>"  > <?php echo $row['statename'];?> </option>
        <?php 
        }
    ?> 
    </select>
     </div>
      </div>
  
   <br>


   <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>District</label>
      </div>
      <div class="col-md-6" id="chkboxContainer">
      <?php
$sql1=mysqli_query($con,"select s.distid,s.distname from tbl_candidatepersonaldetails cp inner join tbl_district s on cp.distid=s.distid where cp.applicationnumber='$appno'");
$result1=mysqli_fetch_array($sql1);

$distname=$result1["distname"];
$distid=$result1["distid"];

?>
      <select  name="drpdistrict" id="drpdistrict"  class="form-control" >


     




<option value="<?php echo $distid; ?>"><?php echo $distname; ?></option>
         <?php
         include ("config.php"); 
         $result=mysqli_query($con, "SELECT * from tbl_district where distid!='$distid' ");
        // echo "SELECT * from tbl_candidatebasicdetails WHERE username='$username' AND password='$password'";
         //$row=mysqli_fetch_array($result);
         while($row=mysqli_fetch_array($result)) 
         { 

        ?>
          <option value="<?php echo $row['distid'] ?>"  > <?php echo $row['distname'];?> </option>
        <?php }
    
    ?> 
    </select>
    </select>
     </div>
      </div>
  

    

    <div class="row">
      <input type="submit" name="submit" value="Next" class="btn btn-primary" style="margin-left:63%" <?php if($edit=="0") echo "disabled" ?>/>
    </div>
    
     </div>
         </div>
     <br>
</form>
</body>
</html>
<?php
include("footer.php");
?>

<script>
	function populate()
	{
		var val=document.getElementById('stateid').value;
		//alert(val);
		$.ajax({
			type: "POST",
			url: "getdistrict.php",
			data: "id="+val,
			
			success: function(data){
				$("#chkboxContainer").html(data);
			}
		})
	}
	</script>

