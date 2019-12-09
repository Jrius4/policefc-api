<?php

namespace App\Http\Controllers\Backend\Match;

use App\MatchReport;
use App\SoccerModels\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Intervention\Image\Facades\Image;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Backend\BackendController;


class MatchReportController extends BackendController
{

    protected $uploadPath;

    public function __construct()
    {
        $this->uploadPath = public_path(config('cms.image.directory'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matchReportCounter = MatchReport::all();
        $matchReports = MatchReport::with('match')->latest()->get();
        $matchReports = $this->paginate($matchReports);
        $matchReportsCount = $matchReports->count();
        $teams = Team::get();

        return view("backend.match-reports.index",compact('matchReports','matchReportCounter','matchReportsCount','teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(MatchReport $matchReport)
    {
        return view("backend.match-reports.create",compact('matchReport'));
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
            'image'=>'required',
            'title'=>'required',
            'body'=>'required',
            'match_id'=>'required',
        ];
        $this->validate($request,$rules);
        $data = $this->handleRequest($request);
        $matchReport = MatchReport::create($data);
        return redirect('backend/matches/match-reports')->with('message', 'Match Report was created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MatchReport  $matchReport
     * @return \Illuminate\Http\Response
     */
    public function show(MatchReport $matchReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MatchReport  $matchReport
     * @return \Illuminate\Http\Response
     */
    public function edit(MatchReport $matchReport)
    {
        return view("backend.match-reports.edit",compact('matchReport'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MatchReport  $matchReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $matchReport     = MatchReport::findOrFail($id);

        $oldImage = $matchReport->image;
        $data     = $this->handleRequest($request);

        $matchReport->update($data);

        if ($oldImage !== $matchReport->image) {
            $this->removeImage($oldImage);
        }
        return redirect('/backend/matches/match-reports')->with('message', 'Your report was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MatchReport  $matchReport
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $matchReport     = MatchReport::findOrFail($id);
        $matchReport->delete();
        return redirect('/backend/matches/match-reports');
    }

    private function handleRequest($request)
    {
        $data = $request->all();

        if ($request->hasFile('image'))
        {
            $image       = $request->file('image');
            $fileName    = $image->getClientOriginalName();
            $destination = $this->uploadPath;

            $successUploaded = $image->move($destination, $fileName);

            if ($successUploaded)
            {
                $width     = config('cms.image.thumbnail.width');
                $height    = config('cms.image.thumbnail.height');
                $extension = $image->getClientOriginalExtension();
                $thumbnail = str_replace(".{$extension}", "_thumb.{$extension}", $fileName);

                Image::make($destination . '/' . $fileName)
                    ->resize($width, $height)
                    ->save($destination . '/' . $thumbnail);
            }

            $data['image'] = $fileName;
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
