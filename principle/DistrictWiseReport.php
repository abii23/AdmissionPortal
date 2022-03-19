<?php 
session_start();
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
<form action="" method="post">
  <div class="container" style="width:100%;margin-top:19px" >
  <div style="position:centre; width: 100%; " >
    <div class="col-md-12" style="box-shadow: 2px 2px 10px #1b93e1; border-radius:0px; top: 250px; margin: left 149px; ">
      <h3 style="text-align: center">APPLICATIONS</h3>
      <div class="form-horizontal" style="margin-left:0px;">
        <div class="form-group">
        <div style="margin-left: 139px;">
      
      

        <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>Select District</label>
      </div>
      <div class="col-md-6">
       <select  name="districtwise"  class="form-control" >
         <option value=0>------Select----</option>
         <?php
         include ("config.php"); 
         $result=mysqli_query($con, "SELECT * from tbl_district");
        // echo "SELECT * from tbl_candidatebasicdetails WHERE username='$username' AND password='$password'";
         //$row=mysqli_fetch_array($result);
         while($row=mysqli_fetch_array($result)) 
         { 

        ?>
          <option name="district" value="<?php echo $row['distid'] ?>"  > <?php echo $row['distname'];?> </option>
         
         <?php }
      
      ?>

         </select>
       </div>

<div class="col-md-3">
<input type="submit" name="submit" value="Submit" class="btn btn-primary" style="margin-left:63%"/>
         </div>



         </div>
      <br>
         </break>
      
    
     

       
     
    </div> 
        </div>
        <table class="table table-hover" style="border: 2px solid #adaaaa; box-shadow: 3px 3px 11px #777777; margin-bottom:7%">
        <br>
        <br>  
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
            if(isset($_POST["submit"]))
           {
						$slno=1;
            // $courseid=$_GET['coursewise'];
            $distid=$_POST['districtwise'];
        
							$result=mysqli_query($con,"select * from tbl_candidatepersonaldetails cp inner join tbl_candidatebasicdetails cb on cp.applicationnumber=cb.applicationnumber where distid=' $distid'");
              $applicationnumber=$row['applicationnumber'];
              // $result=mysqli_query($con,"select * from tbl_candidatebasicdetails where applicationnumber=' $applicationnumber'");
            // if($result>0)
            // {

              while($row=mysqli_fetch_array($result))
							{
                
                echo  "<tr>";
								echo "<td>" .$slno++."</td>";
								echo "<td>" .$row['applicationnumber']."</td>";
								echo "<td>" .$row['first_name']."</td>";
								echo "<td>" .$row['last_name']."</td>";
                echo "<td>" .$row['admission_status']."</td>";
                
                
                
								
								//echo "<td><a href='course_edit.php?courseid=".$row ['courseid']."' class='glyphicon glyphicon-edit'>Edit</a> </td>";
              } 
            
              
              
            
                  
								?>

        
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
