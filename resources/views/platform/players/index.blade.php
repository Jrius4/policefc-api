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
                            <h1>Players</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<div class="uk-container uk-container-center alt">
    <ul class="uk-breadcrumb">
        <li><a href="index-2.html">Home</a>
        </li>
        <li class="uk-active"><span>Players</span>
        </li>
    </ul>
</div>


<div class="uk-container uk-container-center">
    <div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
        <div class="tm-main uk-width-medium-1-1 uk-row-first">
            <main id="tm-content" class="tm-content">

                <div class="uk-container uk-container-center tt-gallery-top">
                    <div class="uk-grid" data-uk-grid-match="">
                        <div class="uk-width-medium-3-10 uk-width-small-1-1 title">Morbi velit vel nisl blandit</div>
                        <div class="uk-width-medium-7-10 uk-width-small-1-1 text">Aenean aliquam, dolor eu lacinia pellentesque, dui arcu condimentum nisl, quis sollicitudin mi lorem quis leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis sapien a ante rutrum pulvinar quis ac tellus. Proin facilisis dui at mollis tincidunt. Sed dignissim orci non arcu luctus pretium. Donec at ex aliquet, porttitor lacus eget, ullamcorper quam. Integer pellentesque egestas arcu, nec molestie leo sollicitudin et</div>
                    </div>
                </div>

                <div class="list-players-wrapper">
                    <div class="uk-sticky-placeholder">
                        <div class="button-group filter-button-group" data-uk-sticky="{top:70, boundary: true}">
                            <div class="uk-container uk-container-center">
                                <div class="label-menu">OUR team</div>
                                <button class="active" data-filter="*">all
                                </button>
                                <button data-filter=".tt_2a195f12da9f3f36da06e6097be7e451">DEFENDER
                                </button>
                                <button data-filter=".tt_22c19cd174143e3b4c7ef40ae23c5d1a">STRIKER
                                </button>
                                <button data-filter=".tt_81747b4426a9882884c1f83eda78844f">goalkeeper
                                </button>
                                <button data-filter=".tt_4d957768dcc72908ab3b9e28dc867052">MIDFIELDER
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="list-players-wrap" id="boundary">
                        <div class="left-player">
                            <img src="/assets/images/left-player-bg.png" alt="">
                        </div>
                        <div class="right-player">
                            <img src="/assets/images/right-player-bg.png" alt="">
                        </div>
                        <div class="uk-container uk-container-center alt">



                            <div class="uk-grid grid1 players-list">

                                @foreach ($players as $player)

                                    @if ($player->playerPosition->title == 'DEFENDER')

                                    <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-2 player-item tt_2a195f12da9f3f36da06e6097be7e451">
                                        <div class="player-article">
                                            <div class="wrapper">
                                                <div class="img-wrap">
                                                    <div class="player-number">
                                                        <span>
                                                        {{$player->shirt_no}}
                                                        </span>
                                                    </div>
                                                    <div class="bio">
                                                        <span>
                                                        <a href="{{route('player.players.show',$player->slug)}}">bio
                                                        </a>
                                                        </span>
                                                    </div>
                                                    <a href="player.html">
                                                    <img src="{{$player->profile_pic_url}}" class="img-polaroid" alt="Steven Webb" title="Steven Webb">
                                                    </a>
                                                    <ul class="socials">


                                                        @foreach ($player->playerSocialMediaLinks as $link)
                                                            <li class="{{$link->media_name}}">
                                                                <a href="{{$link->url}}" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                        @endforeach


                                                    </ul>
                                                </div>
                                                <div class="info">
                                                    <div class="name">
                                                        <h3>
                                                            <a href="{{route('player.players.show',$player->slug)}}">
                                                            {{$player->first_name}} {{$player->last_name}}
                                                            </a>
                                                        </h3>
                                                    </div>
                                                    <div class="position">
                                                        {{$player->playerPosition->title}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    @elseif($player->playerPosition->title === 'STRIKER')

                                    <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-2 player-item tt_22c19cd174143e3b4c7ef40ae23c5d1a">
                                        <div class="player-article">
                                            <div class="wrapper">
                                                <div class="img-wrap">
                                                    <div class="player-number">
                                                        <span>
                                                        {{$player->shirt_no}}
                                                        </span>
                                                    </div>
                                                    <div class="bio">
                                                        <span>
                                                        <a href="{{route('player.players.show',$player->slug)}}">bio
                                                        </a>
                                                        </span>
                                                    </div>
                                                    <a href="player.html">
                                                    <img src="{{$player->profile_pic_url}}" class="img-polaroid" alt="Steven Webb" title="Steven Webb">
                                                    </a>
                                                    <ul class="socials">
                                                            @foreach ($player->playerSocialMediaLinks as $link)
                                                               <li class="{{$link->media_name}}">
                                                                    <a href="{{$link->url}}" target="_blank" rel="nofollow">
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                    </ul>
                                                </div>
                                                <div class="info">
                                                    <div class="name">
                                                        <h3>
                                                            <a href="{{route('player.players.show',$player->slug)}}">
                                                            {{$player->first_name}} {{$player->last_name}}
                                                            </a>
                                                        </h3>
                                                    </div>
                                                    <div class="position">
                                                        {{$player->playerPosition->title}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    @elseif($player->playerPosition->title === 'MIDFIELDER')

                                    <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-2 player-item tt_4d957768dcc72908ab3b9e28dc867052">
                                        <div class="player-article">
                                            <div class="wrapper">
                                                <div class="img-wrap">
                                                    <div class="player-number">
                                                        <span>
                                                        {{$player->shirt_no}}
                                                        </span>
                                                    </div>
                                                    <div class="bio">
                                                        <span>
                                                        <a href="{{route('player.players.show',$player->slug)}}">bio
                                                        </a>
                                                        </span>
                                                    </div>
                                                    <a href="player.html">
                                                    <img src="{{$player->profile_pic_url}}" class="img-polaroid" alt="Steven Webb" title="Steven Webb">
                                                    </a>
                                                    <ul class="socials">


                                                        @foreach ($player->playerSocialMediaLinks as $link)
                                                            <li class="{{$link->media_name}}">
                                                                <a href="{{$link->url}}" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                        @endforeach


                                                    </ul>
                                                </div>
                                                <div class="info">
                                                    <div class="name">
                                                        <h3>
                                                            <a href="{{route('player.players.show',$player->slug)}}">
                                                            {{$player->first_name}} {{$player->last_name}}
                                                            </a>
                                                        </h3>
                                                    </div>
                                                    <div class="position">
                                                        {{$player->playerPosition->title}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    @elseif($player->playerPosition->title === 'GOALKEEPER')


                                    <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-2 player-item tt_81747b4426a9882884c1f83eda78844f">
                                        <div class="player-article">
                                            <div class="wrapper">
                                                <div class="img-wrap">
                                                    <div class="player-number">
                                                        <span>
                                                        {{$player->shirt_no}}
                                                        </span>
                                                    </div>
                                                    <div class="bio">
                                                        <span>
                                                        <a href="{{route('player.players.show',$player->slug)}}">bio
                                                        </a>
                                                        </span>
                                                    </div>
                                                    <a href="player.html">
                                                    <img src="{{$player->profile_pic_url}}" class="img-polaroid" alt="Steven Webb" title="Steven Webb">
                                                    </a>
                                                    <ul class="socials">


                                                        @foreach ($player->playerSocialMediaLinks as $link)
                                                            <li class="{{$link->media_name}}">
                                                                <a href="{{$link->url}}" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                        @endforeach


                                                    </ul>
                                                </div>
                                                <div class="info">
                                                    <div class="name">
                                                        <h3>
                                                            <a href="{{route('player.players.show',$player->slug)}}">
                                                            {{$player->first_name}} {{$player->last_name}}
                                                            </a>
                                                        </h3>
                                                    </div>
                                                    <div class="position">
                                                        {{$player->playerPosition->title}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    @else
                                    {{-- <h1 class="display-3 text-center text-warning">{{'No Player in This Position'}}</h1> --}}

                                    @endif

                                @endforeach


                            </div>



                        </div>
                    </div>
                </div>


            </main>
        </div>
    </div>
</div>

@endsection
