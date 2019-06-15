@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                        <div class="row">
                          <div class="col-sm">
                           
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header text-center">Users</div>
                        <div class="card-body">
                          <h5 class="card-title text-center">{{$user_count}}</h5>
                        </div>
                      </div>
                          </div>
                          <div class="col-sm">
                            
                      <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-header text-center">Posts</div>
                        <div class="card-body">
                          <h5 class="card-title text-center">{{$post_count}}</h5>
                        </div>
                      </div>
                          </div>
                          <div class="col-sm">
                           
                      <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                        <div class="card-header text-center">Category</div>
                        <div class="card-body">
                          <h5 class="card-title text-center">{{$cat_count}}</h5>
                        </div>
                      </div>
                          </div>
                        </div>
                      </div>
                      <div class="container">
                        <div class="row">
                          <div class="col-sm">

                            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                                <div class="card-header text-center">Tags</div>
                                <div class="card-body">
                                  <h5 class="card-title text-center">{{$tag_count}}</h5>
                                </div>
                              </div>                          </div>
                          <div class="col-sm">

                            <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                                <div class="card-header text-center">Trushed posts</div>
                                <div class="card-body">
                                  <h5 class="card-title">Warning card title</h5>
                                </div>
                              </div>    
                         </div>
                         
                         <div class="col-sm">

                            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                                <div class="card-header text-center">Tags</div>
                                <div class="card-body">
                                  <h5 class="card-title text-center">{{$tag_count}}</h5>
                                </div>
                              </div>                          </div>
                      </div> 
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
