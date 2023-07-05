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
                                <label>@lang('site.ar.name')<span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control"
                                       value="{{ $car->name_ar ?? ' ' }}" readonly="" disabled
                                >
                            </div>
                            <div class="col-md-6 form-group col-12 p-2">
                                <label>@lang('site.en.name')<span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control"
                                       value="{{ $car->name_en ?? '' }}" readonly="" disabled
                                >
                            </div>


                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.year')<span class="text-danger">*</span></label>
                                <input type="text" name="year" class="form-control"
                                       value="{{ $car->year }}" readonly="" disabled
                                >
                            </div>

                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.color')<span class="text-danger">*</span></label>
                                <input type="color" name="color" class="form-control"
                                       value="{{ $car->color }}" readonly="" disabled
                                >
                            </div>
                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.category')<span class="text-danger">*</span></label>
                                <input type="text" name="category" class="form-control"
                                       value="{{ $car->category ?? '' }}" readonly="" disabled
                                >
                            </div>

                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.car_numbers')<span class="text-danger">*</span></label>
                                <input type="number" name="car_numbers" class="form-control"
                                       value="{{ $car->car_numbers ?? '' }}" readonly="" disabled>
                            </div>


                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.car_delivery_date')<span class="text-danger">*</span></label>
                                <input type="datetime" name="car_delivery_date" class="form-control"
                                       value="{{ $car->car_delivery_date }}" disabled readonly=""
                                >
                            </div>
                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.price')<span class="text-danger">*</span></label>
                                <input type="text" name="fixed_price" class="form-control"
                                       value="{{ $car->fixed_price ?? '' }}" readonly="" disabled
                                >
                            </div>

                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.changed_price')<span class="text-danger">*</span></label>
                                <input type="text" name="changed_price" class="form-control"
                                       value="{{ $car->changed_price ?? '' }}" readonly="" disabled
                                >
                            </div>


                        </div>


                        <div class="row">


                            <div class="col-md-6 form-group">
                                <label class="form-label">@lang('site.users')</label>
                                <select class="form-control btn-square" name="user_id" readonly="" disabled>
                                    <option selected>@lang('site.select')</option>
                                    @foreach($users as $user)

                                        <option value="{{$user->id}}"
                                                @if($car->user_id==$user->id) selected @endif>{{$user->firstname . $user->lastname ?? ''}}</option>

                                    @endforeach

                                </select>
                            </div>

                            <div class="col-md-6 form-group  col-12 p-2">
                                <label class="form-label">@lang('site.categories')</label>
                                <select class="form-control btn-square" name="category_id" readonly="" disabled>
                                    <option selected>@lang('site.select')</option>
                                    @foreach($categories as $cat)

                                        <option value="{{$cat->id}}"
                                                @if($car->category_id==$cat->id) selected @endif>{{$cat->name_ar ?? ''}}</option>

                                    @endforeach

                                </select>
                            </div>

                            <div class="col-md-6 form-group"><span class="text-danger">*</span>
                                <label class="form-label">@lang('site.subcategories')</label>
                                <select class="form-control btn-square" name="sub_category_id" id="sub_category_id"
                                        disabled readonly="">
                                    <option>@lang('site.select')</option>
                                    @foreach($subcategories as $cats)

                                        <option value="{{$cats->id}}"
                                                @if($car->sub_category_id==$cats->id) selected @endif>{{$cats->name_ar ?? ''}}</option>

                                    @endforeach

                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label class="form-label">@lang('site.country')</label>
                                    <select class="form-control btn-square" name="country_id" id="country_id" disabled
                                            readonly="">
                                        <option selected>@lang('site.select')</option>
                                        @foreach($countries as $country)

                                            <option value="{{$country->id}}" @if($country->
                                                            id==$car->country_id) selected
                                                @endif>{{$country->name_ar ?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="form-label">@lang('site.city')</label>
                                    <select class="form-control btn-square" name="city_id" id="city_id" disabled
                                            readonly="">
                                        <option selected>@lang('site.select')</option>
                                        <!-- @foreach($cities as $city)

                                            <option value="{{$city->id}}" @if($city->id==$car->city_id)
                                                selected
                                            @endif>{{$city->name_ar ?? ''}}</option>


                                        @endforeach -->

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!--<div class="col-md-6">-->

                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.ar.description')<span class="text-danger">*</span></label>
                                <textarea class="form-control" cols="5" rows="5" name="description_ar" readonly>
{{$car->description_ar ?? ''}}<
                                        </textarea>
                            </div>
                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.en.description')<span class="text-danger">*</span></label>
                                <textarea class="form-control" cols="5" rows="5" name="description_en" readonly>
{{$car->description_en ?? ''}}
                                        </textarea>
                            </div>

                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.comment_text')<span class="text-danger">*</span></label>
                                <textarea class="form-control" cols="5" rows="5" name="comment_text" readonly>
{{$car->comment_text ?? ''}}
                                        </textarea>
                            </div>
                        </div>


                        <div class="row">

                            <div class="form-group col-12 p-2 mb-2">

                                <label>@lang('site.images')</label>

                                <div class="img-thumbs " id="img-previews">
                                    @if($car->images)
                                        @foreach ((explode(',',$car->images)) as $img)
                                            <div class="wrapper-thumb">
                                                <img id="frame" src="{{asset('images/cars/'.$img)}}"
                                                     alt=""
                                                     onerror="this.src='{{asset('images/cars/default.jpg')}}'"
                                                     width="200px" class="img-preview-thumb"/>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>


                        </div>

                        <div class="row">
                            <div class="form-group col-12 p-2">
                                <label>@lang('site.video')</label>
                                <video width="250" height="200"
                                       src="{{asset('images/cars/videos/'.$car->videos)}}"
                                       controls class="video-upload" autoplay>
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
@section('scripts')
    <script>
        $(document).ready(function () {
            var country_id = $('#country_id').val();
            $.get("{{url('dashboard/countrycities')}}/" + country_id, function (data) {
                $('#city_id').empty();
                $('#city_id').append('<option>@lang('site.select')</option>');
                $.each(data, function (key, value) {
                    $('#city_id').append('<option value="' + value.id + '">' + value.name_ar + '</option>')

                });
                $('#city_id').val({{$car->city_id}});

            });
        });

        function deletetr(r) {
            r.closest('tr').remove();
        }

        $('#country_id').on('change', function (e) {
            var country_id = e.target.value;


            $.get("{{url('dashboard/countrycities')}}/" + country_id, function (data) {
                console.log(data);
                $('#city_id').empty();
                $('#city_id').append('<option>@lang('site.select')</option>');
                $.each(data, function (key, value) {
                    $('#city_id').append('<option value="' + value.id + '">' + value.name_ar + '</option>')

                });
            })
        })


    </script>
@endsection
