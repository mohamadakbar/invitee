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
     return view('web.main');
 });

//Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/dashboard', 'MainController@index')->name('home');

// FORM
Route::get('/form', 'FormController@index')->name('form');
Route::get('/form/create/', 'FormController@create')->name('form.create');
Route::get('/form/edit/{slug}', 'FormController@edit')->name('form.edit');
Route::post('/form/update/{slug}', 'FormController@update')->name('form.update');
Route::post('/form/store', 'FormController@store')->name('form.store');

//UCAPAN
//Route::get('/ucapan', 'UcapanController@index')->name('ucapan.index');
Route::post('/storeucapan', 'UcapanController@store')->name('ucapan.store');

//TEMPLATE
Route::get('/u/{nama}', 'UndanganController@index')->name('undangan');
Route::get('/demo1/', 'TemplateController@template2')->name('template1');
Route::get('/demo2/', 'TemplateController@template2')->name('template2');

// USERS
Route::get('users', 'UserController@index')->name('users');
Route::get('users/{slug}/edit', 'UserController@edit');
Route::post('users/{slug}', 'UserController@update')->name('users.update');

// PAKET
Route::get('paket', 'PaketController@index')->name('paket');
//Route::post('paket', 'PaketController@index')->name('paket.delete');
//Route::get('paket', 'PaketController@index')->name('paket.edit');
//Route::post('paket', 'PaketController@index')->name('paket.store');

// Menu
Route::get('menu', 'MenuTemplateController@index')->name('menu');
//Route::post('menu', 'MenuTemplateController@index')->name('menu.delete');
//Route::get('menu', 'MenuTemplateController@index')->name('menu.edit');
//Route::post('menu', 'MenuTemplateController@index')->name('menu.store');
