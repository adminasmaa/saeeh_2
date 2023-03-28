@extends('layouts.main_admin')

@section('content')

    <!-- <div class="content-page"> -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>@lang('site.cars')</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">

                            <li class="breadcrumb-item">@lang('site.dashboard')</li>
                            <li class="breadcrumb-item active">@lang('site.cars') @endlang</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->


        <div class="container-fluid">
            <div class="row second-chart-list third-news-update">
                <div class="col-xl-12 col-lg-11 xl-50 morning-sec box-col-12">
                    <form action="{{ route('dashboard.cars.update', $car->id) }}" method="post"
                          enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('put') }}

                        <div class="bg-secondary-lighten card-header d-flex justify-content-between">
                            <h5>@lang('site.edit') </h5>
                            <div class="text-end  group-btn-top">
                                <div class="form-group d-flex form-group justify-content-between">
                                    <button type="button" class="btn btn-pill btn-outline-primary btn-air-primary"
                                            onclick="history.back();">
                                        <!--<i class="fa fa-backward"></i>-->
                                        @lang('site.back')
                                    </button>
                                    <button type="submit" class="btn btn-air-primary btn-pill btn-primary"><i
                                            class="fa fa-magic"></i>
                                        @lang('site.edit')</button>
                                </div>
                            </div>


                        </div>
                        <div class="card-body">
                            @include('partials._errors')


                            <div class="row form-group">

                                <div class="col-sm-12">


                                    <label>@lang('site.image')</label>
                                    <img src="{{asset('images/cars/'.$car->main_image_ads)}}"
                                         data-bs-toggle="modal"
                                         data-bs-target="#exampleModalss" width="100px" height="100px" class="d-block"
                                         onerror="this.src='{{asset('images/cars/default.jpg')}}'"
                                    >


                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalss" tabindex="-1"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">@lang('site.image')</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="border-5">
                                                <tr>
                                                    <th>
                                                        <img name="soso"
                                                             src="{{asset('images/cars/'.$car->main_image_ads)}}"
                                                             alt=""
                                                             width="400px" height="aut0"


                                                             onerror="this.src='{{asset('images/cars/default.jpg')}}'"
                                                        >

                                                    </th>
                                                </tr>


                                            </table>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">@lang('site.Cancel')</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  End Of Modal -->
                            <div class="row">
                                <!--<div class="col-md-6">-->

                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.name')<span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control"
                                           value="{{ $car->name }}"
                                    >
                                </div>


                                <div class="col-md-6 form-group col-12 p-2 ">
                                    <label>@lang('site.year')<span class="text-danger">*</span></label>
                                    {{--                                    <input type="text" name="year" class="form-control"--}}
                                    {{--                                           value="{{ $car->year }}"--}}
                                    {{--                                    >--}}

                                    <select name="year" class="form-control">
                                        <option value="{{$car->year}}" selected> {{ $car->year }}</option>
                                        <option value="2030">2030</option>
                                        <option value="2029">2029</option>
                                        <option value="2028">2028</option>
                                        <option value="2027">2027</option>
                                        <option value="2026">2026</option>
                                        <option value="2025">2025</option>
                                        <option value="2024">2024</option>
                                        <option value="2023">2023</option>
                                        <option value="2022">2022</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011">2011</option>
                                        <option value="2010">2010</option>
                                        <option value="2009">2009</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                        <option value="2005">2005</option>
                                        <option value="2004">2004</option>
                                        <option value="2003">2003</option>
                                        <option value="2002">2002</option>
                                        <option value="2001">2001</option>
                                        <option value="2000">2000</option>
                                        <option value="1999">1999</option>
                                        <option value="1998">1998</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                        <option value="1979">1979</option>
                                        <option value="1978">1978</option>
                                        <option value="1977">1977</option>
                                        <option value="1976">1976</option>
                                        <option value="1975">1975</option>
                                        <option value="1974">1974</option>
                                        <option value="1973">1973</option>
                                        <option value="1972">1972</option>
                                        <option value="1971">1971</option>
                                        <option value="1970">1970</option>
                                        <option value="1969">1969</option>
                                        <option value="1968">1968</option>
                                        <option value="1967">1967</option>
                                        <option value="1966">1966</option>
                                        <option value="1965">1965</option>
                                        <option value="1964">1964</option>
                                        <option value="1963">1963</option>
                                        <option value="1962">1962</option>
                                        <option value="1961">1961</option>
                                        <option value="1960">1960</option>
                                        <option value="1959">1959</option>
                                        <option value="1958">1958</option>
                                        <option value="1957">1957</option>
                                        <option value="1956">1956</option>
                                        <option value="1955">1955</option>
                                        <option value="1954">1954</option>
                                        <option value="1953">1953</option>
                                        <option value="1952">1952</option>
                                        <option value="1951">1951</option>
                                        <option value="1950">1950</option>
                                        <option value="1949">1949</option>
                                        <option value="1948">1948</option>
                                        <option value="1947">1947</option>
                                        <option value="1946">1946</option>
                                        <option value="1945">1945</option>
                                        <option value="1944">1944</option>
                                        <option value="1943">1943</option>
                                        <option value="1942">1942</option>
                                        <option value="1941">1941</option>
                                        <option value="1940">1940</option>
                                        <option value="1939">1939</option>
                                        <option value="1938">1938</option>
                                        <option value="1937">1937</option>
                                        <option value="1936">1936</option>
                                        <option value="1935">1935</option>
                                        <option value="1934">1934</option>
                                        <option value="1933">1933</option>
                                        <option value="1932">1932</option>
                                        <option value="1931">1931</option>
                                        <option value="1930">1930</option>
                                        <option value="1929">1929</option>
                                        <option value="1928">1928</option>
                                        <option value="1927">1927</option>
                                        <option value="1926">1926</option>
                                        <option value="1925">1925</option>
                                        <option value="1924">1924</option>
                                        <option value="1923">1923</option>
                                        <option value="1922">1922</option>
                                        <option value="1921">1921</option>
                                        <option value="1920">1920</option>
                                        <option value="1919">1919</option>
                                        <option value="1918">1918</option>
                                        <option value="1917">1917</option>
                                        <option value="1916">1916</option>
                                        <option value="1915">1915</option>
                                        <option value="1914">1914</option>
                                        <option value="1913">1913</option>
                                        <option value="1912">1912</option>
                                        <option value="1911">1911</option>
                                        <option value="1910">1910</option>
                                        <option value="1909">1909</option>
                                        <option value="1908">1908</option>
                                        <option value="1907">1907</option>
                                        <option value="1906">1906</option>
                                        <option value="1905">1905</option>
                                        <option value="1904">1904</option>
                                        <option value="1903">1903</option>
                                        <option value="1902">1902</option>
                                        <option value="1901">1901</option>
                                        <option value="1900">1900</option>
                                    </select>
                                </div>

                                <div class="col-md-6 form-group col-12 p-2 ">
                                    <label>@lang('site.color')<span class="text-danger">*</span></label>
                                    <input type="color" name="color" class="form-control"
                                           value="{{ $car->color }}"
                                    >
                                </div>
                                <div class="col-md-6 form-group col-12 p-2 ">
                                    <label>@lang('site.category')<span class="text-danger">*</span></label>
                                    <input type="text" name="category" class="form-control"
                                           value="{{ $car->category ?? '' }}"
                                    >
                                </div>

                                <div class="col-md-6 form-group col-12 p-2 ">
                                    <label>@lang('site.number')<span class="text-danger">*</span></label>
                                    <input type="text" name="car_numbers" class="form-control"
                                           value="{{ $car->car_numbers ?? '' }}">
                                </div>


                                <div class="col-md-6 form-group col-12 p-2 ">
                                    <label>@lang('site.date')<span class="text-danger">*</span></label>
                                    <input type="date" name="car_delivery_date" class="form-control"
                                           value="{{ $car->car_delivery_date }}">
                                </div>


                                {{--                                <div class="col-md-6 form-group col-12 p-2 ">--}}
                                {{--                                    <label>@lang('site.price')<span class="text-danger">*</span></label>--}}
                                {{--                                    <input type="text" name="fixed_price" class="form-control"--}}
                                {{--                                           value="{{ $car->fixed_price ?? '' }}"--}}
                                {{--                                    >--}}
                                {{--                                </div>--}}

                                {{--                                <div class="col-md-6 form-group col-12 p-2 ">--}}
                                {{--                                    <label>@lang('site.changed_price')<span class="text-danger">*</span></label>--}}
                                {{--                                    <input type="text" name="changed_price" class="form-control"--}}
                                {{--                                           value="{{ $car->changed_price ?? '' }}"--}}
                                {{--                                    >--}}
                                {{--                                </div>--}}


                            </div>

                            <div class="row m-t-10">
                                <div class="m-checkbox-inline">
                                    <label for="edo-ani">
                                        <input class="radio_animated" type="radio" name="price" checked=""
                                               data-bs-original-title="" title="" value="1">@lang('site.fixed_price')
                                    </label>
                                    <label for="edo-ani1">
                                        <input class="radio_animated" type="radio" name="price"
                                               data-bs-original-title="" title="" value="2">@lang('site.changed_price')
                                    </label>
                                </div>
                            </div>
                            <div class="row m-t-10">
                                <!--<div class="col-md-6">-->

                                <div class="col-md-6 form-group col-12 p-2  desc" id="price1">
                                    <label>@lang('site.fixed_price')<span class="text-danger">*</span></label>
                                    <input type="text" name="fixed_price" class="form-control"
                                           value="{{ $car->fixed_price ?? '' }}"
                                    >
                                </div>

                                <div class="col-md-12 form-group col-12   desc" id="price2" style="display: none;">
                                    <table class="price-list" id="tb_price">
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-5 form-group col-12">
                                                        <label>@lang('site.daynumber')</label>
                                                        <input type="number" name="daynumber[]" class="form-control"/>
                                                    </div>
                                                    <div class="col-md-5 form-group col-12">
                                                        <label>@lang('site.fixed_price')</label>
                                                        <input type="number" name="price[]" class="form-control">
                                                    </div>
                                                    <div class="col-md-2 form-group col-12">
                                                        <a class="btn btn-air-primary btn-pill btn-success add-price w-100 m-t-30"><i
                                                                class="fa fa-plus" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>

                                </div>
                                <br>
                            </div>


                            <div class="row">


                                <div class="col-md-6 form-group">
                                    <label class="form-label">@lang('site.users')</label>
                                    <select class="form-control btn-square" name="user_id">
                                        <option selected value="0">@lang('site.select')</option>
                                        @foreach($users as $user)

                                            <option value="{{$user->id}}"
                                                    @if($car->user_id==$user->id) selected @endif>{{$user->firstname . $user->lastname ?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>

                                <div class="col-md-6 form-group">
                                    <label class="form-label">@lang('site.advertising')</label>
                                    <select class="form-control btn-square" name="ads_id">
                                        <option selected value="0">@lang('site.select')</option>
                                        @foreach($ads as $ad)

                                            <option value="{{$ad->id}}"
                                                    @if($car->ads_id==$ad->id) selected @endif>{{$ad->title ?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>

                                <div class="col-md-6 form-group"><span class="text-danger">*</span>
                                    <label class="form-label">@lang('site.categories')</label>
                                    <select class="form-control btn-square" name="category_id" id="category_id">
                                        <option selected value="0">@lang('site.select')</option>
                                        @foreach($categories as $cat)

                                            <option value="{{$cat->id}}"
                                                    @if($car->category_id==$cat->id) selected @endif>{{$cat->name_ar ?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>

                                <div class="col-md-6 form-group"><span class="text-danger">*</span>
                                    <label class="form-label">@lang('site.subcategories')</label>
                                    <select class="form-control btn-square" name="sub_category_id" id="sub_category_id">
                                        <option value="0">@lang('site.select')</option>
                                        @foreach($subcategories as $cats)

                                            <option value="{{$cats->id}}"
                                                    @if($car->sub_category_id==$cats->id) selected @endif>{{$cats->name_ar ?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="form-label">@lang('site.country')</label>
                                    <select class="form-control btn-square" name="country_id">
                                        <option selected>@lang('site.select')</option>
                                        @foreach($countries as $country)

                                            <option value="{{$country->id}}"   @if($country->id==$user->country_id) selected @endif>{{$country->name_ar ?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="form-label">@lang('site.city')</label>
                                    <select class="form-control btn-square" name="city_id">
                                        <option selected>@lang('site.select')</option>
                                        @foreach($cities as $city)

                                            <option value="{{$city->id}}"   @if($city->id==$user->city_id) selected @endif>{{$city->name_ar ?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>
                            </div>


                            <div class="row">

                                <div class="col-md-6 form-group col-12 p-2">


                                    <label>@lang('site.image')</label>
                                    <input type="file" name="main_image_ads" class="form-control"
                                           value="{{ old('main_image_ads') }}">


                                </div>


                            </div>

                            <div class="row">
                                <div class="col-md-6 form-group col-12 p-2">


                                    <label>@lang('site.videos')</label>
                                    <input type="file" name="videos" class="form-control"
                                           value="{{ old('videos') }}">


                                </div>

                                <div class="col-md-6 form-group col-12 p-2">


                                    <video width="300" height="150" controls>
                                        <source src="{{URL::asset("/images/cars/$car->videos")}}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>
                            <div class="row">


                                <div class="col-md-6 form-group col-12 p-2">


                                    <label>@lang('site.images')</label>
                                    <input type="file" name="images[]" class="form-control"
                                           value="{{ old('images[]') }}" multiple>


                                </div>
                            </div>


                            <div class="row">
                                @isset($car['images'])
                                    @foreach(json_decode($car->images) as $key=>$image)
                                        <div class="col-md-2 form-group col-2 p-1">

                                            <img src="{{asset('images/cars/'.$image)}}"

                                                 width="100px" height="100px"
                                                 class="d-block"
                                                 onerror="this.src='{{asset('images/cars/default.jpg')}}'"
                                            >

                                        </div>
                                    @endforeach
                                @endisset

                            </div>


                            <br>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>


    </form>
    </div>
    </div>
    </div>
    <!-- Individual column searching (text inputs) Ends-->
    </div>
    </div>
    <!-- Container-fluid Ends-->
    </div>

@endsection
@section('scripts')

    <script>


        $(document).ready(function () {
            jQuery('a.add-price').click(function (event) {
                event.preventDefault();
                var newRow = jQuery('<tr><td><div class="row"><div class="col-md-5 form-group col-12 p-2">' +
                    ' <label>@lang('site.daynumber')</label><input type="number"  name="daynumber[]" class="form-control"/></div><div class="col-md-5 form-group col-12 p-2">' +
                    '<label>@lang('site.fixed_price')</label><input type="number" name="price[]" class="form-control" >' +
                    '  </div>  <div class="col-md-2 form-group col-12 p-2 "> <a class="btn btn-air-primary btn-pill btn-danger add-price w-100 m-t-30" onclick="deletetr(this)" ><i class="fa fa-trash"></i></a>' +

                    '</div></div> </td>  </tr>');
                jQuery('.price-list').append(newRow);
            });

            $("input[name='price']").click(function () {
                var test = $(this).val();

                $("div.desc").hide();
                $("#price" + test).show();
            });
        });

        function deletetr(r) {
            r.closest('tr').remove();
        }

        $('#category_id').on('change', function (e) {
            var categoryId = e.target.value;


            $.get("{{url('dashboard/SubCategories')}}/" + categoryId, function (data) {
                console.log(data);
                $('#sub_category_id').empty();
                $('#sub_category_id').append('<option>  Select Please  </option>');
                $.each(data, function (key, value) {
                    $('#sub_category_id').append('<option value="' + value.id + '">' + value.name_ar + '</option>')

                });
            })
        })

    </script>

@endsection
