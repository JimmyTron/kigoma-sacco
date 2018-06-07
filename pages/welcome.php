<?php
session_start();
include("checklogin.php");
check_login();

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>User | Home</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 
KIGOMA SACCO MANAGEMENT
-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/font-awesome.css">
		<link rel="stylesheet" href="../css/animate.css">
		<link rel="stylesheet" href="../css/templatemo_misc.css">
		<link rel="stylesheet" href="../css/templatemo_style.css">
		<link rel="stylesheet" href="../css/owl-carousel.css">

		<script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
	</head>
	<body>
		<!--[if lt IE 7]>
			<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
		<![endif]-->

		<div class="site-main" id="sTop">
			<div class="site-header">
				<div class="main-header">
					<div class="container">
						<div id="menu-wrapper">
							<div class="row">
								<nav class="navbar navbar-inverse" role="navigation">
									<div class="navbar-header">
										<button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
										<a href="#top" class="navbar-brand">KIGOMA SACCO</a>
										<a href="#top" class="navbar-brand" href="#">Hello!</a>
										<a href="#" class="navbar-brand"><?php echo $_SESSION['name'];?></a>
										<div id="main-nav" class="collapse navbar-collapse">
											<ul class="menu-first nav navbar-nav" style="margin-right: 20px;">
												<li class="active"><a href="#">Home</a></li>
												<li><a href="#about">Services</a></li>
												<li><a href="#portfolio">Showcase</a></li>
												<li><a href="#contact-us">Contact</a></li>
												<li><a href="logout.php" class="external" target="_parent" rel="nofollow">Logout</a></li> 
																																													
											</ul>                                    
										</div> <!-- /.main-menu -->
									</div>
								</nav>
							</div> <!-- /.row -->
						</div> <!-- /#menu-wrapper -->                        
					</div> <!-- /.container -->
				</div> <!-- /.main-header -->
			</div> <!-- /.site-header -->
		</div> <!-- /.site-main -->


		<div class="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="banner-content">
							<h6>KIGOMA SACCO</h6>
							<h2>SERVICES AT YOUR INTEREST</h2>
							<ul class="buttons">
								<li>
									<div class="primary-button">
										<a href="booking.php">Bookings</a>
									</div>
								</li>
								<li>
									<div class="secondary-button">
										<a href="return.php">Returns</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="intro">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h4>Transportation &amp; Adventure !</h4>
						<h6>FOR WEDDINGS, FUNERALS,TRIPS &amp; SPORTS</h6>
						<div class="border-button"><a href="#portfolio">Discover More</a></div>
					</div>
				</div>
			</div>
		</div>


		<section id="about" class="page-section">
			<div class="second-tabs-content what-we-do">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-heading">
							<h4>SERVICES</h4>
							<p>Add some text.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="wrapper">
						<div class="col-md-12">
							<div class="row">
								<ul class="tabs clearfix" data-tabgroup="second-tab-group">
									<li class="col-md-15 col-sm-12 col-xs-12">
										<a href="#unique" class="active">
											<div class="list-item">
												<div class="icon">
													<img src="../img/first-list-icon.png" alt="">
												</div>
												<h4>Quality Service</h4>
											</div>
										</a>
									</li>
									<li class="col-md-15 col-sm-12 col-xs-12">
										<a href="#translation">
											<div class="list-item">
												<div class="icon">
													<img src="../img/third-list-icon.png" alt="">
												</div>
												<h4>Rules</h4>
											</div>
										</a>
									</li>
									<li class="col-md-15 col-sm-12 col-xs-12">
										<a href="#event">
											<div class="list-item">
												<div class="icon">
													<img src="../img/fourth-list-icon.png" alt="">
												</div>
												<h4>Bookings</h4>
											</div>
										</a>
									</li>
									<li class="col-md-15 col-sm-12 col-xs-12">
										<a href="#theme">
											<div class="list-item">
												<div class="icon">
													<img src="../img/second-list-icon.png" alt="">
												</div>
												<h4>Returns</h4>
											</div>
										</a>
									</li>
									<li class="col-md-15 col-sm-12 col-xs-12">
										<a href="#photo">
											<div class="list-item">
												<div class="icon">
													<img src="../img/fivth-list-icon.png" alt="">
												</div>
												<h4>Adventure</h4>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-12">
							<section id="second-tab-group" class="tabgroup">
								<div id="unique">
									<div class="row">
										<div class="tab-content-services">
											<div class="col-md-6">
												<div class="left-text">
													<h4>Quality Service</h4>
													<p>Add some text.</p>
													<div class="primary-button">
														<a href="#about">view more >> </a>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="right-image">
													<img src="../img/right-side-image_1.jpg" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="theme">
									<div class="row">
										<div class="tab-content-services">
											<div class="col-md-6">
												<div class="left-text">
													<h4>Returns</h4>
													<p>Add some text. <br><br>Add some text.</p>
													<div class="primary-button">
														<a href="return.php">Return Now</a>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="right-image">
													<img src="../img/right-side-image_2.jpg" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="translation">
									<div class="row">
										<div class="tab-content-services">
											<div class="col-md-6">
												<div class="left-text">
													<h4>Rules</h4>
													<p>Add some text.<br><br>Add some text.</p>
													<div class="primary-button">
														<a href="rules.php">Show Rules</a>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="right-image">
													<img src="../img/right-side-image_3.jpg" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="event">
									<div class="row">
										<div class="tab-content-services">
											<div class="col-md-6">
												<div class="left-text">
													<h4>Bookings</h4>
													<p>Add some text.<br><br>Add some text.</p>
													<div class="primary-button">
														<a href="booking.php">Book Now</a>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="right-image">
													<img src="../img/right-side-image_4.jpg" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="photo">
									<div class="row">
										<div class="tab-content-services">
											<div class="col-md-6">
												<div class="left-text">
													<h4>Adventure</h4>
													<p>Add some text.<br><br>Add some text.</p>
													<div class="primary-button">
														<a href="pages/index.php">Book Now</a>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="right-image">
													<img src="../img/right-side-image_5.jpg" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


		<section id="portfolio" class="portfolio-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-heading">
							<h4>Showroom</h4>
							<p>Add some text.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div id="owl-portfolio" class="owl-carousel owl-theme imageGallery1">
						<div class="item">
							<div class="portfolio-item">
								<a href="../img/first-portfolio-big.jpg" title=""><img src="../img/first-portfolio-item.jpg" alt="Gallery image 1" /></a>
							</div>
						</div>
						<div class="item">
							<div class="portfolio-item">
								<a href="../img/second-portfolio-big.jpg" title=""><img src="../img/second-portfolio-item.jpg" alt="Gallery image 1" /></a>
							</div>
						</div>
						<div class="item">
							<div class="portfolio-item">
								<a href="../img/third-portfolio-big.jpg" title=""><img src="../img/third-portfolio-item.jpg" alt="Gallery image 1" /></a>
							</div>
						</div>
						<div class="item">
							<div class="portfolio-item">
								<a href="../img/fourth-portfolio-big.jpg" title=""><img src="../img/fourth-portfolio-item.jpg" alt="Gallery image 1" /></a>
							</div>
						</div>
						<div class="item">
							<div class="portfolio-item">
								<a href="../img/first-portfolio-big.jpg" data-lightbox="image-1"><img src="../img/first-portfolio-item.jpg"></a>
							</div>
						</div>
						<div class="item">
							<div class="portfolio-item">
								<a href="../img/second-portfolio-big.jpg" title=""><img src="../img/second-portfolio-item.jpg" alt="Gallery image 1" /></a>
							</div>
						</div>
						<div class="item">
							<div class="portfolio-item">
								<a href="../img/first-portfolio-big.jpg" title=""><img src="../img/first-portfolio-item.jpg" alt="Gallery image 1" /></a>
							</div>
						</div>
						<div class="item">
							<div class="portfolio-item">
								<a href="../img/third-portfolio-big.jpg" title=""><img src="../img/third-portfolio-item.jpg" alt="Gallery image 1" /></a>
							</div>
						</div>
						<div class="item">
							<div class="portfolio-item">
								<a href="../img/first-portfolio-big.jpg" data-lightbox="image-1"><img src="../img/first-portfolio-item.jpg"></a>
							</div>
						</div>
						<div class="item">
							<div class="portfolio-item">
								<a href="../img/fourth-portfolio-big.jpg" title=""><img src="../img/fourth-portfolio-item.jpg" alt="Gallery image 1" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


								

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-12">
							<p>Copyright &copy; 2018 KIGOMA SACCO <br> 
							<!--<a footer </a></p>
							-->
					</div>
					<div class="col-md-4 col-sm-12">
						<ul class="social-icons">
							<li><a href="#">Facebook</a></li>
							<li><a href="#">Twitter</a></li>
							<li><a href="#">Linkedin</a></li>
							<li><a href="#">Instagram</a></li>
						</ul>
					</div>
					<div class="col-md-2 col-md-offset-2 col-sm-12">
						<div class="back-to-top">
							<a href="#top">
								<i class="fa fa-angle-up"></i>
								back to top
							</a>
						</div>
					</div>
				</div>
			</div>
		</footer>
		
		<script src="../js/vendor/jquery-1.11.0.min.js"></script>
		<script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
		<script src="../js/bootstrap.js"></script>
		<script src="../js/plugins.js"></script>
		<script src="../js/main.js"></script>

		<!-- Google Map -->
		<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script src="../js/vendor/jquery.gmap3.min.js"></script>

		<script type="text/javascript">
		$(document).ready(function() {
			
			// mobile nav toggle
			$('#nav-toggle').on('click', function (event) {
				event.preventDefault();
				$('#main-nav').toggleClass("open");
			});
		});
		</script>
		
		<!-- JIMMY TRON -->
	</body>
</html>