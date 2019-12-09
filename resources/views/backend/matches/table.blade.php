<table class="table table-bordered">
    <thead>
        <tr>
            <td width="80">Action</td>
            <td>Date</td>
            <td width="120">Home Team</td>
            <td width="120">Home Score</td>
            <td width="120">Away Team</td>
            <td width="120">Away Score</td>
            <td width="120">Venue</td>
            <td width="120">Reports</td>
        </tr>
    </thead>
    <tbody>
        @foreach($matches as $match)

            <tr>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['backend.matches.destroy', $match->id]]) !!}
                        <a href="{{ route('backend.matches.edit', $match->id) }}" class="btn btn-xs btn-default">
                            <i class="fa fa-edit"></i>
                        </a>
                        @if($match->id == config('cms.default_match_id'))
                            <button onclick="return false" type="submit" class="btn btn-xs btn-danger disabled">
                                <i class="fa fa-times"></i>
                            </button>
                        @else
                            <button onclick="return confirm('Are you sure?');" type="submit" class="btn btn-xs btn-danger">
                                <i class="fa fa-times"></i>
                            </button>
                        @endif
                    {!! Form::close() !!}
                </td>
                <td>{{ $match->date }}</td>
                <td>{{ App\SoccerModels\Team::all()->where('id',$match->home_team_id)->first()->name}}</td>
                <td>{{ $match->home_team_score }}</td>
                <td>{{ App\SoccerModels\Team::all()->where('id',$match->away_team_id)->first()->name}}</td>
                 <td>{{ $match->away_team_score }}</td>
                 <td>{{ $match->venue }}</td>
                 <td>{{ $match->matchReport !=null? $match->matchReport->title : 'No Report yet'}}</td>
            </tr>

        @endforeach
    </tbody>
</table>
