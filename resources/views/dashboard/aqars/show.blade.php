@extends('layouts.main_admin')

@section('content')

<!-- <div class="content-page"> -->
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>@lang('site.aqars')</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">@lang('site.dashboard')</li>

                        <li class="breadcrumb-item active">@lang('site.aqars') @endlang</li>
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
                    <form action="" method="post"
                        enctype="multipart/form-data" id="" class="form-main">

                        {{ csrf_field() }}
                        {{ method_field('put') }}
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

                        <div class="card">
                            <center>
                                <div class="card-body">
                                    @include('partials._errors')
                                    <div class="col-md-6 form-group col-12 p-2  ">


                                        <label>@lang('site.display_photo')</label>
                                        <img src="{{asset('images/aqars/'.$aqar->main_image)}}" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalss" width="100px" height="100px"
                                            class="d-block"
                                            onerror="this.src='https://saeeh.com/upload/<?=$aqar->main_image?>'">
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalss" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                        @lang('site.display_photo')</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="border-5">
                                                        <tr>
                                                            <th>
                                                                <img name="display_photo"
                                                                    src="{{asset('images/aqars/'.$aqar->main_image)}}"
                                                                    alt="" width="400px" height="aut0"
                                                                    onerror="this.src='https://saeeh.com/upload/<?=$aqar->main_image?>'">

                                                            </th>
                                                        </tr>


                                                    </table>
                                                </div>
                                                <br>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">@lang('site.Cancel')</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  End Of Modal -->

                                <div class="col-sm-8">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="text-danger">@lang('site.alert')</h5>
                                            <h6 class="text-warning">@lang('site.If you have a problem adding your ad, please call us')</h6>
                                            <h6 class="text-info">0707078888</h6>
                                        </div>
                                        <div class="card-body">

                                            <div class="col-sm-12">
                                                <label class="form-label">@lang('site.users')</label>
                                                <select class="form-control form-select" name="user_id" readonly="" disabled>
                                                    <option selected>@lang('site.select')</option>
                                                    @foreach($users as $user)

                                                    <option value="{{$user->id}}"
                                                        {{$user->id==$aqar->user_id? 'selected':'' }}>
                                                        {{$user->firstname . $user->lastname ?? ''}}</option>

                                                    @endforeach

                                                </select>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="form-label">@lang('site.country')</label>
                                                    <select class="form-control btn-square" name="country_id" id="country_id" readonly="" disabled>
                                                        <option selected>@lang('site.select')</option>
                                                        @foreach($countries as $country)

                                                        <option value="{{$country->id}}" @if($country->
                                                            id==$aqar->country_id) selected
                                                            @endif>{{$country->name_ar ?? ''}}</option>

                                                        @endforeach

                                                    </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="form-label">@lang('site.city')</label>
                                                    <select class="form-control btn-square" name="city_id" id="city_id" readonly="" disabled>
                                                        <option selected>@lang('site.select')</option>
                                                        <!-- @foreach($cities as $city)

                                                        <option value="{{$city->id}}" @if($city->id==$aqar->city_id)
                                                            selected @endif>{{$city->name_ar ?? ''}}</option>

                                                        @endforeach -->

                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-sm-12">
                                                <h5 class="  border-bottom">@lang('site.categories')</h5>
                                            </div>
                                            <div class="col">
                                                <ul class="mt-4 p-0 categories-list">
                                                    @foreach($categories as $cat)
                                                    <li class="form-check radio radio-primary">
                                                        <input class="form-check-input" id="category_id{{$cat->id}}"
                                                            type="radio" name="category_id" value="{{$cat->id}}"
                                                            {{$cat->id==$aqar->category_id? 'checked':'' }} readonly="" disabled>
                                                        <label class="form-check-label mb-0"
                                                            for="category_id{{$cat->id}}">{{$cat->name_ar ?? ''}}</label>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <br>
                                            <div class="col-sm-12" id="cityarea">
                                                <h5 class="  border-bottom">@lang('site.areas')</h5>
                                            </div>
                                            <div class="col">
                                                <ul class="mt-4 areas-list"  id="area_id">
                                                    <!-- @foreach($Area as $item)
                                                    <li class="form-check radio radio-primary" >
                                                        <input class="form-check-input" id="area_{{$item->id}}"
                                                            type="radio" name="area_id" value="{{$item->id}}"
                                                            {{$item->id==$aqar->area_id? 'checked':'' }}>
                                                        <label class="form-check-label mb-0"
                                                            for="area_{{$item->id}}">{{$item->name_ar ?? ''}}</label>
                                                    </li>
                                                    @endforeach -->
                                                </ul>
                                            </div>
                                            <br>
                                            <div class="row m-t-10">
                                                <!--<div class="col-md-6">-->

                                                <div class="col-md-6 form-group col-12 p-2 ">
                                                    <label>@lang('site.name_ar')<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="name_ar" class="form-control"
                                                        value="{{$aqar->name_ar}}" required readonly="" disabled>
                                                </div>

                                                <div class="col-md-6 form-group col-12 p-2 ">
                                                    <label>@lang('site.name_en')</label>
                                                    <input type="text" name="name_en" class="form-control"
                                                        value="{{$aqar->name_en}}" readonly="" disabled>
                                                </div>

                                            </div>
                                            <div class="row m-t-10">
                                                <!--<div class="col-md-6">-->

                                                <div class="col-md-6 form-group col-12 p-2 ">
                                                    <label>@lang('site.time_from')<span
                                                            class="text-danger">*</span></label>
                                                    <input type="time" name="time_from" class="form-control"
                                                        value="{{$aqar->time_from}}" readonly="" disabled>
                                                </div>

                                                <div class="col-md-6 form-group col-12 p-2 ">
                                                    <label>@lang('site.time_to')</label>
                                                    <input type="time" name="time_to" class="form-control"
                                                        value="{{$aqar->time_to}}" readonly="" disabled>
                                                </div>

                                            </div>
                                            <div class="row m-t-10">
                                                <div class="m-checkbox-inline">
                                                        <label for="edo-ani">
                                                        <input class="radio_animated"  type="radio" name="price" {{$aqar->fixed_price ? 'checked':'' }} data-bs-original-title="" title="" value="1" readonly="" disabled>@lang('site.fixed_price')
                                                        </label>
                                                        <label for="edo-ani1">
                                                        <input class="radio_animated" type="radio" name="price" {{is_null($aqar->fixed_price) ? 'checked':'' }} data-bs-original-title="" title="" value="2" readonly="" disabled>@lang('site.changed_price')
                                                        </label>
                                                </div>
                                            </div>
                                            <div class="row m-t-10">
                                                <!--<div class="col-md-6">-->

                                                <div class="col-md-6 form-group col-12 p-2  desc" id="price1">
                                                    <label>@lang('site.fixed_price')<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="fixed_price" class="form-control"
                                                        value="{{$aqar->fixed_price}}" readonly="" disabled>
                                                </div>

                                                <div class="col-md-12 form-group col-12   desc" id="price2"
                                                    style="display: none;">
                                                    <table class="price-list" id="tb_price">
                                                        @for ($x = 0; $x <= count($aqar->changed_price->price)-1; $x++)
                                                            <tr>
                                                                <td>
                                                                    <div class="row">
                                                                        <div class="col-md-5 form-group col-12">
                                                                            <label>@lang('site.personnumber')</label>
                                                                            <input type="number" name="person_num[]"
                                                                                class="form-control"
                                                                                value="{{$aqar->changed_price->person_num[$x]}}" readonly="" disabled/>
                                                                        </div>
                                                                        <div class="col-md-5 form-group col-12">
                                                                            <label>@lang('site.fixed_price')</label>
                                                                            <input type="number" name="price[]"
                                                                                class="form-control"
                                                                                value="{{$aqar->changed_price->price[$x]}}" readonly="" disabled/>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            @endfor
                                                    </table>

                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="form-group col-12 p-2">
                                                        <label>@lang('site.display_photo')</label>

                                                        <input type="file" class="form-control" name="main_image"
                                                            value="{{$aqar->main_image}}" id="imgInp"  readonly="" disabled/>
                                                        <img id="frame"
                                                            src="{{asset('images/aqars/'.$aqar->main_image)}}" alt=""
                                                            onerror="this.src='https://saeeh.com/upload/<?=$aqar->main_image?>'"
                                                            width="200px" class="img-upload" />

                                                    </div>
                                                    <div class="form-group col-12 p-2 mb-2">

                                                        <label>@lang('site.images')</label>

                                                        <input type="file" class="form-control" name="images[]"
                                                            value="{{$aqar->images}}" multiple id="upload-imgs" readonly="" disabled/>

                                                        <div class="img-thumbs " id="img-previews">
                                                            @if($aqar->images)
                                                            @foreach (json_decode($aqar->images) as $img)
                                                            <div class="wrapper-thumb">
                                                                <img id="frame" src="{{asset('images/aqars/'.$img)}}"
                                                                    alt=""
                                                                    onerror="this.src='https://saeeh.com/upload/<?=$img?>'"
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
                                                            name="videos" value="{{$aqar->videos}}?>" readonly="" disabled/>
                                                        <video width="250" height="200"
                                                            src="{{asset('images/aqars/videos/'.$aqar->videos)}}"
                                                            controls class="video-upload" autoplay>
                                                            Your browser does not support the video tag.
                                                        </video>
                                                    </div>
                                                </div>
                                               

                                                <br>
                                                <div id="result_data1" class="p-2  m-t-15">
                                                </div>   

                                                <div class="row">
                                                    <!--<div class="col-md-6">-->

                                                    <div class="col-md-12 form-group col-12 p-2  m-t-15">
                                                        <label>@lang('site.descrption')<span
                                                                class="text-danger">*</span></label>
                                                        <textarea class="form-control" cols="5" rows="5" name="description"
                                                            id="editor1" readonly="" disabled>
                                                            {{$aqar->description}}
                                                            </textarea>
                                                    </div>

                                                </div>


                                    </div>
                                </div>
                        </div>
                        </center>
                </div>

                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Container-fluid Ends-->

