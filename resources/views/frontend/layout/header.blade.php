<header class="position-relative web-view">
    <!-- upper Header -->
    <section class="upper-header d-flex justify-content-between">
        <div class="container w-100">
            <div class="row justify-content-between align-items-center my-2">
                <div class="col-4">
                    <a href="#">
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
                            <a href="{{route('Home')}}" class="pe-0"> @lang('site.home') </a>
                        </li>
                        <li class="nav-link">
                            <a href="javascript:void(0)" class="dropdown d-flex align-items-center"
                               id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="ps-1 car-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none">
                                        <g clip-path="url(#clip0_327_667)">
                                            <path
                                                d="M14.5715 23.1429H0.857178V6.85718L7.71432 0.857178L14.5715 6.85718V23.1429ZM14.5715 23.1429H23.1429V11.1429H14.5715M7.71432 23.1429V19.7143M5.14289 14.5715H10.2857M5.14289 9.42861H10.2857"
                                                stroke="white" stroke-width="2.28571" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_327_667">
                                                <rect width="24" height="24" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div>@lang('site.Aqar Booking') </div>
                                <div class="arrow-down">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <ul class="sub-menu__sub-list px-0 list-unstyled">

                                    @foreach($CategoriesAquar as $category)
                                        <li class="sub-menu__sub-item pb-2">
                                            <a href="{{route('aquars',$category->id)}}" class="sub-menu-link">
                                                <div class="d-flex align-items-center">
                                                    <div class="arrow-lft">
                                                        <i class="fas fa-arrow-left"></i>
                                                        <!-- <img src="{{asset('images/categories/'.$category->icon)}}"
                                                        width="50px" height="50px" loading="lazy"
                                                        onerror="this.src='{{asset('images/categories/default.jpg')}}'"> -->

                                                    </div>
                                                    <div class="droptxt">{{$category->name ?? ''}}</div>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>

                            </div>
                        </li>
                        <li class="nav-link">
                            <a href="javascript:void(0)" class="dropdown d-flex align-items-center"
                               id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="ps-1 car-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30"
                                         fill="none">
                                        <path
                                            d="M16.4256 20.0001H10.6026M22.2486 20.0001H25.7424V16.0626C25.7432 15.7651 25.6451 15.4771 25.4658 15.2502C25.2865 15.0234 25.0377 14.8727 24.7641 14.8251L18.7548 13.7501L15.6104 9.25006C15.5019 9.09482 15.3612 8.96881 15.1995 8.88203C15.0378 8.79524 14.8595 8.75006 14.6787 8.75006H6.22373C5.78965 8.74682 5.36337 8.87384 4.99296 9.1168C4.62256 9.35975 4.32279 9.70897 4.12746 10.1251L3.19578 12.1626C2.70682 13.2058 2.4516 14.3572 2.45044 15.5251V20.0001H4.77963"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path
                                            d="M7.69103 23.75C9.299 23.75 10.6025 22.3509 10.6025 20.625C10.6025 18.8991 9.299 17.5 7.69103 17.5C6.08306 17.5 4.77954 18.8991 4.77954 20.625C4.77954 22.3509 6.08306 23.75 7.69103 23.75Z"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path
                                            d="M19.337 23.75C20.945 23.75 22.2485 22.3509 22.2485 20.625C22.2485 18.8991 20.945 17.5 19.337 17.5C17.7291 17.5 16.4255 18.8991 16.4255 20.625C16.4255 22.3509 17.7291 23.75 19.337 23.75Z"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div> @lang('site.Car Booking')</div>
                                <div class="arrow-down">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <ul class="sub-menu__sub-list px-0 list-unstyled">
                                    @foreach($CategoriesCar as $cat)
                                        <li class="sub-menu__sub-item pb-2">
                                            <a href="{{route('carscategories',$cat->id)}}" class="sub-menu-link">
                                                <div class="d-flex align-items-center">
                                                    <div class="arrow-lft">
                                                        <i class="fas fa-arrow-left"></i>

                                                        <!-- <img src="{{asset('images/categories/'.$cat->icon)}}" alt="car-icon"
                                                        width="30px" height="30px"
                                                        onerror="this.src='{{asset('images/categories/default.jpg')}}'" loading="lazy"> -->
                                                    </div>
                                                    <div class="droptxt">{{$cat->name ?? ''}}</div>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                        <li class="nav-link">
                            <a href="javascript:void(0)" class="dropdown d-flex align-items-center"
                               id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="ps-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                         fill="none">
                                        <path
                                            d="M18.5962 7.91002C18.5662 7.91002 18.5462 7.91002 18.5162 7.91002H18.4662C16.5762 7.85002 15.1662 6.39001 15.1662 4.59001C15.1662 2.75001 16.6662 1.26001 18.4962 1.26001C20.3262 1.26001 21.8262 2.76001 21.8262 4.59001C21.8162 6.40001 20.4062 7.86001 18.6062 7.92001C18.6062 7.91001 18.6062 7.91002 18.5962 7.91002ZM18.4962 2.75002C17.4862 2.75002 16.6662 3.57002 16.6662 4.58002C16.6662 5.57002 17.4362 6.37002 18.4262 6.41002C18.4362 6.40002 18.5162 6.40002 18.6062 6.41002C19.5762 6.36002 20.3262 5.56002 20.3362 4.58002C20.3362 3.57002 19.5162 2.75002 18.4962 2.75002Z"
                                            fill="white"/>
                                        <path
                                            d="M18.6064 15.2801C18.2164 15.2801 17.8264 15.2501 17.4364 15.1801C17.0264 15.1101 16.7564 14.7201 16.8264 14.3101C16.8964 13.9001 17.2864 13.6301 17.6964 13.7001C18.9264 13.9101 20.2264 13.6802 21.0964 13.1002C21.5664 12.7902 21.8164 12.4001 21.8164 12.0101C21.8164 11.6201 21.5564 11.2401 21.0964 10.9301C20.2264 10.3501 18.9064 10.1201 17.6664 10.3401C17.2564 10.4201 16.8664 10.1401 16.7964 9.73015C16.7264 9.32015 16.9964 8.93015 17.4064 8.86015C19.0364 8.57015 20.7264 8.88014 21.9264 9.68014C22.8064 10.2701 23.3164 11.1101 23.3164 12.0101C23.3164 12.9001 22.8164 13.7502 21.9264 14.3502C21.0164 14.9502 19.8364 15.2801 18.6064 15.2801Z"
                                            fill="white"/>
                                        <path
                                            d="M6.56637 7.91C6.55637 7.91 6.54637 7.91 6.54637 7.91C4.74637 7.85 3.33637 6.39 3.32637 4.59C3.32637 2.75 4.82637 1.25 6.65637 1.25C8.48637 1.25 9.98637 2.75 9.98637 4.58C9.98637 6.39 8.57637 7.85 6.77637 7.91L6.56637 7.16L6.63637 7.91C6.61637 7.91 6.58637 7.91 6.56637 7.91ZM6.66637 6.41C6.72637 6.41 6.77637 6.41 6.83637 6.42C7.72637 6.38 8.50637 5.58 8.50637 4.59C8.50637 3.58 7.68637 2.75999 6.67637 2.75999C5.66637 2.75999 4.84637 3.58 4.84637 4.59C4.84637 5.57 5.60637 6.36 6.57637 6.42C6.58637 6.41 6.62637 6.41 6.66637 6.41Z"
                                            fill="white"/>
                                        <path
                                            d="M6.55639 15.2801C5.32639 15.2801 4.14639 14.9502 3.23639 14.3502C2.35639 13.7602 1.84639 12.9101 1.84639 12.0101C1.84639 11.1201 2.35639 10.2701 3.23639 9.68014C4.43639 8.88014 6.12639 8.57015 7.75639 8.86015C8.16639 8.93015 8.43639 9.32015 8.36639 9.73015C8.29639 10.1401 7.90639 10.4201 7.49639 10.3401C6.25639 10.1201 4.94639 10.3501 4.06639 10.9301C3.59639 11.2401 3.34639 11.6201 3.34639 12.0101C3.34639 12.4001 3.60639 12.7902 4.06639 13.1002C4.93639 13.6802 6.23639 13.9101 7.46639 13.7001C7.87639 13.6301 8.26639 13.9101 8.33639 14.3101C8.40639 14.7201 8.13639 15.1101 7.72639 15.1801C7.33639 15.2501 6.94639 15.2801 6.55639 15.2801Z"
                                            fill="white"/>
                                        <path
                                            d="M12.5962 15.38C12.5662 15.38 12.5462 15.38 12.5162 15.38H12.4662C10.5762 15.32 9.16621 13.86 9.16621 12.06C9.16621 10.22 10.6662 8.72998 12.4962 8.72998C14.3262 8.72998 15.8262 10.23 15.8262 12.06C15.8162 13.87 14.4062 15.33 12.6062 15.39C12.6062 15.38 12.6062 15.38 12.5962 15.38ZM12.4962 10.22C11.4862 10.22 10.6662 11.04 10.6662 12.05C10.6662 13.04 11.4362 13.84 12.4262 13.88C12.4362 13.87 12.5162 13.87 12.6062 13.88C13.5762 13.83 14.3262 13.03 14.3362 12.05C14.3362 11.05 13.5162 10.22 12.4962 10.22Z"
                                            fill="white"/>
                                        <path
                                            d="M12.5962 22.76C11.3962 22.76 10.1962 22.45 9.26617 21.82C8.38617 21.23 7.87617 20.39 7.87617 19.49C7.87617 18.6 8.37617 17.74 9.26617 17.15C11.1362 15.91 14.0662 15.91 15.9262 17.15C16.8062 17.74 17.3162 18.58 17.3162 19.48C17.3162 20.37 16.8162 21.23 15.9262 21.82C14.9962 22.44 13.7962 22.76 12.5962 22.76ZM10.0962 18.41C9.62618 18.72 9.37617 19.11 9.37617 19.5C9.37617 19.89 9.63618 20.27 10.0962 20.58C11.4462 21.49 13.7362 21.49 15.0862 20.58C15.5562 20.27 15.8062 19.88 15.8062 19.49C15.8062 19.1 15.5462 18.72 15.0862 18.41C13.7462 17.5 11.4562 17.51 10.0962 18.41Z"
                                            fill="white"/>
                                    </svg>
                                </div>
                                <div>
                                    @lang('site.another serviecs')
                                </div>
                                <div class="arrow-down">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-fullwidth" aria-labelledby="dropdownMenuButton3">
                                <ul class="sub-menu__sub-list px-0 list-unstyled">

                                    @foreach($CategoriesPlaces as $categoryplace)
                                        <li class="sub-menu__sub-item pb-2">
                                            <a href="{{route('subcategories',['id'=>$categoryplace->id, 'city_id'=>0])}}"
                                               class="sub-menu-link">
                                                <div class="d-flex align-items-center">
                                                    <div class="arrow-lft">
                                                        <i class="fas fa-arrow-left"></i>
                                                        <!-- <img src="{{asset('images/categories/'.$categoryplace->icon)}}"
                                                        alt="car-icon" width="30px" height="30px" loading="lazy"
                                                        onerror="this.src='{{asset('images/categories/default.jpg')}}'"> -->

                                                    </div>
                                                    <div class="droptxt">{{$categoryplace->name ?? ''}}</div>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
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

