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

Route::get('/', function() {
    return View::make('pages.home');
});

Route::get('about.html', function() {
    return View::make('pages.about');
});

Route::get('contact.html', function() {
    return View::make('pages.contact');
});

Route::post('/login', 'LoginController@ajaxRequestPost');

