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

                                        <div class="form-group mb-4 position-relative">
                                            <input type="search" class="form-control search-country"
                                                   placeholder="ابحث عن دولتك المفضلة" id="search" name="q">
                                            <button class="search-c-icon d-flex justify-content-center align-items-center">
                                            <i class="far fa-search"></i>
                                            </button>
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
                        <h2 class="country-title"> @lang('site.all')  @lang('site.categories')</h2>

                    </div>
                </div>
                <div class="row">

                    @foreach($subcategories as $subcat)
                        <div class="col-lg-3 col-sm-6 col-12">
                            <a href="{{route('subcategorycars',$subcat->id)}}">
                                <div class="card-restaurant mb-4 position-relative">

                                    <img class="restaurant-image" src="{{asset('images/categories/'.$subcat->image)}}"
                                         alt="Card image cap"
                                         onerror="this.src='{{asset('images/categories/default.jpg')}}'"
                                    >
                                    <div class="card-restaurant-body d-flex justify-content-center align-items-center">
                                        <div>
                                            <!-- <div class="restaurant-icon">
                                                <img src="{{FRONTASSETS}}/images/restaurants/rest-icon-1.svg"
                                                     alt="restaurant icon">
                                            </div> -->
                                            <h2 class="card-title "> {{$subcat->name ?? ''}}</h2>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

                @if($subcategories->hasPages())
                    <div class="card card-department round-border mb-3 p-3">
                        <nav
                            class="department-list-pagination d-md-flex justify-content-md-between align-items-center"
                        >
                            <ul
                                class="pagination mb-0 justify-content-lg-start justify-content-center"
                            >
                                <li class="page-item">
                                    <!-- <div>{{ $subcategories->appends(request()->query())->links()}} </div> -->
                                    {{ $subcategories->links() }}
                                </li>

                            </ul>
                        </nav>
                    </div>
                @endif
            </div>
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
