@extends('layouts.main_frontend')
@section('content')

    <main>
        <!-- Desktop Breadcrumb -->
        <section class="py-md-4 py-2">
            <div class="container">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{route('Home')}}"> @lang('site.home') </a>
                        </li>
                        <li class="breadcrumb-item text-main" aria-current="page">
                            @lang('site.My bookings')
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- section -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="tabs-details mt-3">
                        <ul class="tabs-nav-all-booking list-unstyled d-flex mb-2 tabs-nav-detailss">
                            <li class="li-booking-all">
                                <a
                                    href="#tab-1"
                                    class="tab-link-all d-flex align-items-center justify-content-center"
                                >
                                    <div>
                                    <i class="far fa-building"></i>
                                    </div>
                                    <h2 class="mb-0 pe-2">@lang('site.aquars')</h2>
                                </a>
                            </li>
                            <li class="li-booking-all">
                                <a
                                    href="#tab-2"
                                    class="tab-link-all d-flex align-items-center justify-content-center"
                                >
                                    <div>
                                    <i class="far fa-car-side"></i>
                                    </div>
                                    <h2 class="mb-0 pe-2">@lang('site.cars')</h2>
                                </a>
                            </li>

                        </ul>
                        <ul class="tabs-content pt-4 list-unstyled all-booking-tabs  tabs-content-details">
                            <li id="tab-1">
                                <div class="row">
                                    <div class="col-12">


                                        @foreach($aqarbooking->aqarbooking as $booking)
                                            @if(!empty($booking->aqar))

                                                <div
                                                    class="card card-department round-border mb-4 p-md-3 p-2"
                                                >
                                                    <div class="row g-0">
                                                        <div class="col-lg-3 position-relative">
                                                            <div class="epartment-img-carousel">
                                                                <div>
                                                                    <img
                                                                        loading="lazy"
                                                                        src="{{asset('images/aqars/'.$booking->aqar->main_image)}}"

                                                                        onerror="this.src='{{FRONTASSETS}}/images/department-3.svg'"
                                                                        class="department-img-list of-cover"
                                                                        alt="image 1"
                                                                    />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <div class="card-body position-relative px-lg-3 px-0">
                                                                <div  class="row justify-content-between align-items-center mb-3 small" >
                                                                    <div class="col-auto mb-lg-0 mb-2">
                                                                   <span class="text-main number-ads">@lang('site.id number')({{$booking->aqar->id}})</span >
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="d-flex justify-content-center align-items-center" >
                                                                            <div
                                                                                class="department-badge bg-main text-white">
                                                                                <span
                                                                                    class="pt-1">{{ round($booking->aqar->aqarReview->avg('rate')) ?? 0 }}</span>
                                                                                    <span>
                                                                                    <i class="fas fa-star"></i>
                                                                                    </span>
                                                                            </div>
                                                                            <div class="number-ads gray-txt">
                                                                                {{$booking->aqar->aqarComment->count() ?? 0}} @lang('site.comments')
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h2 class="card-title mb-2">
                                                                    {{$booking->aqar->name ??''}}
                                                                </h2>

                                                                <div class="gray-txt number-ads">
                                                                <i class="far fa-map-marker-alt"></i>
                                                                    <span>{{$booking->aqar->country->name ??''}}, {{$booking->aqar->city->name ??''}}</span>
                                                                </div>
                                                                <div class="py-3">
                                                                 <span> <i class="far fa-road text-main"></i></span>
                                                                    <span class="text-main position-department">
                                                                    {{$booking->aqar->details ??''}}
                                                                    </span>
                                                                </div>

                                                                <div
                                                                    class="d-flex align-items-center justify-content-between mt-2"
                                                                >
                                                                    <div class="department-price">
                                                                        <span
                                                                            class="text-gray-2"> @lang('site.price'):</span>
                                                                        <span class="fw-bold text-main"
                                                                        >     {{$booking->aqar->fixed_price ?? 0}}
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
                                                                                <span>
                                                                                <i class="far fa-wallet text-main"></i>
                                                                                </span>
                                                                                    <span class="text-gray-2 pe-1 ps-2"
                                                                                    > @lang('site.Reservation deposit'):
                                                                                 </span>
                                                                                </div>
                                                                                <div
                                                                                    class="text-gray-2 d-flex align-items-center justify-content-center fw-bold span-14"
                                                                                >
                                                                                    {{$booking->aqar->fixed_price ?? 0}}
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
                                                                                    @lang('site.payment_status'):
                                                                                    </span>
                                                                                    <span class="px-1">
                                                                                    <i class="far fa-alarm-clock  text-main"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div
                                                                                    class="text-gray-2 fw-bold span-14">
                                                                                    {{$booking->bookingStatus->status ?? ''}}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="details-btn d-flex align-items-center justify-content-center margin-top-12"
                                                                    >
                                                                        <a href="{{route('detailbookingaquars',$booking->id)}}"> @lang('site.Reservation information') </a>
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

                                @unless (count($aqarbooking->aqarbooking))
                                    <!--empty booking-->
                                    <div class="col-12 mb-5">
                                        <div class="card-empty d-md-flex align-items-center">
                                            <div class="card-empty-txt">  @lang('site.No Favourite') </div>
                                            <div>
                                                <img
                                                    src="{{FRONTASSETS}}/investor/empty-ic.svg"
                                                    alt="empty icon"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                @endunless
                            </li>
                            <li id="tab-2">
                                <div class="row">
                                    <div class="col-12">

                                        @foreach($carBooking->carBooking as $book)
                                            @if(!empty($book->car))
                                                <div
                                                    class="card card-department round-border mb-4 p-md-3 p-2"
                                                >
                                                    <div class="row g-0">
                                                        <div class="col-lg-3 position-relative">
                                                            <div class="cars-img">
                                                                <div>
                                                                    <img
                                                                        loading="lazy"
                                                                        src="{{asset('images/cars/'.$book->car->main_image_ads)}}"
                                                                        onerror="this.src='{{FRONTASSETS}}/images/cars/car-card-1.png'"
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
                                                                                <span
                                                                                    class="pt-1">{{ round($book->car->CarReview->avg('rate')) ?? 0}}</span>
                                                                                    <span>
                                                                                    <i class="fas fa-star"></i>
                                                                                    </span>
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
                                                                >
                                                                    {!! html_entity_decode(substr($book->car->description , 0, 125)) !!}
                                                                </span>
                                                                </div>
                                                                <div
                                                                    class="text-gray-2 number-ads d-flex align-items-center py-2"
                                                                >
                                                                    <div>
                                                                <span class="ps-2">
                                                                <i class="far fa-user text-main"></i>
                                                                </span>
                                                                        <span>{{$book->car->car_numbers ?? ''}}</span>
                                                                    </div>
                                                                    <div class="padding-35">
                                                                        <span class="ps-2">
                                                                        <i class="far fa-briefcase text-main"></i>
                                                                        </span>
                                                                        <span>{{$book->car->year ?? ''}}</span>
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
                                     
                                                                                <span>
                                                                                <i class="far fa-wallet text-main"></i>
                                                                                </span>
                                     
                                                                                    <span class="text-gray-2 pe-1 ps-2"
                                                                                    > @lang('site.Reservation deposit'):
                                                                                  </span>
                                                                                </div>
                                                                                <div
                                                                                    class="text-gray-2 d-flex align-items-center justify-content-center fw-bold span-14"
                                                                                >
                                                                                    {{$book->car->fixed_price ?? 0 }}                                                                        </div>
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
                                                                                    :@lang('site.payment_status')
                                                                                </span>
                                                                                <span class="px-1">
                                                                                    <i class="far fa-alarm-clock  text-main"></i>
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
                                                                        <a href="{{route('detailbooking',$book->id)}}"> @lang('site.Reservation information') </a>
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


                                @unless (count($carBooking->carBooking))
                                    <!--empty booking-->
                                    <div class="col-12 mb-5">
                                        <div class="card-empty d-md-flex align-items-center">
                                            <div class="card-empty-txt">  @lang('site.No Favourite') </div>
                                            <div>
                                                <img
                                                    src="{{FRONTASSETS}}/investor/empty-ic.svg"
                                                    alt="empty icon"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                @endunless


                            </li>

                        </ul>
                    </div>
                </div>


            </div>


        </section>
        <!-- /section -->
    </main>

@endsection
