<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>
<body>
	
	<!-- HEADER -->
	<header id="header">
			<!-- NAV -->
			<div id="nav">
				<!-- Top Nav -->
				<div id="nav-top">
					<div class="container">
						<!-- social -->
						<ul class="nav-social">
								<li><a href="/"><i class=""></i><h3>{{$setting->blog_name}}</h3></a></li>
	
							<li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://aboutme.google.com/u/0/?referer=gplus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
						</ul>
						<!-- /social -->
	
						<div class="nav-logo">
								<a href="{{route('index')}}" class="logo"><img src="/imge/logo.png" alt="" ></a>
							</div>
							<!-- /logo -->
		
						<!-- search & aside toggle -->
						<div class="nav-btns">
							<button class="aside-btn"><i class="fa fa-bars"></i></button>
							<button class="search-btn"><i class="fa fa-search"></i></button>
							<div id="nav-search">
								<form action="{{route('search')}}" method="GET">
									@csrf
									<input class="input" name="search" placeholder="Enter your search...">
								</form>
	
								<button class="nav-close search-close">
									<span></span>
								</button>
							</div>
						</div>
						<!-- /search & aside toggle -->
					</div>
				</div>
				<!-- /Top Nav -->
	
				<!-- Main Nav -->
				<div id="nav-bottom">
					<div class="container">
						<!-- nav -->
						<ul class="nav-menu">
							<li class="has-dropdown">
								<a href="{{route('index')}}">Home</a>
								<div class="dropdown">
									<div class="dropdown-body">
										<ul class="dropdown-list">
											<li><a href="{{route('allposts')}}">Post page</a></li>
											<li><a href='{{route('about')}}'>About Us</a></li>
											<li><a href='{{route('contact')}}'>Contacts</a></li>
									</div>
								</div>
							</li>
							@foreach ($cats as $cat)
	
							<li><a href="{{route('showCategory',['id'=>$cat->id])}}">{{$cat->name}}</a></li>
							@endforeach
						</ul>
						<!-- /nav -->
					</div>
				</div>
				<!-- /Main Nav -->
	
				<!-- Aside Nav -->
				<div id="nav-aside">
					<ul class="nav-aside-menu">
						<li><a href="{{route('index')}}">Home</a></li>
						<li class="has-dropdown"><a>Categories</a>
							<ul class="dropdown">
									@foreach ($cats as $cat)
	
								<li><a href="{{route('showCategory',['id'=>$cat->id])}}">{{$cat->name}}</a></li>
								@endforeach
							</ul>
						</li>
						<li><a href='{{route('about')}}'>About Us</a></li>
						<li><a href='{{route('contact')}}'>Contacts</a></li>
					</ul>
					<button class="nav-close nav-aside-close"><span></span></button>
				</div>
				<!-- /Aside Nav -->
			</div>
			<!-- /NAV -->
		</header>
		<!-- /HEADER -->
