@extends('layouts.main_frontend')
@section('content')

    <div class="overlay-mobile"></div>

    <main>
        <!-- Desktop Breadcrumb -->
        <section class="py-md-4 py-2">
            <div class="container">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{route('Home')}}"> @lang('site.home') </a>
                        </li>

                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)"> {{$car->name ??  ''}} </a>
                        </li>
                        <li class="breadcrumb-item text-gray-4" aria-current="page">
                            حجز سيارة
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- section -->
        <section>
            <div class="container">
                <div class="row">
                    <div
                        class="col-12 d-md-flex align-items-center justify-content-between"
                    >
                        <div>
                            <h2 class="pt-3">{{$car->name ?? ''}}</h2>
                            <div class="d-flex align-items-center mt-3">
                                <div class="department-badge bg-main text-white">
                                    <div class="pt-1">5</div>
                                    <div>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <div
                                    class="number-ads gray-txt">@lang('site.comments') {{$car->carComment->count() ?? 0}}</div>
                            </div>
                        </div>
                        <div
                            class="badge-ads-details bg-main round-border d-flex align-items-center justify-content-center mt-md-0 mt-3"
                        >
                            @lang('site.id number')({{$car->id}})
                        </div>
                    </div>
                    <form class="form py-5" method="post" id="add-form">
                        <div class="col-12">

                            <div class="wizard-tabs d-flex justify-content-center py-3">
                                <div class="wizard">
                                    <div
                                        class="wizard-bar"
                                        style="width: 0"
                                        data-wizard-bar
                                    ></div>

                                    <ul class="wizard-list ps-0">
                                        <li>
                                            <div class="d-flex">
                                                <div class="wizard-item" data-wizard-item>
                                                    <div class="d-flex justify-content-center">
                                                        <div class="wizard-item-round">1</div>
                                                    </div>

                                                    <div>
                                                        <div class="wizard-item-text">
                                                        <span>
                                                        <i class="far fa-book-open"></i>
                                                        </span>

                                                            <span>@lang('site.book')</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-center">
                                                <div class="wizard-item" data-wizard-item>
                                                    <div class="d-flex justify-content-center">
                                                        <div class="wizard-item-round">2</div>
                                                    </div>

                                                    <div class="wizard-item-text">
                                                    <span>
                                                        <i class="far fa-user"></i>
                                                        </span>
                                                        <span>@lang('site.personal') </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-end">
                                                <div class="wizard-item" data-wizard-item>
                                                    <div class="d-flex justify-content-center">
                                                        <div class="wizard-item-round">3</div>
                                                    </div>

                                                    <div class="wizard-item-text">
                                                    <span>
                                                    <i class="far fa-check-circle"></i>
                                                    </span>
                                                        <span>@lang('site.reservation confirmation') </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-content-wizard py-lg-5 pt-3" data-form-tab>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div
                                            class="card-booking py-lg-4 px-lg-3 p-3 mb-lg-0 mb-3"
                                        >
                                            <div class="row">
                                                <div class="col-12">
                                                    <h2 class="mb-4 text-gray-2">@lang('site.Choose your reservation date')</h2>
                                                </div>
                                                <div class="col-12">
                                                    <div class="position-relative">
                                                        <input
                                                            placeholder="{{trans('site.reciept_date')}} "
                                                            type="text"
                                                            name="reciept_date"
                                                            id="datepicker"
                                                            required
                                                            class="calendar mb-4"
                                                        />
                                                        <span class="date-icon">
                                                        <i class="fal fa-calendar-alt"></i>
                                                      </span>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="position-relative">
                                                        <input
                                                            placeholder="{{trans('site.delivery_date')}} "
                                                            type="text"
                                                            name="delivery_date"
                                                            id="datepicker1"
                                                            required
                                                            class="calendar mb-4"
                                                        />
                                                        <span class="date-icon">
                                                        <i class="fal fa-calendar-alt"></i>
                                                      </span>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="position-relative">
                                                        <input
                                                            type="text"
                                                            name="delivery_place"
                                                            placeholder="{{trans('site.delivery place')}}"
                                                            class="form-control mb-4 date-input"
                                                        />
                                                        <span class="date-icon">
                                                        <i class="fal fa-map-marker-alt"></i>
                                                      </span>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="position-relative">
                                                        <input
                                                            placeholder=" {{trans('site.Receipt hour')}}"
                                                            type="text"
                                                            name="receipt_hour"
                                                            id="timepicker"
                                                            required
                                                            class="form-control mb-4 date-input"
                                                        />
                                                        <span class="date-icon">
                                                        <i class="fal fa-clock"></i>
                                                  </span>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="position-relative">
                                                        <input
                                                            placeholder="{{trans('site.delivery hour')}}"
                                                            type="text"
                                                            name="delivery_hour"
                                                            id="timepicker1"
                                                            required
                                                            class="form-control mb-4 date-input"
                                                        />
                                                        <span class="date-icon">
                                                        <i class="fal fa-clock"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <h2 class="text-gray-2 mb-3">
                                                        @lang('site.Reservation and cancellation conditions')
                                                    </h2>
                                                </div>
                                                <div class="col-12">
                                                    <div class="condition-content mb-3 pb-0">
                                                        <h2 class="condition-title text-second">
                                                            @lang('site.allownumber')
                                                        </h2>
                                                        <p class="details-sm-txt padding-right">
                                                            @lang('site.Please follow the site policy')
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="booking-main-img">
                                            <img src="{{asset('images/cars/'.$car->main_image_ads)}}"
                                                 onerror="this.src='{{FRONTASSETS}}/images/cars/car-wizard.png'"
                                                 alt=""/>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-content-wizard py-lg-5 pt-3" data-form-tab>
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="mb-3 text-gray-2"> @lang('site.details')</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="card-booking mb-5">
                                        <div
                                            class="d-flex justify-content-between py-lg-4 px-lg-3 p-3"
                                        >
                                            <div>
                                                <div class="d-flex align-items-center pb-3">
                                                <span class="time-ic">
                                                <i class="fal fa-calendar-alt"></i>
                                                </span>
                                                    <span class="text-second dd-txt pe-2">
                                                    @lang('site.Arrival dates')
                                                </span>
                                                </div>
                                                <div class="card-booking p-md-3 text-center">
                                                    {{--                                                <h2 class="mb-0 lh-1">22</h2>--}}
                                                    {{--                                                <div>مارس</div>--}}
                                                    <div class="text-gray-4 pt-1">
                                                        {{--                                                    {{$aquar->time_from ?? ''}}--}}
                                                        {{$car->car_delivery_date ?? ''}}
                                                    </div>

                                                </div>
                                            </div>
                                            <div>
                                                <div class="d-flex align-items-center pb-3">
                                                <span class="time-ic">
                                                <i class="fal fa-calendar-alt"></i>
                                                </span>
                                                    <span class="text-second dd-txt pe-2"
                                                    >@lang('site.Departure dates')</span
                                                    >
                                                </div>
                                                <div class="card-booking p-md-3 text-center">
                                                    {{--                                                <h2 class="mb-0 lh-1">29</h2>--}}
                                                    {{--                                                <div>مارس</div>--}}
                                                    <div class="text-gray-4 pt-1">
                                                        @lang('site.Please follow the site policy')
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="hr-saeeh my-0"/>
                                        <div class="d-flex justify-content-between py-1 px-3">
                                            <div class="d-flex align-items-center">
                                            <span class="booking-icon">
                                            <i class="fal fa-clock"></i>
                                                </span>
                                                <span class="text-second dd-txt pe-2">
                                                @lang('site.arrival hour')
                                                </span>
                                            </div>
                                            <div
                                                class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                            >
                                                03:13 مساء
                                            </div>
                                        </div>
                                        <hr class="hr-saeeh my-0"/>
                                        <div class="d-flex justify-content-between py-1 px-3">
                                            <div class="d-flex align-items-center">
                                            <span class="booking-icon">
                                            <i class="fal fa-clock"></i>
                                                </span>
                                                <span class="text-second dd-txt pe-2">
                                               @lang('site.Departure dates')
                                           </span>
                                            </div>
                                            <div
                                                class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                            >
                                                09:13 مساء
                                            </div>
                                        </div>
                                        <hr class="hr-saeeh my-0"/>
                                        <div class="d-flex justify-content-between py-1 px-3">
                                            <div class="d-flex align-items-center">
                                            <span class="booking-icon">
                                                <i class="fal fa-cloud-sun"></i>
                                                </span>
                                                <span class="text-second dd-txt pe-2"
                                                > @lang('site.day_numbers')
                                           </span>
                                            </div>
                                            <div
                                                class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                            >
                                                {{$car->day_count ?? 0 }}
                                            </div>
                                        </div>

                                    </div>

                                    <div class="card-booking mb-4">
                                        <div class="d-flex justify-content-between py-1 px-3">
                                            <div class="d-flex align-items-center">
                                            <span class="booking-icon">
                                            <i class="fal fa-car-side"></i>
                                                </span>
                                                <span class="text-second dd-txt pe-2">@lang('site.category')</span>
                                            </div>
                                            <div
                                                class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                            >
                                                {{$car->car_brand ?? ''}}
                                            </div>
                                        </div>
                                        <hr class="hr-saeeh my-0"/>
                                        <div class="d-flex justify-content-between py-1 px-3">
                                            <div class="d-flex align-items-center">
                                            <span class="booking-icon">
                                            <i class="fal fa-car-side"></i>
                                                </span>
                                                <span class="text-second dd-txt pe-2"> @lang('site.year') </span>
                                            </div>
                                            <div
                                                class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                            >
                                                {{$car->year ?? ''}}
                                            </div>
                                        </div>
                                        <hr class="hr-saeeh my-0"/>
                                        <div class="d-flex justify-content-between py-1 px-3">
                                            <div class="d-flex align-items-center">
                                        <span class="booking-icon">
                                        <i class="fal fa-palette"></i>
                                        </span>
                                                <span class="text-second dd-txt pe-2"> @lang('site.color') </span>
                                            </div>
                                            <div
                                                class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                            >
                                                {{$car->color ?? ''}}
                                            </div>
                                        </div>

                                        <hr class="hr-saeeh my-0"/>
                                        <div class="d-flex justify-content-between py-1 px-3">
                                            <div class="d-flex align-items-center">
                                            <span class="booking-icon">
                                            <i class="fal fa-car-side"></i>
                                                </span>
                                                <span class="text-second dd-txt pe-2">
                                                @lang('site.car_numbers')
                                                </span>
                                            </div>
                                            <div
                                                class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                            >
                                                <!-- {{$car->car_numbers ?? '0'}} -->
                                                {{$car->car_numbers ?? ''}}

                                            </div>
                                        </div>
                                        <hr class="hr-saeeh my-0"/>
                                        <div class="d-flex justify-content-between p-3">
                                            <div class="d-flex align-items-center">
                                        <span class="booking-icon">
                                        <i class="fal fa-pencil-alt text-second"></i>
                                        </span>
                                                <a class="text-second dd-txt pe-2 booking-link"
                                                >@lang('site.Modify your selection')
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <h2 class="mb-3 text-gray-2">@lang('site.Price summary')</h2>
                                    <div class="card-booking mb-4">
                                        <div class="d-flex justify-content-between py-1 px-3">
                                            <div class="d-flex align-items-center">
                                            <span class="booking-icon">
                                                 <i class="fal fa-wallet"></i>
                                                </span>
                                                <span class="text-second dd-txt pe-2"
                                                > @lang('site.price')
                            </span>
                                            </div>
                                            <div
                                                class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                            >
                                                {{$car->fixed_price ?? 0}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-booking mb-4 bg-light-orange">
                                        <div class="d-flex justify-content-between py-1 px-3">
                                            <div class="d-flex align-items-center">
                                            <span class="booking-icon">
                                                 <i class="fal fa-wallet text-main"></i>
                                                </span>
                                                <span class="text-gray-2 dd-txt pe-2"
                                                >@lang('site.Reservation deposit')
                            </span>
                                            </div>
                                            <div
                                                class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                            >
                                                {{$car->fixed_price ?? 0}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-booking mb-4 bg-light-blue">
                                        <div
                                            class="d-flex justify-content-between p-3"
                                        >
                                            <div class="d-flex align-items-center">
                                           <span class="booking-icon">
                                                 <i class="fal fa-wallet"></i>
                                                </span>
                                                <span class="text-gray-2 dd-txt pe-2"
                                                > @lang('site.price')@lang('site.total')
                                         </span>
                                            </div>
                                            <div
                                                class="text-gray-2 d-flex align-items-center justify-content-center summary-price"
                                            >
                                                {{$car->fixed_price  ?? 0}}
                                                <!-- $car->fixed_price + $car->changed_price ?? 0 -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="col-12">
                                        <div
                                            class="card card-department round-border mb-3 p-md-3 p-2"
                                        >
                                            <div class="row g-0">
                                                <div class="col-md-4 position-relative">
                                                    <div class="car-img">
                                                        <div>
                                                            <img
                                                                class="department-img-list of-cover"

                                                                src="{{asset('images/cars/'.$car->main_image_ads)}}"
                                                                onerror="this.src='{{FRONTASSETS}}/images/cars/car-card-1.png'"

                                                                alt="image 1"
                                                                loading="lazy"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div
                                                        class="card-body card-car-body position-relative"
                                                    >
                                                        <div
                                                            class="row justify-content-between align-items-center mb-3 small"
                                                        >
                                                            <div class="col-auto mb-lg-0 mb-3">
                                                <span class="text-main number-ads">
                                                    @lang('site.id number'){{$car->id}}</span>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div
                                                                    class="d-flex justify-content-center align-items-center"
                                                                >
                                                                    <div class="department-badge bg-main text-white">
                                                                        <div
                                                                            class="pt-1">{{$car->CarReview->count() ?? 0 }}</div>
                                                                        <div>
                                                                            <i class="fas fa-star"> </i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="number-ads gray-txt">
                                                                        {{$car->carComment->count() ?? 0}} @lang('site.comments')
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h2 class="card-title mb-2">
                                                            {{$car->name ?? ''}}
                                                        </h2>

                                                        <div class="gray-txt number-ads pb-2">
                                                        <span>
                                                                {!! html_entity_decode($car->description) !!}
                                                        </span>
                                                        </div>
                                                        <div
                                                            class="text-gray-2 number-ads d-flex align-items-center"
                                                        >

                                                            <div class="d-flex align-items-center">
                                                                <div class="ps-2 car-sid-icon">
                                                                    <i class="fal fa-car-side text-main"></i>
                                                                </div>
                                                                <div> {{$car->name ?? ''}}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-department round-border mb-3 p-3">
                                            <h2 class="mb-3">@lang('site.Information that may interest you')</h2>
                                            <p class="mb-2 department-txt">
                                                @lang('site.It may take a few days for the request to be approved')
                                            </p>
                                            <p class="department-txt">
                                                @lang('site.A reservation deposit is required to confirm the reservation')
                                            </p>
                                        </div>
                                        <div class="card-booking mb-4">
                                            <div
                                                class="d-flex justify-content-between py-md-4 px-md-3 p-3"
                                            >
                                                <div class="d-flex align-items-center">
                                                <span class="booking-icon-x">
                                                        <i class="far fa-user"></i>
                                                        </span>
                                                    <h2 class="text-gray-2 pe-2 mb-0">
                                                        <a href="{{route('sitelogin')}}"
                                                           class="text-second"> @lang('site.login') </a>
                                                        للحجز بتفاصيل محفوظه او
                                                        <a href="{{route('registers')}}"
                                                           class="text-second">@lang('site.register')</a>
                                                        جديد
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>

                                        <h2 class="mb-2 text-gray-2">@lang('site.special requests')</h2>
                                        <div class="d-flex align-items-center">
                                        <span class="booking-icon-x">
                                                <i class="far fa-question-circle"></i>
                                                </span>
                                            <h2 class="text-second pe-2 mb-0">
                                                @lang('site.If you have an inquiry')
                                            </h2>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                            <textarea
                                                class="form-control txtarea-booking px-3 py-2 mt-2"
                                                placeholder="{{trans('site.If you have an inquiry')}}"
                                                rows="4"
                                                name="note"
                                            ></textarea>

                                                <input type="hidden" name="car_id" value="{{$car->id}}">
                                                <input type="hidden" name="fixed_price"
                                                       value="{{$car->fixed_price ?? 0}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-content-wizard py-lg-5 pt-3" data-form-tab>
                            <div class="row">
                                {{--                                    <div class="col-12">--}}
                                {{--                                        <div class="card-notification bg-light-blue p-3 mb-4">--}}
                                {{--                                            <h2 class="text-center mb-0">--}}
                                {{--                                                تم تسجيل طلب الحجز بنجاح بانتظار الموافقه من قبل--}}
                                {{--                                                المالك--}}
                                {{--                                            </h2>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                <div class="col-12">
                                    <div
                                        class="booking-dd-btn d-flex align-items-center justify-content-center mb-1"
                                    >
                                        <a href="#">
                                        <span>
                                            <i class="fal fa-book-open"></i>
                                            </span>
                                            <span class="pe-2">@lang('site.My bookings')</span>
                                            <span class="pe-3">
                                                <i class="fas fa-chevron-left"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="mybookinghiddenSS">
                                <div class="col-12">

                                    @foreach($bookings->unique('car_id') as $book)
                                        @if(!empty($book->car))
                                            <div
                                                class="card card-department round-border mb-4 p-md-3 p-2"
                                            >
                                                <div class="row g-0">
                                                    <div class="col-lg-3 position-relative">
                                                        <div class="cars-img">
                                                            <div>
                                                                <img
                                                                    class="department-img-list of-cover"

                                                                    src="{{asset('images/cars/'.$book->car->main_image_ads)}}"
                                                                    onerror="this.src='{{FRONTASSETS}}/images/cars/car-card-1.png'"

                                                                    alt="image 1"
                                                                    loading="lazy"
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div
                                                            class="card-body position-relative px-lg-3 px-0"
                                                        >
                                                            <div
                                                                class="row justify-content-between align-items-center mb-3 small"
                                                            >
                                                                <div class="col-auto mb-lg-0 mb-2">
                                                            <span class="text-main number-ads"
                                                            > @lang('site.id number')({{$book->car->id}})</span
                                                            >
                                                                </div>
                                                                <div class="col-auto">
                                                                    <div
                                                                        class="d-flex justify-content-center align-items-center"
                                                                    >
                                                                        <div
                                                                            class="department-badge bg-main text-white">
                                                                            <div class="pt-1">5</div>
                                                                            <div>
                                                                                <i class="fas fa-star"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="number-ads gray-txt">

                                                                            {{$book->car->carComment->count() ?? 0}} @lang('site.comments')
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h2 class="card-title mb-2">

                                                                {{$book->car->name ?? ''}}

                                                            </h2>

                                                            <div class="gray-txt number-ads pb-2">
                                                        <span
                                                        >{{$book->car->description ?? ''}}
                                                        </span>
                                                            </div>
                                                            <div
                                                                class="text-gray-2 number-ads d-flex align-items-center py-2"
                                                            >
                                                                <div>
                                                                    <div class="ps-2 car-sid-icon">
                                                                        <i class="fal fa-car-side text-main"></i>
                                                                    </div>
                                                                    <span>{{$book->car->car_numbers}} @lang('site.car_numbers')</span>
                                                                </div>
                                                                <div class="padding-35">
                                                            <span class="ps-2 car-sid-icon">
                                                            <i class="fa-light fa-clock text-main"></i>
                                                            </span>
                                                                    <span> @lang('site.year')</span>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="d-flex align-items-center justify-content-between mt-2"
                                                            >
                                                                <div class="department-price">
                                                                    <span
                                                                        class="text-gray-2"> @lang('site.price'):</span>
                                                                    <span class="fw-bold text-main"
                                                                    >{{$book->car->fixed_price ?? 0 }}
                                                         </span>
                                                                </div>
                                                            </div>
                                                            <!--waiting -->
                                                            <div
                                                                class="d-lg-flex align-items-center justify-content-between mt-3 flex-wrap"
                                                            >
                                                                <div class="d-lg-flex align-items-center">
                                                                    <div
                                                                        class="round-border bg-light-orange ms-2"
                                                                    >
                                                                        <div
                                                                            class="d-flex justify-content-between py-1 px-md-3 px-2"
                                                                        >
                                                                            <div class="d-flex align-items-center">
                                                                            <span class="car-sid-icon">
                                                                            <i class="fal fa-wallet text-main"></i>
                                                                            </span>
                                                                                <span class="text-gray-2 pe-1 ps-2"
                                                                                > @lang('site.Reservation deposit'):
                                                                     </span>
                                                                            </div>
                                                                            <div
                                                                                class="text-gray-2 d-flex align-items-center justify-content-center fw-bold span-14"
                                                                            >
                                                                                {{$book->car->fixed_price ?? 0 }}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="round-border bg-light-yellow my-lg-0 my-3"
                                                                    >
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center py-1 px-md-3 px-2"
                                                                        >
                                                                            <div class="d-flex align-items-center">
                                                                        <span class="text-gray-2">
                                                                            @lang('site.booking_status'):
                                                                        </span>
                                                                                <span class="px-1 car-sid-icon">
                                                                        <i class="fal fa-clock text-main"></i>
                                                                        </span>
                                                                            </div>
                                                                            <div class="text-gray-2 fw-bold span-14">
                                                                                @lang('site.Awaiting approval by the owner')
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="details-btn d-flex align-items-center justify-content-center margin-top-12"
                                                                >
                                                                    <a href="{{route('detailbooking',$book->id)}}">@lang('site.Reservation information')</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        @endif
                                    @endforeach


                                </div>
                            </div>

                            <div id="mybooking1" class="row mybooking1" style="display: none">
                            </div>
                        </div>

                        <div class="d-sm-flex align-items-center justify-content-between wizaredd">
                            <button
                                class="booking-now-btn "
                                type="button"
                                data-btn-previous="true"
                            >
                                @lang('site.previous')
                                <span class="pe-3"
                                > <i class="fas fa-chevron-left"></i></span>
                            </button>
                            <button
                                class="booking-now-btn "
                                type="button"
                                data-btn-next="true"
                            >
                                @lang('site.next')
                                <span class="pe-3"
                                > <i class="fas fa-chevron-left"></i></span>
                            </button>
                            <button
                                class="booking-now-btn"
                                type="button"
                                data-btn-submit="true"

                                type="submit" id="btn-submit"
                            >
                                @lang('site.save')
                                <span class="pe-3">
                        <i class="fas fa-chevron-left"></i>
                        </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </section>
        <!-- /section -->
    </main>

    <br><br>

@endsection

@section('scripts')
    <script>


        $(document).ready(function () {
            $("#btn-submit").click(function (e) {
                var formData = $("#add-form").serialize();
                console.log('formData', formData);
                var url = '{{route('addbookingcar')}}';


                // $.ajax({
                //     type: "GET",
                //     url: url,
                //     data: formData,
                //     dataType: "json",
                //     // encode: true,
                // }).done(function (data) {
                //     console.log("datalist",data);
                //     $("#mybookinghiddenSS").hide();
                //     // ('.carhidden').html(data);
                //     $("#mybooking1").show();
                //     $("#mybooking1").html(data);
                //     // console.log("response", data);
                // });


                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},

                    type: "GET",
                    url: url,
                    data: formData,
                    processData: false,
                    contentType: false,

                    success: function (response) {
                        // Handle success response

                        console.log("success", response);
                        $("#mybookinghiddenSS").hide();
                        // ('.carhidden').html(data);
                        $("#mybooking1").show();
                        $("#mybooking1").html(response);
                        // console.log("response", data);
                    },
                    error: function (xhr, textStatus, error) {
                        // Handle error response

                        console.log("errrorrrs".error);
                    }
                });

            });
        });
    </script>

@endsection
