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
    return view('_home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/volgabus', function () {
    return view('volgabus');
});

Route::get('/bonluck', function () {
    return view('bonluck');
});

Route::get('/kamaz', function () {
    return view('kamaz');
});

Route::get('/financing', function () {
    return view('financing');
});

Route::get('/electrical', function () {
    return view('elelctrical');
});

Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resources([
    'makes' => "MakeController"
]);

