@extends('layouts.main_admin')

@section('content')

    <!-- <div class="content-page"> -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>@lang('site.aqar_reviews')</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">

                            <li class="breadcrumb-item">@lang('site.dashboard')</li>
                            <li class="breadcrumb-item active">@lang('site.aqar_reviews') @endlang</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->


        <div class="container-fluid">
            <div class="row second-chart-list third-news-update">
                <div class="col-xl-12 col-lg-11 xl-50 morning-sec box-col-12">


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
                        @include('partials._errors')
       
                        <div class="row">
                        <!-- type="number" -->
                            <div class="col-md-6 form-group col-12 p-2">
                                <label>@lang('site.rate')<span class="text-danger">*</span></label>
                                <input type="float" name="rate" class="form-control"
                                       value="{{ $AqarReview->rate }}" readonly=""disabled
                                >
                            </div>

                        <div class="row">

                            <div class="col-md-6 form-group">
                                <label class="form-label">@lang('site.users')<span class="text-danger">*</span></label>
                                <select class="form-control btn-square" name="user_id" readonly=""disabled>
                                    <option selected>@lang('site.select')</option>
                                    @foreach($users as $user)

                                    <option value="{{$user->id}}"
                                                        {{$user->id==$AqarReview->user_id? 'selected':'' }}>
                                                        {{$user->firstname . $user->lastname ?? ''}}</option>

                                    @endforeach

                                </select>
                            </div>

                            <div class="col-md-6 form-group">
                                <label class="form-label">@lang('site.aqars')</label>
                                <select class="form-control btn-square" name="aqar_id" readonly=""disabled>
                                    <option selected>@lang('site.select')</option>
                                    @foreach($aqars as $aqar)

                                        <option value="{{$aqar->id}}"
                                                @if($AqarReview->aqar_id==$aqar->id) selected @endif>{{$aqar->name_ar ?? ''}}</option>

                                    @endforeach

                                </select>
                            </div>
                        </br>
                        </br>
                            <div class="col-md-6 form-group">
                                <label class="form-label">@lang('site.reviewElements')</label>
                                <select class="form-control btn-square" name="review_element_id" readonly=""disabled>
                                    <option selected>@lang('site.select')</option>
                                    @foreach($ReviewElement as $reviewElements)

                                        <option value="{{$reviewElements->id}}"
                                                @if($AqarReview->review_element_id==$reviewElements->id) selected @endif>{{$reviewElements->name_ar ?? ''}}</option>

                                    @endforeach

                                </select>
                            </div>

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
    <!-- Individual column searching (text inputs) Ends-->
    </div>
    </div>
    <!-- Container-fluid Ends-->
    </div>

@endsection
