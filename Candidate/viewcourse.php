<?php
include("header.php");
include("config.php");
?>
<form action="course.php" method="get">
  <div class="container" style="width:100%;margin-left:20%;margin-top:19px" >
  <div class="row">
    <div class="col-md-9" style="box-shadow: 2px 2px 10px #1b93e1; border-radius:0px; top: 250px;">
      <h3 style="text-align: center">COURSE DETAILS</h3>
      <div class="form-horizontal" style="margin-left:0px;">
        <div class="form-group">
         
        </div>
        <table class="table table-hover" style="border: 2px solid #adaaaa; box-shadow: 3px 3px 11px #777777; margin-bottom:7%">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Course Name</th>
                <th scope="col">Short Name</th>
                <th scope="col"style="text-align:center">Course Criteria</th>
            
            </tr>
          </thead>
          <?php
						$slno=1;
							$result=mysqli_query($con,"select * from tbl_course");
							while($row=mysqli_fetch_array($result))
							{
								
								echo  "<tr>";
								echo "<td>" .$slno++."</td>";
								
								echo "<td>" .$row['coursename']."</td>";
								echo "<td>" .$row['courseshortname']."</td>";
                echo "<td>" .$row['course_criteria']."</td>";
								
								
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
