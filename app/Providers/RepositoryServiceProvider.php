<?php

namespace App\Providers;

use App\Repositories\Eloquent\AdvertisingRepository;
use App\Repositories\Eloquent\BookingRepository;
use App\Repositories\Eloquent\BrandRepository;
use App\Repositories\Eloquent\CarCommentRepository;
use App\Repositories\Eloquent\CarRepository;
use App\Repositories\Eloquent\CategoryRepository;
use App\Repositories\Eloquent\CityRepository;
use App\Repositories\Eloquent\CountryRepository;
use App\Repositories\Eloquent\MediatorRepository;
use App\Repositories\Eloquent\ProblemRepository;
use App\Repositories\Eloquent\QuestionRepository;
use App\Repositories\Eloquent\RoleRepository;
use App\Repositories\Eloquent\SettingRepository;
use App\Repositories\Eloquent\UserRepository;
use App\Repositories\Eloquent\PlaceRepository;
use App\Repositories\Interfaces\AdvertisingRepositoryInterface;
use App\Repositories\Interfaces\BookingRepositoryInterface;
use App\Repositories\Interfaces\BrandRepositoryInterface;
use App\Repositories\Interfaces\CarCommentRepositoryInterface;
use App\Repositories\Interfaces\CarRepositoryInterface;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Repositories\Interfaces\CityRepositoryInterface;
use App\Repositories\Interfaces\CountryRepositoryInterface;
use App\Repositories\Interfaces\MediatorRepositoryInterface;

use App\Repositories\Interfaces\PlaceRepositoryInterface;
use App\Repositories\Interfaces\ProblemRepositoryInterface;
use App\Repositories\Interfaces\QuestionRepositoryInterface;
use App\Repositories\Interfaces\RoleRepositoryInterface;
use App\Repositories\Interfaces\SettingRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind(CountryRepositoryInterface::class, CountryRepository::class);
        $this->app->bind(CityRepositoryInterface::class, CityRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(RoleRepositoryInterface::class, RoleRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(QuestionRepositoryInterface::class, QuestionRepository::class);
        $this->app->bind(ProblemRepositoryInterface::class, ProblemRepository::class);
        $this->app->bind(MediatorRepositoryInterface::class, MediatorRepository::class);
        $this->app->bind(SettingRepositoryInterface::class, SettingRepository::class);
        $this->app->bind(AdvertisingRepositoryInterface::class, AdvertisingRepository::class);
        $this->app->bind(BrandRepositoryInterface::class, BrandRepository::class);
        $this->app->bind(CarRepositoryInterface::class, CarRepository::class);
        $this->app->bind(CarCommentRepositoryInterface::class, CarCommentRepository::class);
        $this->app->bind(BookingRepositoryInterface::class, BookingRepository::class);

        $this->app->bind(PlaceRepositoryInterface::class, PlaceRepository::class);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
