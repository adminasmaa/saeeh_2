<div class="col-12">
    @if(!empty($bookings))

        @foreach($bookings as $book)
            @if(!empty($book->aqar))
                <div
                    class="card card-department round-border mb-4  p-md-3 p-2"
                >
                    <div class="row g-0">
                        <div class="col-lg-3 position-relative">
                            <div class="epartment-img-carousel">
                                <div>
                                    @if(!empty($book->aqar->main_image))
                                        <img
                                            loading="lazy"
                                            src="{{asset('images/aqars/'.$book->aqar->main_image ?? '')}}"
                                            onerror="this.src='{{FRONTASSETS}}/images/department-3.svg'"
                                            class="department-img-list of-cover"
                                            alt="image aqar"
                                        />
                                    @else
                                        <img
                                            loading="lazy"
                                            src="{{FRONTASSETS}}/images/department-3.svg"
                                            class="department-img-list of-cover"
                                            alt="image default"
                                        />
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div
                                class="card-body position-relative px-lg-3 px-0">
                                <div class="row justify-content-between align-items-center mb-3 small" >
                                    <div class="col-auto mb-lg-0 mb-2">
                                <span class="text-main number-ads"
                                > @lang('site.id number')({{$book->aqar->id ?? 0}})</span
                                >
                                    </div>
                                    <div class="col-auto">
                                        <div
                                            class="d-flex justify-content-center align-items-center"
                                        >
                                            <div
                                                class="department-badge bg-main text-white">
                                                <div class="pt-1">5</div>
                                                <div>
                                                 <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="number-ads gray-txt">
                                                {{$book->aqar->aqarComment->count() ?? 0}} @lang('site.comments')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="card-title mb-2">
                                    {{$book->aqar->name ?? ''}}
                                </h2>

                                <div class="gray-txt number-ads">
                                    <i class="far fa-map-marker-alt"></i>
                                    <span>{{$book->aqar->country->name ?? ''}},{{$book->aqar->city->name ?? ''}} </span>
                                </div>
                                <div class="py-3">
                              <span
                              >  <i class="far fa-road text-main"></i></span>
                                    <span class="text-main position-department">
                                   {!! html_entity_decode(substr($book->aqar->description, 0, 125)) !!}
                                    </span>
                                </div>

                                <div
                                    class="d-flex align-items-center justify-content-between mt-2"
                                >
                                    <div class="department-price">
                                                                        <span
                                                                            class="text-gray-2"> @lang('site.price'):</span>
                                        <span class="fw-bold text-main"
                                        >    {{$book->aqar->fixed_price ?? 0 }}
                                </span>
                                    </div>
                                </div>
                                <!--waiting -->
                                <div  class="d-lg-flex align-items-center justify-content-between mt-3 flex-wrap">
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
                                                    {{$book->aqar->fixed_price ?? 0}}
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
                                         @lang('site.booking_status') :
                                      </span>
                                                    <span class="px-1">
                                                    <i class="far fa-alarm-clock text-main"></i>
                                      </span>
                                             </div>
                                                <div
                                                    class="text-gray-2 fw-bold span-14">
                                                    @lang('site.Awaiting approval by the owner')
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="details-btn d-flex align-items-center justify-content-center margin-top-12"
                                    >
                                        <a href="{{route('detailbookingaquars',$book->id)}}"> @lang('site.Reservation information') </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endif

        @endforeach

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
</div>


