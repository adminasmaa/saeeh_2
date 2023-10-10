<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Home | Saeeh</title>
    <!-- Cairo Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet"
    />
    <!-- Font Awesome-->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        rel="stylesheet"
    />
    <!--start rating-->
    <link
        rel="stylesheet"
        href="{{FRONTASSETS}}/styles/star-rating-svg.css"
        type="text/css"
    />
    <!--timepicker-->
    <link rel="stylesheet" href="{{FRONTASSETS}}/js/jquery-timepicker/css/jquery.timepicker.min.css"/>
    <!--datepicker-->
    <link rel="stylesheet" href="{{FRONTASSETS}}/js/datepicker/css/datepicker.min.css"/>
    <!-- Owl Carousel -->
    <link
        rel="stylesheet"
        href="{{FRONTASSETS}}/js/OwlCarousel/css/owl.carousel.min.css"
    />
    <!-- Bootstrap-->
    <link
        rel="stylesheet"
        href="{{FRONTASSETS}}/vendor/bootstrap/css/bootstrap.min.css.map"
        type="text/css"
    />
    <link
        rel="stylesheet"
        href="{{FRONTASSETS}}/vendor/bootstrap/css/bootstrap.min.css"
        type="text/css"
    />
    <link
        rel="stylesheet"
        href="{{FRONTASSETS}}/vendor/bootstrap/css/bootstrap.rtl.min.css"
        type="text/css"
    />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css">


    <!--select 2-->
    <link rel="stylesheet" href="{{FRONTASSETS}}/js/select2/css/select2.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.7.0/nouislider.min.css"
          integrity="sha512-qveKnGrvOChbSzAdtSs8p69eoLegyh+1hwOMbmpCViIwj7rn4oJjdmMvWOuyQlTOZgTlZA0N2PXA7iA8/2TUYA=="
          crossorigin="anonymous" referrerpolicy="no-referrer">
    <!-- CSS -->
    <link rel="stylesheet" href="{{FRONTASSETS}}/styles/styles.css"/>
    <link rel="stylesheet" href="{{FRONTASSETS}}/styles/responsive-styles.css"/>
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"
    ></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    @yield('css')
    <!-- Font Awesome-->
    <link
        rel="stylesheet"
        href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
        crossorigin="anonymous"
    />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous">
    </script>



    <style>


        .hide {
            display: none;
        }
        #valid-msg {
            color: #00c900;
        }
        .rate {
            border: 1px solid #cccccc;
            float: left;
            height: 46px;
            padding: 0 10px;
        }

        .rate:not(:checked) > input {
            position: absolute;
            top: -9999px;
        }

        .rate:not(:checked) > label {
            float: right;
            width: 1em;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
            font-size: 30px;
            color: #ccc;
        }

        .rate:not(:checked) > label:before {
            content: '★ ';
        }

        .rate > input:checked ~ label {
            color: #ffc700;
        }

        .rate:not(:checked) > label:hover, .rate:not(:checked) > label:hover ~ label {
            color: #deb217;
        }

        .rate > input:checked + label:hover, .rate > input:checked + label:hover ~ label, .rate > input:checked ~ label:hover, .rate > input:checked ~ label:hover ~ label, .rate > label:hover ~ input:checked ~ label {
            color: #c59b08;
        }
        [dir=rtl] .iti--allow-dropdown .iti__flag-container, [dir=rtl] .iti--separate-dial-code .iti__flag-container{
            right: auto;
            left: 0;
            direction: ltr;
        }
    </style>
</head>

