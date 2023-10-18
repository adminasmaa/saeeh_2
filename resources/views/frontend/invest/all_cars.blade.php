@extends('layouts.main_investor')
@section('content')


<section class="py-md-4 py-2">
        <div class="container">
          <nav class="breadcrumb-container" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a href="javascript:void(0)"> الرئيسية </a>
              </li>
             

              <li class="breadcrumb-item text-gray-4" aria-current="page">
                اعلاناتى
              </li>
            </ol>
          </nav>
        </div>
      </section>
      <section class="ads-search">
      <form action="{{route('invst.cars.index')}}" method="GET">
        @csrf
        <div class="container">
          <div class="row">
            <div class="col-lg-9">
              <div class="ads-search-container">
                <div
                  class="form-group d-flex align-items-center justify-content-between"
                >
                  <input
                    type="search"
                    class="form-control"
                    placeholder="ادخل رقم الاعلان"
                    name="search_id"
                    value="{{ request()->get('search_id') }}"
                  />
                  <div
                    class="search-btn d-flex align-items-center justify-content-center "
                  >
                   <button type="submit">@lang('site.search')</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="add-ads-container mt-lg-0 mt-3">
                <div
                  class="add-ads-link d-flex align-items-center justify-content-center "
                >
                  <a href="{{route('invst.cars.create')}}">
                    <span
                      ><img
                        src="{{FRONTASSETS}}/images/booking-investor/plus-circle.svg"
                        alt="plus icon"
                    /></span>
                    اضافة اعلان
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        </form>
      </section>
     
      <section class="booking_investor mb-6">
        <div class="container">
        <div class="row">
              <div class="col-12">
       
       
         
          <div class="booking_investor_card">
            <div class="row">
              <div class="col-12">
              @foreach($cars as $car)
                <div class="ads-card mb-md-5 mb-4 p-3">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="ads-card-img">
                      <img
                          src="{{asset('images/cars/'.$car->main_image_ads)}}"
                          alt="ads image"
                        />
                      </div>
                    </div>
                    <div class="col-lg-8">
                    <h2 class="text-main">
                      إعلان رقم ({{$car->id ?? ''}}) 
                      </h2>
                      <div class="d-lg-flex mt-3 w-100">
                        <div class="ads-lborder">
                          <div class="mb-lg-3 mb-2">
                          <span class="ads-item h2">@lang('site.category') :</span>
                            <span class="h2 text-gray">{{$car->categories['name_ar'] ??''}}</span>
                          </div>
                          <div>
                          <span class="ads-item h2">@lang('site.name') :</span>
                            <span class="h2 text-gray">{{$car->name ?? ''}}</span>
                          </div>
                        </div>
                        <div class="w-md-56">
                          <div class="padding-ads ">
                            <ul class="list-menu flex-center list-unstyled p-0">
                              <li class="liItem-booking-out">
                                <a href="#">
                                  <i class="far fa-calendar-plus"></i>
                                  اضافة حجز خارجى</a
                                >
                              </li>
                             
                              <li class="liItem-booking-see">
                                <a href="#">
                                  <i class="far fa-eye"></i>
                                 مشاهدة
                                </a>
                               </li>

                               <li class="liItem-booking-edit">
                                <a href="#">
                                  <i class="fas fa-edit"></i>
                                 تعديل
                                </a>
                               </li>
                               <li class="liItem-booking">
                                <a href="#">
                                  <i class="far fa-book-open"></i>
                                 الحجوزات
                                </a>
                               </li>

                               <li class="liItem-booking-stop">
                                <a href="#">
                                  <i class="far fa-stopwatch"></i>
                                  ايقاف مؤقت
                                </a>
                               </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            @if($cars->hasPages())
          <div class="row">
            <div class="col-12">
              <div class="card card-department round-border my-4 p-3">
                <nav class="department-list-pagination d-md-flex justify-content-md-between align-items-center">
                  <ul class="pagination mb-0 justify-content-lg-start justify-content-center">
                    <li class="page-item">
                    {{$cars->links() }}
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
          @endif
          </div>
         
       </div></div>

        </div>
      </section>
      
        
        </div>
      </section>
      
     

@endsection