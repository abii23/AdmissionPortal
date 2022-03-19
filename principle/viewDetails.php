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
<form action="" method="post">
  <div class="container" style="width:100%">
  <div style="position: center;width: 114%">
    <div class="col-md-12" style="box-shadow: 2px 2px 10px #1b93e1; border-radius:0px; top: 250px;    width: 115%;margin-left: -80px;">
      <h3 style="text-align: center">COURSE DETAILS</h3><br>
      <div class="form-horizontal">
        <div class="form-group">
         


  
 
<div class="row">
     <div class="col-md-3" style="text-align:right;">
        <label>Select Course</label>
      </div>
      <div class="col-md-6">
       <select  name="coursewise"  class="form-control" style=" width:500px;">
         <option value=0>------Select----</option>
         <?php
         include ("config.php"); 
         $result=mysqli_query($con, "SELECT * from tbl_course");
        // echo "SELECT * from tbl_candidatebasicdetails WHERE username='$username' AND password='$password'";
         //$row=mysqli_fetch_array($result);
         while($row=mysqli_fetch_array($result)) 
         { 

        ?>

          <option name="course" value="<?php echo $row['courseid'] ?>"  > <?php echo $row['coursename'];?> </option>
         
         <?php }
      
      ?>
      </select>
       </div>
       <div class="col-md-3" style="text-align:left">
         
      <input type="submit" name="submit" value="Submit" class="btn btn-primary" style=""/>
         </div>
      </div>



        </div>

        <br>

        <table class="table table-hover" style="border: 2px solid #adaaaa; box-shadow: 3px 3px 11px #777777; margin-bottom:7%">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">App. No.</th>
              <th scope="col"> Name</th>
               
                <th scope="col">Email</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Status</th>
            </tr>
          </thead>
          <?php

          if(isset($_POST["submit"]))
          {
						$slno=1;



            $courseid=$_POST['coursewise'];
							$result=mysqli_query($con,"select * from tbl_candidatebasicdetails where courseid='$courseid'");
							while($row=mysqli_fetch_array($result))
							{
								
								echo  "<tr>";
								echo "<td>" .$slno++."</td>";
								
                echo "<td>" .$row['applicationnumber']."</td>";
								echo "<td>" .$row['first_name'].$row['last_name']."</td>";
							
                echo "<td>" .$row['email']."</td>";
                echo "<td>" .$row['contact_number']."</td>";
                echo "<td>" .$row['admission_status']."</td>";
								
							//	echo "<td><a href='viewMoreDetail.php?applicationnumber=".$row['applicationnmber']."' class='glyphicon glyphicon-edit'>View More Details</a> </td>";
								
              ?>
            <td><a href="viewMoreDetail.php?applicationnumber=<?php echo $row['applicationnumber'];?>" class="glyphicon glyphicon-trash" >View More </a></td>
            <td><a href="addmark.php?applicationnumber=<?php echo $row['applicationnumber'];?>" class="glyphicon glyphicon-trash" >Interview Marks</a></td>
            <td><a href="process.php?applicationnumber=<?php echo $row['applicationnumber'];?>" class="glyphicon glyphicon-trash" >+Add Status</a></td>
          
            <?php
								echo "</tr>";
              }
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
