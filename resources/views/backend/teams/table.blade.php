<table class="table table-bordered">
    <thead>
        <tr>
            <td width="80">Action</td>
            <td width="150">Logo</td>
            <td>Name</td>
            <td>Slogan</td>
            <td>Home Stadium</td>
            <td width="80">Number Of Matches</td>
        </tr>
    </thead>
    <tbody>
        <?php $request = request(); ?>

        @foreach($teams as $team)

            <tr>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['backend.teams.destroy', $team->id]]) !!}
                        <a href="{{ route('backend.teams.edit', $team->id) }}" class="btn btn-xs btn-default">
                            <i class="fa fa-edit"></i>
                        </a>
                        @if($team->id == config('cms.default_category_id'))
                            <button onclick="return false" type="submit" class="btn btn-xs btn-danger disabled">
                                <i class="fa fa-times"></i>
                            </button>
                        @else
                            <button onclick="return confirm('Are you sure?');" type="submit" class="btn btn-xs btn-danger disabled">
                                <i class="fa fa-times"></i>
                            </button>
                        @endif
                    {!! Form::close() !!}
                </td>
                <td>
                <img with="50"height="50" src="{{$team->logoUrl}}" alt=""/>
                </td>
                <td>{{ $team->name }}</td>
                <td>{{ $team->slogan }}</td>
                <td>{{ $team->home_stadium }}</td>
                <td>{{ App\SoccerModels\MatchTeam::get()->where('team_id',$team->id)->count() }}</td>
            </tr>

        @endforeach
    </tbody>
</table>
