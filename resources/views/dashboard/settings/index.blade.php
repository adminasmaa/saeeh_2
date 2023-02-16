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
                                        <ul class="nav main-menu" role="tablist">
                                            <li><a id="pills-created-tab" data-bs-toggle="pill" href="#pills-created"
                                                   role="tab" aria-controls="pills-created" aria-selected="true"><span
                                                        class="title">@lang('site.setting')</span></a></li>
                                            <li><a class="show" id="pills-todaytask-tab" data-bs-toggle="pill"
                                                   href="#pills-todaytask" role="tab" aria-controls="pills-todaytask"
                                                   aria-selected="false"><span
                                                        class="title"> @lang('site.attach_link')</span></a></li>
                                            <li><a class="show" id="pills-delayed-tab" data-bs-toggle="pill"
                                                   href="#pills-delayed" role="tab" aria-controls="pills-delayed"
                                                   aria-selected="false"><span class="title"> Delayed Tasks</span></a>
                                            </li>
                                            <li><a class="show" id="pills-upcoming-tab" data-bs-toggle="pill"
                                                   href="#pills-upcoming" role="tab" aria-controls="pills-upcoming"
                                                   aria-selected="false"><span class="title">Upcoming Tasks</span></a>
                                            </li>
                                            <li><a class="show" id="pills-weekly-tab" data-bs-toggle="pill"
                                                   href="#pills-weekly" role="tab" aria-controls="pills-weekly"
                                                   aria-selected="false"><span class="title">This week tasks</span></a>
                                            </li>
                                            <li><a class="show" id="pills-monthly-tab" data-bs-toggle="pill"
                                                   href="#pills-monthly" role="tab" aria-controls="pills-monthly"
                                                   aria-selected="false"><span class="title">This month tasks</span></a>
                                            </li>
                                            <li><a class="show" id="pills-assigned-tab" data-bs-toggle="pill"
                                                   href="#pills-assigned" role="tab" aria-controls="pills-assigned"
                                                   aria-selected="false"><span class="title">Assigned to me</span></a>
                                            </li>
                                            <li><a class="show" id="pills-tasks-tab" data-bs-toggle="pill"
                                                   href="#pills-tasks" role="tab" aria-controls="pills-tasks"
                                                   aria-selected="false"><span class="title">My tasks</span></a></li>
                                            <li>
                                                <hr>
                                            </li>


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
                                                <div class="card-header d-flex">
                                                    <h5 class="mb-0">  @lang('site.setting')</h5>
                                                </div>
                                                <div class="card-body p-0">
                                                    <div class="taskadd">


                                                        <div class="row">
                                                            <!--<div class="col-md-6">-->


                                                            <div class="col-md-9">
                                                                <label>@lang('site.terms_conditions')<span
                                                                        class="text-danger">*</span></label>
                                                                <textarea class="form-control" rows="3"
                                                                          name="terms_conditions">

                                        </textarea>
                                                            </div>


                                                        </div>
                                                        <div class="row">
                                                            <!--<div class="col-md-6">-->


                                                            <div class="col-md-9">
                                                                <label>@lang('site.website_address')<span
                                                                        class="text-danger">*</span></label>

                                                                <input type="text" name="website_address"
                                                                       class="form-control">

                                                            </div>

                                                            <div class="col-md-9">
                                                                <label>@lang('site.email')<span
                                                                        class="text-danger">*</span></label>

                                                                <input type="text" name="email" class="form-control">

                                                            </div>

                                                            <div class="col-md-9">
                                                                <label>@lang('site.website_link')<span
                                                                        class="text-danger">*</span></label>

                                                                <input type="text" name="website_link"
                                                                       class="form-control">

                                                            </div>


                                                            <div class="col-md-9">
                                                                <label>@lang('site.theme')<span
                                                                        class="text-danger">*</span></label>

                                                                <input type="text" name="theme" class="form-control">

                                                            </div>


                                                            <div class="col-md-9">
                                                                <label>@lang('site.closing_message')<span
                                                                        class="text-danger">*</span></label>
                                                                <textarea class="form-control" rows="2"
                                                                          name="closing_message">

                                        </textarea>
                                                            </div>

                                                            <div class="col-md-9">
                                                                <label>@lang('site.description')<span
                                                                        class="text-danger">*</span></label>
                                                                <textarea class="form-control" rows="2"
                                                                          name="description">

                                        </textarea>
                                                            </div>


                                                            <div class="col-md-9">
                                                                <label>@lang('site.key_words')<span
                                                                        class="text-danger">*</span></label>

                                                                <input type="text" name="key_words" class="form-control">

                                                            </div>
                                                            <div class="col-md-9">
                                                                <label>@lang('site.ads_top')<span
                                                                        class="text-danger">*</span></label>

                                                                <input type="text" name="ads_top" class="form-control">

                                                            </div>

                                                            <div class="col-md-9">
                                                                <label>@lang('site.ads_bottom')<span
                                                                        class="text-danger">*</span></label>

                                                                <input type="text" name="ads_bottom" class="form-control">

                                                            </div>

                                                            <div class="col-md-9">
                                                                <label>@lang('site.time_difference')<span
                                                                        class="text-danger">*</span></label>

                                                                <input type="time" name="time_difference" class="form-control">

                                                            </div>

                                                            <div class="col-md-9">
                                                                <label>@lang('site.closing')<span
                                                                        class="text-danger">*</span></label>

                                                                <select class="form-control btn-square" name="closing">
                                                                    <option selected>@lang('site.select')</option>

                                                                        <option value="open" >@lang('site.open')</option>
                                                                        <option value="closed" >@lang('site.closed')</option>


                                                                </select>


                                                            </div>

                                                            <div class="col-md-9">
                                                                <label>@lang('site.logo')<span
                                                                        class="text-danger">*</span></label>

                                                            <input type="file" name="logo" class="form-control">


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
                                                    <div class="details-bookmark text-center">
                                                        <div class="row" id="favouriteData"></div>
                                                        <div class="no-favourite"><span>No task due today.</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fade tab-pane" id="pills-delayed" role="tabpanel"
                                             aria-labelledby="pills-delayed-tab">
                                            <div class="card mb-0">
                                                <div class="card-header d-flex">
                                                    <h6 class="mb-0">Delayed Tasks</h6><a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round"
                                                             class="feather feather-printer me-2">
                                                            <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                                            <path
                                                                d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                                            <rect x="6" y="14" width="12" height="8"></rect>
                                                        </svg>
                                                        Print</a>
                                                </div>
                                                <div class="card-body">
                                                    <div class="details-bookmark text-center">
                                                        <span>No tasks found.</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fade tab-pane" id="pills-upcoming" role="tabpanel"
                                             aria-labelledby="pills-upcoming-tab">
                                            <div class="card mb-0">
                                                <div class="card-header d-flex">
                                                    <h6 class="mb-0">Upcoming Tasks</h6><a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round"
                                                             class="feather feather-printer me-2">
                                                            <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                                            <path
                                                                d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                                            <rect x="6" y="14" width="12" height="8"></rect>
                                                        </svg>
                                                        Print</a>
                                                </div>
                                                <div class="card-body">
                                                    <div class="details-bookmark text-center">
                                                        <span>No tasks found.</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fade tab-pane" id="pills-weekly" role="tabpanel"
                                             aria-labelledby="pills-weekly-tab">
                                            <div class="card mb-0">
                                                <div class="card-header d-flex">
                                                    <h6 class="mb-0">This Week Tasks</h6><a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round"
                                                             class="feather feather-printer me-2">
                                                            <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                                            <path
                                                                d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                                            <rect x="6" y="14" width="12" height="8"></rect>
                                                        </svg>
                                                        Print</a>
                                                </div>
                                                <div class="card-body">
                                                    <div class="details-bookmark text-center">
                                                        <span>No tasks found.</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fade tab-pane" id="pills-monthly" role="tabpanel"
                                             aria-labelledby="pills-monthly-tab">
                                            <div class="card mb-0">
                                                <div class="card-header d-flex">
                                                    <h6 class="mb-0">This Month Tasks</h6><a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round"
                                                             class="feather feather-printer me-2">
                                                            <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                                            <path
                                                                d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                                            <rect x="6" y="14" width="12" height="8"></rect>
                                                        </svg>
                                                        Print</a>
                                                </div>
                                                <div class="card-body">
                                                    <div class="details-bookmark text-center">
                                                        <span>No tasks found.</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fade tab-pane" id="pills-assigned" role="tabpanel"
                                             aria-labelledby="pills-assigned-tab">
                                            <div class="card mb-0">
                                                <div class="card-header d-flex">
                                                    <h6 class="mb-0">Assigned to me</h6><a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round"
                                                             class="feather feather-printer me-2">
                                                            <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                                            <path
                                                                d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                                            <rect x="6" y="14" width="12" height="8"></rect>
                                                        </svg>
                                                        Print</a>
                                                </div>
                                                <div class="card-body p-0">
                                                    <div class="taskadd">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <h6 class="task_title_0">Task name</h6>
                                                                        <p class="project_name_0">General</p>
                                                                    </td>
                                                                    <td>
                                                                        <p class="task_desc_0">Lorem Ipsum is simply
                                                                            dummy text of the printing and typesetting
                                                                            industry. Lorem Ipsum has been</p>
                                                                    </td>
                                                                    <td><a class="me-2" href="#">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 stroke="currentColor" stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round"
                                                                                 class="feather feather-link">
                                                                                <path
                                                                                    d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                                                                                <path
                                                                                    d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                                                                            </svg>
                                                                        </a><a href="#">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 stroke="currentColor" stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round"
                                                                                 class="feather feather-more-horizontal">
                                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                                <circle cx="19" cy="12" r="1"></circle>
                                                                                <circle cx="5" cy="12" r="1"></circle>
                                                                            </svg>
                                                                        </a></td>
                                                                    <td><a href="#">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 stroke="currentColor" stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round"
                                                                                 class="feather feather-trash-2">
                                                                                <polyline
                                                                                    points="3 6 5 6 21 6"></polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                                <line x1="10" y1="11" x2="10"
                                                                                      y2="17"></line>
                                                                                <line x1="14" y1="11" x2="14"
                                                                                      y2="17"></line>
                                                                            </svg>
                                                                        </a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <h6 class="task_title_0">Task name</h6>
                                                                        <p class="project_name_0">General</p>
                                                                    </td>
                                                                    <td>
                                                                        <p class="task_desc_0">Lorem Ipsum is simply
                                                                            dummy text of the printing and typesetting
                                                                            industry. Lorem Ipsum has been</p>
                                                                    </td>
                                                                    <td><a class="me-2" href="#">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 stroke="currentColor" stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round"
                                                                                 class="feather feather-link">
                                                                                <path
                                                                                    d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                                                                                <path
                                                                                    d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                                                                            </svg>
                                                                        </a><a href="#">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 stroke="currentColor" stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round"
                                                                                 class="feather feather-more-horizontal">
                                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                                <circle cx="19" cy="12" r="1"></circle>
                                                                                <circle cx="5" cy="12" r="1"></circle>
                                                                            </svg>
                                                                        </a></td>
                                                                    <td><a href="#">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 stroke="currentColor" stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round"
                                                                                 class="feather feather-trash-2">
                                                                                <polyline
                                                                                    points="3 6 5 6 21 6"></polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                                <line x1="10" y1="11" x2="10"
                                                                                      y2="17"></line>
                                                                                <line x1="14" y1="11" x2="14"
                                                                                      y2="17"></line>
                                                                            </svg>
                                                                        </a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <h6 class="task_title_0">Task name</h6>
                                                                        <p class="project_name_0">General</p>
                                                                    </td>
                                                                    <td>
                                                                        <p class="task_desc_0">Lorem Ipsum is simply
                                                                            dummy text of the printing and typesetting
                                                                            industry. Lorem Ipsum has been</p>
                                                                    </td>
                                                                    <td><a class="me-2" href="#">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 stroke="currentColor" stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round"
                                                                                 class="feather feather-link">
                                                                                <path
                                                                                    d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                                                                                <path
                                                                                    d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                                                                            </svg>
                                                                        </a><a href="#">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 stroke="currentColor" stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round"
                                                                                 class="feather feather-more-horizontal">
                                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                                <circle cx="19" cy="12" r="1"></circle>
                                                                                <circle cx="5" cy="12" r="1"></circle>
                                                                            </svg>
                                                                        </a></td>
                                                                    <td><a href="#">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 stroke="currentColor" stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round"
                                                                                 class="feather feather-trash-2">
                                                                                <polyline
                                                                                    points="3 6 5 6 21 6"></polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                                <line x1="10" y1="11" x2="10"
                                                                                      y2="17"></line>
                                                                                <line x1="14" y1="11" x2="14"
                                                                                      y2="17"></line>
                                                                            </svg>
                                                                        </a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <h6 class="task_title_0">Task name</h6>
                                                                        <p class="project_name_0">General</p>
                                                                    </td>
                                                                    <td>
                                                                        <p class="task_desc_0">Lorem Ipsum is simply
                                                                            dummy text of the printing and typesetting
                                                                            industry. Lorem Ipsum has been</p>
                                                                    </td>
                                                                    <td><a class="me-2" href="#">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 stroke="currentColor" stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round"
                                                                                 class="feather feather-link">
                                                                                <path
                                                                                    d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                                                                                <path
                                                                                    d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                                                                            </svg>
                                                                        </a><a href="#">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 stroke="currentColor" stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round"
                                                                                 class="feather feather-more-horizontal">
                                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                                <circle cx="19" cy="12" r="1"></circle>
                                                                                <circle cx="5" cy="12" r="1"></circle>
                                                                            </svg>
                                                                        </a></td>
                                                                    <td><a href="#">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 stroke="currentColor" stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round"
                                                                                 class="feather feather-trash-2">
                                                                                <polyline
                                                                                    points="3 6 5 6 21 6"></polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                                <line x1="10" y1="11" x2="10"
                                                                                      y2="17"></line>
                                                                                <line x1="14" y1="11" x2="14"
                                                                                      y2="17"></line>
                                                                            </svg>
                                                                        </a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <h6 class="task_title_0">Task name</h6>
                                                                        <p class="project_name_0">General</p>
                                                                    </td>
                                                                    <td>
                                                                        <p class="task_desc_0">Lorem Ipsum is simply
                                                                            dummy text of the printing and typesetting
                                                                            industry. Lorem Ipsum has been</p>
                                                                    </td>
                                                                    <td><a class="me-2" href="#">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 stroke="currentColor" stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round"
                                                                                 class="feather feather-link">
                                                                                <path
                                                                                    d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                                                                                <path
                                                                                    d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                                                                            </svg>
                                                                        </a><a href="#">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 stroke="currentColor" stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round"
                                                                                 class="feather feather-more-horizontal">
                                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                                <circle cx="19" cy="12" r="1"></circle>
                                                                                <circle cx="5" cy="12" r="1"></circle>
                                                                            </svg>
                                                                        </a></td>
                                                                    <td><a href="#">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 stroke="currentColor" stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round"
                                                                                 class="feather feather-trash-2">
                                                                                <polyline
                                                                                    points="3 6 5 6 21 6"></polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                                <line x1="10" y1="11" x2="10"
                                                                                      y2="17"></line>
                                                                                <line x1="14" y1="11" x2="14"
                                                                                      y2="17"></line>
                                                                            </svg>
                                                                        </a></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fade tab-pane" id="pills-tasks" role="tabpanel"
                                             aria-labelledby="pills-tasks-tab">
                                            <div class="card mb-0">
                                                <div class="card-header d-flex">
                                                    <h6 class="mb-0">My tasks</h6><a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round"
                                                             class="feather feather-printer me-2">
                                                            <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                                            <path
                                                                d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                                            <rect x="6" y="14" width="12" height="8"></rect>
                                                        </svg>
                                                        Print</a>
                                                </div>
                                                <div class="card-body p-0">
                                                    <div class="taskadd">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <h6 class="task_title_0">Task name</h6>
                                                                        <p class="project_name_0">General</p>
                                                                    </td>
                                                                    <td>
                                                                        <p class="task_desc_0">Lorem Ipsum is simply
                                                                            dummy text of the printing and typesetting
                                                                            industry. Lorem Ipsum has been</p>
                                                                    </td>
                                                                    <td><a class="me-2" href="#">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 stroke="currentColor" stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round"
                                                                                 class="feather feather-link">
                                                                                <path
                                                                                    d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                                                                                <path
                                                                                    d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                                                                            </svg>
                                                                        </a><a href="#">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 stroke="currentColor" stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round"
                                                                                 class="feather feather-more-horizontal">
                                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                                <circle cx="19" cy="12" r="1"></circle>
                                                                                <circle cx="5" cy="12" r="1"></circle>
                                                                            </svg>
                                                                        </a></td>
                                                                    <td><a href="#">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 stroke="currentColor" stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round"
                                                                                 class="feather feather-trash-2">
                                                                                <polyline
                                                                                    points="3 6 5 6 21 6"></polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                                <line x1="10" y1="11" x2="10"
                                                                                      y2="17"></line>
                                                                                <line x1="14" y1="11" x2="14"
                                                                                      y2="17"></line>
                                                                            </svg>
                                                                        </a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <h6 class="task_title_0">Task name</h6>
                                                                        <p class="project_name_0">General</p>
                                                                    </td>
                                                                    <td>
                                                                        <p class="task_desc_0">Lorem Ipsum is simply
                                                                            dummy text of the printing and typesetting
                                                                            industry. Lorem Ipsum has been</p>
                                                                    </td>
                                                                    <td><a class="me-2" href="#">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 stroke="currentColor" stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round"
                                                                                 class="feather feather-link">
                                                                                <path
                                                                                    d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                                                                                <path
                                                                                    d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                                                                            </svg>
                                                                        </a><a href="#">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 stroke="currentColor" stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round"
                                                                                 class="feather feather-more-horizontal">
                                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                                <circle cx="19" cy="12" r="1"></circle>
                                                                                <circle cx="5" cy="12" r="1"></circle>
                                                                            </svg>
                                                                        </a></td>
                                                                    <td><a href="#">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 stroke="currentColor" stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round"
                                                                                 class="feather feather-trash-2">
                                                                                <polyline
                                                                                    points="3 6 5 6 21 6"></polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                                <line x1="10" y1="11" x2="10"
                                                                                      y2="17"></line>
                                                                                <line x1="14" y1="11" x2="14"
                                                                                      y2="17"></line>
                                                                            </svg>
                                                                        </a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <h6 class="task_title_0">Task name</h6>
                                                                        <p class="project_name_0">General</p>
                                                                    </td>
                                                                    <td>
                                                                        <p class="task_desc_0">Lorem Ipsum is simply
                                                                            dummy text of the printing and typesetting
                                                                            industry. Lorem Ipsum has been</p>
                                                                    </td>
                                                                    <td><a class="me-2" href="#">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 stroke="currentColor" stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round"
                                                                                 class="feather feather-link">
                                                                                <path
                                                                                    d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                                                                                <path
                                                                                    d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                                                                            </svg>
                                                                        </a><a href="#">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 stroke="currentColor" stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round"
                                                                                 class="feather feather-more-horizontal">
                                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                                <circle cx="19" cy="12" r="1"></circle>
                                                                                <circle cx="5" cy="12" r="1"></circle>
                                                                            </svg>
                                                                        </a></td>
                                                                    <td><a href="#">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 stroke="currentColor" stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round"
                                                                                 class="feather feather-trash-2">
                                                                                <polyline
                                                                                    points="3 6 5 6 21 6"></polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                                <line x1="10" y1="11" x2="10"
                                                                                      y2="17"></line>
                                                                                <line x1="14" y1="11" x2="14"
                                                                                      y2="17"></line>
                                                                            </svg>
                                                                        </a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <h6 class="task_title_0">Task name</h6>
                                                                        <p class="project_name_0">General</p>
                                                                    </td>
                                                                    <td>
                                                                        <p class="task_desc_0">Lorem Ipsum is simply
                                                                            dummy text of the printing and typesetting
                                                                            industry. Lorem Ipsum has been</p>
                                                                    </td>
                                                                    <td><a class="me-2" href="#">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 stroke="currentColor" stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round"
                                                                                 class="feather feather-link">
                                                                                <path
                                                                                    d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                                                                                <path
                                                                                    d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                                                                            </svg>
                                                                        </a><a href="#">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 stroke="currentColor" stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round"
                                                                                 class="feather feather-more-horizontal">
                                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                                <circle cx="19" cy="12" r="1"></circle>
                                                                                <circle cx="5" cy="12" r="1"></circle>
                                                                            </svg>
                                                                        </a></td>
                                                                    <td><a href="#">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 stroke="currentColor" stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round"
                                                                                 class="feather feather-trash-2">
                                                                                <polyline
                                                                                    points="3 6 5 6 21 6"></polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                                <line x1="10" y1="11" x2="10"
                                                                                      y2="17"></line>
                                                                                <line x1="14" y1="11" x2="14"
                                                                                      y2="17"></line>
                                                                            </svg>
                                                                        </a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <h6 class="task_title_0">Task name</h6>
                                                                        <p class="project_name_0">General</p>
                                                                    </td>
                                                                    <td>
                                                                        <p class="task_desc_0">Lorem Ipsum is simply
                                                                            dummy text of the printing and typesetting
                                                                            industry. Lorem Ipsum has been</p>
                                                                    </td>
                                                                    <td><a class="me-2" href="#">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 stroke="currentColor" stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round"
                                                                                 class="feather feather-link">
                                                                                <path
                                                                                    d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                                                                                <path
                                                                                    d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                                                                            </svg>
                                                                        </a><a href="#">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 stroke="currentColor" stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round"
                                                                                 class="feather feather-more-horizontal">
                                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                                <circle cx="19" cy="12" r="1"></circle>
                                                                                <circle cx="5" cy="12" r="1"></circle>
                                                                            </svg>
                                                                        </a></td>
                                                                    <td><a href="#">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 stroke="currentColor" stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round"
                                                                                 class="feather feather-trash-2">
                                                                                <polyline
                                                                                    points="3 6 5 6 21 6"></polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                                <line x1="10" y1="11" x2="10"
                                                                                      y2="17"></line>
                                                                                <line x1="14" y1="11" x2="14"
                                                                                      y2="17"></line>
                                                                            </svg>
                                                                        </a></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fade tab-pane" id="pills-notification" role="tabpanel"
                                             aria-labelledby="pills-notification-tab">
                                            <div class="card mb-0">
                                                <div class="card-header d-flex">
                                                    <h6 class="mb-0">Notification</h6><a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round"
                                                             class="feather feather-printer me-2">
                                                            <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                                            <path
                                                                d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                                            <rect x="6" y="14" width="12" height="8"></rect>
                                                        </svg>
                                                        Print</a>
                                                </div>
                                                <div class="card-body">
                                                    <div class="details-bookmark text-center">
                                                        <span>No tasks found.</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fade tab-pane" id="pills-newsletter" role="tabpanel"
                                             aria-labelledby="pills-newsletter-tab">
                                            <div class="card mb-0">
                                                <div class="card-header d-flex">
                                                    <h6 class="mb-0">Newsletter</h6><a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round"
                                                             class="feather feather-printer me-2">
                                                            <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                                            <path
                                                                d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                                            <rect x="6" y="14" width="12" height="8"></rect>
                                                        </svg>
                                                        Print</a>
                                                </div>
                                                <div class="card-body">
                                                    <div class="details-bookmark text-center">
                                                        <span>No tasks found.</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade modal-bookmark" id="createtag" tabindex="-1"
                                             role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Create Tag</h5>
                                                        <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="form-bookmark needs-validation" novalidate="">
                                                            <div class="row">
                                                                <div class="mb-3 mt-0 col-md-12">
                                                                    <label>Tag Name</label>
                                                                    <input class="form-control" type="text" required=""
                                                                           autocomplete="off">
                                                                </div>
                                                                <div class="mt-0 col-md-12">
                                                                    <label>Tag color</label>
                                                                    <input class="form-color d-block" type="color"
                                                                           value="#563d7c">
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-secondary" type="button">Save
                                                            </button>
                                                            <button class="btn btn-primary" type="button"
                                                                    data-bs-dismiss="modal">Cancel
                                                            </button>
                                                        </form>
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
        <!-- Container-fluid Ends-->
    </div>

@endsection


