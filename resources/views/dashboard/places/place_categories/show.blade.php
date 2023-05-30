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
                    <div class="card">


                        @include('partials._errors')

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


                        <div class="card-body">
                            <div class="row form-group">
                                <!-- <label for="name"
                                    class="col-sm-3 col-form-label input-label">@lang('site.image')</label> -->
                                <div class="col-sm-9">
                                    <div class="d-flex align-items-center">
                                        <div class="col-md-6">
                                            <label class="d-block">@lang('site.image')</label>

                                            <img src="{{asset('images/categories/'.$category->image)}}"
                                                 data-bs-toggle="modal"
                                                 data-bs-target="#exampleModalss" width="100px" height="100px"
                                                 class="d-block"
                                                 onerror="this.src='{{asset('images/categories/default.jpg')}}'"
                                            >
                                        </div>

                                        <div class="col-md-6">
                                            <label class="d-block">@lang('site.icon')</label>

                                            <img src="{{asset('images/categories/'.$category->icon)}}"
                                                 width="100px" height="100px"
                                                 class="d-block"
                                                 onerror="this.src='{{asset('images/categories/default.jpg')}}'"
                                            >
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalss" tabindex="-1"
                                 aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
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
                                                             src="{{asset('images/categories/'.$category->image)}}"
                                                             alt=""
                                                             width="400px" height="aut0">

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


                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.ar.name')</label>
                                    <input type="text" name="name_ar" class="form-control" value="{{ $category->name_ar }}"
                                           disabled>
                                </div>
                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.en.name')</label>
                                    <input type="text" name="name_en" class="form-control" value="{{ $category->name_en }}"
                                           disabled>
                                </div>


{{--                                <div class="col-md-6 form-group col-12 p-2 ">--}}
{{--                                    <label class="form-label">@lang('site.city')</label>--}}
{{--                                    <select class="js-example-placeholder-multiple col-sm-12" multiple="multiple"--}}
{{--                                            readonly="">--}}
{{--                                        @foreach($cities as $city)--}}

{{--                                            <option value="{{$city->id}}"--}}
{{--                                                    @if(in_array($city->id,$citiesrelated)) selected @endif>{{$city->name_ar ?? ''}}</option>--}}

{{--                                        @endforeach--}}

{{--                                    </select>--}}
{{--                                </div>--}}

{{--                            </div>--}}

                            <div class="row">
                                <!--<div class="col-md-6">-->

                                <div class="col-md-6 form-group col-12 p-2 ">
                                    <label>@lang('site.description')<span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="editor1"  cols="15" rows="5" name="description" disabled>
                     {{ $category->description }}
                                        </textarea>
                                </div>
                            </div>


                            <br>

                            <h4 class="card-title">@lang('site.subcategories')</h4>
                            @foreach($subcategories as $cat)
                                <div class="row m-0">

                                    <div class="col-md-3 form-group col-12 p-2">


                                        <label>@lang('site.ar.name')</label>
                                        <input type="text" class="form-control"
                                               value="{{ $cat->name_ar ?? '' }}">
                                    </div>


                                    <div class="col-md-3 form-group col-12 p-2">
                                        <label>@lang('site.image')</label>
                                        <img src="{{asset('images/categories/'.$cat->image)}}"
                                             width="100px" height="100px">
                                    </div>


                                    @endforeach


                                </div>


                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- Individual column searching (text inputs) Ends-->
    </div>
    </div>
    </div>
    <!-- Container-fluid Ends-->
    </div>
    </div>

@endsection
