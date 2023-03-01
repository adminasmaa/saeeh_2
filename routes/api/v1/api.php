<?php

use Illuminate\Support\Facades\Route;

Route::post('/register', 'App\Http\Controllers\Api\AuthController@register');
Route::post('/login', 'App\Http\Controllers\Api\AuthController@login');
Route::post('/activateRegister', 'App\Http\Controllers\Api\AuthController@activateRegister');
Route::post('/resendCodeRegister', 'App\Http\Controllers\Api\AuthController@resendCode');
Route::post('/forgetPassword', 'App\Http\Controllers\Api\AuthController@forgetPassword');
Route::post('/checkCodeForget', 'App\Http\Controllers\Api\AuthController@checkCode');
Route::post('/resetpassword', 'App\Http\Controllers\Api\AuthController@resetpassword');
Route::get('/countries', 'App\Http\Controllers\Api\CountryController@countries');

Route::group(['middleware' => 'auth:api'], function () {


    Route::get('/home/categories', 'App\Http\Controllers\Api\CategoryController@categories');
    Route::get('/categorydetail', 'App\Http\Controllers\Api\CategoryController@categorydetail');
    Route::get('/home/subcategories', 'App\Http\Controllers\Api\CategoryController@subcategories');
    Route::get('/placedetail', 'App\Http\Controllers\Api\PlaceController@placedetail');
    Route::get('/Availabledays', 'App\Http\Controllers\Api\AqarController@Availabledays');
    Route::post('/AddAqar', 'App\Http\Controllers\Api\AqarController@AddAqar');


    Route::get('/cities', 'App\Http\Controllers\Api\CityController@cities');
    Route::get('/citydetail', 'App\Http\Controllers\Api\CityController@citydetail');
    Route::get('/countrydetail', 'App\Http\Controllers\Api\CountryController@countrydetail');
});


