<?php

use Illuminate\Support\Facades\Route;

Route::post('/register', 'App\Http\Controllers\Api\AuthController@register');
Route::post('/login', 'App\Http\Controllers\Api\AuthController@login');
Route::get('/cities/{id}', 'App\Http\Controllers\Api\CityController@cities');
Route::get('/citydetail/{id}', 'App\Http\Controllers\Api\CityController@citydetail');
Route::get('/countries', 'App\Http\Controllers\Api\CountryController@countries');
Route::get('/countrydetail/{id}', 'App\Http\Controllers\Api\CountryController@countrydetail');



