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

Route::get('ary', function(){
    return 'bonjour mola! ';
});

Route::get('cedou', function(){
    return 'Dieu soit loué';
});

Route::get('ary/{name}', function($name){
    return'bonjour $name';
});