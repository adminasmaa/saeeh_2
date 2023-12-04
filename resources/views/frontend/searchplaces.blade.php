@foreach($places as $place)
    @if(!empty($places))
        <div class="card card-department round-border mb-3 p-lg-3 p-2">
            <div class="row g-0">
                <div class="col-lg-4 position-relative">
                    <div
                        class="owl-carousel owl-theme department-img-carousel"
                    >
                        {{--                                            <div class="resro-image">--}}
                        {{--                                                    <span class="department-like">--}}
                        {{--                                                           <a class="" ><i class="far fa-heart"></i></a>--}}
                        {{--                                                   </span>--}}
                        {{--                                                @if(auth()->user())--}}
                        {{--                                                    <span--}}
                        {{--                                                        class="department-like">--}}

                        {{--<a class="favouritess" id="favouritess{{$place->id}}" data-id="{{$place->id}}"><i--}}
                        {{--        class=" @if(count(\App\Models\UserPlace::where('place_id', '=',$place->id)->where('user_id', '=', auth()->user()->id)->get()) > 0) fas @else far @endif  fa-heart "></i></a>--}}



                        {{--                                                                </span>--}}
                        {{--                                                @else--}}


                        {{--                                                @endif--}}

                        {{--                                                        --}}{{--                                                        <button class="add-to-wishlist">--}}
                        {{--                                                        --}}{{--                                                            <svg--}}
                        {{--                                                        --}}{{--                                                                xmlns="http://www.w3.org/2000/svg"--}}
                        {{--                                                        --}}{{--                                                                width="24"--}}
                        {{--                                                        --}}{{--                                                                height="24"--}}
                        {{--                                                        --}}{{--                                                                viewBox="0 0 24 24"--}}
                        {{--                                                        --}}{{--                                                                fill="none"--}}
                        {{--                                                        --}}{{--                                                            >--}}
                        {{--                                                        --}}{{--                                                                <path--}}
                        {{--                                                        --}}{{--                                                                    d="M22.1494 2.12177C21.563 1.44911 20.8667 0.915505 20.1003 0.551444C19.334 0.187383 18.5126 0 17.6831 0C16.8535 0 16.0321 0.187383 15.2658 0.551444C14.4994 0.915505 13.8032 1.44911 13.2167 2.12177L11.9997 3.51714L10.7826 2.12177C9.59811 0.763676 7.99153 0.00070395 6.31633 0.000703964C4.64114 0.000703978 3.03455 0.763676 1.85001 2.12177C0.665469 3.47987 1.24812e-08 5.32185 0 7.24249C-1.24812e-08 9.16313 0.665469 11.0051 1.85001 12.3632L3.06705 13.7586L11.9997 24L20.9323 13.7586L22.1494 12.3632C22.7361 11.6909 23.2015 10.8926 23.519 10.0139C23.8366 9.13531 24 8.19356 24 7.24249C24 6.29142 23.8366 5.34967 23.519 4.47104C23.2015 3.59241 22.7361 2.79412 22.1494 2.12177Z"--}}
                        {{--                                                        --}}{{--                                                                    fill="#FF8600"--}}
                        {{--                                                        --}}{{--                                                                />--}}
                        {{--                                                        --}}{{--                                                            </svg>--}}
                        {{--                                                        --}}{{--                                                        </button>--}}
                        {{--                                                <img--}}
                        {{--                                                    loading="lazy"--}}


                        {{--                                                    src="{{asset('images/places/'.$place->display_photo)}}"--}}
                        {{--                                                    onerror="this.src='{{FRONTASSETS}}/images/restaurants/resto-card-1.png'"--}}
                        {{--                                                    class="of-cover"--}}
                        {{--                                                    alt="image 1"--}}
                        {{--                                                />--}}
                        {{--                                            </div>--}}


                        <div class="resro-image">
                            @if(!empty(auth()->user()))
                                <span
                                    class="department-like">
                                                            <a class="favouritess" id="favouritess{{$place->id}}"
                                                               data-id="{{$place->id}}"><i
                                                                    class=" @if(count(\App\Models\UserPlace::where('place_id', '=',$place->id)->where('user_id', '=', auth()->user()->id)->get()) > 0) fas @else far @endif  fa-heart "></i></a>
                                                                </span>

                            @else
                                <span
                                    class="department-like">
                                                    <a class="favouritess" id="favouritess{{$place->id}}"
                                                       data-id="{{$place->id}}"><i
                                                            class="far fa-heart "></i></a>
                                                         </span>

                            @endif

                            @if(!empty($place->images))
                                @foreach(explode(',',$place->images) as $image)
                                    <img
                                        loading="lazy"


                                        src="{{asset('images/places/'.$image)}}"
                                        onerror="this.src='{{FRONTASSETS}}/images/restaurants/resto-card-1.png'"
                                        class="of-cover"
                                        alt="image 1"
                                    />
                                @endforeach

                            @else

                                <img
                                    loading="lazy"


                                    src="{{FRONTASSETS}}/images/restaurants/resto-card-1.png"

                                    class="of-cover"
                                    alt="image 1"
                                />

                            @endif
                        </div>


                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card-body position-relative">
                        <div
                            class="d-md-flex justify-content-md-between align-items-end mb-3 "
                        >
                            <h2 class="card-title mb-0">{{$place->name ?? ''}} </h2>
                            {{--                                                {{$place->id}}--}}
                            {{--                                                {{count(\App\Models\UserPlace::where('palace_id', '=',$place->id)->where('user_id', '=', auth()->user()->id)->get())}}--}}
                            <div
                                class="d-flex justify-content-md-center align-items-center"
                            >
                                <div class="department-badge bg-main text-white">
                                    <div class="pt-1">{{$place->PlaceReview->count() ?? 0}}</div>
                                    <div>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <div
                                    class="number-ads gray-txt">{{$place->placeComments->count() ?? 0}} @lang('site.comments')</div>
                            </div>
                        </div>
                        <div class="d-md-flex justify-content-md-between ">
                            <div class="gray-txt number-ads">
                                <i class="fal fa-map-marker-alt"></i>
                                <span
                                >

                                                        {!! html_entity_decode($place->descrption) !!}
                                                    </span>

                                <span
                                >{{$place->country->name ?? ''}}</span> <span
                                >{{$place->city->name ?? ''}}</span>
                            </div>
                            <div
                                class="details-rest-btn d-flex align-items-center justify-content-center"
                            >
                                <a href="{{route('detailplace',$place->id)}}"> @lang('site.details')</a>
                            </div>
                        </div>

                        <div class="pb-3">
                                                <span>
                                                <i class="far fa-water text-main"></i>
                                                </span>
                            <span class="text-main text-restaurant">
                                                <span
                                                >{{$place->address ?? ''}}</span>
                                                    </span>
                        </div>
                        <div
                            class="col-lg-4 d-flex align-items-center mt-3"
                        >
                            <div
                                class="w-100 details-btn d-flex align-items-center justify-content-center"
                            >
                                <a href="{{route('showmap',$place->id)}}">
                                                    <span>
                                                    <i class="far fa-walking"></i>
                                                    </span>


                                    @lang('site.Go to the restaurant')
                                </a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

{{--    @else--}}


{{--            <!--empty booking-->--}}
{{--            <div class="col-12 mb-5">--}}
{{--                <div class="card-empty d-md-flex align-items-center">--}}
{{--                    <div class="card-empty-txt">  @lang('site.No Favourite') </div>--}}
{{--                    <div>--}}
{{--                        <img--}}
{{--                            src="{{FRONTASSETS}}/investor/empty-ic.svg"--}}
{{--                            alt="empty icon"--}}
{{--                        />--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}


    @endif
@endforeach
