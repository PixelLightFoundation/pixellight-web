<!-- Include the header template -->
<?php
$page_title = "News";
$current_page = "news";
include('header.php');
?>

	<div id="content" class="wrapper-row wrapper-expand">
	<section class="container">
		<div class="col grid12 textcenter">
			<h2 class="bottom-shadow">Latest News</h2>
		</div>
		<div class="col grid9">
			<div class="post">
				<div class="content">
					<a href="post_sunray-on-the-horizon.php">
						<img src="img/Dungeon_9.jpg" alt="" />
					</a>
					<h3><a href="post_sunray-on-the-horizon.php">Sunray on the horizon</a></h3>
					<p>There was no active development going on with the PixelLight project for some time.
          Now we are happy to announce that we've made a reboot and are ready to share some of the progress with the community,
          including a glimpse onto the fresh vision for the engine!<br/><a href="post_sunray-on-the-horizon.php">(read more)</a></p>
				</div>
				<div class="meta">
					<div class="property date">
						<strong>Published on:</strong>
						<span class="day">23</span>
						<span class="month">June</span>
					</div>
					<div class="property">
						<strong>Posted by:</strong>
						<a href="#">Ananta</a>
					</div>
					<div class="property">
						<strong>Category:</strong>
						<a href="#">Development News</a>
					</div>
				</div>
				<div class="clear"></div>
			</div>
<!--
			<div class="pagination">
				<a href="#" class="page-numbers current">1</a>
				<a href="#" class="page-numbers">2</a>
				<a href="#" class="page-numbers">3</a>
			</div>
-->
		</div>
		<div id="sidebar" class="col grid3">
			<div class="widget">
				<form role="search" method="get" class="searchform" action="search.html">
					<input type="text" name="s" placeholder="Enter search term..." />
					<input type="submit" value="&#xe014;" />
					<div class="clear"></div>
				</form>
			</div>
			<div class="widget widget_categories">
				<h3>Categories</h3>
				<ul class="small">
					<li class="cat-item"><a href="#">Development News</a> <span class="count">/ 1</span></li>
					<li class="cat-item"><a href="#">Projects</a> <span class="count">/ 0</span></li>
					<li class="cat-item"><a href="#">User Stories</a> <span class="count">/ 0</span></li>
					<li class="cat-item"><a href="#">Miscelaneous</a> <span class="count">/ 0</span></li>
				</ul>
			</div>
		</div>
	</section>
	</div>
	
<!-- Include the footer template -->
<?php
include('footer.php');
?>