<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>Santhigiri college</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <!--================ Start Header Menu Area =================-->
    <header class="header_area">
      <div class="main_menu">
        <div class="search_input" id="search_input_box">
          <div class="container">
            <form class="d-flex justify-content-between" method="" action="">
              <input
                type="text"
                class="form-control"
                id="search_input"
                placeholder="Search Here"
              />
              <button type="submit" class="btn"></button>
              <span
                class="ti-close"
                id="close_search"
                title="Close Search"
              ></span>
            </form>
          </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="index.php"
              ><img height="80" src="img/logo.png" alt=""
            />
          <h2 class="saText">Santhigiri College</h2
          </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="viewcourse.php">Course details</a>
                </li>


<?php 
session_start();
$appno=$_SESSION["appno"];
include("config.php");

$sql=mysqli_query($con,"select * from tbl_candidatepersonaldetails where applicationnumber='$appno'");
$row=mysqli_fetch_array($sql);



$sql1=mysqli_query($con,"select * from tbl_candidateparentdetails where applicationnumber='$appno'");
$row1=mysqli_fetch_array($sql1);


$sql2=mysqli_query($con,"select * from tbl_class10details c1 inner join tbl_class12details c2 on c1.applicationnumber=c2.applicationnumber where c1.applicationnumber='$appno'");
$row2=mysqli_fetch_array($sql2);



$SQL3=mysqli_query($con,"select * from tbl_candidatebasicdetails cb inner join tbl_course c on cb.courseid=c.courseid where cb.applicationnumber='$appno'  and c.coursetype='PG' ");
$row3=mysqli_fetch_array($SQL3);


$sql4=mysqli_query($con,"select * from tbl_degree where applicationnumber='$appno'");


$row4=mysqli_fetch_array($sql4);

?>

<?php

if($row<=0 || $row1<=0 || $row2<=0 || $row3>0 && $row4<=0)
{
  ?>


                <li class="nav-item submenu dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Add Profile </a
                  >
                
                  <ul class="dropdown-menu">
                 <?php 
if($row<=0)
{
                 ?>
                    <li class="nav-item">
                      <a class="nav-link" href="studentPersonal.php">Personal details</a>
                    </li>


<?php
}
?>


                    <?php 
if($row1<=0){
                 ?>
                    <li class="nav-item">
                      <a class="nav-link" href="parent.php"
                        >Parent Details</a
                      >
                    </li>
                    <?php
}
?>
                    <?php 
if($row2<=0){
                 ?>
                    <li class="nav-item">
                      <a class="nav-link" href="studentEducation.php">Education Details</a>
                    </li>
                    <?php
}
?>


<?php 
if($row3>0 && $row4<=0){
                 ?>
                    <li class="nav-item">
                      <a class="nav-link" href="degree.php">UG Details</a>
                    </li>
                    <?php
}
?>


                    
                  </ul>
                </li>

<?php
}


if($row>0 || $row1>0 || $row2>0)
{
  ?>
                <li class="nav-item submenu dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Edit Profile </a
                  >
                  <ul class="dropdown-menu">
                  <?php 
if($row>0){
                 ?>
                    <li class="nav-item">
                      <a class="nav-link" href="editstudentPersonal.php">Personal details</a>
                    </li>
                    <?php
}
?>
                    <?php 
if($row1>0){
                 ?>
                    <li class="nav-item">
                      <a class="nav-link" href="editparent.php">Parent Details</a
                      >
                    </li>
                    <?php
}
?>

                    <?php 
if($row2>0){
                 ?>
                    <li class="nav-item">
                      <a class="nav-link" href="editstudentEducation.php">Education Details</a>
                    </li>
                    <?php
}
?>


<?php 
if($row3>0 && $row4>0){
                 ?>
                    <li class="nav-item">
                      <a class="nav-link" href="editdegree.php">UG Details</a>
                    </li>
                    <?php
}
?>
                  
                  </ul>
                </li>

<?php
}
?>




                <li class="nav-item">
                  <a class="nav-link" href="viewMoreDetail.php">view profile</a>
                </li>
				   <li class="nav-item">
                  <a class="nav-link" href="../guest/index.php">Log Out</a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link search" id="search">
                    <i class="ti-search"></i>
                  </a>
                </li>
              </ul>
          
          </div>
        </nav>
      </div>
    </header>
</body>
</html>