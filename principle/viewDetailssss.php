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
<form action="PrincipleAction.php" method="get">
  <div class="container" style="width:100%;margin-left:2%;margin-top:19px" >
  <div style="position:centre; width: 160%; " >
    <div class="col-md-9" style="box-shadow: 2px 2px 10px #1b93e1; border-radius:0px; top: 250px; margin: left 149px; ">
      <h3 style="text-align: center">APPLICATIONS</h3>
      <div class="form-horizontal" style="margin-left:0px;">
        <div class="form-group">
        <div style="margin-left:39px;">
        
        <label>SELECT COURSE</label>
      
      <select name="option" class="form-control">
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
      </select>
    </div> 
        </div>
        <table class="table table-hover" style="border: 2px solid #adaaaa; box-shadow: 3px 3px 11px #777777; margin-bottom:7%">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Application Number</th>
              <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Application Status</th>
                
              </tr>
            </thead>
                
                
          <?php
						$slno=1;
							$result=mysqli_query($con,"select * from tbl_candidatebasicdetails");
							while($row=mysqli_fetch_array($result))
							{
								
								echo  "<tr>";
								echo "<td>" .$slno++."</td>";
								echo "<td>" .$row['applicationnumber']."</td>";
								echo "<td>" .$row['first_name']."</td>";
								echo "<td>" .$row['last_name']."</td>";
                echo "<td>" .$row['admission_status']."</td>";
                
             
                
								
								//echo "<td><a href='course_edit.php?courseid=".$row ['courseid']."' class='glyphicon glyphicon-edit'>Edit</a> </td>";
								
								?>
            <td><a href="viewMoreDetail.php?applicationnumber=<?php echo $row['applicationnumber'];?>"  class="glyphicon glyphicon-trash" >View more details</a></td>
            <td><a href="interviewMarks.php?applicationnumber=<?php echo $row['applicationnumber'];?>"  class="glyphicon glyphicon-trash" >Interview Marks</a></td>
            <td>
            <select name="txt_Action" style="margin-left: 15px; width: 186px;">
                <option >Choose..</option>
                  <option value="Waiting">Waiting</option>
                  <option  value="Rejected" >Rejected</option>
                  <option value="Selected">Selected</option>
      </select>
            </td>
            <td><a input type="submit" style="background-color: #008CBA;color:white;width:120px;Text-align:center" href="PrincipleAction.php?applicationnumber=<?php echo $row['applicationnumber'];?>"  class="glyphicon glyphicon-trash" >Submit</a></td>

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
