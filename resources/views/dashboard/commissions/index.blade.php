@extends('layouts.main_admin')

@section('content')

    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>@lang('site.commissions') @endlang</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-home">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg>
                                </a></li>
                            <li class="breadcrumb-item">@lang('site.dashboard')</li>
                            <li class="breadcrumb-item active">@lang('site.commissions')</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">

            <form action="{{ route('dashboard.commissions.update',1) }}" method="post"
                  enctype="multipart/form-data">

                {{ csrf_field() }}
                {{ method_field('put') }}

                <div class="email-wrap bookmark-wrap">
                    <div class="row">
                        <div class="col-xl-3 box-col-6">
                            <div class="email-left-aside">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="email-app-sidebar left-bookmark task-sidebar">
                                            <!-- <div class="media">
                                                <div class="media-body">
                                                    <h6 class="f-w-600">@lang('site.commissions') </h6>
                                                </div>
                                            </div> -->

                                            <hr>
                                            <ul class="nav main-menu" role="tablist">

                                                <li><a id="pills-created-tab" data-bs-toggle="pill"
                                                       href="#pills-created"
                                                       role="tab" aria-controls="pills-created"
                                                       aria-selected="true"><span
                                                              class=" title btn btn-light" style="font-size:20px;" >@lang('site.cars')</span></a></li>
                                                <li><a class="show" id="pills-todaytask-tab" data-bs-toggle="pill"
                                                       href="#pills-todaytask" role="tab"
                                                       aria-controls="pills-todaytask"
                                                       aria-selected="false"><span
                                                            class=" title btn btn-light" style="font-size:20px;" > @lang('site.aqars')</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-md-12 box-col-12">
                            <div class="email-right-aside bookmark-tabcontent">
                                <div class="card email-body radius-left">
                                    <div class="ps-0">
                                        <div class="tab-content">
                                            <div class="tab-pane fade active show" id="pills-created" role="tabpanel"
                                                 aria-labelledby="pills-created-tab">

                                                <div class="card mb-0">

                                                    <div class="card-body">
                                                        <div class="card-header d-flex">
                                                            <h5 class="mb-0">  @lang('site.cars')</h5>
                                                        </div>

                                                        <button type="button" class="btn btn-outline-primary" style="border: 4px double #7b38d8;" id="active">@lang('site.active')</button>

                                                        <button type="button" class="btn btn-outline-primary" style="border: 4px double #7b38d8;" id="not-active">@lang('site.not-active')</button>
                                                        
                                                        <div class="dt-ext table-responsive">
                                                            <table class="display">
                                                                {!! $dataTable->table([], true) !!}

                                                            </table>

                                                        </div>
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="fade tab-pane" id="pills-todaytask" role="tabpanel"
                                            aria-labelledby="pills-todaytask-tab">
                                                 
                                            <div class="card mb-0">

                                                <div class="card-body">
                                                        <div class="card-header d-flex">
                                                            <h5 class="mb-0">  @lang('site.aqars')</h5>
                                                        </div>

                                                        <div class="dt-ext table-responsive">

                                                            <button type="button" class="btn btn-outline-primary" style="border: 4px double #7b38d8;" id="active">@lang('site.active')</button>

                                                            <button type="button" class="btn btn-outline-primary" style="border: 4px double #7b38d8;" id="not-active">@lang('site.not-active')</button>

                                                                <table class="display"  style="display: block;" >

                                                                    {!! $dataTable->table([], true) !!}
                                                                </table>

                                                        </div>
                                                      
                                                </div>
                                            </div>
                             
                                        </div>
                </div>
            </form>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>

@endsection
@section('scripts')
    <!-- <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> -->


    <script>
        $(document).ready(function () {
            // $(".alert").delay(5000).slideUp(300);
            $(".alert").slideDown(300).delay(5000).slideUp(300);
        });
        setTimeout(function () {
            $('.alert-box').remove();
        }, 30000);
    </script>
    <br>



    <script src="/vendor/datatables/buttons.server-side.js"></script>




    {!! $dataTable->scripts() !!}

    <script>
        function confirmDelete($id) {
            console.log("Tapped Delete button")
            var that = document.getElementById("deleteForm" + $id);
            var n = new Noty({
                text: "@lang('site.confirm_delete')",
                type: "error",
                killer: true,
                buttons: [
                    Noty.button("@lang('site.yes')", 'btn btn-success mr-2', function () {
                        that.submit();
                    }),
                    Noty.button("@lang('site.no')", 'btn btn-primary mr-2', function () {
                        n.close();
                    })
                ]
            });
            n.show();
        }

        $(document).ready(function () {

            $("#deleteForm").on('click', "#delete", function (e) {

                console.log("Tapped Delete button")
                var that = $(this)
                e.preventDefault();
                var n = new Noty({
                    text: "@lang('site.confirm_delete')",
                    type: "error",
                    killer: true,
                    buttons: [
                        Noty.button("@lang('site.yes')", 'btn btn-success mr-2', function () {
                            that.closest('form').submit();
                        }),
                        Noty.button("@lang('site.no')", 'btn btn-primary mr-2', function () {
                            n.close();
                        })
                    ]
                });
                n.show();

            });


        });
    </script>

@endsection

