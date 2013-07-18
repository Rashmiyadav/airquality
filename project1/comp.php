<?php 
$name = "RASHMI";
$password = "9990157767";
$localhost = "localhost"; 
$db = "airquality";
//connection to the database
$dbhandle = mysql_connect($localhost, $name, $password,$db)
  or die("Unable to connect to MySQL");
//echo "Connected to MySQL<br>" ;
mysql_select_db($db) or die(mysql_error()); 
//include('connection.php');
echo "User selected State is=";
echo $pt=$_REQUEST['States'];
echo "<br>".$pt2=$_REQUEST['state2'];
$yr=$_REQUEST['year'];
//echo "<br>".$yr=$_REQUEST['year'];
echo "<br>";
session_start();
$_SESSION['t'] = $yr;
$data=mysql_query("SELECT Distinct CITY FROM `air8910` WHERE STATE='$pt' and YEAR='$yr'");
	 echo "Your  are given below<br>";
$data2=mysql_query("SELECT Distinct CITY FROM `air8910` WHERE STATE='$pt2' and YEAR='$yr'");
?>

<html>

<form action="compdat.php" method="POST">
<?php

	echo "<select name=\"CITY\">"; // Open your drop down box
      //  echo $a=$_REQUEST['CITY'];
// Loop through the query results, outputing the options one by one

while( $row = mysql_fetch_array( $data )) 
{
   echo "<option value='".$row['CITY']."'>".$row['CITY']."</option>";
}

echo "</select>";// Close your drop down box

		
echo "<br>";
	//echo "The total hotels on your selected State are=$i";
echo "<select name=\"CIT\">"; // Open your drop down box
      //  echo $a=$_REQUEST['CITY'];
// Loop through the query results, outputing the options one by one

while( $row = mysql_fetch_array( $data2))
{
   echo "<option value='".$row['CITY']."'>".$row['CITY']."</option>";
}

echo "</select>";// Close your drop down box
?>
<input type="submit" value="submit">
</form>
</body>
</html>



<!--<html>
<body>
<form action="process2.php" method="post">
<button type="submit">submit</button>
</form>

</body>
</html>-->
