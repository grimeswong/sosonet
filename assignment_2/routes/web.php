<?php

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

Use App\Post;
Use App\Comment; 
Use App\User;

/*** Resource Controller for Post ***/
Route::resource('post','PostController');

/*** Resource Controller for Comment ***/
Route::resource('comment','CommentController');


/*** Redirect to post index page ***/
Route::get('/', function () {
    return redirect('/post');
});

/*** Documentation Page ***/
Route::get('documentation', function() {
    return view('posts.doc');
});

/*** ER Diagram Page ***/
Route::get('erdiagram', function() {
    return view('posts.erdiagram');
});


/*** Test Purpose Only ***/
Route::get('test', function() {
    
    //Finding posts with user Bob id = 1, 
   $posts = User::find(1)->posts;
//   dd($posts);
   
   //Finding users 
   $users = Post::where('user_id', '=', '1')->get()->sortBy('user_id');
   dd($users);
   
});