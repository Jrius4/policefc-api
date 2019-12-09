@extends('layouts.home.main')
@section('content')




<div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
        <div class="uk-container uk-container-center">
            <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                <div class="uk-width-1-1 uk-row-first">
                    <div class="uk-panel">
                        <div class="uk-cover-background uk-position-relative head-match-wrap" style="height: 590px; background-image: url('/assets/images/head-bg.jpg');">
                            <img class="uk-invisible" src="images/head-bg-match.jpg" alt="">
                            <div class="uk-position-cover uk-flex-center head-news-title">
                                <h1>
                                        {{App\SoccerModels\Team::all()->where('id',$match->home_team_id)->first()->name}} VS {{App\SoccerModels\Team::all()->where('id',$match->away_team_id)->first()->name}}
                                </h1>
                                <div class="clear"></div>
                                <div class="uk-container uk-container-center">
                                    <div class="uk-grid no-marg">
                                        <div class="uk-width-6-10 va-single-next-match match-view-wrap">
                                            <div class="va-main-next-wrap">
                                                <div class="match-list-single">
                                                    <div class="match-list-item">
                                                        <div class="count">
                                                            <div id="countdown4">
                                                                <div class="counter_container"></div>
                                                            </div>
                                                            <div class="clearfix"></div>

                                                        </div>
                                                        <div class="clear"></div>
                                                        <div class="half right">
                                                            <div class="va-wrap">
                                                                <div class="logo">
                                                                    <a href="match-single.html">
                                                                    <img src="/img/teams/{{App\SoccerModels\Team::all()->where('id',$match->home_team_id)->first()->logo}}" class="img-polaroid" alt="{{App\SoccerModels\Team::all()->where('id',$match->home_team_id)->first()->name}}" title="{{App\SoccerModels\Team::all()->where('id',$match->home_team_id)->first()->name}} VS {{App\SoccerModels\Team::all()->where('id',$match->away_team_id)->first()->name}} ({!!$match->date->locale('eng')->isoFormat('dddd, MMMM Do YYYY, h:mm') !!})"></a>
                                                                </div>
                                                                <div class="team-name">
                                                                        {{App\SoccerModels\Team::all()->where('id',$match->home_team_id)->first()->name}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="versus">VS</div>
                                                        <div class="half left">
                                                            <div class="va-wrap">
                                                                <div class="team-name">
                                                                        {{App\SoccerModels\Team::all()->where('id',$match->away_team_id)->first()->name}}
                                                                </div>
                                                                <div class="logo">
                                                                    <a href="match-single.html">
                                                                    <img src="/img/teams/{{App\SoccerModels\Team::all()->where('id',$match->away_team_id)->first()->logo}}" class="img-polaroid" alt="{{App\SoccerModels\Team::all()->where('id',$match->home_team_id)->first()->name}}" title="{{App\SoccerModels\Team::all()->where('id',$match->home_team_id)->first()->name}} VS {{App\SoccerModels\Team::all()->where('id',$match->away_team_id)->first()->name}} ({!!$match->date->locale('eng')->isoFormat('dddd, MMMM Do YYYY, h:mm') !!})"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clear"></div>
                                                        <div class="date">
                                                            <i class="uk-icon-calendar"></i>
                                                            {!!$match->date->locale('eng')->isoFormat('dddd, MMMM Do YYYY, h:mm') !!}
                                                        </div>
                                                        <div class="clear"></div>
                                                        <div class="location">
                                                            <i class="uk-icon-map-marker"></i>
                                                            <address>
                                                               {{$match->venue}}              <br><br>
                                                            </address>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="uk-container uk-container-center alt">
        <ul class="uk-breadcrumb">
            <li><a href="index-2.html">Home</a></li>
            <li><a href="match-list.html">Match list</a></li>
            <li class="uk-active"><span>{{App\SoccerModels\Team::all()->where('id',$match->home_team_id)->first()->name}} VS {{App\SoccerModels\Team::all()->where('id',$match->away_team_id)->first()->name}} ({!!$match->date->locale('eng')->isoFormat('dddd, MMMM Do YYYY, h:mm') !!})</span></li>
        </ul>
    </div>





<div class="uk-container uk-container-center">
        <div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
            <div class="tm-main uk-width-medium-3-4 uk-push-1-4">
                <main id="tm-content" class="tm-content">
                    <div class="contentpaneopen">
                        <article class="match-article ">
                            <div class="clearfix"></div>
                            <div class="uk-grid">
                                @if ($match->matchReport)


                                <div class="uk-width-1-1">
                                    <div class="top-text article-single-text">
                                        <div class="big-title">About <span>Match</span></div>
                                        <p>
                                            {!!$match->matchReport->body!!}
                                        </p>
                                    </div>
                                </div>
                                @endif
                                <div class="uk-width-1-1 d-none">
                                    <div class="share-wrap">
                                        <div class="share-title">share</div>
                                        <script type="text/javascript" src="http://yastatic.net/share/share.js" charset="utf-8"></script>
                                        <div class="yashare-auto-init" data-yasharel10n="en" data-yasharetype="none" data-yasharequickservices="facebook,twitter,gplus"><span class="b-share"><a rel="nofollow" target="_blank" title="Facebook" class="b-share__handle b-share__link b-share-btn__facebook" href="https://share.yandex.net/go.xml?service=facebook&amp;url=http%3A%2F%2Fsport.statiolh.bget.ru%2Findex.php%2Fmatch%2Fitem%2F14-future-matches%2F4-england-vs-amsterdam-2015-11-14&amp;title=Your%20Joomla!%20Site%20-%20England%20VS%20Amsterdam%20(2015-11-14)%20-%20Future%20matches%20-%20Match%20list%20view" data-service="facebook"><span class="b-share-icon b-share-icon_facebook"></span></a><a rel="nofollow" target="_blank" title="Twitter" class="b-share__handle b-share__link b-share-btn__twitter" href="https://share.yandex.net/go.xml?service=twitter&amp;url=http%3A%2F%2Fsport.statiolh.bget.ru%2Findex.php%2Fmatch%2Fitem%2F14-future-matches%2F4-england-vs-amsterdam-2015-11-14&amp;title=Your%20Joomla!%20Site%20-%20England%20VS%20Amsterdam%20(2015-11-14)%20-%20Future%20matches%20-%20Match%20list%20view" data-service="twitter"><span class="b-share-icon b-share-icon_twitter"></span></a><a rel="nofollow" target="_blank" title="Google Plus" class="b-share__handle b-share__link b-share-btn__gplus" href="https://share.yandex.net/go.xml?service=gplus&amp;url=http%3A%2F%2Fsport.statiolh.bget.ru%2Findex.php%2Fmatch%2Fitem%2F14-future-matches%2F4-england-vs-amsterdam-2015-11-14&amp;title=Your%20Joomla!%20Site%20-%20England%20VS%20Amsterdam%20(2015-11-14)%20-%20Future%20matches%20-%20Match%20list%20view" data-service="gplus"><span class="b-share-icon b-share-icon_gplus"></span></a></span></div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                </main>
            </div>

            @include('layouts.home.inc.sidebar')

        </div>
    </div>



@endsection
