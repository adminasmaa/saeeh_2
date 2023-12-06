
<footer class="footer-section bg-second">
    <div class="footer-top">
        <div class="container">
            <div class="row py-md-5 py-2">
                <div class="col-lg-3 col-md-6">
                    <div>
                        <img src="{{FRONTASSETS}}/images/logo-white.svg" alt="logo" class="logo-footer" />

                        <div class="google-apps desk-view">
                            <h4 class="footer-title"> @lang('site.Download the application now')</h4>
                            <ul class="mt-md-3 mt-2 d-flex list-unstyled list-icons">
                                <li class="footer-google-app">
                                    <a href="#" target="_blank" title="store">
                                        <img src="{{FRONTASSETS}}/images/store.png" alt="store" />
                                    </a>
                                </li>
                                <li class="footer-google-app">
                                    <a href="#" target="_blank" title="google app">
                                        <img src="{{FRONTASSETS}}/images/google-app.svg" alt="google app" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 ">
                    <div>
                        <h3 class="footer-title">@lang('site.Important links') </h3>
                        <ul class="list-unstyled links-list">
                            <li class="py-md-2 py-1"><a href="{{route('Home')}}">@lang('site.home')</a></li>
                            <li class="py-md-2 py-1"><a href="{{route('freq_question')}}">@lang('site.questions') </a>
                            </li>
                            <li class="py-md-2 py-1"><a href="{{route('termAndCondition')}}">@lang('site.Usage policy')
                                </a></li>
                            <li class="py-md-2 py-1"><a href="#">@lang('site.Become a partner with us')</a></li>
                            <li class="py-md-2 py-1"><a href="{{route('contacts')}}">@lang('site.contact')</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex english-display" >
                    <div>
                        <h3 class="footer-title">@lang('site.social media') </h3>
                        <ul class="mt-sm-3 mt-2 d-flex list-unstyled list-icons">
                            <li class="footerSocialIcons d-flex align-items-center justify-content-center">
                                <a href="{{$settings->snapchat}}" class="lh-0" target="_blank" title="Snapchat">
                                    <img src="{{FRONTASSETS}}/images/snapchat-icon.svg" alt="Snapchat" />
                                </a>
                            </li>
                            <li class="footerSocialIcons d-flex align-items-center justify-content-center">
                                <a href="{{$settings->facebook}}" class="lh-0" target="_blank" title="Facebook">
                                    <img src="{{FRONTASSETS}}/images/facebook-icon.svg" alt="Facebook" />
                                </a>
                            </li>
                            <li class="footerSocialIcons d-flex align-items-center justify-content-center">
                                <a href="{{$settings->instagram}}" class="lh-0" target="_blank" title="Instagram">
                                    <img src="{{FRONTASSETS}}/images/instagram-icon.svg" alt="Instagram" />
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="google-apps mob-view">
                        <h3 class="footer-title">  @lang('site.Download the application now')</h4>
                            <ul
                                class="mt-sm-3 mt-2 d-flex align-items-center justify-content-center list-unstyled list-icons">
                                <li class="footer-google-app">
                                <a href="#" target="_blank" title="store">
                                        <img src="{{FRONTASSETS}}/images/store.png" alt="store" />
                                    </a>
                                </li>
                                <li class="footer-google-app">
                                <a href="#" target="_blank" title="google app">
                                        <img src="{{FRONTASSETS}}/images/google-app.svg" alt="google app" />
                                    </a>
                                </li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 ">
                    <div>
                        <h3 class="footer-title">@lang('site.serving our customers') </h3>
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
                                    <li class="pt-1">
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
                                    <li class="pt-1">
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
            <div class="row py-sm-3 py-2">
                <div class="col-12">
                    <div class="thgCopyright">
                        <p class="mb-0">@lang('site.copyrights')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

