@extends('layouts.main_admin')


@section('content')

    <!-- <div class="content-page"> -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>@lang('site.balances')</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">@lang('site.dashboard')</li>

                            <li class="breadcrumb-item active">@lang('site.balances') @endlang</li>
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

                            <!--  End Of Modal -->
                            <div class="row">


                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.balances')</label>
                                    <input type="number" step=".1" name="balance" class="form-control" value="{{ $balance->balance }}"
                                           disabled>
                                </div>
                                <div class="col-md-6 form-group col-12 p-2">
                                <label class="form-label">@lang('site.inside')</label>
                                    <select class="form-control btn-square" name="inside" readonly="" disabled>
                                        <option selected>@lang('site.select')</option>

                                        <option value="1"
                                                @if($balance->inside=='1') selected @endif>@lang('site.active')
                                        </option>
                                        <option value="0"
                                                @if($balance->inside=='0') selected @endif>@lang('site.not-active')
                                        </option>
                                        
                                    </select>
                                </div>
                                <div class="col-md-6 form-group col-12 p-2">
                                <label class="form-label">@lang('site.outside')</label>
                                    <select class="form-control btn-square" name="outside" readonly="" disabled>
                                        <option selected>@lang('site.select')</option>

                                        <option value="1"
                                                @if($balance->outside=='1') selected @endif>@lang('site.active')
                                        </option>
                                        <option value="0"
                                                @if($balance->outside=='0') selected @endif>@lang('site.not-active')
                                        </option>
                                        
                                    </select>
                                </div>
                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.details')</label>
                                    <input type="text" name="details" class="form-control" value="{{ $balance->details }}"
                                           disabled>
                                </div>
                                <div class="col-md-6 form-group col-12 p-2">
                                <label class="form-label">@lang('site.type')</label>
                                    <select class="form-control btn-square" name="type" readonly="" disabled>
                                        <option selected>@lang('site.select')</option>

                                        <option value="aqar"
                                                @if($balance->type=='aqar') selected @endif>@lang('site.aqar')
                                        </option>
                                        <option value="car"
                                                @if($balance->type=='car') selected @endif>@lang('site.car')
                                        </option>
                                        
                                    </select>
                                </div>
                                <div class="col-md-6 form-group col-12 p-2">
                                <label class="form-label">@lang('site.users')</label>
                                <select class="form-control btn-square" name="user_id" readonly=""disabled>
                                    <option selected>@lang('site.select')</option>
                                    @foreach($users as $user)

                                        <option value="{{$user->id}}"
                                                @if($balance->user_id==$user->id) selected @endif>{{$user->firstname . $user->lastname ?? ''}}</option>

                                    @endforeach

                                </select>
                            </div>
                            </div>


                            <br>


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
