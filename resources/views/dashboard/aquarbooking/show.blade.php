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
                                <input type="text" class="form-control" value="{{ $data->type }}"
                                       readonly>
                            </div>

                            <div class="col-md-6 form-group col-12 p-2">
                                <label>@lang('site.status')<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="{{ $data->book_status }}"
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
                                <label>@lang('site.cancle_reason')<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="{{ $data->cancle_reason }}"
                                       readonly>
                            </div>


                        </div>


                        <div class="row">
                            <!--<div class="col-md-6">-->

                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.description')<span class="text-danger">*</span></label>
                                <textarea class="form-control" cols="5" rows="5" disabled>
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
