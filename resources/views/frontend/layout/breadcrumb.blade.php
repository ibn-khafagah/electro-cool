<!-- Section: page title -->
<section class="page-title layer-overlay overlay-theme-colored2-9 section-typo-light bg-img-center" data-tm-bg-img="{{asset('frontend/images/bg/bg1.jpg')}}">
    <div class="container pt-50 pb-50">
        <div class="section-content">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="title">@yield('title')</h2>
                    <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                        <div class="breadcrumbs">
                            <span><a href="{{ route('web_index') }}" rel="home">{{trans('dev.home')}}</a></span>
                            <span><i class="fa fa-angle-right"></i></span>
                            <span class="active">@yield('title')</span>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
