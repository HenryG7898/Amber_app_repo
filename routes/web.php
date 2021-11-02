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

//Route::get('/', function () {
//    return view('Addstudent');
//});
Route::get('/',[\App\Http\Controllers\StudentController::class,'view']);

//Add student
Route::get('/addstudent',[\App\Http\Controllers\StudentController::class,'form']);
Route::post('addstudent',[\App\Http\Controllers\StudentController::class,'store']);

//Add subject
Route::get('/subject',[\App\Http\Controllers\SubjectController::class,'show']);
Route::get('/addsubject',[\App\Http\Controllers\SubjectController::class,'view']);
Route::post('addsubject',[\App\Http\Controllers\SubjectController::class,'store']);

//edit student
Route::get('/editstudent/{id}',[\App\Http\Controllers\StudentController::class,'Edit']);
Route::post('updatestudent',[\App\Http\Controllers\StudentController::class,'updatestudent']);

//edit subject
Route::get('/editsubject/{id}',[\App\Http\Controllers\SubjectController::class,'Edit']);
Route::post('updatesubject',[\App\Http\Controllers\SubjectController::class,'updatesubject']);

//add student and their subject
Route::get('/subjectchoice',[\App\Http\Controllers\SubjectChoiceController::class,'show']);
Route::post('subjectchoice',[\App\Http\Controllers\SubjectChoiceController::class,'choice']);

//list of subject for each student
Route::get('/subjectlist/{id}',[\App\Http\Controllers\SubjectChoiceController::class,'subjectlist']);
Route::post('/subjectapprove/{id}',[\App\Http\Controllers\SubjectChoiceController::class,'approve'])->name('subjectapprove');
Route::post('/subjectdeny/{id}',[\App\Http\Controllers\SubjectChoiceController::class,'deny'])->name('subjectdeny');
