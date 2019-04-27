<?php 
include('../controller/c_home.php');
include('../controller/c_register.php');
$cwritten = new c_Home();
$data = $cwritten->writtenByAccept();
$listwritten = $data['WrittenList4'];

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Trendy Blog a Blogging Category Bootstrap Responsive Website Template  | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Trendy Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="../homepage/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../homepage/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="../homepage/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
</head>

<body>
<!-- banner -->
	<div class="banner">
		<div class="banner-info">
			<div class="container">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						<div class="logo">
							<img src="../homepage/images/Greenwich-carousel-logo.png" width="340" height="80" >
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" >
						<ul class="nav navbar-nav " style="color: black;">
							<li class="act"><a href="homepage.php" >Home</a></li>
							<?php
								if(isset($_SESSION['user_name']))
								{ 
								 ?>
								<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?=$_SESSION['user_name']?><span class="caret"></span></a>
									<ul class="dropdown-menu">									
										<li><a href="logout.php">Logout</a></li>	
										<li><a href="../studentman.php">View Article</a></li>	
										<li><a href="../studentinformation.php">Information</a></li>		
									</ul>
								</li>
								<?php 
								}
								else
								{
								 ?>
								 <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="login.php">Login</a></li>				
									</ul>
								</li>
							<?php } ?>
						</ul>
					</div><!-- /.navbar-collapse -->	
					
				</nav>
				<!--banner-Slider-->
					<script src="../homepage/js/responsiveslides.min.js"></script>
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 4
							  $("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav:true,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
							  });

							});	
						</script>
					<div  id="top" class="callbacks_container">
						
					</div>

			</div>

		</div>
	</div>
<!-- banner -->
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="banner-bottom-grids">
				<h1 style="text-align: center;"> New Release Magazine</h1>
				<?php 
				foreach($listwritten as $written)
					{
				 ?>
				<div class="col-md-3 banner-bottom-grid-left" style="margin-top: 20px">
					<div class="br-bm-gd-lt">
						<div class="overlay">
							<div class="arrow-left"></div>
							<div class="rectangle"></div>
						</div>
						<div class="health-pos">
							<div class="health">
								<ul>
									<li><a onclick="window.location.assign('../detailwritten.php?id=<?=$written->WrittenID?>');">Read More</a></li>
									<li><?=$written->DateTimeWritten?></li>
								</ul>
							</div>
							<h3><?=$written->Name?></h3>	
							<div class="dummy"> 
								<img  src="../publicmanagepage/images/<?=$written->Image?>" style="width: 200px; height: 150px;" alt="Photo">
							</div>						
						</div>
					</div>				
				</div>
			<?php } ?>
				<div class="clearfix"> </div>
			</div>
			<div>
				<br>
			</div>
			<!-- video-grids -->
			<!-- //video-grids -->
			<!-- video-bottom-grids -->
			<!-- //video-bottom-grids -->
			<!-- news-and-events -->

			<!-- //news-and-events -->
		</div>
	</div>
<!-- //banner-bottom -->
<!-- footer -->
	<div class="footer-top-w3layouts-agile">
		<div class="container">
			<p>at least 150 missing and there dead in landslide after monsoon 
				rains in central Sri Lanka, officials say <a href="#">http//example.com</a></p>
		</div>
	</div>
	<div class="footer">
		<div class="container">
			<div class="footer-grids wthree-agile">
				<div class="col-md-4 footer-grid-left">
					<h3>twitter feed</h3>
					<ul>
						<li><a href="#">the moment an unlimited #antares rocket exploded seconds after launch 
							<i>http//example.com</i></a><span>15 minutes ago</span></li>
						<li><a href="mailto:info@example.com" class="cols">@NASA</a> & <a href="mailto:info@example.com" class="cols">
							@orbital science</a> <a href="#">gathering data on failure #antares rocket bound 
							for international space</a><span>45 minutes ago</span></li>
						<li><a href="#">ex-cabinet minister chris huhne loses legal challenge over $77,750 
							court costs incurred in speeding points</a><span>1 day ago</span></li>
					</ul>
				</div>
				<div class="col-md-4 footer-grid-left">
					<h3>contact form</h3>
					<form>
						<input type="text" value="enter your full name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'enter your full name';}" required="">
						<input type="email" value="enter your email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'enter your email address';}" required="">
						<textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
						<input type="submit" value="Submit" >
					</form>
				</div>
				<div class="col-md-4 footer-grid-left">
					<h3>about us</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do 
						eiusmod tempor incididunt ut labore et dolore magna aliqua. 
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
						<span>But I must explain to you how all this mistaken idea of denouncing
						pleasure and praising pain was born and I will give you a complete 
						account of the system, and expound the actual teachings of the 
						great explorer.</span>
						<i>- The Entire TLG Team</i></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-bottom">
				<div class="footer-bottom-left-whtree-agileinfo">
					<p>&copy 2017 Trendy Blog. All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts.</a></p>
				</div>
				<div class="footer-bottom-right-whtree-agileinfo">
					<ul>
						<li><a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a></li>
						<li><a href="#" class="icon-button google"><i class="icon-google"></i><span></span></a></li>
						<li><a href="#" class="icon-button v"><i class="icon-v"></i><span></span></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="../homepage/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>