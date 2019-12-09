@if (! $posts->count())
        <div class="alert alert-warning">
            <p>Nothing Found</p>
        </div>
    @else
    
    @foreach($posts as $post)

        <div class="uk-width-large-1-3 uk-width-medium-2-4 uk-width-small-2-4 list-article uk-flex uk-flex-column">
            <div class="wrapper">
                @if ($post->image_url)
                   <div class="img-wrap uk-flex-wrap-top">
                        <a href="{{ route('eras.show', $post->slug) }}">
                        <img src="{{ $post->image_url }}" class="img-polaroid" alt="">
                        </a>        
                    </div> 
                @endif
                
                <div class="info uk-flex-wrap-middle">
                    <div class="date">
                            {{$post->date}}            
                    </div>
                    <div class="name">
                        <h4>
                            <a href="{{ route('eras.show', $post->slug) }}">
                            {{$post->title}}                 </a>        
                        </h4>
                    </div>
                    <div class="text">
                        <p>{!!$post->excerpt_html!!}</p>
                    </div>
                </div>
            </div>
            <div class="article-actions uk-flex-wrap-bottom">
                <div class="read-more"><a href="{{ route('eras.show', $post->slug) }}">Read More</a></div>
            </div>
        </div>
        
    @endforeach
    
@endif
