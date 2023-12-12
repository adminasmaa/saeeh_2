@extends('layouts.main_frontend')
@section('content')
    <main>
        <!-- Desktop Breadcrumb -->
        <section class="py-md-4 py-2">
            <div class="container">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{route('Home')}}"> @lang('site.home') </a>
                        </li>
                        <li class="breadcrumb-item text-gray-4" aria-current="page">
                            @lang('site.terms_conditions')
                        </li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="contact-hero position-relative">
            <div class="contact-image">
                <img src="{{FRONTASSETS}}/images/terms-image.png" alt="contact us image">
            </div>
            <div class="contact-container w-100 d-flex justify-content-center align-items-center text-center">
                <div>
                    <h2> @lang('site.terms_conditions') </h2>

                </div>
            </div>
        </section>
        <section class="gary-bg-data  pb-md-5 pb-3">
            <div class="container">
                <div class="row">
                    <h2 class="staticH">@lang('site.terms_conditions')</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card-trems mb-4 pb-4">
                            <div class="p-3">
                                <h2 class="terms-title">@lang('site.terms_conditions')</h2>
                                <p class="terms-txt text-gray-4 mb-0">
                                    {!! html_entity_decode($setting->terms_conditions) !!}
                                </p>
                            </div>


                        </div>
                    </div>

                </div>

            </div>
        </section>
    </main>

@endsection
