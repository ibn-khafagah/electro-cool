@extends('frontend.layout.master')
@section('title')
{{trans('dev.services')}}
@endsection
@section('css')

@endsection
@section('main')
    @include('frontend.layout.breadcrumb')
    <!-- Section: Service -->
    <section class="bg-silver-light z-index-0">
        <div class="container">
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
                <div class="row">
                    <div class="col-lg-12">
                        {{ $services->render("pagination::bootstrap-4") }}
                    </div>
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
@endsection
@section('js')

@endsection
