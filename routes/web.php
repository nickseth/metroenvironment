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
/*-------Basic page routes ------------*/

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
Route::get('/personal-level-start', function () {
    return view('personal-level-start');
});
Route::get('/personal-level-step1', function () {
    return view('personal-level-step1');
});
Route::get('/personal-level-step2', function () {
    return view('personal-level-step2');
});
Route::get('/personal-level-step21', function () {
    return view('personal-level-step21');
});
Route::get('/personal-level-step4', function () {
    return view('personal-level-step4');
});
Route::get('/personal-level-step19', function () {
    return view('personal-level-step19');
});

Route::get('/personal-level-step18', function () {
    return view('personal-level-step18');
});

/*-------Basic page routes ------------*/

/*-------DB API routes ------------*/

Route::post('/survey_submission','Survey_Submission_Controller@index');

/*-------DB API routes ------------*/

