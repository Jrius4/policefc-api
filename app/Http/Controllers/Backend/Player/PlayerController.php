<?php

namespace App\Http\Controllers\Backend\Player;

use App\SoccerModels\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

use Intervention\Image\Facades\Image;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Backend\BackendController;


class PlayerController extends BackendController
{

    protected $uploadPath;

    public function __construct()
    {
        $this->uploadPath = public_path(config('cms.players-images.directory'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $playerCounter = Player::all();
        $players = Player::with('playerPosition','playerCategory','playerFoot')->latest()->get();
        $players = $this->paginate($players);
        $playerCount = $players->count();
        return view("backend.players.index",compact('players','playerCount','playerCounter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Player $player)
    {
        return view("backend.players.create",compact('player'));
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
            'first_name'=>'required',
            'last_name'=>'required',
            'player_position_id'=>'required',
            'player_foot_id'=>'required',
            'player_category_id'=>'required',
            'shirt_no'=>'required',
            'age'=>'required',
            'nationality'=>'required',
            'previous_club'=>'required',
            'bio'=>'required',
        ];

        $this->validate($request,$rules);
        $data = $this->handleRequest($request);
        $player = Player::create($data);

        return redirect("/backend/players")->with("message", "New player was update successfully!");
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\SoccerModels\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SoccerModels\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        return view("backend.players.edit",compact('player'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SoccerModels\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $player     = Player::findOrFail($id);
        $oldImage = $player->profile_pic;
        $data     = $this->handleRequest($request);

        $player->update($data);

        if ($oldImage !== $player->profile_pic) {
            $this->removeImage($oldImage);
        }
        return redirect('/backend/players')->with('message', 'Your player was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SoccerModels\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        // $post = Post::withTrashed()->findOrFail($id);
        $player->delete();

        $this->removeImage($player->profile_pic);

        return redirect('/backend/players')->with('message', 'Your post has been deleted successfully');
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
                $width     = config('cms.players-images.thumbnail.width');
                $height    = config('cms.players-images.thumbnail.height');
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
}
