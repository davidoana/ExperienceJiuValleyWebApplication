@extends('layouts.app')

@section('content')
   <div class="jumbotron jumbotron-fluid">
      <h1 style="text-align:center">Things To Do In Jiu Valley</h1>
   </div>
        @if(count($content) > 0)
            @foreach ($content as $content)

            <div class="card mb-3" style="max-width: 1000px;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img style="width:20rem" src="/img/{{$content->cover_image}}" class="card-img" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h3 class="card-title"><a href="/content/{{$content->id}}">{{ $content->title }}</a></h3>
                      <p class="card-text"><a href="/content/{{$content->id}}">{{$content->body }}</a></p>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
        @else 
                <p>No post found!</p>
        @endif
@endsection




 