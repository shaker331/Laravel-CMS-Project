@include('include.header')

@if (!empty($first_post->id)  )

<title>{{$title}}</title>
	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div id="hot-post" class="row hot-post">
				<div class="col-md-8 hot-post-left">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="{{route('showpost',['slug'=>$first_post->slug])}}"><img src="{{$first_post->featured}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{route('showCategory',['id'=>$first_post->category->id])}}">{{$first_post->category->name}}</a>
							</div>
							<h3 class="post-title title-lg"><a href="{{route('showpost',['slug'=>$first_post->slug])}}">{{$first_post->title}}</a></h3>
							<ul class="post-meta">
								<li><a href="{{route('users',['id'=>$first_post->user_id])}}">{{$first_post->user->name}}</a></li>
								<li>{{$first_post->created_at->diffForHumans()}}</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
				<div class="col-md-4 hot-post-right">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="{{route('showpost',['slug'=>$second_post->slug])}}"><img src="{{$second_post->featured}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{route('showCategory',['id'=>$second_post->category->id])}}">{{$second_post->category->name}}</a>
							</div>
							<h3 class="post-title"><a href="{{route('showpost',['slug'=>$second_post->slug])}}">{{$second_post->title}}</a></h3>
							<ul class="post-meta">
								<li><a href="{{route('users',['id'=>$second_post->user_id])}}">{{$second_post->user->name}}</a></li>
								<li>{{$second_post->created_at->diffForHumans()}}</li>
							</ul>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="{{route('showpost',['slug'=>$third_post->slug])}}"><img src="{{$third_post->featured}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{route('showCategory',['id'=>$third_post->category->id])}}">{{$third_post->category->name}}</a>
							</div>
							<h3 class="post-title"><a href="{{route('showpost',['slug'=>$third_post->slug])}}">{{$third_post->title}}</a></h3>
							<ul class="post-meta">
								<li><a href="{{route('users',['id'=>$third_post->user_id])}}">{{$third_post->user->name}}</a></li>
								<li>{{$third_post->created_at->diffForHumans()}}</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->
	<!-- SECTION -->
	<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<!-- row -->
						<div class="row">
							<div class="col-md-12">
							</div>	<!-- /post -->
						</div>
						<!-- /row -->
	
						<!-- row -->
						<div class="row">
							<div class="col-md-12">
								<div class="section-title">
									<h2 class="title">{{$laravel->name}}</h2>
								</div>
							</div>
							<!-- post -->
							@foreach ($laravel->posts()->orderBy('created_at','desc')->take(3)->get() as $post)
								
							<div class="col-md-4">
								<div class="post post-sm">
									<a class="post-img" href="{{route('showpost',['slug'=>$post->slug])}}"><img src="{{$post->featured}}" alt=""></a>
									<div class="post-body">
										<div class="post-category">
											<a href="{{route('showCategory',['id'=>$post->category->id])}}">{{$post->category->name}}</a>
										</div>
										<h3 class="post-title title-sm"><a href="{{route('showpost',['slug'=>$post->slug])}}">{{$post->title}}</a></h3>
										<ul class="post-meta">
												<li><a href="{{route('users',['id'=>$post->user_id])}}">{{$post->user->name}}</a></li>
												<li>{{$post->created_at->diffForHumans()}}</li>
										</ul>
									</div>
								</div>
							</div>

								@endforeach

							</div>
							<!-- /post -->
	
	
						<!-- row -->
						<div class="row">
							<div class="col-md-12">
								<div class="section-title">
									<h2 class="title">{{$android->name}}</h2>
								</div>
							</div>
							<!-- post -->
							@foreach ($android->posts()->orderBy('created_at','desc')->take(3)->get() as $post)

							<div class="col-md-4">
									<div class="post post-sm">
										<a class="post-img" href="{{route('showpost',['slug'=>$post->slug])}}"><img src="{{$post->featured}}" alt=""></a>
										<div class="post-body">
											<div class="post-category">
												<a href="{{route('showCategory',['id'=>$post->category->id])}}">{{$post->category->name}}</a>
											</div>
											<h3 class="post-title title-sm"><a href="{{route('showpost',['slug'=>$post->slug])}}">{{$post->title}}</a></h3>
											<ul class="post-meta">
												<li><a href="{{route('users',['id'=>$post->user_id])}}">{{$post->user->name}}</a></li>
												<li>{{$post->created_at->diffForHumans()}}</li>
											</ul>
										</div>
									</div>
								</div>
	
									@endforeach
	
								</div>

						<!-- row -->
						<div class="row">
							<div class="col-md-12">
								<div class="section-title">
									<h2 class="title">{{$paython->name}}</h2>
								</div>
							</div>
							<!-- post -->
							@foreach ($paython->posts()->orderBy('created_at','desc')->take(3)->get() as $post)

							<div class="col-md-4">
									<div class="post post-sm">
										<a class="post-img" href="{{route('showpost',['slug'=>$post->slug])}}"><img src="{{$post->featured}}" alt=""></a>
										<div class="post-body">
											<div class="post-category">
												<a href="{{route('showCategory',['id'=>$post->category->id])}}">{{$post->category->name}}</a>
											</div>
											<h3 class="post-title title-sm"><a href="{{route('showpost',['slug'=>$post->slug])}}">{{$post->title}}</a></h3>
											<ul class="post-meta">
												<li><a href="{{route('users',['id'=>$post->user_id])}}">{{$post->user->name}}</a></li>
												<li>{{$post->created_at->diffForHumans()}}</li>
											</ul>
										</div>
									</div>
								</div>
	
									@endforeach
	
								</div>
							<!-- /post -->
							<div class="row">
									<div class="col-md-12">
										<div class="section-title">
											<h2 class="title">{{$cricket->name}}</h2>
										</div>
									</div>
									<!-- post -->
									@foreach ($cricket->posts()->orderBy('created_at','desc')->take(3)->get() as $post)
		
									<div class="col-md-4">
											<div class="post post-sm">
												<a class="post-img" href="{{route('showpost',['slug'=>$post->slug])}}"><img src="{{$post->featured}}" alt=""></a>
												<div class="post-body">
													<div class="post-category">
														<a href="{{route('showCategory',['id'=>$post->category->id])}}">{{$post->category->name}}</a>
													</div>
													<h3 class="post-title title-sm"><a href="{{route('showpost',['slug'=>$post->slug])}}">{{$post->title}}</a></h3>
													<ul class="post-meta">
														<li><a href="{{route('users',['id'=>$post->user_id])}}">{{$post->user->name}}</a></li>
														<li>{{$post->created_at->diffForHumans()}}</li>
													</ul>
												</div>
											</div>
										</div>
			
											@endforeach
			
										</div>
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
								<form method="post" action="{{route('newsletter')}}">
								  @csrf
								 
										<label for="Email">Email:</label>
										<input type="text" class="form-control" name="email"><br>
								  <div class="row">
									<div class="form-group col-md-4">
									  <button type="submit" class="btn btn-success">Subscribe</button>
									
								  
								  @if (session('status'))
									  <div class="alert alert-success">
									  {{session('status')}}
									 </div>
									</div>
								
								  @endif
								</div>
								</form>
							</div>
						</div>
					<br>
					<br>
					<br>
					
					<br>
					
					<!-- /newsletter widget -->

					<!-- post widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Popular Posts</h2>
						</div>
						<!-- post -->
						@foreach ($posts->take(2) as $post)
							
						
						<div class="post post-widget">
							<a class="post-img" href="{{route('showpost',['slug'=>$post->slug])}}"><img src="{{$post->featured}}" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="{{route('showCategory',['id'=>$post->category->id])}}">{{$post->category->name}}</a>
								</div>
								<h3 class="post-title" style="font-size:10px"><a href="{{route('showpost',['slug'=>$post->slug])}}">{{$post->title}}</a></h3>
							</div>
						</div>
						@endforeach
						<!-- /post -->

					</div>
					<!-- /post widget -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- ad -->
				<div class="col-md-12 section-row text-center">
					<a href="#" style="display: inline-block;margin: auto;">
						<img class="img-responsive" src="./img/ad-2.jpg" alt="">
					</a>
				</div>
				<!-- /ad -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-3">
					<div class="section-title">
						<h2 class="title">{{$laravel->name}}</h2>
					</div>
					@foreach ($laravel->posts()->orderBy('created_at','desc')->take(1)->get() as $post)

					<!-- post -->
					<div class="post">
						<a class="post-img" href="{{route('showpost',['slug'=>$post->slug])}}"><img src="{{$post->featured}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{route('showCategory',['id'=>$post->category->id])}}">{{$post->category->name}}</a>
							</div>
							<h3 class="post-title"><a href="{{route('showpost',['slug'=>$post->slug])}}">{{$post->title}}</a></h3>
							<ul class="post-meta">
								<li><a href="{{route('users',['id'=>$post->user_id])}}">{{$post->user->name}}</a></li>
								<li>{{$post->created_at->diffForHumans()}}</li>
							</ul>
						</div>
					</div>
					@endforeach
					<!-- /post -->
				</div>
				<div class="col-md-3">
					<div class="section-title">
						<h2 class="title">{{$android->name}}</h2>
					</div>
					<!-- post -->
					@foreach ($android->posts()->orderBy('created_at','desc')->take(1)->get() as $post)
					<div class="post">
						<a class="post-img" href="{{route('showpost',['slug'=>$post->slug])}}"><img src="{{$post->featured}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{route('showCategory',['id'=>$post->category->id])}}">{{$post->category->name}}</a>
							</div>
							<h3 class="post-title"><a href="{{route('showpost',['slug'=>$post->slug])}}">{{$post->title}}</a></h3>
							<ul class="post-meta">
								<li><a href="{{route('users',['id'=>$post->user_id])}}">{{$post->user->name}}</a></li>
								<li>{{$post->created_at->diffForHumans()}}</li>
							</ul>
						</div>
					</div>
					@endforeach
				</div>
					<!-- /post -->
				
				<div class="col-md-3">
					<div class="section-title">
						<h2 class="title">{{$paython->name}}</h2>
					</div>
					<!-- post -->
					@foreach ($paython->posts()->orderBy('created_at','desc')->take(1)->get() as $post)

					<div class="post">
						<a class="post-img" href="{{route('showpost',['slug'=>$post->slug])}}"><img src="{{$post->featured}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{route('showCategory',['id'=>$post->category->id])}}">{{$post->category->name}}</a>
							</div>
							<h3 class="post-title"><a href="{{route('showpost',['slug'=>$post->slug])}}">{{$post->title}}</a></h3>
							<ul class="post-meta">
								<li><a href="{{route('users',['id'=>$post->user_id])}}">{{$post->user->name}}</a></li>
								<li>{{$post->created_at->diffForHumans()}}}</li>
							</ul>
						</div>
					</div>
					@endforeach

				</div>
				
				<div class="col-md-3">
						<div class="section-title">
							<h2 class="title">{{$cricket->name}}</h2>
						</div>
						<!-- post -->
						@foreach ($cricket->posts()->orderBy('created_at','desc')->take(1)->get() as $post)
						<div class="post">
							<a class="post-img" href="{{route('showpost',['slug'=>$post->slug])}}"><img src="{{$post->featured}}" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="{{route('showCategory',['id'=>$post->category->id])}}">{{$post->category->name}}</a>
								</div>
								<h3 class="post-title"><a href="{{route('showpost',['slug'=>$post->slug])}}">{{$post->title}}</a></h3>
								<ul class="post-meta">
									<li><a href="{{route('users',['id'=>$post->user_id])}}">{{$post->user->name}}</a></li>
									<li>{{$post->created_at->diffForHumans()}}</li>
								</ul>
							</div>
						</div>
						@endforeach
					</div>
						<!-- /post -->
			</div>
			<!-- /row -->

			<div class="section-title">
					<h2 class="title"></h2>
				</div>
			<!-- row -->
			<div class="row">
				<div class="col-md-3">
					<!-- post -->
					@foreach ($paython->posts()->orderBy('created_at','desc')->take(3)->get() as $post)

					<div class="post post-widget">
						<a class="post-img" href="{{route('showpost',['slug'=>$post->slug])}}"><img src="{{$post->featured}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{route('showCategory',['id'=>$post->category->id])}}">{{$post->category->name}}</a>
							</div>
							<h3 class="post-title" style="font-size:10px"><a href="{{route('showpost',['slug'=>$post->slug])}}">{{$post->title}}</a></h3>
						</div>
					</div>
					@endforeach

					<!-- /post -->
				</div>
				<div class="col-md-3">
					<!-- post -->
					@foreach ($laravel->posts()->orderBy('created_at','desc')->take(3)->get() as $post)

					<div class="post post-widget">
						<a class="post-img" href="{{route('showpost',['slug'=>$post->slug])}}"><img src="{{$post->featured}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{route('showCategory',['id'=>$post->category->id])}}">{{$post->category->name}}</a>
							</div>
							<h3 class="post-title" style="font-size:10px"><a href="{{route('showpost',['slug'=>$post->slug])}}">{{$post->title}}</a></h3>
						</div>
					</div>
					@endforeach

				</div>
				<div class="col-md-3">
					<!-- post -->
					@foreach ($android->posts()->orderBy('created_at','desc')->take(3)->get() as $post)

					<div class="post post-widget">
						<a class="post-img" href="{{route('showpost',['slug'=>$post->slug])}}"><img src="{{$post->featured}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{route('showCategory',['id'=>$post->category->id])}}">{{$post->category->name}}</a>
							</div>
							<h3 class="post-title" style="font-size:10px"><a href="{{route('showpost',['slug'=>$post->slug])}}">{{$post->title}}</a></h3>
						</div>
					</div>
					@endforeach
				</div>
				
				<div class="col-md-3">
						<!-- post -->
						@foreach ($cricket->posts()->orderBy('created_at','desc')->take(3)->get() as $post)
	
						<div class="post post-widget">
							<a class="post-img" href="{{route('showpost',['slug'=>$post->slug])}}"><img src="{{$post->featured}}" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="{{route('showCategory',['id'=>$post->category->id])}}">{{$post->category->name}}</a>
								</div>
								<h5 class="post-title" style="font-size:10px"><a href="{{route('showpost',['slug'=>$post->slug])}}">{{$post->title}}</a></h5>
							</div>
						</div>
						@endforeach
					</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->
