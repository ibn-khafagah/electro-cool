@extends('frontend.layout.master')
@section('title')
{{trans('dev.about')}}
@endsection
@section('css')

@endsection
@section('main')
    @include('frontend.layout.breadcrumb')
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
                            <div class="col-lg-12 col-sm-12">
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
@endsection
@section('js')

@endsection
