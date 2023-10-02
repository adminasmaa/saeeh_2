@extends('layouts.main_frontend')
@section('css')

    <style>
        .hide {
            display: none;
        }

        #valid-msg {
            color: #00c900;
        }
    </style>
@endsection
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


                  <div class="col-md-10 col-10 my-lg-5 my-2">
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
                          <input
                              type="tel"
                              class="form-control frm-input mb-3 phone3"
                              placeholder="  {{trans('site.phone')}}"
                              name="phone"
                              id="phone"
                              onkeyup="Checkedkeyed(this)"
                          />
                          <span class="icon-placeholder">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            viewBox="0 0 16 16"
                            fill="none"
                        >
                          <path
                              d="M1.375 15.5C1.23611 15.5 1.09028 15.4964 0.9375 15.4892C0.784722 15.4819 0.638889 15.4717 0.5 15.4583V10.5833L4.66667 9.75L7.08333 12.1667C8.13889 11.5278 9.10778 10.7708 9.99 9.89583C10.8722 9.02083 11.6047 8.08333 12.1875 7.08333L9.8125 4.6875L10.5833 0.5H15.4583C15.4861 0.638889 15.5 0.784722 15.5 0.9375V1.375C15.5 3.16667 15.1008 4.91333 14.3025 6.615C13.5042 8.31667 12.4486 9.82694 11.1358 11.1458C9.82306 12.4653 8.31611 13.5208 6.615 14.3125C4.91389 15.1042 3.16722 15.5 1.375 15.5ZM12.9792 5.5C13.2153 4.95833 13.3958 4.40972 13.5208 3.85417C13.6458 3.29861 13.7431 2.73611 13.8125 2.16667H11.9583L11.6042 4.125L12.9792 5.5ZM5.52083 12.9583L4.125 11.5625L2.16667 11.9583V13.7917C2.73611 13.75 3.30222 13.6597 3.865 13.5208C4.42778 13.3819 4.97972 13.1944 5.52083 12.9583Z"
                              fill="#9C9C9C"
                          />
                        </svg>
                      </span>
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
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="14"
                          height="19"
                          viewBox="0 0 14 19"
                          fill="none"
                        >
                          <path
                            d="M7.00016 14.1667C6.55814 14.1667 6.13421 13.9911 5.82165 13.6786C5.50909 13.366 5.3335 12.9421 5.3335 12.5C5.3335 11.575 6.07516 10.8334 7.00016 10.8334C7.44219 10.8334 7.86611 11.009 8.17867 11.3215C8.49123 11.6341 8.66683 12.058 8.66683 12.5C8.66683 12.9421 8.49123 13.366 8.17867 13.6786C7.86611 13.9911 7.44219 14.1667 7.00016 14.1667ZM12.0002 16.6667V8.33337H2.00016V16.6667H12.0002ZM12.0002 6.66671C12.4422 6.66671 12.8661 6.8423 13.1787 7.15486C13.4912 7.46742 13.6668 7.89135 13.6668 8.33337V16.6667C13.6668 17.1087 13.4912 17.5327 13.1787 17.8452C12.8661 18.1578 12.4422 18.3334 12.0002 18.3334H2.00016C1.55814 18.3334 1.13421 18.1578 0.821651 17.8452C0.509091 17.5327 0.333496 17.1087 0.333496 16.6667V8.33337C0.333496 7.40837 1.07516 6.66671 2.00016 6.66671H2.8335V5.00004C2.8335 3.89497 3.27248 2.83516 4.05388 2.05376C4.83529 1.27236 5.89509 0.833374 7.00016 0.833374C7.54734 0.833374 8.08915 0.941148 8.59468 1.15054C9.1002 1.35994 9.55953 1.66685 9.94644 2.05376C10.3334 2.44067 10.6403 2.9 10.8497 3.40553C11.0591 3.91105 11.1668 4.45287 11.1668 5.00004V6.66671H12.0002ZM7.00016 2.50004C6.33712 2.50004 5.70124 2.76343 5.2324 3.23227C4.76355 3.70111 4.50016 4.337 4.50016 5.00004V6.66671H9.50016V5.00004C9.50016 4.337 9.23677 3.70111 8.76793 3.23227C8.29909 2.76343 7.6632 2.50004 7.00016 2.50004Z"
                            fill="#9C9C9C"
                          />
                        </svg>
                      </span>
                      <div
                        toggle="#password-fieldd"
                        class="fa fa-fw fa-eye field-icon toggle-password"
                      ></div>
                    </div>
                    <button type="submit" class="mt-4 btn-login formregisterslogin">
                    @lang('site.login')
                    </button>
                    <div class="forgit-password pt-2">
{{--                      <a href="#"> @lang('site.forget_password') ؟ </a>--}}
                    </div>
                    <div class="pt-3 user-links">
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
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js"></script>

    <script>
        const input = document.querySelector("#phone");
        window.intlTelInput(input, {
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",
        });
    </script>
    <script>

        function Checkedkeyed(data) {
            console.log("data",data);
            const input = document.querySelector("#phone");
            console.log("input",input);
            const errorMsg = document.querySelector("#error-msg");
            const validMsg = document.querySelector("#valid-msg");

            // here, the index maps to the error code returned from getValidationError - see readme
            const errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

            // initialise plugin
            const iti = window.intlTelInput(input, {
                utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/utils.js"
            });

            const reset = () => {
                input.classList.remove("error");
                errorMsg.innerHTML = "";
                errorMsg.classList.add("hide");
                validMsg.classList.add("hide");
            };

            // on blur: validate
            input.addEventListener('blur', () => {
                reset();
                if (input.value.trim()) {
                    if (iti.isValidNumber()) {
                        validMsg.classList.remove("hide");
                    } else {
                        input.classList.add("error");
                        const errorCode = iti.getValidationError();
                        errorMsg.innerHTML = errorMap[errorCode];
                        errorMsg.classList.remove("hide");
                    }
                }
            });

            // on keyup / change flag: reset
            input.addEventListener('change', reset);
            input.addEventListener('keyup', reset);
        }

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
                            text: "password or phone incorrect!",
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
