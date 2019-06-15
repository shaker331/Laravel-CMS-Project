@extends('layouts.app')
@section('content')
<form method="POST" action="{{route('user.store')}}">
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
    </div>
    <button type="submit" class="btn btn-primary">create</button>
  </form>
@endsection