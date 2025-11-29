@extends('frontend.layout.master')
@section('title')
{{trans('dev.blogs')}}
@endsection
@section('css')

@endsection
@section('main')
    @include('frontend.layout.breadcrumb')
    <section>
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="tm-sc-blog blog-style-default mb-lg-30">
                            <article class="post type-post status-publish format-standard has-post-thumbnail">
                                <div class="entry-header">
                                    <div class="post-thumb lightgallery-lightbox">
                                        <div class="post-thumb-inner">
                                            <div class="thumb"> <img src="{{asset('upload/blog/'.$blog->image)}}" alt="{{$blog->name}}" style="height: 350px;width: 100%"/></div>
                                        </div>
                                    </div>
                                    <a class="link" href="{{ route('web_blog', $blog->slug) }}"><i class="fa fa-link"></i></a>
                                </div>
                                <div class="entry-content">
                                    <h5 class="entry-title"><a href="{{ route('web_blog', $blog->slug) }}" rel="bookmark">{{$blog->name}}</a></h5>
                                    <div class="entry-meta mt-0 mb-0">
                                        <span class="mb-10 text-gray-darkgray mr-10 font-size-13"><i class="far fa-calendar-alt mr-10 text-theme-colored1"></i> {{$blog->created_at->format('M d, Y')}}</span>
                                    </div>

                                    <div class="post-excerpt">
                                        <div class="mascot-post-excerpt">{!! Str::limit($blog->notes, 50) !!}</div>
                                    </div>
                                    <div class="post-btn-readmore"> <a href="{{ route('web_blog', $blog->slug) }}" class="btn btn-plain-text-with-arrow"> {{trans('dev.read_more')}} </a></div>
                                    <div class="clearfix"></div>
                                </div>
                            </article>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row ">
                <div class="col-lg-12">
                    {{ $blogs->render("pagination::bootstrap-4") }}
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')

@endsection
