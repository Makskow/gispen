<?php session_start(); ?>

<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="UTF-8">

	<title>Gispen</title>

	<link rel="icon" type="image/png" href="../images/favicon.ico" />

	<!-- build:css styles/main.css -->
	<link rel="stylesheet" href="../styles/main.css">
	<!-- endbuild -->
</head>
<body>
	
	<?php
		//0cd3670f5dc69e2f13c54f52efb8945d

		require_once('common/language.php');

		if (isset($_GET['lang'])) {
			$_SESSION['lang'] = $_GET['lang'];
		}

		if (isset($_SESSION['lang'])) {
			$langue = new Langues('texts', 'home', $_SESSION['lang']); 
		}
		else {
			$langue = new Langues('texts', 'home'); 
		}
	?>


	<!-- NAVIGATION -->
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand hidden-xs hidden-sm" href="#"><img src="../images/gispen-logo.png" alt="brand" height="50px"></a>
				<a class="navbar-brand visible-xs visible-sm" href="#"><img src="../images/gispen-logo-xs.png" alt="brand" height="50px"></a>
			</div>

			<div id="navbar" class="navbar-collapse collapse">
				<ul id="nav-links-main" class="nav navbar-nav col-sm-11">
					<li role="presentation" class="dropdown col-xs-12 col-sm-3">
						<a class="dropdown-toggle hvr-overline-reveal" data-toggle="dropdown" role="button" ariahaspopup="true" aria-expanded="false"><?php echo $langue->show_text('nav_1'); ?></a>
						<ul class="dropdown-menu">
							<li class="link"><a id="nav_1-1" href="#"><?php echo $langue->show_text('nav_1-1'); ?></a></li>
							<li class="link"><a id="nav_1-2" href="#"><?php echo $langue->show_text('nav_1-2'); ?></a></li>
							<li class="link"><a id="nav_1-3" href="#"><?php echo $langue->show_text('nav_1-3'); ?></a></li>
							<li class="link"><a id="nav_1-4" href="#"><?php echo $langue->show_text('nav_1-4'); ?></a></li>
							<li class="link"><a id="nav_1-5" href="#"><?php echo $langue->show_text('nav_1-5'); ?></a></li>
						</ul>
					</li>
					<li role="presentation" class="dropdown col-xs-12 col-sm-3">
						<a class="dropdown-toggle hvr-overline-reveal" data-toggle="dropdown" role="button" ariahaspopup="true" aria-expanded="false"><?php echo $langue->show_text('nav_2'); ?></a>
						<ul class="dropdown-menu">
							<li class="link"><a id="nav_2-1" href="#"><?php echo $langue->show_text('nav_2-1'); ?></a></li>
							<li class="link"><a id="nav_2-2" href="#"><?php echo $langue->show_text('nav_2-2'); ?></a></li>
							<li class="link"><a id="nav_2-3" href="#"><?php echo $langue->show_text('nav_2-3'); ?></a></li>
							<li class="link"><a id="nav_2-4" href="#"><?php echo $langue->show_text('nav_2-4'); ?></a></li>
							<li class="link"><a id="nav_2-5" href="#"><?php echo $langue->show_text('nav_2-5'); ?></a></li>
						</ul>
					</li>
					<li role="presentation" class="dropdown col-xs-12 col-sm-3">
						<a class="dropdown-toggle hvr-overline-reveal" data-toggle="dropdown" role="button" ariahaspopup="true" aria-expanded="false"><?php echo $langue->show_text('nav_3'); ?></a>
						<ul class="dropdown-menu">
							<li class="link"><a id="nav_3-1" href="#"><?php echo $langue->show_text('nav_3-1'); ?></a></li>
							<li class="link"><a id="nav_3-2" href="#"><?php echo $langue->show_text('nav_3-2'); ?></a></li>
							<li class="link"><a id="nav_3-3" href="#"><?php echo $langue->show_text('nav_3-3'); ?></a></li>
							<li class="link"><a id="nav_3-4" href="#"><?php echo $langue->show_text('nav_3-4'); ?></a></li>
						</ul>
					</li>
					<li role="presentation" class="dropdown col-xs-12 col-sm-3">
						<a class="dropdown-toggle hvr-overline-reveal" data-toggle="dropdown" role="button" ariahaspopup="true" aria-expanded="false"><?php echo $langue->show_text('nav_4'); ?></a>
						<ul class="dropdown-menu">
							<li class="link"><a id="nav_4-1" href="#"><?php echo $langue->show_text('nav_4-1'); ?></a></li>
							<li class="link"><a id="nav_4-2" href="#"><?php echo $langue->show_text('nav_4-2'); ?></a></li>
							<li class="link"><a id="nav_4-3" href="#"><?php echo $langue->show_text('nav_4-3'); ?></a></li>
							<li class="link"><a id="nav_4-4" href="#"><?php echo $langue->show_text('nav_4-4'); ?></a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>


	<!-- JUMBOTRON -->
	<div class="jumbotron" id="jumbo">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="jumbo-header"><?php echo $langue->show_text('jumbo-header'); ?></h2>
					<p class="jumbo-text"><?php echo $langue->show_text('jumbo-text'); ?></p>

					<a id="jumbo-btn" href="#" class="btn jumbo-btn"><?php echo $langue->show_text('jumbo-btn'); ?></a>
				</div>
			</div>
		</div>
	</div>


	<!-- MAIN -->
	<div class="container-fluid" id="container-main">

		<!-- ROW 1 -->
		<div class="row row1">
			<div class="col-xs-12 col-sm-6 col-md-3 row1-block" id="block_1-1">
				<a id="block_1-1-a" href="">
					<div class="col-xs-4 col-sm-12 block-image">
						<h2 class="hidden-xs"><?php echo $langue->show_text('block_1-1-header'); ?></h2>
					</div>
					<div class="col-xs-8 col-sm-12 block-text">
						<p class="block-text-para"><?php echo $langue->show_text('block_1-1-para'); ?></p>
						<span class="block-text-link"><?php echo $langue->show_text('block_1-1-link'); ?></span>
					</div>
				</a>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-3 row1-block" id="block_1-2">
				<a id="block_1-2-a" href="">
					<div class="col-xs-4 col-sm-12 block-image">
						<h2 class="hidden-xs"><?php echo $langue->show_text('block_1-2-header'); ?></h2>
					</div>
					<div class="col-xs-8 col-sm-12 block-text">
						<p class="block-text-para"><?php echo $langue->show_text('block_1-2-para'); ?></p>
						<span class="block-text-link"><?php echo $langue->show_text('block_1-2-link'); ?></span>
					</div>
				</a>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-3 row1-block" id="block_1-3">
				<a id="block_1-3-a" href="">
					<div class="col-xs-4 col-sm-12 block-image">
						<h2 class="hidden-xs"><?php echo $langue->show_text('block_1-3-header'); ?></h2>
					</div>
					<div class="col-xs-8 col-sm-12 block-text">
						<p class="block-text-para"><?php echo $langue->show_text('block_1-3-para'); ?></p>
						<span class="block-text-link"><?php echo $langue->show_text('block_1-3-link'); ?></span>
					</div>
				</a>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-3 row1-block" id="block_1-4">
				<a id="block_1-4-a" href="">
					<div class="col-xs-4 col-sm-12 block-image">
						<h2 class="hidden-xs"><?php echo $langue->show_text('block_1-4-header'); ?></h2>
					</div>
					<div class="col-xs-8 col-sm-12 block-text">
						<p class="block-text-para"><?php echo $langue->show_text('block_1-4-para'); ?></p>
						<span class="block-text-link"><?php echo $langue->show_text('block_1-4-link'); ?></span>
					</div>
				</a>
			</div>
		</div>

		<hr>

		<!-- ROW 2 -->
		<div class="row row2">
			<div class="row2-text">
				<h2 class="text-center row2-header"><?php echo $langue->show_text('row2-header'); ?></h2>
				<p class="text-center row2-para"><?php echo $langue->show_text('row2-para'); ?></p>
			</div>

				<div class="row2-img-box">
					<div class="row2-text-box">
						<p class="row2-text-para"><?php echo $langue->show_text('row2-text-para'); ?></p>
						<a id="row2-box-b" href="#" class="btn row2-btn"><?php echo $langue->show_text('row2-btn'); ?></a>
					</div>
				</div>
		</div>

		<!-- ROW 3 -->
		<div class="row row3">
			<p class="row3-header"><?php echo $langue->show_text('row3-header'); ?></p>
			<div class="row">
				<div class="col-xs-12 col-sm-4 row3-block" id="block_3-1">
					<a id="block_3-1-a" href="#">
						<div class="col-xs-4 col-sm-12 block-image">
						</div>
						<div class="col-xs-8 col-sm-12 block-text">
							<h4 class="block-text-header"><?php echo $langue->show_text('block_3-1-header'); ?></h4>
							<p class="block-text-para"><?php echo $langue->show_text('block_3-1-para'); ?></p>
							<a id="block_3-1-b" href="#" class="block-text-link"><span><?php echo $langue->show_text('block_3-1-link'); ?></span></a>
						</div>
					</a>
				</div>

				<div class="col-xs-12 col-sm-4 row3-block" id="block_3-2">
					<a id="block_3-2-a" href="#">
						<div class="col-xs-4 col-sm-12 block-image">
						</div>
						<div class="col-xs-8 col-sm-12 block-text">
							<h4 class="block-text-header"><?php echo $langue->show_text('block_3-2-header'); ?></h4>
							<p class="block-text-para"><?php echo $langue->show_text('block_3-2-para'); ?></p>
							<a id="block_3-2-b" href="#" class="block-text-link"><span><?php echo $langue->show_text('block_3-2-link'); ?></span></a>
						</div>
					</a>
				</div>

				<div class="col-xs-12 col-sm-4 row3-block" id="block_3-3">
					<a id="block_3-3-a" href="#">
						<div class="col-xs-4 col-sm-12 block-image">
						</div>
						<div class="col-xs-8 col-sm-12 block-text">
							<h4 class="block-text-header"><?php echo $langue->show_text('block_3-3-header'); ?></h4>
							<p class="block-text-para"><?php echo $langue->show_text('block_3-3-para'); ?></p>
							<a id="block_3-3-b" href="#" class="block-text-link"><span><?php echo $langue->show_text('block_3-3-link'); ?></span></a>
						</div>
					</a>
				</div>
			</div>
		</div>

		<!-- ROW 4 -->
		<div class="row row4">
			<div class="row4-text">
				<h2 class="text-center row4-header"><?php echo $langue->show_text('row4-header'); ?></h2>
				<p class="text-center row4-para"><?php echo $langue->show_text('row4-para'); ?></p>
			</div>
			<div class="row row4-images">
				<div class="col-xs-12 col-sm-12 col-md-4">
					<div class="col-xs-12 col-sm-6 col-md-12 row4-block">
						<div id="block_4-1">
							<div class="bg-color">
								<div class="block-text">
									<h4 class="block-text-header"><?php echo $langue->show_text('block_4-1-header'); ?></h4>
									<p class="block-text-para"><?php echo $langue->show_text('block_4-1-para'); ?></p>
									<a id="block_4-1-a" href="#" class="block-text-link"><span><?php echo $langue->show_text('block_4-1-link'); ?></span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-12 row4-block">
						<div id="block_4-2">
							<div class="block-text">
									<h4 class="block-text-header"><?php echo $langue->show_text('block_4-2-header'); ?></h4>
									<p class="block-text-para"><?php echo $langue->show_text('block_4-2-para'); ?></p>
									<a id="block_4-2-a" href="#" class="block-text-link"><span><?php echo $langue->show_text('block_4-2-link'); ?></span></a>
								</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-8">
					<div class="col-xs-12 col-sm-12 col-md-12 row4-block">
						<div id="block_4-3">
							<div class="bg-color">
								<div class="block-text">
									<h4 class="block-text-header"><?php echo $langue->show_text('block_4-3-header'); ?></h4>
									<p class="block-text-para"><?php echo $langue->show_text('block_4-3-para'); ?></p>
									<a id="block_4-3-a" href="#" class="block-text-link"><span><?php echo $langue->show_text('block_4-3-link'); ?></span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="col-xs-12 col-sm-6 col-md-6 row4-block">
							<div id="block_4-4">
								<div class="bg-color">
									<div class="block-text">
									<h4 class="block-text-header"><?php echo $langue->show_text('block_4-4-header'); ?></h4>
									<p class="block-text-para"><?php echo $langue->show_text('block_4-4-para'); ?></p>
									<a id="block_4-4-a" href="#" class="block-text-link"><span><?php echo $langue->show_text('block_4-4-link'); ?></span></a>
								</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="col-xs-12 col-sm-12 col-md-12 row4-block">
								<div id="block_4-5">
									<div class="block-text">
									<h4 class="block-text-header"><?php echo $langue->show_text('block_4-5-header'); ?></h4>
									<p class="block-text-para"><?php echo $langue->show_text('block_4-5-para'); ?></p>
									<a id="block_4-5-a" href="#" class="block-text-link"><span><?php echo $langue->show_text('block_4-5-link'); ?></span></a>
								</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 row4-block">
								<div id="block_4-6">
									<div class="bg-color">
										<div class="block-text">
									<h4 class="block-text-header"><?php echo $langue->show_text('block_4-6-header'); ?></h4>
									<p class="block-text-para"><?php echo $langue->show_text('block_4-6-para'); ?></p>
									<a id="block_4-6-a" href="#" class="block-text-link"><span><?php echo $langue->show_text('block_4-6-link'); ?></span></a>
								</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<hr>

		<!-- ROW 7 -->
		<div class="row row7">
			<div class="row7-text">
				<h2 class="text-center row7-header"><?php echo $langue->show_text('row5-header'); ?></h2>
				<p class="text-center row7-para"><?php echo $langue->show_text('row5-para'); ?></p>
			</div>
			<div class="row7-images">
				<div class="col-xs-12 col-sm-4 row7-block" id="block_7-1">
						<div class="bg-color">
							<div class="block-text">
								<h4 class="block-text-header"><?php echo $langue->show_text('block_5-1-header'); ?></h4>
								<h2 class="block-text-name"><?php echo $langue->show_text('block_5-1-name'); ?></h2>
								<p class="block-text-para"><?php echo $langue->show_text('block_5-1-para'); ?></p>
								<a id="block_5-1-a" href="#" class="block-text-link"><?php echo $langue->show_text('block_5-1-link'); ?></a>
							</div>
						</div>
				</div>

				<div class="col-xs-12 col-sm-4 row7-block" id="block_7-2">
					
						<div class="bg-color">
							<div class="block-text">
								<h4 class="block-text-header"><?php echo $langue->show_text('block_5-2-header'); ?></h4>
								<h2 class="block-text-name"><?php echo $langue->show_text('block_5-2-name'); ?></h2>
								<p class="block-text-para"><?php echo $langue->show_text('block_5-2-para'); ?></p>
								<a id="block_5-2-a" href="#" class="block-text-link"><?php echo $langue->show_text('block_5-2-link'); ?></a>
							</div>
						</div>
				</div>

				<div class="col-xs-12 col-sm-4 row7-block" id="block_7-3">
						<div class="bg-color">
							<div class="block-text">
								<h4 class="block-text-header"><?php echo $langue->show_text('block_5-3-header'); ?></h4>
								<h2 class="block-text-name"><?php echo $langue->show_text('block_5-3-name'); ?></h2>
								<p class="block-text-para"><?php echo $langue->show_text('block_5-3-para'); ?></p>
								<a id="block_5-3-a" href="#" class="block-text-link"><?php echo $langue->show_text('block_5-3-link'); ?></a>
							</div>
						</div>
				</div>
			</div>
		</div>

	</div>

	<footer class="container-fluid">
		<div class="footer-container">
			<div class="row">
				<div class="footer-social">
					<h3 class="footer-social-header">
						<?php echo $langue->show_text('footer-social'); ?>
					</h3>
					<ul class="footer-social-icons">
						<li>
							<a id="social-twitter" href="#" id="blabla" class="social-icon"><i class="fa fa-twitter"></i></a>
						</li>
						<li>
							<a id="social-linkedin" href="" class="social-icon"> <i class="fa fa-linkedin"></i></a>
						</li>
						<li>
							<a id="social-facebook" href="" class="social-icon"> <i class="fa fa-facebook"></i></a>
						</li>
						<li>
							<a id="social-pinterest" href="" class="social-icon"> <i class="fa fa-pinterest"></i></a>
						</li>
						<li>
							<a id="social-youtube" href="" class="social-icon"> <i class="fa fa-youtube"></i></a>
						</li>
						<li>
							<a id="social-instagram" href="" class="social-icon"> <i class="fa fa-instagram"></i></a>
						</li>
					</ul>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12 col-md-7" id="footer-links-box">
					<div class="col-xs-3 col-sm-3 col-links hidden-xs">
						<ul class="footer-links">
							<li class="link"><a id="footer_1-1" href="#"><?php echo $langue->show_text('nav_1-1'); ?></a></li>
							<li class="link"><a id="footer_1-2" href="#"><?php echo $langue->show_text('nav_1-2'); ?></a></li>
							<li class="link"><a id="footer_1-3" href="#"><?php echo $langue->show_text('nav_1-3'); ?></a></li>
							<li class="link"><a id="footer_1-4" href="#"><?php echo $langue->show_text('nav_1-4'); ?></a></li>
							<li class="link"><a id="footer_1-5" href="#"><?php echo $langue->show_text('nav_1-5'); ?></a></li>
						</ul>
					</div>

					<div class="col-xs-3 col-sm-3 col-links hidden-xs">
						<ul class="footer-links">
							<li class="link"><a id="footer_2-1" href="#"><?php echo $langue->show_text('nav_2-1'); ?></a></li>
							<li class="link"><a id="footer_2-2" href="#"><?php echo $langue->show_text('nav_2-2'); ?></a></li>
							<li class="link"><a id="footer_2-3" href="#"><?php echo $langue->show_text('nav_2-3'); ?></a></li>
							<li class="link"><a id="footer_2-4" href="#"><?php echo $langue->show_text('nav_2-4'); ?></a></li>
							<li class="link"><a id="footer_2-5" href="#"><?php echo $langue->show_text('nav_2-5'); ?></a></li>
						</ul>
					</div>

					<div class="col-xs-3 col-sm-3 col-links hidden-xs">
						<ul class="footer-links">
							<li class="link"><a id="footer_3-1" href="#"><?php echo $langue->show_text('nav_3-1'); ?></a></li>
							<li class="link"><a id="footer_3-2" href="#"><?php echo $langue->show_text('nav_3-2'); ?></a></li>
							<li class="link"><a id="footer_3-3" href="#"><?php echo $langue->show_text('nav_3-3'); ?></a></li>
							<li class="link"><a id="footer_3-4" href="#"><?php echo $langue->show_text('nav_3-4'); ?></a></li>
						</ul>
					</div>

					<div class="col-xs-3 col-sm-3 col-links hidden-xs">
						<ul class="footer-links">
							<li class="link"><a id="footer_4-1" href="#"><?php echo $langue->show_text('nav_4-1'); ?></a></li>
							<li class="link"><a id="footer_4-2" href="#"><?php echo $langue->show_text('nav_4-2'); ?></a></li>
							<li class="link"><a id="footer_4-3" href="#"><?php echo $langue->show_text('nav_4-3'); ?></a></li>
							<li class="link"><a id="footer_4-4" href="#"><?php echo $langue->show_text('nav_4-4'); ?></a></li>
						</ul>
					</div>
				</div>


				
				<!-- ACCORDION -->
				<div class="panel-group visible-xs" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
				    	<div class="panel-heading" role="tab" id="headingOne">
				      		<h4 class="panel-title">
				        		<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				          			<?php echo $langue->show_text('nav_1'); ?> <i class="fa fa-angle-down"></i>
				        		</a>
				     		</h4>
				    	</div>
				    	<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				      		<div class="panel-body">
				        		<ul class="footer-links">
									<li class="link"><a id="accord_1-1" href="#"><?php echo $langue->show_text('nav_1-1'); ?></a></li>
									<li class="link"><a id="accord_1-2" href="#"><?php echo $langue->show_text('nav_1-2'); ?></a></li>
									<li class="link"><a id="accord_1-3" href="#"><?php echo $langue->show_text('nav_1-3'); ?></a></li>
									<li class="link"><a id="accord_1-4" href="#"><?php echo $langue->show_text('nav_1-4'); ?></a></li>
									<li class="link"><a id="accord_1-5" href="#"><?php echo $langue->show_text('nav_1-5'); ?></a></li>
								</ul>
				      		</div>
				   		</div>
					</div>
					<div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingTwo">
					      	<h4 class="panel-title">
					        	<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					          		<?php echo $langue->show_text('nav_2'); ?> <i class="fa fa-angle-down"></i>
					        	</a>
					      	</h4>
					    </div>
					    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
					      	<div class="panel-body">
					        	<ul class="footer-links">
									<li class="link"><a id="accord_2-1" href="#"><?php echo $langue->show_text('nav_2-1'); ?></a></li>
									<li class="link"><a id="accord_2-2" href="#"><?php echo $langue->show_text('nav_2-2'); ?></a></li>
									<li class="link"><a id="accord_2-3" href="#"><?php echo $langue->show_text('nav_2-3'); ?></a></li>
									<li class="link"><a id="accord_2-4" href="#"><?php echo $langue->show_text('nav_2-4'); ?></a></li>
									<li class="link"><a id="accord_2-5" href="#"><?php echo $langue->show_text('nav_2-5'); ?></a></li>
								</ul>
					      	</div>
					    </div>
					</div>
					<div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingThree">
					      	<h4 class="panel-title">
					        	<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					          		<?php echo $langue->show_text('nav_3'); ?> <i class="fa fa-angle-down"></i>
					        	</a>
					      	</h4>
					    </div>
					    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
					      	<div class="panel-body">
					        	<ul class="footer-links">
									<li class="link"><a id="accord_3-1" href="#"><?php echo $langue->show_text('nav_3-1'); ?></a></li>
									<li class="link"><a id="accord_3-2" href="#"><?php echo $langue->show_text('nav_3-2'); ?></a></li>
									<li class="link"><a id="accord_3-3" href="#"><?php echo $langue->show_text('nav_3-3'); ?></a></li>
									<li class="link"><a id="accord_3-4" href="#"><?php echo $langue->show_text('nav_3-4'); ?></a></li>
								</ul>
					      	</div>
					    </div>
					</div>
					<div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingFour">
					      	<h4 class="panel-title">
					        	<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
					          		<?php echo $langue->show_text('nav_4'); ?> <i class="fa fa-angle-down"></i>
					        	</a>
					      	</h4>
					    </div>
					    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
					      	<div class="panel-body">
					        	<ul class="footer-links">
									<li class="link"><a id="accord_4-1" href="#"><?php echo $langue->show_text('nav_4-1'); ?></a></li>
									<li class="link"><a id="accord_4-2" href="#"><?php echo $langue->show_text('nav_4-2'); ?></a></li>
									<li class="link"><a id="accord_4-3" href="#"><?php echo $langue->show_text('nav_4-3'); ?></a></li>
									<li class="link"><a id="accord_4-4" href="#"><?php echo $langue->show_text('nav_4-4'); ?></a></li>
								</ul>
					      	</div>
					    </div>
					</div>
				</div>

				<div class="col-sm-12 col-md-5">
					<div class="col-xs-12 col-sm-6 col-md-12">
						<ul id="footer-payments">
		        	        <li class="link">
		                		<img title="iDeal" alt="iDeal" src="https://www.gispen.com/media/link/image/i/d/ideal.png" alt="iDeal" />
		                	</li>
	        	            <li class="link">
				    			<img title="Maestro" alt="Maestro" src="https://www.gispen.com/media/link/image/p/a/payment-maestro.png" alt="Maestro" />
			                </li>
	        	            <li class="link">
	    		    			<img title="Visa" alt="Visa" src="https://www.gispen.com/media/link/image/p/a/payment-visa.png" alt="Visa" />
	    	                </li>
		        	    </ul>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-12">
						<ul id="footer-language">
							<li class="hidden-xs hidden-sm">
								<?php echo $langue->show_text('footer-language'); ?>
							</li>
                            <li>
                            	<a href="https://www.gispen.com/">
                            		<img src="../images/icon-nl.png" alt="Dutch"/>
                            	</a>
                            </li>
                            <li>
                            	<a href="?lang=en">
                            		<img src="../images/icon-en.png" alt="English"/>
                            	</a>
                            </li>
                            <li>
                            	<a href="?lang=cn">
                            		<img src="../images/icon-cn.png" alt="Chinese"/>
                            	</a>
                            </li>
            			</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>

<!-- build:js scripts/main.js -->
	<script src="../scripts/main.js"></script>
	<script src="links/links.json"></script>
<!-- endbuild -->

	<script>
		$(document).ready(function() {
			var obj = JSON.parse(link);
			var count = obj.links.length;

			for (i = 0; i < count; i++) {
				$("#" + obj.links[i].id).attr("href", obj.links[i].address);
			}
			

		});
	</script>
</body>
</html>




















