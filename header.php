<!doctype html>
<html class="no-js">
<head>
	<meta charset="utf-8" />
	<title><?php echo($page_title); ?>|PixelLight</title>
	<meta name="description" content="PixelLight free open source 3D application framework and rendering engine." />
	<meta name="keywords" content="PixelLight, 3D, Engine, Open Source, Free, Game Engine" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="favicon.png" />
	<link rel="stylesheet" href="style.css" />
	<!--[if lte IE 8 ]><script type="text/javascript" src="js/ie.js"></script><![endif]-->
</head>
<body>
<div class="wrapper-frame">
	<header id="header" class="wrapper-row">
		<div class="container">
			<div class="wrapper">
				<div id="logo">
					<h1><a href="index.php"><img src="img/logo.png" alt="Mini"></a></h1>
					<span id="menu-switch" class="icon-arrow-down"></span>
				</div>
				<nav id="menu">
					<ul>
						<li <?php if ($current_page == "home") echo('class="current_page_item"'); ?> ><a href="index.php">Home</a></li>
						<li <?php if ($current_page == "news") echo('class="current_page_item"'); ?> ><a href="news.php">News</a></li>
						<li class="has-children<?php if ($current_page == "features" || $current_page == "showcase") echo(' current_page_item'); ?>"><a href="features.php">Technology</a>
							<ul>
									<li <?php if ($current_page == "features") echo('class="current_page_item"'); ?> ><a href="features.php">Features</a></li>
									<li <?php if ($current_page == "showcase") echo('class="current_page_item"'); ?> ><a href="showcase.php">Showcase</a></li>
							</ul>
						</li>
						<li class="has-children"><a href="team.php">Developers</a>
							<ul>
								<li><a href="team.php">The Team</a></li>
								<li><a href="#">Contribute</a></li>
								<li><a href="#">Wiki</a></li>
								<li><a href="#">Forums</a></li>
								<li><a href="#">Mailing List</a></li>
							</ul>
						</li>
						<li class="shop-menu-item">
							<a href="shopping-bag.html"><em class="icon-github"></em> <span class="mobile">Get it now!</span><strong>Get it now!</strong></a>
						</li>
					</ul>
				</nav>
				<div class="clear"></div>
			</div>
		</div>
	</header>