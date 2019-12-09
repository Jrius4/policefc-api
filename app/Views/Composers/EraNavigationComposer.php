<?php
namespace App\Views\Composers;

use App\Era;
use App\EraCategory;
use Illuminate\View\View;

class EraNavigationComposer
{
    public function compose(View $view)
    {
        $this->composeCategories($view);
        $this->composeArchives($view);
        $this->composePopularPosts($view);
    }

    private function composeCategories(View $view)
    {
        $categories = EraCategory::with(['eras' => function($query) {
            $query->occured();
        }])->orderBy('title', 'asc')->get();

        $view->with('categories', $categories);
    }


    private function composeArchives(View $view)
    {
        $archives = Era::archives();

        $view->with('archives', $archives);
    }
    private function composePopularPosts(View $view)
    {
        $popularPosts = Era::occured()->take(3)->get();
        $view->with('popularPosts', $popularPosts);
    }

}
