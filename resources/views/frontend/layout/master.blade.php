<!DOCTYPE html>
<html dir="{{App::getLocale() == 'ar' ? 'rtl' : 'ltr'}}" lang="en">
<head>
@include('frontend.layout.header')
</head>
<body class="tm-container-1300px {{App::getLocale() == 'ar' ? 'rtl' : ''}} has-side-panel side-panel-right">
<div class="side-panel-body-overlay"></div>
<div id="side-panel-container" class="dark" data-tm-bg-img="{{asset('frontend/images/side-push-bg.jpg')}}">
    <div class="side-panel-wrap">
        <div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i
                    class="fa fa-times side-panel-trigger-icon"></i></a></div>
        <img class="logo mb-50" src="{{asset('upload/setting/'. getSetting()->logo)}}" alt="Logo">
        <p>{{getSetting()->notes}}</p>
        <div class="widget">
            <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">{{trans('dev.latest_news')}}</h4>
            <div class="latest-posts">
                @foreach(getFooterBlogs() as $blog)
                    <article class="post clearfix pb-0 mb-10">
                        <a class="post-thumb" href="{{ route('web_blog', $blog->slug) }}"><img src="{{asset('upload/blog/'.$blog->image)}}" alt=""></a>
                        <div class="post-right">
                            <h5 class="post-title mt-0"><a href="#">{{$blog->name}}</a></h5>
                            <p>{!! Str::limit($blog->notes, 30) !!}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>

        <div class="widget">
            <h5 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">{{trans('dev.contact')}}</h5>
            <div class="tm-widget-contact-info contact-info-style1 contact-icon-theme-colored1">
                <ul>
                    <li class="contact-name">
                        <div class="icon"><i class="flaticon-contact-037-address"></i></div>
                        <div class="text">{{getSetting()->name}}</div>
                    </li>
                    <li class="contact-phone">
                        <div class="icon"><i class="flaticon-contact-042-phone-1"></i></div>
                        <div class="text"><a href="tel:{{getSetting()->phone}}">{{getSetting()->phone}}</a></div>
                    </li>
                    <li class="contact-email">
                        <div class="icon"><i class="flaticon-contact-043-email-1"></i></div>
                        <div class="text"><a
                                href="mailto:{{getSetting()->email}}"><span
                                    class="__cf_email__" data-cfemail="f49d9a929bb48d9b8186909b99959d9ada979b99">{{getSetting()->email}}</span></a>
                        </div>
                    </li>
                    <li class="contact-address">
                        <div class="icon"><i class="flaticon-contact-047-location"></i></div>
                        <div class="text">{{getSetting()->address}}</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="wrapper" class="clearfix">
@include('frontend.layout.navbar')
    <div class="row">
        <div class="col-lg-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
@yield('main')
@include('frontend.layout.footer')
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->
<!-- Footer Scripts -->
@include('frontend.layout.script')
</body>
</html>
