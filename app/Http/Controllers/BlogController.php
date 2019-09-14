<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use App\Category;
use App\User;
use App\Tag;

class BlogController extends Controller
{
    protected $limit = 3;
    protected $limitHone = 2;

    public function landingPage()
    {
        $title = 'title';
        
        $posts = Post::with('author', 'tags', 'category', 'comments')
                    ->latestFirst()
                    ->published()
                    ->filter(request()->only(['term', 'year', 'month']))
                    ->simplePaginate($this->limitHone);

        return view("blog.landing-page", compact('posts','title'));
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
        $title='<h4><span>NDEBI <img src="/img/ndebi-favi.png" alt="" width="25px" height="25px"/> TECH</span> <span></span> Blog</h4>';
        $posts = Post::with('author', 'tags', 'category', 'comments')
                    ->latestFirst()
                    ->published()
                    ->filter(request()->only(['term', 'year', 'month']))
                    ->simplePaginate($this->limit);

        return view("blog.index", compact('posts','title'));
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

         return view("blog.index", compact('posts', 'categoryName','title'));
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

         return view("blog.index", compact('posts', 'tagName','title'));
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

         return view("blog.index", compact('posts', 'authorName','title'));
    }

    public function show(Post $post)
    {
        $title='';
        $post->increment('view_count');

        $postComments = $post->comments()->simplePaginate(3);

        return view("blog.show", compact('post', 'postComments', 'title'));
    }
}
