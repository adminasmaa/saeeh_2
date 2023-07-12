<footer class="footer-section bg-second">
    <div class="footer-top">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-3 col-md-6 center-in-mobile">
                    <div>
                        <img src="{{FRONTASSETS}}/images/logo-white.svg" alt=""/>

                        <div class="google-apps">
                            <h4 class="text-center-mobile">@lang('site.Download the application now')</h4>
                            <ul class="mt-3 d-flex list-unstyled list-icons">
                                <li class="footer-google-app">
                                    <a href="#" target="_blank" title="store">
                                        <img src="{{FRONTASSETS}}/images/store.png" alt="store"/>
                                    </a>
                                </li>
                                <li class="footer-google-app">
                                    <a href="#" target="_blank" title="google app">
                                        <img
                                            src="{{FRONTASSETS}}/images/google-app.svg"
                                            alt="google app"
                                        />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 center-in-mobile">
                    <div>
                        <h3 class="footer-title text-center-mobile">@lang('site.Important links') </h3>
                        <ul class="list-unstyled links-list">
                            <li class="py-2"><a href="{{route('Home')}}">@lang('site.home')</a></li>
                            <li class="py-2"><a href="{{route('freq_question')}}">@lang('site.questions') </a></li>
                            <li class="py-2"><a href="{{route('termAndCondition')}}">@lang('site.Usage policy') </a></li>
                            <li class="py-2"><a href="#">@lang('site.Become a partner with us')</a></li>
                            <li class="py-2"><a href="{{route('contacts')}}">@lang('site.contact')</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 center-in-mobile">
                    <div>
                        <h3 class="footer-title text-center-mobile">@lang('site.social media') </h3>
                        <ul class="mt-3 d-flex list-unstyled list-icons">
                            <li
                                class="footerSocialIcons d-flex align-items-center justify-content-center"
                            >
                                <a href="{{$settings->snapchat}}" class="lh-0" target="_blank" title="Snapchat">
                                    <img
                                        src="{{FRONTASSETS}}/images/snapchat-icon.svg"
                                        alt="Snapchat"
                                    />
                                </a>
                            </li>
                            <li
                                class="footerSocialIcons d-flex align-items-center justify-content-center"
                            >
                                <a href="{{$settings->facebook}}" class="lh-0" target="_blank" title="Facebook">
                                    <img
                                        src="{{FRONTASSETS}}/images/facebook-icon.svg"
                                        alt="Facebook"
                                    />
                                </a>
                            </li>
                            <li
                                class="footerSocialIcons d-flex align-items-center justify-content-center"
                            >
                                <a href="{{$settings->instagram}}" class="lh-0" target="_blank" title="Instagram">
                                    <img
                                        src="{{FRONTASSETS}}/images/instagram-icon.svg"
                                        alt="Instagram"
                                    />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 center-in-mobile">
                    <div>
                        <h3 class="footer-title text-center-mobile">  @lang('site.serving our customers')</h3>
                        <ul class="list-unstyled list-customer">
                            <li class="py-2">
                            @lang('site.Service available from the hour')
                              <ul class="list-unstyled list-time">
                                    <li class="pt-2">{{$settings->availability_time_from ."-" . $settings->availability_time_to}}</li>
                                </ul>
                            </li>
                            <li class="py-2">
                            @lang('site.contact with')
                                     <ul class="list-unstyled">
                                    <li class="pt-2">
                                        <a href="#" class="link-time">
                                            <div class="d-flex align-items-center">
                                                <div>{{$settings->phone_one}}</div>

                                                <img
                                                    src="{{FRONTASSETS}}/images/outline-whatsapp.svg"
                                                    alt="whatsapp"
                                                    class="pe-2"
                                                />
                                            </div>
                                        </a>
                                    </li>
                                    <li class="pt-2">
                                        <a href="#" class="link-time">
                                            <div class="d-flex align-items-center">
                                                <div>{{$settings->phone_two}}</div>

                                                <img
                                                    src="{{FRONTASSETS}}/images/outline-whatsapp.svg"
                                                    alt="whatsapp"
                                                    class="pe-2"
                                                />
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-copyright">
        <div class="container">
            <div class="row py-3">
                <div class="col-12">
                    <div class="thgCopyright">
                        <p class="mb-0">جميع الحقوق محفوظة © 2023 لدى سائح</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Modal Register -->
