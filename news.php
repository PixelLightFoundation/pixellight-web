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
					<a href="post_pixellight-restart-announced.php">
						<img src="img/Dungeon_9.jpg" alt="" />
					</a>
					<h3><a href="post_pixellight-restart-announced.php">PixelLight restart announced</a></h3>
					<p>As you may have noticed, the PixelLight project has lied pretty much abandoned for some time now. There was no active development due to various obstacles. We are thus more than happy to announce that the development has now been started anew. Read the full post to learn more about where the project is now heading and how can <strong>you</strong> help it to grow. <a href="post_pixellight-restart-announced.php">(read more)</a></p>
				</div>
				<div class="meta">
					<div class="property date">
						<strong>Published on:</strong>
						<span class="day">3</span>
						<span class="month">February</span>
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