@extends('layouts.main_admin')


@section('content')

    <!-- <div class="content-page"> -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>@lang('site.deposits')</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">@lang('site.dashboard')</li>

                            <li class="breadcrumb-item active">@lang('site.deposits') @endlang</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row">
                <!-- Individual column searching (text inputs) Starts-->
                <div class="col-sm-12">
                    <div class="card">


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

                            <!--  End Of Modal -->
                            <div class="row">


                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.deposit')</label>
                                    <input type="number" step=".1" name="deposit" class="form-control" value="{{ $Deposit->deposit }}"
                                           disabled>
                                </div>
                               
                                <div class="col-md-6 form-group col-12 p-2">
                                <label class="form-label">@lang('site.aquarbooking')</label>
                                <select class="form-control btn-square" name="aqar_booking_id" readonly=""disabled>
                                    <option selected>@lang('site.select')</option>
                                    @foreach($aqarbookings as $aquarbooking)

                                        <option value="{{$aquarbooking->id}}"
                                                @if($Deposit->aqar_booking_id==$aquarbooking->id) selected @endif>{{$aquarbooking->id ?? ''}}</option>

                                    @endforeach

                                </select>
                            </div>

                            <div class="col-md-6 form-group col-12 p-2">
                                <label class="form-label">@lang('site.car_bookings')</label>
                                <select class="form-control btn-square" name="car_booking_id" readonly=""disabled>
                                    <option selected>@lang('site.select')</option>
                                    @foreach($carbookings as $carbooking)

                                        <option value="{{$carbooking->id}}"
                                                @if($Deposit->car_booking_id==$carbooking->id) selected @endif>{{$carbooking->id ?? ''}}</option>

                                    @endforeach

                                </select>
                            </div>

                            <div class="col-md-6 form-group col-12 p-2">
                                <label class="form-label">@lang('site.users')</label>
                                <select class="form-control btn-square" name="user_id" readonly=""disabled>
                                    <option selected>@lang('site.select')</option>
                                    @foreach($users as $user)

                                        <option value="{{$user->id}}"
                                                @if($Deposit->user_id==$user->id) selected @endif>{{$user->firstname . $user->lastname ?? ''}}</option>

                                    @endforeach

                                </select>
                            </div>

                            </div>


                            <br>


                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- Individual column searching (text inputs) Ends-->
    </div>
    </div>
    </div>
    <!-- Container-fluid Ends-->
    </div>
    </div>

@endsection
