@extends('layouts.app')
@section('content')
<h1 class="text-center">Create Post</h1>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          
<form method="Post" action="{{route('post.store')}}" enctype="multipart/form-data">
@csrf
<div class="form-group">
  <label for="">Title</label>
  <input type="text" class="form-control" id= "  " placeholder="Enter title" name="title">
</div>
<div class="form-group">
  <label for="exampleFormControlTextarea1">Description</label>
  <textarea class="form-control" id="article-ckeditor" rows="8" column="8" name="content"></textarea>
</div>
<div class="form-group">
  <label for="exampleFormControlTextarea1">Category</label>

<select name="cat_id" id="" class="form-control">
    @foreach ($cats as $cat)
        
<option value="{{$cat->id}}">{{$cat->name}}</option>

@endforeach


  </select>
</div>
<div class="form-check">
    <label for="">Tags</label> <br>

  @foreach ($tags as $tag)
  <input class="form-check-input" type="checkbox" value="{{$tag->id}}" id="defaultCheck1" name="tags[]">
  <label class="form-check-label" for="defaultCheck1">{{$tag->name}} 
  </label><br>
@endforeach

</div>

<div class="form-group">
    <label for="exampleInputEmail1">Photo</label>
    <input type="file" class="form-control" id= "  "  name="featured" >
  </div>
<button type="submit" class="btn btn-primary">Create</button>
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