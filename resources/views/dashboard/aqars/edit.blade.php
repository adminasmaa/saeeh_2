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
                        <form action="{{ route('dashboard.aqars.update', $aqar->id) }}" method="post"
                              enctype="multipart/form-data"
                              id="" class="form-main">

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
                       
                        <div class="card">
                        <center>
                        <div class="card-body">
                        @include('partials._errors')
                            <div class="col-md-6 form-group col-12 p-2  ">


                                <label>@lang('site.display_photo')</label>
                                <img src="{{asset('images/aqars/'.$aqar->main_image)}}"
                                     data-bs-toggle="modal"
                                     data-bs-target="#exampleModalss" width="100px" height="100px" class="d-block"
                                >
                            </div>
                            <!-- Modal -->
                        <div class="modal fade" id="exampleModalss" tabindex="-1"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">@lang('site.display_photo')</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="border-5">
                                            <tr>
                                                <th>
                                                    <img name="display_photo"
                                                         src="{{asset('images/aqars/'.$aqar->main_image)}}"
                                                         alt=""
                                                         width="400px" height="aut0">

                                                </th>
                                            </tr>


                                        </table>
                                    </div>
                                    <br>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">@lang('site.Cancel')</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!--  End Of Modal -->

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
                                                <select class="form-control btn-square" name="user_id">
                                                    <option selected>@lang('site.select')</option>
                                                    @foreach($users as $user)

                                                        <option value="{{$user->id}}" {{$user->id==$aqar->user_id? 'selected':'' }}>{{$user->username ?? ''}}</option>

                                                    @endforeach

                                                </select>
                                            </div>
                                            <br>
                                            <div class="col-sm-12">
                                                <h5 class="text-decoration-underline border-bottom">@lang('site.categories')</h5>
                                            </div>
                                            <div class="col">
                                                <div class="m-t-15">
                                                @foreach($categories as $cat)
                                                <div class="form-check radio radio-primary">
                                                    <input class="form-check-input" id="category_id{{$cat->id}}" type="radio"  name="category_id"  value="{{$cat->id}}" {{$cat->id==$aqar->category_id? 'checked':'' }} >
                                                    <label class="form-check-label mb-0" for="category_id{{$cat->id}}">{{$cat->name ?? ''}}</label>
                                                </div>
                                                @endforeach
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-sm-12">
                                                <h5 class="text-decoration-underline border-bottom">@lang('site.areas')</h5>
                                            </div>
                                            <div class="col">
                                                <div class="m-t-15">
                                                @foreach($Area as $item)
                                                <div class="form-check radio radio-primary">
                                                    <input class="form-check-input" id="area_{{$item->id}}" type="radio"  name="area_id"  value="{{$item->id}}" {{$item->id==$aqar->area_id? 'checked':'' }}>
                                                    <label class="form-check-label mb-0" for="area_{{$item->id}}">{{$item->name_ar ?? ''}}</label>
                                                </div>
                                                @endforeach
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row m-t-10">
                                                <!--<div class="col-md-6">-->

                                                <div class="col-md-6 form-group col-12 p-2 ">
                                                    <label>@lang('site.name_ar')<span class="text-danger">*</span></label>
                                                    <input type="text" name="name_ar" class="form-control"
                                                        value="{{$aqar->name_ar}}"
                                                        required>
                                                </div>

                                                <div class="col-md-6 form-group col-12 p-2 ">
                                                    <label>@lang('site.name_en')</label>
                                                    <input type="text" name="name_en" class="form-control"
                                                        value="{{$aqar->name_en}}"
                                                        >
                                                </div>

                                            </div>
                                            <div class="row m-t-10">
                                                <!--<div class="col-md-6">-->

                                                <div class="col-md-6 form-group col-12 p-2 ">
                                                    <label>@lang('site.time_from')<span class="text-danger">*</span></label>
                                                    <input type="time" name="time_from" class="form-control"
                                                        value="{{$aqar->time_from}}"
                                                        >
                                                </div>

                                                <div class="col-md-6 form-group col-12 p-2 ">
                                                    <label>@lang('site.time_to')</label>
                                                    <input type="time" name="time_to" class="form-control"
                                                        value="{{$aqar->time_to}}"
                                                        >
                                                </div>

                                            </div>
                                            <div class="row m-t-10">
                                                <!--<div class="col-md-6">-->

                                                <div class="col-md-6 form-group col-12 p-2 ">
                                                    <label>@lang('site.fixed_price')<span class="text-danger">*</span></label>
                                                    <input type="text" name="fixed_price" class="form-control"
                                                        value="{{$aqar->fixed_price}}"
                                                        >
                                                </div>

                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6 form-group col-12 p-2">
                                                    <span class="text-danger">*</span>
                                                            <label>@lang('site.display_photo')</label>
                                                            <input type="file" name="main_image" class="form-control"
                                                                value="{{$aqar->main_image}}">
                                                </div>
                                                <div class="col-md-6 form-group col-12 p-2">
                                                        <label>@lang('site.images')</label>
                                                        <input type="file" name="images[]" class="form-control"
                                                            value="{{ old('images[]') }}" multiple>
                                                </div>
                                                <br>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 form-group col-12 p-2">

                                                    <span class="text-danger">*</span>
                                                            <label>@lang('site.video')</label>
                                                            <input type="file" name="videos" class="form-control"
                                                                value="{{ old('videos') }}">

                                                </div>

                                            </div>
                                            <br>
                                            <div class="col-sm-12">
                                                <h5 class=" text-decoration-underline mb-0 border-bottom">@lang('site.floor')</h5>
                                            </div>
                                            <div class="col m-t-15">
                                                @foreach($Floor as $fl)
                                                <div class="form-check form-check-inline checkbox checkbox-solid-primary">
                                                    <input class="form-check-input" id="floor_{{$fl->id}}" type="checkbox" name="floor_id[]" value="{{$fl->id}}"  {{ in_array($fl->id,$aqar->floor_id)? 'checked':'' }}>
                                                    <label class="form-check-label" for="floor_{{$fl->id}}">{{$fl->name_ar ?? ''}}<span class="digits"></span></label>
                                                </div>
                                                @endforeach
                                            </div>
                                            <br>
                                            <div class="col-sm-12">
                                                <h5 class=" text-decoration-underline mb-0 border-bottom">@lang('site.floornumber')</h5>
                                            </div>
                                            <div class="col m-t-15">
                                                @foreach($FloorNumber as $fln)
                                                <div class="form-check form-check-inline checkbox checkbox-solid-primary">
                                                    <input class="form-check-input" id="floornumber_{{$fln->id}}" type="checkbox" name="floor_number_id[]" value="{{$fln->id}}"  {{ in_array($fln->id,$aqar->floor_number_id)? 'checked':'' }}>
                                                    <label class="form-check-label" for="floornumber_{{$fln->id}}">{{$fln->name_ar ?? ''}}<span class="digits"></span></label>
                                                </div>
                                                @endforeach
                                            </div>
                                            <br>
                                            <div class="col-sm-12">
                                                <h5 class=" text-decoration-underline mb-0 border-bottom">@lang('site.masterroom')</h5>
                                            </div>
                                            <div class="col m-t-15">
                                                @for ($x = 1; $x <= 10; $x++)
                                                <div class="form-check form-check-inline checkbox checkbox-solid-primary">
                                                    <input class="form-check-input" id="masterroom_{{$x}}" type="checkbox" name="masterroom[]"  value="{{$x}}" {{ in_array($x,$aqar->masterroom)? 'checked':'' }}>
                                                    <label class="form-check-label" for="masterroom_{{$x}}">{{$x}}<span class="digits"></span></label>
                                                </div>
                                                @endfor
                                            </div>
                                            <br>
                                            <div class="col-sm-12">
                                                <h5 class=" text-decoration-underline mb-0 border-bottom">@lang('site.normalroom')</h5>
                                            </div>
                                            <div class="col m-t-15">
                                                @for ($y = 1; $y <= 10; $y++)
                                                <div class="form-check form-check-inline checkbox checkbox-solid-primary">
                                                    <input class="form-check-input" id="normalroom_{{$y}}" type="checkbox" name="normalroom[]" value="{{$y}}" {{ in_array($y,$aqar->normalroom)? 'checked':'' }}>
                                                    <label class="form-check-label" for="normalroom_{{$y}}">{{$y}}<span class="digits"></span></label>
                                                </div>
                                                @endfor
                                            </div>
                                            <br>
                                            <div class="col-sm-12">
                                                <h5 class=" text-decoration-underline mb-0 border-bottom">@lang('site.service')</h5>
                                            </div>
                                            <div class="col m-t-15">
                                                @foreach($Service as $srv)
                                                <div class="form-check form-check-inline checkbox checkbox-solid-primary">
                                                    <input class="form-check-input" id="service_{{$srv->id}}" type="checkbox" name="service_id[]" value="{{$srv->id}}" {{ in_array($srv->id,$aqar->service_id)? 'checked':'' }}>
                                                    <label class="form-check-label" for="service_{{$srv->id}}">{{$srv->name_ar ?? ''}}<span class="digits"></span></label>
                                                </div>
                                                @endforeach
                                            </div>
                                            <br>
                                            <div class="col-sm-12">
                                                <h5 class=" text-decoration-underline mb-0 border-bottom">@lang('site.freeservice')</h5>
                                            </div>
                                            <div class="col m-t-15">
                                                @foreach($FreeService as $fsrv)
                                                <div class="form-check form-check-inline checkbox checkbox-solid-primary">
                                                    <input class="form-check-input" id="freeservice_{{$fsrv->id}}" type="checkbox" name="free_service_id[]" value="{{$fsrv->id}}" {{ in_array($fsrv->id,$aqar->free_service_id)? 'checked':'' }}>
                                                    <label class="form-check-label" for="freeservice_{{$fsrv->id}}">{{$fsrv->name_ar ?? ''}}<span class="digits"></span></label>
                                                </div>
                                                @endforeach
                                            </div>
                                            <br>
                                            <div class="col-sm-12">
                                                <h5 class=" text-decoration-underline mb-0 border-bottom">@lang('site.crew')</h5>
                                            </div>
                                            <div class="col m-t-15">
                                                @foreach($Crew as $cr)
                                                <div class="form-check form-check-inline checkbox checkbox-solid-primary">
                                                    <input class="form-check-input" id="crew_{{$cr->id}}" type="checkbox" name="crew_id[]" value="{{$cr->id}}" {{ in_array($cr->id,$aqar->crew_id)? 'checked':'' }}>
                                                    <label class="form-check-label" for="crew_{{$cr->id}}">{{$cr->name_ar ?? ''}}<span class="digits"></span></label>
                                                </div>
                                                @endforeach
                                            </div>
                                            <br>
                                            <div class="col-sm-12">
                                                <h5 class=" text-decoration-underline mb-0 border-bottom">@lang('site.anotherrooms')</h5>
                                            </div>
                                            <div class="col m-t-15">
                                                @foreach($AnotherRoom as $room)
                                                <div class="form-check form-check-inline checkbox checkbox-solid-primary">
                                                    <input class="form-check-input" id="room_{{$room->id}}" type="checkbox" name="another_room_id[]" value="{{$room->id}}" {{ in_array($room->id,$aqar->another_room_id)? 'checked':'' }}>
                                                    <label class="form-check-label" for="room_{{$room->id}}">{{$room->name_ar ?? ''}}<span class="digits"></span></label>
                                                </div>
                                                @endforeach
                                            </div>
                                            <br>
                                            <div class="col-sm-12">
                                                <h5 class=" text-decoration-underline mb-0 border-bottom">@lang('site.kitchen')</h5>
                                            </div>
                                            <div class="col m-t-15">
                                                @foreach($Kitchen as $Kitch)
                                                <div class="form-check form-check-inline checkbox checkbox-solid-primary">
                                                    <input class="form-check-input" id="kitchen_{{$Kitch->id}}" type="checkbox" name="kitchen_id[]" value="{{$Kitch->id}}" {{ in_array($Kitch->id,$aqar->kitchen_id)? 'checked':'' }}>
                                                    <label class="form-check-label" for="kitchen_{{$Kitch->id}}">{{$Kitch->name_ar ?? ''}}<span class="digits"></span></label>
                                                </div>
                                                @endforeach
                                            </div>
                                            <br>
                                            <div class="col-sm-12 ">
                                                <h5 class="text-decoration-underline mb-0 border-bottom">@lang('site.Bathroom')</h5>
                                            </div>
                                            <div class="col m-t-15">
                                                @foreach($Bathroom as $bath)
                                                <div class="form-check form-check-inline checkbox checkbox-solid-primary">
                                                    <input class="form-check-input" id="bath_{{$bath->id}}" type="checkbox" name="bathroom_id[]" value="{{$bath->id}}" {{ in_array($bath->id,$aqar->bathroom_id)? 'checked':'' }}>
                                                    <label class="form-check-label" for="bath_{{$bath->id}}">{{$bath->name_ar ?? ''}}<span class="digits"></span></label>
                                                </div>
                                                @endforeach
                                            </div>
                                            <br>
                                            <div class="col-sm-12 ">
                                                <h5 class="text-decoration-underline mb-0 border-bottom">@lang('site.laundry')</h5>
                                            </div>
                                            <div class="col m-t-15">
                                                @foreach($Laundry as $Laund)
                                                <div class="form-check form-check-inline checkbox checkbox-solid-primary">
                                                    <input class="form-check-input" id="laundry_{{$Laund->id}}" type="checkbox" name="laundry_id[]" value="{{$Laund->id}}" {{ in_array($Laund->id,$aqar->laundry_id)? 'checked':'' }}>
                                                    <label class="form-check-label" for="laundry_{{$Laund->id}}">{{$Laund->name_ar ?? ''}}<span class="digits"></span></label>
                                                </div>
                                                @endforeach
                                            </div>
                                            <br>
                                            <div class="col-sm-12 ">
                                                <h5 class="text-decoration-underline mb-0 border-bottom">@lang('site.ConditioningType')</h5>
                                            </div>
                                            <div class="col m-t-15">
                                                @foreach($ConditioningType as $type)
                                                <div class="form-check form-check-inline checkbox checkbox-solid-primary">
                                                    <input class="form-check-input" id="conditioning_{{$type->id}}" type="checkbox" name="conditioning_type_id[]" value="{{$type->id}}"  {{ in_array($type->id,$aqar->conditioning_type_id)? 'checked':'' }}>
                                                    <label class="form-check-label" for="conditioning_{{$type->id}}">{{$type->name_ar ?? ''}}<span class="digits"></span></label>
                                                </div>
                                                @endforeach
                                            </div>
                                        

                                            <div class="row">
                                                <!--<div class="col-md-6">-->

                                                <div class="col-md-12 form-group col-12 p-2  m-t-15">
                                                    <label>@lang('site.descrption')<span class="text-danger">*</span></label>
                                                    <textarea class="form-control" cols="5" rows="5" name="description" id="editor1">
                                                    {{$aqar->description}}
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

