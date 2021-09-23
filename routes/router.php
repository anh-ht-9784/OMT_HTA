<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    return view('admin/post/index');
});
Route::get('/', function () {
    return view('admin/users/index');
});



Route::group([
    'prefix' => 'admin',
    'as' => 'admin.', 
], function () {
    Route::group([
        'prefix' => 'users',
        'as' => 'users.',     
    ], function () {
        Route::get('/', 'App\Http\Controllers\admin\UserController@index')->name('index');
        Route::post('store', 'App\Http\Controllers\admin\UserController@store')->name('store');
        Route::get('edit/{id}', 'App\Http\Controllers\admin\UserController@edit')->name('edit');
        Route::post('update/{id}', 'App\Http\Controllers\admin\UserController@update')->name('update');
        Route::post('delete/{id}', 'App\Http\Controllers\admin\UserController@delete')->name('delete');
    });
    Route::group([
        'prefix' => 'post',
        'as' => 'post.',
    ], function () {
        Route::get('/', 'App\Http\Controllers\admin\PostController@index')->name('index');
        Route::post('store', 'App\Http\Controllers\admin\PostController@store')->name('store');
        Route::get('edit/{id}', 'App\Http\Controllers\admin\PostController@edit')->name('edit');
        Route::get('show/{id}', 'App\Http\Controllers\admin\PostController@show')->name('show');
        Route::post('update/{id}', 'App\Http\Controllers\admin\PostController@update')->name('update');
        Route::post('delete', 'App\Http\Controllers\admin\PostController@delete')->name('delete');
    });
    Route::group([
        'prefix' => 'comment',
        'as' => 'comment.',
    ], function () {
        Route::get('/', 'App\Http\Controllers\admin\CommentController@index')->name('index');
        Route::post('store', 'App\Http\Controllers\admin\CommentController@store')->name('store');
        Route::post('delete', 'App\Http\Controllers\admin\CommentController@delete')->name('delete');
    });
});
