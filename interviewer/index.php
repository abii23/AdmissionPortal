<?php 
include("header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 
<?php
include("header.php");
include("config.php");
$conn=mysqli_connect("localhost","root","","dbadmission");

$query ="select count(college_id) as 'count',courseshortname from tbl_interview i
inner join tbl_candidatebasicdetails cb on i.applicationnumber=cb.applicationnumber
inner join tbl_course c on c.courseid=cb.courseid
group by courseshortname";


$res =$conn-> query($query);
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['f_name', 'number'],
        <?php
		while ($row=$res->fetch_assoc())
		{
			echo "['".$row['courseshortname']."',".$row['count']."],";
		}
		?>
        ]);

        var options = {
          title: 'Interview Status',
		  is3D:true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <br>
    <br>
    <br>
    <br>
    <div id="piechart" style="width: 900px; height: 500px;"></div>




</body>
</html>
<?php 
include("footer.php");
?>