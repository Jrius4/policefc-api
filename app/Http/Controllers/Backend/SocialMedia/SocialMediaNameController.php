<?php

namespace App\Http\Controllers\Backend\SocialMedia;

use Illuminate\Http\Request;
use App\SoccerModels\SocialMediaName;
use App\Http\Controllers\Backend\BackendController;

class SocialMediaNameController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $social_names = SocialMediaName::simplepaginate(8);
        return view('backend.social-media-names.index',compact('social_names'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(SocialMediaName $socialMediaName)
    {
        return view('backend.social-media-names.create',compact('socialMediaName'));
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
        $data= $this->validate($request,$rules);
        SocialMediaName::create($data);
        return redirect('/backend/social-media-names')->with("message", "New media name was created successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SoccerModels\SocialMediaName  $socialMediaName
     * @return \Illuminate\Http\Response
     */
    public function show(SocialMediaName $socialMediaName)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SoccerModels\SocialMediaName  $socialMediaName
     * @return \Illuminate\Http\Response
     */
    public function edit(SocialMediaName $socialMediaName)
    {
        return view('backend.social-media-names.edit',compact('socialMediaName'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SoccerModels\SocialMediaName  $socialMediaName
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SocialMediaName $socialMediaName)
    {
        $rules = [
            'name'=>'required',
        ];
        $data= $this->validate($request,$rules);
        $socialMediaName->update($data);
        return redirect('/backend/social-media-names')->with("message", "New media name was update successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SoccerModels\SocialMediaName  $socialMediaName
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocialMediaName $socialMediaName)
    {
        //
    }
}