@endsection

@section('scripts')
<script>
$(document).ready(function() {
    $("#cityarea").hide();
    var test = $('input[name="price"]:checked').val();
    $("div.desc").hide();
    $("#price" + test).show();

    var category_id =$('input[name="category_id"]:checked').val();
    var aqar_id='<?php echo $aqar->id?>';
    $.ajax({
        url: '{{ url('dashboard/aqars/getsetting1') }}' + '/' +category_id + '/' +aqar_id ,
        success : function(html)
		{   
            $("#result_data1").show();
            var element = $('#result_data1');
            element.empty();
            $('#result_data1').html(html) ;
        }
    });
    jQuery('a.add-price').click(function(event) {
        event.preventDefault();
        var newRow = jQuery('<tr><td><div class="row"><div class="col-md-5 form-group col-12 p-2">' +
            ' <label>@lang('site.personnumber')</label><input type="number"  name="person_num[]" class="form-control"/></div><div class="col-md-5 form-group col-12 p-2">' +
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

var country_id =  $('#country_id').val();
$.get("{{url('dashboard/countrycities')}}/"+country_id, function(data){
    $('#city_id').empty();
    $('#city_id').append('<option>@lang('site.select')</option>');
    $.each(data, function(key, value){
        $('#city_id').append('<option value="'+value.id+'">'+value.name_ar+'</option>')

    });
    


$('#city_id').val({{$aqar->city_id}});

    var city_id =$('#city_id').val();
     var aqarrea={{$aqar->area_id}};
            $("#cityarea").show(); 
            $.get("{{url('dashboard/cityareas')}}/"+city_id, function(data){
                $('#area_id').empty();
                $.each(data, function(key, value){
                    $('#area_id').append('<li class="form-check radio radio-primary" ><input class="form-check-input" id="area_'+value.id+'" type="radio" name="area_id" value="'+value.id+'" ' + (value.id == aqarrea ? 'checked' : '') +' ><label class="form-check-label mb-0" for="area_'+value.id+'">'+value.name_ar+'</label></li>')

                });
               
            });

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

$('input[type=radio][name=category_id]').change(function() {
    var category_id =$('input[name="category_id"]:checked').val();
    var aqar_id='<?php echo $aqar->id?>';  
       $.ajax({
           url: '{{ url('dashboard/aqars/getsetting1') }}' + '/' +category_id  + '/' +aqar_id ,
           success : function(html)
           {   
               $("#result_data1").show();
               var element = $('#result_data');
               element.empty();
               $('#result_data1').html(html) ;
           }
       })
});
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