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
Route::get('/survey-start', function () {
    return view('survey-start');
});
Route::get('/intro-section', function () {
    return view('intro-section');
});
Route::get('/intro-section2', function () {
    return view('intro-section2');
});
Route::get('/intro-section3', function () {
    return view('intro-section3');
});
