<?php


use App\Http\Controllers\Dashboard\RoleController;

//
use App\Http\Controllers\Dashboard\UserController;
use Illuminate\Support\Facades\Route;


Route::prefix(LaravelLocalization::setLocale())->middleware('localeSessionRedirect', 'localizationRedirect', 'localeViewPath')->group(function () {
    Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function () {
//
        Route::resource('users', UserController::class);
//
        Route::resource('roles', RoleController::class)->except(['show']);

    }); //end of dashboard routes
});
