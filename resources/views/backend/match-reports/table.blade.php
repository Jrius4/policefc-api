<table class="table table-bordered">
    <thead>
        <tr>
            <td width="80">Action</td>
            <td>Title</td>
            <td>Match vDate</td>
            <td>Home Team</td>
            <td>Away Team</td>
        </tr>
    </thead>
    <tbody>
        @foreach($matchReports as $report)

            <tr>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['backend.match-reports.destroy', $report->id]]) !!}
                        <a href="{{ route('backend.match-reports.edit', $report->id) }}" class="btn btn-xs btn-default">
                            <i class="fa fa-edit"></i>
                        </a>
                        
                            <button onclick="return confirm('Are you sure?');" type="submit" class="btn btn-xs btn-danger">
                                <i class="fa fa-times"></i>
                            </button>
        
                    {!! Form::close() !!}
                </td>
                <td>{{ $report->title }}</td>
                <td>{{$report->match->date}}</td>
                <td>{{$teams->where('id',$report->match->home_team_id)->first()->name}}</td>
                <td>{{$teams->where('id',$report->match->away_team_id)->first()->name}}</td>
            </tr>

        @endforeach
    </tbody>
</table>
