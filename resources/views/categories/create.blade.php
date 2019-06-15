@extends('layouts.app')
@section('content')
<h1 class="text-center">Create Category</h1>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          
<form method="Post" action="{{route('category.store')}}" enctype="multipart/form-data">
@csrf
<div class="form-group">
  <label for="">Name</label>
  <input type="text" class="form-control" id= "  " placeholder="Enter title" name="name">
</div>
<button type="submit" class="btn btn-primary">Save</button>
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