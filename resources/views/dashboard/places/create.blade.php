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


        <div class="container-fluid">

            <div class="row">
                <!-- Individual column searching (text inputs) Starts-->
                <div class="col-sm-12">
                    <div class="card mt-30">
                        <form action="{{ route('dashboard.places.store') }}" method="post"
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

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.place_order')<span class="text-danger">*</span></label>
                                        <input type="number" name="place_order" class="form-control"
                                               value="{{old('place_order')}}"
                                               required>
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.place_error')<span class="text-danger">*</span></label>
                                        <input type="number" name="place_error" class="form-control"
                                               value="{{old('place_error')}}"
                                               required>
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.const_from')<span class="text-danger">*</span></label>
                                        <input type="time" name="const_from" class="form-control"
                                               value="{{old('const_from')}}"
                                               required >
                                    </div>



                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.const_to')<span class="text-danger">*</span></label>
                                        <input type="time" name="const_to" class="form-control"
                                               value="{{old('const_to')}}"
                                               required>
                                    </div>


                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.google_mark_link')</label>
                                        <input type="text" name="google_mark_link" class="form-control"
                                               value="{{old('google_mark_link')}}"
                                               >
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.place_link')</label>
                                        <input type="text" name="place_link" class="form-control"
                                               value="{{old('place_link')}}"
                                               >
                                    </div>


                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.share_link')</label>
                                        <input type="text" name="share_link" class="form-control"
                                               value="{{old('share_link')}}"
                                               >
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.menu_link')</label>
                                        <input type="text" name="menu_link" class="form-control"
                                               value="{{old('menu_link')}}"
                                               >
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.facebook')</label>
                                        <input type="text" name="facebook" class="form-control"
                                               value="{{old('facebook')}}"
                                               >
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.instagram')</label>
                                        <input type="text" name="instagram" class="form-control"
                                               value="{{old('instagram')}}"
                                               >
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.twitter')</label>
                                        <input type="text" name="twitter" class="form-control"
                                               value="{{old('twitter')}}"
                                               >
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.phone_one')<span class="text-danger">*</span></label>
                                        <input type="text" name="phone_one" class="form-control"
                                               value="{{old('phone_one')}}"
                                               >
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.phone_two')</label>
                                        <input type="text" name="phone_two" class="form-control"
                                               value="{{old('phone_two')}}"
                                               >
                                    </div>
                                    <!-- <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.seen_counter')<span class="text-danger">*</span></label>
                                        <input type="number" name="seen_counter" class="form-control"
                                               value="{{old('seen_counter')}}"
                                               >
                                    </div> -->
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.delivery')</label>
                                        <input type="number" name="delivery" class="form-control"
                                               value="{{old('delivery')}}"
                                               >
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.order_by')</label>
                                        <input type="number" name="order_by" class="form-control"
                                               value="{{old('order_by')}}"
                                               >
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.work_day')</label>
                                        <input type="text" name="work_day" class="form-control"
                                               value="{{old('work_day')}}"
                                               >
                                    </div>
                                </div>

                                <div class="row">
                                    <!--<div class="col-md-6">-->

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.latitude')</label>
                                        <input type="text" name="latitude" class="form-control"
                                               value="{{old('latitude')}}"
                                               >
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.longitude')</label>
                                        <input type="text" name="longitude" class="form-control"
                                               value="{{old('longitude')}}"
                                               >
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.rest_one')</label>
                                        <input type="text" name="rest_one" class="form-control"
                                               value="{{old('rest_one')}}"
                                               >
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.rest_two')</label>
                                        <input type="text" name="rest_two" class="form-control"
                                               value="{{old('rest_two')}}"
                                               >
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.rest_three')</label>
                                        <input type="text" name="rest_three" class="form-control"
                                               value="{{old('rest_three')}}"
                                               >
                                    </div>
                                    <div class="col-md-6 form-group">
                                    <label class="form-label">@lang('site.social_media')</label><span class="text-danger">*</span>
                                    <select class="form-control btn-square" name="social_media">
                                            <option selected>@lang('site.select')</option>

                                            <option value="facebook">@lang('site.facebook')</option>
                                            <option value="instagram">@lang('site.instagram') </option>

                                    </select>
                                </div>

                                </div>

                                <div class="row">
                                    <!--<div class="col-md-6">-->
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.descrption_ar')<span class="text-danger">*</span></label>
                                        <textarea class="form-control" cols="5" rows="5" name="descrption_ar">

                                        </textarea>
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.descrption_en')</label>
                                        <textarea class="form-control"   cols="5" rows="5" name="descrption_en">

                                        </textarea>
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.address')</label><span class="text-danger">*</span>
                                        <input type="text" name="address" class="form-control"
                                               value="{{old('address')}}"
                                               >
                                    </div>
                                    <div class="col-md-6 form-group"><span class="text-danger">*</span>
                                    <label class="form-label">@lang('site.users')</label>
                                    <select class="form-control btn-square" name="user_id">
                                        <option selected>@lang('site.select')</option>
                                        @foreach($users as $user)

                                            <option value="{{$user->id}}">{{$user->firstname . $user->lastname ?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6 form-group"><span class="text-danger">*</span>
                                    <label class="form-label">@lang('site.categories')</label>
                                    <select class="form-control btn-square" name="category_id"id="category_id">
                                        <option selected>@lang('site.select')</option>
                                        @foreach($categories as $cat)

                                            <option value="{{$cat->id}}">{{$cat->name_ar ?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>

                                <div class="col-md-6 form-group"><span class="text-danger">*</span>
                                        <label class="form-label">@lang('site.subcategories')</label>
                                        <select class="form-control btn-square" name="sub_category_id" id="sub_category_id">
                                            <option selected>@lang('site.select')</option>
                                            {{--                                        @foreach($subcategories as $cat)--}}

                                            {{--                                            <option value="{{$cat->id}}">{{$cat->name_ar ?? ''}}</option>--}}

                                            {{--                                        @endforeach--}}

                                        </select>
                                    </div>



                                    <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="form-label">@lang('site.country')</label>
                                                    <select class="form-control btn-square" name="country_id" id="country_id">
                                                        <option selected value="0">@lang('site.select')</option>
                                                        @foreach($countries as $country)

                                                            <option value="{{$country->id}}">{{$country->name_ar ?? ''}}</option>

                                                        @endforeach

                                                    </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="form-label">@lang('site.city')</label>
                                                    <select class="form-control btn-square" name="city_id" id="city_id">
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
                                        <label>@lang('site.display_photo')</label>

                                        <input type="file" class="form-control" name="main_image"
                                            id="imgInp" required />
                                        <img id="frame" src="" width="200px" class="img-upload" />

                                    </div>
                                    <div class="form-group col-12 p-2">
                                        <label>@lang('site.notify_photo')</label>

                                        <input type="file" class="form-control" name="notify_photo"
                                            id="imgInp2" required />
                                        <img id="frame2" src="" width="200px" class="img-upload2" />

                                    </div>
                                    <div class="form-group col-12 p-2 mb-3">

                                        <label>@lang('site.images')</label>

                                        <input type="file" class="form-control" name="images[]"
                                            value="{{ old('images[]') }}" multiple id="upload-imgs" />

                                        <div class="img-thumbs img-thumbs-hidden" id="img-previews">

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
document.getElementById("imgInp2").onchange = function() {
    let imgURL2 = (frame2.src = URL.createObjectURL(event.target.files[0]));
    document.querySelector("img").src = imgURL2;
};
/*video */
// document.getElementById("videoUpload").onchange = function(event) {
//     let file = event.target.files[0];
//     let blobURL = URL.createObjectURL(file);
//     document.querySelector("video").style.display = "block";
//     document.querySelector("video").src = blobURL;
// };
</script>
@endsection
