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


                            <div class="row form-group">

                                <div class="col-sm-12">


                                    <label>@lang('site.display_photo')</label>
                                    <img src="{{asset('images/places/'.$place->display_photo)}}"
                                         data-bs-toggle="modal"
                                         data-bs-target="#exampleModalss" width="100px" height="100px" class="d-block"
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
                                                        <img name="soso"
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
                            <!--  End Of Modal -->
                            <div class="row">
                                <!--<div class="col-md-6">-->

                                <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.name_ar')<span class="text-danger">*</span></label>
                                        <input type="text" name="name_ar" class="form-control"
                                               value="{{old('name_ar')}}"
                                               required>
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.name_en')<span class="text-danger">*</span></label>
                                        <input type="text" name="name_en" class="form-control"
                                               value="{{old('name_en')}}"
                                               required>
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.place_order')<span class="text-danger">*</span></label>
                                        <input type="integer" name="place_order" class="form-control"
                                               value="{{old('place_order')}}"
                                               >
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.place_error')<span class="text-danger">*</span></label>
                                        <input type="integer" name="place_error" class="form-control"
                                               value="{{old('place_error')}}"
                                               >
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.const_from')<span class="text-danger">*</span></label>
                                        <input type="text" name="const_from" class="form-control"
                                               value="{{old('const_from')}}"
                                               >
                                    </div>



                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.const_to')<span class="text-danger">*</span></label>
                                        <input type="text" name="const_to" class="form-control"
                                               value="{{old('const_to')}}"
                                               >
                                    </div>


                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.address')<span class="text-danger">*</span></label>
                                        <input type="text" name="address" class="form-control"
                                               value="{{old('address')}}"
                                               >
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.descrption_ar')<span class="text-danger">*</span></label>
                                        <input type="text" name="descrption_ar" class="form-control"
                                               value="{{old('descrption_ar')}}"
                                               >
                                    </div>


                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.descrption_en')<span class="text-danger">*</span></label>
                                        <input type="text" name="descrption_en" class="form-control"
                                               value="{{old('descrption_en')}}"
                                               >
                                    </div>
                                    
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.phone_one')<span class="text-danger">*</span></label>
                                        <input type="text" name="phone_one" class="form-control"
                                               value="{{old('phone_one')}}"
                                               >
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.phone_two')<span class="text-danger">*</span></label>
                                        <input type="text" name="phone_two" class="form-control"
                                               value="{{old('phone_two')}}"
                                               >
                                    </div>

                            </div>

                            <div class="row">
                                    <!--<div class="col-md-6">-->

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.google_mark_link')<span class="text-danger">*</span></label>
                                        <textarea class="form-control"   cols="5" rows="5" name="google_mark_link">

                                        </textarea>
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.place_link')<span class="text-danger">*</span></label>
                                        <textarea class="form-control" cols="5" rows="5" name="place_link">

                                        </textarea>
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.share_link')<span class="text-danger">*</span></label>
                                        <textarea class="form-control"   cols="5" rows="5" name="share_link">

                                        </textarea>
                                    </div>

                                </div>
                                <div class="row">
                                    <!--<div class="col-md-6">-->

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.time_check')<span class="text-danger">*</span></label>
                                        <input type="integer" name="time_check" class="form-control"
                                               value="{{old('time_check')}}"
                                               >
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.seen_counter')<span class="text-danger">*</span></label>
                                        <input type="integer" name="seen_counter" class="form-control"
                                               value="{{old('seen_counter')}}"
                                               >
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.delivery')<span class="text-danger">*</span></label>
                                        <input type="integer" name="delivery" class="form-control"
                                               value="{{old('delivery')}}"
                                               >
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.diff_time')<span class="text-danger">*</span></label>
                                        <input type="integer" name="diff_time" class="form-control"
                                               value="{{old('diff_time')}}"
                                               >
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.const_time')<span class="text-danger">*</span></label>
                                        <input type="integer" name="const_time" class="form-control"
                                               value="{{old('const_time')}}"
                                               >
                                    </div>
                                </div>

                                
                                <div class="row">
                                    <!--<div class="col-md-6">-->

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.latitude')<span class="text-danger">*</span></label>
                                        <textarea class="form-control"   cols="5" rows="5" name="latitude">

                                        </textarea>
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.longitude')<span class="text-danger">*</span></label>
                                        <textarea class="form-control" cols="5" rows="5" name="longitude">

                                        </textarea>
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.rest_one')<span class="text-danger">*</span></label>
                                        <textarea class="form-control"   cols="5" rows="5" name="rest_one">

                                        </textarea>
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.rest_two')<span class="text-danger">*</span></label>
                                        <textarea class="form-control" cols="5" rows="5" name="rest_two">

                                        </textarea>
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.rest_three')<span class="text-danger">*</span></label>
                                        <textarea class="form-control"   cols="5" rows="5" name="rest_three">

                                        </textarea>
                                    </div>
         
                                    <div class="col-md-6 form-group">
                                    <label class="form-label">@lang('site.social_media')</label>
                                    <select class="form-control btn-square"
                                        name="facebook">
                                    <option disabled
                                            selected>@lang('site.select')</option>

                                    <option value="instagram"
                                           @lang('site.instagram')</option>
                                    <option value="facebook"
                                          @lang('site.facebook')</option>


                                    </select>
                                </div>

                                </div>

                            <div class="row">

                                <div class="col-md-6 form-group"><span class="text-danger">*</span>
                                    <label class="form-label">@lang('site.users')</label>
                                    <select class="form-control btn-square" name="user_id">
                                        <option selected>@lang('site.select')</option>
                                        @foreach($users as $user)

                                            <option value="{{$user->id}}"
                                            @if($user->user_id==$user->id) selected @endif>{{$user->username ?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>
                             

                        
                                <div class="col-md-6 form-group"><span class="text-danger">*</span>
                                    <label class="form-label">@lang('site.categories')</label>
                                    <select class="form-control btn-square" name="category_id">
                                        <option selected>@lang('site.select')</option>
                                        @foreach($categories as $cat)

                                            <option value="{{$cat->id}}">
                                            @if($place->place_category_id==$cat->id) selected @endif>{{$cat->name ?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="row">


                                    <div class="col-md-6 form-group col-12 p-2">


                                    <label>@lang('site.display_photo')</label>
                                    <input type="file" name="display_photo" class="form-control"
                                    value="{{ old('display_photo') }}">


                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2">


                                    <label>@lang('site.notify_photo')</label>
                                    <input type="file" name="notify_photo" class="form-control"
                                    value="{{ old('notify_photo') }}">


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
