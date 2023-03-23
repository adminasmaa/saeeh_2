@extends('layouts.main_admin')

@section('content')

    <!-- <div class="content-page"> -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>@lang('site.aqar_setting')</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">@lang('site.dashboard')</li>

                            <li class="breadcrumb-item active">@lang('site.aqar_setting') @endlang</li>
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
                        <form action="{{ route('dashboard.aqar_setting.update', $aqarSetting->ID) }}" method="post"
                              enctype="multipart/form-data"
                              id="" class="form-main">

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

                        <div class="card">
                        <center>
                        <div class="card-body">
                                @include('partials._errors')
                                <center>
                                <div class="col-sm-8">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="text-danger">@lang('site.alert')</h5>
                                            <h6 class="text-warning">@lang('site.If you have a problem adding your ad, please call us')</h6>
                                            <h6 class="text-info">0707078888</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="col-sm-12">
                                                <h5 class="text-decoration-underline border-bottom">@lang('site.categories')</h5>
                                            </div>
                                            <div class="col">
                                                <div class="m-t-15">
                                                @foreach($categories as $cat)
                                                <div class="form-check radio radio-primary">
                                                    <input class="form-check-input" id="category_id{{$cat->id}}" type="radio"  name="category_id"  value="{{$cat->id}}" {{$cat->id==$aqarSetting->category_id? 'checked':'' }} >
                                                    <label class="form-check-label mb-0" for="category_id{{$cat->id}}">{{$cat->name_ar ?? ''}}</label>
                                                </div>
                                                @endforeach
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row m-t-10">
                                                <!--<div class="col-md-6">-->

                                                <div class="col-md-6 form-group col-12 p-2 ">
                                                <label>@lang('site.input_id')</label>
                                                <input type="text" name="input_id" class="form-control"
                                                    value="{{$aqarSetting->input_id}}"
                                                    >
                                                </div>
                                                <div class="col-md-6 form-group">
                                                <label class="form-label">@lang('site.display')</label><span class="text-danger">*</span>
                                                <select class="form-control btn-square" name="display">
                                                        <option selected>@lang('site.select')</option>
                                                    <option value="1"
                                                            @if($aqarSetting->display=='view') selected @endif>@lang('site.view')
                                                    </option>
                                                    <option value="0"
                                                            @if($aqarSetting->display=='notview') selected @endif>@lang('site.notview')
                                                    </option>                                           

                                                </select>
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
    <!-- <script>


        $(document).ready(function () {
            var test=$('input[name="price"]:checked').val();
            $("div.desc").hide();
            $("#price" + test).show();

            var category_id =$('input[name="category_id"]:checked').val();
            $("#floor").hide();
            $("#floornumber").hide();
            $("#space").hide();
            $("#unitnumber").hide();
            $("#bathroomnumber").hide();
            $("#hallnumber").hide();
            $("#personnumber").hide();
            $("#swimmingpool").hide();
            $.ajax({
                url: '{{ url('dashboard/aqars/getsetting') }}' + '/' +category_id ,
                success: data => {
                    data.forEach(model =>
                        $("#" + model.input_id).show()
                    )
                }
            });
            jQuery('a.add-price').click(function (event) {
                event.preventDefault();
                var newRow = jQuery('<tr><td><div class="row"><div class="col-md-5 form-group col-12 p-2">' +
                    '<input type="number"  name="person_num[]" class="form-control"/></div><div class="col-md-5 form-group col-12 p-2">' +
                    '<input type="number" name="price[]" class="form-control" >' +
                    '  </div>  <div class="col-md-2 form-group col-12 p-2 "> <a class="btn btn-air-primary btn-pill btn-danger add-price w-100" onclick="deletetr(this)" ><i class="fa fa-trash"></i></a>' +

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

    $('input[type=radio][name=category_id]').change(function() {
            var category_id =$('input[name="category_id"]:checked').val();
            $("#floor").hide();
            $("#floornumber").hide();
            $("#space").hide();
            $("#unitnumber").hide();
            $("#bathroomnumber").hide();
            $("#hallnumber").hide();
            $("#personnumber").hide();
            $("#swimmingpool").hide();
            $.ajax({
                url: '{{ url('dashboard/aqars/getsetting') }}' + '/' +category_id ,
                success: data => {
                    data.forEach(model =>
                        $("#" + model.input_id).show()
                    )
                }
            })
        });
    </script> -->
@endsection


