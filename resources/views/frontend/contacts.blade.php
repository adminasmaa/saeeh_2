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
                            <a href="{{route('Home')}}"> @lang('site.home') </a>
                        </li>
                        <li>
                <span
                ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="9"
                        height="15"
                        viewBox="0 0 9 15"
                        fill="none"
                    >
                    <path
                        d="M6.71329 13.9459L0.745584 7.99587C0.67475 7.92503 0.624459 7.8483 0.594709 7.76566C0.564959 7.68302 0.55032 7.59448 0.550792 7.50003C0.550792 7.40559 0.565431 7.31705 0.594709 7.23441C0.623987 7.15177 0.674278 7.07503 0.745584 7.0042L6.71329 1.03649C6.87857 0.871213 7.08517 0.788574 7.33308 0.788574C7.581 0.788574 7.7935 0.877116 7.97058 1.0542C8.14767 1.23128 8.23621 1.43788 8.23621 1.67399C8.23621 1.9101 8.14767 2.1167 7.97058 2.29378L2.76433 7.50003L7.97058 12.7063C8.13586 12.8716 8.2185 13.0753 8.2185 13.3176C8.2185 13.5598 8.12996 13.7693 7.95288 13.9459C7.77579 14.1229 7.56919 14.2115 7.33308 14.2115C7.09697 14.2115 6.89038 14.1229 6.71329 13.9459Z"
                        fill="#005D9F"
                    />
                  </svg>
                </span>
                        </li>

                        <li class="breadcrumb-item text-gray-4" aria-current="page">


                            @lang('site.contacts')
                        </li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="gary-bg-data contact-hero position-relative">
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
                  <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="41"
                      height="41"
                      viewBox="0 0 41 41"
                      fill="none"
                  >
                    <circle
                        cx="20.5"
                        cy="20.5"
                        r="20.5"
                        fill="#FF8600"
                        fill-opacity="0.31"
                    />
                    <path
                        d="M21 21C21.55 21 22.021 20.804 22.413 20.412C22.8043 20.0207 23 19.55 23 19C23 18.45 22.8043 17.979 22.413 17.587C22.021 17.1957 21.55 17 21 17C20.45 17 19.9793 17.1957 19.588 17.587C19.196 17.979 19 18.45 19 19C19 19.55 19.196 20.0207 19.588 20.412C19.9793 20.804 20.45 21 21 21ZM21 28.35C23.0333 26.4833 24.5417 24.7873 25.525 23.262C26.5083 21.7373 27 20.3833 27 19.2C27 17.3833 26.4207 15.8957 25.262 14.737C24.104 13.579 22.6833 13 21 13C19.3167 13 17.8957 13.579 16.737 14.737C15.579 15.8957 15 17.3833 15 19.2C15 20.3833 15.4917 21.7373 16.475 23.262C17.4583 24.7873 18.9667 26.4833 21 28.35ZM21 31C18.3167 28.7167 16.3127 26.5957 14.988 24.637C13.6627 22.679 13 20.8667 13 19.2C13 16.7 13.8043 14.7083 15.413 13.225C17.021 11.7417 18.8833 11 21 11C23.1167 11 24.979 11.7417 26.587 13.225C28.1957 14.7083 29 16.7 29 19.2C29 20.8667 28.3377 22.679 27.013 24.637C25.6877 26.5957 23.6833 28.7167 21 31Z"
                        fill="#FF8600"
                    />
                  </svg>
                </span>
                            <div class="pe-2">
                                <div class="h2 text-second">@lang('site.address')</div>
                                <p class="mb-0">{{$setting->website_address ?? ''}}</p>
                            </div>
                        </div>
                        <div class="card-contact mb-3 p-3 d-flex">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" viewBox="0 0 41 41" fill="none">
                    <circle cx="20.5" cy="20.5" r="20.5" fill="#FF8600" fill-opacity="0.31"/>
                    <g clip-path="url(#clip0_574_4731)">
                    <path
                        d="M31 15C31 13.9 30.1 13 29 13H13C11.9 13 11 13.9 11 15V27C11 28.1 11.9 29 13 29H29C30.1 29 31 28.1 31 27V15ZM29 15L21 20L13 15H29ZM29 27H13V17L21 22L29 17V27Z"
                        fill="#FF8600"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_574_4731">
                    <rect width="24" height="24" fill="white" transform="translate(9 9)"/>
                    </clipPath>
                    </defs>
                    </svg>
                </span>
                            <div class="pe-2">
                                <div class="h2 text-second">@lang('site.email')</div>
                                <p class="mb-0">{{$setting->email ?? ''}}</p>
                            </div>
                        </div>
                        <div class="card-contact mb-3 p-3 d-flex">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" viewBox="0 0 41 41" fill="none">
                    <circle cx="20.5" cy="20.5" r="20.5" fill="#FF8600" fill-opacity="0.31"/>
                    <g clip-path="url(#clip0_574_18280)">
                    <path
                        d="M12.4878 23.0122C12.392 23.0351 12.2926 23.0388 12.1953 23.0232C12.098 23.0077 12.0047 22.9731 11.9208 22.9214C11.8369 22.8698 11.764 22.8021 11.7062 22.7223C11.6485 22.6425 11.607 22.5521 11.5842 22.4562C11.2424 21.0605 11.2788 19.599 11.6897 18.222C12.1006 16.8451 12.8711 15.6026 13.9219 14.6225C13.9935 14.5548 14.0777 14.5019 14.1697 14.4668C14.2618 14.4316 14.3599 14.415 14.4584 14.4178C14.5568 14.4206 14.6538 14.4428 14.7437 14.483C14.8337 14.5233 14.9148 14.5809 14.9824 14.6526C15.0272 14.7004 15.0656 14.7537 15.0969 14.8113C15.1755 14.9567 15.2038 15.124 15.1775 15.2871C15.1512 15.4503 15.0718 15.6002 14.9515 15.7136C14.0936 16.5134 13.4645 17.5276 13.1291 18.6516C12.7937 19.7755 12.7642 20.9686 13.0434 22.1078C13.0664 22.2037 13.0703 22.3031 13.0548 22.4005C13.0393 22.4979 13.0047 22.5912 12.9531 22.6752C12.9015 22.7592 12.8339 22.8322 12.754 22.89C12.6742 22.9479 12.5837 22.9894 12.4878 23.0122ZM16.0393 21.3415C15.7282 20.0401 16.0641 18.9145 17.0375 17.9963C17.1578 17.883 17.2372 17.7331 17.2635 17.5699C17.2898 17.4067 17.2615 17.2395 17.1829 17.0941C17.1516 17.0365 17.1132 16.9832 17.0684 16.9354C17.0008 16.8637 16.9197 16.8061 16.8297 16.7658C16.7398 16.7255 16.6428 16.7034 16.5444 16.7006C16.4459 16.6978 16.3478 16.7144 16.2557 16.7496C16.1637 16.7847 16.0795 16.8376 16.0079 16.9053C14.6557 18.1815 14.1485 19.8814 14.5801 21.6899C14.603 21.7857 14.6445 21.876 14.7023 21.9558C14.7601 22.0356 14.833 22.1032 14.917 22.1547C15.0009 22.2063 15.0942 22.2409 15.1914 22.2564C15.2887 22.2719 15.3881 22.2681 15.4839 22.2453C15.5797 22.2224 15.6701 22.1809 15.7498 22.1231C15.8296 22.0653 15.8972 21.9923 15.9488 21.9084C16.0004 21.8245 16.0349 21.7312 16.0504 21.634C16.066 21.5367 16.0622 21.4373 16.0393 21.3415ZM20.2518 10.3336C21.4489 9.87679 22.7713 9.87133 23.9721 10.3183C25.173 10.7652 26.17 11.634 26.7771 12.7623C30.3158 19.3111 27.8667 27.5184 21.3179 31.057C20.1917 31.6682 18.8816 31.8485 17.6322 31.5642C16.3829 31.28 15.2797 30.5507 14.5287 29.5126C14.3415 29.2486 14.2446 28.9312 14.2527 28.6077C14.2607 28.2841 14.3731 27.9719 14.5732 27.7175L17.5208 23.8742L17.5307 23.8688C17.6838 23.6741 17.8828 23.5203 18.1099 23.4213C18.3369 23.3222 18.585 23.2809 18.8319 23.3011C18.8622 23.3039 18.8913 23.3084 18.9208 23.3138L21.8843 23.931C22.8058 22.635 23.3978 20.6186 23.33 19.0121L20.5371 17.9275C20.5099 17.9168 20.4833 17.9045 20.4575 17.8906C20.2371 17.7739 20.0493 17.6041 19.9111 17.3965C19.7729 17.1889 19.6886 16.9502 19.6659 16.7018L19.6651 16.6884L19.3066 11.862C19.278 11.5394 19.3546 11.2161 19.525 10.9406C19.6954 10.6651 19.9504 10.4522 20.2518 10.3336ZM20.7946 11.7325L20.7995 11.7416L21.158 16.5563L23.9513 17.6416C23.9784 17.6522 24.0048 17.6642 24.0305 17.6777C24.2598 17.7992 24.4537 17.978 24.5932 18.1968C24.7327 18.4156 24.8131 18.6668 24.8265 18.926C24.9148 20.8741 24.2185 23.2398 23.094 24.8129C22.9428 25.0225 22.74 25.1894 22.5053 25.2976C22.2707 25.4057 22.012 25.4514 21.7545 25.4302C21.7246 25.4283 21.6948 25.424 21.6656 25.4175L18.6987 24.7999L15.7581 28.6266C15.755 28.6287 15.7517 28.6305 15.7482 28.632C16.2848 29.3754 17.0739 29.8978 17.9679 30.1013C18.8619 30.3048 19.7993 30.1754 20.6048 29.7374C23.4022 28.2218 25.4841 25.6585 26.3939 22.6098C27.3036 19.5612 26.9669 16.2761 25.4575 13.4754C25.0246 12.6678 24.3125 12.0455 23.4542 11.7248C22.5958 11.4041 21.6501 11.407 20.7938 11.733L20.7946 11.7325Z"
                        fill="#FF8600"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_574_18280">
                    <rect width="24" height="24" fill="white" transform="translate(16.1465 37.2617) rotate(-118.385)"/>
                    </clipPath>
                    </defs>
                    </svg>
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
                        title: "Added!",
                        text: "The message has been successfully sent!",
                        type: "success",
                        confirmButtonText: "OK"
                    });


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

