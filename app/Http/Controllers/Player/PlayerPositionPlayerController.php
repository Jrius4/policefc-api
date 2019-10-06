<?php

namespace App\Http\Controllers\Player;

use App\SoccerModels\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;
use App\SoccerModels\PlayerPosition;
use App\Http\Controllers\Api\ApiController;
use Illuminate\Pagination\LengthAwarePaginator;



class PlayerPositionPlayerController extends ApiController
{
    public function index($id)
    {
        $players=Player::where('player_position_id',$id)->get();


        return $this->showAll($players,200);
    }

    public function show($pid,$id)
    {
        $playerPosition = PlayerPosition::findOrFail($pid);
        $player=Player::where('player_position_id',$pid)->findOrFail($id)->get();

        return response()->json($player,200);
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
