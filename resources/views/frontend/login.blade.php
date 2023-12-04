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

                  <form  >

                <div
                  class="row d-flex justify-content-center align-items-center h-100"
                >


                  <div class="col-md-10 col-11 my-lg-5 my-2">
                    <h2 class="fw-bold login-title mb-5"> @lang('site.login')</h2>
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="mb-3">
                                  <ul  id="register_errorslogin"></ul>


                                  </ul>
                              </div>
                          </div>
                      </div>


                      <div class="emailcont">
                          <input id="phoneee" type="tel" class="form-control frm-input phone3">

                        <span class="icon-placeholder">

                      <i class="far fa-phone"></i>
                    </span>

                      </div>
                      <div>
                      <span id="valid-msg" class="hide">✓ Valid</span>
                          <span id="error-msg" class="hide"></span>
                      </div>
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
                        <a href="{{route('registers')}}" class="user-link"> @lang('site.register')</a>
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

    <script>


        const phonedata = document.querySelector("#phoneee");
        const errorMsg = document.querySelector("#error-msg");
        const validMsg = document.querySelector("#valid-msg");

        // here, the index maps to the error code returned from getValidationError - see readme
        const errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

        // initialise plugin
        const iti = window.intlTelInput(phonedata, {
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/utils.js",
            initialCountry: "sa",
            preferredCountries: ["sa"],
            separateDialCode: true,
        });

        const reset = () => {
            phonedata.classList.remove("error");
            errorMsg.innerHTML = "";
            errorMsg.classList.add("hide");
            validMsg.classList.add("hide");
        };

        // on blur: validate
        phonedata.addEventListener('blur', () => {
            reset();
            if (phonedata.value.trim()) {
                if (iti.isValidNumber()) {
                    validMsg.classList.remove("hide");
                } else {
                    phonedata.classList.add("error");
                    const errorCode = iti.getValidationError();
                    errorMsg.innerHTML = errorMap[errorCode];
                    errorMsg.classList.remove("hide");
                }
            }
        });

        // on keyup / change flag: reset
        phonedata.addEventListener('change', reset);
        phonedata.addEventListener('keyup', reset);

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


                },
                success: function (result) {
                    console.log(result);

                    if (result.content == 'success') {

                        swal({
                            title: "Success!",
                            text: "The Login  successfully !",
                            type: "success",
                            confirmButtonText: "OK"
                        });

                        setTimeout(function () {
                            Swal.close()
                        }, 50000)

                        window.location.href = '{{route('Home')}}';

                    }
                    else if (result.content == 'error') {
                        swal({
                            title: "Error!",
                            text: "password or phone number is  incorrect!",
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
