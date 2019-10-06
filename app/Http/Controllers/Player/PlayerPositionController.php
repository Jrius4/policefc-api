<?php

namespace App\Http\Controllers\Player;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SoccerModels\Player;
use App\SoccerModels\PlayerPosition;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;



class PlayerPositionController extends Controller
{
    public function index()
    {
        $playerPosition = PlayerPosition::get();
        // $playerPosition = $this->paginate($playerPosition);


        return response()->json($playerPosition,200);
    }
    public function show($id)
    {
        $playerPosition = PlayerPosition::findOrFail($id);


        return response()->json($playerPosition,200);
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
}
