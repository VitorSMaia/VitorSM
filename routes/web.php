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
    Route::get('logout',[\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy'])->name('logout');


    Route::group(['prefix' => 'dash'], function() {
        Route::view('/','dashboard')->name('dashboard');
        Route::view('usuario', 'users.index')->name('users');
        Route::view('posts', 'posts.index')->name('posts');
        Route::view('paragraph', 'posts.paragraph.index')->name('paragraph');
        Route::view('paragraph/{id?}/edit', 'posts.paragraph.edit')->name('paragraph.edit');
        Route::view('paragraph/{idPost?}/create', 'posts.paragraph.edit')->name('paragraph.create');
        Route::view('xps', 'xps.index')->name('xps');

    });
});

Route::view('/login','auth.login')->name('login');

Route::group(['middleware' => 'guest'], function() {
    Route::view('/register','auth.register')->name('register');
});

Route::group(['middleware' => 'ip'], function() {
    Route::view('/pokemon','pokemon')->name('pokemon');
});




