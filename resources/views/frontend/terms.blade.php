@extends('layouts.main_frontend')
@section('content')

    <div class="overlay-mobile"></div>

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
                <span><svg xmlns="http://www.w3.org/2000/svg" width="9" height="15" viewBox="0 0 9 15" fill="none">
                    <path d="M6.71329 13.9459L0.745584 7.99587C0.67475 7.92503 0.624459 7.8483 0.594709 7.76566C0.564959 7.68302 0.55032 7.59448 0.550792 7.50003C0.550792 7.40559 0.565431 7.31705 0.594709 7.23441C0.623987 7.15177 0.674278 7.07503 0.745584 7.0042L6.71329 1.03649C6.87857 0.871213 7.08517 0.788574 7.33308 0.788574C7.581 0.788574 7.7935 0.877116 7.97058 1.0542C8.14767 1.23128 8.23621 1.43788 8.23621 1.67399C8.23621 1.9101 8.14767 2.1167 7.97058 2.29378L2.76433 7.50003L7.97058 12.7063C8.13586 12.8716 8.2185 13.0753 8.2185 13.3176C8.2185 13.5598 8.12996 13.7693 7.95288 13.9459C7.77579 14.1229 7.56919 14.2115 7.33308 14.2115C7.09697 14.2115 6.89038 14.1229 6.71329 13.9459Z" fill="#005D9F"></path>
                  </svg>
                </span>
                        </li>

                        <li class="breadcrumb-item text-gray-4" aria-current="page">
                            @lang('site.terms_conditions')
                        </li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="gary-bg-data contact-hero position-relative">
            <div class="contact-image">
                <img src="{{FRONTASSETS}}/images/terms-image.png" alt="contact us image">
            </div>
            <div class="contact-container w-100 d-flex justify-content-center align-items-center text-center">
                <div>
                    <h2> @lang('site.terms_conditions') </h2>

                </div>
            </div>
        </section>
        <section class="gary-bg-data py-md-5 py-3">
            <div class="container">
                <div class="row">
                    <h2 class="mb-3">@lang('site.terms_conditions')</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card-trems mb-4 pb-4">
                            <div class="p-3">
                                <h2 class="terms-title">@lang('site.terms_conditions')</h2>
                                <p class="terms-txt text-gray-4 mb-0">
                                    {{$setting->terms_conditions ?? ''}}
                                </p>
                            </div>
{{--                            <hr class="hr-saeeh my-0">--}}
{{--                            <div class="p-3">--}}
{{--                                <h2 class="terms-title">شروط الاتفاقية</h2>--}}
{{--                                <p class="terms-txt text-gray-4 mb-0">--}}
{{--                                    عبر وصولك واستخدامك تطبيق و موقع saeeh ، فإنك توافق على قبولك، من غير تعديل أو قيود أو شروط على جميع الأحكام والشروط الواردة في هذه الاتفاقية. أنت تقر وتضمن حقك القانوني للدخول في هذه الاتفاقية واستخدام الموقع وفقاً لجميع الشروط والأحكام المتواجدة هنا.--}}
{{--                                </p>--}}
{{--                            </div>--}}


                        </div>
                    </div>

                </div>

            </div>
        </section>
    </main>

@endsection
