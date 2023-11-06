@extends('layouts.main_frontend')
@section('content')
<main>
      <!-- section -->
      <section class="register-section mb-5">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2 class="fw-bold login-title my-lg-5 my-3 text-center">
                تسجيل جديد
              </h2>
            </div>
            <div class="col-12">
              <form action="{{  route('invst.createaccount') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
                
                <ul class="register-radio-list py-md-4 p-3 px-md-5 d-flex align-items-center list-unstyled flex-wrap mb-4"  >
                @foreach($AccountTypes as $k=> $item)
                  <li>
                    <input
                      type="radio"
                      name="account_type"
                      value="{{$item->id}}"
                      id="registerData{{$k+1}}"
                      @if ($k==0)checked @endif
                      class="registerInp"
                      data-form="registerdata{{$k+1}}"
                      @if(!empty($invest)&&$invest->account_type_id!=null && ($invest->account_type_id==$item->id)) checked  @endif
                    />
                    @if($errors->has('account_type'))
                            <span class="error">{{ $errors->first('account_type') }}</span>
                    @endif
                    <label for="registerData{{$k+1}}" class="lbl_info custom-radio">
                      {{$item->name_ar}}  
                    </label>
                  </li>
                @endforeach
                </ul>

                <div class="register_frm_card grid-container ">
                  <!--<div class="customerData" id="registerdata1">
                    <div class="row">
                      <div class="col-12">
                        <ul
                          class="register-checkbox-list d-flex align-items-center px-0 list-unstyled flex-wrap mb-md-5 mb-3"
                        >
                          <li>
                            <input
                              class="input-custom-checkbox-item"
                              type="checkbox"
                              id="register-item1"
                            />
                            <label
                              for="register-item1"
                              class="custom-checkbox-item mb-md-0 mb-2"
                            >
                              طنجة
                            </label>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div> -->

                  <div class="row">
                    <div class="col-lg-6 mb-3">
                      <label for="name" class="pb-2 register-lbl">
                        اسم المسئول
                      </label>
                      <input
                        type="text"
                        id="name"
                        name="firstname"
                        class="form-control register-input"
                        placeholder="اسم المسئول " 
                        value="{{ old('firstname', (empty($invest))? null : $invest['firstname']) }}"
                      />
                      @if($errors->has('firstname'))
                          <span class="error">{{ $errors->first('firstname') }}</span>
                      @endif
                    </div>
                    <div class="col-lg-6 mb-3">
                      <label for="name" class="pb-2 register-lbl">
                        الاسم التجارى
                      </label>
                      <input
                        type="text"
                        id="name"
                        name="username"
                        class="form-control register-input"
                        placeholder="الاسم التجارى  "
                        value="{{ old('username', (empty($invest))? null : $invest['username']) }}"
                      />
                      @if($errors->has('username'))
                          <span class="error">{{ $errors->first('username') }}</span>
                      @endif
                    </div>
                    <div class="col-lg-6 mb-3">
                      <label for="address" class="pb-2 register-lbl">
                        العنوان
                      </label>
                      <input
                        type="text"
                        name="address"
                        id="address"
                        class="form-control register-input"
                        placeholder="ادخل العنوان بالكامل     "
                        value="{{ old('address', (empty($invest))? null : $invest['address']) }}"
                      />
                      @if($errors->has('address'))
                          <span class="error">{{ $errors->first('address') }}</span>
                      @endif
                    </div>
                    <div class="col-lg-6 mb-lg-0 mb-3">
                      <div class="form-group">
                          <label class="pb-2 register-lbl">رقم الهاتف</label>
                              <div class="d-flex">
                                    <input type="hidden" name="country_id" id="country_id" value="">
                                    <input type="hidden" name="country_code" id="country_code" value="">
                                    <input type="text" name="phone" class="form-control register-input register-input-r" id="exampleFormControlInput3" maxlength="11" placeholder="012-345-6789">
                                    <select id="demo-htmlselect" >
                                      @foreach($countries as $country)
                                        <option value="{{$country->id}}" data-imagesrc="{{asset('images/countries/'.$country->flag_image)}}"
                                        data-description="{{$country->name}}">{{$country->code}}</option>
                                      @endforeach
                                    </select>
                                   
                              </div> 
                      </div>
                      @if($errors->has('phone'))
                          <span class="error">{{ $errors->first('phone') }}</span>
                      @endif
                      <div class="py-2 text-main">
                        سنقوم بإرسال رسالة نصية للتحقق من رقم الهاتف عن طريق
                        الواتس اب
                        <span class="">
                          <img
                            src="{{FRONTASSETS}}/images/booking-investor/wt-icon.png"
                            alt="whatsapp "
                          />
                        </span>
                      </div>
                    </div>
                    <div class="col-lg-6 mb-lg-0 mb-3">
                      <div class="position-relative">
                        <label for="" class="pb-2 register-lbl"> المدن </label>
                        <select class="select2" name="city_id" id="city_id">
                          <option value="1">اختر المدينة</option>
                          
                        </select>
                      </div>
                    </div>

                    
                    <div class="col-lg-6 mb-3">
                      <label for="email" class="pb-2 register-lbl">
                        البريد الالكتروني
                      </label>
                      <input
                        type="email"
                        name="email"
                        id="email"
                        class="form-control register-input"
                        value="{{ old('email', (empty($invest))? null : $invest['email']) }}"
                      />
                      @if($errors->has('email'))
                          <span class="error">{{ $errors->first('email') }}</span>
                      @endif
                    </div>

                    <div class="col-lg-6 mb-3">
                      <label for="password-field" class="pb-2 register-lbl">
                        كلمة المرور
                      </label>
                      <div class="position-relative">
                        <input
                          id="password-field"                
                          type="password"
                          class="form-control register-input"
                          name="password"
                          placeholder="كلمة المرور"
                           maxlength="10"
                           value="{{ old('password', (empty($invest))? null : $invest['password']) }}"
                        />
                        @if($errors->has('password'))
                          <span class="error">{{ $errors->first('password') }}</span>
                        @endif

                        <div
                          toggle="#password-field"
                          class="fa fa-fw fa-eye field-icon toggle-password"
                        ></div>
                      </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                      <label
                        for="password-field-confirm"
                        class="pb-2 register-lbl"
                      >
                        تأكيد كلمة المرور
                      </label>
                      <div class="position-relative">
                        <input
                          id="password-field-confirm"
                          type="password"
                          class="form-control register-input"
                          name="c_password"
                          placeholder="تأكيد كلمه المرور"
                          maxlength="10"
                          value="{{ old('password', (empty($invest))? null : $invest['password']) }}"

                        />
                        @if($errors->has('c_password'))
                          <span class="error">{{ $errors->first('c_password') }}</span>
                        @endif

                        <div
                          toggle="#password-field-confirm"
                          class="fa fa-fw fa-eye field-icon toggle-password"
                        ></div>
                      </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                      <div class="position-relative">
                        <label for="" class="pb-2 register-lbl">
                          العمولة
                          <span class="text-main">(تبدأ من 5%)</span>
                        </label>
                        <select class="select2" name="comision">
                          <option value="1">ادخل العمولة</option>
                          <option value="5%" @if((old('comision')=='5%')||(!empty($invest) && ($invest->comision=='5%')))selected @endif>5%</option>
                          <option value="10%" @if((old('comision')=='10%')||(!empty($invest) && ($invest->comision=='10%')))selected @endif>10%</option>
                          @for ($x = 11; $x <= 30; $x++) 
                          <option value="{{$x}}%" @if((old('comision')=='{{$x}}%')||(!empty($invest) && ($invest->comision=='{{$x}}%')))selected @endif>{{$x}}%</option>
                          @endfor
                        </select>
                        @if($errors->has('comision'))
                          <span class="error">{{ $errors->first('comision') }}</span>
                        @endif
                      </div>
                      <div class="pt-3 pb-4 text-main">
                        (عزيزى العميل كلما زادت نسبة العمولة سوف يتم إظهار
                        أعلانك بالمقدمة)
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 mb-4">
                      <label for="" class="pb-2 register-lbl">
                        الشروط والأحكام
                      </label>

                      <div class="form-group">
                        <textarea
                          class="form-control txtarea-ads p-3 mt-2"
                          placeholder="تطبق الشروط والاحكام"
                          rows="6" disabled
                        >{{strip_tags(trim($settings->terms_conditions,'\n'))}}</textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 mb-3">
                      <input
                        class="input-custom-checkbox-item"
                        type="checkbox"
                        id="register-check" 
                        name="accept_term"
                      />
                      @if($errors->has('accept_term'))
                          <span class="error">{{ $errors->first('accept_term') }}</span>
                        @endif
                      <label for="register-check" class="custom-checkbox-item">
                        أوافق على الشروط والاحكام
                      </label>
                    </div>
                    <div
                      class="col-12 d-flex justify-content-center mt-lg-5 mt-3"
                    >
                      <div
                        class="booking-now-btn py-4 d-flex justify-content-center align-items-center"
                      >
                        <button type="submit">تسجيل</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- /section -->
    </main>

@endsection

@section('scripts')

<script type="text/javascript" src="https://cdn.rawgit.com/prashantchaudhary/ddslick/master/jquery.ddslick.min.js" ></script>
    <script>
        $(document).ready(function () {
                $('#demo-htmlselect').ddslick({
                    onSelected: function(selectedData){
                      var country_code = selectedData.selectedData.text;
                      var country_id = selectedData.selectedData.value;
                      $('#country_code').val(country_code);
                      $('#country_id').val(country_id);
                      $.get("{{url('invst/countrycities')}}/" + country_id, function (data) {
                        $('#city_id').empty();
                        $('#city_id').append('<option>@lang('site.select')</option>');
                        $.each(data, function (key, value) {
                            $('#city_id').append('<option value="' + value.id + '">' + value.name_ar + '</option>')

                        });
                    })
                    }   
                });
               


        });
        </script>
    

    @endsection