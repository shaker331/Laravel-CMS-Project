

	<!-- FOOTER -->
	<footer id='footer'>
            <!-- container -->
            <div class='container'>
                <!-- row -->
                <div class='row'>
                    <div class='col-md-3'>
                        <div class='footer-widget'>
                           {{$setting->blog_name}} <br>
                           {{$setting->blog_email}} <br>
                           {{$setting->phone}}  <br>
                           {{$setting->address}}<br><br>

                            <ul class='contact-social'>
                                <li><a href='https://www.facebook.com/' class='social-facebook'><i class='fa fa-facebook'></i></a></li>
                                <li><a href='https://twitter.com' class='social-twitter'><i class='fa fa-twitter'></i></a></li>
                                <li><a href='https://aboutme.google.com/u/0/?referer=gplus' class='social-google-plus'><i class='fa fa-google-plus'></i></a></li>
                                <li><a href='https://www.instagram.com/' class='social-instagram'><i class='fa fa-instagram'></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class='col-md-3'>
                        <div class='footer-widget'>
                            
					<!-- category widget -->
					<div class="aside-widget">
                        <h3 class='footer-title'>Categories</h3>
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
                        </div>
                    </div>
                    <div class='col-md-3'>
                        <div class='footer-widget'>
                            <h3 class='footer-title'>Tags</h3>
                            <div class='tags-widget'>
                                <ul>
                                        @foreach ($tags as $tag)

                                    <li><a href="{{route('showTag',['id'=>$tag->id])}}">{{$tag->name}}</a></li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class='col-md-3'>
                        <div class='footer-widget'>
                            <h3 class='footer-title'>Newsletter</h3>
                            <div class='newsletter-widget'>
                                    <form method="post" action="{{route('newsletter')}}">
                                            @csrf

                                    <p>Enter Your Email For Newsletter  .</p>
                                    <input type="text" class="form-control" name="email"><br>
                                    <button type="submit" class="btn btn-success ">Subscribe</button>
                                    <br>
								  @if (session('status'))
                                  <div class="alert alert-success">
                                  {{session('status')}}
                                  @endif

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row -->
    
                <!-- row -->
                <div class='footer-bottom row'>
                    <div class='col-md-6 col-md-push-6'>
                        <ul class='footer-nav'>
                            <li><a href='{{route('index')}}'>Home</a></li>
                            <li><a href='{{route('about')}}'>About Us</a></li>
                            <li><a href='{{route('contact')}}'>Contacts</a></li>
                            <li><a href='{{route('privacy')}}'>Privacy</a></li>
                        </ul>
                    </div>
                    <div class='col-md-6 col-md-pull-6'>
                        <div class='footer-copyright'>
    Copyright &copy;
    All rights reserved | This template is made with <i class='fa fa-heart-o' aria-hidden='true'></i>
     by <a href='' target='_blank'>Shaker </a>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </footer>
        <!-- /FOOTER -->
    
	<!-- jQuery Plugins -->
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>