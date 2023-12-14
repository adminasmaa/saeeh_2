@extends('layouts.main_frontend')
@section('content')
    <main>
        <!-- Desktop Breadcrumb -->
        <section class="py-md-4 py-2">
            <div class="container">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{route('Home')}}"> @lang('site.home') </a>
                        </li>
                        <li class="breadcrumb-item text-gray-4" aria-current="page">
                         @lang('site.details')
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
                        <h2 class="mb-3 text-gray-2"> @lang('site.details') </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="col-12">
                            <div
                                class="card card-department round-border mb-3 p-md-3 p-2"
                            >
                                <div class="row g-0">
                                    <div class="col-md-4 position-relative">
                                        <div  class="car-img"  >
                                            <div>

                                                <img
                                                    loading="lazy"
                                                    src="{{FRONTASSETS}}/images/cars/car-card-1.png"
                                                    class="department-img-list of-cover car-image"
                                                    alt="image 1"
                                                />
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div
                                            class="card-body card-car-body position-relative"
                                        >
                                            <div
                                                class="row justify-content-between align-items-center mb-3 small"
                                            >
                                                <div class="col-auto mb-lg-0 mb-3">
                                                    <span class="text-main number-ads"
                                                    > @lang('site.id number')({{$booking->car->id}})</span
                                                    >
                                                </div>
                                                <div class="col-auto">
                                                    <div
                                                        class="d-flex justify-content-center align-items-center"
                                                    >
                                                        <div class="department-badge bg-main text-white">
                                                            <span>{{$booking->car->CarReview->count() ?? 0 }}</span>
                                                            <span>
                                                            <i class="fas fa-star"></i>
                                                            </span>
                                                        </div>
                                                        <div class="number-ads gray-txt">
                                                            {{$booking->car->carComment->count() ?? 0}} @lang('site.comments')
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h2 class="card-title mb-2">
                                                {{$booking->car->name ?? ''}}
                                            </h2>

                                            <div class="gray-txt number-ads pb-2">
                                            <span
                                            >

                                                {!! html_entity_decode($booking->car->description) !!}
                                            </span>
                                            </div>
                                            <div
                                                class="text-gray-2 number-ads d-flex align-items-center pt-2"
                                            >
                                                <div>
                                                <span class="ps-2">
                                                <i class="far fa-user text-main"></i>
                                                </span>
                                                    <span>{{$booking->car->car_numbers ?? 0}}</span>
                                                </div>
                                                <div class="padding-35">
                                                <span class="ps-2">
                                                <i class="far fa-briefcase text-main"></i>
                                                </span>
                                                    <span>{{$booking->car->year ??''}}</span>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-department round-border mb-4 p-3">
                                <h2 class="mb-3"> @lang('site.Information that may interest you') </h2>
                                <div class="card card-department round-border p-3">
                                    <h2 class="text-gray-2"> @lang('site.basic information')</h2>
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center">
                                        <span class="booking-icon">
                                        <i class="far fa-user"></i>
                                        </span>
                                            <span class="text-second dd-txt px-2"
                                            > @lang('site.user_name'):
                                         </span>
                                        </div>
                                        <div class="text-gray-2 d-flex align-items-center booking-info-txt">
                                            {{$booking->user->firstname ?? ''}}  {{$booking->user->lastname ?? ''}}
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
                                                <span class="pe-1">@lang('site.Modify your selection')</span>
                                            </a>
                                        </div>
                                        <div
                                            class="cancle-btn d-flex align-items-center justify-content-center mb-1"
                                        >
                                            <a href="#"
                                               data-bs-toggle="modal"
                                               data-bs-target="#cancelBookingModal">
                                                <span> @lang('site.cancle_reason')</span>
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
{{--                                <a class="text-second h2 booking-link">--}}
{{--                                    @lang('site.conditionBooking')--}}
{{--                                    </a>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="card-booking mb-5">
                            <div class="d-sm-flex justify-content-sm-between py-md-4 px-md-3 p-3">
                                <div>
                                    <div class="d-flex align-items-center pb-3">
                                    <span class="booking-icon">
                                    <i class="fal fa-calendar-alt"></i>
                                    </span>
                                        <span class="text-second dd-txt pe-2">
                        @lang('site.Arrival dates')
                      </span>
                                    </div>
                                    <div class="card-booking p-3 text-center">
{{--                                        <h2 class="mb-0 lh-1">22</h2>--}}
{{--                                        <div>مارس</div>--}}
                                        <div class="text-gray-4 pt-1"> {{$booking->car->car_delivery_date ?? ''}}</div>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center pb-3 mt-md-0 mt-3">
                                    <span class="booking-icon">
                                    <i class="fal fa-calendar-alt"></i>
                                    </span>
                                        <span class="text-second dd-txt pe-2 "
                                        > @lang('site.Departure dates')</span
                                        >
                                    </div>
                                    <div class="card-booking p-3 text-center">
{{--                                        <h2 class="mb-0 lh-1">29</h2>--}}
{{--                                        <div>مارس</div>--}}
{{--                                        <div class="text-gray-4 pt-1">الاربعاء 20/3/2023</div>--}}
                                    </div>
                                </div>
                            </div>
                            <hr class="hr-saeeh my-0" />
                            <div class="d-flex justify-content-between py-1 px-3">
                                <div class="d-flex align-items-center">
                                <span class="booking-icon">
                                <i class="far fa-clock"></i>
                                </span>
                                    <span class="text-second dd-txt pe-2">    @lang('site.arrival hour') </span>
                                </div>
                                <div
                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                >
                                    {{$booking->delivery_hour ?? ''}}

                                </div>
                            </div>
                            <hr class="hr-saeeh my-0" />
                            <div class="d-flex justify-content-between py-1 px-3">
                                <div class="d-flex align-items-center">
                                <span class="booking-icon">
                                <i class="far fa-clock"></i>
                                </span>
                                    <span class="text-second dd-txt pe-2">@lang('site.receipt_hour') </span>
                                </div>
                                <div
                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                >
                                   {{$booking->receipt_hour ?? ''}}
                                </div>
                            </div>
                            <hr class="hr-saeeh my-0" />
                            <div class="d-flex justify-content-between py-1 px-3">
                                <div class="d-flex align-items-center">
                                <span class="booking-icon">
                                                <i class="far fa-cloud-sun"></i>
                                                </span>
                                    <span class="text-second dd-txt pe-2"> @lang('site.day_count') </span>
                                </div>
                                <div
                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                >
                                 {{$booking->day_count ??  0}}
                                </div>
                            </div>
                            <hr class="hr-saeeh my-0" />
                            <div class="d-flex justify-content-between py-1 px-3">
                                <div class="d-flex align-items-center">
                                <span class="booking-icon">
                                        <i class="far fa-user"></i>
                                        </span>
                                    <span class="text-second dd-txt pe-2">@lang('site.personnumber') </span>
                                </div>
                                <div
                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                >
                                    {{$booking->person_num ?? 0}}
                                </div>
                            </div>
                        </div>

                        <div class="card-booking mb-4">
                            <div
                                class="d-flex justify-content-between py-1 px-3"
                            >
                                <div class="d-flex align-items-center">
                                <span class="booking-icon">
                                <i class="far fa-car-side"></i>
                                        </span>
                                    <span class="text-second dd-txt pe-2">@lang('site.category')</span>
                                </div>
                                <div
                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                >
                                    {{$booking->car->categories->name ?? ''}}
                                </div>
                            </div>
                            <hr class="hr-saeeh my-0" />
                            <div
                                class="d-flex justify-content-between py-1 px-3"
                            >
                                <div class="d-flex align-items-center">
                                <span class="booking-icon">
                                <i class="far fa-car-side"></i>
                                        </span>
                                    <span class="text-second dd-txt pe-2">
                                @lang('site.year')
                                </span>
                                </div>
                                <div
                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                >
                                    {{$booking->car->year ?? ''}}
                                </div>
                            </div>
                            <hr class="hr-saeeh my-0" />
                            <div
                                class="d-flex justify-content-between py-1 px-3"
                            >
                                <div class="d-flex align-items-center">
                                    <span class="booking-icon">
                                    <i class="far fa-palette"></i>
                                    </span>
                                    <span class="text-second dd-txt pe-2">
                                @lang('site.color')
                                </span>
                                </div>
                                <div
                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                >
                                    {{$booking->car->color ?? ''}}
                                </div>
                            </div>
                            <hr class="hr-saeeh my-0" />
                            <div
                                class="d-flex justify-content-between py-1 px-3"
                            >
                                <div class="d-flex align-items-center">
                                <span class="booking-icon">
                                    <i class="far fa-user"></i>
                                    </span>
                                    <span class="text-second dd-txt pe-2"
                                    >@lang('site.user')
                                      </span>
                                </div>
                                <div
                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                >
                                    {{$booking->user->firstname ?? ''}}
                                </div>
                            </div>
                            <hr class="hr-saeeh my-0" />
                            <div
                                class="d-flex justify-content-between py-1 px-3"
                            >
                                <div class="d-flex align-items-center">
                                <span class="booking-icon">
                                    <i class="fal fa-briefcase"></i>
                                    </span>
                                    <span class="text-second dd-txt pe-2">

                                        @lang('site.year')
                                 </span>
                                </div>
                                <div
                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                >
                                   {{$booking->car->year ?? ''}}
                                </div>
                            </div>
                            <hr class="hr-saeeh my-0" />
                            <div
                                class="d-flex justify-content-between py-1 px-3"
                            >
                                <div class="d-flex align-items-center">
                                <span class="booking-icon">
                                <i class="far fa-car-side"></i>
                                        </span>
                                    <span class="text-second dd-txt pe-2">
                                    @lang('site.car_numbers')
                                    </span>
                                </div>
                                <div
                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                >
                                    {{$booking->car->car_numbers ?? 0}}
                                </div>
                            </div>

                        </div>
                        <h2 class="mb-3 text-gray-2">@lang('site.Price summary')</h2>
                        <div class="card-booking mb-4">
                            <div
                                class="d-flex justify-content-between py-1 px-3"
                            >
                                <div class="d-flex align-items-center">
                                <span class="booking-icon">
                                                <i class="far fa-wallet"></i>
                                    <span class="text-second dd-txt pe-2"
                                    > @lang('site.price') </span
                                    >
                                </div>
                                <div
                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                >
                                    {{$booking->car->fixed_price ?? 0}}
                                </div>
                            </div>

                        </div>
                        <div class="card-booking mb-4 bg-light-orange">
                            <div class="d-flex justify-content-between py-1 px-3">
                                <div class="d-flex align-items-center">
                                <span class="booking-icon">
                                                <i class="far fa-wallet text-main"></i>
                                    <span class="text-gray-2 dd-txt pe-2"> @lang('site.Reservation deposit') </span>
                                </div>
                                <div
                                    class="text-gray-2 d-flex align-items-center justify-content-center booking-data"
                                >
                                    {{$booking->car->fixed_price ?? 0}}
                                </div>
                            </div>
                        </div>
                        <div class="card-booking mb-4 bg-light-blue">
                            <div class="d-md-flex justify-content-md-between py-lg-4 px-lg-3 p-3">
                                <div class="d-flex align-items-center">
                                <span class="booking-icon">
                                                <i class="far fa-wallet"></i>
                                    <span class="text-gray-2 dd-txt pe-2">@lang('site.total')@lang('site.price')  </span>
                                </div>
                                <div
                                    class="text-gray-2 d-md-flex align-items-center justify-content-md-center summary-price"
                                >
                                    {{$booking->total ?? 0}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /section -->
    </main>


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
                <i class="fal fa-times"></i>
                </button>

                <div
                    class="modal-body cancel-booking-body "
                >
                    <div class="text-center my-3 ">
                        <div
                            class="row d-flex justify-content-center align-items-center h-100"
                        >
                            <div class="col-md-10 col-10 my-lg-5 my-2">
                            <div class="exclamation-ic">
                               <i class="fas fa-exclamation-circle"></i>
                            </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">

                                            <ul class="booking_errorsS_car"></ul>
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
                                        <a data-bs-dismiss="modal" href=""
                                           aria-label="Close">
                                            @lang('site.back')
                                        </a>
                                    </div>
                                    
                                    <div class="cancle-btn d-flex align-items-center justify-content-center">
                                        <button   class="cancelreasoncars">
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



@endsection


@section('scripts')







    <script>


        jQuery('.cancelreasoncars').click(function (e) {
            // console.log("daaaa");
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            jQuery.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},

                url: "{{ route('addcancelbookingCar') }}",
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
                            text: "The booking car  has been  cancel successfully !",
                            type: "success",
                            confirmButtonText: "OK"
                        });

                    setTimeout(function () {
                        Swal.close()
                    }, 2000)


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
                    $('.booking_errorsS_car').html(errorsList);


                }
            });
        });

    </script>




@endsection


