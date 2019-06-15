@extends('layouts.app')
@section('content')
<div class="container">
    <div class="form-row">
  @if (!empty($settings->id)  )
      <form   action="{{ROUTE('setting.update')}}">
        @csrf
            <div class="form-group">
            <label for="inputPassword4">Blog Name</label>
            <input type="text" class="form-control" id="" placeholder="blog name" value="{{$settings->blog_name}} " name="blog_name">
          </div>
          <div class="form-group">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Email" value="{{$settings->blog_email}}" name="blog_email">
      </div>
    <div class="form-group">
      <label for="inputAddress">Address</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" value="{{$settings->address}}" name="address">
    </div>
    <div class="form-group">
      <label for="inputAddress2"> Phone</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="phone number" value="{{$settings->phone}}" name="phone">
    </div>
    <div class="form-group">
    <button type="submit" class="btn btn-primary">Update</button>
    <a class="btn btn-primary" href="/home" role="button">return</a>
    </div>

  </form>
  @else
    <form   action="{{ROUTE('setting.store')}} " method="POST">
      @csrf
          <div class="form-group">
          <label for="">Blog Name</label>
          <input type="text" class="form-control" id="" placeholder="blog name" value="" name="blog_name">
        </div>
        <div class="form-group">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" value="" name="blog_email">
    </div>
  <div class="form-group">
    <label for="inputAddress2"> Phone</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="phone number" value="" name="phone">
  </div> 
  
  <div class="form-group">
      <label for="inputAddress">Address</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" value="" name="address">
    </div>
  <div class="form-group">
  <button type="submit" class="btn btn-primary">create</button>
  <a class="btn btn-primary" href="/home" role="button">return</a>
  </div>
</form>
  @endif
  </div>
</div>

@endsection