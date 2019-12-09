<?php

namespace App\Http\Controllers\Backend\Player;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;


use App\SoccerModels\SocialMediaName;
use App\SoccerModels\PlayerSocialMediaLink;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Backend\BackendController;


class PlayerSocialMediaLinkController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $playerSocialMediaLinkCounter = PlayerSocialMediaLink::all();
        $playerSocialMediaLinks = PlayerSocialMediaLink::with('player')->latest()->get();
        $playerSocialMediaLinks = $this->paginate($playerSocialMediaLinks);
        $ssm=SocialMediaName::all();
        $playerSocialMediaLinkCount = $playerSocialMediaLinks->count();
        return view("backend.player-social-link.index",compact('playerSocialMediaLinks','playerSocialMediaLinkCount','playerSocialMediaLinkCounter','ssm'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PlayerSocialMediaLink $playerSocialMediaLink)
    {
        return view("backend.player-social-link.create",compact('playerSocialMediaLink'));
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
            'url'=>'required',
            'media_name'=>'required',
            'player_id'=>'required',
        ];
        $this->validate($request,$rules);
        $data = $request->all();
        $link = PlayerSocialMediaLink::create($data);

        return redirect("/backend/players/player-social-media")->with("message", "new player social was created successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SoccerModels\PlayerSocialMediaLink  $playerSocialMediaLink
     * @return \Illuminate\Http\Response
     */
    public function show(PlayerSocialMediaLink $playerSocialMediaLink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SoccerModels\PlayerSocialMediaLink  $playerSocialMediaLink
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $playerSocialMediaLink=PlayerSocialMediaLink::findOrFail($id);

        return view("backend.player-social-link.edit",compact('playerSocialMediaLink'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SoccerModels\PlayerSocialMediaLink  $playerSocialMediaLink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'url'=>'required',
            'media_name'=>'required',
            'player_id'=>'required',
        ];
        $this->validate($request,$rules);
        $data = $request->all();
        $playerSocialMediaLink = PlayerSocialMediaLink::findOrFail($id);
        $playerSocialMediaLink->update($data);

        return redirect("/backend/players/player-social-media")->with("message", "new player social was updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SoccerModels\PlayerSocialMediaLink  $playerSocialMediaLink
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $playerSocialMediaLink = PlayerSocialMediaLink::findOrFail($id);
        $playerSocialMediaLink->delete($id);
        return redirect("/backend/players/player-social-media")->with("message", "player social was deleted successfully!");
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
