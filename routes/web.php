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

Auth::routes();

Route::get('/', 'SiteController@index')->name('site.index');
Route::get('/home', 'HomeController@index')->name('home.index');


Route::get('ajax-request', 'HomeController@ajaxRequest')->name('ajax.get');
Route::post('ajax-request', 'HomeController@ajaxRequestPost')->name('ajax.post');
