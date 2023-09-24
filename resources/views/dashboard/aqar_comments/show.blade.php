@extends('layouts.main_admin')

@section('content')

    <!-- <div class="content-page"> -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>@lang('site.aqar_comments')</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">

                            <li class="breadcrumb-item">@lang('site.dashboard')</li>
                            <li class="breadcrumb-item active">@lang('site.aqar_comments') @endlang</li>
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
                                <label>@lang('site.description')</label>
                                <input type="text" name="description" class="form-control"
                                       value="{{ $AqarComment->description }}" readonly="" disabled
                                >
                            </div>
                        <!-- type="number" -->
                            <div class="col-md-6 form-group col-12 p-2">
                                <label>@lang('site.rating')<span class="text-danger">*</span></label>
                                <input type="float" name="rating" class="form-control"
                                       value="{{ $AqarComment->rating }}" readonly="" disabled
                                >
                            </div>

                        </div>
                       
                        <div class="row">

                            <div class="col-md-6 form-group">
                                <label class="form-label">@lang('site.users')<span class="text-danger">*</span></label>
                                <select class="form-control btn-square" name="user_id" readonly="" disabled>
                                    <option selected>@lang('site.select')</option>
                                    @foreach($users as $user)

                                        <option value="{{$user->id}}"
                                                @if($AqarComment->user_id==$user->id) selected @endif>{{$user->username ?? ''}}</option>

                                    @endforeach

                                </select>
                            </div>

                            <div class="col-md-6 form-group">
                                <label class="form-label">@lang('site.aqars')</label>
                                <select class="form-control btn-square" name="aqar_id" readonly="" disabled>
                                    <option selected>@lang('site.select')</option>
                                    @foreach($aqars as $aqar)

                                        <option value="{{$aqar->id}}"
                                                @if($AqarComment->aqar_id==$aqar->id) selected @endif>{{$aqar->name_ar ?? ''}}</option>

                                    @endforeach

                                </select>
                            </div>

                            <div class="col-md-6 form-group">
                                <label class="form-label">@lang('site.aquarbooking')</label>
                                <select class="form-control btn-square" name="aqar_booking_id" readonly="" disabled>
                                    <option selected>@lang('site.select')</option>
                                    @foreach($AqarBooking as $AqarBooking)

                                        <option value="{{$AqarBooking->id}}"
                                                @if($AqarComment->aqar_booking_id==$AqarBooking->id) selected @endif>{{$AqarBooking->note ?? ''}}</option>

                                    @endforeach

                                </select>
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
