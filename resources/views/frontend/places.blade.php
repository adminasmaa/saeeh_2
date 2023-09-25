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
                            <a href="{{route('Home')}}"> @lang('site.home') </a>
                        </li>
                        <li>
                  <span>
                     <svg xmlns="http://www.w3.org/2000/svg" width="9" height="15" viewBox="0 0 9 15" fill="none">
                        <path
                            d="M6.71329 13.9459L0.745584 7.99587C0.67475 7.92503 0.624459 7.8483 0.594709 7.76566C0.564959 7.68302 0.55032 7.59448 0.550792 7.50003C0.550792 7.40559 0.565431 7.31705 0.594709 7.23441C0.623987 7.15177 0.674278 7.07503 0.745584 7.0042L6.71329 1.03649C6.87857 0.871213 7.08517 0.788574 7.33308 0.788574C7.581 0.788574 7.7935 0.877116 7.97058 1.0542C8.14767 1.23128 8.23621 1.43788 8.23621 1.67399C8.23621 1.9101 8.14767 2.1167 7.97058 2.29378L2.76433 7.50003L7.97058 12.7063C8.13586 12.8716 8.2185 13.0753 8.2185 13.3176C8.2185 13.5598 8.12996 13.7693 7.95288 13.9459C7.77579 14.1229 7.56919 14.2115 7.33308 14.2115C7.09697 14.2115 6.89038 14.1229 6.71329 13.9459Z"
                            fill="#005D9F"></path>
                     </svg>
                  </span>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)"> {{$category->name ?? ''}} </a>
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
                                        <h2 class="pb-md-3 pb-2">
                                            نقدم لك أشهر المطاعم بخصومات تصل الي 10%
                                        </h2>
                                        <div class="form-group mb-4 position-relative">
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
                <div class="row">
                    <div class="col-12">
                        @foreach($places as $place)

                            <div class="card card-department round-border mb-3 p-lg-3 p-2">
                                <div class="row g-0">
                                    <div class="col-lg-4 position-relative">
                                        <div
                                            class="owl-carousel owl-theme department-img-carousel"
                                            dir="ltr"
                                        >
                                            <div class="resro-image">
                                                              <span
                                                                  class="department-like">

<a class="favouritess" id="favouritess{{$place->id}}" data-id="{{$place->id}}"><i
        class=" @if(count(\App\Models\UserPalace::where('palace_id', '=',$place->id)->where('user_id', '=', auth()->user()->id)->get()) > 0) fas @else far @endif  fa-heart "></i></a>



                                                                </span>

                                                {{--                                                        <button class="add-to-wishlist">--}}
                                                {{--                                                            <svg--}}
                                                {{--                                                                xmlns="http://www.w3.org/2000/svg"--}}
                                                {{--                                                                width="24"--}}
                                                {{--                                                                height="24"--}}
                                                {{--                                                                viewBox="0 0 24 24"--}}
                                                {{--                                                                fill="none"--}}
                                                {{--                                                            >--}}
                                                {{--                                                                <path--}}
                                                {{--                                                                    d="M22.1494 2.12177C21.563 1.44911 20.8667 0.915505 20.1003 0.551444C19.334 0.187383 18.5126 0 17.6831 0C16.8535 0 16.0321 0.187383 15.2658 0.551444C14.4994 0.915505 13.8032 1.44911 13.2167 2.12177L11.9997 3.51714L10.7826 2.12177C9.59811 0.763676 7.99153 0.00070395 6.31633 0.000703964C4.64114 0.000703978 3.03455 0.763676 1.85001 2.12177C0.665469 3.47987 1.24812e-08 5.32185 0 7.24249C-1.24812e-08 9.16313 0.665469 11.0051 1.85001 12.3632L3.06705 13.7586L11.9997 24L20.9323 13.7586L22.1494 12.3632C22.7361 11.6909 23.2015 10.8926 23.519 10.0139C23.8366 9.13531 24 8.19356 24 7.24249C24 6.29142 23.8366 5.34967 23.519 4.47104C23.2015 3.59241 22.7361 2.79412 22.1494 2.12177Z"--}}
                                                {{--                                                                    fill="#FF8600"--}}
                                                {{--                                                                />--}}
                                                {{--                                                            </svg>--}}
                                                {{--                                                        </button>--}}
                                                <img
                                                    loading="lazy"


                                                    src="{{asset('images/places/'.$place->display_photo)}}"
                                                    onerror="this.src='{{FRONTASSETS}}/images/restaurants/resto-card-1.png'"
                                                    class="of-cover"
                                                    alt="image 1"
                                                />
                                            </div>
                                            @if(!empty($place->images))
                                                @foreach(explode(',',$place->images) as $image)

                                                    <div class="resro-image">
                                                             <span
                                                                 class="department-like">

