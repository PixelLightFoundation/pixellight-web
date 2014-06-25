<!-- Include the header template -->
<?php
$page_title = "Sunray on the horizon";
$current_page = "news";
include('header.php');
?>

	<div id="content" class="wrapper-row wrapper-expand">
	<section class="container">
		<div class="col grid12">
			<div class="post single">
				<div class="textcenter">
					<h2 class="bottom-shadow">Sunray on the horizon</h2>
				</div>
				<div class="content">
					<div class="responsive-container margin-bottom"><div class="responsive-wrapper"><img src="img/Dungeon_9.jpg" alt="" /></div></div>
					<h3>Greetings everyone.</h3>
          <p>
            First of all, welcome to the new website of the PixelLight project. PixelLight is an application framework and a 3D rendering engine
            with some really amazing capabilities and a flexible infrastructure. Sadly, the project has not been in active development since the
            beginning of 2013. But now, more than a year later, I am happy to announce that I have restarted the project and started working on
            making it more appealing to the public. In this introductory article I would like to speak a little about the motivation I have for
            working on this project and how I'd like to develop it in the future. It might be a little longer to read but I hope it will explain
            many of the decisions I made and will be making in the course of the development.
          </p>

          <h4>About me</h4>
          <p>
            My name is Ananta Das and in some corners of the internet you can also find me under the nick 'phobossion'. In my day job, I am a programmer
            in a major game development studio working on core technology for next generation titles. On the side, I am also working on several projects
            of my own, with one long-term goal to hit. As I was searching for the technology to use for my "big thing", I went over all the major and minor
            packages on the market, until I stumbled upon PixelLight. After some research, I decided to join the team and help to develop the software,
            just because it seemed to have what I needed, all packaged in a very clean and nice wrap. To my surprise, the project appeared to be pretty
            much dead, even when it was pretty much the best open source 3D engine on the internet (until UE4 came out, at least). So after giving it
            some thought, I decided to reroll the project and here we go :)
          </p>
          
          <h4>The past</h4>
          <p>
            One thing that deluded me was, how is it even possible for such a great piece of technology to just lie there abandoned with no community
            to take care of it, while other projects are still very active despite their inferior quality. PixelLight was originally started by the development
            trio of Stefan Buschmann, Christian Ofenberg and Jens Dörholt who made it into a very powerful software package for their personal and
            academic projects. The capabilities of the engine are clealy visible from the technology demos they've put together and from just looking into
            the code. However, when I tried to delve into the engine, I soon stumbled upon many concepts I did not understand and that were explained
            nowhere in the documentation or online resources. It was clear that the engine needs some work on the accessibility side. So after I joined
            the project, my first thoughts went in the direction of tutorials, samples and general how-to's. But I had to update the pipeline for building
            PixelLight's external dependencies (which is awesome by the way) first to make the engine compatible with recent compilers. This was back in
            February of this year and I had to leave my work unfinished because I was moving to the U.S. with my studio.<br />
            While I had no time to work on the project actively for several months, I was still thinking about it and how to make the best out of it.
            So when I've got back to it some weeks ago, I already had a much clearer vision.
          </p>

          <h4>The present</h4>
          <p>
            The first thing I started working on when I got back to my Visual Studio was a brand new build pipeline. The old CMake scripts PixelLight had
            are great and get the job done, but are very complex, hard to navigate through and don't really simplify the project definition all that much.
            Also, CMake itself has evolved significantly in some areas since they were written years ago. Inspired by the Unreal's build pipeline, I started
            to work on a new build system designed from scratch to make sure it is as efficient and lightweight as possible while still allowing us to define
            the complex project structures we need for PixelLight. The new system consists of a (fairly small) library of powerful macros that automate
            the task of project definition using a simple set of rules and conventions. You can compare the old build definition of the PLMath library
            (<a href="https://github.com/PixelLightFoundation/pixellight/blob/master/Base/PLMath/CMakeLists.txt">here</a>) with the new one
            (<a href="https://github.com/PixelLightFoundation/pixellight/blob/develop/Engine/PLMath/CMakeLists.txt">here</a>). You can clearly see there is a
            significant reduction in the length and complexity of the file while stil maintaining the flexibility. I will make a wiki post about the
            build pipeline soon that will describe the core concepts in more detail.<br />
            While I was at it, I also made the build scripts compatible with Visual Studio and its configurations and revisited the folder structure for
            better orientation in the project. I did some tweaking of the overall process that simplifies the life of a programmer who wants to develop
            his projects using PixelLigth or to develop PixelLight itself. The next step was to reconnect the build system to the external dependency
            build pipeline - this resulted in me having a fully functional build of PixelLight and its core set of plugins. The last thing I did was to
            quickly replace the existing multi-functional PLProject tool with a new (much simpler) single-purpose tool called PLPlugin that does the same
            job in a much more elegant way.
          </p>

          <h4>What's next?</h4>
          <p>
            If you didn't really understand the last section or don't really care about the technical mumbo jumbo, the following paragraphs will hopefully
            make it up for you. With a functional proof-of-concept of the new project structure, I can now present my short- and long-term vision for
            PixelLight. There are many great engines in the open-source software universe. Even when not taking Unreal Engine 4 into account, there are
            projects that deserve one's attention and have much larger communities and more active developers than PixelLight. However, most of them
            provide just a kind of "SDK" or in other words, they just give you software libraries to link to to help you to manage the basic low-level
            tasks of graphics application development. There are no full "GDKs" or game development kits worth noticing, with few exceptions like
            <a href="http://www.neoaxis.com/">NeoAxis</a> or <a href="http://www.chi-ad.com/Skyline/SDN/">Skyline</a> (both based on Ogre), but none
            of these is free and open-source. And that is what I would like PixelLight to become - the first fully featured software toolkit for
            developing rich multimedia content. This will definitely mean a big shift in the focus of the development, but hopefully this is a decision
            that will help the project to grow and thrive.
          </p>

          <h4>The baby steps</h4>
          <p>
            How do you even start? Simple yet difficult question. I went through some ideas and decided to first create a intermediate version of
            PixelLight, almost fully compatible with the old 1.0 revision (the only breaking difference being some plugins not being available anymore)
            and start from that ground. I codenamed that version "Sunray" and gave it the version number of 1.5, making it a middle step between the
            current stable version and the future "2.0". Once I put the <a href="roadmap.php">roadmap</a> online, you'll be able to see the steps that'll
            lead to it, but in a nutshell, it will be about making sure that everything that was in the previous version and is worth keeping alive is
            migrated to the new build pipeline and is stable. This includes documentation, tests, samples, few additional plugins and some other
            components. I'll also make the SDK to build on Linux and hopefully even Mac, if I'll get to it (but it's no priority right now to me to be honest).
          </p>

          <h4>And beyond</h4>
          <p>
            The work on "PixelLight 2.0" will begin hopefully this summer and will start with some desperately needed updates that will make all
            developers' lives easier in the future. Stuff like RTTI, rendering system, entity system and so on. I (and hopefully 'we' at that point)
            will then start creating the integrated editor suite that will make a base of the future GDK. Many exciting things are to come,for sure!
          </p>
          <p>
            If you have endured the article up to this point I admire your patience :) I really hope you like the new direction and that you will stay
            around to support the project as it continues. Feel free to <a href="download.php">download</a> the current revision of the source code
            and give PixelLight a try. Look into the <i>develop</i> branch for latest state of the engine. If you want to become involved in the project
            in any way, I would very much appreciate your help! Just head over to <a href="contribute.php">Contribute</a> and see how you can get involved.
          </p>
          <p>
            Thanks again for your attention! Sincerely,<br /><br />
            <i>Ananta</i>
          </p>

          <p>&mdash; <a href="#">project</a>, <a href="#">design</a>, <a href="#">roadmap</a>, <a href="#">vision</a></p>
