<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Post;
use App\User;
use App\Category;
use App\MatchReport;
use App\Http\Requests;
use App\SoccerModels\Team;
use App\SoccerModels\Match;
use App\SoccerModels\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\SoccerModels\SupportMember;
use Illuminate\Pagination\LengthAwarePaginator;

class BlogController extends Controller
{
    protected $limit = 10;
    protected $limitHome = 5;

    public function landingPage()
    {
        $posts = Post::with('author', 'tags', 'category', 'comments')
                    ->latestFirst()
                    ->published()
                    ->orderBy('published_at','desc')
                    ->filter(request()->only(['term', 'year', 'month']))
                    ->simplePaginate($this->limitHome);

        $news = Post::with('author', 'tags', 'category', 'comments')
                        ->latestFirst()
                        ->published()
                        ->filter(request()->only(['term', 'year', 'month']))
                        ->simplePaginate(2);
        $allmatches = Match::with('teams','matchReport')->orderby('date','asc')->get();
        $matches = Match::with('teams','matchReport')->orderby('date','asc')->simplePaginate(10);
        $unplayed_matches = Match::with('teams','matchReport')->where(['home_team_score'=>null,'away_team_score'=>null])->orderby('date','asc')->simplePaginate(10);
        $matchReportCounter = MatchReport::all();
        $matchReports = MatchReport::with('match')->latest()->get();
        $matchReports = $this->paginate($matchReports);
        $matchReportsCount = $matchReports->count();
        $teams = Team::get();
        $players = Player::with('playerSocialMediaLinks','playerFoot','playerPosition','playerCategory')->simplePaginate(10);

        $support_members = SupportMember::get();
            
        return view("platform.home.index", compact('news','posts','matchReports','matchReportCounter','matchReportsCount','teams','matches','unplayed_matches','allmatches','support_members','players'));
    }

    public function createValue()
    {
        $title = '<h4>How <span>NDEBI <img src="/img/ndebi-favi.png" alt="" width="25px" height="25px"/> TECH</span> <span></span> creates value for its clients</h4>';
        

        return view("blog.create-value", compact('title'));
    }
    public function howWeWork()
    {
        $title = '<h4>How <span>NDEBI <img src="/img/ndebi-favi.png" alt="" width="25px" height="25px"/> TECH</span> <span></span> Works</h4>';
        

        return view("blog.how-we-work", compact('title'));
    }
    public function services()
    {
        $title = '<h4><span>NDEBI <img src="/img/ndebi-favi.png" alt="" width="25px" height="25px"/> TECH</span> <span></span> services</h4>';
        

        return view("blog.services", compact('title'));
    }
    public function about()
    {
        $title = '<h4>about us</h4>';
       
        return view("blog.about",compact('title'));
    }
    public function contactUs()
    {
        $title = '<h4>contact us</h4>';

        
        return view("blog.contactUs",compact('title'));
    }

    public function index()
    {
        $title='<h4><span>Police FC</span> <span></span> Blog</h4>';
        $posts = Post::with('author', 'tags', 'category', 'comments')
                    ->latestFirst()
                    ->published()
                    ->filter(request()->only(['term', 'year', 'month']))
                    ->simplePaginate($this->limit);

        return view("platform.article.index", compact('posts','title'));
    }

    public function category(Category $category)
    {
        $title = '';
        $categoryName = $category->title;

        $posts = $category->posts()
                          ->with('author', 'tags', 'comments')
                          ->latestFirst()
                          ->published()
                          ->simplePaginate($this->limit);
         return view("platform.article.index", compact('posts', 'categoryName','title'));
    }

    public function tag(Tag $tag)
    {
        $title = $tag->title;
        $tagName = $tag->title;
        $posts = $tag->posts()
                          ->with('author', 'category', 'comments')
                          ->latestFirst()
                          ->published()
                          ->simplePaginate($this->limit);
         return view("platform.article.index", compact('posts', 'tagName','title'));
    }

    public function author(User $author)
    {
        $title = $author->name;
        $authorName = $author->name;
        $posts = $author->posts()
                          ->with('category', 'tags', 'comments')
                          ->latestFirst()
                          ->published()
                          ->simplePaginate($this->limit);
         return view("platform.article.index", compact('posts', 'authorName','title'));
    }

    public function show(Post $post)
    {
        $title='';
        $post->increment('view_count');
        $postComments = $post->comments()->orderby('created_at','desc')->simplePaginate(3);
        return view("platform.article.show", compact('post', 'postComments', 'title'));
    }

    protected function paginate(Collection $collection)
    {
        $page=LengthAwarePaginator::resolveCurrentPage();
        $perPage = 5;
        $results=$collection->slice(($page-1)* $perPage,$perPage)->values();
        $paginated= new LengthAwarePaginator($results,$collection->count(),$perPage,$page,[
            'path'=> LengthAwarePaginator::resolveCurrentPath(),
        ]);

        $paginated->appends(request()->all());

        return $paginated;
    }
    protected function getDateAttribute($value)
    {
        return is_null($this->occurance_date) ? '' : $this->occurance_date->diffForHumans();
    }
}
