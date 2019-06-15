@extends('layouts.app')
@section('content')
<h1>Profile</h1>    

@if ($user->profile)
    
<form method="POST" action="{{route('profile.update',['id'=>$user->id])}}">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="">Name</label>
        <input type="text" class="form-control" id="" placeholder="name" name="name" value="{{$user->name}}">
      </div>
      
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email" value="{{$user->email}}">
      </div>
      
      <div class="form-group col-md-6">
        <label for="inputEmail4">facebook</label>
        <input type="text" class="form-control" id="" placeholder="facebook" name="facebook" value="{{$user->profile->facebook}}">
      </div>
      
      <div class="form-group col-md-6">
        <label for="inputEmail4">Twitter</label>
        <input type="text" class="form-control" id="" placeholder="Twitter" name="twitter" value="{{$user->profile->twitter}}">
      </div>
      
      <div class="form-group col-md-6">
        <label for="inputEmail4">about</label>
        <input type="text" class="form-control" id="" placeholder="about" name="about" value="{{$user->profile->about}}" >
      </div>
    </div>
    <button type="submit" class="btn btn-primary">update</button>
  </form>
@else
    
<form method="POST" action="{{route('profile')}}">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="">Name</label>
        <input type="text" class="form-control" id="" placeholder="name" name="name">
      </div>
      
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
      </div>
      
      <div class="form-group col-md-6">
        <label for="inputEmail4">facebook</label>
        <input type="text" class="form-control" id="" placeholder="facebook" name="facebook">
      </div>
      
      <div class="form-group col-md-6">
        <label for="inputEmail4">Twitter</label>
        <input type="text" class="form-control" id="" placeholder="Twitter" name="twitter">
      </div>
      
      <div class="form-group col-md-6">
        <label for="inputEmail4">Github</label>
        <input type="text" class="form-control" id="" placeholder="Github" name="github">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">create</button>
  </form>
@endif
@endsection