<!--
					<p><a href="#comments" class="show-comments button dark no-bottom">Comments (3)</a> <a class="addthis_button button no-bottom" href="http://www.addthis.com/bookmark.php?v=300" target="_blank">Share</a> <script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js"></script></p>
					<div id="comments" style="display:none;">
						<ol class="commentlist">
							<li class="comment depth-1">
								<div id="comment-1" class="clearfix">
									<div class="comment-author">
										<a href="#"><img src="http://0.s3.envato.com/files/62555443/avatar.png" width="80" alt="" /></a>
									</div>
									<div class="comment-body">
										<h6><a href="#" class="name">Liviu Cerchez</a> <a href="#" class="comment-reply-link">(reply)</a></h6>
										<p class="comment-date">25 June 2012</p>
										<p>Aliquam erat volutpat. Sed consectetur suscipit nunc et rutrum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer commodo tristique odio, quis fringilla ligula aliquet ut. Maecenas sed justo varius velit imperdiet bibendum. Vivamus nec sapien a imperdiet diam.</p>
									</div>
								</div>
								<ul class="children">
									<li class="comment bypostauthor depth-2">
										<div id="comment-1-1" class="clearfix">
											<div class="comment-author">
												<a href="#"><img src="http://0.s3.envato.com/files/62555443/avatar.png" width="80" alt="" /></a>
											</div>
											<div class="comment-body">
												<h6><a href="#" class="name">Liviu Cerchez</a> <a href="#" class="comment-reply-link">(reply)</a></h6>
												<p class="comment-date">27 June 2012</p>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer commodo tristique odio, quis fringilla ligula aliquet ut. Maecenas sed justo varius velit imperdiet bibendum. Vivamus nec sapien massa, a imperdiet diam.</p>
											</div>
										</div>
									</li>
								</ul>
							</li>
							<li class="comment depth-1">
								<div id="comment-2" class="clearfix">
									<div class="comment-author">
										<a href="#"><img src="http://0.s3.envato.com/files/62555443/avatar.png" width="80" alt="" /></a>
									</div>
									<div class="comment-body">
										<h6><a href="#" class="name">Liviu Cerchez</a> <a href="#" class="comment-reply-link">(reply)</a></h6>
										<p class="comment-date">13 June 2012</p>
										<p>Aliquam erat volutpat. Sed consectetur suscipit nunc et rutrum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer commodo tristique odio, quis fringilla ligula aliquet ut.</p>
									</div>
								</div>
							</li>
						</ol>
						<h3>Leave a new comment</h3>
						<form action="post.html">
							<label for="name">Name:</label>
							<input type="text" name="name" id="name" required="" class="full-width" />
							<label for="email">Email:</label>
							<input type="email" name="email" id="email" required="" class="full-width" />
							<label for="website">Website:</label>
							<input type="text" name="website" id="website" class="full-width" />
							<label for="message">Message:</label>
							<textarea name="message" id="message" cols="30" rows="7" required="" class="full-width"></textarea>
							<input type="submit" value="Submit Comment" class="button dark">
						</form>
					</div>
-->
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
          <!--
					<div class="property">
						<strong>Discussion:</strong>
						<a href="#comments" class="show-comments">3 comments</a>
					</div>
          -->
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</section>
	</div>
	
<!-- Include the footer template -->
<?php
include('footer.php');
?>