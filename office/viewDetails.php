<?php 
include("header.php");
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
  <div class="container" style="width:100%; " >
  <div style="width: 135%">
    <div class="col-md-9" style="box-shadow: 2px 2px 10px #1b93e1;  top: 250px;">
      <h3 style="text-align: center;">COURSE DETAILS</h3>
      <br>
      <div class="form-horizontal">
        <div class="form-group">
           <div style="display:flex;max-width: min-content;">

<div style="margin-left:139px">
  
 
<div class="row">
  <div class="col-md-3" style="text-align:right">
        <label>Select Course</label>
      </div>
      <div class="col-md-6">
       <select  name="coursewise"  class="form-control" style="width:500px;" >
         <option value=0>------Select----</option>
         <?php
         $result=mysqli_query($con, "SELECT * from tbl_course");
         while($row=mysqli_fetch_array($result)) 
         { 

        ?>
          <option name="coursewise" value="<?php echo $row['courseid'] ?>" > <?php echo $row['coursename'];?> </option>
         
         <?php }
      
      ?>
       </select>
         </div>
         </div>
         </div>
         
       </div>
      <br>
      <br>
      <div class="row"> 
      <input type="submit" name="submit" value="Submit" class="btn btn-primary" style="margin-left:63%"/>
      </div>
      </div>
        </div>
        <br>
        <?php
      if(isset($_POST["submit"]))
	{
?>

        <table class="table table-hover" style="border: 2px solid #adaaaa; box-shadow: 3px 3px 11px #777777; margin-bottom:7%">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Application Number</th>
              <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Application Status</th>
          
          </tr>
          </thead>
          <?php
						$slno=1;
            $courseid=$_POST['coursewise'];
           
           
							$result=mysqli_query($con,"select * from tbl_candidatebasicdetails where courseid='$courseid'");
							while($row=mysqli_fetch_array($result))
							{
								
								echo  "<tr>";
								echo "<td>" .$slno++."</td>";
								
                echo "<td>" .$row['applicationnumber']."</td>";
								echo "<td>" .$row['first_name']."</td>";
								echo "<td>" .$row['last_name']."</td>";
                echo "<td>" .$row['email']."</td>";
                echo "<td>" .$row['contact_number']."</td>";
                echo "<td>" .$row['admission_status']."</td>";
								
							//	echo "<td><a href='viewMoreDetail.php?applicationnumber=".$row['applicationnmber']."' class='glyphicon glyphicon-edit'>View More Details</a> </td>";
								
              ?>
            <td><a href="viewMoreDetail.php?applicationnumber=<?php echo $row['applicationnumber'];?>" class="glyphicon glyphicon-trash" >View More Details</a></td>
            <td><a href="officeupdation.php?applicationnumber=<?php echo $row['applicationnumber'];?>" class="glyphicon glyphicon-trash" >+Add Updation</a></td>
          
            <?php
								echo "</tr>";
								
							}
						?>
        </table>
        
        <?php
 }
  ?>
      </div>
    </div>
    <div> </div>
  </div>
 </div>



</form>

</body>
</html>





