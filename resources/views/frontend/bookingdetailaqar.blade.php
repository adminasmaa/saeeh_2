@extends('layouts.main_frontend')
@section('content')

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
                                    <h2 class="text-gray-2 mb-lg-0 mb-3">@lang('site.basic information')</h2>
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
                                                <span class="pe-1">@lang('site.communication')</span>
                                            </a>
                                        </div>
                                        <div
                                            class="cancle-btn d-flex align-items-center justify-content-center mb-1"
                                        >
                                            <a href="#"
                                               data-bs-toggle="modal"
                                               data-bs-target="#cancelBookingModal">
                                                <span>@lang('site.cancle_reason')</span>
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
                    <div class="col-lg-5 mt-lg-0 mt-4">
                        <div class="card-booking mb-5">
                            <div class="d-sm-flex justify-content-sm-between py-md-4 px-md-3 p-3">
                                <div>
                                    <div class="d-flex align-items-center pb-3">
                                    <span class="booking-icon">
                                    <i class="fal fa-calendar-alt"></i>
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
                                    <span class="booking-icon">
                                    <i class="fal fa-calendar-alt"></i>
                                    </span>
                                        <span class="text-second dd-txt pe-2 " >   @lang('site.time_to')</span>
                                    </div>
                                    <div class="card-booking p-3 text-center">

                                        <div class="text-gray-4 pt-1">{{$booking->aqar->time_to ??''}}</div>
                                    </div>
                                </div>
                            </div>
                            <hr class="hr-saeeh my-0"/>
                            <div class="d-flex justify-content-between py-1 px-3">
                                <div class="d-flex align-items-center">
                                <span class="booking-icon">
                                <i class="far fa-clock"></i>
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
                                <span class="booking-icon">
                                <i class="far fa-clock"></i>
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
                                <span class="booking-icon">
                                                <i class="far fa-cloud-sun"></i>
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
                                <span class="booking-icon">
                                        <i class="far fa-user"></i>
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
                                    <span class="booking-icon">
                                        <i class="far fa-map-marker-alt"></i>
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
                                <span class="booking-icon">
                                    <i class="far fa-bed"></i>
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
                                <span class="booking-icon">
                                                <i class="far fa-building"></i>
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
                                <span class="booking-icon">
                                                <i class="far fa-bath"></i>
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
                                <span class="booking-icon">
                                                <i class="far fa-building"></i>
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
                                <span class="booking-icon">
                                                <i class="far fa-wallet"></i>
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
                                <span class="booking-icon">
                                                <i class="far fa-wallet"></i>
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
                                <span class="booking-icon">
                                                <i class="far fa-wallet text-main"></i>
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
                            <div class="d-flex justify-content-between py-lg-4 px-lg-3 p-3">
                                <div class="d-flex align-items-center">
                                <span class="booking-icon">
                                                <i class="far fa-wallet"></i>
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

                                    <h2 class="fw-bold cancel-booking-title my-3">@lang('site.Do you want to cancel your reservation?') </h2>

                                    <div class="form-group">
                                        <textarea class="form-control txtarea-booking px-3 py-2 mt-2 round-border canclereason"
                                                  placeholder="{{trans('site.Do you want to cancel your reservation?')}}"
                                                  rows="4" name="cancle_reason" id="cancle_reason"></textarea>

                                        <input type="hidden" name="booking_id" value="{{$booking->id}}" class="booking" id="booking_id">
                                    </div>
                                        <div>
                                        <ul class="booking_errorsS list-unstyled px-0"></ul>
                                        </div>
                                    <div class="d-flex pt-3 justify-content-end">
                                        <div class="call-btn d-flex align-items-center justify-content-center bg-main">
                                            <a data-bs-dismiss="modal" href="#"
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
                                errorsList += "<li>" + error + "</li>";
                            })
                        });
                    });
                    $('.booking_errorsS').html(errorsList);


                }
            });
        });

    </script>




@endsection
