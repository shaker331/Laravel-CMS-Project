@include('include.header')
<title>{{$user->name}}</title>
		<!-- PAGE HEADER -->
		<div class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-offset-1 col-md-10 text-center">
							<div class="author">
								<img class="author-img center-block" src="./img/avatar-1.jpg" alt="">
								<h1 class="text-uppercase">{{$user->name}}</h1>
								<p class="lead">{{$user->profile->about}}</p>
								<ul class="author-social">
									<li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
									<li><a href="https://aboutme.google.com/u/0/?referer=gplus"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
				
						
					@foreach ($user->posts()->orderBy('created_at','desc')->get() as $post)
						
					
					<!-- post -->
					<div class="post post-row">
						<a class="post-img" href="blog-post.html"><img src="{{URL::asset("$post->featured")}}" alt=""></a>
						<div class="post-body">
								<h3 class="post-title"><a href="{{route('showpost',['slug'=>$post->slug])}}">{{$post->title}}</a></h3>

							<div class="post-category">
								<a href="{{route('showCategory',['id'=>$post->category->id])}}">{{$post->category->name}}</a>
							</div>
							<ul class="post-meta">
								<li>{{$post->created_at->diffForHumans()}}</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
					@endforeach
				
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
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	@include('include.footer')

</body>

</html>
