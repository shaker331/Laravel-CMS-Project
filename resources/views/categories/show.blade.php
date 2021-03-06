@include('include.header')
<title>{{$title}}|{{$catss->name}}</title>

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<div class="col-md-8">

                    <!-- post -->
					@foreach ($catss->posts as $cat)

					<div class="post post-row">
						<a class="post-img" href="{{route('showpost',['slug'=>$cat->slug])}}"><img src="{{URL::asset("$cat->featured")}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{route('showpost',['slug'=>$cat->slug])}}">{{$cat->category->name}}</a>
							</div>
							<h3 class="post-title"><a href="{{route('showpost',['slug'=>$cat->slug])}}"></a>{{$cat->title}}</h3>
							<ul class="post-meta">
									<li><a href="{{route('users',['id'=>$cat->user_id])}}">{{$cat->user->name}}</a></li>
									<li>{{$cat->created_at}}</li>
							</ul>

						</div>
                    </div>
                    @endforeach

					<!-- /post -->
				</div>

				<div class="col-md-4">
					<!-- ad widget-->
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="./img/ad-3.jpg" alt="">
						</a>
					</div>
					<!-- /ad widget -->



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
						
					<!-- category widget -->
					<div class="aside-widget">
							<div class="section-title">
								<h2 class="title">Categories</h2>
							</div>
							<div class="category-widget">
								<ul> 
										<li><a href="{{route('showCategory',['id'=>$laravel->id])}}">{{$laravel->name}} <span>{{$catcount}}</span></a></li>
										<li><a href="{{route('showCategory',['id'=>$android->id])}}">{{$android->name}} <span>{{$catcount1}}</span></a></li>
										<li><a href="{{route('showCategory',['id'=>$paython->id])}}">{{$paython->name}} <span>{{$catcount2}}</span></a></li>
										<li><a href="{{route('showCategory',['id'=>$cricket->id])}}">{{$cricket->name}} <span>{{$catcount3}}</span></a></li>
	
								</ul>
							</div>
						</div>
						<!-- /category widget -->

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
					<!-- /newsletter widget -->					<!-- Ad widget -->
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="./img/ad-1.jpg" alt="">
						</a>
					</div>
					<!-- /Ad widget -->
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
