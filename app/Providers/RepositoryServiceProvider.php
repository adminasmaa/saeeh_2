<?php

namespace App\Providers;

use App\Repositories\Eloquent\AdvertisingRepository;
use App\Repositories\Eloquent\AnotherRoomRepository;
use App\Repositories\Eloquent\AqarBookingRepository;
use App\Repositories\Eloquent\BathRoomRepository;
use App\Repositories\Eloquent\BookingRepository;
use App\Repositories\Eloquent\BrandRepository;
use App\Repositories\Eloquent\CarCommentRepository;
use App\Repositories\Eloquent\CarRepository;
use App\Repositories\Eloquent\CategoryRepository;
use App\Repositories\Eloquent\CityRepository;
use App\Repositories\Eloquent\CondiotionTypeRepository;
use App\Repositories\Eloquent\ContactRepository;
use App\Repositories\Eloquent\CountryRepository;
use App\Repositories\Eloquent\CrewRepository;
use App\Repositories\Eloquent\FloorNumberRepository;
use App\Repositories\Eloquent\FloorRepository;
use App\Repositories\Eloquent\FreeServiceRepository;
use App\Repositories\Eloquent\KitchenRepository;
use App\Repositories\Eloquent\LaundryRepository;
use App\Repositories\Eloquent\MediatorRepository;
use App\Repositories\Eloquent\ProblemRepository;
use App\Repositories\Eloquent\QuestionRepository;
use App\Repositories\Eloquent\RoleRepository;
use App\Repositories\Eloquent\ServiceRepository;
use App\Repositories\Eloquent\SettingRepository;
use App\Repositories\Eloquent\UserRepository;
use App\Repositories\Eloquent\PlaceRepository;
use App\Repositories\Eloquent\PlaceCommentRepository;
use App\Repositories\Eloquent\AreaRepository;
use App\Repositories\Eloquent\MessageRepository;
use App\Repositories\Eloquent\NotificationRepository;
use App\Repositories\Eloquent\CommissionRepository;
use App\Repositories\Eloquent\CarPositionRepository;
use App\Repositories\Eloquent\PlaceTableRepository;
use App\Repositories\Eloquent\BalanceRepository;
use App\Repositories\Eloquent\InvoiceRepository;
use App\Repositories\Eloquent\PlaceCategoryRepository;
use App\Repositories\Eloquent\SectionRepository;
use App\Repositories\Eloquent\DepositRepository;
use App\Repositories\Eloquent\PoolRepository;
use App\Repositories\Eloquent\AqarCommentRepository;

use App\Repositories\Interfaces\ContactRepositoryInterface;
use App\Repositories\Interfaces\PoolRepositoryInterface;
use App\Repositories\Interfaces\AdvertisingRepositoryInterface;
use App\Repositories\Interfaces\AnotherRoomRepositoryInterface;
use App\Repositories\Interfaces\AqarBookingRepositoryInterface;
use App\Repositories\Interfaces\BathRoomRepositoryInterface;
use App\Repositories\Interfaces\BookingRepositoryInterface;
use App\Repositories\Interfaces\BrandRepositoryInterface;
use App\Repositories\Interfaces\CarCommentRepositoryInterface;
use App\Repositories\Interfaces\CarRepositoryInterface;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Repositories\Interfaces\CityRepositoryInterface;
use App\Repositories\Interfaces\ConditionTypeRepositoryInterface;
use App\Repositories\Interfaces\CountryRepositoryInterface;
use App\Repositories\Interfaces\CrewRepositoryInterface;
use App\Repositories\Interfaces\FloorNumberRepositoryInterface;
use App\Repositories\Interfaces\FloorRepositoryInterface;
use App\Repositories\Interfaces\FreeServiceRepositoryInterface;
use App\Repositories\Interfaces\KitchenRepositoryInterface;
use App\Repositories\Interfaces\LaundryRepositoryInterface;
use App\Repositories\Interfaces\MediatorRepositoryInterface;
use App\Repositories\Interfaces\AreaRepositoryInterface;
use App\Repositories\Interfaces\MessageRepositoryInterface;
use App\Repositories\Interfaces\NotificationRepositoryInterface;
use App\Repositories\Interfaces\CarPositionRepositoryInterface;
use App\Repositories\Interfaces\PlaceTableRepositoryInterface;
use App\Repositories\Interfaces\BalanceRepositoryInterface;
use App\Repositories\Interfaces\InvoiceRepositoryInterface;
use App\Repositories\Interfaces\PlaceCategoryRepositoryInterface;
use App\Repositories\Interfaces\SectionRepositoryInterface;
use App\Repositories\Interfaces\DepositRepositoryInterface;
use App\Repositories\Interfaces\AqarCommentRepositoryInterface;

