@if(!empty($aquars))
    @foreach($aquars as $aquar)
        <div class="card card-department round-border mb-3 p-lg-3 p-2" id="tab-aquar-3">
            <div class="row g-0">
                <div class="col-lg-4 position-relative">
                    <div
                        class="owl-carousel owl-theme department-img-carousel"
                        dir="ltr"
                    >
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
                                        <div
                                            class="pt-1">     {{$aquar->aqarReview->avg('rate')}}</div>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25"
                                                 height="25" viewBox="0 0 25 25" fill="none">
                                                <path
                                                    d="M12.7529 19.6185L20.1689 24.3301L18.2009 15.4501L24.7529 9.47534L16.1249 8.70481L12.7529 0.330078L9.38093 8.70481L0.75293 9.47534L7.30493 15.4501L5.33693 24.3301L12.7529 19.6185Z"
                                                    fill="white"/>
                                            </svg>
                                        </div>
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
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="20"
                                viewBox="0 0 16 20"
                                fill="none"
                            >
                                <path
                                    d="M8.20799 9.99996C8.54986 9.99996 8.84262 9.83663 9.08628 9.50996C9.32994 9.18329 9.45156 8.79107 9.45115 8.33329C9.45115 7.87496 9.32932 7.48246 9.08566 7.15579C8.842 6.82913 8.54944 6.66607 8.20799 6.66663C7.86612 6.66663 7.57335 6.82996 7.3297 7.15663C7.08604 7.48329 6.96441 7.87551 6.96483 8.33329C6.96483 8.79163 7.08666 9.18413 7.33032 9.51079C7.57398 9.83746 7.86653 10.0005 8.20799 9.99996ZM8.20799 16.125C9.47187 14.5694 10.4094 13.1561 11.0206 11.885C11.6319 10.6138 11.9375 9.48551 11.9375 8.49996C11.9375 6.98607 11.5774 5.74663 10.8572 4.78163C10.137 3.81663 9.2539 3.33385 8.20799 3.33329C7.16166 3.33329 6.2784 3.81607 5.55819 4.78163C4.83799 5.74718 4.4781 6.98663 4.47851 8.49996C4.47851 9.48607 4.78412 10.6147 5.39534 11.8858C6.00656 13.1569 6.94411 14.57 8.20799 16.125ZM8.20799 18.3333C6.54008 16.4305 5.29444 14.6633 4.47105 13.0316C3.64767 11.4 3.23577 9.8894 3.23535 8.49996C3.23535 6.41663 3.73531 4.7569 4.73522 3.52079C5.73514 2.28468 6.89272 1.66663 8.20799 1.66663C9.52366 1.66663 10.6815 2.28468 11.6814 3.52079C12.6813 4.7569 13.181 6.41663 13.1806 8.49996C13.1806 9.88885 12.7687 11.3994 11.9449 13.0316C11.1211 14.6638 9.87548 16.4311 8.20799 18.3333Z"
                                    fill="#9C9C9C"
                                />
                            </svg>
                            <span> {{$aquar->country->name ?? ''}} , {{$aquar->city->name ?? ''}}</span>
                        </div>
                        <div class="py-3">
                          <span
                          >
                              <defs>
                                <clipPath id="clip0_421_12633">
                                  <rect width="24" height="24" fill="white"/>
                                </clipPath>
                              </defs></svg
                              ></span>
                            <span class="text-main position-department">
                            {!! html_entity_decode($aquar->description) !!}
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
