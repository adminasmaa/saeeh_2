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
                            @lang('site.favourite')
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
                            <li>
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
                            <li>
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
                            <li>
                                <a
                                    href="#tab-3"
                                    class="tab-link-all d-flex align-items-center justify-content-center"
                                >
                                <div>
                                    <i class="far fa-car-side"></i>
                                    </div>
                                    <h2 class="mb-0 pe-2">@lang('site.places')</h2>
                                </a>
                            </li>

                        </ul>
                        <ul class="tabs-content pt-4 list-unstyled all-booking-tabs tabs-content-details">
                            <li id="tab-1">
                                <div class="row">
                                    <div class="col-12">


                                        @foreach($favouriteaqar->favourite_aqars as $aqar)
                                            @if(!empty($aqar))

                                                <div
                                                    class="card card-department round-border mb-4 p-md-3 p-2"
                                                >
                                                    <div class="row g-0">
                                                        <div class="col-lg-3 position-relative">
                                                            <div class="epartment-img-carousel">
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
                                                        <div class="col-lg-9">
                                                            <div class="card-body position-relative px-lg-3 px-0">
                                                                <div
                                                                    class="row justify-content-between align-items-center mb-3 small">
                                                                    <div class="col-auto mb-lg-0 mb-2">
                                                                        <span class="text-main number-ads">@lang('site.id number')({{$aqar->id}})</span >
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="d-flex justify-content-center align-items-center" >
                                                                            <div
                                                                                class="department-badge bg-main text-white">
                                                                                <span>{{ round($aqar->aqarReview->avg('rate')) ?? 0 }}</span>
                                                                                    <span>
                                                                                    <i class="fas fa-star"></i>
                                                                                    </span>
                                                                            </div>
                                                                            <div class="number-ads gray-txt">
                                                                                {{$aqar->aqarComment->count() ?? 0}} @lang('site.comments')
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h2 class="card-title mb-2">
                                                                    {{$aqar->name ??''}}
                                                                </h2>

                                                                <div class="gray-txt number-ads">
                                                                <i class="far fa-map-marker-alt"></i>
                                                                    <span>{{$aqar->country->name ??''}}, {{$aqar->city->name ??''}}</span>
                                                                </div>
                                                                <div class="py-3">
                                                                <span> <i class="far fa-road text-main"></i></span>
                                                                <span class="text-main position-department">
                                                                {{$aqar->details ??''}}
                                                                </span>
                                                                </div>

                                                                <div
                                                                    class="d-flex align-items-center justify-content-between mt-2"
                                                                >
                                                                    <div class="department-price">
                                                                        <span
                                                                            class="text-gray-2"> @lang('site.price'):</span>
                                                                        <span class="fw-bold text-main"
                                                                        >     {{$aqar->fixed_price ?? 0}}
                                                      </span>
                                                                    </div>
                                                                </div>
                                                                <!--waiting -->
                                                                <div
                                                                    class="d-lg-flex align-items-center justify-content-between mt-3 flex-wrap"
                                                                >
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>

                                </div>
                                @unless (count($favouriteaqar->favourite_aqars))
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

                                        @foreach($favouritecar->favourite_car as $car)
                                            @if(!empty($car))
                                                <div
                                                    class="card card-department round-border mb-4 p-md-3 p-2"
                                                >
                                                    <div class="row g-0">
                                                        <div class="col-lg-3 position-relative">
                                                            <div class="cars-img">
                                                                <div>
                                                                    <img
                                                                        loading="lazy"
                                                                        src="{{asset('images/cars/'.$car->main_image_ads)}}"
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
                                                                        > @lang('site.id number')({{$car->id}})</span
                                                                        >
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div
                                                                            class="d-flex justify-content-center align-items-center"
                                                                        >
                                                                            <div
                                                                                class="department-badge bg-main text-white">
                                                                                <span>{{ round($car->CarReview->avg('rate')) ?? 0}}</span>
                                                                                    <span>
                                                                                    <i class="fas fa-star"></i>
                                                                                    </span>
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
                                                                <span
                                                                >
                                                                    {!! html_entity_decode(substr($car->description , 0, 125)) !!}
                                                                </span>
                                                                </div>
                                                                <div
                                                                    class="text-gray-2 number-ads d-flex align-items-center py-2"
                                                                >
                                                                    <div>
                                                                    <span class="ps-2">
                                                                <i class="far fa-user text-main"></i>
                                                                </span>
                                                                        <span>{{$car->car_numbers ?? ''}}</span>
                                                                    </div>
                                                                    <div class="padding-35">
                                                                    <span class="ps-2">
                                                                    <i class="far fa-briefcase text-main"></i>
                                                                    </span>
                                                                        <span>{{$car->year ?? ''}}</span>
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="d-flex align-items-center justify-content-between mt-2"
                                                                >
                                                                    <div class="department-price">
                                                                        <span
                                                                            class="text-gray-2"> @lang('site.price'):</span>
                                                                        <span class="fw-bold text-main"
                                                                        >{{$car->fixed_price ?? 0 }}
                                                                        </span>
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

                                @unless (count($favouritecar->favourite_car))
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

                            <li id="tab-3">
                                <div class="row">
                                    <div class="col-12">

                                        @foreach($favouriteplace->favourite_place as $place)
                                            @if(!empty($place))
                                                <div
                                                    class="card card-department round-border mb-4 p-md-3 p-2"
                                                >
                                                    <div class="row g-0">
                                                        <div class="col-lg-3 position-relative">
                                                            <div class="cars-img">
                                                                <div>
                                                                    <img
                                                                        loading="lazy"
                                                                        src="{{asset('images/places/'.$place->display_photo)}}"
                                                                        onerror="this.src='{{FRONTASSETS}}/images/restaurants/resto-card-1.png'"
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
                                                                        > @lang('site.id number')({{$place->id}})</span
                                                                        >
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div
                                                                            class="d-flex justify-content-center align-items-center"
                                                                        >
                                                                            <div
                                                                                class="department-badge bg-main text-white">
                                                                                <span>{{ round($place->PlaceReview->avg('rate')) ?? 0}}</span>
                                                                                <span>
                                                                                <i class="fas fa-star"></i>
                                                                                </span>
                                                                            </div>
                                                                            <div class="number-ads gray-txt">

                                                                                {{$place->placeComments->count() ?? 0}} @lang('site.comments')
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h2 class="card-title mb-2">
                                                                    {{$place->name ?? ''}}
                                                                </h2>

                                                                <div class="gray-txt number-ads pb-2">
                                                                <span
                                                                >
                                                                    {!! html_entity_decode($place->descrption) !!}
                                                                </span>
                                                                    <span
                                                                    >{{$place->country->name ?? ''}}</span> <span
                                                                    >{{$place->city->name ?? ''}}</span>
                                                                </div>
{{--                                                                <div--}}
{{--                                                                    class="details-rest-btn d-flex align-items-center justify-content-center"--}}
{{--                                                                >--}}
{{--                                                                    <a href="{{route('detailplace',$place->id)}}"> @lang('site.details')</a>--}}
{{--                                                                </div>--}}

                                                                            <span class="ps-2">
                                                                            <i class="far fa-map-marker-alt"></i>
                                                                            </span>
                                                                        <span>{{$place->address ?? ''}}</span>
                                                                    </div>

                                                                </div>



                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>


                    @unless (count($favouriteplace->favourite_place))
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
