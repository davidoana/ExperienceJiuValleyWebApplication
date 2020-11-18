//PostsController
functia index
//$post = Post::all();
        //return Post::where('title', 'Post Two')->get();
        //$posts = DB::select('SELECT' * FROM posts');
        //$posts = Post::orderBy('title', 'desc')->take(1)->get();
        //$posts = Post::orderBy('title', 'asc')->get();

//layouts>app.blade.ph

//pages controller

public function getDashboard(){
  return view('dashboard');
}

public function getThingstodo(){
    return view('thingstodo');
}

 


//din dhow blade posts

@if(!Auth::guest())
            @if(!Auth::user()->id == $post->user_id)
                <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                {!!Form::open(['action' => [ 'PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                    {{From::hidden('_method', 'DELETE')}}
                    {{From::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
             @endif
        @endif






//dashboard.blade.php 
@extends('layouts.app')



  @section('content')
  <div class="container">
    

     <div class="panel-body">
       <a href="/posts/create" class="btn btn-primary">Create Post</a>
       <h3>Your blog posts</h3>
      @if(count($posts) > 0)
       <table class="table table-striped">
         <tr>
           <th>Title</th>
           <th></th>
           <th></th>
         </tr>
         @foreach($posts as $post)
          <tr>
            <td>{{$post->title}}</td>
            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
            <td>
                {!!Form::open(['action' => [ 'PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                  {{From::hidden('_method', 'DELETE')}}
                  {{From::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
            </td>
          </tr>
             
         @endforeach
       </table>
       @else 
        <p>Nu ai postari!</p>
       @endif
       @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status')}}
          </div>
        @endif
        You are logged in!
     </div>
  </div>
  <div>
</div>
</div>
  @endsection

















//migrations->create_posts_table.php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->mediumText('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}

//migration->add_user_id_to_posts.php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
    }
}



















//app blade vechi
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    
    <title>Experience Jiu Valley</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/thingstodo.css">
</head>
<body>
    @include('include.navbar')

    <div class="container">
        @include('include.messages')


    
       
         @yield('content')
            
            
          
        
    </div>
    
    
</body>
</html>

//Navbar vechi
<nav class="navbar navbar-expand-md navbar-dark bg-dark ">

    <a class="navbar-brand" href="#">Experience Jiu Valley</a>
    

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href=" {{ route('home') }} ">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href=" {{ route('thingstodo') }} ">Things to do</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/posts">Blog</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/posts/create">Creaza o postare!</a></li>
      </ul>


    </div>
</nav>

//routes vechi
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@getHome')->name('home'); 

Route::get('/thingstodo', 'PagesController@getThingstodo')->name('thingstodo'); 

Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
