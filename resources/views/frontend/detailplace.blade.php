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
                            <a href="javascript:void(0)"> {{$place->name ?? ''}} </a>

                        </li>
                        <li class="breadcrumb-item text-gray-4">
                            <span>{{$place->address ?? ''}}</span>
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

                            @if(!empty($place->images))
                                @foreach(explode(',',$place->images) as $key=>$img)

                                    <div class="slide @if($key==0)  show @endif" data-slide="{{$key+1}}">
                                        <img src="{{asset('images/places/'.$img)}}" alt="place image"
                                             onerror="this.src='{{FRONTASSETS}}/images/restaurants/rest-1.png'">

                                    </div>
                                @endforeach
                            @else

                                <div class="slide show" data-slide="1">
                                    <img
                                        loading="lazy"


                                        src="{{FRONTASSETS}}/images/restaurants/resto-card-1.png"
                                        onerror="this.src='{{FRONTASSETS}}/images/restaurants/rest-1.png'"
                                        class="of-cover"
                                        alt="image 1"
                                    />
                                </div>

                            @endif


                            <div class="slide-btn next-slide">
                                <i class="fas fa-chevron-left"></i>
                            </div>

                            <div class="slide-btn prev-slide">
                              <i class="fas fa-chevron-right"></i>
                            </div></div>
                    </div>

                    <div class="col-lg-2 gallery-list-mobile">
                        <div id="gallery">
                            @if(!empty($place->images))
                                @foreach(explode(',',$place->images) as $k=>$imag)
                                    <div class="thumbnail @if($key==0) active @endif" data-slide="{{$key+1}}">
                                        <img src="{{asset('images/places/'.$imag)}}" alt=""
                                             onerror="this.src='{{FRONTASSETS}}/images/restaurants/restaurant-details-m.png'">
                                    </div>
                                @endforeach

                            @else

                                <div class="thumbnail" data-slide="1">
                                    <img alt=""
                                         src="{{FRONTASSETS}}/images/restaurants/resto-card-1.png"
                                         onerror="this.src='{{FRONTASSETS}}/images/restaurants/rest-1.png'">
                                </div>

                            @endif
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-8">
                        <h2>{{$place->name ?? ''}}</h2>
                        <div class="d-flex align-items-center mt-3">
                            <div class="department-badge bg-main text-white">
                                <div class="pt-1">{{ round($place->PlaceReview->avg('rate')) ?? 0}}</div>
                                <div>
                                   <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div
                                class="number-ads gray-txt">@lang('site.comments')  {{ round($place->placeCommentsAll()->count()) ?? 0}}</div>
                        </div>
                        <div class="discound-app d-flex align-items-center justify-content-center my-3 py-2">
                        <span class="discound-icon">
                            <i class="far fa-percentage"></i>
                           </span>
                            <span class="text-main discound-txt">
                            يوجد خصم
                            <span class="txt_10">10%</span>
                            لمستخدمي تطبيق سائح
                            </span>
                        </div>
                        <div class="booking-now-btn py-4 mt-lg-4 d-flex justify-content-center align-items-center btn-in-details">
                            <a href="{{route('showmap',$place->id)}}">
                        <span class="walking-ic"><i class="far fa-walking"></i></span>
                               <span >@lang('site.Go to the restaurant')</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3 text-center mt-lg-0 mt-3">
                            <a href="#" class="h2 text-second">
                                <span class="share-icon">
                                <i class="far fa-share-alt text-main"></i>
                                </span>
                                <span class="link-txt"> @lang('site.Share via social media') </span>
                            </a>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div
                                class="tabs-social-icon d-flex align-items-center justify-content-center">
                                @if(!empty($place->instagram))
                                    <a href="{{url($place->instagram)}}}">
                                    <i class="fab fa-instagram"></i>
                                    </a>
                                @endif
                            </div>
                            <div
                                class="tabs-social-icon d-flex align-items-center justify-content-center">
                                @if(!empty($place->facebook))
                                    <a href="{{url($place->facebook)}}}">
                                    <i class="fab fa-facebook-f"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="tabs-details mt-5">
                        <ul class="tabs-nav-details list-unstyled mb-0 tabs-in-mobile tabs-nav-detailss">
                            <li class="tab-active">
                                <a href="#tab-1" class="tab-link d-flex align-items-center justify-content-center">
                                    @lang('site.details')
                                </a>
                            </li>
                            <li>
                                <a href="#tab-2" class="tab-link d-flex align-items-center justify-content-center">

                                    @lang('site.comments')

                                </a>
                            </li>
                            <li>
                                <a href="#tab-3" class="tab-link d-flex align-items-center justify-content-center">

                                    @lang('site.locations')

                                </a>
                            </li>
                            <li>
                                <a href="#tab-4" class="tab-link d-flex align-items-center justify-content-center">
                                    @lang('site.Restaurant videos')
                                </a>
                            </li>
                            {{--                            <li>--}}
                            {{--                                <a href="#tab-5" class="tab-link d-flex align-items-center justify-content-center">--}}
                            {{--                              @lang('site.food menu')--}}
                            {{--                                </a>--}}
                            {{--                            </li>--}}
                        </ul>
                        <ul class="tabs-content list-unstyled tabs-content-details">
                            <li id="tab-1">
                                <div class="row">
                                    <div class="col-12 pt-4">
                                        <h2>@lang('site.descrption')</h2>
                                        <p class="restaurant-details-txt">
                                            {!! html_entity_decode(substr($place->descrption_ar, 0, 125)) !!}

                                        </p>
                                    </div>
                                    <div class="col-12 py-lg-5">
                                        <div class="condition-content">
                                            <h2>
                                            <span class="place-ic">
                                            <i class="far fa-map-marker-alt "></i>@lang('site.address')
                                            </span>
                                                <!-- {{$place->address ?? ''}} -->
                                            </h2>
                                            <p class="restaurant-details-txt">
                                                {{$place->address ?? ''}} {{$place->city->name ?? ''}} {{$place->country->name ?? ''}}
                                            </p>

                                        </div>
                                        <div class="condition-content">
                                            <h2>
                                            <span class="place-ic">
                                            <i class="far fa-phone"></i>
                                            </span>
                                                @lang('site.phone')
                                            </h2>
                                            <p class="restaurant-details-txt"> {{$place->phone_one  ?? ''}}</p>

                                        </div>
                                        <div class="condition-content">
                                            <h2>
                                                <span class="place-ic">
                                                <i class="far fa-clock"></i>
                                                </span>

                                                @lang('site.dealine')
                                            </h2>
                                            <p class="restaurant-details-txt">
                                                {{$place->const_from  ?? ''}} @lang('site.const_to')
                                                {{$place->const_to  ?? ''}}
                                            </p>

                                        </div>
                                        <div class="condition-content">
                                            <h2>
                                            <span class="place-ic">
                                            <i class="far fa-users"></i>
                                            </span>
                                                @lang('site.social_media')
                                            </h2>
                                            <div class="pt-2 d-flex">
                                                <div
                                                    class="tabs-social-icon d-flex align-items-center justify-content-center">
                                                    @if(!empty($place->twitter))
                                                        <a href="{{url($place->twitter)}}}">
                                                        <i class="fal fa-globe"></i>
                                                        </a>
                                                    @endif
                                                </div>
                                                <div
                                                    class="tabs-social-icon d-flex align-items-center justify-content-center">
                                                    @if(!empty($place->instagram))
                                                        <a href="{{url($place->instagram)}}}">
                                                        <i class="fab fa-instagram"></i>
                                                        </a>
                                                    @endif
                                                </div>
                                                <div
                                                    class="tabs-social-icon d-flex align-items-center justify-content-center">
                                                    @if(!empty($place->facebook))
                                                        <a href="{{url($place->facebook)}}}">
                                                        <i class="fab fa-facebook-f"></i>
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                            <hr class="hr-saeeh">
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center mb-lg-5">
                                        <div
                                            class="booking-now-btn py-4 d-flex justify-content-center align-items-center">
                                            <a href="{{route('showmap',$place->id)}}">
                                            <span class="walking-ic"><i class="far fa-walking"></i></span>
                                                @lang('site.Go to the restaurant')
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li id="tab-2">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="full-reviews round-border mt-4 py-lg-4 px-lg-5 p-3">
                                            <div class="row g-0">
                                                <div class="col-lg-9 d-md-flex align-items-center">
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <div
                                                            class="round-box d-flex justify-content-center align-items-center">
                                                            <div>
                                                                <div>
                                                                <span class="star-review"><i
                                                                            class="fas fa-star"></i></span>
                                                                    <span
                                                                        class="text-second"> ({{ round($place->PlaceReview->avg('rate')) ?? 0}})</span>
                                                                </div>
                                                                <div class="text-second text-center">
                                                                    @lang('site.comments')  {{ round($place->placeCommentsAll()->count()) ?? 0}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="reviews-content">
                                                        <h2 class="review-title">@lang('site.excellent')</h2>
                                                        <p class="review-txt">

                                                            @lang('site.Based on reviews')
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div
                                                        class="rating-see-btn py-4 d-flex justify-content-center align-items-center">
                                                        <a href="#" data-bs-toggle="modal"
                                                           data-bs-target="#YourRateModal">
                                                            @lang('site.Rate now')
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-4">
                                    @foreach($place->PlaceReview->unique('name') as $review)
                                        <div class="col-lg-6 pb-4">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="text-gray-2">@lang('site.Total')</div>
                                                <div
                                                    class="">{{ round($review->RateTotal($review->place_id) / $review->CountUser($review->place_id)) ?? 0}}</div>
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
                                            class="d-flex justify-content-between align-items-center border-bottom-header">
                                            <div>
                                                <h2>@lang('site.Customer reviews')

                                                </h2>
                                            </div>
                                            <div class="see-all">
                                                <a href="{{route('allcommentPlace',$place->id)}}" class="h2"> @lang('site.all') </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 pt-4 mb-5">
                                        @foreach($place->placeComments as $comment)
                                            <div class="condition-content">
                                                <div class="d-flex justify-content-between reviews-contentt">
                                                    <div class="d-sm-flex w-100">
                                                        <div class="reviews-image">
                                                            <img
                                                                src="{{asset('images/employee/'.$comment->user->image)}}"
                                                                alt=""

                                                                onerror="this.src={{FRONTASSETS}}/images/review-image.png"
                                                            >
                                                        </div>
                                                        <div class="w-100 padding-right">
                                                            <h2 class="reviews-title d-flex text-second">
                                                                {{$comment->user->firstname ?? ''}}   {{$comment->user->lastname ?? ''}}
                                                                <div class="comment-image">


                                                                    <img
                                                                        src="{{asset('images/countries/'.$comment->user->country->flag_image)}}"
                                                                        width="25px" height="25px"
                                                                        onerror="this.src={{FRONTASSETS}}/images/car-icons/turkey.png"

                                                                        alt="flag-icon">
                                                                </div>
                                                            </h2>
                                                            <p class="details-sm-txt mb-0">
                                                                {!! html_entity_decode($comment->description) !!}
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="department-badge bg-main text-white">
                                                        <div
                                                            class="pt-1">{{ round(\App\Models\PlaceReview::where('user_id', '=', $comment->user->id)->where('place_id', '=',$place->id)->avg('rate')) ?? 0 }}</div>
                                                        <div>
                                                          <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        @endforeach


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
                                </div>
                    </li>
                    <li id="tab-3" >
                        <div class="row">
                            <div class="col-12">
                                <h3 class="details-head pt-4">@lang('site.address')</h3>
                                <div class="d-flex">
                                    <div class="location-ic pt-1 ps-2">
                                    <i class="far fa-map-marker-alt"></i>
                                    </div>
                                    <p class="details-sm-txt">
                                        {{$place->address ?? ''}}
                                    </p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="map my-md-5 my-3">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319"
                                        width="100%" height="438" frameborder="0" class="round-border">
                                    </iframe>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-center my-lg-5">
                                <div
                                    class="booking-now-btn py-4 d-flex justify-content-center align-items-center">
                                    <a href="{{route('showmap',$place->id)}}">
                                    <span class="walking-ic"><i class="far fa-walking"></i></span>
                                        @lang('site.Go to the restaurant')
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="tab-4" >
                        <div class="row">
                            <div class="col-12">
                                <div class="mt-4">
                                    <h2>    @lang('site.Restaurant videos')</h2>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-4">
                                <div class="card-tour mb-3 position-relative">
                                    <a href="#" data-bs-toggle="modal"
                                       data-bs-target="#videoModal">
                                        <div class="card-vid-box">
                                            <img class="card-vid"
                                                 src="{{asset('images/places/video_img/'.$place->video_photo)}}"
                                                 onerror="this.src='{{FRONTASSETS}}/images/restaurants/vid-image-1.png'"
                                                 alt="Card image cap">
                                        </div>
                                        <div class="play-icon-vid">
                                            <img
                                                src="{{asset('images/places/videos/'.$place->videos)}}"
                                                onerror="this.src='{{FRONTASSETS}}/images/restaurants/video-play-icon.png'" >
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-center my-lg-5">
                                <div
                                    class="booking-now-btn py-4 d-flex justify-content-center align-items-center">
                                    <a href="{{route('showmap',$place->id)}}">
                                    <span class="walking-ic"><i class="far fa-walking"></i></span>
                                        @lang('site.Go to the restaurant')
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                    {{--                            --}}
                    {{--                            <li id="tab-5" style="display: none;">--}}
                    {{--                                <div class="row">--}}
                    {{--                                    <div class="col-12">--}}
                    {{--                                        <div class="mt-4 pb-2">--}}
                    {{--                                            <a href="#" class="h2 text-second">--}}
                    {{--                          <span>--}}
                    {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"--}}
                    {{--                                 fill="none">--}}
                    {{--                              <path--}}
                    {{--                                  d="M18.6673 13.2V10.9334C19.4007 10.6223 20.1509 10.3889 20.918 10.2334C21.6851 10.0778 22.4904 10 23.334 10C23.9118 10 24.4784 10.0445 25.034 10.1334C25.5895 10.2223 26.134 10.3334 26.6673 10.4667V12.6C26.134 12.4 25.5949 12.2498 25.05 12.1494C24.5051 12.0489 23.9331 11.9992 23.334 12C22.4895 12 21.6784 12.1058 20.9007 12.3174C20.1229 12.5289 19.3784 12.8232 18.6673 13.2ZM18.6673 20.5334V18.2667C19.4007 17.9556 20.1509 17.7223 20.918 17.5667C21.6851 17.4112 22.4904 17.3334 23.334 17.3334C23.9118 17.3334 24.4784 17.3778 25.034 17.4667C25.5895 17.5556 26.134 17.6667 26.6673 17.8V19.9334C26.134 19.7334 25.5949 19.5832 25.05 19.4827C24.5051 19.3823 23.9331 19.3325 23.334 19.3334C22.4895 19.3334 21.6784 19.4334 20.9007 19.6334C20.1229 19.8334 19.3784 20.1334 18.6673 20.5334ZM18.6673 16.8667V14.6C19.4007 14.2889 20.1509 14.0556 20.918 13.9C21.6851 13.7445 22.4904 13.6667 23.334 13.6667C23.9118 13.6667 24.4784 13.7112 25.034 13.8C25.5895 13.8889 26.134 14 26.6673 14.1334V16.2667C26.134 16.0667 25.5949 15.9165 25.05 15.816C24.5051 15.7156 23.9331 15.6658 23.334 15.6667C22.4895 15.6667 21.6784 15.7725 20.9007 15.984C20.1229 16.1956 19.3784 16.4898 18.6673 16.8667ZM8.66732 21.3334C9.71176 21.3334 10.7287 21.4503 11.718 21.684C12.7073 21.9178 13.6904 22.2676 14.6673 22.7334V9.60004C13.7562 9.06671 12.7895 8.66671 11.7673 8.40004C10.7451 8.13337 9.71176 8.00004 8.66732 8.00004C7.86732 8.00004 7.07265 8.07782 6.28332 8.23337C5.49398 8.38893 4.7331 8.62226 4.00065 8.93337V22.1334C4.77843 21.8667 5.55087 21.6667 6.31798 21.5334C7.0851 21.4 7.86821 21.3334 8.66732 21.3334ZM17.334 22.7334C18.3118 22.2667 19.2949 21.9165 20.2833 21.6827C21.2718 21.4489 22.2887 21.3325 23.334 21.3334C24.134 21.3334 24.9175 21.4 25.6847 21.5334C26.4518 21.6667 27.2238 21.8667 28.0007 22.1334V8.93337C27.2673 8.62226 26.506 8.38893 25.7167 8.23337C24.9273 8.07782 24.1331 8.00004 23.334 8.00004C22.2895 8.00004 21.2562 8.13337 20.234 8.40004C19.2118 8.66671 18.2451 9.06671 17.334 9.60004V22.7334ZM16.0007 26.6667C14.934 25.8223 13.7784 25.1667 12.534 24.7C11.2895 24.2334 10.0007 24 8.66732 24C7.48954 24 6.25621 24.2223 4.96732 24.6667C3.67843 25.1112 2.46732 25.8 1.33398 26.7334V7.40004C2.31176 6.73337 3.46198 6.22226 4.78465 5.86671C6.10732 5.51115 7.40154 5.33337 8.66732 5.33337C9.95621 5.33337 11.2175 5.50004 12.4513 5.83337C13.6851 6.16671 14.8682 6.66671 16.0007 7.33337C17.134 6.66671 18.3175 6.16671 19.5513 5.83337C20.7851 5.50004 22.046 5.33337 23.334 5.33337C24.6007 5.33337 25.8953 5.51115 27.218 5.86671C28.5407 6.22226 29.6904 6.73337 30.6673 7.40004V26.7334C29.5562 25.8 28.3504 25.1112 27.05 24.6667C25.7495 24.2223 24.5109 24 23.334 24C22.0007 24 20.7118 24.2334 19.4673 24.7C18.2229 25.1667 17.0673 25.8223 16.0007 26.6667Z"--}}
                    {{--                                  fill="#9C9C9C"></path>--}}
                    {{--                            </svg>--}}
                    {{--                          </span>--}}
                    {{--                                                <span--}}
                    {{--                                                    class="{{url($place->place_link)}}}"> @lang('site.Restaurant menu link') </span>--}}
                    {{--                                            </a>--}}
                    {{--                                        </div>--}}

                    {{--                                    </div>--}}

                    {{--                                    <div class="col-12 d-flex justify-content-center my-lg-5">--}}
                    {{--                                        <div--}}
                    {{--                                            class="booking-now-btn py-4 d-flex justify-content-center align-items-center">--}}
                    {{--                                            <a href="#">--}}
                    {{--                          <span>--}}
                    {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"--}}
                    {{--                                 fill="none">--}}
                    {{--                              <path--}}
                    {{--                                  d="M14.2509 8.0625C14.8071 8.0625 15.3509 7.89755 15.8134 7.58851C16.2759 7.27947 16.6364 6.84021 16.8493 6.3263C17.0621 5.81238 17.1178 5.24688 17.0093 4.70131C16.9008 4.15574 16.6329 3.6546 16.2396 3.26126C15.8463 2.86793 15.3451 2.60006 14.7995 2.49154C14.254 2.38302 13.6885 2.43872 13.1746 2.65159C12.6606 2.86446 12.2214 3.22495 11.9123 3.68746C11.6033 4.14997 11.4384 4.69374 11.4384 5.25C11.4384 5.99592 11.7347 6.71129 12.2621 7.23874C12.7896 7.76618 13.5049 8.0625 14.2509 8.0625ZM14.2509 3.5625C14.5846 3.5625 14.9109 3.66147 15.1884 3.8469C15.4659 4.03232 15.6822 4.29587 15.8099 4.60422C15.9376 4.91257 15.971 5.25187 15.9059 5.57922C15.8408 5.90656 15.6801 6.20724 15.4441 6.44324C15.2081 6.67924 14.9074 6.83996 14.5801 6.90508C14.2527 6.97019 13.9134 6.93677 13.6051 6.80905C13.2967 6.68132 13.0332 6.46503 12.8477 6.18753C12.6623 5.91002 12.5634 5.58376 12.5634 5.25C12.5634 4.80245 12.7411 4.37323 13.0576 4.05676C13.3741 3.74029 13.8033 3.5625 14.2509 3.5625ZM20.4843 13.0181C20.429 13.0434 19.8121 13.3116 18.7143 13.3116C17.4149 13.3116 15.4424 12.9366 12.9271 11.3428C12.5241 12.5461 11.9753 13.6956 11.293 14.7656C12.1771 15.0263 13.3555 15.4894 14.4046 16.29C16.169 17.6297 17.0634 19.4672 17.0634 21.75C17.0634 21.8992 17.0041 22.0423 16.8986 22.1477C16.7931 22.2532 16.65 22.3125 16.5009 22.3125C16.3517 22.3125 16.2086 22.2532 16.1031 22.1477C15.9976 22.0423 15.9384 21.8992 15.9384 21.75C15.9384 17.625 12.448 16.2019 10.603 15.7397C10.528 15.8366 10.4512 15.9331 10.3724 16.0294C8.56773 18.2147 6.30929 19.3528 3.7996 19.3528C3.51411 19.3537 3.22875 19.3403 2.9446 19.3125C2.87073 19.3051 2.79904 19.2832 2.73362 19.2482C2.66821 19.2131 2.61034 19.1654 2.56333 19.108C2.51632 19.0505 2.48109 18.9844 2.45964 18.9133C2.4382 18.8422 2.43097 18.7676 2.43835 18.6937C2.44574 18.6199 2.4676 18.5482 2.5027 18.4828C2.53779 18.4174 2.58542 18.3595 2.64288 18.3125C2.75892 18.2175 2.90792 18.1726 3.0571 18.1875C5.55366 18.4369 7.72304 17.4694 9.50429 15.3103C10.738 13.8159 11.5612 11.9813 11.9493 10.7025C8.15148 8.40375 5.70648 10.2544 5.60054 10.3378C5.4836 10.4271 5.33634 10.467 5.19034 10.4489C5.04434 10.4309 4.91121 10.3564 4.81949 10.2414C4.72777 10.1263 4.68475 9.97998 4.69967 9.83362C4.71459 9.68727 4.78625 9.55258 4.89929 9.45844C4.93398 9.43031 5.7796 8.76188 7.22054 8.52094C8.51992 8.30438 10.588 8.39906 13.0668 10.0838C17.4862 13.0838 19.993 12.0028 20.0174 11.9916C20.0846 11.9608 20.1573 11.9435 20.2311 11.9408C20.305 11.9381 20.3787 11.95 20.448 11.9758C20.5173 12.0015 20.5808 12.0407 20.635 12.091C20.6892 12.1413 20.7329 12.2018 20.7637 12.2691C20.7944 12.3363 20.8117 12.4089 20.8144 12.4828C20.8171 12.5567 20.8052 12.6304 20.7795 12.6997C20.7537 12.769 20.7145 12.8325 20.6642 12.8867C20.6139 12.9408 20.5534 12.9845 20.4862 13.0153L20.4843 13.0181Z"--}}
                    {{--                                  fill="white"></path>--}}
                    {{--                            </svg>--}}
                    {{--                          </span>--}}
                    {{--                                                @lang('site.Go to the restaurant')--}}
                    {{--                                            </a>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </li>--}}


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
                            <form class="formregister" id="formregister">


                                <div class="row">
                                    <div class="col-12">
                                        <h2>@lang('site.Tell us your rating about the place')</h2>
                                        <hr class="hr-saeeh"/>
                                    </div>

                                    <div class="col-12">
                                        <div class="discound-app d-flex align-items-center mb-4 p-2">
                                        <span class="discound-icon">
                                        <i class="far fa-percentage"></i>
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

                                                <ul class="register_errorsSsRate"></ul>
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
                                                    <span
                                                        class="text-gray-2 h2 mb-0 badge-txt">@lang('site.total') </span>
                                                </div>
                                                <!-- Output HTML -->
                                                <div class="d-flex align-items-center">
                                                <div class="rate">
                                                    <input type="hidden" name="place_id" value="{{$place->id}}"
                                                           class="place_id">


                                                    <input type="radio" id="star11" name="rate" value="5"
                                                           class="rate"/>
                                                    <label for="star11" title="text">1 star</label>


                                                    <input type="radio" id="star22" name="rate" value="4"
                                                           class="rate"/>
                                                    <label for="star22" title="text">2 stars</label>

                                                    <input type="radio" id="star33" name="rate" value="3"
                                                           class="rate"/>
                                                    <label for="star33" title="text">3 stars</label>

                                                    <input type="radio" id="star44" name="rate" value="2"
                                                           class="rate"/>
                                                    <label for="star44" title="text">4 stars</label>
                                                    <input type="radio" id="star55" name="rate" value="1"
                                                           class="rate"/>
                                                    <label for="star55" title="text">5 stars</label>

                                                </div>
                                                <div class="department-badge bg-main text-white badge-modal">
                                                              <div class="pt-1 live-rating">0.0</div>
                                                             <div>
                                                              <i class="fas fa-star"></i>
                                                             </div>
                                                            </div></div>
                                            </div>
                                            <hr class="hr-saeeh my-0"/>

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
                                            name="description">
                                        </textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-md-end pt-lg-5 pt-3">
                                        <div
                                            class="add-rate-btn d-flex align-items-center justify-content-center"
                                        >
                                            <button type="submit"
                                                    class="formregistersssRate">@lang('site.add')</button>
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
        </section>
    </main>

    <!-- Modal Video -->
    <div
        class="modal fade modal-custom modal-video modal-height-mobile"
        id="videoModal"
        tabindex="-1"
        aria-labelledby="videoModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <button
                    type="button"
                    class="close-modal d-flex justify-content-center align-items-center"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                >
                <i class="fal fa-times"></i>
                </button>

                <div class="modal-body " id="screen">
                    <div class="modal-content-video">
                        <video class="video-full" id="video-full"
                               src="{{asset('images/places/videos/'.$place->videos)}}"
                               onerror="this.src='{{FRONTASSETS}}/images/restaurants/video-play-icon.png'" controls=""
                               autoplay="" loop="">
                        </video>
                    </div>

                </div>
            </div>
        </div>
    </div>

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
                        aria-label="Close" >
                    <i class="fal fa-times"></i>
                    </button>
                </div>
                <div class="modal-body p-lg-5 p-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="full-reviews round-border py-lg-4 px-lg-5 p-3">
                                <div class="row g-0">
                                    <div class="col-12 d-md-flex align-items-center">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="round-box d-flex justify-content-center align-items-center" >
                                                <div>
                                                    <div>
                                                    <span class="star-review">
                                                        <i class="fas fa-star"></i></span>
                                                        <span class="text-second"> ({{ round($place->PlaceReview->avg('rate')) ?? 0}})</span>
                                                    </div>
                                                    <div
                                                        class="text-second text-center">{{ round($place->placeCommentsAll()->count()) ?? 0}} @lang('site.reviews')</div>
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
                        @foreach($place->PlaceReview->unique('name') as $review)
                            <div class="col-lg-6 pb-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="text-gray-2">@lang('site.Total')</div>
                                    <div
                                        class="">{{ round($review->RateTotal($review->place_id) / $review->CountUser($review->place_id)) ?? 0}}</div>
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
                            <div class="d-md-flex justify-content-md-between align-items-center">
                                <div>
                                    <h2> @lang('site.Customer reviews')</h2>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 pt-4 mb-lg-5">
                            @foreach($place->placeCommentsAll as $comment)

                                <div class="condition-content">
                                    <div class="d-flex justify-content-between reviews-contentt">
                                        <div class="d-sm-flex w-100">
                                            <div class="reviews-image">
                                                @if(!empty($comment->user->image))
                                                    <img
                                                        alt="user image"
                                                        src="{{asset('images/employee/'.$comment->user->image ?? '')}}"
                                                    />
                                                @else
                                                    <img
                                                        alt="user image"
                                                        src="{{FRONTASSETS}}/images/review-image.png"
                                                    />
                                                @endif
                                            </div>
                                            <div class="w-100 padding-right">
                                                <h2 class="reviews-title d-flex text-second">
                                                    {{$comment->user->firstname ?? ''}}
                                                    {{$comment->user->lastname ?? ''}}
                                                    <div class="comment-image">
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


        jQuery('.formregistersssRate').click(function (e) {
            // console.log("daaaa");
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            jQuery.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},

                url: "{{ route('addRate') }}",
                method: 'post',
                data: {
                    _token: '{{ csrf_token() }}',
                    description: jQuery('.description').val(),
                    rate: jQuery("input:radio[name=rate]:checked").val(),
                    place_id: jQuery('.place_id').val(),


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
                    var place = jQuery('.place_id').val();

                    window.location.href = '{{route('detailplace',$place)}}';

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
                    $('.register_errorsSsRate').html(errorsList);


                }
            });
        });

    </script>
@endsection


