<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>@lang('site.saeeeeeeh') </title>
    <!-- Cairo Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet"
    />
    <!-- Font Awesome-->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        rel="stylesheet"
    />
    <!--start rating-->
    <link
        rel="stylesheet"
        href="{{FRONTASSETS}}/styles/star-rating-svg.css"
        type="text/css"
    />
    <!--timepicker-->
    <link rel="stylesheet" href="{{FRONTASSETS}}/js/jquery-timepicker/css/jquery.timepicker.min.css"/>
    <!--datepicker-->
    <link rel="stylesheet" href="{{FRONTASSETS}}/js/datepicker/css/datepicker.min.css"/>
    <!-- Owl Carousel -->
    <link
        rel="stylesheet"
        href="{{FRONTASSETS}}/js/OwlCarousel/css/owl.carousel.min.css"
    />
    <!-- Bootstrap-->
    <link
        rel="stylesheet"
        href="{{FRONTASSETS}}/vendor/bootstrap/css/bootstrap.min.css.map"
        type="text/css"
    />
    <link
        rel="stylesheet"
        href="{{FRONTASSETS}}/vendor/bootstrap/css/bootstrap.min.css"
        type="text/css"
    />
    <link
        rel="stylesheet"
        href="{{FRONTASSETS}}/vendor/bootstrap/css/bootstrap.rtl.min.css"
        type="text/css"
    />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css">

    <!-- intl-tel-input -->
    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.css"--}}
    {{--          integrity="sha512-gxWow8Mo6q6pLa1XH/CcH8JyiSDEtiwJV78E+D+QP0EVasFs8wKXq16G8CLD4CJ2SnonHr4Lm/yY2fSI2+cbmw=="--}}
    {{--          crossorigin="anonymous" referrerpolicy="no-referrer"/>--}}
    <!--select 2-->
    <link rel="stylesheet" href="{{FRONTASSETS}}/js/select2/css/select2.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.7.0/nouislider.min.css"
          integrity="sha512-qveKnGrvOChbSzAdtSs8p69eoLegyh+1hwOMbmpCViIwj7rn4oJjdmMvWOuyQlTOZgTlZA0N2PXA7iA8/2TUYA=="
          crossorigin="anonymous" referrerpolicy="no-referrer">
    <!-- CSS -->
    <link rel="stylesheet" href="{{FRONTASSETS}}/styles/styles.css"/>
    <link rel="stylesheet" href="{{FRONTASSETS}}/styles/responsive-styles.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    @yield('css')
    <!-- Font Awesome-->
    <link
        rel="stylesheet"
        href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
        crossorigin="anonymous"
    />
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous">
    </script>

{{--    <style>--}}
{{--        .side-login-image {--}}
{{--            width: 100%;--}}
{{--            background: url({{FRONTASSETS}}/images/login-bg-mobile.png) center center;--}}
{{--            background-repeat: no-repeat;--}}
{{--            background-size: cover;--}}
{{--            border-radius: 10px 10px 0 0;--}}
{{--            height: 300px;--}}
{{--        }--}}
{{--    </style>--}}

</head>



<body>
{!! headerweb() !!}
@include('sweetalert::alert')
{!! headerwebmobile() !!}



@yield('content')

</body>

{!! footerweb() !!}


<!-- JQuery-->
<script src="{{FRONTASSETS}}/js/jquery.min.js"></script>
<!-- Bootstrap-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"
        integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{FRONTASSETS}}/vendor/bootstrap/js/bootstrap.js"></script>

<!--timepicker-->
<script src="{{FRONTASSETS}}/js/jquery-timepicker/js/jquery.timepicker.js"></script>
<!--datepicker-->
<script src="{{FRONTASSETS}}/js/datepicker/js/datepicker.min.js"></script>
<!--start rating-->
<script src="{{FRONTASSETS}}/js/dist/jquery.star-rating-svg.js"></script>
<!-- Owl Carousel -->
<script src="{{FRONTASSETS}}/js/OwlCarousel/js/owl.carousel.min.js"></script>
{{--<!-- intl-tel-input -->--}}
{{--<script src="{{FRONTASSETS}}/js/intl-tel-input/js/intlTelInput.min.js"></script>--}}
<!--select 2-->
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script>

