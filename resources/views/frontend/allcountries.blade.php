@extends('layouts.main_frontend')
@section('content')

    <section class="py-md-4 py-2">
        <div class="container">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{route('Home')}}"> @lang('site.home') </a>
                    </li>


                    <li class="breadcrumb-item text-gray-4" aria-current="page">
                        @lang('site.countries')
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
                            <img src="{{FRONTASSETS}}/images/countries/main-countries.png" alt="country image">
                        </div>
                        <div class="country-container d-flex align-items-center">
                            <div class="w-100">
                                <div>
                                    <h2 class="pb-3">
                                        @lang('site.discover_the_most_famous_tourist_destinations')
                                    </h2>
                                    <div class="form-group mb-4 position-relative">
                                        <input type="search" class="form-control search-country"
                                               placeholder=" @lang('site.find_your_favorite_country')" id="search"
                                               name="search">
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
    <section class="py-5">
        <div class="container w-100">
            <div class="row pb-3">
                <div class="col-12">
                    <h2 class="country-title"> @lang('site.all_countries')</h2>
                </div>
            </div>
            <div class="row" id="hiddendivcountries">
                @foreach($countries as $country)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card-tour mb-3">
                            <a href="{{route('cities',$country->id)}}">
                                <div class="card-image-box">
                                    <img class="card-img" src="{{asset('images/countries/'.$country->image)}}"
                                         onerror="this.src='{{FRONTASSETS}}/images/tours/tour-1.jpg'"
                                         alt="Card image cap">
                                </div>
                                <div class="card-tour-body d-flex justify-content-between align-items-center">
                                    <h2 class=" card-title">{{$country->name_ar}}</h2>
                                    <div>
                                        <img src="{{asset('images/countries/'.$country->flag_image)}}"
                                             onerror="this.src='{{FRONTASSETS}}/images/turkey.png'" alt="turkey"
                                             class="icon-flag">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            @if($countries->hasPages())
                <div class="row">
                    <div class="col-12">
                        <div class="card card-department round-border my-4 p-3">
                            <nav
                                class="department-list-pagination d-md-flex justify-content-md-between align-items-center">
                                <ul class="pagination mb-0 justify-content-lg-start justify-content-center">
                                    <li class="page-item">
                                        {{$countries->links() }}
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection


@section('scripts')

    <script type="text/javascript">
        $('.search-country').on('keyup', function () {
            var query = $(this).val();
            $.ajax({
                url: "{{ route('searchcountries') }}",
                type: "GET",
                data: {'query': query},
                success: function (data) {
                    $('#hiddendivcountries').empty();

                    $('#hiddendivcountries').html(data);
                }
            })
        });
        // $('body').on('click', 'li', function(){
        //     var value = $(this).text();
        //     //do what ever you want
        // });
    </script>

@endsection
