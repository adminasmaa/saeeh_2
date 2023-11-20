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
                            <a href="{{route('Home')}}"> @lang('site.home')</a>
                        </li>
                        <li class="breadcrumb-item text-gray-4" aria-current="page">
                            @lang('site.Reservation information')

                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- section -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="mb-3 text-gray-2"> @lang('site.details')</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="col-12">
                            <div class="card card-department round-border mb-4 p-md-3 p-2">
                                <div class="row g-0">
                                    <div class="col-md-4 position-relative">
                                        <div class="epartment-img-carousel">
                                            <div>
                                                <img
                                                    loading="lazy"
                                                    src="{{asset('images/aqars/'.$booking->aqar->main_image)}}"

                                                    onerror="this.src='{{FRONTASSETS}}/images/department-3.svg'"
                                                    class="department-img-list of-cover"
                                                    alt="image 1"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body position-relative py-0">
                                            <div
                                                class="row justify-content-lg-between align-items-center mb-3 small mt-md-0 mt-3">
                                                <div class="col-lg-4 mb-lg-0 mb-3">
                                                    <div class="text-main number-ads">
                                                        @lang('site.id number')({{$booking->aqar->id}})
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="d-flex justify-content-lg-end align-items-center">
                                                        <div class="department-badge bg-main text-white">
                                                            <div
                                                                class="pt-1">{{ round($booking->aqar->aqarReview->avg('rate')) ?? 0 }}</div>
                                                            <div>
                                                            <i class="fas fa-star"></i>
                                                            </div>
                                                        </div>
                                                        <div class="number-ads gray-txt">

                                                            {{$booking->aqar->aqarComment->count() ?? 0}} @lang('site.comments')
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h2 class="card-title mb-2">
                                                {{$booking->aqar->name ??''}}
                                            </h2>

                                            <div class="gray-txt number-ads">
                                            <i class="far fa-map-marker-alt"></i>
                                                <span>{{$booking->aqar->country->name ??''}}, {{$booking->aqar->city->name ??''}} </span>
                                            </div>
                                            <div class="py-3">
                                              <span class="booking-icon"><i class="far fa-road text-main"></i></span>
                                                <span class="text-main position-department">
                                            {{$booking->aqar->details ??''}}
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-department round-border mb-4 p-3">
                                <h2 class="mb-3">   @lang('site.Information that may interest you') </h2>
                                <div class="card card-department round-border p-3">
                                    <h2 class="text-gray-2">@lang('site.basic information')</h2>
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center">
                                        <span class="booking-icon"> 
                                        <i class="far fa-user"></i>
                                        </span>
                                            <span class="text-second dd-txt px-2"
                                            > @lang('site.name'):
                                          </span>
                                        </div>
                                        <div class="text-gray-2 d-flex align-items-center booking-info-txt">
                                            {{$booking->user->firstname ?? ''}}
                                        </div>
                                    </div>
                                    <div class="d-flex pt-3">
                                        <div
                                            class="call-btn d-flex align-items-center justify-content-center mb-1"
                                        >
                                            <a href="#">
                                                <span>
                                                <i class="far fa-phone"></i>
                                                </span>
                                                <span class="pe-1">اتصال</span>
                                            </a>
                                        </div>
                                        <div
                                            class="cancle-btn d-flex align-items-center justify-content-center mb-1"
                                        >
                                            <a href="#"
                                               data-bs-toggle="modal"
                                               data-bs-target="#cancelBookingModal">
                                                <span>الغاء الحجز</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-department round-border mb-4 p-3">
                                <h2 class="mb-3"> @lang('site.Information that may interest you')</h2>
                                <p class="mb-2 department-txt">
                                    @lang('site.It may take a few days for the request to be approved')
                                </p>
                                <p class="department-txt">@lang('site.A reservation deposit is required to confirm the reservation')</p>
                            </div>
                            <div>
                                <a class="text-second h2 booking-link">@lang('site.conditionBooking') </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="card-booking mb-5">
                            <div class="d-sm-flex justify-content-sm-between py-md-4 px-md-3 p-3">
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
                              <rect width="20" height="20" fill="white"/>
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                                        <span class="text-second dd-txt pe-2">
                    @lang('site.time_from')
                      </span>
                                    </div>
                                    <div class="card-booking p-3 text-center">
                                        {{--                                        <h2 class="mb-0 lh-1">22</h2>--}}
                                        {{--                                        <div>مارس</div>--}}
                                        <div class="text-gray-4 pt-1"> {{$booking->aqar->time_from ??''}}</div>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center pb-3 mt-md-0 mt-3">
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
                              <rect width="20" height="20" fill="white"/>
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                                        <span class="text-second dd-txt pe-2 "
                                        >   @lang('site.time_to')</span
                                        >
                                    </div>
                                    <div class="card-booking p-3 text-center">

                                        <div class="text-gray-4 pt-1">{{$booking->aqar->time_to ??''}}</div>
                                    </div>
                                </div>
                            </div>
                            <hr class="hr-saeeh my-0"/>
                            <div class="d-flex justify-content-between py-1 px-3">
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
                                    <span class="text-second dd-txt pe-2">  @lang('site.hallnumber') </span>
                                </div>
                                <div
                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                >
                                    {{$booking->aqar->hallnumber ?? 0}}
                                </div>
                            </div>
                            <hr class="hr-saeeh my-0"/>
                            <div class="d-flex justify-content-between py-1 px-3">
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
                                    <span class="text-second dd-txt pe-2">  @lang('site.personnumber') </span>
                                </div>
                                <div
                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                >
                                    {{$booking->aqar->personnumber ?? 0}}
                                </div>
                            </div>
                            <hr class="hr-saeeh my-0"/>
                            <div class="d-flex justify-content-between py-1 px-3">
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
                                    <span class="text-second dd-txt pe-2"> @lang('site.day_count') </span>
                                </div>
                                <div
                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                >
                                    {{$booking->day_count ?? 0}}
                                </div>
                            </div>
                            <hr class="hr-saeeh my-0"/>
                            <div class="d-flex justify-content-between py-1 px-3">
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
                                    <span class="text-second dd-txt pe-2"> @lang('site.visit_count')</span>
                                </div>
                                <div
                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                >
                                    {{$booking->visit_count ?? 0}}
                                </div>
                            </div>
                        </div>

                        <div class="card-booking mb-4">
                            <div class="d-flex justify-content-between py-1 px-3">
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
                                    <span class="text-second dd-txt pe-2">@lang('site.country')</span>
                                </div>
                                <div
                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                >
                                    {{$booking->aqar->country->name ?? ''}}
                                </div>
                            </div>
                            <hr class="hr-saeeh my-0"/>
                            <div class="d-flex justify-content-between py-1 px-3">
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
                                    <span class="text-second dd-txt pe-2"> @lang('site.normalroom')  </span>
                                </div>
                                <div
                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                >
                                    {{$booking->aqar->normalroom ?? ''}}
                                </div>
                            </div>
                            <hr class="hr-saeeh my-0"/>
                            <div class="d-flex justify-content-between py-1 px-3">
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
                                    <span class="text-second dd-txt pe-2"> @lang('site.masterroom') </span>
                                </div>
                                <div
                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                >
                                    {{$booking->aqar->masterroom  ?? 0}}
                                </div>
                            </div>
                            <hr class="hr-saeeh my-0"/>
                            <div class="d-flex justify-content-between py-1 px-3">
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
                                    >@lang('site.bathroomnumber')
                    </span>
                                </div>
                                <div
                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                >
                                    {{$booking->aqar->bathroomnumber  ?? 0}}

                                </div>
                            </div>
                            <hr class="hr-saeeh my-0"/>
                            <div class="d-flex justify-content-between py-1 px-3">
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
                                    <span class="text-second dd-txt pe-2"> @lang('site.unitnumber') </span>
                                </div>
                                <div
                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                >
                                    {{$booking->aqar->unitnumber  ?? 0}}
                                </div>
                            </div>
                            <hr class="hr-saeeh my-0"/>
                        </div>
                        <h2 class="mb-3 text-gray-2"> @lang('site.Price summary')</h2>
                        <div class="card-booking mb-4">
                            <div class="d-flex justify-content-between py-1 px-3">
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
                                    <span class="text-second dd-txt pe-2"> @lang('site.price')</span>
                                </div>
                                <div
                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                >
                                    {{$booking->aqar->fixed_price  ?? 0}}
                                </div>
                            </div>
                            <hr class="hr-saeeh my-0"/>
                            <div class="d-flex justify-content-between py-1 px-3">
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
                                    <span class="text-second dd-txt pe-2">@lang('site.price') </span>
                                </div>
                                <div
                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                >
                                    {{$booking->aqar->fixed_price  ?? 0}}                                </div>
                            </div>
                        </div>
                        <div class="card-booking mb-4 bg-light-orange">
                            <div class="d-flex justify-content-between py-1 px-3">
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
                                    <span class="text-gray-2 dd-txt pe-2"> @lang('site.Reservation deposit') </span>
                                </div>
                                <div
                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                >
                                    {{$booking->aqar->fixed_price  ?? 0}}
                                </div>
                            </div>
                        </div>
                        <div class="card-booking mb-4 bg-light-blue">
                            <div class="d-md-flex justify-content-md-between py-lg-4 px-lg-3 p-3">
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
                                    <span class="text-gray-2 dd-txt pe-2"> @lang('site.totalprice') </span>
                                </div>
                                <div
                                    class="text-gray-2 d-md-flex align-items-center justify-content-md-center summary-price"
                                >
                              {{$booking->total_price ?? 0}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /section -->


        <!-- Modal Register -->
        <!-- Modal cancel booking -->
        <div
            class="modal fade modal-custom modal-height-mobile"
            id="cancelBookingModal"
            tabindex="-1"
            aria-labelledby="cancelBookingModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog">
                <div class="modal-content cancel-booking-content">
                    <button
                        type="button"
                        class="close-modal d-flex justify-content-center align-items-center"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="32"
                            height="32"
                            viewBox="0 0 32 32"
                            fill="none"
                        >
                            <path
                                d="M24.3998 7.61339C24.2765 7.48978 24.1299 7.39172 23.9686 7.32481C23.8073 7.2579 23.6344 7.22346 23.4598 7.22346C23.2852 7.22346 23.1123 7.2579 22.951 7.32481C22.7897 7.39172 22.6432 7.48978 22.5198 7.61339L15.9998 14.1201L9.47981 7.60005C9.35637 7.47661 9.20982 7.37869 9.04853 7.31188C8.88725 7.24508 8.71438 7.21069 8.53981 7.21069C8.36524 7.21069 8.19237 7.24508 8.03109 7.31188C7.8698 7.37869 7.72325 7.47661 7.59981 7.60005C7.47637 7.7235 7.37845 7.87004 7.31164 8.03133C7.24483 8.19261 7.21045 8.36548 7.21045 8.54005C7.21045 8.71463 7.24483 8.88749 7.31164 9.04878C7.37845 9.21006 7.47637 9.35661 7.59981 9.48005L14.1198 16.0001L7.59981 22.5201C7.47637 22.6435 7.37845 22.79 7.31164 22.9513C7.24483 23.1126 7.21045 23.2855 7.21045 23.4601C7.21045 23.6346 7.24483 23.8075 7.31164 23.9688C7.37845 24.1301 7.47637 24.2766 7.59981 24.4001C7.72325 24.5235 7.8698 24.6214 8.03109 24.6882C8.19237 24.755 8.36524 24.7894 8.53981 24.7894C8.71438 24.7894 8.88725 24.755 9.04853 24.6882C9.20982 24.6214 9.35637 24.5235 9.47981 24.4001L15.9998 17.8801L22.5198 24.4001C22.6433 24.5235 22.7898 24.6214 22.9511 24.6882C23.1124 24.755 23.2852 24.7894 23.4598 24.7894C23.6344 24.7894 23.8072 24.755 23.9685 24.6882C24.1298 24.6214 24.2764 24.5235 24.3998 24.4001C24.5233 24.2766 24.6212 24.1301 24.688 23.9688C24.7548 23.8075 24.7892 23.6346 24.7892 23.4601C24.7892 23.2855 24.7548 23.1126 24.688 22.9513C24.6212 22.79 24.5233 22.6435 24.3998 22.5201L17.8798 16.0001L24.3998 9.48005C24.9065 8.97339 24.9065 8.12005 24.3998 7.61339Z"
                                fill="white"
                            />
                        </svg>
                    </button>

                    <div
                        class="modal-body cancel-booking-body "
                    >
                        <div class="text-center my-3 ">
                            <div
                                class="row d-flex justify-content-center align-items-center h-100"
                            >
                                <div class="col-md-10 col-10 my-lg-5 my-2">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="171" height="171"
                                             viewBox="0 0 171 171" fill="none">
                                            <path
                                                d="M85.5 0C68.5897 0 52.0592 5.01449 37.9988 14.4093C23.9384 23.8042 12.9796 37.1575 6.50834 52.7806C0.0370458 68.4036 -1.65614 85.5948 1.6429 102.18C4.94193 118.766 13.085 134 25.0424 145.958C36.9998 157.915 52.2344 166.058 68.8198 169.357C85.4052 172.656 102.596 170.963 118.219 164.492C133.843 158.02 147.196 147.062 156.591 133.001C165.986 118.941 171 102.41 171 85.5C171 62.824 161.992 41.0767 145.958 25.0424C129.923 9.00801 108.176 0 85.5 0ZM94.05 136.8H76.95V119.7H94.05V136.8ZM94.05 102.6H76.95V34.2H94.05V102.6Z"
                                                fill="#E75119"/>
                                        </svg>
                                    </div>




                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">

                                                <ul class="booking_errorsS"></ul>
                                            </div>
                                        </div>
                                    </div>
                                    <h2 class="fw-bold cancel-booking-title my-3">@lang('site.Do you want to cancel your reservation?') </h2>

                                    <div class="form-group">
                                        <textarea class="form-control txtarea-booking px-3 py-2 mt-2 round-border canclereason"
                                                  placeholder="{{trans('site.Do you want to cancel your reservation?')}}"
                                                  rows="4" name="cancle_reason" id="cancle_reason"></textarea>

                                        <input type="hidden" name="booking_id" value="{{$booking->id}}" class="booking" id="booking_id">
                                    </div>

                                    <div class="d-flex pt-3 justify-content-end">
                                        <div class="call-btn d-flex align-items-center justify-content-center bg-main">
                                            <a data-bs-dismiss="modal"
                                               aria-label="Close">
                                                @lang('site.back')
                                            </a>
                                        </div>
                                        <div class="cancle-btn d-flex align-items-center justify-content-center">
                                            <button   class="cancelreasonAqars">
                                                <span> @lang('site.cancle_reason')</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Login -->


    </main>

@endsection

@section('scripts')







    <script>


        jQuery('.cancelreasonAqars').click(function (e) {
            // console.log("daaaa");
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            jQuery.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},

                url: "{{ route('addcancelbooking') }}",
                method: 'post',
                data: {
                    _token: '{{ csrf_token() }}',
                    booking: jQuery('.booking').val(),
                    canclereason: jQuery('.canclereason').val(),



                },
                success: function (result) {
                    console.log(result);

                    if (result.content == 'success')



                        swal({
                            title: "Success!",
                            text: "The booking aquar  has been  cancel successfully !",
                            type: "success",
                            confirmButtonText: "OK"
                        });

                    setTimeout(function () {
                        Swal.close()
                    }, 2000)

                    // var booking = jQuery('.booking').val();
                    window.location.href = '{{route('mybookingAll')}}';

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
                    $('.booking_errorsS').html(errorsList);


                }
            });
        });

    </script>




@endsection
