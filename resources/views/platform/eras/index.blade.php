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
                                <h1>
                                    
                                    @if (isset($categoryName) || isset($term) )
                                       @include('blog.alert')
                                    @else
                                     Era 
                                    @endif
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


    <div class="uk-container uk-container-center alt">
        <ul class="uk-breadcrumb">
            <li><a href="/">Home</a></li>
            @if (isset($categoryName) || isset($term) )
                <li><a href="/eras">Eras</a></li>
                <li class="uk-active"><span>@include('blog.alert')</span></li>
            @else
                <li class="uk-active"><span>Eras</span></li>
            @endif
            
        </ul>
    </div>

    

    <div class="uk-container uk-container-center">
            <div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
                <div class="tm-main uk-width-medium-3-4 uk-push-1-4">
                   
                    <div class="contentpaneopen">
                       <main id="tm-content" class="tm-content">
                            <div class="head-title">
                                    @include('blog.alert')
                            </div>
                            <div class="uk-grid" data-uk-grid-match="">
                                    @include('layouts.home.inc.eras')
                            </div>

                        <nav>
                            {{ $posts->appends(request()->only(['term', 'month', 'year']))->links() }}
                        </nav>
                       </main>
                    </div>
                </div>

                @include('layouts.home.inc.eras-sidebar')

            </div>
    </div>




@endsection