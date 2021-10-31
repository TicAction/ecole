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
*/

//Route::resource('/', 'StudieController');

Route::get('/','StudyController@index')->name('devoir');
Route::get('devoir/{study}','StudyController@show')->name('devoir.show');
Route::get('parent/{exam}','PexamController@show')->name('parent.exam');


//admin url
Route::resource('admin','AdminController')->middleware('auth');
Route::resource('exam','ExamController')->middleware('auth');
Route::resource('kid','KidController')->middleware('auth');
Route::resource('observation','ObservationController')->middleware('auth');


require __DIR__.'/auth.php';
