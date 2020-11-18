@extends('layouts.app')

@section('content')
  <div class="jumbotron jumbotron-fluid">
    <h1 style="text-align:center ">Welcome To The Blog</h1>
  </div>  
    @if(count($posts) > 0)
        @foreach ($posts as $post)
        <div class="card mb-3" style="max-width: 1000px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img style="width:20rem" src="/storage/cover_images/{{$post->cover_image}}" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h5>
                <small>Written on {{$post->created_at}} by {{$post->user['name']}}</small>
              </div>
            </div>
          </div>
        </div>
            <br><br>
        @endforeach
        {{ $posts->links()}}
    @else
            <p>No posts found!</p>
    @endif
  
@endsection 
