<header class="px-0 pt-2 header-mobile mobile-view">
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 pt-4">
                <div
                    class="side-menu-close d-flex d-lg-none flex-wrap flex-column align-items-center justify-content-center menu-mobile">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="col-md-4 col-sm-7 col-5">
                <div class="header-logo">
                    <a class="" href="{{route('Home')}}">
                        <img src="{{FRONTASSETS}}/images/logo.svg" alt="logo" class="img-logo-mobile"/>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-sm-3 col-5">
                <ul class="d-flex justify-content-end align-items-center list-unstyled pt-3 mb-0">
                    <li class="">
                        <a href="javascript:void(0)">
                            <div
                                class="notification d-flex justify-content-center align-items-center position-relative">
                                <span class="notification-icon">
                                    <i class="far fa-bell"></i>
                                </span>
                                <div class="cart-count d-flex justify-content-center align-items-center">
                                    5
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
         
        </div>
    </div>
</header>
<div class="side-menu-wrap">
    <nav class="side-menu-nav">
        <ul class="main-menu d-flex flex-column flex-lg-row align-items-lg-center list-unstyled p-0 m-0">
            <li class="nav-item">
                <a class="nav-link active" href="{{route('Home')}}">@lang('site.home') </a>
            </li>

                        <li class="nav-link  {{($current_route=='invst.home')?'active':'' }}">
                            <a href="{{route('invst.home')}}" class="investor-nav-link"> @lang('site.home') </a>
                        </li>
                        <li class="nav-link  {{($current_route==('invst.aqars.index'))||($current_route==('invst.cars.index'))?'active':'' }}">
                            <a href="{{(Auth::user()->type=='invest' && (Auth::user()->account_type_id ==1||Auth::user()->account_type_id ==2||Auth::user()->account_type_id ==3||Auth::user()->account_type_id ==4))?route('invst.aqars.index'):route('invst.cars.index')}}" class="investor-nav-link"> @lang('site.advertising') </a>
                        </li>
                        <li class="nav-link  {{($current_route==('invst.listbookings'))||($current_route==('invst.listcarbookings'))?'active':'' }}">
                            <a href="{{(Auth::user()->type=='invest' && (Auth::user()->account_type_id ==1||Auth::user()->account_type_id ==2||Auth::user()->account_type_id ==3||Auth::user()->account_type_id ==4))?route('invst.listbookings','all'):route('invst.listbookingscar','all')}}" class="investor-nav-link"> @lang('site.bookings') </a>
                        </li>
                        <li class="nav-link  {{($current_route=='invst.listcommisions')?'active':'' }}">
                            <a href="{{(Auth::user()->type=='invest' && (Auth::user()->account_type_id ==1||Auth::user()->account_type_id ==2||Auth::user()->account_type_id ==3||Auth::user()->account_type_id ==4))?route('invst.listcommisions',['aqar','unpaid']):route('invst.listcommisions',['car','unpaid'])}}" class="investor-nav-link"> @lang('site.commissions') </a>
                        </li>
                        <li class="nav-link  {{($current_route=='invst.updateprofile')?'active':'' }}">
                            <a href="{{route('invst.updateprofile',Auth::id())}}" class="investor-nav-link"> @lang('site.profiles') </a>
                        </li>

                        <li class="nav-link  {{($current_route=='invst.conditions')?'active':'' }}">
                            <a href="{{route('invst.conditions')}}" class="investor-nav-link"> @lang('site.Reservation and cancellation policy') </a>
                        </li>


           
  
            <li>
                <a href="javascript:void(0)" class="d-flex align-items-center" data-bs-toggle="modal"
                   data-bs-target="#helpModal">
                    <div class=" ps-1">
                        <i class="far fa-question-circle"></i>
                    </div>
                    <div>@lang('site.help')</div>
                </a>
            </li>
            <li>
                <div class="accordion accordion-flush" id="accordionFlushExample4">
                    <div id="flush-headingFour">
                        <a class="accordion-button collapsed d-flex justify-content-between" href="#"
                           data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false"
                           aria-controls="flush-collapseFour">
                            @lang('site.language')
                            <i class="fa fa-chevron-down"></i>
                        </a>
                    </div>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                         data-bs-parent="#accordionFlushExample4">
                        <div class="accordion-body">
                            <ul class="submenu list-unstyled">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode =>
                                $properties)

                                    @if($properties['native']=='English')
                                        <li class="pb-2">
                                            <a href="#">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img src="{{FRONTASSETS}}/images/nav-icons/flag-en.png"
                                                             alt="lang-icon"
                                                             class="ps-2"/>
                                                    </div>
                                                    <div>{{ $properties['native'] }}</div>
                                                </div>
                                            </a>
                                        </li>
                                    @else
                                        <li class="pb-2">
                                            <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                               class="sub-menu-link">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img src="{{FRONTASSETS}}/images/nav-icons/flag-ar.svg"
                                                             alt="lang-icon"
                                                             class="ps-2"/>
                                                    </div>
                                                    <div>{{ $properties['native'] }}</div>
                                                </div>
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                     

                            </ul>


                        </div>
                    </div>
                </div>
            </li>

            @if(!empty(auth()->user()))
                <!-- WHEN User Login -->
                <li>
                    <div class="accordion accordion-flush" id="accordionFlushProfile">
                        <div
                            id="flush-headingOne2 d-flex justify-content-center"
                            class="d-flex justify-content-center"
                        >
                            <a
                                class="accordion-button collapsed d-flex align-items-center justify-content-between mt-3"
                                type="button"
                                href="#"
                                data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseProfile"
                                aria-expanded="false"
                                aria-controls="flush-collapseProfile"
                            >
                                @lang('site.Welcome to')
                                {{auth()->user()->firstname ?? ''}}

                                <i class="far fa-angle-down"></i>
                            </a>
                        </div>
                        <div
                            id="flush-collapseProfile"
                            class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne2"
                            data-bs-parent="#accordionFlushProfile"
                        >
                            <div class="accordion-Profile">
                                <ul class="submenu list-unstyled">
                                    <li>
                                        <a href="{{route('logout')}}" class="d-flex align-items-center">
                                            <div class="profile-ic">
                                                <i class="far fa-sign-out"></i>
                                            </div>
                                            <div> @lang('site.logout')</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

            @else

                <!-- without login -->
                <li class="d-flex justify-content-center mt-2 mb-3">
                    <a
                        href="{{route('sitelogin')}}"
                        class="btn-outline-saeeh-mobile d-flex justify-content-center align-items-center"
                    >
                        <i class="fas fa-user"></i>
                        @lang('site.login')
                    </a>
                </li>
                <li class="d-flex justify-content-center">
                    <a
                        href="{{route('registers')}}"
                        class="btn-saeeh-mobile d-flex justify-content-center align-items-center"
                    >
                        <i class="fas fa-user"></i>
                        @lang('site.create account')
                    </a>
                </li>

            @endif

        </ul>
        <div class="row">
            <div class="side-menu-btns-box w-100 d-flex justify-content-center">
                <div class="col-10">
                </div>
            </div>
        </div>
    </nav>
    <div class="side-menu-close d-flex flex-wrap flex-column align-items-center justify-content-center">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<div class="overlay-mobile"></div>
