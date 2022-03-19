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
        