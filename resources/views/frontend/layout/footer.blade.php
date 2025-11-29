<!-- Footer -->
<footer id="footer" class="footer bg-no-repeat" data-tm-bg-img="{{asset('frontend/images/footer-img1.png')}}">
    <div class="footer-widget-area">
        <div class="container pt-100 pb-70">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <img class="mb-30" alt="Logo" src="{{asset('upload/setting/'.getSetting()->logo)}}" style="height: 50px">
                    <div class="footer-contact-address">
                        <div class="phone mb-15">
                            <p class="mb-0">{{trans('dev.phone')}}</p>
                            <h6 class="m-0 text-white">{{getSetting()->phone}}</h6>
                        </div>
                        <div class="email mb-15">
                            <p class="mb-0">{{trans('dev.email')}}</p>
                            <h6 class="m-0 text-white"><a
                                    href="mailto:{{getSetting()->email}}"
                                    class="__cf_email__" data-cfemail="07696262636f626b77476a66746e6a2964686a">{{getSetting()->email}}</a>
                            </h6>
                        </div>
                        <div class="address">
                            <p class="mb-0">{{trans('dev.address')}}</p>
                            <h6 class="m-0 text-white">{{getSetting()->address}}</h6>
                        </div>
                        <div class="address">
                            <p class="mb-0">{{trans('dev.working_hours')}}</p>
                            <h6 class="m-0 text-white">{{getSetting()->opening_hour}}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="widget widget_nav_menu">
                        <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">{{trans('dev.links')}}</h4>
                        <div class="menu-footer-page-list">
                            <ul id="footer-page-list" class="menu">
                                <li><a href="{{ route('web_services') }}">{{trans('dev.services')}}</a></li>
                                <li><a href="{{ route('web_about') }}">{{trans('dev.about')}}</a></li>
                                <li><a href="{{ route('web_products') }}">{{trans('dev.products')}}</a></li>
                                <li><a href="{{ route('web_faqs') }}">{{trans('dev.faq')}}</a></li>
                                <li><a href="{{ route('web_blogs') }}">{{trans('dev.blogs')}}</a></li>
                                <li><a href="{{ route('web_contact') }}">{{trans('dev.contact')}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="widget">
                        <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">{{trans('dev.latest_news')}}</h4>
                        <div class="latest-posts">
                            @foreach(getFooterBlogs() as $blog)
                                <article class="post clearfix pb-0 mb-20">
                                    <a class="post-thumb" href="{{ route('web_blog', $blog->slug) }}"><img src="{{asset('upload/blog/'.$blog->image)}}" alt=""></a>
                                    <div class="post-right">
                                        <span class="post-date"><time class="entry-date text-theme-colored1" datetime="2021-05-15T06:10:26+00:00">{{$blog->created_at->format('M-d-Y')}}</time></span>
                                        <h6 class="post-title"><a href="{{ route('web_blog', $blog->slug) }}" class="text-white">{{$blog->name}} </a></h6>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row pt-40 pb-40">
                    <div class="col-sm-6">
                        <div class="footer-paragraph text-center text-xl-start text-lg-start text-md-start mb-sm-15">
                            © {{date('Y')}} {{getSetting()->name}}. {{trans('dev.all_rights_reserved')}} <a href="https://devolarax.com/">Devolarax</a>.
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="footer-paragraph text-center text-xl-end text-lg-end text-md-end">
                            <ul class="styled-icons icon-dark icon-circled icon-theme-colored1 ">
                                @if(getSetting()->facebook)
                                    <li><a class="social-link" href="{{getSetting()->facebook}}"><i class="fab fa-facebook"></i></a></li>
                                @endif
                                @if(getSetting()->x)
                                    <li><a class="social-link" href="{{getSetting()->x}}"><i class="fab fa-twitter"></i></a></li>
                                @endif
                                @if(getSetting()->youtube)
                                    <li><a class="social-link" href="{{getSetting()->youtube}}"><i class="fab fa-youtube"></i></a></li>
                                @endif
                                @if(getSetting()->instagram)
                                    <li><a class="social-link" href="{{getSetting()->instagram}}"><i class="fab fa-instagram"></i></a></li>
                                @endif
                                @if(getSetting()->linkedin)
                                    <li><a class="social-link" href="{{getSetting()->linkedin}}"><i class="fab fa-linkedin"></i></a></li>
                                @endif
                                @if(getSetting()->tiktok)
                                    <li><a class="social-link" href="{{getSetting()->tiktok}}"><i class="fab fa-tiktok"></i></a></li>
                                @endif
                                @if(getSetting()->snapchat)
                                    <li><a class="social-link" href="{{getSetting()->snapchat}}"><i class="fab fa-snapchat"></i></a></li>
                                @endif
                                @if(getSetting()->whatsapp)
                                    <li><a class="social-link" href="{{getSetting()->whatsapp}}"><i class="fab fa-whatsapp"></i></a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
