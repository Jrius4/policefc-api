<?php

namespace App\Http\Controllers\ServerRender\Era;

use App\Era;
use App\Category;
use App\EraCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class EraController extends Controller
{
    protected $limit = 10;
    protected $limitHome = 5;


    public function index()
    {
        $posts = Era::with('eraCategory')
                    ->latestFirst()
                    ->occured()
                    ->filter(request()->only(['term', 'year', 'month']))
                    ->simplePaginate($this->limit);

        return view("platform.eras.index", compact('posts'));
    }

    public function category(EraCategory $category)
    {
   
        $categoryName = $category->title;

        $posts = $category->eras()
                          ->latestFirst()
                          ->occured()
                          ->simplePaginate($this->limit);
         return view("platform.eras.index", compact('posts', 'categoryName'));
    }

    public function show(Era $era)
    {
        return view("platform.eras.show", compact('era'));
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
