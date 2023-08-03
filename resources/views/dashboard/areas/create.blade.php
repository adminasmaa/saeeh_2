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
                    <div class="card mt-30">
                        <form action="{{ route('dashboard.areas.store') }}" method="post"
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
                                        <label>@lang('site.name_ar')<span class="text-danger">*</span></label>
                                        <input type="text" name="name_ar" class="form-control"
                                               value="{{old('name_ar')}}"
                                               required>
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.name_en')</label>
                                        <input type="text" name="name_en" class="form-control"
                                               value="{{old('name_en')}}"
                                               >
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.latitude')</label>
                                        <input type="text" name="latitude" class="form-control"
                                               value="{{old('latitude')}}"
                                               >
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.longitude')</label>
                                        <input type="text" name="longitude" class="form-control"
                                               value="{{old('longitude')}}"
                                               >
                                    </div>
                                    <!-- <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.active')<span class="text-danger">*</span></label>
                                        <input type="boolean" name="active" class="form-control"
                                               value="{{old('active')}}"
                                               >
                                    </div> -->
                                    <div class="col-md-6 form-group"><span class="text-danger">*</span>
                                    <label class="form-label">@lang('site.active')</label>
                                    <select class="form-control btn-square" name="active" >
                                            <option selected>@lang('site.select')</option>
                                            <option value="1">@lang('site.active')</option>
                                            <option value="0">@lang('site.not-active') </option>

                                    </select>
                                </div>
                                </div>

                                <div class="col-md-6 form-group">
                                        <label class="form-label">@lang('site.cities')</label>
                                        <select class="form-control btn-square" name="city_id">
                                            <option selected>@lang('site.select')</option>
                                            @foreach($cities as $city)

                                                <option value="{{$city->id}}">{{$city->name_ar ?? ''}}</option>

                                            @endforeach

                                        </select>
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


