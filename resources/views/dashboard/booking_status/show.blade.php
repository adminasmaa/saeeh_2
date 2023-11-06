@extends('layouts.main_admin')


@section('content')

    <!-- <div class="content-page"> -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>@lang('site.booking_status')</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">@lang('site.dashboard')</li>

                            <li class="breadcrumb-item active">@lang('site.booking_status') @endlang</li>
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
                                    <label>@lang('site.booking_status_ar')</label>
                                    <input type="text" name="status_ar" class="form-control" value="{{ $bookingStatus->status_ar }}"
                                           disabled>
                                </div>
                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.booking_status_en')</label>
                                    <input type="text" name="status_en" class="form-control" value="{{ $bookingStatus->status_en }}"
                                           disabled>
                                </div>
                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.admin_message')</label>
                                    <input type="text" name="admin_message" class="form-control" value="{{ $bookingStatus->admin_message }}"
                                           disabled>
                                </div>
                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.investor_message')</label>
                                    <input type="text" name="investor_message" class="form-control" value="{{ $bookingStatus->investor_message }}"
                                           disabled>
                                </div>
                            </div>
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
