<?php
include("header.php");
include("config.php");
?>
<form action="course.php" method="get">
  <div class="container" style="width:100%;margin-left:10%;margin-top:19px" >
  <div class="row">
    <div class="col-md-12" style="box-shadow: 2px 2px 10px #1b93e1; border-radius:0px; top: 250px;">
      <h3 style="text-align: center">Application Status</h3>
      <div class="form-horizontal" style="margin-left:0px;">
       
        <table class="table table-hover" style="border: 2px solid #adaaaa; box-shadow: 3px 3px 11px #777777; margin-bottom:7%">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Application Status</th>
                <th scope="col">Application Count</th>
            </tr>
          </thead>
          <?php
						$slno=1;
							$result=mysqli_query($con,"select count(basicid) as count,admission_status from tbl_candidatebasicdetails
                      group by admission_status");
							while($row=mysqli_fetch_array($result))
							{
								
								echo  "<tr>";
								echo "<td>" .$slno++."</td>";
								echo "<td>" .$row['admission_status']."</td>";
								echo "<td>" .$row['count']."</td>";
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
