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
                            <a href="javascript:void(0)"> @lang('site.car') </a>
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

                                <div class="slide @if($key==0)  show @endif" data-slide="{{$key}}">
                                    <img src="{{asset('images/cars/'.$img)}}"
                                         onerror="this.src='{{FRONTASSETS}}/images/cars/car.png'" alt="car"/>
                                </div>
                            @endforeach

                            @else
                                <div class="slide show" data-slide="{{$key}}">
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
                                <i class="fas fa-chevron-left"></i>
                            </div>

                            <div class="slide-btn prev-slide">
                              <i class="fas fa-chevron-right"></i>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-2 gallery-list-mobile">
                        <div id="gallery">
                            @if(!empty($car->images))
                            @foreach(explode(',',$car->images)  as $key=>$img)
                            <div class="thumbnail @if($key==0) active @endif" data-slide="{{$key}}">
                                    <img alt="car"
                                         src="{{asset('images/cars/'.$img)}}"
                                         onerror="this.src='{{FRONTASSETS}}/images/cars/car.png'"
                                    />
                                </div>
                            @endforeach

                            @else

                                <div class="thumbnail" data-slide="{{$key}}">
                                    <img alt="car"
                                         src="{{FRONTASSETS}}/images/cars/car.png"
                                         onerror="this.src='{{FRONTASSETS}}/images/cars/car.png'"
                                    />
                                </div>

                            @endif

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
                                <i class="fas fa-star"></i>
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
                            <i class="far fa-wallet"></i>
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
                            <i class="far fa-wallet"></i>
                            </div>
                                <div class="d-flex justify-content-between w-80">
                                    <div class="h2 text-gray-2 mb-0">@lang('site.Reservation deposit') :</div>
                                    <div class="h2 text-gray-2 mb-0">{{$car->fixed_price ?? 0}}</div>
                                </div>
                            </div>
                            <div class="pt-2 p-3 d-flex align-items-center">
                            <div>
                                <img src="{{FRONTASSETS}}/images/money-ic.png" alt="money icon">
                            </div>
                                <div class="boxx-txt text-gray-2 ">  
                                     @lang('site.The deposit is paid at the time of booking')
                                </div>
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
                        <ul class="tabs-nav-details list-unstyled mb-0 tabs-nav-detailss">
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
                        <ul class="tabs-content list-unstyled tabs-content-details">
                            <li id="tab-1">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="details-txt py-4">



                                            {!! html_entity_decode(substr($car->description, 0, 125)) !!}

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
                                                        <div class="details-car-ic">
                                                        <i class="fal fa-car-side"></i>
                                                        @lang('site.category')
                                                        </div>

                                                        <div>
                                                            <i class="far fa-chevron-down"></i>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div
                                                    id="accordion-details-1"
                                                    class=" collapse show"
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
                                                    <div class="details-car-ic">
                                                        <i class="fal fa-car-side"></i>
                                                            @lang('site.year')
                                                        </div>

                                                        <div>
                                                            <i class="far fa-chevron-down"></i>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div
                                                    id="accordion-details-2"
                                                    class=" collapse show"
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
                                                        <div class="details-car-ic">
                                                        <i class="far fa-palette"></i>
                                                            @lang('site.color')
                                                        </div>

                                                        <div>
                                                            <i class="far fa-chevron-down"></i>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div
                                                    id="accordion-details-3"
                                                    class="collapse show"
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
                                                    <div class="details-car-ic">
                                                        <i class="fal fa-car-side"></i>
                                                            @lang('site.car_numbers')
                                                        </div>

                                                        <div>
                                                            <i class="far fa-chevron-down"></i>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div
                                                    id="accordion-details-6"
                                                    class="collapse show"
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
                                                                <span class="star-review"><i
                                                                            class="fas fa-star"></i></span>
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
                                                    class="">{{round($review->RateTotal($review->car_id) / $review->CountUser($review->car_id)) ?? 0}}</div>
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
                                                                {{$comment->user->lastname ?? ''}}
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
                                                        <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="col-12 d-flex justify-content-end mb-5">
                                        <div
                                            class="booking-now-btn py-4 d-flex justify-content-center align-items-center"
                                        >
                                            <a href="{{route('bookingcar',$car->id)}}"> @lang('site.book')</a>
                                        </div>
                                    </div>


                                    <div class="col-lg-3 my-5">
                                        <div
                                            class="rating-see-btn py-4 d-flex justify-content-center align-items-center"
                                        >
                                            <a href="#"
                                               data-bs-toggle="modal"
                                               data-bs-target="#AllRatingsModal">  @lang('site.Read all reviews') </a>
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
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end mb-5">
                                        <div
                                            class="booking-now-btn py-4 d-flex justify-content-center align-items-center"
                                        >
                                            <a href="{{route('bookingcar',$car->id)}}"> @lang('site.book')</a>
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
                                <i class="fal fa-times"></i>
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
                                                يوجد خصم
                                                <span class="txt_10">10%</span>
                                                لمستخدمي تطبيق سائح
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
                        <div class="d-flex align-items-center">
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
                        <div class="department-badge bg-main text-white badge-modal">
                            <div class="pt-1 live-rating">0.0</div>
                            <div>
                            <i class="fas fa-star"></i>
                            </div>
                        </div></div>

                        </div>
                        <hr class="hr-saeeh my-0" />

                                </div>
                            </div>
                            <div class="col-12">
                                <h2 class="text-gray-2 mb-3">@lang('site.Add a comment about the place')</h2>
                                <div class="form-group">
                                <textarea
                                    class="form-control txtarea-booking px-3 py-2 mt-2 description"
                                    placeholder="اكتب تجربتك كاملة "
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


    <!--All Ratings Modal-->
    <div
        class="modal fade modal-custom-rating"
        id="AllRatingsModal"
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
                    <i class="fal fa-times"></i>
                    </button>
                </div>
                <div class="modal-body p-lg-5 p-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="full-reviews round-border py-lg-4 px-lg-5 p-3">
                                <div class="row g-0">
                                    <div class="col-12 d-md-flex align-items-center">
                                        <div
                                            class="d-flex align-items-center justify-content-center"
                                        >
                                            <div
                                                class="round-box d-flex justify-content-center align-items-center"
                                            >
                                                <div>
                                                    <div>
                                                     <span class="star-review"><i class="fas fa-star"></i></span>
                                                        <span class="text-second"> ({{$car->CarReview->count() ?? 0 }})</span>
                                                    </div>
                                                    <div
                                                        class="text-second text-center">{{$car->CarReview->count() ?? 0 }} @lang('site.reviews')</div>
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col-12">
                            <h2>@lang('site.categories')</h2>
                        </div>
                        @foreach($car->CarReview->unique('name') as $review)
                            <div class="col-lg-6 pb-4">
                                <div
                                    class="d-flex justify-content-between align-items-center"
                                >
                                    <div class="text-gray-2 pb-1">
                                        @lang('site.Receipt and delivery procedures')
                                    </div>
                                    <div
                                        class="">{{round($review->RateTotal($review->car_id) / $review->CountUser($review->car_id)) ?? 0}}</div>
                                </div>
                                <div class="loading-range">
                                    <div class="base-range">
                                        <div class="upper bg-orange"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                    <hr class="hr-saeeh"/>
                    <div class="row mt-5 pb-2">
                        <div class="col-12">
                            <div
                                class="d-md-flex justify-content-md-between align-items-center"
                            >
                                <div>
                                    <h2> @lang('site.Customer reviews')</h2>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 pt-4 mb-lg-5">
                            @foreach($car->carComment as $comment)

                                <div class="condition-content">
                                    <div class="d-flex justify-content-between reviews-contentt">
                                        <div class="d-sm-flex w-100">
                                            <div class="reviews-image">
                                                @if(!empty($comment->user->image))
                                                    <img
                                                        alt=""


                                                        src="{{asset('images/employee/'.$comment->user->image ?? '')}}"


                                                    />
                                                @else

                                                    <img
                                                        alt=""


                                                        src="{{FRONTASSETS}}/images/review-image.png"
                                                    />
                                                @endif
                                            </div>
                                            <div class="w-100 padding-right">
                                                <h2 class="reviews-title d-flex text-second">
                                                    {{$comment->user->firstname ?? ''}}
                                                    {{$comment->user->lastname ?? ''}}
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
                                            <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--your Rate Modal-->

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

                    $('#YourRateModal').hide();
                    window.location.reload();
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




