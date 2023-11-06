@extends('layouts.main_admin')

@section('content')

    <!-- <div class="content-page"> -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>@lang('site.questions')</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">@lang('site.dashboard')</li>

                            <li class="breadcrumb-item active">@lang('site.questions') @endlang</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="card mt-30">
                        <form action="{{ route('dashboard.questions.store') }}" method="post"
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
                            <div class="card-body d-flex justify-content-center">
                                <div>
                                @include('partials._errors')
                                <div class="row">
                                    <div class="form-group col-12 p-2 ">
                                        <label>@lang('site.question')<span class="text-danger">*</span></label>
                                        <input type="text" name="question" class="form-control"
                                               value="{{old('question')}}"
                                               required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12 p-2 ">
                                        <label>@lang('site.answer')<span  class="text-danger">*</span></label>
                                        <textarea id="editor1"  cols="15" rows="5" name="answer">

                                        </textarea>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                  <div id="kt_docs_repeater_nested">
                                    <div class="form-group mt-5">
                                        <div data-repeater-list="kt_docs_repeater_nested_outer">
                                            <div data-repeater-item="">
                                                <div class="form-group row mb-5">
                                                    <div class="col-md-4">
                                                        <label class="form-label">الاسم:</label>
                                                        <input type="email" class="form-control mb-2 mb-md-0" placeholder="ادخل الاسم">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="inner-repeater">
                                                            <div data-repeater-list="kt_docs_repeater_nested_inner" class="mb-5">
                                                                <div data-repeater-item="">
                                                                    <label class="form-label">الرقم :</label>
                                                                    <div class="input-group pb-3">
                                                                        <input type="email" class="form-control" placeholder="ادخل الرقم">
                                                                        <button class="border border-secondary btn btn-icon btn-light-danger delete-col-icon" data-repeater-delete="" type="button">
                                                                        <i class="fas fa-trash-alt fs-3"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-sm btn-light-primary" data-repeater-create="" type="button">
                                                            <i class="fas fa-plus"></i> اضافة رقم 
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check form-check-custom form-check-solid mt-2 mt-md-11">
                                                            <input class="form-check-input" type="checkbox" value="" id="form_checkbox">
                                                            <label class="form-check-label mb-0" for="form_checkbox">
                                                            أساسي
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2  mt-35">
                                                        <a href="javascript:;" data-repeater-delete="" class="delete-row-btn">
                                                        <i class="fas fa-trash-alt fs-3"></i> حدف صف
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <a href="javascript:;" data-repeater-create="" class="btn btn-light-primary">
                                        <i class="fas fa-plus"></i> اضافة صف
                                        </a>
                                    </div>
                                </div> -->
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                </div>
            </div>
          
        </form>
       
    </div>
    </div>

    </div>
    <!-- Container-fluid Ends-->

<script>


$(document).ready(function () {
$('#kt_docs_repeater_nested').repeater({
    repeaters: [{
        selector: '.inner-repeater',
        show: function () {
            $(this).slideDown();
        },

        hide: function (deleteElement) {
            $(this).slideUp(deleteElement);
        }
    }],

    show: function () {
        $(this).slideDown();
    },

    hide: function (deleteElement) {
        $(this).slideUp(deleteElement);
    }
});
});
</script>
@endsection






