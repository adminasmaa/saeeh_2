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
        <!-- Container-fluid starts-->


        <div class="container-fluid">
            <div class="row second-chart-list third-news-update">
                <div class="col-xl-12 col-lg-11 xl-50 morning-sec box-col-12">
                    <form action="{{ route('dashboard.invoices.update', $invoice->id) }}" method="post"
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
                                <div class="row">
                                    <!--<div class="col-md-6">-->

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.balances')</label>
                                        <input type="number" step=".1" name="balance" class="form-control"
                                               value="{{$invoice->balance}}"
                                            >
                                    </div>
                                <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.amount')</label>
                                        <input type="number" step=".1" name="amount" class="form-control"
                                               value="{{$invoice->amount}}"
                                            >
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.description')</label>
                                        <input type="text" name="description" class="form-control"
                                               value="{{$invoice->description}}"
                                            >
                                    </div>
                                <div class="col-md-6 form-group">
                                    <label class="form-label">@lang('site.type')</label><span class="text-danger">*</span>
                                    <select class="js-example-placeholder-multiple col-sm-12" name="type">
                                            <option selected>@lang('site.select')</option>
                                        <option value="income"
                                                @if($invoice->type=='income') selected @endif>@lang('site.income')
                                        </option>
                                        <option value="capital"
                                                @if($invoice->type=='capital') selected @endif>@lang('site.capital')
                                        </option>                                           
                                        <option value="expenses"
                                                @if($invoice->type=='expenses') selected @endif>@lang('site.expenses')
                                        </option> 
                                        <option value="export"
                                                @if($invoice->type=='export') selected @endif>@lang('site.export')
                                        </option> 
                                    </select>
                                </div>

                                </div>
                                <div class="row">

                                <div class="col-md-6 form-group"><span class="text-danger">*</span>
                                    <label class="form-label">@lang('site.users')</label>
                                    <select class="js-example-placeholder-multiple col-sm-12" name="user_id">
                                        <option selected>@lang('site.select')</option>
                                        @foreach($users as $user)

                                            <option value="{{$user->id}}"@if($invoice->user_id==$user->id) selected @endif>{{$user->firstname . $user->lastname ?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>
                             
                                </div>
                            <br>

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
