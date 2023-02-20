@extends('layouts.main_admin')

@section('content')

    <!-- <div class="content-page"> -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>@lang('site.bookings')</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">

                            <li class="breadcrumb-item">@lang('site.dashboard')</li>
                            <li class="breadcrumb-item active">@lang('site.bookings') @endlang</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->


        <div class="container-fluid">
            <div class="row second-chart-list third-news-update">
                <div class="col-xl-12 col-lg-11 xl-50 morning-sec box-col-12">


                    <div class="bg-secondary-lighten card-header d-flex justify-content-between">
                        <h5>@lang('site.show') </h5>
                        <div class="text-end  group-btn-top">
                            <div class="form-group d-flex form-group justify-content-between">
                                <button type="button" class="btn btn-pill btn-outline-primary btn-air-primary"
                                        onclick="history.back();">
                                    <!--<i class="fa fa-backward"></i>-->
                                    @lang('site.back')
                                </button>

                            </div>
                        </div>


                    </div>
                    <div class="card-body">
                        @include('partials._errors')

                        <div class="row">
                            <!--<div class="col-md-6">-->

                            <div class="col-md-6 form-group col-12 p-2">
                                <label>@lang('site.type')<span class="text-danger">*</span></label>
                                <input type="text" name="type" class="form-control"
                                       value="{{ $booking->type }}" readonly
                                >
                            </div>


                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.status')<span class="text-danger">*</span></label>
                                <input type="text" name="book_status" class="form-control"
                                       value="{{ $booking->book_status }}" readonly
                                >
                            </div>


                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.price')<span class="text-danger">*</span></label>
                                <input type="text" name="fixed_price" class="form-control"
                                       value="{{ $booking->fixed_price }}" readonly
                                >
                            </div>


                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.changed_price')<span class="text-danger">*</span></label>
                                <input type="text" name="changed_price" class="form-control"
                                       value="{{ $booking->changed_price }}" readonly
                                >
                            </div>

                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.place_arrive')<span class="text-danger">*</span></label>
                                <input type="text" name="place_arrive" class="form-control"
                                       value="{{ $booking->place_arrive }}" readonly
                                >
                            </div>


                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.place_leave')<span class="text-danger">*</span></label>
                                <input type="text" name="place_leave" class="form-control"
                                       value="{{ $booking->place_leave }}" readonly
                                >
                            </div>



{{--                            <div class="col-md-6 form-group col-12 p-2 ">--}}
{{--                                <label>@lang('site.type')<span class="text-danger">*</span></label>--}}
{{--                                <input type="text" name="7agz_type" class="form-control"--}}
{{--                                       value="{{ $booking->type ?? '' }}" readonly--}}
{{--                                >--}}
{{--                            </div>--}}



                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.day_count')<span class="text-danger">*</span></label>
                                <input type="text" name="day_count" class="form-control"
                                       value="{{ $booking->day_count }}" readonly
                                >
                            </div>


                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.date')<span class="text-danger">*</span></label>
                                <input type="date" name="delivery_date" class="form-control"
                                       value="{{ $booking->delivery_date }}" readonly
                                >
                            </div>

                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.reciept_date')<span class="text-danger">*</span></label>
                                <input type="date" name="reciept_date" class="form-control"
                                       value="{{ $booking->reciept_date }}" readonly
                                >
                            </div>


                        </div>


                        <div class="row">


                            <div class="col-md-6 form-group">
                                <label class="form-label">@lang('site.users')</label>
                                <select class="form-control btn-square" name="user_id" readonly="">
                                    <option selected>@lang('site.select')</option>
                                    @foreach($users as $user)

                                        <option value="{{$user->id}}"
                                                @if($booking->user_id==$user->id) selected @endif>{{$user->username ?? ''}}</option>

                                    @endforeach

                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="form-label">@lang('site.cities')</label>
                                <select class="form-control btn-square" name="city_id" readonly="">
                                    <option selected>@lang('site.select')</option>
                                    @foreach($cities as $city)

                                        <option value="{{$city->id}}"
                                                @if($booking->user_id==$city->id) selected @endif>{{$city->name ?? ''}}</option>

                                    @endforeach

                                </select>
                            </div>

                            <div class="col-md-6 form-group">
                                <label class="form-label">@lang('site.cars')</label>
                                <select class="form-control btn-square" name="car_id" readonly="">
                                    <option selected>@lang('site.select')</option>
                                    @foreach($cars as $car)

                                        <option value="{{$car->id}}"
                                                @if($booking->car_id==$car->id) selected @endif>{{$car->name ?? ''}}</option>

                                    @endforeach

                                </select>
                            </div>


                        </div>


                        <div class="row">
                            <!--<div class="col-md-6">-->

                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.description')<span class="text-danger">*</span></label>
                                <textarea class="form-control" cols="5" rows="5" name="note" readonly>
{{ $booking->note ?? '' }}
                                        </textarea>
                            </div>
                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.reason')<span class="text-danger">*</span></label>
                                <textarea class="form-control" cols="5" rows="5" name="cancle_reason" readonly>
{{ $booking->cancle_reason ?? '' }}
                                        </textarea>
                            </div>



                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    </form>
    </div>
    </div>
    </div>
    <!-- Individual column searching (text inputs) Ends-->
    </div>
    </div>
    <!-- Container-fluid Ends-->
    </div>

@endsection
