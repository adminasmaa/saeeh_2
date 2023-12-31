@extends('layouts.main_frontend')
@section('css')

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>

@endsection
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
                    
                        <li class="breadcrumb-item text-gray-4" aria-current="page">
                            @lang('site.valuesearch')
                        </li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="py-4 filter-departments">
            <div class="container">
                <form action="{{route('cars')}}" method="get">
                    @csrf
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="row">
                                <div class="col-lg">
                                    <div class="box-search mb-lg-0 mb-md-0 mb-3">

                                        <select
                                            class="select2"
                                            id="country_id"
                                            name="country_id"
                                            required
                                        >
                                            <option  disabled selected>@lang('site.country')</option>
                                            @foreach($countries as $country)
                                                <option
                                                    value="{{$country->id}}">{{$country->name ?? ''}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="box-search mb-lg-0 mb-md-0 mb-3">


                                        <select
                                            class="select2"
                                            id="city_id"
                                            name="city_id"
                                            required
                                        >
                                            <option  disabled selected>@lang('site.city')</option>
                                            <!-- @foreach($cities as $city)
                                                <option
                                                   value="{{$city->id}}">{{$city->name ?? ''}}</option>

                                            @endforeach -->
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="box-search mb-lg-0 mb-md-0 mb-3">

                                        <select
                                            class="select2"
                                            id="list6"
                                            name="brand_id"
                                        >
                                            <option disabled selected>@lang('site.brands')</option>
                                            @foreach($CategoriesCar as $cat)
                                                <option value="{{$cat->id ?? ''}}">{{$cat->name ?? ''}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="box-search mb-lg-0 mb-md-0 mb-3">
                                        <select
                                            class="select2"
                                            id="list9"
                                            name="category_id"
                                        >
                                            <option disabled selected>@lang('site.category')</option>
                                            <!-- @foreach($CategoriesCar as $cat)
                                                <option value="{{$cat->id ?? ''}}">{{$cat->name ?? ''}}</option>


                                            @endforeach -->
                                        </select>
                                    </div>
                                </div>


                                <div class="col-lg">
                                    <div class="box-search mb-lg-0 mb-md-0 mb-3">


                                        <select
                                            class="ddl-select" id="list5"
                                            name="year"
                                        >
                                            <option disabled selected>@lang('site.year')</option>

                                            @for ($year = (int)date('Y')+1; 1900 <= $year; $year--)
                                                :
                                                <option value="{{$year}}">{{$year}}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div
                                class="search-btn d-flex align-items-center justify-content-center mt-lg-0 mt-3"
                            >
                                <button type="submit">@lang('site.search')</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <!-- Both Content & Filters -->
        <section class="py-md-5 py-3">
            <div class="container">
                <div class="row">
                <div class="col-12">
{{--            <h2 class="pb-3 search-result">وجدنا 44 شقة مناسبة لطلبك</h2>--}}
                    <div class="form-group mb-4 position-relative">
                        <input
                            type="search"
                            class="form-control search-saeeh"
                            placeholder="ابحث عن اسم العقار"
                            id="search"
                            name="q"
                        />
                        <div class="search-icon">
                        <i class="far fa-search"></i>
                        </div>
                    </div>
                 </div>
{{--                    <div class="col-lg-3 col-md-4 web-view">--}}
{{--                        <a--}}
{{--                            href="#"--}}
{{--                            data-bs-toggle="modal"--}}
{{--                            data-bs-target="#mapModal"--}}
{{--                            class="d-block"--}}
{{--                        >--}}
{{--                            <div class="map-box mb-lg-0 mb-3">--}}
{{--                                <img src="{{FRONTASSETS}}/images/map.png" alt="map"/>--}}
{{--                                <div--}}
{{--                                    class="map-data d-flex h-100 w-100 justify-content-center align-items-center"--}}
{{--                                >--}}
{{--                                    <h4 class="title-map">@lang('site.searchmap')</h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
                    <!-- <div class="col-lg-9 col-md-8">
                        <h2 class="pb-3 search-result"> -->
{{--                                                        <!-- المغرب :وجدنا سيارة مناسبة لطلبك -->--}}
{{--                                                        <label>المغرب :وجدنا--}}
{{--                                                            <!-- <span>{{$cat->car->car_numbers ?? ''}}</span> -->--}}
{{--                                                            سيارة مناسبة لطلبك--}}
{{--                                                        </label>--}}

                        <!-- </h2> -->
{{--                        <div class="form-group mb-4 position-relative">--}}
{{--                            <input--}}
{{--                                type="search"--}}
{{--                                class="form-control search-saeeh"--}}
{{--                                placeholder="{{trans('site.namecar')}} "--}}
{{--                                id="myInput"--}}
{{--                                onkeyup="getMySearch()"--}}
{{--                                name="q"--}}
{{--                            />--}}
{{--                            <div class="search-icon">--}}
{{--                                <svg--}}
{{--                                    xmlns="http://www.w3.org/2000/svg"--}}
{{--                                    width="18"--}}
{{--                                    height="18"--}}
{{--                                    viewBox="0 0 18 18"--}}
{{--                                    fill="none"--}}
{{--                                >--}}
{{--                                    <path--}}
{{--                                        d="M15.9 17.3L10.3 11.7C9.8 12.1 9.225 12.4167 8.575 12.65C7.925 12.8833 7.23333 13 6.5 13C4.68333 13 3.146 12.3707 1.888 11.112C0.63 9.85333 0.000666667 8.316 0 6.5C0 4.68333 0.629333 3.146 1.888 1.888C3.14667 0.63 4.684 0.000666667 6.5 0C8.31667 0 9.854 0.629333 11.112 1.888C12.37 3.14667 12.9993 4.684 13 6.5C13 7.23333 12.8833 7.925 12.65 8.575C12.4167 9.225 12.1 9.8 11.7 10.3L17.325 15.925C17.5083 16.1083 17.6 16.3333 17.6 16.6C17.6 16.8667 17.5 17.1 17.3 17.3C17.1167 17.4833 16.8833 17.575 16.6 17.575C16.3167 17.575 16.0833 17.4833 15.9 17.3ZM6.5 11C7.75 11 8.81267 10.5623 9.688 9.687C10.5633 8.81167 11.0007 7.74933 11 6.5C11 5.25 10.5623 4.18733 9.687 3.312C8.81167 2.43667 7.74933 1.99933 6.5 2C5.25 2 4.18733 2.43767 3.312 3.313C2.43667 4.18833 1.99933 5.25067 2 6.5C2 7.75 2.43767 8.81267 3.313 9.688C4.18833 10.5633 5.25067 11.0007 6.5 11Z"--}}
{{--                                        fill="#CACACA"--}}
{{--                                    />--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                    <!-- </div> -->
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <div class="accordion mb-5 mt-3 web-view" id="accordion_filter">
                            <div class="filter-title">

                                <h2 class="text-second mb-0">@lang('site.filter by'):</h2>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button
                                        class="accordion-button"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordion-filter-1"
                                        aria-expanded="true"
                                        aria-controls="accordion-filter-1"
                                    >
                                        <h5 class="accordion-title mb-0">@lang('site.brands')</h5>

                                        <div class="arrow-accordion">
                                        <i class="far fa-angle-down"></i>
                                        </div>
                                    </button>
                                </h2>
                                <div
                                    id="accordion-filter-1"
                                    class="collapse show"
                                >
                                    <div class="accordion-body">
                                        <div class="row align-items-center">
                                            <div class="custom-checkbox">
                                                <form>
                                                    @foreach($CategoriesCar as $cat)

                                                        <div class="form-group">
                                                            <input type="checkbox" id="{{$cat->id}}"
                                                                   class="typeOfSearch"
                                                                   value="{{$cat->id}}" class="check"
                                                                   name="category_id"
                                                                   onclick="GetAtrribute(this.id,this.name)"/>
                                                            <label for="{{$cat->id}}">
                                <span
                                ><img


                                        src="{{asset('images/categories/'.$cat->image)}}"
                                        onerror="this.src='{{FRONTASSETS}}/images/cars/marka-1.png'"
                                        width="30" height="30"
                                        alt="car marka"
                                    /></span>
                                                                <span>{{$cat->name ?? ''}}</span>
                                                            </label>
                                                        </div>
                                                    @endforeach

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--                            <div class="accordion-item">--}}
                            {{--                                <h2 class="accordion-header">--}}
                            {{--                                    <button--}}
                            {{--                                        class="accordion-button"--}}
                            {{--                                        type="button"--}}
                            {{--                                        data-bs-toggle="collapse"--}}
                            {{--                                        data-bs-target="#accordion-filter-2"--}}
                            {{--                                        aria-expanded="true"--}}
                            {{--                                        aria-controls="accordion-filter-2"--}}
                            {{--                                    >--}}
                            {{--                                        <h5 class="accordion-title mb-0">@lang('site.category')</h5>--}}
                            {{--                                        <div>--}}
                            {{--                                            <svg--}}
                            {{--                                                xmlns="http://www.w3.org/2000/svg"--}}
                            {{--                                                width="15"--}}
                            {{--                                                height="8"--}}
                            {{--                                                viewBox="0 0 15 8"--}}
                            {{--                                                fill="none"--}}
                            {{--                                            >--}}
                            {{--                                                <path--}}
                            {{--                                                    d="M7.20766 7.19064C6.62556 7.19064 6.04345 6.96482 5.60272 6.52155L0.180867 1.06845C-0.060289 0.825909 -0.060289 0.424455 0.180867 0.181909C0.422023 -0.0606364 0.821178 -0.0606364 1.06233 0.181909L6.48419 5.635C6.88334 6.03645 7.53197 6.03645 7.93112 5.635L13.353 0.181909C13.5941 -0.0606364 13.9933 -0.0606364 14.2344 0.181909C14.4756 0.424455 14.4756 0.825909 14.2344 1.06845L8.81259 6.52155C8.37186 6.96482 7.78976 7.19064 7.20766 7.19064Z"--}}
                            {{--                                                    fill="#005D9F"--}}
                            {{--                                                />--}}
                            {{--                                            </svg>--}}
                            {{--                                        </div>--}}
                            {{--                                    </button>--}}
                            {{--                                </h2>--}}
                            {{--                                <div--}}
                            {{--                                    id="accordion-filter-2"--}}
                            {{--                                    class="collapse show"--}}
                            {{--                                >--}}
                            {{--                                    <div class="accordion-body">--}}
                            {{--                                        <div class="row align-items-center">--}}
                            {{--                                            <div class="custom-checkbox">--}}
                            {{--                                                <form>--}}
                            {{--                                                    @foreach($CategoriesCar as $cat)--}}
                            {{--                                                        <div class="form-group">--}}
                            {{--                                                            <input type="checkbox" id="{{$cat->name}}"  name="category_name" onclick="GetAtrribute(this.id,this.name)"/>--}}
                            {{--                                                            <label for="{{$cat->name}}">{{$cat->name ?? ''}}</label>--}}
                            {{--                                                        </div>--}}
                            {{--                                                    @endforeach--}}
                            {{--                                                </form>--}}
                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button
                                        class="accordion-button"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordion-filter-5"
                                        aria-expanded="true"
                                        aria-controls="accordion-filter-5"
                                    >
                                        <h5 class="accordion-title mb-0">@lang('site.year')</h5>
                                        <div class="arrow-accordion">
                                        <i class="far fa-angle-down"></i>
                                        </div>
                                    </button>
                                </h2>
                                <div
                                    id="accordion-filter-5"
                                    class="collapse show"
                                >
                                    <div class="accordion-body">
                                        <div class="row align-items-center">
                                            <div class="custom-checkbox">
                                                <form>
                                                    @foreach($carsfilters->unique('year') as $car)
                                                        <div class="form-group">
                                                            <input type="checkbox" name="year" id="{{$car->year}}"
                                                                   value="{{$car->year}}"
                                                                   onclick="GetAtrribute(this.id,this.name)"/>
                                                            <label for="{{$car->year}}">{{$car->year ?? ''}}</label>
                                                        </div>
                                                    @endforeach
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button
                                        class="accordion-button"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordion-filter-6"
                                        aria-expanded="true"
                                        aria-controls="accordion-filter-6"
                                    >
                                        <h5 class="accordion-title mb-0">@lang('site.color')</h5>
                                        <div class="arrow-accordion">
                                        <i class="far fa-angle-down"></i>
                                        </div>
                                    </button>
                                </h2>
                                <div
                                    id="accordion-filter-6"
                                    class="collapse show"
                                >
                                    <div class="accordion-body">
                                        <div class="row align-items-center">
                                            <div class="custom-checkbox">
                                                <form>
                                                    @foreach($carsfilters->unique('color') as $car)

                                                        <div class="form-group">
                                                            <input type="checkbox" id="{{$car->color}}"
                                                                   value="{{$car->color}}"
                                                                   name="color"
                                                                   onclick="GetAtrribute(this.id,this.name)"
                                                            />
                                                            <label for="{{$car->color}}">{{$car->color ?? ''}} </label>
                                                        </div>
                                                    @endforeach
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button
                                        class="accordion-button"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordion-filter-7"
                                        aria-expanded="true"
                                        aria-controls="accordion-filter-7"
                                    >
                                        <h5 class="accordion-title mb-0"> @lang('site.price')</h5>
                                        <div class="arrow-accordion">
                                        <i class="far fa-angle-down"></i>
                                        </div>
                                    </button>
                                </h2>
                                <div
                                    id="accordion-filter-7"
                                    class="collapse show"
                                >
                                    <div class="accordion-body">
                                        <div class="row align-items-center">
                                            <div class="custom-checkbox">
                                                <form>
                                                    @foreach($carsfilters->unique('fixed_price') as $car)
                                                        <div class="form-group">
                                                            <input type="checkbox" id="{{$car->fixed_price}}"
                                                                   value="{{$car->fixed_price}}"
                                                                   name="fixed_price"
                                                                   onclick="GetAtrribute(this.id,this.name)"
                                                            />
                                                            <label
                                                                for="{{$car->fixed_price}}"> {{$car->fixed_price ?? 0 }}</label>
                                                        </div>
                                                    @endforeach

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button
                                        class="accordion-button"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordion-filter-4"
                                        aria-expanded="true"
                                        aria-controls="accordion-filter-4"
                                    >
                                        <h5 class="accordion-title mb-0">@lang('site.comments')</h5>
                                        <div class="arrow-accordion">
                                        <i class="far fa-angle-down"></i>
                                        </div>
                                    </button>
                                </h2>
                                <div
                                    id="accordion-filter-4"
                                    class="collapse show"
                                >
                                    <div class="accordion-body">
                                        <div class="row align-items-center">
                                            <div class="custom-checkbox">
                                                <form>
                                                    <div class="form-group">

                                                        <input type="checkbox" name="rate" id="rate-1"
                                                               value="1"
                                                               onclick="GetAtrribute(this.value,this.name)"/>
{{--                                                        <input type="checkbox" id="rate-1"--}}
{{--                                                               value="1"--}}
{{--                                                               name="rate"--}}
{{--                                                               class="check"--}}
{{--                                                               onclick="GetAtrribute(this.value,this.name)"/>--}}
                                                        <label
                                                            for="rate-1"
                                                            class="d-flex align-items-center"
                                                        >
                                                            <div
                                                                class="department-sm-badge bg-main text-white"
                                                            >
                                                                <span>1</span>
                                                                <span>
                                                                <i class="fas fa-star"></i>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="rate-2"
                                                               value="2"
                                                               name="rate"
                                                               class="check"
                                                               onclick="GetAtrribute(this.value,this.name)"/>
                                                        <label
                                                            for="rate-2"
                                                            class="d-flex align-items-center"
                                                        >
                                                            <div
                                                                class="department-sm-badge bg-main text-white"
                                                            >
                                                                <span>2</span>
                                                                <span>
                                                                <i class="fas fa-star"></i>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="rate-3"
                                                               value="3"
                                                               name="rate"
                                                               class="check"
                                                               onclick="GetAtrribute(this.value,this.name)"
                                                        />
                                                        <label
                                                            for="rate-3"
                                                            class="d-flex align-items-center"
                                                        >
                                                            <div
                                                                class="department-sm-badge bg-main text-white"
                                                            >
                                                                <span>3</span>
                                                                <span>
                                                                <i class="fas fa-star"></i>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="rate-4"
                                                               value="4"
                                                               class="check"
                                                               name="rate"
                                                               onclick="GetAtrribute(this.value,this.name)"/>
                                                        <label
                                                            for="rate-4"
                                                            class="d-flex align-items-center"
                                                        >
                                                            <div
                                                                class="department-sm-badge bg-main text-white"
                                                            >
                                                                <span>4</span>
                                                                <span>
                                                                <i class="fas fa-star"></i>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="rate-5"
                                                               name="rate"
                                                               value="5"
                                                               class="check"
                                                               onclick="GetAtrribute(this.value,this.name)"
                                                        />
                                                        <label
                                                            for="rate-5"
                                                            class="d-flex align-items-center"
                                                        >
                                                            <div
                                                                class="department-sm-badge bg-main text-white"
                                                            >
                                                                <span>5</span>
                                                                <span>
                                                                <i class="fas fa-star"></i>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter_icon mobile-view">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="filter-btn js-toggle-filter fw-bold">
                                    <i class="fas fa-filter"></i> @lang('site.filtering')
                                </div>

                                <div class="">
                                    <a
                                        class="text-second fw-bold"
                                        href="#"
                                        data-bs-toggle="modal"
                                        data-bs-target="#mapModal"
                                    ><i class="far fa-map"></i> @lang('site.map')</a
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="mobile-view filter js-filter">
                            <div class="accordion" id="accordion_filter">
                                <div
                                    onclick="closeFilter()"
                                    class="d-flex justify-content-end"
                                >
                                    <i class="fas fa-times close-side-filter"></i>
                                </div>
                                <div class="filter-title">

                                    <h2 class="text-second mb-0"> @lang('site.filter by'):</h2>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button
                                            class="accordion-button"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#accordion-filter-1"
                                            aria-expanded="true"
                                            aria-controls="accordion-filter-1"
                                        >
                                            <h5 class="accordion-title mb-0">@lang('site.brands')</h5>

                                            <div class="arrow-accordion">
                                        <i class="far fa-angle-down"></i>
                                        </div>
                                        </button>
                                    </h2>
                                    <div
                                        id="accordion-filter-1"
                                        class="collapse show"
                                    >
                                        <div class="accordion-body">
                                            <div class="row align-items-center">
                                                <div class="custom-checkbox">
                                                    <form>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="two" checked/>
                                                            <label for="two">
                                  <span
                                  ><img
                                          src="{{FRONTASSETS}}/images/cars/marka-1.png"
                                          alt="car marka"
                                      /></span>
                                                                <span>نيسان</span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="three"/>
                                                            <label for="three">
                                  <span
                                  ><img
                                          src="{{FRONTASSETS}}/images/cars/marka-2.png"
                                          alt="car marka"
                                      /></span>
                                                                <span>بى ام دابليو</span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="four"/>
                                                            <label for="four">
                                  <span
                                  ><img
                                          src="{{FRONTASSETS}}/images/cars/marka-3.png"
                                          alt="car marka"
                                      /></span>
                                                                <span>اوبل</span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="five"/>
                                                            <label for="five">
                                  <span
                                  ><img
                                          src="{{FRONTASSETS}}/images/cars/marka-4.png"
                                          alt="car marka"
                                      /></span>
                                                                <span>ام جي</span>
                                                            </label>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button
                                            class="accordion-button"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#accordion-filter-2"
                                            aria-expanded="true"
                                            aria-controls="accordion-filter-2"
                                        >
                                            <h5 class="accordion-title mb-0">@lang('site.category')</h5>
                                            <div class="arrow-accordion">
                                        <i class="far fa-angle-down"></i>
                                        </div>
                                        </button>
                                    </h2>
                                    <div
                                        id="accordion-filter-2"
                                        class="collapse show"
                                    >
                                        <div class="accordion-body">
                                            <div class="row align-items-center">
                                                <div class="custom-checkbox">
{{--                                                    <form>--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <input type="checkbox" id="two" checked/>--}}
{{--                                                            <label for="two">touareg</label>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <input type="checkbox" id="three"/>--}}
{{--                                                            <label for="three">3008</label>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <input type="checkbox" id="four"/>--}}
{{--                                                            <label for="four">GIS</label>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <input type="checkbox" id="fou"/>--}}
{{--                                                            <label for="fou">208</label>--}}
{{--                                                        </div>--}}
{{--                                                    </form>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button
                                            class="accordion-button"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#accordion-filter-5"
                                            aria-expanded="true"
                                            aria-controls="accordion-filter-5"
                                        >
                                            <h5 class="accordion-title mb-0">@lang('site.year')</h5>
                                            <div class="arrow-accordion">
                                        <i class="far fa-angle-down"></i>
                                        </div>
                                        </button>
                                    </h2>
                                    <div
                                        id="accordion-filter-5"
                                        class="collapse show"
                                    >
                                        <div class="accordion-body">
                                            <div class="row align-items-center">
                                                <div class="custom-checkbox">
                                                    <form>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="two" checked/>
                                                            <label for="two">2010</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="three"/>
                                                            <label for="three">2011 </label>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button
                                            class="accordion-button"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#accordion-filter-6"
                                            aria-expanded="true"
                                            aria-controls="accordion-filter-6"
                                        >
                                            <h5 class="accordion-title mb-0">@lang('site.color')</h5>
                                            <div class="arrow-accordion">
                                        <i class="far fa-angle-down"></i>
                                        </div>
                                        </button>
                                    </h2>
                                    <div
                                        id="accordion-filter-6"
                                        class="collapse show"
                                    >
                                        <div class="accordion-body">
                                            <div class="row align-items-center">
                                                <div class="custom-checkbox">
{{--                                                    <form>--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <input type="checkbox" id="two" checked/>--}}
{{--                                                            <label for="two">احمر </label>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <input type="checkbox" id="three"/>--}}
{{--                                                            <label for="three">اسود</label>--}}
{{--                                                        </div>--}}
{{--                                                    </form>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button
                                            class="accordion-button"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#accordion-filter-7"
                                            aria-expanded="true"
                                            aria-controls="accordion-filter-7"
                                        >
                                            <h5 class="accordion-title mb-0"> @lang('site.price')</h5>
                                            <div class="arrow-accordion">
                                        <i class="far fa-angle-down"></i>
                                        </div>
                                        </button>
                                    </h2>
                                    <div
                                        id="accordion-filter-7"
                                        class="collapse show"
                                    >
                                        <div class="accordion-body">
                                            <div class="row align-items-center">
                                                <div class="custom-checkbox">
{{--                                                    <form>--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <input type="checkbox" id="two" checked/>--}}
{{--                                                            <label for="two"> 1000-0 دينار كويتى </label>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <input type="checkbox" id="three"/>--}}
{{--                                                            <label for="three"> 2000-1000 دينار كويتى </label>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <input type="checkbox" id="four"/>--}}
{{--                                                            <label for="four"> 3000-2000 دينار كويتى </label>--}}
{{--                                                        </div>--}}
{{--                                                    </form>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button
                                            class="accordion-button"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#accordion-filter-4"
                                            aria-expanded="true"
                                            aria-controls="accordion-filter-4"
                                        >
                                            <h5 class="accordion-title mb-0">@lang('site.comments')</h5>
                                            <div class="arrow-accordion">
                                        <i class="far fa-angle-down"></i>
                                        </div>
                                        </button>
                                    </h2>
                                    <div
                                        id="accordion-filter-4"
                                        class="collapse show"
                                    >
                                        <div class="accordion-body">
                                            <div class="row align-items-center">
                                                <div class="custom-checkbox">
                                                    <form>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="rate-1" checked/>
                                                            <label
                                                                for="rate-1"
                                                                class="d-flex align-items-center"
                                                            >
                                                                <div
                                                                    class="department-sm-badge bg-main text-white"
                                                                >
                                                                    <span>1</span>
                                                                    <span>
                                                                <i class="fas fa-star"></i>
                                                                </span>
                                                                </div>
                                                            </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="rate-2"/>
                                                            <label
                                                                for="rate-2"
                                                                class="d-flex align-items-center"
                                                            >
                                                                <div
                                                                    class="department-sm-badge bg-main text-white"
                                                                >
                                                                    <span>2</span>
                                                                    <span>
                                                                <i class="fas fa-star"></i>
                                                                </span>
                                                                </div>
                                                            </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="rate-3"/>
                                                            <label
                                                                for="rate-3"
                                                                class="d-flex align-items-center"
                                                            >
                                                                <div
                                                                    class="department-sm-badge bg-main text-white"
                                                                >
                                                                    <span>3</span>
                                                                    <span>
                                                                <i class="fas fa-star"></i>
                                                                </span>
                                                                </div>
                                                            </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="rate-4"/>
                                                            <label
                                                                for="rate-4"
                                                                class="d-flex align-items-center"
                                                            >
                                                                <div
                                                                    class="department-sm-badge bg-main text-white"
                                                                >
                                                                    <span>4</span>
                                                                    <span>
                                                                <i class="fas fa-star"></i>
                                                                </span>
                                                                </div>
                                                            </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="rate-5"/>
                                                            <label
                                                                for="rate-5"
                                                                class="d-flex align-items-center"
                                                            >
                                                                <div
                                                                    class="department-sm-badge bg-main text-white"
                                                                >
                                                                    <span>5</span>
                                                                    <span>
                                                                <i class="fas fa-star"></i>
                                                                </span>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lightbox-filter js-lightbox js-toggle-filter"></div>
                    </div>

                    <div class="col-lg-9">
                        <div class="row">
                            <div class="tabs-detaills mt-3" id="tabs-detaills">
{{--                                                                <div class="d-flex justify-content-lg-between flex-wrap">--}}
{{--                                                                   <div class="car-sort-by">--}}
{{--                                                                         @lang('site.order')--}}
{{--                                                                   </div>--}}
{{--                                                                   <ul class="tabs-nav-detaills list-unstyled d-flex mb-0 car-tabs flex-wrap">--}}

{{--                                                                        <li>--}}
{{--                                                                           <a--}}
{{--                                                                               href="#tab-car-1"--}}
{{--                                                                                class="tab-link d-flex align-items-center justify-content-center "--}}
{{--                                                                           >--}}
{{--                                                                                الافضل--}}
{{--                                                                            </a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li>--}}
{{--                                                                            <a--}}
{{--                                                                                href="#tab-car-2"--}}
{{--                                                                                class="tab-link d-flex align-items-center justify-content-center"--}}
{{--                                                                            >--}}
{{--                                                                                السعر من اعلي الي الاقل--}}
{{--                                                                            </a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li>--}}
{{--                                                                            <a--}}
{{--                                                                                href="#tab-car-3"--}}
{{--                                                                                class="tab-link d-flex align-items-center justify-content-center"--}}
{{--                                                                            >--}}
{{--                                                                                السعر من اقل الي الاعلي--}}
{{--                                                                            </a>--}}
{{--                                                                       </li>--}}
{{--                                                                        <li>--}}
{{--                                                                            <a--}}
{{--                                                                                href="#tab-car-4"--}}
{{--                                                                                class="tab-link d-flex align-items-center justify-content-center"--}}
{{--                                                                            >--}}
{{--                                                                                الاعلى تقيما--}}
{{--                                                                            </a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}

{{--                                                                </div>--}}

                                <ul class="tabs-contentt list-unstyled">

                                    <li id="tab-car-1" class="carhidden">
                                        @if(!empty($cars))
                                            @foreach($cars as $car )

                                                <div
                                                    class="card card-department round-border mb-3 p-md-3 p-2"
                                                >
                                                    <div class="row g-0">
                                                        <div class="col-md-4 position-relative">
                                                            <div
                                                                class="owl-carousel owl-theme department-img-carousel" id="myUL"
                                                            >
                                                                @if(!empty($car->images))
                                                                @foreach(explode(',',$car->images)  as $img)
                                                                    <div class="city-item">
                                                                        @if(!empty(auth()->user()))

                                                             <span class="department-like">
                                                           <a class="favouritess" id="favouritess{{$car->id}}" data-id="{{$car->id}}"><i class=" @if(count(\App\Models\CarUser::where('car_id', '=',$car->id)->where('user_id', '=', auth()->user()->id)->get()) > 0) fas @else far @endif far fa-heart "></i></a>
                                                                </span>
                                                                        @else
                                                                            <span class="department-like">
                                                                <a class="favouritess" id="favouritess{{$car->id}}" data-id="{{$car->id}}"><i class="far far fa-heart "></i></a>

                                                                                                                                </span>

                                                                                                                                        @endif

                                                                                                                                        <img
                                                                                                                                            loading="lazy"
                                                                                                                                            src="{{asset('images/cars/'.$img)}}"
                                                                                                                                            onerror="this.src='{{FRONTASSETS}}/images/cars/car-card-1.png'"

                                                                                                                                            class="department-img-list of-cover car-image"
                                                                                                                                            alt="image 1"
                                                                                                                                        />
                                                                                                                                    </div>
                                                                                                                                @endforeach

                                                                                                                                @else

                                                                                                                                    <div class="city-item">
                                                                                                                                                                    <span class="department-like">

                                                                <a class="favouritess" id="favouritess{{$car->id}}" data-id="{{$car->id}}"><i class=" @if(count(\App\Models\CarUser::where('car_id', '=',$car->id)->where('user_id', '=', auth()->user()->id)->get()) > 0) fas @else far @endif far fa-heart "></i></a>

                                                                </span>

                                                                        <img
                                                                            loading="lazy"
                                                                            src="{{FRONTASSETS}}/images/cars/car-card-1.png"
                                                                            onerror="this.src='{{FRONTASSETS}}/images/cars/car-card-1.png'"

                                                                            class="department-img-list of-cover car-image"
                                                                            alt="image 1"
                                                                        />
                                                                    </div>


                                                                @endif
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
                                                                    <span class="text-main number-ads" > 
                                                                        @lang('site.id number')( {{$car->id ?? ''}})</span >
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="d-flex justify-content-center align-items-center" >
                                                                            <div class="department-badge bg-main text-white">
                                                                                <div
                                                                                    class="pt-1">{{$car->CarReview->count() ?? 0}}</div>
                                                                                <div>
                                                                                <i class="fas fa-star"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="number-ads gray-txt">

                                                                                {{$car->carComment->count() ?? 0}} @lang('site.comments')
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h2 class="card-title mb-2">

                                                                    <label>{{$car->name ?? ''}}</label>
                                                                </h2>

                                                                <div class="gray-txt number-ads pb-2">
                                                                <span >
                                                                {!! html_entity_decode(substr($car->description, 0, 125)) !!}
                                                                </span>
                                                                </div>
                                                                <div
                                                                    class="text-gray-2 number-ads d-flex align-items-center"
                                                                >
                                                                    <div>
                                                                    <span class="cars-ic">
                                                                       <i class="fal fa-car-side"></i>
                                                                    </span>
                                                                        <span> @lang('site.car_numbers') {{$car->car_numbers ?? 0}}</span>

                                                                    </div>
                                                                    <div class="padding-35">

                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="d-flex align-items-center justify-content-between mt-3 display-block-mobile">
                                                                    <div class="department-price">
                                                                    <span class="text-gray-2"> @lang('site.price_day'):</span>
                                                                        <span class="fw-bold text-main">
                                                                        {{$car->fixed_price ?? ''}}
                                                                    </span>
                                                                    </div>
                                                                    <!-- <div class="department-price">
                                                                    <span class="text-gray-2"> @lang('site.year'):</span>
                                                                        <span class="fw-bold text-main">

                                                                     {{$car->year ?? ''}}
                                                                    </span>
                                                                    </div> -->
                                                                    <div
                                                                        class="details-btn d-flex align-items-center justify-content-center"
                                                                    >
                                                                        <a href="{{route('detailcar',$car->id)}}"> @lang('site.details')</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif

                                    </li>

                                    <li id="tab-car-1" class="carshow">
                                    </li>

                                </ul>
                            </div>
                        </div>


                        @if($cars->hasPages())
                            <div class="card card-department round-border mb-3 p-3">
                                <nav
                                    class="department-list-pagination d-md-flex justify-content-md-between align-items-center"
                                >
                                    <ul
                                        class="pagination mb-0 justify-content-lg-start justify-content-center "
                                    >
                                        <li class="page-item">
                                            <!-- <div>{{ $cars->appends(request()->query())->links()}} </div> -->
                                            {{ $cars->links() }}
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        @endif


                        <div class="card card-department round-border mb-3 p-3">
                            <h4 class="department-title mb-3">   @lang('site.Sign in and save money')</h4>
                            <p class="mb-4 department-txt">
                                @lang('site.You may be able to save')

                                <span class="fw-bold text-main"> 10% </span>
                                @lang('site.or more at this property at check-in')
                            </p>
                            <ul class="d-flex align-items-center px-0">
                                <li
                                    class="btn-outline-saeeh d-flex justify-content-center align-items-center btn-space-x"
                                >
                                    <a href="{{route('sitelogin')}}"

                                       class="btn btn-main border-0 btn-frm-owner"

                                    >

                                        @lang('site.login')
                                    </a>
                                </li>
                                <li
                                    class="btn-saeeh d-flex justify-content-center align-items-center"
                                >
                                    <a href="{{route('registers')}}"
                                       class="btn btn-main border-0 btn-frm-owner"

                                    >
                                        @lang('site.register')
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('scripts')


    <script>


        jQuery(document).ready(function () {
            jQuery('.favouritess').click(function (e) {
                e.preventDefault();

                var id = $(this).data('id');
                jQuery.ajax({
                    url: 'favouritCar/' + id,
                    method: 'GET',
                    data: {
                        '_token': '{{ csrf_token() }}',
                    },
                    success: function (result) {
                        console.log(result.status);
                        if (result.status == 'deleted')
                            $(`#favouritess${id} i`).addClass('far').removeClass('fas');
                        else if (result.status == 'added')
                            $(`#favouritess${id} i`).addClass('fas').removeClass('far');

                        else if (result.status == 'auth')
                            window.location.href = '{{route('sitelogin')}}';

                    },
                    error: function (err) {
                        console.log(err)
                    }
                });
            });
        });
    </script>
    <script>

       function getMySearch() {
//            var input, filter, ul, li, a, i, txtValue;
//            input = document.getElementById("myInput");
//            console.log('input', input);
//            filter = input.value.toLowerCase();
//            ul = document.getElementById("myUL");
//            li = ul.getElementsByClassName("city-item");
//            console.log(li);
//            for (i = 0; i < li.length; i++) {
//                a = li[i].getElementsByTagName("label");
//
//                txtValue = a.textContent || a.innerText;
//                console.log(txtValue);
//                if (txtValue.toLowerCase().indexOf(filter) > -1) {
//                    li[i].style.display = "";
//                } else {
//                    li[i].style.display = "none";
//                }
//            }
       }

        function GetAtrribute(id, name) {
            console.log('id', id);
            console.log('name', name);
            var checkbox = document.getElementById(id);

            if (checkbox.checked == true) {
                console.log('eeeeeeeeeeee');

                const url = '{{route('checkallcar')}}';

                // let data = {
                //     id: id,
                //     name:name
                // };
                var array_cat = [];
                $("input:checkbox[name=category_id]:checked").each(function () {
                    array_cat.push($(this).val());
                });
                var array_year = [];
                $("input:checkbox[name=year]:checked").each(function () {
                    array_year.push($(this).val());
                });
            var array_color = [];
                $("input:checkbox[name=color]:checked").each(function () {
                    array_color.push($(this).val());
                });
            var fixed_price = [];
                $("input:checkbox[name=fixed_price]:checked").each(function () {
                    fixed_price.push($(this).val());
                });

                var rate = [];
                $("input:checkbox[name=rate]:checked").each(function () {
                    rate.push($(this).val());
                });


                $.ajax({
                    type: "GET",
                    url: url,
                    data: {
                        name: name,
                        value: id,
                        array_category_id: array_cat,
                        rate: rate,
                        array_year: array_year,
                        array_color: array_color,
                        fixed_price: fixed_price,

                        // _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (data) {
                        $("#tab-car-2").hide();
                        // ('.carhidden').html(data);
                        $("#tab-car-1").show();
                        $("#tab-car-1").html(data);
                        console.log("response", data);
                    },
                    error: function (data, textStatus, errorThrown) {
                        console.log("error", data);
                    },
                });

                // let dataRequest = new Request(url, {
                //     method: 'POST',
                //     body: JSON.stringify(data),
                //     headers: new Headers({
                //         'Content-Type': 'application/json; charset=UTF-8'
                //     })
                // });
                //
                // fetch(dataRequest)
                //     .then(function() {
                //         // Handle response you get from the API
                //     });


                {{--    $.ajaxSetup({--}}
                {{--    headers: {--}}
                {{--    'X-CSRF-TOKEN': "{{ csrf_token() }}"--}}
                {{--}--}}
                {{--});--}}

                {{--    // $("#btn-submit").click(function(e){--}}

                {{--    // $("#add-form").submit(function(e){--}}


                {{--        // $('#spinnerss').show();--}}

                {{--        // e.preventDefault();--}}

                {{--        var data =id,name;--}}


                {{--        console.log(data);--}}
                {{--        var url = '{{route('CheckCar')}}';--}}

                {{--        $.ajax({--}}
                {{--            url:url,--}}
                {{--            method:'POST',--}}
                {{--            cache: false,--}}
                {{--            processData:false,--}}
                {{--            contentType: false,--}}
                {{--            enctype: 'multipart/form-data',--}}
                {{--            data: data,--}}
                {{--            success:function(response){--}}

                {{--                if(response.success){--}}
                {{--                    --}}{{--$('#spinnerss').hide();--}}
                {{--                    --}}{{--window.location.href ='{{route('dashboard.products.index')}}';--}}


                {{--                }else{--}}
                {{--                    alert("Error")--}}
                {{--                }--}}
                {{--            },--}}
                {{--            error:function(result){--}}
                {{--                console.log(result)--}}

                {{--            }--}}
                {{--        });--}}






            }
            // console.log(checkbox, 'clicks');
        }


    </script>

@endsection


