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
                    <div class="col-12 pt-4 mb-5">
                        @foreach($place->placeCommentsAll as $comment)
                            <div class="condition-content">
                                <div class="d-flex justify-content-between reviews-contentt">
                                    <div class="d-sm-flex w-100">
                                        <div class="reviews-image">

                                            @if(!empty($comment->user->image))
                                            <img
                                                src="{{asset('images/employee/'.$comment->user->image)}}"
                                                alt=""

                                                onerror="this.src={{FRONTASSETS}}/images/review-image.png"
                                            >

                                            @else



                                                <img
                                                    src="{{FRONTASSETS}}/images/review-image.png"
                                                    alt=""

                                                    onerror="this.src={{FRONTASSETS}}/images/review-image.png"
                                                >

                                            @endif
                                        </div>
                                        <div class="w-100 padding-right">
                                            <h2 class="reviews-title d-flex text-second">
                                                {{$comment->user->firstname ?? ''}}   {{$comment->user->lastname ?? ''}}
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

                                                {!! html_entity_decode($comment->description) !!}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="department-badge bg-main text-white">
                                        @if(!empty(auth()->user()))
                                        <div class="pt-1">{{ round(\App\Models\PlaceReview::where('user_id', '=', $user->id)->where('place_id', '=',$place->id)->avg('rate')) ?? 0 }}</div>


                                        @else
                                            {{ round(\App\Models\PlaceReview::where('user_id', '=',$comment->user->id)->where('place_id', '=',$place->id)->avg('rate')) ?? 0 }}
                                        @endif
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
        </section>
    </main>

@endsection
