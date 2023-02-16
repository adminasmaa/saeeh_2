@extends('layouts.main_admin')

@section('content')

    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>@lang('site.settings') @endlang</h3>
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
                            <li class="breadcrumb-item active">@lang('site.settings')</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">

            <form action="{{ route('dashboard.settings.update',1) }}" method="post"
                  enctype="multipart/form-data">

                {{ csrf_field() }}
                {{ method_field('put') }}

                <div class="bg-secondary-lighten card-header d-flex justify-content-between">
                    <h5>@lang('site.add') </h5>
                    <div class="text-end  group-btn-top">
                        <div class="form-group d-flex form-group justify-content-between">
                            <button type="button" class="btn btn-pill btn-outline-primary btn-air-primary"
                                    onclick="history.back();">

                                @lang('site.back')
                            </button>
                            <button type="submit" class="btn btn-success me-3"><i
                                    class="fa fa-edit p-1"></i>
                                @lang('site.edit')</button>
                        </div>
                    </div>


                </div>

                <div class="email-wrap bookmark-wrap">
                    <div class="row">
                        <div class="col-xl-3 box-col-6">
                            <div class="email-left-aside">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="email-app-sidebar left-bookmark task-sidebar">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h6 class="f-w-600">@lang('site.settings') </h6>
                                                </div>
                                            </div>

                                            <hr>

                                            <ul class="nav main-menu" role="tablist">

                                                <li><a id="pills-created-tab" data-bs-toggle="pill"
                                                       href="#pills-created"
                                                       role="tab" aria-controls="pills-created"
                                                       aria-selected="true"><span
                                                              class=" title btn btn-light">@lang('site.setting')</span></a></li>
                                                <li><a class="show" id="pills-todaytask-tab" data-bs-toggle="pill"
                                                       href="#pills-todaytask" role="tab"
                                                       aria-controls="pills-todaytask"
                                                       aria-selected="false"><span
                                                            class=" title btn btn-light"> @lang('site.attach_link')</span></a></li>


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
                                                            <h5 class="mb-0">  @lang('site.setting')</h5>
                                                        </div>


                                                        <div class="row form-group">

                                                            <div class="col-sm-12">


                                                                <label>@lang('site.logo')</label>
                                                                <img src="{{asset('images/settings/'.$setting->logo ?? '')}}"
                                                                     data-bs-toggle="modal"
                                                                     data-bs-target="#exampleModalss" width="100px"
                                                                     height="100px" class="d-block"
                                                                     onerror="this.src='{{asset('images/settings/default.jpg')}}'"
                                                                >


                                                            </div>
                                                        </div>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModalss" tabindex="-1"
                                                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="exampleModalLabel">@lang('site.logo')</h5>
                                                                        <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <table class="border-5">
                                                                            <tr>
                                                                                <th>
                                                                                    <img name="soso"
                                                                                         src="{{asset('images/settings/'.$setting->logo ?? '')}}"
                                                                                         alt=""
                                                                                         width="400px" height="aut0"


                                                                                         onerror="this.src='{{asset('images/settings/default.jpg')}}'"
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
                                                        <div class="card-body p-0">
                                                            <div class="taskadd">


                                                                <div class="row">
                                                                    <!--<div class="col-md-6">-->


                                                                    <div class="col-md-9">
                                                                        <label>@lang('site.terms_conditions')<span
                                                                                class="text-danger">*</span></label>
                                                                        <textarea class="form-control" id="editor2"  cols="15" rows="5"
                                                                                  name="terms_conditions">

                                                                    {{$setting->terms_conditions ?? ''}}

                                        </textarea>
                                                                    </div>


                                                                </div>
                                                                <div class="row">
                                                                    <!--<div class="col-md-6">-->


                                                                    <div class="col-md-9">
                                                                        <label>@lang('site.website_address')<span
                                                                                class="text-danger">*</span></label>

                                                                        <input type="text" name="website_address"
                                                                               class="form-control"
                                                                               value="{{$setting->website_address ?? ''}}">

                                                                    </div>

                                                                    <div class="col-md-9">
                                                                        <label>@lang('site.email')<span
                                                                                class="text-danger">*</span></label>

                                                                        <input type="text" name="email"
                                                                               class="form-control"
                                                                               value="{{$setting->email ?? ''}}">

                                                                    </div>

                                                                    <div class="col-md-9">
                                                                        <label>@lang('site.website_link')<span
                                                                                class="text-danger">*</span></label>

                                                                        <input type="text" name="website_link"
                                                                               class="form-control"
                                                                               value="{{$setting->website_link ?? ''}}">

                                                                    </div>


                                                                    <div class="col-md-9">
                                                                        <label>@lang('site.theme')<span
                                                                                class="text-danger">*</span></label>

                                                                        <input type="text" name="theme"
                                                                               class="form-control"
                                                                               value="{{$setting->theme ?? ''}}">

                                                                    </div>


                                                                    <div class="col-md-9">
                                                                        <label>@lang('site.closing_message')<span
                                                                                class="text-danger">*</span></label>
                                                                        <textarea class="form-control" rows="5"
                                                                                  name="closing_message">
                                                                    {{$setting->closing_message ?? ''}}

                                        </textarea>
                                                                    </div>

                                                                    <div class="col-md-9">
                                                                        <label>@lang('site.description')<span
                                                                                class="text-danger">*</span></label>
                                                                        <textarea class="form-control" id="editor1"  cols="15" rows="5"
                                                                                  name="description">

                                                                           {{$setting->description ?? ''}}

                                        </textarea>
                                                                    </div>


                                                                    <div class="col-md-9">
                                                                        <label>@lang('site.key_words')<span
                                                                                class="text-danger">*</span></label>

                                                                        <input type="text" name="key_words"
                                                                               class="form-control"
                                                                               value="{{$setting->key_words ?? ''}}">

                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <label>@lang('site.ads_top')<span
                                                                                class="text-danger">*</span></label>

                                                                        <input type="text" name="ads_top"
                                                                               class="form-control"
                                                                               value="{{$setting->ads_top ?? ''}}">

                                                                    </div>

                                                                    <div class="col-md-9">
                                                                        <label>@lang('site.ads_bottom')<span
                                                                                class="text-danger">*</span></label>

                                                                        <input type="text" name="ads_bottom"
                                                                               class="form-control"
                                                                               value="{{$setting->ads_bottom ?? ''}}">

                                                                    </div>

                                                                    <div class="col-md-9">
                                                                        <label>@lang('site.time_difference')<span
                                                                                class="text-danger">*</span></label>

                                                                        <input type="time" name="time_difference"
                                                                               class="form-control"
                                                                               value="{{$setting->time_difference ?? ''}}">

                                                                    </div>

                                                                    <div class="col-md-9">
                                                                        <label>@lang('site.closing')<span
                                                                                class="text-danger">*</span></label>

                                                                        <select class="form-control btn-square"
                                                                                name="closing">
                                                                            <option disabled
                                                                                    selected>@lang('site.select')</option>

                                                                            <option value="open"
                                                                                    @if($setting->closing=='open') selected @endif>@lang('site.open')</option>
                                                                            <option value="closed"
                                                                                    @if($setting->closing=='closed') selected @endif>@lang('site.closed')</option>


                                                                        </select>


                                                                    </div>

                                                                    <div class="col-md-9">
                                                                        <label>@lang('site.logo')<span
                                                                                class="text-danger">*</span></label>

                                                                        <input type="file" name="logo"
                                                                               class="form-control">

