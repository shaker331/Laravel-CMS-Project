@include('include.header')
		<!-- /PAGE HEADER -->
	</header>
	<!-- /HEADER -->
<title>Shaker Blog|{{$post->slug}}</title>
	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<div class="section-row">
						<div class="section-title">
							<h3 class="title">{{$post->category->name}}</h3>
						</div>
						<div>
						<img src="{{$post->featured}}" alt="" width="750"></div>
<br>
						<h1 class="text-center">{{$post->title}}</h1>
                        <p>{{$post->content}}</p>
                        @foreach ($post->tags as $tag)
                        <a class="btn btn-primary" role="button"href="{{route('showTag',['id'=>$tag->id])}}" class="">{{$tag->name}}</a>

                        @endforeach

					</div>

@include('include.comment')
					<div class="section-row">
						<div class="section-title">
                        </div>
                        <br>
                        @if ($previous)
                        <a href="{{route('showpost',['slug'=>$previous->slug])}}" class="primary-button">Previous</a>

                        @endif

                        @if ($next)
                        <a href="{{route('showpost',['slug'=>$next->slug])}}" class="primary-button">Next</a>

                        @endif

					</div>
				</div>

				<div class="col-md-4">
					

					<!-- social widget -->
					<div class="aside-widget">
							<div class="section-title">
								<h2 class="title">Social Media</h2>
							</div>
							<div class="social-widget">
								<ul>
									<li>
										<a href="https://www.facebook.com/" class="social-facebook">
											<i class="fa fa-facebook"></i>
											<span>21.2K<br>Followers</span>
										</a>
									</li>
									<li>
										<a href="https://twitter.com" class="social-twitter">
											<i class="fa fa-twitter"></i>
											<span>10.2K<br>Followers</span>
										</a>
									</li>
									<li>
										<a href="https://aboutme.google.com/u/0/?referer=gplus" class="social-google-plus">
											<i class="fa fa-google-plus"></i>
											<span>5K<br>Followers</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- /social widget -->
	
						<!-- category widget -->
				
					<!-- /social widget -->

					<!-- newsletter widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Newsletter</h2>
						</div>
						<div class="newsletter-widget">
							<form>
								<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
								<input class="input" name="newsletter" placeholder="Enter Your Email">
								<button class="primary-button">Subscribe</button>
							</form>
						</div>
					</div>
					<!-- /newsletter widget -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
    <!-- /SECTION -->
    @include('include.footer')
</body>

</html>
