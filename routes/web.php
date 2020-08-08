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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function(){
//     return view ('home');
// });

Route::get('/Welcome', function(){
    return view('welcome');
});

Route::get('/Register', function(){
    return view('form');
});

Route::get('/Register' , 'RegisterController@form');
Route::post('/Welcome' , 'RegisterController@welcome');

Route::get('/master', 'RegisterController@master');
Route::get('/', 'RegisterController@tabel');
Route::get('/data-tables', 'RegisterController@dataTables');

//CRUD

Route::get('/pertanyaan/create', 'PertanyaanController@create');
Route::post('/pertanyaan', 'PertanyaanController@store');
Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@show');
Route::get('/pertanyaan/{pertanyaan_id}/edit', 'PertanyaanController@edit');
Route::put('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@update');
Route::delete('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@destroy');


// Route::get('/master', function(){
//     return view('adminLTE.master');
// });

// Route::get('/', function(){
//     return view ('items.tabel');
// });

// Route::get('/data-tables', function(){
//     return view ('items.dataTables');
// });