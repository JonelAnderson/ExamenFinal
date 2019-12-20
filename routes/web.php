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

Route::get('/candidato','CandidatoController@list' );
Route::post('/candidato/registrar','CandidatoController@store' );

Route::get('/elector','ElectorController@list' );
Route::post('/elector/registrar','ElectorController@store' );
