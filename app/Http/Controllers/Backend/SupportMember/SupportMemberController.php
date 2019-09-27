<?php

namespace App\Http\Controllers\Backend\SupportMember;

use App\SoccerModels\SupportMember;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class SupportMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supportMembersCounter = SupportMember::all();
        $supportMembers = SupportMember::with('supportMemberPosition')->latest()->get();
        $supportMembers = $this->paginate($supportMembers);
        $supportMembersCount = $supportMembers->count();
        return view("backend.support-members.index",compact('supportMembers','supportMembersCount','supportMembersCounter'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(SupportMember $supportMember)
    {
        return view("backend.support-members.create",compact('supportMember'));  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SoccerModels\SupportMember  $supportMember
     * @return \Illuminate\Http\Response
     */
    public function show(SupportMember $supportMember)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SoccerModels\SupportMember  $supportMember
     * @return \Illuminate\Http\Response
     */
    public function edit(SupportMember $supportMember)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SoccerModels\SupportMember  $supportMember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SupportMember $supportMember)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SoccerModels\SupportMember  $supportMember
     * @return \Illuminate\Http\Response
     */
    public function destroy(SupportMember $supportMember)
    {
        //
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

    private function removeImage($image)
    {
        if ( ! empty($image) )
        {
            $imagePath     = $this->uploadPath . '/' . $image;
            $ext           = substr(strrchr($image, '.'), 1);
            $thumbnail     = str_replace(".{$ext}", "_thumb.{$ext}", $image);
            $thumbnailPath = $this->uploadPath . '/' . $thumbnail;

            if ( file_exists($imagePath) ) unlink($imagePath);
            if ( file_exists($thumbnailPath) ) unlink($thumbnailPath);
        }
    }
}
