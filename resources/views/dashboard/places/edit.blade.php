@extends('layouts.main_admin')

@section('content')

    <!-- <div class="content-page"> -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>@lang('site.places')</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">

                            <li class="breadcrumb-item">@lang('site.dashboard')</li>
                            <li class="breadcrumb-item active">@lang('site.places') @endlang</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->


        <div class="container-fluid">
            <div class="row second-chart-list third-news-update">
                <div class="col-xl-12 col-lg-11 xl-50 morning-sec box-col-12">
                    <form action="{{ route('dashboard.places.update', $place->id) }}" method="post"
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

                        <!-- <div class="row"> -->
                        <div class="row form-group">

                            <div class="col-md-6 form-group col-12 p-2  ">


                                <label>@lang('site.display_photo')</label>
                                <img  name="display_photo"src="{{asset('images/places/'.$place->display_photo)}}"
                                     data-bs-toggle="modal"
                                     data-bs-target="#exampleModalss" width="100px" height="100px" class="d-block"
                                     onerror="this.src='{{asset('images/places/default.jpg')}}'"
                                >
                            </div>
                            <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.notify_photo')</label>
                                    <img name="notify_photo" src="{{asset('images/places/'.$place->notify_photo)}}"
                                        data-bs-toggle="modal"
                                        data-bs-target="#exampleModalss2" width="100px" height="100px" class="d-block"
                                        onerror="this.src='{{asset('images/places/default.jpg')}}'"
                                    >

                                </div>
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
                                                         src="{{asset('images/places/'.$place->display_photo)}}"
                                                         alt=""
                                                         width="400px" height="aut0"


                                                         onerror="this.src='{{asset('images/places/default.jpg')}}'"
                                                    >

                                                </th>
                                            </tr>


                                        </table>
                                    </div>
                                    <br>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">@lang('site.Cancel')</button>
                                    </div>
                                    <br>
                                    </div>
                                </div>
                                    </div>

                <div class="modal fade" id="exampleModalss2" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">@lang('site.notify_photo')</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <table class="border-5">
                                    <tr>
                                        <th>
                                            <img name="notify_photo"
                                                    src="{{asset('images/places/'.$place->notify_photo)}}"
                                                    alt=""
                                                    width="400px" height="aut0"


                                                    onerror="this.src='{{asset('images/places/default.jpg')}}'"
                                            >

                                        </th>
                                    </tr>


                                </table>
                            </div>
                            <br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">@lang('site.Cancel')</button>
                            </div>
                            <br>
                            </div>
                        </div>
                            </div>
                                </div>
                            </div>
                            <!--  End Of Modal -->
                            <div class="row">
                                    <!--<div class="col-md-6">-->

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.name_ar')<span class="text-danger">*</span></label>
                                        <input type="text" name="name_ar" class="form-control"
                                               value="{{$place->name_ar}}"
                                            >
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.name_en')</label>
                                        <input type="text" name="name_en" class="form-control"
                                               value="{{$place->name_en}}"
                                            >
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.place_order')<span class="text-danger">*</span></label>
                                        <input type="number" name="place_order" class="form-control"
                                               value="{{$place->place_order}}"
                                               required>
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.place_error')<span class="text-danger">*</span></label>
                                        <input type="number" name="place_error" class="form-control"
                                               value="{{$place->place_error}}"
                                               required>
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.const_from')<span class="text-danger">*</span></label>
                                        <input type="time" name="const_from" class="form-control"
                                               value="{{$place->const_from}}"
                                               required >
                                    </div>



                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.const_to')<span class="text-danger">*</span></label>
                                        <input type="time" name="const_to" class="form-control"
                                               value="{{$place->const_to}}"
                                               required>
                                    </div>


                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.google_mark_link')</label>
                                        <input type="text" name="google_mark_link" class="form-control"
                                               value="{{$place->google_mark_link}}"
                                               >
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.place_link')</label>
                                        <input type="text" name="place_link" class="form-control"
                                               value="{{$place->place_link}}"
                                               >
                                    </div>


                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.share_link')</label>
                                        <input type="text" name="share_link" class="form-control"
                                               value="{{$place->share_link}}"
                                               >
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.menu_link')</label>
                                        <input type="text" name="menu_link" class="form-control"
                                               value="{{$place->menu_link}}"
                                               >
                                    </div>
                                    
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.facebook')</label>
                                        <input type="text" name="facebook" class="form-control"
                                               value="{{$place->facebook}}"
                                               >
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.instagram')</label>
                                        <input type="text" name="instagram" class="form-control"
                                               value="{{$place->instagram}}"
                                               >
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.twitter')</label>
                                        <input type="text" name="twitter" class="form-control"
                                               value="{{$place->twitter}}"
                                               >
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.phone_one')<span class="text-danger">*</span></label>
                                        <input type="text" name="phone_one" class="form-control"
                                               value="{{$place->phone_one}}"
                                               >
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.phone_two')</label>
                                        <input type="text" name="phone_two" class="form-control"
                                               value="{{$place->phone_two}}"
                                               >
                                    </div>
                                    
                                    <!-- <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.seen_counter')<span class="text-danger">*</span></label>
                                        <input type="number" name="seen_counter" class="form-control"
                                               value="{{$place->seen_counter}}"
                                               >
                                    </div> -->
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.delivery')</label>
                                        <input type="number" name="delivery" class="form-control"
                                               value="{{$place->delivery}}"
                                               >
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.order_by')</label>
                                        <input type="number" name="order_by" class="form-control"
                                               value="{{$place->order_by}}"
                                               >
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.work_day')</label>
                                        <input type="text" name="work_day" class="form-control"
                                               value="{{$place->work_day}}"
                                               >
                                    </div>
                                </div>



                                <div class="row">
                                    <!--<div class="col-md-6">-->

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.latitude')</label>
                                        <input type="text" name="latitude" class="form-control"
                                               value="{{$place->latitude}}"
                                               >
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.longitude')</label>
                                        <input type="text" name="longitude" class="form-control"
                                               value="{{$place->longitude}}"
                                               >
                                    </div>

                                    <div class="col-md-6 form-group">
                                    <label class="form-label">@lang('site.social_media')</label><span class="text-danger">*</span>
                                    <select class="js-example-placeholder-multiple col-sm-12" name="social_media">
                                            <option selected value="0">@lang('site.select')</option>
                                        <option value="facebook"
                                                @if($place->social_media=='facebook') selected @endif>@lang('site.facebook')
                                        </option>
                                        <option value="instagram"
                                                @if($place->social_media=='instagram') selected @endif>@lang('site.instagram')
                                        </option>

                                    </select>
                                </div>
                                <div class="col-md-6 form-group"><span class="text-danger">*</span>
                                    <label class="form-label">@lang('site.active')</label>
                                    <select class="js-example-placeholder-multiple col-sm-12" name="active">
                                            <option selected>@lang('site.select')</option>
                                        <option value="1"
                                                @if($place->active==1) selected @endif>@lang('site.active')
                                        </option>
                                        <option value="0"
                                                @if($place->active==0) selected @endif>@lang('site.not-active')
                                        </option>

                                    </select>
                                </div>
                                </div>

                                    <div class="row">
                                    <!--<div class="col-md-6">-->

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.address')</label>
                                        <input type="text" name="address" class="form-control"
                                               value="{{$place->address}}"
                                               >
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.descrption_ar')</label>
                                        <input type="text" name="descrption_ar" class="form-control"
                                               value="{{$place->descrption_ar}}" required
                                               >
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.descrption_en')</label>
                                        <input type="text" name="descrption_en" class="form-control"
                                               value="{{$place->descrption_en}}" 
                                               >
                                    </div>

                                    <div class="col-md-6 form-group"><span class="text-danger">*</span>
                                    <label class="form-label">@lang('site.users')</label>
                                    <select class="js-example-placeholder-multiple col-sm-12" name="user_id">
                                        <option selected disabled>@lang('site.select')</option>
                                        @foreach($users as $user)

                                            <option value="{{$user->id}}"@if($place->user_id==$user->id) selected @endif>{{$user->firstname . $user->lastname ?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>

                                </div>
                                <div class="row">
                                <div class="col-md-6 form-group"><span class="text-danger">*</span>
                                    <label class="form-label">@lang('site.categories')</label>
                                    <select class="js-example-placeholder-multiple col-sm-12" name="category_id" id="category_id">
                                        <option selected value="0" disabled>@lang('site.select')</option>
                                        @foreach($categories as $cat)

                                            <option value="{{$cat->id}}"
                                                    @if($place->category_id==$cat->id) selected @endif>{{$cat->name_ar ?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>

                                <div class="col-md-6 form-group"><span class="text-danger">*</span>
                                    <label class="form-label">@lang('site.subcategories')</label>
                                    <select class="js-example-placeholder-multiple col-sm-12" name="sub_category_id" id="sub_category_id">
                                        <option value="0" disabled>@lang('site.select')</option>
                                        @foreach($subcategories as $cats)

                                            <option value="{{$cats->id}}"
                                                    @if($place->sub_category_id==$cats->id) selected @endif>{{$cats->name_ar ?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>
                                <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="form-label">@lang('site.country')</label>
                                                    <select class="js-example-placeholder-multiple col-sm-12" name="country_id" id="country_id">
                                                        <option selected disabled>@lang('site.select')</option>
                                                        @foreach($countries as $country)

                                                        <option value="{{$country->id}}" @if($country->
                                                            id==$place->country_id) selected
                                                            @endif>{{$country->name_ar ?? ''}}</option>

                                                        @endforeach

                                                    </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="form-label">@lang('site.city')</label>
                                                    <select class="js-example-placeholder-multiple col-sm-12" name="city_id" id="city_id">
                                                        <option selected disabled>@lang('site.select')</option>
                                                      
                                                    </select>
                                                </div>
                                            </div>
                            </div>

                                </div>

                                <div class="row">

                                <div class="form-group col-12 p-2">
                                    <label>@lang('site.display_photo')</label>

                                    <input type="file" class="form-control" name="display_photo"
                                        value="{{$place->display_photo}}" id="imgInp"  />
                                    <img id="frame"
                                        src="{{asset('images/places/'.$place->display_photo)}}" alt=""
                                        onerror="this.src='{{asset('images/places/default.jpg')}}'"
                                        width="200px" class="img-upload" />

                                </div>
                                <div class="form-group col-12 p-2">
                                    <label>@lang('site.notify_photo')</label>

                                    <input type="file" class="form-control" name="notify_photo"
                                        value="{{$place->notify_photo}}" id="imgInp2"  />
                                    <img id="frame2"
                                        src="{{asset('images/places/'.$place->notify_photo)}}" alt=""
                                        onerror="this.src='{{asset('images/places/default.jpg')}}'"
                                        width="200px" class="img-upload2" />

                                </div>
                               
                                <div class="form-group col-12 p-2">
                                    <label>@lang('site.video_photo')</label>

                                    <input type="file" class="form-control" name="video_photo"
                                        value="{{$place->video_photo}}" id="imgInp3"  />
                                    <img id="frame3"
                                        src="{{asset('images/places/video_img'.$place->video_photo)}}" alt=""
                                        onerror="this.src='{{asset('images/places/default.jpg')}}'"
                                        width="200px" class="img-upload3" />

                                </div>

                                </div>
                        <div class="row">
                             <div class="form-group col-12 p-2 mb-2">

                                    <label>@lang('site.images')</label>

                                    <input type="file" class="form-control" name="images[]"
                                        value="{{$place->images}}" multiple id="upload-imgs" />

                                    <div class="img-thumbs " id="img-previews">
                                        @if($place->images)
                                        @foreach ((explode(',',$place->images)) as $img)
                                        <div class="wrapper-thumb">
                                            <img id="frame" src="{{asset('images/places/'.$img)}}"
                                                alt=""
                                                onerror="this.src='{{asset('images/places/default.jpg')}}'"
                                                width="200px" class="img-preview-thumb" /><span
                                                class="remove-btn">x</span>
                                        </div>
                                        @endforeach
                                        @endif
                                    </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-12 p-2">
                            <label>@lang('site.video')</label>

                            <input type='file' id='videoUpload' class="form-control"
                                name="videos" value="{{$place->videos}}?>" />
                            <video width="250" height="200"
                                src="{{asset('images/places/videos/'.$place->videos)}}"
                                controls class="video-upload" autoplay>
                                Your browser does not support the video tag.
                            </video>
                            </div>


                            

                        <div class="row m-t-10">
                            <h4>@lang('site.place_tables')</h4>
                            @foreach($place_table as $service)
                                <div class="col-md-12 form-group col-12   desc">
                                    <table>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <input type="hidden" value="{{ $service->id ?? '' }}" name="id[]" class="form-control" />
                                                    <div class="col-md-5 form-group col-12">
                                                        <label>@lang('site.name_ar')</label>
                                                        <input type="text" name="sub_name_ar[]"
                                                            class="form-control" value="{{$service->name_ar}}"/>
                                                    </div>
                                                    <div class="col-md-5 form-group col-12">
                                                        <label>@lang('site.name_en')</label>
                                                        <input type="text" name="sub_name_en[]"
                                                            class="form-control" value="{{$service->name_en}}">
                                                    </div>
                                                    <div class="col-md-6 form-group ">
                                                        <label class="form-label">@lang('site.type')</label><span class="text-danger">*</span>
                                                        <select class="js-example-placeholder-multiple col-sm-12" name="sub_type[]"  >
                                                            <option selected>@lang('site.select')</option>

                                                            <option value="Meal"
                                                                    @if($service->type=='meal') selected @endif>@lang('site.meal')
                                                            </option>
                                                            <option value="Break"
                                                                    @if($service->type=='break') selected @endif>@lang('site.break')
                                                            </option>
                                                            <option value="Tawla"
                                                                    @if($service->type=='tawla') selected @endif>@lang('site.tawla')
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 form-group col-12">
                                                    <a  type="button" href="{{route('dashboard.DeletePlaceTable',$service->id)}}" class="btn btn-air-primary btn-pill btn-danger"><i class="fa fa-trash"></i></a>
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>

                                </div>

                            @endforeach
                            <div class="col-md-12 form-group col-12   desc" id="price2" >
                                <table class="price-list" id="tb_price">
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-5 form-group col-12">
                                                    <label>@lang('site.name_ar')</label>
                                                    <input type="text" name="sub_name_ar[]" class="form-control"/>
                                                </div>
                                                <div class="col-md-5 form-group col-12">
                                                    <label>@lang('site.name_en')</label>
                                                    <input type="text" name="sub_name_en[]" class="form-control">
                                                </div>
                                                <div class="col-md-6 form-group ">
                                                    <label class="form-label">@lang('site.type')</label><span class="text-danger">*</span>
                                                    <select class="js-example-placeholder-multiple col-sm-12" name="sub_type[]"  >
                                                        <option selected>@lang('site.select')</option>
                                                        <option value="Meal"
                                                                @if($service->type=='meal') selected @endif>@lang('site.meal')
                                                        </option>
                                                        <option value="Break"
                                                                @if($service->type=='break') selected @endif>@lang('site.break')
                                                        </option>
                                                        <option value="Tawla"
                                                                @if($service->type=='tawla') selected @endif>@lang('site.tawla')
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 form-group col-12">
                                                    <a class="btn btn-air-primary btn-pill btn-success add-price w-100 m-t-30"><i
                                                            class="fa fa-plus" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>   
                                </table>
                            </div>
                                <br>
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
    </div>
    </div>



    </div>
    </div>
    </div>
    <!-- Individual column searching (text inputs) Ends-->
    </div>
    </div>
    <!-- Container-fluid Ends-->
    </div>

@endsection
@section('scripts')

    <script>
        $(document).ready(function () {
            var country_id =  $('#country_id').val();
                $.get("{{url('dashboard/countrycities')}}/"+country_id, function(data){
                    $('#city_id').empty();
                    $('#city_id').append('<option>@lang('site.select')</option>');
                    $.each(data, function(key, value){
                        $('#city_id').append('<option value="'+value.id+'">'+value.name_ar+'</option>')

                });
                $('#city_id').val({{$place->city_id}});

        });
    });
        $('#country_id').on('change',function(e){
            var country_id = e.target.value;



            $.get("{{url('dashboard/countrycities')}}/"+country_id, function(data){
                console.log(data);
                $('#city_id').empty();
                $('#city_id').append('<option>@lang('site.select')</option>');
                $.each(data, function(key, value){
                    $('#city_id').append('<option value="'+value.id+'">'+value.name_ar+'</option>')

                });
            })
        })
        $('#category_id').on('change', function (e) {
            var categoryId = e.target.value;


            $.get("{{url('dashboard/SubCategories')}}/" + categoryId, function (data) {
                console.log(data);
                $('#sub_category_id').empty();
                $('#sub_category_id').append('<option>  Select Please  </option>');
                $.each(data, function (key, value) {
                    $('#sub_category_id').append('<option value="' + value.id + '">' + value.name_ar + '</option>')

                });
            })
        })

    </script>

<script>
    var imgUploads = document.getElementById("upload-imgs"),
        imgPreviews = document.getElementById("img-previews"),
        imgUploadForms = document.getElementById("form-upload"),
        totalFiles,
        previewTitle,
        previewTitleText,
        img,
        img2,
        img3;
    imgUploads.addEventListener("change", previewImgss, true);

    function previewImgss(event) {
        totalFiles = imgUploads.files.length;

        if (!!totalFiles) {
            imgPreviews.classList.remove("img-thumbs-hidden");
        }

        for (var i = 0; i < totalFiles; i++) {
            wrapper = document.createElement("div");
            wrapper.classList.add("wrapper-thumb");
            removeBtn = document.createElement("span");
            nodeRemove = document.createTextNode("x");
            removeBtn.classList.add("remove-btn");
            removeBtn.appendChild(nodeRemove);
            img = document.createElement("img");
            img.src = URL.createObjectURL(event.target.files[i]);
            img.classList.add("img-preview-thumb");
            wrapper.appendChild(img);
            wrapper.appendChild(removeBtn);
            imgPreviews.appendChild(wrapper);

        }
    }  
   /*video */
document.getElementById("videoUpload").onchange = function(event) {
    let file = event.target.files[0];
    let blobURL = URL.createObjectURL(file);
    document.querySelector("video").style.display = "block";
    document.querySelector("video").src = blobURL;
};
    $(".remove-btn").click(function() {
        $(this).parent(".wrapper-thumb").remove();
    });
    document.getElementById("imgInp").onchange = function() {
        let imgURL = (frame.src = URL.createObjectURL(event.target.files[0]));
        document.querySelector("img").src = imgURL;
    };
    document.getElementById("imgInp2").onchange = function() {
        let imgURL2 = (frame2.src = URL.createObjectURL(event.target.files[0]));
        document.querySelector("img2").src = imgURL2;
    };
    document.getElementById("imgInp3").onchange = function() {
        let imgURL3 = (frame3.src = URL.createObjectURL(event.target.files[0]));
        document.querySelector("img3").src = imgURL2;
    };
</script>
<script>

$(document).ready(function () {
    jQuery('a.add-price').click(function (event) {
        event.preventDefault();
        var newRow = jQuery('<tr><td><div class="row"><div class="col-md-5 form-group col-12 p-2">' +
        // ' <input type="hidden"  name="id[]" class="form-control"/>' +
            '<label>@lang('site.name_ar')</label><input type="text"  name="sub_name_ar[]" class="form-control"/></div><div class="col-md-5 form-group col-12 p-2">' +
            '<label>@lang('site.name_en')</label><input type="text" name="sub_name_en[]" class="form-control" ></div><div class="col-md-5 form-group col-6 p-2">' +
            '<label>@lang('site.type')</label><select class="form-control btn-square" name="sub_type[]"><option selected>@lang('site.select')</option><option value="Meal">@lang('site.meal')</option><option value="Break">@lang('site.break') </option><option value="Tawla">@lang('site.tawla') </option></select></div><div class="col-md-5 form-group col-6 p-2">' +
            '  </div>  <div class="col-md-2 form-group col-12 p-2 "> <a class="btn btn-air-primary btn-pill btn-danger add-price w-100 m-t-30" onclick="deletetr(this)" ><i class="fa fa-trash"></i></a>' +
            '</div></div> </td>  </tr>');
        jQuery('.price-list').append(newRow);
    });

    $("input[name='price']").click(function () {
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
