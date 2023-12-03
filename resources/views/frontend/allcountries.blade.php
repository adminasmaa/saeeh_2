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
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M10.2499 2C11.8178 1.99983 13.3534 2.44648 14.6766 3.28763C15.9999 4.12878 17.056 5.3296 17.7213 6.74941C18.3866 8.16922 18.6335 9.74922 18.4331 11.3043C18.2328 12.8594 17.5934 14.3252 16.5899 15.53L22.2799 21.22C22.3786 21.3117 22.4508 21.4283 22.4888 21.5575C22.5268 21.6868 22.5293 21.8239 22.4959 21.9544C22.4625 22.0849 22.3946 22.204 22.2992 22.2992C22.2038 22.3943 22.0845 22.462 21.9539 22.495C21.8235 22.5284 21.6865 22.5261 21.5574 22.4883C21.4282 22.4504 21.3116 22.3785 21.2199 22.28L15.5299 16.59C14.5117 17.4378 13.3044 18.0278 12.0099 18.3103C10.7155 18.5928 9.37204 18.5594 8.09325 18.2128C6.81446 17.8663 5.63794 17.2169 4.66321 16.3195C3.68847 15.4222 2.9442 14.3033 2.49334 13.0574C2.04249 11.8116 1.89831 10.4755 2.07301 9.16216C2.24771 7.84883 2.73615 6.59689 3.49701 5.51224C4.25787 4.42759 5.26876 3.54214 6.44419 2.93079C7.61961 2.31944 8.92499 2.00017 10.2499 2ZM3.49989 10.25C3.49989 11.1364 3.67448 12.0142 4.0137 12.8331C4.35292 13.6521 4.85012 14.3962 5.47692 15.023C6.10371 15.6498 6.84783 16.147 7.66678 16.4862C8.48572 16.8254 9.36347 17 10.2499 17C11.1363 17 12.0141 16.8254 12.833 16.4862C13.652 16.147 14.3961 15.6498 15.0229 15.023C15.6497 14.3962 16.1469 13.6521 16.4861 12.8331C16.8253 12.0142 16.9999 11.1364 16.9999 10.25C16.9999 8.45979 16.2887 6.7429 15.0229 5.47703C13.757 4.21116 12.0401 3.5 10.2499 3.5C8.45968 3.5 6.74279 4.21116 5.47692 5.47703C4.21105 6.7429 3.49989 8.45979 3.49989 10.25Z"
                                                    fill="white"/>
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
