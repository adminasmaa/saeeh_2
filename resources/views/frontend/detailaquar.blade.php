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
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)"> {{$aquar->name ?? ''}} </a>
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
                            @lang('site.details')
                        </li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="py-4">
            <div class="container">
                <div class="row" id="slideshow">
                    <div class="col-lg-10">
                        <div id="slides">
                            <div class="slide show" data-slide="1">
                                <img src="{{FRONTASSETS}}/images/main-image-slide.png" alt="department"/>
                            </div>

                            <div class="slide" data-slide="2">
                                <img src="{{FRONTASSETS}}/images/side-image-1.png" alt="department"/>
                            </div>

                            <div class="slide" data-slide="3">
                                <img src="{{FRONTASSETS}}/images/side-image-2.png" alt="department"/>
                            </div>
                            <div class="slide" data-slide="4">
                                <img src="{{FRONTASSETS}}/images/main-image-slide.png" alt="department"/>
                            </div>
                            <div class="slide-btn next-slide">
                  <span>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="26"
                        height="25"
                        viewBox="0 0 26 25"
                        fill="none"
                    >
                      <path
                          d="M9.838 3.84508L18.297 12.2108C18.3974 12.3104 18.4688 12.4185 18.5113 12.535C18.5538 12.6515 18.575 12.7764 18.5748 12.9097C18.5754 13.0431 18.5552 13.1681 18.5144 13.285C18.4735 13.4018 18.4029 13.5104 18.3027 13.6108L9.91192 22.0699C9.67953 22.3042 9.38834 22.4221 9.03835 22.4235C8.68835 22.4249 8.38784 22.3011 8.13683 22.0521C7.88582 21.8031 7.75964 21.512 7.75829 21.1787C7.75693 20.8453 7.88075 20.5532 8.12973 20.3021L15.4499 12.9224L8.07011 5.60227C7.83583 5.36988 7.718 5.08269 7.71661 4.7407C7.71523 4.3987 7.83903 4.10253 8.08801 3.85218C8.337 3.60117 8.62815 3.47499 8.96148 3.47364C9.29481 3.47228 9.58699 3.5961 9.838 3.84508Z"
                          fill="#FF8600"
                      />
                    </svg>
                  </span>
                            </div>

                            <div class="slide-btn prev-slide">
                  <span
                  ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="25"
                          viewBox="0 0 24 25"
                          fill="none"
                      >
                      <path
                          d="M15.1248 21.9267L6.69982 13.5267C6.59982 13.4267 6.52882 13.3184 6.48682 13.2017C6.44482 13.085 6.42415 12.96 6.42482 12.8267C6.42482 12.6934 6.44549 12.5684 6.48682 12.4517C6.52815 12.335 6.59915 12.2267 6.69982 12.1267L15.1248 3.70168C15.3582 3.46835 15.6498 3.35168 15.9998 3.35168C16.3498 3.35168 16.6498 3.47668 16.8998 3.72668C17.1498 3.97668 17.2748 4.26835 17.2748 4.60168C17.2748 4.93502 17.1498 5.22668 16.8998 5.47668L9.54982 12.8267L16.8998 20.1767C17.1332 20.41 17.2498 20.6977 17.2498 21.0397C17.2498 21.3817 17.1248 21.6774 16.8748 21.9267C16.6248 22.1767 16.3332 22.3017 15.9998 22.3017C15.6665 22.3017 15.3748 22.1767 15.1248 21.9267Z"
                          fill="#FF8600"
                      /></svg></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2  gallery-list-mobile">
                        <div id="gallery">
                            <div class="thumbnail" data-slide="1">
                                <img src="{{FRONTASSETS}}/images/main-image-slide.png" alt="department"/>
                            </div>

                            <div class="thumbnail" data-slide="2">
                                <img src="{{FRONTASSETS}}/images/side-image-1.png" alt="department"/>
                            </div>

                            <div class="thumbnail" data-slide="3">
                                <img src="{{FRONTASSETS}}/images/side-image-2.png" alt="department"/>
                            </div>

                            <div class="thumbnail" data-slide="4">
                                <img src="{{FRONTASSETS}}/images/main-image-slide.png" alt="department"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-8 col-md-6">
                        <div
                            class="badge-ads-details bg-main round-border d-flex align-items-center justify-content-center"
                        >
                            @lang('site.id number')({{$aquar->id ?? 0}})
                        </div>
                        <h2 class="pt-3">{{$aquar->name ?? ''}}</h2>
                        <div class="d-flex align-items-center mt-3">
                            <div class="department-badge bg-main text-white">
                                <div class="pt-1">{{$aquar->aqarReview->avg('rate')}}</div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                                         fill="none">
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
                    <div class="col-lg-4 col-md-6">
                        <div class="details-box mb-4 mt-lg-0 mt-3">
                            <div class="pb-2 p-3 d-flex align-items-center">
                                <div class="details-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none">
                                        <path
                                            d="M17.74 22.75H6.26C3.77 22.75 1.75 20.73 1.75 18.24V11.51C1.75 9.02001 3.77 7 6.26 7H17.74C20.23 7 22.25 9.02001 22.25 11.51V12.95C22.25 13.36 21.91 13.7 21.5 13.7H19.48C19.13 13.7 18.81 13.83 18.58 14.07L18.57 14.08C18.29 14.35 18.16 14.72 18.19 15.1C18.25 15.76 18.88 16.29 19.6 16.29H21.5C21.91 16.29 22.25 16.63 22.25 17.04V18.23C22.25 20.73 20.23 22.75 17.74 22.75ZM6.26 8.5C4.6 8.5 3.25 9.85001 3.25 11.51V18.24C3.25 19.9 4.6 21.25 6.26 21.25H17.74C19.4 21.25 20.75 19.9 20.75 18.24V17.8H19.6C18.09 17.8 16.81 16.68 16.69 15.24C16.61 14.42 16.91 13.61 17.51 13.02C18.03 12.49 18.73 12.2 19.48 12.2H20.75V11.51C20.75 9.85001 19.4 8.5 17.74 8.5H6.26Z"
                                            fill="#FF8600"/>
                                        <path
                                            d="M2.5 13.16C2.09 13.16 1.75 12.82 1.75 12.41V7.84006C1.75 6.35006 2.69 5.00001 4.08 4.47001L12.02 1.47001C12.84 1.16001 13.75 1.27005 14.46 1.77005C15.18 2.27005 15.6 3.08005 15.6 3.95005V7.75003C15.6 8.16003 15.26 8.50003 14.85 8.50003C14.44 8.50003 14.1 8.16003 14.1 7.75003V3.95005C14.1 3.57005 13.92 3.22003 13.6 3.00003C13.28 2.78003 12.9 2.73003 12.54 2.87003L4.6 5.87003C3.79 6.18003 3.24 6.97006 3.24 7.84006V12.41C3.25 12.83 2.91 13.16 2.5 13.16Z"
                                            fill="#FF8600"/>
                                        <path
                                            d="M19.5995 17.8002C18.0895 17.8002 16.8095 16.6802 16.6895 15.2402C16.6095 14.4102 16.9095 13.6002 17.5095 13.0102C18.0195 12.4902 18.7195 12.2002 19.4695 12.2002H21.5495C22.5395 12.2302 23.2995 13.0102 23.2995 13.9702V16.0302C23.2995 16.9902 22.5395 17.7702 21.5795 17.8002H19.5995ZM21.5295 13.7002H19.4795C19.1295 13.7002 18.8095 13.8302 18.5795 14.0702C18.2895 14.3502 18.1495 14.7302 18.1895 15.1102C18.2495 15.7702 18.8795 16.3002 19.5995 16.3002H21.5595C21.6895 16.3002 21.8095 16.1802 21.8095 16.0302V13.9702C21.8095 13.8202 21.6895 13.7102 21.5295 13.7002Z"
                                            fill="#FF8600"/>
                                        <path
                                            d="M14 12.75H7C6.59 12.75 6.25 12.41 6.25 12C6.25 11.59 6.59 11.25 7 11.25H14C14.41 11.25 14.75 11.59 14.75 12C14.75 12.41 14.41 12.75 14 12.75Z"
                                            fill="#FF8600"/>
                                    </svg>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="h2 text-second mb-0">  @lang('site.price'):</div>
                                    <div
                                        class="h2 text-main mb-0 padding-details">  {{$aquar->fixed_price ?? 0}}   </div>
                                </div>


                            </div>
                            <div class="pb-2 p-3 d-flex align-items-center">
                                <div class="details-icon">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="32"
                                        height="33"
                                        viewBox="0 0 32 33"
                                        fill="none"
                                    >
                                        <path
                                            d="M15.9997 16.8266C16.733 16.8266 17.361 16.5653 17.8837 16.0426C18.4055 15.5208 18.6663 14.8933 18.6663 14.16C18.6663 13.4266 18.4055 12.7986 17.8837 12.276C17.361 11.7542 16.733 11.4933 15.9997 11.4933C15.2663 11.4933 14.6388 11.7542 14.117 12.276C13.5943 12.7986 13.333 13.4266 13.333 14.16C13.333 14.8933 13.5943 15.5208 14.117 16.0426C14.6388 16.5653 15.2663 16.8266 15.9997 16.8266ZM15.9997 26.6266C18.7108 24.1377 20.7219 21.8764 22.033 19.8426C23.3441 17.8097 23.9997 16.0044 23.9997 14.4266C23.9997 12.0044 23.2272 10.0208 21.6823 8.47595C20.1383 6.93195 18.2441 6.15995 15.9997 6.15995C13.7552 6.15995 11.8606 6.93195 10.3157 8.47595C8.77167 10.0208 7.99967 12.0044 7.99967 14.4266C7.99967 16.0044 8.65523 17.8097 9.96634 19.8426C11.2775 21.8764 13.2886 24.1377 15.9997 26.6266ZM15.9997 30.16C12.4219 27.1155 9.7499 24.2875 7.98367 21.676C6.21656 19.0653 5.33301 16.6488 5.33301 14.4266C5.33301 11.0933 6.40545 8.43773 8.55034 6.45995C10.6943 4.48217 13.1775 3.49329 15.9997 3.49329C18.8219 3.49329 21.305 4.48217 23.449 6.45995C25.5939 8.43773 26.6663 11.0933 26.6663 14.4266C26.6663 16.6488 25.7832 19.0653 24.017 21.676C22.2499 24.2875 19.5775 27.1155 15.9997 30.16Z"
                                            fill="#9C9C9C"
                                        />
                                    </svg>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="h2 text-second mb-0">@lang('site.locations'):</div>
                                    <div class="h2 text-gray-4 mb-0 padding-details"><span> {{$aquar->country->name ?? ''}} , {{$aquar->city->name ?? ''}}</span>
                                    </div>
                                </div>


                            </div>
                            <div class="pb-2 p-3 d-flex align-items-center">
                                <div class="details-icon">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="32"
                                        height="37"
                                        viewBox="0 0 32 37"
                                        fill="none"
                                    >
                                        <path
                                            d="M29.3337 34.8673H2.66699C2.12033 34.8673 1.66699 34.3567 1.66699 33.741C1.66699 33.1252 2.12033 32.6146 2.66699 32.6146H29.3337C29.8803 32.6146 30.3337 33.1252 30.3337 33.741C30.3337 34.3567 29.8803 34.8673 29.3337 34.8673Z"
                                            fill="#9C9C9C"
                                        />
                                        <path
                                            d="M28 34.8672H4C3.45333 34.8672 3 34.3566 3 33.7409V9.71233C3 5.17694 5.30667 2.57886 9.33333 2.57886H22.6667C26.6933 2.57886 29 5.17694 29 9.71233V33.7409C29 34.3566 28.5467 34.8672 28 34.8672ZM5 32.6145H27V9.71233C27 6.37837 25.6267 4.83153 22.6667 4.83153H9.33333C6.37333 4.83153 5 6.37837 5 9.71233V32.6145Z"
                                            fill="#9C9C9C"
                                        />
                                        <path
                                            d="M13.333 26.6074H9.33301C8.78634 26.6074 8.33301 26.0968 8.33301 25.4811C8.33301 24.8653 8.78634 24.3547 9.33301 24.3547H13.333C13.8797 24.3547 14.333 24.8653 14.333 25.4811C14.333 26.0968 13.8797 26.6074 13.333 26.6074Z"
                                            fill="#9C9C9C"
                                        />
                                        <path
                                            d="M22.667 26.6074H18.667C18.1203 26.6074 17.667 26.0968 17.667 25.4811C17.667 24.8653 18.1203 24.3547 18.667 24.3547H22.667C23.2137 24.3547 23.667 24.8653 23.667 25.4811C23.667 26.0968 23.2137 26.6074 22.667 26.6074Z"
                                            fill="#9C9C9C"
                                        />
                                        <path
                                            d="M13.333 19.8494H9.33301C8.78634 19.8494 8.33301 19.3387 8.33301 18.723C8.33301 18.1073 8.78634 17.5967 9.33301 17.5967H13.333C13.8797 17.5967 14.333 18.1073 14.333 18.723C14.333 19.3387 13.8797 19.8494 13.333 19.8494Z"
                                            fill="#9C9C9C"
                                        />
                                        <path
                                            d="M22.667 19.8494H18.667C18.1203 19.8494 17.667 19.3387 17.667 18.723C17.667 18.1073 18.1203 17.5967 18.667 17.5967H22.667C23.2137 17.5967 23.667 18.1073 23.667 18.723C23.667 19.3387 23.2137 19.8494 22.667 19.8494Z"
                                            fill="#9C9C9C"
                                        />
                                        <path
                                            d="M13.333 13.0914H9.33301C8.78634 13.0914 8.33301 12.5808 8.33301 11.9651C8.33301 11.3494 8.78634 10.8387 9.33301 10.8387H13.333C13.8797 10.8387 14.333 11.3494 14.333 11.9651C14.333 12.5808 13.8797 13.0914 13.333 13.0914Z"
                                            fill="#9C9C9C"
                                        />
                                        <path
                                            d="M22.667 13.0914H18.667C18.1203 13.0914 17.667 12.5808 17.667 11.9651C17.667 11.3494 18.1203 10.8387 18.667 10.8387H22.667C23.2137 10.8387 23.667 11.3494 23.667 11.9651C23.667 12.5808 23.2137 13.0914 22.667 13.0914Z"
                                            fill="#9C9C9C"
                                        />
                                    </svg>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="h2 text-second mb-0">@lang('site.floor_numbers')</div>
                                    <div class="h2 text-gray-4 mb-0 padding-details"> 2</div>
                                </div>


                            </div>
                            <div class="py-2 px-3 bg-light-orange d-flex align-items-center">
                                <div class="details-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none">
                                        <path
                                            d="M17.74 22.75H6.26C3.77 22.75 1.75 20.73 1.75 18.24V11.51C1.75 9.02001 3.77 7 6.26 7H17.74C20.23 7 22.25 9.02001 22.25 11.51V12.95C22.25 13.36 21.91 13.7 21.5 13.7H19.48C19.13 13.7 18.81 13.83 18.58 14.07L18.57 14.08C18.29 14.35 18.16 14.72 18.19 15.1C18.25 15.76 18.88 16.29 19.6 16.29H21.5C21.91 16.29 22.25 16.63 22.25 17.04V18.23C22.25 20.73 20.23 22.75 17.74 22.75ZM6.26 8.5C4.6 8.5 3.25 9.85001 3.25 11.51V18.24C3.25 19.9 4.6 21.25 6.26 21.25H17.74C19.4 21.25 20.75 19.9 20.75 18.24V17.8H19.6C18.09 17.8 16.81 16.68 16.69 15.24C16.61 14.42 16.91 13.61 17.51 13.02C18.03 12.49 18.73 12.2 19.48 12.2H20.75V11.51C20.75 9.85001 19.4 8.5 17.74 8.5H6.26Z"
                                            fill="#FF8600"/>
                                        <path
                                            d="M2.5 13.16C2.09 13.16 1.75 12.82 1.75 12.41V7.84006C1.75 6.35006 2.69 5.00001 4.08 4.47001L12.02 1.47001C12.84 1.16001 13.75 1.27005 14.46 1.77005C15.18 2.27005 15.6 3.08005 15.6 3.95005V7.75003C15.6 8.16003 15.26 8.50003 14.85 8.50003C14.44 8.50003 14.1 8.16003 14.1 7.75003V3.95005C14.1 3.57005 13.92 3.22003 13.6 3.00003C13.28 2.78003 12.9 2.73003 12.54 2.87003L4.6 5.87003C3.79 6.18003 3.24 6.97006 3.24 7.84006V12.41C3.25 12.83 2.91 13.16 2.5 13.16Z"
                                            fill="#FF8600"/>
                                        <path
                                            d="M19.5995 17.8002C18.0895 17.8002 16.8095 16.6802 16.6895 15.2402C16.6095 14.4102 16.9095 13.6002 17.5095 13.0102C18.0195 12.4902 18.7195 12.2002 19.4695 12.2002H21.5495C22.5395 12.2302 23.2995 13.0102 23.2995 13.9702V16.0302C23.2995 16.9902 22.5395 17.7702 21.5795 17.8002H19.5995ZM21.5295 13.7002H19.4795C19.1295 13.7002 18.8095 13.8302 18.5795 14.0702C18.2895 14.3502 18.1495 14.7302 18.1895 15.1102C18.2495 15.7702 18.8795 16.3002 19.5995 16.3002H21.5595C21.6895 16.3002 21.8095 16.1802 21.8095 16.0302V13.9702C21.8095 13.8202 21.6895 13.7102 21.5295 13.7002Z"
                                            fill="#FF8600"/>
                                        <path
                                            d="M14 12.75H7C6.59 12.75 6.25 12.41 6.25 12C6.25 11.59 6.59 11.25 7 11.25H14C14.41 11.25 14.75 11.59 14.75 12C14.75 12.41 14.41 12.75 14 12.75Z"
                                            fill="#FF8600"/>
                                    </svg>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="h2 text-gray-2 mb-0">@lang('site.Reservation deposit'):</div>
                                    <div class="h2 text-gray-2 mb-0  padding-details"> 1000 درهم</div>
                                </div>

                            </div>
                            <div class="pt-2 p-3">
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="52"
                         height="49" viewBox="0 0 52 49" fill="none">
                      <rect width="52" height="49" fill="url(#pattern0)"/>
                      <defs>
                      <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                      <use xlink:href="#image0_634_42242" transform="matrix(0.00206646 0 0 0.00219298 0.0288462 0)"/>
                      </pattern>
                      <image id="image0_634_42242" width="456" height="456"
                             xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAcgAAAHICAYAAADKoXrqAAAACXBIWXMAAAsTAAALEwEAmpwYAAAgAElEQVR4nO2dCXgUVbr+He9sd2bunTvrvbP8Z0bSQWTPHiCQhH3fw5qkKgGjoriNOwquCAmoYBI2BUEU2VxARQRBQEFBFARkkTWQ6gSSdCcEZEk4//MVBLs7W1V3VZ/q7vf3PO8TSLqrq6urvre/U+f7zg03AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABA/ZSflsMdSsZQp12+i+vhsiL5HmeRPMpxSmrL2KQbRe8fAAAA4DfI+JyKlOWwSwe4KbL65FBkO3/Mk3Z76q9F7zMAAABgKoWFWb9y2OW1DRljLaO0y/tLT8n/T/S+AwAAAKbBs8KleszxuhRpDzsm/VL0/gMAAACG4yzK6OqVOV7PJKWHRL8HIJamc6b9UfQ+AACA4Tjt0nJfDNKpyMdEvwcgjtY5Ob8Oy8++wHUkLC97Rnh+dlfbjBm/EL1fAADgE4xN+qlTkZw+GSRXRaHUTPR7AWIIy80eYMvPYW7KyzkXlp+zzpY37Z4mc6b8Q/Q+AgCAbsqL5fa+muNVSeNFvxcghrC8nNm1DNJDrtll82WTfi56nwEAoFEcdkk2wiAdijxT9HsBYrDlZx9vzCA9zLKyJrsMy5uGWdAAAGtC9YyGZJCKtEr0ewH+Jyx3Sgs95ojsEgAQMHBzm2vQEOtO0e8F+J/w/JwHfTXIWtllXs7qsPxpWcguAQBCcSjSm4YMsdrlg6LfC/A/3NQ2GGmQyC4BAJbBqUjvGpRBnhT9XoB/aZ6b+xsq7zDTIJFdAgCEobe9XP0ZpFQq+r0A/9JkVvYgf5kjsksAgN/hGeQ6YzJIuUz0ewH+hZvUXJEGWV92aZsx5e+ijw0AIAhwKvJ6g2axOkW/F+BfbHk5J0QbI7JLAIBpcGP7xCCDrBD9XoD/aPLy9FaiTRDZJQDAVGCQwBtsedkPiTY+rw0zL3sfN80pyC4BAA0CgwTewA1yo2ijQ3YJADAVGCTQi23GjP/mWdgl0eZmdnYZNWfOz0QfawCAQGCQQC/heTmDRRuZn7LLszXZZfis6X8TfdwBAH4GBgn0YsvLnifavJBdAgBMBwYJ9GLLzy4QbVaihewSgBAABgn0cFNedmvR5mRFIbsEIAiBQQI98OzxEdFmZHVxsyzlP5chuwQgwIFBAj3wLGmTKONpPucFNnPH5+ztA3vZhE/Xso6LZgs3Q42GiewSgEAEBgm0Irq84+UdW5knB0rOsLlff8lS31vKms2eLtwMNZjl9ezy5pen/lX0ZwoA8KBCyfhTebHc3mHPyHAo8mEjDNJhly7wnw9zo8xyFsmjyuxyv4pCqYOzeIzNbk/9tej3DHzHlpszVJSxNJ01jdnPVtQySFfOX77EPj95nD3z2Ses06I5ws1Qo2EiuwRABCUnx/6dm1YKN62JDru8mJvhl/z/DkMyRt0ZplxJiyo7FOlj/v85Trv0iNOePozvW1RBQcp/ij5WoHHC8nJeFWUk6auWNmiOdbG/5LSaXY5+963AyC7zc0psyC4BMB7GJv3UcSotgpvPXdyE3uQ/TwgxQm+yT0Wq5vqe//sd/vM5MvUyJfOfoo8pcIGxn/Bs55Qo89h44oib+W04fpjtPV3Ermg0y7MXL7K1Rw6xxzZ+xDosnCXcDDUZpkt2mThp0k9FnwIABBRlRXIrh116SF2ySpHOijY6441TLuaGuZq/tyccRVIXZJriCM/NbivKKAYtf93NCJ0XfmCt572k/i12QR4bv3YVe+fgPvX3Wikod7KF3+7kmekydsvsF4SbYaNmiewSgIbhWeKN3BCTuPICKUM0zDDt8g/qpCJFmlBelNaOsmbRn0moEJaX86gIY7h59nT27Wm7m7nN/vqLuh87axob8c6bLH/nNl3ZZcXFC+yjIwfZo4GTXVbb8rO/QnYJwA3qTNMonkm9zDMqRbRJWUn8i0Ip/7nQUZg+qLAw61eiP6dghhvkZhFm8NL2z9zMrPT8ORb56kxNz233Wj57eMMa9sHhA7qyS7p3SSY86t23VIO2gCE2KNfsstmcF/4i+lwBwHQo4POMKZObwHbRRhQYks7xn+84izJGsmPSL0V/fsFEkzlTfiuivOO2D99mVVfc80Cqf/RmW2R0NdnlvjPFurLLNYevZpftkV0CIJbyU5k384xxCjfHEvGmE6BSJCf/OaesMCNB9OcZDPCAm+LvQE9mRmUbrtDEnHCDtl+TXX7Is8vyCxc0meUVl+xy5LtLAiW7PM31OrUIFH0eAeAVjN3wE6ob5EF9k3BzCTYp8m5HoXQrOzT+F6I/50CFZyPz/RnUadLND5cvu5lT4dlyFjM/15TXu5pdLmGzdn7BvvMiu3xkg/Wzy/DcnDjR5xEAumAs5T+cdmkEBXHhRhLkciiynWovy8qyfiv6cw8oqLwjP6fQH0G85dwX2bxvttcyKMcP51mPJfP9ZiaUXZLp6c0uyVzJZMlsrZRdhuVln7lh0qQbRZ9KAGimrEgewI1xr2jjCDkpcrk6hH1M+h/R50AgYMufFmF6dsM19oOV7JizrJbx0KScwSsWCzMXMjoaTtWbXZKxksFmffi2FQxysejzCABNUPs1hyJ9LtwoQlwOu3SaG+XtlMWLPiesDA+uE8wK3BGvzGQPfvKhajx1cdRRxjovnifcYFxFQ6mUXdLQKg2xakG4Sc6aNlr0eQRAg5w5k/lXHpRfdyjyFdHmALlIkb6lJgSizw+rYsvL+UxLEI569WXVNGiGKBXtP73lE7U9XN+lr7GkxXNZlzfmsYHLF7FxH72rNh3fdOIou1RdVa+pvMu3QdsUbYgNqSa7pEk7NHmnPnK/2ipyP6ub5Of8WfR5BECdUIbCTfF+Wu1CuBlA9Yp/eZmNWkp3/pH//O/C8nMuawnEr+7aoSmbaoxTFU52x5p3hJufN6LskspBvi8rcXtP93y8Wtg+heVnfyH6PAKgTkrt6S2uNQgXbgCQJpM84CiUI0WfN1YhLG/qcK2BmFq3+cJJ/vzHP10bEG3fGtMnxw67vbcEoetWZk8SfR4B4IY6O1WRH3fY5Yuigz6k1yTli5Txiz6HrIAtL/s1LUG425uvemWKxZVn2Yr9e9TVNmg5K9HGZpSOOkqvv8dzly4J3Zeb8nJiRJ9HAFynrDDtH07UMwa+FHkB25vyc9HnkzCurt6haAnCz32+wc343tq3Wx1qzPtqG1vC/01afWi/2hx86rZN6pBj4utzhRuZWXJta3eEm6Wo/UB5B7AUzqtrLzqFB3fIEPFs8sNQbVsXlj8tSmsg/uzkcTeD7L9soXCTEinXyUe7ixVx+5KXvUj0eQSAuhYjD6jTMEM1+MRNcm0ommR4fs7jWoJwq3kvsYtVPxrC6XOVhrWDC1Rdrq62hEGG504bKfo8AiFORWHWH52KvEF0IIdMNElFXkpLjYk+1/yJLT/7cy1BmGr8XKF7iqINSrSo808NVMspZD/ysquavTz5D6LPIxDClJ9Ka8qD52HRARzyg0napWdEn2/+gso7KMBqCcRv7P3GzSCpj6pogxIt10k61HBdjEHmbBV9HoEQhhbsVbuxWCB4Q34wSEWqdhbJ3USfd/6gSX7OCK2B2LW8o6q6WvNajcGs9R5lHtQowf/7kf2E6PMIhCjUR5Wb4wXRQRvysxSpsKRk9H+LPv/MhgfYhVqCMDUQd2WHclK4OVlBtOakK/ete9/v+9Bk9tRo0ecRCEFoQV6eTVwWHqwhUSb5kuhz0FQmTbrRlpddpCUIP//5RjcjyNm2Wbg5WUHy6uVux+W9Q9/59fVpDUiUdwC/47DLmepQm+ggDQkT//wvOezSv0Sfi2ZBheVaA/HnJ93LO/qFeHlHjVrNfcltPUtqFkC/8+M+LBR9HoEQo1zJSIU5QiTq2yr6fDQLW17ORE0mgPKOBkWNEVyZtHmdf157xmQW9tDdd4k+j0AI4VDkwRhWhX6UdO7Mmcz/En1emkFYXvY2LYH4No/yjuX7vxVuSlaStGqZ2/E5VVHulz6z4ZkZ1bZboqeJPo9AiEBLIaGnKuQphz0jQ/S5aTTN503/vdbyjiX7drkZwJ0fvSfclKym3cV2t2P04pefmf+6CZ0d4eGtOok+l0AIUKFkNOfB0CE6GEOW1Nuiz0+jseVnj9IaiCkjqoE6x9Dix6INyWrybKJwoeqyuj6maa8583lmaxZZGRUV9TPR5xIIcipPj/4LD4InLBCIIWuqjFZtEX2eGklYfs7rWgJxr7cWuAX+LwsLhJuRVeVZE0lfLOIX5Jnzev++m9lax64TfR6BIIexrJ857dJmCwRhyMIqPy2Hiz5XDeNqeUexlkA8ZeunbkE/e9sm4UZkVXVaNIeVX7jgdrx2FSnmzGodMOicrWnbMaJPJRDkOOzyLNHBF7K+yuxyP9HnqlGEz5oSqzUQbz11wi3gmzpsGASiusgqlwbmxHdnillHoxdSbhVzNjy8zd9En0sgiClTZEl04IUCRIo8TvT5ahS08ryWINxm3gy35ZyKKs+ivEODPNfMJOxnK9jA5YuMeY1nHme2ltHHRJ9HIIhxFqeHORWpQnjghQJFD4s+Z40iLD/7Cy2B+I4177gF+aXfobxDq2gBaU8os6SFpH3tYRueIVeHNY96UfR5BIIUuu/oUOQvLRB0oQCRwy4/Jfq8NYKmc6b9kQfZai2BeMm+3W4BftxH7wo3nkDSxE3rWNWVK7WMsuT8ObVVX/uFs7zbdlLXqvARI+4WfS6BIIWCneiACwWapEdEn7dGYMvLTtUaiJWzFdeDOpV3tH1lhnDTCTSNfX+l2nmoLsg8Nx4/wka/+5b2bc6YzMJbxTBb7lTqw7quSX5OS9HnFAgiyorkVtRjU3zAhQJL0njR564RhOXlvKElEPf2KO/4AuUdXivq1ZfZOwf31WmSNV8+qJxGy7bC7x/Pwnv3u/5/bpKXbfnZc26a99L/ij63QIBDK8U7FHmr+GALBZ7Sh4k+f33Gh/KOqSjv8Fkj313CNp04ymoPujJ2t9bFpwcPZbY7b6v1+7D87LP8y8+Tf58+/T9Fn2YgQCm3S3eLD7RQYCo9VvT56yu2/OnxWoP5No/yjj5LtWU4UOOilVAcP5x3O76Jr2tcaDmyHbPlPF3v33lGeTIsf1rWDcuWBVVjC2AyFYVZf+SBrkx8oIUCTQ5FvuIsGPN70eewr/As4yktQdizvINKFFDeYZxiF+SxapfJO4fLSrQ99+kJLLx9ksbXyf4qLG9qsuhzDgQIDruULzrQQoEphyIdEn3+GgEPmtu1BFeareoKzWYVbSrBpAc/+dDt+L6ya4e252bKzDZ6tK7XUifyvDy9lehzD1gYakSOJawgb+Wwy4tFn8O+Ypvx3J9sGss7qN7RFaqHFG0qwaTV37uvH5m+aqmm54Und2PhEx7S/XqYyAMahAe5FaKDLBS4KlekNNHnsK/wIJmmNaAWnsXqHWbp5lnT3O4/nr90iTWfo2HtyJcms/DWscyWl+31a4flZ1diIg9w41pZR7XoIAsFphyKXEX3r0Wfx77Cg+ObWoIo9Vp1hXqxijaVYNKwt99wO77rjn6v7bn3j2e2Pv0M2QdM5AHXcSrSu6KDLBS4ctjltaLPYZ/hgZAHxRItwZNW63CFyj1Em0owybMF3eOffqztuYOGsPA7bzd6f3ZiIk8IU34q82Zkj5Av4hnkYNHnsa+Ezc5upzVo0nqPrvRcMl+4qQST9pwucju+ia/P0fbcRso7fBEm8oQoDrs0W3SAhQJZ0nHq2yv6PPaVsLycp7UESmold9llqSZqNSfaUIJJcR7lHYdKz2h6XvhTj7Hozr1Yq3kmrCv5o0mqE3n+mZv9f6LPV+AHqG6NB7hz4oMsFKhyFMljRZ/HRkA1cVqC5J0fveeW3by5d5dwUwkmPeRR3jHvm+2antc0U2ZTc2aw4sqz7NGNH6kTfcwzSkzkCQl4gHtYdICFAlcOu3QgGLJHPeUdyzzKO2778G3hphJMet+jvCPtPW3lHZHd+7GdO7+5/rwDJWdYxurlpu5rWF72KUzkCWIcdnm/6CALBaaocw4/fzqLPoeNoEl+jqQlIFKnHFoQuQbqpEMddUSbSrCIsj7nhR+uH99zOso72kYnsKqqKubJ5oJj/mgBiIk8wUaZkt5JdJANZtFqKNxAPuNZVqnofTHl/dnlWaLPYaPgAe4tLYHQs7zj85PHhZtKMGn422+6Hd+PtZZ33DeeRQ4exr4uKqxlkATd0/zw8AHWaZHGyT5eChN5gginXXpNdJC1iriJneY/5zgL07vz47LZkO0qcnnNsT5rT/0zf40kpyLdzo3zZf5zV4DPHP6aHZN+KfL8NQwd5R3TvtjsFngnf75RuKkEk2qXd6zV9LzwgYNZ+F13qBn++LWr2MlyZ51Gef7yJTbn6y9NXbMTE3mCAHZo/C94kHZaINCKlSKvdxbKPRhLuX4PgR+XT4w2yLooP5X2ByqP4JrJH7tX+LHQ/L6kQoc99Sbzz1L/0GRWdgetwW+HctIt4PZAeYeh2nem2O34asr48rJZeNt4t/KOW2a/wJ757BNWcfFCnUZZ9sN59e+YyAPqpNye0Vd4oBUkddUJRX6PH4O4uo6Nvwyy1usWZTTh+/YAzyw/t2p2SZk29ew15iy0BjyYPasl4HmWd1CrOdGGEkxq91q+2xqQBzWWd9ieepTZEpLr/Fv0/Fw1Y3RddcUVWiFkvNY1Jr0UJvIEIDx4LxAdbIVIkY9xI+ra8LERY5CunDmT+VenXbpTvYdJhi76uNnVLxaHqamEt+/JqvAgtlNLoKNA6sobe78RbirBpIc3rHE7vnO5sWl5XrgssfDU1AYf0+3NV9V7kPVB95Jp/UmT3+PeJrOm9hZ9voNGYGzSjTzwlogOuH4O7ldoKS9uPP/V2PGxgkG6QsOZfJ8m8P3fJ+wYKvJ6njn+yYj3YyXoPpEtL/uKlgC3Yv8et6CahfIOQ+VpYKPffUvT88ITuzLbE9pW70hZ+UajE3k0d+3xUpjIY3Fo1XfRhuVfc5QuOYvkUZqPj8UM0hXHKakt3242zy4L/GSMleV26W7GbviJ0e/FCoTnZsuagjBXsUt5x8WqKtbaxI4toSbP8o7KSxfV+4iNPpdW72gTx2y52lfvsMJEHhvV3OZlL8JEHgvCg97jok3Lb+IBnhteT33Hx7oGWQONApQVyh3VGbF26bjRx+3auqBzK0+P/otZ78EK8CC1VEtA679soVsQ/ewkyjuM1Ih3lrgd37VHDml77r13sfC+A7x6zZZzX1RnJZ+9eLFOozzmLGORr5q7hJk6kSc/e0rz3NzfiL4WwDUMK2Owuij7KZbb6z4+AWCQnpQVpbfmWfJj6gQfu3TB+32WjnBNLClI/5u/9l0YVN6Rl12qJZBN9yjveO7zDcJNJZg0a+cXbsf3sY0faXpe+IBBzDZ+nE+vTb1fF+/5hlW5TMCq4d51q/3y/jGRxyJQeYfDLv8g3LxMFs0CdRRKA705RoFokK5Q6zf+HqL469/Gf85TvxCR8dnlMhcjPKuWayjSF/xxr9AwajBOwGmIJrnTErQGsB3KKbfASZM+RJtKMOk7X8o7pj1jyD4MXvF6LYPs/ZbpHXg8hYk8IikvkuJFm5d/JOV4e4wC3SCBNniAfU5L0Ip69WW37ILuXYk2lGCSZ3nH/pLT2p775KMsvJ7yDm804dO1bua48cQRYceEJvLclJfdWvQ1EnLwrOpe8eZlrtQG2jxT9vYYwSBDAx6EvtESrO72KO94fc/Xwk0lmPTIho/cju8creUdUjoLT2u4vEOPPGe3jnx3idDjQh15wvKzZzXJz/mz6GslZHAo0puiDcxsldulPr4cIxhk8KOnvGOlR3nH2A9WCjeVYNKawwfdju8ojeUdNirvmPiwIfsQMz/XbQ3KUxXl6mxX0ceGn6NVYblTWoi+XkKGgGpp5oV49rjd92MEgwx2bPlTM7UEKAqSp89VXg+cKO8wVjfPns7KL/zYDo5mlDbjv2v0uS88p7u8oyHd+/FqN5PWugal2QrLy8kXfa2EDGxvys8ddvmiaBMzVUUZI309TjDI4CcsP3u5lgA1YPkit8BJSyeJDprBJBrGdOWjIwe1Pfeeu1h4v4GG7ccru3a47cetH4hvAsHNsQJ1kn6k1J7ZUriBmSlFqigoSPG5MTAMMrhJnDTpp7b8bIeWIPXCl1vcAic1uBYdOINJs792L+94VGt5R38q77jDsP2gLz6uxC/IE35swvKnPib6WgkpHErGUOEmZqqk5UYcJxhkcBOem9NJa5DaaXefuNHtzVeEB85gEs1YrYHuAHZYOKvx5xlc3kE6VHrm+n78cPmy8PuPVBf5lzmTfiX6WgkpaKUI8SZmqkGON+I4wSCDm7C8nOe1BCmrlHdQyzXqD0rDvUNXLmZp7y1lA/m/kxfPNbsdmqnyrbyjs6H74nqfucACZTxh+Tlpoq+TkIMb5AzxJmaeyovS2hlxnGCQwQ3/dr5LS5DynLixyA/lHc3nvKC2XXvxy8/YphNH1WBddeUKa4gz58+xbadOsIXf7mS3r3mHRbxibns0o0TdclyhbjqaniulMVtamqH74toH9qijVOhxofKjGyZNulH0dRJy0BqIok3MTBm12gQMMnhpNueFv2gt73j7wF63AD72fXPKO2jWJpWOvHfoO3b+0qUGzVALZKhfFBaoy0dZOcOkfquu0BcDLc8L79SVhU98xNB9cc0gjzsdQo9LeH52g8vxAZNw2KUdok3MLFFzbaOOEwwyeLHl5YzRFqRy1MyshgtVl1mrucaWd5B5Td22yS04Gw2tTEGZr6bWbX4UfSmouOhDeUeeMeUdNaKs8fox419SRB2XsPzsVaKvkZCFB+yjoo3MNCmS07jjBIMMVsLyclZoCVSDlrv35aThTqOCIA2jUvNz1/q/+qChv11FippdUgcf6jKT99U2Nn/XV2zZd9+qC/1SUXvDg7CMXa6uZm/t281iLTA7k0RrPbpC6zBqeV743Xey8P7GlXfUiD5fV4QcJzQFEAsP2g7hRmaeygw7TjDIoEQt78jLcWoJVnQP0JWntxhT3iGvXs6zlbJ6jYzWQVzFzZCGR2kSjtbtUjZKtXuv7trBDbPudQ5rDPfJzetZ01nThBrkXG70rtD71fRcMsd7fFu9oy7R/VtXzBpOb0g8e8wTfY2ELIxN+qlDka9YwMhMES2KbNSivjDI4MSWNzVRa7Dy7MvZ5Y15PgU/molKQbi+TO/LwgJ2z8er1TUKfQ20NDxM9/NWHtirZo51QZknzSIVZZAHSn4sq6Bj0l5reQcNr77wrOH74zkhS2s/WMPMMS+n4qZ5L/2v6GskZHGeGPU70SZmtkpPyf/PkGMFgwxKaGFaLcFKLe9wmTnq67R/uv+3u9hep1FRgfqwt98wLfBSeUh9ax3SPdbRWvueGqiERbPdvijsO1Os6Xk0MSe8UxdT9onqL133iT5zf9ZCcoN8VPT1EdKcLRrzv6INzGyV2eV+RhwrGGRwYsvP/lZLsKJFcl2hzM/bwNdzyXymnK2oZU5FlWfZg5986LcATOtXfnbyeK39uFRd5bdFgWvkuaxU/s5t2p6bnn5VJu2XZ1MIzU3TfVRYfs5JNAUQDGVXog3MbDkUeaYRxwoGGXzYZkz5u9byjncO7nMLlJnvr/Aq8A1Zuditvq6Gd/n2RTQ8p4yIWuVRw3VXaBWLSZvX+W0/1h71LO94U9v+8+zR6PIOV9G9WVeoVMYvxyQvO1X09RHyOIvTw0QbmOkGaZdO+7IO5PVjBYMMOsJys2/VEqxo8kqJS3kHtR3zpryjB88cPc2R7gc+prHXqJmiGbqFZ8vd9o2GF/+9/gPTX9uzvIOO0c2ayjueNaW8w1Wt+JcW18+eSH1vqanHIywv+2s0BbAA5afSmoo2MP+YZEaGr8cKBhl82PJy3tYSsAavcC/v8GZVebqf5WlA5y5dYhmrlws1RlfRfcDvy0pqGfgYL7NlrSLDceUDjeUd6sxVE8o7PJWzbbPb/h0sPWPIxKn61CR3WhfR1wa4QW0S8C/R5uUfSQXFxeN+48uxgkEGF1Fz5vxMa3nHjO2fuwXIpzav1xXwKBv6yn7KbRtUeJ6y0ryJON6KJiO5NguvyegSX9deXqJXtM6iKw9pLO+g2keqgTT7mLSuI4ukelOTXu9d0dcGuMaZM5l/FW9eftNcX44VDDK4CMubmqw1aFFRvit6yzuon6i/szJfROUVnnWTNOOWylLMeD3XVTNoWFdTqYmJ5R116Y417zBPHtlg7NB4WH7OZdusnOairw1wjfJTaX+wgHH5TbRyibfHCgZpHlFRUT8LC2vVPzoyYXZ8fPK2dnHJn8XHJa1u2Tz6WZutTarN1ireZmtrSE/dGsLysrO1BK2Y+blu5R1U0K8n6FGWWO3RWPxJnRmoCNFMW88esJRJG/06NKzryt7TRZqed7W8o6tfjwllja7Q50qzbw17jbzsl408x4GP0LCjaNPys0FeKVNkyZtjBYM0h+bNI0e3bdOuZOyYcY6VK99lOx2l2GUAACAASURBVHd+w77dvZdt2LCJLVjwOnvssafODh+WVtouPrm8ZYuYypjoTkfbxSd93KZN/HSbrXVmeHirTuHhbf6m93V5MNqjJWjdv+59t6D42m7t5R00ucez1vGjIweFm59WUYbkCs10NXrty8c//djtNahlnqbnpqddXcHDj8eDhlo9h5/pq8/zn2/0uT4STQEsCHWZoW4zoo3LvyYpXXYUSvfqPVYwSKNJ+Y+oqIQ3hg4dXXHiREGt4au6qOIBmh67ZctWtnjxW+yppyafS0sdU9YxoZuzZYvo83x7BfHxSRsjItrnctO8rWmTVl1uvrnNv+i1XF9ZLe/QGLio36kreibVTNy0zu25VIRP9/hEG58eeZZffHLssKHbX3f0e7fta22QEN6xi7oGpL+PB/VjPewxkYnYUnCMdeTZsA/bfljQhQgagmdVdtGmJcYo5SV2e+qvtR4nGKSxREZ2mH/nuPsqqzzq77zlypUrrLBQYdu2bWdL31rBnp887YcM+bay5KReDp55no+M6GCPj0vaGhXRYa6tb78l4Q/ey2zPTWS23Kn1Bq26yju0zl6k+3Wes1b92QTAKFHQ9xxqpZIQI7ZNx4j6zNagq7yjbbyp5R2NHRPqquMJNZq/86P3dG8PTQEsDA/Yu0WblTCTtEv7ypT0TtqOEwzSKHhm16tHjwHllwxY51Arp0+fYV/t+JrRMG7OtBnVmXfcw7r0GcTaRHZgbdsls5g+A1jbEaNY0zGZzPbvu5ntmcfZoKWvuW1j43Ht5R2Pe3SGoYk+/mxTZqQ8Z/EaNUycvsq9vGP19/u1PffucSy8/yChxyR6fq6aNXpCXYjidK/6kT1K9DUJ6oEH7PWijcoCWkZt9xo+TjBIo4iOStj/zTe7jXE+A3A4HGz37j1s1aoP2IyXZ7Fx9z7Ieg8czmJiE1mnjt1ZWuoY9thjT7Lhjz3GbPfdxWxP8Z8zJtcb8MgIPVfnoFU1RBudt4p8daZbpkeTUzov9q1RO+mVXTvcjpHWDDu83wBmu+cu4cfl5lnT1HvSnugpiUFTAIvjsMuLLGBQ4qVITn4snnIWjPl9XccJBmkMzW5q3bRL594Oc6zOeCorK9m+ffvZhx+uZfmzXmF3//tR1nfIKBYVl8RaRyWwqO59WETKcNYsQ1IL12l25eDFr7htgyZ2BGr2WCPPWsWXtn/m8zZdmxLQZJd4LZmXn8s7GtOSfe5f9PQ2kWiSn9NZ9DUJGoAH/onCzclKUqQKrimeGSUM0hho5ilNrjHN0fzIhQsX2MGD37N1H3/CXpn3Gvv3I0+wgcMlltCpB4vj2eeQwaPYffc+zIbe/yALv/N2Znv8QWbLeVp4UPdGlDG6Fqscdzp8Mv2OHuUd3562a3vuxIeZLdG/5R31iVoHuq6IQuVAvd9aoH0beTlvi74eQSM4i+RRwk3JguLZ5EX+c5mzKKMrzfaFQRpDRES7/OXLaxddBxuXL19mBQUn2eefb2NvLVnOnn1+GpOy7mKdew1krdrGs4h2ySyyV3/WYsRIFn77rcz2yP3M9vxEYRNPtMizYULfpa95va0nNrmXd+R+tVXT88LTUlm4ZN7qHXr06Ymjbu9hyb5dmp9LTQHC86bcIvp6BI3AA3aMaDOyurhZ7uc/T8EgfSc+LmnT9u1fmW5QVsfpLFcnDdU2z3aqeUb3ujppKJyGbu+9S500JNo8J3++0e090Cog3m5r/bHDbtvS2nYvPCFZSHmHpzz7x1JfXZ2LTRuyyhAwmZKS0f/tUKRq0SYUMgpxg4yOSjhVVFRstv8ENGSee/bsU+975s2ax26/+9+qebaOaO9unpnyVfOc9AizzZhiuin0X7bQbT/XHjnk1XaovOOcywxmtbxj1rTGnztdbHlHjaj8hzr+uPLCl1t0bCPb0XTOtD+KvhaBRq5lSOLNIxQU2gb5k5YtYs9V17GSPdCGq3nmc/O896HH2cDh6Sy2Q1fWsk08i+7e52q5iqt5vlT/jFu9xuC6XFdx5VmvtpO+apnbe1p9SGN5x/hxLHyA2PIO0sMb1rjtPy103UrHWp7h+TkPir4QgQ4wkxUG6Q9uvjnirx0TugXMDNZAw9U8Z81+xcM827Hozr1Y9KAUdsvoVBZ+1x1XzfNFfea5vfCk22u2mTdDt8G86lHe8YDGNSfD+w64avoCzZEaRShnK9z2/yEdDSDC8nKO/XPBpF+KvhaBDsrt0t3CjSNUFMIGSX1TU0dnlpruFKAWFy9evD5p6LXXFrMHHpl43TxbRXiYp+ukIY8Av9SjYXe/ZQt1m8wRx4+nANVUaiqst0h5B5W3uEIlPE21DA/XmHzutJGir0OgE0ehHCncOEJFIWyQNlvLjGAp8QgmqKNRfTNu20Z3vG6ezVPT2JjJk9XH0eNpqDzrQ30NEJIWz3V7bWrmrum5TzzEwgWXd5CRuzZMIKRVy/Rkj1/ewNhPRF+HQCeMTbrRocjFws0jJCSdcxaPsYn+zEXQunVcNjUZB4ED9cp1Nc/np7zA7h7/ABs0cASLjurI4hK6qpOGWg0bwWy3Zv6YeebWPZFm0mb3Bu4zd2hbQis8lWe2siTUIN/yaAqw4bi+xu3h+VM7ir4GgZc4FOlN8eYRQlKkI/znnDK73I8dGv8L0Z+/P4iLS1qzebN7X08Q2NTc93zn7VUe5Srt6yxXWfDxWrXBQg1DVi7WZjBU3vGUuPKOupoC9NLRFCAsP3ul6OsP+ACtkyjcNEJVilzOM8vlDntGRmM9YQOZmJhOh48fPyEijgMBeM64ve+hx9kwuu8Z04l1Tu7NUlPHsgjPcpWZz9c2GAuUd2zyaArwxt5vtJtjXvalm16e1lT09Qd8wHli1O8cdumCcLOA1FVGqN1dWWFGAg1/iz43jKJVy9hKf67gAayLm3nO9ixXuTppKGro8KvlKkNTWHiPPoaVq+hVmo9NAXj2+JLoaw8YAM9k3hNtDpCHWdJ6nYr8SllRen92TArY6eH/+Eer38XFJJbXEy8BuA4NwR46dPjHcpX7H2UDh6ZeNc+2tWfchk94kNlefM4Uc6yrKcD0Lzbr2AaaAgQNTrs0QrQhQA3qvEORVpcp6ellZVm/FX2+6OHmJi2jhwwejRIP4BPnz//ADuw/yD5e+wmbM3c+u59nngOGp7GY9p1Z2/hk1jZluKGt6B7d+JHb66tNAeZqbwoQlpf9gOhrDxhEYWHWr3gQLrOAEUCNiIbDeXb5vsMuZzqOSf8j+txpjPAmrUc8/NDjFfXEPQB8pqSklL298j2W2K0fazs4xech2bqaAmhtanDVHHOO2WbMCIkJeCEDD77TRAd/yBuzvJpZ2u2pvxZ9DtVF82aRE+fNXYAec8B0qqqq2bQXc1nbTt19aixAJSiufHemWFdTgLC8qcNFX3fAYMqUzH/yzKRKdNCHvNTVhZ8XqeUjbNJPRZ9PNcTGdFpBw2LA/1ziX0tOlVezA2eq2H6uY45qVlRZzSouXGGXg/gry7z5C1lE9z5ezX6Nr6MpQDqaAgCCB9p3hAd6yABJBbQgdklB+t9En1NxsUl7Dh44JChUhi72s9Vs47FLbN2R+rXp+CW2vfAy21tcxY6UVavPcXLzvFQleu99J33MHawpLVat0yCXebTU++SYvqYATXKnJYi+5oBJlBXJrbAEVvBI/SwVaR3/d4qorLJN63jn+fPnBYXJ0ISMriFj1CIy1y9PXWbfcvM8XFrFCiuqmeOHK+xCgJjn0aPHWETHLrrMrafvTQGWi7jGgB/hwXSF6MAOmSBFPsbNcsJZe+qf/XUu/eUvUb+KjGhfKSxKhiBVPL5/2kjm6Ks2HL3Evjh5me0uqmKHuHnSMG7p+Svsh8tX2BXRB8CF7n2HsPCnH9NscJsLjrk9f/EefU0BmsyaGu6vawsIotSe3oJnHpeFB3TILJ13KHKuw556k9nnUpMmrVv26TMYJR5+RDEge/RFn3Dz3Fpwme2yV7GDJVWsgJtnCTfPc5e4efrZPR+a8BSzjb9Dk8Flvr/C7bl0HzJey2ojP957fNHs6wlYBJ5pvGSBQA6ZKBp+pRmwPLOMMes8CgtrNWD8+H87/RsWQxvK6EQaZENaz83zM26eXyuX1YlDJ5zV7PS5am5GV1i1CeY5Y+YsZhub2ai53TxrGjtQcsbtudN0NgVo9vLkP5h1HQGLQcXoaicXCwRyyGyjlK847PKHZYWy4SsO3Bze9t8zZ866bHzoA/VhZYNs0Dy5tpy4zHZy8/zudBU77rg6bOuLcT439YWra1w2YnCPeTQFsJ+t0NsU4H6jrx1gcdBdJ/REGWWFktHcqHMoJqrjotWrP/QquF2prmQXKtewc45ZXPnsh4q32MVzG9jli/tYddVp/oggrlPwASMm6FhJm7lpFld691lnjb+f2R64t0Fzaz3vJZ7Fut8m/7eepgD52UfRFCBE4dnFEtFBG/K7SVZTPWXl6dF/8fX8iY9L2rF79x7dga3q0vesvPjuhve1aCyrOPMIqyx7gZ0vf4Ob5zp2+cJuVn3Zzt01dJNWdZLOcfHGZrSUCv0m2aN/CrM9+3iDBvfyjq1uz9mntynArJxhRsRaEIBQKzO1ps4CgRvysxS5klYWKSkZ/d/enj+REe1PO536bkFeqXZyc7zLx/3PZBWnH2SVpTncPBfyTHQtN91jugNsoELNANZbwNSMFM2cvXBZ33hrRExHZps5pV5za79wFjvvscpM+qqlerLHL9AUIMQpUzISeVZxSXjAhoTIocgKDbfrPW8SExN/2rpVrO4CyB/OvmPae6ksm8YNODTawhZpaBQQaDpapj2LrKysZG3jEhs0uOX73ZsCrDv6vY6JOWgKAK5RbpfuFh2oIcFS5A3lp9I0L/5qs7UI69q1X5newF5Z+ryp7+NsyVMsVO5fUjs5KvCnSS9fKZfVSTCBnFl+Y9c+dP7ddwdYdK/+9Zpb36WvqY0AaqAGAdQoQIdBLjMz5oIAg2cRrwkP0pBgSee4UY5j7IZGh5Vstjbdx469U7dBlhffa/r7uHh+i97dChpoVmjlxStqeQWVWVCPViq7oPILKsMQbYINiWa4amXNmo9Z22Ej6zW4LR5NARbt+VrHrNWci2G5023+iLsgQGAs62dUDiA+SEOi5VCkj0tOjv17Q+eLzdZq3NSpL1zQE7yvXLnAt59h+v6fc+Tq2a2QgRKq85euqOUV1B3n+9Iq9m1RldpyboMFzJNqJ7VCCy43zcio0+DG+NgUgGu6v+IuCCCKi8f9xqHIX4oO0JB4OexSKa0cUt+5EhHRLn/58nd0BeiqywV+2ffK0qm69gswtYUctZKrMU+qt6RWc9tO+s88qResVu55cAKz3XdXLXOjpgAHS92bAmRv26THHMvQFADUS/mptD847dJO0QEaEi9qMkAzXetqhB4fl7Rp+/avdAXhSz985Zf9prpKYCwXqq6oBkb3PKm5OTU5p8zTqIlCtOKIHvqlpDLbk4/WMrjHP13r9ji9TQFsuTn3iYi7IIBwnhj1O2SS0I+SPq0ozPqj6zkSHZVwsqioWF+QrVzjl/39oWJF4zsDDIOWz6JltKiJAS2rRWa3nZvnJo31mnv44/V21Ilul8xsL052M7e6mgLct+59PWUdaAoAtEH1cTSzUXxwhqwg/oXpcEWh1Oza6fGTli1iz1VX65stSjWL/tjXi+c364u2wDRopi0t4Ey1m0cd1Wzf6auThnYUXmbfnaliZTqGVWu4ePEiaxOdUMvgcr/yrSkAzx6HCg26ILBge1N+zgPOQtHBGbKMHI4iqcvNN0f8tWNCN4fewFZZmu2X/bx88YDuoAsChyNHjrLorr3dzK1DHU0B0t7T0RQgL3sbmgIA3dCUf6ciPYGFliGSwy5dmPJ09wmpozN1L3NF3W/8sY/VVbqrT0AAsXHjZhY5ZLibwa3c797ycO3RQ9ozx7zsK01mZXcQHWtBAOOwpyc7FLlYdICGxGvRK32rn3l68kV9Ya2KUYs40/ev6FbGLLWsLzCa1xa+wW6RJLemANUeTQF66GsK8Jbo+AqCAJ49/Itnkl+IDtCQWD3/TG+2+PUluoJadVWRX/bt7JkJRsdjYDEee+IZZrvrx4WSPzt53O3vC7/diaYAQAw05Z8HoofRvzV0ddcdvdjmzZ/rCmqXL+zxy76dK3vJyFgMLEhK2hhme/xB1eDGfrDS7W/lFy6wmPm5eoZXp4mOqSAIKbdnxPGA9I3oYA0ZJIXr4zHMOfVW5ryP6/asevX90ExWdtvDrOLOCZpVPu6BBrdplMrvuEfXfkGBpwODMtm+1HFsX9pdrPSOR9z+VjDm3+rvNWn0ndUlQ2/b7hiSledMuS1WdEwFQQbPJm8sU9LTHXa5RHiAh7zXgQzmfIib4tDbICgk5Rh62xXnkKyFBSn3/afouAqCjMpi6f9oEV6184roYA/p02H5avZlgSAFQaLFjXItS6zdOQoAn+HZZCenIu0SHvQh7ZqCzBGCXOUYmnWv6FgKghSqm6Qm1zz4fi08+EMNa18Gc6aID0gQZCXxLFJhkybdKDqWgiDGxSgxkceqWjFGeDCCICvKMeT2CNExFIQANJHHWZQx0qlIe4QbAuSuuTBICKpLjsFZA0XHThBilBVmJPDAvMyhSJeFmwPEnLPGCg9EEGRN3T5CdLwEIcqZM5l/ddilJ1EeAoOEIGsKBgkEY7en/tpRKN3KM8rPhZtFKAoGCUH1CAYJLERZYdo/eNB+2KnIR4UbR6jITwZ5atBY9nKnfmxGp76atbnXKM3b/7pvuq5tkw4NyNC8/Q+7D9e17fxO/VnpEO3HZ0HSQF3bX9ZliOZtF3px7DeZfOwP9pc1b39ND/3HvmSI9rrehcmD6tzOo3HdXhQdEwGoxbVJPV0ddul1pyJVCDeRYJYPBrm6+zCaDq/pscrgsSyPBy49gW5b79Ga9+XbvpKubc/kOqzDINf1GKFr+3MSB7AyHUH69c51B+n69E63FM3btvNjn6/z2G/tnap5+3v66TNI9dgPzNS8/fU9R+ra/uykAbq+nLzReXCd25kY3yNHdCwEoEHYMemXjkJpoEOR3uCZZblwQwk2eWmQE9r1YKPbdtRlAhAUWMIQKwggyCzLiuQB1zJLp3BzCQZ5YZArug5lg1q3Z6eHoAMPFMyCQYIAhbGU/1BLRhRpisMuHxRuNIEqLwyyd8t2uoY/ISgwBYMEQYLjlNSWm+UTPLvcgYbp5hkkTa7o0jLWAsELgswWDBIEIddWFsl02qXluG9prEHS7EYpspMFghcEmS0YJAhyXIdiuSF8JdyQrCadBrm+xwg2NirJAsELgswWDBKEGA679C9ullncHJbxn2eFG5RowSAhqB7BIEEIU1iY9atyu9SHG+UR4UYFg4QgiwkGCcAN3CA/EW5UMEgIsphgkADAIHUEDRgkFDqCQQIAg9QRNGCQUOgIBgkADFJH0KAemsu7DLVA8IIgswWDBAAGKTwQQZAVBYMEwDCDdNjlH/jPuQHVJxYGCUH1CAYJgHEZpCJV0PaoqTr/f4pDkVZzXRZugjBICPJCMEgADDdIV8qUzH/yv73oVORK4WYIg4QgHYJBAmCqQdZQfirtD/zvEx126YxwU4RBQpAGwSAB8ItB1kDde2jVEaddOifcHGGQENSAYJAA+NUgaygpSP+bwy4vgkFCkFUFgwRAiEFef+3C9O78uSdgkBBkNcEgARBqkOrrnxj1O/78t2GQEGQlwSABEG6QBGM3/MRhl550KPIVGCQEWUEwSAAsYZA/7os8zq8mqdMgCwaOYZ/0HGmB4AVBZgsGCYClDJIot0t3W9Ug0awcCh3BIAGwnEESPIucCYOEIJGCQQJgSYNkLOtnfJtfwSAhSJRgkABY0iCJUnt6C9N7ucIgIagewSABsKxBEg67PAsGCUEiBIMEwNIGWXJy7N9NzSJhkBBUj2CQAFjaIK/t37swSAjyt2CQAFjfIIvkUTBICPK3YJAAWN4gK5SMP5nWPAAGCUH1CAYJgOUNUt1Hu3QcBglB/hQMEoCAMEiHXV4Dg4QgfwoGCUBAGCTf/kJLGGTPkezWaBgkFAqCQQIQEAbpUKSXrWCQxYNvZd/0TbNA8IIgswWDBCBADFLOtYJBQlDoCAYJQEAYJN/2qzBICPKnYJAABIZB2uVlMEgI8qdgkAAEhEE6FHkrDBKC/CkYJAABYZB8+6dgkBDkT8EgAbC8QTpPjPqd3k46X24ezsalJbKu7WLZhFHdmHPRmOsa1rkDi2oVeVXNuZqJUULzGJbSJoG9kNCHHRs4xgIBEYJcBYMEwPIG6SiSuujaj82ZbNfYNLaqWwo7PDCTlQ7NskCwqa0Cbopbe6ey5zr0ZO2aRbHFnQcJ3ycI+lEwSAAsb5B8uxM078PbPBMbJjqw6NfB/jLr0yqezUkcIHxfIOiqYJAAWN8g7dJmTa//eQZzDhcdVLzXUZ7tJjaPYTv6pgrfFwiCQQJwg7UN0lkw5vcORbqk6fUfutUCQcU3vdVlCHq9QhYRDBIAaxukXb5L02vvy7BAQPFdZ4ZksbhmUaxocOCbPRTogkECYHWD/ErTa3+caYGAYoyGtunAdvZBv1dItGCQAFjWIB12KUnza68KHoPMjExkG3qOFL4fUKgLBgmAhQ1SXqvdIIOnjnBMVBL7BAYJCRcMEgBLGqSzKKOrrteGQUKQwYJBAmA5g2R7U37Os8f9MEjx+wKFsmCQoB7YofG/KFPSOzkU+X6HXZrN9RHXdqci7+U/96mTRxR5vUOR3uCazM0hq7worV1x8bjfiN53vVjNIPlxnar7tWGQEGSwYJDABXZM+iUPtsO5AX7gtEvnvDEJbpbV/PkHaP1CbrDpZUrmP0W/r8awkkHyzLEzHUMYJAwSEi0YJOCcOZP5XzzIPsqN7YwhRlHLOOS93DymVBRKHRhL+Q/R79cTqxhk+am0pvwzKPXqtf1okCVDstjHPUewp9r3ZONiktnoth3Vn0/z/6/rMcLn3q8wSMgagkGGPM6ijJEORS42xRjryjCvmvBCrhS7PfXXot8/YQWD5F9S/so/h8Nev7YfDJKM8ZWkgeoqHOkRndi8pAHsg+7D2Lbeo9Wf9H/6Pf391eSBXhslDBKyhmCQIUtZWdZveWB9x1/GWLekcw5FestRmD6IhndFHQvRBllycuzf+XE45NNrm2yQRwZkqgX8d0Qns739pAYfu6dfOrstKll9PPVX1ftaMEjIGoJBhiTXhvIOiDVHT3ORyx12eVG5XepDszj9eTxEGqTjVFoEf+4Jn1/bRIM8PCCDdW4Rp2aIep43N7E/69IiVjVXPc+DQULWkDaDTExM/OnNTVq14v/8Cd1CovVbSZSE0N/Dw9vENr2pZWubzfYLvfEB+JmKQqmZQ5Htwg2xAan34RT5FaoF9Mc9S1EG6SyURns7GcpfBkm9UYfwTJCGVr15PpkqZZI0PKv1OTBIyBqq3yCbNo36Y2Rk24lxsZF7Y2Miy9JHdzijHEk76VCkyx6x7MLMab1KR47oUNKhXZQzKjKyOD4ucmtEmzZPhoe3jiNz9T2CAUOgGaXcHBXRBqjLLBWpiO9zblmh3JGxSTeacVz8bZDXVuh4y9BjZZJB0vqMd8Z09mkb46KTdWWfMEjIGqptkDZb2z/Fx0SuaB8fVfZSTs9LB3eP0nWdlpyU2NdbR7C5eX2q00cnlEVHRjraxUdte+SOhN8ZH9mAZmhCDP+AvhFteL5J4t/Q5JmOIqkLN0vDvnn5yyBpn/l7uNOU2cImGOTpIbeyDrdEs/39ZZ+2s6+/pG6Htqfl8TBIyBpyN8hWrdqmxERFnl68oP/lskLJkOuWxzP27faRrEyRHXSLqcwu9/P3LSZwg1p8/op4gzNUZdxoXncoGUN9bU5gtkFS0wVHkTyWXwAHTTseJhgkzUwdY9DajBmRndiH3YdreiwMErKGfjTIyMg2Wb17xjkP7x2t6XosOJTKvvliBNv26TBVOz8bzo7tT9VmmnbpNP8inVN+Wg73Ja4BjTgL07vzbypXLGBqpogbzw/U3ICb5X3cpKL03rc0yyArlLRbqMuQX4a1TTDIJ9r1YAu8vPfoKSr7oO1peSwMErKGrhpku+iIET27xzkLD6fXe/0VH5fY66/2ZWMzOrHkxBg2oF88k0YnsLvvSGJ33p7I0kZ2YP16x7MuyTGsZ484ds9dSWxefh/2xaZhrL5sVI3ZirSurEgewNgNPzHSE8A1aFjP1MzFilIkJzem1fwEe8BpT49tbDjWQIM8W6ZkJKqt9/w9nG2CQY7lRrXeIKOiBgK3RidpeiwMErKGbh/RvHnz33fsEPXD4T11Z45kbnNe7sM6JkSzZyd1Z5vWDmWlpxoefj1xMJV9tGoIeym753VDvffOJLZ88QBmP5pWj1lK31M7T8ayfuYv7wgJ6KAKNyzR4pkd/7np6v1LeSyZZvmptD+4HCNjDFKkTDDIlDYJ7Ks+qYZsi7YztG0HTY+FQULW0O0jUoa0/2zBnL51XnNFx9LVzPCxB7toHj6tSzRxZ/0HQ9mkCV3VDPOecUlszXuD684sFfmYwy6NsWJHsoCDZn3y4H9EePC2qnimyX9+7XV7NysJGSQEGarjk6UnOifHXKkrIyTzoiHU+fWYp7ei7X68erA6BNu9SyzLe7E3O/l97azyWh17CoZefaBckXsLD9yQf2SCQT7erjtbmDzIkG3Rvcwn4rtreiwMEhIuKYstntu/fNJj3eq83ubm9lYzRzOv6eMHUtVh2K7JsezxR7qwQ9/WLilxKPJWp5IZLdprAhKnXVouPHBD/pEJBrm6+zA1izRiW5mRieqsWC2PhUFCQjWca1OmakofvjO41rVWfCJdHQo9VUdmZ4Yog108vx/r0S1WNWXP2kuazEMlIhWFWX8U7TkBA5UWXLv3Jj54Q+bLBIMsHnwrd/V/LwAAG4FJREFUa39LNDvgYx0k1VHSdmh7Wh4Pg4SE6s0x6jU1bEh7dmBX7axt5ZIBbMLDXf1+jZNRvvFaf9UoaUKQp0FTeQiXjGFXDXBz7Ck8aEP+k0mddPIT+7F7Y7v4tI3xMZ3Z7MT+mh8Pg4SEacqt16+pHl1j1UJ+z2vtsYe6qJNoRF3rZ05KbNbM3urQ67y8Ptw43f/Os8k1tACCaA+yNPwgPS08aEP+k0kGSd1v+rduzxZ19u5eJN3DHNC6ndrTVetzYJCQEN3DzfHEj9cUDaPWda2NGtGB7f9GX4s5M1RwKI098WhXteZy64Zh7n+nCYiKlCXahywLfYsQ/QFCfpSJq3l8PyCDJTWP1W2SZI70PFoNRM/zYJCQv/X1kDTm3JPhdk3VZ5BU8E8lHsKv+Wv6cvNwNqh/OzWzrdXMQJHedS1pA9dw2qXjoj84yI8yeT1IMknKBGm49WAj9yTpnuU9MZ3ZQJ556jVHEgwS8qc+6jmCDe3RvtY1NZBnZnV1z6GMzV8TdLSqpmEBDQuvf3+Ix9+lgopCqYNoT7IM1G3Bc9kVKMhlskGSaLiV7knShBuqaaQMcWOvkWxn3zT152vJA9VZr/R3uueoZ1jVVTBIyF+iCWRd42LZd1/XHjK9fWwi27FlWK3fU3MAKwyx1qU9O7jZD2qnzsB1zXLJDxx26UmzVkQKKM6cyfyr6A8K8rP8YJA1otmoVAJCdZJUvkHrPdJP+v/73Ydrnq1an2CQkD9UxM/T/nHteMY1tM5r6rmnuqszVj1/X1/5h1VEk3ZmTOvJeveMV5fWcvu7Iq3i/vBfoj1KKOWn0pqK/pAgP8uPBmm2YJCQP3Rfpy4sf1qveq+pxx/uykaP6FDr99Q9hwxI+DXfiD7fMEwdcqUaStffU2/u8lOZN4v2KWGUFWe0Ef3hQH4WDBKCNGtWl/7sLimp3uuJlqjq3i2W9e4RW+tvNIw5cnht47SiaKYrNUS/b3yy2uCg5vfUXpPW1RXtVUKoKJSaif5gID8LBglBmrSh10jWv3O7emeiUu9TKsb/astwNnhAO3Z4b+1G5N06xzLliLUm6tQnquWkjHfIQP5eXFYluXpfUs4U7Vd+h4pERX8okJ8Fg4SgRrW9TyrrEBHN9n41ss7riMwkK7MTWzjv6rAkFeTnz6g9DPvck93U9R+FX/c69OG7g9UG6J99kuL6fq/Q5B3RnuVX7PbUXwfzAslQHYJBQlCjat8imk16rP42cWSGtJJGzf8p46KyDs/Hfbt9pDpbVPh1r1PffDGC9ewex95bNtDt9zybfDmkZrg6FalQ9IcB+VGrMoUHH6NEM2I3wCAhgzW9Y18WHxVV7zW0ZX0K69MzrtbQa/qohDrLPYYP7cC2bxku/trXqaPfpaqNBV6d7Z4B80zy9ZBZZ9KpyBtEfxCQH7UueAySykZ29kkTvh9QcCm2RVStGZ01OnEwVZ3xSRmW59+o7+q9dybV+j0NWVKtpPBr3wvZj6apxp/9bHe33zsUeSnPJH8q2r9MhxvkVNEfAuRH7dXfscaKKhmSxeKaRTH74LHC9wUKHu3qm85a3NK2zmuH7jtmpCWwNxf2r/fv1F6urpU9KBOrVWsYICo5KbE7b09kTz3hvuZlSJikszC9u+gPAPKzHvStQN8KWt51qDrEKno/oODS8x16sT7da99LJL2U04s9eF/nBq+tNxf0VxsEeP6eGgZkSh3FX/teipoK3DMuSW167rpyCa0vGdT3JAsLs37Fs8hK0R8A5EdtyWTOYeKDkbcqGDSGJbeIZdt6jxa+L1BwaVRkR/bAvUm1rpmNHw1l/fu2c6sRrEtkJH17xdU5+1VO6yh0+StfRe+N6iSf8PgC4LBLeaJ9zFS4QS4QffAhP2vZGOZMER+Q9Iqamg9q3Z7lduonfF+g4FOPiHiW+6J7uQZNVqF6RpqRquXaWr1yEBuX1anW73dvH6G2daN1GoVf/16Kmp3fdXtS7XuSdulB0T5mGmWFckfRBx4SoI08k7zLu0bh/hQ1P/+6bzrLSeijNjifnzxQ+D5B9Wg015yxftX+7HT29MgehmwrOS6WLZjz46xNMoTUkQlsxZu1e602pJHD2rPN61Jq/f75p7vXMpdAE92TpGx49sze139H5YLlipQm2stMw2mXtog+8JAA0f2ELzKYcwXPKBf9qF0vjmIxrSNZVKtras7VTIzib4lSl9Ca0qG3V8tiQX7UmCy/n8PUyea2MbUzNm/UJTmWzc3tc/3/2ZN71HlPsTHt/Gy4OmHHM1s8XZCuDsHS2ozCr30fRCUuKYPbu31xcCjSpTIlvZNoLzMFZ6HcQ/RBhyysWZgtCmlQgBtk/z7t2NRrGd661UPUFnLeDolStjh9ao9av9+2MUU1ycbuZ1pdVPJCzQS2bvix9pObZBF1aBPtZ6bgsMtrRB90yKKCQUJaFOAGefvYTiwrs6PaGYfuO/qyniMZYK+ecWzXl7XLO6jnaWMzYgNBVA9Kx+ng7h+Pk0ORv2THpF+K9jPDcdhTb8KMVqhOwSAhLQpwg5w+pSfPimLV7jerlg/yeXubPk5RW9DR0Krr72tqKpcsqrumMpBEM3Opwblrpu2wS/mi/cwUnIp0u+gDDllQMEhIiwLcIPfuHMFuuaVNraJ4X5TzfE82aULtvq41XXnqak8XaMp5rgeb+Kj7e3QUSgNF+5kpOO3Sa6IPOGQxwSAhLQpwgyTd0qwN2/OVcV1vqH5wREp7tVmA59/IHMkk61oqK5BE73H0iAT27lK3rLusrDDtH6L9zHCurvIhfSH6oEMWkk6DpNKM7/rL4gM25F8FgUH27RXPnn6i/pU8vNGhb0ep9+r27axdS7l6xSB1MlDx8cCtjyQd3jtaXSaL6kZrfsd95GPGbviJaE8zHMcx6X+cirRL9EGHLCKdBknLUGVFJYkP2JB/FQQGOX92X5bQPtrw/aT7kdQooPBw7dmrtJ4ktaIrPRXYJrl88YBajdnLlPR00X5mCpWnR/+Fm+Qe0QcdsoB0GuT6HiPYWBhk6CkIDJIm0DS/pS07uGu04ftKS0fdmtnRrZ9pjSY/3V3td0rNCYRf7z7ojlsT2colLvWRdrnkrD31z6L9zBScBWN+zz/MbaIPOiRYMEhIi4LAIEnDh7Rn4283Z4mqRx/owp6ZWPckIPrbhIe71mmggSK6n9qjW6z7epmKvEC0l5lGQUHKf9IimaIPPCRQMEhIi4LEIHd8Npy1aN6GlZw0vpifJrRkZXZi+S/1rvU3yh7vHZ8c8CY5c3ovtQtRzf8dilTtKJQjRXuZqTiUjPt4unxR9MGHBAgGCWlRkBgkKblTDJv6bA9T9pkm5FCrtrfqqIMkk3zg3mT28P2dA3a4lWoie/aIUyfuXP+9Im8Q7WGm4ziVFsGzyX2iPwDIf6Iei86JY7foCZQwyBBVEBnku8sGsTat2pqWyb0wtSdL7BjD3n+7dvkHveYj/+6sZpOBOnHn9Vf71q4nLcroKtrDTEcdclWkyWrgtMAHAZkpaUupPb2Fc2hWjp5ACYMMUQWRQZISE2LYc5OMX31jw5ohajPzfV+PVme21meSVIBPq4koR9IsEAv0qeRaFnlsv0uNpyKvF+1ffqPUntmS0mbRHwRkvGjmGVdmTQ0TDBLSpCAzSDKyFs3bsqLjxt2LpGFHqomsWVSZ/l+fSZLm5fdR6yRd6wsDRbNf7sNeynFfX5NGIUV7l18pK8xI4G98k+gPA/Jd10YF5lQoGX9y/YxhkJAmBZlBkvr1iTds+zRcSl113ls20O33ZJJ9esbV+n2N3lk6UJ0ZSstoiY4RelRwKE1t2O46TM2/eC8S5VXCoEyjrCi9P88od4v+UCD9ogVP+c8VzuIxtro+XxgkpElBaJAHvx3Fmjdrw7Zv8b393LOTutfb5/XIvtFqY/OF8/rV+fcvNg1TO9XUZ6JW1d13JLFNa4f+GGvs8g9lZVm/9bdHWQLGJt3oUDKGOu3Sp6I/GKhxqcaoSKsam4INg4Q0KQgNkjTxsS6sQzvfuutQS7lhQ9o3OOmGuuxQT1OawFPX38lEhw5ur5ZQBMoMV1pU2bPuM2i76+iB7lHSsic8AFeI/pAgd1FdEv/5tlPJjNbyWcIgIU0KUoMkxcdFsScneLfKx3dfX+3FSutMNvZYWhpr3G2J7LGHuqg1k3X9neokafIOGaboWNKYTn6fxvr3becef+zSR2b7T8BQUjL6v3lGeSc/KDtEf1iQdE790lLPUGp96DXI4wPHsA+7DxcfsCH/KogNcjt/nVvUoVZ99wFp4eSB/eLZ+veHaH4OZYc0FJs2soN6H6+ux7z91kDVdNd/MFTX/ogQ3V91nYlLw6xBuaiyr9CizDxAPwSz9K+odtVRKN1LrQO9+dz0GiQUogpigyQ9M7E7i4qIYGcKtA9vPnR/Z/ZiPUOmjenNBf3VUoldX9Z9/5NmwtIMVzJTMmLRcaY+0X3IbZ+6r3tZpqR3Mtpfgooas+RZzWbUVJoih1ORXqVZxr5+VjBISJOC3CBJPbvFsfRRCZoe+8Zr/VlGWoJP9wu3rE9RM8XVKwfV+Xe6pzltSk81S6OJPBaIO7U05ekebPkbHpOLFGmCET4SEhQXj/tNuT2jr0ORZ/D0+zvRH2jgSjrHf67gx3GwkUMYMEhIk0LAIE8eSmOtWrZls2b0afBxOz8fri6GXHDI9/rF7/eMVif4PM0zRSrAr+sxX24ezvr2imPPPdnNvVG4BUQZ9JsLPdvqSa8ZFZ9CjpKTY//uLJRG80A/k+tLZJj1ix8fhf+cS18wqMuRGZ8HDBLSpBAwSNKGj4aqpR8b1tR9/4/ut1H939YNxmV0lCk+91R3NnRQe3Zg16g6H0Pm+VJ2T9WYP3i77oxThKZP7VGHQcqbzIhVIQllQ+XFcnu6j8bN8k2enn8bso3TFamCm+L7dCxoprA/VuyGQUKaFCIGSZo9szdr1aKturyT59/GZXVir8xqOMP0VmveG8y6JsfWHrJ00b6dI5mc1pGNzejEdm/3vX7TVz1wX2e28SP3LxM8jh8yO26FNIxl/UztE2qXh3OzfNapli3QAs/qMKPwk8IIqZkzNV9QpPncEG8tK5JbMZbyH/4+1jBISJNCyCBJd9zaicXHRrHTJ378HbVXG39HkqmvS513MqWOajnIiYP1D+F++M5g9d4klYUcPyCuVV3/PvHuPVnt6kzWg/6OY+AalcXS/1HGWa5kpHJzmcg1j5vNam6eO2lI8lodoLATppYUyXlt35ZSI3ja77LijDZsb8rPRR9LAgYJqRrNlZZ1XcqoMWxml75sRpc+V9Wba1pPN014uAt7ZlK3Wr/31GefpDR4jdA9trqeN/HRLqxn99gGt50zuQd78N7kRvfBGyV0iGJJiTFqOzWaUEOGZD/qn+bii+f3U7PJVcvrH06lodn5c/qqj6MhWn8bJc20pfunnr/nBrlfdFwD9UBZ2JkzmX8lE3LY05NpUoujSB6rlqAo8vNXGxzIr/APchl1muFa56RZoQacMFQDVK5IaY4iqUuFktHccUz6H9HHozFgkJCqDZlu5zIVrVM9HnVLqU+U3U18tGuDjyHVNO+uT/u/GVXn85a+3p/lvtirwW3PmNaLDRnUrtF98EbLFg9Qs8hB/dupreC++cK/Q5qHvh2lDqfSIswHd9d9b5JEZSBzeHZLM2Jpsk9DjzVS941PZkvqWPeSYqrouAYMhH+gnxhy0ihyuej3ohcYJKTKwyC1aOoz3dmy1wf41TQ8ReUPNBxp1vZptY82LduyAf3amfYajYkampP5zZzeq96ZriT6UrOAZ5S0gsgdtyayT9ea12iAJgpR9ljPmpovio5rwEBgkBYI0BAM0guZbZCkEwfSWGREBLt9rJj7oSS6z5fUKUZtLtDQsCuJTGvd6iHqRB5aKYRqKaklnlH7QuZIw7oNZKopouMaMBAYpPZAenRgJlvVLUV8QIdgkHb/GCTpODeoyIhIdudtSULe5123J6nDqN9uH6lmhymD27PN6xq+t6vu94FUNje3NxsysJ26okj2s93Z5xuGedXggGo2qXsQdfih4d+6Y6DkNKskDQgCBqk9kKJZeZAKBtmoKIvrxTO4WTN7+/U9zsvrU+s9ksnR+pNj5I6NToKqEZWt0JJbdE+zc1IsGzWiA3v+6e7qvV6ahEQzaGnVEXosDddSA3Z6HSp7oZm1dB924dy+dTZa/1HSdNExDRgMDBIGGfKCQWoSdbKhiTNkLPXcfzNUZFC9PBqCu4oapdMyWmR2NKyqZ9uUBdIalJRV3jMuSX1fNCGJzLNf73i17R79njJQLTWXp0+kFwXCxESgExgkDDLkBYPULMqgqED+3vHJDa4B6atotY+e3ePY11sbNyfq7HNrZkfV2Kj0w1/lKDWi5gZdk2O+FR3PgAnAIGGQIS8YpC5R9kiLBdMQpxn9UekeoZSaoK76oed5VDIzmWe3XZJj2GMPdlHvU5qd6VKpR8cO0c4mTVr/WXQ8AyYAg4RBhrxgkF6JJs507xpXbw9Vb0UzTx99oIvXzz9zUmIrlwxQs0qacUrLZnk7Oac+0QQg6iw0qH87Z8+ebf8kOpYBk4BBwiBDXjBIr5U6sgNL7BjNNqzRdw+wPtFCydTCrfi4MWZG9y+poThNzklOjGG3j01Uh2Fp6FbvEDEZLK3/+PD9ndUsdW5en5LCAyP/KDqOAROBQWoPpJt6jmJSZCfxAR2CQdqtYZD33pnEVrw5UC3Qp1mivmyLSiko46OhUjP2le6f0qxXWqaKhodpdRAq/6CuOM9O7Kp2JqKJOx+vHqyKOgqRmdKkJOqc1LFDtDqjlYZVSwqkSlpUQXQMAybDjW09DFKb9veXWdcWceIDOgSDtJBBUpnEqe/T1OL8e+5K8uq+JHXJofrG+hZQNks0oWfz+qHc4OPYg/d1Vod3J03oqmaJz07qzl64tuYjHeuajNOhyFf4z+Gi4xfwAw67vMagk80h+r3oxZtOOj1bxrOv+qSKD+oQDNJCBlnzf2r3RqUZO7boWzNy0mPd1ExNxHvIeb6nOqlH83MUOVt07AJ+gn/Y7xlxkjnsUqno96IXbwzyrS5D2NC2HVjJkCzxgR2CQVrMIEnbNqaobd5end1X0yxSah83clj7RorwzRHVUlJ3HGoOoOk5ivQJY5N+Kjp2AT/hpJU9DDjRuEGeEf1e9OJtL9YH47qxjMhOrAwmGRyCQXqtugySREOudG8vdWRCg7Nc9+wYoU54qWuBZrNFzQLotXX0aj1RoWRgxmoo4bDLi4054aTjot+LXrw1SAfX0q5DWOkQbY8vHnwrW5g8iC1IGqhZeoZx6d6onm2Tjg0co3n7m3uN0rXtxZ0H6fry8E63FF3b/7D7cM3b1nLsD64drft8h0FeVX0GWaMP3x2stmmjoVfPbJKWqqJJMhs/Mm/ljfpUc8+TJuVoeTwt5+dU5BjRMQv4GacizTfihOMZ5D7R70Uv/lrN4+SgsWxyh17s2fbatb7nSM3bJzPVs+3nOvRUTVXr9t/jBqZn+9kJvXUNQecn9tO1/deSB2re9il+7J/n+9PQ9r5d0/CajXUJBnlVjRkkqeBQKrv7jiS1LZxr27b7705muS/0ErLfTzzalU15uoee+CaLjldAAA5FetmIE45/O9wq+r3oBctdQaowxOq1tBhkjT75cKhaDvLEI13UJuRUMuGPnq6eoqxx5PAOmu958n3MFR2rgCD4N6OHjDjp+Em0RPR70QsMElIFg/RaegySRF1uqHSiZYu21a/N7VPlb4OkJbNoAeaj32m75+mwy5+xvSk/Fx2rgCCc9vRhRpx4PBOdLPq96AUGCamCQXotvQZZo2+2DXs3LjZqaaeEGMfqFYOu+GNfqTsP3fP8dK22e57cvO0lBel/Ex2ngEDKT2XebMgJWJQxUvR70Ytj6G3PCQ/OkHjBIL2WtwbJv1C/SdfgzU1atYqOitw6qH+70k0ajctb0aza/Bna7nnyzPFiebHcXnSMAhbAqchHfTnxqLPEWXtqwHWzdw7Jul14cIbECwbptXw1yBqaNmmdEBsdubVXj9jSD1YOumL00Cu1jKP2cpq3q2TcISouAYvhsEv5vpx8/PnbRb8Hb3AOvqMJzyKvCA/QEAzSCwWTQdYQHt6mbXR05JrEjlGl8/L7XKpvsWQ9oq4+1N2HajMbeyzVbCZ2jD79z3/+85f+jkfAopQVya34CVvt7QlYrmSkin4P3sID5DLhARqCQcIg3WjSpPk/2rSKyImIiCi6Z1xSKS2K7M3+neSmSE3Jv9w8vNHHUpP09vHRzmbNIvv6K/6AAIGmMnt3kUhbGJt0o+j995azI8b8r3PIbSeEB2kIBgmDrEVUVNTPbr65VUp8bNSW9nGRpRMndD27fUvjZnf1NWR1TcjXX+3b6OPmz+pzKaJtREmLFm2SzY45IAChqcwOu/SRrpPcLh2oLJb+T/S++0pZStY/HENv2y48UEMwSBhkvTRpEvXbZuFtpfjYyM9joiNLs8Z0KnljQf8rB3fX3Srupeye6god9e0DreTxCjfGTgnRpbFRkSttNix8DBqAmvA6FWmiU5ErG/nGVcUfN895YtTvRO+zUbBJk27kmeQw59CsFY4hWfv4zyNQaMixKeM8DNL6BukKZZbh4a06RbVtmx0fH7U7JjriTL/e8cWPPpDszJvRq2r6lB6sa5dYtnndUHWRY9IHbw9ii17pxyY+2rWiW9fYM5FtI4ojIiLybLYWYUbFERACnDmT+V/OQmk0N8IZ/GR+h5vhOn5Cr+b/nsvN87bK06P/InofATCKskK5Iz+3U/ToiUe7TJk/p/cDep9npNa/P/S2TLnjfJH7cGtmp1dWrRw0Tu/zyu0ZcUZ/jv/8Z/P/s9ladrPZWt3TtlWbRfHxEe90iI/8IC4mcl18bMTHsVERi1vc0ubJ8CatRzRt2vomo18fAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKS/w+exkLq/CBTggAAAABJRU5ErkJggg=="/>
                      </defs>
                      </svg>
                  </span>
                                <span class="boxx-txt text-gray-2">   @lang('site.The deposit is paid at the time of booking')</span>
                            </div>
                        </div>
                        <div
                            class="booking-now-btn py-4 w-100 d-flex justify-content-center align-items-center"
                        >
                            <a href="#"> @lang('site.book')</a>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="tabs-details mt-5">
                        <ul class="tabs-nav-details list-unstyled  mb-0">
                            <li>
                                <a href="#tab-1"
                                   class="tab-link d-flex align-items-center justify-content-center"> @lang('site.details') </a>
                            </li>
                            <li>
                                <a href="#tab-2"
                                   class="tab-link d-flex align-items-center justify-content-center"> @lang('site.comments') </a>
                            </li>
                            <li>
                                <a href="#tab-3"
                                   class="tab-link d-flex align-items-center justify-content-center"> @lang('site.locations') </a>
                            </li>
                            <li>
                                <a href="#tab-4"
                                   class="tab-link d-flex align-items-center justify-content-center"> @lang('site.conditions') </a>
                            </li>
                        </ul>
                        <ul class="tabs-content tabs-details-content list-unstyled">
                            <li id="tab-1">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="details-txt py-4">
                                            {{$aquar->details ?? ''}}
                                        </div>
                                        <h3 class="details-head"><br> <br> {{$aquar->description ?? ''}}</h3>
                                    </div>
                                    <div class="col-12 my-lg-3">
                                        <div class="accordion" id="accordion_details">
                                            @foreach($aquar->aqarSection as $key=>$section)
                                            <div class="accordion-item details-item mb-2">
                                                <h2 class="accordion-header">
                                                    <button
                                                        class="accordion-button fw-bold"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-details-{{$key}}"
                                                        aria-expanded="true"
                                                        aria-controls="accordion-details-{{$key}}"
                                                    >
                                                        <div>

                                                            <img src="{{asset('images/aqars/'.$section->icon)}}" width="50" height="50"
                                                                 onerror="this.src='{{FRONTASSETS}}/images/side-image-2.png'" alt="car"/>
{{--                                                            <svg--}}
{{--                                                                xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                                width="32"--}}
{{--                                                                height="33"--}}
{{--                                                                viewBox="0 0 32 33"--}}
{{--                                                                fill="none"--}}
{{--                                                            >--}}
{{--                                                                <path--}}
{{--                                                                    d="M4 27.4933V16.8266C4 16.1194 4.28095 15.4411 4.78105 14.941C5.28115 14.4409 5.95942 14.16 6.66667 14.16H25.3333C26.0406 14.16 26.7189 14.4409 27.219 14.941C27.719 15.4411 28 16.1194 28 16.8266V27.4933"--}}
{{--                                                                    stroke="#CACACA"--}}
{{--                                                                    stroke-width="1.5"--}}
{{--                                                                    stroke-linecap="round"--}}
{{--                                                                    stroke-linejoin="round"--}}
{{--                                                                />--}}
{{--                                                                <path--}}
{{--                                                                    d="M6.66699 14.16V8.82664C6.66699 8.1194 6.94794 7.44112 7.44804 6.94102C7.94814 6.44092 8.62641 6.15997 9.33366 6.15997H22.667C23.3742 6.15997 24.0525 6.44092 24.5526 6.94102C25.0527 7.44112 25.3337 8.1194 25.3337 8.82664V14.16"--}}
{{--                                                                    stroke="#CACACA"--}}
{{--                                                                    stroke-width="1.5"--}}
{{--                                                                    stroke-linecap="round"--}}
{{--                                                                    stroke-linejoin="round"--}}
{{--                                                                />--}}
{{--                                                                <path--}}
{{--                                                                    d="M4 24.8267H28"--}}
{{--                                                                    stroke="#CACACA"--}}
{{--                                                                    stroke-width="1.5"--}}
{{--                                                                    stroke-linecap="round"--}}
{{--                                                                    stroke-linejoin="round"--}}
{{--                                                                />--}}
{{--                                                            </svg>--}}

                                                           {{$section->name ?? ''}}
                                                        </div>

                                                        <div>
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="22"
                                                                height="12"
                                                                viewBox="0 0 22 12"
                                                                fill="none"
                                                            >
                                                                <path
                                                                    d="M20.6004 1.71957L11.0004 10.0933L1.40039 1.71957"
                                                                    stroke="#005D9F"
                                                                    stroke-width="2"
                                                                    stroke-linecap="round"
                                                                />
                                                            </svg>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div
                                                    id="accordion-details-{{$key}}"
                                                    class="accordion-collapse collapse show"
                                                >
                                                    <div class="accordion-body">
                                                        @foreach($section->subsection->unique('name') as $subsection)
                                                        <div class="custom-ul-list">
                                                            <div class="custom-ul-list-item">
                                                                {{$subsection->name  ?? ''}}
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center mb-5">
                                        <div
                                            class="booking-now-btn py-4 d-flex justify-content-center align-items-center"
                                        >
                                            <a href="#">@lang('site.book')</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li id="tab-2">
                                <div class="row">
                                    <div class="col-12">
                                        <div
                                            class="full-reviews round-border mt-4 py-lg-4 px-lg-5 p-3"
                                        >
                                            <div class="row g-0">
                                                <div class="col-lg-9 d-md-flex align-items-center">
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <div
                                                            class="round-box d-flex justify-content-center align-items-center"
                                                        >
                                                            <div>
                                                                <div>
                                  <span
                                  ><svg
                                          xmlns="http://www.w3.org/2000/svg"
                                          width="34"
                                          height="36"
                                          viewBox="0 0 34 36"
                                          fill="none"
                                      >
                                      <path
                                          d="M18.3409 28.2434L29.5832 35.0288L26.5998 22.2402L36.5324 13.6356L23.4527 12.5259L18.3409 0.464966L13.2291 12.5259L0.149414 13.6356L10.082 22.2402L7.09856 35.0288L18.3409 28.2434Z"
                                          fill="#FF8600"
                                      /></svg></span>
                                                                    <span class="text-second"> ({{$aquar->aqarReview->avg('rate')}})</span>
                                                                </div>
                                                                <div class="text-second text-center">
                                                                    {{$aquar->aqarReview->avg('rate')}} @lang('site.reviews')
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="reviews-content">
                                                        <h2 class="review-title">@lang('site.excellent')</h2>
                                                        <p class="review-txt">
                                                            @lang('site.Based on reviews from all kinds of travelers')
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div
                                                        class="rating-see-btn py-4 d-flex justify-content-center align-items-center"
                                                    >
                                                        <a href="#"
                                                           data-bs-toggle="modal"
                                                           data-bs-target="#YourRateModal"> @lang('site.Rate now') </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-4">
                                    @foreach($aquar->aqarReview->unique('name') as $review)

                                        <div class="col-lg-6 pb-4">
                                            <div
                                                class="d-flex justify-content-between align-items-center"
                                            >
                                                <div class="text-gray-2">{{$review->reviewElement->name ?? ''}}</div>
                                                <div
                                                    class="">{{$review->RateTotal($review->reviewElement->id) / $review->CountUser($review->reviewElement->id) ?? 0}}</div>
                                            </div>
                                            <div class="loading-range">
                                                <div class="base-range">
                                                    <div class="upper bg-orange"></div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="row mt-5 pb-2">
                                    <div class="col-12">
                                        <div
                                            class="d-flex justify-content-between align-items-center border-bottom-header"
                                        >
                                            <div>
                                                <h2>@lang('site.Customer reviews')</h2>
                                            </div>
                                            <div class="see-all">
                                                <a href="#" class="h2"> @lang('site.all') </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 pt-4 mb-5">

                                        @foreach($aquar->aqarComment as $comment)
                                        <div class="condition-content">
                                            <div class="d-flex justify-content-between reviews-contentt">
                                                <div class="d-sm-flex w-100">
                                                    <div class="reviews-image">
                                                        @if(!empty($comment->user->image))
                                                        <img
                                                            alt=""
                                                            onerror="this.src='{{FRONTASSETS}}/images/review-image.png'"

                                                            src="{{asset('images/employee/'.$comment->user->image ?? '')}}"
                                                        />
                                                        @else

                                                            <img
                                                                alt=""
                                                                onerror="this.src='{{FRONTASSETS}}/images/review-image.png'"

                                                                src="{{FRONTASSETS}}/images/review-image.png"
                                                            />
                                                        @endif
                                                    </div>
                                                    <div class="w-100 padding-right">
                                                        <h2 class="reviews-title d-flex text-second">
                                                            {{$comment->user->firstname ?? ''}}
                                                            {{$comment->user->firstname ?? ''}}
                                                            <div>
                                                                <img src="{{FRONTASSETS}}/images/car-icons/turkey.png"
                                                                     alt="flag-icon">
                                                            </div>
                                                        </h2>
                                                        <p class="details-sm-txt mb-0">
                                                            {{$comment->description ?? ''}}
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="department-badge bg-main text-white">
                                                    <div class="pt-1">{{$comment->rating ?? 0}}</div>
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                             viewBox="0 0 25 25" fill="none">
                                                            <path
                                                                d="M12.7529 19.6185L20.1689 24.3301L18.2009 15.4501L24.7529 9.47534L16.1249 8.70481L12.7529 0.330078L9.38093 8.70481L0.75293 9.47534L7.30493 15.4501L5.33693 24.3301L12.7529 19.6185Z"
                                                                fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr class="hr-saeeh"/>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </li>
                            <li id="tab-3">
                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="details-head pt-4">@lang('site.locations')</h3>
                                        <div class="d-flex">
                                            <div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M12 12C12.55 12 13.021 11.804 13.413 11.412C13.8043 11.0207 14 10.55 14 10C14 9.45 13.8043 8.979 13.413 8.587C13.021 8.19567 12.55 8 12 8C11.45 8 10.9793 8.19567 10.588 8.587C10.196 8.979 10 9.45 10 10C10 10.55 10.196 11.0207 10.588 11.412C10.9793 11.804 11.45 12 12 12ZM12 19.35C14.0333 17.4833 15.5417 15.7873 16.525 14.262C17.5083 12.7373 18 11.3833 18 10.2C18 8.38333 17.4207 6.89567 16.262 5.737C15.104 4.579 13.6833 4 12 4C10.3167 4 8.89567 4.579 7.737 5.737C6.579 6.89567 6 8.38333 6 10.2C6 11.3833 6.49167 12.7373 7.475 14.262C8.45833 15.7873 9.96667 17.4833 12 19.35ZM12 22C9.31667 19.7167 7.31267 17.5957 5.988 15.637C4.66267 13.679 4 11.8667 4 10.2C4 7.7 4.80433 5.70833 6.413 4.225C8.021 2.74167 9.88333 2 12 2C14.1167 2 15.979 2.74167 17.587 4.225C19.1957 5.70833 20 7.7 20 10.2C20 11.8667 19.3377 13.679 18.013 15.637C16.6877 17.5957 14.6833 19.7167 12 22Z"
                                                        fill="#CACACA"
                                                    />
                                                </svg>
                                            </div>
                                            <p class="details-sm-txt">
                                                {{$aquar->description ?? ''}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="map my-md-5 my-3">
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319"
                                                width="100%"
                                                height="438"
                                                frameborder="0"
                                                class="round-border"
                                            >
                                            </iframe>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center my-md-5 my-2">
                                        <div
                                            class="booking-now-btn py-4 d-flex justify-content-center align-items-center"
                                        >
                                            <a href="#">@lang('site.book')</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li id="tab-4">
                                <div class="row">
                                    <div class="col-12 pt-4">
                                        <div class="condition-content">
                                            <h2 class="condition-title">
                                              @lang('site.allownumber')
                                                <div
                                                    class="badge-condition round-border d-flex justify-content-center align-items-center"
                                                >
                                                   {{$aquar->personnumber ?? 0}}
                                                </div>
                                            </h2>
                                            <p class="details-sm-txt padding-right">
                                                @lang('site.allownumber')
                                                {{$aquar->unitnumber ?? 0}}
                                            </p>
                                            <hr class="hr-saeeh"/>
                                        </div>
                                        <div class="condition-content">
                                            <h2 class="condition-title"> @lang('site.Arrival dates')</h2>
                                            <p class="details-sm-txt padding-right">
                                                {{$aquar->time_from ?? ''}}
                                            </p>
                                            <hr class="hr-saeeh"/>
                                        </div>
                                        <div class="condition-content">
                                            <h2 class="condition-title">
                                                @lang('site.Departure dates')
                                                <div
                                                    class="badge-condition round-border d-flex justify-content-center align-items-center"
                                                >
                                                    {{$aquar->time_to ?? ''}}
                                                </div>
                                            </h2>
                                            <p class="details-sm-txt padding-right">


                                                {{$aquar->time_to ?? ''}}
                                            </p>
                                            <hr class="hr-saeeh" />
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
{{--                <div class="row pt-5">--}}
{{--                    <div class="col-12">--}}
{{--                        <div--}}
{{--                            class="d-flex justify-content-between align-items-center border-bottom-header"--}}
{{--                        >--}}
{{--                            <div>--}}
{{--                                <h2>ترشيحات شقق أخرى</h2>--}}
{{--                            </div>--}}
{{--                            <div class="see-all">--}}
{{--                                <a href="#" class="h2"> الكل </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}

{{--                </div>--}}

{{--                <div class="row">--}}
{{--                    <div class="col-12 my-4">--}}
{{--                        <div class="card card-department round-border mb-3 p-lg-3 p-2">--}}
{{--                            <div class="row g-0">--}}
{{--                                <div class="col-lg-3 position-relative">--}}
{{--                                    <div--}}
{{--                                        class="owl-carousel owl-theme department-img-carousel"--}}
{{--                                        dir="ltr"--}}
{{--                                    >--}}
{{--                                        <div>--}}
{{--                                            <button class="add-to-wishlist">--}}
{{--                                                <svg--}}
{{--                                                    xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                    width="24"--}}
{{--                                                    height="24"--}}
{{--                                                    viewBox="0 0 24 24"--}}
{{--                                                    fill="none"--}}
{{--                                                >--}}
{{--                                                    <path--}}
{{--                                                        d="M22.1494 2.12177C21.563 1.44911 20.8667 0.915505 20.1003 0.551444C19.334 0.187383 18.5126 0 17.6831 0C16.8535 0 16.0321 0.187383 15.2658 0.551444C14.4994 0.915505 13.8032 1.44911 13.2167 2.12177L11.9997 3.51714L10.7826 2.12177C9.59811 0.763676 7.99153 0.00070395 6.31633 0.000703964C4.64114 0.000703978 3.03455 0.763676 1.85001 2.12177C0.665469 3.47987 1.24812e-08 5.32185 0 7.24249C-1.24812e-08 9.16313 0.665469 11.0051 1.85001 12.3632L3.06705 13.7586L11.9997 24L20.9323 13.7586L22.1494 12.3632C22.7361 11.6909 23.2015 10.8926 23.519 10.0139C23.8366 9.13531 24 8.19356 24 7.24249C24 6.29142 23.8366 5.34967 23.519 4.47104C23.2015 3.59241 22.7361 2.79412 22.1494 2.12177Z"--}}
{{--                                                        fill="#FF8600"--}}
{{--                                                    />--}}
{{--                                                </svg>--}}
{{--                                            </button>--}}
{{--                                            <img--}}
{{--                                                loading="lazy"--}}
{{--                                                src="./assets/images/department-1.svg"--}}
{{--                                                class="department-img-list of-cover"--}}
{{--                                                alt="image 1"--}}
{{--                                            />--}}
{{--                                        </div>--}}
{{--                                        <div>--}}
{{--                                            <button class="add-to-wishlist">--}}
{{--                                                <svg--}}
{{--                                                    xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                    width="24"--}}
{{--                                                    height="24"--}}
{{--                                                    viewBox="0 0 24 24"--}}
{{--                                                    fill="none"--}}
{{--                                                >--}}
{{--                                                    <path--}}
{{--                                                        d="M22.1494 2.12177C21.563 1.44911 20.8667 0.915505 20.1003 0.551444C19.334 0.187383 18.5126 0 17.6831 0C16.8535 0 16.0321 0.187383 15.2658 0.551444C14.4994 0.915505 13.8032 1.44911 13.2167 2.12177L11.9997 3.51714L10.7826 2.12177C9.59811 0.763676 7.99153 0.00070395 6.31633 0.000703964C4.64114 0.000703978 3.03455 0.763676 1.85001 2.12177C0.665469 3.47987 1.24812e-08 5.32185 0 7.24249C-1.24812e-08 9.16313 0.665469 11.0051 1.85001 12.3632L3.06705 13.7586L11.9997 24L20.9323 13.7586L22.1494 12.3632C22.7361 11.6909 23.2015 10.8926 23.519 10.0139C23.8366 9.13531 24 8.19356 24 7.24249C24 6.29142 23.8366 5.34967 23.519 4.47104C23.2015 3.59241 22.7361 2.79412 22.1494 2.12177Z"--}}
{{--                                                        fill="#FF8600"--}}
{{--                                                    />--}}
{{--                                                </svg>--}}
{{--                                            </button>--}}
{{--                                            <img--}}
{{--                                                loading="lazy"--}}
{{--                                                src="./assets/images/department-2.svg"--}}
{{--                                                class="department-img-list of-cover"--}}
{{--                                                alt="image 1"--}}
{{--                                            />--}}
{{--                                        </div>--}}
{{--                                        <div>--}}
{{--                                            <button class="add-to-wishlist">--}}
{{--                                                <svg--}}
{{--                                                    xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                    width="24"--}}
{{--                                                    height="24"--}}
{{--                                                    viewBox="0 0 24 24"--}}
{{--                                                    fill="none"--}}
{{--                                                >--}}
{{--                                                    <path--}}
{{--                                                        d="M22.1494 2.12177C21.563 1.44911 20.8667 0.915505 20.1003 0.551444C19.334 0.187383 18.5126 0 17.6831 0C16.8535 0 16.0321 0.187383 15.2658 0.551444C14.4994 0.915505 13.8032 1.44911 13.2167 2.12177L11.9997 3.51714L10.7826 2.12177C9.59811 0.763676 7.99153 0.00070395 6.31633 0.000703964C4.64114 0.000703978 3.03455 0.763676 1.85001 2.12177C0.665469 3.47987 1.24812e-08 5.32185 0 7.24249C-1.24812e-08 9.16313 0.665469 11.0051 1.85001 12.3632L3.06705 13.7586L11.9997 24L20.9323 13.7586L22.1494 12.3632C22.7361 11.6909 23.2015 10.8926 23.519 10.0139C23.8366 9.13531 24 8.19356 24 7.24249C24 6.29142 23.8366 5.34967 23.519 4.47104C23.2015 3.59241 22.7361 2.79412 22.1494 2.12177Z"--}}
{{--                                                        fill="#FF8600"--}}
{{--                                                    />--}}
{{--                                                </svg>--}}
{{--                                            </button>--}}
{{--                                            <img--}}
{{--                                                loading="lazy"--}}
{{--                                                src="./assets/images/department-3.svg"--}}
{{--                                                class="department-img-list of-cover"--}}
{{--                                                alt="image 1"--}}
{{--                                            />--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-9">--}}
{{--                                    <div class="card-body position-relative">--}}
{{--                                        <div--}}
{{--                                            class="row justify-content-lg-between align-items-center mb-3 small"--}}
{{--                                        >--}}
{{--                                            <div class="col-lg-4 mb-lg-0 mb-3">--}}
{{--                                                <div class="text-main number-ads">--}}
{{--                                                    رقم الاعلان(12)--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-lg-8">--}}
{{--                                                <div--}}
{{--                                                    class="d-flex justify-content-lg-end align-items-center"--}}
{{--                                                >--}}
{{--                                                    <div class="department-badge bg-main text-white">--}}
{{--                                                        <div class="pt-1">5</div>--}}
{{--                                                        <div>--}}
{{--                                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">--}}
{{--                                                                <path d="M12.7529 19.6185L20.1689 24.3301L18.2009 15.4501L24.7529 9.47534L16.1249 8.70481L12.7529 0.330078L9.38093 8.70481L0.75293 9.47534L7.30493 15.4501L5.33693 24.3301L12.7529 19.6185Z" fill="white"/>--}}
{{--                                                            </svg>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="number-ads gray-txt">--}}
{{--                                                        64 من التقييمات--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <h2 class="card-title mb-2">--}}
{{--                                            شقة مكونه من غرفتين تطل علي البحر--}}
{{--                                        </h2>--}}

{{--                                        <div class="gray-txt number-ads">--}}
{{--                                            <svg--}}
{{--                                                xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                width="16"--}}
{{--                                                height="20"--}}
{{--                                                viewBox="0 0 16 20"--}}
{{--                                                fill="none"--}}
{{--                                            >--}}
{{--                                                <path--}}
{{--                                                    d="M8.20799 9.99996C8.54986 9.99996 8.84262 9.83663 9.08628 9.50996C9.32994 9.18329 9.45156 8.79107 9.45115 8.33329C9.45115 7.87496 9.32932 7.48246 9.08566 7.15579C8.842 6.82913 8.54944 6.66607 8.20799 6.66663C7.86612 6.66663 7.57335 6.82996 7.3297 7.15663C7.08604 7.48329 6.96441 7.87551 6.96483 8.33329C6.96483 8.79163 7.08666 9.18413 7.33032 9.51079C7.57398 9.83746 7.86653 10.0005 8.20799 9.99996ZM8.20799 16.125C9.47187 14.5694 10.4094 13.1561 11.0206 11.885C11.6319 10.6138 11.9375 9.48551 11.9375 8.49996C11.9375 6.98607 11.5774 5.74663 10.8572 4.78163C10.137 3.81663 9.2539 3.33385 8.20799 3.33329C7.16166 3.33329 6.2784 3.81607 5.55819 4.78163C4.83799 5.74718 4.4781 6.98663 4.47851 8.49996C4.47851 9.48607 4.78412 10.6147 5.39534 11.8858C6.00656 13.1569 6.94411 14.57 8.20799 16.125ZM8.20799 18.3333C6.54008 16.4305 5.29444 14.6633 4.47105 13.0316C3.64767 11.4 3.23577 9.8894 3.23535 8.49996C3.23535 6.41663 3.73531 4.7569 4.73522 3.52079C5.73514 2.28468 6.89272 1.66663 8.20799 1.66663C9.52366 1.66663 10.6815 2.28468 11.6814 3.52079C12.6813 4.7569 13.181 6.41663 13.1806 8.49996C13.1806 9.88885 12.7687 11.3994 11.9449 13.0316C11.1211 14.6638 9.87548 16.4311 8.20799 18.3333Z"--}}
{{--                                                    fill="#9C9C9C"--}}
{{--                                                />--}}
{{--                                            </svg>--}}
{{--                                            <span>الرياض, حي العوالي</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="py-3">--}}
{{--                          <span--}}
{{--                          ><svg--}}
{{--                                  xmlns="http://www.w3.org/2000/svg"--}}
{{--                                  width="24"--}}
{{--                                  height="24"--}}
{{--                                  viewBox="0 0 24 24"--}}
{{--                                  fill="none"--}}
{{--                              >--}}
{{--                              <g clip-path="url(#clip0_421_12633)">--}}
{{--                                <path--}}
{{--                                    d="M8.243 3.03004C8.50026 3.09449 8.72137 3.2585 8.85771 3.48598C8.99405 3.71346 9.03444 3.98578 8.97 4.24304L4.97 20.243C4.94001 20.3724 4.88457 20.4944 4.80691 20.6021C4.72925 20.7098 4.63092 20.8009 4.51767 20.8702C4.40441 20.9395 4.2785 20.9855 4.14726 21.0056C4.01603 21.0257 3.88211 21.0195 3.75331 20.9873C3.62451 20.9551 3.50341 20.8976 3.39707 20.8181C3.29074 20.7386 3.2013 20.6387 3.13397 20.5243C3.06664 20.4099 3.02277 20.2832 3.00492 20.1516C2.98707 20.0201 2.9956 19.8863 3.03 19.758L7.03 3.75804C7.0618 3.63057 7.11842 3.51061 7.1966 3.40503C7.27478 3.29945 7.373 3.2103 7.48565 3.1427C7.5983 3.07509 7.72317 3.03034 7.85312 3.01101C7.98307 2.99168 8.11555 2.99815 8.243 3.03004ZM16.97 3.75704L20.97 19.757C21.0044 19.8853 21.0129 20.0191 20.9951 20.1506C20.9772 20.2822 20.9334 20.4089 20.866 20.5233C20.7987 20.6377 20.7093 20.7376 20.6029 20.8171C20.4966 20.8966 20.3755 20.9541 20.2467 20.9863C20.1179 21.0185 19.984 21.0247 19.8527 21.0046C19.7215 20.9845 19.5956 20.9385 19.4823 20.8692C19.3691 20.7999 19.2708 20.7088 19.1931 20.6011C19.1154 20.4934 19.06 20.3714 19.03 20.242L15.03 4.24204C14.9956 4.11381 14.9871 3.98001 15.0049 3.84845C15.0228 3.71689 15.0666 3.59021 15.134 3.47578C15.2013 3.36136 15.2907 3.26148 15.3971 3.18199C15.5034 3.10249 15.6245 3.04497 15.7533 3.01277C15.8821 2.98057 16.016 2.97434 16.1473 2.99444C16.2785 3.01454 16.4044 3.06058 16.5177 3.12986C16.6309 3.19914 16.7292 3.29028 16.8069 3.39796C16.8846 3.50564 16.94 3.6277 16.97 3.75704ZM12 17C12.2449 17.0001 12.4813 17.09 12.6644 17.2528C12.8474 17.4155 12.9643 17.6398 12.993 17.883L13 18V20C12.9997 20.2549 12.9021 20.5001 12.7272 20.6854C12.5522 20.8707 12.313 20.9823 12.0586 20.9972C11.8042 21.0121 11.5536 20.9294 11.3582 20.7658C11.1627 20.6022 11.0371 20.3701 11.007 20.117L11 20V18C11 17.7348 11.1054 17.4805 11.2929 17.2929C11.4804 17.1054 11.7348 17 12 17ZM12 10C12.2652 10 12.5196 10.1054 12.7071 10.2929C12.8946 10.4805 13 10.7348 13 11V13C13 13.2653 12.8946 13.5196 12.7071 13.7071C12.5196 13.8947 12.2652 14 12 14C11.7348 14 11.4804 13.8947 11.2929 13.7071C11.1054 13.5196 11 13.2653 11 13V11C11 10.7348 11.1054 10.4805 11.2929 10.2929C11.4804 10.1054 11.7348 10 12 10ZM12 3.00004C12.2449 3.00007 12.4813 3.08999 12.6644 3.25275C12.8474 3.41551 12.9643 3.63979 12.993 3.88304L13 4.00004V6.00004C12.9997 6.25492 12.9021 6.50007 12.7272 6.68541C12.5522 6.87074 12.313 6.98227 12.0586 6.99721C11.8042 7.01215 11.5536 6.92936 11.3582 6.76577C11.1627 6.60218 11.0371 6.37013 11.007 6.11704L11 6.00004V4.00004C11 3.73482 11.1054 3.48047 11.2929 3.29293C11.4804 3.10539 11.7348 3.00004 12 3.00004Z"--}}
{{--                                    fill="#FF8600"--}}
{{--                                />--}}
{{--                              </g>--}}
{{--                              <defs>--}}
{{--                                <clipPath id="clip0_421_12633">--}}
{{--                                  <rect width="24" height="24" fill="white" />--}}
{{--                                </clipPath>--}}
{{--                              </defs></svg--}}
{{--                              ></span>--}}
{{--                                            <span class="text-main position-department">--}}
{{--                            يطل علي شارع رئيسى--}}
{{--                          </span>--}}
{{--                                        </div>--}}

{{--                                        <div--}}
{{--                                            class="d-lg-flex align-items-center justify-content-lg-between mt-2"--}}
{{--                                        >--}}
{{--                                            <div class="department-price">--}}
{{--                                                <span class="text-gray-2">سعر اليوم:</span>--}}
{{--                                                <span class="fw-bold text-main"--}}
{{--                                                >2578 درهم مغربى--}}
{{--                            </span>--}}
{{--                                            </div>--}}
{{--                                            <div--}}
{{--                                                class="details-btn d-flex align-items-center justify-content-center mt-lg-0 mt-3"--}}
{{--                                            >--}}
{{--                                                <a href="#">عرض التفاصيل</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}


            </div>
            </div>
            </div>
        </section>
    </main>



@endsection

