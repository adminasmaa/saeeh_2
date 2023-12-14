@if(!empty($aquars))
    @foreach($aquars as $aquar)
        <div class="card card-department round-border mb-3 p-lg-3 p-2" >
            <div class="row g-0">
                <div class="col-lg-4 position-relative">
                    <div class="owl-carousel owl-theme department-img-carousel" >
                        @if(!empty($aquar->images))
                            @foreach(explode(',',$aquar->images) as $img)
                                <div>
                                <span class="department-like">
                                     <a class="favouritess"><i class="far fa-heart"></i></a>
                                 </span>
                                    <img
                                        loading="lazy"

                                        src="{{asset('images/aqars/'.$img)}}"

                                        onerror="this.src='{{FRONTASSETS}}/images/department-1.svg'"
                                        class="department-img-list of-cover"
                                        alt="image 1"
                                    />
                                </div>
                            @endforeach

                        @else

                            <div>
                            <span class="department-like">
                                     <a class="favouritess"><i class="far fa-heart"></i></a>
                                 </span>
                                <img
                                    loading="lazy"
                                    src="{{FRONTASSETS}}/images/department-1.svg"
                                    class="department-img-list of-cover"
                                    alt="image 1"
                                />
                            </div>
                            <div>
                            <span class="department-like">
                                     <a class="favouritess"><i class="far fa-heart"></i></a>
                                 </span>
                                <img
                                    loading="lazy"
                                    src="{{FRONTASSETS}}/images/department-2.svg"
                                    class="department-img-list of-cover"
                                    alt="image 1"
                                />
                            </div>
                            <div>
                            <span class="department-like">
                                     <a class="favouritess"><i class="far fa-heart"></i></a>
                                 </span>
                                <img
                                    loading="lazy"
                                    src="{{FRONTASSETS}}/images/department-3.svg"
                                    class="department-img-list of-cover"
                                    alt="image 1"
                                />
                            </div>
                        @endif

                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card-body position-relative">
                        <div
                            class="row justify-content-lg-between align-items-center mb-3 small"
                        >
                            <div class="col-lg-4 mb-lg-0 mb-3">
                                <div class="text-main number-ads">
                                    @lang('site.id number')({{$aquar->id}})
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div
                                    class="d-flex justify-content-lg-end align-items-center"
                                >
                                    <div class="department-badge bg-main text-white">
                                        <span>  {{$aquar->aqarReview->avg('rate')}}</span>
                                            <span>
                                                 <i class="fas fa-star"></i>
                                            </span>
                                    </div>
                                    <div class="number-ads gray-txt">
                                        @lang('site.comments')

                                        {{$aquar->aqarComment->count()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="card-title mb-2">
                            {{$aquar->name ?? ''}}
                        </h2>

                        <div class="gray-txt number-ads">
                           <i class="far fa-map-marker-alt"></i>
                            <span> {{$aquar->country->name ?? ''}} , {{$aquar->city->name ?? ''}}</span>
                            <span> {{$aquar->address?? ''}} </span>
                        </div>
                        <div class="py-3">
                            <defs>
                                <clipPath id="clip0_421_12633">
                                    <rect width="24" height="24" fill="white"/>
                                </clipPath>
                            </defs></svg
                            >
                            <span class="text-main position-department">

                            {!! html_entity_decode(substr($aquar->description, 0, 125)) !!}

                          </span>
                        </div>

                        <div
                            class="d-lg-flex align-items-center justify-content-lg-between mt-2"
                        >
                            <div class="department-price">
                                <span class="text-gray-2">@lang('site.price'):</span>
                                <span class="fw-bold text-main"
                                > {{$aquar->fixed_price ?? ''}}
                            </span>
                            </div>
                            <div
                                class="details-btn d-flex align-items-center justify-content-center mt-lg-0 mt-3"
                            >
                                <a href="{{route('detailaquar',$aquar->id)}}">@lang('site.details')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endif
