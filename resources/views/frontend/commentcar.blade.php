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
                        <li>
                <span><svg xmlns="http://www.w3.org/2000/svg" width="9" height="15" viewBox="0 0 9 15" fill="none">
                    <path
                        d="M6.71329 13.9459L0.745584 7.99587C0.67475 7.92503 0.624459 7.8483 0.594709 7.76566C0.564959 7.68302 0.55032 7.59448 0.550792 7.50003C0.550792 7.40559 0.565431 7.31705 0.594709 7.23441C0.623987 7.15177 0.674278 7.07503 0.745584 7.0042L6.71329 1.03649C6.87857 0.871213 7.08517 0.788574 7.33308 0.788574C7.581 0.788574 7.7935 0.877116 7.97058 1.0542C8.14767 1.23128 8.23621 1.43788 8.23621 1.67399C8.23621 1.9101 8.14767 2.1167 7.97058 2.29378L2.76433 7.50003L7.97058 12.7063C8.13586 12.8716 8.2185 13.0753 8.2185 13.3176C8.2185 13.5598 8.12996 13.7693 7.95288 13.9459C7.77579 14.1229 7.56919 14.2115 7.33308 14.2115C7.09697 14.2115 6.89038 14.1229 6.71329 13.9459Z"
                        fill="#005D9F"></path>
                  </svg>
                </span>
                        </li>
                        <li class="breadcrumb-item">

                            <span
                            >@lang('site.comments')</span>
                        </li>

                    </ol>
                </nav>
            </div>
        </section>
        <section class="py-4">
            <div class="container">


                <div class="row mt-5 pb-2">
                    <div class="col-12">
                        <div
                            class="d-flex justify-content-between align-items-center border-bottom-header">
                            <div>
                                <h2>@lang('site.Customer reviews')

                                </h2>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 pt-4 mb-lg-5">

                        @foreach($car->carComment as $comment)

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

            </div>
        </section>
    </main>

@endsection
