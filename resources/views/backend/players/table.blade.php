<table class="table table-bordered">
    <thead>
        <tr>
            <td width="80">Action</td>
            <td>Picture</td>
            <td>First Name</td>
            <td width="120">Last Name</td>
            <td width="120">Age</td>
            <td width="80">Shirt Number</td>
            <td width="120">Position</td>
            <td width="80">Team Section</td>
            <td width="150">Nationality</td>
        </tr>
    </thead>
    <tbody>
        <?php $request = request(); ?>

        @foreach($players as $player)

            <tr>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['backend.players.destroy', $player->id]]) !!}
                        <a href="{{ route('backend.players.edit', $player->id) }}" class="btn btn-xs btn-default">
                            <i class="fa fa-edit"></i>
                        </a>
                        {{-- @if($player->id == config('cms.default_category_id'))
                            <button onclick="return false" type="submit" class="btn btn-xs btn-danger disabled">
                                <i class="fa fa-times"></i>
                            </button>
                        @else --}}
                            <button onclick="return confirm('Are you sure?');" type="submit" class="btn btn-xs btn-danger">
                                <i class="fa fa-times"></i>
                            </button>
                        {{-- @endif --}}
                    {!! Form::close() !!}
                </td>
                <td>
                <img with="150"height="150" src="{{$player->profilePicUrl}}" alt=""/>
                </td>
                <td>{{ $player->first_name }}</td>
                <td>{{ $player->last_name }}</td>
                <td>{{ $player->age }}</td>
                <td>{{ $player->shirt_no }}</td>
                <td>{{ $player->playerPosition->title }}</td>
                <td>{{ $player->playerCategory->section_name }}</td>
                <td>{{ $player->nationality}}</td>
            </tr>

        @endforeach
    </tbody>
</table>
