

        <div class="tm-top-c-box tm-full-width  home-about">
            <div class="uk-container uk-container-center">
                <section id="tm-top-c" class="tm-top-c uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1 uk-width-large-1-2">
                        <div class="uk-panel">
                            <div class="va-about-wrap clearfix uk-cover-background uk-position-relative">
                                <div class="va-about-text">
                                    <div class="title">About <span>Team</span>
                                    </div>
                                    <p>Nam quis purus sed est interdum sagittis sed in leo. Nunc feugiat enim nunc, sit amet placerat erat consectetur in. Cras consequat enim nunc, sit amet venenatis massa volutpat ut. Cras vitae facilisis nulla. </p>
                                    <p>Nulla pharetra lobortis nisl, vitae pretium nunc congue eget. Nunc imperdiet consequat nibh pharetra venenatis. Duis vitae lacinia nibh, et egestas leo. Proin sed mi sit amet dolor rhoncus tristique. Maecenas rhoncus felis vel congue commodo.</p>
                                    <a class="read-more" href="about.html">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="uk-width-1-1 uk-width-large-1-2">
                        <div style="min-height: 497px;" class="uk-panel">
                            <div class="trainers-module tm-trainers-slider ">
                                <div class="trainer-wrapper">
                                    <div data-uk-slideset="{default: 1, animation: 'fade', duration: 400}">
                                        <div class="trainer-top">
                                            <div class="trainers-btn">
                                                <a href="../index.html" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideset-item="previous"></a>
                                                <a href="../index.html" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideset-item="next"></a>
                                            </div>
                                            <h3>Executives</h3>
                                        </div>
                                        <ul class="uk-grid uk-slideset uk-grid-width-1-1">
                                            <li class="uk-active" style="">
                                            <div class="img-wrap"><img  width="250" height="250" src="{{$support_members->last()->profile_pic_url}}" alt="">
                                                </div>
                                                <div class="name">{{$support_members->last()->firstname}} <span>{{$support_members->last()->lastname}}</span>
                                                </div>
                                            </li>

                                            @foreach ($support_members as $member)
                                                <li style="display: none;">
                                                    <div class="img-wrap"><img width="250" height="250" src="{{$member->profile_pic_url}}" alt="">
                                                    </div>
                                                    <div class="name">{{$member->firstname}} <span>{{$member->lastname}}</span>
                                                    </div>
                                                </li>
                                            @endforeach


                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

