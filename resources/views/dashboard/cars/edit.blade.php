@extends('layouts.main_admin')

@section('content')

    <!-- <div class="content-page"> -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>@lang('site.cars')</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">

                            <li class="breadcrumb-item">@lang('site.dashboard')</li>
                            <li class="breadcrumb-item active">@lang('site.cars') @endlang</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->


        <div class="container-fluid">
            <div class="row second-chart-list third-news-update">
                <div class="col-xl-12 col-lg-11 xl-50 morning-sec box-col-12">
                    <form action="{{ route('dashboard.cars.update', $car->id) }}" method="post"
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


                            <div class="row form-group">

                                <div class="col-sm-12">


                                    <label>@lang('site.image')</label>
                                    <img src="{{asset('images/cars/'.$car->main_image_ads)}}"
                                         data-bs-toggle="modal"
                                         data-bs-target="#exampleModalss" width="100px" height="100px" class="d-block"
                                         onerror="this.src='{{asset('images/cars/default.jpg')}}'"
                                    >


                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalss" tabindex="-1"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">@lang('site.image')</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="border-5">
                                                <tr>
                                                    <th>
                                                        <img name="soso"
                                                             src="{{asset('images/cars/'.$car->main_image_ads)}}"
                                                             alt=""
                                                             width="400px" height="aut0"


                                                             onerror="this.src='{{asset('images/cars/default.jpg')}}'"
                                                        >

                                                    </th>
                                                </tr>


                                            </table>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">@lang('site.Cancel')</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  End Of Modal -->
                            <div class="row">
                                <!--<div class="col-md-6">-->

                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.name')<span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control"
                                           value="{{ $car->name }}"
                                    >
                                </div>


                                <div class="col-md-6 form-group col-12 p-2 ">
                                    <label>@lang('site.year')<span class="text-danger">*</span></label>
                                    <input type="text" name="year" class="form-control"
                                           value="{{ $car->year }}"
                                    >
                                </div>

                                <div class="col-md-6 form-group col-12 p-2 ">
                                    <label>@lang('site.color')<span class="text-danger">*</span></label>
                                    <input type="color" name="color" class="form-control"
                                           value="{{ $car->color }}"
                                    >
                                </div>
                                <div class="col-md-6 form-group col-12 p-2 ">
                                    <label>@lang('site.category')<span class="text-danger">*</span></label>
                                    <input type="text" name="category" class="form-control"
                                           value="{{ $car->category ?? '' }}"
                                    >
                                </div>

                                <div class="col-md-6 form-group col-12 p-2 ">
                                    <label>@lang('site.number')<span class="text-danger">*</span></label>
                                    <input type="text" name="car_numbers" class="form-control"
                                           value="{{ $car->car_numbers ?? '' }}">
                                </div>


                                <div class="col-md-6 form-group col-12 p-2 ">
                                    <label>@lang('site.date')<span class="text-danger">*</span></label>
                                    <input type="date" name="car_delivery_date" class="form-control"
                                           value="{{ $car->car_delivery_date }}">
                                </div>


                                <div class="col-md-6 form-group col-12 p-2 ">
                                    <label>@lang('site.price')<span class="text-danger">*</span></label>
                                    <input type="text" name="fixed_price" class="form-control"
                                           value="{{ $car->fixed_price ?? '' }}"
                                    >
                                </div>

                                <div class="col-md-6 form-group col-12 p-2 ">
                                    <label>@lang('site.changed_price')<span class="text-danger">*</span></label>
                                    <input type="text" name="changed_price" class="form-control"
                                           value="{{ $car->changed_price ?? '' }}"
                                    >
                                </div>


                            </div>


                            <div class="row">


                                <div class="col-md-6 form-group">
                                    <label class="form-label">@lang('site.users')</label>
                                    <select class="form-control btn-square" name="user_id">
                                        <option selected>@lang('site.select')</option>
                                        @foreach($users as $user)

                                            <option value="{{$user->id}}"
                                                    @if($car->user_id==$user->id) selected @endif>{{$user->username ?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>

                                <div class="col-md-6 form-group">
                                    <label class="form-label">@lang('site.advertising')</label>
                                    <select class="form-control btn-square" name="ads_id">
                                        <option selected>@lang('site.select')</option>
                                        @foreach($ads as $ad)

                                            <option value="{{$ad->id}}"
                                                    @if($car->ads_id==$ad->id) selected @endif>{{$ad->title ?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>

                                <div class="col-md-6 form-group">
                                    <label class="form-label">@lang('site.brands')</label>
                                    <select class="form-control btn-square" name="car_brand_id">
                                        <option selected>@lang('site.select')</option>
                                        @foreach($brands as $brand)

                                            <option value="{{$brand->id}}"
                                                    @if($car->car_brand_id==$brand->id) selected @endif>{{$brand->name ?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>


                            </div>


                            <div class="row">

                                <div class="col-md-6 form-group col-12 p-2">


                                    <label>@lang('site.image')</label>
                                    <input type="file" name="main_image_ads" class="form-control"
                                           value="{{ old('main_image_ads') }}">


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
