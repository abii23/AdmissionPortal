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
        <div class="container" style="width:100%;margin-left:0%;margin-top:19px">
            <div style="position: center;width: 135%">
                <div class="col-md-9" style="box-shadow: 2px 2px 10px #1b93e1; border-radius:0px; top: 250px;">
                    <h3 style="text-align: center"> Student Basic Details</h3>
                    <div class="form-horizontal" style="margin-left:0px;">
                        <div class="form-group">
                        <div style="display:flex;max-width: min-content;">
                                

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
                                    <th scope="col">Dob</th>


                                    <th scope="col">Application Status</th>





                                </tr>
                            </thead>

                            <?php
                            $applicationnumber = $_GET["applicationnumber"];
                            $slno = 1;
                            $result = mysqli_query($con, "select * from tbl_candidatebasicdetails where applicationnumber='$applicationnumber'");
                            while ($row = mysqli_fetch_array($result)) {

                                echo  "<tr>";
                                echo "<td>" . $slno++ . "</td>";


                                echo "<td>" . $row['applicationnumber'] . "</td>";

                                echo "<td>" . $row['first_name'] . "</td>";
                                echo "<td>" . $row['last_name'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['contact_number'] . "</td>";
                                echo "<td>" . $row['dob'] . "</td>";
                                echo "<td>" . $row['admission_status'] . "</td>";

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
    <form action="course.php" method="get">
        <div class="container" style="width:100%;margin-left:0%;margin-top:19px">
            <div style="position: center;width: 135%   ">
                <div class="col-md-9" style="box-shadow: 2px 2px 10px #1b93e1; border-radius:0px; top: 250px;">
                    <h3 style="text-align: center"> STUDENT PERSONAL DETAILS</h3>
                    <div class="form-horizontal" style="margin-left:0px;">
                        <div class="form-group">


                        </div>
                        <table class="table table-hover" style="border: 2px solid #adaaaa; box-shadow: 3px 3px 11px #777777; margin-bottom:7%">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">State</th>
                                    <th scope="col">District</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">House Name</th>
                                    <th scope="col">Religion</th>
                                    <th scope="col">Caste</th>
                                    <th scope="col">City</th>
                                    <th scope="col">pincode</th>





                                </tr>
                            </thead>

                            <?php
                            $applicationnumber = $_GET["applicationnumber"];
                            $slno = 1;
                            $result = mysqli_query($con, "select * from tbl_candidatepersonaldetails c inner join tbl_state s on c.stateid=s.stateid inner join tbl_district d on d.distid=c.distid where applicationnumber='$applicationnumber'");


                            while ($row = mysqli_fetch_array($result)) {

                                echo  "<tr>";
                                echo "<td>" .$slno++."</td>";
                                
                                echo "<td>" .$row['statename']."</td>";
                                echo "<td>" .$row['distname']."</td>";
                              echo "<td>" .$row['gender']."</td>";
                              echo "<td>" .$row['housename']."</td>";
                              echo "<td>" .$row['religion']."</td>";
                              echo "<td>" .$row['caste']."</td>";
                              echo "<td>" .$row['city']."</td>";
                              echo "<td>" .$row['pincode']."</td>";
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
    <form action="course.php" method="get">
        <div class="container" style="width:100%;margin-left:0%;margin-top:19px">
            <div style="position: center;width: 160%">
                <div class="col-md-9" style="box-shadow: 2px 2px 10px #1b93e1; border-radius:0px; top: 250px;">
                    <h3 style="text-align: center"> STUDENT PARENT DETAILS</h3>
                    <div class="form-horizontal" style="margin-left:0px;">
                        <div class="form-group">


                        </div>
                        <table class="table table-hover" style="border: 2px solid #adaaaa; box-shadow: 3px 3px 11px #777777; margin-bottom:7%">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">NAME OF FATHER</th>
                                    <th scope="col">NAME OF MOTHER</th>
                                    <th scope="col">FATHER CONTACT</th>
                                    
                                    <th scope="col">FATHER OCCUPATION</th>
                                    <th scope="col">MOTHER OCCUPATION</th>
                                    <th scope="col">ANNUAL INCOME</th>
                                    





                                </tr>
                            </thead>

                            <?php
                            $applicationnumber = $_GET["applicationnumber"];
                            $slno = 1;
                            $result = mysqli_query($con, "select * from tbl_candidateparentdetails where applicationnumber='$applicationnumber'");
                            while ($row = mysqli_fetch_array($result)) {

                                echo  "<tr>";
                                echo "<td>" .$slno++."</td>";
                                
                                echo "<td>" .$row['nameoffather']."</td>";
                                echo "<td>" .$row['nameofmother']."</td>";
                                echo "<td>" .$row['fathercontact']."</td>";
                              echo "<td>" .$row['fatheroccupation']."</td>";
                              echo "<td>" .$row['motheroccupation']."</td>";
                              echo "<td>" .$row['annualincome']."</td>";
                           
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
    <form action="course.php" method="get">
        <div class="container" style="width:100%;margin-left:0%;margin-top:19px">
            <div style="position: center;width: 160%">
                <div class="col-md-9" style="box-shadow: 2px 2px 10px #1b93e1; border-radius:0px; top: 250px;">
                    <h3 style="text-align: center"> STUDENT CLASS 10TH DETAILS</h3>
                    <div class="form-horizontal" style="margin-left:0px;">
                        <div class="form-group">


                        </div>
                        <table class="table table-hover" style="border: 2px solid #adaaaa; box-shadow: 3px 3px 11px #777777; margin-bottom:7%">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">BOARD NAME</th>
                                    <th scope="col">INSTITUTION NAME</th>
                                    <th scope="col">PLACE OF INSTITUTION</th>
                                    <th scope="col">STATE OF INSTITUTION</th>
                                    <th scope="col">YEAR OF PASSOUT</th>
                                    <th scope="col">CLASS 10 MARK</th>
                                    <th scope="col">NO OF ATTEMPTS</th>
                                   




                                </tr>
                            </thead>

                            <?php
                            $applicationnumber = $_GET["applicationnumber"];
                            $slno = 1;
                            $result = mysqli_query($con, "select * from tbl_class10details where applicationnumber='$applicationnumber'");
                            while ($row = mysqli_fetch_array($result)) {

                                echo  "<tr>";
                                echo "<td>" .$slno++."</td>";
                                
                                echo "<td>" .$row['boardname']."</td>";
                                echo "<td>" .$row['institutionname']."</td>";
                              echo "<td>" .$row['placeofinstitution']."</td>";
                              echo "<td>" .$row['stateofinstitution']."</td>";
                              echo "<td>" .$row['yearofpassout']."</td>";
                              echo "<td>" .$row['class10ofmark']."</td>";
                              echo "<td>" .$row['noofattempts']."</td>";
                             
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
    <form action="course.php" method="get">
        <div class="container" style="width:100%;margin-left:0%;margin-top:19px">
            <div style="position: center;width: 160%">
                <div class="col-md-9" style="box-shadow: 2px 2px 10px #1b93e1; border-radius:0px; top: 250px;">
                    <h3 style="text-align: center"> STUDENT CLASS 12TH DETAILS</h3>
                    <div class="form-horizontal" style="margin-left:0px;">
                        <div class="form-group">


                        </div>
                        <table class="table table-hover" style="border: 2px solid #adaaaa; box-shadow: 3px 3px 11px #777777; margin-bottom:7%">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">BOARD NAME</th>
                                    <th scope="col">INSTITUTION NAME</th>
                                    <th scope="col">PLACE OF INSTITUTION</th>
                                    <th scope="col">STATE OF INSTITUTION</th>
                                    <th scope="col">YEAR OF PASSOUT</th>
                                    <th scope="col">CLASS 11 MARK</th>
                                    <th scope="col">CLASS 12 MARK</th>
                                   




                                </tr>
                            </thead>

                            <?php
                            
                            $applicationnumber = $_GET["applicationnumber"];
                            $slno = 1;
                            $result = mysqli_query($con, "select * from tbl_class12details where applicationnumber='$applicationnumber'");
                            while ($row = mysqli_fetch_array($result)) {

                                echo  "<tr>";
                                echo "<td>" .$slno++."</td>";
                                
                                echo "<td>" .$row['board_name']."</td>";
                                echo "<td>" .$row['institution_name']."</td>";
                              echo "<td>" .$row['place_of_institution']."</td>";
                              echo "<td>" .$row['state_of_institution']."</td>";
                              echo "<td>" .$row['year_of_passout']."</td>";
                              echo "<td>" .$row['class11ofmark']."</td>";
                              echo "<td>" .$row['class12ofmark']."</td>";
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
    <form action="course.php" method="get">
        <div class="container" style="width:100%;margin-left:0%;margin-top:19px">
            <div style="position: center;width: 160%">
                <div class="col-md-9" style="box-shadow: 2px 2px 10px #1b93e1; border-radius:0px; top: 250px;">
                    <h3 style="text-align: center"> STUDENT DEGREE DETAILS</h3>
                    <div class="form-horizontal" style="margin-left:0px;">
                        <div class="form-group">


                        </div>
                        <table class="table table-hover" style="border: 2px solid #adaaaa; box-shadow: 3px 3px 11px #777777; margin-bottom:7%">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">STREAM</th>
                                    <th scope="col">UNIVERSITY NAME</th>

                                    <th scope="col">INSTITUTION NAME</th>
                                    <th scope="col">PLACE OF INSTITUTION</th>
                                    <th scope="col">STATE OF INSTITUTION</th>
                                    <th scope="col">YEAR OF PASSOUT</th>
                                    <th scope="col">AGGREGATE SCORE</th>
                                    
                            
                                </tr>
                            </thead>

                            <?php
                            $applicationnumber = $_GET["applicationnumber"];
                            $slno = 1;
                            $result = mysqli_query($con, "select * from tbl_degree where applicationnumber='$applicationnumber'");
                            while ($row = mysqli_fetch_array($result)) {

                                echo  "<tr>";
                                echo "<td>" .$slno++."</td>";
                                
                                echo "<td>" .$row['stream']."</td>";
                                echo "<td>" .$row['universityname']."</td>";
                              echo "<td>" .$row['institutionname']."</td>";
                              echo "<td>" .$row['institutionplace']."</td>";
                              echo "<td>" .$row['institutionstate']."</td>";
                              echo "<td>" .$row['passoutyear']."</td>";
                              echo "<td>" .$row['aggregatescore']."</td>";
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