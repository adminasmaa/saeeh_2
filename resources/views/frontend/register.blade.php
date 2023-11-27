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
                    <h2 class="fw-bold login-title mb-5"> {{trans('site.register')}} </h2>
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="mb-3">
                                  <ul  id="register_errorsUsers"></ul>


                              </ul>
                          </div>
                      </div>
                      </div>


                    <div class="row">
                      <div class="col-lg-6">
                        <div class="emailcont">
                          <input
                            type="text"
                            class="form-control frm-input mb-3 name2"
                            name="name"
                            placeholder=" {{trans('site.name')}}"
                          />
                          <span class="icon-placeholder">
                          <i class="far fa-user-circle"></i>
                          </span>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="emailcont">
                          <input
                            type="email"
                            class="form-control frm-input mb-3 email2"
                            placeholder=" {{trans('site.email')}}"
                            name="email"
                          />
                          <span class="icon-placeholder">
                          <i class="far fa-envelope"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="emailcont">
                          <input
                            id="password-field"
                            type="password"
                            class="form-control input-user mb-3 password2"
                            name="password"
                            placeholder=" {{trans('site.password')}}"
                          />
                          <span class="icon-placeholder">
                            <i class="far fa-lock-alt"></i>
                          </span>
                          <div
                            toggle="#password-field"
                            class="fa fa-fw fa-eye field-icon toggle-password"
                          ></div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="emailcont">
                          <input
                            id="password-field-confirm"
                            type="password"
                            class="form-control input-user mb-3 password_confirmation2"
                            name="password_confirmation"
                            placeholder="{{trans('site.password_confirmation')}}"
                          />
                          <span class="icon-placeholder">
                            <i class="far fa-lock-alt"></i>
                          </span>
                          <div
                            toggle="#password-field-confirm"
                            class="fa fa-fw fa-eye field-icon toggle-password"
                          ></div>
                        </div>
                      </div>
                    </div>
                    <div class="emailcont">
                        <input id="phoneData" type="tel"  class="form-control frm-input mb-3 phone2"    name="phone">
                      <span class="icon-placeholder">
                        <i class="far fa-phone"></i>
                      </span>
                    </div>
                    <div>
                        <span id="valid-msg" class="hide">✓ Valid</span>
                        <span id="error-msg" class="hide"></span>
                    </div>
                    <button type="submit" class="mt-lg-4 mt-3 btn-login formregistersUser">
                       {{trans('site.sing_up')}}
                    </button>

                    <div class="pt-lg-3 pt-2 user-links">
                      <p class="text-bold">
                        @lang('site.haveprofile')
                        <a href="{{route('sitelogin')}}" class="user-link"> {{trans('site.login')}} </a>
                      </p>
                    </div>
                  </div>
                </div>
               </form>
                </div>

                </form>
              <div class="side-login-image"></div>
            </div>
          </div>
        </div>
      </section>
    </main>

@endsection
@section('scripts')



    <script>


        const phonedata = document.querySelector("#phoneData");
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


        jQuery('.formregistersUser').click(function (e) {
            // console.log("daaaa");
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            jQuery.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},

                url: "{{ route('createaccount') }}",
                method: 'post',
                data: {
                    _token: '{{ csrf_token() }}',
                    name: jQuery('.name2').val(),
                    phone: jQuery('.phone2').val(),
                    email: jQuery('.email2').val(),
                    password: jQuery('.password2').val(),
                    password_confirmation: jQuery('.password_confirmation2').val(),


                },
                success: function (result) {
                    console.log(result);

                    if (result.content == 'success')


                        swal({
                            title: "Success!",
                            text: "The user has been successfully Added!",
                            type: "success",
                            confirmButtonText: "OK"
                        });

                    setTimeout(function () {
                        Swal.close()
                    }, 10000)

                    window.location.href = '{{route('Home')}}';

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
                    $('#register_errorsUsers').html(errorsList);


                }
            });
        });


;


    </script>


@endsection
