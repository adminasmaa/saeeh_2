@extends('layouts.main_admin')

@section('content')

    <!-- <div class="content-page"> -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>@lang('site.categories')</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">

                            <li class="breadcrumb-item">@lang('site.dashboard')</li>
                            <li class="breadcrumb-item active">@lang('site.categories') @endlang</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->


        <div class="container-fluid">
            <div class="row second-chart-list third-news-update">
                <div class="col-xl-12 col-lg-11 xl-50 morning-sec box-col-12">
                    <form action="{{ route('dashboard.categories.update', $category ->id) }}" method="post"
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

                                <div class="col-md-6 form-group col-12 p-2  ">

                                    <label>@lang('site.image')</label>
                                    <img  name="image"src="{{asset('images/categories/'.$category->image)}}"
                                        data-bs-toggle="modal"
                                        data-bs-target="#exampleModalss" width="100px" height="100px" class="d-block"
                                        onerror="this.src='{{asset('images/categories/default.jpg')}}'"
                                        >
                                </div>
                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.icon')</label>
                                    <img name="icon" src="{{asset('images/categories/'.$category->icon)}}"
                                        data-bs-toggle="modal"
                                        data-bs-target="#exampleModalss2" width="100px" height="100px" class="d-block"
                                        onerror="this.src='{{asset('images/categories/default.jpg')}}'"
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
                                                    <img name="image"
                                                         src="{{asset('images/categories/'.$category->image)}}"
                                                         alt=""
                                                         width="400px" height="aut0"


                                                         onerror="this.src='{{asset('images/categories/default.jpg')}}'"
                                                    >

                                                </th>
                                            </tr>


                                        </table>
                                    </div>
                                    <br>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">@lang('site.Cancel')</button>
                                    </div>
                                    <br>
                                    </div>
                                </div>
                                    </div>

                            <div class="modal fade" id="exampleModalss2" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">@lang('site.icon')</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <table class="border-5">
                                    <tr>
                                        <th>
                                            <img name="icon"
                                                    src="{{asset('images/categories/'.$category->icon)}}"
                                                    alt=""
                                                    width="400px" height="aut0"


                                                    onerror="this.src='{{asset('images/categories/default.jpg')}}'"
                                            >

                                        </th>
                                    </tr>


                                </table>
                            </div>
                            <br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">@lang('site.Cancel')</button>
                            </div>
                            <br>
                            </div>
                        </div>
                            </div>
                                </div>
                            </div>
                            <!--  End Of Modal -->
                            
                            <div class="row">

                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.ar.name')<span class="text-danger">*</span></label>
                                    <input type="text" name="name_ar" class="form-control"
                                           value="{{ $category->name_ar }}"
                                           required>
                                </div>
                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.en.name')<span class="text-danger">*</span></label>
                                    <input type="text" name="name_en" class="form-control"
                                           value="{{ $category->name_en }}"
                                    >
                                </div>


                                {{--                                <div class="col-md-6 form-group col-12 p-2 ">--}}
                                {{--                                    <label class="form-label">@lang('site.category')</label>--}}
                                {{--                                    <select class="js-example-placeholder-multiple col-sm-12" multiple="multiple"--}}
                                {{--                                            name="category_id[]">--}}
                                {{--                                        <option selected>@lang('site.select')</option>--}}
                                {{--                                        @foreach($categories as $category)--}}

                                {{--                                            <option value="{{$category->id}}">{{$category->name ?? ''}}</option>--}}

                                {{--                                        @endforeach--}}

                                {{--                                    </select>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="col-md-6 form-group col-12 p-2 ">--}}
                                {{--                                    <label class="form-label">@lang('site.city')</label>--}}
                                {{--                                    <select class="js-example-placeholder-multiple col-sm-12" multiple="multiple"--}}
                                {{--                                            name="city_id[]">--}}
                                {{--                                        <option >@lang('site.select')</option>--}}
                                {{--                                        @foreach($cities as $city)--}}

                                {{--                                            <option value="{{$city->id}}"--}}
                                {{--                                                    @if(in_array($city->id,$citiesrelated)) selected @endif>{{$city->name_ar ?? ''}}</option>--}}

                                {{--                                        @endforeach--}}

                                {{--                                    </select>--}}
                                {{--                                </div>--}}
                            </div>
                            <div class="row">
                                <!--<div class="col-md-6">-->

                                <div class="col-md-6 form-group col-12 p-2 ">
                                    <label>@lang('site.description')<span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="editor1"  cols="15" rows="5" name="description">
                                    {{ $category->description }}
                                        </textarea>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-6 form-group col-12 p-2">


                                    <label>@lang('site.image')</label>
                                    <input type="file" name="image" class="form-control" value="{{ old('image') }}">


                                </div>
                                <div class="col-md-6 form-group col-12 p-2">


                                    <label>@lang('site.icon')</label>
                                    <input type="file" name="icon" class="form-control" value="{{ old('icon') }}">


                                </div>
                            </div>

                            <br>

                            <div class="row m-t-10">
                                <div class="m-checkbox-inline">

                                    <label for="edo-ani1">
                                        <input class="radio_animated" type="radio" name="price"
                                        data-bs-original-title="tooltip" title="AddSubCategory" value="2">@lang('site.subcategories')
                                    </label>
                                </div>
                            </div>

                            <div class="row m-t-10">

                                @foreach($subcategories as $service)
                                
                                <input type="hidden" value="{{ $service->id ?? '' }}" name="id[]" class="form-control" />

                                    <div class="col-md-12 form-group col-12 ">
                                        <table>
                                            <tr>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-5 form-group col-12">
                                                            <label>@lang('site.ar.name')</label>
                                                            <input type="text"
                                                                    class="form-control" value="{{$service->name_ar}}" name="name_ar_category[]"/>
                                                        </div>
                                                        <div class="col-md-5 form-group col-12">
                                                            <label>@lang('site.en.name')</label>
                                                            <input type="text"
                                                                    class="form-control" value="{{$service->name_en}}" name="name_en_category[]"/>
                                                        </div>
                                                        <div class="col-md-5 form-group col-12 p-2">
                                                            <label>@lang('site.image')</label>
                                                            <input type="file" class="form-control"
                                                                value="{{ old('image') }}" name="image_category[]">

                                                        </div>
                                                        <div class="col-md-2 form-group col-12 ">
                                                                <img src="{{asset('images/categories/'.$service->image)}}"
                                                                width="100px" height="100px">
                                                            <a  type="button" href="{{route('dashboard.DeleteSubPlaceCategories',$service->id)}}" class="btn btn-air-primary btn-pill btn-danger w-100 m-t-30"><i class="fa fa-trash"></i></a>
                                                        </div>

                                                    </div>
                                                </td>
                                            </tr>
                                        </table>

                                    </div>

                                @endforeach
                                    <!-- <div class="col-md-2 form-group col-12"> -->
                                        <!-- <a class="btn btn-air-primary btn-pill btn-success add-price w-100 m-t-30"><i
                                                class="fa fa-plus" aria-hidden="true"></i></a> -->
                                    <!-- </div> -->
                                <div class="col-md-12 form-group col-12   desc" id="price2" style="display: none;">
                                <table class="price-list" id="tb_price">
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-5 form-group col-12">
                                                        <label>@lang('site.ar.name')</label>
                                                        <input type="text" name="name_ar_category[]" class="form-control"/>
                                                    </div>
                                                    <div class="col-md-5 form-group col-12">
                                                        <label>@lang('site.en.name')</label>
                                                        <input type="text" name="name_en_category[]" class="form-control">
                                                    </div>
                                                    <div class="col-md-5 form-group col-12">
                                                        <label>@lang('site.image')</label>
                                                        <input type="file" name="image_category[]" class="form-control">
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

                    <!-- <table class="categories-list" id="table5">

                    </table> -->
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
        ' <label>@lang('site.ar.name')</label><input type="text"  name="name_ar_category[]" class="form-control"/></div><div class="col-md-5 form-group col-12 p-2">' +
         '<label>@lang('site.en.name')</label><input type="text" name="name_en_category[]" class="form-control" >' +
        '<label>@lang('site.image')</label><input type="file" name="image_category[]" class="form-control" >' +
        '  </div>  <div class="col-md-2 form-group col-12 p-2 "> <a class="btn btn-air-primary btn-pill btn-danger add-price w-100 m-t-30" onclick="deletetr(this)" ><i class="fa fa-trash"></i></a>' +
        '</div></div> </td>  </tr>');

        jQuery('.price-list').append(newRow);
    });

    $("input[name='price']").click(function () {
    var test = $(this).val();

    $("div.desc").hide();
    $("#price" + test).show();
    }); 

    });

    function deletetr(r) {
        r.closest('tr').remove();
    }
</script>
@endsection
