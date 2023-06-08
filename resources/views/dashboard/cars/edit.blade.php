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
                    <form action="{{ route('dashboard.cars.update', $car->id) }}" method="post"
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


                            <div class="row form-group">

                                <div class="col-sm-12">


                                    <label>@lang('site.image')</label>
                                    <img src="{{asset('images/cars/'.$car->main_image_ads)}}"
                                         data-bs-toggle="modal"
                                         data-bs-target="#exampleModalss" width="100px" height="100px" class="d-block"
                                         onerror="this.src='{{asset('images/cars/default.jpg')}}'">


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
                                           value="{{ $car->name }}"
                                    >
                                </div>


                                <div class="col-md-6 form-group col-12 p-2 ">
                                    <label>@lang('site.year')<span class="text-danger">*</span></label>
                                    {{--                                    <input type="text" name="year" class="form-control"--}}
                                    {{--                                           value="{{ $car->year }}"--}}
                                    {{--                                    >--}}

                                    <select class="form-control" name="year">
                                        @for ($year1 = (int)date('Y')+1; 1900 <= $year1; $year1--): 
                                            <option value="{{$year1}}" {{$year1==$car->year? 'selected':'' }}>{{$year1}}</option>
                                        @endfor
                                    </select>
                                </div>    

                                <div class="col-md-6 form-group col-12 p-2 ">
                                    <label>@lang('site.color')<span class="text-danger">*</span></label>
                                    <input type="color" name="color" class="form-control"
                                           value="{{ $car->color }}"
                                    >
                                </div>
                                <div class="col-md-6 form-group col-12 p-2 ">
                                    <label>@lang('site.category')<span class="text-danger">*</span></label>
                                    <input type="text" name="category" class="form-control"
                                           value="{{ $car->category ?? '' }}"
                                    >
                                </div>

                                <div class="col-md-6 form-group col-12 p-2 ">
                                    <label>@lang('site.car_numbers')<span class="text-danger">*</span></label>
                                    <input type="number" name="car_numbers" class="form-control"
                                           value="{{ $car->car_numbers ?? '' }}">
                                </div>


                                <div class="col-md-6 form-group col-12 p-2 ">
                                    <label>@lang('site.car_delivery_date')<span class="text-danger">*</span></label>
                                    <input type="datetime" name="car_delivery_date" class="form-control"
                                           value="{{ $car->car_delivery_date }}">
                                </div>


                                {{--                                <div class="col-md-6 form-group col-12 p-2 ">--}}
                                {{--                                    <label>@lang('site.price')<span class="text-danger">*</span></label>--}}
                                {{--                                    <input type="text" name="fixed_price" class="form-control"--}}
                                {{--                                           value="{{ $car->fixed_price ?? '' }}"--}}
                                {{--                                    >--}}
                                {{--                                </div>--}}

                                {{--                                <div class="col-md-6 form-group col-12 p-2 ">--}}
                                {{--                                    <label>@lang('site.changed_price')<span class="text-danger">*</span></label>--}}
                                {{--                                    <input type="text" name="changed_price" class="form-control"--}}
                                {{--                                           value="{{ $car->changed_price ?? '' }}"--}}
                                {{--                                    >--}}
                                {{--                                </div>--}}


                            </div>

                            <div class="row m-t-10">
                                <div class="m-checkbox-inline">
                                    <label for="edo-ani">
                                        <input class="radio_animated" type="radio" name="price" checked=""
                                               data-bs-original-title="" title="" value="1">@lang('site.fixed_price')
                                    </label>
                                    <label for="edo-ani1">
                                        <input class="radio_animated" type="radio" name="price"
                                               data-bs-original-title="" title="" value="2">@lang('site.changed_price')
                                    </label>
                                </div>
                            </div>
                            <div class="row m-t-10">
                                <!--<div class="col-md-6">-->

                                <div class="col-md-6 form-group col-12 p-2  desc" id="price1">
                                    <label>@lang('site.fixed_price')<span class="text-danger">*</span></label>
                                    <input type="text" name="fixed_price" class="form-control"
                                           value="{{ $car->fixed_price ?? '' }}"
                                    >
                                </div>

                                <div class="col-md-12 form-group col-12   desc" id="price2" style="display: none;">
                                    <table class="price-list" id="tb_price">
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-5 form-group col-12">
                                                        <label>@lang('site.daynumber')</label>
                                                        <input type="number" name="daynumber[]" class="form-control"/>
                                                    </div>
                                                    <div class="col-md-5 form-group col-12">
                                                        <label>@lang('site.fixed_price')</label>
                                                        <input type="number" name="price[]" class="form-control">
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


                            <div class="row">


                                <div class="col-md-6 form-group">
                                    <label class="form-label">@lang('site.users')</label>
                                    <select class="form-control btn-square" name="user_id">
                                        <option selected value="0">@lang('site.select')</option>
                                        @foreach($users as $user)

                                            <option value="{{$user->id}}"
                                                    @if($car->user_id==$user->id) selected @endif>{{$user->firstname . $user->lastname ?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>

                                <div class="col-md-6 form-group"><span class="text-danger">*</span>
                                    <label class="form-label">@lang('site.categories')</label>
                                    <select class="form-control btn-square" name="category_id" id="category_id">
                                        <option selected value="0">@lang('site.select')</option>
                                        @foreach($categories as $cat)

                                            <option value="{{$cat->id}}"
                                                    @if($car->category_id==$cat->id) selected @endif>{{$cat->name_ar ?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>

                                <div class="col-md-6 form-group"><span class="text-danger">*</span>
                                    <label class="form-label">@lang('site.subcategories')</label>
                                    <select class="form-control btn-square" name="sub_category_id" id="sub_category_id">
                                        <option value="0">@lang('site.select')</option>
                                        @foreach($subcategories as $cats)

                                            <option value="{{$cats->id}}"
                                                    @if($car->sub_category_id==$cats->id) selected @endif>{{$cats->name_ar ?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>
                                <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="form-label">@lang('site.country')</label>
                                                    <select class="form-control btn-square" name="country_id" id="country_id">
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
                                                    <select class="form-control btn-square" name="city_id" id="city_id">
                                                        <option selected>@lang('site.select')</option>
                                                      
                                                    </select>
                                                </div>
                                            </div>
                            </div>


                            <div class="row">

                                <div class="col-md-6 form-group col-12 p-2">


                                    <label>@lang('site.image')</label>
                                    <input type="file" name="main_image_ads" class="form-control"
                                           value="{{ old('main_image_ads') }}">


                                </div>


                            </div>

                            <div class="row">
                                <div class="col-md-6 form-group col-12 p-2">


                                    <label>@lang('site.videos')</label>
                                    <input type="file" name="videos" class="form-control"
                                           value="{{ old('videos') }}">


                                </div>

                                <div class="col-md-6 form-group col-12 p-2">


                                    <video width="300" height="150" controls>
                                        <source src="{{URL::asset("/images/cars/$car->videos")}}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>
                            <div class="row">


                                <div class="col-md-6 form-group col-12 p-2">


                                    <label>@lang('site.images')</label>
                                    <input type="file" name="images[]" class="form-control"
                                           value="{{ old('images[]') }}" multiple>


                                </div>
                            </div>


                            <div class="row">
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


                            <br>


                        </div>
                    </form>
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
            jQuery('a.add-price').click(function (event) {
                event.preventDefault();
                var newRow = jQuery('<tr><td><div class="row"><div class="col-md-5 form-group col-12 p-2">' +
                    ' <label>@lang('site.daynumber')</label><input type="number"  name="daynumber[]" class="form-control"/></div><div class="col-md-5 form-group col-12 p-2">' +
                    '<label>@lang('site.fixed_price')</label><input type="number" name="price[]" class="form-control" >' +
                    '  </div>  <div class="col-md-2 form-group col-12 p-2 "> <a class="btn btn-air-primary btn-pill btn-danger add-price w-100 m-t-30" onclick="deletetr(this)" ><i class="fa fa-trash"></i></a>' +

                    '</div></div> </td>  </tr>');
                jQuery('.price-list').append(newRow);
            });

            $("input[name='price']").click(function () {
                var test = $(this).val();

                $("div.desc").hide();
                $("#price" + test).show();
            });
            var country_id =  $('#country_id').val();
                $.get("{{url('dashboard/countrycities')}}/"+country_id, function(data){
                    $('#city_id').empty();
                    $('#city_id').append('<option>@lang('site.select')</option>');
                    $.each(data, function(key, value){
                        $('#city_id').append('<option value="'+value.id+'">'+value.name_ar+'</option>')

                });
                $('#city_id').val({{$car->city_id}});

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

@endsection
