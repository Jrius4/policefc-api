<?php

namespace App\Http\Controllers\Backend\Player;

use App\PlayerCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Backend\BackendController;

class PlayerCategoryController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $playerCategories = PlayerCategory::all();
        $playerCategoryCount = PlayerCategory::count();
        return view("backend.player-category.index",compact('playerCategories','playerCategoryCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PlayerCategory $playerCategory)
    {
        return view("backend.player-category.create",compact('playerCategory'));

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
            'section_name'=>'required',
        ];
        $this->validate($request,$rules);
        $data = $request->all();
        $playerCategory = PlayerCategory::create($data);

        return redirect("/backend/players/player-categories")->with("message", "New player category was created successfully!");



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PlayerCategory  $playerCategory
     * @return \Illuminate\Http\Response
     */
    public function show(PlayerCategory $playerCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PlayerCategory  $playerCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(PlayerCategory $playerCategory)
    {
        return view("backend.player-category.edit", compact('playerCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PlayerCategory  $playerCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlayerCategory $playerCategory)
    {
        $rules = [
            'section_name'=>'required',
        ];
        $this->validate($request,$rules);
        $data = $request->all();
        $playerCategory->update($request->all());
        return redirect("/backend/players/player-categories")->with("message", "player category was updated successfully!");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PlayerCategory  $playerCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlayerCategory $playerCategory)
    {
        $playerCategory->delete();

        return redirect("/backend/players/player-feet")->with("message", "Player Category was deleted successfully!");
    }
}
