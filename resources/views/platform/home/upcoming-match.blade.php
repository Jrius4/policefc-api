

        <div class="tm-top-e-box tm-full-width  va-main-next-match">
            <div class="uk-container uk-container-center">
                <section id="tm-top-e" class="tm-top-e uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1">
                        <div class="uk-panel">
                            <div class="uk-container uk-container-center">
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-medium-1-2 uk-width-small-1-1 va-single-next-match">
                                        <div class="va-main-next-wrap">
                                            
                                            
                                                @if ($unplayed_matches->count()!=0)
                                                <div class="main-next-match-title"><em>Next <span>Match</span></em>
                                                </div>
                                            <div class="match-list-single">    
                                                
                                                <div class="match-list-item">
                                                    <div class="count">
                                
                                                        <div id="countdown4">
                                                            <div class="counter_container">
                                                            </div>
                                                        </div>

                                                        <div class="clearfix"></div>

                                                    </div>
                                                    <div class="clear"></div>
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="assets/images/team-ava.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">{{ App\SoccerModels\Team::all()->where('id',$unplayed_matches->first()->home_team_id)->first()->name}}</div>
                                                    <div class="versus">VS</div>

                                                    <div class="team-name">{{ App\SoccerModels\Team::all()->where('id',$unplayed_matches->first()->away_team_id)->first()->name}}</div>
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="assets/images/team-ava1.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                        </a>
                                                    </div>
                                                    <div class="clear"></div>
                                                <div class="date">{{$unplayed_matches->first()->date->locale('eng')->isoFormat('dddd, MMMM Do YYYY, h:mm')}}</div>
                                                    <div class="clear"></div>
                                                <div class="location"><address>{{$unplayed_matches->first()->venue}}<br><br></address> </div>
                                                </div>
                                            </div>


                                                @else
                                                <div class="main-next-match-title"><em>Last <span>Match</span></em>
                                                </div>
                                            <div class="match-list-single"> 
                                                <div class="match-list-item">
                                                        <div class="count">
                                    
                                                            <div id="countdown4">
                                                                <div class="counter_container">
                                                                </div>
                                                            </div>
    
                                                            <div class="clearfix"></div>
    
                                                        </div>
                                                        <div class="clear"></div>
                                                        <div class="logo">
                                                            <a href="match-single.html">
                                                                <img src="assets/images/team-ava.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                            </a>
                                                        </div>
                                                        <div class="team-name">{{ App\SoccerModels\Team::all()->where('id',$allmatches->last()->home_team_id)->first()->name}}</div>
                                                        <div class=""  style="font-size:1.5em;font-weight:500;color:cyan">
                                                            {{$allmatches->last()->home_team_score}}:{{$allmatches->last()->away_team_score}}
                                                        </div>
    
                                                        <div class="team-name">{{ App\SoccerModels\Team::all()->where('id',$allmatches->last()->away_team_id)->first()->name}}</div>
                                                        <div class="logo">
                                                            <a href="match-single.html">
                                                                <img src="assets/images/team-ava1.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                            </a>
                                                        </div>
                                                        <div class="clear"></div>
                                                    <div class="date">{{$allmatches->last()->date->locale('eng')->isoFormat('dddd, MMMM Do YYYY, h:mm')}}</div>
                                                        <div class="clear"></div>
                                                        <div class="location"><address>{{$allmatches->last()->venue}}<br><br></address> </div>
                                                    </div>
                                            </div>
                                                    
                                                @endif
                                          
                                        </div>
                                    </div>
                                    <div class="uk-width-medium-1-2 uk-width-small-1-1 va-list-next-match">
                                        <div class="match-list-wrap">

                                            @if ($matches!=null)
                                                
                                                @foreach ($matches as $match)
                                                        <div class="match-list-item alt">
                                                        <div class="date">{{$match->date->locale('eng')->isoFormat('ddd, MMM Do YYYY, h:mm')}}</div>
                                                            <div class="wrapper">
                                                                <div class="logo">
                                                                    <a href="match-single.html">
                                                                        <img src="/img/teams/{{ App\SoccerModels\Team::all()->where('id',$match->home_team_id)->first()->logo}}" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                                    </a>
                                                                </div>
                                                                <div class="team-name">{{ App\SoccerModels\Team::all()->where('id',$match->home_team_id)->first()->name}}</div>
                                                                @if ($match->home_team_score!=null || $match->away_team_score!=null)
                                                            <div class="versus">{{$match->home_team_score}}:{{$match->away_team_score}}</div>
                                                                @else
                                                                <div class="versus">VS</div>
                                                                @endif
                                                                <div class="team-name">{{ App\SoccerModels\Team::all()->where('id',$match->away_team_id)->first()->name}}</div>
                                                                <div class="logo">
                                                                    <a href="match-single.html">
                                                                        <img src="/img/teams/{{ App\SoccerModels\Team::all()->where('id',$match->away_team_id)->first()->logo}}" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                @endforeach

                                            @endif
                                            



                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>

        
