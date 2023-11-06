
    @if(!empty($cars))
        @foreach($cars as $car )

            <div
                class="card card-department round-border mb-3 p-md-3 p-2"
            >


                <div class="row g-0">
                    <div class="col-md-4 position-relative">
                        <div
                            class="owl-carousel owl-theme department-img-carousel"
                            dir="ltr" id="myUL"
                        >
                            @if(!empty($car->images))
                            @foreach(json_decode($car->images)  as $img)
                                <div class="city-item">
                                    <button class="add-to-wishlist">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             width="24"
                                             height="24" viewBox="0 0 24 24"
                                             fill="none">
                                            <path
                                                d="M22.1494 2.12177C21.563 1.44911 20.8667 0.915505 20.1003 0.551444C19.334 0.187383 18.5126 0 17.6831 0C16.8535 0 16.0321 0.187383 15.2658 0.551444C14.4994 0.915505 13.8032 1.44911 13.2167 2.12177L11.9997 3.51714L10.7826 2.12177C9.59811 0.763676 7.99153 0.00070395 6.31633 0.000703964C4.64114 0.000703978 3.03455 0.763676 1.85001 2.12177C0.665469 3.47987 1.24812e-08 5.32185 0 7.24249C-1.24812e-08 9.16313 0.665469 11.0051 1.85001 12.3632L3.06705 13.7586L11.9997 24L20.9323 13.7586L22.1494 12.3632C22.7361 11.6909 23.2015 10.8926 23.519 10.0139C23.8366 9.13531 24 8.19356 24 7.24249C24 6.29142 23.8366 5.34967 23.519 4.47104C23.2015 3.59241 22.7361 2.79412 22.1494 2.12177Z"
                                                fill="#FF8600"></path>
                                        </svg>
                                    </button>
                                    <img
                                        loading="lazy"
                                        src="{{asset('images/cars/'.$img)}}"
                                        onerror="this.src='{{asset('frontend/assets/images/cars/car-card-1.png')}}"

                                        class="department-img-list of-cover car-image"
                                        alt="image 1"
                                    />
                                </div>
                            @endforeach
                            @else
                                <div class="city-item">
                                    <button class="add-to-wishlist">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             width="24"
                                             height="24" viewBox="0 0 24 24"
                                             fill="none">
                                            <path
                                                d="M22.1494 2.12177C21.563 1.44911 20.8667 0.915505 20.1003 0.551444C19.334 0.187383 18.5126 0 17.6831 0C16.8535 0 16.0321 0.187383 15.2658 0.551444C14.4994 0.915505 13.8032 1.44911 13.2167 2.12177L11.9997 3.51714L10.7826 2.12177C9.59811 0.763676 7.99153 0.00070395 6.31633 0.000703964C4.64114 0.000703978 3.03455 0.763676 1.85001 2.12177C0.665469 3.47987 1.24812e-08 5.32185 0 7.24249C-1.24812e-08 9.16313 0.665469 11.0051 1.85001 12.3632L3.06705 13.7586L11.9997 24L20.9323 13.7586L22.1494 12.3632C22.7361 11.6909 23.2015 10.8926 23.519 10.0139C23.8366 9.13531 24 8.19356 24 7.24249C24 6.29142 23.8366 5.34967 23.519 4.47104C23.2015 3.59241 22.7361 2.79412 22.1494 2.12177Z"
                                                fill="#FF8600"></path>
                                        </svg>
                                    </button>
                                    <img
                                        loading="lazy"
                                        src="{{asset('frontend/assets/images/cars/car-card-1.png')}}"
                                        onerror="this.src='{{asset('frontend/assets/images/cars/car-card-1.png')}}"

                                        class="department-img-list of-cover car-image"
                                        alt="image 1"
                                    />
                                </div>

                            @endif
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div
                            class="card-body card-car-body position-relative"
                        >
                            <div
                                class="row justify-content-between align-items-center mb-3 small"
                            >
                                <div class="col-auto mb-lg-0 mb-3">
                                  <span class="text-main number-ads"
                                  > @lang('site.id number')( {{$car->id ?? ''}})</span
                                  >


                                </div>
                                <div class="col-auto">
                                    <div
                                        class="d-flex justify-content-center align-items-center"
                                    >
                                        <div
                                            class="department-badge bg-main text-white">
                                            <div
                                                class="pt-1">{{$car->CarReview->count() ?? 0}}</div>
                                            <div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="25" height="25"
                                                    viewBox="0 0 25 25" fill="none">
                                                    <path
                                                        d="M12.7529 19.6185L20.1689 24.3301L18.2009 15.4501L24.7529 9.47534L16.1249 8.70481L12.7529 0.330078L9.38093 8.70481L0.75293 9.47534L7.30493 15.4501L5.33693 24.3301L12.7529 19.6185Z"
                                                        fill="white"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="number-ads gray-txt">

                                            {{$car->carComment->count() ?? 0}} @lang('site.comments')
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-title mb-2">

                                <label>{{$car->name ?? ''}}</label>
                            </h2>

                            <div class="gray-txt number-ads pb-2">
                                <span
                                >

                                {!! html_entity_decode(substr($car->description, 0, 125)) !!}

                                </span>
                            </div>
                            <div
                                class="text-gray-2 number-ads d-flex align-items-center"
                            >
                                <div>
                                  <span class="ps-2">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="18"
                                        viewBox="0 0 15 18"
                                        fill="none"
                                    >
                                      <path
                                          fill-rule="evenodd"
                                          clip-rule="evenodd"
                                          d="M7.3 4.28999e-06C6.13434 -0.00154801 5.00739 0.418215 4.12678 1.18195C3.24617 1.94569 2.67124 3.00195 2.50791 4.15611C2.34458 5.31028 2.60387 6.48458 3.23799 7.46267C3.87211 8.44076 4.83834 9.15673 5.95867 9.47867C4.36667 9.672 3.00133 10.2347 1.972 11.2493C0.662666 12.5387 0 14.46 0 16.9667C0 17.1346 0.0667258 17.2957 0.185499 17.4145C0.304272 17.5333 0.465363 17.6 0.633333 17.6C0.801304 17.6 0.962395 17.5333 1.08117 17.4145C1.19994 17.2957 1.26667 17.1346 1.26667 16.9667C1.26667 14.6733 1.87067 13.1267 2.86133 12.1507C3.85333 11.1733 5.336 10.6667 7.3 10.6667C9.264 10.6667 10.7467 11.1733 11.74 12.1507C12.7293 13.128 13.3333 14.6733 13.3333 16.9667C13.3333 17.1346 13.4001 17.2957 13.5188 17.4145C13.6376 17.5333 13.7987 17.6 13.9667 17.6C14.1346 17.6 14.2957 17.5333 14.4145 17.4145C14.5333 17.2957 14.6 17.1346 14.6 16.9667C14.6 14.46 13.9373 12.54 12.6267 11.2493C11.6 10.236 10.2333 9.672 8.64133 9.47867C9.75791 9.15311 10.7198 8.43604 11.3506 7.4589C11.9814 6.48175 12.2389 5.31 12.076 4.15839C11.913 3.00679 11.3405 1.9525 10.4633 1.18875C9.58612 0.425002 8.46307 0.00296898 7.3 4.28999e-06ZM3.73333 4.83334C3.73333 3.8874 4.10911 2.9802 4.77799 2.31132C5.44687 1.64244 6.35406 1.26667 7.3 1.26667C8.24594 1.26667 9.15314 1.64244 9.82201 2.31132C10.4909 2.9802 10.8667 3.8874 10.8667 4.83334C10.8667 5.77928 10.4909 6.68647 9.82201 7.35535C9.15314 8.02423 8.24594 8.40001 7.3 8.40001C6.35406 8.40001 5.44687 8.02423 4.77799 7.35535C4.10911 6.68647 3.73333 5.77928 3.73333 4.83334Z"
                                          fill="#FF8600"
                                      />
                                    </svg>
                                  </span>
                                    <span> @lang('site.car_numbers') {{$car->car_numbers ?? 0}}</span>
                                </div>
                                <div class="padding-35">

                                </div>
                            </div>

                            <div
                                class="d-flex align-items-center justify-content-between mt-3 display-block-mobile"
                            >
                                <div class="department-price">
                                                                    <span
                                                                        class="text-gray-2"> @lang('site.price'):</span>
                                    <span class="fw-bold text-main"
                                    >

                                                                     {{$car->fixed_price ?? ''}}
                                  </span>
                                </div>     <div class="department-price">
                                                                    <span
                                                                        class="text-gray-2"> @lang('site.year'):</span>
                                    <span class="fw-bold text-main"
                                    >

                                                                     {{$car->year ?? 0}}
                                  </span>
                                </div>
                                <div
                                    class="details-btn d-flex align-items-center justify-content-center"
                                >
                                    <a href="{{route('detailcar',$car->id)}}"> @lang('site.details')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif


