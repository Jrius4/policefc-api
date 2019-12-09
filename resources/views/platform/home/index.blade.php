@extends('layouts.home.main')
@section('content')
    
<div class="tm-top-a-box tm-full-width  ">
    <div class="uk-container uk-container-center">
        <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

            <div class="uk-width-1-1">
                <div class="uk-panel">
                    <div class="akslider-module ">
                        <div class="uk-slidenav-position" data-uk-slideshow="{height: 'auto', animation: 'swipe', duration: '500', autoplay: true, autoplayInterval: '7000', videoautoplay: true, videomute: true, kenburns: false}">
                            <ul class="uk-slideshow uk-overlay-active">
                                @foreach ($posts as $post)
                                    <li aria-hidden="false" class="uk-height-viewport uk-active">
                                        @if ($post->image!=null)
                                        <div style="background-image: url({{ $post->image_url }});" class="uk-cover-background uk-position-cover"></div><img style="width: 100%; height: auto; opacity: 0;" class="uk-invisible" src="/img/{{$post->img}}" alt="">
                                        @else
                                        <div style="background:linear-gradient(90deg, rgba(2,0,36,1) 10%, rgba(9,9,121,1) 63%, rgba(1,18,22,1) 100%);" class="uk-cover-background uk-position-cover"></div><img style="width: 100%; height: auto; opacity: 0;" class="uk-invisible" src="/img/{{$post->img}}" alt="">
                                        @endif
                                       
                                        <div class="uk-position-cover uk-flex-middle">
                                            <div class="uk-container uk-container-center uk-position-cover">
                                                <div class="va-promo-text uk-width-6-10 uk-push-4-10">
                                                    <h4 class="highlight-text">{{$post->title}}</h4>
                                                    <a href="{{ route('blog.show', $post->slug) }}" class="read-more">Read More<i class="uk-icon-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                               
                               
                               
                            </ul>
                            <a href="../index.html" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                            <a href="../index.html" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                            <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-text-center">
                                
                                @for ($i = 0; $i < $posts->count(); $i++)
                                    @if ($i==0)
                                    <li class="uk-active" data-uk-slideshow-item="0"><a href="../index.html">0</a>
                                    </li>
                                    @else
                                       <li data-uk-slideshow-item="{{$i}}"><a href="#">{{$i}}</a>
                                </li> 
                                    @endif
                                    
                                @endfor
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@include('platform.matches.latest-results')
@include('platform.home.about-section')
@include('platform.home.upcoming-match')
@include('platform.home.news-section')
@include('platform.home.player-section')

@endsection