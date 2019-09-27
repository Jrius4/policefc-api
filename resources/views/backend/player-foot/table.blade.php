<table class="table table-bordered">
    <thead>
        <tr>
            <td width="80">Action</td>
            <td>Foot Name</td>
            <td>Player</td>
        </tr>
    </thead>
    <tbody>
        @foreach($playerFeet as $foot)

            <tr>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['backend.player-feet.destroy', $foot->id]]) !!}
                        <a href="{{ route('backend.player-feet.edit', $foot->id) }}" class="btn btn-xs btn-default">
                            <i class="fa fa-edit"></i>
                        </a>
                        @if($foot->id == config('cms.default_category_id'))
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
                <td>{{ $foot->name }}</td>
                <td>{{ $foot->players->count() }}</td>
            </tr>

        @endforeach
    </tbody>
</table>
