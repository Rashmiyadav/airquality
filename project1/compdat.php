<?php

include('connection.php');
$detail=$_POST['CITY'];
$detail2=$_POST['CIT'];
session_start();
$yr=$_SESSION['t'];


$con=mysqli_connect("localhost","RASHMI","9990157767","airquality");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM air8910 WHERE CITY='$detail'and YEAR='$yr'");

echo "<table border='1' CELLPADDING='20'>
<tr>

<th>CITY</th>
<th>SO2</th>
<th>NO2</th>
<th>RSPM</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";

  echo "<td>" . $row['CITY'] . "</td>";
  echo "<td>" . $row['SO2'] . "</td>";
  echo "<td>" . $row['NO2'] . "</td>";
  echo "<td>" . $row['RSPM'] . "</td>";

  echo "</tr>";
  }
$result = mysqli_query($con,"SELECT * FROM air8910 WHERE CITY='$detail2'and YEAR='$yr'");

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";

  echo "<td>" . $row['CITY'] . "</td>";
  echo "<td>" . $row['SO2'] . "</td>";
  echo "<td>" . $row['NO2'] . "</td>";
  echo "<td>" . $row['RSPM'] . "</td>";

  echo "</tr>";
  }
  
  
  
  echo "</table>";

mysqli_close($con);
?>