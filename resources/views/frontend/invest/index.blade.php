@extends('layouts.main_investor')
@section('content')
<main>
      <!-- Desktop Breadcrumb -->
      <section class="py-md-4 py-2">
        <div class="container">
          <nav class="breadcrumb-container" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a href="{{route('invst.home')}}">  @lang('site.home')  </a>
              </li>
             
              <li class="breadcrumb-item text-gray-4" aria-current="page">
              @lang('site.profiles')
              </li>
            </ol>
          </nav>
        </div>
      </section>
      <section class="booking_investor mb-6">
        <div class="container">
          <div class="booking_investor_card">
            <div class="row">
              <div class="col-lg-4 col-sm-6 col-12">
               <a href="{{(Auth::user()->type=='invest' && Auth::user()->account_type_id ==4)?route('invst.aqars.index'):route('invst.cars.index')}}">
                 <div class="booking_card mb-4 text-center pt-sm-5 pb-sm-3 py-4">
                    <img
                      src="{{FRONTASSETS}}/images/booking-investor/ads_b.svg"
                      alt="booking investor icon"
                    />
                    <div class="pt-md-4 pt-2">
                      <h3 class="mb-0">@lang('site.advertising')</h3>
                      <p class="mb-0">{{count($ads)}}</p>
                    </div>
                </div> 
              </a>
              </div>
              <div class="col-lg-4 col-sm-6 col-12">
                <a href="{{(Auth::user()->type=='invest' && Auth::user()->account_type_id ==4)?route('invst.listbookings','all'):route('invst.listbookingscar','all')}}">
                <div class="booking_card mb-4 text-center pt-sm-5 pb-sm-3 py-4">
                    <img
                      src="{{FRONTASSETS}}/images/booking-investor/booking-ic.svg"
                      alt="booking investor icon"
                    />
                    <div class="pt-md-4 pt-2">
                      <h3 class="mb-0"> @lang('site.bookings')</h3>
                      <p class="mb-0">{{count($bookings)}}</p>
                    </div>
                </div>
               </a>
              </div>
              <div class="col-lg-4 col-sm-6 col-12">
                <a href="{{(Auth::user()->type=='invest' && Auth::user()->account_type_id ==4)?route('invst.listcommisions',['aqar','unpaid']):route('invst.listcommisions',['car','unpaid'])}}">
                  <div class="booking_card mb-4 text-center pt-sm-5 pb-sm-3 py-4">
                    <img
                      src="{{FRONTASSETS}}/images/booking-investor/booking_ic_2.svg"
                      alt="booking investor icon"
                    />
                    <div class="pt-md-4 pt-2">
                      <h3 class="mb-0"> @lang('site.commissions')</h3>
                      <p class="mb-0">{{count($commisions)}}</p>
                    </div>
                </div>
               </a>
              </div>
              <div class="col-lg-4 col-sm-6 col-12">
                <a href="{{route('invst.updateprofile',Auth::id())}}">
                  <div class="booking_card mb-md-0 mb-4 text-center py-sm-5  py-4">
                     <img 
                       src="{{FRONTASSETS}}/images/booking-investor/booking_ic_3.svg"
                       alt="booking investor icon"
                     />
                     <div class="pt-md-4 pt-2">
                       <h3 class="mb-0">@lang('site.profiles')</h3>
                     </div>
                 </div> 
               </a>
               </div>
               <div class="col-lg-4 col-sm-6 col-12">
                 <a href="{{route('invst.conditions')}}">
                 <div class="booking_card mb-md-0 mb-4 text-center py-sm-5  py-4">
                     <img
                       src="{{FRONTASSETS}}/images/booking-investor/booking_ic_4.svg"
                       alt="booking investor icon"
                     />
                     <div class="pt-md-4 pt-2">
                       <h3 class="mb-0">شروط الحجز والالغاء</h3>
                     </div>
                 </div>
                </a>
               </div>
               <div class="col-lg-4 col-sm-6 col-12">
                 <a href="{{route('logout')}}">
                   <div class="booking_card mb-md-0 mb-4 text-center py-sm-5  py-4">
                     <img
                       src="{{FRONTASSETS}}/images/booking-investor/booking_ic_5.svg"
                       alt="booking investor icon"
                     />
                     <div class="pt-md-4 pt-2">
                       <h3 class="mb-0">@lang('site.logout')</h3>
                     </div>
                 </div>
                </a>
               </div>
            </div>
          </div>
        </div>
      </section>
    </main>
@endsection
