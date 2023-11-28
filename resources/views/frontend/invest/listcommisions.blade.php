@extends('layouts.main_investor')
@section('content')


<main>
      <!-- Desktop Breadcrumb -->
      @php $current_route=Route::current()->parameters()['pay'];@endphp
      <section class="py-md-4 py-2">
        <div class="container">
          <nav class="breadcrumb-container" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a href="javascript:void(0)"> @lang('site.home') </a>
              </li>

              <li class="breadcrumb-item text-main" aria-current="page">
                عمولاتي
              </li>
            </ol>
          </nav>
        </div>
      </section>

      <!-- section -->
      <section class="commission-section">
        <div class="container">
          <div class="row">
            <div class="booking_investor_card mb-5">
              <div class="tabs-details mt-3">
                <ul
                  class="tabs-nav-details list-unstyled mb-0 tabs-in-mobile commission flex-wrap"
                >
                 
                  <li class="{{$current_route=='unpaid'?'tab-active':'' }}">
                        <a href="{{route('invst.listcommisions',[$type,'unpaid'])}}" class="tab-link d-flex align-items-center justify-content-center">
                        @lang('site.unpaid commissions') 
                        </a>
                  </li>
                  <li class="{{$current_route=='paid'?'tab-active':'' }}">
                        <a href="{{route('invst.listcommisions',[$type,'paid'])}}" class="tab-link d-flex align-items-center justify-content-center">
                        @lang('site.paid commissions') 
                        </a>
                  </li>
                </ul>
                <ul
                  class="tabs-content pt-4 list-unstyled tabs-aqars-booking tabs-content-commission"
                >
                @if(!empty($allcomms->toArray()['data']))
                  @foreach($allcomms as $k=>$item)
                  <li id="tab-1">
                    <div class="ads-card mb-md-5 mb-4">
                      <div class="row">
                        <div class="col-12">
                          <div class="commission-container">
                            <div class="d-md-flex align-items-center">
                              <div class="d-flex align-items-center">
                                <div class="mt-2">
                                  <i class="far fa-book-open"></i>
                                </div>
                                <div class="h2 px-2"> @lang('site.Reservation information')  </div>
                              </div>
                              <div class="d-flex align-items-center">
                                <div class="mt-2">
                                  <i class="far fa-long-arrow-alt-left"></i>
                                </div>
                                <a href="#" class="ps-2"> @lang('site.Reservation information') </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 mt-3 custom-table commissions-table">
                          <table class="table table-bordered table-sm">
                            <thead>
                              <tr>
                                <th>
                                  <div class="d-flex align-items-center">
                                    <div class="mt-2">
                                      <i class="far fa-user-circle"></i>
                                    </div>
                                    <div class="th-txt"> @lang('site.name')</div>
                                  </div>
                                </th>

                                <th>
                                  <div class="d-flex align-items-center">
                                    <div class="th-txt">{{$item->user['firstname']}}</div>
                                  </div>
                                </th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="mt-2">
                                      <i class="far fa-phone"></i>
                                    </div>
                                    <div class="th-txt">@lang('site.phone_number')</div>
                                  </div>
                                </td>
                                <td>
                                  <div class="table-txt">{{$item->user['country_code']}}{{$item->user['phone']}}</div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="mt-2">
                                      <i class="far fa-list-ol"></i>
                                    </div>
                                    <div class="th-txt"> @lang('site.booking_no') </div>
                                  </div>
                                </td>

                                <td>
                                  <div class="table-txt">{{$item->booking_id}}</div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="mt-2">
                                      <i class="far fa-wallet"></i>
                                    </div>
                                    <div class="th-txt"> @lang('site.booking_price') </div>
                                  </div>
                                </td>

                                <td>
                                  <div class="table-txt">{{$item->total_price}} {{$item->city->country['currency_ar'] ?? ''}}</div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="mt-2">
                                      <i class="far fa-wallet"></i>
                                    </div>
                                    <div class="th-txt"> @lang('site.Commission_paid') </div>
                                  </div>
                                </td>

                                <td>
                                  <div class="table-txt">
                                    <input
                                      type="checkbox"
                                      id="Commissions"
                                      checked=""
                                    />
                                    <label
                                      for="Commissions"
                                      class="custom-checkbox-item"
                                    >
                                    {{$item->price}} {{$item->city->country['currency_ar'] ?? ''}}
                                      <span class="text-main">({{$item->comision}})</span>
                                    </label>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        @if($current_route=='unpaid')
                        <div
                          class="col-12 d-flex justify-content-center mt-md-5 mt-2"
                        >
                          <div
                            class="booking-now-btn py-4 d-flex justify-content-center align-items-center mt-0"
                          >
                            <a
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#confirmPaymentModal"
                              data-name="{{$item->user['firstname']}}"
                              data-price=" {{$item->price}}"
                              data-comm="({{$item->comision}})"
                              data-currency="{{$item->city->country['currency_ar'] ?? ''}}"
                              data-id="{{$item->id}}"
                              class="getUser"
                            >
                            @lang('site.pay')
                            </a>
                          </div>
                        </div>
                        @endif
                      </div>
                      @endforeach
                        @if($allcomms->hasPages())              
                            <div class="col-12">
                            <div class="card card-department round-border my-4 p-3">
                                <nav class="department-list-pagination d-md-flex justify-content-md-between align-items-center">
                                <ul class="pagination mb-0 justify-content-lg-start justify-content-center">
                                    <li class="page-item">
                                    {{$allcomms->links() }}
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
                        
                                <div class="card-empty-txt"> @lang('site.There are no commissions') </div>
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
        </div>
      </section>
      <!-- /section -->
    </main>

    <div
      class="modal fade modal-custom modal-height-mobile modal-confirm-pay"
      id="confirmPaymentModal"
      tabindex="-1"
      aria-labelledby="confirmPaymentModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content confirm-pay-content">
          <button
            type="button"
            class="close-modal d-flex justify-content-center align-items-center"
            data-bs-dismiss="modal"
            aria-label="Close"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="32"
              height="32"
              viewBox="0 0 32 32"
              fill="none"
            >
              <path
                d="M24.3998 7.61339C24.2765 7.48978 24.1299 7.39172 23.9686 7.32481C23.8073 7.2579 23.6344 7.22346 23.4598 7.22346C23.2852 7.22346 23.1123 7.2579 22.951 7.32481C22.7897 7.39172 22.6432 7.48978 22.5198 7.61339L15.9998 14.1201L9.47981 7.60005C9.35637 7.47661 9.20982 7.37869 9.04853 7.31188C8.88725 7.24508 8.71438 7.21069 8.53981 7.21069C8.36524 7.21069 8.19237 7.24508 8.03109 7.31188C7.8698 7.37869 7.72325 7.47661 7.59981 7.60005C7.47637 7.7235 7.37845 7.87004 7.31164 8.03133C7.24483 8.19261 7.21045 8.36548 7.21045 8.54005C7.21045 8.71463 7.24483 8.88749 7.31164 9.04878C7.37845 9.21006 7.47637 9.35661 7.59981 9.48005L14.1198 16.0001L7.59981 22.5201C7.47637 22.6435 7.37845 22.79 7.31164 22.9513C7.24483 23.1126 7.21045 23.2855 7.21045 23.4601C7.21045 23.6346 7.24483 23.8075 7.31164 23.9688C7.37845 24.1301 7.47637 24.2766 7.59981 24.4001C7.72325 24.5235 7.8698 24.6214 8.03109 24.6882C8.19237 24.755 8.36524 24.7894 8.53981 24.7894C8.71438 24.7894 8.88725 24.755 9.04853 24.6882C9.20982 24.6214 9.35637 24.5235 9.47981 24.4001L15.9998 17.8801L22.5198 24.4001C22.6433 24.5235 22.7898 24.6214 22.9511 24.6882C23.1124 24.755 23.2852 24.7894 23.4598 24.7894C23.6344 24.7894 23.8072 24.755 23.9685 24.6882C24.1298 24.6214 24.2764 24.5235 24.3998 24.4001C24.5233 24.2766 24.6212 24.1301 24.688 23.9688C24.7548 23.8075 24.7892 23.6346 24.7892 23.4601C24.7892 23.2855 24.7548 23.1126 24.688 22.9513C24.6212 22.79 24.5233 22.6435 24.3998 22.5201L17.8798 16.0001L24.3998 9.48005C24.9065 8.97339 24.9065 8.12005 24.3998 7.61339Z"
                fill="white"
              />
            </svg>
          </button>

          <div class="modal-body cancel-booking-body">
            
              <form action="{{route('invst.confirm_pay')}}" method="Post" class="row d-flex justify-content-center align-items-center h-100 my-3">
                @csrf
              <div class="col-md-10 col-10 mt-lg-5 mt-2">
                <div class="text-center">
                  <img
                    src="{{FRONTASSETS}}/images/booking-investor/confirm-ic.svg"
                    class="confirm-payment-icon"
                    alt="confirm payment icon"
                  />
                </div>
                <h2
                  class="fw-bold confirm-pay-title text-second my-3 text-center"
                >
                  @lang('site.Confirm payment')
                </h2>
                <input type="hidden" name="id" value="" class="id">
                <div class="custom-table">
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
                            <div class="th-txt c_name"></div>
                          </div>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="mt-2">
                              <i class="far fa-wallet"></i>
                            </div>
                            <div class="th-txt"> @lang('site.Commission_paid')</div>
                          </div>
                        </td>

                        <td>
                          <div class="table-txt">
                            <span><i class="far fa-check"></i></span>
                            <span class="custom-checkbox-item comm_price">
                              
                              <span class="text-main comm_value"></span>
                            </span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="100%">
                          <div
                            class="d-flex align-items-center justify-content-center"
                          > 
                          <!-- @lang('site.Commission_paid') -->
                            سوف تقوم بدفع عموله وقدرها
                            <span class="text-main comm_price">  لاغير</span>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="d-flex justify-content-center my-5">
                  <div
                    class="booking-now-btn d-flex justify-content-center align-items-center"
                  >
                    <button type="submit">تأكيد الدفع</button>
                  </div>
                </div>
              </div>
              </form>
          </div>
        </div>
      </div>
    </div>

@endsection
@section('scripts')

<script>
   $(document).on('click', '.getUser', function(e){
          var x=$(this).attr('data-comm');
            $('.id').val($(this).attr('data-id'));
            $('.c_name').html($(this).attr('data-name'));
            $('.comm_price').html($(this).attr('data-price') +" "+ $(this).attr('data-currency') )
            $('.comm_value').html(x)
           
        })
    

</script>

@endsection
