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
                                <h1>Player</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>



    <div class="uk-container uk-container-center alt">
        <ul class="uk-breadcrumb">
            <li><a href="/">Home</a>
            </li>
            <li><a href="{{route('player.players.index')}}">Players</a>
            </li>
            <li class="uk-active"><span>{{$player->first_name}} {{$player->last_name}} </span>
            </li>
        </ul>
    </div>



        <div class="uk-container uk-container-center">
            <div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
                <div class="tm-main uk-width-medium-1-1 uk-row-first">
                    <main id="tm-content" class="tm-content">
                        <div id="system-message-container"></div>
                        <div class="contentpaneopen">

                            <article class="player-single tt-players-page">
                                <div class="uk-container uk-container-center alt">
                                    <div class="uk-gfid">
                                    </div>
                                </div>
                                <div class="player-top">
                                    <div class="uk-container uk-container-center alt">
                                        <div class="uk-grid">
                                            <div class="uk-width-5-12">
                                                <div class="avatar">
                                                <img src="{{$player->profile_pic_url}}" class="img-polaroid" alt="{{$player->first_name}} {{$player->last_name}}" title="{{$player->first_name}} {{$player->last_name}}">
                                                </div>
                                            </div>
                                            <div class="uk-width-1-12">
                                                <div class="number">
                                                    {{$player->shirt_no}}
                                                </div>
                                            </div>
                                            <div class="uk-width-6-12">
                                                <div class="name">
                                                    <h2>
                                                        {{$player->first_name}} {{$player->last_name}}
                                                    </h2>
                                                </div>
                                                <div class="wrap">
                                                    <ul class="info">
                                                        <li><span>POSITION</span><span>{{$player->playerPosition->title}}</span></li>
                                                        {{-- <li><span>APPEARANCES</span><span>581</span></li> --}}
                                                        {{-- <li><span>GOALs</span><span>155</span></li> --}}
                                                        {{-- <li><span>YELLOW CARDS</span><span>15</span></li> --}}
                                                        {{-- <li><span>RED CARDS</span><span>3</span></li> --}}
                                                        {{-- <li><span>RED CARDS</span><span>3</span></li> --}}
                                                        <li><span>SHIRT NUMBER</span><span>{{$player->shirt_no}}</span></li>
                                                        <li><span>AGE</span><span>{{$player->age}}</span></li>
                                                        <li><span>NATIONALITY</span><span>{{$player->nationality}}</span></li>
                                                        <li><span>FORMER CLUB</span><span>{{$player->previous_club}}</span></li>
                                                        <li><span>FOOT</span><span>{{$player->playerFoot->name}}</span></li>
                                                        {{-- <li><span>HEIGHT</span><span>2.0M</span></li> --}}
                                                        {{-- <li><span>WEIGHT</span><span>81 KG</span></li> --}}
                                                    </ul>

                                                    <ul class="socials">
                                                            @foreach ($player->playerSocialMediaLinks as $link)
                                                                <li class="{{$link->media_name}}">
                                                                    <a href="{{$link->url}}" target="_blank" rel="nofollow">
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-container uk-container-center alt">
                                    <div class="uk-grid">
                                        <div class="uk-width-1-1">
                                            <div class="line"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-container uk-container-center alt">
                                    <div class="uk-grid">
                                        <div class="uk-width-9-10 uk-push-1-10">
                                            <div class="player-total-info">
                                                <p class="lead">
                                                    {!!$player->bio!!}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>

                        </div>
                    </main>
                </div>
            </div>
        </div>










@endsection
