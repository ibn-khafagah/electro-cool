@extends('frontend.layout.master')
@section('title')
{{trans('dev.home')}}
@endsection
@section('css')
<style>
    html[dir="rtl"] .lg-outer,
    html[dir="rtl"] .lg-inner,
    html[dir="rtl"] .lg-item {
        direction: ltr !important;
    }

    html[dir="rtl"] .lg-outer .lg-image {
        transform: none !important;
    }
</style>
@endsection
@section('seo')
    @php
        $setting = getSetting();
        $locale = app()->getLocale();
    @endphp

    <meta name="author" content="{{ $setting->name }}">
    <meta name="robots" content="index, follow"/>
    <meta name="description" content="{{ $setting->meta_description }}">
    <meta name="keywords" content="{{ $setting->meta_keyword }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Canonical -->
    <link rel="canonical" href="{{ URL::current() }}">

    <!-- OG Tags -->
    <meta property="og:title" content="{{ $setting->name }}"/>
    <meta property="og:description" content="{{ $setting->meta_description }}"/>
    <meta property="og:url" content="{{ URL::current() }}"/>
    <meta property="og:image" content="{{ asset('upload/setting/'.$setting->logo) }}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="{{ $setting->name }}"/>
    <meta property="og:locale" content="{{ $locale == 'ar' ? 'ar_EG' : 'en_US' }}">
    <meta property="og:locale:alternate" content="{{ $locale == 'ar' ? 'en_US' : 'ar_EG' }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="{{ $setting->name }}">
    <meta name="twitter:title" content="{{ $setting->name }}">
    <meta name="twitter:description" content="{{ $setting->meta_description }}">
    <meta name="twitter:image" content="{{ asset('upload/setting/'.$setting->logo) }}">

    <!-- Language -->
    <meta name="language" content="{{ $locale }}">
    <link rel="alternate" hreflang="{{ $locale }}" href="{{ URL::current() }}">
    <link rel="alternate" hreflang="{{ $locale == 'ar' ? 'en' : 'ar' }}" href="{{ LaravelLocalization::getLocalizedURL($locale == 'ar' ? 'en' : 'ar') }}">

