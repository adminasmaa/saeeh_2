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
                  <form  action="{{ route('invst.editpassword')}}" method="post" enctype="multipart/form-data" >
                     {{ csrf_field() }}
                     <div
                        class="row d-flex justify-content-center align-items-center h-100"
                        >
                        <div class="col-md-10 col-11 my-lg-5 my-2">
                           <h2 class="fw-bold login-title mb-5"> @lang('site.changepassword')</h2>
                           <div class="row">
                              <div class="col-lg-6">
                                 <div class="mb-3">
                                    <ul  id="register_errorslogin"></ul>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <input type="hidden" name="id" id="id" value="{{$id}}">
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
                           <div class="emailcont">
                              <input
                                 id="password-fieldd"
                                 type="password"
                                 class="form-control input-user my-3 password3"
                                 name="new_password"
                                 placeholder=" {{trans('site.newpassword')}}"
                                 />
                              <span class="icon-placeholder">
                              <i class="far fa-lock-alt"></i>
                              </span>
                              <div
                                 toggle="#password-fieldd"
                                 class="fa fa-fw fa-eye field-icon toggle-password"
                                 ></div>
                              @if($errors->has('new_password'))
                              <span id="error-msg" >{{ $errors->first('new_password') }}</span>
                              @endif
                           </div>
                           <span class="error text-danger" ><strong>{{Session('error')}}</strong></span>
                           <button type="submit" class="mt-lg-4  btn-login formregisterslogin">
                           @lang('site.to be sure')
                           </button>
                           <div class="forgit-password pt-2">
                           </div>
                           <div class="pt-lg-3 pt-2 user-links">
                           </div>
                        </div>
                     </div>
                   </form>
                </div>

                <div class="side-login-image"></div>
            </div>
          </div>
       </div>
   </section>
</main>



@endsection
