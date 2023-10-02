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
                        <a class="nav-link" href="javascript:void(0)">
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
                  <p  class="mb-0  pt-1 text-gray-4">  الاحد 14 فبراير 2023
                  </p>
                </a>
              </li>
              <li class="p-3">
                <a href="#">
                  <p class="mb-0 text-gray">
                    لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج
                    أليايت,سيت دو أيوسمود تيمبور
                  </p>
                  <p  class="mb-0  pt-1 text-gray-4">  الاحد 14 فبراير 2023
                  </p>
                </a>
              </li>
              <li class="p-3 ">
                <a href="#">
                  <p class="mb-0 text-gray">
                    لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج
                    أليايت,سيت دو أيوسمود تيمبور
                  </p>
                  <p  class="mb-0  pt-1 text-gray-4">  الاحد 14 فبراير 2023
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
                                            <div class="pb-1 ps-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <path
                                                        d="M1.25 15.4166V3.33325M1.25 15.4166C1.25 15.4166 1.25 17.9166 0 17.9166M1.25 15.4166H18.75M18.75 15.4166C18.75 15.4166 18.75 17.9166 20 17.9166M18.75 15.4166V10.8333C18.75 10.0597 18.4427 9.31784 17.8957 8.77086C17.3487 8.22388 16.6069 7.91659 15.8333 7.91659H8.75V11.2499M1.25 12.9166H18.75M7.08333 9.49992C7.08333 9.49992 6.25 10.8333 5.20833 10.8333C4.82156 10.8333 4.45063 10.6796 4.17714 10.4061C3.90365 10.1326 3.75 9.76169 3.75 9.37492C3.75 8.56992 4.40333 7.91992 5.20833 7.91992C6.25 7.91992 7.08333 9.24992 7.08333 9.24992V9.49992Z"
                                                        stroke="#FF8600" />
                                                </svg>
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
                                            <div>
{{--                                                <img src="./assets/images/car-icons/car-icon-1.png" alt="car-icon"--}}
{{--                                                    class="ps-2" />--}}
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
                                            <div class="pb-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M11.4 3.59998C11.5404 3.59994 11.6764 3.64915 11.7843 3.73905C11.8922 3.82895 11.9651 3.95385 11.9904 4.09198L12 4.19998V7.79998C12.0001 8.49157 11.7613 9.16198 11.324 9.69772C10.8866 10.2335 10.2776 10.6017 9.6 10.74V19.8C9.60028 19.9499 9.54441 20.0945 9.44339 20.2053C9.34238 20.3161 9.20354 20.3851 9.05421 20.3986C8.90489 20.4122 8.75591 20.3693 8.6366 20.2785C8.5173 20.1877 8.43631 20.0555 8.4096 19.908L8.4 19.8V10.74C7.757 10.6085 7.17483 10.2698 6.74266 9.77588C6.31049 9.28194 6.05215 8.65996 6.0072 8.00518L6 7.79998V4.19998C5.99973 4.05005 6.0556 3.90544 6.15661 3.79464C6.25763 3.68384 6.39646 3.61488 6.54579 3.60133C6.69511 3.58779 6.84409 3.63064 6.9634 3.72145C7.08271 3.81226 7.16369 3.94445 7.1904 4.09198L7.2 4.19998V7.79998C7.19981 8.17237 7.31511 8.53566 7.53003 8.83977C7.74496 9.14388 8.04891 9.37385 8.4 9.49798V4.19998C8.39972 4.05005 8.4556 3.90544 8.55661 3.79464C8.65763 3.68384 8.79646 3.61488 8.94579 3.60133C9.09511 3.58779 9.24409 3.63064 9.3634 3.72145C9.48271 3.81226 9.56369 3.94445 9.5904 4.09198L9.6 4.19998V9.49678C10.2456 9.26878 10.722 8.68318 10.7916 7.97878L10.8 7.79998V4.19998C10.8 4.04085 10.8632 3.88824 10.9757 3.77572C11.0883 3.6632 11.2409 3.59998 11.4 3.59998ZM17.4 3.59998C17.5404 3.59994 17.6764 3.64915 17.7843 3.73905C17.8922 3.82895 17.9651 3.95385 17.9904 4.09198L18 4.19998V19.8C18.0003 19.9499 17.9444 20.0945 17.8434 20.2053C17.7424 20.3161 17.6035 20.3851 17.4542 20.3986C17.3049 20.4122 17.1559 20.3693 17.0366 20.2785C16.9173 20.1877 16.8363 20.0555 16.8096 19.908L16.8 19.8V13.2H15C14.8596 13.2 14.7236 13.1508 14.6157 13.0609C14.5078 12.971 14.4349 12.8461 14.4096 12.708L14.4 12.6V6.59998C14.4 5.80433 14.7161 5.04127 15.2787 4.47866C15.8413 3.91605 16.6044 3.59998 17.4 3.59998ZM16.8 12V4.90198C16.1544 5.12998 15.678 5.71558 15.6084 6.42118L15.6 6.59998V12H16.8Z"
                                                        fill="#FF8600" />
                                                </svg>
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
                                                <img      src="{{FRONTASSETS}}/images/nav-icons/flag-en.png"  alt="lang-icon"
                                                    class="ps-2" />
                                            </div>
                                            <div>{{ $properties['native'] }}</div>
                                        </div>
                                    </a>
                                </li>
                                    @else
                                <li class="pb-2">
                                    <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" class="sub-menu-link">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <img   src="{{FRONTASSETS}}/images/nav-icons/flag-ar.svg" alt="lang-icon"
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
