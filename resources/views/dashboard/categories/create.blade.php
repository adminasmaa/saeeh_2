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


        <div class="container-fluid">

            <div class="row">
                <!-- Individual column searching (text inputs) Starts-->
                <div class="col-sm-12">
                    <div class="card mt-30">
                        <form action="{{ route('dashboard.categories.store') }}" method="post"
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
                                               >
                                    </div>

{{--                                    <div class="col-md-6 form-group col-12 p-2 ">--}}
{{--                                        <label class="form-label">@lang('site.city')</label>--}}
{{--                                        <select class="js-example-placeholder-multiple col-sm-12" multiple="multiple"--}}
{{--                                                name="city_id[]">--}}
{{--                                            <option selected>@lang('site.select')</option>--}}
{{--                                            @foreach($cities as $city)--}}

{{--                                                <option value="{{$city->id}}">{{$city->name_ar ?? ''}}</option>--}}

{{--                                            @endforeach--}}

{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="row">
                                    <!--<div class="col-md-6">-->

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.description')<span class="text-danger">*</span></label>
                                        <textarea class="form-control" cols="5" rows="5"
                                                  name="description">

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


                                <div class="row m-0">
                                    <h4 class="card-title">@lang('site.subcategories')</h4>
{{--                                    <div class="col-md-3 form-group col-12 p-2">--}}


{{--                                        <label>@lang('site.name')</label>--}}
{{--                                        <input type="text" name="name_category[]" class="form-control"--}}
{{--                                               value="{{ old('name') }}">--}}
{{--                                    </div>--}}

{{--                                    <div class="col-md-3 form-group col-12 p-2">--}}


{{--                                        <label>@lang('site.image')</label>--}}
{{--                                        <input type="file" name="image_category[]" class="form-control"--}}
{{--                                               value="{{ old('image') }}">--}}

{{--                                    </div>--}}


{{--                                    <div class="col-md-2 form-group col-12 p-2">--}}

{{--                                        <br>--}}
{{--                                        <a--}}
{{--                                            class="btn btn-air-primary btn-pill btn-primary add-category w-100">@lang('site.add')</a>--}}
{{--                                    </div>--}}


{{--                                </div>--}}


{{--                                <table class="categories-list" id="table5">--}}

{{--                                    --}}{{--                                <div class="row m-0 sub-categories">--}}


{{--                                    --}}{{--                                </div>--}}

{{--                                </table>--}}
                                    <div class="col-md-12 form-group col-12 desc" id="price2" >
                                        <table class="price-list" id="tb_price">
                                            <tr><td>
                                                    <div class="row">
                                                        <div class="col-md-5 form-group col-12">
                                                            <input type="text"  name="name_category[]" class="form-control"/>
                                                        </div>
                                                        <div class="col-md-5 form-group col-12">
                                                            <input type="file" name="image_category[]" class="form-control" >
                                                        </div>
                                                        <div class="col-md-2 form-group col-12">
                                                            <a class="btn btn-air-primary btn-pill btn-success add-price w-100"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                </td></tr>
                                        </table>

                                    </div>


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
                    '<input type="text"  name="name_category[]" class="form-control"/></div><div class="col-md-5 form-group col-12 p-2">' +
                    '<input type="file" name="image_category[]" class="form-control" >' +
                    '  </div>  <div class="col-md-2 form-group col-12 p-2 "> <a class="btn btn-air-primary btn-pill btn-danger add-price w-100" onclick="deletetr(this)" ><i class="fa fa-trash"></i></a>' +

                    '</div></div> </td>  </tr>');
                jQuery('.price-list').append(newRow);
            });


        });

        function deletetr(r) {
            r.closest('tr').remove();
        }
        // $(document).ready(function () {
        //     jQuery('a.add-category').click(function (event) {
        //         event.preventDefault();
        //         var newRow = jQuery('<tr><td><div class="row"><div class="col-md-3 form-group col-12 p-2">' +
        //             '<input type="text"     name="name_category[]" class="form-control"/></div><div class="col-md-3 form-group col-12 p-2">' +
        //             '<input type="file" name="image_category[]" class="form-control" >' +
        //             '  </div>  <div class="col-md-3 form-group col-12 p-2 "> <a  onclick="deleteRow(this)" ><i class="fa fa-trash"></i></a>' +
        //
        //             '</div></div> </td>  </tr>');
        //         jQuery('.categories-list').append(newRow);
        //     });
        // });
    </script>
@endsection
