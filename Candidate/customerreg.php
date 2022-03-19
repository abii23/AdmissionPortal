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
<form action="customeraction.php" method="post" enctype="multipart/form-data">
<script type="text/javascript" src="../Customer/jquery-2.1.4.min.js"></script>
<div class="container" style="margin-left:93px; margin-bottom:10%;padding-left:130px; box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px; margin-top: 3%;">
        <h2 style="text-align: center;margin-top: 6%;font-family: fantasy;">CUSTOMER REGISTRATION</h2>

    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>Name</label>
      </div>
      <div class="col-md-6">
        <input type="text"  class="form-control" name="txt_name" style="width:500px;" placeholder="Enter Name" pattern="^[A-Za_z][A-Za-z -]+$" required autofocus>
      </div>
    </div>
    <br>
    
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>House Name</label>
      </div>
      <div class="col-md-6">
        <input type="text"  class="form-control" name="txt_housename" style="width:500px;" placeholder="Enter House Name" pattern="^[A-Za_z][A-Za-z -]+$" required autofocus>
      </div>
    </div>
    <br>

    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>Gender</label>
      </div>
      <div class="col-md-6">
        <input type="radio" name="txt_gender" value="male"  required autofocus>Male
        <input type="radio" name="txt_gender" value="female" required autofocus>Female
      </div>
    </div>
    <br>
    
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>District</label>
      </div>
      
      <div class="col-md-6">
       <?php
     
     $sql=mysqli_query($con,"select * from tbl_district");
     ?>
     <select id="drpdistrict" name="drpdistrict" class="form-control" onChange="populate()"  style="width:500px;" >
     <option value="0">---Select---</option>
     <?php
     while($row=mysqli_fetch_array($sql))
     {
     ?>
     <option value="<?php echo $row['district_id'] ?>"> <?php echo $row['district_name'];?> </option>
     <?php
     }
     ?>
     </select>
        
      </div>
    </div>
    <br>
    
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>Place</label>
      </div>
      
      <div class="col-md-6" id="chkboxContainer">
       <?php
     
     $sql=mysqli_query($con,"select * from tbl_place");
     ?>
     <select name="txt_locationname" class="form-control"  style="width:500px;" >
     <option value="0">---Select---</option>
     <?php
     while($row=mysqli_fetch_array($sql))
     {
     ?>
     <option value="<?php echo $row['place_id'] ?>"> <?php echo $row['place_name'];?> </option>
     <?php
     }
     ?>
     </select>
        
      </div>
    </div>
    <br>
    
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>Adhar No</label>
      </div>
      <div class="col-md-6">
        <input type="text"  class="form-control" name="txt_adharno" style="width:500px;" placeholder="Enter Adharno" pattern="[0-9]{12}" required autofocus>
      </div>
    </div>
    <br>
    
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>Email</label>
      </div>
      <div class="col-md-6">
        <input type="email"  class="form-control" name="txt_email" style="width:500px;" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Enter email" required autofocus>
      </div>
    </div>
    <br>
    
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>Contact No</label>
      </div>
      <div class="col-md-6">
        <input type="text"  class="form-control" name="txt_phone" style="width:500px;" placeholder="Enter contact_no" pattern="[0-9]{10}"  required autofocus>
      </div>
    </div>
    <br>
    
   <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>Usename</label>
      </div>
      <div class="col-md-6">
        <input type="text"  class="form-control" name="txt_username" style="width:500px;" placeholder="Enter Username" pattern="^[A-Za_z][A-Za-z -]+$" required autofocus>
      </div>
    </div>
    <br>
   
     <div class="row">
      <input type="submit" name="btnsubmit" value="Create" class="btn btn-primary" style="margin-left:63%">
    </div>
    <br>
     </div>
</form>
</body>
</html>
<?php
include("footer.php");
?>

<script>
	function populate()
	{
		var val=document.getElementById('drpdistrict').value;
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