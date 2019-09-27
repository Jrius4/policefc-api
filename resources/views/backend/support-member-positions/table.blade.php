<table class="table table-bordered">
    <thead>
        <tr>
            <td width="80">Action</td>
            <td>Position Name</td>
            <td>Position Abbrev</td>
        </tr>
    </thead>
    <tbody>
        @foreach($supportMemberPositions as $position)

            <tr>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['backend.support-member-positions.destroy', $position->id]]) !!}
                        <a href="{{ route('backend.support-member-positions.edit', $position->id) }}" class="btn btn-xs btn-default">
                            <i class="fa fa-edit"></i>
                        </a>
                        {{-- @if($position->id == config('cms.default_category_id'))
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
                <td>{{ $position->title }}</td>
                <td>{{ $position->abbrev }}</td>
                <td>{{ $position->supportMembers->count() }}</td>
            </tr>

        @endforeach
    </tbody>
</table>
