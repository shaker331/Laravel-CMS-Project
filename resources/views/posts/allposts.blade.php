@include('include.header')
<title>{{$title}}|All Posts</title>
        <br>
<div class="container">
        <div class="card-header text-center "><h1>All Posts</h1></div>
<br>
        <div class="row justify-content-center">
              

@foreach ($posts->take(4) as $post)
<div class="col-md-3">

<div class="card" style="width: 18rem;">
        <h5 class="card-title text-center" style="color:crimson ; font-size:15px" >{{$post->title}}</h5>
        <a class="post-img" href="{{route('showpost',['slug'=>$post->slug])}}"><img src="{{$post->featured}}" alt="" height="200" width="200"></a>

        
        <ul class="list-group list-group-flush">
          <li class="list-group-item" style="color:firebrick"> created_at : {{$post->created_at}}</li>
        </ul>
      </div>
    </div>

        @endforeach

      </div>
    </div>

    <div class="container">
<div class="row justify-content-center">
    <div class="col-md-12 text-center d-flex">

{{$posts->links()}}
    </div>
  </div>
</div>
@include('include.footer')
</body>