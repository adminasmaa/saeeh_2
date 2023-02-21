<?php


use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\CountryController;
use App\Http\Controllers\Dashboard\CityController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\QuestionController;
use App\Http\Controllers\Dashboard\ProblemController;
use App\Http\Controllers\Dashboard\MediatorController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\AdvertisingController;
use App\Http\Controllers\Dashboard\BrandController;
use App\Http\Controllers\Dashboard\CarController;
use App\Http\Controllers\Dashboard\CarCommentController;
use App\Http\Controllers\Dashboard\BookingController;
use App\Http\Controllers\Dashboard\PlaceController;
use App\Http\Controllers\Dashboard\AquarCategoryController;

use App\Http\Controllers\Dashboard\UserController;
use Illuminate\Support\Facades\Route;


Route::prefix(LaravelLocalization::setLocale())->middleware('localeSessionRedirect', 'localizationRedirect', 'localeViewPath')->group(function () {
    Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function () {
        //users
        Route::resource('users', UserController::class);
        //roles
        Route::resource('roles', RoleController::class)->except(['show']);
        //countries
        Route::resource('countries', CountryController::class);
        Route::get('addCity', 'App\Http\Controllers\Dashboard\CountryController@AddCity')->name('addCity');
        //cities
        Route::resource('cities', CityController::class);
        //categories
        Route::resource('categories', CategoryController::class);

        //DeleteSubCategories
        Route::get('DeleteSubCategories/{id}', 'App\Http\Controllers\Dashboard\CategoryController@destroy')->name('DeleteSubCategories');

        //questions
        Route::resource('questions', QuestionController::class);

        //problems
        Route::resource('problems', ProblemController::class);


        //Mediators
        Route::resource('mediators', MediatorController::class);


        //advertising
        Route::resource('advertising', AdvertisingController::class);

        //brands
        Route::resource('brands', BrandController::class);


       //cars
        Route::resource('cars', CarController::class);

       //car_comments
        Route::resource('car_comments', CarCommentController::class);


       //bookings
        Route::resource('bookings', BookingController::class);


        //Setting
        Route::resource('settings', SettingController::class);

        //cars
        Route::resource('places', PlaceController::class);


        //aquarcategories
        Route::resource('aquarcategories', AquarCategoryController::class);


    }); //end of dashboard routes
});
