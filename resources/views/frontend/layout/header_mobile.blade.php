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
                        <img src="{{FRONTASSETS}}/images/logo.svg" alt="logo" class="img-logo-mobile" />
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
        </div>
    </div>
</header>
<div class="side-menu-wrap">
    <nav class="side-menu-nav">
        <ul class="main-menu d-flex flex-column flex-lg-row align-items-lg-center list-unstyled p-0 m-0">
            <li class="nav-item">
                <a class="nav-link active" href="{{route('Home')}}">@lang('site.home') </a>
            </li>

            <li>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div id="flush-headingOne">
                        <a class="accordion-button collapsed d-flex justify-content-between" href="#"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                            aria-controls="flush-collapseOne">
                            @lang('site.Aqar Booking')
                            <i class="fa fa-chevron-down"></i>
                        </a>
                    </div>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul class="submenu list-unstyled">

                                @foreach($CategoriesAquar as $category)
                                <li class="pb-2">
                                    <a href="{{route('aquars',$category->id)}}">
                                        <div class="d-flex align-items-center">
                                            <div class="arrow-ico">
                                                <i class="fas fa-arrow-left"></i>
                                            </div>
                                            <div>{{$category->name ?? ''}}</div>
                                        </div>
                                    </a>
                                </li>

                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="accordion accordion-flush" id="accordionFlushExample2">
                    <div id="flush-headingTwo">
                        <a class="accordion-button collapsed d-flex justify-content-between" href="#"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                            aria-controls="flush-collapseTwo">
                            @lang('site.Car Booking')
                            <i class="fa fa-chevron-down"></i>
                        </a>
                    </div>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                        data-bs-parent="#accordionFlushExample2">
                        <div class="accordion-body">
                            <ul class="submenu list-unstyled">
                                @foreach($CategoriesCar as $cat)
                                <li class="pb-2">
                                    <a href="{{route('carscategories',$cat->id)}}">
                                        <div class="d-flex align-items-center">
                                            <div class="arrow-ico">
                                                <i class="fas fa-arrow-left"></i>
                                            </div>
                                            <div>{{$cat->name ?? ''}}</div>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="accordion accordion-flush" id="accordionFlushExample3">
                    <div id="flush-headingThree">
                        <a class="accordion-button collapsed d-flex justify-content-between" href="#"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            @lang('site.another serviecs')
                            <i class="fa fa-chevron-down"></i>
                        </a>
                    </div>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample3">
                        <div class="accordion-body">
                            <ul class="submenu list-unstyled">
                                @foreach($CategoriesPlaces as $categoryplace)
                                <li class="pb-2">
                                    <a href="{{route('subcategories',['id'=>$categoryplace->id, 'city_id'=>0])}}">
                                        <div class="d-flex align-items-center">
                                            <div class="arrow-ico">
                                                <i class="fas fa-arrow-left"></i>
                                            </div>
                                            <div>{{$categoryplace->name ?? ''}}</div>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
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
                                                <img src="{{FRONTASSETS}}/images/nav-icons/flag-en.png" alt="lang-icon"
                                                    class="ps-2" />
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
                                                <img src="{{FRONTASSETS}}/images/nav-icons/flag-ar.svg" alt="lang-icon"
                                                    class="ps-2" />
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
        </ul>
        <div class="row">
            <div class="side-menu-btns-box w-100 d-flex justify-content-center">
                <div class="col-10">
                    <ul class="list-unstyled">
                        <li class="btn-saeeh btn-space d-flex justify-content-center align-items-center">
                            <a href="{{route('registers')}}" class=" border-0 btn-frm-owner" data-bs-toggle="modal"
                                data-bs-target="#registerModal">
                                @lang('site.create account')
                            </a>
                        </li>
                        <li class="btn-outline-saeeh d-flex justify-content-center align-items-center">
                            <a href="{{route('sitelogin')}}" class="border-0 btn-frm-owner" data-bs-toggle="modal"
                                data-bs-target="#loginModal">
                                @lang('site.login')
                            </a>
                        </li>
                    </ul>
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