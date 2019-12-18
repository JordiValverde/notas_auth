<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('/notas','NotaController');

Route::get('/home', 'HomeController@index')->name('home');
