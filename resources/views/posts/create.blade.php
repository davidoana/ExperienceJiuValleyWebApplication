@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <h1 style="text-align:center">Share Your Experience</h1>
    </div>
        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text ('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>

            <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea ('body', '', ['id' => 'summary-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
            </div>

            <div class="form-group">
                {{Form::file('cover_image')}}
            </div>

            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}

        <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
            <script>
                CKEDITOR.replace( 'summary-ckeditor' );
            </script>
    
@endsection  