<body>
<header class="position-relative web-view">
    <!-- upper Header -->
    <section class="upper-header d-flex justify-content-between">
        <div class="container w-100">
            <div class="row justify-content-between align-items-center my-2">
                <div class="col-4">
                    <a href="{{route('Home')}}">
                        <img class="logo" src="{{FRONTASSETS}}/images/logo.svg" alt="logo"/>
                    </a>
                </div>

                <div class="col-8">
                    <div class="d-flex justify-content-end nav-section">
                        <nav class="navbar navbar-expand-lg">
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <ul class="navbar-nav align-items-center">
                                    <li class="ms-5">
                                        <a class="nav-link" href="javascript:void(0)">
                                            <div
                                                class="notification d-flex justify-content-center align-items-center position-relative">
                                                <span class="notification-icon">
                                                          <i class="far fa-bell"></i>

                                                </span>
                                                <div
                                                    class="cart-count d-flex justify-content-center align-items-center">
                                                    5
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    @if(!empty(auth()->user()))
                                    <li class="ms-5">
                                        <a class="nav-link" href="javascript:void(0)">
                                            <div
                                                class="notification-profile d-flex justify-content-center align-items-center position-relative">
                                                <span class="notification-icon">
                                                <i class="far fa-user"></i>
                                                </span>

                                            </div>
                                        </a>
                                    </li>
                               @else
                                    <li class="btn-saeeh btn-space">
                                        <a href="{{route('registers')}}"
                                           class="d-flex justify-content-center align-items-center w-100 h-100">
                                            @lang('site.create account')
                                        </a>
                                    </li>
                                    <li class="btn-outline-saeeh">
                                        <a href="{{route('sitelogin')}}"
                                           class=" d-flex justify-content-center align-items-center w-100 h-100">
                                            @lang('site.login')
                                        </a>
                                        </a>
                                    </li>
                                    @endif

                                </ul>


                                <div class="box-notifications  bg-white" id="box-notifications">
                                    <div class="d-flex justify-content-start align-items-center close-notify">
                                        <i class="fas fa-times close-btn-notify cursor "></i>
                                    </div>

                                    <ul class="notifications-list px-0">

                                        <li class="p-3">
                                            <a href="#">
                                                <p class="mb-0 text-gray">
                                                    لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج
                                                    أليايت,سيت دو أيوسمود تيمبور
                                                </p>
                                                <p class="mb-0  pt-1 text-gray-4"> الاحد 14 فبراير 2023
                                                </p>
                                            </a>
                                        </li>
                                        <li class="p-3">
                                            <a href="#">
                                                <p class="mb-0 text-gray">
                                                    لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج
                                                    أليايت,سيت دو أيوسمود تيمبور
                                                </p>
                                                <p class="mb-0  pt-1 text-gray-4"> الاحد 14 فبراير 2023
                                                </p>
                                            </a>
                                        </li>
                                        <li class="p-3 ">
                                            <a href="#">
                                                <p class="mb-0 text-gray">
                                                    لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج
                                                    أليايت,سيت دو أيوسمود تيمبور
                                                </p>
                                                <p class="mb-0  pt-1 text-gray-4"> الاحد 14 فبراير 2023
                                                </p>
                                            </a>
                                        </li>

                                    </ul>

                                </div>

                                @if(!empty(auth()->user()))

                                    <div class="box-notifications box-notifications-profile  bg-white"
                                         id="box-notifications-profile">
                                        <div class="d-flex justify-content-start align-items-center close-notify">
                                            <i class="fas fa-times close-btn-notify-profile cursor "></i>
                                        </div>

                                        <ul class="notifications-list px-0">

                                            <li class="p-3">
                                                <a href="{{route('updateprofile',auth()->user()->id)}}">


                                                    @lang('site.profiles')


                                                </a>
                                            </li>

                                            <li class="p-3">
                                                <a href="{{route('myfavouriteAll')}}">


                                                    @lang('site.favourite')


                                                </a>
                                            </li>
                                            <li class="p-3">
                                                <a href="{{route('mybookingAll')}}">
                                                    @lang('site.My bookings')
                                                </a>
                                            </li>
                                            <li class="p-3 ">
                                                <a href="{{route('logout')}}">
                                                    @lang('site.logout')
                                                </a>
                                            </li>

                                        </ul>

                                    </div>
                                @endif

                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--lower header-->
    <section class="lower-header">
        <div class="container w-100">
            <div class="row justify-content-between align-items-center my-2">
                <div class="col-8">
                    <ul class="navbar-nav d-flex align-items-center flex-lg-row position-relative">
                        <li class="nav-link">
                            <a href="{{route('invst.home')}}" class="pe-0"> @lang('site.home') </a>
                        </li>
                        <li class="nav-link">
                            <a href="#" class="pe-0"> @lang('site.advertising') </a>
                        </li>
                        <li class="nav-link">
                            <a href="#" class="pe-0"> @lang('site.bookings') </a>
                        </li>
                        <li class="nav-link">
                            <a href="#" class="pe-0"> @lang('site.commissions') </a>
                        </li>
                        <li class="nav-link">
                            <a href="#" class="pe-0"> @lang('site.profiles') </a>
                        </li>
                        <li class="nav-link">
                            <a href="#" class="pe-0"> @lang('site.commissions') </a>
                        </li>
                        
                    </ul>
                </div>

                <div class="col-4">
                    <div class="d-flex justify-content-end nav-section">
                        <nav class="navbar navbar-expand-lg">
                            <div class="collapse navbar-collapse">
                                <ul class="navbar-nav align-items-center">
                                    <li class="nav-link ms-3">
                                        <a href="javascript:void(0)" class="d-flex align-items-center"
                                           data-bs-toggle="modal"
                                           data-bs-target="#helpModal">
                                            <div class=" ps-1">
                                                <i class="far fa-question-circle"></i>
                                            </div>
                                            <div>@lang('site.help')</div>
                                        </a>
                                    </li>
                                    <li class="nav-link">
                                        <a href="javascript:void(0)" class="dropdown d-flex align-items-center"
                                           id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false">
                                            <div class="ps-1"><img src="{{FRONTASSETS}}/images/nav-icons/flag-ar.svg"
                                                                   alt="lang" loading="lazy"/></div>
                                            <div> @lang('site.language')</div>
                                            <div class="arrow-down">
                                                <i class="fas fa-chevron-down"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu lang-dropdown" aria-labelledby="dropdownMenuButton4">
                                            <ul class="sub-menu__sub-list px-0 list-unstyled">
                                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode =>
                                                $properties)

                                                    @if($properties['native']=='English')

                                                        <li class="sub-menu__sub-item pb-2">
                                                            <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                                               class="sub-menu-link">
                                                                <div class="d-flex align-items-center">
                                                                    <div>
                                                                        <img
                                                                            src="{{FRONTASSETS}}/images/nav-icons/flag-en.png"
                                                                            alt="lang-icon" class="ps-2"
                                                                            loading="lazy"/>
                                                                    </div>
                                                                    <div>{{ $properties['native'] }}</div>
                                                                </div>
                                                            </a>

                                                        </li>
                                                    @else
                                                        <li class="sub-menu__sub-item pb-2">

                                                            <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                                               class="sub-menu-link">
                                                                <div class="d-flex align-items-center">
                                                                    <div>
                                                                        <img
                                                                            src="{{FRONTASSETS}}/images/nav-icons/flag-ar.svg"
                                                                            alt="lang-icon" class="ps-2"/>
                                                                    </div>
                                                                    <div>{{ $properties['native'] }}</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>

