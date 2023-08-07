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
                                    <label>@lang('site.ar.name')<span class="text-danger">*</span></label>
                                    <input type="text" name="name_ar" class="form-control"
                                           value="{{ $car->name_ar  ?? ''}}"
                                    >
                                </div>
                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.en.name')<span class="text-danger">*</span></label>
                                    <input type="text" name="name_en" class="form-control"
                                           value="{{ $car->name_en  }}"
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
                                    <input type="datetime-local" name="car_delivery_date" class="form-control"
                                       format="('Y-m-d\TH:i')"value="{{ $car->car_delivery_date }}">
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
                                    <input type="number"  step=".1" name="fixed_price" class="form-control"
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
                                                        <input type="number"  step=".1" name="price[]" class="form-control">
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
                                    <select class="js-example-placeholder-multiple col-sm-12" name="user_id">
                                        <option selected value="0">@lang('site.select')</option>
                                        @foreach($users as $user)

                                            <option value="{{$user->id}}"
                                                    @if($car->user_id==$user->id) selected @endif>{{$user->firstname . $user->lastname ?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>

                                <div class="col-md-6 form-group"><span class="text-danger">*</span>
                                    <label class="form-label">@lang('site.categories')</label>
                                    <select class="js-example-placeholder-multiple col-sm-12" name="category_id" id="category_id">
                                        <option selected value="0">@lang('site.select')</option>
                                        @foreach($categories as $cat)

                                            <option value="{{$cat->id}}"
                                                    @if($car->category_id==$cat->id) selected @endif>{{$cat->name_ar ?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>

                                <div class="col-md-6 form-group"><span class="text-danger">*</span>
                                    <label class="form-label">@lang('site.subcategories')</label>
                                    <select class="js-example-placeholder-multiple col-sm-12" name="sub_category_id" id="sub_category_id">
                                        <option value="0">@lang('site.select')</option>
                                        @foreach($subcategories as $cats)

                                            <option value="{{$cats->id}}"
                                                    @if($car->sub_category_id==$cats->id) selected @endif>{{$cats->name_ar ?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="form-label">@lang('site.ads_status')</label>
                                    <select class="js-example-placeholder-multiple col-sm-12" name="ads_status_id">
                                        <option selected value="0">@lang('site.select')</option>
                                        @foreach($adsStatus as $ads_status)

                                            <option value="{{$ads_status->id}}"
                                                    @if($car->ads_status_id==$ads_status->id) selected @endif>{{$ads_status->status_ar?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>
                                <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="form-label">@lang('site.country')</label>
                                                    <select class="js-example-placeholder-multiple col-sm-12" name="country_id" id="country_id">
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
                                                    <select class="js-example-placeholder-multiple col-sm-12" name="city_id" id="city_id">
                                                        <option selected>@lang('site.select')</option>

                                                    </select>
                                                </div>
                                            </div>
                            </div>

                            <div class="row">
                                <!--<div class="col-md-6">-->

                                <div class="col-md-6 form-group col-12 p-2 ">
                                    <label>@lang('site.ar.description')<span class="text-danger">*</span></label>
                                    <textarea class="form-control" cols="5" rows="5" name="description_ar">
{{$car->description_ar ?? ''}}<
                                        </textarea>
                                </div>
                                <div class="col-md-6 form-group col-12 p-2 ">
                                    <label>@lang('site.en.description')<span class="text-danger">*</span></label>
                                    <textarea class="form-control" cols="5" rows="5" name="description_en">
{{$car->description_en ?? ''}}
                                        </textarea>
                                </div>

                                <div class="col-md-6 form-group col-12 p-2 ">
                                    <label>@lang('site.comment_text')<span class="text-danger">*</span></label>
                                    <textarea class="form-control" cols="5" rows="5" name="comment_text">
{{$car->comment_text ?? ''}}
                                        </textarea>
                                </div>
                            </div>

                            <br>
                                <div class="row">
                                    <div class="form-group col-12 p-2">
                                        <label>@lang('site.image')</label>

                                        <input type="file" class="form-control" name="main_image_ads"
                                            value="{{$car->main_image_ads}}" id="imgInp"  />
                                        <img id="frame"
                                            src="{{asset('images/cars/'.$car->main_image_ads)}}" alt=""
                                            onerror="this.src='{{asset('images/cars/default.jpg')}}'"
                                            width="200px" class="img-upload" />

                                    </div>
                                    <div class="form-group col-12 p-2 mb-2">

                                        <label>@lang('site.images')</label>

                                        <input type="file" class="form-control" name="images[]"
                                            value="{{$car->images}}" multiple id="upload-imgs" />

                                        <div class="img-thumbs " id="img-previews">
                                            @if($car->images)
                                            @foreach ((explode(',',$car->images)) as $img)
                                            <div class="wrapper-thumb">
                                                <img id="frame" src="{{asset('images/cars/'.$img)}}"
                                                    alt=""
                                                    onerror="this.src='{{asset('images/cars/default.jpg')}}'"
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
                                            name="videos" value="{{$car->videos}}?>" />
                                        <video width="250" height="200"
                                            src="{{asset('images/cars/videos/'.$car->videos)}}"
                                            controls class="video-upload" autoplay>
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>
                            <!-- <div class="row">

                                <div class="col-md-6 form-group col-12 p-2">


                                    <label>@lang('site.image')</label>
                                    <input type="file" name="main_image_ads" class="form-control"
                                           value="{{ old('main_image_ads') }}">


                                </div>


                            </div> -->

                            <!-- <div class="row">
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
                            </div> -->
                            <!-- <div class="row">


                                <div class="col-md-6 form-group col-12 p-2">


                                    <label>@lang('site.images')</label>
                                    <input type="file" name="images[]" class="form-control"
                                           value="{{ old('images[]') }}" multiple>


                                </div>
                            </div> -->


                            <!-- <div class="row">
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

                        </div> -->


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
<script>
    var imgUploads = document.getElementById("upload-imgs"),
        imgPreviews = document.getElementById("img-previews"),
        imgUploadForms = document.getElementById("form-upload"),
        totalFiles,
        previewTitle,
        previewTitleText,
        img;

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

            $(".remove-btn").click(function() {
                $(this).parent(".wrapper-thumb").remove();
            });
        }
    }
    $(".remove-btn").click(function() {
        $(this).parent(".wrapper-thumb").remove();
    });
    document.getElementById("imgInp").onchange = function() {
        let imgURL = (frame.src = URL.createObjectURL(event.target.files[0]));
        document.querySelector("img").src = imgURL;
    };

    /*video */
    document.getElementById("videoUpload").onchange = function(event) {
        let file = event.target.files[0];
        let blobURL = URL.createObjectURL(file);
        document.querySelector("video").style.display = "block";
        document.querySelector("video").src = blobURL;
    };
</script>
@endsection
