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

/*** Resource Controller for User ***/
Route::resource('user','UserController');

/*** Resource Controller for Friend ***/
Route::resource('friend','FriendshipController');

/*** Redirect to the search result page ***/
Route::get('search', 'UserController@searchresult');

/*** Redirect to the add freindship ***/ 
Route::get('addFriend', 'UserController@addFriend');

/*** Redirect to the remove freindship ***/ 
Route::get('addFriend', 'UserController@removeFriend');

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


/*** Authentication ***/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



/*** Test Purpose Only ***/
Route::get('test', function() {
    
});
   



