
    @if(!empty($cars))
        @foreach($cars as $car )
            <div class="card card-department round-border mb-3 p-md-3 p-2">
                <div class="row g-0">
                    <div class="col-md-4 position-relative">
                        <div class="owl-carousel owl-theme department-img-carousel" id="myUL" >
                            @if(!empty($car->images))
                            @foreach(json_decode($car->images)  as $img)
                                <div class="city-item">
                                <span class="department-like">
                                     <a class="favouritess"><i class="far fa-heart"></i></a>
                                 </span>
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
                                 <span class="department-like">
                                     <a class="favouritess"><i class="far fa-heart"></i></a>
                                 </span>
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
                        <div class="card-body card-car-body position-relative">
                            <div class="row justify-content-between align-items-center mb-3 small">
                                <div class="col-auto mb-lg-0 mb-3">
                                  <span class="text-main number-ads"> @lang('site.id number')( {{$car->id ?? ''}})</span>
                                </div>
                                <div class="col-auto">
                                    <div  class="d-flex justify-content-center align-items-center">
                                        <div
                                            class="department-badge bg-main text-white">
                                            <span>{{$car->CarReview->count() ?? 0}}</span>
                                            <span>
                                            <i class="fas fa-star"></i>
                                            </span>
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
                                <span>
                                {!! html_entity_decode(substr($car->description, 0, 125)) !!}
                                </span>
                            </div>
                            <div class="text-gray-2 number-ads d-flex align-items-center">
                                <div>
                                  <span class="ps-2">
                                  <i class="far fa-car-side"></i>
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
                                    <span class="text-gray-2"> @lang('site.price'):</span>
                                    <span class="fw-bold text-main">
                                    {{$car->fixed_price ?? ''}}
                                  </span>
                                </div>     
                                <div class="department-price">
                                    <span  class="text-gray-2"> @lang('site.year'):</span>
                                    <span class="fw-bold text-main">
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


