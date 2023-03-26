@extends('layouts.main_admin')

@section('content')

    <!-- <div class="content-page"> -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>@lang('site.aqars')</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">@lang('site.dashboard')</li>

                            <li class="breadcrumb-item active">@lang('site.aqars') @endlang</li>
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
                        <form action="{{ route('dashboard.aqars.store') }}" method="post"
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
                                <center>
                                <div class="col-sm-8">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="text-danger">@lang('site.alert')</h5>
                                            <h6 class="text-warning">@lang('site.If you have a problem adding your ad, please call us')</h6>
                                            <h6 class="text-info">0707078888</h6>
                                        </div>
                                        <div class="card-body">

                                            <div class="col-sm-12">
                                                <label class="form-label">@lang('site.users')</label>
                                                <select class="form-control form-select" name="user_id" required>
                                                    <option selected>@lang('site.select')</option>
                                                    @foreach($users as $user)

                                                        <option value="{{$user->id}}">{{$user->firstname . $user->lastname ?? ''}}</option>

                                                    @endforeach

                                                </select>
                                            </div>
                                            <br>
                                            <div class="col-sm-12">
                                                <h5 class="border-bottom">@lang('site.categories')</h5>
                                            </div>
                                            <div class="col">
                                                <ul class="mt-4 p-0 categories-list">
                                                @foreach($categories as $cat)
                                                <li class="form-check radio radio-primary">
                                                    <input class="form-check-input" id="category_id{{$cat->id}}" type="radio"  name="category_id"  value="{{$cat->id}}" required>
                                                    <label class="form-check-label mb-0" for="category_id{{$cat->id}}">{{$cat->name_ar ?? ''}}</label>
</li>
                                                @endforeach
</ul>
                                            </div>
                                            <br>
                                            <div class="col-sm-12">
                                                <h5 class="border-bottom">@lang('site.areas')</h5>
                                            </div>
                                            <div class="col">
                                                <ul class="mt-4 areas-list">
                                                @foreach($Area as $item)
                                                <li class="form-check radio radio-primary">
                                                    <input class="form-check-input" id="area_{{$item->id}}" type="radio"  name="area_id"  value="{{$item->id}}" required>
                                                    <label class="form-check-label mb-0" for="area_{{$item->id}}">{{$item->name_ar ?? ''}}</label>
</li>
                                                @endforeach
</ul>
                                            </div>
                                            <br>
                                            <div class="row m-t-10">
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

                                            </div>
                                            <div class="row m-t-10">
                                                <!--<div class="col-md-6">-->

                                                <div class="col-md-6 form-group col-12 p-2 ">
                                                    <label>@lang('site.time_from')<span class="text-danger">*</span></label>
                                                    <input type="time" name="time_from" class="form-control"
                                                        value="{{old('time_from')}}"
                                                        required>
                                                </div>

                                                <div class="col-md-6 form-group col-12 p-2 ">
                                                    <label>@lang('site.time_to')</label>
                                                    <input type="time" name="time_to" class="form-control"
                                                        value="{{old('time_to')}}"
                                                        required>
                                                </div>

                                            </div>
                                            <br>
                                            <div class="row m-t-10">
                                                <div class="m-checkbox-inline">
                                                    <label for="edo-ani">
                                                    <input class="radio_animated"  type="radio" name="price" checked="" data-bs-original-title="" title="" value="1" >@lang('site.fixed_price')
                                                    </label>
                                                    <label for="edo-ani1">
                                                    <input class="radio_animated" type="radio" name="price" data-bs-original-title="" title="" value="2">@lang('site.changed_price')
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row m-t-10">
                                                <!--<div class="col-md-6">-->

                                                <div class="col-md-6 form-group col-12 p-2  desc" id="price1">
                                                    <label>@lang('site.fixed_price')<span class="text-danger">*</span></label>
                                                    <input type="text" name="fixed_price" class="form-control"
                                                        value="{{old('fixed_price')}}"
                                                        >
                                                </div>

                                                <div class="col-md-12 form-group col-12   desc" id="price2"  style="display: none;">                 
                                                        <table class="price-list" id="tb_price">
                                                            <tr><td>
                                                                <div class="row">
                                                                    <div class="col-md-5 form-group col-12">
                                                                        <label>@lang('site.personnumber')</label>
                                                                        <input type="number"  name="person_num[]" class="form-control"/>
                                                                    </div>
                                                                    <div class="col-md-5 form-group col-12">
                                                                        <label>@lang('site.fixed_price')</label>
                                                                        <input type="number" name="price[]" class="form-control" >
                                                                    </div>
                                                                    <div class="col-md-2 form-group col-12">
                                                                    <a class="btn btn-air-primary btn-pill btn-success add-price w-100 m-t-30"><i class="fa fa-plus" aria-hidden="true"></i></a> 
                                                                    </div> 
                                                                </div> 
                                                            </td></tr>
                                                        </table>   

                                            </div>
                                            <br>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                        <label class="form-label">@lang('site.country')</label>
                                        <select class="form-control btn-square" name="country_id">
                                            <option selected value="0">@lang('site.select')</option>
                                            @foreach($countries as $country)

                                                <option value="{{$country->id}}">{{$country->name_ar ?? ''}}</option>

                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="form-label">@lang('site.city')</label>
                                        <select class="form-control btn-square" name="city_id">
                                            <option selected value="0">@lang('site.select')</option>
                                            @foreach($cities as $city)

                                                <option value="{{$city->id}}">{{$city->name_ar ?? ''}}</option>

                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                            <div class="row">
                                                <div class="form-group col-12 p-2">
