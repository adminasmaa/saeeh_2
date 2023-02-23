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
                                        data-bs-target="#exampleModalss" width="100px" height="100px" class="d-block"
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
                                        <h5 class="modal-title" id="exampleModalLabel">@lang('site.notify_photo')</h5>
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
                                        value="{{ $place->name_ar ?? '' }}" readonly="">
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.name_en')</label>
                                        <input type="text" name="name_en" class="form-control"
                                        value="{{ $place->name_en ?? '' }}" readonly="">
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.place_order')<span class="text-danger">*</span></label>
                                        <input type="integer" name="place_order" class="form-control"
                                        value="{{ $place->place_order ?? '' }}" readonly="">
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.place_error')<span class="text-danger">*</span></label>
                                        <input type="integer" name="place_error" class="form-control"
                                        value="{{ $place->place_error ?? '' }}" readonly="">
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.const_from')<span class="text-danger">*</span></label>
                                        <input type="integer" name="const_from" class="form-control"
                                        value="{{ $place->const_from ?? '' }}" readonly="">
                                    </div>



                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.const_to')<span class="text-danger">*</span></label>
                                        <input type="integer" name="const_to" class="form-control"
                                        value="{{ $place->const_to ?? '' }}" readonly="">
                                    </div>


                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.google_mark_link')</label>
                                        <input type="text" name="google_mark_link" class="form-control"
                                        value="{{ $place->google_mark_link ?? '' }}" readonly="">
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.place_link')</label>
                                        <input type="text" name="place_link" class="form-control"
                                        value="{{ $place->place_link ?? '' }}" readonly="">
                                    </div>


                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.share_link')</label>
                                        <input type="text" name="share_link" class="form-control"
                                        value="{{ $place->share_link ?? '' }}" readonly="">
                                    </div>
                                    
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.phone_one')<span class="text-danger">*</span></label>
                                        <input type="integer" name="phone_one" class="form-control"
                                        value="{{ $place->phone_one ?? '' }}" readonly="">
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.phone_two')</label>
                                        <input type="integer" name="phone_two" class="form-control"
                                        value="{{ $place->phone_two ?? '' }}" readonly="">
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.time_check')</label>
                                        <input type="integer" name="time_check" class="form-control"
                                        value="{{ $place->time_check ?? '' }}" readonly="">
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.seen_counter')<span class="text-danger">*</span></label>
                                        <input type="integer" name="seen_counter" class="form-control"
                                        value="{{ $place->seen_counter ?? '' }}" readonly="">
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.delivery')</label>
                                        <input type="integer" name="delivery" class="form-control"
                                        value="{{ $place->delivery ?? '' }}" readonly="">
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.diff_time')</label>
                                        <input type="integer" name="diff_time" class="form-control"
                                        value="{{ $place->diff_time ?? '' }}" readonly="">
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.const_time')</label>
                                        <input type="integer" name="const_time" class="form-control"
                                        value="{{ $place->const_time ?? '' }}" readonly="">
                                    </div>
                                </div>

                                <div class="row">
                                    <!--<div class="col-md-6">-->

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.latitude')</label>
                                        <input type="text" name="latitude" class="form-control"
                                        value="{{ $place->latitude ?? '' }}" readonly="">
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.longitude')</label>
                                        <input type="text" name="longitude" class="form-control"
                                        value="{{ $place->longitude ?? '' }}" readonly="">
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.rest_one')</label>
                                        <input type="text" name="rest_one" class="form-control"
                                        value="{{ $place->rest_one ?? '' }}" readonly="">
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.rest_two')</label>
                                        <input type="text" name="rest_two" class="form-control"
                                        value="{{ $place->rest_two ?? '' }}" readonly="">
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.rest_three')</label>
                                        <input type="text" name="rest_three" class="form-control"
                                        value="{{ $place->rest_three ?? '' }}" readonly="">
                                    </div>
                                    <div class="col-md-6 form-group"><span class="text-danger">*</span>
                                    <label class="form-label">@lang('site.social_media')</label>
                                    <select class="form-control btn-square" name="social_media" readonly="">
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
                                <label>@lang('site.address')<span class="text-danger">*</span></label>
                                <input type="text" name="address" class="form-control"
                                       value="{{ $place->address ?? '' }}" readonly=""
                                    >
                                </div>
                                <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.descrption_ar')<span class="text-danger">*</span></label>
                                <input type="text" name="descrption_ar" class="form-control"
                                       value="{{ $place->descrption_ar ?? '' }}" readonly=""
                                    >
                                </div>
                                <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.descrption_en')<span class="text-danger">*</span></label>
                                <input type="text" name="descrption_en" class="form-control"
                                       value="{{ $place->descrption_en ?? '' }}" readonly=""
                                    >
                                </div>

                                </div>


                        <div class="row">
                            <div class="col-md-6 form-group col-12 p-2">
                                <label class="form-label">@lang('site.users')</label>
                                <select class="form-control btn-square" name="user_id" readonly="">
                                    <option selected>@lang('site.select')</option>
                                    @foreach($users as $user)

                                        <option value="{{$user->id}}"
                                                @if($place->user_id==$user->id) selected @endif>{{$user->username ?? ''}}</option>

                                    @endforeach

                                </select>
                            </div>
                            <div class="col-md-6 form-group  col-12 p-2">
                                <label class="form-label">@lang('site.categories')</label>
                                <select class="form-control btn-square" name="category_id" readonly="">
                                    <option selected>@lang('site.select')</option>
                                    @foreach($categories as $cat)

                                        <option value="{{$cat->id}}"
                                                @if($place->category_id==$cat->id) selected @endif>{{$cat->name ?? ''}}</option>

                                    @endforeach

                                </select>
                            </div>
                        </div>
                        
                        <div class="row">
                            <label> @lang('site.images')</label>
                            @isset($place['images'])
                                @foreach(json_decode($place->images) as $key=>$image)
                                    <div class="col-md-2 form-group col-2 p-1">

                                        <img src="{{asset('images/places/'.$image)}}"

                                             width="100px" height="100px"
                                             class="d-block"
                                             onerror="this.src='{{asset('images/places/default.jpg')}}'"
                                        >

                                    </div>
                                @endforeach
                            @endisset

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
