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
        <!-- Container-fluid starts-->


        <div class="container-fluid">
            <div class="row second-chart-list third-news-update">
                <div class="col-xl-12 col-lg-11 xl-50 morning-sec box-col-12">
                    <form action="{{ route('dashboard.areas.update', $area->id) }}" method="post"
                          enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('put') }}

                        <div class="bg-secondary-lighten card-header d-flex justify-content-between">
                            <h5>@lang('site.edit') </h5>
                            <div class="text-end  group-btn-top">
                                <div class="form-group d-flex form-group justify-content-between">
                                    <button type="button" class="btn btn-pill btn-outline-primary btn-air-primary"
                                            onclick="history.back();">
                                        <!--<i class="fa fa-backward"></i>-->
                                        @lang('site.back')
                                    </button>
                                    <button type="submit" class="btn btn-air-primary btn-pill btn-primary"><i
                                            class="fa fa-magic"></i>
                                        @lang('site.edit')</button>
                                </div>
                            </div>


                        </div>
                        <div class="card-body">
                            @include('partials._errors')



                            <div class="row">
                                <!--<div class="col-md-6">-->

                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.name_ar')<span class="text-danger">*</span></label>
                                    <input type="text" name="name_ar" class="form-control" value="{{ $area->name_ar }}"
                                           required>
                                </div>
                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.name_en')</label>
                                    <input type="text" name="name_en" class="form-control" value="{{ $area->name_en }}"
                                           >
                                </div>

                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.latitude')</label>
                                    <input type="text" name="latitude" class="form-control" value="{{ $area->latitude }}"
                                           >
                                </div>

                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.longitude')</label>
                                    <input type="text" name="longitude" class="form-control" value="{{ $area->longitude }}"
                                           >
                                </div>
                                <div class="col-md-6 form-group"><span class="text-danger">*</span>
                                    <label class="form-label">@lang('site.active')</label>
                                    <select class="form-control btn-square" name="active">
                                            <option selected>@lang('site.select')</option>
                                        <option value="1"
                                                @if($area->active=='1') selected @endif>1
                                        </option>
                                        <option value="0"
                                                @if($area->active=='0') selected @endif>0
                                        </option>                                           

                                    </select>
                                </div>
                                <div class="col-md-6 form-group"><span class="text-danger">*</span>
                                    <label class="form-label">@lang('site.cities')</label>
                                    <select class="form-control btn-square" name="city_id">
                                        <option selected>@lang('site.select')</option>
                                        @foreach($cities as $city)

                                            <option value="{{$city->id}}"@if($city->city_id==$city->id) selected @endif>{{$city->name ?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>
                            </div>
                           
                        </div>
                    </form>
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

