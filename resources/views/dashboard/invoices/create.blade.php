@extends('layouts.main_admin')

@section('content')

    <!-- <div class="content-page"> -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>@lang('site.invoices')</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">@lang('site.dashboard')</li>

                            <li class="breadcrumb-item active">@lang('site.invoices') @endlang</li>
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
                        <form action="{{ route('dashboard.invoices.store') }}" method="post"
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
                                    <!--<div class="col-md-6">-->

                                    <div class="col-md-6 form-group">
                                        <label>@lang('site.balances')</label><span class="text-danger">*</span>
                                        <input type="number" step=".1" name="balance" class="form-control col-sm-12"
                                               value="{{old('balance')}}"
                                               >
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>@lang('site.amount')</label><span class="text-danger">*</span>
                                        <input type="number" step=".1" name="amount" class="form-control col-sm-12"
                                               value="{{old('amount')}}"
                                               >
                                    </div>
                                    
                                <div class="col-md-6 form-group">
                                    <label class="form-label mt-4 p-0" style="font-size:15px;" >@lang('site.type')</label><span class="text-danger">*</span>
                                    <ul class="px-0 list-unstyled d-flex flex-wrap">
                                        
                                        <li class="d-flex align-items-center checkx-input-li mb-lg-0 mb-2"> 
                                            <input type="radio" class="form-checkx-input" id="income" name="type" value="income">
                                            <label for="income" style="font-size:15px;" class="mb-0 px-2">@lang('site.income')</label>
                                        </li>
                                        <li class="d-flex align-items-center checkx-input-li mb-lg-0 mb-2">
                                            <input type="radio" class="form-checkx-input" id="capital" name="type" value="capital">
                                            <label for="capital" style="font-size:15px;" class="mb-0 px-2">@lang('site.capital')</label>
                                        </li>
                                        <li class="d-flex align-items-center checkx-input-li mb-lg-0 mb-2">
                                            <input type="radio" class="form-checkx-input" id="expenses" name="type" value="expenses">
                                            <label for="expenses" style="font-size:15px;" class="mb-0 px-2">@lang('site.expenses')</label>
                                        </li>
                                        <li class="d-flex align-items-center checkx-input-li mb-lg-0 mb-2">
                                            <input type="radio" class="form-checkx-input" id="export" name="type" value="export">
                                            <label for="export" style="font-size:15px;" class="mb-0 px-2">@lang('site.export')</label>
                                        </li>

                                    </ul>

                                </div>

                                <div class="col-md-6 form-group">
                                    <label class="form-label mt-4 p-0">@lang('site.users')</label><span class="text-danger">*</span>
                                    <select class="js-example-placeholder-multiple col-sm-12" name="user_id">
                                        <option selected>@lang('site.select')</option>
                                        @foreach($users as $user)

                                            <option value="{{$user->id}}">{{$user->firstname . $user->lastname ?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>
                                    <div class="col-md-12 form-group col-12 p-2  m-t-15">
                                        <label>@lang('site.descrption')<span class="text-danger">*</span></label>
                                        <textarea class="form-control" cols="5" rows="5"
                                                    name="description" required>
                                        </textarea>
                                    </div>
                                <br>

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

