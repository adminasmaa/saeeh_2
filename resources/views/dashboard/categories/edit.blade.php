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

                                <div class="col-sm-12">


                                    <label>@lang('site.image')</label>
                                    <img src="{{asset('images/categories/'.$category->image)}}" data-bs-toggle="modal"
                                         data-bs-target="#exampleModalss" width="100px" height="100px" class="d-block"
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
                                                        <img name="soso"
                                                             src="{{asset('images/categories/'.$category->image)}}"
                                                             alt=""
                                                             width="400px" height="aut0"


                                                             onerror="this.src='{{asset('images/categories/default.jpg')}}'"
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
                                    <label>@lang('site.name')<span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" value="{{ $category->name }}"
                                           required>
                                </div>
                            </div>
                            <div class="row">
                                <!--<div class="col-md-6">-->

                                <div class="col-md-6 form-group col-12 p-2 ">
                                    <label>@lang('site.description')<span class="text-danger">*</span></label>
                                    <textarea class="form-control" rows="5" name="description">
                     {{ $category->description }}
                                        </textarea>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-6 form-group col-12 p-2">


                                    <label>@lang('site.image')</label>
                                    <input type="file" name="image" class="form-control" value="{{ old('image') }}">


                                </div>
                            </div>

                            <br>

                            <h4 class="card-title">@lang('site.subcategories')</h4>
                            @foreach($subcategories as $cat)
                                <div class="row m-0">

                                    <div class="col-md-3 form-group col-12 p-2">


                                        <label>@lang('site.name')</label>
                                        <input type="text"  class="form-control"
                                               value="{{ $cat->name ?? '' }}">
                                    </div>

                                    <div class="col-md-3 form-group col-12 p-2">


                                        <label>@lang('site.image')</label>
                                        <input type="file"  class="form-control"
                                               value="{{ old('image') }}">


                                    </div>

                                    <div class="col-md-3 form-group col-12 p-2">

                                        <img        src="{{asset('images/categories/'.$cat->image)}}"
                                                    width="100px" height="100px">
                                    </div>



                                    @endforeach

                                    <div class="col-md-2 form-group col-12 p-2">

                                        <br>
                                        <a
                                            class="btn btn-air-primary btn-pill btn-primary add-category w-100">@lang('site.add')</a>
                                    </div>

                                </div>

                                <div class="row m-0 sub-categories">


                                </div>


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
            jQuery('a.add-category').click(function (event) {
                event.preventDefault();
                var newRow = jQuery('<div class="row"><div class="col-md-3 form-group col-12 p-2">' +
                    '<input type="text"     name="name_category[]" class="form-control"/></div><div class="col-md-3 form-group col-12 p-2">' +
                    '<input type="file" name="image_category[]" class="form-control" >' +
                    '</div><div class="col-md-3 form-group col-12 p-2 ">' +

                    '</div></div>');
                jQuery('.sub-categories').append(newRow);
            });
        });
    </script>
@endsection

