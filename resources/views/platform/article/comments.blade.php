
                            
                            <div id="comments-wrap">
                                    <div id="jc">
                                        <div id="comments">
                                            <h3>Comments <span>{{ $post->commentsNumber('Comment') }}</span></h3>
                                            <div class="comments-list" id="comments-list-0">
                                                @foreach ($postComments as $comment)


                                                    <div class="even" id="comment-item-12">
                                                        <div class="rbox">
                                                            <div class="comment-box">
                                                                <a class="comment-anchor" href="#comment-14" id="comment-14">#</a>
                                                                <span class="comment-author">{{ $comment->author_name }}</span>
                                                                <span class="comment-date">{{ $comment->date }}</span>
                                                                <div class="comment-body" id="comment-body-14">{!! $comment->body_html !!}</div>
                                                                
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>
                                                    </div>


                                                @endforeach
                                                <nav>
                                                    {!! $postComments->links() !!}
                                                </nav>
                                            </div>
                                            <div id="comments-list-footer"><a class="refresh" href="#" title="Refresh comments list" onclick="jcomments.showPage(30,'com_cobalt',0);return false;">Refresh comments list</a></div>
                                        </div>
                                        <h3 class="title-bottom">Leave a <span>comment</span></h3>
                                        @if(session('message'))
                                            <div class="alert alert-info">
                                                {{ session('message') }}
                                            </div>
                                        @endif
                                        <a id="addcomments" href="#addcomments"></a>
                                        {{-- <form id="comments-form" name="comments-form" action="javascript:void(null);"> --}}
                                                {!! Form::open(['route' => ['blog.comments', $post->slug],'id'=>'comments-form','name'=>'comments-form']) !!}
                                            <div class="uk-grid">
                                                <div class="uk-width-1-2 uk-panel">
                                                    <p class="{{ $errors->has('author_name') ? 'has-error text-danger' : '' }}">
                                                        <span>
                                                        {!! Form::text('author_name', null, ['id' => 'comments-form-name','placeholder'=>'* Name','maxlength'=>'20','size'=>'22','tabindex'=>'1']) !!}
                                                            @if($errors->has('author_name'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('author_name') }}</strong>
                                                                </span>
                                                            @endif
                                                        </span>
                                                    </p>
                                                    <p class="{{ $errors->has('author_email') ? 'has-error text-danger' : '' }}">
                                                        <span>
                                                        {!! Form::text('author_email', null, ['id' => 'comments-form-email','placeholder'=>'Email','size'=>'22','tabindex'=>'2']) !!}
                                                            @if($errors->has('author_email'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('author_email') }}</strong>
                                                                </span>
                                                            @endif
                                                        </span>
                                                    </p>
                                                    <p class="{{ $errors->has('author_url') ? 'has-error text-danger' : '' }}">
                                                        <span>
                                                        {!! Form::text('author_url', null, ['id' => 'comments-form-homepage','placeholder'=>'Website','size'=>'22','tabindex'=>'3']) !!}
                                                            @if($errors->has('author_url'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('author_url') }}</strong>
                                                                </span>
                                                            @endif
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="uk-width-1-2 uk-panel uk-flex uk-flex-column">
                                                    <div class="textarea-wrap {{ $errors->has('body') ? 'has-error text-danger' : '' }}">
                                                        {{-- <textarea id="comments-form-comment" placeholder="Message" name="comment" tabindex="5"></textarea> --}}
                                                        {!! Form::textarea('body', null, ['id' => 'comments-form-comment','placeholder'=>'* Comment','tabindex'=>'5','row'=>6]) !!}
                                                            @if($errors->has('body'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('body') }}</strong>
                                                                </span>
                                                            @endif                                                      
                                                        <div class="grippie"></div>
                                                        <div id="comments-form-buttons">
                                                            <div class="btn" id="comments-form-send">
                                                                <div><a><button type="submit" class="btn btn-lg bg-transparent stretched-link btn-ligth">Submit</button></a></div>
                                                            </div>
                                                
                                                            <div class="btn" id="comments-form-cancel" style="display:none;">
                                                                <div><a href="#" tabindex="8" onclick="return false;" title="Cancel">Cancel</a></div>
                                                            </div>
                                                            <div style="clear:both;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <input name="object_id" value="30" type="hidden">
                                                <input name="object_group" value="com_cobalt" type="hidden">
                                            </div>

                                            <div class="ml-auto">
                                                    <p class="text-muted">
                                                        <span class="required">*</span>
                                                        <em>Indicates required fields</em>
                                                    </p>
                                                </div>
                                                <div class=ml-auto">
                                                        <button type="submit" class="btn btn-lg btn-success">Submit</button>
                                                    </div>
                                        {!! Form::close() !!}
                                        {{-- <script type="text/javascript">
                                            
                                                function JCommentsInitializeForm()
                                                {
                                                    var jcEditor = new JCommentsEditor('comments-form-comment', true);
                                                    jcomments.setForm(new JCommentsForm('comments-form', jcEditor));
                                                }
                                                
                                                if (window.addEventListener) {window.addEventListener('load',JCommentsInitializeForm,false);}
                                                else if (document.addEventListener){document.addEventListener('load',JCommentsInitializeForm,false);}
                                                else if (window.attachEvent){window.attachEvent('onload',JCommentsInitializeForm);}
                                                else {if (typeof window.onload=='function'){var oldload=window.onload;window.onload=function(){oldload();JCommentsInitializeForm();}} else window.onload=JCommentsInitializeForm;} 
                                                
                                        </script>
                                        <script type="text/javascript">
                                          
                                                jcomments.setAntiCache(1,0,0);
                                               
                                        </script>  --}}
                                    </div>
                                </div>
    
                