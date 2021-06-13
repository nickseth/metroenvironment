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

Route::get('/personal-level-step3', function () {
    return view('personal-level-step3');
});
Route::get('/personal-level-step21', function () {
    return view('personal-level-step21');
});

Route::get('/personal-level-step4', function () {
    return view('personal-level-step4');
});

Route::get('/personal-level-step5', function () {
    return view('personal-level-step5');
});

Route::get('/personal-level-step6', function () {
    return view('personal-level-step6');
});

Route::get('/personal-level-step7', function () {
    return view('personal-level-step7');
});

Route::get('/personal-level-step8', function () {
    return view('personal-level-step8');
});

Route::get('/personal-level-step9', function () {
    return view('personal-level-step9');
});

Route::get('/personal-level-step10', function () {
    return view('personal-level-step10');
});


Route::get('/personal-level-step11', function () {
    return view('personal-level-step11');
});

Route::get('/personal-level-step12', function () {
    return view('personal-level-step12');
});

Route::get('/personal-level-step13', function () {
    return view('personal-level-step13');
});

Route::get('/personal-level-step14', function () {
    return view('personal-level-step14');
});

Route::get('/personal-level-step15', function () {
    return view('personal-level-step15');
});

Route::get('/personal-level-step16', function () {
    return view('personal-level-step16');
});

Route::get('/personal-level-step17', function () {
    return view('personal-level-step17');
});

Route::get('/personal-level-step18', function () {
    return view('personal-level-step18');
});

Route::get('/personal-level-step19', function () {
    return view('personal-level-step19');
});

Route::get('/personal-level-step20', function () {
    return view('personal-level-step20');
});

Route::get('/personal-level-step21', function () {
    return view('personal-level-step21');
});

Route::get('/final-level-start', function () {
    return view('final-level-start');
});

Route::get('/final-level-step1', function () {
    return view('final-level-step1');
});
Route::get('/final-level-step2', function () {
    return view('final-level-step2');
});
Route::get('/final-level-step3', function () {
    return view('final-level-step3');
});

Route::get('/final-level-step4', function () {
    return view('final-level-step4');
});

Route::get('/final-level-step5', function () {
    return view('final-level-step5');
});
Route::get('/final-level-step6', function () {
    return view('final-level-step6');
});
Route::get('/final-level-step7', function () {
    return view('final-level-step7');
});
Route::get('/final-level-step8', function () {
    return view('final-level-step8');
});
Route::get('/final-level-step9', function () {
    return view('final-level-step9');
});
Route::get('/final-level-step10', function () {
    return view('final-level-step10');
});
Route::get('/final-level-step11', function () {
    return view('final-level-step11');
});
Route::get('/final-level-step12', function () {
    return view('final-level-step12');
});
Route::get('/final-level-step13', function () {
    return view('final-level-step13');
});
Route::get('/final-level-step14', function () {
    return view('final-level-step14');
});
Route::get('/final-level-last', function () {
    return view('final-level-last');
});


/*-------Basic page routes ------------*/

/*-------DB API routes ------------*/

Route::post('/survey_submission','Survey_Submission_Controller@index');

/*-------DB API routes ------------*/

