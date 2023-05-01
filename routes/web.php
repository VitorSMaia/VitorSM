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

Route::group(['middleware' => 'guest'], function() {
    Route::view('/','index')->name('/');
    Route::view('/login','auth.login')->name('login');
    Route::view('/register','auth.register')->name('register');
    Route::view('/post/{id?}','post')->name('post');
});

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'dash'], function() {
        Route::view('/','dashboard')->name('dashboard');
        Route::get('logout',[\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy'])->name('logout');
        Route::view('usuario', 'users.index')->name('users');
        Route::view('posts', 'posts.index')->name('posts');
        Route::view('paragraph', 'posts.paragraph.index')->name('paragraph');
        Route::view('paragraph/{id?}/edit', 'posts.paragraph.edit')->name('paragraph.edit');
        Route::view('paragraph/{idPost?}/create', 'posts.paragraph.edit')->name('paragraph.create');
        Route::view('xps', 'xps.index')->name('xps');
    });
});


Route::group(['middleware' => 'ip'], function() {
    Route::view('/pokemon','pokemon')->name('pokemon');
});
