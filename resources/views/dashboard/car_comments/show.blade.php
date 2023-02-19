@extends('layouts.main_admin')

@section('content')

    <!-- <div class="content-page"> -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>@lang('site.car_comments')</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">

                            <li class="breadcrumb-item">@lang('site.dashboard')</li>
                            <li class="breadcrumb-item active">@lang('site.car_comments') @endlang</li>
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
                                <label>@lang('site.rating')<span class="text-danger">*</span></label>
                                <input type="text" name="rating" class="form-control"
                                       value="{{ $CarComment->rating }}" readonly
                                >
                            </div>


                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.status')<span class="text-danger">*</span></label>
                                <input type="text" name="status" class="form-control"
                                       value="{{ $CarComment->status }}" readonly
                                >
                            </div>


                        </div>


                        <div class="row">


                            <div class="col-md-6 form-group">
                                <label class="form-label">@lang('site.users')</label>
                                <select class="form-control btn-square" name="user_id" readonly="">
                                    <option selected>@lang('site.select')</option>
                                    @foreach($users as $user)

                                        <option value="{{$user->id}}"
                                                @if($CarComment->user_id==$user->id) selected @endif>{{$user->username ?? ''}}</option>

                                    @endforeach

                                </select>
                            </div>

                            <div class="col-md-6 form-group">
                                <label class="form-label">@lang('site.cars')</label>
                                <select class="form-control btn-square" name="car_id" readonly="">
                                    <option selected>@lang('site.select')</option>
                                    @foreach($cars as $car)

                                        <option value="{{$car->id}}"
                                                @if($CarComment->car_id==$car->id) selected @endif>{{$car->name ?? ''}}</option>

                                    @endforeach

                                </select>
                            </div>


                        </div>


                        <div class="row">
                            <!--<div class="col-md-6">-->

                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.description')<span class="text-danger">*</span></label>
                                <textarea class="form-control" cols="5" rows="5" name="description" readonly>
{{ $CarComment->description ?? '' }}
                                        </textarea>
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
