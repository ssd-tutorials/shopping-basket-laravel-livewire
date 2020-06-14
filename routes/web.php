<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ProductController@index');
Route::get('/product/{product}', 'ProductController@show');
