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
                                        <label>@lang('site.ar.name')<span class="text-danger">*</span></label>
                                        <input type="text" name="name_ar" class="form-control"
                                               value="{{old('name_ar')}}"
                                               required>
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.en.name')<span class="text-danger">*</span></label>
                                        <input type="text" name="name_en" class="form-control"
                                               value="{{old('name_en')}}"
                                               required>
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.year')<span class="text-danger">*</span></label>
                                        {{--                                        <input type="text" name="year" class="form-control"--}}
                                        {{--                                               value="{{old('year')}}"--}}
                                        {{--                                               required>--}}
                                        <select class="js-example-placeholder-multiple col-sm-12" name="year">
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
                                        <label>@lang('site.car_numbers')<span class="text-danger">*</span></label>
                                        <input type="number" name="car_numbers" class="form-control"
                                               value="{{old('car_numbers')}}"
                                        >
                                    </div>

                                    <!-- VALUES(STR_TO_DATE('07-25-2012','%m-%d-%Y') -->
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.car_delivery_date')<span class="text-danger">*</span></label>
                                        <input type="datetime-local" name="car_delivery_date" class="form-control"
                                        format="('Y-m-d\TH:i')" value="{{old('car_delivery_date')}}" 
                                        >
                                    </div>
                                </div>
                                    <div class="row m-t-10">
                                                <div class="m-checkbox-inline">
                                                    <label for="edo-ani">
                                                        <input class="radio_animated" type="radio" name="price"
                                                            checked="" data-bs-original-title="" title=""
                                                            value="1">@lang('site.fixed_price')
                                                    </label>
                                                    <label for="edo-ani1">
                                                        <input class="radio_animated" type="radio" name="price"
                                                            data-bs-original-title="" title=""
                                                            value="2">@lang('site.changed_price')
                                                    </label>
                                                </div>
                                            </div>

                                        <!-- <br> -->
                                        <div class="col-md-6 form-group col-12 p-2  desc" id="price1">
                                                    <label>@lang('site.fixed_price')<span
                                                            class="text-danger">*</span></label>
                                                    <input type="number"  step=".1" name="fixed_price" class="form-control"
                                                        value="{{old('fixed_price')}}">
                                                </div>

                                                <div class="col-md-12 form-group col-12   desc" id="price2"
                                                    style="display: none;">
                                                    <table class="price-list" id="tb_price">
                                                        <tr>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4 form-group col-12">
                                                                        <label>@lang('site.daynumber')</label>
                                                                        <input type="number" name="day_num[]"
                                                                            class="form-control" />
                                                                    </div>
                                                                    <div class="col-md-4 form-group col-12">
                                                                        <label>@lang('site.fixed_price')</label>
                                                                        <input type="number"  step=".1" name="price[]"
                                                                            class="form-control">       
                                                                    </div>
                                                                    <div class="col-md-4 form-group col-12">
                                                                        <a
                                                                            class="btn btn-air-primary btn-pill btn-success add-price w-100 m-t-30"><i
                                                                                class="fa fa-plus"
                                                                                aria-hidden="true"></i></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>


                                                </div>
                                <div class="row">
                                    <!--<div class="col-md-6">-->

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.ar.description')<span class="text-danger">*</span></label>
                                        <textarea class="form-control" cols="5" rows="5" name="description_ar">

                                        </textarea>
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.en.description')<span class="text-danger">*</span></label>
                                        <textarea class="form-control" cols="5" rows="5" name="description_en">

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
                                        <select class="js-example-placeholder-multiple col-sm-12" name="user_id">
                                            <option selected>@lang('site.select')</option>
                                            @foreach($users as $user)

                                                <option
                                                    value="{{$user->id}}">{{$user->firstname . $user->lastname ?? ''}}</option>

                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group"><span class="text-danger">*</span>
                                        <label class="form-label">@lang('site.categories')</label>
                                        <select class="js-example-placeholder-multiple col-sm-12" name="category_id" id="category_id">
                                            <option selected value="0">@lang('site.select')</option>
                                            @foreach($categories as $cat)

                                                <option value="{{$cat->id}}">{{$cat->name_ar ?? ''}}</option>

                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group"><span class="text-danger">*</span>
                                        <label class="form-label">@lang('site.subcategories')</label>
                                        <select class="js-example-placeholder-multiple col-sm-12" name="sub_category_id" id="sub_category_id">
                                            <option selected value="0">@lang('site.select')</option>
                                            {{--                                        @foreach($subcategories as $cat)--}}

                                            {{--                                            <option value="{{$cat->id}}">{{$cat->name_ar ?? ''}}</option>--}}

                                            {{--                                        @endforeach--}}

                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group">
                                                    <label class="form-label">@lang('site.ads_status')</label>
                                                    <select class="js-example-placeholder-multiple col-sm-12" name="ads_status_id" id="ads_status_id">
                                                        <option selected value="0">@lang('site.select')</option>
                                                        @foreach($adsStatus as $ads_status)

                                                            <option value="{{$ads_status->id}}">{{$ads_status->status_ar ?? ''}}</option>

                                                        @endforeach

                                                    </select>
                                    </div>
                                    <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="form-label">@lang('site.country')</label>
                                                    <select class="js-example-placeholder-multiple col-sm-12" name="country_id" id="country_id">
                                                        <option selected value="0">@lang('site.select')</option>
                                                        @foreach($countries as $country)

                                                            <option value="{{$country->id}}">{{$country->name_ar ?? ''}}</option>

                                                        @endforeach

                                                    </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="form-label">@lang('site.city')</label>
                                                    <select class="js-example-placeholder-multiple col-sm-12" name="city_id" id="city_id">
                                                        <option selected value="0">@lang('site.select')</option>
                                                        <!-- @foreach($cities as $city)

                                                            <option value="{{$city->id}}">{{$city->name_ar ?? ''}}</option>

                                                        @endforeach -->

                                                    </select>
                                                </div>
                                            </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-12 p-2">
                                        <label>@lang('site.image')</label>

                                        <input type="file" class="form-control" name="main_image_ads"
                                            id="imgInp" required />
                                        <img id="frame" src="" width="200px" class="img-upload" />

                                    </div>
                                    <div class="form-group col-12 p-2 mb-3">

                                        <label>@lang('site.images')</label>

                                        <input type="file" class="form-control" name="images[]"
                                            value="{{ old('images[]') }}" multiple id="upload-imgs" />
 
                                    <div class="img-thumbs img-thumbs-hidden" id="img-previews">

                                </div> 
                            <br>
                                <div class="row">
                                        <div class="form-group col-12 p-2">
                                            <label>@lang('site.video')</label>

                                            <input type='file' id='videoUpload' class="form-control"
                                                name="videos" value="{{ old('videos') }}" />
                                            <video width="250" height="200" style="display:none" controls
                                                class="video-upload" autoplay>
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                    </div>
                                
                            <br> 
                                <!-- <div class="row">


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


                                </div> -->
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
                    ' <label>@lang('site.daynumber')</label><input type="number"  name="day_num[]" class="form-control"/></div><div class="col-md-5 form-group col-12 p-2">' +
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


        $('#city_id').on('change',function(e){
            var city_id = e.target.value;
            $("#cityarea").show(); 
            $.get("{{url('dashboard/cityareas')}}/"+city_id, function(data){
                console.log(data);
                $('#area_id').empty();
                $.each(data, function(key, value){
                    $('#area_id').append('<li class="form-check radio radio-primary" ><input class="form-check-input" id="area_'+value.id+'" type="radio" name="area_id" value="'+value.id+'" required><label class="form-check-label mb-0" for="area_'+value.id+'">'+value.name_ar+'</label></li>')

                });
            })
        })
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

