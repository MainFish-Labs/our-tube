<!DOCTYPE html>
<html lang="en" wp-site wp-site-is-master-page>
  <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			<?php get_template_part('parts/meta', 'title'); ?>
		</title>
		<meta name="description" content="<?php get_template_part('parts/meta', 'description'); ?>">

		<!-- For IE 9 and below. ICO should be 32x32 pixels in size -->
		<!--[if IE]><link rel="shortcut icon" href="favicon.ico"><![endif]-->

		<link rel="apple-touch-icon" sizes="180x180" href="/images/fav/apple-touch-icon.png">
		<link rel="icon" type="image/png" href="/images/fav/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="/images/fav/favicon-194x194.png" sizes="194x194">
		<link rel="icon" type="image/png" href="/images/fav/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="/images/fav/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="/images/fav/manifest.json">
		<link rel="mask-icon" href="/images/fav/safari-pinned-tab.svg" color="#5bbad5">
		<link rel="shortcut icon" href="favicon.ico">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-TileImage" content="/images/fav/mstile-144x144.png">
		<meta name="msapplication-config" content="/images/fav/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">

		<!-- Bootstrap -->
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
		<!-- <link rel="stylesheet" href="css/style-library-1.css"> -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.min.css" media="screen" title="no title" type="text/css">
	</head>
	<body>
		<!-- HEADER AREA -->
		<header>
			<div class="container-fluid output-overlay">
				<div class="row size-check">
					<div class="col-xxs-24 visible-xxs">
						<div>XXS</div>
					</div>
					<div class="col-xs-24 visible-xs">
						<div>XS</div>
					</div>
					<div class="col-sm-24 visible-sm">
						<div>SM</div>
					</div>
					<div class="col-md-24 visible-md">
						<div>MD</div>
					</div>
					<div class="col-lg-24 visible-lg">
						<div>LG</div>
					</div>
					<div class="col-xlg-24 visible-xlg">
						<div>XLG</div>
					</div>
				</div>
			</div>
				<div class="container-fluid header-meta">
				<!-- <div class="container header-meta"> -->
					<div class="row header-sticky">
						<div class="nav-wrap">
							<nav class="navbar navbar-inverse top-bar" data-spy="affix"  data-offset="55">
								<div class="col-xxs-12 col-xs-12 col-sm-6 col-md-8 col-lg-8 col-xlg-8 pad-gen">
									<div class="social">
										<a href="#">
											<i class="fa fa-facebook-official" aria-hidden="true"></i>
										</a>
										<a href="#">
											<i class="fa fa-google-plus-square" aria-hidden="true"></i>
										</a>
										<a href="#">
											<i class="fa fa-twitter-square" aria-hidden="true"></i>
										</a>
										<a href="#">
											<i class="fa fa-reddit-square" aria-hidden="true"></i>
										</a>
									</div>
								</div>
								<div class="col-xxs-12 col-xs-12 col-sm-8 col-md-8 col-lg-8 col-xlg-8 sticky-title">
									<div class="sticky text-center">
										<a href="<?php echo home_url(); ?>" class="title">
											<h3 class="bloginfo">

												<?php get_template_part('parts/logo', 'header'); ?>

											</h3>
											<!-- <h2 class="visible-xs visible-xxs">OUR Tube</h2> -->
										</a>
									</div>
									<div class="top text-center">
										<a href="<?php echo home_url(); ?>" class="title">
											<h2 class="bloginfo">

												<?php get_template_part('parts/logo', 'header'); ?>

											</h2>
											<!-- <h2 class="visible-xs visible-xxs">OUR Tube</h2> -->
										</a>
									</div>
								</div>
								<div class="col-xxs-12 col-xs-12 col-sm-10 col-md-8 col-lg-8 col-xlg-8 hidden-xs hidden-xxs">
									<div class="collapse navbar-collapse pull-right">
										<ul class="nav navbar-nav">
											<li>
												<!-- <a href="index.html">Home</a> -->
												<a href="single.html">Post</a>
											</li>
											<li>
												<a href="#">Menu2</a>
											</li>
											<li>
												<a href="#">Menu3</a>
											</li>
											<li>
												<a href="#">Menu4</a>
											</li>
										</ul>
									</div>
								</div>
							</nav>
						</div>
					</div>
				</div>
				<div class="container header-main hidden-xs hidden-xxs">
						<div class="row page-header">
								<div class="col-xxs-24 col-xs-24 col-sm-12 col-md-12 col-lg-12 col-xlg-12">
										<div class="title-header">
											<a href="<?php echo home_url(); ?>" class="title">
												<?php bloginfo('name'); ?><small class="hidden-sm hidden-xs hidden-xxs">&nbsp;<?php bloginfo('description'); ?></small>
											</a>
										</div>
										<!-- <ol class="breadcrumb">
											<li><a href="#">Home</a></li>
											<li><a href="#">Library</a></li>
											<li class="active">Data</li>
										</ol> -->
								</div>
								<div class="col-xxs-24 col-xs-24 col-sm-12 col-md-12 col-lg-12 col-xlg-12">
										<div class="input-group has-primary">
												<input type="text" class="form-control" placeholder="What are you looking for?">
												<span class="input-group-btn">
													<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
													<button class="btn btn-primary" type="button">Search</button>
												</span>
										</div>
								</div>
						</div>
				</div>
		</header>

		<!-- <div class="wrapper"> -->

			<!-- <div class="container">
				<div class="row unit-block unit-block-top">
					<div class="col-xs-24 col-sm-24 col-md-20 col-md-offset-2 col-lg-20 col-lg-offset-2 unit">

					</div>
				</div>
			</div> -->
			<!-- <div class="container-fluid"> -->

		<div class="wrapper">
			<div class="container main">
