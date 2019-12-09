<?php

namespace App\Http\Controllers\Backend\Team;

use App\SoccerModels\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

use Intervention\Image\Facades\Image;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Backend\BackendController;


class TeamController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $uploadPath;

    public function __construct()
    {
        $this->uploadPath = public_path(config('cms.teams.directory'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teamCounter = Team::all();
        $teams = Team::latest()->get();
        $teams = $this->paginate($teams);
        $teamCount = $teams->count();
        return view("backend.teams.index",compact('teams','teamCount','teamCounter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Team $team)
    {
        return view("backend.teams.create",compact('team'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $this->handleRequest($request);
        $team = Team::create($data);

        return redirect("/backend/teams")->with("message", "New team was update successfully!");
    }


    private function handleRequest($request)
    {
        $data = $request->all();

        if ($request->hasFile('logo'))
        {
            $image       = $request->file('logo');
            $fileName    = $image->getClientOriginalName();
            $destination = $this->uploadPath;

            $successUploaded = $image->move($destination, $fileName);

            if ($successUploaded)
            {
                $width     = config('cms.teams.thumbnail.width');
                $height    = config('cms.teams.thumbnail.height');
                $extension = $image->getClientOriginalExtension();
                $thumbnail = str_replace(".{$extension}", "_thumb.{$extension}", $fileName);

                Image::make($destination . '/' . $fileName)
                    ->resize($width, $height)
                    ->save($destination . '/' . $thumbnail);
            }

            $data['logo'] = $fileName;
        }

        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SoccerModels\team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SoccerModels\team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view("backend.teams.edit",compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SoccerModels\team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $team     = Team::findOrFail($id);
        $oldImage = $team->logo;
        $data     = $this->handleRequest($request);

        $team->update($data);

        if ($oldImage !== $team->logo) {
            $this->removeImage($oldImage);
        }
        return redirect('/backend/teams')->with('message', 'Your team was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SoccerModels\team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        // $post = Post::withTrashed()->findOrFail($id);
        $team->delete();

        $this->removeImage($team->logo);

        return redirect('/backend/teams')->with('message', 'Your post has been deleted successfully');
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
