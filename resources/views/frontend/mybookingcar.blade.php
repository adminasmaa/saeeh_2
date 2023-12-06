

@foreach($bookings->unique('car_id') as $book)
    @if(!empty($book->car))
        <div class="col-12">
        <div
            class="card card-department round-border mb-4 p-md-3 p-2"
        >
            <div class="row g-0">
                <div class="col-lg-3 position-relative">
                    <div class="cars-img">
                        <div>
                            <img


                                src="{{asset('images/cars/'.$book->car->main_image_ads)}}"
                                onerror="this.src='{{FRONTASSETS}}/images/cars/car-card-1.png'"
                                class="department-img-list of-cover"
                                alt="image 1"
                                loading="lazy"
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
                                  > @lang('site.id number')({{$book->car->id}})</span
                                  >
                            </div>
                            <div class="col-auto">
                                <div
                                    class="d-flex justify-content-center align-items-center"
                                >
                                    <div class="department-badge bg-main text-white">
                                        <div class="pt-1">5</div>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 width="25" height="25"
                                                 viewBox="0 0 25 25"
                                                 fill="none">
                                                <path
                                                    d="M12.7529 19.6185L20.1689 24.3301L18.2009 15.4501L24.7529 9.47534L16.1249 8.70481L12.7529 0.330078L9.38093 8.70481L0.75293 9.47534L7.30493 15.4501L5.33693 24.3301L12.7529 19.6185Z"
                                                    fill="white"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="number-ads gray-txt">

                                        {{$book->car->carComment->count() ?? 0}} @lang('site.comments')
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="card-title mb-2">

                            {{$book->car->name ?? ''}}

                        </h2>

                        <div class="gray-txt number-ads pb-2">
                                <span
                                > {!! html_entity_decode(substr($book->car->description, 0, 125)) !!}
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
                                <span>{{$book->car->car_numbers}} @lang('site.car_numbers')</span>
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
                                <span> @lang('site.year')</span>
                            </div>
                        </div>

                        <div
                            class="d-flex align-items-center justify-content-between mt-2"
                        >
                            <div class="department-price">
                                <span class="text-gray-2"> @lang('site.price'):</span>
                                <span class="fw-bold text-main"
                                >{{$book->car->fixed_price ?? 0 }}
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
                                            {{$book->car->fixed_price ?? 0 }}
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


                                            @lang('site.booking_status'):
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
                                        <div class="text-gray-2 fw-bold span-14">
                                            @lang('site.Awaiting approval by the owner')
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="details-btn d-flex align-items-center justify-content-center margin-top-12"
                            >
                                <a href="{{route('detailbooking',$book->id)}}">@lang('site.Reservation information')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>


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
@endforeach

