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
Route::get('/producto', 'PagesController@producto')->name('producto');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('registro', function () {
    return view('registro');
})->name('registro');

Route::get('quienes', function () {
return view('quienes');
})->name('quienes');


Route::get('politicas', function () {
    return view('politicas');
    })->name('politicas');

Route::get('producto', function () {
    return view('producto');
    })->name('producto');    

  
Route::get('ejemplo', function () {
    return view('ejemplo');
    });

Route::get('ejemplo2', function () {
    return view('ejemplo2');
    });



