@extends('layouts.main_frontend')

@section('content')

    <div class="overlay-mobile"></div>
    <main>
        <section class="py-5">
            <div class="container w-100">
                <div class="row d-flex justify-content-center">
                    <div
                        class="col-12 login-body d-lg-flex justify-content-lg-between px-0"
                    >
                        <div class="text-center my-lg-5 my-3 login-content">

                            <form>

                                <div
                                    class="row d-flex justify-content-center align-items-center h-100"
                                >


                                    <div class="col-md-10 col-11 my-lg-5 my-2">
                                        <h2 class="fw-bold login-title mb-5"> @lang('site.login')</h2>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <ul id="register_errorslogin"></ul>


                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="emailcont">

                                            <div class="d-flex">
                                                <input type="hidden" name="country_id" id="country_id" value="">
                                                <input type="hidden" name="country_code" id="country_code" value="">
                                                <span class="icon-placeholder">
                        <i class="far fa-phone"></i>
                      </span>
                                                <input type="text" name="phone"
                                                       class="form-control register-input register-input-r phone3"
                                                       maxlength="11"
                                                      >
                                                <select id="demo-htmlselect">
                                                    @foreach(\App\Models\Country::get() as $country)
                                                        <option value="{{$country->id}}"
                                                                data-imagesrc="{{asset('images/countries/'.$country->flag_image)}}"
                                                                data-description="{{$country->name}}"
                                                                @if((old('country_id')==$country->id)||(!empty($invest) && ($invest->country_id==$country->id)))selected @endif>{{$country->code}}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                        {{--                      <div class="emailcont">--}}
                                        {{--                          <input id="phoneee" type="tel" class="form-control frm-input phone3">--}}

                                        {{--                        <span class="icon-placeholder">--}}

                                        {{--                      <i class="far fa-phone"></i>--}}
                                        {{--                    </span>--}}

                                        {{--                      </div>--}}
                                        {{--                      <div>--}}
                                        {{--                      <span id="valid-msg" class="hide">✓ Valid</span>--}}
                                        {{--                          <span id="error-msg" class="hide"></span>--}}
                                        {{--                      </div>--}}
                                        <div class="emailcont">
                                            <input
                                                id="password-fieldd"
                                                type="password"
                                                class="form-control input-user my-3 password3"
                                                name="password"
                                                placeholder=" {{trans('site.password')}}"
                                            />
                                            <span class="icon-placeholder">

                        <i class="far fa-lock-alt"></i>
                      </span>
                                            <div
                                                toggle="#password-fieldd"
                                                class="fa fa-fw fa-eye field-icon toggle-password"
                                            ></div>
                                        </div>
                                        <button type="submit" class="mt-lg-4  btn-login formregisterslogin">
                                            @lang('site.login')
                                        </button>
                                        <div class="forgit-password pt-2">
                                            <a href="{{route('forget_password')}}"> @lang('site.forget_password') ؟ </a>
                                        </div>
                                        <div class="pt-lg-3 pt-2 user-links">
                                            <p class="text-bold">
                                                @lang('site.dont_have_an_account') ؟
                                                <a href="{{route('registers')}}"
                                                   class="user-link"> @lang('site.register')</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="side-login-image"></div>
                    </div>
                </div>

            </div>
            </div>
            </div>
        </section>
    </main>

@endsection
@section('scripts')

    <script type="text/javascript"
            src="https://cdn.rawgit.com/prashantchaudhary/ddslick/master/jquery.ddslick.min.js"></script>


    <script>


        $('#country_id').val(country_id);

        $('#demo-htmlselect').ddslick({
            onSelected: function (selectedData) {
                var country_code = selectedData.selectedData.text;
                var country_id = selectedData.selectedData.value;
                $('#country_code').val(country_code);
                $('#country_id').val(country_id);

            }
        });

    </script>

    <script>


        jQuery('.formregisterslogin').click(function (e) {
            // console.log("daaaa");
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            jQuery.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},

                url: "{{ route('logins') }}",
                method: 'post',
                data: {
                    _token: '{{ csrf_token() }}',
                    phone: jQuery('.phone3').val(),
                    password: jQuery('.password3').val(),
                    country_code: $('#country_code').val(),

                },
                success: function (result) {
                    console.log(result);

                    if (result.content == 'success') {

                        swal({
                            title: "Success!",
                            text: "{{trans('message.User login successfully.')}}",
                            type: "success",
                            confirmButtonText: "OK"
                        });

                        setTimeout(function () {
                            Swal.close()
                        }, 50000)

                        window.location.href = '{{route('Home')}}';

                    } else if (result.content == 'error') {
                        swal({
                            title: "Error!",
                            text: "{{trans('message.wrong credientials')}}",
                            type: "warning",
                            confirmButtonText: "OK"
                        });
                    }
                },
                error: function (result) {
                    console.log(result.responseJSON);
                    var errors = result.responseJSON;
                    var errorsList = "";
                    $.each(errors, function (_, value) {
                        $.each(value, function (_, fieldErrors) {
                            fieldErrors.forEach(function (error) {
                                errorsList += "<li style='color:#e81f1f'>" + error + "</li>";
                            })
                        });
                    });
                    $('#register_errorslogin').html(errorsList);


                }
            });
        });

    </script>
@endsection