<!-- 
                                                    <span class="text-danger">*</span>
                                                            <label>@lang('site.display_photo')</label>
                                                            <input type="file" name="main_image" class="form-control"
                                                                value="{{ old('main_image') }}" required> -->
                                                  <label>@lang('site.display_photo')</label>
                                                  <div class="wrapper-images">
                                                    <div class="wrapper-content control-group file-upload" id="file-upload1">
                                                        <div class="image-box">
                                                        <div class="content-box text-center">
                                                            <i class="fas fa-images"></i>
                                                        </div>
                                                        <img loading="lazy" src="" alt="">
                                                        </div>
                                                        <div class="controls" style="display: none">
                                                        <input type="file" name="main_image"  value="{{ old('main_image') }}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="form-group col-12 p-2">
                                                        <!-- <label>@lang('site.images')</label>
                                                        <input type="file" name="images[]" class="form-control"
                                                            value="{{ old('images[]') }}" multiple required> -->
                                                    <label>@lang('site.images')</label>
                                                    <div class="upload__box">
                                                    <div class="upload__btn-box" >
                                                        <label class="upload__btn text-center">
                                                                <i class="fas fa-images"></i>
                                                        <input type="file" multiple=""  name="images[]" data-max_length="20" value="{{ old('images[]') }}" class="upload__inputfile">
                                                        </label>
                                                        <div class="upload__img-wrap"></div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <!--    <div class="row">
                                                <div class="col-md-12 form-group col-12 p-2">

                                                    <span class="text-danger">*</span>
                                                            <label>@lang('site.video')</label>
                                                            <input type="file" name="videos" class="form-control"
                                                                value="{{ old('videos') }}">
                                                </div>

                                            </div> -->
                                         <div class="row">
                                            <div class="col-12">
                                            <label>@lang('site.video')</label>
                                            <div class="wrapper-images">
                                                    <div class="wrapper-content control-group file-upload" id="file-upload1">
                                                        <div class="image-box">
                                                        <div class="content-box text-center">
                                                            <i class="fas fa-images"></i>
                                                        </div>
                                                        <img loading="lazy" src="" alt="">
                                                        </div>
                                                        <div class="controls" style="display: none">
                                                        <input type="file" name="videos"  value="{{ old('videos') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                            <div style="display: none;" id="space">
                                            <div class="col-sm-6 col-md-6" >
                                                <h5 class="mb-0 border-bottom">@lang('site.space')</h5>
                                            </div>
                                                <div class="col m-t-15">
                                                            <input type="number" name="space" class="form-control"
                                                                value="{{old('space')}}"
                                                                >
                                                </div>
                                            </div>
                                            <br>
                                           <div style="display: none;" id="unitnumber">
                                            <div class="col-sm-6" >
                                                <h5 class="mb-0 border-bottom">@lang('site.unitnumber')</h5>
                                            </div>
                                                <div class="col m-t-15">
                                                            <input type="number" name="unitnumber" class="form-control"
                                                                value="{{old('space')}}"
                                                                >
                                                </div>
                                            </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                            <div style="display: none;" id="hallnumber">
                                            <div class="col-sm-6 col-md-6" >
                                                <h5 class="mb-0 border-bottom">@lang('site.hallnumber')</h5>
                                            </div>
                                                <div class="col m-t-15">
                                                            <input type="number" name="hallnumber" class="form-control"
                                                                value="{{old('hallnumber')}}"
                                                                >
                                                </div>
                                            </div>
                                            <br>
                                           <div style="display: none;" id="bathroomnumber">
                                            <div class="col-sm-6" >
                                                <h5 class="mb-0 border-bottom">@lang('site.bathroomnumber')</h5>
                                            </div>
                                                <div class="col m-t-15">
                                                            <input type="number" name="bathroomnumber" class="form-control"
                                                                value="{{old('space')}}"
                                                                >
                                                </div>
                                            </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                            <div style="display: none;" id="personnumber">
                                            <div class="col-sm-6 col-md-6" >
                                                <h5 class="mb-0 border-bottom">@lang('site.personnumber')</h5>
                                            </div>
                                                <div class="col m-t-15">
                                                            <input type="number" name="personnumber" class="form-control"
                                                                value="{{old('personnumber')}}"
                                                                >
                                                </div>
                                            </div>
                                            </div>
                                            <br>
                                           <div style="display: none;" id="floor">
                                            <div class="col-sm-12" >
                                                <h5 class="mb-0 border-bottom">@lang('site.floor')</h5>
                                            </div>
                                            <div class="col m-t-15">
                                                @foreach($Floor as $fl)
                                                <div class="form-check form-check-inline checkbox checkbox-solid-primary">
                                                    <input class="form-check-input" id="floor_{{$fl->id}}" type="checkbox" name="floor_id[]" value="{{$fl->id}}" > 
                                                    <label class="form-check-label" for="floor_{{$fl->id}}">{{$fl->name_ar ?? ''}}<span class="digits"></span></label>
                                                </div>
                                                @endforeach
                                            </div>
                                            </div>
                                            <br>
                                            <div style="display: none;" id="floornumber">
                                            <div class="col-sm-12" >
                                                <h5 class="mb-0 border-bottom">@lang('site.floornumber')</h5>
                                            </div>
                                            <div class="col m-t-15">
                                                @foreach($FloorNumber as $fln)
                                                <div class="form-check form-check-inline checkbox checkbox-solid-primary">
                                                    <input class="form-check-input" id="floornumber_{{$fln->id}}" type="checkbox" name="floor_number_id[]" value="{{$fln->id}}" >
                                                    <label class="form-check-label" for="floornumber_{{$fln->id}}">{{$fln->name_ar ?? ''}}<span class="digits"></span></label>
                                                </div>
                                                @endforeach
                                            </div>
                                            </div>
                                            <br>
                                            <div class="col-sm-12">
                                                <h5 class="mb-0 border-bottom">@lang('site.masterroom')</h5>
                                            </div>
                                            <div class="col m-t-15">
                                                @for ($x = 1; $x <= 10; $x++)
                                                <div class="form-check form-check-inline checkbox checkbox-solid-primary">
                                                    <input class="form-check-input" id="masterroom_{{$x}}" type="checkbox" name="masterroom"  value="{{$x}}" >
                                                    <label class="form-check-label" for="masterroom_{{$x}}">{{$x}}<span class="digits"></span></label>
                                                </div>
                                                @endfor
                                            </div>
                                            <br>
                                            <div class="col-sm-12">
                                                <h5 class="mb-0 border-bottom">@lang('site.normalroom')</h5>
                                            </div>
                                            <div class="col m-t-15">
                                                @for ($y = 1; $y <= 10; $y++)
                                                <div class="form-check form-check-inline checkbox checkbox-solid-primary">
                                                    <input class="form-check-input" id="normalroom_{{$y}}" type="checkbox" name="normalroom" value="{{$y}}" >
                                                    <label class="form-check-label" for="normalroom_{{$y}}">{{$y}}<span class="digits"></span></label>
                                                </div>
                                                @endfor
                                            </div>
                                            <br>
                                            <div class="col-sm-12">
                                                <h5 class=" mb-0 border-bottom">@lang('site.service')</h5>
                                            </div>
                                            <div class="col m-t-15">
                                                @foreach($Service as $srv)
                                                <div class="form-check form-check-inline checkbox checkbox-solid-primary">
                                                    <input class="form-check-input" id="service_{{$srv->id}}" type="checkbox" name="service_id[]" value="{{$srv->id}}" >
                                                    <label class="form-check-label" for="service_{{$srv->id}}">{{$srv->name_ar ?? ''}}<span class="digits"></span></label>
                                                </div>
                                                @endforeach
                                            </div>
                                            <br>
                                            <div class="col-sm-12">
                                                <h5 class="mb-0 border-bottom">@lang('site.freeservice')</h5>
                                            </div>
                                            <div class="col m-t-15">
                                                @foreach($FreeService as $fsrv)
                                                <div class="form-check form-check-inline checkbox checkbox-solid-primary">
                                                    <input class="form-check-input" id="freeservice_{{$fsrv->id}}" type="checkbox" name="free_service_id[]" value="{{$fsrv->id}}" >
                                                    <label class="form-check-label" for="freeservice_{{$fsrv->id}}">{{$fsrv->name_ar ?? ''}}<span class="digits"></span></label>
                                                </div>
                                                @endforeach
                                            </div>
                                            <br>
                                            <div class="col-sm-12">
                                                <h5 class="mb-0 border-bottom">@lang('site.crew')</h5>
                                            </div>
                                            <div class="col m-t-15">
                                                @foreach($Crew as $cr)
                                                <div class="form-check form-check-inline checkbox checkbox-solid-primary">
                                                    <input class="form-check-input" id="crew_{{$cr->id}}" type="checkbox" name="crew_id[]" value="{{$cr->id}}" >
                                                    <label class="form-check-label" for="crew_{{$cr->id}}">{{$cr->name_ar ?? ''}}<span class="digits"></span></label>
                                                </div>
                                                @endforeach
                                            </div>                                 
                                            <br>
                                            <div class="col-sm-12">
                                                <h5 class=" mb-0 border-bottom">@lang('site.anotherrooms')</h5>
                                            </div>
                                            <div class="col m-t-15">
                                                @foreach($AnotherRoom as $room)
                                                <div class="form-check form-check-inline checkbox checkbox-solid-primary">
                                                    <input class="form-check-input" id="room_{{$room->id}}" type="checkbox" name="another_room_id[]" value="{{$room->id}}" >
                                                    <label class="form-check-label" for="room_{{$room->id}}">{{$room->name_ar ?? ''}}<span class="digits"></span></label>
                                                </div>
                                                @endforeach
                                            </div>
                                            <br>
                                            <div class="col-sm-12">
                                                <h5 class="mb-0 border-bottom">@lang('site.carposition')</h5>
                                            </div>
                                            <div class="col m-t-15">
                                                @foreach($CarPosition as $position)
                                                <div class="form-check form-check-inline checkbox checkbox-solid-primary">
                                                    <input class="form-check-input" id="position_{{$position->id}}" type="checkbox" name="car_position_id[]" value="{{$position->id}}" >
                                                    <label class="form-check-label" for="position_{{$position->id}}">{{$position->name_ar ?? ''}}<span class="digits"></span></label>
                                                </div>
                                                @endforeach
                                            </div>
                                            <br>
                                            <div style="display: none;" id="swimmingpool">
                                            <div class="col-sm-12" >
                                                <h5 class="mb-0 border-bottom">@lang('site.swimmingpool')</h5>
                                            </div>
                                            <div class="col m-t-15">
                                                @foreach($Pool as $swp)
                                                <div class="form-check form-check-inline checkbox checkbox-solid-primary">
                                                    <input class="form-check-input" id="swimmingpool_{{$swp->id}}" type="checkbox" name="swimmingpool[]" value="{{$swp->id}}" >
                                                    <label class="form-check-label" for="swimmingpool_{{$swp->id}}">{{$swp->name_ar ?? ''}}<span class="digits"></span></label>
                                                </div>
                                                @endforeach
                                            </div>
                                            </div>
                                            <br>
                                            <div class="col-sm-12">
                                                <h5 class="mb-0 border-bottom">@lang('site.kitchen')</h5>
                                            </div>
                                            <div class="col m-t-15">
                                                @foreach($Kitchen as $Kitch)
                                                <div class="form-check form-check-inline checkbox checkbox-solid-primary">
                                                    <input class="form-check-input" id="kitchen_{{$Kitch->id}}" type="checkbox" name="kitchen_id[]" value="{{$Kitch->id}}" >
                                                    <label class="form-check-label" for="kitchen_{{$Kitch->id}}">{{$Kitch->name_ar ?? ''}}<span class="digits"></span></label>
                                                </div>
                                                @endforeach
                                            </div>
                                            <br>
                                            <div class="col-sm-12 ">
                                                <h5 class="mb-0 border-bottom">@lang('site.Bathroom')</h5>
                                            </div>
                                            <div class="col m-t-15">
                                                @foreach($Bathroom as $bath)
                                                <div class="form-check form-check-inline checkbox checkbox-solid-primary">
                                                    <input class="form-check-input" id="bath_{{$bath->id}}" type="checkbox" name="bathroom_id[]" value="{{$bath->id}}" >
                                                    <label class="form-check-label" for="bath_{{$bath->id}}">{{$bath->name_ar ?? ''}}<span class="digits"></span></label>
                                                </div>
                                                @endforeach
                                            </div>
                                            <br>
                                            <div class="col-sm-12 ">
                                                <h5 class="mb-0 border-bottom">@lang('site.laundry')</h5>
                                            </div>
                                            <div class="col m-t-15">
                                                @foreach($Laundry as $Laund)
                                                <div class="form-check form-check-inline checkbox checkbox-solid-primary">
                                                    <input class="form-check-input" id="bath_{{$Laund->id}}" type="checkbox" name="laundry_id[]" value="{{$Laund->id}}" >
                                                    <label class="form-check-label" for="bath_{{$Laund->id}}">{{$Laund->name_ar ?? ''}}<span class="digits"></span></label>
                                                </div>
                                                @endforeach
                                            </div>
                                            
                                            <br>
                                            <div class="col-sm-12 ">
                                                <h5 class="mb-0 border-bottom">@lang('site.ConditioningType')</h5>
                                            </div>
                                            <div class="col m-t-15">
                                                @foreach($ConditioningType as $type)
                                                <div class="form-check form-check-inline checkbox checkbox-solid-primary">
                                                    <input class="form-check-input" id="conditioning_{{$type->id}}" type="checkbox" name="conditioning_type_id[]" value="{{$type->id}}">
                                                    <label class="form-check-label" for="conditioning_{{$type->id}}">{{$type->name_ar ?? ''}}<span class="digits"></span></label>
                                                </div>
                                                @endforeach
                                            </div>
                                        

                                            <div class="row">
                                                <!--<div class="col-md-6">-->

                                                <div class="col-md-12 form-group col-12 p-2  m-t-15">
                                                    <label>@lang('site.descrption')<span class="text-danger">*</span></label>
                                                    <textarea class="form-control" cols="5" rows="5" name="description" id="editor1" required>

                                                    </textarea>
                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                                </center>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

