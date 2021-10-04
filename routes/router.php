<?php

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

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
//index
route::group([
    'as' => 'frontend.',
],function(){
    Route::get('/', 'App\Http\Controllers\home\HomeController@index')->name('index');
    Route::get('/news/{id}-{slug}', 'App\Http\Controllers\home\HomeController@show')->name('news');
    Route::get('/login', function () {return view('frontend/login');})->name('login')->middleware('checkAuth');
   
});
// index

// account
Route::post('/login', 'App\Http\Controllers\auth\LoginController@login')->name('auth.login');
Route::post('register', 'App\Http\Controllers\auth\LoginController@register')->name('auth.register');
Route::get('logout', 'App\Http\Controllers\auth\LoginController@logout')->name('auth.logout');
Route::get('edit-acount', 'App\Http\Controllers\auth\LoginController@editAccount')->name('auth.editAccount')->middleware('auth');
Route::post('upload-acount', 'App\Http\Controllers\auth\LoginController@uploadAccount')->name('auth.uploadAccount')->middleware('auth');
//end account

// comment frontend
Route::group([
    'prefix' => 'admin.comment',
    'as' => 'admin.comment.',
    'middleware' =>'auth',
], function () {
    Route::get('/', 'App\Http\Controllers\admin\CommentController@index')->name('index');
    Route::post('store', 'App\Http\Controllers\admin\CommentController@store')->name('store');
    Route::post('delete', 'App\Http\Controllers\admin\CommentController@delete')->name('delete');
});
// end comment frontend



//admin
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => 'checkAdmin',
], function () {
    Route::group([
        'prefix' => 'users',
        'as' => 'users.',
        'middleware' => 'checkRole',
    ], function () {
       
        Route::get('/', 'App\Http\Controllers\admin\UserController@index')->name('index');
        Route::post('store', 'App\Http\Controllers\admin\UserController@store')->name('store');
        Route::get('edit/{id}', 'App\Http\Controllers\admin\UserController@edit')->name('edit');
        Route::post('update', 'App\Http\Controllers\admin\UserController@update')->name('update');
        Route::post('delete/', 'App\Http\Controllers\admin\UserController@delete')->name('delete');
    });
    Route::group([
        'prefix' => 'post',
        'as' => 'post.',
    ], function () {
        Route::get('/', 'App\Http\Controllers\admin\PostController@index')->name('index');
        Route::post('store', 'App\Http\Controllers\admin\PostController@store')->name('store');
        Route::get('edit/{id}', 'App\Http\Controllers\admin\PostController@edit')->name('edit');
        Route::get('show/{id}-{slug}', 'App\Http\Controllers\admin\PostController@show')->name('show');
        Route::post('update', 'App\Http\Controllers\admin\PostController@update')->name('update');
        Route::post('delete', 'App\Http\Controllers\admin\PostController@delete')->name('delete');
    });
    Route::get('/comment', 'App\Http\Controllers\admin\CommentController@index')->name('comment.index');
  
});
//end admin