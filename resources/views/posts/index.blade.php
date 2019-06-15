@extends('layouts.app')
@section('content')
<h1 class="text-center">View Posts</h1>

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
                        @foreach ($posts as $post)

                  <tr>
                    <th scope="row">
                    <img src="{{$post->featured}}" alt="{{$post->title}}" class="img-thumbnail" height="200" width="200">
                  </th>
                    <th scope="row">{{$post->title}}</th>

                    <td>  <a class="btn btn-primary" href="{{route('post.edit',['id'=>$post->id])}}" role="button"><i class="fas fa-edit"></i></a>
                    </td>
                    <td>  <a class="btn btn-danger" href="{{route('post.delete',['id'=>$post->id])}}" role="button"><i class="fas fa-trash"></i></a>
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