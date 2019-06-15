@extends('layouts.app')
@section('content')
<h1 class="text-center">Edit Post</h1>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          
<form method="Post" action="{{route('post.update',['id'=>$posts->id])}}" enctype="multipart/form-data">
@csrf
<div class="form-group">
  <label for="">Title</label>
  <input type="text" class="form-control" id= "  " placeholder="Enter title" name="title" value="{{$posts->title}}">
</div>
<div class="form-group">
  <label for="exampleFormControlTextarea1">Description</label>
  <textarea class="form-control" id="content" rows="8" column="8" name="content">{{$posts->content}}</textarea>
</div>

<div class="form-group">
    <label for="category">Category</label>

<select name="cat_id" id="category" class="form-control">
      @foreach ($cats as $cat)
          @if ($cat->id == $posts->cat_id)
          <option value="{{$cat->id}}" selected >{{$cat->name}} </option>

          @else
          <option value="{{$cat->id}}">{{$cat->name}}</option>

          @endif


@endforeach  

  </select>
</div>

<div class="form-check">
    <label for="">Tags</label> <br>

  @foreach ($tags as $tag)
  <label class="form-check-label">
  <input class="form-check-input" type="checkbox"  value="{{$tag->id}}" id="defaultCheck1" name="tags[]"
  @foreach ($posts->tags as $tag1)
@if ($tag->id  == $tag1->id)
    checked
  @endif

@endforeach
>{{$tag->name}} </label> <br>
@endforeach

</div>

<div class="form-group">
    <label for="exampleInputEmail1">Photo</label>
    <input type="file" class="form-control" id= "  "  name="featured"  value="{{$posts->featured}}">
  </div>
<button type="submit" class="btn btn-primary">Update</button>
</form>

        </div>
    </div>
    <br>
@if (count($errors)>0)
<ul class=" navbar-nav ">
@foreach ($errors->all() as $error)
<li >

<div class="alert alert-danger" role="alert">
{{$error}}
</div>

</li>
@endforeach


</ul>
@endif
</div>
@endsection


@section('styles')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">

@endsection


@section('scripts')
 
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js" defer></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script>
    $(document).ready(function() {
      $('#content').summernote();
    });
</script>
@endsection
