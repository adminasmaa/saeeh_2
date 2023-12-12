@extends('layouts.main_frontend')
@section('content')


    <main>
        <!-- Desktop Breadcrumb -->
        <section class="py-md-4 py-2">
            <div class="container">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{route('Home')}}"> @lang('site.home') </a>
                        </li>

                        <li class="breadcrumb-item text-gray-4" aria-current="page">
                            {{$city->name ?? ''}}
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <section class="position-relative">
                            <div class="country-image">
                                @if(!empty($city->image))
                                    <img src="{{asset('images/cities/'.$city->image)}}"
                                         onerror="this.src='{{asset('images/default.png')}}'" alt="city image">
                                @else
                                    <img src="{{asset('images/default.png')}}"
                                         onerror="this.src='{{asset('images/default.png')}}'" alt="city image">
                                @endif
                            </div>
                            <div class="country-container d-flex align-items-center">
                                <div class="w-100">
                                    <div>
                                        <h2 class="pb-md-4 pb-2">{{$city->name ?? ''}}</h2>
                                        <div class="form-group mb-4 position-relative">
                                            <input type="search" class="form-control search-country"
                                                   placeholder="{{trans('site.Search for your favorite country')}}"
                                                   id="search" name="q">
                                            <div class="search-c-icon d-flex justify-content-center align-items-center">
                                            <i class="fal fa-search"></i>
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
        <section class="py-5 all-categories" id="Allcategories">
            <div class="container w-100">
                <div class="row pb-3">
                    <div class="col-12 d-sm-flex justify-content-between">
                        <h2 class="country-title"> @lang('site.categories')</h2>
                        {{--                    <div class="box-sort-by position-relative">--}}
                        {{--                        <span class="icon-top-select">--}}
                        {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="8" viewBox="0 0 16 8"--}}
                        {{--                                fill="none">--}}
                        {{--                                <path--}}
                        {{--                                    d="M7.85335 0.061111C8.43543 0.0660483 9.01559 0.296795 9.45255 0.74379L14.828 6.24267C15.067 6.48725 15.0636 6.88869 14.8204 7.12919C14.5772 7.36968 14.1781 7.36629 13.939 7.12171L8.5636 1.62283C8.16786 1.218 7.51926 1.2125 7.11671 1.61055L1.6488 7.01746C1.4056 7.25795 1.00646 7.25457 0.767368 7.00998C0.528277 6.7654 0.531682 6.36396 0.774887 6.12347L6.2428 0.716564C6.68727 0.277045 7.27127 0.0561737 7.85335 0.061111Z"--}}
                        {{--                                    fill="#FF8600" />--}}
                        {{--                            </svg>--}}
                        {{--                        </span>--}}
                        {{--                        <span class="icon-bottom-select">--}}
                        {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="8" viewBox="0 0 15 8"--}}
                        {{--                                fill="none">--}}
                        {{--                                <path--}}
                        {{--                                    d="M7.20766 7.25155C6.62556 7.25155 6.04345 7.02573 5.60272 6.58246L0.180867 1.12937C-0.060289 0.886822 -0.060289 0.485368 0.180867 0.242822C0.422023 0.000276733 0.821178 0.000276733 1.06233 0.242822L6.48419 5.69591C6.88334 6.09737 7.53197 6.09737 7.93112 5.69591L13.353 0.242822C13.5941 0.000276733 13.9933 0.000276733 14.2344 0.242822C14.4756 0.485368 14.4756 0.886822 14.2344 1.12937L8.81259 6.58246C8.37186 7.02573 7.78976 7.25155 7.20766 7.25155Z"--}}
                        {{--                                    fill="#FF8600" />--}}
                        {{--                            </svg>--}}
                        {{--                        </span>--}}
                        {{--                        <select class="ddl-select" id="list-sort" name="list-sort">--}}
                        {{--                            <option>الترتيب حسب</option>--}}
                        {{--                            <option value="1">الافضل</option>--}}
                        {{--                            <option value="2">السعر من (الاعلي الي الاقل)</option>--}}
                        {{--                            <option value="3">السعر من (الاقل الي الاعلي)</option>--}}
                        {{--                            <option value="4">التقييمات من(1 الي 5)</option>--}}
                        {{--                            <option value="5">التقييمات من(5 الي1)</option>--}}
                        {{--                        </select>--}}
                        {{--                    </div>--}}
                    </div>
                </div>
                <div class="row">
                    @foreach($categories as $category)
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card-tour mb-3">
                                <a href="{{route('subcategories',['id'=>$category->id, 'city_id'=>$city->id])}}">
                                    <div class="card-image-box">
                                        <img class="card-img" src="{{asset('images/categories/'.$category->image)}}"
                                             alt="Card image cap"
                                             onerror="this.src='{{asset('images/categories/default.jpg')}}'">
                                    </div>

                                    <div class="card-tour-body d-flex justify-content-center align-items-center">
                                        <h2 class="card-title">{{$category->name ?? $category->name_ar}}</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                @if($categories->hasPages())
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-department round-border my-4 p-3">
                                <nav
                                    class="department-list-pagination d-md-flex justify-content-md-between align-items-center">
                                    <ul class="pagination mb-0 justify-content-lg-start justify-content-center">

                                        <li class="page-item">
                                            {{ $categories->links() }}
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
            </div>
            @endif
        </section>

        @if(!empty(auth()->user()))

        @else
            <section class="d-lg-flex">
                <div class="right-container bg-main d-flex align-items-center py-lg-0 py-4">
                    <div class="right-container-content">
                        <h2>@lang('site.freediscount') </h2>
                        <p>@lang('site.loginSignup') www.saeeh.com</p>
                        <div class="d-flex justify-content-between py-3">
                            <div class="btn-footer-auth d-flex align-items-center justify-content-center">
                                <a href="{{route('registers')}}"
                                   class="d-flex justify-content-center align-items-center w-100 h-100">
                                    @lang('site.register') </a>
                            </div>
                            <div class="btn-out-footer-auth d-flex align-items-center justify-content-center">
                                <a href="{{route('sitelogin')}}"
                                   class="d-flex justify-content-center align-items-center w-100 h-100">@lang('site.login')
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left-container" style="
            background-image: url('{{FRONTASSETS}}/images/countries/footer-image.png');
          "></div>
            </section>
        @endif
    </main>

@endsection

@section('scripts')

    <script type="text/javascript">
        $('.search-country').on('keyup', function () {
            var query = $(this).val();
            $.ajax({
                url: "{{ route('searchcategories',$city->id) }}",
                type: "GET",
                data: {'query': query},
                success: function (data) {
                    $('#Allcategories').empty();

                    $('#Allcategories').html(data);
                }
            })
        });
        // $('body').on('click', 'li', function(){
        //     var value = $(this).text();
        //     //do what ever you want
        // });
    </script>

@endsection
