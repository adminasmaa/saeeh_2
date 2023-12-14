

@foreach($bookings->unique('car_id') as $book)
    @if(!empty($book->car))
        <div class="col-12">
        <div
            class="card card-department round-border mb-4 p-md-3 p-2"
        >
            <div class="row g-0">
                <div class="col-lg-3 position-relative">
                    <div class="cars-img">
                        <div>
                            <img
                                src="{{asset('images/cars/'.$book->car->main_image_ads)}}"
                                onerror="this.src='{{FRONTASSETS}}/images/cars/car-card-1.png'"
                                class="department-img-list of-cover"
                                alt="image 1"
                                loading="lazy"
                            />
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="card-body position-relative px-lg-3 px-0">
                        <div class="row justify-content-between align-items-center mb-3 small">
                            <div class="col-auto mb-lg-0 mb-2">
                                  <span class="text-main number-ads"
                                  > @lang('site.id number')({{$book->car->id}})</span
                                  >
                            </div>
                            <div class="col-auto">
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="department-badge bg-main text-white">
                                        <span class="pt-1">5</span>
                                        <span>
                                            <i class="fas fa-star"></i>
                                        </span>
                                    </div>
                                    <div class="number-ads gray-txt">
                                        {{$book->car->carComment->count() ?? 0}} @lang('site.comments')
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="card-title mb-2">
                            {{$book->car->name ?? ''}}
                        </h2>
                        <div class="gray-txt number-ads pb-2">
                                <span> 
                                {!! html_entity_decode(substr($book->car->description, 0, 125)) !!}
                                </span>
                        </div>
                        <div
                            class="text-gray-2 number-ads d-flex align-items-center py-2"
                        >
                            <div>
                                  <span class="ps-2">
                                  <i class="far fa-user text-main"></i>
                                  </span>
                                <span>{{$book->car->car_numbers}} @lang('site.car_numbers')</span>
                            </div>
                            <div class="padding-35">
                                  <span class="ps-2">
                                  <i class="far fa-briefcase text-main"></i>
                                  </span>
                                <span> @lang('site.year')</span>
                            </div>
                        </div>

                        <div
                            class="d-flex align-items-center justify-content-between mt-2"
                        >
                            <div class="department-price">
                                <span class="text-gray-2"> @lang('site.price'):</span>
                                <span class="fw-bold text-main"
                                >{{$book->car->fixed_price ?? 0 }}
                                  </span>
                            </div>
                        </div>
                        <!--waiting -->
                        <div
                            class="d-lg-flex align-items-center justify-content-between mt-3 flex-wrap"
                        >
                            <div class="d-lg-flex align-items-center">
                                <div
                                    class="round-border bg-light-orange ms-2"
                                >
                                    <div
                                        class="d-flex justify-content-between py-1 px-md-3 px-2"
                                    >
                                        <div class="d-flex align-items-center">
                                        <span>
                                        <i class="far fa-wallet text-main"></i>
                                        </span>
                                            <span class="text-gray-2 pe-1 ps-2"
                                            > @lang('site.Reservation deposit'):
                                        </span>
                                        </div>
                                        <div
                                            class="text-gray-2 d-flex align-items-center justify-content-center fw-bold span-14"
                                        >
                                            {{$book->car->fixed_price ?? 0 }}
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="round-border bg-light-yellow my-lg-0 my-3"
                                >
                                    <div
                                        class="d-flex justify-content-between align-items-center py-1 px-md-3 px-2"
                                    >
                                        <div class="d-flex align-items-center">
                                        <span class="text-gray-2">


                                            @lang('site.booking_status'):
                                        </span>
                                            <span class="px-1">
                                            <i class="far fa-alarm-clock text-main"></i>
                                        </span>
                                        </div>
                                        <div class="text-gray-2 fw-bold span-14">
                                            @lang('site.Awaiting approval by the owner')
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="details-btn d-flex align-items-center justify-content-center margin-top-12"
                            >
                                <a href="{{route('detailbooking',$book->id)}}">@lang('site.Reservation information')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>


    @else

        @unless (count($bookings))
            <!--empty booking-->
            <div class="col-12 mb-5">
                <div class="card-empty d-md-flex align-items-center">
                    <div class="card-empty-txt">  @lang('site.No Favourite') </div>
                    <div>
                        <img
                            src="{{FRONTASSETS}}/investor/empty-ic.svg"
                            alt="empty icon"
                        />
                    </div>
                </div>
            </div>
        @endunless

    @endif
@endforeach

