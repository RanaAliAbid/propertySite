<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Flatize - Shop HTML5 Responsive Template">
	<meta name="author" content="pixelgeeklab.com">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RealEstast</title>

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

	<?php wp_head();?>
	
</head>
<body>
	<div id="page">
		<header>
			<div id="top">
				<div class="container">
					<p class="pull-left text-note hidden-xs"><i class="fa fa-phone"></i> Need Support? 1-800-666-8888</p>
					<ul class="nav nav-pills nav-top navbar-right">
						<li class="login"><a href="javascript:void(0);"><i class="fa fa-user"></i></a></li>
						<li><a href="#" title="" data-placement="bottom" data-toggle="tooltip" data-original-title="Email"><i class="fa fa-envelope-o"></i></a></li>
						<li><a href="#" title="" data-placement="bottom" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" title="" data-placement="bottom" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" title="" data-placement="bottom" data-toggle="tooltip" data-original-title="Google+"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>



			



			<nav class="navbar navbar-default pgl-navbar-main" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
						<a class="logo" href="">
							<img src="<?php bloginfo('template_directory');?>/images/logo.jpeg" alt="Flatize"></a> </div>
					
					<div class="navbar-collapse collapse width">



<?php
			wp_nav_menu(
				array(
					'theme_location' => 'top-menu',

					// 'menu_id' => 'main-menu'

					'container' => 'ul',
					'menu_class' => 'nav navbar-nav pull-right',
				)
			);?>




						<!-- <ul class="nav navbar-nav pull-right">
							<li class="active"><a href="">Home</a>
								
							</li>
							<li><a href="">About</a></li>


							<li><a href="">Services</a></li>

							<li><a href="">Properties</a></li>

							<li><a href="">Contact Us</a></li>
						</ul> -->
					</div><!--/.nav-collapse --> 
				</div><!--/.container-fluid --> 
			</nav>






		</header>
