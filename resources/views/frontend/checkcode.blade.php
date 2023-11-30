@extends('layouts.main_frontend')

@section('content')

    <main>
        <!-- Desktop Breadcrumb -->
        <section class="py-md-4 py-2">
            <div class="container">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)"> @lang('site.home') </a>
                        </li>
                        <li>
                <span><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="9"
                        height="15"
                        viewBox="0 0 9 15"
                        fill="none"  >
                    <path
                        d="M6.71329 13.9459L0.745584 7.99587C0.67475 7.92503 0.624459 7.8483 0.594709 7.76566C0.564959 7.68302 0.55032 7.59448 0.550792 7.50003C0.550792 7.40559 0.565431 7.31705 0.594709 7.23441C0.623987 7.15177 0.674278 7.07503 0.745584 7.0042L6.71329 1.03649C6.87857 0.871213 7.08517 0.788574 7.33308 0.788574C7.581 0.788574 7.7935 0.877116 7.97058 1.0542C8.14767 1.23128 8.23621 1.43788 8.23621 1.67399C8.23621 1.9101 8.14767 2.1167 7.97058 2.29378L2.76433 7.50003L7.97058 12.7063C8.13586 12.8716 8.2185 13.0753 8.2185 13.3176C8.2185 13.5598 8.12996 13.7693 7.95288 13.9459C7.77579 14.1229 7.56919 14.2115 7.33308 14.2115C7.09697 14.2115 6.89038 14.1229 6.71329 13.9459Z"
                        fill="#005D9F"
                    />
                  </svg>
                </span>
                        </li>

                        <li class="breadcrumb-item text-gray-4" aria-current="page">
                            @lang('site.activation code')
                        </li>
                    </ol>
                </nav>
            </div>
        </section>



        <section class="investor-verification pt-lg-5 pt-3 pb-6 mb-6 gary-bg-data">
            <div class="container">
                <div class="verification_saeeh_card">
                    <form  method="post" action="{{route('checkcodesucess')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-12 mb-3">
                                <h2 class="verification_title"> @lang('site.enter_activation_code') </h2>
                            </div>
                            <div class="col-lg-6 order-mobile-1">
                                <div class="activatiopn-txt">
                                    @lang('site.a code has been sent to the registered phone number')
                                    <span class="text-gray-2">{{$user->country_code}}{{$user->phone}}</span>


                                </div>
                                <div class="verification__timeout">
                                    <div class="mt-3">

                                    </div>
                                </div>

                                <div class="d-flex mt-4 mb-2" id="activationCode">
                                    <input
                                        type="hidden" name="id"  value="{{$user->id}}"/>

                                    <input
                                        type="int"
                                        class="code"
                                        name="code1"
                                        size="1"
                                        maxlength="1"
                                        placeholder="-"
                                    />
                                    <input
                                        type="int"
                                        class="code"
                                        name="code2"
                                        size="1"
                                        maxlength="1"
                                        placeholder="-"
                                    />
                                    <input
                                        type="int"
                                        class="code"
                                        name="code3"
                                        size="1"
                                        maxlength="1"
                                        placeholder="-"
                                    />
                                    <input
                                        type="int"
                                        class="code"
                                        name="code4"
                                        size="1"
                                        maxlength="1"
                                        placeholder="-"
                                    />
                                </div>
                                <br>
                                <span class="error text-danger" ><strong>{{Session('error')}}</strong></span>
                                <div
                                    class="d-flex justify-content-between activationBtns mt-md-5 mt-3"
                                >

                                    <div class="main-btn">
                                        <button
                                            type="submit"
                                        >
                                            @lang('site.to be sure')
                                        </button>
                                    </div>
                                    <div class="second-btn">
                                        <a type="button"  href="{{route('resendcode' , $user->id)}}" > @lang('site.send again') </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-mobile-0">
                                <div class="verification_image">
                                    <img
                                        src="{{FRONTASSETS}}/images/activation-ic.png"
                                        alt="activation-ic"
                                    />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>


    <div
        class="modal fade modal-custom modal-height-mobile verification-modal"
        id="verificationModal"
        tabindex="-1"
        aria-labelledby="verificationModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog small-modal">
            <div class="modal-content">
                <button
                    type="button"
                    class="close-modal d-flex justify-content-center align-items-center"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                >
                    <i class="fal fa-times"></i>
                </button>
                <div class="modal-body p-sm-5 p-4 modal-payment-body">
                    <div class="verification-content text-center">
                        <div>
                            <img
                                src="./assets/images/check-green.png"
                                class="check-image mb-3"
                                alt="check icon"
                            />

                            <h3 class="fw-bold text-second">@lang('site.The code has been activated successfully') </h3>
                            <div class="main-btn w-100 mt-md-5 mt-4">
                                <button type="button" data-bs-dismiss="modal">@lang('site.closed')</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


