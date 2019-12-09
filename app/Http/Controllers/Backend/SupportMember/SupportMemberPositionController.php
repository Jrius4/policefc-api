<?php

namespace App\Http\Controllers\Backend\SupportMember;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

use App\SoccerModels\SupportMemberPosition;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Backend\BackendController;


class SupportMemberPositionController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supportMemberPositionsCounter = SupportMemberPosition::all();
        $supportMemberPositions = SupportMemberPosition::with('supportMembers')->get();
        $supportMemberPositions = $this->paginate($supportMemberPositions);
        $supportMemberPositionsCount = $supportMemberPositions->count();
        return view("backend.support-member-positions.index",compact('supportMemberPositions','supportMemberPositionsCount','supportMemberPositionsCounter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(SupportMemberPosition $supportMemberPosition)
    {
        return view("backend.support-member-positions.create",compact('supportMemberPosition'));
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
        $playerPosition = SupportMemberPosition::create($data);

        return redirect("/backend/support-members/support-member-positions")->with("message", "New support position was created successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SoccerModels\SupportMemberPosition  $supportMemberPosition
     * @return \Illuminate\Http\Response
     */
    public function show(SupportMemberPosition $supportMemberPosition)
    {
        return view("backend.support-member-positions.edit",compact('supportMemberPosition'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SoccerModels\SupportMemberPosition  $supportMemberPosition
     * @return \Illuminate\Http\Response
     */
    public function edit(SupportMemberPosition $supportMemberPosition)
    {
        return view("backend.support-member-positions.edit",compact('supportMemberPosition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SoccerModels\SupportMemberPosition  $supportMemberPosition
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
        $playerPosition=SupportMemberPosition::findOrFail($id);
        $playerPosition->update($request->all());
        return redirect("/backend/support-members/support-member-positions")->with("message", "support position was updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SoccerModels\SupportMemberPosition  $supportMemberPosition
     * @return \Illuminate\Http\Response
     */
    public function destroy(SupportMemberPosition $supportMemberPosition)
    {
        $supportMemberPosition->delete();
        return redirect("/backend/support-members/support-member-positions")->with("message", "support position was deleted successfully!");
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
