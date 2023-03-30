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
                                        {{--                                        <input type="text" name="year" class="form-control"--}}
                                        {{--                                               value="{{old('year')}}"--}}
                                        {{--                                               required>--}}
                                        <select class="form-control" name="year">
                                        @for ($year = (int)date('Y')+1; 1900 <= $year; $year--): 
                                            <option value="{{$year}}">{{$year}}</option>
                                        @endfor
                                        </select>
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


{{--                                    <div class="col-md-6 form-group col-12 p-2 ">--}}
{{--                                        <label>@lang('site.price')<span class="text-danger">*</span></label>--}}
{{--                                        <input type="text" name="fixed_price" class="form-control"--}}
{{--                                               value="{{old('fixed_price')}}"--}}
{{--                                        >--}}
{{--                                    </div>--}}

{{--                                    <div class="col-md-6 form-group col-12 p-2 ">--}}
{{--                                        <label>@lang('site.changed_price')<span class="text-danger">*</span></label>--}}
{{--                                        <input type="text" name="changed_price" class="form-control"--}}
{{--                                               value="{{old('changed_price')}}"--}}
{{--                                        >--}}
{{--                                    </div>--}}
                                </div>
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
                                                                <label>@lang('site.daynumber')</label>
                                                                <input type="number"  name="daynumber[]" class="form-control"/>
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

                                                <option
                                                    value="{{$user->id}}">{{$user->firstname . $user->lastname ?? ''}}</option>

                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label class="form-label">@lang('site.advertising')</label>
                                        <select class="form-control btn-square" name="ads_id">
                                            <option selected value="0">@lang('site.select')</option>
                                            @foreach($ads as $ad)

                                                <option value="{{$ad->id}}">{{$ad->title ?? ''}}</option>

                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group"><span class="text-danger">*</span>
                                        <label class="form-label">@lang('site.categories')</label>
                                        <select class="form-control btn-square" name="category_id" id="category_id">
                                            <option selected value="0">@lang('site.select')</option>
                                            @foreach($categories as $cat)

                                                <option value="{{$cat->id}}">{{$cat->name_ar ?? ''}}</option>

                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group"><span class="text-danger">*</span>
                                        <label class="form-label">@lang('site.subcategories')</label>
                                        <select class="form-control btn-square" name="sub_category_id" id="sub_category_id">
                                            <option selected value="0">@lang('site.select')</option>
                                            {{--                                        @foreach($subcategories as $cat)--}}

                                            {{--                                            <option value="{{$cat->id}}">{{$cat->name_ar ?? ''}}</option>--}}

                                            {{--                                        @endforeach--}}

                                        </select>
                                    </div>

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

            $("input[name='price']").click(function() {
                var test = $(this).val();

                $("div.desc").hide();
                $("#price" + test).show();
            });
        });

        function deletetr(r) {
            r.closest('tr').remove();
        }

        $('#category_id').on('change',function(e){
            var categoryId = e.target.value;



            $.get("{{url('dashboard/SubCategories')}}/"+categoryId, function(data){
                console.log(data);
                $('#sub_category_id').empty();
                $('#sub_category_id').append('<option>  Select Please  </option>');
                $.each(data, function(key, value){
                    $('#sub_category_id').append('<option value="'+value.id+'">'+value.name_ar+'</option>')

                });
            })
        })

    </script>

@endsection

