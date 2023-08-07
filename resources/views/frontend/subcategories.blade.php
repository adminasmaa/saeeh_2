@extends('layouts.main_frontend')
@section('content')

    <div class="overlay-mobile"></div>


    <main>
        <!-- Desktop Breadcrumb -->
        <section class="py-md-4 py-2">
            <div class="container">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)"> @lang('site.home') </a>
                        </li>
                        <li>
                <span><svg xmlns="http://www.w3.org/2000/svg" width="9" height="15" viewBox="0 0 9 15" fill="none">
                    <path
                        d="M6.71329 13.9459L0.745584 7.99587C0.67475 7.92503 0.624459 7.8483 0.594709 7.76566C0.564959 7.68302 0.55032 7.59448 0.550792 7.50003C0.550792 7.40559 0.565431 7.31705 0.594709 7.23441C0.623987 7.15177 0.674278 7.07503 0.745584 7.0042L6.71329 1.03649C6.87857 0.871213 7.08517 0.788574 7.33308 0.788574C7.581 0.788574 7.7935 0.877116 7.97058 1.0542C8.14767 1.23128 8.23621 1.43788 8.23621 1.67399C8.23621 1.9101 8.14767 2.1167 7.97058 2.29378L2.76433 7.50003L7.97058 12.7063C8.13586 12.8716 8.2185 13.0753 8.2185 13.3176C8.2185 13.5598 8.12996 13.7693 7.95288 13.9459C7.77579 14.1229 7.56919 14.2115 7.33308 14.2115C7.09697 14.2115 6.89038 14.1229 6.71329 13.9459Z"
                        fill="#005D9F"></path>
                  </svg>
                </span>
                        </li>

                        </li>
                        <li class="breadcrumb-item text-gray-4" aria-current="page">
                            {{$category->name ?? ''}}
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- section -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <section class="position-relative">
                            <div class="country-image">
                                <img class="card-img" src="{{asset('images/categories/'.$category->image)}}"
                                     alt="Card image cap"
                                     onerror="this.src='{{asset('images/categories/default.jpg')}}'"
                                >
                            </div>
                            <div class="country-container d-flex align-items-center">
                                <div class="w-100">
                                    <div>
                                        <!-- <h2 class="pb-4">
                                            نقدم لك أشهر المطاعم بخصومات
                                            تصل الي 10% </h2> -->
                                        <div class="form-group  position-relative">
                                            <input type="search" class="form-control search-country"
                                                   placeholder="ابحث عن دولتك المفضلة" id="search" name="q">
                                            <div class="search-c-icon d-flex justify-content-center align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M10.2499 2C11.8178 1.99983 13.3534 2.44648 14.6766 3.28763C15.9999 4.12878 17.056 5.3296 17.7213 6.74941C18.3866 8.16922 18.6335 9.74922 18.4331 11.3043C18.2328 12.8594 17.5934 14.3252 16.5899 15.53L22.2799 21.22C22.3786 21.3117 22.4508 21.4283 22.4888 21.5575C22.5268 21.6868 22.5293 21.8239 22.4959 21.9544C22.4625 22.0849 22.3946 22.204 22.2992 22.2992C22.2038 22.3943 22.0845 22.462 21.9539 22.495C21.8235 22.5284 21.6865 22.5261 21.5574 22.4883C21.4282 22.4504 21.3116 22.3785 21.2199 22.28L15.5299 16.59C14.5117 17.4378 13.3044 18.0278 12.0099 18.3103C10.7155 18.5928 9.37204 18.5594 8.09325 18.2128C6.81446 17.8663 5.63794 17.2169 4.66321 16.3195C3.68847 15.4222 2.9442 14.3033 2.49334 13.0574C2.04249 11.8116 1.89831 10.4755 2.07301 9.16216C2.24771 7.84883 2.73615 6.59689 3.49701 5.51224C4.25787 4.42759 5.26876 3.54214 6.44419 2.93079C7.61961 2.31944 8.92499 2.00017 10.2499 2ZM3.49989 10.25C3.49989 11.1364 3.67448 12.0142 4.0137 12.8331C4.35292 13.6521 4.85012 14.3962 5.47692 15.023C6.10371 15.6498 6.84783 16.147 7.66678 16.4862C8.48572 16.8254 9.36347 17 10.2499 17C11.1363 17 12.0141 16.8254 12.833 16.4862C13.652 16.147 14.3961 15.6498 15.0229 15.023C15.6497 14.3962 16.1469 13.6521 16.4861 12.8331C16.8253 12.0142 16.9999 11.1364 16.9999 10.25C16.9999 8.45979 16.2887 6.7429 15.0229 5.47703C13.757 4.21116 12.0401 3.5 10.2499 3.5C8.45968 3.5 6.74279 4.21116 5.47692 5.47703C4.21105 6.7429 3.49989 8.45979 3.49989 10.25Z"
                                                        fill="white"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <!-- /section -->
        <section class="py-5">
            <div class="container w-100">
                <div class="row pb-3">
                    <div class="col-12 d-flex justify-content-between">
                        <h2 class="country-title"> @lang('site.all') @lang('site.categories')</h2>

                    </div>
                </div>
                <div class="row">

                    @foreach($subcategories as $subcat)
                        <div class="col-lg-3 col-sm-6 col-12">
                            <a href="{{route('subcategories',$subcat->id)}}">
                                <div class="card-restaurant mb-4 position-relative">
                                    {{--                                <img src="{{FRONTASSETS}}/images/restaurants/restaurant-cat.png" alt="Card image cap"--}}
                                    {{--                                     class="restaurant-image">--}}
                                    <img class="restaurant-image" src="{{asset('images/categories/'.$subcat->image)}}"
                                         alt="Card image cap"
                                         onerror="this.src='{{asset('images/categories/default.jpg')}}'" >
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>


                <div class="row">
                    <div class="col-12">


                        @if(!empty($subcategories->appends(request()->query())->links()))
                            <div class="card card-department round-border my-4 p-3">
                                <nav
                                    class="department-list-pagination d-md-flex justify-content-md-between align-items-center"
                                >
                                    <ul
                                        class="pagination mb-0 justify-content-lg-start justify-content-center"
                                    >
                                        <li class="page-item">
                                            <div>{{ $subcategories->appends(request()->query())->links()}} </div>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <section class="d-lg-flex">
            <div class="right-container bg-main d-flex align-items-center py-lg-0 py-4">
                <div>
                    <h2>@lang('site.freediscount') </h2>
                    <p>@lang('site.loginSignup') www.saeeh.com</p>
                    <div class="d-flex justify-content-between py-3">
                        <div class="btn-footer-auth d-flex align-items-center justify-content-center">
                            <a href="#">  @lang('site.register') </a>
                        </div>
                        <div class="btn-out-footer-auth d-flex align-items-center justify-content-center">
                            <a href="#">@lang('site.login') </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="left-container" style="
            background-image: url('{{FRONTASSETS}}/images/countries/footer-image.png');
          "></div>
        </section>
    </main>



@endsection