use App\Repositories\Interfaces\CommissionRepositoryInterface;
use App\Repositories\Interfaces\PlaceRepositoryInterface;
use App\Repositories\Interfaces\PlaceCommentRepositoryInterface;
use App\Repositories\Interfaces\ProblemRepositoryInterface;
use App\Repositories\Interfaces\QuestionRepositoryInterface;
use App\Repositories\Interfaces\RoleRepositoryInterface;
use App\Repositories\Interfaces\ServiceRepositoryInterface;
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
        $this->app->bind(AreaRepositoryInterface::class, AreaRepository::class);
        $this->app->bind(ServiceRepositoryInterface::class, ServiceRepository::class);
        $this->app->bind(FloorRepositoryInterface::class, FloorRepository::class);
        $this->app->bind(FloorNumberRepositoryInterface::class, FloorNumberRepository::class);
        $this->app->bind(FreeServiceRepositoryInterface::class, FreeServiceRepository::class);
        $this->app->bind(KitchenRepositoryInterface::class, KitchenRepository::class);
        $this->app->bind(LaundryRepositoryInterface::class, LaundryRepository::class);
        $this->app->bind(CrewRepositoryInterface::class, CrewRepository::class);
        $this->app->bind(BathRoomRepositoryInterface::class, BathRoomRepository::class);
        $this->app->bind(AnotherRoomRepositoryInterface::class, AnotherRoomRepository::class);
        $this->app->bind(ConditionTypeRepositoryInterface::class, CondiotionTypeRepository::class);
        $this->app->bind(AqarBookingRepositoryInterface::class, AqarBookingRepository::class);
        $this->app->bind(CarPositionRepositoryInterface::class, CarPositionRepository::class);
        $this->app->bind(PlaceTableRepositoryInterface::class, PlaceTableRepository::class);
        $this->app->bind(BalanceRepositoryInterface::class, BalanceRepository::class);
        $this->app->bind(InvoiceRepositoryInterface::class, InvoiceRepository::class);
        $this->app->bind(PlaceCategoryRepositoryInterface::class, PlaceCategoryRepository::class);
        $this->app->bind(SectionRepositoryInterface::class, SectionRepository::class);
        $this->app->bind(DepositRepositoryInterface::class, DepositRepository::class);
        $this->app->bind(PoolRepositoryInterface::class, PoolRepository::class);

        $this->app->bind(PlaceRepositoryInterface::class, PlaceRepository::class);
        $this->app->bind(PlaceCommentRepositoryInterface::class, PlaceCommentRepository::class);
        $this->app->bind(ContactRepositoryInterface::class, ContactRepository::class);

        $this->app->bind(MessageRepositoryInterface::class, MessageRepository::class);
        $this->app->bind(NotificationRepositoryInterface::class, NotificationRepository::class);
        $this->app->bind(CommissionRepositoryInterface::class, CommissionRepository::class);

        $this->app->bind(AqarCommentRepositoryInterface::class, AqarCommentRepository::class);

        $this->app->bind(AqarSettingRepositoryInterface::class, AqarSettingRepository::class);

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
