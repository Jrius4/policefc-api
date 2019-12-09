<?php

namespace App\Http\Controllers\Backend\Era;

use App\Era;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\EraRequest;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Backend\BackendController;

class EraController extends BackendController
{
    protected $uploadPath;

    public function __construct()
    {
        parent::__construct();
        $this->uploadPath = public_path(config('cms.era-image.directory'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $onlyTrashed = FALSE;

        if (($status = $request->get('status')) && $status == 'trash')
        {
            $eras       = Era::onlyTrashed()->with('eraCategory')->latest()->paginate($this->limit);
            $eraCount   = Era::onlyTrashed()->count();
            $onlyTrashed = TRUE;
        }
        elseif ($status == 'occured')
        {
            $eras       = Era::occured()->with('eraCategory')->latest()->paginate($this->limit);
            $eraCount   = Era::occured()->count();
        }
        elseif ($status == 'scheduled')
        {
            $eras       = Era::scheduled()->with('eraCategory')->latest()->paginate($this->limit);
            $eraCount   = Era::scheduled()->count();
        }
        elseif ($status == 'draft')
        {
            $eras       = Era::draft()->with('eraCategory')->latest()->paginate($this->limit);
            $eraCount   = Era::draft()->count();
        }
        
        else
        {
            $eras       = Era::with('eraCategory')->latest()->paginate($this->limit);
            $eraCount   = Era::count();
        }

        $statusList = $this->statusList($request);

        return view("backend.eras.index", compact('eras', 'eraCount', 'onlyTrashed', 'statusList'));
    }

    private function statusList($request)
    {
        return [
            'all'       => Era::count(),
            'occured' => Era::occured()->count(),
            'scheduled' => Era::scheduled()->count(),
            'draft'     => Era::draft()->count(),
            'trash'     => Era::onlyTrashed()->count(),
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Era $era)
    {
        return view('backend.eras.create', compact('era'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\EraRequest $request)
    {
        $data = $this->handleRequest($request);

        $newPost = $request->create($data);
        
        

        return redirect('/backend/eras')->with('message', 'Your post was created successfully!');
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
                $width     = config('cms.era-image.thumbnail.width');
                $height    = config('cms.era-image.thumbnail.height');
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $era = Era::findOrFail($id);
        return view("backend.eras.edit", compact('era'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\EraRequest $request, $id)
    {
        $era     = Era::findOrFail($id);
        $oldImage = $era->image;
        $data     = $this->handleRequest($request);

        $era->update($data);
        $era->createTags($data['era_tags']);

        if ($oldImage !== $era->image) {
            $this->removeImage($oldImage);
        }
        return redirect('/backend/eras')->with('message', 'Your post was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Era::findOrFail($id)->delete();

        return redirect('/backend/eras')->with('trash-message', ['Your post moved to Trash', $id]);
    }

    public function forceDestroy($id)
    {
        $era = Era::withTrashed()->findOrFail($id);
        $era->forceDelete();

        $this->removeImage($era->image);

        return redirect('/backend/eras?status=trash')->with('message', 'Your post has been deleted successfully');
    }

    public function restore($id)
    {
        $era = Era::withTrashed()->findOrFail($id);
        $era->restore();

        return redirect()->back()->with('message', 'You post has been moved from the Trash');
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
