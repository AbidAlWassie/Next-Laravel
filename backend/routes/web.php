<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/user', 'UsersController@index');

Route::get('/user/{id}', 'UsersController@show');