<div  class="modal fade modal-custom modal-height-mobile"  id="registerModal"  tabindex="-1" aria-labelledby="registerModalLabel"   aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
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
            <div class="modal-body login-body d-flex justify-content-lg-between">
                <div class="text-center my-lg-5 my-3 login-content">
                    <div
                        class="row d-flex justify-content-center align-items-center h-100"
                    >
                        <div class="col-md-8 col-10 my-lg-5 my-2">
                            <h2 class="fw-bold login-title mb-5">تسجيل حساب جديد</h2>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="emailcont">
                                        <input
                                            type="name"
                                            class="form-control frm-input mb-3"
                                            placeholder="الاسم بالكامل"
                                        />
                                        <span class="icon-placeholder">
                          <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="18"
                              height="18"
                              viewBox="0 0 18 18"
                              fill="none"
                          >
                            <path
                                d="M8.99984 0.666748C7.90549 0.666748 6.82185 0.882296 5.81081 1.30109C4.79976 1.71987 3.8811 2.3337 3.10728 3.10752C1.54448 4.67033 0.666504 6.78994 0.666504 9.00008C0.666504 11.2102 1.54448 13.3298 3.10728 14.8926C3.8811 15.6665 4.79976 16.2803 5.81081 16.6991C6.82185 17.1179 7.90549 17.3334 8.99984 17.3334C11.21 17.3334 13.3296 16.4554 14.8924 14.8926C16.4552 13.3298 17.3332 11.2102 17.3332 9.00008C17.3332 7.90573 17.1176 6.8221 16.6988 5.81105C16.28 4.80001 15.6662 3.88135 14.8924 3.10752C14.1186 2.3337 13.1999 1.71987 12.1889 1.30109C11.1778 0.882296 10.0942 0.666748 8.99984 0.666748ZM4.8915 14.2334C5.24984 13.4834 7.43317 12.7501 8.99984 12.7501C10.5665 12.7501 12.7498 13.4834 13.1082 14.2334C11.941 15.1634 10.4922 15.6689 8.99984 15.6667C7.44984 15.6667 6.02484 15.1334 4.8915 14.2334ZM14.2998 13.0251C13.1082 11.5751 10.2165 11.0834 8.99984 11.0834C7.78317 11.0834 4.8915 11.5751 3.69984 13.0251C2.81332 11.8706 2.33289 10.4557 2.33317 9.00008C2.33317 5.32508 5.32484 2.33341 8.99984 2.33341C12.6748 2.33341 15.6665 5.32508 15.6665 9.00008C15.6665 10.5167 15.1498 11.9167 14.2998 13.0251ZM8.99984 4.00008C7.38317 4.00008 6.08317 5.30008 6.08317 6.91675C6.08317 8.53341 7.38317 9.83341 8.99984 9.83341C10.6165 9.83341 11.9165 8.53341 11.9165 6.91675C11.9165 5.30008 10.6165 4.00008 8.99984 4.00008ZM8.99984 8.16675C8.66832 8.16675 8.35037 8.03505 8.11595 7.80063C7.88153 7.56621 7.74984 7.24827 7.74984 6.91675C7.74984 6.58523 7.88153 6.26728 8.11595 6.03286C8.35037 5.79844 8.66832 5.66675 8.99984 5.66675C9.33136 5.66675 9.6493 5.79844 9.88372 6.03286C10.1181 6.26728 10.2498 6.58523 10.2498 6.91675C10.2498 7.24827 10.1181 7.56621 9.88372 7.80063C9.6493 8.03505 9.33136 8.16675 8.99984 8.16675Z"
                                fill="#9C9C9C"
                            />
                          </svg>
                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="emailcont">
                                        <input
                                            type="email"
                                            class="form-control frm-input mb-3"
                                            placeholder="البريد الالكتروني"
                                        />
                                        <span class="icon-placeholder">
                          <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="18"
                              height="14"
                              viewBox="0 0 18 14"
                              fill="none"
                          >
                            <path
                                d="M2.33317 13.6667C1.87484 13.6667 1.48234 13.5034 1.15567 13.1767C0.829005 12.85 0.66595 12.4578 0.666505 12V2.00004C0.666505 1.54171 0.829839 1.14921 1.15651 0.822542C1.48317 0.495875 1.87539 0.33282 2.33317 0.333375H15.6665C16.1248 0.333375 16.5173 0.496709 16.844 0.823375C17.1707 1.15004 17.3337 1.54226 17.3332 2.00004V12C17.3332 12.4584 17.1698 12.8509 16.8432 13.1775C16.5165 13.5042 16.1243 13.6673 15.6665 13.6667H2.33317ZM15.6665 3.66671L9.43734 7.56254C9.36789 7.60421 9.29484 7.6356 9.21817 7.65671C9.14151 7.67782 9.06873 7.6881 8.99984 7.68754C8.93039 7.68754 8.85734 7.67726 8.78067 7.65671C8.70401 7.63615 8.63123 7.60476 8.56234 7.56254L2.33317 3.66671V12H15.6665V3.66671ZM8.99984 6.16671L15.6665 2.00004H2.33317L8.99984 6.16671ZM2.33317 3.87504V2.64588V2.66671V2.65671V3.87504Z"
                                fill="#9C9C9C"
                            />
                          </svg>
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
                                            class="form-control input-user mb-3"
                                            name="password"
                                            placeholder="كلمة المرور"
                                        />
                                        <span class="icon-placeholder">
                          <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="14"
                              height="19"
                              viewBox="0 0 14 19"
                              fill="none"
                          >
                            <path
                                d="M7.00016 14.1667C6.55814 14.1667 6.13421 13.9911 5.82165 13.6786C5.50909 13.366 5.3335 12.9421 5.3335 12.5C5.3335 11.575 6.07516 10.8334 7.00016 10.8334C7.44219 10.8334 7.86611 11.009 8.17867 11.3215C8.49123 11.6341 8.66683 12.058 8.66683 12.5C8.66683 12.9421 8.49123 13.366 8.17867 13.6786C7.86611 13.9911 7.44219 14.1667 7.00016 14.1667ZM12.0002 16.6667V8.33337H2.00016V16.6667H12.0002ZM12.0002 6.66671C12.4422 6.66671 12.8661 6.8423 13.1787 7.15486C13.4912 7.46742 13.6668 7.89135 13.6668 8.33337V16.6667C13.6668 17.1087 13.4912 17.5327 13.1787 17.8452C12.8661 18.1578 12.4422 18.3334 12.0002 18.3334H2.00016C1.55814 18.3334 1.13421 18.1578 0.821651 17.8452C0.509091 17.5327 0.333496 17.1087 0.333496 16.6667V8.33337C0.333496 7.40837 1.07516 6.66671 2.00016 6.66671H2.8335V5.00004C2.8335 3.89497 3.27248 2.83516 4.05388 2.05376C4.83529 1.27236 5.89509 0.833374 7.00016 0.833374C7.54734 0.833374 8.08915 0.941148 8.59468 1.15054C9.1002 1.35994 9.55953 1.66685 9.94644 2.05376C10.3334 2.44067 10.6403 2.9 10.8497 3.40553C11.0591 3.91105 11.1668 4.45287 11.1668 5.00004V6.66671H12.0002ZM7.00016 2.50004C6.33712 2.50004 5.70124 2.76343 5.2324 3.23227C4.76355 3.70111 4.50016 4.337 4.50016 5.00004V6.66671H9.50016V5.00004C9.50016 4.337 9.23677 3.70111 8.76793 3.23227C8.29909 2.76343 7.6632 2.50004 7.00016 2.50004Z"
                                fill="#9C9C9C"
                            />
                          </svg>
                        </span>
                                        <span
                                            toggle="#password-field"
                                            class="fa fa-fw fa-eye field-icon toggle-password"
                                        ></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="emailcont">
                                        <input
                                            id="password-field-confirm"
                                            type="password"
                                            class="form-control input-user mb-3"
                                            name="password"
                                            placeholder="تأكيد كلمه المرور"
                                        />
                                        <span class="icon-placeholder">
                          <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="14"
                              height="19"
                              viewBox="0 0 14 19"
                              fill="none"
                          >
                            <path
                                d="M7.00016 14.1667C6.55814 14.1667 6.13421 13.9911 5.82165 13.6786C5.50909 13.366 5.3335 12.9421 5.3335 12.5C5.3335 11.575 6.07516 10.8334 7.00016 10.8334C7.44219 10.8334 7.86611 11.009 8.17867 11.3215C8.49123 11.6341 8.66683 12.058 8.66683 12.5C8.66683 12.9421 8.49123 13.366 8.17867 13.6786C7.86611 13.9911 7.44219 14.1667 7.00016 14.1667ZM12.0002 16.6667V8.33337H2.00016V16.6667H12.0002ZM12.0002 6.66671C12.4422 6.66671 12.8661 6.8423 13.1787 7.15486C13.4912 7.46742 13.6668 7.89135 13.6668 8.33337V16.6667C13.6668 17.1087 13.4912 17.5327 13.1787 17.8452C12.8661 18.1578 12.4422 18.3334 12.0002 18.3334H2.00016C1.55814 18.3334 1.13421 18.1578 0.821651 17.8452C0.509091 17.5327 0.333496 17.1087 0.333496 16.6667V8.33337C0.333496 7.40837 1.07516 6.66671 2.00016 6.66671H2.8335V5.00004C2.8335 3.89497 3.27248 2.83516 4.05388 2.05376C4.83529 1.27236 5.89509 0.833374 7.00016 0.833374C7.54734 0.833374 8.08915 0.941148 8.59468 1.15054C9.1002 1.35994 9.55953 1.66685 9.94644 2.05376C10.3334 2.44067 10.6403 2.9 10.8497 3.40553C11.0591 3.91105 11.1668 4.45287 11.1668 5.00004V6.66671H12.0002ZM7.00016 2.50004C6.33712 2.50004 5.70124 2.76343 5.2324 3.23227C4.76355 3.70111 4.50016 4.337 4.50016 5.00004V6.66671H9.50016V5.00004C9.50016 4.337 9.23677 3.70111 8.76793 3.23227C8.29909 2.76343 7.6632 2.50004 7.00016 2.50004Z"
                                fill="#9C9C9C"
                            />
                          </svg>
                        </span>
                                        <span
                                            toggle="#password-field-confirm"
                                            class="fa fa-fw fa-eye field-icon toggle-password"
                                        ></span>
                                    </div>
                                </div>
                            </div>
                            <div class="emailcont">
                                <input
                                    type="tel"
                                    class="form-control frm-input mb-3"
                                    placeholder="رقم الهاتف"
                                />
                                <span class="icon-placeholder">
                      <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="16"
                          height="16"
                          viewBox="0 0 16 16"
                          fill="none"
                      >
                        <path
                            d="M1.375 15.5C1.23611 15.5 1.09028 15.4964 0.9375 15.4892C0.784722 15.4819 0.638889 15.4717 0.5 15.4583V10.5833L4.66667 9.75L7.08333 12.1667C8.13889 11.5278 9.10778 10.7708 9.99 9.89583C10.8722 9.02083 11.6047 8.08333 12.1875 7.08333L9.8125 4.6875L10.5833 0.5H15.4583C15.4861 0.638889 15.5 0.784722 15.5 0.9375V1.375C15.5 3.16667 15.1008 4.91333 14.3025 6.615C13.5042 8.31667 12.4486 9.82694 11.1358 11.1458C9.82306 12.4653 8.31611 13.5208 6.615 14.3125C4.91389 15.1042 3.16722 15.5 1.375 15.5ZM12.9792 5.5C13.2153 4.95833 13.3958 4.40972 13.5208 3.85417C13.6458 3.29861 13.7431 2.73611 13.8125 2.16667H11.9583L11.6042 4.125L12.9792 5.5ZM5.52083 12.9583L4.125 11.5625L2.16667 11.9583V13.7917C2.73611 13.75 3.30222 13.6597 3.865 13.5208C4.42778 13.3819 4.97972 13.1944 5.52083 12.9583Z"
                            fill="#9C9C9C"
                        />
                      </svg>
                    </span>
                            </div>
                            <button type="button" class="mt-4 btn-login">سجل الان</button>

                            <div class="pt-3 user-links">
                                <p class="text-bold">
                                    اذا كان لديك حساب
                                    <a href="#" class="user-link">سجل الدخول </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="side-login-image"></div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Login -->
