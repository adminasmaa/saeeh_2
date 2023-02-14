<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{app()->isLocale('ar')? 'rtl' : 'ltr'}}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{MAINASSETS}}/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{MAINASSETS}}/images/favicon.png" type="image/x-icon">
    <title>@lang('site.Saeeh')</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{MAINASSETS}}/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{MAINASSETS}}/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{MAINASSETS}}/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{MAINASSETS}}/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{MAINASSETS}}/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{MAINASSETS}}/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="{{MAINASSETS}}/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="{{MAINASSETS}}/css/vendors/chartist.css">
    <link rel="stylesheet" type="text/css" href="{{MAINASSETS}}/css/vendors/date-picker.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{MAINASSETS}}/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{MAINASSETS}}/css/style.css">
    <link id="color" rel="stylesheet" href="{{MAINASSETS}}/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{MAINASSETS}}/css/responsive.css">
    @yield('css');
    <link href="{{MAINASSETS}}/plugins/datatables/datatable.min.css" rel="stylesheet"/>
    <script src="{{MAINASSETS}}/js/jquery-3.5.1.min.js"></script>

    <link rel="stylesheet" type="text/css" href="{{MAINASSETS}}/css/vendors/select2.css">


    <link rel="stylesheet" type="text/css" href="{{MAINASSETS}}/css/vendors/datatables.css">
    <link rel="stylesheet" type="text/css" href="{{MAINASSETS}}/css/vendors/datatable-extension.css">

    <link rel="stylesheet" href="{{ asset('dashboard_files/plugins/noty/noty.css') }}">
    <script src="{{ asset('dashboard_files/plugins/noty/noty.min.js') }}"></script>
</head>
@php $current_route = Route::currentRouteName();@endphp
    <!-- <body onload=""> -->
<body>
<!-- loader starts-->
<div class="loader-wrapper">
    <div class="loader-index"><span></span></div>
    <svg>
        <defs></defs>
        <filter id="goo">
            <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
            <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"></fecolormatrix>
        </filter>
    </svg>
</div>
<!-- loader ends-->
<!-- tap on top starts-->
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
<!-- tap on tap ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-header">
        <div class="header-wrapper row m-0">
            <form class="form-inline search-full col" action="#" method="get">
                <div class="form-group w-100">
                    <div class="Typeahead Typeahead--twitterUsers">
                        <div class="u-posRelative">
                            <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                                   placeholder="Search Cuba .." name="q" title="" autofocus>
                            <div class="spinner-border Typeahead-spinner" role="status"><span
                                    class="sr-only">Loading...</span></div>
                            <i class="close-search" data-feather="x"></i>
                        </div>
                        <div class="Typeahead-menu"></div>
                    </div>
                </div>
            </form>
            <div class="header-logo-wrapper col-auto p-0">
                <div class="logo-wrapper"><a href="index.html"><img class="img-fluid"
                                                                    src="{{MAINASSETS}}/images/logo/logo.png"
                                                                    alt=""></a></div>
                <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle"
                                               data-feather="align-center"></i></div>
            </div>
            <div class="left-header col horizontal-wrapper ps-0">
            </div>
            <div class="nav-right col-8 pull-right right-header p-0">
                <ul class="nav-menus">
                    <li class="language-nav">
                        <div class="translate_wrapper">
                            <div class="current_lang">
                                {{--                                @foreach (Config::get('locale') as $lang => $language)--}}
                                {{--                                    @if($lang != App::getLocale())--}}
                                {{--                                        <div class="lang" data-value="ae"><i class="{{app()->isLocale('ar')? 'flag-icon flag-icon-us' : 'flag-icon flag-icon-ae'}}"></i><span class="lang-txt"><a  href="{{ route('lang.switch', $lang) }}">{{$language}}</a></span></div>--}}
                                {{--                                    @endif--}}
                                {{--                                @endforeach--}}
                            </div>
                        </div>
                    </li>
                    <li><span class="header-search"><i data-feather="search"></i></span></li>
                    <li class="onhover-dropdown">
                        <div class="notification-box"><i data-feather="bell"> </i><span
                                class="badge rounded-pill badge-secondary">4 </span></div>
                        <div class="onhover-show-div notification-dropdown">
                            <h6 class="f-18 mb-0 dropdown-title">Notitications </h6>
                            <ul>
                                <li class="b-l-primary border-4">
                                    <p>Delivery processing <span class="font-danger">10 min.</span></p>
                                </li>
                                <li class="b-l-success border-4">
                                    <p>Order Complete<span class="font-success">1 hr</span></p>
                                </li>
                                <li class="b-l-info border-4">
                                    <p>Tickets Generated<span class="font-info">3 hr</span></p>
                                </li>
                                <li class="b-l-warning border-4">
                                    <p>Delivery Complete<span class="font-warning">6 hr</span></p>
                                </li>
                                <li><a class="f-w-700" href="#">Check all</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="onhover-dropdown">
                        <div class="notification-box"><i data-feather="star"></i></div>
                        <div class="onhover-show-div bookmark-flip">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="front">
                                        <h6 class="f-18 mb-0 dropdown-title">Bookmark</h6>
                                        <ul class="bookmark-dropdown">
                                            <li>
                                                <div class="row">
                                                    <div class="col-4 text-center">
                                                        <div class="bookmark-content">
                                                            <div class="bookmark-icon"><i data-feather="file-text"></i>
                                                            </div>
                                                            <span>Forms</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 text-center">
                                                        <div class="bookmark-content">
                                                            <div class="bookmark-icon"><i data-feather="user"></i></div>
                                                            <span>Profile</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 text-center">
                                                        <div class="bookmark-content">
                                                            <div class="bookmark-icon"><i data-feather="server"></i>
                                                            </div>
                                                            <span>Tables</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="text-center"><a class="flip-btn f-w-700" id="flip-btn"
                                                                       href="javascript:void(0)">Add New Bookmark</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="back">
                                        <ul>
                                            <li>
                                                <div class="bookmark-dropdown flip-back-content">
                                                    <input type="text" placeholder="search...">
                                                </div>
                                            </li>
                                            <li><a class="f-w-700 d-block flip-back" id="flip-back"
                                                   href="javascript:void(0)">Back</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="mode"><i class="fa fa-moon-o"></i></div>
                    </li>
                    <li class="cart-nav onhover-dropdown">
                        <div class="cart-box"><i data-feather="shopping-cart"></i><span
                                class="badge rounded-pill badge-primary">2</span></div>
                        <div class="cart-dropdown onhover-show-div">
                            <h6 class="f-18 mb-0 dropdown-title">Cart</h6>
                            <ul>
                                <li>
                                    <div class="media"><img class="img-fluid b-r-5 me-3 img-60" src="#" alt="">
                                        <div class="media-body"><span>Furniture Chair for Home</span>
                                            <div class="qty-box">
                                                <div class="input-group"><span class="input-group-prepend">
                                <button class="btn quantity-left-minus" type="button" data-type="minus"
                                        data-field="">-</button></span>
                                                    <input class="form-control input-number" type="text" name="quantity"
                                                           value="1"><span class="input-group-prepend">
                                <button class="btn quantity-right-plus" type="button" data-type="plus"
                                        data-field="">+</button></span>
                                                </div>
                                            </div>
                                            <h6 class="font-primary">$500</h6>
                                        </div>
                                        <div class="close-circle"><a class="bg-danger" href="#"><i data-feather="x"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"><img class="img-fluid b-r-5 me-3 img-60" src="#" alt="">
                                        <div class="media-body"><span>Furniture Chair for Home</span>
                                            <div class="qty-box">
                                                <div class="input-group"><span class="input-group-prepend">
                                <button class="btn quantity-left-minus" type="button" data-type="minus"
                                        data-field="">-</button></span>
                                                    <input class="form-control input-number" type="text" name="quantity"
                                                           value="1"><span class="input-group-prepend">
                                <button class="btn quantity-right-plus" type="button" data-type="plus"
                                        data-field="">+</button></span>
                                                </div>
                                            </div>
                                            <h6 class="font-primary">$500.00</h6>
                                        </div>
                                        <div class="close-circle"><a class="bg-danger" href="#"><i data-feather="x"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="total">
                                    <h6 class="mb-0">Order Total : <span class="f-right">$1000.00</span></h6>
                                </li>
                                <li class="text-center"><a class="d-block mb-3 view-cart f-w-700" href="cart.html">Go to
                                        your cart</a><a class="btn btn-primary view-checkout" href="checkout.html">Checkout</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="onhover-dropdown"><i data-feather="message-square"></i>
                        <div class="chat-dropdown onhover-show-div">
                            <h6 class="f-18 mb-0 dropdown-title">Messages</h6>
                            <ul class="py-0">
                                <li>
                                    <div class="media"><img class="img-fluid b-r-5 me-2"
                                                            src="{{MAINASSETS}}/images/user/1.jpg" alt="">
                                        <div class="media-body">
                                            <h6>Teressa</h6>
                                            <p>Reference site about Lorem Ipsum, give information on its origins.</p>
                                            <p class="f-8 font-primary mb-0">3 hours ago</p>
                                        </div>
                                        <span class="badge rounded-circle badge-primary">2</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"><img class="img-fluid b-r-5 me-2"
                                                            src="{{MAINASSETS}}/images/user/2.jpg" alt="">
                                        <div class="media-body">
                                            <h6>Kori Thomas</h6>
                                            <p>Lorem Ipsum is simply dummy give information on its origins....</p>
                                            <p class="f-8 font-primary mb-0">1 hr ago</p>
                                        </div>
                                        <span class="badge rounded-circle badge-primary">2</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"><img class="img-fluid b-r-5 me-2"
                                                            src="{{MAINASSETS}}/images/user/14.png" alt="">
                                        <div class="media-body">
                                            <h6>Ain Chavez</h6>
                                            <p>Lorem Ipsum is simply dummy...</p>
                                            <p class="f-8 font-primary mb-0">32 mins ago</p>
                                        </div>
                                        <span class="badge rounded-circle badge-primary">2</span>
                                    </div>
                                </li>
                                <li class="text-center"><a class="f-w-700" href="#">View All </a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i
                                data-feather="maximize"></i></a></li>
                    <li class="profile-nav onhover-dropdown p-0 me-0">
                        <div class="media profile-media"><img class="b-r-10"
                                                              src="{{MAINASSETS}}/images/dashboard/profile.jpg" alt="">
                            <div class="media-body"><span>Emay Walter</span>
                                <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div">
                            <li><a href="{{route('dashboard.users.edit',auth()->user()->id)}}"><i
                                        data-feather="user"></i><span>@lang('site.Profile') </span></a></li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();" class="ti-power">

                                    <i data-feather="log-in"> </i>{{ __('site.logout') }} </a></li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </li>
                </ul>
            </div>
            <script class="result-template" type="text/x-handlebars-template">
                <div class="ProfileCard u-cf">
                    <div class="ProfileCard-avatar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-airplay m-0">
                            <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                            <polygon points="12 15 17 21 7 21 12 15"></polygon>
                        </svg>
                    </div>
                    <div class="ProfileCard-details">
                        <div class="ProfileCard-realName"></div>
                    </div>
                </div>
            </script>
            <script class="empty-template" type="text/x-handlebars-template">
                <div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down,
                    yikes!
                </div></script>
        </div>
    </div>
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper">
            <div>
                <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light"
                                                                    src="{{MAINASSETS}}/images/logo/logo.png"
                                                                    alt=""><img class="img-fluid for-dark"
                                                                                src="{{MAINASSETS}}/images/logo/logo_dark.png"
                                                                                alt=""></a>
                    <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                    <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i>
                    </div>
                </div>
                <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid"
                                                                         src="{{MAINASSETS}}/images/logo/logo-icon.png"
                                                                         alt=""></a></div>
                <nav class="sidebar-main">
                    <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                    <div id="sidebar-menu">
                        <ul class="sidebar-links" id="simple-bar">
                            <li class="back-btn"><a href="index.html"><img class="img-fluid"
                                                                           src="{{MAINASSETS}}/images/logo/logo-icon.png"
                                                                           alt=""></a>
                                <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                                                                      aria-hidden="true"></i></div>
                            </li>
                            <li class="sidebar-main-title">
                                <div>
                                    <h6 class="lan-1">General</h6>
                                    <p class="lan-2">Dashboards,widgets & layout.</p>
                                </div>
                            </li>


                            <li class="sidebar-list"><a
                                    class="sidebar-link sidebar-title {{((in_array($current_route, ['dashboard.users.index','dashboard.users.create']))?'active':'' )}}"
                                    href="#"><i data-feather="users"></i><span>@lang('site.users') @endlang</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{route('dashboard.users.create')}}">{{__('site.add')}}</a></li>
                                    <li><a href="{{route('dashboard.users.index')}}">{{__('site.users')}}</a></li>
                                </ul>
                            </li>

                            <li class="sidebar-list"><a
                                    class="sidebar-link sidebar-title {{((in_array($current_route, ['dashboard.roles.index','dashboard.roles.create']))?'active':'' )}}"
                                    href="#"><i data-feather="box"></i><span>@lang('site.roles') @endlang</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{route('dashboard.roles.create')}}">{{__('site.add')}}</a></li>
                                    <li><a href="{{route('dashboard.roles.index')}}">{{__('site.roles')}}</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><a
                                    class="sidebar-link sidebar-title {{((in_array($current_route, ['dashboard.countries.index','dashboard.countries.create']))?'active':'' )}}"
                                    href="#"><i data-feather="map"></i><span>@lang('site.countries') @endlang</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{route('dashboard.countries.create')}}">{{__('site.add')}}</a></li>
                                    <li><a href="{{route('dashboard.countries.index')}}">{{__('site.countries')}}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><a
                                    class="sidebar-link sidebar-title {{((in_array($current_route, ['dashboard.cities.index','dashboard.cities.create']))?'active':'' )}}"
                                    href="#"><i data-feather="film"></i><span>@lang('site.cities') @endlang</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{route('dashboard.cities.create')}}">{{__('site.add')}}</a></li>
                                    <li><a href="{{route('dashboard.cities.index')}}">{{__('site.cities')}}</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><a
                                    class="sidebar-link sidebar-title {{((in_array($current_route, ['dashboard.categories.index','dashboard.categories.create']))?'active':'' )}}"
                                    href="#"><i data-feather="layers"></i><span>@lang('site.categories') @endlang</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{route('dashboard.categories.create')}}">{{__('site.add')}}</a></li>
                                    <li><a href="{{route('dashboard.categories.index')}}">{{__('site.categories')}}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><a
                                    class="sidebar-link sidebar-title {{((in_array($current_route, ['dashboard.questions.index','dashboard.questions.create']))?'active':'' )}}"
                                    href="#"><i data-feather="layers"></i><span>@lang('site.questions') @endlang</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{route('dashboard.questions.create')}}">{{__('site.add')}}</a></li>
                                    <li><a href="{{route('dashboard.questions.index')}}">{{__('site.questions')}}</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-list"><a
                                    class="sidebar-link sidebar-title {{((in_array($current_route, ['dashboard.problems.index','dashboard.problems.create']))?'active':'' )}}"
                                    href="#"><i data-feather="layers"></i><span>@lang('site.problems') @endlang</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{route('dashboard.problems.create')}}">{{__('site.add')}}</a></li>
                                    <li><a href="{{route('dashboard.problems.index')}}">{{__('site.problems')}}</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-list"><a
                                    class="sidebar-link sidebar-title {{((in_array($current_route, ['dashboard.mediators.index','dashboard.mediators.create']))?'active':'' )}}"
                                    href="#"><i data-feather="layers"></i><span>@lang('site.mediators') @endlang</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{route('dashboard.mediators.create')}}">{{__('site.add')}}</a></li>
                                    <li><a href="{{route('dashboard.mediators.index')}}">{{__('site.mediators')}}</a>
                                    </li>
                                </ul>
                            </li>


                        </ul>
                    </div>
                    <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                </nav>
            </div>
        </div>
        <!-- Page Sidebar Ends-->
        @yield('content')
        <!-- footer start-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Copyright 2021 © Cuba theme by pixelstrap </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- latest jquery-->

