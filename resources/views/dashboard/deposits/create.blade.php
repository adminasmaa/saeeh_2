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
                    <div class="card mt-30">
                        <form action="{{ route('dashboard.deposits.store') }}" method="post"
                              enctype="multipart/form-data"
                              id="" class="form-main">

                            {{ csrf_field() }}
                            {{ method_field('post') }}
                            <div class="bg-secondary-lighten card-header d-flex justify-content-between">
                                <h5>@lang('site.add') </h5>
                                <div class="text-end  group-btn-top">
                                    <div class="form-group d-flex form-group justify-content-between">
                                        <button type="button" class="btn btn-pill btn-outline-primary btn-air-primary"
                                                onclick="history.back();">

                                            @lang('site.back')
                                        </button>
                                        <button type="submit" class="btn btn-air-primary btn-pill btn-primary"><i
                                                class="fa fa-plus p-1"></i>
                                            @lang('site.add')</button>
                                    </div>
                                </div>


                            </div>
                            <div class="card-body">
                                @include('partials._errors')


                                <div class="row">
                                    <!--<div class="col-md-6">-->

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.deposit')</label><span class="text-danger">*</span>
                                        <input type="number" step=".1" name="deposit" class="form-control"
                                               value="{{old('deposit')}}"
                                               >
                                    </div>

                                    <div class="col-md-6 form-group">
                                    <label class="form-label">@lang('site.aquarbooking')</label>
                                    <select class="form-control btn-square" name="aquarbooking_id">
                                        <option selected>@lang('site.select')</option>
                                        @foreach($aqarbookings as $aquarbooking)

                                            <option value="{{$aquarbooking->id}}">{{$aquarbooking->id ?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>

                                <div class="col-md-6 form-group">
                                    <label class="form-label">@lang('site.bookings')</label>
                                    <select class="form-control btn-square" name="booking_id">
                                        <option selected>@lang('site.select')</option>
                                        @foreach($carbookings as $carbooking)

                                            <option value="{{$carbooking->id}}">{{$carbooking->id ?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>

                                </div>

                                <div class="row">

                                <div class="col-md-6 form-group"><span class="text-danger">*</span>
                                    <label class="form-label">@lang('site.users')</label>
                                    <select class="form-control btn-square" name="user_id">
                                        <option selected>@lang('site.select')</option>
                                        @foreach($users as $user)

                                            <option value="{{$user->id}}">{{$user->firstname . $user->lastname ?? ''}}</option>

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

        </form>
        <!--    </div>-->
    </div>
    </div><!--</div>-->

    </div>
    <!-- Container-fluid Ends-->

@endsection

