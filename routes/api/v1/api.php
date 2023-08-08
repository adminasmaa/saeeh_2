<?php

use Illuminate\Support\Facades\Route;

Route::post('/register', 'App\Http\Controllers\Api\AuthController@register');
Route::post('/login', 'App\Http\Controllers\Api\AuthController@login');
Route::post('/guest', 'App\Http\Controllers\Api\AuthController@guest');
Route::post('/activateRegister', 'App\Http\Controllers\Api\AuthController@activateRegister');
Route::post('/resendCodeRegister', 'App\Http\Controllers\Api\AuthController@resendCode');
Route::post('/forgetPassword', 'App\Http\Controllers\Api\AuthController@forgetPassword');
Route::post('/checkCodeForget', 'App\Http\Controllers\Api\AuthController@checkCode');
Route::post('/resetpassword', 'App\Http\Controllers\Api\AuthController@resetpassword');
Route::get('/countries', 'App\Http\Controllers\Api\CountryController@countries');

Route::group(['middleware' => 'auth:api'], function () {


    Route::get('/home/citydetails', 'App\Http\Controllers\Api\CategoryController@citydetails');
    Route::get('/categorydetail', 'App\Http\Controllers\Api\CategoryController@categorydetail');
    Route::get('/placessubcategory', 'App\Http\Controllers\Api\CategoryController@placessubcategory');
    Route::get('/CityListCategories', 'App\Http\Controllers\Api\CategoryController@CityListCategories');
    Route::get('/home/subcategories', 'App\Http\Controllers\Api\CategoryController@subcategories');

    // start palaces
    Route::get('/placedetail', 'App\Http\Controllers\Api\PlaceController@placedetail');
    Route::post('/searchPlace', 'App\Http\Controllers\Api\PlaceController@searchPlace');
    Route::get('/CustomerReviews', 'App\Http\Controllers\Api\PlaceController@CustomerReviews');
    Route::post('/PlaceFavourite', 'App\Http\Controllers\Api\PlaceController@PlaceFavourite');

    // start aquars
    Route::get('/Availabledays', 'App\Http\Controllers\Api\AqarController@Availabledays');
    Route::post('/AddAqar', 'App\Http\Controllers\Api\AqarController@AddAqar');
    Route::get('/detailAqar', 'App\Http\Controllers\Api\AqarController@detailAqar');
    Route::get('/AqarsReviews', 'App\Http\Controllers\Api\AqarController@AqarsReviews');
    Route::post('/AddNote', 'App\Http\Controllers\Api\AqarController@AddNote');
    Route::post('/AddComment', 'App\Http\Controllers\Api\AqarController@AddComment');
    Route::post('/AqarFavourite', 'App\Http\Controllers\Api\AqarController@AqarFavourite');
    Route::get('/AqarBookingDetail', 'App\Http\Controllers\Api\AqarController@AqarBookingDetail');

    //end aquars


    Route::post('/updateProfile', 'App\Http\Controllers\Api\AuthController@updateProfile');
    Route::post('/changepassword', 'App\Http\Controllers\Api\AuthController@changepassword');
    Route::post('/logout', 'App\Http\Controllers\Api\AuthController@logout');
    Route::post('/contactus', 'App\Http\Controllers\Api\ContactUsController@contactus');


    Route::get('/cities', 'App\Http\Controllers\Api\CityController@cities');
    Route::post('/CityFavourite', 'App\Http\Controllers\Api\CityController@CityFavourite');

    Route::get('/citydetail', 'App\Http\Controllers\Api\CityController@citydetail');
    Route::get('/countrydetail', 'App\Http\Controllers\Api\CountryController@countrydetail');

//show All News Brands
    Route::get('/listofBrands', 'App\Http\Controllers\Api\CategoryController@listofBrands');
    Route::get('/listofCars', 'App\Http\Controllers\Api\CategoryController@listofCars');
    Route::get('/listofCarswithsubcategory', 'App\Http\Controllers\Api\CategoryController@listofCarswithsubcategory');
    Route::get('/listofCategories', 'App\Http\Controllers\Api\CategoryController@listofCategories');
    Route::get('/listofAquarWithCategory', 'App\Http\Controllers\Api\CategoryController@listofAquarWithCategory');


    //cars models
    Route::post('/CarFavourite', 'App\Http\Controllers\Api\CarController@CarFavourite');
    Route::get('/CarsReviews', 'App\Http\Controllers\Api\CarController@CarsReviews');
    Route::get('/detailCar', 'App\Http\Controllers\Api\CarController@detailCar');



});


