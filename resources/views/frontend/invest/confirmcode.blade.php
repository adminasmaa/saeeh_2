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
            <form action="{{ $type==1? route('invst.confirmtion') : route('invst.updatepassword') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
              <div class="col-12 mb-3">
                <h2 class="verification_title"> @lang('site.enter_activation_code') </h2>
              </div>
              <div class="col-lg-6 order-mobile-1">
                <div class="activatiopn-txt">
                @lang('site.a code has been sent to the registered phone number')
                  <span class="text-gray-2">{{$invest->country_code}}{{$invest->phone}}</span>
                </div>
                <div class="verification__timeout">
                  <div class="mt-3">
                    <!-- <div class="verification_counter">00:30</div>
                    <div class="verification_txt">ثانية متبقية</div> -->
                  </div>
                </div>

                <div class="d-flex mt-4 mb-2" id="activationCode">
                <input
                    type="hidden" name="id"  value="{{$invest->id}}"/>

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
                    <a type="button"  href="{{route('invst.resendcode' , $invest->id)}}" > @lang('site.send again') </a>  
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

    @section('scripts')


    <script>
  $("#activationCode").on("keyup", "input", function () {
  var $field = $(this);
  if ($field.val().length === 1) {
    $field.next().focus();
    $field.addClass("active");
  } else {
    $field.removeClass("active");
  }
});
</script>

@endsection
   