{{--                                                                        <form class="dropzone" id="singleFileUpload" action="/upload.php">--}}
{{--                                                                            <div class="dz-message needsclick"><i class="icon-cloud-up"></i>--}}
{{--                                                                                <h6>Drop files here or click to upload.</h6><span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>--}}
{{--                                                                            </div>--}}
{{--                                                                        </form>--}}
                                                                    </div>

{{--                                                                    <div class="row">--}}
{{--                                                                        <div class="col">--}}
{{--                                                                            <div class="mb-3">--}}
{{--                                                                                <label>Upload project file</label>--}}
{{--                                                                                <form class="dropzone" id="singleFileUpload" action="/upload.php">--}}
{{--                                                                                    <div class="dz-message needsclick"><i class="icon-cloud-up"></i>--}}
{{--                                                                                        <h6>Drop files here or click to upload.</h6><span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>--}}
{{--                                                                                    </div>--}}
{{--                                                                                </form>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fade tab-pane" id="pills-todaytask" role="tabpanel"
                                                 aria-labelledby="pills-todaytask-tab">
                                                <div class="card mb-0">

                                                    <div class="card-body">


                                                        <div class="row">


                                                            <div class="col-md-9">
                                                                <label>@lang('site.twitter')<span
                                                                        class="text-danger">*</span></label>

                                                                <input type="text" name="twitter"
                                                                       class="form-control"
                                                                       value="{{$setting->twitter ?? ''}}">

                                                            </div>
                                                        </div>

                                                        <div class="row">


                                                            <div class="col-md-9">
                                                                <label>@lang('site.facebook')<span
                                                                        class="text-danger">*</span></label>

                                                                <input type="text" name="facebook"
                                                                       class="form-control"
                                                                       value="{{$setting->facebook ?? ''}}">

                                                            </div>
                                                        </div>


                                                        <div class="row">


                                                            <div class="col-md-9">
                                                                <label>@lang('site.instagram')<span
                                                                        class="text-danger">*</span></label>

                                                                <input type="text" name="instagram"
                                                                       class="form-control"
                                                                       value="{{$setting->instagram ?? ''}}">

                                                            </div>
                                                        </div>


                                                        <div class="row">


                                                            <div class="col-md-9">
                                                                <label>@lang('site.youtube')<span
                                                                        class="text-danger">*</span></label>

                                                                <input type="text" name="youtube"
                                                                       class="form-control"
                                                                       value="{{$setting->youtube ?? ''}}">

                                                            </div>
                                                        </div>


                                                        <div class="row">


                                                            <div class="col-md-9">
                                                                <label>@lang('site.snapchat')<span
                                                                        class="text-danger">*</span></label>

                                                                <input type="text" name="snapchat"
                                                                       class="form-control"
                                                                       value="{{$setting->snapchat ?? ''}}">

                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
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
        <!-- Container-fluid Ends-->
    </div>

@endsection


