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

// Route::get('/master', function(){
//     return view('adminLTE.master');
// });

// Route::get('/', function(){
//     return view ('items.tabel');
// });

// Route::get('/data-tables', function(){
//     return view ('items.dataTables');
// });