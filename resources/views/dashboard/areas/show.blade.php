@extends('layouts.main_admin')


@section('content')

    <!-- <div class="content-page"> -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>@lang('site.areas')</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">@lang('site.dashboard')</li>

                            <li class="breadcrumb-item active">@lang('site.areas') @endlang</li>
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
                                    <label>@lang('site.name_ar')</label>
                                    <input type="text" name="name_ar" class="form-control" value="{{ $area->name_ar }}"
                                           disabled>
                                </div>

                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.name_en')</label>
                                    <input type="text" name="name_en" class="form-control" value="{{ $area->name_en }}"
                                           disabled>
                                </div>
                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.latitude')</label>
                                    <input type="text" name="latitude" class="form-control" value="{{ $area->latitude }}"
                                           disabled>
                                </div>
                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.longitude')</label>
                                    <input type="text" name="longitude" class="form-control" value="{{ $area->longitude }}"
                                           disabled>
                                </div>
                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.active')</label>
                                    <select class="js-example-placeholder-multiple col-sm-12" name="active" readonly="" disabled>
                                        <option selected>@lang('site.select')</option>

                                        <option value="1"
                                                @if($area->active=='1') selected @endif>@lang('site.active')
                                        </option>
                                        <option value="0"
                                                @if($area->active=='0') selected @endif>@lang('site.in_active')
                                        </option>

                                    </select>
                                </div>
                           
                                <div class="col-md-6 form-group col-12 p-2">
                                <label class="form-label">@lang('site.cities')</label>
                                <select class="js-example-placeholder-multiple col-sm-12" name="city_id" readonly="" disabled>
                                    <option selected>@lang('site.select')</option>
                                    @foreach($cities as $city)

                                        <option value="{{$city->id}}"
                                                @if($area->city_id==$city->id) selected @endif>{{$city->name_ar ?? ''}}</option>

                                    @endforeach

                                </select>
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
