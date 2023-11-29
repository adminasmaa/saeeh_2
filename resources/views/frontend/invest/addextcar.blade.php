@extends('layouts.main_investor')
@section('content')

<!-- Desktop Breadcrumb -->
<section class="py-md-4 py-2">
        <div class="container">
          <nav class="breadcrumb-container" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a href="javascript:void(0)"> @lang('site.dashboard') </a>
              </li>
             

              <li class="breadcrumb-item" aria-current="page">
                <a href="javascript:void(0)"> @lang('site.ad') </a> 
              </li>
            

              <li class="breadcrumb-item text-gray-4" aria-current="page">
                @lang('site.add_external_booking')
              </li>
            </ol>
          </nav>
        </div>
      </section>
      <section class="add-booking-investor mb-5 mt-lg-0 mt-4">
        <div class="container d-flex justify-content-center">
          <div class="booking_investor_card">
            <form  action="{{route('invst.add_extcarbooking')}}" method="POST">
            {{ csrf_field() }}
            <div class="row">
              <div class="col-12">
                <h2 class="mb-4 text-gray "> @lang('site.add_external_booking') </h2>
              </div>
              <div class="col-lg-8">
              @if(is_null($car->fixed_price))
                <div class="form-group mb-4">
                  <label for=""> 
                  @lang('site.personnumber')
                  <span class="text-danger">( @lang('site.mandatory') )</span>
                  </label>
                  <input
                      type="hidden"
                      name="amount1"
                      id="amount1"
                      value=""
                    />
                    <input
                      type="hidden"
                      name="day_num"
                      id="day_num"
                      value=""
                    />
                  <select class="select2"
                          name="price" id="price">
                      <option  value="0">@lang('site.select')</option>
                      @for ($x = 0; $x <= count($car->changed_price->price)-1; $x++)
                      <option  value="{{$car->changed_price->price[$x]}}">{{$car->changed_price->day_num[$x]}}</option>
                      @endfor

                  </select>
                  
                  
                </div>
                @endif
                @if(!is_null($car->fixed_price))
                <div class="form-group mb-4">
                  <label for="">
                  @lang('site.date_of_arrival') 
                    <span class="text-danger">( @lang('site.mandatory') )</span>
                  </label>
                  <input
                      type="hidden"
                      name="amount"
                      id="amount"
                      value="{{$car->fixed_price}}"
                    />
                    <input
                      type="hidden"
                      name="id"
                      value="{{$car->id}}"
                    />
                    <input
                      type="hidden"
                      name="total_price"
                      id="total_price"
                      value=""
                    />

                    <input
                      type="hidden"
                      name="day_count"
                      id="day_count"
                      value=""
                    />
                    
                  <div class="position-relative">
                    <input
                      placeholder=" @lang('site.date_of_arrival') "
                      type="text"
                      name="delivery_date"
                      id="datepicker"
                      value=""
                      class="form-control calendar " 
                    />
                    <span class="date-icon">
                      <i class="fal fa-calendar-alt"></i>
                    </span>
                  </div>
                </div>
                <div class="form-group mb-4">
                  <label for="">
                  @lang('site.date_of_departure')
                    <span class="text-danger">( @lang('site.mandatory') )</span>
                  </label>
                  <div class="position-relative">
                    <input
                      placeholder=" @lang('site.date_of_departure') "
                      type="text"
                      name="reciept_date"
                      id="datepicker1"
                      value=""
                      class="form-control calendar  mb-2 "  onchange="get_diff()"
                    />
                    <span class="date-icon">
                      <i class="fal fa-calendar-alt"></i>
                    </span>
                  </div>
                 
                </div>
                @endif
                
                <div class="form-group mb-4">
                  <label for="">
                  @lang('site.client_name')
                  <span class="text-danger">( @lang('site.mandatory') )</span>
                  </label>
                  <input  
                    placeholder=" @lang('site.write_your_phone_number') "  name="customer_name"
                    type="text"
                    value=""
                  />
                </div>
                <div class="form-group mb-4">
                  <label for="">
                  @lang('site.client_phone_number')
                  <span class="text-danger">( @lang('site.mandatory') )</span>
                  </label>
                  <input
                    placeholder=" @lang('site.write_your_phone_number') "  name="customer_phone"
                    type="text"
                    value=""
                  />
                </div>
             
              </div>
              <div class="col-lg-4">
               <div class="ads_investor_card all-days-card mb-3">
                <div class="booking-days text-center mb-3">
                @lang('site.daynumber') :<span id="days"></span>
                </div>
                <div class="booking-days text-center mb-3">
                @lang('site.total_price') :<span id="total"></span>
                </div>
                <div class="text-center">
                  <a href="{{route('invst.conditions')}}" class="cancel-booking-link">@lang('site.Reservation and cancellation policy')</a>
                </div>
               </div>
              </div>
              <div class="col-12 mb-lg-0 mb-3">
                <label for="" class="pb-2 ads-card-lbl">
                  @lang('site.add_your_inquiry')
                  <span class="text-danger">( @lang('site.optional') )</span> 
                </label>
               
                <div class="form-group">
                  <textarea class="form-control txtarea-ads p-3 mt-2" placeholder=" @lang('site.add_whatever_you_want') " rows="6" name="note"></textarea>
                </div>
                <div class="d-flex justify-content-center mt-lg-5 mt-0">
                  <div class="booking-now-btn  d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn"><i
                                                class="fa fa-plus p-1"></i>
                                            @lang('site.add')</button>
                  </div>
                </div>
              </div>
              
            
            </div>
          </form>
          </div>
        </div>
      </section>

@endsection


@section('scripts')
<script>
$('#price').on('change', function (e) {
            var price = e.target.value;
            var day_num = $("#price option:selected").text();
            $("#amount1").val(price);
            $("#day_num").val(day_num);
           
        })


       function get_diff()

{
    var start = $('#datepicker').val();
    var end = $('#datepicker1').val();

     var start = new Date(start);
        var end = new Date(end);

        var diffDate = (end - start) / (1000 * 60 * 60 * 24);
        var days = Math.round(diffDate);
    
     $("#days").text(days);
     var amount = $('#amount').val();
     if(amount){

     var total=amount*days;
    
     $("#total").text(total);

     $("#total_price").val(total);
     $("#day_count").val(days);
     }
     else{
      var amount1 = $('#amount1').val();
      var total=amount1;
    
     $("#total").text(total);

     $("#total_price").val(total);
     $("#day_count").val(day_num);

     } 

}
    </script>


@endsection

