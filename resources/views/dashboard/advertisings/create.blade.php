@extends('layouts.main_admin')

@section('content')

    <!-- <div class="content-page"> -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>@lang('site.advertising')</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">@lang('site.dashboard')</li>

                            <li class="breadcrumb-item active">@lang('site.advertising') @endlang</li>
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
                        <form action="{{ route('dashboard.advertisings.store') }}" method="post"
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
                                        <label>@lang('site.title')<span class="text-danger">*</span></label>
                                        <input type="text" name="title" class="form-control"
                                               value="{{old('title')}}"
                                               required>
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.link')<span class="text-danger">*</span></label>
                                        <input type="text" name="ads_link" class="form-control"
                                               value="{{old('ads_link')}}"
                                               required>
                                    </div>


                                </div>



                                <div class="row">


                                    <div class="col-md-6 form-group col-12 p-2">
                                        <label class="form-label">@lang('site.position')</label>
                                        <select class="js-example-placeholder-multiple col-sm-12" name="country_id">
                                            <option selected>@lang('site.select')</option>

                                            <option value="upper_middle">@lang('site.upper_middle')</option>
                                            <option value="lower_middle">@lang('site.lower_middle')</option>
                                            <option value="banner">@lang('site.banner')</option>
                                            <option value="slider">@lang('site.slider')</option>


                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label class="form-label">@lang('site.users')</label>
                                        <select class="js-example-placeholder-multiple col-sm-12" name="user_id">
                                            <option selected>@lang('site.select')</option>
                                            @foreach($users as $user)

                                                <option value="{{$user->id}}">{{$user->firstname . $user->lastname ?? ''}}</option>

                                            @endforeach

                                        </select>
                                    </div>
                                </div>


                                <div class="row">


                                    <div class="col-md-6 form-group col-12 p-2">


                                        <label>@lang('site.image')</label>
                                        <input type="file" name="ads_image" class="form-control"
                                               value="{{ old('ads_image') }}">


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

