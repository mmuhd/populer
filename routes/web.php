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

//Auth routes
Auth::routes(['verify' => true]);

Route::get('/profile/{user}', 'UserController@show')->name('profile');

Route::get('login/{provider}', 'SocialController@redirect');
Route::get('login/{provider}/callback','SocialController@Callback');


//Home route
Route::get('/', 'TopicController@index')->name('home');
Route::get('/app', 'TopicController@show');
Route::get('/app/{topics:slug}', 'TopicController@show')->name('app');
Route::get('/category/{category:name}', 'CategoryController@show')->name('category');
Route::get('/category_view/{category:id}', 'CategoryController@view')->name('category_view');
Route::get('/search', 'TopicController@search')->name('search');


Route::get('/home', function(){ return redirect(route('home')); });

Route::middleware('auth')->group(function(){
	Route::get('/submit', 'TopicController@create')->name('submit');
	Route::post('/submit', 'TopicController@store');
	Route::get('/category_create', 'CategoryController@create')->name('create_category');
	Route::post('/category_store', 'CategoryController@store')->name('store_category');
	Route::post('/app/delete/{topics}', 'TopicController@destroy');
	Route::post('/app/upvote/{topics:id}', 'TopicController@upvote');
	Route::get('/upvotes', 'TopicController@userUpvotes')->name('myupvotes');
	Route::post('/app/review/', 'TopicController@addReview')->name('addreview');
	Route::get('/notifications', 'UserController@notifications')->name('notifications');
	
});




