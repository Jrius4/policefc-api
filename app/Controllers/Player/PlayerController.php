<?php

namespace App\Http\Controllers\Player;

use App\PlayerCategory;
use App\SoccerModels\Player;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Api\ApiController;

class PlayerController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players=  Player::with('playerFoot','playerPosition','playerCategory','playerSocialMediaLinks')->get();
        $players=$this->paginate($players);
        return response()->json($players,200);
    }

    public function indexCategory()
    {
        $playerCategories=  PlayerCategory::all();
        $playerCategories = collect($playerCategories);
        return response()->json($playerCategories,200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=[
            'profile_pic'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'player_position_id'=>'required',
            'strong_foot_id'=>'required',
            'player_category_id'=>'required',
            'shirt_no'=>'required',
            'age'=>'required',
            'nationality'=>'required',
            'previous_club'=>'required',
            'bio'=>'required',
        ];

        $this->validate($request,$rules);
        $data=$request->all();
        $player=Player::create($data);
        return $this->showOne($player,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $player = Player::findOrFail($id);
         return $this->showOne($player);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    protected function paginate(Collection $collection)
    {
        $page=LengthAwarePaginator::resolveCurrentPage();
        $perPage = 10;
        $results=$collection->slice(($page-1)* $perPage,$perPage)->values();
        $paginated= new LengthAwarePaginator($results,$collection->count(),$perPage,$page,[
            'path'=> LengthAwarePaginator::resolveCurrentPath(),
        ]);

        $paginated->appends(request()->all());

        return $paginated;
    }
}
