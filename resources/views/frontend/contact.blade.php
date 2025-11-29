@extends('frontend.layout.master')
@section('title')
{{trans('dev.contact')}}
@endsection
@section('css')

@endsection
@section('main')
    @include('frontend.layout.breadcrumb')
    <section class="divider">
        <div class="container">
            <div class="row pt-30">
                <div class="col-lg-7">
                    <h2 class="mt-0 mb-0">{{trans('dev.contact1')}}</h2>
                    <p class="font-size-20">{{trans('dev.contact2')}}</p>
                    <!-- Contact Form -->
                    <form  name="contact_form" class="" action="{{ route('web_storeContact') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label>{{trans('dev.name')}} <small>*</small></label>
                                    <input name="name" required class="form-control" type="text" placeholder="{{trans('dev.enter')}} {{trans('dev.name')}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label>{{trans('dev.email')}} </label>
                                    <input name="email" class="form-control required email" type="email" placeholder="{{trans('dev.enter')}} {{trans('dev.email')}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label>{{trans('dev.phone')}} <small>*</small></label>
                                    <input name="phone" required class="form-control" type="text" placeholder="{{trans('dev.enter')}} {{trans('dev.phone')}}">
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label>{{trans('dev.message')}} <small>*</small></label>
                            <textarea name="notes" required class="form-control required" rows="5" placeholder="{{trans('dev.enter')}} {{trans('dev.message')}}"></textarea>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-flat btn-theme-colored1 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px text-white" >
                                {{trans('dev.send_message')}}</button>
                            <button type="reset" class="btn btn-flat btn-theme-colored3 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">
                                {{trans('dev.reset')}}</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5">
                    <h3 class="mt-0">{{trans('dev.contact3')}}</h3>
                    <p>{{trans('dev.contact4')}}</p>
                    <div class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate mb-30">
                        <div class="icon-box-wrapper">
                            <div class="icon-wrapper">
                                <a class="icon icon-type-font-icon"> <i class="flaticon-contact-045-call"></i> </a>
                            </div>
                            <div class="icon-text">
                                <h5 class="icon-box-title mt-0">{{trans('dev.phone')}}</h5>
                                <div class="content"><a href="tel:{{getSetting()->phone1}}">{{getSetting()->phone1}}</a></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate mb-30">
                        <div class="icon-box-wrapper">
                            <div class="icon-wrapper">
                                <a class="icon icon-type-font-icon"> <i class="flaticon-contact-043-email-1"></i> </a>
                            </div>
                            <div class="icon-text">
                                <h5 class="icon-box-title mt-0">{{trans('dev.email')}}</h5>
                                <div class="content"><a href="mailto:{{getSetting()->email1}}"><span class="__cf_email__" data-cfemail="59373c3c3d313c35291920362c2b3d3634383037773a3634">{{getSetting()->email1}}</span></a></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate mb-30">
                        <div class="icon-box-wrapper">
                            <div class="icon-wrapper">
                                <a class="icon icon-type-font-icon"> <i class="flaticon-contact-025-world"></i> </a>
                            </div>
                            <div class="icon-text">
                                <h5 class="icon-box-title mt-0">{{trans('dev.address')}}</h5>
                                <div class="content">{{getSetting()->address}}</div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <ul class="styled-icons icon-dark icon-sm icon-circled mt-20">
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
    </section>

    <!-- Divider: Google Map -->
    <section>
        <div class="container-fluid pt-0 pb-0">
            <div class="row">

                <!-- Google Map HTML Codes -->
                <iframe src="{{getSetting()->location}}" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

            </div>
        </div>
    </section>
@endsection
@section('js')

@endsection
