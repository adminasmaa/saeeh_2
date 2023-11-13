@extends('layouts.main_investor')
@section('content')

<main>
      <!-- Desktop Breadcrumb -->
      <section class="py-md-4 py-2">
        <div class="container">
          <nav class="breadcrumb-container" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a href="javascript:void(0)">الرئيسية </a>
              </li>
              <li class="breadcrumb-item text-gray-4" aria-current="page">
                سياسة الحجز والالغاء 
              </li>
            </ol>
          </nav>
        </div>
      </section>
    
      <section class="booking_investor mb-lg-6 my-5">
        <div class="container">
          <div class="ads_investor_card">
            <form action="{{ route('invst.add_conditions')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="row">
                <div class="col-12">
                  <h2 class="add_frm_title mb-3"> أى سياسة إلغاء وإسترجاع تتناسب معك ؟ </h2>
              <h2 class="text-main mb-3">سوف يظهر للعميل شروط الحجز الموجوده وقت ماتم حجزه</h2>
                </div>

                <div class="col-12">
                
                  <div class="add-ads-card mb-md-5 mb-4">
                    <div class="row">
                      <div class="col-12 mb-lg-0 mb-3">
                        <label for="" class="pb-2 ads-card-lbl">
                          لتعديل او كتابة شروط
                        </label>
                      
                        <div class="form-group">
                          <textarea
                            class="form-control txtarea-ads p-lg-3 p-2 mt-2"
                            placeholder="الشروط والاحكام"
                            rows="6"
                            name="conditions"
                            value=""
                          >{{ old('conditions', (empty($conditions))? null : $conditions['conditions']) }}</textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 d-flex justify-content-center mt-lg-5 mt-3">
                  <div
                    class="booking-now-btn py-4 d-flex justify-content-center align-items-center"
                  >
                    <button type="submit" class="btn"><i
                                                class="fa fa-plus p-1"></i>
                                           موافق</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>
    </main>


@endsection