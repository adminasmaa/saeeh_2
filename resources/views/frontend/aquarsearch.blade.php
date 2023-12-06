@if(!empty($aquars))
    @foreach($aquars as $aquar)
        <div class="card card-department round-border mb-3 p-lg-3 p-2" >
            <div class="row g-0">
                <div class="col-lg-4 position-relative">
                    <div class="owl-carousel owl-theme department-img-carousel" >
                        @if(!empty($aquar->images))
                            @foreach(explode(',',$aquar->images) as $img)
                                <div>
                                    <button type="button" class="department-like">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="41"
                                            height="40"
                                            viewBox="0 0 41 40"
                                            fill="none"
                                        >
                                            <path
                                                d="M37.8609 3.53629C36.8836 2.41518 35.7231 1.52584 34.4459 0.919073C33.1686 0.312305 31.7996 0 30.4171 0C29.0345 0 27.6655 0.312305 26.3883 0.919073C25.111 1.52584 23.9506 2.41518 22.9732 3.53629L20.9448 5.86189L18.9164 3.53629C16.9422 1.27279 14.2645 0.00117325 11.4725 0.00117327C8.68054 0.0011733 6.0029 1.27279 4.02866 3.53629C2.05443 5.79979 0.945313 8.86975 0.945313 12.0708C0.945312 15.2719 2.05443 18.3418 4.02866 20.6053L6.05707 22.9309L20.9448 40L35.8325 22.9309L37.8609 20.6053C38.8388 19.4848 39.6145 18.1543 40.1437 16.6899C40.6729 15.2255 40.9453 13.6559 40.9453 12.0708C40.9453 10.4857 40.6729 8.91612 40.1437 7.45174C39.6145 5.98736 38.8388 4.65687 37.8609 3.53629Z"
                                                fill="#FF8600"
                                            />
                                        </svg>
                                    </button>
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
                                <button type="button" class="department-like">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="41"
                                        height="40"
                                        viewBox="0 0 41 40"
                                        fill="none"
                                    >
                                        <path
                                            d="M37.8609 3.53629C36.8836 2.41518 35.7231 1.52584 34.4459 0.919073C33.1686 0.312305 31.7996 0 30.4171 0C29.0345 0 27.6655 0.312305 26.3883 0.919073C25.111 1.52584 23.9506 2.41518 22.9732 3.53629L20.9448 5.86189L18.9164 3.53629C16.9422 1.27279 14.2645 0.00117325 11.4725 0.00117327C8.68054 0.0011733 6.0029 1.27279 4.02866 3.53629C2.05443 5.79979 0.945313 8.86975 0.945313 12.0708C0.945312 15.2719 2.05443 18.3418 4.02866 20.6053L6.05707 22.9309L20.9448 40L35.8325 22.9309L37.8609 20.6053C38.8388 19.4848 39.6145 18.1543 40.1437 16.6899C40.6729 15.2255 40.9453 13.6559 40.9453 12.0708C40.9453 10.4857 40.6729 8.91612 40.1437 7.45174C39.6145 5.98736 38.8388 4.65687 37.8609 3.53629Z"
                                            fill="#FF8600"
                                        />
                                    </svg>
                                </button>
                                <img
                                    loading="lazy"
                                    src="{{FRONTASSETS}}/images/department-1.svg"
                                    class="department-img-list of-cover"
                                    alt="image 1"
                                />
                            </div>
                            <div>
                                <button type="button" class="department-like">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="41"
                                        height="40"
                                        viewBox="0 0 41 40"
                                        fill="none"
                                    >
                                        <path
                                            d="M37.8609 3.53629C36.8836 2.41518 35.7231 1.52584 34.4459 0.919073C33.1686 0.312305 31.7996 0 30.4171 0C29.0345 0 27.6655 0.312305 26.3883 0.919073C25.111 1.52584 23.9506 2.41518 22.9732 3.53629L20.9448 5.86189L18.9164 3.53629C16.9422 1.27279 14.2645 0.00117325 11.4725 0.00117327C8.68054 0.0011733 6.0029 1.27279 4.02866 3.53629C2.05443 5.79979 0.945313 8.86975 0.945313 12.0708C0.945312 15.2719 2.05443 18.3418 4.02866 20.6053L6.05707 22.9309L20.9448 40L35.8325 22.9309L37.8609 20.6053C38.8388 19.4848 39.6145 18.1543 40.1437 16.6899C40.6729 15.2255 40.9453 13.6559 40.9453 12.0708C40.9453 10.4857 40.6729 8.91612 40.1437 7.45174C39.6145 5.98736 38.8388 4.65687 37.8609 3.53629Z"
                                            fill="#FF8600"
                                        />
                                    </svg>
                                </button>
                                <img
                                    loading="lazy"
                                    src="{{FRONTASSETS}}/images/department-2.svg"
                                    class="department-img-list of-cover"
                                    alt="image 1"
                                />
                            </div>
                            <div>
                                <button type="button" class="department-like">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="41"
                                        height="40"
                                        viewBox="0 0 41 40"
                                        fill="none"
                                    >
                                        <path
                                            d="M37.8609 3.53629C36.8836 2.41518 35.7231 1.52584 34.4459 0.919073C33.1686 0.312305 31.7996 0 30.4171 0C29.0345 0 27.6655 0.312305 26.3883 0.919073C25.111 1.52584 23.9506 2.41518 22.9732 3.53629L20.9448 5.86189L18.9164 3.53629C16.9422 1.27279 14.2645 0.00117325 11.4725 0.00117327C8.68054 0.0011733 6.0029 1.27279 4.02866 3.53629C2.05443 5.79979 0.945313 8.86975 0.945313 12.0708C0.945312 15.2719 2.05443 18.3418 4.02866 20.6053L6.05707 22.9309L20.9448 40L35.8325 22.9309L37.8609 20.6053C38.8388 19.4848 39.6145 18.1543 40.1437 16.6899C40.6729 15.2255 40.9453 13.6559 40.9453 12.0708C40.9453 10.4857 40.6729 8.91612 40.1437 7.45174C39.6145 5.98736 38.8388 4.65687 37.8609 3.53629Z"
                                            fill="#FF8600"
                                        />
                                    </svg>
                                </button>
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
