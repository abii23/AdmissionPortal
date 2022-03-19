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
	<form action="studentPersonalAction.php" method="post" enctype="multipart/form-data" style=" padding-top: 8%;">
  <script type="text/javascript" src="/jquery-2.1.4.min.js"></script>
<div class="container" style="margin-left:93px; margin-bottom:10%;padding-left:130px; box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px; padding-top: 3%;">
        <h2 style="text-align: center;margin-top: 6%;font-family: fantasy;">Student Registration</h2>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>HOUSE NAME:</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_housename" style="width:500px;" placeholder="Enter house Name">
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>GENDER:</label>
      </div>
      <div class="col-md-6">
      <input type="radio" name="txt_rbgender" value="male" >Male
       <input type="radio" name="txt_rbgender" value="female" >Female
         </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>Religion</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_Religion" style="width:500px;" placeholder="Enter Religion" required>
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>Caste</label>
      </div>
      <div class="col-md-6">
        <input type="text" name="txt_caste" class="form-control" required placeholder="Enter caste" >
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>City</label>
      </div>
      <div class="col-md-6">
       <input type="text" class="form-control" name="txt_city" style="width:500px;" placeholder="enter city" required>
      </div>
    </div>
    <br>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>Pincode</label>
      </div>
      <div class="col-md-6">
       <input type="text" class="form-control" name="txt_pincode" style="width:500px;" placeholder="Enter pincode" required>
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>state</label>
      </div>
      <div class="col-md-6">
       <select  name="stateid" id="stateid" onChange="populate()" class="form-control" >
         <option value=0>------Select----</option>
         <?php
         include ("config.php"); 
         $result=mysqli_query($con, "SELECT * from tbl_state ");
        // echo "SELECT * from tbl_candidatebasicdetails WHERE username='$username' AND password='$password'";
         //$row=mysqli_fetch_array($result);
         while($row=mysqli_fetch_array($result)) 
         { 

        ?>
          <option value="<?php echo $row['stateid'] ?>"  > <?php echo $row['statename'];?> </option>
        <?php }
    
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
       <select  name="drpdistrict" id="drpdistrict"  class="form-control" >
         <option value=0>------Select----</option>
         
    </select>
     </div>
      </div>
  

    

    <div class="row">
      <input type="submit" name="submit" value="Next" class="btn btn-primary" style="margin-left:63%"/>
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

