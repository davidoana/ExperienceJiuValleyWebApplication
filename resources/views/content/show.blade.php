@extends('layouts.app')

@section('content')
        <a href="/content" class="btn btn-primary">Back</a>
        <h1>{{$content->title}}</h1>
        <img style=" " class="img-fluid" src="/img/{{$content->cover_image}}">
        <br><br>

        <div>
            {!!$content->body!!}
        </div>
       
        
@endsection 




