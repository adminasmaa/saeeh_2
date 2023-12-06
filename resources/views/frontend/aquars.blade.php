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

                        <li class="breadcrumb-item text-gray-4" aria-current="page">
                            {{$category->name ?? ''}}
                        </li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="py-4 filter-departments">
            <div class="container">
                <form action="{{route('filteraquars')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="box-search mb-lg-0 mb-md-0 mb-3">
                                        <select
                                            class="select2"
                                            id="country_id"
                                            name="country_id"

                                            required
                                        >
                                            <option value="">@lang('site.country')</option>
                                            @foreach($countries as $country)
                                                <option
                                                    value="{{$country->id}}">{{$country->name ?? ''}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="box-search mb-lg-0 mb-md-0 mb-3">
                                        <select
                                            class="select2"
                                            id="city_id"
                                            name="city_id"
                                            required>
                                            <option value="">@lang('site.city')</option>
                                            <!-- @foreach($cities as $city)
                                                <option
                                                   value="{{$city->id}}">{{$city->name ?? ''}}</option>






                                            @endforeach -->
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="box-search mb-lg-0 mb-md-0 mb-3">
                                        <select
                                            class="select2"
                                            id="list2"
                                            name="category_id"
                                        >
                                            <option value="">@lang('site.categories')</option>
                                            @foreach($CategoriesAquar as $cat)
                                                <option value="{{$cat->id ?? ''}}">{{$cat->name ?? ''}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="box-search mb-lg-0 mb-md-0 mb-3">


                                        <select
                                            class="select2"
                                            id="list4"
                                            name="number_rooms"
                                        >
                                            <option>@lang('site.room number')</option>

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
                        <h2 class="pb-3 search-result">    {{trans('site.We found apartments suitable for your request')}}  {{$allaquars->count() ?? 0}}</h2>
                        <div class="form-group mb-4 position-relative">
                            <input
                                type="search"
                                class="form-control search-saeeh"
                                placeholder="{{trans('site.Search for the Aquar name')}}"
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


                    {{--                 <div class="box-sort-by mb-lg-4 mb-md-4 mb-3 position-relative web-view">--}}
                    {{--                                    <span class="icon-top-select">--}}
                    {{--                                    <i class="far fa-chevron-up"></i>--}}
                    {{--                                   </span>--}}
                    {{--                                               <span class="icon-bottom-select">--}}
                    {{--                                               <i class="far fa-chevron-down"></i>--}}
                    {{--                                    </span>--}}
                    {{--                                                <select class="ddl-select" id="list-sort" name="list-sort">--}}
                    {{--                                                   <option>الترتيب حسب</option>--}}
                    {{--                                                    <option value="1">الافضل</option>--}}
                    {{--                                                    <option value="2">السعر من (الاعلي الي الاقل)</option>--}}
                    {{--                                                   <option value="3">السعر من (الاقل الي الاعلي)</option>--}}
                    {{--                                                 <option value="4">التقييمات من(1 الي 5)</option>--}}
                    {{--                                                   <option value="5">التقييمات من(5 الي1)</option>--}}
                    {{--                                               </select>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                </div>


                <div class="row">
                    <div class="col-lg-3">
                        <div class="accordion mb-5 web-view" id="accordion_filterr">
                            {{--                            <div class="filter-title">--}}
                            {{--                                <div class="d-flex justify-content-between">--}}
                            {{--                                    <h3 class="filter-count text-second fw-bold">--}}
                            {{--                                        366 من 2666 نتيجة--}}
                            {{--                                    </h3>--}}
                            {{--                                    <a href="#" class="delete-result text-main fw-bold"--}}
                            {{--                                    >ازالة</a--}}
                            {{--                                    >--}}
                            {{--                                </div>--}}
                            {{--                                <h2 class="text-second mb-0">تصفيه حسب:</h2>--}}
                            {{--                            </div>--}}
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button
                                        class="accordion-button"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordion-filterOne"
                                        aria-expanded="true"
                                        aria-controls="accordion-filterOne"
                                    >
                                        <h5 class="accordion-title mb-0">@lang('site.room number')</h5>
                                        <div class="arrow-accordion">
                                            <i class="far fa-angle-down"></i>
                                        </div>
                                    </button>
                                </h2>
                                <div id="accordion-filterOne"
                                     class=" collapse show" data-bs-parent="#abc">
                                    <div class="accordion-body">
                                        <div class="row align-items-center">
                                            <div class="custom-checkbox">
                                                <form>
                                                    @if(!empty($roomnumbers))
                                                        @foreach($roomnumbers as $key=>$room)
                                                            <div class="form-group">
                                                                <input type="checkbox" id="{{$key}}"
                                                                       name="room_number[]"
                                                                       onclick="GetAtrribute(this.id,this.name)"/>
                                                                <label for="{{$key}}">{{$room->total}}</label>
                                                            </div>
                                                        @endforeach
                                                    @endif

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
                                        data-bs-target="#accordion-filterTwo"
                                        aria-expanded="true"
                                        aria-controls="accordion-filterTwo"
                                    >
                                        <h5 class="accordion-title mb-0">@lang('site.floor_number')</h5>
                                        <div class="arrow-accordion">
                                            <i class="far fa-angle-down"></i>
                                        </div>
                                    </button>
                                </h2>
                                <div
                                    id="accordion-filterTwo"
                                    class="collapse show"
                                >
                                    <div class="accordion-body">
                                        <div class="row align-items-center">
                                            <div class="custom-checkbox">
                                                <form>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="two" name="floor_number"
                                                               onclick="GetAtrribute(this.id,this.name)"/>
                                                        <label for="two">2</label>
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
                                        data-bs-target="#accordion-filterThree"
                                        aria-expanded="true"
                                        aria-controls="accordion-filterThree"
                                    >
                                        <h5 class="accordion-title mb-0">@lang('site.price')</h5>
                                        <div class="arrow-accordion">
                                            <i class="far fa-angle-down"></i>
                                        </div>
                                    </button>
                                </h2>
                                <div id="accordion-filterThree" class=" collapse show">
                                    <div class="accordion-body">
                                        <div class="form-group">
                                            <div class="text-center">
                                                <label
                                                    for="price"
                                                    class="d-flex justify-content-between price"
                                                >
                                                    <div
                                                        class="text-gray-2 price-min d-flex align-items-center"
                                                    >
                                                        <input
                                                            type="number"
                                                            class="input-min-price filter__input"
                                                            name="price"
                                                            id="{{$minprice}}"
                                                            value="{{$minprice}}"
                                                            onchange="GetAtrribute(this.id,this.name)"
                                                        />
                                                        <!-- <span>دينار</span> -->
                                                    </div>
                                                    <div
                                                        class="text-gray-2 price-max d-flex align-items-center"
                                                    >
                                                        <input
                                                            type="number"
                                                            class="input-max-price filter__input"
                                                            name="price"
                                                            id="{{$maxprice}}"
                                                            value="{{$maxprice}}"
                                                            onchange="GetAtrribute(this.id,this.name)"
                                                        />
                                                        <!-- <span>دينار</span> -->
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="text-center">
                                                <div class="py-3 px-2">
                                                    <div class="col-12 range-slider">
                                                        <div class="filter-price">
                                                            <div
                                                                id="sliderPrice"
                                                                class="filter__slider-price"
                                                            ></div>
                                                        </div>
                                                    </div>
                                                </div>
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
                                        data-bs-target="#accordion-filterFour"
                                        aria-expanded="true"
                                        aria-controls="accordion-filterFour"
                                    >
                                        <h5 class="accordion-title mb-0">@lang('site.comments')</h5>
                                        <div class="arrow-accordion">
                                            <i class="far fa-angle-down"></i>
                                        </div>
                                    </button>
                                </h2>
                                <div id="accordion-filterFour" class=" collapse show">
                                    <div class="accordion-body">
                                        <div class="row align-items-center">
                                            <div class="custom-checkbox">
                                                <form>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="rate-1" name="rate"
                                                               value="1"
                                                               onclick="GetAtrribute(this.value,this.name)"/>
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
                                                        <input type="checkbox" id="rate-2" name="rate"
                                                               value="2"
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
                                                        <input type="checkbox" id="rate-3" name="rate"
                                                               value="3"
                                                               onclick="GetAtrribute(this.value,this.name)"/>
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
                                                        <input type="checkbox" id="rate-4" name="rate" value="4"
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
                                                        <input type="checkbox" id="rate-5" name="rate" value="5"
                                                               onclick="GetAtrribute(this.value,this.name)"/>
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
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button
                                        class="accordion-button"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordion-filterFive"
                                        aria-expanded="true"
                                        aria-controls="accordion-filterFive"
                                    >
                                        <h5 class="accordion-title mb-0">@lang('site.Accompanying')</h5>
                                        <div class="arrow-accordion">
                                            <i class="far fa-angle-down"></i>
                                        </div>
                                    </button>
                                </h2>
                                <div id="accordion-filterFive" class=" collapse show">
                                    <div class="accordion-body">
                                        <div class="row align-items-center">
                                            <div class="custom-checkbox">
                                                <form>
                                                    @foreach($allaquars as $Aqr)
                                                        @foreach($Aqr->aqarSection->unique('name_ar') as $key=>$section )
                                                            <div class="form-group">
                                                                <input type="checkbox" id="{{$section->id}}"
                                                                       name="sections"
                                                                       value="{{$section->id}}"
                                                                       onclick="GetAtrribute(this.id,this.name)"/>
                                                                <label for="{{$section->id}}">
                                                                    <span class="ic-water">
                                                                    <i class="far fa-water"></i>
                                                                    </span>
                                                                    <span>{{$section->name_ar ?? ''}}</span>
                                                                </label>
                                                            </div>
                                                        @endforeach
                                                    @endforeach
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--                        <div class="filter_icon show_mobile">--}}
                        {{--                            <div class="d-flex justify-content-between align-items-center mb-3">--}}
                        {{--                                <div class="filter-btn js-toggle-filter fw-bold">--}}
                        {{--                                    <i class="fas fa-filter"></i> تصفية--}}
                        {{--                                </div>--}}
                        {{--                                <div class="">--}}
                        {{--                                    <a--}}
                        {{--                                        class="text-second fw-bold"--}}
                        {{--                                        href="#"--}}
                        {{--                                        data-bs-toggle="modal"--}}
                        {{--                                        data-bs-target="#SortByModal"><i class="fas fa-sort"></i> الترتيب</a>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="">--}}
                        {{--                                    --}}{{--                                    <a--}}
                        {{--                                    --}}{{--                                        class="text-second fw-bold"--}}
                        {{--                                    --}}{{--                                        href="#"--}}
                        {{--                                    --}}{{--                                        data-bs-toggle="modal"--}}
                        {{--                                    --}}{{--                                        data-bs-target="#mapModal"><i class="far fa-map"></i> الخريطة</a>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        <div class="show_mobile filter js-filter">
                            <div class="accordion" id="accordion_filter">
                                <div
                                    onclick="closeFilter()"
                                    class="d-flex justify-content-end"
                                >
                                    <i class="fas fa-times close-side-filter"></i>
                                </div>
                                <div class="filter-title">
                                    {{--                                    <div class="d-flex justify-content-between">--}}
                                    {{--                                        <h3 class="filter-count text-second fw-bold">--}}
                                    {{--                                            366 من 2666 نتيجة--}}
                                    {{--                                        </h3>--}}
                                    {{--                                        <a href="#" class="delete-result text-main fw-bold"--}}
                                    {{--                                        >ازالة</a--}}
                                    {{--                                        >--}}
                                    {{--                                    </div>--}}
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
                                            <h5 class="accordion-title mb-0">عدد الغرف</h5>
                                            <div class="arrow-accordion">
                                                <i class="far fa-angle-down"></i>
                                            </div>
                                        </button>
                                    </h2>
                                    <div
                                        id="accordion-filter-1"
                                        class=" collapse show"
                                    >
                                        <div class="accordion-body">
                                            <div class="row align-items-center">
                                                <div class="custom-checkbox">
                                                    <form>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="two"
                                                                   onclick="GetAtrribute(this.id,this.name)"/>
                                                            <label for="two">2</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="three"/>
                                                            <label for="three">3</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="four"/>
                                                            <label for="four">4</label>
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
                                            <h5 class="accordion-title mb-0">عدد الادوار</h5>
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
                                                    <form>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="1" name="category_id"
                                                                   onclick="GetAtrribute(this.id,this.name)"/>


                                                            <label for="1">8</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="three"/>
                                                            <label for="three">3</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="four"/>
                                                            <label for="four">4</label>
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
                                            data-bs-target="#accordion-filter-3"
                                            aria-expanded="true"
                                            aria-controls="accordion-filter-3"
                                        >
                                            <h5 class="accordion-title mb-0">@lang('site.price')</h5>
                                            <div class="arrow-accordion">
                                                <i class="far fa-angle-down"></i>
                                            </div>
                                        </button>
                                    </h2>
                                    <div
                                        id="accordion-filter-3"
                                        class=" collapse show"
                                    >
                                        <div class="accordion-body">
                                            <div class="form-group">
                                                <div class="text-center">
                                                    <label
                                                        for="price"
                                                        class="d-flex justify-content-between price"
                                                    >
                                                        <div
                                                            class="text-gray-2 price-min d-flex align-items-center"
                                                        >
                                                            <input
                                                                type="number"
                                                                class="input-min-price filter__input"
                                                                name="price"
                                                                id="{{$minprice}}"
                                                                value="{{$minprice}}"
                                                                onchange="GetAtrribute(this.id,this.name)"
                                                            />
                                                            <span>دينار</span>
                                                        </div>
                                                        <div
                                                            class="text-gray-2 price-max d-flex align-items-center"
                                                        >
                                                            <input
                                                                type="number"
                                                                class="input-max-price filter__input"
                                                                name="price"
                                                                id="{{$minprice}}"
                                                                value="{{$minprice}}"
                                                                onchange="GetAtrribute(this.id,this.name)"
                                                            />
                                                            <span>دينار</span>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="text-center">
                                                    <div class="card-body">
                                                        <div class="col-12 range-slider">
                                                            <div class="filter-price">
                                                                <div
                                                                    id="sliderPrice"
                                                                    class="filter__slider-price"
                                                                ></div>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                                            <input type="checkbox" id="rate-1" name="rate" value="1"
                                                                   onclick="GetAtrribute(this.value,this.name)"/>


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

                                                            <input type="checkbox" id="rate-2" name="rate" value="2"
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
                                                            <input type="checkbox" id="rate-3" name="rate" value="3"
                                                                   onclick="GetAtrribute(this.value,this.name)"/>
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

                                                            <input type="checkbox" id="rate-4" name="rate" value="4"
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

                                                            <input type="checkbox" id="rate-5" name="rate" value="5"
                                                                   onclick="GetAtrribute(this.value,this.name)"/>
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
                                            <h5 class="accordion-title mb-0">المرافق</h5>
                                            <div class="arrow-accordion">
                                                <i class="far fa-angle-down"></i>
                                            </div>
                                        </button>
                                    </h2>
                                    <div
                                        id="accordion-filter-7"
                                        class=" collapse show"
                                    >
                                        <div class="accordion-body">
                                            <div class="row align-items-center">
                                                <div class="custom-checkbox">
                                                    <form>
                                                        @foreach($allaquars as $Aqr)
                                                            @foreach($Aqr->aqarSection->unique('name_ar') as $key=>$section )
                                                                <div class="form-group">
                                                                    <input type="checkbox" id="{{$section->id}}"
                                                                           name="sections"
                                                                           value="{{$section->id}}"
                                                                           onclick="GetAtrribute(this.id,this.name)"/>
                                                                    <label for="{{$section->id}}">
                                                                    <span class="ic-water">
                                                                    <i class="far fa-water"></i>
                                                                    </span>
                                                                        <span>{{$section->name ?? ''}}</span>
                                                                    </label>
                                                                </div>
                                                            @endforeach
                                                        @endforeach


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
                        <div id="tab-aquar-2">
                            @foreach($aquars as $aquar)
                                <div class="card card-department round-border mb-3 p-lg-3 p-2" >
                                    <div class="row g-0">
                                        <div class="col-lg-4 position-relative">
                                            <div
                                                class="owl-carousel owl-theme department-img-carousel"
                                            >
                                                @if(!empty($aquar->images))
                                                    @foreach(explode(',',$aquar->images) as $img)
                                                        <div>

                                                            @if(!empty(auth()->user()))
                                                                <span class="department-like">
                                                           <a class="favouritess" id="favouritess{{$aquar->id}}"
                                                              data-id="{{$aquar->id}}"><i
                                                                   class=" @if(count(\App\Models\AquarUser::where('aqar_id', '=',$aquar->id)->where('user_id', '=', auth()->user()->id)->get()) > 0) fas @else far @endif far fa-heart "></i></a>

                                                                </span>

                                                            @else
                                                                <span class="department-like">
                                                                <a class="favouritess" id="favouritess{{$aquar->id}}"
                                                                   data-id="{{$aquar->id}}">
                                                                <i class="far far fa-heart "></i></a>
                                                            </span>

                                                            @endif

                                                            <img
                                                                loading="lazy"
                                                                src="{{asset('images/aqars/'.$img)}}"
                                                                onerror="this.src='{{FRONTASSETS}}/images/department-1.svg'"
                                                                class="department-img-list of-cover"
                                                                alt="image 1"
                                                            />
                                                        </div>
                                                    @endforeach

                                                @else

                                                    <div>
                                                        @if(!empty(auth()->user()))
                                                            <span class="department-like">
                                                                    <a class="favouritess"
                                                                       id="favouritess{{$aquar->id}}"
                                                                       data-id="{{$aquar->id}}"><i
                                                                            class=" @if(count(\App\Models\AquarUser::where('aqar_id', '=',$aquar->id)->where('user_id', '=', auth()->user()->id)->get()) > 0) fas @else far @endif far fa-heart "></i></a>
                                                                </span>
                                                        @endif

                                                        <img
                                                            loading="lazy"
                                                            src="{{FRONTASSETS}}/images/department-1.svg"
                                                            class="department-img-list of-cover"
                                                            alt="image 1"
                                                        />
                                                    </div>
                                                    <div>
                                                          <span class="department-like">
                                                                @if(!empty(auth()->user()))
                                                                  <a class="favouritess" id="favouritess{{$aquar->id}}"
                                                                     data-id="{{$aquar->id}}"><i
                                                                          class=" @if(count(\App\Models\AquarUser::where('aqar_id', '=',$aquar->id)->where('user_id', '=', auth()->user()->id)->get()) > 0) fas @else far @endif far fa-heart "></i></a>

                                                                </span>

                                                        @endif

                                                        <img
                                                            loading="lazy"
                                                            src="{{FRONTASSETS}}/images/department-2.svg"
                                                            class="department-img-list of-cover"
                                                            alt="image 1"
                                                        />
                                                    </div>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="card-body position-relative">
                                                <div
                                                    class="row justify-content-lg-between align-items-center mb-1"
                                                >
                                                    <div class="col-lg-4 mb-lg-0 mb-3">
                                                        <div class="text-main number-ads">
                                                            @lang('site.id number')({{$aquar->id}})
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div
                                                            class="d-flex justify-content-lg-end align-items-center"
                                                        >
                                                            <div class="department-badge bg-main text-white">
                                                                <span>     {{ round($aquar->aqarReview->avg('rate')) ?? 0}}</span>
                                                                <span>
                                                                   <i class="fas fa-star"></i>
                                                                </span>
                                                            </div>
                                                            <div class="number-ads gray-txt">
                                                                @lang('site.comments')

                                                                {{$aquar->aqarComment->count() ?? 0}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h2 class="card-title mb-2">
                                                    {{$aquar->name ?? ''}}
                                                </h2>

                                                <div class="gray-txt number-ads">
                                                    <i class="far fa-map-marker-alt"></i>

                                                    <span> {{$aquar->country->name ?? ''}} , {{$aquar->city->name ?? ''}}</span>
                                                    <!-- <span> {{$aquar->address?? ''}} </span> -->
                                                </div>
                                                <div class="pt-3">
                                                       <span class="text-main position-department">
                                                            {!! html_entity_decode(substr($aquar->description, 0, 125)) !!}
                                                    </span>
                                                </div>

                                                <div
                                                    class="d-lg-flex align-items-center justify-content-lg-between mt-2"
                                                >
                                                    <div class="department-price">
                                                        <span class="text-gray-2">@lang('site.price_day'):</span>
                                                        <span class="fw-bold text-main"
                                                        > {{$aquar->fixed_price ?? ''}} درهم مغربي
                                                            </span>
                                                    </div>

                                                    <div
                                                        class="details-btn d-flex align-items-center justify-content-center mt-lg-0 mt-3"
                                                    >
                                                        <a href="{{route('detailaquar',$aquar->id)}}">@lang('site.details')</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach







                        </div>

                        @if($aquars->hasPages())
                            <div class="card card-department round-border mb-3 p-3 tab-aquar-3">
                                <nav
                                    class="department-list-pagination d-md-flex justify-content-md-between align-items-center"
                                >
                                    <ul
                                        class="pagination mb-0 justify-content-lg-start justify-content-center"
                                    >
                                        <li class="page-item">
                                            <!-- <div>{{ $aquars->appends(request()->query())->links()}} </div> -->
                                            {{ $aquars->links() }}
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        @endif

                        @if(!empty(auth()->user()))

                        @else

                            <div class="card card-department round-border mb-3 p-3">

                                <h4 class="department-title mb-md-3 mb-1">    @lang('site.freediscount') </h4>
                                <p class="department-txt">@lang('site.loginSignup') <a href="{{route('sitelogin')}}"
                                                                                       class="fw-bold text-main">@lang('site.login')</a>
                                </p>
                                {{--                            <p class="mb-4 department-txt">--}}
                                {{--                                قد تتمكن من توفير <span class="fw-bold text-main"> 10% </span>--}}
                                {{--                                أو أكثر في مكان الإقامة هذا عند تسجيل الدخول--}}
                                {{--                            </p>--}}
                                <ul class="d-flex align-items-center p-0">
                                    <li
                                        class="btn-outline-saeeh d-flex justify-content-center align-items-center btn-space-x"
                                    >
                                        <a href="{{route('registers')}}">  @lang('site.register') </a>
                                    </li>
                                    <li
                                        class="btn-saeeh d-flex justify-content-center align-items-center"
                                    >
                                        <a href="{{route('sitelogin')}}">@lang('site.login') </a>

                                    </li>
                                </ul>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--sort by Modal-->
    <div class="modal fade modal-custom modal-sort-by" id="SortByModal" tabindex="-1"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title text-black">الترتيب حسب :</h2>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <form class="pt-3">
                                <label>
                                    <input type="radio" name="radio" checked/>
                                    <span>الافضل</span>
                                </label>
                                <label>
                                    <input type="radio" name="radio"/>
                                    <span>السعر من (الاعلي الي الاقل)</span>
                                </label>
                                <label>
                                    <input type="radio" name="radio"/>
                                    <span>السعر من (الاقل الي الاعلي)</span>
                                </label>
                                <label>
                                    <input type="radio" name="radio"/>
                                    <span>التقييمات من(1 الي 5)</span>
                                </label>
                                <label>
                                    <input type="radio" name="radio"/>
                                    <span>التقييمات من(5 الي1)</span>
                                </label>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
@section('scripts')

    <script>


        jQuery(document).ready(function () {
            jQuery('.favouritess').click(function (e) {
                e.preventDefault();

                var id = $(this).data('id');
                jQuery.ajax({
                    url: 'favouritAqar/' + id,
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

        const slider = document.getElementById("sliderPrice");
        const rangeMin = {{$minprice}};
        const rangeMax = {{$maxprice}};
        const step = 2;
        const filterInputs = document.querySelectorAll("input.filter__input");
        noUiSlider.create(slider, {
            start: [rangeMin, rangeMax],
            direction: "{{app()->isLocale('ar')? 'rtl' : 'ltr'}}",
            connect: true,
            step: step,
            range: {
                min: rangeMin,
                max: rangeMax,
            },

            // make numbers whole
            format: {
                to: (value) => value,
                from: (value) => value,
            },
        });

        // bind inputs with noUiSlider
        slider.noUiSlider.on("update", (values, handle) => {
            filterInputs[handle].value = parseInt(values[handle]);
            console.log("ddadadad", parseInt(values[handle]));

            GetAtrribute(parseInt(values[handle]), 'price')

        });

        filterInputs.forEach((input, indexInput) => {
            input.addEventListener("change", () => {
                slider.noUiSlider.setHandle(indexInput, parseInt(input.value));

                console.log('dataaaa');
            });
        });


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
        //Start comment to search laravel
        {{--function GetAtrribute(id, name) {--}}
        {{--    console.log('id', id);--}}
        {{--    console.log('name', name);--}}
        {{--    var checkbox = document.getElementById(id);--}}

        {{--    if (name) {--}}
        {{--        console.log('eeeeeeeeeeee');--}}

        {{--        const url = '{{route('checkallaquar')}}';--}}

        {{--        // let data = {--}}
        {{--        //     id: id,--}}
        {{--        //     name:name--}}
        {{--        // };--}}
        {{--        var array_room_number = [];--}}
        {{--        $("input:checkbox[name=room_number]:checked").each(function () {--}}
        {{--            array_room_number.push($(this).val());--}}
        {{--        });--}}
        {{--        var array_floor_number = [];--}}
        {{--        $("input:checkbox[name=floor_number]:checked").each(function () {--}}
        {{--            array_floor_number.push($(this).val());--}}
        {{--        });--}}
        {{--        var array_price = [];--}}
        {{--        // $("input:number[name=price]").each(function () {--}}
        {{--        //     array_price.push($(this).val());--}}
        {{--        // });--}}
        {{--        var array_sections = [];--}}
        {{--        $("input:checkbox[name=sections]:checked").each(function () {--}}
        {{--            array_sections.push($(this).val());--}}
        {{--        });--}}

        {{--        var rate = [];--}}
        {{--        $("input:checkbox[name=rate]:checked").each(function () {--}}
        {{--            rate.push($(this).val());--}}
        {{--        });--}}
        {{--        console.log('array_price', array_price);--}}
        {{--        console.log('array_sections', array_sections);--}}
        {{--        console.log('rate', rate);--}}

        {{--        $.ajax({--}}
        {{--            type: "GET",--}}
        {{--            url: url,--}}
        {{--            data: {--}}
        {{--                name: name,--}}
        {{--                value: id,--}}
        {{--                room_number: array_room_number,--}}
        {{--                rate: rate,--}}
        {{--                floor_number: array_floor_number,--}}
        {{--                sections: array_sections,--}}
        {{--                price: id,--}}

        {{--                // _token: $('meta[name="csrf-token"]').attr('content')--}}
        {{--            },--}}
        {{--            success: function (data) {--}}
        {{--                $("#tab-aquar-2").hide();--}}
        {{--                // ('.carhidden').html(data);--}}
        {{--                $("#tab-aquar-3").show();--}}
        {{--                $("#tab-aquar-3").html(data);--}}
        {{--                console.log("response", data);--}}
        {{--            },--}}
        {{--            error: function (data, textStatus, errorThrown) {--}}
        {{--                console.log("error", data);--}}
        {{--            },--}}
        {{--        });--}}

        {{--        // let dataRequest = new Request(url, {--}}
        {{--        //     method: 'POST',--}}
        {{--        //     body: JSON.stringify(data),--}}
        {{--        //     headers: new Headers({--}}
        {{--        //         'Content-Type': 'application/json; charset=UTF-8'--}}
        {{--        //     })--}}
        {{--        // });--}}
        {{--        //--}}
        {{--        // fetch(dataRequest)--}}
        {{--        //     .then(function() {--}}
        {{--        //         // Handle response you get from the API--}}
        {{--        //     });--}}


        {{--        --}}{{--    $.ajaxSetup({--}}
        {{--        --}}{{--    headers: {--}}
        {{--        --}}{{--    'X-CSRF-TOKEN': "{{ csrf_token() }}"--}}
        {{--        --}}{{--}--}}
        {{--        --}}{{--});--}}

        {{--        --}}{{--    // $("#btn-submit").click(function(e){--}}

        {{--        --}}{{--    // $("#add-form").submit(function(e){--}}


        {{--        --}}{{--        // $('#spinnerss').show();--}}

        {{--        --}}{{--        // e.preventDefault();--}}

        {{--        --}}{{--        var data =id,name;--}}


        {{--        --}}{{--        console.log(data);--}}
        {{--        --}}{{--        var url = '{{route('CheckCar')}}';--}}

        {{--        --}}{{--        $.ajax({--}}
        {{--        --}}{{--            url:url,--}}
        {{--        --}}{{--            method:'POST',--}}
        {{--        --}}{{--            cache: false,--}}
        {{--        --}}{{--            processData:false,--}}
        {{--        --}}{{--            contentType: false,--}}
        {{--        --}}{{--            enctype: 'multipart/form-data',--}}
        {{--        --}}{{--            data: data,--}}
        {{--        --}}{{--            success:function(response){--}}

        {{--        --}}{{--                if(response.success){--}}
        {{--        --}}{{--                    --}}{{----}}{{--$('#spinnerss').hide();--}}
        {{--        --}}{{--                    --}}{{----}}{{--window.location.href ='{{route('dashboard.products.index')}}';--}}


        {{--        --}}{{--                }else{--}}
        {{--        --}}{{--                    alert("Error")--}}
        {{--        --}}{{--                }--}}
        {{--        --}}{{--            },--}}
        {{--        --}}{{--            error:function(result){--}}
        {{--        --}}{{--                console.log(result)--}}

        {{--        --}}{{--            }--}}
        {{--        --}}{{--        });--}}






        {{--    }--}}
        {{--    // console.log(checkbox, 'clicks');--}}
        {{--}--}}
        //End  comment to search laravel

    </script>


    <script type="text/javascript">
        $('.search-saeeh').on('keyup', function () {
            var query = $(this).val();
            $.ajax({
                url: "{{ route('searchAqars',$category->id) }}",
                type: "GET",
                data: {'query': query},
                success: function (data) {
                    $("#tab-aquar-2").empty();
                    $(".tab-aquar-3").hide();

                    $("#tab-aquar-2").html(data);
                    console.log("response", data);
                }
            })
        });

    </script>

@endsection

