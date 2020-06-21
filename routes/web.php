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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('post', 'PostController')->middleware('auth')->middleware('guest');
Route::post('/upload', 'PostController@upload');
Route::get('/user/{id}', 'UserController@show');
// Route::resource('/user', 'UserController', ['only' => ['show']]);

Route::get('login/{provider}',          'Auth\SocialAccountController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\SocialAccountController@handleProviderCallback');

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     if ( Auth::check() )
//     {
//         return view('post.index');
//     } else{
//         return view('welcome');
//     }
// });
