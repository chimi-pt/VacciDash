<?php

use App\Http\Controllers\PostList;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('redirects','App\Http\Controllers\HomeController@index');

Route::group(['middleware' => 'auth'], function () {
   // Route::resource('tasks', \App\Http\Controllers\TasksController::class);

    Route::resource('users', \App\Http\Controllers\UsersController::class);
});

Route::get('/post-list', 'App\Http\Controllers\PostList')->name('post-list');
Route::get('/posts', 'App\Http\Controllers\HomeController@index')->name('posts');

// Route::resource('post-list', \App\Http\Controllers\PostList::class);
