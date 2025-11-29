@extends('frontend.layout.master')
@section('title')
{{trans('dev.gallery')}}
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
@section('main')
    @include('frontend.layout.breadcrumb')
    <!-- Our Gallery -->
    <section>
        <div class="container pb-70">
            <div class="section-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="tm-sc-gallery tm-sc-gallery-grid gallery-style1-basic">
                            <!-- Isotope Filter -->
                            <div class="isotope-layout-filter filter-style-3 text-center cat-filter-theme-colored1" data-link-with="gallery-holder-743344">
                                <a href="#" class="active" data-filter="*">{{trans('dev.all')}}</a>
                                @foreach($albums as $album)
                                    <a href="#{{$album->id}}" class="" data-filter=".{{$album->id}}">{{$album->name}}</a>
                                @endforeach

                            </div>
                            <!-- End Isotope Filter -->
                            <!-- Isotope Gallery Grid -->
                            <div id="gallery-holder-743344" class="isotope-layout grid-3 gutter-10 clearfix lightgallery-lightbox">
                                <div class="isotope-layout-inner">
                                    @foreach($albums as $album)
                                        @foreach($album->images as $image)
                                            <div class="isotope-item {{$album->id}}">
                                                <div class="isotope-item-inner">
                                                    <div class="tm-gallery">
                                                        <div class="tm-gallery-inner">
                                                            <div class="thumb">
                                                                <a href="#"><img src="{{asset('upload/album/'.$image->image)}}" class="" alt="images"/></a>
                                                            </div>
                                                            <div class="tm-gallery-content-wrapper">
                                                                <div class="tm-gallery-content">
                                                                    <div class="tm-gallery-content-inner">
                                                                        <div class="icons-holder-inner">
                                                                            <div class="styled-icons icon-dark icon-circled icon-theme-colored1">
                                                                                <a class="lightgallery-trigger styled-icons-item" data-exthumbimage="{{asset('upload/album/'.$image->image)}}" title="photo" href="{{asset('upload/album/'.$image->image)}}"><i class="fa fa-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
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
            </div>
        </div>
    </section>
@endsection
@section('js')

@endsection
