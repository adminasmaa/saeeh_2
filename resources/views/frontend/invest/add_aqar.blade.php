@extends('layouts.main_investor')
@section('content')
 
        <section class="py-md-4 py-2">
            <div class="container">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0)">@lang('site.dashboard') </a>
                    </li>
                    <li class="breadcrumb-item text-gray-4" aria-current="page">
                    @lang('site.aqars') 
                    </li>
                    </ol>
                </nav>
            </div>
        </section>

        <section class="ads-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    <div class="ads-add-container">
                        <div class="d-lg-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <div>
                            <img
                                src="{{FRONTASSETS}}/images/booking-investor/notify-ic.svg"
                                alt="notify icon"
                                class="notify-ic"
                            />
                            </div>
                            <h2>
                            @lang('site.If you have a problem adding your ad, please call us')
                        </h2>
                        </div>
                        <div
                            class="add-ads-link d-flex align-items-center justify-content-center mt-lg-0 mt-3"
                        >
                            <a href="#">
                            <span class="call-icon">
                                <i class="far fa-phone"></i>
                            </span>
                            0707078888
                            </a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="booking_investor mb-6">
            <div class="container">
                <div class="ads_investor_card">
                    <form action="{{ empty($aqar)? route('invst.aqars.store') : route('invst.aqars.update', $aqar->id) }}" method="post" enctype="multipart/form-data"
                                id="" class="form-main">

                                {{ csrf_field() }}
                                @if(!empty($aqar))
                                    @method('put')
                                @endif
                        <div class="row">
                            <div class="col-12">
                            @if(empty($aqar))
                                <h2 class="add_frm_title mb-3">@lang('site.add')</h2>
                            @else
                                <h2 class="add_frm_title mb-3">@lang('site.edit')  إعلان رقم ({{$aqar->id ?? ''}})</h2>
                            @endif
                            </div>
                            @include('partials._errors')
                            <div class="col-12">
                                <div class="add-ads-card mb-md-5 mb-4">
                                    <div class="row">
                                        <!-- <div class="col-lg-12 mb-3">
                                            <div class="position-relative">
                                                <label class="pb-2 ads-card-lbl">@lang('site.users')
                                                <span class="text-danger">( اجبارى )</span>
                                                </label>
                                                <select class="select2"
                                                        name="user_id" required>
                                                    <option selected>@lang('site.select')</option>
                                                    @foreach($users as $user)

                                                        <option value="{{$user->id}}"  @if((old('user_id')==$user->id)||(!empty($aqar) && ($aqar->user_id==$user->id)))selected @endif >
                                                            {{$user->firstname . $user->lastname ?? ''}}</option>

                                                    @endforeach

                                                </select>
                                            </div>
                                        </div> -->
                                        <div class="col-lg-6 mb-3">
                                            <div class="position-relative">
                                            <label class="pb-2 ads-card-lbl">@lang('site.country')
                                               <span class="text-danger">( اجبارى )</span>
                                            </label>
                                                <select class="select2"
                                                        name="country_id" id="country_id">
                                                    <option selected value="0">@lang('site.select')</option>
                                                    @foreach($countries as $country)

                                                        <option
                                                            value="{{$country->id}}" @if((old('country_id')==$country->id)||(!empty($aqar) && ($aqar->country_id==$country->id)))selected @endif>{{$country->name_ar ?? ''}}</option>

                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="position-relative">
                                            <label class="pb-2 ads-card-lbl">@lang('site.city')</label>
                                                <select class="select2"
                                                        name="city_id" id="city_id">
                                                    <option selected value="0">@lang('site.select')</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <div class="position-relative">
                                            <label class="pb-2 ads-card-lbl">@lang('site.categories')</label>
                                                <div class="row ads-radio-list radios_noborder">
                                                    
                                                    @foreach($categories as $cat)
                                                        <div class="col-md-auto col-6">
                                                        <div class="d-flex align-items-center">
                                                        <input
                                                            type="radio"
                                                            name="category_id"
                                                            id="category_id{{$cat->id}}"
                                                            value="{{ old('category_id', (empty($aqar))? $cat->id : $aqar['category_id']) }}"
                                                            @if(!empty($aqar)&&$aqar->category_id!=null && ($aqar->category_id==$cat->id)) checked  @endif
                                                        />
                                                        <label
                                                            for="category_id{{$cat->id}}"
                                                            class="online-lbl custom-radio"
                                                        >
                                                        {{$cat->name_ar ?? ''}}
                                                        </label>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <div class="position-relative" id="cityarea">
                                            <label class="pb-2 ads-card-lbl">@lang('site.areas')</label>
                                                <div class="row ads-radio-list radios_noborder" id="area_id">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="position-relative">
                                            <label for="" class="pb-2 ads-card-lbl">
                                            @lang('site.name_ar')
                                                <span class="text-danger">( اجبارى )</span>
                                            </label>
                                            <input
                                                placeholder="ادخل الاسم "
                                                type="text"
                                                value="{{ old('name_ar', (empty($aqar))? null : $aqar['name_ar']) }}"
                                                name="name_ar" 
                                                required
                                            />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="position-relative">
                                            <label for="" class="pb-2 ads-card-lbl">
                                            @lang('site.name_en')
                                                <span class="text-danger">(غير اجبارى )</span>
                                            </label>
                                            <input
                                                placeholder="ادخل الاسم"
                                                type="text"
                                                value="{{ old('name_en', (empty($aqar))? null : $aqar['name_en']) }}"
                                                name="name_en"
                                            />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-lg-0 mb-3">
                                            <label for="" class="pb-2 ads-card-lbl">
                                            @lang('site.time_from')
                                            <span class="text-danger">( اجبارى )</span>
                                            </label>
                                            <div class="position-relative">
                                            <input
                                                placeholder="9:30pm"
                                                type="time"
                                                name="time_from"
                                                value="{{ old('time_from', (empty($aqar))? null : $aqar['time_from']) }}"
                                                class="form-control "
                                                autocomplete="off"
                                            />
                                            
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="" class="pb-2 ads-card-lbl">
                                            @lang('site.time_to') 
                                            </label>
                                            <div class="position-relative">
                                            <input
                                                placeholder="9:30pm"
                                                type="time"
                                                name="time_to"
                                                value="{{ old('time_to', (empty($aqar))? null : $aqar['time_to']) }}"
                                                class="form-control"
                                                autocomplete="off"
                                            />
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-ads-card mb-md-5 mb-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="text-gray-2 mb-3 gray-xx-title">حددالسعر</h2>
                                        </div>
                                        <div class="col-12">
                                            <div class="row ads-radio-list">
                                                <div class="col-lg-3 mb-3">
                                                    <input
                                                    type="radio"
                                                    name="price"
                                                    id="const-price"
                                                    checked
                                                    class="onlineInp"
                                                    value="1"
                                                    @if(!empty($aqar)&&$aqar->fixed_price!=null ) checked  @endif
                                                    />
                                                    <label
                                                    for="const-price"
                                                    class="online-lbl custom-radio"
                                                    >
                                                    @lang('site.fixed_price')
                                                    </label>
                                                </div>

                                                <div class="col-lg-3 mb-3">
                                                    <input
                                                    type="radio"
                                                    name="price"
                                                    id="change-price"
                                                    class="onlineInp"
                                                    value="2"
                                                    @if(!empty($aqar)&&is_null($aqar->fixed_price) ) checked  @endif
                                                    />
                                                    <label
                                                    for="change-price"
                                                    class="online-lbl custom-radio"
                                                    
                                                    >
                                                    @lang('site.changed_price') 
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                            <div class="col-lg-6 mb-lg-0 mb-3 desc" id="price1">
                                                <div class="position-relative" >
                                                    <label for="" class="pb-2 ads-card-lbl">
                                                    @lang('site.fixed_price')
                                                        <span class="text-danger">( اجبارى )</span>
                                                    </label>
                                                    <input
                                                        placeholder="ادخل السعر"
                                                        type="number" step=".1" name="fixed_price"
                                                        class="form-control"
                                                        value="{{ old('fixed_price', (empty($aqar))? null : $aqar['fixed_price']) }}"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-group col-12   desc" id="price2" style="display: none;">
                                                <table class="price-list" id="tb_price">
                                                    @if(empty($aqar))
                                                    <tr>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-5 form-group col-12">
                                                                    <label class="pb-2 ads-card-lbl">@lang('site.personnumber')</label>
                                                                    <input type="number" name="person_num[]"
                                                                            class="form-control"/>
                                                                </div>
                                                                <div class="col-md-5 form-group col-12">
                                                                    <label class="pb-2 ads-card-lbl">@lang('site.fixed_price')</label>
                                                                    <input type="number" step=".1"
                                                                            name="price[]"
                                                                            class="form-control">
                                                                </div>
                                                                <div class="col-md-2 form-group col-12 d-flex align-items-end"><br>
                                                                    <a
                                                                        class="btn btn-air-primary btn-pill btn-success add-price  w-100" style="line-height: 1.9"><i
                                                                            class="fa fa-plus"
                                                                            aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @else
                                                    @for ($x = 0; $x <= count($aqar->changed_price->price)-1; $x++)
                                                    <tr>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-5 form-group col-12">
                                                                    <label class="pb-2 ads-card-lbl">@lang('site.personnumber')</label>
                                                                    <input type="number" name="person_num[]"
                                                                        class="form-control"
                                                                        value="{{$aqar->changed_price->person_num[$x]}}" />
                                                                </div>
                                                                <div class="col-md-5 form-group col-12">
                                                                    <label class="pb-2 ads-card-lbl">@lang('site.fixed_price')</label>
                                                                    <input type="number"  step=".1" name="price[]"
                                                                        class="form-control"
                                                                        value="{{$aqar->changed_price->price[$x]}}" />
                                                                </div>
                                                                @if($x==0)
                                                                <div class="col-md-2 form-group col-12 d-flex align-items-end">
                                                                    <a
                                                                        class="btn btn-air-primary btn-pill btn-success add-price  w-100" style="line-height: 1.9"><i
                                                                            class="fa fa-plus"
                                                                            aria-hidden="true"></i></a>
                                                                </div>
                                                                @endif
                                                                @if($x!=0)
                                                                <div class="col-md-2 form-group col-12 d-flex align-items-end">
                                                                    <a class="btn btn-air-primary btn-pill btn-danger add-price  w-100" style="line-height: 1.9"
                                                                        onclick="deletetr(this)"><i
                                                                            class="fa fa-trash"></i></a>
                                                                </div>
                                                                @endif
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endfor
                                                    @endif
                                                </table>


                                            </div>
                                            </div>
                                           
                                            <div class="row">
                                                <div class="col-lg-6 mb-3">
                                                    <div class="position-relative">
                                                        <label for="" class="pb-2 ads-card-lbl">
                                                        @lang('site.latitude')
                                                            <span class="text-danger">( اجبارى )</span>
                                                        </label>
                                                        <input
                                                            placeholder="ادخل الاسم "
                                                            type="text"
                                                            value="{{ old('latitude', (empty($aqar))? null : $aqar['latitude']) }}"
                                                            name="latitude" 
                                                            required
                                                        />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="position-relative">
                                                        <label for="" class="pb-2 ads-card-lbl">
                                                        @lang('site.longitude')
                                                            <span class="text-danger">( اجبارى )</span>
                                                        </label>
                                                        <input
                                                            placeholder="ادخل الاسم "
                                                            type="text"
                                                            value="{{ old('longitude', (empty($aqar))? null : $aqar['longitude']) }}"
                                                            name="longitude" 
                                                            required
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-ads-card mb-md-5 mb-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="text-gray-2 mb-3 gray-xx-title">
                                            اختر الصورة الرئيسية للاعلان
                                            </h2>
                                        </div>

                                        <div class="col-12 ">
                                            <div class="position-relative">
                                            <label for="" class="pb-2 ads-card-lbl">
                                            @lang('site.display_photo')
                                                <span class="text-danger">( اجبارى )</span>
                                            </label>
                                            </div>
                                            <div class="text-danger mt-1">
                                            ( لايتم قبول صور بها شعار أو رقم تليفون )
                                            </div>
                                            <label class="upload__btn">
                                            <div>
                                                <i class="fal fa-cloud-download"></i>
                                                <div>drag and drop or browse for upload image</div>
                                            </div>
                                            <input
                                                type="file"
                                                name="main_image"
                                                data-max_length="20"
                                                class="form-control upload__inputfile"
                                                id="imgInp"
                                                required
                                            />
                                            </label>

                                            <img
                                            id="frame"
                                            @if(!empty($aqar))
                                            src="{{asset('images/aqars/'.$aqar->main_image)}}" onerror="this.src='{{asset('images/aqars/default.jpg')}}'"  @else src=""  @endif alt=""
                                            width="150px"
                                            class="img-upload"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="add-ads-card mb-md-5 mb-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="text-gray-2 mb-3 gray-xx-title">
                                            @lang('site.images')   
                                            </h2>
                                        </div>

                                        <div class="col-12 mb-lg-0 mb-3">
                                            <div class="position-relative">
                                            <label for="" class="pb-2 ads-card-lbl">
                                                الصورة(على الاقل صورتين)
                                                <span class="text-danger">( اجبارى )</span>
                                            </label>
                                            </div>
                                            <div class="text-danger mt-1">
                                            ( لايتم قبول صور بها شعار أو رقم تليفون )
                                            </div>
                                            <label class="upload__btn">
                                            <div>
                                                <i class="fal fa-cloud-download"></i>
                                                <div>drag and drop or browse for upload image</div>
                                            </div>
                                            <input
                                                type="file"
                                                name="images[]"
                                                class="form-control upload__inputfile"
                                                multiple
                                                id="upload-imgs"
                                                required
                                            />
                                            </label>

                                            <div
                                            class="img-thumbs @if((empty($aqar)))img-thumbs-hidden @endif"
                                            id="img-previews"
                                            >

                                            @if( (!empty($aqar)))
                                            @foreach ((explode(',',$aqar->images)) as $img)
                                            <div class="wrapper-thumb">
                                                <img id="frame" src="{{asset('images/aqars/'.$img)}}"
                                                    alt=""
                                                    onerror="this.src='{{asset('images/aqars/default.jpg')}}'"
                                                    width="200px" class="img-preview-thumb" /><span
                                                    class="remove-btn">x</span>
                                            </div>
                                            @endforeach
                                            
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-ads-card mb-md-5 mb-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="text-gray-2 mb-3 gray-xx-title">
                                            اخترالفيديو المناسب
                                            </h2>
                                        </div>

                                        <div class="col-12 mb-lg-0 mb-3">
                                            <div class="position-relative">
                                            <label for="" class="pb-2 ads-card-lbl">
                                            @lang('site.video')
                                                <span class="text-danger">( اختيارى)</span>
                                            </label>
                                            </div>
                                            <div class="text-danger mt-1">
                                            ( لايتم قبول فيديو بها شعار أو رقم تليفون )
                                            </div>
                                            <label class="upload__btn">
                                            <div>
                                                <i class="fal fa-cloud-download"></i>
                                                <div>drag and drop or browse for upload vedio</div>
                                            </div>
                                            
                                            <input
                                                type="file"
                                                id="videoUpload"
                                                class="form-control upload__inputfile"
                                                name="videos"
                                                value=""
                                            />
                                            </label>


                                            <video
                                            @if(!empty($aqar))
                                            src="{{asset('images/aqars/videos/'.$aqar->videos)}}" @else src="" @endif
                                            width="250"
                                            height="250"
                                            style="display: none;border-radius: 5px;"
                                            controls
                                            class="video-upload"
                                            autoplay
                                            >
                                            Your browser does not support the video tag.
                                            </video>
                                        </div>
                                    </div>
                                </div>
                                <div  id="result_data1">
                                </div>
                                <div class="add-ads-card mb-md-5 mb-4">
                                    <div class="row">
                                        <div class="col-12 mb-lg-0 mb-3">
                                            <label for="" class="pb-2 ads-card-lbl">
                                            @lang('site.descrption')
                                            <span class="text-danger">( اجبارى )</span>
                                            </label>
                                            <div class="text-danger mt-1">
                                            ( لايتم قبول  رقم تليفون ) 
                                            </div>
                                            <div class="form-group">
                                            <textarea
                                                class="form-control txtarea-ads p-3 mt-2"
                                                placeholder="يرجي كتابة المواصفات  "
                                                rows="6" name="description" required
                                            >{{ old('description', (empty($aqar))? null : $aqar['description']) }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-ads-card mb-md-5 mb-4">
                                    <div class="row">
                                        <div class="col-12 mb-lg-0 mb-3">
                                            <label for="" class="pb-2 ads-card-lbl">
                                            @lang('site.policy_place')
                                            <span class="text-danger">( اجبارى )</span>
                                            </label>
                                            <div class="text-danger mt-1">
                                            ( لايتم قبول  رقم تليفون ) 
                                            </div>
                                            <div class="form-group">
                                            <textarea
                                                class="form-control txtarea-ads p-3 mt-2"
                                                placeholder="يرجي كتابة المواصفات  "
                                                rows="6" name="policy_place"
                                                id="editor1"
                                            >{{ old('policy_place', (empty($aqar))? null : $aqar['policy_place']) }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-center mt-lg-5 mt-0">
                                    <div class="booking-now-btn py-4 d-flex justify-content-center align-items-center">
                                        
                                        <button type="submit" class="btn"><i
                                                class="fa fa-plus p-1"></i>
                                           @if(empty($aqar)) @lang('site.add') @else @lang('site.edit') @endif</button>
                                    </div>
                                </div>
                        <div>
                    </form>
                </div>
            </div>
        </section>


@endsection


@section('scripts')
    <script>
        $(document).ready(function () {
            $("#cityarea").hide();
            var test = $('input[name="price"]:checked').val();
            $("div.desc").hide();
            $("#price" + test).show();
            @if(!empty($aqar))
            var category_id =$('input[name="category_id"]:checked').val();
            var aqar_id={{$aqar->id ?? 0}};
            $.ajax({
                url: '{{ url('invst/aqars/getsetting1') }}' + '/' +category_id + '/' +aqar_id ,
                success : function(html)
                {
                    $("#result_data1").show();
                    var element = $('#result_data1');
                    element.empty();
                    $('#result_data1').html(html) ;
                }
            });
           @endif
            jQuery('a.add-price').click(function (event) {
                event.preventDefault();
                var newRow = jQuery('<tr><td><div class="row"><div class="col-md-5 form-group col-12">' +
                    ' <label class="pb-2 ads-card-lbl">@lang('site.personnumber')</label><input type="number"  name="person_num[]" class="form-control"/></div><div class="col-md-5 form-group col-12">' +
                    '<label class="pb-2 ads-card-lbl">@lang('site.fixed_price')</label><input type="number" name="price[]" class="form-control" >' +
                    '  </div>  <div class="col-md-2 form-group col-12 d-flex align-items-end "> <br><a class="btn btn-air-primary btn-pill btn-danger add-price  w-100" style="line-height: 1.9" onclick="deletetr(this)" ><i class="fa fa-trash"></i></a>' +
                    '</div></div> </td>  </tr>');
                jQuery('.price-list').append(newRow);
            });

            $("input[name='price']").click(function () {
                var test = $(this).val();

                $("div.desc").hide();
                $("#price" + test).show();
            });
            @if(!empty($aqar))
            var country_id =  $('#country_id').val();
            $.get("{{url('invst/countrycities')}}/"+country_id, function(data){
            $('#city_id').empty();
            $('#city_id').append('<option>@lang('site.select')</option>');
            $.each(data, function(key, value){
                $('#city_id').append('<option value="'+value.id+'">'+value.name_ar+'</option>')

            });



        $('#city_id').val({{$aqar->city_id ?? 0}});

            var city_id =$('#city_id').val();
            var aqarrea={{$aqar->area_id ?? 0}};
                    $("#cityarea").show();
                    $.get("{{url('invst/cityareas')}}/"+city_id, function(data){
                        $('#area_id').empty();
                        $.each(data, function(key, value){
                            $('#area_id').append('<div class="col-md-3 col-6"><div class="d-flex align-items-center"><input  id="area_'+value.id+'" type="radio" name="area_id" value="'+value.id+'" ' + (value.id == aqarrea ? 'checked' : '') +' ><label class="online-lbl custom-radio" for="area_'+value.id+'">'+value.name_ar+'</label></div></div>')

                        });

                    });

        });
        @endif
       
        });

        function deletetr(r) {
            r.closest('tr').remove();
        }

        $('#country_id').on('change', function (e) {
            var country_id = e.target.value;


            $.get("{{url('invst/countrycities')}}/" + country_id, function (data) {
                console.log(data);
                $('#city_id').empty();
                $('#city_id').append('<option>@lang('site.select')</option>');
                $.each(data, function (key, value) {
                    $('#city_id').append('<option value="' + value.id + '">' + value.name_ar + '</option>')

                });
            })
        })


        $('#city_id').on('change', function (e) {
            var city_id = e.target.value;
            $("#cityarea").show();
            $.get("{{url('invst/cityareas')}}/" + city_id, function (data) {
                console.log(data);
                $('#area_id').empty();
                $.each(data, function (key, value) {
                    $('#area_id').append('<div class="col-md-2 col-6"><div class="d-flex align-items-center"><input  id="area_' + value.id + '" type="radio" name="area_id" value="' + value.id + '" required><label class="online-lbl custom-radio" for="area_' + value.id + '">' + value.name_ar + '</label></div></div>')

                });
            })
        })
        $('input[type=radio][name=category_id]').change(function () {
            var category_id = $('input[type="radio"][name="category_id"]:checked').val();

            $.ajax({
                url: '{{ url('invst/aqars/getsetting') }}' + '/' + category_id,
                success: function (html) {
                    $("#result_data1").show();
                    var element = $('#result_data');
                    element.empty();
                    $('#result_data1').html(html);
                }
            })
        });
    </script>
    

@endsection
