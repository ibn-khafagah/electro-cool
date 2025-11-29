@extends('frontend.layout.master')
@section('title')
{{$blog->name}}
@endsection
@section('css')

@endsection
@section('seo')
    @php
        $setting = getSetting();
        $locale = app()->getLocale();
    @endphp

    <meta name="author" content="{{ $setting->name }}">
    <meta name="robots" content="index, follow"/>
    <meta name="description" content="{{ $blog->meta_description }}">
    <meta name="keywords" content="{{ $blog->meta_keyword }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Canonical -->
    <link rel="canonical" href="{{ URL::current() }}">

    <!-- OG Tags -->
    <meta property="og:title" content="{{ $blog->name }}"/>
    <meta property="og:description" content="{{ $blog->meta_description }}"/>
    <meta property="og:url" content="{{ URL::current() }}"/>
    <meta property="og:image" content="{{ asset('upload/blog/'.$blog->logo) }}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="{{ $blog->name }}"/>
    <meta property="og:locale" content="{{ $locale == 'ar' ? 'ar_EG' : 'en_US' }}">
    <meta property="og:locale:alternate" content="{{ $locale == 'ar' ? 'en_US' : 'ar_EG' }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="{{ $blog->name }}">
    <meta name="twitter:title" content="{{ $blog->name }}">
    <meta name="twitter:description" content="{{ $blog->meta_description }}">
    <meta name="twitter:image" content="{{ asset('upload/blog/'.$blog->logo) }}">

    <!-- Language -->
    <meta name="language" content="{{ $locale }}">
    <link rel="alternate" hreflang="{{ $locale }}" href="{{ URL::current() }}">
    <link rel="alternate" hreflang="{{ $locale == 'ar' ? 'en' : 'ar' }}" href="{{ LaravelLocalization::getLocalizedURL($locale == 'ar' ? 'en' : 'ar') }}">
@endsection
@section('main')
    @include('frontend.layout.breadcrumb')
    <!-- Section: Blog -->
    <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="blog-posts single-post">
                        <article class="post clearfix mb-0">
                            <div class="entry-header mb-30">
                                <div class="post-thumb thumb"> <img src="{{asset('upload/blog/'.$blog->image)}}" alt="images" class="img-responsive img-fullwidth"> </div>
                                <h2>{{$blog->name}}</h2>
                                <div class="entry-meta mt-0">
                                    <span class="mb-10 text-gray-darkgray mr-10 font-size-13"><i class="far fa-calendar-alt mr-10 text-theme-colored1"></i> {{$blog->created_at->format('M d, Y')}}</span>
                                </div>
                            </div>
                            <div class="entry-content">
                                <p>{!! $blog->notes !!}</p>
                            </div>
                        </article>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')

@endsection
