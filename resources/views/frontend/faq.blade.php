@extends('layouts.main_frontend')
@section('content')

  <section class="py-md-4 py-2">
        <div class="container">
          <nav class="breadcrumb-container" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a href="{{route('Home')}}">    @lang('site.home') </a>
              </li>
              <li class="breadcrumb-item text-gray-4" aria-current="page">
              @lang('site.questions')
              </li>
            </ol>
          </nav>
        </div>
      </section>
      <section class=" contact-hero position-relative">
        <div class="contact-image">
          <img src="{{FRONTASSETS}}/images/faq-img.png">
        </div>
        <div class="contact-container w-100 d-flex justify-content-center align-items-center  text-center">
          <div>
            <h2>   @lang('site.questions') </h2>
            <div class="d-flex justify-content-center">
             <p class="w-55">
                @lang('site.detailfaqrancy')
             </p>
            </div>
          </div>
        </div>
      </section>
      <section class="gary-bg-data pb-md-4 pb-3">
      <div class="container">
        <div class="row">
            <h2 class="staticH"> @lang('site.essential_questions')</h2>
          </div>
        <div class="row">
          @foreach($freq_question as $k=>$freq_question)
            <div class="col-md-6">
              <div class="accordion-item faq-item mb-4">
                <h2 class="accordion-header">
                  <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-faq-<?=$k?>" aria-expanded="true" aria-controls="accordion-faq-1">
                    <div class="faq-title">{!! html_entity_decode(substr($freq_question->question, 0, 125)) !!}
                    </div>
                    <div>
                        <i class="far fa-chevron-down"></i>
                    </div>
                  </button>
                </h2>
                  <div id="accordion-faq-<?=$k?>" class="accordion-collapse collapse">
                  <div class="accordion-body pb-3 pt-0">
                  <p class="faq-text">{!! html_entity_decode(substr($freq_question->answer, 0, 125)) !!}
                    </p>
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
