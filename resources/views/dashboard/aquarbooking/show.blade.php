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
        <div class="card-body" >
                        @include('partials._errors')


                        <div class="row form-group" >

                            <div class="col-sm-12"  >


                                <label>@lang('site.image')</label>
                                <img src="{{asset('images/aqars/'.$data->wasel_photo)}}"
                                     data-bs-toggle="modal" 
                                     data-bs-target="#exampleModalss" width="100px" height="100px" class="d-block"
                                     onerror="this.src='{{asset('images/aqars/default.jpg')}}'"
                                >


                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalss" tabindex="-1"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">@lang('site.image')</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="border-5">
                                            <tr>
                                                <th>
                                                    <img name="soso"
                                                         src="{{asset('images/aqars/'.$data->wasel_photo)}}"
                                                         alt=""
                                                         width="400px" height="aut0"


                                                         onerror="this.src='{{asset('images/aqars/default.jpg')}}'"
                                                    >

                                                </th>
                                            </tr>


                                        </table>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">@lang('site.Cancel')</button>
                                    </div>
                                </div>
                            </div>
                        </div>


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
                                <input type="text" class="form-control" value="{{ $data->type }}"
                                       readonly>
                            </div>

                            <div class="col-md-6 form-group col-12 p-2">
                                <label>@lang('site.price')<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="{{ $data->fixed_price }}"
                                       readonly>
                            </div>


                            <div class="col-md-6 form-group col-12 p-2">
                                <label>@lang('site.changed_price')<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="{{ $data->changed_price }}"
                                       readonly>
                            </div>
                            <div class="col-md-6 form-group col-12 p-2">
                                <label>@lang('site.place_arrive')<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="{{ $data->place_arrive }}"
                                       readonly>
                            </div>

                            <div class="col-md-6 form-group col-12 p-2">
                                <label>@lang('site.place_leave')<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="{{ $data->place_leave }}"
                                       readonly>
                            </div>


                            <div class="col-md-6 form-group col-12 p-2">
                                <label>@lang('site.delivery_date')<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="{{ $data->delivery_date }}"
                                       readonly>
                            </div>


                            <div class="col-md-6 form-group col-12 p-2">
                                <label>@lang('site.reciept_date')<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="{{ $data->reciept_date }}"
                                       readonly>
                            </div>


                            <div class="col-md-6 form-group col-12 p-2">
                                <label>@lang('site.day_count')<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="{{ $data->day_count }}"
                                       readonly>
                            </div>


                            <div class="col-md-6 form-group col-12 p-2">
                                <label>@lang('site.visit_count')<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="{{ $data->visit_count }}"
                                       readonly>
                            </div>

                            <div class="col-md-6 form-group col-12 p-2">
                                <label>@lang('site.active')</label>
                                <select class="form-control btn-square" name="active" readonly="" disabled>
                                    <option selected>@lang('site.select')</option>

                                    <option value="1"
                                            @if($data->active=='1') selected @endif>@lang('site.active')
                                    </option>
                                    <option value="0"
                                            @if($data->active=='0') selected @endif>@lang('site.in_active')
                                    </option>

                                </select>
                            </div>

                            <div class="col-md-6 form-group col-12 p-2">
                                <label>@lang('site.cancle_reason')<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="{{ $data->cancle_reason }}"
                                       readonly>
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="form-label">@lang('site.users')</label>
                                <select class="form-control btn-square" name="user_id" disabled readonly="">
                                    <option selected>@lang('site.select')</option>
                                    @foreach($users as $user)

                                        <option value="{{$user->id}}"
                                                @if($data->user_id==$user->id) selected @endif>{{$user->firstname . $user->lastname ?? ''}}</option>

                                    @endforeach

                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="form-label">@lang('site.aqars')</label>
                                <select class="form-control btn-square" name="aqar_id" disabled readonly="">
                                    <option selected>@lang('site.select')</option>
                                    @foreach($aqars as $aqar)

                                        <option value="{{$aqar->id}}"
                                                @if($data->aqar_id==$aqar->id) selected @endif>{{$aqar->name_ar ?? ''}}</option>

                                    @endforeach

                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="form-label">@lang('site.booking_status')</label>
                                <select class="form-control btn-square" name="booking_status_id" readonly=""disabled>
                                    <option selected>@lang('site.select')</option>
                                    @foreach($bookingStatus as $bookingStatus)

                                        <option value="{{$bookingStatus->id}}"
                                                @if($data->booking_status_id==$bookingStatus->id) selected @endif>{{$bookingStatus->status_ar ?? ''}}</option>

                                    @endforeach

                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                    <label class="form-label">@lang('site.city')</label>
                                    <select class="form-control btn-square" name="city_id" id="city_id" disabled
                                            readonly="">
                                        <option selected>@lang('site.select')</option>
                                        @foreach($cities as $city)

                                            <option value="{{$city->id}}" @if($city->id==$data->city_id)
                                                selected
                                            @endif>{{$city->name_ar ?? ''}}</option>


                                        @endforeach

                                    </select>
                                </div>
                            <div class="col-md-6 form-group ">
                                <label>@lang('site.description')<span class="text-danger">*</span></label>
                                <textarea class="form-control" cols="1" rows="2" disabled>
                     {{ $data->note }}
                                        </textarea>
                                </div>
                        </div>

                </div>
            </div>
        </div>
        <!-- Individual column searching (text inputs) Ends-->
    </div>
    </div>
    <!-- Container-fluid Ends-->
    </div>

@endsection
