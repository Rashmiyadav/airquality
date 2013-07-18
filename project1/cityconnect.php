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
echo "<br>".$yr=$_REQUEST['year'];
echo "<br>";
$data=mysql_query("SELECT CITY FROM `air8910` WHERE YEAR='$yr' AND STATE='$pt'");
	 echo "Your  are given below<br>";
	
?>
<?php
  session_start();
  $_SESSION['sessionVar'] = $yr;
?>


<form action="process2.php" method="POST">
<?php

	echo "<select name=\"CITY\">"; // Open your drop down box
      //  echo $a=$_REQUEST['CITY'];
// Loop through the query results, outputing the options one by one

while( $row = mysql_fetch_array( $data )) 
{
   echo "<option value='".$row['CITY']."'>".$row['CITY']."</option>";
}

echo "</select>";// Close your drop down box

		
echo "&nbsp&nbsp&nbsp&nbsp&nbsp";
	//echo "The total hotels on your selected State are=$i";

?>
<input type="submit" value="submit" style="height:50px; width:150px">
</form>
<!-- Main Wrapper -->
			<div id="main-wrapper">
				<div class="main-wrapper-style1">
					<div class="inner">
				
						<!-- Feature 1 -->
							<section class="container box-feature1">
								<div class="row">
									<div class="12u">
										<header class="first major">
											<h2>THATS HOW WE LOOK TODAY</h2>
											<span class="byline">PROBABLY WON'T EXIST TO WITNESS THE WORSE <strong>TO COME</strong> ...</span>
										</header>
									</div>
								</div>
								<div class="row">
									<div class="4u">
										<section>
											<span class="image image-full"><img src="http://www.gits4u.com/envo/apolunasa.jpg" alt="" /></span>
											<header class="second second-friends">
												<h3>SKY IS THE LIMIT TO POLLUTION</h3>
												<span class="byline">READY TO PENETRATE THE OZONE LOL</span>
											</header>
										</section>
									</div>
									<div class="4u">
										<section>
											<span class="image image-full"><img src="http://timesofindia.indiatimes.com/photo/18491636.cms" alt="" /></span>
											<header class="second second-gear">
												<h3>Really Close Up</h3>
												<span class="byline">ISN'T IT HARMLESS</span>
											</header>
										</section>
									</div>
									<div class="4u">
										<section>
											<span class="image image-full"><img src="http://3.bp.blogspot.com/_XbeFIXy6vVE/S3fJ3gNDVjI/AAAAAAAAAVc/Z3e4YkAJN7s/s400/DSCF5637.JPG" alt="" /></span>
											<header class="second second-chart">
												<h3>WHAT A WONDER</h3>
												<span class="byline">FINALLY A BLACK TAJ WILL APPEAR SOON!</span>
											</header>
										</section>
									</div>
								</div>
								<div class="row">
									<div class="12u">
										<p>A Decade or two more is required to paint the World black. There will be air but not to breath.
										   Air that will be good enough to fire your pyre but insufficient to blow a breez to calm your soul.
										   Please don't carry a guilt of preparing a noose to strangulate an entire generation to come. 
										   Remove the elements that may harm you or your family. <BR><STRONG>STOP AIR POLLUTION</STRONG></BR></p>
									</div>
								</div>
							</section>

					</div>
				</div>
				<div class="main-wrapper-style2">
					<div class="inner">
				
						<!-- Feature 2 -->
							<section class="container box-feature2">
								<div class="row">
									<div class="6u">
										<section>
											<header class="major">
												<h2>WANT TO KNOW MORE</h2>
												<span class="byline">LEARN WHAT WE HAVE DONE TO THE NATURE</span>
											</header>
											<p>Look out to what we have offered the nature. How the Air has responded to our givings.
											   Why the air you breath in is not the same as it was before. Please enter to reveal the secrets if you have
											   already acquired the basic knowledge of Air Pollution and the pollutants.</p>
											<footer>
												<a href="#" class="button button-medium button-icon button-icon-rarrow">UNVEIL THE SECRETS</a>
											</footer>
										</section>
									</div>
									<div class="6u">
										<section>
											<header class="major">
												<h2>CLEARING THE DUST OFF AIR</h2>
												<span class="byline">LEARN HOW TO PREVENT AIR POLLUTION</span>
											</header>
											<p>Please hit the button sooner as it gets. Its time we move together as a team to defeat the devil which is ruling the Air.
											   Guys be a dude!!! and show your side to the world. Help make it better for one and all.Come forward, take a step 
											   and advance your way to the prevention.</p>
											<footer>
												<a href="#" class="button button-medium button-alt button-icon button-icon-info">let's do it</a>
											</footer>
										</section>
									</div>
								</div>
							</section>

						</div>
				</div>
				<div class="main-wrapper-style3">
					<div class="inner">
						<div class="container">
							<div class="row">
								<div class="8u">

									<!-- Article list -->
										<section class="box-article-list">
											<h2 class="icon icon-news">in the news</h2>
											
											<!-- Excerpt -->
												<article class="box-excerpt">
													<a href="#" class="image image-left"><img src="http://assets.nydailynews.com/polopoly_fs/1.1250961.1359528902!/img/httpImage/image.jpg_gen/derivatives/landscape_635/obama-immigration-1.jpg" height="152" width="152" alt="" /></a>
													<div>
														<header>
															<span class="date">3 Jul, 2013, 02.19PM IST</span>
															<h3><a href="#">Barack Obama's drive for a clean energy future</a></h3>
														</header>
														<p>The headline from Obama's speech was his decision to cut America's carbon emissions
														   by bypassing a dysfunctional Congress and directing the Environmental Protection Agency
														   to implement cleaner air-quality standards</p>
													</div>
												</article>

											<!-- Excerpt -->
												<article class="box-excerpt">
													<a href="#" class="image image-left"><img src="http://www.merciamarine.co.uk/img/articles/no_petrol.gif" height="152" width="172" alt="" /></a>
													<div>
														<header>
															<span class="date">Jul 4, 2013, 02.13 AM IST</span>
															<h3><a href="#">No pollution papers, no fuel: West Bengal Pollution Control Board</a></h3>
														</header>
														<p>KOLKATA: The West Bengal Pollution Control Board (WBPCB) has suggested to the Calcutta high
														   court that pumps stop selling fuel to vehicles that can't produce valid Pollution under Control
														   (PUC) certificates. This is one of the six measures that the board suggested to the court on 
														   Wednesday to curb vehicular pollution in the Kolkata Metropolitan Area (KMA)</p>
													</div>
												</article>

											<!-- Excerpt -->
												<article class="box-excerpt">
													<a href="#" class="image image-left"><img src="http://www.livemint.com/rf/Image-621x414/LiveMint/Period1/2012/12/15/Photos/air%20pollution.jpg" height="152" width="142" alt="" /></a>
													<div>
														<header>
															<span class="date">Jul 3, 2013, 02.12 PM IST</span>
															<h3><a href="#">Ghaziabad, Allahabad most polluted in Uttar Pradesh: Survey</a></h3>
														</header>
														<p>LUCKNOW: Ghaziabad and Allahabad have emerged as the two most air polluted cities in Uttar Pradesh
														   in a recent survey by a research and advocacy organization. The survey conducted by Delhi-based Centre
														   for Science and Environment (CSE) found pollutants of the size of 10 micron in Ghaziabad, Allahabad,
														   Kanpur and Bareilly, which was four times the acceptable size of particulates in urban areas. </p>
													</div>
												</article>

										</section>
								</div>
								<div class="4u">
								
									<!-- Spotlight -->
										<section class="box-spotlight">
											<h2 class="icon icon-paper">Spotlight</h2>
											<article>
												<a href="#" class="image image-full"><img src="http://fotobg.ru/upload/img1355437352.jpg" alt=""></a>
												<header>
													<h3><a href="#">indian air</a></h3>
													<span class="byline">world's unhealthiest, says a study</span>
												</header>
												<p>India's has the worst air pollution in the entire world, beating China, Pakistan,
												   Nepal and Bangladesh, according to a study released during this year's World Economic
												   Forum in Davos.Of 132 countries whose environments were surveyed, India ranks dead last
												   in the 'Air (effects on human health)' ranking. The annual study, the Environmental
												   Performance Index, is conducted and written by environmental research centres at Yale
												   and Columbia universities with assistance from dozens of outside scientists. The study uses
												   satellite data to measure air pollution concentrations.</p>
												<footer>
													<a href="#" class="button button-alt button-icon button-icon-paper">Continue Reading</a>
												</footer>
											</article>
										</section>
								
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		<!-- Footer Wrapper -->
			<div id="footer-wrapper">
				<footer id="footer" class="container">
					<div class="row">
						<div class="3u">
						
							<!-- Links -->
								<section>
									<h2>Related Links</h2>
									<ul class="style2">
										<li><a href="#">Heart diseases due to Air Pollution</a></li>
										<li><a href="#">childhood cancers result of Air.P </a></li>
										<li><a href="#">Air.Poll reaches dangerous level in Singapore</a></li>
										<li><a href="#">High Pollution in Patna</a></li>
										<li><a href="#">The ill fate of Taj Mahal</a></li>
										<li><a href="#">Clean Air Act</a></li>
										<li><a href="#">Energy Conservation</a></li>
										<li><a href="#">Environmental Protection Agency</a></li>
										<li><a href="#">Green Energy</a></li>
										<li><a href="#">Global Warming</a></li>
										<li><a href="#">Death toll</a></li>
									</ul>
								</section>
						
						</div>
						<div class="3u">
						
							<!-- Links -->
								<section>
									<h2>air acts</h2>
									<ul class="style2">
										<li><a href="#">air act1</a></li>
										<li><a href="#">air act2</a></li>
										<li><a href="#">air act3</a></li>
										<li><a href="#">air act4</a></li>
									</ul>
								</section>
						
							<!-- Links -->
								<section>
									<h2>consequences</h2>
									<ul class="style2">
										<li><a href="#">on helath</a></li>
										<li><a href="#">on nature</a></li>
										<li><a href="#">on archaeology</a></li>
										<li><a href="#">in general</a></li>
									</ul>
								</section>
						
						</div>
						<div class="6u">
						
							<!-- About -->
								<section>
									<h2><strong>smoke in the air</strong> by cv n rashmi</h2>
									<p>Hello! We are doing this as our summer training project.
									<a href="">xyz</a> for <a href="">iic</a>.
									It's about<a href="">Air Pollution in India</a>
									</p>
									<a href="/" class="button button-alt button-icon button-icon-rarrow">More @ iic</a>
								</section>
						
							<!-- Contact -->
								<section>
									<h2>Get in touch</h2>
									<div>
										<div class="row">
											<div class="6u">
												<dl class="contact">
													<dt>Twitter</dt>
													<dd><a href="http://twitter.com/n33co">@n33co</a></dd>
													<dt>Dribbble</dt>
													<dd><a href="http://dribbble.com/n33">dribbble.com/n33</a></dd>
													<dt>WWW</dt>
													<dd><a href="http://n33.co">n33.co</a></dd>
													<dt>Email</dt>
													<dd><a href="mailto:aj%20-at-%20n33.co">aj -at- n33.co</a></dd>
												</dl>
											</div>
											<div class="6u">
												<dl class="contact">
													<dt>Address</dt>
													<dd>
														123iic<br />
														South Campus<br />
														INDIA
													</dd>
													<dt>Phone</dt>
													<dd>(0000) 0000000</dd>
												</dl>
											</div>
										</div>
									</div>
								</section>
						
						</div>
					</div>
					<div class="row">
						<div class="12u">
							<div id="copyright">
								&copy; Untitled. All rights reserved | Images: <a href="">fotogrph</a> + <a href="">Iconify.it</a> | Design: <a href="">IIC</a>
							</div>
						</div>
					</div>
				</footer>
			</div>
</body>
</html>



<!--<html>
<body>
<form action="process2.php" method="post">
<button type="submit">submit</button>
</form>

</body>
</html>-->
