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
                                                <select class="form-control btn-square" name="user_id" required>
                                                    <option selected>@lang('site.select')</option>
                                                    @foreach($users as $user)

                                                        <option value="{{$user->id}}">{{$user->firstname . $user->lastname ?? ''}}</option>

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
                                                    <input class="form-check-input" id="category_id{{$cat->id}}" type="radio"  name="category_id"  value="{{$cat->id}}" required>
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
                                                    <input class="form-check-input" id="area_{{$item->id}}" type="radio"  name="area_id"  value="{{$item->id}}" required>
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
                                                                        <input type="number"  name="person_num[]" class="form-control"/>
                                                                    </div>
                                                                    <div class="col-md-5 form-group col-12">
                                                                        <input type="number" name="price[]" class="form-control" >
                                                                    </div>
                                                                    <div class="col-md-2 form-group col-12">
                                                                    <a class="btn btn-air-primary btn-pill btn-success add-price w-100"><i class="fa fa-plus" aria-hidden="true"></i></a> 
                                                                    </div> 
                                                                </div> 
                                                            </td></tr>
                                                        </table>   

                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6 form-group col-12 p-2">

                                                    <span class="text-danger">*</span>
                                                            <label>@lang('site.display_photo')</label>
                                                            <input type="file" name="main_image" class="form-control"
                                                                value="{{ old('main_image') }}" required>


                                                </div>

                                                <div class="col-md-6 form-group col-12 p-2">


                                                        <label>@lang('site.images')</label>
                                                        <input type="file" name="images[]" class="form-control"
                                                            value="{{ old('images[]') }}" multiple required>


                                                </div>
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
                                                    <input class="form-check-input" id="floor_{{$fl->id}}" type="checkbox" name="floor_id[]" value="{{$fl->id}}" > 
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
                                                    <input class="form-check-input" id="floornumber_{{$fln->id}}" type="checkbox" name="floor_number_id[]" value="{{$fln->id}}" >
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
                                                    <input class="form-check-input" id="masterroom_{{$x}}" type="checkbox" name="masterroom[]"  value="{{$x}}" >
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
                                                    <input class="form-check-input" id="normalroom_{{$y}}" type="checkbox" name="normalroom[]" value="{{$y}}" >
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
                                                    <input class="form-check-input" id="service_{{$srv->id}}" type="checkbox" name="service_id[]" value="{{$srv->id}}" >
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
                                                    <input class="form-check-input" id="freeservice_{{$fsrv->id}}" type="checkbox" name="free_service_id[]" value="{{$fsrv->id}}" >
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
                                                    <input class="form-check-input" id="crew_{{$cr->id}}" type="checkbox" name="crew_id[]" value="{{$cr->id}}" >
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
                                                    <input class="form-check-input" id="room_{{$room->id}}" type="checkbox" name="another_room_id[]" value="{{$room->id}}" >
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
                                                    <input class="form-check-input" id="kitchen_{{$Kitch->id}}" type="checkbox" name="kitchen_id[]" value="{{$Kitch->id}}" >
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
                                                    <input class="form-check-input" id="bath_{{$bath->id}}" type="checkbox" name="bathroom_id[]" value="{{$bath->id}}" >
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
                                                    <input class="form-check-input" id="bath_{{$Laund->id}}" type="checkbox" name="laundry_id[]" value="{{$Laund->id}}" >
                                                    <label class="form-check-label" for="bath_{{$Laund->id}}">{{$Laund->name_ar ?? ''}}<span class="digits"></span></label>
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
                    '<input type="number"  name="person_num[]" class="form-control"/></div><div class="col-md-5 form-group col-12 p-2">' +
                    '<input type="number" name="price[]" class="form-control" >' +
                    '  </div>  <div class="col-md-2 form-group col-12 p-2 "> <a class="btn btn-air-primary btn-pill btn-danger add-price w-100" onclick="deletetr(this)" ><i class="fa fa-trash"></i></a>' +

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
    </script>
@endsection