<script src="{{FRONTASSETS}}/js/select2/js/select2.min.js"></script>
<script src="{{FRONTASSETS}}/js/dist/jquery-ui.js"></script>
<!--nouislider-->
<script src="{{FRONTASSETS}}/js/dist/nouislider.min.js"></script>
<!-- Main JS -->
<script src="{{FRONTASSETS}}/js/script.js"></script>
<script src="{{FRONTASSETS}}/js/custom-rating.js"></script>
{{--   <script src="{{FRONTASSETS}}/js/sliderPrice.js"></script>--}}
<script src="{{FRONTASSETS}}/js/filter-menu-mobile.js"></script>
<!-- Main JS -->
@yield('js')
@yield('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

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
                name: jQuery('.name1').val(),
                message: jQuery('.message').val(),
                phone: jQuery('.phone').val(),


            },
            success: function (result) {
                console.log(result);

                if (result.content == 'success')

                    $('#formregister').hide()
                swal({
                    title: "Success!",
                    text: "The message has been successfully sent!",
                    type: "success",
                    confirmButtonText: "OK"
                });
                window.location.href = '{{route('Home')}}';


            },
            error: function (result) {
                // console.log(result.responseJSON);
                var errors = result.responseJSON;
                var errorsList = "";
                $.each(errors, function (_, value) {
                    $.each(value, function (_, fieldErrors) {
                        fieldErrors.forEach(function (error) {
                            errorsList += "<li style='color:red'>" + error + "</li>";
                        })
                    });
                });
                $('.register_errors').html(errorsList);


            }
        });
    });

</script>
<script>
    $(document).ready(function () {
        $(".select2").select2();
    });
</script>
<script>
    $('#list').on('change', function (e) {
        var lis1 = e.target.value;
        $.get("{{url('countrycities')}}/" + lis1, function (data) {
            $('#list7').empty();
            $('#list7').append('<option value="">@lang('site.select')</option>');
            $.each(data, function (key, value) {
                $('#list7').append('<option value="' + value.id + '">' + value.name_ar + '</option>');


            });
            $("#list7").trigger('change');
        })
    });

    $('#country_id').on('change', function (e) {
        var lis1 = e.target.value;
        $.get("{{url('countrycities')}}/" + lis1, function (data) {
            $('#city_id').empty();
            $('#city_id').append('<option value="">@lang('site.select')</option>');
            $.each(data, function (key, value) {
                $('#city_id').append('<option value="' + value.id + '">' + value.name_ar + '</option>');


            });
            $("#city_id").trigger('change');
        })
    });


    // $('#list7').on('change', function (e) {
    //     var lis1 = e.target.value;
    //     $.get("{{url('categorycities')}}/" + lis1, function (data) {
    //         $('#list2').empty();
    //         $('#list2').append('<option>@lang('site.select')</option>');
    //         $.each(data, function (key, value) {
    //             $('#list2').append('<option value="' + value.category_id + '">' + value.name_ar + '</option>');


    //         });
    //         $("#list2").trigger('change');
    //     })
    // });


    $('#list6').on('change', function (e) {
        var lis1 = e.target.value;
        $.get("{{url('carcategory')}}/" + lis1, function (data) {
            $('#list9').empty();
            $('#list9').append('<option value="">@lang('site.select')</option>');
            $.each(data, function (key, value) {
                $('#list9').append('<option value="' + value.id + '">' + value.name_ar + '</option>');


            });
            $("#list9").trigger('change');
        })
    });


    $('#list2').on('change', function (e) {
        var lis1 = e.target.value;
        $.get("{{url('roomnumbers')}}/" + lis1, function (data) {
            $('#list4').empty();
            console.log(data);
            $('#list4').append('<option>@lang('site.select')</option>');
            $.each(data, function (key, value) {
                $('#list4').append('<option value="' + value.total + '">' + value.total + '</option>');


            });
            $("#list2").trigger('change');
        })
    });

</script>

</body>
</html>
