<!DOCTYPE html>
<html lang="en">
<head>
<?php 
include("header.php");
include("config.php");
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
  <div class="container" style="width:100%;margin-left:14%;margin-top:19px" >
  <div style="position: center;width: 160%">
    <div class="col-md-9" style="box-shadow: 2px 2px 10px #1b93e1; border-radius:0px; top: 250px;">
      <h3 style="text-align: center">COURSE DETAILS</h3>
      <div class="form-horizontal" style="margin-left:0px;">
        <div class="form-group">
          <  <div style="display:flex;">

<div style="margin-left:139px">
  
 
<div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>Select District</label>
      </div>
      <div class="col-md-6">
       <select  name="coursewise"  class="form-control" >
         <option value=0>------Select----</option>
         <?php
         include ("config.php"); 
         $result=mysqli_query($con, "SELECT * from tbl_course");
        // echo "SELECT * from tbl_candidatebasicdetails WHERE username='$username' AND password='$password'";
         //$row=mysqli_fetch_array($result);
         while($row=mysqli_fetch_array($result)) 
         { 

        ?>
          <option name="coursewise" value="<?php echo $row['courseid'] ?>"  > <?php echo $row['coursename'];?> </option>
         
         <?php }
      
      ?>
       </div>
      <br>
         </break>
      <input type="submit" name="submit" value="Submit" class="btn btn-primary" style="margin-left:63%"/>
    
      </div>



        </div>
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
            $courseid=$_GET['coursewise'];
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
            <td><a href="addMark.php?applicationnumber=<?php echo $row['applicationnumber'];?>" class="glyphicon glyphicon-trash" >+Add Marks</a></td>
          
            <?php
								echo "</tr>";
								
							}
						?>
        </table>
      </div>
    </div>
    <div> </div>
  </div>
 </div>
</form>

</body>
</html>
