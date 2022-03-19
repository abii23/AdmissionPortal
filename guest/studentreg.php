
<?php
include("config.php");
include("header.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Santhigiri College</title>
</head>
<body>






	<form action="studentregaction.php" method="post" enctype="multipart/form-data" style=" padding-top: 8%;">
  <script type="text/javascript" src="jquery-2.1.4.min.js"></script>
<div class="container" style="margin-left:93px; margin-bottom:10%;padding-left:130px; box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px; padding-top: 3%;">
        <h2 style="text-align: center;margin-top: 6%;font-family: fantasy;">Student Registration</h2>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>STUDENT FIRST NAME:</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_studentfirstname" style="width:500px;" placeholder="Enter first Name">
      </div>
      
      <br>
    </br>
    </div>
    <div class="row">
      <div class="col-md-3" style="text-align:right">
        <label>STUDENT LAST NAME:</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_studentlastname" style="width:500px;" placeholder="Enter last  Name">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3" style="text-align:right">
        <label>DOB:</label>
      </div>
      <div class="col-md-6" >


     
        <input type="date" class="form-control" name="txt_studentdob"  style="width:500px;"
         max="<?php echo Date('Y-m-d'); ?>" >
      </div>
    </div>
  </br>


 
    
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>EMAIL:</label>
      </div>
      <div class="col-md-6">
        <input type="email" class="form-control" name="txt_email" style="width:500px;" placeholder="Enter Email" required>
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>CONTACT:</label>
      </div>
      <div class="col-md-6">
        <input type="tel"   pattern="[0-9]{10}" name="txt_contact"  maxlength="12" title="ten digit cods" class="form-control" placeholder="Enter Student Contact Number" required >
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>USER NAME:</label>
      </div>
      <div class="col-md-6">
       <input type="text" class="form-control" name="txt_username" style="width:500px;" placeholder="Username" required>
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>SELECT COURSE TYPE:</label>
      </div>
      <div class="col-md-6">
      <input type="radio" name="txt_ug"  id="txt_ug" onChange="populate()" value="UG" >UG
      <input type="radio" name="txt_ug" id="txt_pg" onChange="populate()" value="PG" >PG
         </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>SELECT COURSE</label>
      </div>
      
      <div class="col-md-6" id="chkboxContainer">
       <select  name="txt_courseid"  class="form-control" >
         <option value="0">------Select----</option>
</select>
         
      </div>
    </div>
    <br>
    <div class="row">

    <div class="col-md-6">
    <input type="submit" name="submit" value="Next" class="btn btn-primary" style="margin-left:63%"/>
    </div>
    </div>
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
   // var val="";
		if(document.getElementById('txt_ug').checked)
    {
val="UG";
    }
    else
    {
val="PG";
    }
    
   // alert(val);
		
		$.ajax({
			type: "POST",
			url: "select_course.php",
			data: "id="+val,
     
     
			success: function(data){
				$("#chkboxContainer").html(data);
			}
		})
	}
	</script>

