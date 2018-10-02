@include('header')

	<!-- BEGIN MAIN WRAPPER -->
	<div id="main-wrapper">

		<!-- BEGIN MAIN -->
		<div id="main">

			<!-- BEGIN POST -->
			<div id="post">
				@foreach($newsinfo as $key)
				<p class="post-meta">来源:{{$key->source}}&nbsp&nbsp&nbsp&nbsp作者:{{$key->author}}&nbsp&nbsp&nbsp&nbsp点击量:{{$key->clicks}}&nbsp&nbsp&nbsp&nbsp{{$key->time}}</a></p>
				<h1 class="post-header">{{$key->title}}</h1>
				<div class="post-thumb">
					<img src="/images/post-img.jpg" alt="" />
				</div>
				<div class="post-entry">
					{!! $key->content !!}
				</div>
				@endforeach
				<!-- <div class="post-share">
					<p>SHARE THIS POST</p>
					<ul>
						<li><a href="#"><img src="/images/rss-big.png" alt="" /></a></li>
						<li><a href="#"><img src="/images/facebook-big.png" alt="" /></a></li>
						<li><a href="#"><img src="/images/twitter-big.png" alt="" /></a></li>
						<li><a href="#"><img src="/images/myspace.png" alt="" /></a></li>
						<li><a href="#"><img src="/images/google.png" alt="" /></a></li>
						<li><a href="#"><img src="/images/reddit.png" alt="" /></a></li>
						<li><a href="#"><img src="/images/stumbleupon.png" alt="" /></a></li>
						<li><a href="#"><img src="/images/delicious.png" alt="" /></a></li>
						<li><a href="#"><img src="/images/newsvine.png" alt="" /></a></li>
						<li><a href="#"><img src="/images/digg.png" alt="" /></a></li>
						<li><a href="#"><img src="/images/technorati.png" alt="" /></a></li>
					</ul>
				</div> -->

				<!-- BEGIN COMMENTS -->
				<div id="comments">
					<h3><strong>4 Comments</strong> on "Dead Space 2 breaks all sales records"</h3>
					<ol>
						<li>
							<div class="comment">
								<div class="avatar">
									<img src="/images/avatar.jpg" alt="" />
								</div>
								<div class="comment-details">
									<span class="author">John Doe</span>
									<span class="date">- March 9, 2011 at 3:43pm</span>
									<span class="reply"><a href="#">Reply</a></span>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
								</div>
							</div>
							<ul>
								<li>
									<div class="comment">
										<div class="avatar">
											<img src="/images/avatar.jpg" alt="" />
										</div>
										<div class="comment-details">
											<span class="author"><a href="#">John Doe</a></span>
											<span class="date">- March 9, 2011 at 3:43pm</span>
											<span class="reply"><a href="#">Reply</a></span>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
										</div>
									</div>
									<ul>
										<li>
											<div class="comment">
												<div class="avatar">
													<img src="/images/avatar.jpg" alt="" />
												</div>
												<div class="comment-details">
													<span class="author">John Doe</span>
													<span class="date">- March 9, 2011 at 3:43pm</span>
													<span class="reply"><a href="#">Reply</a></span>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
												</div>
											</div>
										</li>
										<li>
									</li>
								</ul>
							</li>
						</ul>
						</li>

						<li>
							<div class="comment">
								<div class="avatar">
									<img src="/images/avatar.jpg" alt="" />
								</div>
								<div class="comment-details">
									<span class="author">John Doe</span>
									<span class="date">- March 9, 2011 at 3:43pm</span>
									<span class="reply"><a href="#">Reply</a></span>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
								</div>
							</div>
						</li>
					</ol>

					<h3><strong>Leave a Comment</strong></h3>

					<form action="#" id="comment-form" />

						<p>
							<input type="text" name="author" value="" />
							<label>Name <span class="required">(required)</span></label>
						</p>

						<p>
							<input type="text" name="email" value="" />
							<label>E-mail <span class="required">(required)</span></label>
						</p>

						<p>
							<input type="text" name="website" value="" />
							<label>Website</label>
						</p>

						<p>
							<textarea name="comment" cols="88" rows="10"></textarea>
						</p>

						<p>
							<input type="submit" value="Post Comment" />
						</p>

					</form>

				</div>
				<!-- END COMMENTS -->

			</div>
			<!-- END POST -->

		</div>
		<!-- END MAIN -->

		<!-- BEGIN SIDEBAR -->
		<div id="sidebar">

			<!-- BEGIN WIDGET -->
			<div class="widget">

				<h4 class="widget-title">热门要闻</h4>

				<div class="side-item">

					<img src="/images/newsthumbside.jpg" alt="" class="side-item-thumb" />
					<h4><a href="#">Interview with Bulletstorm creator</a></h4>
					<span class="side-item-meta">March 14, 2011 - 32 Comments</span>

				</div>

				<div class="side-item">

					<img src="/images/newsthumbside2.jpg" alt="" class="side-item-thumb" />
					<h4><a href="#">Minecraft sells over 1 million copies in one year</a></h4>
					<span class="side-item-meta">March 14, 2011 - 32 Comments</span>

				</div>

				<div class="side-item">

					<img src="/images/newsthumbside3.jpg" alt="" class="side-item-thumb" />
					<h4><a href="#">New Dragon Age 2 screenshots</a></h4>
					<span class="side-item-meta">March 14, 2011 - 32 Comments</span>

				</div>

				<div class="side-item">

					<img src="/images/newsthumbside4.jpg" alt="" class="side-item-thumb" />
					<h4><a href="#">FIFA 11 World Cup coverage</a></h4>
					<span class="side-item-meta">March 14, 2011 - 32 Comments</span>

				</div>

				<div class="side-item">

					<img src="/images/newsthumbside5.jpg" alt="" class="side-item-thumb" />
					<h4><a href="#">Diablo 3 release date rumors</a></h4>
					<span class="side-item-meta">March 14, 2011 - 32 Comments</span>

				</div>

			</div>
			<!-- END WIDGET -->

			</div>
			<!-- END WIDGET -->

		</div>
		<!-- END SIDEBAR -->

	<!-- END MAIN WRAPPER -->

	<!-- BEGIN FOOTER TOP -->
	<div id="footer-top-wrapper">

		<div id="footer-top">

			<ul id="footer-navigation">
				<li><span> // </span><a href="#">Home</a></li>
				<li><span> // </span><a href="#">About Us</a></li>
				<li><span> // </span><a href="#">Contact</a></li>
				<li><span> // </span><a href="#">Page Templates</a></li>
			</ul>

			<div id="back-top">
				<a href="#">Back to top</a>
			</div>

		</div>

	</div>
	<!-- END FOOTER TOP -->

	<!-- BEGIN FOOTER -->
	<div id="footer-wrapper">

		<div id="footer">

			<!-- BEGIN FOOTER WIDGET -->
			<div class="footer-widget left">

				<h3>Latest News</h3>

				<ul>
					<li><a href="#">Minecraft sells over 1 million copies</a></li>
					<li><a href="#">Little Big Planet 2 hits the streets</a></li>
					<li><a href="#">10 great iPhone games</a></li>
					<li><a href="#">FIFA 11 breaks all sales records</a></li>
					<li><a href="#">Diablo 3 release date rumors</a></li>
				</ul>

			</div>
			<!-- END FOOTER WIDGET -->

			<!-- BEGIN FOOTER WIDGET -->
			<div class="footer-widget middle">

				<h3>Archives</h3>

				<ul>
					<li><a href="#">March 2011</a></li>
					<li><a href="#">February 2011</a></li>
					<li><a href="#">January 2011</a></li>
					<li><a href="#">December 2010</a></li>
					<li><a href="#">November 2010</a></li>
				</ul>

			</div>
			<!-- END FOOTER WIDGET -->

			<!-- BEGIN FOOTER WIDGET -->
			<div class="footer-widget middle">

				<h3>LeetPress On</h3>
				<ul>
					<li><a href="#">Facebook</a></li>
					<li><a href="#">Twitter</a></li>
					<li><a href="#">Youtube</a></li>
					<li><a href="#">iPhone</a></li>
				</ul>

			</div>
			<!-- END FOOTER WIDGET -->

			<!-- BEGIN FOOTER WIDGET -->
			<div class="footer-widget right">

				<h3>About LeetPress</h3>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>

			</div>
			<!-- END FOOTER WIDGET -->

		</div>

	</div>
	<!-- END FOOTER -->

	<!-- BEGIN FOOTER BOTTOM WRAPPER -->
	<div id="footer-bottom-wrapper">

		<!-- BEGIN FOOTER BOTTOM -->
		<div id="footer-bottom">

			<span class="footer-bottom-left">Copyright (C) 2011 - LeetPress. All rights reserved.</span>
			<span class="footer-bottom-right">Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></span>

		</div>
		<!-- END FOOTER BOTTOM -->

	</div>
	<!-- END FOOTER BOTTOM WRAPPER -->

</body>

</html>
