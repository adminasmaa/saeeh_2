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

                        <!-- <div class="row"> -->
                        <div class="row form-group">

                            <div class="col-md-6 form-group col-12 p-2  ">


                                <label>@lang('site.display_photo')</label>
                                <img src="{{asset('images/places/'.$place->display_photo)}}"
                                     data-bs-toggle="modal"
                                     data-bs-target="#exampleModalss" width="100px" height="100px" class="d-block"
                                     onerror="this.src='{{asset('images/places/default.jpg')}}'"
                                >
                            </div>
                            <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.notify_photo')</label>
                                    <img src="{{asset('images/places/'.$place->notify_photo)}}"
                                        data-bs-toggle="modal"
                                        data-bs-target="#exampleModalss2" width="100px" height="100px" class="d-block"
                                        onerror="this.src='{{asset('images/places/default.jpg')}}'"
                                    >

                        </div>
                        </div>
<!-- </div> -->
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
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">@lang('site.Cancel')</button>
                                    </div>
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

                            <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.name_ar')<span class="text-danger">*</span></label>
                                        <input type="text" name="name_ar" class="form-control"
                                        value="{{ $place->name_ar ?? '' }}" readonly=""disabled>
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.name_en')</label>
                                        <input type="text" name="name_en" class="form-control"
                                        value="{{ $place->name_en ?? '' }}" readonly=""disabled>
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.place_order')<span class="text-danger">*</span></label>
                                        <input type="integer" name="place_order" class="form-control"
                                        value="{{ $place->place_order ?? '' }}" readonly=""disabled>
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.place_error')<span class="text-danger">*</span></label>
                                        <input type="integer" name="place_error" class="form-control"
                                        value="{{ $place->place_error ?? '' }}" readonly=""disabled>
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.const_from')<span class="text-danger">*</span></label>
                                        <input type="integer" name="const_from" class="form-control"
                                        value="{{ $place->const_from ?? '' }}" readonly=""disabled>
                                    </div>



                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.const_to')<span class="text-danger">*</span></label>
                                        <input type="integer" name="const_to" class="form-control"
                                        value="{{ $place->const_to ?? '' }}" readonly=""disabled>
                                    </div>


                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.google_mark_link')</label>
                                        <input type="text" name="google_mark_link" class="form-control"
                                        value="{{ $place->google_mark_link ?? '' }}" readonly=""disabled>
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.place_link')</label>
                                        <input type="text" name="place_link" class="form-control"
                                        value="{{ $place->place_link ?? '' }}" readonly=""disabled>
                                    </div>


                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.share_link')</label>
                                        <input type="text" name="share_link" class="form-control"
                                        value="{{ $place->share_link ?? '' }}" readonly=""disabled>
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.menu_link')</label>
                                        <input type="text" name="menu_link" class="form-control"
                                        value="{{ $place->menu_link ?? '' }}" readonly=""disabled>
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.phone_one')<span class="text-danger">*</span></label>
                                        <input type="text" name="phone_one" class="form-control"
                                        value="{{ $place->phone_one ?? '' }}" readonly=""disabled>
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.phone_two')</label>
                                        <input type="text" name="phone_two" class="form-control"
                                        value="{{ $place->phone_two ?? '' }}" readonly=""disabled>
                                    </div>
                                    
                                    <!-- <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.seen_counter')<span class="text-danger">*</span></label>
                                        <input type="integer" name="seen_counter" class="form-control"
                                        value="{{ $place->seen_counter ?? '' }}" readonly=""disabled>
                                    </div> -->

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.delivery')</label>
                                        <input type="integer" name="delivery" class="form-control"
                                        value="{{ $place->delivery ?? '' }}" readonly=""disabled>
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.order_by')</label>
                                        <input type="number" name="order_by" class="form-control"
                                        value="{{ $place->order_by ?? '' }}" readonly=""disabled>
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.work_day')</label>
                                        <input type="text" name="work_day" class="form-control"
                                        value="{{ $place->work_day ?? '' }}" readonly=""disabled>
                                    </div>
                                </div>

                                <div class="row">
                                    <!--<div class="col-md-6">-->

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.latitude')</label>
                                        <input type="text" name="latitude" class="form-control"
                                        value="{{ $place->latitude ?? '' }}" readonly=""disabled>
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.longitude')</label>
                                        <input type="text" name="longitude" class="form-control"
                                        value="{{ $place->longitude ?? '' }}" readonly=""disabled>
                                    </div>

                                    <div class="col-md-6 form-group">
                                    <label class="form-label">@lang('site.social_media')</label><span class="text-danger">*</span>
                                    <select class="form-control btn-square" name="social_media" readonly=""disabled>
                                        <option selected>@lang('site.select')</option>

                                        <option value="facebook"
                                                @if($place->social_media=='facebook') selected @endif>facebook
                                        </option>
                                        <option value="instagram"
                                                @if($place->social_media=='instagram') selected @endif>instagram
                                        </option>

                                    </select>
                                    <!-- <select class="form-control btn-square" name="social_media">
                                    <option disabled
                                            selected>@lang('site.select')</option>

                                    <option value="facebook"
                                            @if($place->social_media=='facebook') selected @endif>@lang('site.facebook')</option>
                                    <option value="instagram"
                                            @if($place->social_media=='instagram') selected @endif>@lang('site.instagram')</option>


                                </select> -->
                                </div>

                                </div>

                                <div class="row">


                                    <!--<div class="col-md-6">-->


                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.facebook')<span class="text-danger">*</span></label>
                                <input type="text" name="facebook" class="form-control"
                                       value="{{ $place->facebook ?? '' }}" readonly=""disabled
                                    >
                                </div>

                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.instagram')<span class="text-danger">*</span></label>
                                <input type="text" name="instagram" class="form-control"
                                       value="{{ $place->instagram ?? '' }}" readonly=""disabled
                                    >
                                </div>

                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.twitter')<span class="text-danger">*</span></label>
                                <input type="text" name="twitter" class="form-control"
                                       value="{{ $place->twitter ?? '' }}" readonly=""disabled
                                    >
                                </div>

                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.address')<span class="text-danger">*</span></label>
                                <input type="text" name="address" class="form-control"
                                       value="{{ $place->address ?? '' }}" readonly=""disabled
                                    >
                                </div>
                                <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.descrption_ar')<span class="text-danger">*</span></label>
                                <input type="text" name="descrption_ar" class="form-control"
                                       value="{{ $place->descrption_ar ?? '' }}" readonly=""disabled
                                    >
                                </div>
                                <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.descrption_en')</label>
                                <input type="text" name="descrption_en" class="form-control"
                                       value="{{ $place->descrption_en ?? '' }}" readonly=""disabled
                                    >
                                </div>

                                <div class="col-md-6 form-group col-12 p-2">
                                <label class="form-label">@lang('site.users')</label>
                                <select class="form-control btn-square" name="user_id" readonly=""disabled>
                                    <option selected>@lang('site.select')</option>
                                    @foreach($users as $user)

                                        <option value="{{$user->id}}"
                                                @if($place->user_id==$user->id) selected @endif>{{$user->firstname . $user->lastname ?? ''}}</option>

                                    @endforeach

                                </select>
                            </div>
                        </div>


                        <div class="row">

                            <div class="col-md-6 form-group  col-12 p-2">
                                <label class="form-label">@lang('site.categories')</label>
                                <select class="form-control btn-square" name="category_id" readonly=""disabled>
                                    <option selected>@lang('site.select')</option>
                                    @foreach($categories as $cat)

                                        <option value="{{$cat->id}}"
                                                @if($place->category_id==$cat->id) selected @endif>{{$cat->name_ar ?? ''}}</option>

                                    @endforeach

                                </select>
                            </div>
                            <div class="col-md-6 form-group"><span class="text-danger">*</span>
                                <label class="form-label">@lang('site.subcategories')</label>
                                <select class="form-control btn-square" name="sub_category_id" id="sub_category_id" disabled readonly="">
                                    <option >@lang('site.select')</option>
                                    @foreach($subcategories as $cats)

                                        <option value="{{$cats->id}}"
                                                @if($place->sub_category_id==$cats->id) selected @endif>{{$cats->name_ar ?? ''}}</option>

                                    @endforeach

                                </select>
                            </div>
                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="form-label">@lang('site.country')</label>
                                                    <select class="form-control btn-square" name="country_id" id="country_id" disabled readonly="">
                                                        <option selected>@lang('site.select')</option>
                                                        @foreach($countries as $country)

                                                        <option value="{{$country->id}}" @if($country->
                                                            id==$place->country_id) selected
                                                            @endif>{{$country->name_ar ?? ''}}</option>

                                                        @endforeach

                                                    </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="form-label">@lang('site.city')</label>
                                                    <select class="form-control btn-square" name="city_id" id="city_id" disabled readonly="">
                                                        <option selected>@lang('site.select')</option>
                                                        <!-- @foreach($cities as $city)

                                                        <option value="{{$city->id}}" @if($city->id==$place->city_id)
                                                            selected @endif>{{$city->name_ar ?? ''}}</option>

                                                        @endforeach -->

                                                    </select>
                                                </div>
                                            </div>
                        </div>

                        <div class="form-group col-12 p-2 mb-2">

                                <label>@lang('site.images')</label>

                                <div class="img-thumbs " id="img-previews">
                                    @if($place->images)
                                    @foreach ((explode(',',$place->images)) as $img)
                                    <div class="wrapper-thumb">
                                        <img id="frame" src="{{asset('images/places/'.$img)}}"
                                            alt=""
                                            onerror="this.src='{{asset('images/places/default.jpg')}}'"
                                            width="200px" class="img-preview-thumb" />
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        <div class="form-group col-12 p-2 mb-2">

                            <label>@lang('site.videos')</label>

                            <div class="video-thumbs " id="video-previews">
                                @if($place->videos)
                                @foreach ((explode(',',$place->videos)) as $video)
                                <div class="wrapper-thumb">
                                    <img id="frame" src="{{asset('videos/places/'.$video)}}"
                                        alt=""
                                        onerror="this.src='{{asset('videos/places/default.jpg')}}'"
                                        width="200px" class="video-preview-thumb" />
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>

                        <div class="row m-t-10">
                        <h4>@lang('site.place_tables')</h4>
                            @foreach($place_table as $service)
                                <div class="col-md-6 form-group col-12   desc">
                                
                                    <table class="price-list" id="tb_price">
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    
                                                <div class="col-md-6 form-group col-12 p-2 ">
                                                        <label>@lang('site.name_ar')</label>
                                                        <input type="text" name="sub_name_ar[]"
                                                            class="form-control" value="{{$service->name_ar}}" readonly disabled/>
                                                    </div>
                                                    <div class="col-md-6 form-group col-12 p-2 ">
                                                        <label>@lang('site.name_en')</label>
                                                        <input type="text" name="sub_name_en[]"
                                                            class="form-control" value="{{$service->name_en}}" readonly disabled>
                                                    </div>
                                                    <div class="col-md-6 form-group col-12 p-2 ">
                                                        <label class="form-label">@lang('site.type')</label><span class="text-danger">*</span>
                                                        <select class="form-control btn-square" name="sub_type[]" readonly disabled>
                                                            <option selected>@lang('site.select')</option>

                                                            <option value="Meal"
                                                                    @if($service->type=='meal') selected @endif>meal
                                                            </option>
                                                            <option value="Break"
                                                                    @if($service->type=='break') selected @endif>break
                                                            </option>
                                                            <option value="Tawla"
                                                                    @if($service->type=='tawla') selected @endif>tawla
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>

                                </div>

                            @endforeach

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
@section('scripts')
<script>
$(document).ready(function() {
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

function deletetr(r) {
    r.closest('tr').remove();
}

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



</script>

@endsection