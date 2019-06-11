@extends('layouts.app')
   
@section('content')

<section id="tabs" class="project-tab">

            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                         <h1>Manage Posts</h1>
            <a href="{{ route('posts.create') }}" class="btn btn-success" style="float: right">Add New Post</a>
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All Posts</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">My Posts</a>
                               
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="container">
        <div class="row">
            @foreach($posts as $post)
             <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
     
                    <div class="card-block">
                        <h4 class="card-title">{{ $post->title }}</h4>
                        <div class="meta">
                           
                        </div>
                        <div class="card-text">
                           {{ $post->body }}
                        </div>
                    </div>
                    <div class="card-footer">
                        <a>By - {{ $post->user->name }}</a>
                         <a href="{{ route('posts.show', $post->id) }}"><button class="btn btn-secondary float-right btn-sm">View</button></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </div>

                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                           <div class="container">
        <div class="row">
            @foreach($user_post as $user_post)
             <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
     
                    <div class="card-block">
                        <h4 class="card-title">{{ $user_post->title }}</h4>
                        <div class="meta">
                           
                        </div>
                        <div class="card-text">
                           {{ $user_post->body }}
                        </div>
                    </div>
                    <div class="card-footer">
                         <a>By - {{ $user_post->user->name }}</a>
                        <a href="{{ route('posts.show', $user_post->id) }}"> <button class="btn btn-secondary float-right btn-sm">View</button></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection