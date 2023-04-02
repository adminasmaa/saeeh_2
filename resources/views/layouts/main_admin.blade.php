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

    <!-- Font Awesome-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"
          crossorigin/>
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
    <link rel="stylesheet" type="text/css" href="{{MAINASSETS}}/css/vendors/dropzone.css">
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

    <link rel="stylesheet" href="{{MAINDASHBOARD}}/plugins/noty/noty.css">
    <script src="{{MAINDASHBOARD}}//plugins/noty/noty.min.js"></script>
</head>

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

                                {{--                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)--}}

                                {{--                                    <div class="lang" data-value="ae"><i--}}
                                {{--                                            class="{{$properties['native']=='Arabic'? 'flag-icon flag-icon-us' : 'flag-icon flag-icon-ae'}}"></i><span--}}
                                {{--                                            class="lang-txt"><a--}}
                                {{--                                                hreflang="{{ $localeCode }}"--}}
                                {{--                                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"--}}

                                {{--                                            >{{ $properties['native'] }}</a></span>--}}
                                {{--                                    </div>--}}

                                {{--                                @endforeach--}}
                            </div>
                        </div>
                    </li>
                    <li><span class="header-search"><i data-feather="search"></i></span></li>
                    <!-- <li class="onhover-dropdown">
                        <div class="notification-box "><i class="fas fa-globe lang-icon"></i></div>
                        <div class="onhover-show-div notification-dropdown lang-dropdown">
                            <ul>
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                        <li class="li-lang">
                            <a hreflang="{{ $localeCode }}"
                                           href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                           <span >{{ $properties['native'] }}</span></a>
                                    </li>

                    @endforeach
                    </ul>
                </div>
            </li> -->
                    <li class="language-nav">
                        <div class="translate_wrapper">
                            <div class="current_lang">
                                <div class="lang">@if(app()->getLocale()=='ar')
                                        <i class="flag-icon flag-icon-ae"></i><span class="lang-txt">
                                            AR
                                            </span>
                                        @else
                                        <i class="flag-icon flag-icon-us"></i><span class="lang-txt">
                                            EN
                                            </span>

                                        @endif  </div>
                            </div>
                            <div class="more_lang">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                                    @if($properties['native']=='English')

                                        <div class="lang" data-value="en"><i class="flag-icon flag-icon-us"></i><span
                                                class="lang-txt"> <a
                                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }}</a></span>
                                        </div>
                                    @else
                                        <div class="lang" data-value="ae"><i class="flag-icon flag-icon-ae"></i><span
                                                class="lang-txt"><a
                                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }}</a></span>
                                        </div>

                                    @endif

                                @endforeach

                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="mode"><i class="fa fa-moon-o"></i></div>
                    </li>


                    <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i
                                data-feather="maximize"></i></a></li>
                    <li class="profile-nav onhover-dropdown p-0 me-0">
                        <div class="media profile-media"><img class="b-r-10"
                                                              src="{{MAINASSETS}}/images/dashboard/profile.jpg" alt="">
                            <div class="media-body"><span>{{auth()->user()->firstname ??  ''}} </span>
                                <p class="mb-0 font-roboto">{{auth()->user()->lastname ??  ''}} <i class="middle fa fa-angle-down"></i></p>
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
                                
                                    <h6 class="lan-1">Saeeh</h6>
                                    <p class="lan-2">Dashboards,widgets </p>
                                </div>
                            </li>
                            @php $current_route=Route::currentRouteName();@endphp
                            <li class="sidebar-list"><a
                                    class="sidebar-link sidebar-title link-nav {{($current_route=='dashboard.home')?'activee':'' }}"
                                    href="{{route('dashboard.home')}}"><i
                                        data-feather="home"></i><span>@lang('site.dashboard') @endlang</span></a>

                            </li>

                            <li class="sidebar-list"><a
                                    class="sidebar-link sidebar-title link-nav {{($current_route=='dashboard.settings.index')?'activee':'' }}"
                                    href="{{route('dashboard.settings.index')}}"><i
                                        data-feather="settings"></i><span>@lang('site.settings') @endlang</span></a>

                            </li>
                            <li class="sidebar-list"><a
                                    class="sidebar-link sidebar-title link-nav"
                                    href="{{route('dashboard.users.index')}}"><i
                                        data-feather="users"></i><span>@lang('site.users') @endlang</span></a>

                            </li>

                            <li class="sidebar-list"><a
                                    class="sidebar-link sidebar-title link-nav"
                                    href="{{route('dashboard.roles.index')}}"><i
                                        data-feather="box"></i><span>@lang('site.roles') @endlang</span></a>

                            </li>

                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav"
                                   href="{{route('dashboard.message.index')}}">
                                    <i data-feather="bell"></i><span>@lang('site.contacts') @endlang</span></a>
                            </li>

                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav"
                                   href="{{route('dashboard.contacts.index')}}">
                                    <i data-feather="mail"></i><span>@lang('site.contactsus') @endlang</span></a>
                            </li>

                            <li class="sidebar-list"><a
                                    class="sidebar-link sidebar-title link-nav"
                                    href="{{route('dashboard.countries.index')}}"><i
                                        data-feather="map"></i><span>@lang('site.countries') @endlang</span></a>

                            </li>

                            <li class="sidebar-list"><a
                                    class="sidebar-link sidebar-title link-nav"
                                    href="{{route('dashboard.cities.index')}}"><i
                                        data-feather="film"></i><span>@lang('site.cities') @endlang</span></a>

                            </li>


                            <li class="sidebar-list"><a
                                    class="sidebar-link sidebar-title link-nav"
                                    href="{{route('dashboard.questions.index')}}"><i
                                        data-feather="bookmark"></i><span>@lang('site.questions') @endlang</span></a>

                            </li>


                            <li class="sidebar-list"><a
                                    class="sidebar-link sidebar-title link-nav"
                                    href="{{route('dashboard.problems.index')}}"><i
                                        data-feather="file-text"></i><span>@lang('site.problems') @endlang</span></a>

                            </li>


                            <li class="sidebar-list"><a
                                    class="sidebar-link sidebar-title link-nav"
                                    href="{{route('dashboard.mediators.index')}}"><i
                                        data-feather="user-check"></i><span>@lang('site.mediators') @endlang</span></a>

                            </li>

                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav"
                                   href="{{route('dashboard.advertising.index')}}">
                                    <i data-feather="zap"></i><span>@lang('site.advertising') @endlang</span></a>
                            </li>
                            {{--list--}}

                            <li class="sidebar-list">
                                <label class="badge badge-light-secondary"></label><a class="sidebar-link sidebar-title"
                                                                                      href="#"><i
                                        data-feather="airplay"></i><span>@lang('site.cars') @endlang                </span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{route('dashboard.categories.index')}}" class="activee">{{__('site.categories')}}</a>
                                    </li>

                                    <li><a href="{{route('dashboard.cars.index')}}">{{__('site.cars')}}</a>

                                    </li>
                                    <li><a href="{{route('dashboard.bookings.index')}}">{{__('site.bookings')}}</a>
                                    </li>

                                    <li>
                                        <a href="{{route('dashboard.car_comments.index')}}">{{__('site.car_comments')}}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><a
                                    class="sidebar-link sidebar-title "
                                    href="#"><i data-feather="layers"></i><span>@lang('site.aquars') @endlang</span></a>
                                <ul class="sidebar-submenu">
                                    <li>
                                        <a href="{{route('dashboard.aquarcategories.index')}}">{{__('site.categories')}}</a>
                                    </li>

                                    <li>
                                        <a href="{{route('dashboard.aquarbooking.index')}}">{{__('site.bookings')}}</a>
                                    </li>

                                    <li>
                                        <a href="{{route('dashboard.areas.index')}}">{{__('site.areas')}}</a>
                                    </li>

                                    <li>
                                        <a href="{{route('dashboard.services_aqars.index')}}">{{__('site.services_aqars')}}</a>
                                    </li>

{{--                                    <li>--}}
{{--                                        <a href="{{route('dashboard.place_tables.index')}}">{{__('site.place_tables')}}</a>--}}
{{--                                    </li>--}}

{{--                                    <li>--}}
{{--                                        <a href="{{route('dashboard.services.index')}}">{{__('site.services')}}</a>--}}
{{--                                    </li>--}}

{{--                                    <li>--}}
{{--                                        <a href="{{route('dashboard.free_services.index')}}">{{__('site.free_services')}}</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="{{route('dashboard.kitchens.index')}}">{{__('site.kitchens')}}</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="{{route('dashboard.laundries.index')}}">{{__('site.laundries')}}</a>--}}
{{--                                    </li>--}}

{{--                                    <li>--}}
{{--                                        <a href="{{route('dashboard.crews.index')}}">{{__('site.crews')}}</a>--}}
{{--                                    </li>--}}

{{--                                    <li>--}}
{{--                                        <a href="{{route('dashboard.bathrooms.index')}}">{{__('site.bathrooms')}}</a>--}}
{{--                                    </li>--}}

{{--                                    <li>--}}
{{--                                        <a href="{{route('dashboard.conditioning_types.index')}}">{{__('site.conditioning_types')}}</a>--}}
{{--                                    </li>--}}

{{--                                    <li>--}}
{{--                                        <a href="{{route('dashboard.another_rooms.index')}}">{{__('site.another_rooms')}}</a>--}}
{{--                                    </li>--}}


{{--                                    <li>--}}
{{--                                        <a href="{{route('dashboard.floors.index')}}">{{__('site.floors')}}</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="{{route('dashboard.floor_numbers.index')}}">{{__('site.floor_numbers')}}</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="{{route('dashboard.pools.index')}}">{{__('site.pools')}}</a>--}}
{{--                                    </li>--}}

                                    <li>
                                        <a href="{{route('dashboard.aqars.index')}}">{{__('site.aqars')}}</a>
                                    </li>

                                    <li>
                                        <a href="{{route('dashboard.aqar_comments.index')}}">{{__('site.aqar_comments')}}</a>
                                    </li>
                                    <li>
                                        <a href="{{route('dashboard.aqar_setting.index')}}">{{__('site.aqar_setting')}}</a>
                                    </li>
                                </ul>
                            </li>


                            {{--list--}}

                            <li class="sidebar-list">
                                <label class="badge badge-light-secondary"></label><a class="sidebar-link sidebar-title"
                                                                                      href="#"><i
                                        data-feather="list"></i><span>@lang('site.places') @endlang                </span></a>
                                <ul class="sidebar-submenu">
                                    <!-- <li><a href="{{route('dashboard.brands.index')}}">{{__('site.brands')}}</a>
                                    </li> -->
                                    <li>
                                        <a href="{{route('dashboard.place_categories.index')}}">{{__('site.categories')}}</a>
                                    </li>

                                    <li><a href="{{route('dashboard.places.index')}}">{{__('site.places')}}</a>

                                    </li>
                                    <!-- <li><a href="{{route('dashboard.bookings.index')}}">{{__('site.bookings')}}</a>
                                    </li> -->

                                    <li>
                                        <a href="{{route('dashboard.place_comments.index')}}">{{__('site.place_comments')}}</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav"
                                   href="{{route('dashboard.commissions.index')}}">
                                    <i data-feather="plus-circle"></i><span>@lang('site.commissions') @endlang</span></a>
                            </li>

                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav"
                                   href="{{route('dashboard.notifications.index')}}">
                                    <i data-feather="droplet"></i><span>@lang('site.notifications') @endlang</span></a>
                            </li>

                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav"
                                   href="{{route('dashboard.balances.index')}}">
                                    <i data-feather="dollar-sign"></i><span>@lang('site.balances') @endlang</span></a>
                            </li>

                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav"
                                   href="{{route('dashboard.invoices.index')}}">
                                    <i data-feather="anchor"></i><span>@lang('site.invoices') @endlang</span></a>
                            </li>

                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav"
                                   href="{{route('dashboard.deposits.index')}}">
                                    <i data-feather="credit-card"></i><span>@lang('site.deposits') @endlang</span></a>
                            </li>

                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav"
                                   href="{{route('dashboard.sections.index')}}">
                                    <i data-feather="list"></i><span>@lang('site.sections') @endlang</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                </nav>
            </div>
        </div>
        @include('sweetalert::alert')
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
<script src="{{MAINASSETS}}/js/jquery-3.5.1.min.js"></script>

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

