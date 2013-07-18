<!DOCTYPE HTML>
<html>
	<head>
		<title>CONTACT US</title>
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

<body class="no-sidebar">

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
													<li><a href="index.html">Home</a></li>
													<li>
														<span>ABOUT</span>
														<ul>
															<li><a href="#">OUR PROJECT</a></li>
															<li><a href="#">AIR POLLUTION</a></li>
															<li>
																<span>AIR POLLUTANS</span>
																<ul>
																	<li><a href="#">NO2</a></li>
																	<li><a href="#">SO2</a></li>
																	<li><a href="#">RSPM</a></li>
																	<li><a href="#">CO</a></li>
																</ul>
															</li>
															<li><a href="#">ABOUT US</a></li>
														</ul>
													</li>
													<li><a href="left-sidebar.html">AIR QUALITY</a></li>
													<li><a href="right-sidebar.html">EFFECTS</a></li>
													<li class="current_page_item"><a href="no-sidebar.html">CONTACT US</a></li>
												</ul>
											</nav>
									
									</div>
								</header>

						</div>
					</div>
				</div>
			</div>
			
			
			
			
			
			
			<!-- Main Wrapper -->
			<div id="main-wrapper">
				<div class="main-wrapper-style2">
					<div class="inner">
						<div class="container">
							<div class="row">
								<div class="12u skel-cell-mainContent">
									<div id="content">

										<!-- Content -->
									
											<article>
												<header class="major">
													<h2>SELECT YOUR LOCATION</h2>
													<span class="byline">SELECT STATE</span>
												</header>
												
												
												
												
											
			
			
			
			
			
			
			
			
			
<?php
try {

 $objDb = new PDO('mysql:host=localhost;dbname=airquality', 'RASHMI', '9990157767');
 $objDb->exec('SET CHARACTER SET utf8');

 $sql = "SELECT DISTINCT STATE 
  FROM `air8910`";
 $statement = $objDb->query($sql);
 $list = $statement->fetchAll(PDO::FETCH_ASSOC);

 } catch(PDOException $e) {
 echo 'There was a problem';
 }

 ?>    






<form action="" method="post">

	<select name="state" id="state" class="update">
        <option value="">Select State</option>
        <?php if (!empty($list)) { ?>
            <?php foreach($list as $row) { ?>
                <option value="<?php echo $row['STATE']; ?>">
                    <?php echo $row['STATE']; ?>
                </option>
            <?php } ?>
        <?php } ?>
    </select>	

	<select name="CITY" id="CITY" class="update">
	    <option value="">Select CITY</option>
	</select>

</form>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>	
<script src="ajax.js" type="text/javascript"></script>
  
  </article>
								
									</div>
								</div>
							</div>
						</div>
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
