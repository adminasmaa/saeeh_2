@extends('layouts.main_frontend')

@section('content')

  <div class="overlay-mobile"></div>
    <main>
      <section class="py-5">
        <div class="container w-100">
          <div class="row d-flex justify-content-center">
            <div
              class="col-12 login-body d-lg-flex justify-content-lg-between px-0"
            >
              <div class="text-center my-lg-5 my-3 login-content">

                  <form  action="{{ route('invst.checklogin')}}" method="post" enctype="multipart/form-data" >
                  {{ csrf_field() }}
                <div
                  class="row d-flex justify-content-center align-items-center h-100"
                >


                  <div class="col-md-10 col-11 my-lg-5 my-2">
                    <h2 class="fw-bold login-title mb-5"> @lang('site.login')</h2>
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="mb-3">
                                  <ul  id="register_errorslogin"></ul>


                                  </ul>
                              </div>
                          </div>
                      </div>

                      <div class="emailcont">
                      <div class="form-group">
                              <div class="d-flex">
                                    <input type="hidden" name="country_id" id="country_id" value="">
                                    <input type="hidden" name="country_code" id="country_code" value="">
                                    <div class="position-relative custom-in">
                                    <input type="text" name="phone" class="form-control frm-input phone3" id="exampleFormControlInput3" maxlength="11"  value="{{ old('phone', (empty($invest))? null : $invest['phone']) }}">
                                    <span class="icon-placeholder">
                                    <i class="far fa-phone"></i>
                                    </span></div>
                                    <select id="demo-htmlselect" >
                                      @foreach($countries as $country)
                                        <option value="{{$country->id}}" data-imagesrc="{{asset('images/countries/'.$country->flag_image)}}"
                                        data-description="{{$country->name}}" >{{$country->code}}</option>
                                      @endforeach
                                    </select>
                                   
                              </div> 
                      </div>
                      <div>
                       @if($errors->has('phone'))
                        <span id="error-msg" class="text-danger">{{ $errors->first('phone') }}</span>
                        @endif
                      </div>
                    <div class="emailcont">
                      <input
                        id="password-fieldd"
                        type="password"
                        class="form-control input-user my-3 password3"
                        name="password"
                        placeholder=" {{trans('site.password')}}"
                      />
                      <span class="icon-placeholder">
                      
                        <i class="far fa-lock-alt"></i>
                      </span>
                      <div
                        toggle="#password-fieldd"
                        class="fa fa-fw fa-eye field-icon toggle-password"
                      ></div>
                      @if($errors->has('password'))
                        <span id="error-msg" >{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <span class="error text-danger" ><strong>{{Session('error')}}</strong></span>
                    <button type="submit" class="mt-lg-4  btn-login formregisterslogin">
                    @lang('site.login')
                 </button>
                 <div class="forgit-password pt-2">
                     <a href="{{route('invst.forgetpassword')}}"> @lang('site.forget_password?')</a>
                    </div>
                    <div class="pt-lg-3 pt-2 user-links">
                      <p class="text-bold">
                          @lang('site.dont_have_an_account') ؟
                        <a href="{{route('invst.register')}}" class="user-link"> @lang('site.register')</a>
                      </p>
                    </div>
                  </div>
                </div>
              </form>
              </div>
              </div>
                <div class="side-login-image"></div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>
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
                    }   
                });
               
        });
      

        </script>
    

    @endsection