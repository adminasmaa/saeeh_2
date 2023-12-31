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
                                <div class="slide" data-slide="{{$key}}">
                                    <img src="{{FRONTASSETS}}/images/side-image-1.png" alt="department"/>
                                </div>
                                <div class="slide" data-slide="{{$key}}">
                                    <img src="{{FRONTASSETS}}/images/side-image-1.png" alt="department"/>
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
                                    <div class="thumbnail @if($key==0) active @endif" data-slide="{{$key}}">
                                        <img src="{{asset('images/aqars/'.$img)}}"
                                             onerror="this.src='{{FRONTASSETS}}/images/department-1.svg'"
                                             alt="department"/>
                                    </div>
                                @endforeach

                            @else
                                <div class="thumbnail" data-slide="{{$key}}">
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
                                <div class="pt-1">{{round($aquar->aqarReview->avg('rate')) ?? 0}}</div>
                                <div>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="number-ads gray-txt">
                                @lang('site.comments')

                                {{$aquar->aqarComment->count()}}
                            </div>

                        </div>

                        <div class="booking-now-btn py-4 w-45 d-flex justify-content-center align-items-center mt-4">
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

                                        class="h2 text-main mb-0 padding-details">  {{$aquar->fixed_price ?? 0}} درهم
                                    </div>
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
                            <div class="pt-2 p-3 d-flex align-items-center">
                            <div>
                                <img src="{{FRONTASSETS}}/images/money-ic.png" alt="money icon">
                            </div>
                                <div class="boxx-txt text-gray-2 ">  
                                     @lang('site.The deposit is paid at the time of booking')
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="tabs-details mt-5">
                        <ul class="tabs-nav-details list-unstyled mb-0 tabs-nav-detailss">
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
                        <ul class="tabs-content list-unstyled tabs-content-details">
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
                                        <div class="booking-now-btn py-4 d-flex justify-content-center align-items-center" >
                                            <a href="{{route('bookingaquars',$aquar->id)}}">@lang('site.book')</a>
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
                                                        <div class="round-box d-flex justify-content-center align-items-center">
                                                            <div>
                                                                <div>
                                                                    <span class="star-review"><i class="fas fa-star"></i></span>
                                                                    <span class="text-second"> ({{ round($aquar->aqarReview->avg('rate')) ?? 0}})</span>
                                                                </div>
                                                                <div class="text-second text-center">
                                                                    {{$aquar->aqarReview->count() ?? 0}} @lang('site.reviews')
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
                                                    <div class="rating-see-btn py-4 d-flex justify-content-center align-items-center">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#YourRateModal"> @lang('site.Rate now') </a>
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
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="text-gray-2">{{$review->reviewElement->name ?? ''}}</div>
                                                    <div >{{round($review->RateTotal($review->reviewElement->id) / $review->CountUser($review->reviewElement->id)) ?? 0}}</div>
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
                                        <div class="d-flex justify-content-between align-items-center border-bottom-header">
                                            <div>
                                                <h2>@lang('site.Customer reviews')</h2>
                                            </div>
                                            <div class="see-all">
                                                <a href="{{route('allcommentAqar',$aquar->id)}}" class="h2"> @lang('site.all') </a>
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
                                                                <img alt="review image"
                                                                     src="{{asset('images/employee/'.$comment->user->image ?? '')}}"/>
                                                            @else

                                                                <img alt="review image"
                                                                     src="{{FRONTASSETS}}/images/review-image.png"/>

                                                            @endif
                                                        </div>
                                                        <div class="w-100 padding-right">
                                                            <h2 class="reviews-title d-flex text-second">
                                                                {{$comment->user->firstname ?? ''}}
                                                                <div>
                                                                    @if(!empty($comment->user->country))

                                                                        <img
                                                                            src="{{asset('images/countries/'.$comment->user->country->flag_image)}}"
                                                                            alt="flag-icon" >

                                                                    @else
                                                                        <img
                                                                            src="{{FRONTASSETS}}/images/car-icons/turkey.png"
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
                                                            <p class="details-sm-txt">
                                                                {{$allaquars->$aqarSection->icon ?? ''}}
                                                            </p> 
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                <div class="col-lg-3 my-5">
                                                    <div class="rating-see-btn py-4 d-flex justify-content-center align-items-center" >
                                                        <a href="#"  data-bs-toggle="modal" data-bs-target="#AllRatingsModal">  @lang('site.Read all reviews') </a>
                                                    </div>
                                                </div>
                                            </div>


                                    </div>
                                </div>
                            </li>
                            <li id="tab-3">
                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="details-head pt-4">@lang('site.locations')</h3>
                                        <div class="d-flex pt-2">
                                            <div class="location-ic">
                                                <i class="far fa-map-marker-alt"></i>
                                            </div>

                                            <p class="details-sm-txt">

                                                {!! html_entity_decode($aquar->description) !!}
                                            </p>
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
                                            class="booking-now-btn py-4 d-flex justify-content-center align-items-center">
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
                                                <div class="badge-condition round-border d-flex justify-content-center align-items-center">
                                                    {{$aquar->personnumber ?? 0}}
                                                </div>
                                            </h2>
                                            <p class="details-sm-txt padding-right mb-0">
                                                @lang('site.allownumber')
                                                {{$aquar->unitnumber ?? 0}}
                                            </p>
                                        </div>
                                        <div class="condition-content">
                                            <h2 class="condition-title"> @lang('site.Arrival dates')</h2>
                                            <p class="details-sm-txt padding-right mb-0">
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
                                            <p class="details-sm-txt padding-right mb-0">


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
                                    <i class="fal fa-times"></i>

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


                                                <ul class="register_errorsSaqar mb-0"></ul>


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

                                                            <img
                                                                src="{{asset('images/reviewElements/'.$value->reviewElement->icon)}}"
                                                                width="50" height="50"
                                                                onerror="this.src='{{FRONTASSETS}}/images/side-image-2.png'"
                                                                alt="car"/>
                                                            </span>
                                                                <span
                                                                    class="text-gray-2 h2 mb-0 badge-txt">{{$value->reviewElement->name ?? ''}} </span>
                                                            </div>
                                                            <!-- Output HTML -->
                                                            <div class="d-flex align-items-center">
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
                                                                    <label for="star111{{$key}}" title="text">1
                                                                        star</label>
                                                                </div>
                                                                <div
                                                                    class="department-badge bg-main text-white badge-modal">
                                                                    <div class="pt-1 live-rating">0.0</div>
                                                                    <div>
                                                                        <i class="fas fa-star"></i>
                                                                    </div>
                                                                </div>
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
                                                         <span class="star-review">
                                                            <i class="fas fa-star"></i>
                                                         </span>
                                                            <span class="text-second"> ({{ round($aquar->aqarReview->avg('rate')) ?? 0}})</span>
                                                        </div>
                                                        <div
                                                            class="text-second text-center">{{ round($aquar->aqarReview->count()) ?? 0}} @lang('site.reviews')</div>
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
                            @foreach($aquar->aqarReview as $review)
                                <div class="col-lg-6 pb-4">
                                    @if(!empty($review->reviewElement))
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="text-gray-2 pb-1">{{$review->reviewElement->name ?? ''}}</div>
                                            <div
                                                class="">{{round($review->RateTotal($review->reviewElement->id) / $review->CountUser($review->reviewElement->id)) ?? 0}}</div>
                                        </div>
                                        <div class="loading-range">
                                            <div class="base-range">
                                                <div class="upper bg-orange"></div>
                                            </div>
                                        </div>
                                    @endif
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
                                @foreach($aquar->aqarCommentsAll as $comment)

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
                                                                    src="{{asset('images/countries/'.$comment->user->country->flag_image)}}"
                                                                    width="25px" height="25px"
                                                                    onerror="this.src={{FRONTASSETS}}/images/car-icons/turkey.png"
                                                                    alt="flag-icon">

                                                            @else
                                                                <img


                                                                    src="{{FRONTASSETS}}/images/car-icons/turkey.png"
                                                                    width="25px" height="25px"
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

                    $('#YourRateModal').hide();
                    window.location.reload();

                    // Refresh the page by setting the URL to itself
                    // location.href = location.href;
                    // location.reload(true);
                    {{--window.location.href = '{{route('Home')}}';--}}

                    // Refresh the page after a delay of 3 seconds
                    // setTimeout(function(){
                    //     location.reload();
                    // }, 500); // 3000 milliseconds = 3 seconds

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



