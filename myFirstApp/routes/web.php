<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sum;
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

//here test is url 
//here get method is used to represent a data 
Route::get('/',function(){
    return "Hi! Aditya. Welcome to Laravel.";
});

//returning a webpage demo.blade.php
Route::get('/demo', function () {
    return view('demo');
});

//returning a webpage demo with some data
// here "name" is compulsary, but "id" is optional which is represent by '?' symbol.
Route::get('/demo/{name}/{id?}', function ($name,$id=null) {
    echo "Hi! ".$name." Welcome to laravel."."<br>";
    echo "Id: ".$id;
});

//here webpage is carrying data 
Route::get('/bladeFunction/{name?}',function($name=null){
    $data=compact('name');
    return view('bladeFunction')->with($data);
});

//form
Route::get('/form',function() {
    return view('form');
 });
 
 
 Route::post("add",[sum::class,'addnum']);
 Route::view("add","add");
 
 
 Route::get('/placement',function() {
     return view('placement');
  });
 