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


        <div class="container-fluid">

            <div class="row">
                <!-- Individual column searching (text inputs) Starts-->
                <div class="col-sm-12">
                    <div class="card mt-30">
                        <form action="{{ route('dashboard.cars.store') }}" method="post"
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
                                        <label>@lang('site.name')<span class="text-danger">*</span></label>
                                        <input type="text" name="name" class="form-control"
                                               value="{{old('name')}}"
                                               required>
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.year')<span class="text-danger">*</span></label>
                                        <input type="text" name="year" class="form-control"
                                               value="{{old('year')}}"
                                               required>
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.color')<span class="text-danger">*</span></label>
                                        <input type="color" name="color" class="form-control"
                                               value="{{old('color')}}"
                                        >
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.category')<span class="text-danger">*</span></label>
                                        <input type="text" name="category" class="form-control"
                                               value="{{old('category')}}"
                                        >
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.number')<span class="text-danger">*</span></label>
                                        <input type="text" name="car_numbers" class="form-control"
                                               value="{{old('car_numbers')}}"
                                        >
                                    </div>


                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.date')<span class="text-danger">*</span></label>
                                        <input type="date" name="car_delivery_date" class="form-control"
                                               value="{{old('car_delivery_date')}}"
                                        >
                                    </div>


                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.price')<span class="text-danger">*</span></label>
                                        <input type="text" name="fixed_price" class="form-control"
                                               value="{{old('fixed_price')}}"
                                        >
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.changed_price')<span class="text-danger">*</span></label>
                                        <input type="text" name="changed_price" class="form-control"
                                               value="{{old('changed_price')}}"
                                        >
                                    </div>


                                </div>

                                <div class="row">
                                    <!--<div class="col-md-6">-->

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.description')<span class="text-danger">*</span></label>
                                        <textarea class="form-control" cols="5" rows="5" name="description">

                                        </textarea>
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.comment_text')<span class="text-danger">*</span></label>
                                        <textarea class="form-control" cols="5" rows="5" name="comment_text">

                                        </textarea>
                                    </div>
                                </div>


                                <div class="row">


                                    <div class="col-md-6 form-group">
                                        <label class="form-label">@lang('site.users')</label>
                                        <select class="form-control btn-square" name="user_id">
                                            <option selected>@lang('site.select')</option>
                                            @foreach($users as $user)

                                                <option value="{{$user->id}}">{{$user->username ?? ''}}</option>

                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label class="form-label">@lang('site.advertising')</label>
                                        <select class="form-control btn-square" name="ads_id">
                                            <option selected>@lang('site.select')</option>
                                            @foreach($ads as $ad)

                                                <option value="{{$ad->id}}">{{$ad->title ?? ''}}</option>

                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="col-sm-12">
                                                <h5 class="text-decoration-underline border-bottom">@lang('site.categories')</h5>
                                            </div>
                                            <div class="col">
                                                <div class="m-t-15">
                                                @foreach($categories as $cat)
                                                <div class="form-check radio radio-primary">
                                                    <input class="form-check-input" id="category_id{{$cat->id}}" type="radio"  name="category_id"  value="{{$cat->id}}" required>
                                                    <label class="form-check-label mb-0" for="category_id{{$cat->id}}">{{$cat->name ?? ''}}</label>
                                                </div>
                                                @endforeach
                                                </div>
                                            </div>


                                </div>


                                <div class="row">


                                    <div class="col-md-6 form-group col-12 p-2">


                                        <label>@lang('site.image')</label>
                                        <input type="file" name="main_image_ads" class="form-control"
                                               value="{{ old('main_image_ads') }}">


                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2">


                                        <label>@lang('site.videos')</label>
                                        <input type="file" name="videos" class="form-control"
                                               value="{{ old('videos') }}">


                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2">


                                        <label>@lang('site.images')</label>
                                        <input type="file" name="images[]" class="form-control"
                                               value="{{ old('images[]') }}" multiple>


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

