<!-- Include the header template -->
<?php
$page_title = "Contribute";
$current_page = "contribute";
include('header.php');
?>

	<div id="content" class="wrapper-row wrapper-expand">
	<section class="container">
		<div class="col grid12 textcenter">
			<h2 class="bottom-shadow">Contribute</h2>
			<p>PixelLight is looking for contributing developers in order to continue and expand the project. If you are interested in joining our <a href="team.php">team</a> or just make a one time contribution, please read on to find out more about how you can add value to the project.</p><br /><br />
		</div>
		<div class="col grid12">
			<h3>Contribution options</h3>
			<p>You can contribute to the project in many ways. Below you'll find few examples, but you are more than welcome to be creative about this. If you think you can help us in any way, make sure to let us know! You can reach the project maintainer at <em>'ananta (at) pixellight.org'</em> at any time.</p>			
			<ul>
				<li><strong>Become a team member.</strong> If you like PixelLight and have some experience using it, you can join the core development team to participate on the maintenance and development of the engine. You would then work in whatever area is close to you to make the technology move forward according to our internal roadmap.<br /><br /></li>
				
				<li><strong>Maintain a plugin.</strong> One of PixelLight's best features is its decentralized plugin-based architecture. We have a number of plugins being maintained by the core team itself, but there is a number of them currently without support. You can view the <a href="#">wiki page</a> to see the full list, or just create your own plugin for whatever you need and let us include it inside the official release.<br /><br /></li>
				
				<li><strong>Fork our code on github.</strong> Since the code is available freely on <a href="https://github.com/PixelLightFoundation">github</a>, you can always fork it and make any changes you want. Found a bug you know how to fix? Discovered a way to optimize certain processes? Just fork the repo and create a pull request for us to review and merge back into the master branch. Your contributions, however small, are always welcome!</li>
			</ul>
			<p>If you are not much into C++ programming, but would still like to help the project, we are also looking to fill the following positions in our team:</p>
			<ul>
				<li>Website administrator - take care of our web server, forums and wiki software</li>
				<li>Build system maintainer - administer and improve our CMake based build pipeline</li>
				<li>Documentation maintainer - make sure our wiki and PDF documents are always up to date</li>
				<li>Forum moderator - watch and maintain the forums</li>
			</ul>
			
			<h3></h3>
		</div>
	</section>
	</div>
	
<!-- Include the footer template -->
<?php
include('footer.php');
?>