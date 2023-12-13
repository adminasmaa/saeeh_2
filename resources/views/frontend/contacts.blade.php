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
                            @lang('site.contacts')
                        </li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="contact-hero position-relative">
            <div class="contact-image">
                <img
                    src="{{FRONTASSETS}}/images/contact-us-img.png"
                    alt="contact us image"
                />
            </div>
            <div
                class="contact-container w-100 d-flex justify-content-center align-items-center  text-center"
            >
                <div>
                    <h2>  @lang('site.contacts')</h2>
                    <p>@lang('site.contactmessage')</p>
                </div>
            </div>
        </section>
        <section class="gary-bg-data py-md-5 py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card-contact mb-3 p-3 d-flex">
                            <span>
                            <img src="{{FRONTASSETS}}/images/location-contact-ic.png" alt="location icon">
                            </span>
                            <div class="pe-2">
                                <div class="h2 text-second">@lang('site.address')</div>
                                <p class="mb-0">{{$setting->website_address ?? ''}}</p>
                            </div>
                        </div>
                        <div class="card-contact mb-3 p-3 d-flex">
                        <span>
                            <img src="{{FRONTASSETS}}/images/email-contact-ic.png" alt="email icon">
                            </span>
                            <div class="pe-2">
                                <div class="h2 text-second">@lang('site.email')</div>
                                <p class="mb-0">{{$setting->email ?? ''}}</p>
                            </div>
                        </div>
                        <div class="card-contact mb-3 p-3 d-flex">
                        <span>
                            <img src="{{FRONTASSETS}}/images/call-contact-ic.png" alt="call icon">
                            </span>
                            <div class="pe-2">
                                <div class="h2 text-second">@lang('site.inquires')</div>
                                <p class="mb-0">{{$setting->phone_one ?? ''}}</p>
                                <p class="mb-0">{{$setting->phone_two ?? ''}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card-contact mb-3 p-3">
                            <div class="h2 text-second">@lang('site.Submit your data')</div>
                            <p class="w-contact-45">@lang('site.You can send your message by entering all data in the input fields')</p>

                            <form class="formregister" id="formregister">


                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">

                                            <ul class="register_errorsS"></ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="name" class="contact-lbl mb-2">@lang('site.name')</label>
                                            <input type="text" name="name" class="form-control contact-input name2"
                                                   placeholder="{{trans('site.name')}}">

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="phone" class="contact-lbl mb-2"> @lang('site.phone')</label>
                                            <input type="number" name="phone" class="form-control contact-input phone2"
                                                   placeholder="{{trans('site.phone')}}">


                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="name" class="contact-lbl mb-2">@lang('site.message')</label>
                                            <textarea class="form-control txtarea-contact p-3 message2" name="message"
                                                      placeholder="{{trans('site.message')}}" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button
                                            class="contact-btn d-flex justify-content-center align-items-center mt-3 formregisters">
                                            @lang('site.send')
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-map py-md-5 py-3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-map-title">@lang('site.locations')</h2>
                    </div>
                    <div class="col-12">
                        <div class="map my-3">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319"
                                width="100%" height="325" frameborder="0" class="round-border">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('scripts')

    <script>


        jQuery('.formregisters').click(function (e) {
            // console.log("daaaa");
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            jQuery.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},

                url: "{{ route('addContacts') }}",
                method: 'post',
                data: {
                    _token: '{{ csrf_token() }}',
                    name: jQuery('.name2').val(),
                    message: jQuery('.message2').val(),
                    phone: jQuery('.phone2').val(),


                },
                success: function (result) {
                    console.log(result);

                    if (result.content == 'success')


                    swal({
                        title: "Success!",
                        text: "The message has been successfully sent!",
                        type: "success",
                        confirmButtonText: "OK"
                    });

                    setTimeout(function () {
                        Swal.close()
                    }, 2000)

                    window.location.href = '{{route('Home')}}';

                },
                error: function (result) {
                    // console.log(result.responseJSON);
                    var errors = result.responseJSON;
                    var errorsList = "";
                    $.each(errors, function (_, value) {
                        $.each(value, function (_, fieldErrors) {
                            fieldErrors.forEach(function (error) {
                                errorsList += "<li style='color:#e81f1f'>" + error + "</li>";
                            })
                        });
                    });
                    $('.register_errorsS').html(errorsList);


                }
            });
        });

    </script>



@endsection

