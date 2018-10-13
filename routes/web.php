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

Route::get('/', function () {
    return view('home');
})->middleware('verified');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('signin', function () {
    return view('login');
});

Route::get('signup', function () {
    return view('auth.register');
});

Route::get('/dashboard', function () {
    if(Auth::user()->type == 'contestor'){
        return view('contestor.dashboard');
    } elseif(Auth::user()->type == 'contestant'){
        return view('contestant.dashboard');
    } elseif(Auth::user()->type == 'admin'){
        return view('admin.dashboard');
    }
})->middleware('verified');
