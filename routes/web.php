<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    // return view('greeting', ['name' => 'James']);
});

Route::get('hello', function () {
    return '<h1>Hello World</h1>';
    // return 'Hello World';
});

Route::get('hi/{name}', function($name) {
    return '<h1>hi, ' . $name . '</h1>';
});

Route::get('user/{name?}', function($name = 'john') {
    // return '<h1>你是' . $name . '</h1>';
    return view('greeting', ['name' => $name]);
});

Route::post('profile', function(Request $req) {
    return $req->all();
});

Route::get('hellopage', function($name = 'john') {
    // return 'Hello, ' . $_GET['name'];
    return view('greeting');
});

Route::get('home', function() {
    return view('child');
});

Route::get('alert', function() {
    return view('alert');
});