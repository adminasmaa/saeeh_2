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
                    @lang('site.cars') 
                    </li>
                    </ol>
                </nav>
            </div>
        </section>

        <section class="booking_investor mb-6">
            <div class="container">
                <div class="ads_investor_card">
                    <form action="{{ empty($car)? route('invst.cars.store') : route('invst.cars.update', $car->id) }}" method="post" enctype="multipart/form-data"
                                id="" class="form-main">

                                {{ csrf_field() }}
                                @if(!empty($car))
                                    @method('put')
                                @endif
                        <div class="row">
                            <div class="col-12">
                            @if(empty($car))
                                <h2 class="add_frm_title mb-3">@lang('site.add')</h2>
                            @else
                                <h2 class="add_frm_title mb-3">@lang('site.edit') @lang('site.Ads No') ({{$car->id ?? ''}})</h2>
                            @endif
                            </div>
                            @include('partials._errors')
                            <div class="col-12">
                                <div class="add-ads-card mb-md-5 mb-4">
                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <div class="position-relative">
                                            <label class="pb-2 ads-card-lbl">@lang('site.country')
                                               <span class="text-danger">( @lang('site.mandatory') )</span>
                                            </label>
                                                <select class="select2"
                                                        name="country_id" id="country_id">
                                                    <option selected value="0">@lang('site.select')</option>
                                                    @foreach($countries as $country)

                                                        <option
                                                            value="{{$country->id}}" @if((old('country_id')==$country->id)||(!empty($car) && ($car->country_id==$country->id)))selected @endif>{{$country->name_ar ?? ''}}</option>

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
                                        <div class="col-lg-6 mb-3">
                                            <div class="position-relative">
                                            <label class="pb-2 ads-card-lbl">@lang('site.categories')</label>
                                                <select class="select2"
                                                        name="category_id" id="category_id">
                                                    <option selected value="0">@lang('site.select')</option>
                                                    @foreach($categories as $cat)

                                                        <option
                                                            value="{{$cat->id}}" @if((old('category_id')==$cat->id)||(!empty($car) && ($car->category_id==$cat->id)))selected @endif>{{$cat->name_ar ?? ''}}</option>

                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="position-relative" >
                                            <label class="pb-2 ads-card-lbl">@lang('site.subcategories')</label>
                                                <select class="select2"
                                                    name="sub_category_id" id="sub_category_id">
                                                    <option selected value="0">@lang('site.select')</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="position-relative">
                                            <label for="" class="pb-2 ads-card-lbl">
                                            @lang('site.name_ar')
                                                <span class="text-danger">( @lang('site.mandatory') )</span>
                                            </label>
                                            <input
                                                placeholder=" @lang('site.Enter the full name') "
                                                type="text"
                                                value="{{ old('name_ar', (empty($car))? null : $car['name_ar']) }}"
                                                name="name_ar" 
                                                required
                                            />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="position-relative">
                                            <label for="" class="pb-2 ads-card-lbl">
                                            @lang('site.name_en')
                                                <span class="text-danger">( @lang('site.optional') )</span>
                                            </label>
                                            <input
                                                placeholder=" @lang('site.Enter the full name') "
                                                type="text"
                                                value="{{ old('name_en', (empty($car))? null : $car['name_en']) }}"
                                                name="name_en"
                                            />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="position-relative">
                                            <label for="" class="pb-2 ads-card-lbl">
                                            @lang('site.year')
                                                <span class="text-danger">( @lang('site.mandatory') )</span>
                                            </label>
                                            <select class="select2" name="year" id="year">
                                                @for ($year = (int)date('Y')+1; 1900 <= $year; $year--): 
                                                    <option value="{{$year}}">{{$year}}</option>
                                                @endfor
                                        </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="position-relative">
                                            <label for="" class="pb-2 ads-card-lbl">
                                            @lang('site.color')
                                                <span class="text-danger">( @lang('site.mandatory') )</span>
                                            </label>
                                            <input
                                                placeholder=" @lang('site.Enter the full name') "
                                                type="color"
                                                value="{{ old('color', (empty($car))? null : $car['color']) }}"
                                                name="color"
                                            />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-lg-0 mb-3">
                                            <label for="" class="pb-2 ads-card-lbl">
                                            @lang('site.car_numbers')
                                            <span class="text-danger">( @lang('site.mandatory') )</span>
                                            </label>
                                            <div class="position-relative">
                                            <input
                                                type="number"
                                                name="car_numbers"
                                                value="{{ old('car_numbers', (empty($car))? null : $car['car_numbers']) }}"
                                                class="form-control "
                                                autocomplete="off"
                                            />
                                            
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="" class="pb-2 ads-card-lbl">
                                            @lang('site.car_delivery_date') 
                                            </label>
                                            <div class="position-relative">
                                            <input
                                                type="time"
                                                name="car_delivery_date"
                                                value="{{ old('car_delivery_date', (empty($car))? null : $car['car_delivery_date']) }}"
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
                                            <h2 class="text-gray-2 mb-3 gray-xx-title">@lang('site.choose_price')</h2>
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
                                                    @if(!empty($car)&&$car->fixed_price!=null ) checked  @endif
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
                                                    @if(!empty($car)&&is_null($car->fixed_price) ) checked  @endif
                                                    />
                                                    <label
                                                    for="change-price"
                                                    class="online-lbl custom-radio"
                                                    
                                                    >
                                                    @lang('site.changed_price') 
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-lg-6 mb-lg-0 mb-3 desc" id="price1">
                                                <div class="position-relative" >
                                                    <label for="" class="pb-2 ads-card-lbl">
                                                    @lang('site.fixed_price')
                                                        <span class="text-danger">( @lang('site.mandatory') )</span>
                                                    </label>
                                                    <input
                                                        placeholder="@lang('site.put_price')" 
                                                        type="number" step=".1" name="fixed_price"
                                                        class="form-control"
                                                        value="{{ old('fixed_price', (empty($car))? null : $car['fixed_price']) }}"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-group col-12   desc" id="price2" style="display: none;">
                                                <table class="price-list" id="tb_price">
                                                    @if(empty($car))
                                                    <tr>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-5 form-group col-12">
                                                                    <label class="pb-2 ads-card-lbl">@lang('site.daynumber')</label>
                                                                    <input type="number" name="day_num[]"
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
                                                                        class="btn btn-air-primary btn-pill btn-success add-price w-100 " style="line-height: 1.9"><i
                                                                            class="fa fa-plus"
                                                                            aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @else
                                                    @for ($x = 0; $x <= count($car->changed_price->price)-1; $x++)
                                                    <tr>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-5 form-group col-12">
                                                                    <label class="pb-2 ads-card-lbl">@lang('site.daynumber')</label>
                                                                    <input type="number" name="day_num[]"
                                                                        class="form-control"
                                                                        value="{{$car->changed_price->day_num[$x]}}" />
                                                                </div>
                                                                <div class="col-md-5 form-group col-12">
                                                                    <label class="pb-2 ads-card-lbl">@lang('site.fixed_price')</label>
                                                                    <input type="number"  step=".1" name="price[]"
                                                                        class="form-control"
                                                                        value="{{$car->changed_price->price[$x]}}" />
                                                                </div>
                                                                @if($x==0)
                                                                <div class="col-md-2 form-group col-12 d-flex align-items-end">
                                                                    <a
                                                                        class="btn btn-air-primary btn-pill btn-success add-price w-100" style="line-height: 1.9"><i
                                                                            class="fa fa-plus"
                                                                            aria-hidden="true"></i></a>
                                                                </div>
                                                                @endif
                                                                @if($x!=0)
                                                                <div class="col-md-2 form-group col-12 d-flex align-items-end">
                                                                    <a class="btn btn-air-primary btn-pill btn-danger add-price w-100 "  style="line-height: 1.9"
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
                                                <span class="text-danger">( @lang('site.mandatory') )</span>
                                            </label>
                                            </div>
                                            <div class="text-danger mt-1">
                                            ( @lang('site.pictures_containing_logo_or_phone_number_will_not_be_accepted') )
                                            </div>
                                            <label class="upload__btn">
                                            <div>
                                                <i class="fal fa-cloud-download"></i>
                                                <div>drag and drop or browse for upload image</div>
                                            </div>
                                            <input
                                                type="file"
                                                name="main_image_ads"
                                                data-max_length="20"
                                                class="form-control upload__inputfile"
                                                id="imgInp"
                                                required
                                            />
                                            </label>

                                            <img
                                            id="frame"
                                            @if(!empty($car))
                                            src="{{asset('images/cars/'.$car->main_image_ads)}}" onerror="this.src='{{asset('images/cars/default.jpg')}}'"  @else src=""  @endif alt=""
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
                                                @lang('site.image at least two') 
                                                <span class="text-danger">( @lang('site.mandatory') )</span>
                                            </label>
                                            </div>
                                            <div class="text-danger mt-1">
                                            ( @lang('site.pictures_containing_logo_or_phone_number_will_not_be_accepted') )
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
                                            class="img-thumbs @if((empty($car)))img-thumbs-hidden @endif"
                                            id="img-previews"
                                            >

                                            @if( (!empty($car)))
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
                                </div>
                                <div class="add-ads-card mb-md-5 mb-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="text-gray-2 mb-3 gray-xx-title">
                                            ( @lang('site.choose_the_appropriate_video') )
                                            </h2>
                                        </div>

                                        <div class="col-12 mb-lg-0 mb-3">
                                            <div class="position-relative">
                                            <label for="" class="pb-2 ads-card-lbl">
                                            @lang('site.video')
                                                <span class="text-danger">( @lang('site.optional') )</span>
                                            </label>
                                            </div>
                                            <div class="text-danger mt-1"> 
                                            (@lang('site.videos_containing_logo_or_phone_number_will_not_be_accepted'))
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
                                            @if(!empty($car))
                                            src="{{asset('images/cars/videos/'.$car->videos)}}" @else src="" @endif
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
                                            <span class="text-danger">( @lang('site.mandatory') )</span>
                                            </label>
                                            <div class="text-danger mt-1">
                                                ( @lang('site.phone_number_is_not_accepted') )
                                            </div>
                                            <div class="form-group"> 
                                            <textarea
                                                class="form-control txtarea-ads p-3 mt-2"
                                                placeholder=" @lang('site.please_write_specifications') "
                                                rows="6" name="description_ar" required
                                            >{{ old('description_ar', (empty($car))? null : $car['description_ar']) }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-ads-card mb-md-5 mb-4">
                                    <div class="row">
                                        <div class="col-12 mb-lg-0 mb-3">
                                            <label for="" class="pb-2 ads-card-lbl">
                                            @lang('site.policy_place')
                                            <span class="text-danger">( @lang('site.mandatory') )</span>
                                            </label>
                                            <div class="text-danger mt-1">
                                            ( @lang('site.phone_number_is_not_accepted') ) 
                                            </div>
                                            <div class="form-group">
                                            <textarea
                                                class="form-control txtarea-ads p-3 mt-2"
                                                placeholder=" @lang('site.please_write_specifications') "
                                                rows="6" name="policy_place"
                                                id="editor1"
                                            >{{ old('policy_place', (empty($car))? null : $car['policy_place']) }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-center mt-lg-5 mt-0">
                                    <div class="booking-now-btn py-4 d-flex justify-content-center align-items-center">
                                        
                                        <button type="submit" class="btn"><i
                                                class="fa fa-plus p-1"></i>
                                           @if(empty($car)) @lang('site.add') @else @lang('site.edit') @endif</button>
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
            var test = $('input[name="price"]:checked').val();
            $("div.desc").hide();
            $("#price" + test).show();
            jQuery('a.add-price').click(function (event) {
                event.preventDefault();
                var newRow = jQuery('<tr><td><div class="row"><div class="col-md-5 form-group col-12">' +
                    ' <label class="pb-2 ads-card-lbl">@lang('site.daynumber')</label ><input type="number"  name="day_num[]" class="form-control"/></div><div class="col-md-5 form-group col-12">' +
                    '<label class="pb-2 ads-card-lbl">@lang('site.fixed_price')</label><input type="number" name="price[]" class="form-control" >' +
                    '  </div>  <div class="col-md-2 form-group col-12 d-flex align-items-end"> <br><a class="btn btn-air-primary btn-pill btn-danger add-price w-100 " style="line-height: 1.9" onclick="deletetr(this)" ><i class="fa fa-trash"></i></a>' +
                    '</div></div> </td>  </tr>');
                jQuery('.price-list').append(newRow);
            });

            $("input[name='price']").click(function () {
                var test = $(this).val();

                $("div.desc").hide();
                $("#price" + test).show();
            });
            @if(!empty($car))
            var country_id =  $('#country_id').val();
            $.get("{{url('invst/countrycities')}}/"+country_id, function(data){
                $('#city_id').empty();
                $('#city_id').append('<option>@lang('site.select')</option>');
                $.each(data, function(key, value){
                    $('#city_id').append('<option value="'+value.id+'">'+value.name_ar+'</option>')

                });
                $('#city_id').val({{$car->city_id ?? 0}});
            });


            var categoryId =  $('#category_id').val();
            $.get("{{url('invst/SubCategories')}}/"+categoryId, function(data){
                console.log(data);
                $('#sub_category_id').empty();
                $('#sub_category_id').append('<option>  Select Please  </option>');
                $.each(data, function(key, value){
                    $('#sub_category_id').append('<option value="'+value.id+'">'+value.name_ar+'</option>')

                });
                $('#sub_category_id').val({{$car->sub_category_id ?? 0}});
            })
           
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
        });
        $('#category_id').on('change',function(e){
            var categoryId = e.target.value;



            $.get("{{url('invst/SubCategories')}}/"+categoryId, function(data){
                console.log(data);
                $('#sub_category_id').empty();
                $('#sub_category_id').append('<option>  Select Please  </option>');
                $.each(data, function(key, value){
                    $('#sub_category_id').append('<option value="'+value.id+'">'+value.name_ar+'</option>')

                });
            })
        });
    </script>
    

@endsection