<!-- Modal Help -->
<form class="formregister" id="formregister">
    <div
        class="modal fade modal-custom modal-height-mobile"
        id="helpModal"
        tabindex="-1"
        aria-labelledby="helpModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <button
                    type="button"
                    class="close-modal d-flex justify-content-center align-items-center"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="32"
                        height="32"
                        viewBox="0 0 32 32"
                        fill="none"
                    >
                        <path
                            d="M24.3998 7.61339C24.2765 7.48978 24.1299 7.39172 23.9686 7.32481C23.8073 7.2579 23.6344 7.22346 23.4598 7.22346C23.2852 7.22346 23.1123 7.2579 22.951 7.32481C22.7897 7.39172 22.6432 7.48978 22.5198 7.61339L15.9998 14.1201L9.47981 7.60005C9.35637 7.47661 9.20982 7.37869 9.04853 7.31188C8.88725 7.24508 8.71438 7.21069 8.53981 7.21069C8.36524 7.21069 8.19237 7.24508 8.03109 7.31188C7.8698 7.37869 7.72325 7.47661 7.59981 7.60005C7.47637 7.7235 7.37845 7.87004 7.31164 8.03133C7.24483 8.19261 7.21045 8.36548 7.21045 8.54005C7.21045 8.71463 7.24483 8.88749 7.31164 9.04878C7.37845 9.21006 7.47637 9.35661 7.59981 9.48005L14.1198 16.0001L7.59981 22.5201C7.47637 22.6435 7.37845 22.79 7.31164 22.9513C7.24483 23.1126 7.21045 23.2855 7.21045 23.4601C7.21045 23.6346 7.24483 23.8075 7.31164 23.9688C7.37845 24.1301 7.47637 24.2766 7.59981 24.4001C7.72325 24.5235 7.8698 24.6214 8.03109 24.6882C8.19237 24.755 8.36524 24.7894 8.53981 24.7894C8.71438 24.7894 8.88725 24.755 9.04853 24.6882C9.20982 24.6214 9.35637 24.5235 9.47981 24.4001L15.9998 17.8801L22.5198 24.4001C22.6433 24.5235 22.7898 24.6214 22.9511 24.6882C23.1124 24.755 23.2852 24.7894 23.4598 24.7894C23.6344 24.7894 23.8072 24.755 23.9685 24.6882C24.1298 24.6214 24.2764 24.5235 24.3998 24.4001C24.5233 24.2766 24.6212 24.1301 24.688 23.9688C24.7548 23.8075 24.7892 23.6346 24.7892 23.4601C24.7892 23.2855 24.7548 23.1126 24.688 22.9513C24.6212 22.79 24.5233 22.6435 24.3998 22.5201L17.8798 16.0001L24.3998 9.48005C24.9065 8.97339 24.9065 8.12005 24.3998 7.61339Z"
                            fill="white"
                        />
                    </svg>
                </button>

                <div
                    class="modal-body help-body d-lg-flex justify-content-lg-between"
                >


                    <div class=" my-lg-5 my-3 help-content">
                        <div
                            class="row d-flex justify-content-center align-items-center h-100"
                        >
                            <div class="col-md-10 col-10 my-lg-5 my-2">


                                <h2 class="fw-bold login-title mb-5"> @lang('site.Report any problem')</h2>

                                <div class="emailcont">
                                    <ul class="register_errors"></ul>
                                </div>
                                <div class="emailcont">
                                    <label for="frm-input1" class="pb-2">@lang('site.name')</label>
                                    <input
                                        type="text"
                                        class="form-control frm-input mb-3 name1"
                                        id="name"
                                        name="name"
                                        placeholder=" {{trans('site.Enter the full name')}}"
                                    />

                                </div>
                                <div class="emailcont">
                                    <label for="frm-input2" class="pb-2"> @lang('site.phone')</label>
                                    <input
                                        type="text"
                                        class="form-control frm-input mb-3 phone"
                                        id="phone"
                                        name="phone"
                                        placeholder="{{trans('site.Enter the mobile number')}}"
                                    />

                                </div>
                                <div class="emailcont">
                                    <label for="frm-input3">@lang('site.contact_message')</label>
                                    <textarea class="form-control txtarea-booking px-3 py-2 mt-2 message" name="message"
                                              placeholder="{{trans('site.Enter what you want to tell us')}} " rows="4"
                                              id="message"></textarea>

                                </div>

                                <button type="submit" class="mt-4 btn-login formregisters"
                                > @lang('site.send')</button>

                            </div>
                        </div>
                    </div>
                    <div class="side-help-image"></div>
                </div>
            </div>
        </div>
    </div>
