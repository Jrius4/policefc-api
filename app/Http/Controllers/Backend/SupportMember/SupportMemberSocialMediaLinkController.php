<?php

namespace App\Http\Controllers\Backend\SupportMember;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

use App\SoccerModels\SocialMediaName;

use Illuminate\Pagination\LengthAwarePaginator;
use App\SoccerModels\SupportMemberSocialMediaLink;
use App\Http\Controllers\Backend\BackendController;


class SupportMemberSocialMediaLinkController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supportMemberSocialMediaLinkCounter = SupportMemberSocialMediaLink::all();
        $supportMemberSocialMediaLinks = SupportMemberSocialMediaLink::with('supportMember')->latest()->get();
        $supportMemberSocialMediaLinks = $this->paginate($supportMemberSocialMediaLinks);
        $ssm=SocialMediaName::all();
        $supportMemberSocialMediaLinkCount = $supportMemberSocialMediaLinks->count();
        return view("backend.support-member-social-media.index",compact('supportMemberSocialMediaLinks','supportMemberSocialMediaLinkCount','supportMemberSocialMediaLinkCounter','ssm'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(SupportMemberSocialMediaLink $supportMemberSocialMediaLink)
    {
        return view("backend.support-member-social-media.create",compact('supportMemberSocialMediaLink'));

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
            'support_member_id'=>'required',
        ];
        $this->validate($request,$rules);
        $data = $request->all();
        $link = SupportMemberSocialMediaLink::create($data);

        return redirect("backend/support-members/support-member-social-media")->with("message", "new player social was created successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SoccerModels\SupportMemberSocialMediaLink  $supportMemberSocialMediaLink
     * @return \Illuminate\Http\Response
     */
    public function show(SupportMemberSocialMediaLink $supportMemberSocialMediaLink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SoccerModels\SupportMemberSocialMediaLink  $supportMemberSocialMediaLink
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supportMemberSocialMediaLink=SupportMemberSocialMediaLink::findOrFail($id);

        return view("backend.support-member-social-media.edit",compact('supportMemberSocialMediaLink'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SoccerModels\SupportMemberSocialMediaLink  $supportMemberSocialMediaLink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'url'=>'required',
            'media_name'=>'required',
            'support_member_id'=>'required',
        ];
        $this->validate($request,$rules);
        $data = $request->all();
        $supportMemberSocialMediaLink = SupportMemberSocialMediaLink::findOrFail($id);
        $supportMemberSocialMediaLink->update($data);

        return redirect("backend/support-members/support-member-social-media")->with("message", "new player social was updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SoccerModels\SupportMemberSocialMediaLink  $supportMemberSocialMediaLink
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supportMemberSocialMediaLink = SupportMemberSocialMediaLink::findOrFail($id);
        $supportMemberSocialMediaLink->delete($id);
        return redirect("backend/support-members/support-member-social-media")->with("message", "player social was deleted successfully!");
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
