@extends('frontend.layout.master')
@section('title')
{{trans('dev.faq')}}
@endsection
@section('css')

@endsection
@section('main')
    @include('frontend.layout.breadcrumb')
    <!-- Section: FAQ -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="accordion tm-accordion accordion-classic accordion-theme-colored1" id="accordion500">
                        @foreach($faqs as $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading50{{$faq->id}}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse50{{$faq->id}}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}" aria-controls="collapse50{{$faq->id}}">
                                        <strong>{{$faq->name}}</strong>
                                    </button>
                                </h2>
                                <div id="collapse50{{$faq->id}}" class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}" aria-labelledby="heading50{{$faq->id}}" data-bs-parent="#accordion500">
                                    <div class="accordion-body">
                                        {!! $faq->notes !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')

@endsection
