<!DOCTYPE HTML>

<html>
	<head>
		<title>Smoke-in-the-Air</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800" rel="stylesheet" type="text/css" />
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="css/ie7.css" /><![endif]-->
	</head>
	<body class="homepage">

		<!-- Header Wrapper -->
			<div id="header-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">
						
							<!-- Header -->
								<header id="header">
									<div class="inner">
									
										<!-- Logo -->
											<h1><a href="#" id="logo">INDIA AND ITS SMOKE</a></h1>
										
										<!-- Nav -->
											<nav id="nav">
												<ul>
													<li class="current_page_item"><a href="index.html">Home</a></li>
													<li>
														<span>ABOUT</span>
														<ul>
															<li><a href="#">OUR PROJECT</a></li>
															<li><a href="#">AIR POLLUTION</a></li>
															<li>
																<span>AIR POLLUTANTS</span>
																<ul>
																	<li><a href="#">NITROGEN DIOXIDE</a></li>
																	<li><a href="#">SULPHUR DIOXIDE</a></li>
																	<li><a href="#">RSPM</a></li>
																	<li><a href="#">CARBON MONOXIDE</a></li>
																</ul>
															</li>
															<li><a href="#">ABOUT US</a></li>
														</ul>
													</li>
													<li><a href="left-sidebar.html">AIR QUALITY</a></li>
													<li><a href="right-sidebar.html">EFFECTS</a></li>
													<li><a href="no-sidebar.html">CONTACT US</a></li>
													<li><a href="compare.html">COMPARE</a></li>
												</ul>
											</nav>
									
									</div>
								</header>
<?php
//echo $at=$_POST['CITY'];
$detail=$_POST['CITY'];
 session_start();
 $yr = $_SESSION['sessionVar'];
  echo "$yr"."<br>";
include('connection.php');
$q=mysql_query("SELECT * FROM air8910 WHERE CITY='$detail' and YEAR='$yr'");
while($row=mysql_fetch_array($q))
{
	echo "SO2   :  ".$v=$row['SO2']."<br>";
	echo "NO2   :  ".$b=$row['NO2']."<br>";
	echo "RSPM  :  ".$c=$row['RSPM']."<br>";


}
/*echo $k=$v;
echo $b;
echo $c;


if($row['SO2']<"30")
{
echo " SO2 QUALITY IS LOW"."<br>";
}
elseif($row['SO2']>="30" & $row['SO2']<"90")
{
echo "SO2 QUALITY IS MEDIUM"."<br>";
}
elseif($row['SO2']>="90" & $row['SO2']<="500")
{
echo "SO2 QUALITY IS HIGH"."<br>";
}


if($b<"30")
{
echo " NO2 QUALITY IS LOW"."<br>";
}
else if($b>"30")
{
echo "NO2 QUALITY IS MEDIUM"."<br>";
}
else if($b>"90")
{
echo "NO2 QUALITY IS HIGH"."<br>";
}


if($c<"30")
{
echo " RSPM QUALITY IS LOW"."<br>";
}
else if($c>"30")
{
echo "RSPM QUALITY IS MEDIUM"."<br>";
}
else if($c>"90")
{
echo "RSPM QUALITY IS HIGH"."<br>";
}
*/
?>
</body>
</html>
