<?php

use Illuminate\Support\Facades\Route;

Route::post('/register', 'App\Http\Controllers\Api\AuthController@register');
Route::post('/login', 'App\Http\Controllers\Api\AuthController@login');

Route::group(['middleware' => 'auth:api'], function () {

<<<<<<< HEAD

    Route::post('/resendCodeForUpdate', 'App\Http\Controllers\Api\AuthController@resendCodeForUpdate');

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
    Route::get('/AqarBookingDetail', 'App\Http\Controllers\Api\AqarController@listofbookings');
    Route::get('/BookingDetail', 'App\Http\Controllers\Api\AqarController@Detailofbookings');


    //end aquars


    Route::post('/updateProfile', 'App\Http\Controllers\Api\AuthController@updateProfile');
    Route::post('/changepassword', 'App\Http\Controllers\Api\AuthController@changepassword');
    Route::post('/changephone', 'App\Http\Controllers\Api\AuthController@changephone');
    Route::post('/confirmupdatephone', 'App\Http\Controllers\Api\AuthController@confirmupdatephone');
    Route::post('/logout', 'App\Http\Controllers\Api\AuthController@logout');
    Route::post('/contactus', 'App\Http\Controllers\Api\ContactUsController@contactus');
    Route::get('/contacts', 'App\Http\Controllers\Api\ContactUsController@contacts');
    Route::get('/notification', 'App\Http\Controllers\Api\ContactUsController@notification');
    Route::get('/termandcondition', 'App\Http\Controllers\Api\ContactUsController@termandcondition');
    Route::get('freq_question', 'App\Http\Controllers\Api\AuthController@freqquestion');


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
    Route::get('/listoffavourite', 'App\Http\Controllers\Api\CarController@listoffavourite');
    Route::get('/listofbookings', 'App\Http\Controllers\Api\AqarController@listofbookings');
    Route::post('/cancelbooking', 'App\Http\Controllers\Api\AqarController@cancelbooking');

//payment

    Route::post('/confirmPayment', 'App\Http\Controllers\Api\PaymentController@confirm_pay');
    Route::post('/GetPaymentStatus', 'App\Http\Controllers\Api\PaymentController@get_paymentstatus');

    //cars models
    Route::post('/CarFavourite', 'App\Http\Controllers\Api\CarController@CarFavourite');
    Route::get('/CarsReviews', 'App\Http\Controllers\Api\CarController@CarsReviews');
    Route::get('/detailCar', 'App\Http\Controllers\Api\CarController@detailCar');
    Route::post('/AddCarBooking', 'App\Http\Controllers\Api\CarController@AddCarBooking');


=======
>>>>>>> 1ad7ddf2dfd284c77150d436770c3233102ca1f0
});


