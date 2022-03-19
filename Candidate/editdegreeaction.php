<?php
session_start();
include("config.php");
$Entertype=$_POST["txt_ug"];
$Enteruniversityname=$_POST["txt_universityname"];
$Enterdegreeinstitutionname=$_POST["txt_institutiontenname"];
$Enterdegreeinstitutionplace=$_POST["txt_place"];
$Enterdegreeinstitutionstate=$_POST["txt_state"];
$Enterdegreeyear=$_POST["txt_year"];
$Enterdegreemark=$_POST["txt_mark"];
$Enterdegreestream=$_POST["txt_stream"];
$applicationnumber=$_SESSION["appno"];

$save=mysqli_query($con,"update tbl_degree set stream='$Enterdegreestream', universityname='$Enteruniversityname',institutionname='$Enterdegreeinstitutionname',institutionplace='$Enterdegreeinstitutionplace',institutionstate='$Enterdegreeinstitutionstate',passoutyear='$Enterdegreeyear',aggregatescore='$Enterdegreemark' where applicationnumber='$applicationnumber'");
//echo "insert into  tbl_degree(stream,universityname,institutionname,institutionplace,institutionstate,passoutyear,aggregatescore,applicationnumber)values('$Enterdegreestream','$Enteruniversityname','$Enterdegreeinstitutionname','$Enterdegreeinstitutionplace','$Enterdegreeinstitutionstate','$Enterdegreeyear','$Enterdegreemark','$applicationnumber')";
//$save=mysqli_query($con,"insert into  tbl_class10details(institutionname,placeofinstitution,stateofinstitution,yearofpassout,class10ofmark,noofattempts)values('$Enter10institutionname','$Enter10institutionplace','$Enter10institutionstate','$Enter10year','$Enter10mark','$Enter10attempt')");
//echo "insert into  tbl_class10details(institutionname,placeofinstitution,stateofinstitution,yearofpassout,class10%ofmark,noofattempts)values('$Enter10institutionname','$Enter10institutionplace','$Enter10institutionstate','$Enter10year','$Enter10mark','$Enter10attempt')";

if($save)
{

    echo "<script>alert('UG DETAILS UPDATION COMPLETED!!!'); window.location='index.php'</script>";
}
else
{

    echo "<script>alert(' UG DETAILS UPDATION FAILED!!!'); window.location='index.php'</script>";
}

//echo $save;
?>