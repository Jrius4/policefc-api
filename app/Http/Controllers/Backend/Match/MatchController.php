<?php

namespace App\Http\Controllers\Backend\Match;

use App\SoccerModels\Team;
use App\SoccerModels\Match;
use Illuminate\Http\Request;

use App\SoccerModels\MatchTeam;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Intervention\Image\Facades\Image;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Backend\BackendController;

class MatchController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matchCounter = Match::all();
        $matches = Match::orderBy('date','asc')->get();
        $matches = $this->paginate($matches);
        $matchCount = $matches->count();

        $team= Team::all();

        return view("backend.matches.index",compact('matches','matchCount','matchCounter','team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Match $match)
    {
        return view("backend.matches.create",compact('match'));
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
            'date'=>'required',
            'venue'=>'required',
            'home_team_id'=>'required',
            'away_team_id'=>'required',
        ];
        $this->validate($request,$rules);
        $data     = $request->all();

        $match=Match::create($data);
        $matchTeam=DB::table('match_team')->insert([
            [
                'match_id'=>Match::orderBy('id', 'desc')->first()->id,
                'team_id'=>$data['home_team_id']
            ],
            [
                'match_id'=>Match::orderBy('id', 'desc')->first()->id,
                'team_id'=>$data['away_team_id']
            ]
        ]);

        return redirect('/backend/matches')->with('message', 'Match was created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SoccerModels\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function show(Match $match)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SoccerModels\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $match = Match::findOrFail($id);
        return view("backend.matches.edit",compact('match'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SoccerModels\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $match     = Match::findOrFail($id);
        $rules=[
            'date'=>'required',
            'venue'=>'required',
            'home_team_id'=>'required',
            'away_team_id'=>'required',
        ];
        $this->validate($request,$rules);
        $data     = $request->all();

        $match->update($data);
        DB::table('match_team')->where('match_id', '=', $id)->delete();
        $matchTeam=DB::table('match_team')->insert([
            [
                'match_id'=>Match::where('id',$id)->first()->id,
                'team_id'=>$data['home_team_id']
            ],
            [
                'match_id'=>Match::where('id',$id)->first()->id,
                'team_id'=>$data['away_team_id']
            ]
        ]);

        return redirect('/backend/matches')->with('message', 'Match was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SoccerModels\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function destroy(Match $match)
    {
        $match->delete();
        return redirect('/backend/matches')->with('message', 'Match was deleted successfully!');

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
