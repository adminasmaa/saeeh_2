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
        <!-- Container-fluid starts-->


        <div class="container-fluid">
            <div class="row second-chart-list third-news-update">
                <div class="col-xl-12 col-lg-11 xl-50 morning-sec box-col-12">
                    <form action="{{ route('dashboard.balances.update', $balance->id) }}" method="post"
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
                                <div class="row">
                                    <!--<div class="col-md-6">-->

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.balances')</label>
                                        <input type="number" step=".1" name="balance" class="form-control"
                                               value="{{$balance->balance}}"
                                            >
                                    </div>
                                    <div class="col-md-6 form-group">
                                    <label class="form-label">@lang('site.inside')</label><span class="text-danger">*</span>
                                    <select class="form-control btn-square" name="inside">
                                            <option selected>@lang('site.select')</option>
                                        <option value="1"
                                                @if($balance->inside=='active') selected @endif>@lang('site.active')
                                        </option>
                                        <option value="0"
                                                @if($balance->inside=='inactive') selected @endif>@lang('site.inactive')
                                        </option>                                           

                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="form-label">@lang('site.outside')</label><span class="text-danger">*</span>
                                    <select class="form-control btn-square" name="outside">
                                            <option selected>@lang('site.select')</option>
                                        <option value="1"
                                                @if($balance->outside=='active') selected @endif>@lang('site.active')
                                        </option>
                                        <option value="0"
                                                @if($balance->outside=='inactive') selected @endif>@lang('site.inactive')
                                        </option>                                           

                                    </select>
                                </div>
                                <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.details')</label>
                                        <input type="text" name="details" class="form-control"
                                               value="{{$balance->details}}"
                                            >
                                    </div>
                                <div class="col-md-6 form-group">
                                    <label class="form-label">@lang('site.type')</label><span class="text-danger">*</span>
                                    <select class="form-control btn-square" name="type">
                                            <option selected>@lang('site.select')</option>
                                        <option value="aqar"
                                                @if($balance->type=='aqar') selected @endif>@lang('site.aqar')
                                        </option>
                                        <option value="car"
                                                @if($balance->type=='car') selected @endif>@lang('site.car')
                                        </option>                                           

                                    </select>
                                </div>

                                </div>
                                <div class="row">

                                <div class="col-md-6 form-group"><span class="text-danger">*</span>
                                    <label class="form-label">@lang('site.users')</label>
                                    <select class="form-control btn-square" name="user_id">
                                        <option selected>@lang('site.select')</option>
                                        @foreach($users as $user)

                                            <option value="{{$user->id}}"@if($user->user_id==$user->id) selected @endif>{{$user->username ?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>
                             
                                </div>
                            <br>

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
