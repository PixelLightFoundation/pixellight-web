<!-- Include the header template -->
<?php
$page_title = "End of July development update";
$current_page = "news";
include('header.php');
?>

	<div id="content" class="wrapper-row wrapper-expand">
	<section class="container">
		<div class="col grid12">
			<div class="post single">
				<div class="textcenter">
					<h2 class="bottom-shadow">End of July update</h2>
				</div>
				<div class="content">
					<div class="responsive-container margin-bottom"><div class="responsive-wrapper"><img src="img/DevUpdate.jpg" alt="" /></div></div>
					<h3>Hello again.</h3>
          <p>
            I would like to start the custom of sharing the latest development news with the community every one or two months. These blog posts should
            be hopefully more informative than just reading through commit comments :) Feel free to comment on this (or post your questions)
            on the official forum!
          </p>

          <h4>New team member</h4>
          <p>
            First I'd like to welcome Geoffrey Bonneville aka G-Ray to the team! Geoffrey joined me in the effort to produce an open-source game development
            kit and he's now working on porting my new build system to Linux which is his platform of choice. It's a great relief for me as a punny Windows-er
            to have someone on board who actually uses the platform on a daily basis.
          </p>
          
          <h4>Build system</h4>
          <p>
            As mentioned above, we're currenly trying to make the engine build (and run) on Linux. We are progressing pretty well, basically just porting
            pieces of the old build system into the new framework. As part of the update, we are also planning to switch to CMake 3.0, because it contains
            some features that I had to hack before in the 2.8 release. Mac support is also planned but has low priority as of now. But if someone would
            like to jump in and make it working, he'd be more than welcome!
          </p>

          <h4>Reflection &amp; type library</h4>
          <p>
            Reflection is one of the top-priority stuff that needs to be done in the core before we can progress any further so I just started on it as soon
            as I had the engine building. The new design keeps all the flexibility of the old system along with most of its patterns, but should be more
            flexible and efficient. Also, it will make basis of many new sub-systems, such as automated serialization of object (effectively removing the 
            need for various data loaders currently preset in the engine). I plan to make a separate feature on this crucial addition to PixelLight once there
            is something to show.<br />
            With the new reflection system in development, I also concentrated on upgrading the existing types for working with types, functions, events and the
            like. I decided to introduce some (already well supported) C++11 features into the mix, such as variadic templates. Needless to say this made the
            library much cleaner and more efficient. There is still lots of work to be done but my first tests are showing a great promise in the new technology.
          </p>

          <h4>Roadmap</h4>
          <p>
            One of the smaller but very important things I did on the side what to update the <a href="https://trello.com/b/asjV3I1o/core-development" target="_blank">
            PixelLight Trello page</a> with the new vision in mind. It should now reflect the state of the project much closer. I've also started to design the 
            core concepts behind the upcoming game editing suite based on PixelLight, but there is nothing exciting to share so far, hopefully you'll see something
            appearing on the wiki soon enough...
          </p>

          <h4>Near future plans</h4>
          <p>
            In the short term, we will concentrate mostly on finishing the tasks we started this month. This means mostly making the engine to build on Linux and
            pushing the new reflection system to the state where it can at least replace the old one. Then we will continue to develop the very core of the engine
            and start to look into basic parallelization and optimizations, before jumping onto the visual stuff. So keep tuned for more news in a month!
          </p>
          
          <p>
            Sincerely,<br /><br />
            <i>Ananta</i>
          </p>

          <p>&mdash; <a href="#">project</a>, <a href="#">update</a>, <a href="#">roadmap</a>
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
						<span class="day">1</span>
						<span class="month">August</span>
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