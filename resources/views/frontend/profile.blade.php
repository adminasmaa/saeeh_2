@extends('layouts.main_frontend')
@section('content')
    <main>
      <section class="py-5">
        <div class="container w-100">

          <div class="row d-flex justify-content-center">
            <div
              class="col-12 login-body d-lg-flex justify-content-lg-between px-0"
            >

              <div class="text-center my-lg-5 my-3 login-content">
               <form  >

                <div
                  class="row d-flex justify-content-center align-items-center h-100"
                >
                  <div class="col-md-10 col-10 my-lg-5 my-2">
                    <h2 class="fw-bold login-title mb-5"> {{trans('site.profile')}} </h2>
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="mb-3">
                                  <ul  id="register_errorsUsersUpdate"></ul>


                              </ul>
                          </div>
                      </div>
                      </div>


                    <div class="row">
                      <div class="col-lg-6">
                        <div class="emailcont">
                          <input
                            type="text"
                            class="form-control frm-input mb-3 name22"
                            name="name"
                            value="{{$user->firstname}}"
                            placeholder=" {{trans('site.name')}}"
                          />
                          <span class="icon-placeholder">
                          <i class="far fa-user-circle"></i>
                          </span>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="emailcont">
                          <input
                            type="email"
                            class="form-control frm-input mb-3 email22"
                            placeholder=" {{trans('site.email')}}"
                            value="{{$user->email}}"
                            name="email"
                          />
                          <span class="icon-placeholder">
                          <i class="far fa-envelope"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="emailcont">
                          <input
                            id="password-field"
                            type="password"
                            class="form-control input-user mb-3 password22"
                            name="password"
                            placeholder=" {{trans('site.password')}}"
                          />
                          <span class="icon-placeholder">
                            <i class="far fa-lock-alt"></i>
                          </span>
                          <div
                            toggle="#password-field"
                            class="fa fa-fw fa-eye field-icon toggle-password"
                          ></div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="emailcont">
                          <input
                            id="password-field-confirm"
                            type="password"
                            class="form-control input-user mb-3 password_confirmation22"
                            name="password_confirmation"
                            placeholder="{{trans('site.password_confirmation')}}"
                          />
                          <span class="icon-placeholder">
                            <i class="far fa-lock-alt"></i>
                          </span>
                          <div
                            toggle="#password-field-confirm"
                            class="fa fa-fw fa-eye field-icon toggle-password"
                          ></div>
                        </div>
                      </div>
                    </div>
                      <div class="emailcont">

                          <div class="d-flex">
                              <input type="hidden" name="country_id" id="country_id" value="">
                              <input type="hidden" name="country_code" id="country_code" value="">
                              <span class="icon-placeholder">
                        <i class="far fa-phone"></i>
                      </span>
                              <input type="text" name="phone"
                                     class="form-control register-input register-input-r phone22"
                                     maxlength="11"
                                     value="{{$user->phone}}">
                              <select id="demo-htmlselect">
                                  @foreach(\App\Models\Country::get() as $country)
                                      <option value="{{$country->id}}"
                                              data-imagesrc="{{asset('images/countries/'.$country->flag_image)}}"
                                              data-description="{{$country->name}}"
                                              @if((old('country_id')==$country->id)||(!empty($user) && ($user->country_code==$country->code)))selected @endif>{{$country->code}}</option>
                                  @endforeach
                              </select>

                          </div>
                      </div>
                    <button type="submit" class="mt-4 btn-login formregistersUserUpdate" data-id="{{$user->id}}">
                       {{trans('site.update')}}
                    </button>

                  </div>
                </div>
               </form>
                </div>

                </form>
              <div class="side-login-image"></div>
            </div>
          </div>
        </div>
      </section>
    </main>

@endsection
@section('scripts')

    <script type="text/javascript"
            src="https://cdn.rawgit.com/prashantchaudhary/ddslick/master/jquery.ddslick.min.js"></script>


    <script>


        $('#country_id').val(country_id);

        $('#demo-htmlselect').ddslick({
            onSelected: function (selectedData) {
                var country_code = selectedData.selectedData.text;
                var country_id = selectedData.selectedData.value;
                $('#country_code').val(country_code);
                $('#country_id').val(country_id);

            }
        });

    </script>

    <script>


        jQuery('.formregistersUserUpdate').click(function (e) {
            // console.log("daaaa");
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var id = $(this).data('id');
            jQuery.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},

                url: 'updateprofileData/' + id,

                method: 'post',
                data: {
                    _token: '{{ csrf_token() }}',
                    name: jQuery('.name22').val(),
                    phone: jQuery('.phone22').val(),
                    email: jQuery('.email22').val(),
                    country_code: jQuery('#country_code').val(),
                    country_id: jQuery('#country_id').val(),
                    password: jQuery('.password22').val(),
                    password_confirmation: jQuery('.password_confirmation22').val(),


                },
                success: function (result) {
                    console.log(result);

                    if (result.content == 'success')


                        swal({
                            title: "Success!",
                            text: "{{trans('site.updated_successfully')}}",
                            type: "success",
                            confirmButtonText: "OK"
                        });

                    setTimeout(function () {
                        Swal.close()
                    }, 10000)

                    window.location.href = '{{route('Home')}}';

                },
                error: function (result) {
                    console.log(result.responseJSON);
                    var errors = result.responseJSON;
                    var errorsList = "";
                    $.each(errors, function (_, value) {
                        $.each(value, function (_, fieldErrors) {
                            fieldErrors.forEach(function (error) {
                                errorsList += "<li style='color:#e81f1f'>" + error + "</li>";
                            })
                        });
                    });
                    $('#register_errorsUsersUpdate').html(errorsList);


                }
            });
        });

    </script>
@endsection
