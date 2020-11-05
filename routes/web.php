<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function () {
    return '<h1>Hello World</h1>';
    // return 'Hello World';
});

Route::get('hi/{name}', function($name) {
    return '<h1>hi, ' . $name . '</h1>';
});

Route::get('user/{name?}', function($name = 'john') {
    return '<h1>你是' . $name . '</h1>';
});

Route::get('user/{id}/profile', function ($id = '1234') {
    return 'your id is ' . $id;
})->name('profile');