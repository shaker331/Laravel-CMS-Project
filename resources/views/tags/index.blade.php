@extends('layouts.app')
@section('content')
<h1 class="text-center">View Tags</h1>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table" >
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">EDIT</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                        @foreach ($tags as $tag)

                  <tr>

                    <th scope="row">{{$tag->name}}</th>
                    <td>  <a class="btn btn-prima" href="{{route('tag.edit',['id'=>$tag->id])}}" role="button"><i class="fas fa-edit"></i></a>
                    </td>
                    <td>  <a class="btn btn-danger" href="{{route('tag.delete',['id'=>$tag->id])}}" role="button"><i class="fas fa-trash"></i></a>
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