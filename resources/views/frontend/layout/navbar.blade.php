<!-- Header -->
<header id="header" class="header header-layout-type-header-2rows">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-auto header-top-left align-self-center text-center text-xl-start">
                    <ul class="element contact-info">
                        <li class="contact-phone"><i class="fa fa-phone font-icon sm-display-block"></i>
                            <a href="tel:{{getSetting()->phone}}">{{getSetting()->phone}}</a>
                        </li>
                        <li class="contact-email"><i class="fa fa-envelope font-icon sm-display-block"></i> <a
                                href="mailto:{{getSetting()->email}}" class="__cf_email__"
                                data-cfemail="ea83848c85aa8f928b879a868fc4898587">{{getSetting()->email}}</a></li>
                        <li class="contact-address"><i class="fa fa-map font-icon sm-display-block"></i> {{getSetting()->address}}
                        </li>
                    </ul>
                </div>
                <div class="col-xl-auto ms-xl-auto header-top-right align-self-center text-center text-xl-end">
                    <div class="element pt-0 pb-0">
                        <ul class="styled-icons icon-dark icon-theme-colored1 icon-circled clearfix">
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
    <div class="header-nav tm-enable-navbar-hide-on-scroll">
        <div class="header-nav-wrapper navbar-scrolltofixed">
            <div class="menuzord-container header-nav-container">
                <div class="container position-relative">
                    <div class="row header-nav-col-row">
                        <div class="col-sm-auto align-self-center">
                            <a class="menuzord-brand site-brand" href="{{ route('web_index') }}">
                                <img class="logo-default logo-1x" src="{{asset('upload/setting/'.getSetting()->logo)}}" alt="Logo" style="height: 80px">
                                <img class="logo-default logo-2x retina" src="{{asset('upload/setting/'.getSetting()->logo)}}" alt="Logo" style="height: 80px">
                            </a>
                        </div>
                        <div class="col-sm-auto ms-auto pr-0 align-self-center">
                            <nav id="top-primary-nav" class="menuzord blue" data-effect="fade" data-animation="none"
                                 data-align="right">
                                <ul id="main-nav" class="menuzord-menu">
                                    <li class="{{getActiveRoutesHome('web_index')}} menu-item">
                                        <a href="{{ route('web_index') }}" >{{trans('dev.home')}}</a>
                                    </li>
                                    <li class="{{getActiveRoutesHome('web_about')}}  menu-item">
                                        <a href="{{ route('web_about') }}">{{trans('dev.about')}}</a>
                                    </li>
                                    <li class="{{getActiveRoutesHome('web_services')}}menu-item">
                                        <a href="{{ route('web_services') }}">{{trans('dev.services')}}</a>
                                    </li>
                                    <li class="{{getActiveRoutesHome('web_products')}}menu-item">
                                        <a href="{{ route('web_products') }}">{{trans('dev.products')}}</a>
                                    </li>
                                    <li class="{{getActiveRoutesHome('web_blogs')}} menu-item">
                                        <a href="{{ route('web_blogs') }}">{{trans('dev.blogs')}}</a>
                                    </li>
                                    <li class="{{getActiveRoutesHome('web_gallery')}} menu-item">
                                        <a href="{{ route('web_gallery') }}">{{trans('dev.gallery')}}</a>
                                    </li>
                                    <li class="{{getActiveRoutesHome('web_contact')}} menu-item">
                                        <a href="{{ route('web_contact') }}">{{trans('dev.contact')}}</a>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                        <div class="col-sm-auto align-self-center nav-side-icon-parent">
                            <ul class="list-inline nav-side-icon-list">
                                <li class="hidden-mobile-mode">
                                    <div class="top-nav-mini-cart-icon-container">
                                        <div class="top-nav-mini-cart-icon-contents">
                                            <a class="mini-cart-icon" href="#" target="_self" title="Language Switcher"> <i class="fa fa-globe"></i></a>
                                            <div class="dropdown-content">
                                                <div class="buttons cart-action-buttons">
                                                    <div class="row">
                                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                            <div class="col-6 pe-0">
                                                                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" class="btn btn-theme-colored2 btn-block btn-sm wc-forward">{{ $properties['native'] }}</a>
                                                            </div>
                                                        @endforeach

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="hidden-mobile-mode">
                                    <div id="side-panel-trigger" class="side-panel-trigger"><a href="#">
                                            <div class="hamburger-box">
                                                <div class="hamburger-inner"></div>
                                            </div>
                                        </a></div>
                                </li>
                            </ul>
                            <div id="top-nav-search-form" class="clearfix">
                                <form action="#" method="GET">
                                    <input type="text" name="s" value="" placeholder="Type and Press Enter..."
                                           autocomplete="off"/>
                                </form>
                                <a href="#" id="close-search-btn"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row d-block d-xl-none">
                        <div class="col-12">
                            <nav id="top-primary-nav-clone"
                                 class="menuzord d-block d-xl-none default menuzord-color-default menuzord-border-boxed menuzord-responsive"
                                 data-effect="slide" data-animation="none" data-align="right">
                                <ul id="main-nav-clone"
                                    class="menuzord-menu menuzord-right menuzord-indented scrollable">
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
