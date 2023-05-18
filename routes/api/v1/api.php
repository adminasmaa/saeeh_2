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
    Route::get('/CityListCategories', 'App\Http\Controllers\Api\CategoryController@CityListCategories');
    Route::get('/home/subcategories', 'App\Http\Controllers\Api\CategoryController@subcategories');
    Route::get('/placedetail', 'App\Http\Controllers\Api\PlaceController@placedetail');
    Route::post('/searchPlace', 'App\Http\Controllers\Api\PlaceController@searchPlace');
    Route::get('/Availabledays', 'App\Http\Controllers\Api\AqarController@Availabledays');
    Route::post('/AddAqar', 'App\Http\Controllers\Api\AqarController@AddAqar');
    Route::get('/detailAqar', 'App\Http\Controllers\Api\AqarController@detailAqar');
    Route::post('/AddNote', 'App\Http\Controllers\Api\AqarController@AddNote');
    Route::get('/AqarBookingDetail', 'App\Http\Controllers\Api\AqarController@AqarBookingDetail');
    Route::post('/updateProfile', 'App\Http\Controllers\Api\AuthController@updateProfile');
    Route::post('/changepassword', 'App\Http\Controllers\Api\AuthController@changepassword');
    Route::post('/logout', 'App\Http\Controllers\Api\AuthController@logout');
    Route::post('/contactus', 'App\Http\Controllers\Api\ContactUsController@contactus');


    Route::get('/cities', 'App\Http\Controllers\Api\CityController@cities');
    Route::get('/citydetail', 'App\Http\Controllers\Api\CityController@citydetail');
    Route::get('/countrydetail', 'App\Http\Controllers\Api\CountryController@countrydetail');

//show All News Brands
    Route::get('/listofBrands', 'App\Http\Controllers\Api\CategoryController@listofBrands');
    Route::get('/listofCars', 'App\Http\Controllers\Api\CategoryController@listofCars');
    Route::get('/listofAquarWithCategory', 'App\Http\Controllers\Api\CategoryController@listofAquarWithCategory');

});


