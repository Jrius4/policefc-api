


        <div class="tm-bottom-b-box tm-full-width  ">
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-b" class="tm-bottom-b uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div class="uk-width-1-1">
                        <div class="uk-panel">
                            <div class="our-team-main-wrap">
                                <div class="uk-container uk-container-center">
                                    <div class="uk-grid" data-uk-grid-match="">
                                        <div class="uk-width-medium-8-10 uk-width-small-1-1 uk-push-1-10">
                                            <div class="our-team-wrap">
                                                <div class="our-team-title">
                                                    <h3>Our <span>Team</span></h3>
                                                </div>
                                                <div class="our-team-text">
                                                    <p>Nullam quis eros tellus. Duis sit amet neque nec orci feugiat tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed turpis aliquet, pharetra enim sit amet, congue erat.</p>
                                                </div>
                                                <div class="our-team-text additional">
                                                    <p>Cras convallis feugiat felis eget venenatis. Sed leo tellus, luctus eget ante quis, rutrum dignissim enim. Morbi efficitur tellus non mauris tincidunt feugiat. Vestibulum quis nunc in nibh eleifend convallis. Vestibulum nec viverra dui. Suspendisse vel neque eros. Donec tincidunt tempus massa sed vehicula. Integer ullamcorper at elit eu commodo.</p>
                                                </div>
                                                <div class="team-read-wrap"><a class="team-read-more" href="#">Read More</a>
                                                </div>
                                            </div>
                                        </div>

                                        @if ($players->count()>0)

                                            @foreach ($players as $player)



                                        <div class=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item tt_2a195f12da9f3f36da06e6097be7e451">
                                            <div class="player-article">
                                                <div class="wrapper">
                                                    <div class="img-wrap">
                                                    <div class="player-number"><span>{{$player->shirt_no}}</span>
                                                        </div>
                                                        <div class="bio"><span><a href="{{ route('player.players.show', $player->slug) }}">bio</a></span>
                                                        </div>
                                                        <a href="{{ route('player.players.show', $player->slug) }}">
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
                                                                <a href="{{ route('player.players.show', $player->id) }}">{{$player->first_name}} <span class="text-primary">{{$player->last_name}}</span> </a>
                                                            </h3>
                                                        </div>
                                                        {{-- @foreach ( as $position) --}}
                                                           <div class="position">{{$player->playerPosition->title}}</div>
                                                        {{-- @endforeach --}}

                                                    </div>
                                                </div>
                                            </div>
                                        </div>




                                            @endforeach

                                        @endif
                                    </div>
                                </div>

                            <div class="our-team-btn"><a href="{{url('/players')}}"><span>More Info</span></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>