<div
    class="modal fade modal-custom modal-height-mobile"
    id="loginModal"
    tabindex="-1"
    aria-labelledby="loginModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog">
        <div class="modal-content">
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

            <div
                class="modal-body login-body d-lg-flex justify-content-lg-between"
            >
                <div class="text-center my-lg-5 my-3 login-content">
                    <div
                        class="row d-flex justify-content-center align-items-center h-100"
                    >
                        <div class="col-md-8 col-10 my-lg-5 my-2">
                            <h2 class="fw-bold login-title mb-5">تسجيل الدخول</h2>

                            <div class="emailcont">
                                <input
                                    type="tel"
                                    class="form-control frm-input mb-3"
                                    placeholder="رقم الهاتف"
                                />
                                <span class="icon-placeholder">
                      <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="16"
                          height="16"
                          viewBox="0 0 16 16"
                          fill="none"
                      >
                        <path
                            d="M1.375 15.5C1.23611 15.5 1.09028 15.4964 0.9375 15.4892C0.784722 15.4819 0.638889 15.4717 0.5 15.4583V10.5833L4.66667 9.75L7.08333 12.1667C8.13889 11.5278 9.10778 10.7708 9.99 9.89583C10.8722 9.02083 11.6047 8.08333 12.1875 7.08333L9.8125 4.6875L10.5833 0.5H15.4583C15.4861 0.638889 15.5 0.784722 15.5 0.9375V1.375C15.5 3.16667 15.1008 4.91333 14.3025 6.615C13.5042 8.31667 12.4486 9.82694 11.1358 11.1458C9.82306 12.4653 8.31611 13.5208 6.615 14.3125C4.91389 15.1042 3.16722 15.5 1.375 15.5ZM12.9792 5.5C13.2153 4.95833 13.3958 4.40972 13.5208 3.85417C13.6458 3.29861 13.7431 2.73611 13.8125 2.16667H11.9583L11.6042 4.125L12.9792 5.5ZM5.52083 12.9583L4.125 11.5625L2.16667 11.9583V13.7917C2.73611 13.75 3.30222 13.6597 3.865 13.5208C4.42778 13.3819 4.97972 13.1944 5.52083 12.9583Z"
                            fill="#9C9C9C"
                        />
                      </svg>
                    </span>
                            </div>
                            <div class="emailcont">
                                <input
                                    id="password-field"
                                    type="password"
                                    class="form-control input-user my-3"
                                    name="password"
                                    placeholder="كلمة المرور"
                                />
                                <span class="icon-placeholder">
                      <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="14"
                          height="19"
                          viewBox="0 0 14 19"
                          fill="none"
                      >
                        <path
                            d="M7.00016 14.1667C6.55814 14.1667 6.13421 13.9911 5.82165 13.6786C5.50909 13.366 5.3335 12.9421 5.3335 12.5C5.3335 11.575 6.07516 10.8334 7.00016 10.8334C7.44219 10.8334 7.86611 11.009 8.17867 11.3215C8.49123 11.6341 8.66683 12.058 8.66683 12.5C8.66683 12.9421 8.49123 13.366 8.17867 13.6786C7.86611 13.9911 7.44219 14.1667 7.00016 14.1667ZM12.0002 16.6667V8.33337H2.00016V16.6667H12.0002ZM12.0002 6.66671C12.4422 6.66671 12.8661 6.8423 13.1787 7.15486C13.4912 7.46742 13.6668 7.89135 13.6668 8.33337V16.6667C13.6668 17.1087 13.4912 17.5327 13.1787 17.8452C12.8661 18.1578 12.4422 18.3334 12.0002 18.3334H2.00016C1.55814 18.3334 1.13421 18.1578 0.821651 17.8452C0.509091 17.5327 0.333496 17.1087 0.333496 16.6667V8.33337C0.333496 7.40837 1.07516 6.66671 2.00016 6.66671H2.8335V5.00004C2.8335 3.89497 3.27248 2.83516 4.05388 2.05376C4.83529 1.27236 5.89509 0.833374 7.00016 0.833374C7.54734 0.833374 8.08915 0.941148 8.59468 1.15054C9.1002 1.35994 9.55953 1.66685 9.94644 2.05376C10.3334 2.44067 10.6403 2.9 10.8497 3.40553C11.0591 3.91105 11.1668 4.45287 11.1668 5.00004V6.66671H12.0002ZM7.00016 2.50004C6.33712 2.50004 5.70124 2.76343 5.2324 3.23227C4.76355 3.70111 4.50016 4.337 4.50016 5.00004V6.66671H9.50016V5.00004C9.50016 4.337 9.23677 3.70111 8.76793 3.23227C8.29909 2.76343 7.6632 2.50004 7.00016 2.50004Z"
                            fill="#9C9C9C"
                        />
                      </svg>
                    </span>
                                <span
                                    toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"
                                ></span>
                            </div>
                            <button type="button" class="mt-4 btn-login">سجل الان</button>
                            <div class="forgit-password pt-2">
                                <a href="#"> هل نسيت كلمه المرور ؟ </a>
                            </div>
                            <div class="pt-3 user-links">
                                <p class="text-bold">
                                    ليس لديك حساب ؟
                                    <a href="#" class="user-link">تسجيل حساب</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="side-login-image"></div>
            </div>
        </div>
    </div>
</div>