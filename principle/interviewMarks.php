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
    <form action="course.php" method="get">
        <div class="container" style="width:100%;margin-left:14%;margin-top:19px">
            <div style="position: center;width: 160%">
                <div class="col-md-9" style="box-shadow: 2px 2px 10px #1b93e1; border-radius:0px; top: 250px;">
                    <h3 style="text-align: center"> STUDENT DETAILS</h3>
                    <div class="form-horizontal" style="margin-left:0px;">
                        <div class="form-group">
                            <div style="display:flex;">
                                <label>Student Basic Details</label>
                            </div>

                        </div>
                        <table class="table table-hover" style="border: 2px solid #adaaaa; box-shadow: 3px 3px 11px #777777; margin-bottom:7%">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Application Number</th>
                                    <th scope="col">English Proficiency </th>
                <th scope="col">Subject Knowledge</th>
                <th scope="col">Attitude</th>
                <th scope="col">Comments</th>
                <th scope="col">Interview Date</th>
                <th scope="col">Interviewer Name</th>




                                </tr>
                            </thead>

                            <?php
                            $applicationnumber = $_GET["applicationnumber"];
                            $slno = 1;
                            $result = mysqli_query($con, "select * from tbl_interview where applicationnumber='$applicationnumber'");
                            while ($row = mysqli_fetch_array($result)) {

                                echo  "<tr>";
                              
								echo "<td>" .$slno++."</td>";
								echo "<td>" .$row['applicationnumber']."</td>";
								echo "<td>" .$row['language']."</td>";
								echo "<td>" .$row['subjectknowledge']."</td>";
                            echo "<td>" .$row['attitude']."</td>";
                echo "<td>" .$row['comments']."</td>";
                echo "<td>" .$row['interviewdate']."</td>";
                echo "<td>" .$row['interviewername']."</td>";


                                //	echo "<td><a href='course_edit.php?courseid=".$row ['courseid']."' class='glyphicon glyphicon-edit'>Edit</a> </td>";

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