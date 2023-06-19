<?php

use Illuminate\Support\Facades\Route;
use App\Greeting;
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

Route::get('create-greeting', function () {
 $greeting = new Greeting;
 $greeting->body = 'Hello, World!';
 $greeting->save();
});
Route::get('first-greeting', function () {
 return Greeting::first()->body;
});


Route::get('/', function () {
 return view('welcome');
});
Route::get('welcome', function () {
    return view('welcome');
   });
Route::get('about', function () {
 return view('about');
});
Route::get('afspraak', function () {
 return view('afspraak');
});
Route::get('demo', function () {
 return view('demo');
});
