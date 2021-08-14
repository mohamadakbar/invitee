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

//Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/dashboard', 'MainController@index')->name('home');
Route::get('/form', 'FormController@index')->name('form');
Route::get('/create/', 'FormController@create')->name('form.create');
Route::get('/edit/{id}', 'FormController@edit')->name('form.edit');
Route::post('/update/{id}', 'FormController@update')->name('form.update');
Route::post('/store', 'FormController@store')->name('form.store');

//Route::get('/ucapan', 'UcapanController@index')->name('ucapan.index');
Route::post('/storeucapan', 'UcapanController@store')->name('ucapan.store');

Route::get('/u/{nama}', 'TemplateController@index')->name('undangan');
