@extends('layouts.main_frontend')
@section('content')
<main>
    <section class="position-relative">
        <div class="hero-section hero-section-v2">
            <div class="hero-section-image">
                <img src="{{FRONTASSETS}}/images/slider-image.png" alt="slider image" />
            </div>
            <div class="slider-container w-100 d-flex justify-content-center text-center">
                <div>
                    <h2 class="title-hero">@lang('site.Welcome to Saeeh')</h2>
                    <p class="text-hero">@lang('site.Book what suits you from our services')</p>
                </div>
            </div>
        </div>
        <div class="search-container margin-t-search">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="tabs">
                            <ul class="tabs-nav list-unstyled d-flex mb-0 tabs-nav-edits">
                                <li>
                                    <a href="#tab-1">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="aqar-icon ">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <g clip-path="url(#clip0_327_667)">
                                                        <path
                                                            d="M14.5715 23.1429H0.857178V6.85718L7.71432 0.857178L14.5715 6.85718V23.1429ZM14.5715 23.1429H23.1429V11.1429H14.5715M7.71432 23.1429V19.7143M5.14289 14.5715H10.2857M5.14289 9.42861H10.2857"
                                                            stroke="white" stroke-width="2.28571" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_327_667">
                                                            <rect width="24" height="24" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                            <div>@lang('site.Aqar Booking')</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab-2">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="car-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30"
                                                    viewBox="0 0 29 30" fill="none">
                                                    <path
                                                        d="M16.4256 20.0001H10.6026M22.2486 20.0001H25.7424V16.0626C25.7432 15.7651 25.6451 15.4771 25.4658 15.2502C25.2865 15.0234 25.0377 14.8727 24.7641 14.8251L18.7548 13.7501L15.6104 9.25006C15.5019 9.09482 15.3612 8.96881 15.1995 8.88203C15.0378 8.79524 14.8595 8.75006 14.6787 8.75006H6.22373C5.78965 8.74682 5.36337 8.87384 4.99296 9.1168C4.62256 9.35975 4.32279 9.70897 4.12746 10.1251L3.19578 12.1626C2.70682 13.2058 2.4516 14.3572 2.45044 15.5251V20.0001H4.77963"
                                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M7.69103 23.75C9.299 23.75 10.6025 22.3509 10.6025 20.625C10.6025 18.8991 9.299 17.5 7.69103 17.5C6.08306 17.5 4.77954 18.8991 4.77954 20.625C4.77954 22.3509 6.08306 23.75 7.69103 23.75Z"
                                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M19.337 23.75C20.945 23.75 22.2485 22.3509 22.2485 20.625C22.2485 18.8991 20.945 17.5 19.337 17.5C17.7291 17.5 16.4255 18.8991 16.4255 20.625C16.4255 22.3509 17.7291 23.75 19.337 23.75Z"
                                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <div>@lang('site.Car Booking') </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <ul class="tabs-stage list-unstyled">
                                <form action="{{route('filteraquars')}}" method="POST">
                                    @csrf
                                    <li id="tab-1">
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <div class="box-search mb-sm-0 mb-3">
                                                            <select class="select2" id="list" name="country_id">
                                                                <option disabled selected>@lang('site.country')</option>
                                                                @foreach($countries as $country)
                                                                <option value="{{$country->id}}">
                                                                    {{$country->name ?? ''}} </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="box-search mb-sm-0 mb-3">
                                                            <select class="select2" id="list7" name="city_id">
                                                                <option disabled selected>@lang('site.city')</option>
                                                                <!-- @foreach($cities as $city)
                                                <option
                                                    value="{{$city->id}}">{{$city->name ?? ''}}</option>
                                                @endforeach -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="box-search mb-sm-0 mb-3">
                                                            <select class="select2" id="list2" name="category_id">
                                                                <option disabled selected>@lang('site.category')
                                                                </option>
                                                                @foreach($CategoriesAquar as $cat)
                                                                <option value="{{$cat->id ?? ''}}">{{$cat->name ?? ''}}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="box-search mb-sm-0 mb-3">
                                                            <select class="select2" id="list4" name="number_rooms">
                                                                <option disabled selected>@lang('site.room number')
                                                                </option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 d-flex align-items-center">
                                                <div
                                                    class="search-btn d-flex align-items-center justify-content-center mt-lg-0 mt-3">
                                                    <button type="submit">@lang('site.search')</button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </form>

                                <form action="{{route('allcarsFillter')}}" method="get">
                                    @csrf

                                    <li id="tab-2">
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <div class="row">
                                                    <div class="col-lg col-12">
                                                        <div class="box-search mb-sm-0 mb-3">
                                                            <select class="select2" id="country_id" name="country_id"
                                                                required>
                                                                <option disabled selected>@lang('site.country')</option>
                                                                @foreach($countries as $country)
                                                                <option value="{{$country->id}}">
                                                                    {{$country->name ?? ''}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg col-12">
                                                        <div class="box-search mb-sm-0 mb-3">
                                                            <select class="select2" id="city_id" name="city_id"
                                                                required>
                                                                <option disabled selected>@lang('site.city')</option>
                                                                <!-- @foreach($cities as $city)
                                             <option
                                                value="{{$city->id}}">{{$city->name ?? ''}}</option>
                                             @endforeach -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg col-12">
                                                        <div class="box-search mb-sm-0 mb-3">
                                                            <select class="select2" id="list6" name="brand_id">
                                                                <option disabled selected>@lang('site.brands')</option>
                                                                @foreach($CategoriesCar as $cat)
                                                                <option value="{{$cat->id ?? ''}}">{{$cat->name ?? ''}}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg col-12">
                                                        <div class="box-search mb-sm-0 mb-3">
                                                            <select class="select2" id="list9" name="category_id">
                                                                <option disabled selected>@lang('site.category')
                                                                </option>
                                                                <!-- @foreach($CategoriesCar as $cat)
                                             <option value="{{$cat->id ?? ''}}">{{$cat->name ?? ''}}</option>
                                             @endforeach -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg col-12">
                                                        <div class="box-search mb-sm-0 mb-3">
                                                            <select class="select2" id="list8" name="year">
                                                                @for ($year = (int)date('Y')+1; 1900 <= $year; $year--):
                                                                    <option value="{{$year}}">{{$year}}</option>
                                                                    @endfor
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div
                                                    class="search-btn d-flex align-items-center justify-content-center">
                                                    <button type="submit">@lang('site.search')</button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </form>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="banner-section py-md-5 py-3">
        <div class="container w-100">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="banner-image mt-lg-0 mt-3">
                        <img src="{{FRONTASSETS}}/images/banner-1.png" alt="banner 1" />
                        <div class="banner-txt top-txt">
                            <div>@lang('site.Walk around for less') </div>
                            <div>@lang('site.prices')</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="banner-image mt-lg-0 mt-3">
                        <img src="{{FRONTASSETS}}/images/banner-2.png" alt="banner 2" />
                        <div class="banner-txt bottom-txt">
                            <div>@lang('site.discount on')</div>
                            <div>@lang('site.aqar booking')</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tours-section py-md-5 py-3">
        <div class="container w-100">
            <div class="row pb-5">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center border-bottom-header">
                        <div>
                            <h2>@lang('site.discover_the_most_famous_tourist_destinations')</h2>
                        </div>
                        <div class="see-all">
                            <a href="{{route('countries')}}" class="h2">
                                <span><img src="{{FRONTASSETS}}/images/arrow-circle.svg" alt="" /></span>
                                @lang('site.All') </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($countries as $country)
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card-tour mb-3">
                        <a href="{{route('cities',$country->id)}}">
                            <div class="card-image-box">
                                <img class="card-img" src="{{asset('images/countries/'.$country->image)}}"
                                    onerror="this.src='{{FRONTASSETS}}/images/tours/tour-1.jpg'" alt="Card image cap">
                            </div>
                            <div class="card-tour-body d-flex justify-content-between align-items-center">
                                <h2 class=" card-title">{{$country->name ?? ''}}</h2>
                                <div>
                                    <img src="{{asset('images/countries/'.$country->flag_image)}}"
                                        onerror="this.src='{{FRONTASSETS}}/images/turkey.png'" alt="turkey"
                                        class="icon-flag">
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="about-section bg-main">
        <div class="container w-100">
            <div class="row pb-4">
                <div class="col-12">
                    <div>
                        <h2 class="text-white"> @lang('site.Why trust a Saeeh')</h2>
                    </div>
                </div>
            </div>
            <div class="row padding-row">
                @foreach($HomeServices as $service)
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="about-card mb-lg-0 mb-3 text-center">
                        <img src="{{asset('images/home_serviecs/'.$service->image)}}" alt="image" />
                        <div class="pt-3">
                            <h4 class="text-main">{{ $service->title_ar}}</h4>
                            <p class="mb-0 text-light-gray">{!! html_entity_decode(substr($service->description_ar, 0, 40)) !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="hotels-section py-md-5 py-3">
        <div class="container w-100">
            <div class="row pb-4">
                <div class="col-12">
                    <div>
                        <h2 class="text-second"> @lang('site.Hotels and Aqars in the best cities')</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel owl-theme hotel-owl">
                        @foreach($places as $place)
                        <div class="hotel-item mb-3 round-border position-relative">
                            <div class="hotel-img">
                                <img src="{{asset('images/places/'.$place->display_photo)}}"
                                    onerror="this.src='{{FRONTASSETS}}/images/hotels/alrebat.jpg'" alt="image" />
                            </div>
                            <div class="hotel-details">
                                <div class="hotel-name">
                                    <h2 class="text-second">{{$place->city->name}}</h2>
                                </div>
                                <img src="{{asset('images/cities/'.$place->city->image)}}"
                                    onerror="this.src='{{asset('images/places/default.png')}}'" alt="icon"
                                    class="hotel-icon" />
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="restaurant-section py-md-5 py-3 bg-main">
        <div class="container w-100">
            <div class="row pb-4">
                <div class="col-12">
                    <div>
                        <h2 class="text-white">@lang('site.The most famous restaurants and various services') </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel owl-theme restaurant-owl">
                        @foreach($CategoriesPlaces as $place)
                        <div class="card-tour mb-3">
                            <a href="#">
                                <div class="card-image-box">
                                    <img src="{{asset('images/categories/'.$place->image)}}" class="card-img"
                                        alt="Card image cap"
                                        onerror="this.src='{{FRONTASSETS}}/images/restaurants/restaurant-1.jpg'">
                                </div>
                            </a>
                            <div class="card-tour-body d-flex justify-content-center align-items-center">
                                <h2 class="card-title">{{$place->name ??''}}</h2>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="reviews py-lg-5 py-4">
        <div class="container w-100">
            <div class="row pb-2">
                <div class="col-12">
                    <h2 class="text-second"> @lang('site.customer reviews')</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-10">
                    <div class="owl-carousel owl-theme review-owl">
                        @foreach($PlacesComments as $comment)
                        <div class="card card-reviews">
                            <div class="card-block">
                                <div class="card-yazı">
                                    <p class="text-center">
                                        {!! html_entity_decode(substr($comment->description, 0, 125)) !!}
                                    </p>
                                    <div class="card-sahip">
                                        <div class="favicon">
                                        </div>
                                    </div>
                                </div>
                                <div class="isim text-center">

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
