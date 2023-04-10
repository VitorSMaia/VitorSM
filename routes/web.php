<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RedirectIfAuthenticated;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::group(['middleware' => 'auth'], function () {
    Route::get('logout',function(){
        \Illuminate\Support\Facades\Auth::logout();
        redirect()->route('/');
    })->name('logout');

    Route::view('/dash','dashboard')->name('dashboard');
    Route::group(['prefix' => 'dash'], function() {
        Route::view('usuario', 'users.index')->name('users');
        Route::view('posts', 'posts.index')->name('posts');
        Route::view('paragraph', 'posts.paragraph.index')->name('paragraph');
        Route::view('paragraph/post/{id?}', 'posts.paragraph.index')->name('paragraph');
        Route::view('paragraph/{id?}/edit', 'posts.paragraph.edit')->name('paragraph.edit');
        Route::view('paragraph/{idPost?}/create', 'posts.paragraph.edit')->name('paragraph.create');

    });
});

    Route::view('/login','auth.login')->name('login');
Route::group(['middleware' => 'guest'], function() {
    Route::view('/register','auth.register')->name('register');
});

Route::group(['middleware' => 'ip'], function() {
    Route::view('/','index')->name('/');
    Route::view('/post','posts')->name('post');
    Route::view('/post/{id}','post')->name('post');
});




