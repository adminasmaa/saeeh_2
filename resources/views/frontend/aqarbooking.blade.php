@extends('layouts.main_frontend')
@section('content')
    <main>
        <!-- Desktop Breadcrumb -->
        <section class="py-md-4 py-2">
            <div class="container">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{route('Home')}}">@lang('site.home')</a>
                        </li>

                        <li class="breadcrumb-item text-gray-4" aria-current="page">
                            @lang('site.book')
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
                            <h2 class="pt-3">{{$aqar->details ?? ''}}</h2>
                            <div class="d-flex align-items-center mt-3">
                                <div class="department-badge bg-main text-white">
                                    <div
                                        class="pt-1">{{ isset($aqar->aqarReview) ? $aqar->aqarReview->avg('rate') : 0 }}</div>
                                    <div>
                                    <i class="fas fa-star"></i>
                                    </div>
                                </div>

                                <div
                                    class="number-ads gray-txt"> {{ isset($aqar->aqarComment) ? $aqar->aqarComment->count() : 0 }} @lang('site.comments') </div>
                            </div>
                        </div>
                        <div
                            class="badge-ads-details bg-main round-border d-flex align-items-center justify-content-center  mt-md-0 mt-3"
                        >
                            @lang('site.id number')({{$aqar->id}})
                        </div>
                    </div>
                    <div class="col-12">

                        <form class="form py-5" method="post" id="add-form">

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
                                                        <div class="wizard-item-round">
                                                            1
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <div class="wizard-item-text">
                                                        <span>
                                                        <i class="far fa-book-open"></i>
                                                        </span>

                                                            <span class="wizard-item-t">@lang('site.book')</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </li>
                                        <li>

                                            <div class="d-flex justify-content-center">
                                                <div class="wizard-item" data-wizard-item>
                                                    <div class="d-flex justify-content-center">
                                                        <div class="wizard-item-round">
                                                            2
                                                        </div>
                                                    </div>

                                                    <div class="wizard-item-text">
                                                        <span>
                                                        <i class="far fa-user"></i>
                                                        </span>
                                                        <span class="wizard-item-t"> @lang('site.personal') </span>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>

                                            <div class="d-flex justify-content-end">
                                                <div
                                                    class="wizard-item "
                                                    data-wizard-item
                                                >
                                                    <div class="d-flex justify-content-center wizard-end">
                                                        <div class="wizard-item-round">
                                                            3
                                                        </div>
                                                    </div>

                                                    <div class="wizard-item-text">
                                                    <span>
                                                    <i class="far fa-check-circle"></i>
                                                    </span>
                                                    <span class="wizard-item-t">
                                                    @lang('site.reservation confirmation')

                                                    </span>
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
                                        <div class="card-booking py-lg-4 px-lg-3 p-3 mb-lg-0 mb-3">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h2 class="mb-4 text-gray-2">
                                                        @lang('site.Choose your reservation date')
                                                    </h2>
                                                </div>
                                                <div class="col-12">
                                                    <div class="position-relative">
                                                        <input placeholder=" {{trans('site.reciept_date')}}" type="text"
                                                               name="reciept_date" id="datepicker"
                                                               class="calendar mb-4 reciept_date">
                                                        <span class="date-icon">
                                                        <i class="fal fa-calendar-alt"></i>
                                                      </span>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="position-relative">

                                                        <input placeholder=" {{trans('site.delivery_date')}}"
                                                               type="text"
                                                               name="delivery_date" id="datepicker1"
                                                               class="calendar mb-4 deliverydate">
                                                               <span class="date-icon">
                                                                 <i class="fal fa-calendar-alt"></i>
                                                               </span>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <h2 class="text-gray-2 mb-3">
                                                        @lang('site.Reservation and cancellation conditions')
                                                    </h2>
                                                </div>
                                                <div class="col-12">
                                                    <div class="condition-content condition-contentt mb-3  pb-0">
                                                        <h2 class="condition-title text-second">
                                                            @lang('site.allownumber')
                                                            <div
                                                                class="badge-condition round-border d-flex justify-content-center align-items-center"
                                                            >
                                                                5
                                                            </div>
                                                        </h2>
                                                        <p class="details-sm-txt padding-right">
                                                            @lang('site.Please follow the site policy')
                                                        </p>
                                                    </div>
                                                    <div class="condition-content condition-contentt mb-3 pb-0">
                                                        <h2 class="condition-title text-second">
                                                            @lang('site.allownumber')
                                                            <div
                                                                class="badge-condition round-border d-flex justify-content-center align-items-center"
                                                            >
                                                                5
                                                            </div>
                                                        </h2>
                                                        <p class="details-sm-txt padding-right">
                                                            @lang('site.Please follow the site policy')
                                                        </p>
                                                    </div>
                                                    <div class="condition-content condition-contentt mb-5 pb-0">
                                                        <h2 class="condition-title text-second">
                                                            @lang('site.allownumber')
                                                            <div
                                                                class="badge-condition round-border d-flex justify-content-center align-items-center"
                                                            >
                                                                5
                                                            </div>
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
                                            <img
                                                src="{{asset('images/aqars/'.$aqar->main_image)}}"
                                                onerror="this.src='{{FRONTASSETS}}/images/cars/car-wizard.png'"
                                                alt=""
                                            />
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
                                            <div class="d-flex justify-content-between py-lg-4 px-lg-3 p-3" >
                                                <div>
                                                    <div class="d-flex align-items-center pb-3">
                                                    <span class="time-ic">
                                                    <i class="fal fa-calendar-alt"></i>
                                                    </span>
                                                        <span class="text-second dd-txt pe-2"
                                                        > @lang('site.time_from')</span
                                                        >
                                                    </div>
                                                    <div class="card-booking p-md-3 text-center">

                                                        <div class="text-gray-4 pt-1">
                                                            {{$aqar->time_from ??''}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                               <div class="d-flex align-items-center pb-3">
                                                <span class="time-ic">
                                                <i class="fal fa-calendar-alt"></i>
                                                </span>
                                                    <span class="text-second dd-txt pe-2">
                                                        @lang('site.time_to')
                                                     </span>
                                               </div>
                                                    <div class="card-booking p-md-3 text-center">
                                                        <div class="text-gray-4 pt-1">
                                                            {{$aqar->time_to ??''}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="hr-saeeh my-0"/>
                                            <div
                                                class="d-flex justify-content-between py-2 px-3"
                                            >
                                                <div class="d-flex align-items-center">
                                                <span class="booking-icon">
                                                <i class="fal fa-map-marker-alt"></i>
                                                </span>
                                                 <span class="text-second dd-txt pe-2">
                                                @lang('site.country')
                                                 </span>
                                                </div>
                                                <div
                                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                                >
                                                    {{$aqar->country->name ?? ''}}
                                                </div>
                                            </div>
                                            <hr class="hr-saeeh my-0"/>
                                            <div
                                                class="d-flex justify-content-between py-2 px-3"
                                            >
                                                <div class="d-flex align-items-center">
                                                <span class="booking-icon">
                                                <i class="fal fa-map-marker-alt"></i>
                                                </span>
                                                    <span class="text-second dd-txt pe-2">
                                            @lang('site.city')
                                                </span>
                                                </div>
                                                <div
                                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                                >
                                                    {{$aqar->city->name ?? ''}}
                                                </div>
                                            </div>
                                            <hr class="hr-saeeh my-0"/>
                                            <div
                                                class="d-flex justify-content-between py-2 px-3"
                                            >
                                            <div class="d-flex align-items-center">
                                            <span class="booking-icon">
                                            <i class="fal fa-lamp"></i>
                                            </span>
                                                    <span class="text-second dd-txt pe-2"
                                                    > @lang('site.hallnumber')
                                             </span>
                                                </div>
                                                <div
                                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                                >
                                                    {{$aqar->hallnumber ?? ''}}
                                                </div>
                                            </div>
                                            <hr class="hr-saeeh my-0"/>
                                            <div
                                                class="d-flex justify-content-between py-2 px-3"
                                            >
                                                <div class="d-flex align-items-center">
                                                <span class="booking-icon">
                                                  <i class="fal fa-user"></i>
                                                </span>
                                                    <span class="text-second dd-txt pe-2"
                                                    > @lang('site.personnumber')</span
                                                    >
                                                </div>
                                                <div
                                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                                >
                                                    {{$aqar->personnumber ?? 0}}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-booking mb-4">
                                            <div
                                                class="d-flex justify-content-between py-2 px-3"
                                            >
                                                <div class="d-flex align-items-center">
                                                <span class="booking-icon">
                                                <i class="fal fa-cloud-sun"></i>
                                                </span>
                                                    <span
                                                        class="text-second dd-txt pe-2">@lang('site.day_count') </span>
                                                </div>
                                                <div
                                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                                >
                                                    <p id="daycount">


                                                    </p>
                                                </div>
                                            </div>
                                            <hr class="hr-saeeh my-0"/>
                                            <div
                                                class="d-flex justify-content-between py-2 px-3"
                                            >
                                                <div class="d-flex align-items-center">
                                                <span class="booking-icon">
                                                <i class="fal fa-bed"></i>
                                                </span>
                                                    <span class="text-second dd-txt pe-2">
                                                    @lang('site.normalroom')
                                                    </span>
                                                </div>
                                                <div
                                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                                >
                                                    {{$aqar->normalroom ?? 0}}
                                                </div>
                                            </div>
                                            <hr class="hr-saeeh my-0"/>
                                            <div
                                                class="d-flex justify-content-between py-2 px-3"
                                            >
                                                <div class="d-flex align-items-center">
                                                <span class="booking-icon">
                                                <i class="fal fa-user"></i>
                                             </span>
                                                 <span class="text-second dd-txt pe-2">
                                                @lang('site.personnumber')
                                                </span>
                                                </div>
                                                <div
                                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                                >
                                                    {{$aqar->personnumber ?? 0}}
                                                </div>
                                            </div>
                                            <hr class="hr-saeeh my-0"/>
                                            <div
                                                class="d-flex justify-content-between py-2 px-3"
                                            >
                                                <div class="d-flex align-items-center">
                                                <span class="booking-icon">
                                                <i class="fal fa-bath"></i>
                                               </span>
                                                    <span class="text-second dd-txt pe-2"
                                                    >@lang('site.swimmingpool')
                                               </span>
                                                </div>
                                                <div
                                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                                >
                                                    {{$aqar->swimmingpool ?? 0}}
                                                </div>
                                            </div>
                                            <hr class="hr-saeeh my-0"/>
                                            <div
                                                class="d-flex justify-content-between py-2 px-3"
                                            >
                                                <div class="d-flex align-items-center">
                                                <span class="booking-icon">
                                                <i class="fal fa-building"></i>
                                           </span>
                                                    <span class="text-second dd-txt pe-2">
                                                @lang('site.unitnumber')
                                                </span>
                                                </div>
                                                <div
                                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                                >
                                                    {{$aqar->unitnumber ?? 0}}
                                                </div>
                                            </div>
                                            <hr class="hr-saeeh my-0"/>

                                        </div>
                                        <h2 class="mb-3 text-gray-2"> @lang('site.Price summary')</h2>
                                        <div class="card-booking mb-4">
                                            <div
                                                class="d-flex justify-content-between py-2 px-3"
                                            >
                                                <div class="d-flex align-items-center">
                                                <span class="booking-icon">
                                                 <i class="fal fa-wallet"></i>
                                                </span>
                                                    <span class="text-second dd-txt pe-2"
                                                    > @lang('site.price')</span
                                                    >
                                                </div>
                                                <div
                                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                                >
                                                    {{$aqar->fixed_price ?? 0}}
                                                </div>
                                            </div>
                                            <hr class="hr-saeeh my-0"/>

                                        </div>
                                        <div class="card-booking mb-4 bg-light-orange">
                                            <div
                                                class="d-flex justify-content-between py-2 px-3"
                                            >
                                                <div class="d-flex align-items-center">
                                                <span class="booking-icon">
                                                <i class="fal fa-wallet"></i>
                                               </span>
                                                    <span class="text-gray-2 dd-txt pe-2"
                                                    > @lang('site.Reservation deposit')
                                                </span>
                                                </div>
                                                <div
                                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                                >
                                                    {{$aqar->fixed_price ?? 0}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-booking mb-4 bg-light-blue">
                                            <div
                                                class="d-flex justify-content-between  p-3"
                                            >
                                                <div class="d-flex align-items-center">
                                                <span class="booking-icon">
                                                <i class="fal fa-wallet"></i>
                                            </span>
                                                    <span class="text-gray-2 dd-txt pe-2"
                                                    >

                                                        @lang('site.totalprice')
                                                 </span>
                                                </div>
                                                <div
                                                    class="text-gray-2 d-flex align-items-center justify-content-center summary-price"
                                                    id="total">


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="col-12">
                                            <div class="card card-department round-border mb-3 p-3">
                                                <div class="row g-0">
                                                    <div class="col-lg-4 position-relative">
                                                        <div class="department-img">
                                                            <div>
                                                                <img
                                                                    loading="lazy"

                                                                    src="{{asset('images/aqars/'.$aqar->main_image)}}"

                                                                    onerror="this.src='{{FRONTASSETS}}/images/department-3.svg'"
                                                                    class="department-img-list of-cover"
                                                                    alt="image 1"
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="card-body position-relative py-0">
                                                            <div
                                                                class="row justify-content-between align-items-center mb-3  mt-lg-0 mt-3 small"
                                                            >
                                                                <div class="col-auto">
                                      <span class="text-main number-ads">@lang('site.id number'){{$aqar->id}}</span >
                                                                </div>
                                                                <div class="col-auto">
                                                                    <div
                                                                        class="d-flex justify-content-center align-items-center"
                                                                    >
                                                                        <div
                                                                            class="department-badge bg-main text-white">
                                                                            <div
                                                                                class="pt-1">{{$aqar->aqarReview->avg('rate') ?? 0 }}</div>
                                                                            <div>
                                                                            <i class="fas fa-star"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="number-ads gray-txt">
                                                                            @lang('site.comments')
                                                                            {{$aqar->aqarComment->count() ?? 0 }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h2 class="card-title mb-2">
                                                                {{$aqar->details ?? ''}}
                                                            </h2>

                                                            <div class="gray-txt number-ads">
                                                            <i class="fal fa-map-marker-alt"></i>
                                                                <span> {{$aqar->country->name ?? ''}} , {{$aqar->city->name ?? ''}}</span>
                                                            </div>
                                                            <div class="pt-2">
                                                          <span class="road-ic"><i class="fal fa-road"></i></span>
                                                            <span class="position-department">
                                                             {!! html_entity_decode($aqar->description) !!}
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card card-department round-border mb-3 p-3"
                                            >
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
                                                               class="text-second">@lang('site.login')</a>
                                                            للحجز بتفاصيل محفوظه او
                                                            <a href="{{route('registers')}}"
                                                               class="text-second">    @lang('site.register') </a>
                                                            جديد
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>

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
                                                    <textarea class="form-control txtarea-booking px-3 py-2 mt-2"
                                                              placeholder="{{trans('site.If you have an inquiry')}}"
                                                              rows="4" name="note"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-content-wizard py-lg-5 pt-3" data-form-tab>
                                <div class="row">
                                    <div class="col-12">
                                    </div>
                                    <div class="col-12">
                                        <div
                                            class="booking-dd-btn d-flex align-items-center justify-content-center mb-1"
                                        >
                                            <a href="#">
                                            <span>
                                            <i class="far fa-book-open"></i>
                                            </span>
                                                    <span class="pe-2">@lang('site.My bookings')</span>
                                                    <span class="pe-3">
                                                <i class="fas fa-chevron-left"></i>
                                            </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                <input type="hidden" name="aqar_id" value="{{$aqar->id}}" class="aqar_id">
                                <div class="row mybookinghidden" id="mybookinghidden">
                                    <div class="col-12">


                                        @foreach($bookings as $book)
                                            @if(!empty($book->aqar))
                                                <div
                                                    class="card card-department round-border mb-4  p-md-3 p-2"
                                                >
                                                    <div class="row g-0">
                                                        <div class="col-lg-3 position-relative">
                                                            <div class="epartment-img-carousel">
                                                                <div>
                                                                    <img
                                                                        loading="lazy"

                                                                        src="{{asset('images/aqars/'.$book->aqar->main_image)}}"
                                                                        onerror="this.src='{{FRONTASSETS}}/images/department-3.svg'"

                                                                        class="department-img-list of-cover"
                                                                        alt="image 1"
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
                                                                    <span class="text-main number-ads"> @lang('site.id number')({{$book->aqar->id}})</span >
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
                                                                                {{$book->aqar->aqarComment->count() ?? 0}} @lang('site.comments')
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h2 class="card-title mb-2">
                                                                    {{$book->aqar->name ?? ''}}
                                                                </h2>

                                                                <div class="gray-txt number-ads">
                                                                <i class="fal fa-map-marker-alt"></i>
                                                                    <span>{{$book->aqar->country->name ?? ''}},{{$book->aqar->city->name ?? ''}} </span>
                                                                </div>
                                                                <div class="pt-2">
                                                         <span class="booking-icon"><i class="fal fa-road  text-main"></i></span>
                                                                    <span class="text-main position-department">
                                                             {!! html_entity_decode(substr($book->aqar->description, 0, 125)) !!}

                                                            </span>
                                                                </div>

                                                                <div
                                                                    class="d-flex align-items-center justify-sm-content-between mt-2"
                                                                >
                                                                    <div class="department-price">
                                                                        <span
                                                                            class="text-gray-2"> @lang('site.price'):</span>
                                                                        <span class="fw-bold text-main"
                                                                        >    {{$book->aqar->fixed_price ?? 0 }}
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                                <!--waiting -->
                                                                <div
                                                                    class="d-lg-flex align-items-center justify-content-sm-between mt-3 flex-wrap"
                                                                >
                                                                    <div class="d-lg-flex align-items-center">
                                                                        <div
                                                                            class="round-border bg-light-orange ms-2"
                                                                        >
                                                                            <div
                                                                                class="d-flex justify-content-between py-2 px-md-3 px-2"
                                                                            >
                                                                                <div class="d-flex align-items-center">
                                                                                <span class="booking-icon">
                                                                                <i class="fal fa-wallet text-main"></i>
                                                                                </span>
                                                                                    <span class="text-gray-2 pe-1 ps-2">
                                                                                         @lang('site.Reservation deposit'):
                                                                                </span>
                                                                                </div>
                                                                                <div
                                                                                    class="text-gray-2 d-flex align-items-center justify-content-center fw-bold span-14"
                                                                                >
                                                                                    {{$book->aqar->fixed_price ?? 0}}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="round-border bg-light-yellow my-lg-0 my-3"
                                                                        >
                                                                            <div
                                                                                class="d-flex justify-sm-content-between flex-wrap align-items-center py-2 px-md-3 px-2"
                                                                            >
                                                                                <div class="d-flex align-items-center">
                                                                                    <span class="text-gray-2">
                                                                                        @lang('site.booking_status'):
                                                                                    </span>
                                                                                    <span class="px-1 booking-icon">
                                                                                    <i class="fal fa-clock text-main"></i>
                                                                                    </span>

                                                                                </div>
                                                                                <div
                                                                                    class="text-gray-2 fw-bold span-14">
                                                                                    {{$book->bookingStatus->status ?? ''}}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="details-btn d-flex align-items-center justify-content-center margin-top-12"
                                                                    >
                                                                        <a href="{{route('detailbookingaquars',$book->id)}}"> @lang('site.Reservation information') </a>
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
                                <div id="mybookingAqars" class="row mybookingAqars" style="display: none">
                                </div>
                            </div>

                            <div class="d-sm-flex align-items-center justify-content-between wizaredd">
                                <button
                                    class="booking-now-btn "
                                    type="button"
                                    data-btn-previous="true"
                                >
                                    @lang('site.previous')
                                    <span class="btn-pad-left"
                                    > <i class="fas fa-chevron-left"></i></span>
                                </button>
                                <button
                                    class="booking-now-btn "
                                    type="button"
                                    data-btn-next="true"
                                >
                                    @lang('site.next')
                                    <span class="btn-pad-left"
                                    > <i class="fas fa-chevron-left"></i></span>
                                </button>
                                <button
                                    class="booking-now-btn"
                                    type="button"
                                    data-btn-submit="true"
                                    type="submit" id="btn-submit"
                                >
                                    @lang('site.save')
                                    <span class="btn-pad-left">
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

@endsection

@section('scripts')

    <script>


        jQuery('.deliverydate').change(function (e) {
            // console.log('e',e);
            // console.log("delivery_date",jQuery(".delivery_date").val());
            // console.log("reciept_date",jQuery('.reciept_date').val());
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            jQuery.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},

                url: "{{ route('countDaysbetweendates') }}",
                method: 'get',
                data: {
                    _token: '{{ csrf_token() }}',

                    delivery_date: jQuery(".deliverydate").val(),

                    reciept_date: jQuery('.reciept_date').val(),

                    'aqar_id': jQuery('.aqar_id').val(),

                },
                success: function (result) {


                    $('#daycount').html(result.data.days)
                    $('#total').html(result.data.total)

                    console.log(result);


                },
                error: function (result) {
                    // console.log(result.responseJSON);
                    var errors = result.responseJSON;
                    var errorsList = "";
                    $.each(errors, function (_, value) {
                        $.each(value, function (_, fieldErrors) {
                            fieldErrors.forEach(function (error) {
                                errorsList += "<li style='color:#e81f1f'>" + error + "</li>";
                            })
                        });
                    });
                    $('.register_errorsSrate').html(errorsList);


                }
            });
        });


    </script>


    <script>

        $(document).ready(function () {

            $("#btn-submit").click(function (e) {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                // console.log("bookingssss");
                var formData = $("#add-form").serialize();
                var url = '{{route('bookingsaquars')}}';


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
                        $(".mybookinghidden").hide();
                        // // //
                        $(".mybookingAqars").show();
                        $(".mybookingAqars").html(response);
                        // console.log("response", data);
                    },
                    error: function (xhr, textStatus, error) {
                        // Handle error response

                        console.log("errrorrrs".error);
                    }
                });

            });

        });



        {{--        $(document).ready(function () {--}}
        {{--            $("#btn-submit").click(function (e) {--}}
        {{--                // console.log("bookingssss");--}}
        {{--                var formData = $("#add-form").serialize();--}}
        {{--                var url = '{{route('addbookingaquars')}}';--}}
        {{--                // $.ajax({--}}
        //                     type: "GET",
        //                     url: url,
        //                     data: formData,
        //                     dataType: "json",
        //                     encode: true,
        {{--                // }).done(function (data) {--}}
        //                     console.log("suceesss", data);
        //                     // $("#mybookinghidden").hide();
        //                     //
        //                     // $("#mybooking1").show();
        //                     $("#mybooking1").html(data);
        //                     console.log("response", data);
        {{--                // });--}}


        {{--                $.ajax({--}}
        {{--                        type: "GET",--}}
        {{--                        url: url,--}}
        {{--                        data: formData,--}}
        {{--                        dataType: "json",--}}
        {{--                        encode: true,--}}
        {{--                    },--}}
        {{--                    success: function (data) {--}}
        {{--                    console.log("suceesss", data);--}}
        {{--                    // $("#mybookinghidden").hide();--}}
        {{--                    //--}}
        {{--                    // $("#mybooking1").show();--}}
        {{--                    $("#mybooking1").html(data);--}}
        {{--                    console.log("response", data);--}}
        {{--                    },--}}
        {{--                    error: function (data, textStatus, errorThrown) {--}}
        {{--                        console.log("error", data);--}}
        {{--                    },--}}
        {{--                })  --}}
        {{--        --}}
        {{--        });--}}
        {{--                --}}

        {{--       --}}


    </script>

@endsection
