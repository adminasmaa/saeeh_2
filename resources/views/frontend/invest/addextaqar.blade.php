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
                <a href="javascript:void(0)"> اعلان </a>
              </li>
            

              <li class="breadcrumb-item text-gray-4" aria-current="page">
                اضافة حجز خارجى
              </li>
            </ol>
          </nav>
        </div>
      </section>
      <section class="add-booking-investor mb-5 mt-lg-0 mt-4">
        <div class="container d-flex justify-content-center">
          <div class="booking_investor_card">
            <form  action="{{route('invst.add_extbooking')}}" method="POST">
            {{ csrf_field() }}
            <div class="row">
              <div class="col-12">
                <h2 class="mb-4 text-gray ">إضافة حجز خارجى</h2>
              </div>
              <div class="col-lg-8">
                
                <div class="form-group mb-4">
                  <label for="">
                    تاريخ الوصول
                    <span class="text-danger">( اجبارى )</span>
                  </label>
                  <input
                      type="hidden"
                      name="amount"
                      id="amount"
                      value="{{$aqar->fixed_price}}"
                    />
                    <input
                      type="hidden"
                      name="id"
                      value="{{$aqar->id}}"
                    />
                    <input
                      type="hidden"
                      name="total_price"
                      id="total_price"
                      value=""
                    />
                  <div class="position-relative">
                    <input
                      placeholder=" تاريخ الوصول"
                      type="date"
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
                    تاريخ المغادرة
                    <span class="text-danger">( اجبارى )</span>
                  </label>
                  <div class="position-relative">
                    <input
                      placeholder="تاريخ المغادرة "
                      type="date"
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
                <div class="form-group mb-4">
                  <label for="">
                    رقم هاتف العميل             
                  <span class="text-danger">( اختيارى )</span>
                  </label>
                  <input
                    placeholder=" اكتب رقم الهاتف  "  name="customer_phone"
                    type="text"
                    value=""
                  />
                </div>
                <div class="form-group mb-4">
                  <label for="">
                    اسم العميل
                    <span class="text-danger">( اختيارى )</span>
                  </label>
                  <input
                    placeholder="  اسم العميل " name="customer_name"
                    type="text"
                    value=""
                  />
                </div>
              
             
              </div>
              <div class="col-lg-4">
               <div class="ads_investor_card all-days-card mb-3">
                <div class="booking-days text-center mb-3">
                  عدد الايام:<span id="days"></span>
                </div>
                <div class="booking-days text-center mb-3">
                  المبلغ الاجمالى:<span id="total"></span>
                </div>
                <div class="text-center">
                  <a href="#" class="cancel-booking-link">شروط الحجز والالغاء</a>
                </div>
               </div>
              </div>
              <div class="col-12 mb-lg-0 mb-3">
                <label for="" class="pb-2 ads-card-lbl">
                  اضف استفسارك
                  <span class="text-danger">( اختيارى )</span>
                </label>
               
                <div class="form-group">
                  <textarea class="form-control txtarea-ads p-3 mt-2" placeholder="أضف ما تريد" rows="6" name="note"></textarea>
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

     var total=amount*days;
    
     $("#total").text(total);

     $("#total_price").val(total);
     

}
    </script>


@endsection

