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
                                       value="{{ $car->name }}" readonly
                                >
                            </div>


                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.year')<span class="text-danger">*</span></label>
                                <input type="text" name="year" class="form-control"
                                       value="{{ $car->year }}" readonly
                                >
                            </div>

                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.color')<span class="text-danger">*</span></label>
                                <input type="color" name="color" class="form-control"
                                       value="{{ $car->color }}" readonly
                                >
                            </div>
                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.category')<span class="text-danger">*</span></label>
                                <input type="text" name="category" class="form-control"
                                       value="{{ $car->category ?? '' }}" readonly
                                >
                            </div>

                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.number')<span class="text-danger">*</span></label>
                                <input type="text" name="car_numbers" class="form-control"
                                       value="{{ $car->car_numbers ?? '' }}" readonly>
                            </div>


                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.date')<span class="text-danger">*</span></label>
                                <input type="date" name="car_delivery_date" class="form-control"
                                       value="{{ $car->car_delivery_date }}" readonly>
                            </div>


                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.price')<span class="text-danger">*</span></label>
                                <input type="text" name="fixed_price" class="form-control"
                                       value="{{ $car->fixed_price ?? '' }}" readonly
                                >
                            </div>

                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.changed_price')<span class="text-danger">*</span></label>
                                <input type="text" name="changed_price" class="form-control"
                                       value="{{ $car->changed_price ?? '' }}" readonly=""
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
                                                @if($car->user_id==$user->id) selected @endif>{{$user->firstname . $user->lastname ?? ''}}</option>

                                    @endforeach

                                </select>
                            </div>

                            <div class="col-md-6 form-group">
                                <label class="form-label">@lang('site.advertising')</label>
                                <select class="form-control btn-square" name="ads_id" readonly="">
                                    <option selected>@lang('site.select')</option>
                                    @foreach($ads as $ad)

                                        <option value="{{$ad->id}}"
                                                @if($car->ads_id==$ad->id) selected @endif>{{$ad->title ?? ''}}</option>

                                    @endforeach

                                </select>
                            </div>

                            <div class="col-md-6 form-group  col-12 p-2">
                                <label class="form-label">@lang('site.categories')</label>
                                <select class="form-control btn-square" name="category_id" readonly=""disabled>
                                    <option selected>@lang('site.select')</option>
                                    @foreach($categories as $cat)

                                        <option value="{{$cat->id}}"
                                                @if($car->category_id==$cat->id) selected @endif>{{$cat->name_ar ?? ''}}</option>

                                    @endforeach

                                </select>
                            </div>
                        </div>


                        <div class="row">
                            <label> @lang('site.images')</label>
                            @isset($car['images'])
                                @foreach(json_decode($car->images) as $key=>$image)
                                    <div class="col-md-2 form-group col-2 p-1">

                                        <img src="{{asset('images/cars/'.$image)}}"

                                             width="100px" height="100px"
                                             class="d-block"
                                             onerror="this.src='{{asset('images/cars/default.jpg')}}'"
                                        >

                                    </div>
                                @endforeach
                            @endisset

                        </div>

                        <div class="row">

                            <div class="col-md-6 form-group col-12 p-2">

                                <label> @lang('site.videos')</label>
                                <br>
                                <br>

                                <video width="300" height="150" controls>
                                    <source src="{{URL::asset("/images/cars/$car->videos")}}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
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