</div>

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					
						<div class="section-title">
								<h2 class="title"></h2>
							</div>
					<!-- post -->
					@foreach ($posts->take(5) as $post)
						
					
					<div class="post post-row">
						<a class="post-img" href="{{route('showpost',['slug'=>$post->slug])}}"><img src="{{$post->featured}}" alt="" height="150" width="100"></a>
						<div class="post-body">
							<a href="{{route('showpost',['slug'=>$post->slug])}}"><p>{{$post->title}}</p></a>
							
							<div class="post-category">
									<a href="{{route('showCategory',['id'=>$post->category->id])}}">{{$post->category->name}}</a>
								</div>
							<ul class="post-meta">
									<li><a href="{{route('users',['id'=>$post->user_id])}}">{{$post->user->name}}</a></li>
									<li>{{$post->created_at->diffForHumans()}}</li>
								</ul>
						</div>
					</div>
				

					@endforeach
					<!-- /post -->

					<div class="section-row loadmore text-center  ">
						<a href="{{route('allposts')}}" class="primary-button r">Load More</a>
					</div>
				</div>
				<div class="col-md-4">
					<!-- galery widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Photos</h2>
						</div>
						<div class="galery-widget">
							<ul>
							 @foreach ($posts->take(6) as $post)
								 
								<li><a href="{{route('showpost',['slug'=>$post->slug])}}"><img src="{{$post->featured}}" alt="" height="85" width="50"></a></li>
								@endforeach
							</ul>
							
						<div class="section-title">
								<h2 class="title"></h2>
							</div>
						</div>
					</div>
				</div>

					<!-- /galery widget -->

					<!-- Ad widget -->
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="./img/ad-1.jpg" alt="">
						</a>
					</div>
					<!-- /Ad widget -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>

	@else
	<br>
	<br>
	<div class="  text-center">
		<h1>Visit Your Admin Panel</h1>
	<a  class=" btn btn-primary text-center" href="{{route('dashboard')}}">Admin Control Panel</a>
</div>
	@endif
	@include('include.footer')

</body>

</html>