<script src="{{MAINASSETS}}/js/chart/chartist/chartist.js"></script>
<script src="{{MAINASSETS}}/js/chart/chartist/chartist-plugin-tooltip.js"></script>
<script src="{{MAINASSETS}}/js/chart/knob/knob.min.js"></script>
<script src="{{MAINASSETS}}/js/chart/knob/knob-chart.js"></script>
<script src="{{MAINASSETS}}/js/chart/apex-chart/apex-chart.js"></script>
<script src="{{MAINASSETS}}/js/chart/apex-chart/stock-prices.js"></script>
<script src="{{MAINASSETS}}/js/notify/bootstrap-notify.min.js"></script>
<script src="{{MAINASSETS}}/js/dashboard/default.js"></script>
<script src="{{MAINASSETS}}/js/datepicker/date-picker/datepicker.js"></script>
<script src="{{MAINASSETS}}/js/datepicker/date-picker/datepicker.en.js"></script>
<script src="{{MAINASSETS}}/js/datepicker/date-picker/datepicker.custom.js"></script>
<script src="{{MAINASSETS}}/js/typeahead/handlebars.js"></script>
<script src="{{MAINASSETS}}/js/typeahead/typeahead.bundle.js"></script>
<script src="{{MAINASSETS}}/js/typeahead/typeahead.custom.js"></script>
<script src="{{MAINASSETS}}/js/typeahead-search/handlebars.js"></script>
<script src="{{MAINASSETS}}/js/typeahead-search/typeahead-custom.js"></script>
<script src="{{MAINASSETS}}/js/dropzone/dropzone.js"></script>
<script src="{{MAINASSETS}}/js/dropzone/dropzone-script.js"></script>
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
<script src="{{MAINASSETS}}/js/editor/ckeditor/ckeditor.js"></script>
<script src="{{MAINASSETS}}/js/editor/ckeditor/adapters/jquery.js"></script>
<script src="{{MAINASSETS}}/js/editor/ckeditor/styles.js"></script>
<script src="{{MAINASSETS}}/js/editor/ckeditor/ckeditor.custom.js"></script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="{{MAINASSETS}}/js/sidebar-menu.js"></script>
<script src="{{MAINASSETS}}/js/script.js"></script>
<script src="{{MAINASSETS}}/js/theme-customizer/customizer.js"></script>
<script src="https://cdn.tutorialjinni.com/jquery.repeater/1.2.1/jquery.repeater.min.js"></script>
<!-- login js-->
<!-- Plugin used-->
</body>
<!-- login js-->
<script>
    function deleteRow(r) {
        var i = r.parentNode.parentNode.rowIndex;
        document.getElementById("table5").deleteRow(i);
    }


</script>
<script>
// if ($('#pageWrapper').hasClass('compact-wrapper')) {
//     $(".sidebar-wrapper nav").find("a").removeClass("active");
//     $(".sidebar-wrapper nav").find("li").removeClass("active");

//     var current = window.location.pathname
//     $(".sidebar-wrapper nav ul>li a").filter(function () {

//         var link = $(this).attr("href");
//         if (link) {
//             if (current.indexOf(link) != -1) {
//                 $(this).parents().children('a').addClass('active');
//                 $(this).parents().parents().children('ul').css('display', 'none');
//                 $(this).addClass('active');
//                 $(this).parent().parent().parent().children('a').find('div').replaceWith('<div class="according-menu"><i class="fa fa-angle-down"></i></div>');
//                 $(this).parent().parent().parent().parent().parent().children('a').find('div').replaceWith('<div class="according-menu"><i class="fa fa-angle-down"></i></div>');
//                 return false;
//             }
//         }
//     });
// }
//     $(".sidebar-list > a").click(function(e) {
//     let parent = $(this).parent();
//     let submenu = $(this).next(".sidebar-submenu");
    
//     if(!submenu.hasClass('activee'))
//       if(parent.hasClass('submenu-shown')){
//         $(this)
//         .next(".sidebar-submenu")
//         .slideUp(200, function(){
//           parent.removeClass('submenu-shown')
//         });
//       }else{
//         $(this)
//         .next(".sidebar-submenu")
//         .slideDown(200, function(){
//           parent.addClass('submenu-shown')
//         });  
//       }
// });

// $('.sidebar-submenu').on('click', 'a', (e) => {
//   let submenu = $(e.delegateTarget);
//   let a = $(e.currentTarget);
//   a.toggleClass('activee');
  
//   if(submenu.find('a.activee').length === 0)
//     submenu.removeClass('activee');
//   else submenu.addClass('activee');
  
// });
// $(".sidebar-submenu li a.active").parent().parent(".sidebar-submenu").addClass("d-block");
</script>
<!-- Plugins JS Ends-->
@yield('js')
@yield('scripts')
<!-- Plugin used-->

</body>
</html>
