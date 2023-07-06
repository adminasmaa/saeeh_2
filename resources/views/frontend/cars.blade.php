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
                            <a href="javascript:void(0)"> @lang('site.home') </a>
                        </li>
                        <li>
                <span
                ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="9"
                        height="15"
                        viewBox="0 0 9 15"
                        fill="none"
                    >
                    <path
                        d="M6.71329 13.9459L0.745584 7.99587C0.67475 7.92503 0.624459 7.8483 0.594709 7.76566C0.564959 7.68302 0.55032 7.59448 0.550792 7.50003C0.550792 7.40559 0.565431 7.31705 0.594709 7.23441C0.623987 7.15177 0.674278 7.07503 0.745584 7.0042L6.71329 1.03649C6.87857 0.871213 7.08517 0.788574 7.33308 0.788574C7.581 0.788574 7.7935 0.877116 7.97058 1.0542C8.14767 1.23128 8.23621 1.43788 8.23621 1.67399C8.23621 1.9101 8.14767 2.1167 7.97058 2.29378L2.76433 7.50003L7.97058 12.7063C8.13586 12.8716 8.2185 13.0753 8.2185 13.3176C8.2185 13.5598 8.12996 13.7693 7.95288 13.9459C7.77579 14.1229 7.56919 14.2115 7.33308 14.2115C7.09697 14.2115 6.89038 14.1229 6.71329 13.9459Z"
                        fill="#005D9F"
                    />
                  </svg>
                </span>
                        </li>
                        <li class="breadcrumb-item text-gray-4" aria-current="page">
                            نتايج البحث
                        </li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="py-4 filter-departments">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg">
                                <div class="box-search mb-lg-0 mb-md-0 mb-3">


                                    <select
                                        class="select2"
                                        id="country_id"
                                        name="country_id"
                                    >
                                        <option>@lang('site.country')</option>
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
                                    >
                                        <option>@lang('site.city')</option>
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
                                        id="list9"
                                        name="list9"
                                    >
                                        <option>@lang('site.category')</option>
                                        <!-- @foreach($CategoriesCar as $cat)
                                            <option value="{{$cat->id ?? ''}}">{{$cat->name ?? ''}}</option>




                                        @endforeach -->
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg">
                                <div class="box-search mb-lg-0 mb-md-0 mb-3">

                                    <select
                                        class="select2"
                                        id="list6"
                                        name="list6"
                                    >
                                        <option>@lang('site.brands')</option>
                                        @foreach($CategoriesCar as $cat)
                                            <option value="{{$cat->id ?? ''}}">{{$cat->name ?? ''}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="box-search mb-lg-0 mb-md-0 mb-3">


                                    <select
                                        class="ddl-select" id="list5"
                                        name="list8"
                                    >
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
                            <a href="#">بحث</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Both Content & Filters -->
        <section class="py-md-5 py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 web-view">
                        <a
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#mapModal"
                            class="d-block"
                        >
                            <div class="map-box mb-lg-0 mb-3">
                                <img src="{{FRONTASSETS}}/images/map.png" alt="map"/>
                                <div
                                    class="map-data d-flex h-100 w-100 justify-content-center align-items-center"
                                >
                                    <h4 class="title-map">ابحث علي الخريطة</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <h2 class="pb-3 search-result">
                            {{--                            المغرب :وجدنا 44 سيارة مناسبة لطلبك--}}
                        </h2>
                        <div class="form-group mb-4 position-relative">
                            <input
                                type="search"
                                class="form-control search-saeeh"
                                placeholder="ابحث عن اسم السيارة "
                                id="search"
                                name="q"
                            />
                            <div class="search-icon">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="18"
                                    height="18"
                                    viewBox="0 0 18 18"
                                    fill="none"
                                >
                                    <path
                                        d="M15.9 17.3L10.3 11.7C9.8 12.1 9.225 12.4167 8.575 12.65C7.925 12.8833 7.23333 13 6.5 13C4.68333 13 3.146 12.3707 1.888 11.112C0.63 9.85333 0.000666667 8.316 0 6.5C0 4.68333 0.629333 3.146 1.888 1.888C3.14667 0.63 4.684 0.000666667 6.5 0C8.31667 0 9.854 0.629333 11.112 1.888C12.37 3.14667 12.9993 4.684 13 6.5C13 7.23333 12.8833 7.925 12.65 8.575C12.4167 9.225 12.1 9.8 11.7 10.3L17.325 15.925C17.5083 16.1083 17.6 16.3333 17.6 16.6C17.6 16.8667 17.5 17.1 17.3 17.3C17.1167 17.4833 16.8833 17.575 16.6 17.575C16.3167 17.575 16.0833 17.4833 15.9 17.3ZM6.5 11C7.75 11 8.81267 10.5623 9.688 9.687C10.5633 8.81167 11.0007 7.74933 11 6.5C11 5.25 10.5623 4.18733 9.687 3.312C8.81167 2.43667 7.74933 1.99933 6.5 2C5.25 2 4.18733 2.43767 3.312 3.313C2.43667 4.18833 1.99933 5.25067 2 6.5C2 7.75 2.43767 8.81267 3.313 9.688C4.18833 10.5633 5.25067 11.0007 6.5 11Z"
                                        fill="#CACACA"
                                    />
                                </svg>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <div class="accordion mb-5 mt-3 web-view" id="accordion_filter">
                            <div class="filter-title">
                                <div class="d-flex justify-content-between">
                                    <h3 class="filter-count text-second fw-bold">
                                        366 من 2666 نتيجة
                                    </h3>
                                    <a href="#" class="delete-result text-main fw-bold"
                                    >ازالة</a
                                    >
                                </div>
                                <h2 class="text-second mb-0">تصفيه حسب:</h2>
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
                                        <h5 class="accordion-title mb-0">الماركة</h5>

                                        <div>
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="15"
                                                height="8"
                                                viewBox="0 0 15 8"
                                                fill="none"
                                            >
                                                <path
                                                    d="M7.20766 7.19064C6.62556 7.19064 6.04345 6.96482 5.60272 6.52155L0.180867 1.06845C-0.060289 0.825909 -0.060289 0.424455 0.180867 0.181909C0.422023 -0.0606364 0.821178 -0.0606364 1.06233 0.181909L6.48419 5.635C6.88334 6.03645 7.53197 6.03645 7.93112 5.635L13.353 0.181909C13.5941 -0.0606364 13.9933 -0.0606364 14.2344 0.181909C14.4756 0.424455 14.4756 0.825909 14.2344 1.06845L8.81259 6.52155C8.37186 6.96482 7.78976 7.19064 7.20766 7.19064Z"
                                                    fill="#005D9F"
                                                />
                                            </svg>
                                        </div>
                                    </button>
                                </h2>
                                <div
                                    id="accordion-filter-1"
                                    class="accordion-collapse collapse show"
                                >
                                    <div class="accordion-body">
                                        <div class="row align-items-center">
                                            <div class="custom-checkbox">
                                                <form>
                                                    @foreach($CategoriesCar as $cat)

                                                        <div class="form-group">
                                                            <input type="checkbox" id="two" value="{{$cat->id}}"/>
                                                            <label for="two">
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
                                        <h5 class="accordion-title mb-0">الفئة</h5>
                                        <div>
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="15"
                                                height="8"
                                                viewBox="0 0 15 8"
                                                fill="none"
                                            >
                                                <path
                                                    d="M7.20766 7.19064C6.62556 7.19064 6.04345 6.96482 5.60272 6.52155L0.180867 1.06845C-0.060289 0.825909 -0.060289 0.424455 0.180867 0.181909C0.422023 -0.0606364 0.821178 -0.0606364 1.06233 0.181909L6.48419 5.635C6.88334 6.03645 7.53197 6.03645 7.93112 5.635L13.353 0.181909C13.5941 -0.0606364 13.9933 -0.0606364 14.2344 0.181909C14.4756 0.424455 14.4756 0.825909 14.2344 1.06845L8.81259 6.52155C8.37186 6.96482 7.78976 7.19064 7.20766 7.19064Z"
                                                    fill="#005D9F"
                                                />
                                            </svg>
                                        </div>
                                    </button>
                                </h2>
                                <div
                                    id="accordion-filter-2"
                                    class="accordion-collapse collapse show"
                                >
                                    <div class="accordion-body">
                                        <div class="row align-items-center">
                                            <div class="custom-checkbox">
                                                <form>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="two" checked/>
                                                        <label for="two">touareg</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="three"/>
                                                        <label for="three">3008</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="four"/>
                                                        <label for="four">GIS</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="fou"/>
                                                        <label for="fou">208</label>
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
                                        data-bs-target="#accordion-filter-5"
                                        aria-expanded="true"
                                        aria-controls="accordion-filter-5"
                                    >
                                        <h5 class="accordion-title mb-0">السنة</h5>
                                        <div>
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="15"
                                                height="8"
                                                viewBox="0 0 15 8"
                                                fill="none"
                                            >
                                                <path
                                                    d="M7.20766 7.19064C6.62556 7.19064 6.04345 6.96482 5.60272 6.52155L0.180867 1.06845C-0.060289 0.825909 -0.060289 0.424455 0.180867 0.181909C0.422023 -0.0606364 0.821178 -0.0606364 1.06233 0.181909L6.48419 5.635C6.88334 6.03645 7.53197 6.03645 7.93112 5.635L13.353 0.181909C13.5941 -0.0606364 13.9933 -0.0606364 14.2344 0.181909C14.4756 0.424455 14.4756 0.825909 14.2344 1.06845L8.81259 6.52155C8.37186 6.96482 7.78976 7.19064 7.20766 7.19064Z"
                                                    fill="#005D9F"
                                                />
                                            </svg>
                                        </div>
                                    </button>
                                </h2>
                                <div
                                    id="accordion-filter-5"
                                    class="accordion-collapse collapse show"
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
                                        <h5 class="accordion-title mb-0">اللون</h5>
                                        <div>
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="15"
                                                height="8"
                                                viewBox="0 0 15 8"
                                                fill="none"
                                            >
                                                <path
                                                    d="M7.20766 7.19064C6.62556 7.19064 6.04345 6.96482 5.60272 6.52155L0.180867 1.06845C-0.060289 0.825909 -0.060289 0.424455 0.180867 0.181909C0.422023 -0.0606364 0.821178 -0.0606364 1.06233 0.181909L6.48419 5.635C6.88334 6.03645 7.53197 6.03645 7.93112 5.635L13.353 0.181909C13.5941 -0.0606364 13.9933 -0.0606364 14.2344 0.181909C14.4756 0.424455 14.4756 0.825909 14.2344 1.06845L8.81259 6.52155C8.37186 6.96482 7.78976 7.19064 7.20766 7.19064Z"
                                                    fill="#005D9F"
                                                />
                                            </svg>
                                        </div>
                                    </button>
                                </h2>
                                <div
                                    id="accordion-filter-6"
                                    class="accordion-collapse collapse show"
                                >
                                    <div class="accordion-body">
                                        <div class="row align-items-center">
                                            <div class="custom-checkbox">
                                                <form>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="two" checked/>
                                                        <label for="two">احمر </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="three"/>
                                                        <label for="three">اسود</label>
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
                                        <h5 class="accordion-title mb-0">السعر باليوم</h5>
                                        <div>
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="15"
                                                height="8"
                                                viewBox="0 0 15 8"
                                                fill="none"
                                            >
                                                <path
                                                    d="M7.20766 7.19064C6.62556 7.19064 6.04345 6.96482 5.60272 6.52155L0.180867 1.06845C-0.060289 0.825909 -0.060289 0.424455 0.180867 0.181909C0.422023 -0.0606364 0.821178 -0.0606364 1.06233 0.181909L6.48419 5.635C6.88334 6.03645 7.53197 6.03645 7.93112 5.635L13.353 0.181909C13.5941 -0.0606364 13.9933 -0.0606364 14.2344 0.181909C14.4756 0.424455 14.4756 0.825909 14.2344 1.06845L8.81259 6.52155C8.37186 6.96482 7.78976 7.19064 7.20766 7.19064Z"
                                                    fill="#005D9F"
                                                />
                                            </svg>
                                        </div>
                                    </button>
                                </h2>
                                <div
                                    id="accordion-filter-7"
                                    class="accordion-collapse collapse show"
                                >
                                    <div class="accordion-body">
                                        <div class="row align-items-center">
                                            <div class="custom-checkbox">
                                                <form>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="two" checked/>
                                                        <label for="two"> 1000-0 دينار كويتى </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="three"/>
                                                        <label for="three"> 2000-1000 دينار كويتى </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="four"/>
                                                        <label for="four"> 3000-2000 دينار كويتى </label>
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
                                        data-bs-target="#accordion-filter-4"
                                        aria-expanded="true"
                                        aria-controls="accordion-filter-4"
                                    >
                                        <h5 class="accordion-title mb-0">@lang('site.comments')</h5>
                                        <div>
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="15"
                                                height="8"
                                                viewBox="0 0 15 8"
                                                fill="none"
                                            >
                                                <path
                                                    d="M7.20766 7.19064C6.62556 7.19064 6.04345 6.96482 5.60272 6.52155L0.180867 1.06845C-0.060289 0.825909 -0.060289 0.424455 0.180867 0.181909C0.422023 -0.0606364 0.821178 -0.0606364 1.06233 0.181909L6.48419 5.635C6.88334 6.03645 7.53197 6.03645 7.93112 5.635L13.353 0.181909C13.5941 -0.0606364 13.9933 -0.0606364 14.2344 0.181909C14.4756 0.424455 14.4756 0.825909 14.2344 1.06845L8.81259 6.52155C8.37186 6.96482 7.78976 7.19064 7.20766 7.19064Z"
                                                    fill="#005D9F"
                                                />
                                            </svg>
                                        </div>
                                    </button>
                                </h2>
                                <div
                                    id="accordion-filter-4"
                                    class="accordion-collapse collapse show"
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
                                                                <div>1</div>
                                                                <div>
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="16"
                                                                        height="19"
                                                                        viewBox="0 0 16 19"
                                                                        fill="none"
                                                                    >
                                                                        <path
                                                                            d="M8.42373 14.9229L13.0357 18.4286L11.8118 11.8214L15.8865 7.37592L10.5208 6.80261L8.42373 0.571411L6.32669 6.80261L0.960938 7.37592L5.03562 11.8214L3.81173 18.4286L8.42373 14.9229Z"
                                                                            fill="white"
                                                                        />
                                                                    </svg>
                                                                </div>
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
                                                                <div>2</div>
                                                                <div>
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="16"
                                                                        height="19"
                                                                        viewBox="0 0 16 19"
                                                                        fill="none"
                                                                    >
                                                                        <path
                                                                            d="M8.42373 14.9229L13.0357 18.4286L11.8118 11.8214L15.8865 7.37592L10.5208 6.80261L8.42373 0.571411L6.32669 6.80261L0.960938 7.37592L5.03562 11.8214L3.81173 18.4286L8.42373 14.9229Z"
                                                                            fill="white"
                                                                        />
                                                                    </svg>
                                                                </div>
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
                                                                <div>3</div>
                                                                <div>
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="16"
                                                                        height="19"
                                                                        viewBox="0 0 16 19"
                                                                        fill="none"
                                                                    >
                                                                        <path
                                                                            d="M8.42373 14.9229L13.0357 18.4286L11.8118 11.8214L15.8865 7.37592L10.5208 6.80261L8.42373 0.571411L6.32669 6.80261L0.960938 7.37592L5.03562 11.8214L3.81173 18.4286L8.42373 14.9229Z"
                                                                            fill="white"
                                                                        />
                                                                    </svg>
                                                                </div>
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
                                                                <div>4</div>
                                                                <div>
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="16"
                                                                        height="19"
                                                                        viewBox="0 0 16 19"
                                                                        fill="none"
                                                                    >
                                                                        <path
                                                                            d="M8.42373 14.9229L13.0357 18.4286L11.8118 11.8214L15.8865 7.37592L10.5208 6.80261L8.42373 0.571411L6.32669 6.80261L0.960938 7.37592L5.03562 11.8214L3.81173 18.4286L8.42373 14.9229Z"
                                                                            fill="white"
                                                                        />
                                                                    </svg>
                                                                </div>
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
                                                                <div>5</div>
                                                                <div>
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="16"
                                                                        height="19"
                                                                        viewBox="0 0 16 19"
                                                                        fill="none"
                                                                    >
                                                                        <path
                                                                            d="M8.42373 14.9229L13.0357 18.4286L11.8118 11.8214L15.8865 7.37592L10.5208 6.80261L8.42373 0.571411L6.32669 6.80261L0.960938 7.37592L5.03562 11.8214L3.81173 18.4286L8.42373 14.9229Z"
                                                                            fill="white"
                                                                        />
                                                                    </svg>
                                                                </div>
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
                                    <i class="fas fa-filter"></i> تصفية
                                </div>

                                <div class="">
                                    <a
                                        class="text-second fw-bold"
                                        href="#"
                                        data-bs-toggle="modal"
                                        data-bs-target="#mapModal"
                                    ><i class="far fa-map"></i> الخريطة</a
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
                                    <div class="d-flex justify-content-between">
                                        <h3 class="filter-count text-second fw-bold">
                                            366 من 2666 نتيجة
                                        </h3>
                                        <a href="#" class="delete-result text-main fw-bold"
                                        >ازالة</a
                                        >
                                    </div>
                                    <h2 class="text-second mb-0">تصفيه حسب:</h2>
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
                                            <h5 class="accordion-title mb-0">الماركة</h5>

                                            <div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="15"
                                                    height="8"
                                                    viewBox="0 0 15 8"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M7.20766 7.19064C6.62556 7.19064 6.04345 6.96482 5.60272 6.52155L0.180867 1.06845C-0.060289 0.825909 -0.060289 0.424455 0.180867 0.181909C0.422023 -0.0606364 0.821178 -0.0606364 1.06233 0.181909L6.48419 5.635C6.88334 6.03645 7.53197 6.03645 7.93112 5.635L13.353 0.181909C13.5941 -0.0606364 13.9933 -0.0606364 14.2344 0.181909C14.4756 0.424455 14.4756 0.825909 14.2344 1.06845L8.81259 6.52155C8.37186 6.96482 7.78976 7.19064 7.20766 7.19064Z"
                                                        fill="#005D9F"
                                                    />
                                                </svg>
                                            </div>
                                        </button>
                                    </h2>
                                    <div
                                        id="accordion-filter-1"
                                        class="accordion-collapse collapse show"
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
                                            <h5 class="accordion-title mb-0">الفئة</h5>
                                            <div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="15"
                                                    height="8"
                                                    viewBox="0 0 15 8"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M7.20766 7.19064C6.62556 7.19064 6.04345 6.96482 5.60272 6.52155L0.180867 1.06845C-0.060289 0.825909 -0.060289 0.424455 0.180867 0.181909C0.422023 -0.0606364 0.821178 -0.0606364 1.06233 0.181909L6.48419 5.635C6.88334 6.03645 7.53197 6.03645 7.93112 5.635L13.353 0.181909C13.5941 -0.0606364 13.9933 -0.0606364 14.2344 0.181909C14.4756 0.424455 14.4756 0.825909 14.2344 1.06845L8.81259 6.52155C8.37186 6.96482 7.78976 7.19064 7.20766 7.19064Z"
                                                        fill="#005D9F"
                                                    />
                                                </svg>
                                            </div>
                                        </button>
                                    </h2>
                                    <div
                                        id="accordion-filter-2"
                                        class="accordion-collapse collapse show"
                                    >
                                        <div class="accordion-body">
                                            <div class="row align-items-center">
                                                <div class="custom-checkbox">
                                                    <form>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="two" checked/>
                                                            <label for="two">touareg</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="three"/>
                                                            <label for="three">3008</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="four"/>
                                                            <label for="four">GIS</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="fou"/>
                                                            <label for="fou">208</label>
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
                                            data-bs-target="#accordion-filter-5"
                                            aria-expanded="true"
                                            aria-controls="accordion-filter-5"
                                        >
                                            <h5 class="accordion-title mb-0">السنة</h5>
                                            <div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="15"
                                                    height="8"
                                                    viewBox="0 0 15 8"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M7.20766 7.19064C6.62556 7.19064 6.04345 6.96482 5.60272 6.52155L0.180867 1.06845C-0.060289 0.825909 -0.060289 0.424455 0.180867 0.181909C0.422023 -0.0606364 0.821178 -0.0606364 1.06233 0.181909L6.48419 5.635C6.88334 6.03645 7.53197 6.03645 7.93112 5.635L13.353 0.181909C13.5941 -0.0606364 13.9933 -0.0606364 14.2344 0.181909C14.4756 0.424455 14.4756 0.825909 14.2344 1.06845L8.81259 6.52155C8.37186 6.96482 7.78976 7.19064 7.20766 7.19064Z"
                                                        fill="#005D9F"
                                                    />
                                                </svg>
                                            </div>
                                        </button>
                                    </h2>
                                    <div
                                        id="accordion-filter-5"
                                        class="accordion-collapse collapse show"
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
                                            <h5 class="accordion-title mb-0">اللون</h5>
                                            <div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="15"
                                                    height="8"
                                                    viewBox="0 0 15 8"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M7.20766 7.19064C6.62556 7.19064 6.04345 6.96482 5.60272 6.52155L0.180867 1.06845C-0.060289 0.825909 -0.060289 0.424455 0.180867 0.181909C0.422023 -0.0606364 0.821178 -0.0606364 1.06233 0.181909L6.48419 5.635C6.88334 6.03645 7.53197 6.03645 7.93112 5.635L13.353 0.181909C13.5941 -0.0606364 13.9933 -0.0606364 14.2344 0.181909C14.4756 0.424455 14.4756 0.825909 14.2344 1.06845L8.81259 6.52155C8.37186 6.96482 7.78976 7.19064 7.20766 7.19064Z"
                                                        fill="#005D9F"
                                                    />
                                                </svg>
                                            </div>
                                        </button>
                                    </h2>
                                    <div
                                        id="accordion-filter-6"
                                        class="accordion-collapse collapse show"
                                    >
                                        <div class="accordion-body">
                                            <div class="row align-items-center">
                                                <div class="custom-checkbox">
                                                    <form>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="two" checked/>
                                                            <label for="two">احمر </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="three"/>
                                                            <label for="three">اسود</label>
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
                                            <h5 class="accordion-title mb-0">السعر باليوم</h5>
                                            <div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="15"
                                                    height="8"
                                                    viewBox="0 0 15 8"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M7.20766 7.19064C6.62556 7.19064 6.04345 6.96482 5.60272 6.52155L0.180867 1.06845C-0.060289 0.825909 -0.060289 0.424455 0.180867 0.181909C0.422023 -0.0606364 0.821178 -0.0606364 1.06233 0.181909L6.48419 5.635C6.88334 6.03645 7.53197 6.03645 7.93112 5.635L13.353 0.181909C13.5941 -0.0606364 13.9933 -0.0606364 14.2344 0.181909C14.4756 0.424455 14.4756 0.825909 14.2344 1.06845L8.81259 6.52155C8.37186 6.96482 7.78976 7.19064 7.20766 7.19064Z"
                                                        fill="#005D9F"
                                                    />
                                                </svg>
                                            </div>
                                        </button>
                                    </h2>
                                    <div
                                        id="accordion-filter-7"
                                        class="accordion-collapse collapse show"
                                    >
                                        <div class="accordion-body">
                                            <div class="row align-items-center">
                                                <div class="custom-checkbox">
                                                    <form>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="two" checked/>
                                                            <label for="two"> 1000-0 دينار كويتى </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="three"/>
                                                            <label for="three"> 2000-1000 دينار كويتى </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="four"/>
                                                            <label for="four"> 3000-2000 دينار كويتى </label>
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
                                            data-bs-target="#accordion-filter-4"
                                            aria-expanded="true"
                                            aria-controls="accordion-filter-4"
                                        >
                                            <h5 class="accordion-title mb-0">@lang('site.comments')</h5>
                                            <div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="15"
                                                    height="8"
                                                    viewBox="0 0 15 8"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M7.20766 7.19064C6.62556 7.19064 6.04345 6.96482 5.60272 6.52155L0.180867 1.06845C-0.060289 0.825909 -0.060289 0.424455 0.180867 0.181909C0.422023 -0.0606364 0.821178 -0.0606364 1.06233 0.181909L6.48419 5.635C6.88334 6.03645 7.53197 6.03645 7.93112 5.635L13.353 0.181909C13.5941 -0.0606364 13.9933 -0.0606364 14.2344 0.181909C14.4756 0.424455 14.4756 0.825909 14.2344 1.06845L8.81259 6.52155C8.37186 6.96482 7.78976 7.19064 7.20766 7.19064Z"
                                                        fill="#005D9F"
                                                    />
                                                </svg>
                                            </div>
                                        </button>
                                    </h2>
                                    <div
                                        id="accordion-filter-4"
                                        class="accordion-collapse collapse show"
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
                                                                    <div>1</div>
                                                                    <div>
                                                                        <svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="16"
                                                                            height="19"
                                                                            viewBox="0 0 16 19"
                                                                            fill="none"
                                                                        >
                                                                            <path
                                                                                d="M8.42373 14.9229L13.0357 18.4286L11.8118 11.8214L15.8865 7.37592L10.5208 6.80261L8.42373 0.571411L6.32669 6.80261L0.960938 7.37592L5.03562 11.8214L3.81173 18.4286L8.42373 14.9229Z"
                                                                                fill="white"
                                                                            />
                                                                        </svg>
                                                                    </div>
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
                                                                    <div>2</div>
                                                                    <div>
                                                                        <svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="16"
                                                                            height="19"
                                                                            viewBox="0 0 16 19"
                                                                            fill="none"
                                                                        >
                                                                            <path
                                                                                d="M8.42373 14.9229L13.0357 18.4286L11.8118 11.8214L15.8865 7.37592L10.5208 6.80261L8.42373 0.571411L6.32669 6.80261L0.960938 7.37592L5.03562 11.8214L3.81173 18.4286L8.42373 14.9229Z"
                                                                                fill="white"
                                                                            />
                                                                        </svg>
                                                                    </div>
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
                                                                    <div>3</div>
                                                                    <div>
                                                                        <svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="16"
                                                                            height="19"
                                                                            viewBox="0 0 16 19"
                                                                            fill="none"
                                                                        >
                                                                            <path
                                                                                d="M8.42373 14.9229L13.0357 18.4286L11.8118 11.8214L15.8865 7.37592L10.5208 6.80261L8.42373 0.571411L6.32669 6.80261L0.960938 7.37592L5.03562 11.8214L3.81173 18.4286L8.42373 14.9229Z"
                                                                                fill="white"
                                                                            />
                                                                        </svg>
                                                                    </div>
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
                                                                    <div>4</div>
                                                                    <div>
                                                                        <svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="16"
                                                                            height="19"
                                                                            viewBox="0 0 16 19"
                                                                            fill="none"
                                                                        >
                                                                            <path
                                                                                d="M8.42373 14.9229L13.0357 18.4286L11.8118 11.8214L15.8865 7.37592L10.5208 6.80261L8.42373 0.571411L6.32669 6.80261L0.960938 7.37592L5.03562 11.8214L3.81173 18.4286L8.42373 14.9229Z"
                                                                                fill="white"
                                                                            />
                                                                        </svg>
                                                                    </div>
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
                                                                    <div>5</div>
                                                                    <div>
                                                                        <svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="16"
                                                                            height="19"
                                                                            viewBox="0 0 16 19"
                                                                            fill="none"
                                                                        >
                                                                            <path
                                                                                d="M8.42373 14.9229L13.0357 18.4286L11.8118 11.8214L15.8865 7.37592L10.5208 6.80261L8.42373 0.571411L6.32669 6.80261L0.960938 7.37592L5.03562 11.8214L3.81173 18.4286L8.42373 14.9229Z"
                                                                                fill="white"
                                                                            />
                                                                        </svg>
                                                                    </div>
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
                                <div class="d-flex justify-content-lg-between flex-wrap">
                                    <div class="car-sort-by">
                                        الترتيب حسب
                                    </div>
                                    <ul class="tabs-nav-detaills list-unstyled d-flex mb-0 car-tabs flex-wrap">

                                        <li>
                                            <a
                                                href="#tab-car-1"
                                                class="tab-link d-flex align-items-center justify-content-center "
                                            >
                                                الافضل
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="#tab-car-2"
                                                class="tab-link d-flex align-items-center justify-content-center"
                                            >
                                                السعر من اعلي الي الاقل
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="#tab-car-3"
                                                class="tab-link d-flex align-items-center justify-content-center"
                                            >
                                                السعر من اقل الي الاعلي
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="#tab-car-4"
                                                class="tab-link d-flex align-items-center justify-content-center"
                                            >
                                                الاعلى تقيما
                                            </a>
                                        </li>
                                    </ul>

                                </div>

                                <ul class="tabs-contentt list-unstyled my-4">

                                    <li id="tab-car-1">
                                        @foreach($cars as $car )

                                            <div
                                                class="card card-department round-border mb-3 p-md-3 p-2"
                                            >


                                                <div class="row g-0">
                                                    <div class="col-md-4 position-relative">
                                                        <div
                                                            class="owl-carousel owl-theme department-img-carousel"
                                                            dir="ltr"
                                                        >
                                                            @foreach(json_decode($car->images)  as $img)
                                                                <div>
                                                                    <button class="add-to-wishlist">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24"
                                                                             height="24" viewBox="0 0 24 24"
                                                                             fill="none">
                                                                            <path
                                                                                d="M22.1494 2.12177C21.563 1.44911 20.8667 0.915505 20.1003 0.551444C19.334 0.187383 18.5126 0 17.6831 0C16.8535 0 16.0321 0.187383 15.2658 0.551444C14.4994 0.915505 13.8032 1.44911 13.2167 2.12177L11.9997 3.51714L10.7826 2.12177C9.59811 0.763676 7.99153 0.00070395 6.31633 0.000703964C4.64114 0.000703978 3.03455 0.763676 1.85001 2.12177C0.665469 3.47987 1.24812e-08 5.32185 0 7.24249C-1.24812e-08 9.16313 0.665469 11.0051 1.85001 12.3632L3.06705 13.7586L11.9997 24L20.9323 13.7586L22.1494 12.3632C22.7361 11.6909 23.2015 10.8926 23.519 10.0139C23.8366 9.13531 24 8.19356 24 7.24249C24 6.29142 23.8366 5.34967 23.519 4.47104C23.2015 3.59241 22.7361 2.79412 22.1494 2.12177Z"
                                                                                fill="#FF8600"></path>
                                                                        </svg>
                                                                    </button>
                                                                    <img
                                                                        loading="lazy"
                                                                        src="{{asset('images/cars/'.$img)}}"
                                                                        onerror="this.src='{{FRONTASSETS}}/images/cars/car-card-1.png'"

                                                                        class="department-img-list of-cover car-image"
                                                                        alt="image 1"
                                                                    />
                                                                </div>
                                                            @endforeach
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
                                  <span class="text-main number-ads"
                                  >رقم الاعلان( {{$car->id ?? ''}})</span
                                  >
                                                                </div>
                                                                <div class="col-auto">
                                                                    <div
                                                                        class="d-flex justify-content-center align-items-center"
                                                                    >
                                                                        <div
                                                                            class="department-badge bg-main text-white">
                                                                            <div
                                                                                class="pt-1">{{$car->CarReview->count() ?? 0}}</div>
                                                                            <div>
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                     width="25" height="25"
                                                                                     viewBox="0 0 25 25" fill="none">
                                                                                    <path
                                                                                        d="M12.7529 19.6185L20.1689 24.3301L18.2009 15.4501L24.7529 9.47534L16.1249 8.70481L12.7529 0.330078L9.38093 8.70481L0.75293 9.47534L7.30493 15.4501L5.33693 24.3301L12.7529 19.6185Z"
                                                                                        fill="white"/>
                                                                                </svg>
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
                                <span
                                >

  {{$car->description ?? ''}}
                                </span>
                                                            </div>
                                                            <div
                                                                class="text-gray-2 number-ads d-flex align-items-center"
                                                            >
                                                                <div>
                                  <span class="ps-2">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="18"
                                        viewBox="0 0 15 18"
                                        fill="none"
                                    >
                                      <path
                                          fill-rule="evenodd"
                                          clip-rule="evenodd"
                                          d="M7.3 4.28999e-06C6.13434 -0.00154801 5.00739 0.418215 4.12678 1.18195C3.24617 1.94569 2.67124 3.00195 2.50791 4.15611C2.34458 5.31028 2.60387 6.48458 3.23799 7.46267C3.87211 8.44076 4.83834 9.15673 5.95867 9.47867C4.36667 9.672 3.00133 10.2347 1.972 11.2493C0.662666 12.5387 0 14.46 0 16.9667C0 17.1346 0.0667258 17.2957 0.185499 17.4145C0.304272 17.5333 0.465363 17.6 0.633333 17.6C0.801304 17.6 0.962395 17.5333 1.08117 17.4145C1.19994 17.2957 1.26667 17.1346 1.26667 16.9667C1.26667 14.6733 1.87067 13.1267 2.86133 12.1507C3.85333 11.1733 5.336 10.6667 7.3 10.6667C9.264 10.6667 10.7467 11.1733 11.74 12.1507C12.7293 13.128 13.3333 14.6733 13.3333 16.9667C13.3333 17.1346 13.4001 17.2957 13.5188 17.4145C13.6376 17.5333 13.7987 17.6 13.9667 17.6C14.1346 17.6 14.2957 17.5333 14.4145 17.4145C14.5333 17.2957 14.6 17.1346 14.6 16.9667C14.6 14.46 13.9373 12.54 12.6267 11.2493C11.6 10.236 10.2333 9.672 8.64133 9.47867C9.75791 9.15311 10.7198 8.43604 11.3506 7.4589C11.9814 6.48175 12.2389 5.31 12.076 4.15839C11.913 3.00679 11.3405 1.9525 10.4633 1.18875C9.58612 0.425002 8.46307 0.00296898 7.3 4.28999e-06ZM3.73333 4.83334C3.73333 3.8874 4.10911 2.9802 4.77799 2.31132C5.44687 1.64244 6.35406 1.26667 7.3 1.26667C8.24594 1.26667 9.15314 1.64244 9.82201 2.31132C10.4909 2.9802 10.8667 3.8874 10.8667 4.83334C10.8667 5.77928 10.4909 6.68647 9.82201 7.35535C9.15314 8.02423 8.24594 8.40001 7.3 8.40001C6.35406 8.40001 5.44687 8.02423 4.77799 7.35535C4.10911 6.68647 3.73333 5.77928 3.73333 4.83334Z"
                                          fill="#FF8600"
                                      />
                                    </svg>
                                  </span>
                                                                    <span>5 مقاعد</span>
                                                                </div>
                                                                <div class="padding-35">
                                  <span class="ps-2">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="20"
                                        height="20"
                                        viewBox="0 0 20 20"
                                        fill="none"
                                    >
                                      <path
                                          d="M16.25 5H13.3333V4.16667C13.3326 3.72484 13.1568 3.3013 12.8444 2.98889C12.532 2.67647 12.1084 2.50066 11.6666 2.5H8.33329C7.89147 2.50066 7.46793 2.67647 7.15551 2.98889C6.84309 3.3013 6.66729 3.72484 6.66663 4.16667V5H3.74996C3.19756 5.00044 2.66791 5.22008 2.27731 5.61068C1.8867 6.00129 1.66707 6.53093 1.66663 7.08333V15.4167C1.66707 15.9691 1.8867 16.4987 2.27731 16.8893C2.66791 17.2799 3.19756 17.4996 3.74996 17.5H16.25C16.8024 17.4996 17.332 17.2799 17.7226 16.8893C18.1132 16.4987 18.3329 15.9691 18.3333 15.4167V7.08333C18.3329 6.53093 18.1132 6.00129 17.7226 5.61068C17.332 5.22008 16.8024 5.00044 16.25 5ZM7.49996 4.16667C7.49996 3.94565 7.58776 3.73369 7.74404 3.57741C7.90032 3.42113 8.11228 3.33333 8.33329 3.33333H11.6666C11.8876 3.33333 12.0996 3.42113 12.2559 3.57741C12.4122 3.73369 12.5 3.94565 12.5 4.16667V5H7.49996V4.16667ZM17.5 15.4167C17.5 15.7482 17.3683 16.0661 17.1338 16.3005C16.8994 16.535 16.5815 16.6667 16.25 16.6667H3.74996C3.41844 16.6667 3.1005 16.535 2.86608 16.3005C2.63166 16.0661 2.49996 15.7482 2.49996 15.4167V10.0225L7.36829 11.6458C7.41081 11.6597 7.45525 11.6667 7.49996 11.6667H12.5C12.5447 11.6667 12.5891 11.6597 12.6316 11.6458L17.5 10.0225V15.4167ZM17.5 9.17167C17.4555 9.17 17.411 9.17563 17.3683 9.18833L12.4325 10.8333H7.56746L2.63163 9.1875C2.58894 9.1748 2.54446 9.16917 2.49996 9.17083V7.08333C2.49996 6.75181 2.63166 6.43387 2.86608 6.19945C3.1005 5.96503 3.41844 5.83333 3.74996 5.83333H16.25C16.5815 5.83333 16.8994 5.96503 17.1338 6.19945C17.3683 6.43387 17.5 6.75181 17.5 7.08333V9.17167Z"
                                          fill="#FF8600"
                                      />
                                    </svg>
                                  </span>
                                                                    <span>1شنطه كبيرة</span>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="d-flex align-items-center justify-content-between mt-3 display-block-mobile"
                                                            >
                                                                <div class="department-price">
                                                                    <span
                                                                        class="text-gray-2"> @lang('site.price'):</span>
                                                                    <span class="fw-bold text-main"
                                                                    >

                                                                     {{$car->fixed_price ?? ''}}
                                  </span>
                                                                </div>
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
                                    </li>

                                    <li id="tab-car-2">
                                        <div
                                            class="card card-department round-border mb-3 p-md-3 p-2"
                                        >
                                            <div class="row g-0">
                                                <div class="col-md-4 position-relative">
                                                    <div
                                                        class="owl-carousel owl-theme department-img-carousel"
                                                        dir="ltr"
                                                    >
                                                        <div>
                                                            <button class="add-to-wishlist">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="26"
                                                                     height="26" viewBox="0 0 26 26" fill="none">
                                                                    <path
                                                                        d="M23.1494 3.12177C22.563 2.44911 21.8667 1.9155 21.1003 1.55144C20.334 1.18738 19.5126 1 18.6831 1C17.8535 1 17.0321 1.18738 16.2658 1.55144C15.4994 1.9155 14.8032 2.44911 14.2167 3.12177L12.9997 4.51714L11.7826 3.12177C10.5981 1.76368 8.99153 1.0007 7.31633 1.0007C5.64114 1.0007 4.03455 1.76368 2.85001 3.12177C1.66547 4.47987 1 6.32185 1 8.24249C1 10.1631 1.66547 12.0051 2.85001 13.3632L4.06705 14.7586L12.9997 25L21.9323 14.7586L23.1494 13.3632C23.7361 12.6909 24.2015 11.8926 24.519 11.0139C24.8366 10.1353 25 9.19356 25 8.24249C25 7.29142 24.8366 6.34967 24.519 5.47104C24.2015 4.59241 23.7361 3.79412 23.1494 3.12177Z"
                                                                        fill="white" stroke="#CACACA" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </button>
                                                            <img
                                                                loading="lazy"
                                                                src="./assets/images/cars/car-card-1.png"
                                                                class="department-img-list of-cover car-image"
                                                                alt="image 1"
                                                            />
                                                        </div>
                                                        <div>
                                                            <button class="add-to-wishlist">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="26"
                                                                     height="26" viewBox="0 0 26 26" fill="none">
                                                                    <path
                                                                        d="M23.1494 3.12177C22.563 2.44911 21.8667 1.9155 21.1003 1.55144C20.334 1.18738 19.5126 1 18.6831 1C17.8535 1 17.0321 1.18738 16.2658 1.55144C15.4994 1.9155 14.8032 2.44911 14.2167 3.12177L12.9997 4.51714L11.7826 3.12177C10.5981 1.76368 8.99153 1.0007 7.31633 1.0007C5.64114 1.0007 4.03455 1.76368 2.85001 3.12177C1.66547 4.47987 1 6.32185 1 8.24249C1 10.1631 1.66547 12.0051 2.85001 13.3632L4.06705 14.7586L12.9997 25L21.9323 14.7586L23.1494 13.3632C23.7361 12.6909 24.2015 11.8926 24.519 11.0139C24.8366 10.1353 25 9.19356 25 8.24249C25 7.29142 24.8366 6.34967 24.519 5.47104C24.2015 4.59241 23.7361 3.79412 23.1494 3.12177Z"
                                                                        fill="white" stroke="#CACACA" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </button>
                                                            <img
                                                                loading="lazy"
                                                                src="./assets/images/cars/car-card-2.png"
                                                                class="department-img-list of-cover car-image"
                                                                alt="image 1"
                                                            />
                                                        </div>
                                                        <div>
                                                            <button class="add-to-wishlist">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="26"
                                                                     height="26" viewBox="0 0 26 26" fill="none">
                                                                    <path
                                                                        d="M23.1494 3.12177C22.563 2.44911 21.8667 1.9155 21.1003 1.55144C20.334 1.18738 19.5126 1 18.6831 1C17.8535 1 17.0321 1.18738 16.2658 1.55144C15.4994 1.9155 14.8032 2.44911 14.2167 3.12177L12.9997 4.51714L11.7826 3.12177C10.5981 1.76368 8.99153 1.0007 7.31633 1.0007C5.64114 1.0007 4.03455 1.76368 2.85001 3.12177C1.66547 4.47987 1 6.32185 1 8.24249C1 10.1631 1.66547 12.0051 2.85001 13.3632L4.06705 14.7586L12.9997 25L21.9323 14.7586L23.1494 13.3632C23.7361 12.6909 24.2015 11.8926 24.519 11.0139C24.8366 10.1353 25 9.19356 25 8.24249C25 7.29142 24.8366 6.34967 24.519 5.47104C24.2015 4.59241 23.7361 3.79412 23.1494 3.12177Z"
                                                                        fill="white" stroke="#CACACA" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </button>
                                                            <img
                                                                loading="lazy"
                                                                src="./assets/images/cars/car-card-1.png"
                                                                class="department-img-list of-cover car-image"
                                                                alt="image 1"
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
                                  <span class="text-main number-ads"
                                  >رقم الاعلان(12)</span
                                  >
                                                            </div>
                                                            <div class="col-auto">
                                                                <div
                                                                    class="d-flex justify-content-center align-items-center"
                                                                >
                                                                    <div class="department-badge bg-main text-white">
                                                                        <div class="pt-1">5</div>
                                                                        <div>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="25" height="25"
                                                                                 viewBox="0 0 25 25" fill="none">
                                                                                <path
                                                                                    d="M12.7529 19.6185L20.1689 24.3301L18.2009 15.4501L24.7529 9.47534L16.1249 8.70481L12.7529 0.330078L9.38093 8.70481L0.75293 9.47534L7.30493 15.4501L5.33693 24.3301L12.7529 19.6185Z"
                                                                                    fill="white"/>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                    <div class="number-ads gray-txt">
                                                                        64 من التقييمات
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h2 class="card-title mb-2">
                                                            فولكس ويغن volkswagen
                                                        </h2>

                                                        <div class="gray-txt number-ads pb-2">
                                <span
                                >سيارة ماركة فولكس رمادي غامق ويغن فئه GIS
                                </span>
                                                        </div>
                                                        <div
                                                            class="text-gray-2 number-ads d-flex align-items-center"
                                                        >
                                                            <div>
                                  <span class="ps-2">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="18"
                                        viewBox="0 0 15 18"
                                        fill="none"
                                    >
                                      <path
                                          fill-rule="evenodd"
                                          clip-rule="evenodd"
                                          d="M7.3 4.28999e-06C6.13434 -0.00154801 5.00739 0.418215 4.12678 1.18195C3.24617 1.94569 2.67124 3.00195 2.50791 4.15611C2.34458 5.31028 2.60387 6.48458 3.23799 7.46267C3.87211 8.44076 4.83834 9.15673 5.95867 9.47867C4.36667 9.672 3.00133 10.2347 1.972 11.2493C0.662666 12.5387 0 14.46 0 16.9667C0 17.1346 0.0667258 17.2957 0.185499 17.4145C0.304272 17.5333 0.465363 17.6 0.633333 17.6C0.801304 17.6 0.962395 17.5333 1.08117 17.4145C1.19994 17.2957 1.26667 17.1346 1.26667 16.9667C1.26667 14.6733 1.87067 13.1267 2.86133 12.1507C3.85333 11.1733 5.336 10.6667 7.3 10.6667C9.264 10.6667 10.7467 11.1733 11.74 12.1507C12.7293 13.128 13.3333 14.6733 13.3333 16.9667C13.3333 17.1346 13.4001 17.2957 13.5188 17.4145C13.6376 17.5333 13.7987 17.6 13.9667 17.6C14.1346 17.6 14.2957 17.5333 14.4145 17.4145C14.5333 17.2957 14.6 17.1346 14.6 16.9667C14.6 14.46 13.9373 12.54 12.6267 11.2493C11.6 10.236 10.2333 9.672 8.64133 9.47867C9.75791 9.15311 10.7198 8.43604 11.3506 7.4589C11.9814 6.48175 12.2389 5.31 12.076 4.15839C11.913 3.00679 11.3405 1.9525 10.4633 1.18875C9.58612 0.425002 8.46307 0.00296898 7.3 4.28999e-06ZM3.73333 4.83334C3.73333 3.8874 4.10911 2.9802 4.77799 2.31132C5.44687 1.64244 6.35406 1.26667 7.3 1.26667C8.24594 1.26667 9.15314 1.64244 9.82201 2.31132C10.4909 2.9802 10.8667 3.8874 10.8667 4.83334C10.8667 5.77928 10.4909 6.68647 9.82201 7.35535C9.15314 8.02423 8.24594 8.40001 7.3 8.40001C6.35406 8.40001 5.44687 8.02423 4.77799 7.35535C4.10911 6.68647 3.73333 5.77928 3.73333 4.83334Z"
                                          fill="#FF8600"
                                      />
                                    </svg>
                                  </span>
                                                                <span>5 مقاعد</span>
                                                            </div>
                                                            <div class="padding-35">
                                  <span class="ps-2">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="20"
                                        height="20"
                                        viewBox="0 0 20 20"
                                        fill="none"
                                    >
                                      <path
                                          d="M16.25 5H13.3333V4.16667C13.3326 3.72484 13.1568 3.3013 12.8444 2.98889C12.532 2.67647 12.1084 2.50066 11.6666 2.5H8.33329C7.89147 2.50066 7.46793 2.67647 7.15551 2.98889C6.84309 3.3013 6.66729 3.72484 6.66663 4.16667V5H3.74996C3.19756 5.00044 2.66791 5.22008 2.27731 5.61068C1.8867 6.00129 1.66707 6.53093 1.66663 7.08333V15.4167C1.66707 15.9691 1.8867 16.4987 2.27731 16.8893C2.66791 17.2799 3.19756 17.4996 3.74996 17.5H16.25C16.8024 17.4996 17.332 17.2799 17.7226 16.8893C18.1132 16.4987 18.3329 15.9691 18.3333 15.4167V7.08333C18.3329 6.53093 18.1132 6.00129 17.7226 5.61068C17.332 5.22008 16.8024 5.00044 16.25 5ZM7.49996 4.16667C7.49996 3.94565 7.58776 3.73369 7.74404 3.57741C7.90032 3.42113 8.11228 3.33333 8.33329 3.33333H11.6666C11.8876 3.33333 12.0996 3.42113 12.2559 3.57741C12.4122 3.73369 12.5 3.94565 12.5 4.16667V5H7.49996V4.16667ZM17.5 15.4167C17.5 15.7482 17.3683 16.0661 17.1338 16.3005C16.8994 16.535 16.5815 16.6667 16.25 16.6667H3.74996C3.41844 16.6667 3.1005 16.535 2.86608 16.3005C2.63166 16.0661 2.49996 15.7482 2.49996 15.4167V10.0225L7.36829 11.6458C7.41081 11.6597 7.45525 11.6667 7.49996 11.6667H12.5C12.5447 11.6667 12.5891 11.6597 12.6316 11.6458L17.5 10.0225V15.4167ZM17.5 9.17167C17.4555 9.17 17.411 9.17563 17.3683 9.18833L12.4325 10.8333H7.56746L2.63163 9.1875C2.58894 9.1748 2.54446 9.16917 2.49996 9.17083V7.08333C2.49996 6.75181 2.63166 6.43387 2.86608 6.19945C3.1005 5.96503 3.41844 5.83333 3.74996 5.83333H16.25C16.5815 5.83333 16.8994 5.96503 17.1338 6.19945C17.3683 6.43387 17.5 6.75181 17.5 7.08333V9.17167Z"
                                          fill="#FF8600"
                                      />
                                    </svg>
                                  </span>
                                                                <span>1شنطه كبيرة</span>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="d-flex align-items-center justify-content-between mt-3 display-block-mobile"
                                                        >
                                                            <div class="department-price">
                                                                <span class="text-gray-2">سعر اليوم:</span>
                                                                <span class="fw-bold text-main"
                                                                >2578 درهم مغربى
                                  </span>
                                                            </div>
                                                            <div
                                                                class="details-btn d-flex align-items-center justify-content-center"
                                                            >
                                                                <a href="#">عرض التفاصيل</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li id="tab-car-3">
                                        <div
                                            class="card card-department round-border mb-3 p-md-3 p-2"
                                        >
                                            <div class="row g-0">
                                                <div class="col-md-4 position-relative">
                                                    <div
                                                        class="owl-carousel owl-theme department-img-carousel"
                                                        dir="ltr"
                                                    >
                                                        <div>
                                                            <button class="add-to-wishlist">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="26"
                                                                     height="26" viewBox="0 0 26 26" fill="none">
                                                                    <path
                                                                        d="M23.1494 3.12177C22.563 2.44911 21.8667 1.9155 21.1003 1.55144C20.334 1.18738 19.5126 1 18.6831 1C17.8535 1 17.0321 1.18738 16.2658 1.55144C15.4994 1.9155 14.8032 2.44911 14.2167 3.12177L12.9997 4.51714L11.7826 3.12177C10.5981 1.76368 8.99153 1.0007 7.31633 1.0007C5.64114 1.0007 4.03455 1.76368 2.85001 3.12177C1.66547 4.47987 1 6.32185 1 8.24249C1 10.1631 1.66547 12.0051 2.85001 13.3632L4.06705 14.7586L12.9997 25L21.9323 14.7586L23.1494 13.3632C23.7361 12.6909 24.2015 11.8926 24.519 11.0139C24.8366 10.1353 25 9.19356 25 8.24249C25 7.29142 24.8366 6.34967 24.519 5.47104C24.2015 4.59241 23.7361 3.79412 23.1494 3.12177Z"
                                                                        fill="white" stroke="#CACACA" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </button>
                                                            <img
                                                                loading="lazy"
                                                                src="./assets/images/cars/car-card-1.png"
                                                                class="department-img-list of-cover car-image"
                                                                alt="image 1"
                                                            />
                                                        </div>
                                                        <div>
                                                            <button class="add-to-wishlist">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="26"
                                                                     height="26" viewBox="0 0 26 26" fill="none">
                                                                    <path
                                                                        d="M23.1494 3.12177C22.563 2.44911 21.8667 1.9155 21.1003 1.55144C20.334 1.18738 19.5126 1 18.6831 1C17.8535 1 17.0321 1.18738 16.2658 1.55144C15.4994 1.9155 14.8032 2.44911 14.2167 3.12177L12.9997 4.51714L11.7826 3.12177C10.5981 1.76368 8.99153 1.0007 7.31633 1.0007C5.64114 1.0007 4.03455 1.76368 2.85001 3.12177C1.66547 4.47987 1 6.32185 1 8.24249C1 10.1631 1.66547 12.0051 2.85001 13.3632L4.06705 14.7586L12.9997 25L21.9323 14.7586L23.1494 13.3632C23.7361 12.6909 24.2015 11.8926 24.519 11.0139C24.8366 10.1353 25 9.19356 25 8.24249C25 7.29142 24.8366 6.34967 24.519 5.47104C24.2015 4.59241 23.7361 3.79412 23.1494 3.12177Z"
                                                                        fill="white" stroke="#CACACA" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </button>
                                                            <img
                                                                loading="lazy"
                                                                src="./assets/images/cars/car-card-2.png"
                                                                class="department-img-list of-cover car-image"
                                                                alt="image 1"
                                                            />
                                                        </div>
                                                        <div>
                                                            <button class="add-to-wishlist">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="26"
                                                                     height="26" viewBox="0 0 26 26" fill="none">
                                                                    <path
                                                                        d="M23.1494 3.12177C22.563 2.44911 21.8667 1.9155 21.1003 1.55144C20.334 1.18738 19.5126 1 18.6831 1C17.8535 1 17.0321 1.18738 16.2658 1.55144C15.4994 1.9155 14.8032 2.44911 14.2167 3.12177L12.9997 4.51714L11.7826 3.12177C10.5981 1.76368 8.99153 1.0007 7.31633 1.0007C5.64114 1.0007 4.03455 1.76368 2.85001 3.12177C1.66547 4.47987 1 6.32185 1 8.24249C1 10.1631 1.66547 12.0051 2.85001 13.3632L4.06705 14.7586L12.9997 25L21.9323 14.7586L23.1494 13.3632C23.7361 12.6909 24.2015 11.8926 24.519 11.0139C24.8366 10.1353 25 9.19356 25 8.24249C25 7.29142 24.8366 6.34967 24.519 5.47104C24.2015 4.59241 23.7361 3.79412 23.1494 3.12177Z"
                                                                        fill="white" stroke="#CACACA" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </button>
                                                            <img
                                                                loading="lazy"
                                                                src="./assets/images/cars/car-card-1.png"
                                                                class="department-img-list of-cover car-image"
                                                                alt="image 1"
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
                                  <span class="text-main number-ads"
                                  >رقم الاعلان(12)</span
                                  >
                                                            </div>
                                                            <div class="col-auto">
                                                                <div
                                                                    class="d-flex justify-content-center align-items-center"
                                                                >
                                                                    <div class="department-badge bg-main text-white">
                                                                        <div class="pt-1">5</div>
                                                                        <div>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="25" height="25"
                                                                                 viewBox="0 0 25 25" fill="none">
                                                                                <path
                                                                                    d="M12.7529 19.6185L20.1689 24.3301L18.2009 15.4501L24.7529 9.47534L16.1249 8.70481L12.7529 0.330078L9.38093 8.70481L0.75293 9.47534L7.30493 15.4501L5.33693 24.3301L12.7529 19.6185Z"
                                                                                    fill="white"/>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                    <div class="number-ads gray-txt">
                                                                        64 من التقييمات
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h2 class="card-title mb-2">
                                                            فولكس ويغن volkswagen
                                                        </h2>

                                                        <div class="gray-txt number-ads pb-2">
                                <span
                                >سيارة ماركة فولكس رمادي غامق ويغن فئه GIS
                                </span>
                                                        </div>
                                                        <div
                                                            class="text-gray-2 number-ads d-flex align-items-center"
                                                        >
                                                            <div>
                                  <span class="ps-2">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="18"
                                        viewBox="0 0 15 18"
                                        fill="none"
                                    >
                                      <path
                                          fill-rule="evenodd"
                                          clip-rule="evenodd"
                                          d="M7.3 4.28999e-06C6.13434 -0.00154801 5.00739 0.418215 4.12678 1.18195C3.24617 1.94569 2.67124 3.00195 2.50791 4.15611C2.34458 5.31028 2.60387 6.48458 3.23799 7.46267C3.87211 8.44076 4.83834 9.15673 5.95867 9.47867C4.36667 9.672 3.00133 10.2347 1.972 11.2493C0.662666 12.5387 0 14.46 0 16.9667C0 17.1346 0.0667258 17.2957 0.185499 17.4145C0.304272 17.5333 0.465363 17.6 0.633333 17.6C0.801304 17.6 0.962395 17.5333 1.08117 17.4145C1.19994 17.2957 1.26667 17.1346 1.26667 16.9667C1.26667 14.6733 1.87067 13.1267 2.86133 12.1507C3.85333 11.1733 5.336 10.6667 7.3 10.6667C9.264 10.6667 10.7467 11.1733 11.74 12.1507C12.7293 13.128 13.3333 14.6733 13.3333 16.9667C13.3333 17.1346 13.4001 17.2957 13.5188 17.4145C13.6376 17.5333 13.7987 17.6 13.9667 17.6C14.1346 17.6 14.2957 17.5333 14.4145 17.4145C14.5333 17.2957 14.6 17.1346 14.6 16.9667C14.6 14.46 13.9373 12.54 12.6267 11.2493C11.6 10.236 10.2333 9.672 8.64133 9.47867C9.75791 9.15311 10.7198 8.43604 11.3506 7.4589C11.9814 6.48175 12.2389 5.31 12.076 4.15839C11.913 3.00679 11.3405 1.9525 10.4633 1.18875C9.58612 0.425002 8.46307 0.00296898 7.3 4.28999e-06ZM3.73333 4.83334C3.73333 3.8874 4.10911 2.9802 4.77799 2.31132C5.44687 1.64244 6.35406 1.26667 7.3 1.26667C8.24594 1.26667 9.15314 1.64244 9.82201 2.31132C10.4909 2.9802 10.8667 3.8874 10.8667 4.83334C10.8667 5.77928 10.4909 6.68647 9.82201 7.35535C9.15314 8.02423 8.24594 8.40001 7.3 8.40001C6.35406 8.40001 5.44687 8.02423 4.77799 7.35535C4.10911 6.68647 3.73333 5.77928 3.73333 4.83334Z"
                                          fill="#FF8600"
                                      />
                                    </svg>
                                  </span>
                                                                <span>5 مقاعد</span>
                                                            </div>
                                                            <div class="padding-35">
                                  <span class="ps-2">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="20"
                                        height="20"
                                        viewBox="0 0 20 20"
                                        fill="none"
                                    >
                                      <path
                                          d="M16.25 5H13.3333V4.16667C13.3326 3.72484 13.1568 3.3013 12.8444 2.98889C12.532 2.67647 12.1084 2.50066 11.6666 2.5H8.33329C7.89147 2.50066 7.46793 2.67647 7.15551 2.98889C6.84309 3.3013 6.66729 3.72484 6.66663 4.16667V5H3.74996C3.19756 5.00044 2.66791 5.22008 2.27731 5.61068C1.8867 6.00129 1.66707 6.53093 1.66663 7.08333V15.4167C1.66707 15.9691 1.8867 16.4987 2.27731 16.8893C2.66791 17.2799 3.19756 17.4996 3.74996 17.5H16.25C16.8024 17.4996 17.332 17.2799 17.7226 16.8893C18.1132 16.4987 18.3329 15.9691 18.3333 15.4167V7.08333C18.3329 6.53093 18.1132 6.00129 17.7226 5.61068C17.332 5.22008 16.8024 5.00044 16.25 5ZM7.49996 4.16667C7.49996 3.94565 7.58776 3.73369 7.74404 3.57741C7.90032 3.42113 8.11228 3.33333 8.33329 3.33333H11.6666C11.8876 3.33333 12.0996 3.42113 12.2559 3.57741C12.4122 3.73369 12.5 3.94565 12.5 4.16667V5H7.49996V4.16667ZM17.5 15.4167C17.5 15.7482 17.3683 16.0661 17.1338 16.3005C16.8994 16.535 16.5815 16.6667 16.25 16.6667H3.74996C3.41844 16.6667 3.1005 16.535 2.86608 16.3005C2.63166 16.0661 2.49996 15.7482 2.49996 15.4167V10.0225L7.36829 11.6458C7.41081 11.6597 7.45525 11.6667 7.49996 11.6667H12.5C12.5447 11.6667 12.5891 11.6597 12.6316 11.6458L17.5 10.0225V15.4167ZM17.5 9.17167C17.4555 9.17 17.411 9.17563 17.3683 9.18833L12.4325 10.8333H7.56746L2.63163 9.1875C2.58894 9.1748 2.54446 9.16917 2.49996 9.17083V7.08333C2.49996 6.75181 2.63166 6.43387 2.86608 6.19945C3.1005 5.96503 3.41844 5.83333 3.74996 5.83333H16.25C16.5815 5.83333 16.8994 5.96503 17.1338 6.19945C17.3683 6.43387 17.5 6.75181 17.5 7.08333V9.17167Z"
                                          fill="#FF8600"
                                      />
                                    </svg>
                                  </span>
                                                                <span>1شنطه كبيرة</span>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="d-flex align-items-center justify-content-between mt-3 display-block-mobile"
                                                        >
                                                            <div class="department-price">
                                                                <span class="text-gray-2">سعر اليوم:</span>
                                                                <span class="fw-bold text-main"
                                                                >2578 درهم مغربى
                                  </span>
                                                            </div>
                                                            <div
                                                                class="details-btn d-flex align-items-center justify-content-center"
                                                            >
                                                                <a href="#">عرض التفاصيل</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li id="tab-car-4">
                                        <div
                                            class="card card-department round-border mb-3 p-md-3 p-2"
                                        >
                                            <div class="row g-0">
                                                <div class="col-md-4 position-relative">
                                                    <div
                                                        class="owl-carousel owl-theme department-img-carousel"
                                                        dir="ltr"
                                                    >
                                                        <div>
                                                            <button class="add-to-wishlist">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="26"
                                                                     height="26" viewBox="0 0 26 26" fill="none">
                                                                    <path
                                                                        d="M23.1494 3.12177C22.563 2.44911 21.8667 1.9155 21.1003 1.55144C20.334 1.18738 19.5126 1 18.6831 1C17.8535 1 17.0321 1.18738 16.2658 1.55144C15.4994 1.9155 14.8032 2.44911 14.2167 3.12177L12.9997 4.51714L11.7826 3.12177C10.5981 1.76368 8.99153 1.0007 7.31633 1.0007C5.64114 1.0007 4.03455 1.76368 2.85001 3.12177C1.66547 4.47987 1 6.32185 1 8.24249C1 10.1631 1.66547 12.0051 2.85001 13.3632L4.06705 14.7586L12.9997 25L21.9323 14.7586L23.1494 13.3632C23.7361 12.6909 24.2015 11.8926 24.519 11.0139C24.8366 10.1353 25 9.19356 25 8.24249C25 7.29142 24.8366 6.34967 24.519 5.47104C24.2015 4.59241 23.7361 3.79412 23.1494 3.12177Z"
                                                                        fill="white" stroke="#CACACA" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </button>
                                                            <img
                                                                loading="lazy"
                                                                src="./assets/images/cars/car-card-1.png"
                                                                class="department-img-list of-cover car-image"
                                                                alt="image 1"
                                                            />
                                                        </div>
                                                        <div>
                                                            <button class="add-to-wishlist">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="26"
                                                                     height="26" viewBox="0 0 26 26" fill="none">
                                                                    <path
                                                                        d="M23.1494 3.12177C22.563 2.44911 21.8667 1.9155 21.1003 1.55144C20.334 1.18738 19.5126 1 18.6831 1C17.8535 1 17.0321 1.18738 16.2658 1.55144C15.4994 1.9155 14.8032 2.44911 14.2167 3.12177L12.9997 4.51714L11.7826 3.12177C10.5981 1.76368 8.99153 1.0007 7.31633 1.0007C5.64114 1.0007 4.03455 1.76368 2.85001 3.12177C1.66547 4.47987 1 6.32185 1 8.24249C1 10.1631 1.66547 12.0051 2.85001 13.3632L4.06705 14.7586L12.9997 25L21.9323 14.7586L23.1494 13.3632C23.7361 12.6909 24.2015 11.8926 24.519 11.0139C24.8366 10.1353 25 9.19356 25 8.24249C25 7.29142 24.8366 6.34967 24.519 5.47104C24.2015 4.59241 23.7361 3.79412 23.1494 3.12177Z"
                                                                        fill="white" stroke="#CACACA" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </button>
                                                            <img
                                                                loading="lazy"
                                                                src="./assets/images/cars/car-card-2.png"
                                                                class="department-img-list of-cover car-image"
                                                                alt="image 1"
                                                            />
                                                        </div>
                                                        <div>
                                                            <button class="add-to-wishlist">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="26"
                                                                     height="26" viewBox="0 0 26 26" fill="none">
                                                                    <path
                                                                        d="M23.1494 3.12177C22.563 2.44911 21.8667 1.9155 21.1003 1.55144C20.334 1.18738 19.5126 1 18.6831 1C17.8535 1 17.0321 1.18738 16.2658 1.55144C15.4994 1.9155 14.8032 2.44911 14.2167 3.12177L12.9997 4.51714L11.7826 3.12177C10.5981 1.76368 8.99153 1.0007 7.31633 1.0007C5.64114 1.0007 4.03455 1.76368 2.85001 3.12177C1.66547 4.47987 1 6.32185 1 8.24249C1 10.1631 1.66547 12.0051 2.85001 13.3632L4.06705 14.7586L12.9997 25L21.9323 14.7586L23.1494 13.3632C23.7361 12.6909 24.2015 11.8926 24.519 11.0139C24.8366 10.1353 25 9.19356 25 8.24249C25 7.29142 24.8366 6.34967 24.519 5.47104C24.2015 4.59241 23.7361 3.79412 23.1494 3.12177Z"
                                                                        fill="white" stroke="#CACACA" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </button>
                                                            <img
                                                                loading="lazy"
                                                                src="./assets/images/cars/car-card-1.png"
                                                                class="department-img-list of-cover car-image"
                                                                alt="image 1"
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
                                  <span class="text-main number-ads"
                                  >رقم الاعلان(12)</span
                                  >
                                                            </div>
                                                            <div class="col-auto">
                                                                <div
                                                                    class="d-flex justify-content-center align-items-center"
                                                                >
                                                                    <div class="department-badge bg-main text-white">
                                                                        <div class="pt-1">5</div>
                                                                        <div>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="25" height="25"
                                                                                 viewBox="0 0 25 25" fill="none">
                                                                                <path
                                                                                    d="M12.7529 19.6185L20.1689 24.3301L18.2009 15.4501L24.7529 9.47534L16.1249 8.70481L12.7529 0.330078L9.38093 8.70481L0.75293 9.47534L7.30493 15.4501L5.33693 24.3301L12.7529 19.6185Z"
                                                                                    fill="white"/>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                    <div class="number-ads gray-txt">
                                                                        64 من التقييمات
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h2 class="card-title mb-2">
                                                            فولكس ويغن volkswagen
                                                        </h2>

                                                        <div class="gray-txt number-ads pb-2">
                                <span
                                >سيارة ماركة فولكس رمادي غامق ويغن فئه GIS
                                </span>
                                                        </div>
                                                        <div
                                                            class="text-gray-2 number-ads d-flex align-items-center"
                                                        >
                                                            <div>
                                  <span class="ps-2">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="18"
                                        viewBox="0 0 15 18"
                                        fill="none"
                                    >
                                      <path
                                          fill-rule="evenodd"
                                          clip-rule="evenodd"
                                          d="M7.3 4.28999e-06C6.13434 -0.00154801 5.00739 0.418215 4.12678 1.18195C3.24617 1.94569 2.67124 3.00195 2.50791 4.15611C2.34458 5.31028 2.60387 6.48458 3.23799 7.46267C3.87211 8.44076 4.83834 9.15673 5.95867 9.47867C4.36667 9.672 3.00133 10.2347 1.972 11.2493C0.662666 12.5387 0 14.46 0 16.9667C0 17.1346 0.0667258 17.2957 0.185499 17.4145C0.304272 17.5333 0.465363 17.6 0.633333 17.6C0.801304 17.6 0.962395 17.5333 1.08117 17.4145C1.19994 17.2957 1.26667 17.1346 1.26667 16.9667C1.26667 14.6733 1.87067 13.1267 2.86133 12.1507C3.85333 11.1733 5.336 10.6667 7.3 10.6667C9.264 10.6667 10.7467 11.1733 11.74 12.1507C12.7293 13.128 13.3333 14.6733 13.3333 16.9667C13.3333 17.1346 13.4001 17.2957 13.5188 17.4145C13.6376 17.5333 13.7987 17.6 13.9667 17.6C14.1346 17.6 14.2957 17.5333 14.4145 17.4145C14.5333 17.2957 14.6 17.1346 14.6 16.9667C14.6 14.46 13.9373 12.54 12.6267 11.2493C11.6 10.236 10.2333 9.672 8.64133 9.47867C9.75791 9.15311 10.7198 8.43604 11.3506 7.4589C11.9814 6.48175 12.2389 5.31 12.076 4.15839C11.913 3.00679 11.3405 1.9525 10.4633 1.18875C9.58612 0.425002 8.46307 0.00296898 7.3 4.28999e-06ZM3.73333 4.83334C3.73333 3.8874 4.10911 2.9802 4.77799 2.31132C5.44687 1.64244 6.35406 1.26667 7.3 1.26667C8.24594 1.26667 9.15314 1.64244 9.82201 2.31132C10.4909 2.9802 10.8667 3.8874 10.8667 4.83334C10.8667 5.77928 10.4909 6.68647 9.82201 7.35535C9.15314 8.02423 8.24594 8.40001 7.3 8.40001C6.35406 8.40001 5.44687 8.02423 4.77799 7.35535C4.10911 6.68647 3.73333 5.77928 3.73333 4.83334Z"
                                          fill="#FF8600"
                                      />
                                    </svg>
                                  </span>
                                                                <span>5 مقاعد</span>
                                                            </div>
                                                            <div class="padding-35">
                                  <span class="ps-2">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="20"
                                        height="20"
                                        viewBox="0 0 20 20"
                                        fill="none"
                                    >
                                      <path
                                          d="M16.25 5H13.3333V4.16667C13.3326 3.72484 13.1568 3.3013 12.8444 2.98889C12.532 2.67647 12.1084 2.50066 11.6666 2.5H8.33329C7.89147 2.50066 7.46793 2.67647 7.15551 2.98889C6.84309 3.3013 6.66729 3.72484 6.66663 4.16667V5H3.74996C3.19756 5.00044 2.66791 5.22008 2.27731 5.61068C1.8867 6.00129 1.66707 6.53093 1.66663 7.08333V15.4167C1.66707 15.9691 1.8867 16.4987 2.27731 16.8893C2.66791 17.2799 3.19756 17.4996 3.74996 17.5H16.25C16.8024 17.4996 17.332 17.2799 17.7226 16.8893C18.1132 16.4987 18.3329 15.9691 18.3333 15.4167V7.08333C18.3329 6.53093 18.1132 6.00129 17.7226 5.61068C17.332 5.22008 16.8024 5.00044 16.25 5ZM7.49996 4.16667C7.49996 3.94565 7.58776 3.73369 7.74404 3.57741C7.90032 3.42113 8.11228 3.33333 8.33329 3.33333H11.6666C11.8876 3.33333 12.0996 3.42113 12.2559 3.57741C12.4122 3.73369 12.5 3.94565 12.5 4.16667V5H7.49996V4.16667ZM17.5 15.4167C17.5 15.7482 17.3683 16.0661 17.1338 16.3005C16.8994 16.535 16.5815 16.6667 16.25 16.6667H3.74996C3.41844 16.6667 3.1005 16.535 2.86608 16.3005C2.63166 16.0661 2.49996 15.7482 2.49996 15.4167V10.0225L7.36829 11.6458C7.41081 11.6597 7.45525 11.6667 7.49996 11.6667H12.5C12.5447 11.6667 12.5891 11.6597 12.6316 11.6458L17.5 10.0225V15.4167ZM17.5 9.17167C17.4555 9.17 17.411 9.17563 17.3683 9.18833L12.4325 10.8333H7.56746L2.63163 9.1875C2.58894 9.1748 2.54446 9.16917 2.49996 9.17083V7.08333C2.49996 6.75181 2.63166 6.43387 2.86608 6.19945C3.1005 5.96503 3.41844 5.83333 3.74996 5.83333H16.25C16.5815 5.83333 16.8994 5.96503 17.1338 6.19945C17.3683 6.43387 17.5 6.75181 17.5 7.08333V9.17167Z"
                                          fill="#FF8600"
                                      />
                                    </svg>
                                  </span>
                                                                <span>1شنطه كبيرة</span>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="d-flex align-items-center justify-content-between mt-3 display-block-mobile"
                                                        >
                                                            <div class="department-price">
                                                                <span class="text-gray-2">سعر اليوم:</span>
                                                                <span class="fw-bold text-main"
                                                                >2578 درهم مغربى
                                  </span>
                                                            </div>
                                                            <div
                                                                class="details-btn d-flex align-items-center justify-content-center"
                                                            >
                                                                <a href="#"> @lang('site.details')</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card card-department round-border mb-3 p-3">
                            <nav
                                class="department-list-pagination d-md-flex justify-content-md-between align-items-center"
                            >
                                <ul
                                    class="pagination mb-0 justify-content-lg-start justify-content-center"
                                >
                                    <div> {{ $cars->links() }} </div>

                                </ul>
                            </nav>
                        </div>
                        <div class="card card-department round-border mb-3 p-3">
                            <h4 class="department-title mb-3">   @lang('site.Sign in and save money')</h4>
                            <p class="mb-4 department-txt">
                                @lang('site.You may be able to save')

                                <span class="fw-bold text-main"> 10% </span>
                                @lang('site.or more at this property at check-in')
                            </p>
                            <ul class="d-flex align-items-center">
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

