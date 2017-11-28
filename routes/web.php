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

//pages
Route::get('/', 'UserController@index')->name('index');
Route::get('/add', 'UserController@add')->name('add');
Route::get('/details/{id}', 'UserController@details')->name('details');
Route::get('/edit/{id}', 'UserController@edit')->name('edit');


//operations
Route::post('/insert', 'UserController@insert')->name('insert');
Route::post('/update/{id}','UserController@update')->name('update');
Route::get('/delete/{id}', 'UserController@delete')->name('delete');

//for PDF
Route::get('userpdf', 'UserController@pdf');
Route::get('u_id/{id}', 'UserController@u_id');