@extends('layouts.home.main')
@section('content')

<div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
    <div class="uk-container uk-container-center">
        <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
            <div class="uk-width-1-1 uk-row-first">
                <div class="uk-panel">
                    <div class="uk-cover-background uk-position-relative head-wrap" style="height: 290px; background-image: url('/assets/images/head-bg.jpg');">
                        <img class="uk-invisible" src="/assets/images/head-bg.jpg" alt="" height="290" width="1920">
                        <div class="uk-position-cover uk-flex uk-flex-center head-title">
                            <h1>
                                {{$post->title}}
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


<div class="uk-container uk-container-center alt">
    <ul class="uk-breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/blog">News</a></li>
        <li class="uk-active"><span>{{$post->title}}</span></li>
    </ul>
</div>

<div class="uk-container uk-container-center">
        <div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
            <div class="tm-main uk-width-medium-3-4 uk-push-1-4">
                <main id="tm-content" class="tm-content">
                    <div class="contentpaneopen">
                        <article>
                                <div class="clearfix"></div>
                                @if ($post->image_url)
                                    <div class="article-slider">
                                            <div id="carusel-11-30" class="uk-slidenav-position" data-uk-slideshow="{ height : 510 }">
                                                <ul class="uk-slideshow">
                                                    <li>
                                                        <div style="background-image: url({{ $post->image_url }});" class="uk-cover-background uk-position-cover"></div>
                                                        <img style="width: 100%; height: auto; opacity: 0;" src="{{ $post->image_url }}" alt="">
                                                    </li>
                                                </ul>
                                                <div class="article-slider-btn">
                                                    <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                                                    <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                                                </div>
                                            </div>
                                        </div>
                            @endif

                            <div class="article-param">
                                <div class="date">
                                    <i class="uk-icon-calendar"></i>
                                    {{ $post->date }}          
                                </div>
                                <div class="author">
                                    <i class="uk-icon-user"></i>
                                    <a class="filter-link" data-original-title="Show only articles of <b>Guest</b>" href="{{ route('author', $post->author->slug) }}" rel="nofollow">{{ $post->author->name }}</a>            
                                </div>
                                <div class="categories">
                                    <i class="uk-icon-list-ul"></i>
                                    <a href="{{ route('category', $post->category->slug) }}">{{ $post->category->title }}</a>            
                                </div>
                            </div>
                            <div class="article-single-text">
                                    {!! $post->body_html !!}
                            </div>

                        </article>

                        @include('platform.article.comments')
                    </div>
                </main>
            </div>
            @include('layouts.home.inc.sidebar')
        </div>
</div>


    
@endsection
