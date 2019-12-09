<table class="table table-bordered">
    <thead>
        <tr>
            <td width="80">Action</td>
            <td>Category Name</td>
            <td width="120">Post Count</td>
        </tr>
    </thead>
    <tbody>
        @foreach($social_names as $name)

            <tr>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['backend.social-media-names.destroy', $name->id]]) !!}
                        <a href="{{ route('backend.social-media-names.edit', $name->id) }}" class="btn btn-xs btn-default">
                            <i class="fa fa-edit"></i>
                        </a>
                        @if($name->id == config('cms.default_category_id'))
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
                <td>{{ $name->name }}</td>
            </tr>

        @endforeach
    </tbody>
</table>