<!-- Bootstrap js-->
<script src="{{MAINASSETS}}/js/bootstrap/bootstrap.bundle.min.js"></script>
<!-- feather icon js-->
<script src="{{MAINASSETS}}/js/icons/feather-icon/feather.min.js"></script>
<script src="{{MAINASSETS}}/js/icons/feather-icon/feather-icon.js"></script>
<!-- scrollbar js-->
<script src="{{MAINASSETS}}/js/scrollbar/simplebar.js"></script>
<script src="{{MAINASSETS}}/js/scrollbar/custom.js"></script>
<!-- Sidebar jquery-->
<script src="{{MAINASSETS}}/js/config.js"></script>
<!-- Plugins JS start-->
<script src="{{MAINASSETS}}/js/sidebar-menu.js"></script>
<script src="{{MAINASSETS}}/js/chart/chartist/chartist.js"></script>
<script src="{{MAINASSETS}}/js/chart/chartist/chartist-plugin-tooltip.js"></script>
<script src="{{MAINASSETS}}/js/chart/knob/knob.min.js"></script>
<script src="{{MAINASSETS}}/js/chart/knob/knob-chart.js"></script>
<script src="{{MAINASSETS}}/js/chart/apex-chart/apex-chart.js"></script>
<script src="{{MAINASSETS}}/js/chart/apex-chart/stock-prices.js"></script>
<script src="{{MAINASSETS}}/js/notify/bootstrap-notify.min.js"></script>
@if($current_route=='backend.index')
    {
    <script src="{{MAINASSETS}}/js/dashboard/default.js"></script>
@endif
<script src="{{MAINASSETS}}/js/notify/index.js"></script>
<script src="{{MAINASSETS}}/js/datepicker/date-picker/datepicker.js"></script>
<script src="{{MAINASSETS}}/js/datepicker/date-picker/datepicker.en.js"></script>
<script src="{{MAINASSETS}}/js/datepicker/date-picker/datepicker.custom.js"></script>
<script src="{{MAINASSETS}}/js/typeahead/handlebars.js"></script>
<script src="{{MAINASSETS}}/js/typeahead/typeahead.bundle.js"></script>
<script src="{{MAINASSETS}}/js/typeahead/typeahead.custom.js"></script>
<script src="{{MAINASSETS}}/js/typeahead-search/handlebars.js"></script>
<script src="{{MAINASSETS}}/js/typeahead-search/typeahead-custom.js"></script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="{{MAINASSETS}}/js/script.js"></script>
<script src="{{MAINASSETS}}/js/theme-customizer/customizer.js"></script>
<!-- login js-->


<!-- Plugins JS start-->
<script src="{{MAINASSETS}}/js/sidebar-menu.js"></script>
<script src="{{MAINASSETS}}/js/datatable/datatables/jquery.dataTables.min.js"></script>
<script src="{{MAINASSETS}}/js/datatable/datatable-extension/dataTables.buttons.min.js"></script>
<script src="{{MAINASSETS}}/js/datatable/datatable-extension/jszip.min.js"></script>
<script src="{{MAINASSETS}}/js/datatable/datatable-extension/buttons.colVis.min.js"></script>
<script src="{{MAINASSETS}}/js/datatable/datatable-extension/pdfmake.min.js"></script>
<script src="{{MAINASSETS}}/js/datatable/datatable-extension/vfs_fonts.js"></script>
<script src="{{MAINASSETS}}/js/datatable/datatable-extension/dataTables.autoFill.min.js"></script>
<script src="{{MAINASSETS}}/js/datatable/datatable-extension/dataTables.select.min.js"></script>
<script src="{{MAINASSETS}}/js/datatable/datatable-extension/buttons.bootstrap4.min.js"></script>
<script src="{{MAINASSETS}}/js/datatable/datatable-extension/buttons.html5.min.js"></script>
<script src="{{MAINASSETS}}/js/datatable/datatable-extension/buttons.print.min.js"></script>
<script src="{{MAINASSETS}}/js/datatable/datatable-extension/dataTables.bootstrap4.min.js"></script>
<script src="{{MAINASSETS}}/js/datatable/datatable-extension/dataTables.responsive.min.js"></script>
<script src="{{MAINASSETS}}/js/datatable/datatable-extension/responsive.bootstrap4.min.js"></script>
<script src="{{MAINASSETS}}/js/datatable/datatable-extension/dataTables.keyTable.min.js"></script>
<script src="{{MAINASSETS}}/js/datatable/datatable-extension/dataTables.colReorder.min.js"></script>
<script src="{{MAINASSETS}}/js/datatable/datatable-extension/dataTables.fixedHeader.min.js"></script>
<script src="{{MAINASSETS}}/js/datatable/datatable-extension/dataTables.rowReorder.min.js"></script>
<script src="{{MAINASSETS}}/js/datatable/datatable-extension/dataTables.scroller.min.js"></script>
<script src="{{MAINASSETS}}/js/datatable/datatable-extension/custom.js"></script>
<script src="{{MAINASSETS}}/js/tooltip-init.js"></script>

<script src="{{MAINASSETS}}/js/select2/select2.full.min.js"></script>
<script src="{{MAINASSETS}}/js/select2/select2-custom.js"></script>
<!-- Plugins JS Ends-->
@yield('js')
@yield('scripts')
<!-- Plugin used-->

</body>
</html>
