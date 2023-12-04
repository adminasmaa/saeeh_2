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
                <span
                ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="9"
                        height="15"
                        viewBox="0 0 9 15"
                        fill="none"
                    >
                    <path
                        d="M6.71329 13.9459L0.745584 7.99587C0.67475 7.92503 0.624459 7.8483 0.594709 7.76566C0.564959 7.68302 0.55032 7.59448 0.550792 7.50003C0.550792 7.40559 0.565431 7.31705 0.594709 7.23441C0.623987 7.15177 0.674278 7.07503 0.745584 7.0042L6.71329 1.03649C6.87857 0.871213 7.08517 0.788574 7.33308 0.788574C7.581 0.788574 7.7935 0.877116 7.97058 1.0542C8.14767 1.23128 8.23621 1.43788 8.23621 1.67399C8.23621 1.9101 8.14767 2.1167 7.97058 2.29378L2.76433 7.50003L7.97058 12.7063C8.13586 12.8716 8.2185 13.0753 8.2185 13.3176C8.2185 13.5598 8.12996 13.7693 7.95288 13.9459C7.77579 14.1229 7.56919 14.2115 7.33308 14.2115C7.09697 14.2115 6.89038 14.1229 6.71329 13.9459Z"
                        fill="#005D9F"
                    />
                  </svg>
                </span>
                        </li>
                        <li class="breadcrumb-item text-main" aria-current="page">
                            @lang('site.favourite')
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- section -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="tabs-details mt-3">
                        <ul class="tabs-nav-all-booking list-unstyled d-flex mb-2">
                            <li>
                                <a
                                    href="#tab-1"
                                    class="tab-link-all d-flex align-items-center justify-content-center"
                                >
                                    <div>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                        >
                                            <g clip-path="url(#clip0_424_29883)">
                                                <path
                                                    d="M14.2002 23.1431H0.835938V6.85742L7.51807 0.857422L14.2002 6.85742V23.1431ZM14.2002 23.1431H22.5529V11.1431H14.2002M7.51807 23.1431V19.7146M5.01227 14.5717H10.0239M5.01227 9.42885H10.0239"
                                                    stroke="#005D9F"
                                                    stroke-width="2.28571"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_424_29883">
                                                    <path
                                                        d="M0 0H13.3875C18.9103 0 23.3875 4.47715 23.3875 10V24H0V0Z"
                                                        fill="white"
                                                    />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <h2 class="mb-0 pe-2">@lang('site.aquars')</h2>
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#tab-2"
                                    class="tab-link-all d-flex align-items-center justify-content-center"
                                >
                                    <div>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="28"
                                            height="30"
                                            viewBox="0 0 28 30"
                                            fill="none"
                                        >
                                            <path
                                                d="M16.3052 20.0001H10.4823M22.1282 20.0001H25.622V16.0626C25.6228 15.7651 25.5247 15.4771 25.3454 15.2502C25.1661 15.0234 24.9173 14.8727 24.6437 14.8251L18.6344 13.7501L15.49 9.25006C15.3815 9.09482 15.2409 8.96881 15.0792 8.88203C14.9175 8.79524 14.7391 8.75006 14.5583 8.75006H6.10337C5.66929 8.74682 5.243 8.87384 4.8726 9.1168C4.5022 9.35975 4.20243 9.70897 4.0071 10.1251L3.07542 12.1626C2.58646 13.2058 2.33123 14.3572 2.33008 15.5251V20.0001H4.65927"
                                                stroke="#005D9F"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path
                                                d="M7.56969 23.75C9.17767 23.75 10.4812 22.3509 10.4812 20.625C10.4812 18.8991 9.17767 17.5 7.56969 17.5C5.96172 17.5 4.6582 18.8991 4.6582 20.625C4.6582 22.3509 5.96172 23.75 7.56969 23.75Z"
                                                stroke="#005D9F"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path
                                                d="M19.2162 23.75C20.8242 23.75 22.1277 22.3509 22.1277 20.625C22.1277 18.8991 20.8242 17.5 19.2162 17.5C17.6082 17.5 16.3047 18.8991 16.3047 20.625C16.3047 22.3509 17.6082 23.75 19.2162 23.75Z"
                                                stroke="#005D9F"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                        </svg>
                                    </div>
                                    <h2 class="mb-0 pe-2">@lang('site.cars')</h2>
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#tab-3"
                                    class="tab-link-all d-flex align-items-center justify-content-center"
                                >
                                    <div>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="28"
                                            height="30"
                                            viewBox="0 0 28 30"
                                            fill="none"
                                        >
                                            <path
                                                d="M16.3052 20.0001H10.4823M22.1282 20.0001H25.622V16.0626C25.6228 15.7651 25.5247 15.4771 25.3454 15.2502C25.1661 15.0234 24.9173 14.8727 24.6437 14.8251L18.6344 13.7501L15.49 9.25006C15.3815 9.09482 15.2409 8.96881 15.0792 8.88203C14.9175 8.79524 14.7391 8.75006 14.5583 8.75006H6.10337C5.66929 8.74682 5.243 8.87384 4.8726 9.1168C4.5022 9.35975 4.20243 9.70897 4.0071 10.1251L3.07542 12.1626C2.58646 13.2058 2.33123 14.3572 2.33008 15.5251V20.0001H4.65927"
                                                stroke="#005D9F"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path
                                                d="M7.56969 23.75C9.17767 23.75 10.4812 22.3509 10.4812 20.625C10.4812 18.8991 9.17767 17.5 7.56969 17.5C5.96172 17.5 4.6582 18.8991 4.6582 20.625C4.6582 22.3509 5.96172 23.75 7.56969 23.75Z"
                                                stroke="#005D9F"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path
                                                d="M19.2162 23.75C20.8242 23.75 22.1277 22.3509 22.1277 20.625C22.1277 18.8991 20.8242 17.5 19.2162 17.5C17.6082 17.5 16.3047 18.8991 16.3047 20.625C16.3047 22.3509 17.6082 23.75 19.2162 23.75Z"
                                                stroke="#005D9F"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                        </svg>
                                    </div>
                                    <h2 class="mb-0 pe-2">@lang('site.places')</h2>
                                </a>
                            </li>

                        </ul>
                        <ul class="tabs-content pt-4 list-unstyled all-booking-tabs">
                            <li id="tab-1">
                                <div class="row">
                                    <div class="col-12">


                                        @foreach($favouriteaqar->favourite_aqars as $aqar)
                                            @if(!empty($aqar))

                                                <div
                                                    class="card card-department round-border mb-4 p-md-3 p-2"
                                                >
                                                    <div class="row g-0">
                                                        <div class="col-lg-3 position-relative">
                                                            <div class="epartment-img-carousel">
                                                                <div>
                                                                    <img
                                                                        loading="lazy"
                                                                        src="{{asset('images/aqars/'.$aqar->main_image)}}"

                                                                        onerror="this.src='{{FRONTASSETS}}/images/department-3.svg'"
                                                                        class="department-img-list of-cover"
                                                                        alt="image 1"
                                                                    />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <div
                                                                class="card-body position-relative px-lg-3 px-0"
                                                            >
                                                                <div
                                                                    class="row justify-content-between align-items-center mb-3 small"
                                                                >
                                                                    <div class="col-auto mb-lg-0 mb-2">
                                  <span class="text-main number-ads"
                                  >@lang('site.id number')({{$aqar->id}})</span
                                  >
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div
                                                                            class="d-flex justify-content-center align-items-center"
                                                                        >
                                                                            <div
                                                                                class="department-badge bg-main text-white">
                                                                                <div
                                                                                    class="pt-1">{{ round($aqar->aqarReview->avg('rate')) ?? 0 }}</div>
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
                                                                                {{$aqar->aqarComment->count() ?? 0}} @lang('site.comments')
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h2 class="card-title mb-2">
                                                                    {{$aqar->name ??''}}
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
                                                                        ></path>
                                                                    </svg>
                                                                    <span>{{$aqar->country->name ??''}}, {{$aqar->city->name ??''}}</span>
                                                                </div>
                                                                <div class="py-3">
                                <span
                                ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                    >
                                    <g clip-path="url(#clip0_421_12633)">
                                      <path
                                          d="M8.243 3.03004C8.50026 3.09449 8.72137 3.2585 8.85771 3.48598C8.99405 3.71346 9.03444 3.98578 8.97 4.24304L4.97 20.243C4.94001 20.3724 4.88457 20.4944 4.80691 20.6021C4.72925 20.7098 4.63092 20.8009 4.51767 20.8702C4.40441 20.9395 4.2785 20.9855 4.14726 21.0056C4.01603 21.0257 3.88211 21.0195 3.75331 20.9873C3.62451 20.9551 3.50341 20.8976 3.39707 20.8181C3.29074 20.7386 3.2013 20.6387 3.13397 20.5243C3.06664 20.4099 3.02277 20.2832 3.00492 20.1516C2.98707 20.0201 2.9956 19.8863 3.03 19.758L7.03 3.75804C7.0618 3.63057 7.11842 3.51061 7.1966 3.40503C7.27478 3.29945 7.373 3.2103 7.48565 3.1427C7.5983 3.07509 7.72317 3.03034 7.85312 3.01101C7.98307 2.99168 8.11555 2.99815 8.243 3.03004ZM16.97 3.75704L20.97 19.757C21.0044 19.8853 21.0129 20.0191 20.9951 20.1506C20.9772 20.2822 20.9334 20.4089 20.866 20.5233C20.7987 20.6377 20.7093 20.7376 20.6029 20.8171C20.4966 20.8966 20.3755 20.9541 20.2467 20.9863C20.1179 21.0185 19.984 21.0247 19.8527 21.0046C19.7215 20.9845 19.5956 20.9385 19.4823 20.8692C19.3691 20.7999 19.2708 20.7088 19.1931 20.6011C19.1154 20.4934 19.06 20.3714 19.03 20.242L15.03 4.24204C14.9956 4.11381 14.9871 3.98001 15.0049 3.84845C15.0228 3.71689 15.0666 3.59021 15.134 3.47578C15.2013 3.36136 15.2907 3.26148 15.3971 3.18199C15.5034 3.10249 15.6245 3.04497 15.7533 3.01277C15.8821 2.98057 16.016 2.97434 16.1473 2.99444C16.2785 3.01454 16.4044 3.06058 16.5177 3.12986C16.6309 3.19914 16.7292 3.29028 16.8069 3.39796C16.8846 3.50564 16.94 3.6277 16.97 3.75704ZM12 17C12.2449 17.0001 12.4813 17.09 12.6644 17.2528C12.8474 17.4155 12.9643 17.6398 12.993 17.883L13 18V20C12.9997 20.2549 12.9021 20.5001 12.7272 20.6854C12.5522 20.8707 12.313 20.9823 12.0586 20.9972C11.8042 21.0121 11.5536 20.9294 11.3582 20.7658C11.1627 20.6022 11.0371 20.3701 11.007 20.117L11 20V18C11 17.7348 11.1054 17.4805 11.2929 17.2929C11.4804 17.1054 11.7348 17 12 17ZM12 10C12.2652 10 12.5196 10.1054 12.7071 10.2929C12.8946 10.4805 13 10.7348 13 11V13C13 13.2653 12.8946 13.5196 12.7071 13.7071C12.5196 13.8947 12.2652 14 12 14C11.7348 14 11.4804 13.8947 11.2929 13.7071C11.1054 13.5196 11 13.2653 11 13V11C11 10.7348 11.1054 10.4805 11.2929 10.2929C11.4804 10.1054 11.7348 10 12 10ZM12 3.00004C12.2449 3.00007 12.4813 3.08999 12.6644 3.25275C12.8474 3.41551 12.9643 3.63979 12.993 3.88304L13 4.00004V6.00004C12.9997 6.25492 12.9021 6.50007 12.7272 6.68541C12.5522 6.87074 12.313 6.98227 12.0586 6.99721C11.8042 7.01215 11.5536 6.92936 11.3582 6.76577C11.1627 6.60218 11.0371 6.37013 11.007 6.11704L11 6.00004V4.00004C11 3.73482 11.1054 3.48047 11.2929 3.29293C11.4804 3.10539 11.7348 3.00004 12 3.00004Z"
                                          fill="#FF8600"
                                      ></path>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_421_12633">
                                        <rect
                                            width="24"
                                            height="24"
                                            fill="white"
                                        ></rect>
                                      </clipPath>
                                    </defs></svg
                                    ></span>
                                                                    <span class="text-main position-department">
                                  {{$aqar->details ??''}}
                                </span>
                                                                </div>

                                                                <div
                                                                    class="d-flex align-items-center justify-content-between mt-2"
                                                                >
                                                                    <div class="department-price">
                                                                        <span
                                                                            class="text-gray-2"> @lang('site.price'):</span>
                                                                        <span class="fw-bold text-main"
                                                                        >     {{$aqar->fixed_price ?? 0}}
                                  </span>
                                                                    </div>
                                                                </div>
                                                                <!--waiting -->
                                                                <div
                                                                    class="d-lg-flex align-items-center justify-content-between mt-3 flex-wrap"
                                                                >
{{--                                                     --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>

                                </div>
{{--                                @unless (count($favouriteaqar->favourite_aqars))--}}
{{--                                    <!--empty booking-->--}}
{{--                                    <div class="col-12 mb-5">--}}
{{--                                        <div class="card-empty d-md-flex align-items-center">--}}
{{--                                            <div class="card-empty-txt">  @lang('site.No Favourite') </div>--}}
{{--                                            <div>--}}
{{--                                                <img--}}
{{--                                                    src="{{FRONTASSETS}}/assets/images/investor/empty-ic.svg"--}}
{{--                                                    alt="empty icon"--}}
{{--                                                />--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @endunless--}}
                            </li>
                            <li id="tab-2">
                                <div class="row">
                                    <div class="col-12">

                                        @foreach($favouritecar->favourite_car as $car)
                                            @if(!empty($car))
                                                <div
                                                    class="card card-department round-border mb-4 p-md-3 p-2"
                                                >
                                                    <div class="row g-0">
                                                        <div class="col-lg-3 position-relative">
                                                            <div class="cars-img">
                                                                <div>
                                                                    <img
                                                                        loading="lazy"
                                                                        src="{{asset('images/cars/'.$car->main_image_ads)}}"
                                                                        onerror="this.src='{{FRONTASSETS}}/images/cars/car-card-1.png'"
                                                                        class="department-img-list of-cover"
                                                                        alt="image 1"
                                                                    />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <div
                                                                class="card-body position-relative px-lg-3 px-0"
                                                            >
                                                                <div
                                                                    class="row justify-content-between align-items-center mb-3 small"
                                                                >
                                                                    <div class="col-auto mb-lg-0 mb-2">
                                <span class="text-main number-ads"
                                > @lang('site.id number')({{$car->id}})</span
                                >
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div
                                                                            class="d-flex justify-content-center align-items-center"
                                                                        >
                                                                            <div
                                                                                class="department-badge bg-main text-white">
                                                                                <div
                                                                                    class="pt-1">{{ round($car->CarReview->avg('rate')) ?? 0}}</div>
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
                                                                    {{$car->name ?? ''}}
                                                                </h2>

                                                                <div class="gray-txt number-ads pb-2">
                              <span
                              >
                                  {!! html_entity_decode(substr($car->description , 0, 125)) !!}
                              </span>
                                                                </div>
                                                                <div
                                                                    class="text-gray-2 number-ads d-flex align-items-center py-2"
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
                                                                        <span>{{$car->car_numbers ?? ''}}</span>
                                                                    </div>
                                                                    <div class="padding-35">
                                <span class="ps-2">
                                  <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="20"
                                      height="20"
                                      viewBox="0 0 20 20"
                                      fill="none"
                                  >
                                    <path
                                        d="M16.25 5H13.3333V4.16667C13.3326 3.72484 13.1568 3.3013 12.8444 2.98889C12.532 2.67647 12.1084 2.50066 11.6666 2.5H8.33329C7.89147 2.50066 7.46793 2.67647 7.15551 2.98889C6.84309 3.3013 6.66729 3.72484 6.66663 4.16667V5H3.74996C3.19756 5.00044 2.66791 5.22008 2.27731 5.61068C1.8867 6.00129 1.66707 6.53093 1.66663 7.08333V15.4167C1.66707 15.9691 1.8867 16.4987 2.27731 16.8893C2.66791 17.2799 3.19756 17.4996 3.74996 17.5H16.25C16.8024 17.4996 17.332 17.2799 17.7226 16.8893C18.1132 16.4987 18.3329 15.9691 18.3333 15.4167V7.08333C18.3329 6.53093 18.1132 6.00129 17.7226 5.61068C17.332 5.22008 16.8024 5.00044 16.25 5ZM7.49996 4.16667C7.49996 3.94565 7.58776 3.73369 7.74404 3.57741C7.90032 3.42113 8.11228 3.33333 8.33329 3.33333H11.6666C11.8876 3.33333 12.0996 3.42113 12.2559 3.57741C12.4122 3.73369 12.5 3.94565 12.5 4.16667V5H7.49996V4.16667ZM17.5 15.4167C17.5 15.7482 17.3683 16.0661 17.1338 16.3005C16.8994 16.535 16.5815 16.6667 16.25 16.6667H3.74996C3.41844 16.6667 3.1005 16.535 2.86608 16.3005C2.63166 16.0661 2.49996 15.7482 2.49996 15.4167V10.0225L7.36829 11.6458C7.41081 11.6597 7.45525 11.6667 7.49996 11.6667H12.5C12.5447 11.6667 12.5891 11.6597 12.6316 11.6458L17.5 10.0225V15.4167ZM17.5 9.17167C17.4555 9.17 17.411 9.17563 17.3683 9.18833L12.4325 10.8333H7.56746L2.63163 9.1875C2.58894 9.1748 2.54446 9.16917 2.49996 9.17083V7.08333C2.49996 6.75181 2.63166 6.43387 2.86608 6.19945C3.1005 5.96503 3.41844 5.83333 3.74996 5.83333H16.25C16.5815 5.83333 16.8994 5.96503 17.1338 6.19945C17.3683 6.43387 17.5 6.75181 17.5 7.08333V9.17167Z"
                                        fill="#FF8600"
                                    />
                                  </svg>
                                </span>
                                                                        <span>{{$car->year ?? ''}}</span>
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="d-flex align-items-center justify-content-between mt-2"
                                                                >
                                                                    <div class="department-price">
                                                                        <span
                                                                            class="text-gray-2"> @lang('site.price'):</span>
                                                                        <span class="fw-bold text-main"
                                                                        >{{$car->fixed_price ?? 0 }}
                                </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>


                                </div>

{{--                                @unless (count($favouritecar->favourite_car))--}}
{{--                                    <!--empty booking-->--}}
{{--                                    <div class="col-12 mb-5">--}}
{{--                                        <div class="card-empty d-md-flex align-items-center">--}}
{{--                                            <div class="card-empty-txt">  @lang('site.No Favourite') </div>--}}
{{--                                            <div>--}}
{{--                                                <img--}}
{{--                                                    src="{{FRONTASSETS}}/assets/images/investor/empty-ic.svg"--}}
{{--                                                    alt="empty icon"--}}
{{--                                                />--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @endunless--}}

                            </li>

                            <li id="tab-3">
                                <div class="row">
                                    <div class="col-12">

                                        @foreach($favouriteplace->favourite_place as $place)
                                            @if(!empty($place))
                                                <div
                                                    class="card card-department round-border mb-4 p-md-3 p-2"
                                                >
                                                    <div class="row g-0">
                                                        <div class="col-lg-3 position-relative">
                                                            <div class="cars-img">
                                                                <div>
                                                                    <img
                                                                        loading="lazy"
                                                                        src="{{asset('images/places/'.$place->display_photo)}}"
                                                                        onerror="this.src='{{FRONTASSETS}}/images/restaurants/resto-card-1.png'"
                                                                        class="department-img-list of-cover"
                                                                        alt="image 1"
                                                                    />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <div
                                                                class="card-body position-relative px-lg-3 px-0"
                                                            >
                                                                <div
                                                                    class="row justify-content-between align-items-center mb-3 small"
                                                                >
                                                                    <div class="col-auto mb-lg-0 mb-2">
                                <span class="text-main number-ads"
                                > @lang('site.id number')({{$place->id}})</span
                                >
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div
                                                                            class="d-flex justify-content-center align-items-center"
                                                                        >
                                                                            <div
                                                                                class="department-badge bg-main text-white">
                                                                                <div
                                                                                    class="pt-1">{{ round($place->PlaceReview->avg('rate')) ?? 0}}</div>
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

                                                                                {{$place->placeComments->count() ?? 0}} @lang('site.comments')
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h2 class="card-title mb-2">
                                                                    {{$place->name ?? ''}}
                                                                </h2>

                                                                <div class="gray-txt number-ads pb-2">
                              <span
                              >
                                 {!! html_entity_decode($place->descrption) !!}
                              </span>
                                                                    <span
                                                                    >{{$place->country->name ?? ''}}</span> <span
                                                                    >{{$place->city->name ?? ''}}</span>
                                                                </div>
{{--                                                                <div--}}
{{--                                                                    class="details-rest-btn d-flex align-items-center justify-content-center"--}}
{{--                                                                >--}}
{{--                                                                    <a href="{{route('detailplace',$place->id)}}"> @lang('site.details')</a>--}}
{{--                                                                </div>--}}

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
                                                                        <span>{{$place->address ?? ''}}</span>
                                                                    </div>

                                                                </div>



                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>


                    @unless (count($favouriteplace->favourite_place))
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

                        </li>

                        </ul>
                    </div>
                </div>

            </div>
        </section>
        <!-- /section -->
    </main>

@endsection
