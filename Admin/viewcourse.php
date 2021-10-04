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
          <div class="col-sm-10">
            <input type="submit" name ="btnaddnew" value="ADD NEW" class="btn btn-danger" style="width:85px; height:35px;">
          </div>
        </div>
        <table class="table table-hover" style="border: 2px solid #adaaaa; box-shadow: 3px 3px 11px #777777; margin-bottom:7%">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Course Name</th>
                <th scope="col">Short Name</th>
              <th scope="col" style="color:#F00">Edit</th>
              <th scope="col" style="color:#F00">Delete</th>
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
								
								echo "<td><a href='course_edit.php?courseid=".$row ['courseid']."' class='glyphicon glyphicon-edit'>Edit</a> </td>";
								
								?>
          
            <td><a href="delete_course.php?course_id=<?php echo $row['courseid'];?>" class="glyphicon glyphicon-trash" onclick="return confirm('Do you want to delete ?')">Delete</a></td>
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
