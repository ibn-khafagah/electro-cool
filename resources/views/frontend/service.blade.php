@extends('frontend.layout.master')
@section('title')
{{$service->name}}
@endsection
@section('css')

@endsection
@section('seo')
    @php
        $setting = getSetting();
        $locale = app()->getLocale();
    @endphp

    <meta name="author" content="{{ $service->name }}">
    <meta name="robots" content="index, follow"/>
    <meta name="description" content="{{ $setting->meta_description }}">
    <meta name="keywords" content="{{ $service->meta_keyword }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Canonical -->
    <link rel="canonical" href="{{ URL::current() }}">

    <!-- OG Tags -->
    <meta property="og:title" content="{{ $service->name }}"/>
    <meta property="og:description" content="{{ $service->meta_description }}"/>
    <meta property="og:url" content="{{ URL::current() }}"/>
    <meta property="og:image" content="{{ asset('upload/service/'.$service->logo) }}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="{{ $service->name }}"/>
    <meta property="og:locale" content="{{ $locale == 'ar' ? 'ar_EG' : 'en_US' }}">
    <meta property="og:locale:alternate" content="{{ $locale == 'ar' ? 'en_US' : 'ar_EG' }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="{{ $service->name }}">
    <meta name="twitter:title" content="{{ $service->name }}">
    <meta name="twitter:description" content="{{ $service->meta_description }}">
    <meta name="twitter:image" content="{{ asset('upload/service/'.$service->logo) }}">

    <!-- Language -->
    <meta name="language" content="{{ $locale }}">
    <link rel="alternate" hreflang="{{ $locale }}" href="{{ URL::current() }}">
    <link rel="alternate" hreflang="{{ $locale == 'ar' ? 'en' : 'ar' }}" href="{{ LaravelLocalization::getLocalizedURL($locale == 'ar' ? 'en' : 'ar') }}">
@endsection
@section('main')
    @include('frontend.layout.breadcrumb')
    <!-- Section: Service details -->
    <section>
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="sidebar">
                            <div class="tm-sidebar-nav-menu-style2">
                                <div class="widget widget_nav_menu">
                                    <ul>
                                        @foreach(\App\Models\Service::where('id', '!=' ,$service->id)->take(5)->get() as $row  )
                                            <li><a href="{{ route('web_service', $row->slug) }}">C{{$row->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="widget widget_text text-center">
                                <div class="textwidget">
                                    <div class="section-typo-light bg-theme-colored1 mb-md-40 p-30 pt-40 pb-40"> <img class="size-full wp-image-800 aligncenter" src="{{asset('frontend/images/headphone-128.png')}}" alt="" width="128" height="128" />
                                        <h4>{{trans('dev.call_us_anytime')}}</h4>
                                        <a href="tel:{{getSetting()->phone1}}"><h5>{{getSetting()->phone1}}</h5></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <img alt="" src="{{asset('upload/service/'.$service->image)}}" style="width: 100%;max-height: 450px"/>
                        <h3 class="mt-20 mb-10">{{$service->name}}</h3>
                        <p class="lead">{!! $service->notes !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')

@endsection
