@extends('layouts.main_investor')
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
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)"> @lang('site.car') </a>
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
                            @lang('site.details')
                        </li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="py-4">
            <div class="container">
                <div class="row" id="slideshow">
                    <div class="col-lg-10">
                        <div id="slides">

                            @if(!empty($car->images))
                            @foreach(explode(',',$car->images)  as $key=>$img)

                                <div class="slide show" data-slide="{{$key}}">
                                    <img src="{{asset('images/cars/'.$img)}}"
                                         onerror="this.src='{{FRONTASSETS}}/images/cars/car.png'" alt="car"/>
                                </div>
                            @endforeach

                            @else
                                <div class="slide show" data-slide="1">
                                    <img src="{{FRONTASSETS}}/images/cars/car.png"
                                         onerror="this.src='{{FRONTASSETS}}/images/cars/car.png'" alt="car"/>
                                </div>
                            @endif

                            {{--                            <div class="slide" data-slide="2">--}}
                            {{--                                <img src="{{FRONTASSETS}}/images/cars/sm-car.png" alt="car"/>--}}
                            {{--                            </div>--}}

                            {{--                            <div class="slide" data-slide="3">--}}
                            {{--                                <img src="{{FRONTASSETS}}/images/cars/sm-car.png" alt="car"/>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="slide" data-slide="4">--}}
                            {{--                                <img src="{{FRONTASSETS}}/images/cars/sm-car.png" alt="car"/>--}}
                            {{--                            </div>--}}
                            <div class="slide-btn next-slide">
                  <span>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="26"
                        height="25"
                        viewBox="0 0 26 25"
                        fill="none"
                    >
                      <path
                          d="M9.838 3.84508L18.297 12.2108C18.3974 12.3104 18.4688 12.4185 18.5113 12.535C18.5538 12.6515 18.575 12.7764 18.5748 12.9097C18.5754 13.0431 18.5552 13.1681 18.5144 13.285C18.4735 13.4018 18.4029 13.5104 18.3027 13.6108L9.91192 22.0699C9.67953 22.3042 9.38834 22.4221 9.03835 22.4235C8.68835 22.4249 8.38784 22.3011 8.13683 22.0521C7.88582 21.8031 7.75964 21.512 7.75829 21.1787C7.75693 20.8453 7.88075 20.5532 8.12973 20.3021L15.4499 12.9224L8.07011 5.60227C7.83583 5.36988 7.718 5.08269 7.71661 4.7407C7.71523 4.3987 7.83903 4.10253 8.08801 3.85218C8.337 3.60117 8.62815 3.47499 8.96148 3.47364C9.29481 3.47228 9.58699 3.5961 9.838 3.84508Z"
                          fill="#FF8600"
                      />
                    </svg>
                  </span>
                            </div>

                            <div class="slide-btn prev-slide">
                  <span
                  ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="25"
                          viewBox="0 0 24 25"
                          fill="none"
                      >
                      <path
                          d="M15.1248 21.9267L6.69982 13.5267C6.59982 13.4267 6.52882 13.3184 6.48682 13.2017C6.44482 13.085 6.42415 12.96 6.42482 12.8267C6.42482 12.6934 6.44549 12.5684 6.48682 12.4517C6.52815 12.335 6.59915 12.2267 6.69982 12.1267L15.1248 3.70168C15.3582 3.46835 15.6498 3.35168 15.9998 3.35168C16.3498 3.35168 16.6498 3.47668 16.8998 3.72668C17.1498 3.97668 17.2748 4.26835 17.2748 4.60168C17.2748 4.93502 17.1498 5.22668 16.8998 5.47668L9.54982 12.8267L16.8998 20.1767C17.1332 20.41 17.2498 20.6977 17.2498 21.0397C17.2498 21.3817 17.1248 21.6774 16.8748 21.9267C16.6248 22.1767 16.3332 22.3017 15.9998 22.3017C15.6665 22.3017 15.3748 22.1767 15.1248 21.9267Z"
                          fill="#FF8600"
                      /></svg
                      ></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 gallery-list-mobile">
                        <div id="gallery">
                            @if(!empty($car->images))
                            @foreach(explode(',',$car->images)  as $key=>$img)
                                <div class="thumbnail" data-slide="{{$key}}">
                                    <img alt="car"
                                         src="{{asset('images/cars/'.$img)}}"
                                         onerror="this.src='{{FRONTASSETS}}/images/cars/car.png'"
                                    />
                                </div>
                            @endforeach

                            @else

                                <div class="thumbnail" data-slide="1">
                                    <img alt="car"
                                         src="{{FRONTASSETS}}/images/cars/car.png"
                                         onerror="this.src='{{FRONTASSETS}}/images/cars/car.png'"
                                    />
                                </div>

                            @endif

                            {{--                            <div class="thumbnail" data-slide="2">--}}
                            {{--                                <img src="{{FRONTASSETS}}/images/cars/sm-car.png" alt="car"/>--}}
                            {{--                            </div>--}}

                            {{--                            <div class="thumbnail" data-slide="3">--}}
                            {{--                                <img src="{{FRONTASSETS}}/images/cars/sm-car.png" alt="car"/>--}}
                            {{--                            </div>--}}

                            {{--                            <div class="thumbnail" data-slide="4">--}}
                            {{--                                <img src="{{FRONTASSETS}}/images/cars/sm-car.png" alt="car"/>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-8 col-md-6">
                        <div
                            class="badge-ads-details bg-main round-border d-flex align-items-center justify-content-center"
                        >
                            @lang('site.id number')({{$car->id}})


                        </div>
                        <h2 class="pt-3">{{$car->name ?? ''}}</h2>
                        <div class="d-flex align-items-center mt-3">
                            <div class="department-badge bg-main text-white">
                                <div class="pt-1">5</div>
                                <div>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="25"
                                        height="25"
                                        viewBox="0 0 25 25"
                                        fill="none"
                                    >
                                        <path
                                            d="M12.7529 19.6185L20.1689 24.3301L18.2009 15.4501L24.7529 9.47534L16.1249 8.70481L12.7529 0.330078L9.38093 8.70481L0.75293 9.47534L7.30493 15.4501L5.33693 24.3301L12.7529 19.6185Z"
                                            fill="white"
                                        />
                                    </svg>
                                </div>
                            </div>
                            <div class="number-ads gray-txt">{{$car->carComment->count() ?? 0}} @lang('site.comments')
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="details-box mb-4 mt-lg-0 mt-3">
                            <div class="pb-2 p-3 d-flex align-items-center">
                                <div class="details-icon">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                    >
                                        <path
                                            d="M17.74 22.75H6.26C3.77 22.75 1.75 20.73 1.75 18.24V11.51C1.75 9.02001 3.77 7 6.26 7H17.74C20.23 7 22.25 9.02001 22.25 11.51V12.95C22.25 13.36 21.91 13.7 21.5 13.7H19.48C19.13 13.7 18.81 13.83 18.58 14.07L18.57 14.08C18.29 14.35 18.16 14.72 18.19 15.1C18.25 15.76 18.88 16.29 19.6 16.29H21.5C21.91 16.29 22.25 16.63 22.25 17.04V18.23C22.25 20.73 20.23 22.75 17.74 22.75ZM6.26 8.5C4.6 8.5 3.25 9.85001 3.25 11.51V18.24C3.25 19.9 4.6 21.25 6.26 21.25H17.74C19.4 21.25 20.75 19.9 20.75 18.24V17.8H19.6C18.09 17.8 16.81 16.68 16.69 15.24C16.61 14.42 16.91 13.61 17.51 13.02C18.03 12.49 18.73 12.2 19.48 12.2H20.75V11.51C20.75 9.85001 19.4 8.5 17.74 8.5H6.26Z"
                                            fill="#FF8600"
                                        />
                                        <path
                                            d="M2.5 13.16C2.09 13.16 1.75 12.82 1.75 12.41V7.84006C1.75 6.35006 2.69 5.00001 4.08 4.47001L12.02 1.47001C12.84 1.16001 13.75 1.27005 14.46 1.77005C15.18 2.27005 15.6 3.08005 15.6 3.95005V7.75003C15.6 8.16003 15.26 8.50003 14.85 8.50003C14.44 8.50003 14.1 8.16003 14.1 7.75003V3.95005C14.1 3.57005 13.92 3.22003 13.6 3.00003C13.28 2.78003 12.9 2.73003 12.54 2.87003L4.6 5.87003C3.79 6.18003 3.24 6.97006 3.24 7.84006V12.41C3.25 12.83 2.91 13.16 2.5 13.16Z"
                                            fill="#FF8600"
                                        />
                                        <path
                                            d="M19.5995 17.8002C18.0895 17.8002 16.8095 16.6802 16.6895 15.2402C16.6095 14.4102 16.9095 13.6002 17.5095 13.0102C18.0195 12.4902 18.7195 12.2002 19.4695 12.2002H21.5495C22.5395 12.2302 23.2995 13.0102 23.2995 13.9702V16.0302C23.2995 16.9902 22.5395 17.7702 21.5795 17.8002H19.5995ZM21.5295 13.7002H19.4795C19.1295 13.7002 18.8095 13.8302 18.5795 14.0702C18.2895 14.3502 18.1495 14.7302 18.1895 15.1102C18.2495 15.7702 18.8795 16.3002 19.5995 16.3002H21.5595C21.6895 16.3002 21.8095 16.1802 21.8095 16.0302V13.9702C21.8095 13.8202 21.6895 13.7102 21.5295 13.7002Z"
                                            fill="#FF8600"
                                        />
                                        <path
                                            d="M14 12.75H7C6.59 12.75 6.25 12.41 6.25 12C6.25 11.59 6.59 11.25 7 11.25H14C14.41 11.25 14.75 11.59 14.75 12C14.75 12.41 14.41 12.75 14 12.75Z"
                                            fill="#FF8600"
                                        />
                                    </svg>
                                </div>
                                <div class="d-flex justify-content-between w-80">
                                    <div class="h2 text-second mb-0">@lang('site.price'):</div>
                                    <div class="h2 text-main mb-0"> {{$car->fixed_price ?? 0}}</div>
                                </div>
                            </div>
                            <div
                                class="py-2 px-3 bg-light-orange d-flex align-items-center"
                            >
                                <div class="details-icon">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                    >
                                        <path
                                            d="M17.74 22.75H6.26C3.77 22.75 1.75 20.73 1.75 18.24V11.51C1.75 9.02001 3.77 7 6.26 7H17.74C20.23 7 22.25 9.02001 22.25 11.51V12.95C22.25 13.36 21.91 13.7 21.5 13.7H19.48C19.13 13.7 18.81 13.83 18.58 14.07L18.57 14.08C18.29 14.35 18.16 14.72 18.19 15.1C18.25 15.76 18.88 16.29 19.6 16.29H21.5C21.91 16.29 22.25 16.63 22.25 17.04V18.23C22.25 20.73 20.23 22.75 17.74 22.75ZM6.26 8.5C4.6 8.5 3.25 9.85001 3.25 11.51V18.24C3.25 19.9 4.6 21.25 6.26 21.25H17.74C19.4 21.25 20.75 19.9 20.75 18.24V17.8H19.6C18.09 17.8 16.81 16.68 16.69 15.24C16.61 14.42 16.91 13.61 17.51 13.02C18.03 12.49 18.73 12.2 19.48 12.2H20.75V11.51C20.75 9.85001 19.4 8.5 17.74 8.5H6.26Z"
                                            fill="#FF8600"
                                        />
                                        <path
                                            d="M2.5 13.16C2.09 13.16 1.75 12.82 1.75 12.41V7.84006C1.75 6.35006 2.69 5.00001 4.08 4.47001L12.02 1.47001C12.84 1.16001 13.75 1.27005 14.46 1.77005C15.18 2.27005 15.6 3.08005 15.6 3.95005V7.75003C15.6 8.16003 15.26 8.50003 14.85 8.50003C14.44 8.50003 14.1 8.16003 14.1 7.75003V3.95005C14.1 3.57005 13.92 3.22003 13.6 3.00003C13.28 2.78003 12.9 2.73003 12.54 2.87003L4.6 5.87003C3.79 6.18003 3.24 6.97006 3.24 7.84006V12.41C3.25 12.83 2.91 13.16 2.5 13.16Z"
                                            fill="#FF8600"
                                        />
                                        <path
                                            d="M19.5995 17.8002C18.0895 17.8002 16.8095 16.6802 16.6895 15.2402C16.6095 14.4102 16.9095 13.6002 17.5095 13.0102C18.0195 12.4902 18.7195 12.2002 19.4695 12.2002H21.5495C22.5395 12.2302 23.2995 13.0102 23.2995 13.9702V16.0302C23.2995 16.9902 22.5395 17.7702 21.5795 17.8002H19.5995ZM21.5295 13.7002H19.4795C19.1295 13.7002 18.8095 13.8302 18.5795 14.0702C18.2895 14.3502 18.1495 14.7302 18.1895 15.1102C18.2495 15.7702 18.8795 16.3002 19.5995 16.3002H21.5595C21.6895 16.3002 21.8095 16.1802 21.8095 16.0302V13.9702C21.8095 13.8202 21.6895 13.7102 21.5295 13.7002Z"
                                            fill="#FF8600"
                                        />
                                        <path
                                            d="M14 12.75H7C6.59 12.75 6.25 12.41 6.25 12C6.25 11.59 6.59 11.25 7 11.25H14C14.41 11.25 14.75 11.59 14.75 12C14.75 12.41 14.41 12.75 14 12.75Z"
                                            fill="#FF8600"
                                        />
                                    </svg>
                                </div>
                                <div class="d-flex justify-content-between w-80">
                                    <div class="h2 text-gray-2 mb-0">@lang('site.Reservation deposit') :</div>
                                    <div class="h2 text-gray-2 mb-0">{{$car->fixed_price ?? 0}}</div>
                                </div>
                            </div>
                            <div class="pt-2 p-3">
                  <span>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="52"
                        height="49"
                        viewBox="0 0 52 49"
                        fill="none"
                    >
                      <rect width="52" height="49" fill="url(#pattern0)"/>
                      <defs>
                        <pattern
                            id="pattern0"
                            patternContentUnits="objectBoundingBox"
                            width="1"
                            height="1"
                        >
                          <use
                              xlink:href="#image0_634_42242"
                              transform="matrix(0.00206646 0 0 0.00219298 0.0288462 0)"
                          />
                        </pattern>
                        <image
                            id="image0_634_42242"
                            width="456"
                            height="456"
                            xlink:href="data:image/png;base64,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"
                        />
                      </defs>
                    </svg>
                  </span>
                                <span class="boxx-txt text-gray-2"
                                >
                                    @lang('site.carbonbooking')

                                    </span
                                    >
                            </div>
                        </div>
                        <div
                            class="booking-now-btn py-4 w-100 d-flex justify-content-center align-items-center"
                        >
                            <a href="{{route('bookingcar',$car->id)}}"> @lang('site.book')</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="tabs-details mt-5">
                        <ul class="tabs-nav-details list-unstyled mb-0">
                            <li class="car-item">
                                <a
                                    href="#tab-1"
                                    class="tab-link d-flex align-items-center justify-content-center"
                                >
                                    @lang('site.details')
                                </a>
                            </li>
                            <li class="car-item">
                                <a
                                    href="#tab-2"
                                    class="tab-link d-flex align-items-center justify-content-center"
                                >
                                    @lang('site.comments')
                                </a>
                            </li>

                            <li class="car-item">
                                <a
                                    href="#tab-3"
                                    class="tab-link d-flex align-items-center justify-content-center"
                                >
                                    @lang('site.conditions')
                                </a>
                            </li>
                        </ul>
                        <ul class="tabs-content tabs-details-content list-unstyled">
                            <li id="tab-1">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="details-txt py-4">


                                            {!! html_entity_decode($car->description) !!}
                                        </div>
                                        <h3 class="details-head"> {{$car->name ?? ''}}</h3>
                                    </div>
                                    <div class="col-12 my-lg-3">
                                        <div class="accordion" id="accordion_details">
                                            <div class="accordion-item details-item mb-2">
                                                <h2 class="accordion-header">
                                                    <button
                                                        class="accordion-button fw-bold"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-details-1"
                                                        aria-expanded="true"
                                                        aria-controls="accordion-details-1"
                                                    >
                                                        <div>
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="32"
                                                                height="32"
                                                                viewBox="0 0 32 32"
                                                                fill="none"
                                                            >
                                                                <path
                                                                    d="M18.6667 21.334H12M25.3334 21.334H29.3334V17.134C29.3343 16.8167 29.222 16.5095 29.0167 16.2676C28.8114 16.0256 28.5266 15.8648 28.2134 15.814L21.3334 14.6674L17.7334 9.86738C17.6092 9.70179 17.4481 9.56738 17.263 9.47481C17.0778 9.38224 16.8737 9.33405 16.6667 9.33405H6.98669C6.48971 9.33059 6.00166 9.46608 5.5776 9.72523C5.15353 9.98439 4.81032 10.3569 4.58669 10.8007L3.52002 12.974C2.96021 14.0869 2.66801 15.315 2.66669 16.5607V21.334H5.33335"
                                                                    stroke="#9C9C9C"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                />
                                                                <path
                                                                    d="M8.66665 25.3327C10.5076 25.3327 12 23.8403 12 21.9993C12 20.1584 10.5076 18.666 8.66665 18.666C6.8257 18.666 5.33331 20.1584 5.33331 21.9993C5.33331 23.8403 6.8257 25.3327 8.66665 25.3327Z"
                                                                    stroke="#9C9C9C"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                />
                                                                <path
                                                                    d="M22 25.3327C23.841 25.3327 25.3334 23.8403 25.3334 21.9993C25.3334 20.1584 23.841 18.666 22 18.666C20.1591 18.666 18.6667 20.1584 18.6667 21.9993C18.6667 23.8403 20.1591 25.3327 22 25.3327Z"
                                                                    stroke="#9C9C9C"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                />
                                                            </svg>
                                                        @lang('site.category')
                                                        </div>

                                                        <div>
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="22"
                                                                height="12"
                                                                viewBox="0 0 22 12"
                                                                fill="none"
                                                            >
                                                                <path
                                                                    d="M20.6004 1.71957L11.0004 10.0933L1.40039 1.71957"
                                                                    stroke="#005D9F"
                                                                    stroke-width="2"
                                                                    stroke-linecap="round"
                                                                />
                                                            </svg>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div
                                                    id="accordion-details-1"
                                                    class="accordion-collapse collapse show"
                                                >
                                                    <div class="accordion-body">
                                                        <div class="custom-ul-list">
                                                            <div
                                                                class="custom-ul-list-item">{{$car->category ??''}}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item details-item mb-2">
                                                <h2 class="accordion-header">
                                                    <button
                                                        class="accordion-button fw-bold collapsed"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-details-2"
                                                        aria-expanded="false"
                                                        aria-controls="accordion-details-2"
                                                    >
                                                        <div>
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="32"
                                                                height="32"
                                                                viewBox="0 0 32 32"
                                                                fill="none"
                                                            >
                                                                <path
                                                                    d="M18.6667 21.334H12M25.3334 21.334H29.3334V17.134C29.3343 16.8167 29.222 16.5095 29.0167 16.2676C28.8114 16.0256 28.5266 15.8648 28.2134 15.814L21.3334 14.6674L17.7334 9.86738C17.6092 9.70179 17.4481 9.56738 17.263 9.47481C17.0778 9.38224 16.8737 9.33405 16.6667 9.33405H6.98669C6.48971 9.33059 6.00166 9.46608 5.5776 9.72523C5.15353 9.98439 4.81032 10.3569 4.58669 10.8007L3.52002 12.974C2.96021 14.0869 2.66801 15.315 2.66669 16.5607V21.334H5.33335"
                                                                    stroke="#9C9C9C"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                />
                                                                <path
                                                                    d="M8.66665 25.3327C10.5076 25.3327 12 23.8403 12 21.9993C12 20.1584 10.5076 18.666 8.66665 18.666C6.8257 18.666 5.33331 20.1584 5.33331 21.9993C5.33331 23.8403 6.8257 25.3327 8.66665 25.3327Z"
                                                                    stroke="#9C9C9C"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                />
                                                                <path
                                                                    d="M22 25.3327C23.841 25.3327 25.3334 23.8403 25.3334 21.9993C25.3334 20.1584 23.841 18.666 22 18.666C20.1591 18.666 18.6667 20.1584 18.6667 21.9993C18.6667 23.8403 20.1591 25.3327 22 25.3327Z"
                                                                    stroke="#9C9C9C"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                />
                                                            </svg>
                                                            @lang('site.year')
                                                        </div>

                                                        <div>
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="22"
                                                                height="12"
                                                                viewBox="0 0 22 12"
                                                                fill="none"
                                                            >
                                                                <path
                                                                    d="M20.6004 1.71957L11.0004 10.0933L1.40039 1.71957"
                                                                    stroke="#005D9F"
                                                                    stroke-width="2"
                                                                    stroke-linecap="round"
                                                                />
                                                            </svg>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div
                                                    id="accordion-details-2"
                                                    class="accordion-collapse collapse show"
                                                >
                                                    <div class="accordion-body">
                                                        <div class="custom-ul-list">
                                                            <div class="custom-ul-list-item">{{$car->year ??''}}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item details-item mb-2">
                                                <h2 class="accordion-header">
                                                    <button
                                                        class="accordion-button fw-bold collapsed"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-details-3"
                                                        aria-expanded="false"
                                                        aria-controls="accordion-details-3"
                                                    >
                                                        <div>
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="32"
                                                                height="32"
                                                                viewBox="0 0 32 32"
                                                                fill="none"
                                                            >
                                                                <path
                                                                    d="M16 29.3327C8.65335 29.3327 2.66669 23.346 2.66669 15.9993C2.66669 8.65268 8.65335 2.66602 16 2.66602C23.3467 2.66602 29.3334 8.05268 29.3334 14.666C29.3334 19.0793 25.7467 22.666 21.3334 22.666H18.9734C18.6 22.666 18.3067 22.9593 18.3067 23.3327C18.3067 23.4927 18.3734 23.6393 18.48 23.7727C19.0267 24.3993 19.3334 25.186 19.3334 25.9993C19.3334 26.8834 18.9822 27.7313 18.357 28.3564C17.7319 28.9815 16.8841 29.3327 16 29.3327ZM16 5.33268C10.12 5.33268 5.33335 10.1193 5.33335 15.9993C5.33335 21.8793 10.12 26.666 16 26.666C16.3734 26.666 16.6667 26.3727 16.6667 25.9993C16.6625 25.8264 16.5963 25.6608 16.48 25.5327C15.9334 24.9193 15.64 24.1327 15.64 23.3327C15.64 22.4486 15.9912 21.6008 16.6163 20.9757C17.2415 20.3505 18.0893 19.9993 18.9734 19.9993H21.3334C24.28 19.9993 26.6667 17.6127 26.6667 14.666C26.6667 9.51935 21.88 5.33268 16 5.33268Z"
                                                                    fill="#9C9C9C"
                                                                />
                                                                <path
                                                                    d="M8.66669 17.334C9.77126 17.334 10.6667 16.4386 10.6667 15.334C10.6667 14.2294 9.77126 13.334 8.66669 13.334C7.56212 13.334 6.66669 14.2294 6.66669 15.334C6.66669 16.4386 7.56212 17.334 8.66669 17.334Z"
                                                                    fill="#9C9C9C"
                                                                />
                                                                <path
                                                                    d="M12.6667 12C13.7713 12 14.6667 11.1046 14.6667 10C14.6667 8.89543 13.7713 8 12.6667 8C11.5621 8 10.6667 8.89543 10.6667 10C10.6667 11.1046 11.5621 12 12.6667 12Z"
                                                                    fill="#9C9C9C"
                                                                />
                                                                <path
                                                                    d="M19.3333 12C20.4379 12 21.3333 11.1046 21.3333 10C21.3333 8.89543 20.4379 8 19.3333 8C18.2287 8 17.3333 8.89543 17.3333 10C17.3333 11.1046 18.2287 12 19.3333 12Z"
                                                                    fill="#9C9C9C"
                                                                />
                                                                <path
                                                                    d="M23.3333 17.334C24.4379 17.334 25.3333 16.4386 25.3333 15.334C25.3333 14.2294 24.4379 13.334 23.3333 13.334C22.2287 13.334 21.3333 14.2294 21.3333 15.334C21.3333 16.4386 22.2287 17.334 23.3333 17.334Z"
                                                                    fill="#9C9C9C"
                                                                />
                                                            </svg>

                                                            @lang('site.color')
                                                        </div>

                                                        <div>
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="22"
                                                                height="12"
                                                                viewBox="0 0 22 12"
                                                                fill="none"
                                                            >
                                                                <path
                                                                    d="M20.6004 1.71957L11.0004 10.0933L1.40039 1.71957"
                                                                    stroke="#005D9F"
                                                                    stroke-width="2"
                                                                    stroke-linecap="round"
                                                                />
                                                            </svg>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div
                                                    id="accordion-details-3"
                                                    class="accordion-collapse collapse show"
                                                >
                                                    <div class="accordion-body">
                                                        <div class="custom-ul-list">
                                                            <div class="custom-ul-list-item">{{$car->color ??''}}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item details-item mb-2">
                                                <h2 class="accordion-header">
                                                    <button
                                                        class="accordion-button fw-bold collapsed"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-details-6"
                                                        aria-expanded="false"
                                                        aria-controls="accordion-details-6"
                                                    >
                                                        <div>
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="32"
                                                                height="32"
                                                                viewBox="0 0 32 32"
                                                                fill="none"
                                                            >
                                                                <path
                                                                    d="M18.6667 21.334H12M25.3334 21.334H29.3334V17.134C29.3343 16.8167 29.222 16.5095 29.0167 16.2676C28.8114 16.0256 28.5266 15.8648 28.2134 15.814L21.3334 14.6674L17.7334 9.86738C17.6092 9.70179 17.4481 9.56738 17.263 9.47481C17.0778 9.38224 16.8737 9.33405 16.6667 9.33405H6.98669C6.48971 9.33059 6.00166 9.46608 5.5776 9.72523C5.15353 9.98439 4.81032 10.3569 4.58669 10.8007L3.52002 12.974C2.96021 14.0869 2.66801 15.315 2.66669 16.5607V21.334H5.33335"
                                                                    stroke="#9C9C9C"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                />
                                                                <path
                                                                    d="M8.66665 25.3327C10.5076 25.3327 12 23.8403 12 21.9993C12 20.1584 10.5076 18.666 8.66665 18.666C6.8257 18.666 5.33331 20.1584 5.33331 21.9993C5.33331 23.8403 6.8257 25.3327 8.66665 25.3327Z"
                                                                    stroke="#9C9C9C"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                />
                                                                <path
                                                                    d="M22 25.3327C23.841 25.3327 25.3334 23.8403 25.3334 21.9993C25.3334 20.1584 23.841 18.666 22 18.666C20.1591 18.666 18.6667 20.1584 18.6667 21.9993C18.6667 23.8403 20.1591 25.3327 22 25.3327Z"
                                                                    stroke="#9C9C9C"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                />
                                                            </svg>
                                                            @lang('site.car_numbers')
                                                        </div>

                                                        <div>
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="22"
                                                                height="12"
                                                                viewBox="0 0 22 12"
                                                                fill="none"
                                                            >
                                                                <path
                                                                    d="M20.6004 1.71957L11.0004 10.0933L1.40039 1.71957"
                                                                    stroke="#005D9F"
                                                                    stroke-width="2"
                                                                    stroke-linecap="round"
                                                                />
                                                            </svg>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div
                                                    id="accordion-details-6"
                                                    class="accordion-collapse collapse show"
                                                >
                                                    <div class="accordion-body">
                                                        <div class="custom-ul-list">
                                                            <div
                                                                class="custom-ul-list-item">{{$car->car_numbers ?? 0}}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end mb-5">
                                        <div
                                            class="booking-now-btn py-4 d-flex justify-content-center align-items-center"
                                        >
                                            <a href="{{route('bookingcar',$car->id)}}">

                                                @lang('site.book')</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li id="tab-2">
                                <div class="row">
                                    <div class="col-12">
                                        <div
                                            class="full-reviews round-border mt-4 py-lg-4 px-lg-5 p-3"
                                        >
                                            <div class="row g-0">
                                                <div class="col-lg-9 d-md-flex align-items-center">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center"
                                                    >
                                                        <div
                                                            class="round-box d-flex justify-content-center align-items-center"
                                                        >
                                                            <div>
                                                                <div>
                                    <span
                                    ><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="34"
                                            height="36"
                                            viewBox="0 0 34 36"
                                            fill="none"
                                        >
                                        <path
                                            d="M18.3409 28.2434L29.5832 35.0288L26.5998 22.2402L36.5324 13.6356L23.4527 12.5259L18.3409 0.464966L13.2291 12.5259L0.149414 13.6356L10.082 22.2402L7.09856 35.0288L18.3409 28.2434Z"
                                            fill="#FF8600"
                                        /></svg
                                        ></span>
                                                                    <span class="text-second"> ({{$car->CarReview->count() ?? 0 }})</span>
                                                                </div>
                                                                <div class="text-second text-center">
                                                                    {{$car->CarReview->count() ?? 0 }} @lang('site.reviews')
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="reviews-content">
                                                        <h2 class="review-title">@lang('site.excellent')</h2>
                                                        <p class="review-txt">

                                                            @lang('site.Based on reviews from all kinds of travelers')
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div
                                                        class="rating-see-btn py-4 d-flex justify-content-center align-items-center"
                                                    >
                                                        <a
                                                            href="#"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#YourRateModal"
                                                        >
                                                            @lang('site.Rate now')
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-4">
                                    @foreach($car->CarReview->unique('name') as $review)
                                        <div class="col-lg-6 pb-4">
                                            <div
                                                class="d-flex justify-content-between align-items-center"
                                            >
                                                <div class="text-gray-2 pb-1">
                                                    @lang('site.Receipt and delivery procedures')
                                                </div>
                                                <div
                                                    class="">{{$review->RateTotal($review->car_id) / $review->CountUser($review->car_id) ?? 0}}</div>
                                            </div>
                                            <div class="loading-range">
                                                <div class="base-range">
                                                    <div class="upper bg-orange"></div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="row mt-5 pb-2">
                                    <div class="col-12">
                                        <div
                                            class="d-flex justify-content-between align-items-center border-bottom-header"
                                        >
                                            <div>
                                                <h2> @lang('site.Customer reviews')</h2>
                                            </div>
                                            <div class="see-all">
                                                <a href="{{route('allcommentCar',$car->id)}}" class="h2"> @lang('site.all')  </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 pt-4 mb-lg-5">

                                        @foreach($car->carComments as $comment)

                                            <div class="condition-content">
                                                <div
                                                    class="d-flex justify-content-between reviews-contentt"
                                                >
                                                    <div class="d-sm-flex w-100">
                                                        <div class="reviews-image">
                                                            @if(!empty($comment->user->image))
                                                            <img


                                                                src="{{asset('images/employee/'.$comment->user->image ?? '')}}"
                                                                alt="UserName"


                                                            />

                                                            @else
                                                                <img
                                                                    src="{{FRONTASSETS}}/images/review-image.png"


                                                                    alt="UserName"


                                                                />
                                                            @endif
                                                        </div>
                                                        <div class="w-100 padding-right">
                                                            <h2 class="reviews-title d-flex text-second">
                                                                {{$comment->user->firstname ?? ''}}
                                                                {{$comment->user->firstname ?? ''}}
                                                                <div>

                                                                    @if(!empty($comment->user->country->flag_image))
                                                                        <img


                                                                            src="{{asset('images/countries/'.$comment->user->country->flag_image)}}" width="25px" height="25px"
                                                                            onerror="this.src={{FRONTASSETS}}/images/car-icons/turkey.png"
                                                                            alt="flag-icon">

                                                                    @else
                                                                        <img


                                                                            src="{{FRONTASSETS}}/images/car-icons/turkey.png" width="25px" height="25px"
                                                                            onerror="this.src={{FRONTASSETS}}/images/car-icons/turkey.png"
                                                                            alt="flag-icon">

                                                                    @endif
                                                                </div>
                                                            </h2>
                                                            <p class="details-sm-txt mb-0">
                                                            {!! html_entity_decode(substr($comment->description, 0, 125)) !!}
                                                              </p>
                                                        </div>
                                                    </div>

                                                    <div class="department-badge bg-main text-white">
                                                        <div class="pt-1">{{$comment->rating ?? 0}}</div>
                                                        <div>
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="25"
                                                                height="25"
                                                                viewBox="0 0 25 25"
                                                                fill="none"
                                                            >
                                                                <path
                                                                    d="M12.7529 19.6185L20.1689 24.3301L18.2009 15.4501L24.7529 9.47534L16.1249 8.70481L12.7529 0.330078L9.38093 8.70481L0.75293 9.47534L7.30493 15.4501L5.33693 24.3301L12.7529 19.6185Z"
                                                                    fill="white"
                                                                />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>

                                                <hr class="hr-saeeh"/>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="col-12 d-flex justify-content-end mb-5">
                                        <div
                                            class="booking-now-btn py-4 d-flex justify-content-center align-items-center"
                                        >
                                            <a href="#"> @lang('site.book')</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li id="tab-3">
                                <div class="row">
                                    <div class="col-12 pt-4">
                                        <!-- <div class="condition-content">
                                            <h2 class="condition-title">

                                                @lang('site.allownumber')
                                                <div
                                                    class="badge-condition round-border d-flex justify-content-center align-items-center"
                                                >
                                                    {{$car->car_numbers ?? 0}}
                                                </div>
                                            </h2>
                                            <p class="details-sm-txt padding-right">
                                                @lang('site.Please follow the site policy')
                                            </p>
                                            <hr class="hr-saeeh"/>
                                        </div> -->
                                        <div class="condition-content">
                                            <h2 class="condition-title">@lang('site.Arrival dates')</h2>
                                            <p class="details-sm-txt padding-right">

                                                {{$car->car_delivery_date ?? ''}}
                                            </p>
                                            <hr class="hr-saeeh"/>
                                        </div>
                                        <div class="condition-content">
                                            <h2 class="condition-title">
                                                @lang('site.Departure dates')
                                                <div
                                                    class="badge-condition round-border d-flex justify-content-center align-items-center"
                                                >
                                                    12pm
                                                </div>
                                            </h2>
                                            <p class="details-sm-txt padding-right">
                                                @lang('site.Please follow the site policy')
                                            </p>
                                            <hr class="hr-saeeh"/>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end mb-5">
                                        <div
                                            class="booking-now-btn py-4 d-flex justify-content-center align-items-center"
                                        >
                                            <a href="#"> @lang('site.book')</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>




                <!--your Rate Modal-->
                <div
                    class="modal fade modal-custom-rating"
                    id="YourRateModal"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                >
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div>
                                <button
                                    type="button"
                                    class="btn-close rating-close d-flex justify-content-center align-items-center"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="32"
                                        height="32"
                                        viewBox="0 0 32 32"
                                        fill="none"
                                    >
                                        <path
                                            d="M8.53366 25.3327L6.66699 23.466L14.1337 15.9993L6.66699 8.53268L8.53366 6.66602L16.0003 14.1327L23.467 6.66602L25.3337 8.53268L17.867 15.9993L25.3337 23.466L23.467 25.3327L16.0003 17.866L8.53366 25.3327Z"
                                            fill="white"
                                        />
                                    </svg>
                                </button>
                            </div>
                            <div class="modal-body p-lg-5 p-3">
                                <form >


                                    <div class="row">
                                        <div class="col-12">
                                            <h2>   @lang('site.Tell us your rating about the place')</h2>
                                            <hr class="hr-saeeh" />
                                        </div>

                                        <div class="col-12">
                                            <div class="discound-app d-flex align-items-center mb-4 p-2">
                  <span class="discound-icon">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        fill="none"
                    >
                      <path
                          d="M7.5 12.5L12.5 7.5"
                          stroke="#9C9C9C"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                      />
                      <path
                          d="M7.91667 8.33333C8.14679 8.33333 8.33333 8.14679 8.33333 7.91667C8.33333 7.68655 8.14679 7.5 7.91667 7.5C7.68655 7.5 7.5 7.68655 7.5 7.91667C7.5 8.14679 7.68655 8.33333 7.91667 8.33333Z"
                          fill="#9C9C9C"
                          stroke="#9C9C9C"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                      />
                      <path
                          d="M12.0833 12.4993C12.3134 12.4993 12.5 12.3128 12.5 12.0827C12.5 11.8526 12.3134 11.666 12.0833 11.666C11.8532 11.666 11.6666 11.8526 11.6666 12.0827C11.6666 12.3128 11.8532 12.4993 12.0833 12.4993Z"
                          fill="#9C9C9C"
                          stroke="#9C9C9C"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                      />
                      <path
                          d="M2.5 10C2.5 10.9849 2.69399 11.9602 3.0709 12.8701C3.44781 13.7801 4.00026 14.6069 4.6967 15.3033C5.39314 15.9997 6.21993 16.5522 7.12987 16.9291C8.03982 17.306 9.01509 17.5 10 17.5C10.9849 17.5 11.9602 17.306 12.8701 16.9291C13.7801 16.5522 14.6069 15.9997 15.3033 15.3033C15.9997 14.6069 16.5522 13.7801 16.9291 12.8701C17.306 11.9602 17.5 10.9849 17.5 10C17.5 9.01509 17.306 8.03982 16.9291 7.12987C16.5522 6.21993 15.9997 5.39314 15.3033 4.6967C14.6069 4.00026 13.7801 3.44781 12.8701 3.0709C11.9602 2.69399 10.9849 2.5 10 2.5C9.01509 2.5 8.03982 2.69399 7.12987 3.0709C6.21993 3.44781 5.39314 4.00026 4.6967 4.6967C4.00026 5.39314 3.44781 6.21993 3.0709 7.12987C2.69399 8.03982 2.5 9.01509 2.5 10Z"
                          stroke="#9C9C9C"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                      />
                    </svg>
                  </span>
                                    <span class="text-main discound-txt">
                                    @lang('site.There is a discount')
                    <span class="txt_10">10%</span>
                    @lang('site.For users of the tourist application')
                  </span>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">

                                                    <ul class="register_errorsSrate"></ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 pt-3 pb-2">
                                            <h2 class="text-gray-2 mb-3">@lang('site.Add a comment about the place')</h2>
                                            <div class="card-groups mb-4">





                                                <div class="d-sm-flex justify-content-between py-2 px-3">
                                                    <div class="d-flex align-items-center">
                      <span>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="32"
                            height="32"
                            viewBox="0 0 32 32"
                            fill="none"
                        >
                          <path
                              d="M29.2798 12.974L27.3731 6.30732C27.2956 6.02743 27.1284 5.78069 26.8972 5.60489C26.666 5.42909 26.3836 5.33393 26.0931 5.33398H5.90646C5.30646 5.33398 4.78646 5.73398 4.62646 6.30732L2.71979 12.974C2.47979 13.814 3.11979 14.6673 3.99979 14.6673H6.93313L5.33313 26.6673H7.99979L8.89313 20.0007H23.1198L23.9998 26.6673H26.6665L25.0665 14.6673H27.9998C28.8798 14.6673 29.5198 13.814 29.2798 12.974ZM9.23979 17.334L9.59979 14.6673H22.3998L22.7598 17.334H9.23979ZM5.77313 12.0007L6.91979 8.00065H25.0931L26.2398 12.0007H5.77313Z"
                              fill="#9C9C9C"
                          />
                        </svg>
                      </span>
                                                        <span class="text-gray-2 h2 mb-0 badge-txt">@lang('site.total') </span>
                                                    </div>
                                                    <!-- Output HTML -->

                                                    <div class="rate">
                                                        <input type="hidden" name="car_id" value="{{$car->id}}" class="car_id">
                                                        <input type="radio" id="star5" name="rate" value="5" class="rate" />
                                                        <label for="star5" title="text">5 stars</label>
                                                        <input type="radio" id="star4" name="rate" value="4"  class="rate"/>
                                                        <label for="star4" title="text">4 stars</label>
                                                        <input type="radio" id="star3" name="rate" value="3"  class="rate"/>
                                                        <label for="star3" title="text">3 stars</label>
                                                        <input type="radio" id="star2" name="rate" value="2" class="rate" />
                                                        <label for="star2" title="text">2 stars</label>
                                                        <input type="radio" id="star1" name="rate" value="1"  class="rate"/>
                                                        <label for="star1" title="text">1 star</label>
                                                    </div>

                                                </div>
                                                <hr class="hr-saeeh my-0" />

                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <h2 class="text-gray-2 mb-3">@lang('site.Add a comment about the place')</h2>
                                            <div class="form-group">
                  <textarea
                      class="form-control txtarea-booking px-3 py-2 mt-2 description"
                      placeholder=" @lang('site.Write your entire experience') "
                      rows="4"
                      id="description"
                      name="description"
                  ></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-md-end pt-lg-5 pt-3">
                                            <div
                                                class="add-rate-btn d-flex align-items-center justify-content-center"
                                            >
                                                <button  type="submit" class="formregistersrate">@lang('site.add')</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>
    </main>

@endsection

@section('scripts')

    <script>


        jQuery('.formregistersrate').click(function (e) {
            // console.log("daaaa");
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            jQuery.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},

                url: "{{ route('addRateCar') }}",
                method: 'post',
                data: {
                    _token: '{{ csrf_token() }}',
                    description: jQuery('.description').val(),
                    rate: jQuery("input:radio[name=rate]:checked").val(),
                    car_id: jQuery('.car_id').val(),



                },
                success: function (result) {



                    console.log(result);

                    if (result.content == 'success')


                        swal({
                            title: "Success!",
                            text: "The CommentReviews has been successfully sent!",
                            type: "success",
                            confirmButtonText: "OK"
                        });

                    setTimeout(function () {
                        Swal.close()
                    }, 2000)

                    window.location.href = '{{route('Home')}}';

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
@endsection




