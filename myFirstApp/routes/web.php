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

//here test is url 
//here get method is used to represent a data 
Route::get('/hello',function(){
    return "Hi! Aditya. Welcome to Laravel.";
});

//returning a webpage demo.blade.php
Route::get('/demo', function () {
    return view('demo');
});