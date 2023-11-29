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
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />

    <!--start rating-->
    <link
      rel="stylesheet"
      href="{{FRONTASSETS}}/styles/star-rating-svg.css"
      type="text/css"
    />
    <!--timepicker-->
    <link
      rel="stylesheet"
      href="{{FRONTASSETS}}/js/jquery-timepicker/css/jquery.timepicker.min.css"
    />
    <!--datepicker-->
    <link
      rel="stylesheet"
      href="{{FRONTASSETS}}/js/datepicker/css/datepicker.min.css"
    />
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
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.css"
      integrity="sha512-gxWow8Mo6q6pLa1XH/CcH8JyiSDEtiwJV78E+D+QP0EVasFs8wKXq16G8CLD4CJ2SnonHr4Lm/yY2fSI2+cbmw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!--select 2-->
    <link rel="stylesheet" href="{{FRONTASSETS}}/js/select2/css/select2.min.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="{{FRONTASSETS}}/styles/styles.css" />
    <link rel="stylesheet" href="{{FRONTASSETS}}/styles/responsive-styles.css" />
    <style>
    @media print {
  #printPageButton {
    display: none;
  }
}
  </style>
  </head>


  <body>
    <section class="mt-5 mb-lg-5 mb-3">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="d-flex justify-content-end nav-section">
              <nav class="navbar navbar-expand-lg">
                <button type="button"  id="printPageButton"  class="btn btn-main btn-print" onclick="window.print()">
                  <span><i class="far fa-print"></i></span>
                  @lang('site.print')
                </button>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>

    <main>
      <section class="customer-information mb-6">
        <div class="container">
          <div class="customer-info_card">
            <div class="customer-info-header py-4 px-lg-5 px-3 position-relative">
              <div class="d-lg-flex justify-content-between align-items-center">
                <div class="customer-info-header-logo">
                  <a href="#">
                    <img
                      class="logo-saeeh-investor"
                      src="{{FRONTASSETS}}/images/booking-investor/logo-xl.svg"
                      alt="logo"
                    />
                  </a>
                </div>
                <img src="{{FRONTASSETS}}/images/booking-investor/f-customer-info.svg" class="customer-header-bg-icon" alt="customer info">
                <ul class="customer-info-header-social list-unstyled p-0 mb-0">
                  <li class="mb-2">
                    <a href="">
                      <span class="ps-2">
                        <img
                          src="{{FRONTASSETS}}/images/booking-investor/snapchat_icon.svg"
                          alt="snapchat icon"
                        />
                      </span>
                      <span class="h2 text-gray-2">saeeh.com</span>
                    </a>
                  </li>
                  <li>
                    <a href="">
                      <span class="ps-2">
                        <img
                          src="{{FRONTASSETS}}/images/booking-investor/instagram_icon.svg"
                          alt="instagram icon"
                        />
                      </span>
                      <span class="h2 text-gray-2">saeeh.com</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="customer-info-body p-md-5 p-3 position-relative">
              <div class="row">
                <div class="customer-info-title">
                  <span> @lang('site.client_information')
                  </span>
                </div>
                <div class="col-12 custom-table customer-info-table table-responsive">
                  <table class="table table-bordered table-sm">
                    <thead>
                      <tr>
                        <th>
                          <div class="d-flex align-items-center">
                            <div class="mt-2">
                              <i class="far fa-user-circle"></i>
                            </div>
                            <div class="th-txt"> @lang('site.name') </div>
                          </div>
                        </th>

                        <th>
                          <div class="d-flex align-items-center">
                            <div class="th-txt">{{$booking->user->firstname}}</div>
                          </div>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="mt-2">
                              <i class="far fa-list-ol"></i>
                            </div>
                            <div class="th-txt"> @lang('site.booking_number') </div>
                          </div>
                        </td>

                        <td>
                          <div class="table-txt">{{$booking->id}}</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="mt-2">
                              <i class="fal fa-calendar-alt"></i>
                            </div>
                            <div class="th-txt"> @lang('site.date_of_arrival')</div>
                          </div>
                        </td>

                        <td>
                          <div class="table-txt">{{$booking->delivery_date}}</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="mt-2">
                              <i class="fal fa-calendar-alt"></i>
                            </div>
                            <div class="th-txt"> @lang('site.date_of_departure') </div>
                          </div>
                        </td>

                        <td>
                          <div class="table-txt">{{$booking->reciept_date}}</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="mt-2">
                              <i class="far fa-clock"></i>
                            </div>
                            <div class="th-txt"> @lang('site.arrival hour') </div>
                          </div>
                        </td>

                        <td>
                          <div class="table-txt">{{date('h:i a', strtotime($booking->time_from))}}</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="mt-2">
                              <i class="far fa-clock"></i>
                            </div>
                            <div class="th-txt"> @lang('site.receipt_hour') </div>
                          </div>
                        </td>

                        <td>
                          <div class="table-txt">{{date('h:i a', strtotime($booking->time_to))}}</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="mt-2">
                              <i class="far fa-wallet"></i>
                            </div>
                            <div class="th-txt"> @lang('site.paid') </div>
                          </div>
                        </td>

                        <td>
                          <div class="table-txt">{{$booking->total_price/$booking->day_count}} {{$booking->city->country->currency_ar}} </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="mt-2">
                              <i class="far fa-wallet"></i>
                            </div>
                            <div class="th-txt">@lang('site.residual')</div>
                          </div>
                        </td>

                        <td>
                          <div class="table-txt">{{$booking->total_price-($booking->total_price/$booking->day_count)}}{{$booking->city->country->currency_ar}}</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="mt-2">
                              <i class="far fa-wallet"></i>
                            </div>
                            <div class="th-txt"> @lang('site.deposit') </div>
                          </div>
                        </td>

                        <td>
                          <div class="table-txt">{{$booking->total_price/$booking->day_count}} {{$booking->city->country->currency_ar}}</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row">
                <div class="customer-info-title">
                  <span> @lang('site.category_information')</span>
                </div>

                <div class="col-12 custom-table customer-info-table table-responsive">
                  <table class="table table-bordered table-sm">
                    <thead>
                      <tr>
                        <th>
                          <div class="d-flex align-items-center">
                            <div class="mt-2">
                              <i class="far fa-user-circle"></i>
                            </div>
                            <div class="th-txt"> @lang('site.Name of the manager') </div>
                          </div>
                        </th>

                        <th>
                          <div class="d-flex align-items-center">
                            <div class="th-txt">{{$booking->aqar->user->firstname}}</div>
                          </div>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="mt-2">
                              <i class="far fa-th-list"></i>
                            </div>
                            <div class="th-txt"> @lang('site.Category') </div>
                          </div>
                        </td>
                        <td>
                          <div class="table-txt">{{$booking->aqar->category->name_ar}}</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="mt-2">
                              <i class="far fa-list-ol"></i>
                            </div>
                            <div class="th-txt"> @lang('site.Ads_number') </div>
                          </div>
                        </td>

                        <td>
                          <div class="table-txt">{{$booking->aqar->id}}</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="mt-2">
                              <i class="far fa-map-marker-alt"></i>
                            </div>
                            <div class="th-txt"> @lang('site.area') </div>
                          </div>
                        </td>

                        <td>
                          <div class="table-txt"> {{$booking->aqar->area->name_ar}} </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="mt-2">
                              <i class="far fa-wallet"></i>
                            </div>
                            <div class="th-txt"> @lang('site.commission') </div>
                          </div>
                        </td>

                        <td>
                          <div class="table-txt"> {{$booking->aqar->user->comision}}</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="customer-info-footer  p-lg-5 p-3 position-relative">
         
                <img src="{{FRONTASSETS}}/images/booking-investor/f-customer-info.svg" class="customer-info-bg-icon" alt="customer info">
            
              <div class="row">
                <div class="col-lg-7">
                  <div class="mb-2">
                    <a href="#" class="d-flex">
                      <div class="footer-ic">
                        <img
                          src="{{FRONTASSETS}}/images/booking-investor/footer-ic1.svg"
                          alt="snapchat icon"
                        />
                      </div>
                      <div class="h2 text-gray-2"> شارع عبد الكريم الخطابى بجانب فندق وازوو- طريق النخيل مراكش طريق الوطنية9   </div>
                    </a>
                  </div>
                  <div  class="mb-lg-0 mb-3">
                    <a href="#" class="d-flex">
                      <div class="footer-ic">
                        <img
                          src="{{FRONTASSETS}}/images/booking-investor/footer-ic2.svg"
                          alt="instagram icon"
                        />
                      </div>
                      <div class="h2 text-gray-2">saeeh@saeeh.com</div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-5">
                  <div class="mb-2">
                    <a href="#" class="d-flex">
                      <div class="footer-ic">
                        <img
                          src="{{FRONTASSETS}}/images/booking-investor/footer-ic3.svg"
                          alt="snapchat icon"
                        />
                      </div>
                      <div class="h2 text-gray-2">0707076666
                        <br>
                        0707078888
                      </div>
                    </a>
                  </div>
                  <div>
                    <a href="#" class="d-flex">
                      <div class="footer-ic">
                        <img
                          src="{{FRONTASSETS}}/images/booking-investor/footer-ic4.svg"
                          alt="instagram icon"
                        />
                      </div>
                      <div class="h2 text-gray-2">saeeh.com</div>
                    </a>
                  </div>
                </div>
                
              </div>
             
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Bootstrap-->
    <!-- <script src="{{FRONTASSETS}}/vendor/popper.min.js"></script> -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"
      integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="{{FRONTASSETS}}/vendor/bootstrap/js/bootstrap.js"></script>
    <!-- JQuery-->
    <script src="{{FRONTASSETS}}/js/jquery.min.js"></script>
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
    
  </body>
</html>



