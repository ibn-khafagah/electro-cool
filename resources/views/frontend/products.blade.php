@extends('frontend.layout.master')
@section('title')
{{trans('dev.products')}}
@endsection
@section('css')

@endsection
@section('main')
    @include('frontend.layout.breadcrumb')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Isotope Filter -->
                    <div class="isotope-layout-filter filter-style-4 text-left cat-filter-default text-center" data-link-with="gallery-holder-618422">
                        <a href="#" class="active" data-filter="*">{{trans('dev.all')}}</a>
                        @foreach($categories as $category)
                            <a href="#" class="" data-filter=".{{$category->id}}">{{$category->name}}</a>
                        @endforeach
                    </div>
                    <!-- End Isotope Filter -->

                    <!-- Isotope Gallery Grid -->
                    <div id="gallery-holder-618422" class="isotope-layout grid-3 gutter-15 clearfix lightgallery-lightbox">
                        <div class="isotope-layout-inner">
                            @foreach($categories as $category)
                                @foreach($category->products as $product)
                                    <!-- Isotope Item Start -->
                                    <div class="isotope-item {{$category->id}}">
                                        <div class="isotope-item-inner">
                                            <div class="product">
                                                <div class="product-header">
                                                    <div class="thumb image-swap">
                                                        <a href="{{ route('web_product', $product->slug) }}"><img src="{{asset('upload/product/'.$product->front_image)}}" class="product-main-image img-responsive img-fullwidth" width="300" height="300" alt="product"></a>
                                                        <a href="{{ route('web_product', $product->slug) }}"><img src="{{asset('upload/product/'.$product->front_image)}}" class="product-hover-image img-responsive img-fullwidth" alt="product"></a>
                                                    </div>
                                                    <div class="product-button-holder">
                                                        <ul class="shop-icons">
                                                            <li class="item"><a href="{{ route('web_product', $product->slug) }}" class="button btn-quickview" title="Product quick view"></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-details">
                                                    <span class="product-categories"><a href="{{ route('web_product', $product->slug) }}" rel="tag">{{$product->category->name}}</a></span>
                                                    <h5 class="product-title"><a href="{{ route('web_product', $product->slug) }}">{{$product->name}}</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Isotope Item End -->
                                @endforeach
                            @endforeach

                        </div>
                    </div>
                    <!-- End Isotope Gallery Grid -->
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')

@endsection
