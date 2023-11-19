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
                            @if(!empty($aquar->images))
                                @foreach(explode(',',$aquar->images) as $key=>$img)
                                    <div class="slide @if($key==0)  show @endif" data-slide="{{$key}}">
                                        <img src="{{asset('images/aqars/'.$img)}}"
                                             onerror="this.src='{{FRONTASSETS}}/images/department-1.svg'"
                                             alt="department"/>
                                    </div>
                                @endforeach

                            @else
                              <div class="slide" data-slide="2">--}}
                                 <img src="{{FRONTASSETS}}/images/side-image-1.png" alt="department"/>--}}
                               </div>

                            @endif

                            <div class="slide-btn next-slide">
                               <i class="fas fa-chevron-left"></i>
                            </div>
                            <div class="slide-btn prev-slide">
                              <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2  gallery-list-mobile">
                        <div id="gallery">
                            @if(!empty($aquar->images))
                                @foreach(explode(',',$aquar->images) as $key=>$img)
                                    <div class="thumbnail" data-slide="{{$key}}">
                                        <img src="{{asset('images/aqars/'.$img)}}"
                                             onerror="this.src='{{FRONTASSETS}}/images/department-1.svg'"
                                             alt="department"/>
                                    </div>
                                @endforeach

                            @else
                                <div class="thumbnail" data-slide="2">
                                    <img src="{{FRONTASSETS}}/images/side-image-1.png" alt="department"/>
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
                            @lang('site.id number')({{$aquar->id ?? 0}})
                        </div>
                        <h2 class="pt-3">{{$aquar->name ?? ''}}</h2>
                        <div class="d-flex align-items-center mt-2">
                            <div class="department-badge bg-main text-white">
                                <div class="pt-1">{{$aquar->aqarReview->avg('rate')}}</div>
                                <div>
                                <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="number-ads gray-txt">
                                @lang('site.comments')

                                {{$aquar->aqarComment->count()}}
                            </div>
                           
                        </div>
                        <div class="booking-now-btn py-4 w-45 d-flex justify-content-center align-items-center mt-4"   >
                            <a href="{{route('bookingaquars',$aquar->id)}}"> @lang('site.book')</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="details-box mb-4 mt-lg-0 mt-3">
                            <div class="pb-2 p-3 d-flex align-items-center">
                                <div class="details-icon">
                                <i class="far fa-wallet"></i>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="h2 text-second mb-0">  @lang('site.price'):</div>
                                    <div
                                        class="h2 text-main mb-0 padding-details">  {{$aquar->fixed_price ?? 0}}   درهم</div>
                                </div>


                            </div>
                            <div class="py-2 px-3 d-flex align-items-center">
                                <div class="details-icon">
                                <i class="far fa-map-marker-alt"></i>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="h2 text-second mb-0">@lang('site.locations'):</div>
                                    <div class="h2 text-gray-4 mb-0 padding-details"><span> {{$aquar->country->name ?? ''}} , {{$aquar->city->name ?? ''}}</span>
                                    </div>
                                </div>


                            </div>
                            <div class="py-2 px-3 d-flex align-items-center">
                                <div class="details-icon">
                                <i class="far fa-building"></i>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="h2 text-second mb-0">@lang('site.floor_numbers')</div>
                                    <div class="h2 text-gray-4 mb-0 padding-details"> 2</div>
                                </div>


                            </div>
                            <div class="py-2 px-3 bg-light-orange d-flex align-items-center">
                            <div class="details-icon">
                                <i class="far fa-wallet"></i>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="h2 text-gray-2 mb-0">@lang('site.Reservation deposit'):</div>
                                    <div
                                        class="h2 text-gray-2 mb-0  padding-details"> {{$aquar->fixed_price ?? 0}}</div>
                                </div>

                            </div>
                            <div class="pt-2 p-3">
                            <span>
                                <img src="{{FRONTASSETS}}/images/money-ic.png" alt="money icon" >
                            </span>
                             <span class="boxx-txt text-gray-2">   @lang('site.The deposit is paid at the time of booking')</span>
                            </div>
                        </div>
                        
                    </div>

                </div>
                <div class="row">
                    <div class="tabs-details mt-5">
                        <ul class="tabs-nav-details list-unstyled  mb-0 ">
                            <li>
                                <a href="#tab-1"
                                   class="tab-link d-flex align-items-center justify-content-center"> @lang('site.details') </a>
                            </li>
                            <li>
                                <a href="#tab-2"
                                   class="tab-link d-flex align-items-center justify-content-center"> @lang('site.comments') </a>
                            </li>
                            <li>
                                <a href="#tab-3"
                                   class="tab-link d-flex align-items-center justify-content-center"> @lang('site.locations') </a>
                            </li>
                            <li>
                                <a href="#tab-4"
                                   class="tab-link d-flex align-items-center justify-content-center"> @lang('site.conditions') </a>
                            </li>
                        </ul>
                        <ul class="tabs-content tabs-content-details list-unstyled">
                            <li id="tab-1">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="details-txt py-4">
                                            {{$aquar->details ?? ''}}
                                        </div>
                                        <h3 class="details-head">
                                            {!! html_entity_decode($aquar->description) !!}</h3>
                                    </div>
                                    <div class="col-12 my-lg-3">
                                        <div class="accordion" id="accordion_details">
                                            @foreach($aquar->aqarSection as $key=>$section)
                                                <div class="accordion-item details-item mb-2">
                                                    <h2 class="accordion-header">
                                                        <button
                                                            class="accordion-button fw-bold"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#accordion-details-{{$key}}"
                                                            aria-expanded="true"
                                                            aria-controls="accordion-details-{{$key}}"
                                                        >
                                                            <div>

                                                                <img
                                                                    src="{{asset('images/services_aqars/'.$section->icon)}}"
                                                                    width="50" height="50"
                                                                    onerror="this.src='{{FRONTASSETS}}/images/side-image-2.png'"
                                                                    alt="car"/>
                                                               

                                                                {{$section->name ?? ''}}
                                                            </div>

                                                            <div>
                                                            <i class="far fa-chevron-down"></i>
                                                            </div>
                                                        </button>
                                                    </h2>
                                                    <div
                                                        id="accordion-details-{{$key}}"
                                                        class=" collapse show"
                                                    >
                                                        <div class="accordion-body">
                                                            @foreach($section->subsection->unique('name') as $subsection)
                                                                <div class="custom-ul-list">
                                                                    <div class="custom-ul-list-item">
                                                                        {{$subsection->name  ?? ''}}
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center mb-5">
                                        <div
                                            class="booking-now-btn py-4 d-flex justify-content-center align-items-center"
                                        >
                                            <a href="{{route('bookingaquars',$aquar->id)}}">@lang('site.book')</a>
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
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <div
                                                            class="round-box d-flex justify-content-center align-items-center"
                                                        >
                                                            <div>
                                                                <div>
                                                     <span class="star-review"><i class="fas fa-star"></i></span>
                                                                    <span class="text-second"> ({{$aquar->aqarReview->avg('rate')}})</span>
                                                                </div>
                                                                <div class="text-second text-center">
                                                                    {{$aquar->aqarReview->avg('rate')}} @lang('site.reviews')
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
                                                        <a href="#"
                                                           data-bs-toggle="modal"
                                                           data-bs-target="#YourRateModal"> @lang('site.Rate now') </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-4">
                                    @foreach($aquar->aqarReview as $review)

                                        <div class="col-lg-6 pb-4">
                                            @if(!empty($review->reviewElement))
                                                <div
                                                    class="d-flex justify-content-between align-items-center"
                                                >
                                                    <div
                                                        class="text-gray-2">{{$review->reviewElement->name ?? ''}}</div>
                                                    <div
                                                        class="">{{$review->RateTotal($review->reviewElement->id) / $review->CountUser($review->reviewElement->id) ?? 0}}</div>
                                                </div>
                                            @endif
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
                                                <h2>@lang('site.Customer reviews')</h2>
                                            </div>
                                            <div class="see-all">
                                                <a href="{{route('allcommentAqar',$aquar->id)}}"
                                                   class="h2"> @lang('site.all') </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 pt-4 mb-5">

                                        @foreach($aquar->aqarComments as $comment)
                                            <div class="condition-content">
                                                <div class="d-flex justify-content-between reviews-contentt">
                                                    <div class="d-sm-flex w-100">
                                                        <div class="reviews-image">
                                                            @if(!empty($comment->user->image))
                                                                <img   alt="review image" src="{{asset('images/employee/'.$comment->user->image ?? '')}}" />
                                                            @else

                                                                <img alt="review image" src="{{FRONTASSETS}}/images/review-image.png"/>
                                                            @endif
                                                        </div>
                                                        <div class="w-100 padding-right">
                                                            <h2 class="reviews-title d-flex text-second">
                                                                {{$comment->user->firstname ?? ''}}
                                                                <div>
                                                                    <img
                                                                        src="{{FRONTASSETS}}/images/car-icons/turkey.png"
                                                                        alt="flag-icon">
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
                                                            {{--<p class="details-sm-txt">
                                                                {{$allaquars->$aqarSection->icon ?? ''}}
                                                            </p> --}}

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </li>
                            <li id="tab-3">
                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="details-head pt-4">@lang('site.locations')</h3>
                                        <div class="d-flex">
                                            <div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M12 12C12.55 12 13.021 11.804 13.413 11.412C13.8043 11.0207 14 10.55 14 10C14 9.45 13.8043 8.979 13.413 8.587C13.021 8.19567 12.55 8 12 8C11.45 8 10.9793 8.19567 10.588 8.587C10.196 8.979 10 9.45 10 10C10 10.55 10.196 11.0207 10.588 11.412C10.9793 11.804 11.45 12 12 12ZM12 19.35C14.0333 17.4833 15.5417 15.7873 16.525 14.262C17.5083 12.7373 18 11.3833 18 10.2C18 8.38333 17.4207 6.89567 16.262 5.737C15.104 4.579 13.6833 4 12 4C10.3167 4 8.89567 4.579 7.737 5.737C6.579 6.89567 6 8.38333 6 10.2C6 11.3833 6.49167 12.7373 7.475 14.262C8.45833 15.7873 9.96667 17.4833 12 19.35ZM12 22C9.31667 19.7167 7.31267 17.5957 5.988 15.637C4.66267 13.679 4 11.8667 4 10.2C4 7.7 4.80433 5.70833 6.413 4.225C8.021 2.74167 9.88333 2 12 2C14.1167 2 15.979 2.74167 17.587 4.225C19.1957 5.70833 20 7.7 20 10.2C20 11.8667 19.3377 13.679 18.013 15.637C16.6877 17.5957 14.6833 19.7167 12 22Z"
                                                        fill="#CACACA"
                                                    />
                                                </svg>
                                            </div>
{{--                                            <p class="details-sm-txt">--}}
                                                {!! html_entity_decode($aquar->description) !!}
{{--                                            </p>--}}
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="map my-md-5 my-3">
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319"
                                                width="100%"
                                                height="438"
                                                frameborder="0"
                                                class="round-border"
                                            >
                                            </iframe>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center my-md-5 my-2">
                                        <div
                                            class="booking-now-btn py-4 d-flex justify-content-center align-items-center"
                                        >
                                            <a href="{{route('bookingaquars',$aquar->id)}}">@lang('site.book')</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li id="tab-4">
                                <div class="row">
                                    <div class="col-12 pt-4">
                                        <div class="condition-content">
                                            <h2 class="condition-title">
                                                @lang('site.allownumber')
                                                <div
                                                    class="badge-condition round-border d-flex justify-content-center align-items-center"
                                                >
                                                    {{$aquar->personnumber ?? 0}}
                                                </div>
                                            </h2>
                                            <p class="details-sm-txt padding-right">
                                                @lang('site.allownumber')
                                                {{$aquar->unitnumber ?? 0}}
                                            </p>
                                        </div>
                                        <div class="condition-content">
                                            <h2 class="condition-title"> @lang('site.Arrival dates')</h2>
                                            <p class="details-sm-txt padding-right">
                                                {{$aquar->time_from ?? ''}}
                                            </p>
                                        </div>
                                        <div class="condition-content">
                                            <h2 class="condition-title">
                                                @lang('site.Departure dates')
                                                <div
                                                    class="badge-condition round-border d-flex justify-content-center align-items-center"
                                                >
                                                    {{$aquar->time_to ?? ''}}
                                                </div>
                                            </h2>
                                            <p class="details-sm-txt padding-right">


                                                {{$aquar->time_to ?? ''}}
                                            </p>
                                           
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
                                <form class="formregister" id="formregister">


                                    <div class="row">
                                        <div class="col-12">
                                            <h2>   @lang('site.Tell us your evaluation of the Aquar')</h2>
                                            <hr class="hr-saeeh"/>
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

                                                    <ul class="register_errorsSaqar"></ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 pt-3 pb-2">
                                            <h2 class="text-gray-2 mb-3">@lang('site.Add a comment about the place')</h2>
                                            <div class="card-groups mb-4">

                                                @foreach($aquar->aqarReview as $key=>$value)

                                                    @if(!empty($value->reviewElement))
                                                        <div class="d-sm-flex justify-content-between py-2 px-3">
                                                            <div class="d-flex align-items-center">
                      <span>
               <img src="{{asset('images/reviewElements/'.$value->reviewElement->icon)}}"
                    width="50" height="50"
                    onerror="this.src='{{FRONTASSETS}}/images/side-image-2.png'"
                    alt="car"/>
                      </span>
                                                                <span
                                                                    class="text-gray-2 h2 mb-0 badge-txt">{{$value->reviewElement->name ?? ''}} </span>
                                                            </div>
                                                            <!-- Output HTML -->

                                                            <div class="rate">
                                                                <input type="hidden" name="aqar_id"
                                                                       value="{{$aquar->id}}" class="aqar_id">
                                                                <input type="hidden" name="review_element_id "
                                                                       value="{{$value->reviewElement->id}}"
                                                                       class="review_element_id ">
                                                                <input type="radio" id="star555{{$key}}" name="rate"
                                                                       value="5" class="rate"/>
                                                                <label for="star555{{$key}}" title="text">5
                                                                    stars</label>
                                                                <input type="radio" id="star444{{$key}}" name="rate"
                                                                       value="4" class="rate"/>
                                                                <label for="star444{{$key}}" title="text">4
                                                                    stars</label>
                                                                <input type="radio" id="star333{{$key}}" name="rate"
                                                                       value="3" class="rate"/>
                                                                <label for="star333{{$key}}" title="text">3
                                                                    stars</label>
                                                                <input type="radio" id="star222{{$key}}" name="rate"
                                                                       value="2" class="rate"/>
                                                                <label for="star222{{$key}}" title="text">2
                                                                    stars</label>
                                                                <input type="radio" id="star111{{$key}}" name="rate"
                                                                       value="1" class="rate"/>
                                                                <label for="star111{{$key}}" title="text">1 star</label>
                                                            </div>

                                                        </div>
                                                        <hr class="hr-saeeh my-0"/>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <h2 class="text-gray-2 mb-3">@lang('site.Add a comment about the place')</h2>
                                            <div class="form-group">
                  <textarea
                      class="form-control txtarea-booking px-3 py-2 mt-2 description"
                      placeholder="{{trans('site.Write your entire experience')}} "
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
                                                <button type="submit"
                                                        class="formregistersRateAqar">@lang('site.add')</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Go To The Restaurant Modal-->


            </div>
            </div>
            </div>
        </section>
    </main>

@endsection


@section('scripts')

    <script>


        jQuery('.formregistersRateAqar').click(function (e) {
            // console.log("daaaa");
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            jQuery.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},

                url: "{{ route('addRateAqar') }}",
                method: 'post',
                data: {
                    _token: '{{ csrf_token() }}',
                    description: jQuery('.description').val(),
                    rate: jQuery("input:radio[name=rate]:checked").val(),
                    aqar_id: jQuery('.aqar_id').val(),
                    review_element_id: jQuery('.review_element_id').val(),


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
                    $('.register_errorsSaqar').html(errorsList);


                }
            });
        });

    </script>
@endsection



