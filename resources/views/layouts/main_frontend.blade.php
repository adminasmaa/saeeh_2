
<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Home | Saeeh</title>
 <!-- Cairo Font -->
 <link rel="preconnect" href="https://fonts.googleapis.com" />
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
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
 <link rel="stylesheet" href="{{FRONTASSETS}}/js/jquery-timepicker/css/jquery.timepicker.min.css" />
 <!--datepicker-->
 <link rel="stylesheet" href="{{FRONTASSETS}}/js/datepicker/css/datepicker.min.css" />
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
 <!-- intl-tel-input -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.css"
 integrity="sha512-gxWow8Mo6q6pLa1XH/CcH8JyiSDEtiwJV78E+D+QP0EVasFs8wKXq16G8CLD4CJ2SnonHr4Lm/yY2fSI2+cbmw=="
 crossorigin="anonymous" referrerpolicy="no-referrer" />
 <!--select 2-->
 <link rel="stylesheet" href="{{FRONTASSETS}}/js/select2/css/select2.min.css" />
 <!-- CSS -->
 <link rel="stylesheet" href="{{FRONTASSETS}}/styles/styles.css" />
 <link rel="stylesheet" href="{{FRONTASSETS}}/styles/responsive-styles.css" />

 @yield('css')
  </head>

<body>
{!! headerweb() !!}

   

@yield('content')

</body>

{!! footerweb() !!}


<!-- JQuery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{FRONTASSETS}}/vendor/bootstrap/js/bootstrap.js"></script>
    <!-- JQuery-->
    <script src="{{FRONTASSETS}}/js/jquery.min.js" ></script>
    <!--timepicker-->
    <script src="{{FRONTASSETS}}/js/jquery-timepicker/js/jquery.timepicker.js"></script>
    <!--datepicker-->
    <script src="{{FRONTASSETS}}/js/datepicker/js/datepicker.min.js"></script>
    <!--start rating-->
    <script src="{{FRONTASSETS}}/js/dist/jquery.star-rating-svg.js"></script>
    <!-- Owl Carousel -->
    <script src="{{FRONTASSETS}}/js/OwlCarousel/js/owl.carousel.min.js"></script>
    <!-- intl-tel-input -->
    <script src="{{FRONTASSETS}}/js/intl-tel-input/js/intlTelInput.min.js"></script>
    <!--select 2-->
    <script src="{{FRONTASSETS}}/js/select2/js/select2.min.js"></script>
    <script src="{{FRONTASSETS}}/js/dist/jquery-ui.js"></script>
   <!--nouislider-->
   <script src="{{FRONTASSETS}}/js/dist/nouislider.min.js"></script>
   <!-- Main JS -->
   <script src="{{FRONTASSETS}}/js/script.js"></script>
   <script src="{{FRONTASSETS}}/js/custom-rating.js"></script>
   <script src="{{FRONTASSETS}}/js/sliderPrice.js"></script>
   <script src="{{FRONTASSETS}}/js/filter-menu-mobile.js"></script>
<!-- Main JS -->
@yield('js')
@yield('scripts')
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
            $('#list7').append('<option>@lang('site.select')</option>');
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
            $('#city_id').append('<option>@lang('site.select')</option>');
            $.each(data, function (key, value) {
                $('#city_id').append('<option value="' + value.id + '">' + value.name_ar + '</option>');
                

            });
            $("#city_id").trigger('change');
        })
    });


    $('#list7').on('change', function (e) {
        var lis1 = e.target.value;
        $.get("{{url('categorycities')}}/" + lis1, function (data) {
            $('#list2').empty();
            $('#list2').append('<option>@lang('site.select')</option>');
            $.each(data, function (key, value) {
                $('#list2').append('<option value="' + value.category_id + '">' + value.name_ar + '</option>');
                

            });
            $("#list2").trigger('change');
        })
    });


    
    $('#list6').on('change', function (e) {
        var lis1 = e.target.value;
        $.get("{{url('carcategory')}}/" + lis1, function (data) {
            $('#list9').empty();
            $('#list9').append('<option>@lang('site.select')</option>');
            $.each(data, function (key, value) {
                $('#list9').append('<option value="' + value.id + '">' + value.name_ar + '</option>');
                

            });
            $("#list9").trigger('change');
        })
    });


    // $('#list2').on('change', function (e) {
    //     var lis1 = e.target.value;
    //     $.get("{{url('dashboard/roomnumbers')}}/" + lis1, function (data) {
    //         $('#list4').empty();
    //         console.log(data);
    //         $('#list4').append('<option>@lang('site.select')</option>');
    //         $.each(data, function (key, value) {
    //             $('#list4').append('<option value="' + value.id + '">' + value + '</option>');
                

    //         });
    //         $("#list2").trigger('change');
    //     })
    // });

</script>

</body>
</html>