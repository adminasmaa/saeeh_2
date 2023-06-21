@extends('layouts.main_frontend')
@section('content')

  <section class="py-md-4 py-2">
        <div class="container">
          <nav class="breadcrumb-container" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a href="javascript:void(0)">    @lang('site.home') </a>
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
              <!-- questions -->
              <li class="breadcrumb-item text-gray-4" aria-current="page">
              @lang('site.questions')
              </li>
            </ol>
          </nav>
        </div>
      </section>
      <section class="gary-bg-data contact-hero position-relative">
        <div class="contact-image">
          <img src="{{FRONTASSETS}}/images/faq-img.png">
        </div>
        <div class="contact-container w-100 d-flex justify-content-center align-items-center  text-center">
          <div>
            <h2>   @lang('site.questions') </h2>
            <div class="d-flex justify-content-center">
             <p class="w-55">يساعدك الحجز عن طريق تطبيق سائح على توفير الوقت والجهد في البحث عن مكان الاقامة المناسب لك وذلك بتوفير قائمة متنوعة من العقارات في التطبيق, كما يوفر لك التطبيق مميزات اخرى تساعدك على اتخاذ القرار المناسب, نستعرض معاً أهم المميزات في التطبيق:</p>
            </div>
          </div>
        </div>
      </section>
      <section class="gary-bg-data py-md-5 py-3">
      <div class="container">
        <div class="row">
            <h2 class="mb-3"> @lang('site.essential_questions')</h2>
          </div>
        <div class="row">
          @foreach($freq_question as $k=>$freq_question)
            <div class="col-md-6">
              <div class="accordion-item faq-item mb-4">
                <h2 class="accordion-header">
                  <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-faq-<?=$k?>" aria-expanded="true" aria-controls="accordion-faq-1">
                    <div class="faq-title">{{$freq_question->question ?? ''}}
                    </div>

                    <div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M2.9 7.15039C3.15 6.90039 3.446 6.77539 3.788 6.77539C4.13 6.77539 4.42567 6.90039 4.675 7.15039L12 14.4754L19.35 7.12539C19.5833 6.89206 19.875 6.77539 20.225 6.77539C20.575 6.77539 20.875 6.90039 21.125 7.15039C21.375 7.40039 21.5 7.69639 21.5 8.03839C21.5 8.38039 21.375 8.67606 21.125 8.92539L12.7 17.3254C12.6 17.4254 12.4917 17.4964 12.375 17.5384C12.2583 17.5804 12.1333 17.6011 12 17.6004C11.8667 17.6004 11.7417 17.5794 11.625 17.5374C11.5083 17.4954 11.4 17.4247 11.3 17.3254L2.875 8.90039C2.64167 8.66706 2.525 8.37939 2.525 8.03739C2.525 7.69539 2.65 7.39972 2.9 7.15039Z" fill="#005D9F"></path>
                        </svg>
                    </div>
                  </button>
                </h2>
                  <div id="accordion-faq-<?=$k?>" class="accordion-collapse collapse" style="">
                  <div class="accordion-body pb-3 pt-0">
                  <p class="faq-text">{{$freq_question->answer ?? ''}}</p>
                  </div>
                    </div>
              </div>
              
            </div>
            @endforeach
          </div>
        </div>
      </section>
    </section>
@endsection