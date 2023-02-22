<?php

use Illuminate\Support\Facades\Route;

Route::post('/register', 'App\Http\Controllers\Api\AuthController@register');
Route::post('/login', 'App\Http\Controllers\Api\AuthController@login');
Route::post('/activateRegister', 'App\Http\Controllers\Api\AuthController@activateRegister');
Route::post('/resendCodeRegister', 'App\Http\Controllers\Api\AuthController@resendCode');
Route::post('/forgetPassword', 'App\Http\Controllers\Api\AuthController@forgetPassword');
Route::post('/checkCodeForget', 'App\Http\Controllers\Api\AuthController@checkCode');
Route::post('/resetpassword', 'App\Http\Controllers\Api\AuthController@resetpassword');
Route::get('/home/categories/{city_id}', 'App\Http\Controllers\Api\CategoryController@categories');
Route::get('/home/subcategories/{cat_id}', 'App\Http\Controllers\Api\CategoryController@subcategories');
Route::get('/categorydetail/{id}', 'App\Http\Controllers\Api\CategoryController@categorydetail');


Route::get('/cities/{id}', 'App\Http\Controllers\Api\CityController@cities');
Route::get('/citydetail/{id}', 'App\Http\Controllers\Api\CityController@citydetail');
Route::get('/countries', 'App\Http\Controllers\Api\CountryController@countries');
Route::get('/countrydetail/{id}', 'App\Http\Controllers\Api\CountryController@countrydetail');



