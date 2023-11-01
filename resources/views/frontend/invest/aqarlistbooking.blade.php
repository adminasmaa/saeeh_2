@extends('layouts.main_investor')
@section('content')

<main>
    <!-- Desktop Breadcrumb -->
    @php $current_route=Route::current()->parameters()['type'];@endphp
    <section class="py-md-4 py-2">
      <div class="container">
        <nav class="breadcrumb-container" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
              <a href="javascript:void(0)"> الرئيسية </a>
            </li>

            <li class="breadcrumb-item text-main" aria-current="page">
            @if(!is_numeric($current_route))  الحجوزات
            @else حجوزات اعلان رقم ({{$current_route}})
            @endif
          </li>
          </ol>
        </nav>
      </div>
    </section>   
    <!-- section -->
    <section class="aqar-booking">
      <div class="container">
        <div class="row">
          <div class="tabs-details mt-3">
          @if(!is_numeric($current_route))
            <ul class="tabs-nav-details list-unstyled mb-0 tabs-in-mobile flex-wrap">
              <li class="{{$current_route=='all'?'tab-active':'' }}">
                <a href="{{route('invst.listbookings','all')}}" class="tab-link d-flex align-items-center justify-content-center">
                  كل الحجوزات
                </a>
              </li>
              <li class="{{$current_route=='app'?'tab-active':'' }}">
                <a href="{{route('invst.listbookings','app')}}" class="tab-link d-flex align-items-center justify-content-center">
                  حجوزات التطبيق
                </a>
              </li>
              <li class="{{$current_route=='ext'?'tab-active':'' }}">
                <a href="{{route('invst.listbookings','ext')}}" class="tab-link d-flex align-items-center justify-content-center">
                  حجوزات خارجية
                </a>
              </li>
              <li class="{{$current_route=='web'?'tab-active':'' }}">
                <a href="{{route('invst.listbookings','web')}}" class="tab-link d-flex align-items-center justify-content-center">
                  حجوزات الموقع
                </a>
              </li>
              <li class="{{$current_route=='cancel'?'tab-active':'' }}">
                <a href="{{route('invst.listbookings','cancel')}}" class="tab-link d-flex align-items-center justify-content-center">
                  حجوزات الملغاه
                </a>
              </li>
              <li class="{{$current_route=='archef'?'tab-active':'' }}">
                <a href="{{route('invst.listbookings','archef')}}" class="tab-link d-flex align-items-center justify-content-center">
                  الارشيف  
                </a>
              </li>
             
            </ul>
            @endif
            @php $current_route1=Route::currentRouteName();@endphp
            <ul class="tabs-content pt-4 list-unstyled tabs-aqars-booking">
              <li id="tab-1"  >
                <div class="row">
                <form action="{{route($current_route1,$current_route)}}" method="GET">
                  @csrf
                  <div class="col-12">
                    <div class="ads-search-container mt-2 mb-4">
                      <div class="row">
                        <div class="col-lg-8">
                          <input type="search" class="form-control w-100"
                            placeholder=" رقم الحجز /رقم الاعلان "   name="search_id"
                          value="{{ request()->get('search_id') }}"/>
                        </div>
                        <div class="col-lg-4">
                          <div class="search-btn d-flex align-items-center justify-content-center mt-lg-0 mt-3 w-100">
                          <button type="submit">@lang('site.search')</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                  <!-- booking cards -->
                  @if(!empty($allbookings->toArray()['data']))
                  @foreach($allbookings as $k=>$item)
                  <div class="col-12">
                    <div class="card card-department round-border my-3 p-md-3 p-2">
                      <div class="row g-0">
                        <div class="col-lg-3 position-relative">
                          <div class="epartment-img-carousel">
                            <div>
                              <img loading="lazy" src="{{asset('images/aqars/'.$item->main_image)}}"
                                class="department-img-list of-cover" alt="image 1" />
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-9">
                          <div class="card-body position-relative px-lg-3 px-0 h-100">
                            <div class="d-md-flex align-items-center h-100">
                              <div class="ads-left-border">
                                <div class="mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-list-ol"></i></span>
                                  <span class="aqar-booking-item">رقم الإعلان :
                                  </span>
                                  <span class="aqar-booking-item">{{$item->aqar_id}}</span>
                                </div>
                                <div class="mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-list-ol"></i></span>
                                  <span class="aqar-booking-item">
                                    رقم الحجز :
                                  </span>
                                  <span class="aqar-booking-item">{{$item->id}}</span>
                                </div>
                                <div class="mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-list-ol"></i></span>
                                  <span class="aqar-booking-item">
                                    جهه الحجز : {{trans( $item->type)}}
                                  </span>
                                  <span class="aqar-booking-item">
                                    </span>
                                </div>
                                <div class="mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-calendar-alt"></i></span>
                                  <span class="aqar-booking-item">تاريخ الوصول :
                                  </span>
                                  <span class="aqar-booking-item">
                                   {{$item->delivery_date}}</span>
                                </div>
                                <div class="mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-calendar-alt"></i></span>
                                  <span class="aqar-booking-item">
                                    تاريخ المغادرة :
                                  </span>
                                  <span class="aqar-booking-item"> {{$item->reciept_date}}</span>
                                </div>
                              </div>
                              <div>
                                <div class="padding-ads mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-calendar-alt"></i></span>
                                  <span class="aqar-booking-item">
                                    الأيام :
                                  </span>
                                  <span class="aqar-booking-item">
                                  {{$item->day_count}} أيام</span>
                                </div>
                                <div class="padding-ads mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-wallet"></i></span>
                                  <span class="aqar-booking-item">
                                    المبلغ الاجمالي :
                                  </span>
                                  <span class="aqar-booking-item">
                                  {{$item->total_price}} {{$item->currency_ar}} </span>
                                </div>
                                <div class="padding-ads mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-wallet"></i></span>
                                  <span class="aqar-booking-item">
                                    العربون :
                                  </span>
                                  <span class="aqar-booking-item">
                                  {{$item->total_price/$item->day_count}} {{$item->currency_ar}} </span>
                                </div>
                                <div class="padding-ads mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-clock"></i></span>
                                  <span class="aqar-booking-item">
                                    ساعة الوصول :
                                  </span>
                                  <span class="aqar-booking-item">{{date('h:i a', strtotime($item->time_from))}}</span>
                                </div>
                                <div class="padding-ads mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-clock"></i></span>
                                  <span class="aqar-booking-item">
                                    ساعة الوصول :
                                  </span>
                                  <span class="aqar-booking-item">{{date('h:i a', strtotime($item->time_to))}}</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                        <ul class="list-menu flex-center list-unstyled p-0 list-menu-booking">
                          @if($item->booking_status_id==1)
                          <li class="liItem-booking-out">
                          <form action="{{route('invst.accept' , $item->id )}}" method="GET" style="display: inline-block" id="acceptForm{{$item->id}}">
                            @csrf
                            <a type="button" onclick="confirmAction('accept',{{$item->id}},'@lang('site.accept booking')','{{FRONTASSETS}}/images/accept.png',150,150)" id="accept" class="liItem-link">قبول</a>  
                          </form>
                          </li>
                          @endif
                          @if($item->booking_status_id==1 )
                          <li class="liItem-booking-prices">
                          <form action="{{route('invst.reject')}}" method="Post" style="display: inline-block" id="cancelForm{{$item->id}}">
                            @csrf  
                            <input type="hidden" name="id" value="{{$item->id}}">
                            <input type="hidden" name="cancel_reason" class="cancel_reason" value="{{$item->id}}">
                            <a type="button" onclick="confirmcancel('cancel',{{$item->id}},'@lang('site.cancel booking')','{{FRONTASSETS}}/images/cancel.png')" id="cancel" class="liItem-link">الغاء الحجز</a>  
                          </form>
                          </li>
                          @endif
                          @if($item->booking_status_id==3 )
                          <li class="liItem-booking-see">
                          <form action="{{route('invst.attend' , $item->id)}}" method="GET" style="display: inline-block" id="attendForm{{$item->id}}">
                            @csrf
                            <a type="button" onclick="confirmAction('attend',{{$item->id}},'@lang('site.attend booking')','{{FRONTASSETS}}/images/attend.png',300,200)" id="attend" class="liItem-link">حضور</a>  
                          </form>
                           </li>

                           <li class="liItem-booking-edit">
                           <form action="{{route('invst.notattend' , $item->id)}}" method="GET" style="display: inline-block" id="notattendForm{{$item->id}}">
                            @csrf
                            <a type="button" onclick="confirmAction('notattend',{{$item->id}},'@lang('site.not attend booking')','{{FRONTASSETS}}/images/notattend.png',150,150)" id="notattend" class="liItem-link">عدم حضور</a>  
                          </form>
                           </li>
                           @endif
                           <li class="liItem-booking">
                            <a href="{{route('invst.bookingDetails' , $item->id)}}" class="liItem-link">
                            
                             معلومات الحجز
                            </a>
                           </li>

                           
                        </ul></div>
                      </div>
                    </div>
                  </div>
                  @endforeach

                  @if($allbookings->hasPages())              
                    <div class="col-12">
                      <div class="card card-department round-border my-4 p-3">
                        <nav class="department-list-pagination d-md-flex justify-content-md-between align-items-center">
                          <ul class="pagination mb-0 justify-content-lg-start justify-content-center">
                            <li class="page-item">
                            {{$allbookings->links() }}
                            </li>
                          </ul>
                        </nav>
                      </div>
                    </div>
                  @endif
                  @else
                  <!--empty booking-->
                  <div class="col-12 mb-5">
                    <div class="card-empty d-md-flex  align-items-center">
                  
                        <div class="card-empty-txt">لا يوجد حجوزات</div>
                        <div>
                          <img src="{{FRONTASSETS}}/images/booking-investor/empty-ic.svg" alt="empty icon">
                        </div>
                    </div>
                  </div>
                  @endif
                </div>
              </li>
          
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- /section -->
  </main>

