

                <aside class="tm-sidebar-a uk-width-medium-1-4 uk-pull-3-4 uk-row-first">
                    
                    <div class="uk-panel categories-sidebar">
                            <div class="search-widget m-2">
                                    <form action="{{ route('blog') }}">
                                        <div class="input-group">
                                          <input type="text" class="form-control input-md" value="{{ request('term') }}" name="term" placeholder="Search for...">
                                          <span class="input-group-btn">
                                            <button class="button subbutton btn btn-primary" type="submit">
                                                <i class="fa fa-search"></i>search
                                            </button>
                                          </span>
                                        </div>
                                    </form>
                                </div>
                        <h3 class="uk-panel-title">Categories</h3>
                        <div>
                            <ul class="nav menu">
                                @foreach ($categories as $category)
                                    <li class="item-3">             
                                        <a href="{{ route('category', $category->slug) }}">
                                                {{ $category->title }} <span class="label">({{ $category->posts->count() }})</span>
                                        </a>            
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="uk-panel newsletter-sidebar">
                        <h3 class="uk-panel-title">Newsletter</h3>
                        <div class="acymailing_modulenewsletter-sidebar" id="acymailing_module_formAcymailing40192">
                            <div class="acymailing_fulldiv" id="acymailing_fulldiv_formAcymailing40192">
                                <form id="formAcymailing40192" onsubmit="return submitacymailingform('optin','formAcymailing40192')" method="post" name="formAcymailing40192">
                                    <div class="acymailing_module_form">
                                        <div class="mail-title">Newsletters</div>
                                        <div class="acymailing_introtext">Donec at ex aliquet, porttitor lacus eget</div>
                                        <div class="clear"></div>
                                        <div class="space"></div>
                                        <table class="acymailing_form">
                                            <tbody>
                                                <tr>
                                                    <td class="acyfield_email acy_requiredField">
                                                        <span class="mail-wrap">
                                                        <input id="user_email_formAcymailing40192" onfocus="if(this.value == 'Email') this.value = '';" onblur="if(this.value=='') this.value='Email';" class="inputbox" name="user[email]" style="width:80%" value="Email" title="Email" type="text">
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="acysubbuttons">
                                                        <span class="submit-wrap">
                                                        <span class="submit-wrapper">
                                                        <input class="button subbutton btn btn-primary" value=" " name="Submit" onclick="try{ return submitacymailingform('optin','formAcymailing40192'); }catch(err){alert('The form could not be submitted '+err);return false;}" type="submit">
                                                        </span>
                                                        </span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="uk-panel news-sidebar">
                        <h3 class="uk-panel-title">Popular News</h3>
                        @foreach ($popularPosts as $post)
                        <article class="has-context ">
                                <div class="latest-news-wrap">
                                    @if ($post->image_thumb_url)
                                        <div class="img-wrap">
                                            <a href="{{ route('blog.show', $post->slug) }}">
                                            <img src="{{ $post->image_thumb_url }}" class="img-polaroid" alt="{{$post->slug}}">
                                            </a>        
                                        </div>
                                    @endif
                                    
                                    <div class="info">
                                        <div class="date">
                                                {{ $post->date }}            
                                        </div>
                                        <div class="name">
                                            <h4>
                                                <a href="{{ route('blog.show', $post->slug) }}">
                                                        {{ $post->title }}                    </a>        
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </article>
                    @endforeach
                        
                    </div>
                    <div class="uk-panel tags-sidebar">
                        <h3 class="uk-panel-title">Tags</h3>
                        <div class="contentpaneopen">
                            <ul id="tag-list-mod-tagcloud" class="tag_list">
                                @foreach($tags as $tag)
                                    <li class="tag_element" id="tag-9"><a href="{{ route('tag', $tag->slug) }}" rel="nofollow"><span class="tag">{{ $tag->name }}</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                    <div class="uk-panel newsletter-sidebar">
                            

                            <div class="widget">
                                    <div class="widget-heading">
                                        <h3 class="uk-panel-title">Archives</h3>
                                    </div>
                                    <div class="widget-body">
                                        <ul class="categories">
                                            @foreach($archives as $archive)
                                                <li>
                                                    <a href="{{ route('blog', ['month' => $archive->month, 'year' => $archive->year]) }}">{{ month_name($archive->month) . " " . $archive->year }}</a>
                                                    <span class="badge  badge-primary pull-right">{{ $archive->post_count }}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                    </div>
                </aside>

                