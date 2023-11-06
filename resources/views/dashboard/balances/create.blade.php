@extends('layouts.main_admin')

@section('content')

    <!-- <div class="content-page"> -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>@lang('site.balances')</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">@lang('site.dashboard')</li>

                            <li class="breadcrumb-item active">@lang('site.balances') @endlang</li>
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
                        <form action="{{ route('dashboard.balances.store') }}" method="post"
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
                                        <label>@lang('site.balances')</label>
                                        <input type="number" step=".1" name="balance" class="form-control"
                                               value="{{old('balance')}}"
                                               >
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                    <label class="form-label">@lang('site.inside')</label><span class="text-danger">*</span>
                                    <select class="js-example-placeholder-multiple col-sm-12" name="inside">
                                            <option selected>@lang('site.select')</option>
                                            <option value="1">@lang('site.active') </option>
                                            <option value="0">@lang('site.not-active')</option>
                                    </select>
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                    <label class="form-label">@lang('site.outside')</label><span class="text-danger">*</span>
                                    <select class="js-example-placeholder-multiple col-sm-12" name="outside">
                                            <option selected>@lang('site.select')</option>
                                            <option value="1">@lang('site.active') </option>
                                            <option value="0">@lang('site.not-active')</option>
                                    </select>
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.details')</label>
                                        <input type="text" name="details" class="form-control"
                                               value="{{old('details')}}"
                                               >
                                    </div>
                                    <div class="col-md-6 form-group">
                                    <label class="form-label">@lang('site.type')</label><span class="text-danger">*</span>
                                    <select class="js-example-placeholder-multiple col-sm-12" name="type">
                                            <option selected>@lang('site.select')</option>
                                            <option value="aqar">@lang('site.aqar')</option>
                                            <option value="car">@lang('site.car') </option>

                                    </select>
                                    </div>
                                    <div class="col-md-6 form-group"><span class="text-danger">*</span>
                                    <label class="form-label">@lang('site.users')</label>
                                    <select class="js-example-placeholder-multiple col-sm-12" name="user_id">
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

