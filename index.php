<!-- Include the header template -->
<?php
$page_title = "Home";
$current_page = "home";
include('header.php');
?>

	<div class="wrapper-row">
		<section id="heading">
			<div class="iosSlider-container">
				<div class="iosSlider">
					<div class="slider">
						<div class="item">
							<img src="img/title_1.jpg" alt="" />
							<a href="#" class="caption"><span class="text">Cutting edge graphics.</span></a>
						</div>
						<div class="item">
							<img src="img/title_2.jpg" alt="" />
							<a href="#" class="caption"><span class="text">Powerful architecture.</span></a>
						</div>
						<div class="item">
							<img src="img/title_3.jpg" alt="" />
							<a href="#" class="caption"><span class="text">Physics, scripting and more.</span></a>
						</div>
						<div class="item">
							<img src="img/title_4.jpg" alt="" />
							<a href="#" class="caption"><span class="text">Free and open source.</span></a>
						</div>
					</div>
					<!--
					<div class="controls">
						<span class="prev"><em></em></span>
						<span class="next"><em></em></span>
					</div>
					-->
				</div>
			</div>
			<div class="bar"></div>
		</section>
	</div>
	<div id="content" class="wrapper-row wrapper-expand">
	<section class="container">
		<div class="col grid12 textcenter">
			<h2 class="bottom-shadow">PixelLight</h2>
			<p>PixelLight is a free and open-source cross-platform application framework and 3D rendering engine. Its powerful plugin-based architecture makes it a perfect choice not only for games, but for any kind of visual product presentation or simulation as well.</p>
		</div>
		<div class="col grid4 feature">
			<img src="img/oss_logo.png" alt="" width="111" height="111">
			<h3>Free and open-source</h3>
			<p class="small">PixelLight is licensed under the permissive <a href="#">MIT license</a>, allowing its use in all applications, commercial or not.</p>
		</div>
		<div class="col grid4 feature">
			<img src="img/xpf_logo.png" alt="" width="111" height="111">
			<h3>Cross-platform</h3>
			<p class="small">The engine runs on Windows, Linux and Mac OSX, both 32 and 64 bit architectures. Take your pick.</p>
		</div>
		<div class="col grid4 feature">
			<img src="img/simple.png" alt="" width="111" height="111">
			<h3>Clean &amp; simple</h3>
			<p class="small">Discover the simple, yet powerful and infinitelly extensible architecture based on plugins.</p>
		</div>
		<div class="clear"></div>
		<div class="col grid4 feature">
			<img src="img/gears.png" alt="" width="111" height="111">
			<h3>Cutting edge</h3>
			<p class="small">Use all of the current rendering techniques like deferred shading and HDR right out of the box.</p>
		</div>
		<div class="col grid4 feature">
			<img src="img/features.png" alt="" width="111" height="111">
			<h3>Feature rich</h3>
			<p class="small">Plugins for physics engine, sound, scripting, database access and much more are included.</p>
		</div>
		<div class="col grid4 feature">
			<img src="img/contribute.png" alt="" width="111" height="111">
			<h3>Contribute</h3>
			<p class="small">Our team is open to new developers who want to make a contribution to this awesome project. <a href="#">Join now...</a></p>
		</div>
		<div class="clear"></div>
	</section>
	<section class="invert-colors">
		<div class="container">
			<div class="col grid12 textcenter">
				<h2 class="bottom-shadow">Featured Projects</h2>
				<p>Projects using PixelLight platform.</p>
				<div class="col grid4 alpha">
					<div class="thumb directional">
						<div class="photo">
							<a href="#">
								<img src="img/Dungeon_9.jpg" alt="">
								<span class="info"><span class="icon-link"></span></span>
								<span class="bar"></span>
							</a>
						</div>
						<h4>Dungeon Demo</h4>
						<span class="type">PixelLight Team</span>
					</div>
				</div>
				<div class="col grid4">
					<div class="thumb directional">
						<div class="photo">
							<a href="#">
								<img src="img/SubwayStation_2.jpg" alt="">
								<span class="info"><span class="icon-link"></span></span>
								<span class="bar"></span>
							</a>
						</div>
						<h4>Subway Demo</h4>
						<span class="type">PixelLight Team</span>
					</div>
				</div>
				<div class="col grid4 omega">
					<div class="thumb directional">
						<div class="photo">
							<a href="#">
								<img src="img/SubmarineBridge_0.jpg" alt="">
								<span class="info"><span class="icon-link"></span></span>
								<span class="bar"></span>
							</a>
						</div>
						<h4>Submarine Bridge</h4>
						<span class="type">benntec Systemtechnik</span>
					</div>
				</div>
				<div class="clear"></div>
				<a href="showcase.php" class="button light">See more</a>
			</div>
		</div>
	</section>
<!--
	<section style="background: url(tmp/clients-bg.png) repeat top center fixed">
		<div class="container">
			<div class="col grid12 textcenter">
				<h2 style="margin:1em;"><span class="highlight">Proudly serving over 1600 satisfied users!</span></h2>
			</div>
		</div>
	</section>
-->
	</div>
<!--
	<div id="social-share" class="animated">
		<a href="#" class="social-link icon-github"></a>
		<a href="#" class="social-link icon-twitter"></a>
		<a href="#" class="social-link icon-flickr"></a>
	</div>
-->
	
<!-- Include the footer template -->
<?php 
$script_file = "index_scripts.php";
include('footer.php');
?>