<?php

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
Route::get('/singleton', "test@singleton");
Route::get('/voiture', "VoitureController@voiture");
Route::get('/voitureFacade', "VoitureFacadeController@voitureFacade");
Route::get('/voitureIterator', "VoitureController@voitureIterator");
Route::get('/voitureObserver', "VoitureController@voitureObserver");
Route::get('/voitureStrategy', "VoitureController@voitureStrategy");
Route::get('/voitureTemplate', "VoitureController@voitureTemplate");
Route::get('/voitureCommand', "VoitureController@voitureCommand");

