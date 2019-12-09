<?php

namespace App\Http\Controllers\Backend\SupportMember;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\SoccerModels\SupportMember;


use Intervention\Image\Facades\Image;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Backend\BackendController;

class SupportMemberController extends BackendController
{
    protected $uploadPath;

    public function __construct()
    {
        $this->uploadPath = public_path(config('cms.support-team-images.directory'));
    }
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
        $rules = [
            'profile_pic'=>'required',
            'firstname'=>'required',
            'lastname'=>'required',
            'support_member_position_id'=>'required',
            'is_executive'=>'required',
            'bio'=>'required',
        ];

        $this->validate($request,$rules);
        $data = $this->handleRequest($request);
        $member = SupportMember::create($data);

        return redirect("/backend/support-members")->with("message", "New support member was update successfully!");
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
        return view("backend.support-members.edit",compact('supportMember'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SoccerModels\SupportMember  $supportMember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $member     = SupportMember::findOrFail($id);
        $oldImage = $member->profile_pic;
        $data     = $this->handleRequest($request);

        $member->update($data);

        if ($oldImage !== $member->profile_pic) {
            $this->removeImage($oldImage);
        }
        return redirect('/backend/support-members')->with('message', 'member was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SoccerModels\SupportMember  $supportMember
     * @return \Illuminate\Http\Response
     */
    public function destroy(SupportMember $supportMember)
    {
        $supportMember->delete();

        $this->removeImage($supportMember->profile_pic);

        return redirect('/backend/support-members')->with('message', 'Your post has been deleted successfully');
    }

    private function handleRequest($request)
    {
        $data = $request->all();

        if ($request->hasFile('profile_pic'))
        {
            $image       = $request->file('profile_pic');
            $fileName    = $image->getClientOriginalName();
            $destination = $this->uploadPath;

            $successUploaded = $image->move($destination, $fileName);

            if ($successUploaded)
            {
                $width     = config('cms.support-team-images.thumbnail.width');
                $height    = config('cms.support-team-images.thumbnail.height');
                $extension = $image->getClientOriginalExtension();
                $thumbnail = str_replace(".{$extension}", "_thumb.{$extension}", $fileName);

                Image::make($destination . '/' . $fileName)
                    ->resize($width, $height)
                    ->save($destination . '/' . $thumbnail);
            }

            $data['profile_pic'] = $fileName;
        }

        return $data;
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