<a class="favouritess" id="favouritess{{$place->id}}" data-id="{{$place->id}}"><i
        class=" @if(count(\App\Models\UserPalace::where('palace_id', '=',$place->id)->where('user_id', '=', auth()->user()->id)->get()) > 0) fas @else far @endif  fa-heart "></i></a>



                                                                </span>

                                                        <img
                                                            loading="lazy"


                                                            src="{{asset('images/places/'.$image)}}"
                                                            onerror="this.src='{{FRONTASSETS}}/images/restaurants/resto-card-1.png'"
                                                            class="of-cover"
                                                            alt="image 1"
                                                        />
                                                    </div>
                                                @endforeach
                                            @else

                                                <div class="resro-image">
                                                               <span
                                                                   class="department-like">

<a class="favouritess" id="favouritess{{$place->id}}" data-id="{{$place->id}}"><i
        class=" @if(count(\App\Models\UserPalace::where('palace_id', '=',$place->id)->where('user_id', '=', auth()->user()->id)->get()) > 0) fas @else far @endif  fa-heart "></i></a>



                                                                </span>

                                                    <img
                                                        loading="lazy"


                                                        src="{{FRONTASSETS}}/images/restaurants/resto-card-1.png"

                                                        class="of-cover"
                                                        alt="image 1"
                                                    />
                                                </div>

                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="card-body position-relative">
                                            <div
                                                class="d-md-flex justify-content-md-between align-items-end mb-3 "
                                            >
                                                <h2 class="card-title mb-0">{{$place->name ?? ''}} </h2>
{{--                                                {{$place->id}}--}}
{{--                                                {{count(\App\Models\UserPalace::where('palace_id', '=',$place->id)->where('user_id', '=', auth()->user()->id)->get())}}--}}
                                                <div
                                                    class="d-flex justify-content-md-center align-items-center"
                                                >
                                                    <div class="department-badge bg-main text-white">
                                                        <div class="pt-1">{{$place->PlaceReview->count() ?? 0}}</div>
                                                        <div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="25"
                                                                 height="25" viewBox="0 0 25 25" fill="none">
                                                                <path
                                                                    d="M12.7529 19.6185L20.1689 24.3301L18.2009 15.4501L24.7529 9.47534L16.1249 8.70481L12.7529 0.330078L9.38093 8.70481L0.75293 9.47534L7.30493 15.4501L5.33693 24.3301L12.7529 19.6185Z"
                                                                    fill="white"/>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="number-ads gray-txt">{{$place->placeComments->count() ?? 0}} @lang('site.comments')</div>
                                                </div>
                                            </div>
                                            <div class="d-md-flex justify-content-md-between ">
                                                <div class="gray-txt number-ads">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="16"
                                                        height="20"
                                                        viewBox="0 0 16 20"
                                                        fill="none"
                                                    >
                                                        <path
                                                            d="M8.20799 9.99996C8.54986 9.99996 8.84262 9.83663 9.08628 9.50996C9.32994 9.18329 9.45156 8.79107 9.45115 8.33329C9.45115 7.87496 9.32932 7.48246 9.08566 7.15579C8.842 6.82913 8.54944 6.66607 8.20799 6.66663C7.86612 6.66663 7.57335 6.82996 7.3297 7.15663C7.08604 7.48329 6.96441 7.87551 6.96483 8.33329C6.96483 8.79163 7.08666 9.18413 7.33032 9.51079C7.57398 9.83746 7.86653 10.0005 8.20799 9.99996ZM8.20799 16.125C9.47187 14.5694 10.4094 13.1561 11.0206 11.885C11.6319 10.6138 11.9375 9.48551 11.9375 8.49996C11.9375 6.98607 11.5774 5.74663 10.8572 4.78163C10.137 3.81663 9.2539 3.33385 8.20799 3.33329C7.16166 3.33329 6.2784 3.81607 5.55819 4.78163C4.83799 5.74718 4.4781 6.98663 4.47851 8.49996C4.47851 9.48607 4.78412 10.6147 5.39534 11.8858C6.00656 13.1569 6.94411 14.57 8.20799 16.125ZM8.20799 18.3333C6.54008 16.4305 5.29444 14.6633 4.47105 13.0316C3.64767 11.4 3.23577 9.8894 3.23535 8.49996C3.23535 6.41663 3.73531 4.7569 4.73522 3.52079C5.73514 2.28468 6.89272 1.66663 8.20799 1.66663C9.52366 1.66663 10.6815 2.28468 11.6814 3.52079C12.6813 4.7569 13.181 6.41663 13.1806 8.49996C13.1806 9.88885 12.7687 11.3994 11.9449 13.0316C11.1211 14.6638 9.87548 16.4311 8.20799 18.3333Z"
                                                            fill="#9C9C9C"
                                                        />
                                                    </svg>
                                                    <span
                                                    >

                                                        {!! html_entity_decode($place->descrption) !!}
                                                    </span>

                                                    <span
                                                    >{{$place->country->name ?? ''}}</span> <span
                                                    >{{$place->city->name ?? ''}}</span>
                                                </div>
                                                <div
                                                    class="details-rest-btn d-flex align-items-center justify-content-center"
                                                >
                                                    <a href="{{route('detailplace',$place->id)}}"> @lang('site.details')</a>
                                                </div>
                                            </div>

                                            <div class="pb-3">
                        <span>
                          <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                          >
                            <path
                                d="M3 10C5.483 10 7.345 7 7.345 7C7.345 7 9.207 10 11.69 10C14.172 10 16.655 7 16.655 7C16.655 7 19.138 10 21 10M3 17C5.483 17 7.345 14 7.345 14C7.345 14 9.207 17 11.69 17C14.172 17 16.655 14 16.655 14C16.655 14 19.138 17 21 17"
                                stroke="#FF8600"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                          </svg>
                        </span>
                                                <span class="text-main text-restaurant">
                      <span
                      >{{$place->address ?? ''}}</span>
                        </span>
                                            </div>
                                            <div
                                                class="col-lg-4 d-flex align-items-center mt-3"
                                            >
                                                <div
                                                    class="w-100 details-btn d-flex align-items-center justify-content-center"
                                                >
                                                    <a href="#">
                            <span>
                              <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                              >
                                <path
                                    d="M14.2498 8.25C14.8432 8.25 15.4232 8.07405 15.9165 7.74441C16.4099 7.41477 16.7944 6.94623 17.0215 6.39805C17.2485 5.84987 17.3079 5.24667 17.1922 4.66473C17.0764 4.08279 16.7907 3.54824 16.3712 3.12868C15.9516 2.70912 15.4171 2.4234 14.8351 2.30765C14.2532 2.19189 13.65 2.2513 13.1018 2.47836C12.5536 2.70543 12.0851 3.08994 11.7554 3.58329C11.4258 4.07664 11.2498 4.65666 11.2498 5.25C11.2498 6.04565 11.5659 6.80871 12.1285 7.37132C12.6911 7.93393 13.4542 8.25 14.2498 8.25ZM14.2498 3.75C14.5465 3.75 14.8365 3.83797 15.0832 4.0028C15.3299 4.16762 15.5221 4.40189 15.6357 4.67598C15.7492 4.95007 15.7789 5.25167 15.721 5.54264C15.6631 5.83361 15.5203 6.10088 15.3105 6.31066C15.1007 6.52044 14.8334 6.6633 14.5425 6.72118C14.2515 6.77906 13.9499 6.74935 13.6758 6.63582C13.4017 6.52229 13.1675 6.33003 13.0026 6.08336C12.8378 5.83668 12.7498 5.54667 12.7498 5.25C12.7498 4.85218 12.9079 4.47065 13.1892 4.18934C13.4705 3.90804 13.852 3.75 14.2498 3.75ZM20.5602 13.1888C20.503 13.215 19.858 13.4963 18.7161 13.4963C17.4177 13.4963 15.477 13.1325 13.0264 11.6213C12.6534 12.6801 12.1691 13.6964 11.5817 14.6531C12.6368 14.9779 13.6293 15.4791 14.517 16.1353C16.3048 17.4984 17.2498 19.4391 17.2498 21.75C17.2498 21.9489 17.1708 22.1397 17.0302 22.2803C16.8895 22.421 16.6987 22.5 16.4998 22.5C16.3009 22.5 16.1102 22.421 15.9695 22.2803C15.8289 22.1397 15.7498 21.9489 15.7498 21.75C15.7498 17.8406 12.4976 16.4334 10.6742 15.9516C10.6226 16.0172 10.5692 16.0838 10.5158 16.1484C8.67452 18.3797 6.36734 19.5403 3.80046 19.5403C3.50809 19.5417 3.21584 19.5282 2.92484 19.5C2.72592 19.4801 2.54306 19.382 2.41647 19.2273C2.28989 19.0726 2.22995 18.8739 2.24984 18.675C2.26973 18.4761 2.36782 18.2932 2.52254 18.1666C2.67726 18.0401 2.87592 17.9801 3.07484 18C5.50484 18.2419 7.6189 17.2978 9.35609 15.1875C10.527 13.7681 11.3248 12.0366 11.7233 10.7813C8.07452 8.65781 5.7439 10.4653 5.71859 10.485C5.64219 10.5502 5.55346 10.5995 5.45767 10.6297C5.36188 10.66 5.26099 10.6708 5.16097 10.6613C5.06095 10.6519 4.96386 10.6224 4.87544 10.5747C4.78703 10.527 4.7091 10.462 4.64628 10.3836C4.58346 10.3052 4.53703 10.215 4.50975 10.1183C4.48246 10.0216 4.47488 9.92045 4.48746 9.82077C4.50003 9.7211 4.5325 9.62497 4.58294 9.53809C4.63338 9.45121 4.70076 9.37534 4.78109 9.315C4.92171 9.2025 8.27046 6.59625 13.1726 9.93094C17.4355 12.8288 19.9161 11.835 19.9395 11.8238C20.0294 11.7813 20.1268 11.7572 20.226 11.7527C20.3253 11.7482 20.4245 11.7635 20.5178 11.7977C20.6111 11.8319 20.6967 11.8843 20.7696 11.9518C20.8424 12.0193 20.9012 12.1007 20.9424 12.1911C20.9835 12.2816 21.0063 12.3793 21.0094 12.4786C21.0125 12.5779 20.9959 12.6769 20.9604 12.7697C20.9249 12.8625 20.8713 12.9473 20.8028 13.0193C20.7342 13.0912 20.6521 13.1488 20.5611 13.1888H20.5602Z"
                                    fill="white"
                                />
                              </svg>
                            </span>


                                                        @lang('site.Go to the restaurant')
                                                    </a
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach


                    </div>
                    <div class="col-12">
                        @if(!empty($places->appends(request()->query())->links()))
                            <div class="card card-department round-border mb-3 p-3">
                                <nav
                                    class="department-list-pagination d-md-flex justify-content-md-between align-items-center"
                                >
                                    <ul
                                        class="pagination mb-0 justify-content-lg-start justify-content-center"
                                    >
                                        <li class="page-item">
                                            <div>{{ $places->appends(request()->query())->links()}} </div>
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
@section('scripts')
    <script>


        jQuery(document).ready(function () {
            jQuery('.favouritess').click(function (e) {
                e.preventDefault();

                var id = $(this).data('id');
                console.log("iddd",id);


                jQuery.ajax({

                    url :"{{ url('favouritPlace')}}"+ '/' +id,
                    method: 'GET',
                    data: {
                        '_token': '{{ csrf_token() }}',
                    },
                    success: function (result) {
                        console.log(result.status);
                        if (result.status == 'deleted')
                            $(`#favouritess${id} i`).addClass('far').removeClass('fas');
                        else if (result.status == 'added')
                            $(`#favouritess${id} i`).addClass('fas').removeClass('far');
                        console.log(result);
                    },
                    error: function (err) {
                        console.log(err)
                    }
                });
            });
        });
    </script>
@endsection