@endsection


@section('scripts')
    <script>


        $(document).ready(function () {
            jQuery('a.add-price').click(function (event) {
                event.preventDefault();
                var newRow = jQuery('<tr><td><div class="row"><div class="col-md-5 form-group col-12 p-2">' +
                    ' <label>@lang('site.personnumber')</label><input type="number"  name="person_num[]" class="form-control"/></div><div class="col-md-5 form-group col-12 p-2">' +
                    '<label>@lang('site.fixed_price')</label><input type="number" name="price[]" class="form-control" >' +
                    '  </div>  <div class="col-md-2 form-group col-12 p-2 "> <a class="btn btn-air-primary btn-pill btn-danger add-price w-100 m-t-30" onclick="deletetr(this)" ><i class="fa fa-trash"></i></a>' +

                    '</div></div> </td>  </tr>');
                jQuery('.price-list').append(newRow);
            });

            $("input[name='price']").click(function() {
                var test = $(this).val();

                $("div.desc").hide();
                $("#price" + test).show();
            });
        });

        function deletetr(r) {
            r.closest('tr').remove();
    }


    $('input[type=radio][name=category_id]').change(function() {
            var category_id =$('input[name="category_id"]:checked').val();
            $("#floor").hide(); 
            $("#floornumber").hide(); 
            $("#space").hide(); 
            $("#unitnumber").hide(); 
            $("#bathroomnumber").hide(); 
            $("#hallnumber").hide(); 
            $("#personnumber").hide(); 
            $("#swimmingpool").hide(); 
            $.ajax({
                url: '{{ url('dashboard/aqars/getsetting') }}' + '/' +category_id ,
                success: data => {
                    data.forEach(model =>
                        $("#" + model.input_id).show()
                    )
                }
            })
        });
    </script>
@endsection


