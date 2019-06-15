@extends('layouts.app')
@section('content')
<h1 class="text-center">View All Users</h1>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table" >
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">EDIT</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                        @foreach ($users as $user)

                  <tr>
                      
                    <th scope="row">
                    <img src="" alt="" class="img-thumbnail">
                  </th>
                    <th scope="row">{{$user->name}}</th>
                    <td>
                         @if ($user->admin)
                            
                      <a class="btn btn-secondary" href="{{route('user.notadmin',['id'=>$user->id])}}" role="button">Not Admin </a>
                      
                         @else
                           <a class="btn btn-primary" href="{{route('user.admin',['id'=>$user->id])}}" role="button">Make Admin </a>
                         
                            @endif
                        </td>
                    <td>  <a class="btn btn-danger" href="{{route('user.delete',['id'=>$user->id])}}" role="button">Delte<i class="fas fa-trash"></i></a>
                    </td>
                    @endforeach

                  </tr>
                </tbody>
              </table>
    

<a class="btn btn-primary" href="/home" role="button">return</a>
        </div>
    </div>
    <br>
</div>
@endsection