</form>



@yield('content')

</body>

{!! footerweb() !!}


<!-- JQuery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"
        integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{FRONTASSETS}}/vendor/bootstrap/js/bootstrap.js"></script>
<!-- JQuery-->
<script src="{{FRONTASSETS}}/js/jquery.min.js"></script>
<!--timepicker-->
<script src="{{FRONTASSETS}}/js/jquery-timepicker/js/jquery.timepicker.js"></script>
<!--datepicker-->
<script src="{{FRONTASSETS}}/js/datepicker/js/datepicker.min.js"></script>
<!--start rating-->
<script src="{{FRONTASSETS}}/js/dist/jquery.star-rating-svg.js"></script>
<!-- Owl Carousel -->
<script src="{{FRONTASSETS}}/js/OwlCarousel/js/owl.carousel.min.js"></script>
{{--<!-- intl-tel-input -->--}}
{{--<script src="{{FRONTASSETS}}/js/intl-tel-input/js/intlTelInput.min.js"></script>--}}
<!--select 2-->
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script>

<script src="{{FRONTASSETS}}/js/select2/js/select2.min.js"></script>
<script src="{{FRONTASSETS}}/js/dist/jquery-ui.js"></script>
<!--nouislider-->
<script src="{{FRONTASSETS}}/js/dist/nouislider.min.js"></script>
<!-- Main JS -->
<script src="{{FRONTASSETS}}/js/script.js"></script>
<script src="{{FRONTASSETS}}/js/custom-rating.js"></script>
{{--   <script src="{{FRONTASSETS}}/js/sliderPrice.js"></script>--}}
<script src="{{FRONTASSETS}}/js/filter-menu-mobile.js"></script>
<!-- Main JS -->
@yield('js')
@yield('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

</body>
</html>
