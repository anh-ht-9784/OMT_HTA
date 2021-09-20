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
    return view('frontend/index');
});
// Route::get('/admin/users', 'App\Http\Controllers\admin\UserController@index');


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
});
