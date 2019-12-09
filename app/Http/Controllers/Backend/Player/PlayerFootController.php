<?php

namespace App\Http\Controllers\Backend\Player;

use Illuminate\Http\Request;
use App\SoccerModels\PlayerFoot;
use App\Http\Controllers\Backend\BackendController;

class PlayerFootController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $playerFeet = PlayerFoot::all();
        $playerFeetCount = PlayerFoot::count();
        return view("backend.player-foot.index",compact('playerFeet','playerFeetCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PlayerFoot $playerFoot)
    {
        return view("backend.player-foot.create",compact('playerFoot'));
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
            'name'=>'required',
        ];
        $this->validate($request,$rules);
        $data = $request->all();
        $playerFeet = PlayerFoot::create($data);

        return redirect("/backend/players/player-feet")->with("message", "New player foot was created successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SoccerModels\PlayerFoot  $playerFoot
     * @return \Illuminate\Http\Response
     */
    public function show(PlayerFoot $playerFoot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SoccerModels\PlayerFoot  $playerFoot
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $playerFoot = PlayerFoot::findOrFail($id);
        return view("backend.player-foot.edit", compact('playerFoot'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SoccerModels\PlayerFoot  $playerFoot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'name'=>'required',
        ];
        $this->validate($request,$rules);
        $data = $request->all();
        $playerFoot=PlayerFoot::findOrFail($id);
        $playerFoot->update($request->all());

        return redirect("/backend/players/player-feet")->with("message", "New player foot was created successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SoccerModels\PlayerFoot  $playerFoot
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $playerFoot = PlayerFoot::findOrFail($id);
        $playerFoot->delete();

        return redirect("/backend/players/player-feet")->with("message", "delete Feet pyer was deleted successfully!");
    }
}
