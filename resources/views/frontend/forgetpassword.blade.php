@extends('layouts.main_frontend')

@section('content')

    <main>
        <section class="py-5">
            <div class="container w-100">
                <div class="row d-flex justify-content-center">
                    <div
                        class="col-12 login-body d-lg-flex justify-content-lg-between px-0"
                    >
                        <div class="text-center my-lg-5 my-3 login-content">

                            <form action="{{ route('checkforgetwithphone')}}" method="post"
                                  enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div
                                    class="row d-flex justify-content-center align-items-center h-100"
                                >


                                    <div class="col-md-10 col-11 my-lg-5 my-2">
                                        <h2 class="fw-bold login-title mb-5"> @lang('site.login')</h2>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <ul id="register_errorslogin">
                                                    <span class="error text-danger" ><strong>{{Session('error')}}</strong></span>


                                                    </ul>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="emailcont">
                                            <input id="phoneee" type="tel" class="form-control frm-input phone3" name="phone">

                                            <span class="icon-placeholder">

                      <i class="far fa-phone"></i>
                    </span>

                                        </div>
                                        <div>
                                            <span id="valid-msg" class="hide">✓ Valid</span>
                                            <span id="error-msg" class="hide"></span>

                                            @if($errors->has('phone'))
                                                <span id="error-msg"
                                                      class="text-danger">{{ $errors->first('phone') }}</span>
                                            @endif
                                        </div>

                                        <br>
                                        <br>
                                        <button type="submit" class="mt-lg-4  btn-login formregisterslogin">
                                            @lang('site.to be sure')
                                        </button>


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

@endsection