@endsection
@section('main')
    <!-- Start main-content -->
    <div class="main-content-area">
        <!-- Section: home Start -->
        <section id="home">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col">
                        <!-- START Rev Slider Masim REVOLUTION SLIDER 6.1.7 -->
                        <p class="rs-p-wp-fix"></p>
                        <rs-module-wrap id="rev_slider_1_1_wrapper" data-alias="rev-slider-masim" data-source="gallery"
                                        style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                            <rs-module id="rev_slider_1_1" style="display:none;" data-version="6.1.7">
                                <rs-slides>
                                    @foreach($banners as $banner)
                                        <rs-slide data-key="rs-23{{$banner->id}}" data-title="Slide 1{{$banner->id}}" data-thumb="{{asset('upload/banner/'.$banner->image)}}"
                                                  data-anim="ei:d;eo:d;s:d;r:0;t:slotslide-horizontal;sl:d;">
                                            <img src="{{asset('upload/banner/'.$banner->image)}}" title="slide11" width="1920" height="1280"
                                                 data-parallax="off" class="rev-slidebg" data-no-retina>
                                            <rs-layer
                                                id="slider-6-slide-23-layer-18-{{$banner->id}}"
                                                data-type="text"
                                                data-rsp_ch="on"
                                                data-xy="x:c;xo:0,45px,0,0;yo:175px,197px,157px,180px;"
                                                data-text="w:normal;s:100,90,72,52;l:104,92,74,56;fw:800;a:center;"
                                                data-frame_1="st:1000;sp:1000;sR:220;"
                                                data-frame_999="o:0;st:w;sR:7790;"
                                                style="z-index:9;font-family:Poppins;"
                                            >
                                                @php
                                                    $text = trim($banner->name ?? '');
                                                    $words = preg_split('/\s+/', $text);

                                                    if (count($words) <= 1) {
                                                        $line1    = $text;
                                                        $line2    = '';
                                                        $lastWord = '';
                                                    } else {
                                                        $lastWord = array_pop($words);
                                                        $line1 = implode(' ', array_slice($words, 0, 2));
                                                        $line2 = implode(' ', array_slice($words, 2));
                                                    }
                                                @endphp

                                                {!! $line1 !!}<br>
                                                {!! $line2 !!}<br>
                                                <span class="text-theme-colored1">{!! $lastWord !!}</span>
                                            </rs-layer>
                                            <rs-layer
                                                id="slider-6-slide-23-layer-22-{{$banner->id}}"
                                                data-type="text"
                                                data-rsp_ch="on"
                                                data-xy="x:c;xo:0,50px,0,0;yo:538px,520px,427px,382px;"
                                                data-text="w:normal;s:20,16,16,16;l:25,20,18,22;a:left,left,left,center;"
                                                data-frame_1="st:1500;sp:1000;"
                                                data-frame_999="o:0;st:w;sR:8700;"
                                                style="z-index:8;"
                                            ><a href="{{ route('web_contact') }}"
                                                class="btn btn-flat btn-lg btn-theme-colored2 text-white">{{trans('dev.get_a_free_quote')}}</a>
                                            </rs-layer>
                                            <rs-layer
                                                id="slider-6-slide-23-layer-33-{{$banner->id}}"
                                                data-type="shape"
                                                data-rsp_ch="on"
                                                data-text="w:normal;s:20,15,11,6;l:0,19,14,8;"
                                                data-dim="w:100%;h:100%;"
                                                data-basealign="slide"
                                                data-frame_1="st:500;sp:1000;"
                                                data-frame_999="o:0;st:w;sR:8000;"
                                                style="z-index:3;background-color:rgba(0,0,0,0.5);font-family:Roboto;"
                                            >
                                            </rs-layer>
                                        </rs-slide>
                                    @endforeach
                                </rs-slides>
                                <rs-static-layers>
                                    <!--
                                      -->
                                </rs-static-layers>
                                <rs-progress class="rs-bottom"
                                             style="height: 5px; background: rgba(199,199,199,0.5);"></rs-progress>
                            </rs-module>
                        </rs-module-wrap>
                        <!-- END REVOLUTION SLIDER -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: home End -->

        <!-- Section: About -->
        <section class="z-index-1" data-tm-bg-img="{{asset('frontend/images/bg/about-bg1.png')}}">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-lg-5 col-xl-6">
                            <div class="image-box mb-md-50">
                                <img src="{{asset('upload/about/'.getAbout()->image1)}}" alt="">
                                <img class="floating-img1" src="{{asset('upload/about/'.getAbout()->image2)}}" alt="">
                                <div class="video-play">
                                    <a data-lightbox-gallery="youtube-video" href="{{getAbout()->video}}"><i
                                            class="fa fa-play"></i></a>
                                </div>
                                <div class="video-play">
                                    <a data-lightbox-gallery="youtube-video" href="{{getAbout()->video}}"><i
                                            class="fa fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-xl-6">
                            <h6 class="text-theme-colored2 mt-0 mb-0">{{getAbout()->sub_title}}</h6>
                            <h2 class="mb-40 tm-item-appear-clip-path">{{getAbout()->title}}</h2>
                            <p class="font-italic text-theme-colored1">{{getAbout()->notes}}</p>
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="about-icon-box first-child pr-30 pb-30">
                                        <div class="icon-box-title">
                                            <img class="tick-img" src="{{asset('frontend/images/tick.png')}}" alt="">
                                            <h5 class="mt-0">{{getAbout()->check1}}</h5>
                                        </div>
                                        <div class="details">
                                            <p class="mb-0">{{getAbout()->check1_notes}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="about-icon-box second-child pl-30 pb-30 pl-md-0 pt-md-30">
                                        <div class="icon-box-title">
                                            <img class="tick-img" src="{{asset('frontend/images/tick.png')}}" alt="">
                                            <h5 class="mt-0">{{getAbout()->check2}}</h5>
                                        </div>
                                        <div class="details">
                                            <p class="mb-0">{{getAbout()->check2_notes}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="about-icon-box third-child pt-30">
                                        <div class="icon-box-title">
                                            <img class="tick-img" src="{{asset('frontend/images/tick.png')}}" alt="">
                                            <h5 class="mt-0"> {{getAbout()->check3}}</h5>
                                        </div>
                                        <div class="details">
                                            <p class="mb-0">{{getAbout()->check3_notes}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="about-icon-box fourth-child pt-30 pl-30 pl-md-0">
                                        <div class="icon-box-title">
                                            <img class="tick-img" src="{{asset('frontend/images/tick.png')}}" alt="">
                                            <h5 class="mt-0">{{getAbout()->check4}}</h5>
                                        </div>
                                        <div class="details">
                                            <p class="mb-0">{{getAbout()->check4_notes}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-60">
                                <div class="col-lg-5 col-sm-6">
                                    <a href="{{ route('web_about') }}" class="btn btn-lg btn-flat btn-theme-colored2 mb-sm-40">{{trans('dev.read_more')}}</a>
                                </div>
                                <div class="col-lg-7 col-sm-6">
                                    <div class="call-us d-flex">
                                        <div class="icon"><i class="icomoon-Phone2"></i></div>
                                        <div class="mobile-number">
                                            <p class="mb-0">{{trans('dev.call_us_anytime')}}</p>
                                            <h5 class="m-0">{{getSetting()->phone1}}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Service -->
        <section class="bg-silver-light z-index-0">
            <div class="container">
                <div class="section-title">
                    <div class="row justify-content-md-center">
                        <div class="col-md-8">
                            <div class="text-center mb-60">
                                <div class="tm-sc-section-title section-title z-index-1 position-relative">
                                    <div class="title-wrapper">
                                        <h6 class="text-theme-colored2">{{getHome()->service_sub_title}}</h6>
                                        <h2>{{getHome()->service_title}}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        @foreach($services as $service)
                            <div class="col-md-6 col-lg-4 col-xl-4 tm-animation move-up">
                                <div class="service-item mb-md-40">
                                    <div class="service-thumb">
                                        <img class="w-100" src="{{asset('upload/service/'.$service->image)}}" alt="">
                                    </div>
                                    <div class="service-content">
                                        <h3 class="service-title">{{$service->name}}</h3>
                                        <p class="mb-0">{!! Str::limit($service->notes, 100) !!}</p>
                                    </div>
                                    <div class="read-more-button d-flex">
                                        <div class="button-text"><a href="{{ route('web_service', $service->slug) }}">{{trans('dev.read_more')}}</a></div>
                                        <div class="button-link ms-auto">
                                            <a href="{{ route('web_service', $service->slug) }}">
                                                <div class="fa fa-arrow-right"></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- floating objects -->
            <div class="tm-floating-objects d-none d-xl-block">
                <span class="floating-object-1 tm-animation-floating z-index--1"
                      data-tm-bg-img="{{asset('frontend/images/section-object1.png')}}" data-tm-width="384" data-tm-height="384"
                      data-tm-top="-10%" data-tm-opacity="0.9"></span>
            </div>
        </section>

        <!-- Section: Funfacts -->
        <section class="layer-overlay overlay-theme-colored3-9 bg-no-repeat" data-tm-bg-img="{{asset('frontend/images/bg/bg1.jpg')}}">
            <div class="container pt-100 pb-100">
                <div class="section-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-xl-5 tm-item-appear-clip-path">
                                <h6 class="text-theme-colored1 mt-0 mb-0">{{getHome()->counter_sub_title}}</h6>
                                <h2 class="mb-40 text-white">{{getHome()->counter_title}}</h2>
                                <a href="{{ route('web_contact') }}" class="btn btn-flat btn-theme-colored2 btn-md mb-md-40">{{trans('dev.get_a_free_quote')}}</a>
                            </div>
                            <div class="col-lg-8 col-xl-7">
                                <div class="row">
                                    <div class="col-md-6 col-lg-3 col-xl-3">
                                        <div class="features-block mb-lg-40">
                                            <div class="features-icon">
                                                <i class="icomoon-documents text-white"></i>
                                            </div>
                                            <div class="features-title">
                                                <h5 class="title">{{getHome()->fun1}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-3">
                                        <div class="features-block mb-lg-40">
                                            <div class="features-icon">
                                                <i class="icomoon-happy text-white"></i>
                                            </div>
                                            <div class="features-title">
                                                <h5 class="title">{{getHome()->fun2}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-3">
                                        <div class="features-block">
                                            <div class="features-icon">
                                                <i class="icomoon-trophy text-white"></i>
                                            </div>
                                            <div class="features-title">
                                                <h5 class="title">{{getHome()->fun3}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-3">
                                        <div class="features-block">
                                            <div class="features-icon text-white">
                                                <i class="icomoon-profile-male text-white"></i>
                                            </div>
                                            <div class="features-title">
                                                <h5 class="title">{{getHome()->fun4}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Why Choose Us -->
        <section class="bg-theme-colored2" data-tm-bg-img="{{asset('frontend/images/bg/about-bg2.png')}}">
            <div class="section-content">
                <div class="container pt-100 pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-xl-5">
                            <h6 class="text-white text-uppercase mt-0 mb-0">{{getHome()->why_sub_title}}</h6>
                            <h2 class="mb-40 text-white">{{getHome()->why_title}}</h2>
                            <p class="text-white">{{getHome()->why_notes}}</p>
                            <div class="tm-sc-unordered-list list-style5 text-white mb-50">
                                <ul>
                                    <li> {{getHome()->why_option1}}</li>
                                    <li> {{getHome()->why_option2}}</li>
                                    <li> {{getHome()->why_option3}}</li>
                                </ul>
                            </div>
                            <div class="tm-sc-progress progress-item theme-style mb-30">
                                <div class="progress-title">
                                    <h6 class="text-white">{{getHome()->why_progress_number_title1}}</h6>
                                </div>
                                <div class="tm-sc-progress-bar progress-bar-floating-percent" data-percent="{{getHome()->why_progress_number1}}"
                                     data-bar-height="">
                                    <div class="progress-title-holder">
                                        <span class="percent"><span class="symbol-left"></span><span
                                                class="value">{{getHome()->why_progress_number1}}</span><span class="symbol-right">%</span></span>
                                    </div>
                                    <div class="progress-holder">
                                        <div class="progress-content" data-width="{{getHome()->why_progress_number1}}%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tm-sc-progress progress-item theme-style">
                                <div class="progress-title">
                                    <h6 class="text-white">{{getHome()->why_progress_number_title2}}</h6>
                                </div>
                                <div class="tm-sc-progress-bar progress-bar-floating-percent" data-percent="{{getHome()->why_progress_number2}}"
                                     data-bar-height="">
                                    <div class="progress-title-holder">
                                        <span class="percent"><span class="symbol-left"></span><span
                                                class="value">{{getHome()->why_progress_number2}}</span><span class="symbol-right">%</span></span>
                                    </div>
                                    <div class="progress-holder">
                                        <div class="progress-content" data-width="{{getHome()->why_progress_number2}}%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col"></div>
                        <div class="col-lg-5 col-xl-6">
                            <div class="why-choose-thumb mt-md-50 mt-lg-20" data-tm-margin-top="-200px">
                                <div class="text-right tm-item-appear-clip-path">
                                    <img class="w-100" src="{{asset('upload/home/'.getHome()->why_image)}}" alt="">
                                </div>
                                <div class="get-the-best box-shadow mb-md-100">
                                    <div class="icon">
                                        <img src="{{asset('upload/setting/'.getSetting()->favicon)}}" alt="" style="width: 50px;height: 50px">
                                    </div>
                                    <div class="details">
                                        <h5>{{getHome()->why_progress_main_title}}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Service features -->
        <section class="">
            <div class="container">
                <div class="tm-sc-section-title section-title">
                    <div class="row justify-content-md-center">
                        <div class="col-lg-6 col-xl-6">
                            <h6 class="text-theme-colored2 mt-0">{{getHome()->service_future_sub_title}}</h6>
                            <h2 class="mt-0">{{getHome()->service_future_title}}</h2>
                        </div>
                        <div class="col"></div>
                        <div class="col-lg-5 col-xl-5">
                            <p class="mb-0">{{getHome()->service_future_notes}}</p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        @foreach($features as $feature)
                            <div class="col-md-6 col-lg-3 col-xl-3 tm-animation move-up">
                                <div class="service-feature no-border-md mb-md-30">
                                    <div class="service-feature-icon">
                                        <img src="{{asset('upload/feature/'.$feature->image)}}" alt="Image">
                                    </div>
                                    <div class="service-feature-content">
                                        @php
                                            $text = trim($feature->name ?? '');
                                            $words = preg_split('/\s+/', $text);

                                            if (count($words) <= 1) {
                                                $line1 = $text;
                                                $line2 = '';
                                            } else {
                                                $line1 = $words[0];
                                                $line2 = implode(' ', array_slice($words, 1));
                                            }
                                        @endphp
                                        <h5 class="service-feature-title">{!! $line1 !!}
                                            @if($line2 != '')
                                                <br>
                                                {!! $line2 !!}
                                            @endif</h5>
                                        <p class="service-feature-text mb-0">{{$feature->notes}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="book-service-area">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-5">
                                <img class="w-100" src="{{asset('upload/home/'.getHome()->book_service_image)}}" alt="iamges">
                            </div>
                            <div class="col-xl-7">
                                <div class="book-service-content mb-lg-30 mt-lg-30">
                                    <h3 class="book-service-title">{{getHome()->book_service_title}}</h3>
                                    <p>{{getHome()->book_service_notes}}</p>
                                    <a href="page-service-details.html" class="btn btn-flat btn-theme-colored1 text-white">{{trans('dev.get_a_free_quote')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- floating objects -->
            <div class="tm-floating-objects d-none d-xl-block">
                <span class="floating-object-1 tm-animation-floating z-index--1"
                      data-tm-bg-img="{{asset('frontend/images/section-object2.png')}}" data-tm-width="384" data-tm-height="384"
                      data-tm-top="30%" data-tm-opacity="1"></span>
            </div>
        </section>

        <!-- Section: Testimonials -->
        <section class="bg-silver-light layer-overlay overlay-white-2 bg-no-repeat bg-pos-center-center bg-size-contain"
                 data-tm-bg-img="{{asset('frontend/images/bg/map.png')}}">
            <div class="container">
                <div class="section-title">
                    <div class="row justify-content-md-center">
                        <div class="col-md-8">
                            <div class="text-center mb-60">
                                <div class="tm-sc-section-title section-title">
                                    <div class="title-wrapper">
                                        <h5>{{getHome()->feedback_sub_title}}</h5>
                                        <h2>{{getHome()->feedback_title}}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        @foreach($feedbacks as $feedback)
                            <div class="col-md-6 col-lg-4 col-xl-4">
                                <div class="testimonial-item mb-md-40">
                                    <div class="author-text">{{$feedback->notes}}
                                    </div>
                                    <div class="author-info clearfix">
                                        <h5 class="name">{{$feedback->name}},</h5>
                                        <span class="job-position text-theme-colored1">{{$feedback->job}}</span>
                                    </div>
                                    <div class="author-thumb">
                                        <img class="rounded-circle" src="{{asset('upload/feedback/'.$feedback->image)}}" alt=""/>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>


        <!-- Section: Video Popup -->
        <section class="layer-overlay overlay-theme-colored3-9 bg-no-repeat" data-tm-bg-img="{{asset('frontend/images/bg/bg1.jpg')}}">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col-lg-10 col-xl-10">
                            <div class="video-block text-center mb-0">
                                <div class="cp-video-divider section-typo-light">
                                    <div class="tm-sc-video-popup box-hover-effect play-video-button">
                                        <div class="effect-wrapper">
                                            <div class="icon">
                                                <i class="fa fa-play"></i>
                                            </div>
                                            <div class="video-button-text"></div>
                                            <a class="hover-link" data-lightbox-gallery="youtube-video"
                                               href="{{getHome()->cll_to_action_video}}" title=""></a>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="text-white popup-video-title">{!! nl2br(e(getHome()->cll_to_action_title)) !!}</h2>
                            </div>
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Team -->
        <section>
            <div class="container pb-70">
                <div class="section-title">
                    <div class="row justify-content-md-center">
                        <div class="col-md-8">
                            <div class="text-center mb-60">
                                <div class="tm-sc-section-title section-title">
                                    <div class="title-wrapper">
                                        <h6 class="text-theme-colored2">{{getHome()->team_sub_title}}</h6>
                                        <h2>{{getHome()->team_title}}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        @foreach($teams as $team)
                            <div class="col-md-12 col-lg-3 col-xl-3">
                                <div class="team-item mb-30">
                                    <div class="team-thumb">
                                        <img class="w-100" src="{{asset('upload/team/'.$team->image)}}" alt="">
                                    </div>
                                    <div class="team-content">
                                        <div class="team-information">
                                            <h5 class="team-name mt-0 mb-0"><a href="page-team-details.html">{{$team->name}}</a></h5>
                                            <p class="designation mb-0">{{$team->job}}</p>
                                        </div>
                                        <div class="team-social">
                                            <ul class="styled-icons icon-team-list icon-bordered icon-circled">
                                                @if($team->facebook)
                                                    <li><a class="social-link" href="{{$team->facebook}}"><i class="fab fa-facebook"></i></a></li>
                                                @endif
                                                @if($team->instagram)
                                                    <li><a class="social-link" href="{{$team->instagram}}"><i class="fab fa-instagram"></i></a></li>
                                                @endif
                                                @if($team->whatsapp)
                                                    <li><a class="social-link" href="{{$team->whatsapp}}"><i class="fab fa-whatsapp"></i></a></li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Google Map -->
        <section data-tm-bg-img="{{asset('frontend/images/bg/about-bg3.png')}}">
            <div class="container-fluid p-0">
                <div class="tm-sc-custom-columns-holder tm-cc-two-columns tm-cc-responsive-mode-1280">
                    <div class="tm-sc-custom-columns-holder-item bg-img-left block-section-left-part layer-overlay overlay-theme-colored1-9"
                         data-item-class="tm-custom-columns-11" data-1200-up="0px 0px 0px 0px"
                         data-1199-down="0px 0px 0px 0px" data-991-down="0px 0px 0px 0px"
                         data-767-down="0px 0px 0px 0px" data-575-down="0px 0px 0px 0px">
                        <div class="item-inner">
                            <div class="item-content tm-custom-columns-11">
                                <div class="google-map">
                                    <iframe src="{{getSetting()->location}}"
                                            width="2600" height="760" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tm-sc-custom-columns-holder-item bg-white move-2nd-column-bottom z-index-1"
                         data-tm-bg-img="{{asset('frontend/images/bg/why-choose-us-img1.png')}}" data-item-class="tm-custom-columns-12"
                         data-1200-up="0 15% 100px 15%" data-1199-down="30px 10% 100px 15%"
                         data-991-down="30px 10% 100px 15%" data-767-down="30px 10% 100px 20%"
                         data-575-down="30px 10% 100px 20%">
                        <div class="item-inner">
                            <div class="item-content tm-custom-columns-12 call-for-estimate-parent">
                                <div class="call-for-estimate">
                                    <h5 class="number"><span class="font-weight-300">{{trans('dev.call_for_estimate')}}:</span> {{getSetting()->phone}}</h5>
                                </div>
                                <div class="contact-from mt-lg-60">
                                    <h6 class="text-theme-colored2 mt-0 mb-0">{{getHome()->contact_sub_title}}</h6>
                                    <h2 class="mt-0 mb-30">{{getHome()->contact_title}}</h2>
                                    <!-- Contact Form -->
                                    <form  name="contact_form" class="" action="{{ route('web_storeContact') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="mb-3">
                                                    <input name="name" class="form-control" type="text" placeholder="{{trans('dev.enter')}} {{trans('dev.name')}} *" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="mb-3">
                                                    <input name="email" class="form-control required email" type="email" placeholder="{{trans('dev.enter')}} {{trans('dev.email')}}">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="mb-3">
                                                    <input name="phone" class="form-control" type="text" placeholder="{{trans('dev.enter')}} {{trans('dev.phone')}} *" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="mb-3">
                                                    <textarea name="notes" class="form-control required" rows="6" placeholder="{{trans('dev.enter')}} {{trans('dev.message')}} *" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="mb-3">
                                                    <button type="submit" class="btn btn-flat btn-theme-colored1 text-uppercase text-white mt-10 border-left-theme-color-2-4px"
                                                            >{{trans('dev.send_message')}}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Get a Free Quote -->
        <section class="bg-theme-colored2" >
            <div class="container">
                <div class="section-content">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-8 col-xl-8">
                            <div class="book-roofing">
                                <div class="book-roofing-text">
                                    <h2 class="text-white mt-0 mb-md-30">{{getHome()->cll_to_action_main_title}}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-4 text-start text-lg-end">
                            <a href="{{ route('web_contact') }}" class="btn btn-flat btn-dark btn-theme-colored1 text-white">{{trans('dev.get_a_free_quote')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: Gallery -->
        <section>
            <div class="container-fluid pt-10 pb-0">
                <div class="section-content">
                    <div class="row">
                        <div class="col-lg-12 col-xl-12">
                            <div class="owl-carousel tm-owl-carousel-4col lightgallery-lightbox" data-margin="10">
                                @foreach($albums as $album)
                                    <div class="gallery-item">
                                        <div class="gallery-thumb">
                                            <img class="w-100" src="{{asset('upload/album/'.$album->image)}}" alt="">
                                            <div class="gallery-link">
                                                <a class="lightgallery-trigger" data-exthumbimage="{{asset('upload/album/'.$album->image)}}"
                                                   data-src="{{asset('upload/album/'.$album->image)}}" title="Gallery 1"
                                                   href="{{asset('upload/album/'.$album->image)}}"><i class="fa fa-plus"></i></a>
                                                <!-- <a class="lightgallery-trigger"><i class="fa fa-plus"></i></a> -->
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: News -->
        <section>
            <div class="container">
                <div class="tm-sc-section-title section-title">
                    <div class="row justify-content-md-center">
                        <div class="col-lg-6 col-xl-6">
                            <h6 class="text-theme-colored2 mt-0">{{getHome()->blog_sub_title}}</h6>
                            <h2 class="mt-0">{{getHome()->blog_title}}</h2>
                        </div>
                        <div class="col"></div>
                        <div class="col-lg-5 col-xl-5 text-left text-xl-end text-lg-end">
                            <a href="{{ route('web_blogs') }}" class="btn btn-lg btn-theme-colored2 btn-flat">{{trans('dev.view_all_posts')}}</a>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="row">
                                @foreach($blogs->take(2) as $blog)
                                    <div class="col-md-6 col-lg-6 col-xl-6 tm-animation move-up">
                                        <div class="tm-sc-blog tm-sc-blog-masonry blog-style1-current-theme mb-lg-30">
                                            <article class="post">
                                                <div class="entry-header">
                                                    <div class="post-thumb">
                                                        <div class="post-thumb-inner">
                                                            <div class="thumb"><img class="w-100" src="{{asset('upload/blog/'.$blog->image)}}"
                                                                                    alt="Image"></div>
                                                        </div>
                                                        <div class="post-single-meta">
                                                            <div class="entry-date">{{$blog->created_at->format('d')}}<span> {{$blog->created_at->format('M')}}</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="entry-content">
                                                    <div class="blog-meta">
                                                  <span class="admin-type mr-10"><i class="far fa-user-circle text-theme-colored1"></i> {{getSetting()->name}} </span>
                                                    </div>
                                                    <h4 class="entry-title mb-20">
                                                        <a href="{{ route('web_blog', $blog->slug) }}" rel="bookmark">{{$blog->name}}</a>
                                                    </h4>
                                                    <p>{!! Str::limit($blog->notes, 100) !!}</p>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>

                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-8 col-xl-4 tm-animation move-up3">
                            @foreach($blogs->skip(2)->take(3) as $row)
                                <div class="tm-sc-blog tm-sc-blog-masonry blog-style1-current-theme mb-30">
                                    <article class="post">
                                        <div class="entry-content">
                                            <div class="blog-meta">
                                          <span class="admin-type mr-10"><i class="far fa-user-circle text-theme-colored1"></i> {{getSetting()->name}} </span>
                                            </div>
                                            <h4 class="entry-title mb-0"><a href="{{ route('web_blog', $row->slug) }}" rel="bookmark">{{$row->name}}</a></h4>
                                            <div class="clearfix"></div>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Start  Divider -->
        <section class="bg-silver-light">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="tm-sc-clients tm-sc-clients-carousel owl-dots-light-skin owl-dots-center clients-animation-grayscale">
                                <div class="owl-carousel owl-theme tm-owl-carousel-6col" data-autoplay="true"
                                     data-loop="true" data-duration="6000" data-smartspeed="300" data-margin="30"
                                     data-stagepadding="0" data-laptop="4">
                                    @foreach($partners as $partner)
                                        <div class="item"><a target="_blank" href="#">
                                                <img src='{{asset('upload/partner/'.$partner->image)}}' alt='{{$partner->name}}'/> </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Divider -->
    </div>
    <!-- end main-content -->
@endsection
@section('js')

@endsection
