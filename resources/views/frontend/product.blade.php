@extends('frontend.layout.master')
@section('title')
{{$product->name}}
@endsection
@section('css')
    <link rel="stylesheet" href="https://i.icomoon.io/public/temp/204ef4acc9/UntitledProject/style.css">
@endsection
@section('seo')
    @php
        $setting = getSetting();
        $locale = app()->getLocale();
    @endphp

    <meta name="author" content="{{ $setting->name }}">
    <meta name="robots" content="index, follow"/>
    <meta name="description" content="{{ $product->meta_description }}">
    <meta name="keywords" content="{{ $product->meta_keyword }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Canonical -->
    <link rel="canonical" href="{{ URL::current() }}">

    <!-- OG Tags -->
    <meta property="og:title" content="{{ $product->name }}"/>
    <meta property="og:description" content="{{ $product->meta_description }}"/>
    <meta property="og:url" content="{{ URL::current() }}"/>
    <meta property="og:image" content="{{ asset('upload/product/'.$product->logo) }}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="{{ $product->name }}"/>
    <meta property="og:locale" content="{{ $locale == 'ar' ? 'ar_EG' : 'en_US' }}">
    <meta property="og:locale:alternate" content="{{ $locale == 'ar' ? 'en_US' : 'ar_EG' }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="{{ $product->name }}">
    <meta name="twitter:title" content="{{ $product->name }}">
    <meta name="twitter:description" content="{{ $product->meta_description }}">
    <meta name="twitter:image" content="{{ asset('upload/product/'.$product->logo) }}">

    <!-- Language -->
    <meta name="language" content="{{ $locale }}">
    <link rel="alternate" hreflang="{{ $locale }}" href="{{ URL::current() }}">
    <link rel="alternate" hreflang="{{ $locale == 'ar' ? 'en' : 'ar' }}" href="{{ LaravelLocalization::getLocalizedURL($locale == 'ar' ? 'en' : 'ar') }}">
@endsection
@section('main')
    @include('frontend.layout.breadcrumb')
    <!-- Section: Product -->
    <section>
        <div class="container">
            <div class="section-content">
                <div class="product-single">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-image-slider lightgallery-lightbox">
                                <div class="tm-owl-thumb-carousel" data-nav="true" data-slider-id="1">
                                    <div data-thumb="{{asset('upload/product/'.$product->front_image)}}">
                                        <a class="lightgallery-trigger" data-exthumbimage="{{asset('upload/product/'.$product->front_image)}}" data-src="{{asset('upload/product/'.$product->front_image)}}" title="Product 1" href="{{asset('upload/product/'.$product->front_image)}}"><img class="img-fullwidth" src="{{asset('upload/product/'.$product->front_image)}}" alt="images"></a>
                                    </div>
                                    @if(count($product->images) > 0)
                                        @foreach($product->images as $image)
                                            <div data-thumb="{{asset('upload/product/'.$image->image)}}">
                                                <a class="lightgallery-trigger" data-exthumbimage="{{asset('upload/product/'.$image->image)}}" data-src="{{asset('upload/product/'.$image->image)}}" title="Product 2" href="{{asset('upload/product/'.$image->image)}}"><img class="img-fullwidth" src="{{asset('upload/product/'.$image->image)}}" alt="images"></a>
                                            </div>
                                        @endforeach
                                    @endif

                                </div>
                                <ul class="tm-owl-thumbs" data-slider-id="1">
                                    <li class="tm-owl-thumb-item"><img src="{{asset('upload/product/'.$product->front_image)}}" alt="images"></li>
                                    @if(count($product->images) > 0)
                                        @foreach($product->images as $image)
                                            <li class="tm-owl-thumb-item"><img src="{{asset('upload/product/'.$image->image)}}" alt="images"></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 mt-200">
                            <div class="product-summary">
                                <h2 class="product-title mt-0">{{$product->name}}</h2>
                                <div class="short-description">
                                    <p>{{$product->short_notes}}</p>
                                </div>
                                <div class="product_meta">
                                    <span class="posted_in">{{trans('dev.category')}}: <a href="{{URL::current()}}" rel="tag">{{$product->category->name}}</a></span>
                                </div>
                                <div class="btn-add-to-cart d-grid gap-2">
                                    <a href="{{getSetting()->whatsapp}}" target="_blank" class="btn btn-success ml-10"> <span class="icon-whatsapp"></span>
                                        {{trans('dev.contact_now')}} </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-60">
                            <div class="horizontal-tab product-tab">
                                <ul class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <li class="nav-item">
                                        <button class="nav-link active" id="desc-tab" data-bs-toggle="tab" data-bs-target="#desc-content" role="tab" aria-controls="desc-content" aria-selected="true"><strong>{{trans('dev.description')}}</strong></button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active p-20" id="desc-content" role="tabpanel" aria-labelledby="desc-tab">
                                        <p>{!! $product->notes !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-60">
                        <h4 class="mb-30">{{trans('dev.related_products')}}</h4>
                        <div class="tm-sc-gallery tm-sc-gallery-grid">

                            <!-- Isotope Gallery Grid -->
                            <div id="gallery-holder-618422" class="isotope-layout grid-4 gutter-15 clearfix lightgallery-lightbox">
                                <div class="isotope-layout-inner">
                                    @foreach(\App\Models\Product::where('id', '!=', $product->id)->take(10)->get() as $related)
                                        <!-- Isotope Item Start -->
                                        <div class="isotope-item cat1 cat3">
                                            <div class="isotope-item-inner">
                                                <div class="product">
                                                    <div class="product-header">
                                                        <div class="thumb image-swap">
                                                            <a href="{{ route('web_product', $related->slug) }}"><img src="{{asset('upload/product/'.$related->front_image)}}" class="product-main-image img-responsive img-fullwidth" width="300" height="300" alt="product"></a>
                                                            <a href="{{ route('web_product', $related->slug) }}"><img src="{{asset('upload/product/'.$related->front_image)}}" class="product-hover-image img-responsive img-fullwidth" alt="product"></a>
                                                        </div>
                                                        <div class="product-button-holder">
                                                            <ul class="shop-icons">
                                                                <li class="item"><a href="{{ route('web_product', $related->slug) }}" class="button btn-quickview" title="Product quick view"></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-details">
                                                        <span class="product-categories"><a href="{{ route('web_product', $related->slug) }}" rel="tag">{{$related->category->name}}</a></span>
                                                        <h5 class="product-title"><a href="{{ route('web_product', $related->slug) }}">{{$related->name}}</a></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Isotope Item End -->
                                    @endforeach
                                </div>
                            </div>
                            <!-- End Isotope Gallery Grid -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')

@endsection
