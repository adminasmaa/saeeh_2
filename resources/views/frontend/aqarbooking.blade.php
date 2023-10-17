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
                            <a href="{{route('Home')}}">@lang('site.home')</a>
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

                        <li class="breadcrumb-item text-gray-4" aria-current="page">
                            @lang('site.book')
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- section -->
        <section>
            <div class="container">
                <div class="row">
                    <div
                        class="col-12 d-md-flex align-items-center justify-content-between"
                    >
                        <div>
                            <h2 class="pt-3">{{$aqar->details ?? ''}}</h2>
                            <div class="d-flex align-items-center mt-3">
                                <div class="department-badge bg-main text-white">
                                    <div
                                        class="pt-1">{{ isset($aqar->aqarReview) ? $aqar->aqarReview->avg('rate') : 0 }}</div>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                             viewBox="0 0 25 25" fill="none">
                                            <path
                                                d="M12.7529 19.6185L20.1689 24.3301L18.2009 15.4501L24.7529 9.47534L16.1249 8.70481L12.7529 0.330078L9.38093 8.70481L0.75293 9.47534L7.30493 15.4501L5.33693 24.3301L12.7529 19.6185Z"
                                                fill="white"/>
                                        </svg>
                                    </div>
                                </div>

                                <div
                                    class="number-ads gray-txt"> {{ isset($aqar->aqarComment) ? $aqar->aqarComment->count() : 0 }} @lang('site.comments') </div>
                            </div>
                        </div>
                        <div
                            class="badge-ads-details bg-main round-border d-flex align-items-center justify-content-center  mt-md-0 mt-3"
                        >
                            @lang('site.id number')({{$aqar->id}})
                        </div>
                    </div>
                    <div class="col-12">

                        <form class="form py-5" method="post" id="add-form">

                            <div class="wizard-tabs d-flex justify-content-center py-3">
                                <div class="wizard">
                                    <div
                                        class="wizard-bar"
                                        style="width: 0"
                                        data-wizard-bar
                                    ></div>

                                    <ul class="wizard-list ps-0">
                                        <li>

                                            <div class="d-flex">
                                                <div class="wizard-item" data-wizard-item>
                                                    <div class="d-flex justify-content-center">
                                                        <div class="wizard-item-round">
                                                            1
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <div class="wizard-item-text">
                                <span>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                       fill="none">
                                    <path
                                        d="M12 6C12 6 10.5 4 7 4C3.5 4 2 6 2 6V20C2 20 3.5 19 7 19C10.5 19 12 20 12 20M12 6V20M12 6C12 6 13.5 4 17 4C20.5 4 22 6 22 6V20C22 20 20.5 19 17 19C13.5 19 12 20 12 20"
                                        stroke="#005D9F" stroke-width="2.66667" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    </svg>
                                </span>

                                                            <span>@lang('site.book')</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </li>
                                        <li>

                                            <div class="d-flex justify-content-center">
                                                <div class="wizard-item" data-wizard-item>
                                                    <div class="d-flex justify-content-center">
                                                        <div class="wizard-item-round">
                                                            2
                                                        </div>
                                                    </div>

                                                    <div class="wizard-item-text">
                              <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                     fill="none">
                                  <g clip-path="url(#clip0_645_49394)">
                                  <path
                                      d="M14.0002 4.66406C14 5.18918 13.8964 5.70911 13.6953 6.19419C13.4942 6.67926 13.1995 7.11997 12.828 7.49116C12.4566 7.86235 12.0157 8.15674 11.5305 8.35753C11.0453 8.55832 10.5253 8.66157 10.0002 8.6614C9.2093 8.66113 8.43628 8.42636 7.77885 7.98676C7.12142 7.54716 6.60911 6.92248 6.3067 6.19172C6.00429 5.46096 5.92537 4.65694 6.07992 3.88132C6.23447 3.10571 6.61554 2.39334 7.17495 1.8343C7.73436 1.27527 8.44699 0.894668 9.2227 0.740638C9.99842 0.586607 10.8024 0.666062 11.533 0.968955C12.2635 1.27185 12.8878 1.78458 13.327 2.4423C13.7662 3.10002 14.0004 3.8732 14.0002 4.66406ZM16.6668 19.3201H3.3335V16.6587C3.3335 15.5979 3.75492 14.5804 4.50507 13.8303C5.25521 13.0802 6.27263 12.6587 7.3335 12.6587H12.6668C13.7277 12.6587 14.7451 13.0802 15.4953 13.8303C16.2454 14.5804 16.6668 15.5979 16.6668 16.6587V19.3214V19.3201Z"
                                      stroke="#005D9F" stroke-width="2.13333" stroke-linecap="square"/>
                                  </g>
                                  <defs>
                                  <clipPath id="clip0_645_49394">
                                  <rect width="20" height="20" fill="white"/>
                                  </clipPath>
                                  </defs>
                                  </svg>
                              </span>
                                                        <span> @lang('site.personal') </span>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>

                                            <div class="d-flex justify-content-end">
                                                <div
                                                    class="wizard-item "
                                                    data-wizard-item
                                                >
                                                    <div class="d-flex justify-content-center">
                                                        <div class="wizard-item-round">
                                                            3
                                                        </div>
                                                    </div>

                                                    <div class="wizard-item-text">
                              <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
                                  <path
                                      d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z"
                                      stroke="#005D9F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M8 12L11 15L16 10" stroke="#005D9F" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                  </svg>
                              </span>
                                                        <span>
                              @lang('site.reservation confirmation')

                              </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-content-wizard py-lg-5 pt-3" data-form-tab>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card-booking py-lg-4 px-lg-3 p-3 mb-lg-0 mb-3">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h2 class="mb-4 text-gray-2">
                                                        @lang('site.Choose your reservation date')
                                                    </h2>
                                                </div>
                                                <div class="col-12">
                                                    <div class="position-relative">
                                                        <input placeholder=" {{trans('site.reciept_date')}}" type="text"
                                                               name="reciept_date" id="datepicker"
                                                               class="calendar mb-4 reciept_date" >
                                                        <span class="date-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                     fill="none">
                                  <path
                                      d="M15 1.49648L10.9965 1.4965V0.5C10.9965 0.22375 10.7727 0 10.4965 0C10.2203 0 9.9965 0.22375 9.9965 0.5V1.49625H5.9965V0.5C5.9965 0.22375 5.77275 0 5.4965 0C5.22025 0 4.9965 0.22375 4.9965 0.5V1.49625H1C0.44775 1.49625 0 1.944 0 2.49625V14.9963C0 15.5485 0.44775 15.9963 1 15.9963H15C15.5522 15.9963 16 15.5485 16 14.9963V2.49625C16 1.94423 15.5522 1.49648 15 1.49648ZM15 14.9963H1V2.49625H4.9965V3C4.9965 3.27623 5.22025 3.5 5.4965 3.5C5.77275 3.5 5.9965 3.27623 5.9965 3V2.4965H9.9965V3.00025C9.9965 3.2765 10.2203 3.50025 10.4965 3.50025C10.7727 3.50025 10.9965 3.2765 10.9965 3.00025V2.4965H15V14.9963ZM11.5 7.99649H12.5C12.776 7.99649 13 7.77249 13 7.49649V6.49649C13 6.22049 12.776 5.99648 12.5 5.99648H11.5C11.224 5.99648 11 6.22049 11 6.49649V7.49649C11 7.77249 11.224 7.99649 11.5 7.99649ZM11.5 11.9962H12.5C12.776 11.9962 13 11.7725 13 11.4962V10.4962C13 10.2202 12.776 9.99624 12.5 9.99624H11.5C11.224 9.99624 11 10.2202 11 10.4962V11.4962C11 11.7727 11.224 11.9962 11.5 11.9962ZM8.5 9.99624H7.5C7.224 9.99624 7 10.2202 7 10.4962V11.4962C7 11.7725 7.224 11.9962 7.5 11.9962H8.5C8.776 11.9962 9 11.7725 9 11.4962V10.4962C9 10.2205 8.776 9.99624 8.5 9.99624ZM8.5 5.99648H7.5C7.224 5.99648 7 6.22049 7 6.49649V7.49649C7 7.77249 7.224 7.99649 7.5 7.99649H8.5C8.776 7.99649 9 7.77249 9 7.49649V6.49649C9 6.22023 8.776 5.99648 8.5 5.99648ZM4.5 5.99648H3.5C3.224 5.99648 3 6.22049 3 6.49649V7.49649C3 7.77249 3.224 7.99649 3.5 7.99649H4.5C4.776 7.99649 5 7.77249 5 7.49649V6.49649C5 6.22023 4.776 5.99648 4.5 5.99648ZM4.5 9.99624H3.5C3.224 9.99624 3 10.2202 3 10.4962V11.4962C3 11.7725 3.224 11.9962 3.5 11.9962H4.5C4.776 11.9962 5 11.7725 5 11.4962V10.4962C5 10.2205 4.776 9.99624 4.5 9.99624Z"
                                      fill="#9C9C9C"/>
                                  </svg>
                              </span>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="position-relative">
{{--                                                        <input placeholder="{{trans('site.delivery_date')}}" type="text"--}}
{{--                                                               name="delivery_date" id="datepicker1"--}}
{{--                                                               class="calendar mb-4 delivery_dates">--}}

                                                        <input placeholder=" {{trans('site.delivery_date')}}" type="text"
                                                               name="delivery_date" id="datepicker1"
                                                               class="calendar mb-4 deliverydate" >
                                                        <span class="date-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                     fill="none">
                                  <path
                                      d="M15 1.49648L10.9965 1.4965V0.5C10.9965 0.22375 10.7727 0 10.4965 0C10.2203 0 9.9965 0.22375 9.9965 0.5V1.49625H5.9965V0.5C5.9965 0.22375 5.77275 0 5.4965 0C5.22025 0 4.9965 0.22375 4.9965 0.5V1.49625H1C0.44775 1.49625 0 1.944 0 2.49625V14.9963C0 15.5485 0.44775 15.9963 1 15.9963H15C15.5522 15.9963 16 15.5485 16 14.9963V2.49625C16 1.94423 15.5522 1.49648 15 1.49648ZM15 14.9963H1V2.49625H4.9965V3C4.9965 3.27623 5.22025 3.5 5.4965 3.5C5.77275 3.5 5.9965 3.27623 5.9965 3V2.4965H9.9965V3.00025C9.9965 3.2765 10.2203 3.50025 10.4965 3.50025C10.7727 3.50025 10.9965 3.2765 10.9965 3.00025V2.4965H15V14.9963ZM11.5 7.99649H12.5C12.776 7.99649 13 7.77249 13 7.49649V6.49649C13 6.22049 12.776 5.99648 12.5 5.99648H11.5C11.224 5.99648 11 6.22049 11 6.49649V7.49649C11 7.77249 11.224 7.99649 11.5 7.99649ZM11.5 11.9962H12.5C12.776 11.9962 13 11.7725 13 11.4962V10.4962C13 10.2202 12.776 9.99624 12.5 9.99624H11.5C11.224 9.99624 11 10.2202 11 10.4962V11.4962C11 11.7727 11.224 11.9962 11.5 11.9962ZM8.5 9.99624H7.5C7.224 9.99624 7 10.2202 7 10.4962V11.4962C7 11.7725 7.224 11.9962 7.5 11.9962H8.5C8.776 11.9962 9 11.7725 9 11.4962V10.4962C9 10.2205 8.776 9.99624 8.5 9.99624ZM8.5 5.99648H7.5C7.224 5.99648 7 6.22049 7 6.49649V7.49649C7 7.77249 7.224 7.99649 7.5 7.99649H8.5C8.776 7.99649 9 7.77249 9 7.49649V6.49649C9 6.22023 8.776 5.99648 8.5 5.99648ZM4.5 5.99648H3.5C3.224 5.99648 3 6.22049 3 6.49649V7.49649C3 7.77249 3.224 7.99649 3.5 7.99649H4.5C4.776 7.99649 5 7.77249 5 7.49649V6.49649C5 6.22023 4.776 5.99648 4.5 5.99648ZM4.5 9.99624H3.5C3.224 9.99624 3 10.2202 3 10.4962V11.4962C3 11.7725 3.224 11.9962 3.5 11.9962H4.5C4.776 11.9962 5 11.7725 5 11.4962V10.4962C5 10.2205 4.776 9.99624 4.5 9.99624Z"
                                      fill="#9C9C9C"/>
                                  </svg>
                              </span>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <h2 class="text-gray-2 mb-3">
                                                        @lang('site.Reservation and cancellation conditions')
                                                    </h2>
                                                </div>
                                                <div class="col-12">
                                                    <div class="condition-content mb-3">
                                                        <h2 class="condition-title text-second">
                                                            @lang('site.allownumber')
                                                            <div
                                                                class="badge-condition round-border d-flex justify-content-center align-items-center"
                                                            >
                                                                5
                                                            </div>
                                                        </h2>
                                                        <p class="details-sm-txt padding-right">
                                                            @lang('site.Please follow the site policy')
                                                        </p>
                                                    </div>
                                                    <div class="condition-content mb-3">
                                                        <h2 class="condition-title text-second">
                                                            @lang('site.allownumber')
                                                            <div
                                                                class="badge-condition round-border d-flex justify-content-center align-items-center"
                                                            >
                                                                5
                                                            </div>
                                                        </h2>
                                                        <p class="details-sm-txt padding-right">
                                                            @lang('site.Please follow the site policy')
                                                        </p>
                                                    </div>
                                                    <div class="condition-content mb-5">
                                                        <h2 class="condition-title text-second">
                                                            @lang('site.allownumber')
                                                            <div
                                                                class="badge-condition round-border d-flex justify-content-center align-items-center"
                                                            >
                                                                5
                                                            </div>
                                                        </h2>
                                                        <p class="details-sm-txt padding-right">
                                                            @lang('site.Please follow the site policy')
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="booking-main-img">
                                            <img
                                                src="{{asset('images/aqars/'.$aqar->main_image)}}"
                                                onerror="this.src='{{FRONTASSETS}}/images/cars/car-wizard.png'"
                                                alt=""
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-content-wizard py-lg-5 pt-3" data-form-tab>
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="mb-3 text-gray-2"> @lang('site.details')</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="card-booking mb-5">
                                            <div
                                                class="d-flex justify-content-between py-lg-4 px-lg-3 p-3"
                                            >
                                                <div>
                                                    <div class="d-flex align-items-center pb-3">
                              <span>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="20"
                                    height="20"
                                    viewBox="0 0 20 20"
                                    fill="none"
                                >
                                  <g clip-path="url(#clip0_424_33708)">
                                    <path
                                        d="M18.75 1.87256L13.7456 1.87258V0.626953C13.7456 0.281641 13.4659 0.00195312 13.1206 0.00195312C12.7753 0.00195312 12.4956 0.281641 12.4956 0.626953V1.87227H7.49563V0.626953C7.49563 0.281641 7.21594 0.00195312 6.87063 0.00195312C6.52531 0.00195312 6.24563 0.281641 6.24563 0.626953V1.87227H1.25C0.559687 1.87227 0 2.43195 0 3.12227V18.7473C0 19.4376 0.559687 19.9973 1.25 19.9973H18.75C19.4403 19.9973 20 19.4376 20 18.7473V3.12227C20 2.43225 19.4403 1.87256 18.75 1.87256ZM18.75 18.7473H1.25V3.12227H6.24563V3.75195C6.24563 4.09725 6.52531 4.37695 6.87063 4.37695C7.21594 4.37695 7.49563 4.09725 7.49563 3.75195V3.12258H12.4956V3.75227C12.4956 4.09758 12.7753 4.37727 13.1206 4.37727C13.4659 4.37727 13.7456 4.09758 13.7456 3.75227V3.12258H18.75V18.7473ZM14.375 9.99756H15.625C15.97 9.99756 16.25 9.71756 16.25 9.37256V8.12256C16.25 7.77756 15.97 7.49756 15.625 7.49756H14.375C14.03 7.49756 13.75 7.77756 13.75 8.12256V9.37256C13.75 9.71756 14.03 9.99756 14.375 9.99756ZM14.375 14.9972H15.625C15.97 14.9972 16.25 14.7176 16.25 14.3722V13.1222C16.25 12.7772 15.97 12.4972 15.625 12.4972H14.375C14.03 12.4972 13.75 12.7772 13.75 13.1222V14.3722C13.75 14.7179 14.03 14.9972 14.375 14.9972ZM10.625 12.4972H9.375C9.03 12.4972 8.75 12.7772 8.75 13.1222V14.3722C8.75 14.7176 9.03 14.9972 9.375 14.9972H10.625C10.97 14.9972 11.25 14.7176 11.25 14.3722V13.1222C11.25 12.7776 10.97 12.4972 10.625 12.4972ZM10.625 7.49756H9.375C9.03 7.49756 8.75 7.77756 8.75 8.12256V9.37256C8.75 9.71756 9.03 9.99756 9.375 9.99756H10.625C10.97 9.99756 11.25 9.71756 11.25 9.37256V8.12256C11.25 7.77725 10.97 7.49756 10.625 7.49756ZM5.625 7.49756H4.375C4.03 7.49756 3.75 7.77756 3.75 8.12256V9.37256C3.75 9.71756 4.03 9.99756 4.375 9.99756H5.625C5.97 9.99756 6.25 9.71756 6.25 9.37256V8.12256C6.25 7.77725 5.97 7.49756 5.625 7.49756ZM5.625 12.4972H4.375C4.03 12.4972 3.75 12.7772 3.75 13.1222V14.3722C3.75 14.7176 4.03 14.9972 4.375 14.9972H5.625C5.97 14.9972 6.25 14.7176 6.25 14.3722V13.1222C6.25 12.7776 5.97 12.4972 5.625 12.4972Z"
                                        fill="#9C9C9C"
                                    />
                                  </g>
                                  <defs>
                                    <clipPath id="clip0_424_33708">
                                      <rect
                                          width="20"
                                          height="20"
                                          fill="white"
                                      />
                                    </clipPath>
                                  </defs>
                                </svg>
                              </span>
                                                        <span class="text-second dd-txt pe-2">
                                                            @lang('site.time_to')
                              </span>
                                                    </div>
                                                    <div class="card-booking p-md-3 text-center">

                                                        <div class="text-gray-4 pt-1">
                                                            {{$aqar->time_to ??''}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="d-flex align-items-center pb-3">
                              <span>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="20"
                                    height="20"
                                    viewBox="0 0 20 20"
                                    fill="none"
                                >
                                  <g clip-path="url(#clip0_424_33708)">
                                    <path
                                        d="M18.75 1.87256L13.7456 1.87258V0.626953C13.7456 0.281641 13.4659 0.00195312 13.1206 0.00195312C12.7753 0.00195312 12.4956 0.281641 12.4956 0.626953V1.87227H7.49563V0.626953C7.49563 0.281641 7.21594 0.00195312 6.87063 0.00195312C6.52531 0.00195312 6.24563 0.281641 6.24563 0.626953V1.87227H1.25C0.559687 1.87227 0 2.43195 0 3.12227V18.7473C0 19.4376 0.559687 19.9973 1.25 19.9973H18.75C19.4403 19.9973 20 19.4376 20 18.7473V3.12227C20 2.43225 19.4403 1.87256 18.75 1.87256ZM18.75 18.7473H1.25V3.12227H6.24563V3.75195C6.24563 4.09725 6.52531 4.37695 6.87063 4.37695C7.21594 4.37695 7.49563 4.09725 7.49563 3.75195V3.12258H12.4956V3.75227C12.4956 4.09758 12.7753 4.37727 13.1206 4.37727C13.4659 4.37727 13.7456 4.09758 13.7456 3.75227V3.12258H18.75V18.7473ZM14.375 9.99756H15.625C15.97 9.99756 16.25 9.71756 16.25 9.37256V8.12256C16.25 7.77756 15.97 7.49756 15.625 7.49756H14.375C14.03 7.49756 13.75 7.77756 13.75 8.12256V9.37256C13.75 9.71756 14.03 9.99756 14.375 9.99756ZM14.375 14.9972H15.625C15.97 14.9972 16.25 14.7176 16.25 14.3722V13.1222C16.25 12.7772 15.97 12.4972 15.625 12.4972H14.375C14.03 12.4972 13.75 12.7772 13.75 13.1222V14.3722C13.75 14.7179 14.03 14.9972 14.375 14.9972ZM10.625 12.4972H9.375C9.03 12.4972 8.75 12.7772 8.75 13.1222V14.3722C8.75 14.7176 9.03 14.9972 9.375 14.9972H10.625C10.97 14.9972 11.25 14.7176 11.25 14.3722V13.1222C11.25 12.7776 10.97 12.4972 10.625 12.4972ZM10.625 7.49756H9.375C9.03 7.49756 8.75 7.77756 8.75 8.12256V9.37256C8.75 9.71756 9.03 9.99756 9.375 9.99756H10.625C10.97 9.99756 11.25 9.71756 11.25 9.37256V8.12256C11.25 7.77725 10.97 7.49756 10.625 7.49756ZM5.625 7.49756H4.375C4.03 7.49756 3.75 7.77756 3.75 8.12256V9.37256C3.75 9.71756 4.03 9.99756 4.375 9.99756H5.625C5.97 9.99756 6.25 9.71756 6.25 9.37256V8.12256C6.25 7.77725 5.97 7.49756 5.625 7.49756ZM5.625 12.4972H4.375C4.03 12.4972 3.75 12.7772 3.75 13.1222V14.3722C3.75 14.7176 4.03 14.9972 4.375 14.9972H5.625C5.97 14.9972 6.25 14.7176 6.25 14.3722V13.1222C6.25 12.7776 5.97 12.4972 5.625 12.4972Z"
                                        fill="#9C9C9C"
                                    />
                                  </g>
                                  <defs>
                                    <clipPath id="clip0_424_33708">
                                      <rect
                                          width="20"
                                          height="20"
                                          fill="white"
                                      />
                                    </clipPath>
                                  </defs>
                                </svg>
                              </span>
                                                        <span class="text-second dd-txt pe-2"
                                                        > @lang('site.time_from')</span
                                                        >
                                                    </div>
                                                    <div class="card-booking p-md-3 text-center">

                                                        <div class="text-gray-4 pt-1">
                                                            {{$aqar->time_from ??''}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="hr-saeeh my-0"/>
                                            <div
                                                class="d-flex justify-content-between py-1 px-3"
                                            >
                                                <div class="d-flex align-items-center">
                            <span>
                              <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                              >
                                <path
                                    d="M12 22.75C6.07 22.75 1.25 17.93 1.25 12C1.25 6.07 6.07 1.25 12 1.25C17.93 1.25 22.75 6.07 22.75 12C22.75 17.93 17.93 22.75 12 22.75ZM12 2.75C6.9 2.75 2.75 6.9 2.75 12C2.75 17.1 6.9 21.25 12 21.25C17.1 21.25 21.25 17.1 21.25 12C21.25 6.9 17.1 2.75 12 2.75Z"
                                    fill="#9C9C9C"
                                />
                                <path
                                    d="M15.7106 15.9298C15.5806 15.9298 15.4506 15.8998 15.3306 15.8198L12.2306 13.9698C11.4606 13.5098 10.8906 12.4998 10.8906 11.6098V7.50977C10.8906 7.09977 11.2306 6.75977 11.6406 6.75977C12.0506 6.75977 12.3906 7.09977 12.3906 7.50977V11.6098C12.3906 11.9698 12.6906 12.4998 13.0006 12.6798L16.1006 14.5298C16.4606 14.7398 16.5706 15.1998 16.3606 15.5598C16.2106 15.7998 15.9606 15.9298 15.7106 15.9298Z"
                                    fill="#9C9C9C"
                                />
                              </svg>
                            </span>
                                                    <span class="text-second dd-txt pe-2">
                        @lang('site.country')
                            </span>
                                                </div>
                                                <div
                                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                                >
                                                    {{$aqar->country->name ?? ''}}
                                                </div>
                                            </div>
                                            <hr class="hr-saeeh my-0"/>
                                            <div
                                                class="d-flex justify-content-between py-1 px-3"
                                            >
                                                <div class="d-flex align-items-center">
                            <span>
                              <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                              >
                                <path
                                    d="M12 22.75C6.07 22.75 1.25 17.93 1.25 12C1.25 6.07 6.07 1.25 12 1.25C17.93 1.25 22.75 6.07 22.75 12C22.75 17.93 17.93 22.75 12 22.75ZM12 2.75C6.9 2.75 2.75 6.9 2.75 12C2.75 17.1 6.9 21.25 12 21.25C17.1 21.25 21.25 17.1 21.25 12C21.25 6.9 17.1 2.75 12 2.75Z"
                                    fill="#9C9C9C"
                                />
                                <path
                                    d="M15.7106 15.9298C15.5806 15.9298 15.4506 15.8998 15.3306 15.8198L12.2306 13.9698C11.4606 13.5098 10.8906 12.4998 10.8906 11.6098V7.50977C10.8906 7.09977 11.2306 6.75977 11.6406 6.75977C12.0506 6.75977 12.3906 7.09977 12.3906 7.50977V11.6098C12.3906 11.9698 12.6906 12.4998 13.0006 12.6798L16.1006 14.5298C16.4606 14.7398 16.5706 15.1998 16.3606 15.5598C16.2106 15.7998 15.9606 15.9298 15.7106 15.9298Z"
                                    fill="#9C9C9C"
                                />
                              </svg>
                            </span>
                                                    <span class="text-second dd-txt pe-2">
                        @lang('site.city')
                            </span>
                                                </div>
                                                <div
                                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                                >
                                                    {{$aqar->city->name ?? ''}}
                                                </div>
                                            </div>
                                            <hr class="hr-saeeh my-0"/>
                                            <div
                                                class="d-flex justify-content-between py-1 px-3"
                                            >
                                                <div class="d-flex align-items-center">
                            <span>
                              <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                              >
                                <path
                                    d="M11 5V1H13V5H11ZM17.65 7.75L16.25 6.35L19.075 3.5L20.475 4.925L17.65 7.75ZM19 13V11H23V13H19ZM19.075 20.475L16.25 17.65L17.65 16.25L20.5 19.05L19.075 20.475ZM6.35 7.75L3.525 4.925L4.95 3.5L7.75 6.35L6.35 7.75ZM6 19H10.5C10.9167 19 11.271 18.854 11.563 18.562C11.855 18.27 12.0007 17.916 12 17.5C12 17.0833 11.8583 16.729 11.575 16.437C11.2917 16.145 10.9417 15.9993 10.525 16H9.25L8.75 14.8C8.51667 14.25 8.15 13.8123 7.65 13.487C7.15 13.1617 6.6 12.9993 6 13C5.16667 13 4.45833 13.2917 3.875 13.875C3.29167 14.4583 3 15.1667 3 16C3 16.8333 3.29167 17.5417 3.875 18.125C4.45833 18.7083 5.16667 19 6 19ZM6 21C4.61667 21 3.43767 20.5123 2.463 19.537C1.48833 18.5617 1.00067 17.3827 1 16C1 14.6167 1.48767 13.4373 2.463 12.462C3.43833 11.4867 4.61733 10.9993 6 11C7 11 7.91267 11.271 8.738 11.813C9.56333 12.355 10.1757 13.084 10.575 14C11.5417 14 12.3543 14.3583 13.013 15.075C13.6717 15.7917 14.0007 16.65 14 17.65C13.9667 18.6 13.6123 19.396 12.937 20.038C12.2617 20.68 11.4493 21.0007 10.5 21H6ZM14 17.65C13.9167 17.3167 13.8333 16.9917 13.75 16.675C13.6667 16.3583 13.5833 16.0333 13.5 15.7C14.25 15.3833 14.8543 14.8917 15.313 14.225C15.7717 13.5583 16.0007 12.8167 16 12C16 10.9 15.6083 9.95833 14.825 9.175C14.0417 8.39167 13.1 8 12 8C11 8 10.125 8.325 9.375 8.975C8.625 9.625 8.18333 10.45 8.05 11.45C7.71667 11.3667 7.375 11.2917 7.025 11.225C6.675 11.1583 6.33333 11.0833 6 11C6.23333 9.53333 6.921 8.33333 8.063 7.4C9.205 6.46667 10.5173 6 12 6C13.6667 6 15.0833 6.58333 16.25 7.75C17.4167 8.91667 18 10.3333 18 12C18 13.2833 17.6333 14.4377 16.9 15.463C16.1667 16.4883 15.2 17.2173 14 17.65Z"
                                    fill="#9C9C9C"
                                />
                              </svg>
                            </span>
                                                    <span class="text-second dd-txt pe-2"
                                                    > @lang('site.hallnumber')
                            </span>
                                                </div>
                                                <div
                                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                                >
                                                    {{$aqar->hallnumber ?? ''}}
                                                </div>
                                            </div>
                                            <hr class="hr-saeeh my-0"/>
                                            <div
                                                class="d-flex justify-content-between py-1 px-3"
                                            >
                                                <div class="d-flex align-items-center">
                            <span>
                              <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                              >
                                <path
                                    d="M9.775 12C9.175 12 8.675 11.775 8.275 11.325C7.875 10.875 7.71667 10.35 7.8 9.75L8.125 7.3C8.25833 6.35 8.69167 5.56233 9.425 4.937C10.1583 4.31167 11.0167 3.99933 12 4C12.9833 4 13.8417 4.31267 14.575 4.938C15.3083 5.56333 15.7417 6.35067 15.875 7.3L16.2 9.75C16.2833 10.35 16.125 10.875 15.725 11.325C15.325 11.775 14.825 12 14.225 12H9.775ZM9.775 10H14.225L13.9 7.6C13.8333 7.13333 13.621 6.75 13.263 6.45C12.905 6.15 12.484 6 12 6C11.5167 6 11.0957 6.15 10.737 6.45C10.3783 6.75 10.166 7.13333 10.1 7.6L9.775 10ZM4 20V17.2C4 16.6333 4.146 16.1123 4.438 15.637C4.73 15.1617 5.11733 14.7993 5.6 14.55C6.63333 14.0333 7.68333 13.6457 8.75 13.387C9.81667 13.1283 10.9 12.9993 12 13C13.1 13 14.1833 13.1293 15.25 13.388C16.3167 13.6467 17.3667 14.034 18.4 14.55C18.8833 14.8 19.271 15.1627 19.563 15.638C19.855 16.1133 20.0007 16.634 20 17.2V20H4ZM6 18H18V17.2C18 17.0167 17.954 16.85 17.862 16.7C17.77 16.55 17.6493 16.4333 17.5 16.35C16.6 15.9 15.6917 15.5627 14.775 15.338C13.8583 15.1133 12.9333 15.0007 12 15C11.0667 15 10.1417 15.1127 9.225 15.338C8.30833 15.5633 7.4 15.9007 6.5 16.35C6.35 16.4333 6.229 16.55 6.137 16.7C6.045 16.85 5.99933 17.0167 6 17.2V18Z"
                                    fill="#9C9C9C"
                                />
                              </svg>
                            </span>
                                                    <span class="text-second dd-txt pe-2"
                                                    > @lang('site.personnumber')</span
                                                    >
                                                </div>
                                                <div
                                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                                >
                                                    {{$aqar->personnumber ?? 0}}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-booking mb-4">
                                            <div
                                                class="d-flex justify-content-between py-1 px-3"
                                            >
                                                <div class="d-flex align-items-center">
                            <span>
                              <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="25"
                                  height="24"
                                  viewBox="0 0 25 24"
                                  fill="none"
                              >
                                <path
                                    d="M12.2656 22.75C11.8556 22.75 11.5156 22.41 11.5156 22V20C11.5156 19.59 11.8556 19.25 12.2656 19.25C12.6756 19.25 13.0156 19.59 13.0156 20V22C13.0156 22.41 12.6756 22.75 12.2656 22.75Z"
                                    fill="#9C9C9C"
                                />
                                <path
                                    d="M12.2656 18.75C11.8556 18.75 11.5156 18.41 11.5156 18V16C11.5156 15.59 11.8556 15.25 12.2656 15.25C12.6756 15.25 13.0156 15.59 13.0156 16V18C13.0156 18.41 12.6756 18.75 12.2656 18.75Z"
                                    fill="#9C9C9C"
                                />
                                <path
                                    d="M12.2656 14.75C11.8556 14.75 11.5156 14.41 11.5156 14V11C11.5156 6.73 14.9956 3.25 19.2656 3.25H22.2656C22.6756 3.25 23.0156 3.59 23.0156 4C23.0156 4.41 22.6756 4.75 22.2656 4.75H19.2656C15.8156 4.75 13.0156 7.55 13.0156 11V14C13.0156 14.41 12.6756 14.75 12.2656 14.75Z"
                                    fill="#9C9C9C"
                                />
                                <path
                                    d="M12.2656 14.75C11.8556 14.75 11.5156 14.41 11.5156 14V11C11.5156 7.55 8.71562 4.75 5.26562 4.75H2.26562C1.85563 4.75 1.51562 4.41 1.51562 4C1.51562 3.59 1.85563 3.25 2.26562 3.25H5.26562C9.53563 3.25 13.0156 6.73 13.0156 11V14C13.0156 14.41 12.6756 14.75 12.2656 14.75Z"
                                    fill="#9C9C9C"
                                />
                                <path
                                    d="M4.26706 6.74945C4.07706 6.74945 3.88703 6.67945 3.73703 6.52945L1.73703 4.52945C1.44703 4.23945 1.44703 3.75945 1.73703 3.46945L3.73703 1.46945C4.02703 1.17945 4.50709 1.17945 4.79709 1.46945C5.08709 1.75945 5.08709 2.23945 4.79709 2.52945L3.32706 3.99945L4.79709 5.46945C5.08709 5.75945 5.08709 6.23945 4.79709 6.52945C4.64709 6.67945 4.45706 6.74945 4.26706 6.74945Z"
                                    fill="#9C9C9C"
                                />
                                <path
                                    d="M20.2651 6.74945C20.0751 6.74945 19.8851 6.67945 19.7351 6.52945C19.4451 6.23945 19.4451 5.75945 19.7351 5.46945L21.2051 3.99945L19.7351 2.52945C19.4451 2.23945 19.4451 1.75945 19.7351 1.46945C20.0251 1.17945 20.5051 1.17945 20.7951 1.46945L22.7951 3.46945C23.0851 3.75945 23.0851 4.23945 22.7951 4.52945L20.7951 6.52945C20.6451 6.67945 20.4551 6.74945 20.2651 6.74945Z"
                                    fill="#9C9C9C"
                                />
                              </svg>
                            </span>
                                                                                                        <span class="text-second dd-txt pe-2">@lang('site.day_count') </span>
                                                </div>
                                                                                                <div
                                                                                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                                                                                >
                                                                                            <p id="daycount">



                                                                                            </p>
                                                                                                </div>
                                            </div>
                                            <hr class="hr-saeeh my-0"/>
                                            <div
                                                class="d-flex justify-content-between py-1 px-3"
                                            >
                                                <div class="d-flex align-items-center">
                            <span>
                              <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="25"
                                  height="24"
                                  viewBox="0 0 25 24"
                                  fill="none"
                              >
                                <path
                                    d="M3.26562 20V12C3.26562 11.4696 3.47634 10.9609 3.85141 10.5858C4.22648 10.2107 4.73519 10 5.26562 10H19.2656C19.7961 10 20.3048 10.2107 20.6798 10.5858C21.0549 10.9609 21.2656 11.4696 21.2656 12V20"
                                    stroke="#9C9C9C"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                                <path
                                    d="M5.26562 10V6C5.26562 5.46957 5.47634 4.96086 5.85141 4.58579C6.22648 4.21071 6.73519 4 7.26563 4H17.2656C17.7961 4 18.3048 4.21071 18.6798 4.58579C19.0549 4.96086 19.2656 5.46957 19.2656 6V10"
                                    stroke="#9C9C9C"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                                <path
                                    d="M3.26562 18H21.2656"
                                    stroke="#9C9C9C"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                              </svg>
                            </span>
                                                    <span class="text-second dd-txt pe-2">
                             @lang('site.normalroom')
                            </span>
                                                </div>
                                                <div
                                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                                >
                                                    {{$aqar->normalroom ?? 0}}
                                                </div>
                                            </div>
                                            <hr class="hr-saeeh my-0"/>
                                            <div
                                                class="d-flex justify-content-between py-1 px-3"
                                            >
                                                <div class="d-flex align-items-center">
                            <span>
                              <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="25"
                                  height="24"
                                  viewBox="0 0 25 24"
                                  fill="none"
                              >
                                <path
                                    d="M22.2656 22.75H2.26562C1.85563 22.75 1.51562 22.41 1.51562 22C1.51562 21.59 1.85563 21.25 2.26562 21.25H22.2656C22.6756 21.25 23.0156 21.59 23.0156 22C23.0156 22.41 22.6756 22.75 22.2656 22.75Z"
                                    fill="#9C9C9C"
                                />
                                <path
                                    d="M21.2656 22.75H3.26563C2.85563 22.75 2.51562 22.41 2.51562 22V6C2.51562 2.98 4.24563 1.25 7.26563 1.25H17.2656C20.2856 1.25 22.0156 2.98 22.0156 6V22C22.0156 22.41 21.6756 22.75 21.2656 22.75ZM4.01563 21.25H20.5156V6C20.5156 3.78 19.4856 2.75 17.2656 2.75H7.26563C5.04563 2.75 4.01563 3.78 4.01563 6V21.25Z"
                                    fill="#9C9C9C"
                                />
                                <path
                                    d="M10.2656 17.25H7.26562C6.85563 17.25 6.51562 16.91 6.51562 16.5C6.51562 16.09 6.85563 15.75 7.26562 15.75H10.2656C10.6756 15.75 11.0156 16.09 11.0156 16.5C11.0156 16.91 10.6756 17.25 10.2656 17.25Z"
                                    fill="#9C9C9C"
                                />
                                <path
                                    d="M17.2656 17.25H14.2656C13.8556 17.25 13.5156 16.91 13.5156 16.5C13.5156 16.09 13.8556 15.75 14.2656 15.75H17.2656C17.6756 15.75 18.0156 16.09 18.0156 16.5C18.0156 16.91 17.6756 17.25 17.2656 17.25Z"
                                    fill="#9C9C9C"
                                />
                                <path
                                    d="M10.2656 12.75H7.26562C6.85563 12.75 6.51562 12.41 6.51562 12C6.51562 11.59 6.85563 11.25 7.26562 11.25H10.2656C10.6756 11.25 11.0156 11.59 11.0156 12C11.0156 12.41 10.6756 12.75 10.2656 12.75Z"
                                    fill="#9C9C9C"
                                />
                                <path
                                    d="M17.2656 12.75H14.2656C13.8556 12.75 13.5156 12.41 13.5156 12C13.5156 11.59 13.8556 11.25 14.2656 11.25H17.2656C17.6756 11.25 18.0156 11.59 18.0156 12C18.0156 12.41 17.6756 12.75 17.2656 12.75Z"
                                    fill="#9C9C9C"
                                />
                                <path
                                    d="M10.2656 8.25H7.26562C6.85563 8.25 6.51562 7.91 6.51562 7.5C6.51562 7.09 6.85563 6.75 7.26562 6.75H10.2656C10.6756 6.75 11.0156 7.09 11.0156 7.5C11.0156 7.91 10.6756 8.25 10.2656 8.25Z"
                                    fill="#9C9C9C"
                                />
                                <path
                                    d="M17.2656 8.25H14.2656C13.8556 8.25 13.5156 7.91 13.5156 7.5C13.5156 7.09 13.8556 6.75 14.2656 6.75H17.2656C17.6756 6.75 18.0156 7.09 18.0156 7.5C18.0156 7.91 17.6756 8.25 17.2656 8.25Z"
                                    fill="#9C9C9C"
                                />
                              </svg>
                            </span>
                                                    <span class="text-second dd-txt pe-2">
                              @lang('site.personnumber')
                            </span>
                                                </div>
                                                <div
                                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                                >
                                                    {{$aqar->personnumber ?? 0}}
                                                </div>
                                            </div>
                                            <hr class="hr-saeeh my-0"/>
                                            <div
                                                class="d-flex justify-content-between py-1 px-3"
                                            >
                                                <div class="d-flex align-items-center">
                            <span>
                              <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="25"
                                  height="24"
                                  viewBox="0 0 25 24"
                                  fill="none"
                              >
                                <path
                                    d="M9.46875 6L6.96875 3.5C6.71231 3.21069 6.35406 3.03157 5.96875 3C5.15175 3 4.46875 3.683 4.46875 4.5V17C4.46875 17.5304 4.67946 18.0391 5.05454 18.4142C5.42961 18.7893 5.93832 19 6.46875 19H18.4688C18.9992 19 19.5079 18.7893 19.883 18.4142C20.258 18.0391 20.4688 17.5304 20.4688 17V12"
                                    stroke="#9C9C9C"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                                <path
                                    d="M10.4688 5L8.46875 7"
                                    stroke="#9C9C9C"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                                <path
                                    d="M2.46875 12H22.4687"
                                    stroke="#9C9C9C"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                                <path
                                    d="M7.46875 19V21"
                                    stroke="#9C9C9C"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                                <path
                                    d="M17.4688 19V21"
                                    stroke="#9C9C9C"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                              </svg>
                            </span>
                                                    <span class="text-second dd-txt pe-2"
                                                    >@lang('site.swimmingpool')
                            </span>
                                                </div>
                                                <div
                                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                                >
                                                    {{$aqar->swimmingpool ?? 0}}
                                                </div>
                                            </div>
                                            <hr class="hr-saeeh my-0"/>
                                            <div
                                                class="d-flex justify-content-between py-1 px-3"
                                            >
                                                <div class="d-flex align-items-center">
                            <span>
                              <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="25"
                                  height="24"
                                  viewBox="0 0 25 24"
                                  fill="none"
                              >
                                <path
                                    d="M16.0067 14.7913H4.40767C2.40269 14.7913 1.30078 13.683 1.30078 11.6663V8.33301C1.30078 6.31634 2.40269 5.20801 4.40767 5.20801H16.0067C18.0117 5.20801 19.1136 6.31634 19.1136 8.33301V11.6663C19.1136 13.683 18.0117 14.7913 16.0067 14.7913ZM4.40767 6.45801C3.09863 6.45801 2.54353 7.01634 2.54353 8.33301V11.6663C2.54353 12.983 3.09863 13.5413 4.40767 13.5413H16.0067C17.3157 13.5413 17.8708 12.983 17.8708 11.6663V8.33301C17.8708 7.01634 17.3157 6.45801 16.0067 6.45801H4.40767Z"
                                    fill="#9C9C9C"
                                />
                                <path
                                    d="M15.178 10.6247C14.8383 10.6247 14.5566 10.3413 14.5566 9.99967V5.83301C14.5566 5.49134 14.8383 5.20801 15.178 5.20801C15.5177 5.20801 15.7994 5.49134 15.7994 5.83301V9.99967C15.7994 10.3413 15.5177 10.6247 15.178 10.6247Z"
                                    fill="#9C9C9C"
                                />
                                <path
                                    d="M5.23661 9.79134C4.89693 9.79134 4.61523 9.50801 4.61523 9.16634V5.83301C4.61523 5.49134 4.89693 5.20801 5.23661 5.20801C5.5763 5.20801 5.85799 5.49134 5.85799 5.83301V9.16634C5.85799 9.50801 5.5763 9.79134 5.23661 9.79134Z"
                                    fill="#9C9C9C"
                                />
                                <path
                                    d="M8.55106 10.6247C8.20309 10.6247 7.92969 10.3413 7.92969 9.99134L7.97111 5.82467C7.97111 5.48301 8.2528 5.20801 8.59249 5.20801C8.59249 5.20801 8.59249 5.20801 8.60077 5.20801C8.94046 5.20801 9.22215 5.49134 9.21387 5.84134L9.17244 10.008C9.17244 10.3497 8.89075 10.6247 8.55106 10.6247Z"
                                    fill="#9C9C9C"
                                />
                                <path
                                    d="M11.8655 8.95801C11.5258 8.95801 11.2441 8.67467 11.2441 8.33301V5.83301C11.2441 5.49134 11.5258 5.20801 11.8655 5.20801C12.2052 5.20801 12.4869 5.49134 12.4869 5.83301V8.33301C12.4869 8.67467 12.2052 8.95801 11.8655 8.95801Z"
                                    fill="#9C9C9C"
                                />
                              </svg>
                            </span>
                                                    <span class="text-second dd-txt pe-2">
                              @lang('site.unitnumber')
                            </span>
                                                </div>
                                                <div
                                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                                >
                                                    {{$aqar->unitnumber ?? 0}}
                                                </div>
                                            </div>
                                            <hr class="hr-saeeh my-0"/>

                                        </div>
                                        <h2 class="mb-3 text-gray-2"> @lang('site.Price summary')</h2>
                                        <div class="card-booking mb-4">
                                            <div
                                                class="d-flex justify-content-between py-1 px-3"
                                            >
                                                <div class="d-flex align-items-center">
                            <span>
                              <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                              >
                                <path
                                    d="M17.74 22.75H6.26C3.77 22.75 1.75 20.73 1.75 18.24V11.51C1.75 9.02001 3.77 7 6.26 7H17.74C20.23 7 22.25 9.02001 22.25 11.51V12.95C22.25 13.36 21.91 13.7 21.5 13.7H19.48C19.13 13.7 18.81 13.83 18.58 14.07L18.57 14.08C18.29 14.35 18.16 14.72 18.19 15.1C18.25 15.76 18.88 16.29 19.6 16.29H21.5C21.91 16.29 22.25 16.63 22.25 17.04V18.23C22.25 20.73 20.23 22.75 17.74 22.75ZM6.26 8.5C4.6 8.5 3.25 9.85001 3.25 11.51V18.24C3.25 19.9 4.6 21.25 6.26 21.25H17.74C19.4 21.25 20.75 19.9 20.75 18.24V17.8H19.6C18.09 17.8 16.81 16.68 16.69 15.24C16.61 14.42 16.91 13.61 17.51 13.02C18.03 12.49 18.73 12.2 19.48 12.2H20.75V11.51C20.75 9.85001 19.4 8.5 17.74 8.5H6.26Z"
                                    fill="#9C9C9C"
                                />
                                <path
                                    d="M2.5 13.16C2.09 13.16 1.75 12.82 1.75 12.41V7.84006C1.75 6.35006 2.69 5.00001 4.08 4.47001L12.02 1.47001C12.84 1.16001 13.75 1.27005 14.46 1.77005C15.18 2.27005 15.6 3.08005 15.6 3.95005V7.75003C15.6 8.16003 15.26 8.50003 14.85 8.50003C14.44 8.50003 14.1 8.16003 14.1 7.75003V3.95005C14.1 3.57005 13.92 3.22003 13.6 3.00003C13.28 2.78003 12.9 2.73003 12.54 2.87003L4.6 5.87003C3.79 6.18003 3.24 6.97006 3.24 7.84006V12.41C3.25 12.83 2.91 13.16 2.5 13.16Z"
                                    fill="#9C9C9C"
                                />
                                <path
                                    d="M19.5985 17.8002C18.0885 17.8002 16.8085 16.6802 16.6885 15.2402C16.6085 14.4102 16.9085 13.6002 17.5085 13.0102C18.0185 12.4902 18.7185 12.2002 19.4685 12.2002H21.5485C22.5385 12.2302 23.2985 13.0102 23.2985 13.9702V16.0302C23.2985 16.9902 22.5385 17.7702 21.5785 17.8002H19.5985ZM21.5285 13.7002H19.4785C19.1285 13.7002 18.8085 13.8302 18.5785 14.0702C18.2885 14.3502 18.1485 14.7302 18.1885 15.1102C18.2485 15.7702 18.8785 16.3002 19.5985 16.3002H21.5585C21.6885 16.3002 21.8085 16.1802 21.8085 16.0302V13.9702C21.8085 13.8202 21.6885 13.7102 21.5285 13.7002Z"
                                    fill="#9C9C9C"
                                />
                                <path
                                    d="M14 12.75H7C6.59 12.75 6.25 12.41 6.25 12C6.25 11.59 6.59 11.25 7 11.25H14C14.41 11.25 14.75 11.59 14.75 12C14.75 12.41 14.41 12.75 14 12.75Z"
                                    fill="#9C9C9C"
                                />
                              </svg>
                            </span>
                                                    <span class="text-second dd-txt pe-2"
                                                    > @lang('site.price')</span
                                                    >
                                                </div>
                                                <div
                                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                                >
                                                    {{$aqar->fixed_price ?? 0}}
                                                </div>
                                            </div>
                                            <hr class="hr-saeeh my-0"/>

                                        </div>
                                        <div class="card-booking mb-4 bg-light-orange">
                                            <div
                                                class="d-flex justify-content-between py-1 px-3"
                                            >
                                                <div class="d-flex align-items-center">
                            <span>
                              <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                              >
                                <path
                                    d="M17.74 22.75H6.26C3.77 22.75 1.75 20.73 1.75 18.24V11.51C1.75 9.02001 3.77 7 6.26 7H17.74C20.23 7 22.25 9.02001 22.25 11.51V12.95C22.25 13.36 21.91 13.7 21.5 13.7H19.48C19.13 13.7 18.81 13.83 18.58 14.07L18.57 14.08C18.29 14.35 18.16 14.72 18.19 15.1C18.25 15.76 18.88 16.29 19.6 16.29H21.5C21.91 16.29 22.25 16.63 22.25 17.04V18.23C22.25 20.73 20.23 22.75 17.74 22.75ZM6.26 8.5C4.6 8.5 3.25 9.85001 3.25 11.51V18.24C3.25 19.9 4.6 21.25 6.26 21.25H17.74C19.4 21.25 20.75 19.9 20.75 18.24V17.8H19.6C18.09 17.8 16.81 16.68 16.69 15.24C16.61 14.42 16.91 13.61 17.51 13.02C18.03 12.49 18.73 12.2 19.48 12.2H20.75V11.51C20.75 9.85001 19.4 8.5 17.74 8.5H6.26Z"
                                    fill="#FF8600"
                                />
                                <path
                                    d="M2.5 13.16C2.09 13.16 1.75 12.82 1.75 12.41V7.84006C1.75 6.35006 2.69 5.00001 4.08 4.47001L12.02 1.47001C12.84 1.16001 13.75 1.27005 14.46 1.77005C15.18 2.27005 15.6 3.08005 15.6 3.95005V7.75003C15.6 8.16003 15.26 8.50003 14.85 8.50003C14.44 8.50003 14.1 8.16003 14.1 7.75003V3.95005C14.1 3.57005 13.92 3.22003 13.6 3.00003C13.28 2.78003 12.9 2.73003 12.54 2.87003L4.6 5.87003C3.79 6.18003 3.24 6.97006 3.24 7.84006V12.41C3.25 12.83 2.91 13.16 2.5 13.16Z"
                                    fill="#FF8600"
                                />
                                <path
                                    d="M19.5995 17.8002C18.0895 17.8002 16.8095 16.6802 16.6895 15.2402C16.6095 14.4102 16.9095 13.6002 17.5095 13.0102C18.0195 12.4902 18.7195 12.2002 19.4695 12.2002H21.5495C22.5395 12.2302 23.2995 13.0102 23.2995 13.9702V16.0302C23.2995 16.9902 22.5395 17.7702 21.5795 17.8002H19.5995ZM21.5295 13.7002H19.4795C19.1295 13.7002 18.8095 13.8302 18.5795 14.0702C18.2895 14.3502 18.1495 14.7302 18.1895 15.1102C18.2495 15.7702 18.8795 16.3002 19.5995 16.3002H21.5595C21.6895 16.3002 21.8095 16.1802 21.8095 16.0302V13.9702C21.8095 13.8202 21.6895 13.7102 21.5295 13.7002Z"
                                    fill="#FF8600"
                                />
                                <path
                                    d="M14 12.75H7C6.59 12.75 6.25 12.41 6.25 12C6.25 11.59 6.59 11.25 7 11.25H14C14.41 11.25 14.75 11.59 14.75 12C14.75 12.41 14.41 12.75 14 12.75Z"
                                    fill="#FF8600"
                                />
                              </svg>
                            </span>
                                                    <span class="text-gray-2 dd-txt pe-2"
                                                    > @lang('site.Reservation deposit')
                            </span>
                                                </div>
                                                <div
                                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                                >
                                                    {{$aqar->fixed_price ?? 0}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-booking mb-4 bg-light-blue">
                                            <div
                                                class="d-flex justify-content-between py-md-4 px-md-3 p-3"
                                            >
                                                <div class="d-flex align-items-center">
                            <span>
                              <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                              >
                                <path
                                    d="M17.74 22.75H6.26C3.77 22.75 1.75 20.73 1.75 18.24V11.51C1.75 9.02001 3.77 7 6.26 7H17.74C20.23 7 22.25 9.02001 22.25 11.51V12.95C22.25 13.36 21.91 13.7 21.5 13.7H19.48C19.13 13.7 18.81 13.83 18.58 14.07L18.57 14.08C18.29 14.35 18.16 14.72 18.19 15.1C18.25 15.76 18.88 16.29 19.6 16.29H21.5C21.91 16.29 22.25 16.63 22.25 17.04V18.23C22.25 20.73 20.23 22.75 17.74 22.75ZM6.26 8.5C4.6 8.5 3.25 9.85001 3.25 11.51V18.24C3.25 19.9 4.6 21.25 6.26 21.25H17.74C19.4 21.25 20.75 19.9 20.75 18.24V17.8H19.6C18.09 17.8 16.81 16.68 16.69 15.24C16.61 14.42 16.91 13.61 17.51 13.02C18.03 12.49 18.73 12.2 19.48 12.2H20.75V11.51C20.75 9.85001 19.4 8.5 17.74 8.5H6.26Z"
                                    fill="#9C9C9C"
                                />
                                <path
                                    d="M2.5 13.16C2.09 13.16 1.75 12.82 1.75 12.41V7.84006C1.75 6.35006 2.69 5.00001 4.08 4.47001L12.02 1.47001C12.84 1.16001 13.75 1.27005 14.46 1.77005C15.18 2.27005 15.6 3.08005 15.6 3.95005V7.75003C15.6 8.16003 15.26 8.50003 14.85 8.50003C14.44 8.50003 14.1 8.16003 14.1 7.75003V3.95005C14.1 3.57005 13.92 3.22003 13.6 3.00003C13.28 2.78003 12.9 2.73003 12.54 2.87003L4.6 5.87003C3.79 6.18003 3.24 6.97006 3.24 7.84006V12.41C3.25 12.83 2.91 13.16 2.5 13.16Z"
                                    fill="#9C9C9C"
                                />
                                <path
                                    d="M19.5985 17.8002C18.0885 17.8002 16.8085 16.6802 16.6885 15.2402C16.6085 14.4102 16.9085 13.6002 17.5085 13.0102C18.0185 12.4902 18.7185 12.2002 19.4685 12.2002H21.5485C22.5385 12.2302 23.2985 13.0102 23.2985 13.9702V16.0302C23.2985 16.9902 22.5385 17.7702 21.5785 17.8002H19.5985ZM21.5285 13.7002H19.4785C19.1285 13.7002 18.8085 13.8302 18.5785 14.0702C18.2885 14.3502 18.1485 14.7302 18.1885 15.1102C18.2485 15.7702 18.8785 16.3002 19.5985 16.3002H21.5585C21.6885 16.3002 21.8085 16.1802 21.8085 16.0302V13.9702C21.8085 13.8202 21.6885 13.7102 21.5285 13.7002Z"
                                    fill="#9C9C9C"
                                />
                                <path
                                    d="M14 12.75H7C6.59 12.75 6.25 12.41 6.25 12C6.25 11.59 6.59 11.25 7 11.25H14C14.41 11.25 14.75 11.59 14.75 12C14.75 12.41 14.41 12.75 14 12.75Z"
                                    fill="#9C9C9C"
                                />
                              </svg>
                            </span>
                                                    <span class="text-gray-2 dd-txt pe-2"
                                                    >

                                                        @lang('site.totalprice')
                            </span>
                                                </div>
                                                <div
                                                    class="text-gray-2 d-flex align-items-center justify-content-center summary-price"
                                              id="total"  >



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="col-12">
                                            <div class="card card-department round-border mb-3 p-3">
                                                <div class="row g-0">
                                                    <div class="col-lg-4 position-relative">
                                                        <div class="department-img">
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
                                                    <div class="col-lg-8">
                                                        <div class="card-body position-relative py-0">
                                                            <div
                                                                class="row justify-content-between align-items-center mb-3  mt-lg-0 mt-3 small"
                                                            >
                                                                <div class="col-auto">
                                      <span class="text-main number-ads"
                                      >@lang('site.id number'){{$aqar->id}})</span
                                      >
                                                                </div>
                                                                <div class="col-auto">
                                                                    <div
                                                                        class="d-flex justify-content-center align-items-center"
                                                                    >
                                                                        <div
                                                                            class="department-badge bg-main text-white">
                                                                            <div
                                                                                class="pt-1">{{$aqar->aqarReview->avg('rate') ?? 0 }}</div>
                                                                            <div>
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                     width="25" height="25"
                                                                                     viewBox="0 0 25 25" fill="none">
                                                                                    <path
                                                                                        d="M12.7529 19.6185L20.1689 24.3301L18.2009 15.4501L24.7529 9.47534L16.1249 8.70481L12.7529 0.330078L9.38093 8.70481L0.75293 9.47534L7.30493 15.4501L5.33693 24.3301L12.7529 19.6185Z"
                                                                                        fill="white"/>
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                        <div class="number-ads gray-txt">
                                                                            @lang('site.comments')
                                                                            {{$aqar->aqarComment->count() ?? 0 }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h2 class="card-title mb-2">
                                                                {{$aqar->details ?? ''}}
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
                                                                <span> {{$aqar->country->name ?? ''}} , {{$aqar->city->name ?? ''}}</span>
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
                                        <g
                                            clip-path="url(#clip0_421_12633)"
                                        >
                                          <path
                                              d="M8.243 3.03004C8.50026 3.09449 8.72137 3.2585 8.85771 3.48598C8.99405 3.71346 9.03444 3.98578 8.97 4.24304L4.97 20.243C4.94001 20.3724 4.88457 20.4944 4.80691 20.6021C4.72925 20.7098 4.63092 20.8009 4.51767 20.8702C4.40441 20.9395 4.2785 20.9855 4.14726 21.0056C4.01603 21.0257 3.88211 21.0195 3.75331 20.9873C3.62451 20.9551 3.50341 20.8976 3.39707 20.8181C3.29074 20.7386 3.2013 20.6387 3.13397 20.5243C3.06664 20.4099 3.02277 20.2832 3.00492 20.1516C2.98707 20.0201 2.9956 19.8863 3.03 19.758L7.03 3.75804C7.0618 3.63057 7.11842 3.51061 7.1966 3.40503C7.27478 3.29945 7.373 3.2103 7.48565 3.1427C7.5983 3.07509 7.72317 3.03034 7.85312 3.01101C7.98307 2.99168 8.11555 2.99815 8.243 3.03004ZM16.97 3.75704L20.97 19.757C21.0044 19.8853 21.0129 20.0191 20.9951 20.1506C20.9772 20.2822 20.9334 20.4089 20.866 20.5233C20.7987 20.6377 20.7093 20.7376 20.6029 20.8171C20.4966 20.8966 20.3755 20.9541 20.2467 20.9863C20.1179 21.0185 19.984 21.0247 19.8527 21.0046C19.7215 20.9845 19.5956 20.9385 19.4823 20.8692C19.3691 20.7999 19.2708 20.7088 19.1931 20.6011C19.1154 20.4934 19.06 20.3714 19.03 20.242L15.03 4.24204C14.9956 4.11381 14.9871 3.98001 15.0049 3.84845C15.0228 3.71689 15.0666 3.59021 15.134 3.47578C15.2013 3.36136 15.2907 3.26148 15.3971 3.18199C15.5034 3.10249 15.6245 3.04497 15.7533 3.01277C15.8821 2.98057 16.016 2.97434 16.1473 2.99444C16.2785 3.01454 16.4044 3.06058 16.5177 3.12986C16.6309 3.19914 16.7292 3.29028 16.8069 3.39796C16.8846 3.50564 16.94 3.6277 16.97 3.75704ZM12 17C12.2449 17.0001 12.4813 17.09 12.6644 17.2528C12.8474 17.4155 12.9643 17.6398 12.993 17.883L13 18V20C12.9997 20.2549 12.9021 20.5001 12.7272 20.6854C12.5522 20.8707 12.313 20.9823 12.0586 20.9972C11.8042 21.0121 11.5536 20.9294 11.3582 20.7658C11.1627 20.6022 11.0371 20.3701 11.007 20.117L11 20V18C11 17.7348 11.1054 17.4805 11.2929 17.2929C11.4804 17.1054 11.7348 17 12 17ZM12 10C12.2652 10 12.5196 10.1054 12.7071 10.2929C12.8946 10.4805 13 10.7348 13 11V13C13 13.2653 12.8946 13.5196 12.7071 13.7071C12.5196 13.8947 12.2652 14 12 14C11.7348 14 11.4804 13.8947 11.2929 13.7071C11.1054 13.5196 11 13.2653 11 13V11C11 10.7348 11.1054 10.4805 11.2929 10.2929C11.4804 10.1054 11.7348 10 12 10ZM12 3.00004C12.2449 3.00007 12.4813 3.08999 12.6644 3.25275C12.8474 3.41551 12.9643 3.63979 12.993 3.88304L13 4.00004V6.00004C12.9997 6.25492 12.9021 6.50007 12.7272 6.68541C12.5522 6.87074 12.313 6.98227 12.0586 6.99721C11.8042 7.01215 11.5536 6.92936 11.3582 6.76577C11.1627 6.60218 11.0371 6.37013 11.007 6.11704L11 6.00004V4.00004C11 3.73482 11.1054 3.48047 11.2929 3.29293C11.4804 3.10539 11.7348 3.00004 12 3.00004Z"
                                              fill="#FF8600"
                                          />
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_421_12633">
                                            <rect
                                                width="24"
                                                height="24"
                                                fill="white"
                                            />
                                          </clipPath>
                                        </defs></svg></span>
                                                                <span
                                                                    class="text-main position-department"
                                                                >


                                                                   {!! html_entity_decode($aqar->description) !!}


                                    </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card card-department round-border mb-3 p-3"
                                            >
                                                <h2 class="mb-3">@lang('site.Information that may interest you')</h2>
                                                <p class="mb-2 department-txt">
                                                    @lang('site.It may take a few days for the request to be approved')
                                                </p>
                                                <p class="department-txt">
                                                    @lang('site.A reservation deposit is required to confirm the reservation')
                                                </p>
                                            </div>
                                            <div class="card-booking mb-4">
                                                <div
                                                    class="d-flex justify-content-between py-md-4 px-md-3 p-3"
                                                >
                                                    <div class="d-flex align-items-center">
                              <span>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="32"
                                    height="32"
                                    viewBox="0 0 32 32"
                                    fill="none"
                                >
                                  <path
                                      d="M13.033 15.9997C12.233 15.9997 11.5663 15.6997 11.033 15.0997C10.4997 14.4997 10.2886 13.7997 10.3997 12.9997L10.833 9.73301C11.0108 8.46634 11.5886 7.41612 12.5663 6.58234C13.5441 5.74856 14.6886 5.33212 15.9997 5.33301C17.3108 5.33301 18.4552 5.7499 19.433 6.58368C20.4108 7.41745 20.9886 8.46723 21.1663 9.73301L21.5997 12.9997C21.7108 13.7997 21.4997 14.4997 20.9663 15.0997C20.433 15.6997 19.7663 15.9997 18.9663 15.9997H13.033ZM13.033 13.333H18.9663L18.533 10.133C18.4441 9.51079 18.161 8.99968 17.6837 8.59968C17.2063 8.19968 16.645 7.99968 15.9997 7.99968C15.3552 7.99968 14.7939 8.19968 14.3157 8.59968C13.8375 8.99968 13.5543 9.51079 13.4663 10.133L13.033 13.333ZM5.33301 26.6663V22.933C5.33301 22.1775 5.52767 21.4828 5.91701 20.849C6.30634 20.2152 6.82279 19.7321 7.46634 19.3997C8.84412 18.7108 10.2441 18.1939 11.6663 17.849C13.0886 17.5041 14.533 17.3321 15.9997 17.333C17.4663 17.333 18.9108 17.5055 20.333 17.8503C21.7552 18.1952 23.1552 18.7117 24.533 19.3997C25.1775 19.733 25.6943 20.2166 26.0837 20.8503C26.473 21.4841 26.6672 22.1783 26.6663 22.933V26.6663H5.33301ZM7.99967 23.9997H23.9997V22.933C23.9997 22.6886 23.9383 22.4663 23.8157 22.2663C23.693 22.0663 23.5321 21.9108 23.333 21.7997C22.133 21.1997 20.9219 20.7499 19.6997 20.4503C18.4775 20.1508 17.2441 20.0006 15.9997 19.9997C14.7552 19.9997 13.5219 20.1499 12.2997 20.4503C11.0775 20.7508 9.86634 21.2006 8.66634 21.7997C8.46634 21.9108 8.30501 22.0663 8.18234 22.2663C8.05967 22.4663 7.99879 22.6886 7.99967 22.933V23.9997Z"
                                      fill="#9C9C9C"
                                  />
                                </svg>
                              </span>
                                                        <h2 class="text-gray-2 pe-2 mb-0">
                                                            <a href="{{route('sitelogin')}}"
                                                               class="text-second">@lang('site.login')</a>
                                                            للحجز بتفاصيل محفوظه او
                                                            <a href="{{route('registers')}}"
                                                               class="text-second">    @lang('site.register') </a>
                                                            جديد
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center">
                          <span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="32"
                                height="32"
                                viewBox="0 0 32 32"
                                fill="none"
                            >
                              <path
                                  d="M14.667 24.0003H17.3337V21.3337H14.667V24.0003ZM16.0003 2.66699C14.2494 2.66699 12.5156 3.01187 10.8979 3.68193C9.2802 4.35199 7.81035 5.33412 6.57223 6.57223C4.07175 9.07272 2.66699 12.4641 2.66699 16.0003C2.66699 19.5365 4.07175 22.9279 6.57223 25.4284C7.81035 26.6665 9.2802 27.6487 10.8979 28.3187C12.5156 28.9888 14.2494 29.3337 16.0003 29.3337C19.5365 29.3337 22.9279 27.9289 25.4284 25.4284C27.9289 22.9279 29.3337 19.5365 29.3337 16.0003C29.3337 14.2494 28.9888 12.5156 28.3187 10.8979C27.6487 9.2802 26.6665 7.81035 25.4284 6.57223C24.1903 5.33412 22.7204 4.35199 21.1028 3.68193C19.4851 3.01187 17.7513 2.66699 16.0003 2.66699ZM16.0003 26.667C10.1203 26.667 5.33366 21.8803 5.33366 16.0003C5.33366 10.1203 10.1203 5.33366 16.0003 5.33366C21.8803 5.33366 26.667 10.1203 26.667 16.0003C26.667 21.8803 21.8803 26.667 16.0003 26.667ZM16.0003 8.00033C14.5858 8.00033 13.2293 8.56223 12.2291 9.56242C11.2289 10.5626 10.667 11.9192 10.667 13.3337H13.3337C13.3337 12.6264 13.6146 11.9481 14.1147 11.448C14.6148 10.9479 15.2931 10.667 16.0003 10.667C16.7076 10.667 17.3858 10.9479 17.8859 11.448C18.386 11.9481 18.667 12.6264 18.667 13.3337C18.667 16.0003 14.667 15.667 14.667 20.0003H17.3337C17.3337 17.0003 21.3337 16.667 21.3337 13.3337C21.3337 11.9192 20.7718 10.5626 19.7716 9.56242C18.7714 8.56223 17.4148 8.00033 16.0003 8.00033Z"
                                  fill="#9C9C9C"
                              />
                            </svg>
                          </span>
                                                <h2 class="text-second pe-2 mb-0">
                                                    @lang('site.If you have an inquiry')
                                                </h2>

                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control txtarea-booking px-3 py-2 mt-2"
                                                              placeholder="{{trans('site.If you have an inquiry')}}"
                                                              rows="4" name="note"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-content-wizard py-lg-5 pt-3" data-form-tab>
                                <div class="row">
                                    <div class="col-12">
                                    </div>
                                    <div class="col-12">
                                        <div
                                            class="booking-dd-btn d-flex align-items-center justify-content-center mb-1"
                                        >
                                            <a href="#">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path
                              d="M14 9.9V8.2C14.55 7.96667 15.1127 7.79167 15.688 7.675C16.2633 7.55833 16.8673 7.5 17.5 7.5C17.9333 7.5 18.3583 7.53333 18.775 7.6C19.1917 7.66667 19.6 7.75 20 7.85V9.45C19.6 9.3 19.1957 9.18733 18.787 9.112C18.3783 9.03667 17.9493 8.99933 17.5 9C16.8667 9 16.2583 9.07933 15.675 9.238C15.0917 9.39667 14.5333 9.61733 14 9.9ZM14 15.4V13.7C14.55 13.4667 15.1127 13.2917 15.688 13.175C16.2633 13.0583 16.8673 13 17.5 13C17.9333 13 18.3583 13.0333 18.775 13.1C19.1917 13.1667 19.6 13.25 20 13.35V14.95C19.6 14.8 19.1957 14.6873 18.787 14.612C18.3783 14.5367 17.9493 14.4993 17.5 14.5C16.8667 14.5 16.2583 14.575 15.675 14.725C15.0917 14.875 14.5333 15.1 14 15.4ZM14 12.65V10.95C14.55 10.7167 15.1127 10.5417 15.688 10.425C16.2633 10.3083 16.8673 10.25 17.5 10.25C17.9333 10.25 18.3583 10.2833 18.775 10.35C19.1917 10.4167 19.6 10.5 20 10.6V12.2C19.6 12.05 19.1957 11.9373 18.787 11.862C18.3783 11.7867 17.9493 11.7493 17.5 11.75C16.8667 11.75 16.2583 11.8293 15.675 11.988C15.0917 12.1467 14.5333 12.3673 14 12.65ZM6.5 16C7.28333 16 8.046 16.0877 8.788 16.263C9.53 16.4383 10.2673 16.7007 11 17.05V7.2C10.3167 6.8 9.59167 6.5 8.825 6.3C8.05833 6.1 7.28333 6 6.5 6C5.9 6 5.304 6.05833 4.712 6.175C4.12 6.29167 3.54933 6.46667 3 6.7V16.6C3.58333 16.4 4.16267 16.25 4.738 16.15C5.31333 16.05 5.90067 16 6.5 16ZM13 17.05C13.7333 16.7 14.4707 16.4373 15.212 16.262C15.9533 16.0867 16.716 15.9993 17.5 16C18.1 16 18.6877 16.05 19.263 16.15C19.8383 16.25 20.4173 16.4 21 16.6V6.7C20.45 6.46667 19.879 6.29167 19.287 6.175C18.695 6.05833 18.0993 6 17.5 6C16.7167 6 15.9417 6.1 15.175 6.3C14.4083 6.5 13.6833 6.8 13 7.2V17.05ZM12 20C11.2 19.3667 10.3333 18.875 9.4 18.525C8.46667 18.175 7.5 18 6.5 18C5.8 18 5.11233 18.0917 4.437 18.275C3.76167 18.4583 3.116 18.7167 2.5 19.05C2.15 19.2333 1.81267 19.225 1.488 19.025C1.16333 18.825 1.00067 18.5333 1 18.15V6.1C1 5.91667 1.046 5.74167 1.138 5.575C1.23 5.40833 1.36733 5.28333 1.55 5.2C2.31667 4.8 3.11667 4.5 3.95 4.3C4.78333 4.1 5.63333 4 6.5 4C7.46667 4 8.41267 4.125 9.338 4.375C10.2633 4.625 11.1507 5 12 5.5C12.85 5 13.7377 4.625 14.663 4.375C15.5883 4.125 16.534 4 17.5 4C18.3667 4 19.2167 4.1 20.05 4.3C20.8833 4.5 21.6833 4.8 22.45 5.2C22.6333 5.28333 22.771 5.40833 22.863 5.575C22.955 5.74167 23.0007 5.91667 23 6.1V18.15C23 18.5333 22.8377 18.825 22.513 19.025C22.1883 19.225 21.8507 19.2333 21.5 19.05C20.8833 18.7167 20.2377 18.4583 19.563 18.275C18.8883 18.0917 18.2007 18 17.5 18C16.5 18 15.5333 18.175 14.6 18.525C13.6667 18.875 12.8 19.3667 12 20Z"
                              fill="white"/>
                          </svg>
                      </span>
                                                <span class="pe-2">@lang('site.My bookings')</span>
                                                <span class="pe-3">
                        <i class="fas fa-chevron-left"></i>
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                <input type="hidden" name="aqar_id" value="{{$aqar->id}}" class="aqar_id">
                                <div class="row" id="mybookinghidden">
                                    <div class="col-12">

                                        {{--                                        //foreachbooking--}}

                                        @foreach($bookings as $book)
                                            @if(!empty($book->aqar))
                                                <div
                                                    class="card card-department round-border mb-4  p-md-3 p-2"
                                                >
                                                    <div class="row g-0">
                                                        <div class="col-lg-3 position-relative">
                                                            <div class="epartment-img-carousel">
                                                                <div>
                                                                    <img
                                                                        loading="lazy"

                                                                        src="{{asset('images/cars/'.$book->aqar->main_image)}}"
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
                                > @lang('site.id number')({{$book->aqar->id}})</span
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
                                                                                {{$book->aqar->aqarComment->count() ?? 0}} @lang('site.comments')
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h2 class="card-title mb-2">
                                                                    {{$book->aqar->name ?? ''}}
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
                                                                    <span>{{$book->aqar->country->name ?? ''}},{{$book->aqar->city->name ?? ''}} </span>
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
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                        >
                                          <path
                                              d="M17.74 22.75H6.26C3.77 22.75 1.75 20.73 1.75 18.24V11.51C1.75 9.02001 3.77 7 6.26 7H17.74C20.23 7 22.25 9.02001 22.25 11.51V12.95C22.25 13.36 21.91 13.7 21.5 13.7H19.48C19.13 13.7 18.81 13.83 18.58 14.07L18.57 14.08C18.29 14.35 18.16 14.72 18.19 15.1C18.25 15.76 18.88 16.29 19.6 16.29H21.5C21.91 16.29 22.25 16.63 22.25 17.04V18.23C22.25 20.73 20.23 22.75 17.74 22.75ZM6.26 8.5C4.6 8.5 3.25 9.85001 3.25 11.51V18.24C3.25 19.9 4.6 21.25 6.26 21.25H17.74C19.4 21.25 20.75 19.9 20.75 18.24V17.8H19.6C18.09 17.8 16.81 16.68 16.69 15.24C16.61 14.42 16.91 13.61 17.51 13.02C18.03 12.49 18.73 12.2 19.48 12.2H20.75V11.51C20.75 9.85001 19.4 8.5 17.74 8.5H6.26Z"
                                              fill="#FF8600"
                                          ></path>
                                          <path
                                              d="M2.5 13.16C2.09 13.16 1.75 12.82 1.75 12.41V7.84006C1.75 6.35006 2.69 5.00001 4.08 4.47001L12.02 1.47001C12.84 1.16001 13.75 1.27005 14.46 1.77005C15.18 2.27005 15.6 3.08005 15.6 3.95005V7.75003C15.6 8.16003 15.26 8.50003 14.85 8.50003C14.44 8.50003 14.1 8.16003 14.1 7.75003V3.95005C14.1 3.57005 13.92 3.22003 13.6 3.00003C13.28 2.78003 12.9 2.73003 12.54 2.87003L4.6 5.87003C3.79 6.18003 3.24 6.97006 3.24 7.84006V12.41C3.25 12.83 2.91 13.16 2.5 13.16Z"
                                              fill="#FF8600"
                                          ></path>
                                          <path
                                              d="M19.5995 17.8002C18.0895 17.8002 16.8095 16.6802 16.6895 15.2402C16.6095 14.4102 16.9095 13.6002 17.5095 13.0102C18.0195 12.4902 18.7195 12.2002 19.4695 12.2002H21.5495C22.5395 12.2302 23.2995 13.0102 23.2995 13.9702V16.0302C23.2995 16.9902 22.5395 17.7702 21.5795 17.8002H19.5995ZM21.5295 13.7002H19.4795C19.1295 13.7002 18.8095 13.8302 18.5795 14.0702C18.2895 14.3502 18.1495 14.7302 18.1895 15.1102C18.2495 15.7702 18.8795 16.3002 19.5995 16.3002H21.5595C21.6895 16.3002 21.8095 16.1802 21.8095 16.0302V13.9702C21.8095 13.8202 21.6895 13.7102 21.5295 13.7002Z"
                                              fill="#FF8600"
                                          ></path>
                                          <path
                                              d="M14 12.75H7C6.59 12.75 6.25 12.41 6.25 12C6.25 11.59 6.59 11.25 7 11.25H14C14.41 11.25 14.75 11.59 14.75 12C14.75 12.41 14.41 12.75 14 12.75Z"
                                              fill="#FF8600"
                                          ></path>
                                        </svg>
                                      </span>
                                                                                    <span class="text-gray-2 pe-1 ps-2"
                                                                                    > @lang('site.Reservation deposit'):
                                      </span>
                                                                                </div>
                                                                                <div
                                                                                    class="text-gray-2 d-flex align-items-center justify-content-center fw-bold span-14"
                                                                                >
                                                                                    {{$aqar->fixed_price ?? 0}}
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
                                        حالة الحجز:
                                      </span>
                                                                                    <span class="px-1">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="20"
                                            height="20"
                                            viewBox="0 0 20 20"
                                            fill="none"
                                        >
                                          <path
                                              d="M20 3.83317L15.4 0L14.11 1.51936L18.71 5.35253L20 3.83317ZM5.88 1.51936L4.6 0L0 3.82324L1.29 5.3426L5.88 1.51936ZM10.5 6.09732H9V12.0556L13.75 14.8858L14.5 13.6643L10.5 11.3108V6.09732ZM10 2.12512C5.03 2.12512 1 6.12711 1 11.0626C1 15.998 5.02 20 10 20C12.3869 20 14.6761 19.0584 16.364 17.3823C18.0518 15.7062 19 13.4329 19 11.0626C19 8.69221 18.0518 6.41893 16.364 4.74284C14.6761 3.06674 12.3869 2.12512 10 2.12512ZM10 18.0139C6.13 18.0139 3 14.9057 3 11.0626C3 7.21946 6.13 4.11122 10 4.11122C13.87 4.11122 17 7.21946 17 11.0626C17 14.9057 13.87 18.0139 10 18.0139Z"
                                              fill="#FF8600"
                                          ></path>
                                        </svg>
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


                                    </div>
                                </div>
                                <div id="mybooking1" class="row">
                                </div>
                            </div>

                            <div class="d-sm-flex align-items-center justify-content-between wizaredd">
                                <button
                                    class="booking-now-btn "
                                    type="button"
                                    data-btn-previous="true"
                                >
                                    @lang('site.previous')
                                    <span class="pe-3"
                                    > <i class="fas fa-chevron-left"></i></span>
                                </button>
                                <button
                                    class="booking-now-btn "
                                    type="button"
                                    data-btn-next="true"
                                >
                                    @lang('site.next')
                                    <span class="pe-3"
                                    > <i class="fas fa-chevron-left"></i></span>
                                </button>
                                <button
                                    class="booking-now-btn"
                                    type="button"
                                    data-btn-submit="true"
                                    type="submit" id="btn-submit"
                                >
                                    @lang('site.save')
                                    <span class="pe-3">
                        <i class="fas fa-chevron-left"></i>
                        </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- /section -->
    </main>

@endsection

@section('scripts')


    <script>


        jQuery('.deliverydate').change(function (e) {
            // console.log('e',e);
            // console.log("delivery_date",jQuery(".delivery_date").val());
            // console.log("reciept_date",jQuery('.reciept_date').val());
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            jQuery.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},

                url: "{{ route('countDaysbetweendates') }}",
                method: 'get',
                data: {
                    _token: '{{ csrf_token() }}',

                    delivery_date: jQuery(".deliverydate").val(),

                    reciept_date: jQuery('.reciept_date').val(),

                    'aqar_id':jQuery('.aqar_id').val(),

                },
                success: function (result) {


                    $('#daycount').html(result.data.days)
                    $('#total').html(result.data.total)

                    console.log(result);


                },
                error: function (result) {
                    // console.log(result.responseJSON);
                    var errors = result.responseJSON;
                    var errorsList = "";
                    $.each(errors, function (_, value) {
                        $.each(value, function (_, fieldErrors) {
                            fieldErrors.forEach(function (error) {
                                errorsList += "<li style='color:#e81f1f'>" + error + "</li>";
                            })
                        });
                    });
                    $('.register_errorsSrate').html(errorsList);


                }
            });
        });


    </script>


    <script>

        $(document).ready(function () {
            $("#btn-submit").click(function (e) {
                console.log("bookingssss");
                var formData = $("#add-form").serialize();
                console.log('formData', formData);
                var url = '{{route('addbookingaquars')}}';
                $.ajax({
                    type: "GET",
                    url: url,
                    data: formData,
                    dataType: "json",
                    encode: true,
                }).done(function (data) {
                    // console.log("datadata", data);
                    $("#mybookinghidden").hide();
                    //
                    // $("#mybooking1").show();
                    $("#mybooking1").html(data);
                    console.log("response", data);
                });

                e.preventDefault();
            });
        });

    </script>

@endsection
