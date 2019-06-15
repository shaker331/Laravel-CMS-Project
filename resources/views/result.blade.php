@include('include.header')

<title>{{$title}}|Result</title>

	<!-- /HEADER -->
<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<div class="col-md-8">


                    <!-- post -->
					<div class="post post-row">

						<div class="post-body">
							<ul class="post-meta">
								<li class="btn btn-danger"  role="button" style="color:black">result:{{$query}}</li>
								
							</ul>

						</div>
					</div>
                    @if ($posts->count()>0)
                        
					@foreach ($posts as $post)

                    <!-- post -->

					<div class="post post-row">
						<a class="post-img" href="{{route('showpost',['slug'=>$post->slug])}}"><img src="{{URL::asset("$post->featured")}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{route('showpost',['slug'=>$post->slug])}}"></a>
							</div>
							<h3 class="post-title"><a href="{{route('showpost',['slug'=>$post->slug])}}"></a>{{$post->title}}</h3>
							<ul class="post-meta">
								<li><a href="{{route('users',['id'=>$post->user_id])}}">{{$post->user->name}}</a></li>
								<li>{{$post->created_at}}</li>
							</ul>

							<p class="text-center">{{$post->content}}</p>
						</div>
                    </div>
                    @endforeach
                    @else 
                    <h1>No Result</h1>
                    @endif
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
				
					<!-- Ad widget -->
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


	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
