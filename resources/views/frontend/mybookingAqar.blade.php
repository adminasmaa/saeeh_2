<div class="col-12">
    @if(!empty($bookings))

        @foreach($bookings as $book)
            @if(!empty($book->aqar))
                <div
                    class="card card-department round-border mb-4  p-md-3 p-2"
                >
                    <div class="row g-0">
                        <div class="col-lg-3 position-relative">
                            <div class="epartment-img-carousel">
                                <div>
                                    @if(!empty($book->aqar->main_image))
                                        <img
                                            loading="lazy"

                                            src="{{asset('images/aqars/'.$book->aqar->main_image ?? '')}}"
                                            onerror="this.src='{{FRONTASSETS}}/images/department-3.svg'"

                                            class="department-img-list of-cover"
                                            alt="image aqar"
                                        />
                                    @else

                                        <img
                                            loading="lazy"

                                            src="{{FRONTASSETS}}/images/department-3.svg"


                                            class="department-img-list of-cover"
                                            alt="image default"
                                        />

                                    @endif
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
                                > @lang('site.id number')({{$book->aqar->id ?? 0}})</span
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
                                                 <i class="fas fa-star"></i>
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
                                                    {{$book->aqar->fixed_price ?? 0}}
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
                                         @lang('site.booking_status') :
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
</div>