@endsection

@section('scripts')
<script>
        function confirmAction($action,$id,$mess,$image,$width,$hight) {
            var that = document.getElementById($action+"Form" + $id);
            swal.fire({
              title:$mess,
              imageUrl: $image,
              imageWidth: $width,
              imageHeight: $hight,
              imageAlt: 'Custom image',
              confirmButtonText:  'نعم',
              cancelButtonText:  'لا',
              showCancelButton: true,
              showCloseButton: true,
              confirmButtonColor: '#ff8600',    
              allowOutsideClick: true,
            }).then((result) => {
                    if (result.isConfirmed) {
                      that.submit();
                    }else {
                 
                }
                })  
        }


          function confirmcancel($action,$id,$mess,$image) {
            var that = document.getElementById($action+"Form" + $id);
            Swal.fire({
              input: 'textarea',
              inputPlaceholder: '@lang("write cancel reason")',
              title:$mess,
              imageUrl: $image,
              imageWidth: 100,
              imageHeight: 100,
              imageAlt: 'Custom image',
              confirmButtonText:  'تأكيد',
              cancelButtonText:  'رجوع',
              showCancelButton: true,
              showCloseButton: true,
              confirmButtonColor: '#ff8600',    
              allowOutsideClick: true,
            }).then((result) => {
                    if (result.isConfirmed) {
                      $('.cancel_reason').val(result.value);
                      that.submit();
                    }else {
                 
                }
                })  
        }
    </script>


@endsection
