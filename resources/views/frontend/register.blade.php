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
                  <div class="col-md-10 col-10 my-lg-5 my-2">
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
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="18"
                              height="18"
                              viewBox="0 0 18 18"
                              fill="none"
                            >
                              <path
                                d="M8.99984 0.666748C7.90549 0.666748 6.82185 0.882296 5.81081 1.30109C4.79976 1.71987 3.8811 2.3337 3.10728 3.10752C1.54448 4.67033 0.666504 6.78994 0.666504 9.00008C0.666504 11.2102 1.54448 13.3298 3.10728 14.8926C3.8811 15.6665 4.79976 16.2803 5.81081 16.6991C6.82185 17.1179 7.90549 17.3334 8.99984 17.3334C11.21 17.3334 13.3296 16.4554 14.8924 14.8926C16.4552 13.3298 17.3332 11.2102 17.3332 9.00008C17.3332 7.90573 17.1176 6.8221 16.6988 5.81105C16.28 4.80001 15.6662 3.88135 14.8924 3.10752C14.1186 2.3337 13.1999 1.71987 12.1889 1.30109C11.1778 0.882296 10.0942 0.666748 8.99984 0.666748ZM4.8915 14.2334C5.24984 13.4834 7.43317 12.7501 8.99984 12.7501C10.5665 12.7501 12.7498 13.4834 13.1082 14.2334C11.941 15.1634 10.4922 15.6689 8.99984 15.6667C7.44984 15.6667 6.02484 15.1334 4.8915 14.2334ZM14.2998 13.0251C13.1082 11.5751 10.2165 11.0834 8.99984 11.0834C7.78317 11.0834 4.8915 11.5751 3.69984 13.0251C2.81332 11.8706 2.33289 10.4557 2.33317 9.00008C2.33317 5.32508 5.32484 2.33341 8.99984 2.33341C12.6748 2.33341 15.6665 5.32508 15.6665 9.00008C15.6665 10.5167 15.1498 11.9167 14.2998 13.0251ZM8.99984 4.00008C7.38317 4.00008 6.08317 5.30008 6.08317 6.91675C6.08317 8.53341 7.38317 9.83341 8.99984 9.83341C10.6165 9.83341 11.9165 8.53341 11.9165 6.91675C11.9165 5.30008 10.6165 4.00008 8.99984 4.00008ZM8.99984 8.16675C8.66832 8.16675 8.35037 8.03505 8.11595 7.80063C7.88153 7.56621 7.74984 7.24827 7.74984 6.91675C7.74984 6.58523 7.88153 6.26728 8.11595 6.03286C8.35037 5.79844 8.66832 5.66675 8.99984 5.66675C9.33136 5.66675 9.6493 5.79844 9.88372 6.03286C10.1181 6.26728 10.2498 6.58523 10.2498 6.91675C10.2498 7.24827 10.1181 7.56621 9.88372 7.80063C9.6493 8.03505 9.33136 8.16675 8.99984 8.16675Z"
                                fill="#9C9C9C"
                              />
                            </svg>
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
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="18"
                              height="14"
                              viewBox="0 0 18 14"
                              fill="none"
                            >
                              <path
                                d="M2.33317 13.6667C1.87484 13.6667 1.48234 13.5034 1.15567 13.1767C0.829005 12.85 0.66595 12.4578 0.666505 12V2.00004C0.666505 1.54171 0.829839 1.14921 1.15651 0.822542C1.48317 0.495875 1.87539 0.33282 2.33317 0.333375H15.6665C16.1248 0.333375 16.5173 0.496709 16.844 0.823375C17.1707 1.15004 17.3337 1.54226 17.3332 2.00004V12C17.3332 12.4584 17.1698 12.8509 16.8432 13.1775C16.5165 13.5042 16.1243 13.6673 15.6665 13.6667H2.33317ZM15.6665 3.66671L9.43734 7.56254C9.36789 7.60421 9.29484 7.6356 9.21817 7.65671C9.14151 7.67782 9.06873 7.6881 8.99984 7.68754C8.93039 7.68754 8.85734 7.67726 8.78067 7.65671C8.70401 7.63615 8.63123 7.60476 8.56234 7.56254L2.33317 3.66671V12H15.6665V3.66671ZM8.99984 6.16671L15.6665 2.00004H2.33317L8.99984 6.16671ZM2.33317 3.87504V2.64588V2.66671V2.65671V3.87504Z"
                                fill="#9C9C9C"
                              />
                            </svg>
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
                            toggle="#password-field-confirm"
                            class="fa fa-fw fa-eye field-icon toggle-password"
                          ></div>
                        </div>
                      </div>
                    </div>
                    <div class="emailcont">
                      <input
                        type="tel"
                        name="phone"
                        class="form-control frm-input mb-3 phone2"
                        placeholder="{{trans('site.phone')}}"
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
                    <button type="submit" class="mt-4 btn-login formregistersUser">
                       {{trans('site.sing_up')}}
                    </button>

                    <div class="pt-3 user-links">
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

    </script>
@endsection
