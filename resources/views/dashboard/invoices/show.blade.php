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
                                    <input type="number" step=".1" name="balance" class="form-control" value="{{ $invoice->balance }}"
                                           disabled>
                                </div>
                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.amount')</label>
                                    <input type="number" step=".1" name="amount" class="form-control" value="{{ $invoice->amount }}"
                                           disabled>
                                </div>

                                <div class="col-md-6 form-group col-12 p-2">
                                    <label class="form-label">@lang('site.type')</label>
                                    <br>
                                    <select class="form-control btn-square" name="type" readonly="" disabled>
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

                                <div class="col-md-6 form-group col-12 p-2">
                                    <label class="form-label">@lang('site.users')</label>
                                    <select class="form-control btn-square" name="user_id" readonly=""disabled>
                                        <option selected>@lang('site.select')</option>
                                        @foreach($users as $user)

                                            <option value="{{$user->id}}"
                                                    @if($invoice->user_id==$user->id) selected @endif>{{$user->firstname . $user->lastname ?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>

                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.description')</label>
                                    <input type="text" name="description" class="form-control" value="{{ $invoice->description }}"
                                           disabled>
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
