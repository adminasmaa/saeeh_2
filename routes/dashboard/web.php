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
use App\Http\Controllers\Dashboard\PlaceCommentController;
use App\Http\Controllers\Dashboard\AquarCategoryController;
use App\Http\Controllers\Dashboard\AqarController;
use App\Http\Controllers\Dashboard\AreaController;
use App\Http\Controllers\Dashboard\ServiceController;
use App\Http\Controllers\Dashboard\FloorController;
use App\Http\Controllers\Dashboard\FloorNumberController;
use App\Http\Controllers\Dashboard\FreeServiceController;
use App\Http\Controllers\Dashboard\KitchenController;
use App\Http\Controllers\Dashboard\LaundryController;
use App\Http\Controllers\Dashboard\CrewController;
use App\Http\Controllers\Dashboard\BathRoomController;
use App\Http\Controllers\Dashboard\AnotherRoomController;
use App\Http\Controllers\Dashboard\ConditionTypeController;
use App\Http\Controllers\Dashboard\MessageController;
use App\Http\Controllers\Dashboard\NotificationController;
use App\Http\Controllers\Dashboard\AqarBookingController;
use App\Http\Controllers\Dashboard\CommissionController;
use App\Http\Controllers\Dashboard\CarPositionController;
use App\Http\Controllers\Dashboard\PlaceTableController;
use App\Http\Controllers\Dashboard\BalanceController;
use App\Http\Controllers\Dashboard\InvoiceController;
use App\Http\Controllers\Dashboard\PlaceCategoryController;
use App\Http\Controllers\Dashboard\SectionController;
use App\Http\Controllers\Dashboard\DepositController;
use App\Http\Controllers\Dashboard\PoolController;
use App\Http\Controllers\Dashboard\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix(LaravelLocalization::setLocale())->middleware('localeSessionRedirect', 'localizationRedirect', 'localeViewPath')->group(function () {
    Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function () {

        Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        //users
        Route::resource('users', UserController::class);

        //roles
        Route::resource('roles', RoleController::class)->except(['show']);

        //countries
        Route::resource('countries', CountryController::class);

        //cities
        Route::get('addCity', 'App\Http\Controllers\Dashboard\CountryController@AddCity')->name('addCity');
        Route::resource('cities', CityController::class);

        //categories
        Route::resource('categories', CategoryController::class);

        //DeleteSubCategories
        Route::get('DeleteSubCategories/{id}', 'App\Http\Controllers\Dashboard\CategoryController@destroy')->name('DeleteSubCategories');

        //cars
        Route::resource('cars', CarController::class);

        //brands
        Route::resource('brands', BrandController::class);

       //car_comments
        Route::resource('car_comments', CarCommentController::class);

       //bookings
        Route::resource('bookings', BookingController::class);

        //places
        Route::resource('places', PlaceController::class);
        Route::resource('place_categories', PlaceCategoryController::class);

        //place_comments
        Route::resource('place_comments', PlaceCommentController::class);

        //aqars
        Route::resource('aqars', AqarController::class);

        //aquarcategories
        Route::resource('aquarcategories', AquarCategoryController::class);
        Route::resource('aquarbooking', AqarBookingController::class);

        //services
        Route::resource('services', ServiceController::class);
        Route::resource('free_services', FreeServiceController::class);
        Route::resource('kitchens', KitchenController::class);
        Route::resource('laundries', LaundryController::class);
        Route::resource('crews', CrewController::class);
        Route::resource('bathrooms', BathRoomController::class);
        Route::resource('another_rooms', AnotherRoomController::class);
        Route::resource('conditioning_types', ConditionTypeController::class);

        //car_positions
        Route::resource('car_positions', CarPositionController::class);

        //place_tables
        Route::resource('place_tables', PlaceTableController::class);

        //floors
        Route::resource('floors', FloorController::class);
        Route::resource('floor_numbers', FloorNumberController::class);

        //areas
        Route::resource('areas', AreaController::class);

        //pools
        Route::resource('pools', PoolController::class);

        //messages
        Route::resource('message', MessageController::class);

        //notifications
        Route::resource('notifications', NotificationController::class);

        //commissions
        Route::resource('commissions', CommissionController::class);

        //questions
        Route::resource('questions', QuestionController::class);

        //problems
        Route::resource('problems', ProblemController::class);

        //Mediators
        Route::resource('mediators', MediatorController::class);

        //Setting
        Route::resource('settings', SettingController::class);

        //advertising
        Route::resource('advertising', AdvertisingController::class);
        
        //balances
        Route::resource('balances', BalanceController::class);

        //invoices
        Route::resource('invoices', InvoiceController::class);

        Route::get('/aqars/getsetting/{id}','App\Http\Controllers\Dashboard\AqarController@getsetting');
        //deposits
        Route::resource('deposits', DepositController::class);

        //sections
        Route::resource('sections', SectionController::class);

    }); //end of dashboard routes
});
