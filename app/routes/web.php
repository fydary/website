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

Route::get('/', 'AppController@home');
Route::get('/terms-and-conditions', 'AppController@termsAndConditions');
Route::post('/contact', 'ContactController@postContact');
Route::get('/downloadWhitepaper', 'AppController@downloadWhitepaper');
Route::get('/changeLanguage', 'AppController@changeLanguage');
Route::get('/getTranslations', 'AppController@getTranslations');
Route::post('/changeMode', 'AppController@changeMode');
