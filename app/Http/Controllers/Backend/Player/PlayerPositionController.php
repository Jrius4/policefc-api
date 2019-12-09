<?php

namespace App\Http\Controllers\Backend\Player;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

use App\SoccerModels\PlayerPosition;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Backend\BackendController;

class PlayerPositionController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $playerPositions = PlayerPosition::all();
        $playerPositions = $this->paginate($playerPositions);
        $playerPositionsCount = $playerPositions->count();
        return view("backend.player-positions.index",compact('playerPositions','playerPositionsCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PlayerPosition $playerPosition)
    {
        return view("backend.player-positions.create",compact('playerPosition'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title'=>'required',
            'abbrev'=>'required',
        ];
        $this->validate($request,$rules);
        $data = $request->all();
        $playerPosition = PlayerPosition::create($data);

        return redirect("/backend/players/player-positions")->with("message", "New player position was created successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SoccerModels\PlayerPosition  $playerPosition
     * @return \Illuminate\Http\Response
     */
    public function show(PlayerPosition $playerPosition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SoccerModels\PlayerPosition  $playerPosition
     * @return \Illuminate\Http\Response
     */
    public function edit(PlayerPosition $playerPosition)
    {
        return view("backend.player-positions.edit",compact('playerPosition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SoccerModels\PlayerPosition  $playerPosition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'title'=>'required',
            'abbrev'=>'required',
        ];
        $this->validate($request,$rules);
        $data = $request->all();
        $playerPosition=PlayerPosition::findOrFail($id);
        $playerPosition->update($request->all());
        return redirect("/backend/players/player-positions")->with("message", "player position was updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SoccerModels\PlayerPosition  $playerPosition
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlayerPosition $playerPosition)
    {
        $playerPosition->delete();
        return redirect("/backend/players/player-positions")->with("message", "Player Position was deleted successfully!");

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
