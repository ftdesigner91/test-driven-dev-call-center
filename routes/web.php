<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/customers', 'CustomersController@index');
Route::get('/customers/create', 'CustomersController@create');
Route::get('/customers/{customer}', 'CustomersController@show');
Route::get('/customers', 'CustomersController@store');